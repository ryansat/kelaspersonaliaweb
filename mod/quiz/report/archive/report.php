<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * This file defines the quiz archive report class.
 *
 * @package   quiz_archive
 * @copyright 2018 Luca Bösch <luca.boesch@bfh.ch>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot . '/mod/quiz/report/attemptsreport.php');
require_once($CFG->dirroot . '/mod/quiz/report/reportlib.php');
require_once($CFG->dirroot . '/mod/quiz/locallib.php');
require_once($CFG->dirroot . '/mod/quiz/attemptlib.php');
require_once($CFG->libdir . '/pagelib.php');

/**
 * Quiz report subclass for the archive report.
 *
 * This report lists some combination of
 *  * what question each student saw (this makes sense if random questions were used).
 *  * the response they gave.
 *
 * @package   quiz_archive
 * @copyright 2018 Luca Bösch <luca.boesch@bfh.ch>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class quiz_archive_report extends quiz_default_report {
    /** @var object the questions that comprise this quiz.. */
    protected $questions;
    /** @var object course module object. */
    protected $cm;
    /** @var object the quiz settings object. */
    protected $quiz;
    /** @var context the quiz context. */
    protected $context;
    /** @var students the students having attempted the quiz. */
    protected $students;

    /**
     * Display the report.
     *
     * @param object $quiz this quiz.
     * @param object $cm the course-module for this quiz.
     * @param object $course the course we are in.
     * @return bool
     * @throws moodle_exception
     */
    public function display($quiz, $cm, $course) {
        global $PAGE;

        $this->quiz = $quiz;
        $this->cm = $cm;
        $this->course = $course;

        // Get the URL options.
        $slot = optional_param('slot', null, PARAM_INT);
        $questionid = optional_param('qid', null, PARAM_INT);
        $grade = optional_param('grade', null, PARAM_ALPHA);

        if (!in_array($grade, array('all', 'needsgrading', 'autograded', 'manuallygraded'))) {
            $grade = null;
        }
        $page = optional_param('page', 0, PARAM_INT);

        // Check permissions.
        $this->context = context_module::instance($cm->id);
        require_capability('mod/quiz:grade', $this->context);
        $shownames = has_capability('quiz/grading:viewstudentnames', $this->context);
        $showidnumbers = has_capability('quiz/grading:viewidnumber', $this->context);

        // Get the list of questions in this quiz.
        $this->questions = quiz_report_get_significant_questions($quiz);
        if ($slot && !array_key_exists($slot, $this->questions)) {
            throw new moodle_exception('unknownquestion', 'quiz_archive');
        }

        $hasquestions = quiz_has_questions($quiz->id);

        // Start output.
        $this->print_header_and_tabs($cm, $course, $quiz, 'archive');

        // What sort of page to display?
        if (!$hasquestions) {
            echo quiz_no_questions_message($quiz, $cm, $this->context);
        } else {
            $this->display_archive();
        }
        return true;
    }

    /**
     * Get the URL of the front page of the report that lists all the questions.
     * @return string the URL.
     */
    protected function base_url() {
        return new moodle_url('/mod/quiz/report.php',
            array('id' => $this->cm->id, 'mode' => 'archive'));
    }

    /**
     * Display all attempts.
     */
    protected function display_archive() {
        global $OUTPUT, $PAGE;
        $studentattempts = $this->quizreportgetstudentandattempts($this->quiz);
        foreach ($studentattempts as $studentattempt) {
            echo $this->quiz_report_get_student_attempt($studentattempt['attemptid'], $studentattempt['userid']);
        }
    }

    /**
     * Get the ids of students in this quiz, in order.
     * @param object $quiz the quiz.
     * @return array of stdClass objects with fields
     *         ->userid, ->attemptid.
     */
    protected function quizreportgetstudentandattempts($quiz) {
        global $DB;

        // Construct the SQL.
        $sql = "SELECT DISTINCT u.id userid, u.firstname, u.lastname, quiza.id attemptid FROM {user} u " .
            "LEFT JOIN {quiz_attempts} quiza " .
            "ON quiza.userid = u.id WHERE quiza.quiz = :quizid ORDER BY u.lastname ASC, u.firstname ASC";
        $params = array('quizid' => $this->quiz->id);
        $results = $DB->get_records_sql($sql, $params);
        $students = array();
        foreach ($results as $result) {
            array_push($students, array('userid' => $result->userid, 'attemptid' => $result->attemptid));
        }
        return $students;
    }

    /**
     * Get the attempts of a students in this quiz.
     * @param int $attemptid the attempt id.
     * @param int $userid the user id.
     */
    protected function quiz_report_get_student_attempt($attemptid, $userid) {
        global $DB, $PAGE;
        $attemptobj = quiz_create_attempt_handling_errors($attemptid, $this->cm->id);

        // Summary table start.
        // ============================================================================.

        // Work out some time-related things.
        $attempt = $attemptobj->get_attempt();
        $quiz = $attemptobj->get_quiz();
        $options = mod_quiz_display_options::make_from_quiz($this->quiz, quiz_attempt_state($quiz, $attempt));
        $options->flags = quiz_get_flag_option($attempt, context_module::instance($this->cm->id));
        $overtime = 0;

        if ($attempt->state == quiz_attempt::FINISHED) {
            if ($timetaken = ($attempt->timefinish - $attempt->timestart)) {
                if ($quiz->timelimit && $timetaken > ($quiz->timelimit + 60)) {
                    $overtime = $timetaken - $quiz->timelimit;
                    $overtime = format_time($overtime);
                }
                $timetaken = format_time($timetaken);
            } else {
                $timetaken = "-";
            }
        } else {
            $timetaken = get_string('unfinished', 'quiz');
        }

        // Prepare summary information about the whole attempt.
        $summarydata = array();
        // We want the user information no matter what.
        $student = $DB->get_record('user', array('id' => $attemptobj->get_userid()));
        $userpicture = new user_picture($student);
        $userpicture->courseid = $attemptobj->get_courseid();
        $summarydata['user'] = array(
            'title'   => $userpicture,
            'content' => new action_link(new moodle_url('/user/view.php', array(
                'id' => $student->id, 'course' => $attemptobj->get_courseid())),
                fullname($student, true)),
        );

        // Timing information.
        $summarydata['startedon'] = array(
            'title'   => get_string('startedon', 'quiz'),
            'content' => userdate($attempt->timestart),
        );

        $summarydata['state'] = array(
            'title'   => get_string('attemptstate', 'quiz'),
            'content' => quiz_attempt::state_name($attempt->state),
        );

        if ($attempt->state == quiz_attempt::FINISHED) {
            $summarydata['completedon'] = array(
                'title'   => get_string('completedon', 'quiz'),
                'content' => userdate($attempt->timefinish),
            );
            $summarydata['timetaken'] = array(
                'title'   => get_string('timetaken', 'quiz'),
                'content' => $timetaken,
            );
        }

        if (!empty($overtime)) {
            $summarydata['overdue'] = array(
                'title'   => get_string('overdue', 'quiz'),
                'content' => $overtime,
            );
        }

        // Show marks (if the user is allowed to see marks at the moment).
        $grade = quiz_rescale_grade($attempt->sumgrades, $quiz, false);
        if ($options->marks >= question_display_options::MARK_AND_MAX && quiz_has_grades($quiz)) {

            if ($attempt->state != quiz_attempt::FINISHED) {
                // Cannot display grade.
                echo '';
            } else if (is_null($grade)) {
                $summarydata['grade'] = array(
                    'title'   => get_string('grade', 'quiz'),
                    'content' => quiz_format_grade($quiz, $grade),
                );

            } else {
                // Show raw marks only if they are different from the grade (like on the view page).
                if ($quiz->grade != $quiz->sumgrades) {
                    $a = new stdClass();
                    $a->grade = quiz_format_grade($quiz, $attempt->sumgrades);
                    $a->maxgrade = quiz_format_grade($quiz, $quiz->sumgrades);
                    $summarydata['marks'] = array(
                        'title'   => get_string('marks', 'quiz'),
                        'content' => get_string('outofshort', 'quiz', $a),
                    );
                }

                // Now the scaled grade.
                $a = new stdClass();
                $a->grade = html_writer::tag('b', quiz_format_grade($quiz, $grade));
                $a->maxgrade = quiz_format_grade($quiz, $quiz->grade);
                if ($quiz->grade != 100) {
                    $a->percent = html_writer::tag('b', format_float(
                        $attempt->sumgrades * 100 / $quiz->sumgrades, 0));
                    $formattedgrade = get_string('outofpercent', 'quiz', $a);
                } else {
                    $formattedgrade = get_string('outof', 'quiz', $a);
                }
                $summarydata['grade'] = array(
                    'title'   => get_string('grade', 'quiz'),
                    'content' => $formattedgrade,
                );
            }
        }

        // Any additional summary data from the behaviour.
        $summarydata = array_merge($summarydata, $attemptobj->get_additional_summary_data($options));

        // Feedback if there is any, and the user is allowed to see it now.
        $feedback = $attemptobj->get_overall_feedback($grade);
        if ($options->overallfeedback && $feedback) {
            $summarydata['feedback'] = array(
                'title' => get_string('feedback', 'quiz'),
                'content' => $feedback,
            );
        }

        // Summary table end.
        // ==============================================================================.

        $slots = $attemptobj->get_slots();

        $renderer = $PAGE->get_renderer('mod_quiz');
        $string = '';
        $string .= $renderer->review_summary_table($summarydata, 0);

        // Display the questions. The overall goal is to have question_display_options from question/engine/lib.php
        // set so they would show what we wand and not show what we don't want.

        // Here we would call questions function on the renderer from mod/quiz/renderer.php but instead we do this
        // manually.
        foreach ($slots as $slot) {
            // Here we would call render_question_helper function on the quiz_attempt from mod/quiz/renderer.php but
            // instead we do this manually.

            $originalslot = $attemptobj->get_original_slot($slot);
            $number = $attemptobj->get_question_number($originalslot);
            $displayoptions = $attemptobj->get_display_options_with_edit_link(true, $slot, "");
            $displayoptions->marks = 2;
            $displayoptions->manualcomment = 1;
            $displayoptions->feedback = 1;
            $displayoptions->history = true;
            $displayoptions->correctness = 1;
            $displayoptions->numpartscorrect = 1;
            $displayoptions->flags = 1;
            $displayoptions->manualcommentlink = 0;

            if ($slot != $originalslot) {
                $attemptobj->get_question_attempt($slot)->set_max_mark(
                    $attemptobj->get_question_attempt($originalslot)->get_max_mark());
            }
            $quba = question_engine::load_questions_usage_by_activity($attemptobj->get_uniqueid());
            $string .= $quba->render_question($slot, $displayoptions, $number);

        }

        return $string;
    }
}
