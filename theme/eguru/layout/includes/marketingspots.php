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
 * The maintenance layout.
 *
 * @package   theme_eguru
 * @copyright 2015 LMSACE Dev Team,lmsace.com
 * @author    LMSACE Dev Team
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * eguru_marketingSpot
 *
 * return string $content
 */

defined('MOODLE_INTERNAL') || die();

/**
 * marketingspot
 * @return string
 */
function eguru_marketingspot() {

    global $PAGE;

    $content = html_writer::start_tag('div', array('class' => 'custom-site-expo'));
    $content .= html_writer::start_tag('div', array('class' => 'container'));
    $content .= html_writer::start_tag('div', array('class' => 'row'));

    (int) $msp = 0;

    for ($i = 1; $i <= 4; $i++) {
        $mspicon = theme_eguru_get_setting('mspot'.$i.'icon');
        $msptitle = theme_eguru_get_setting('mspot'.$i.'title');
        $mspdescription = theme_eguru_get_setting('mspot'.$i.'desc');

        if (!empty($mspicon) || !empty($msptitle) || !empty($mspdescription)) {
            $msp = $msp + 1;
        }
    }

    switch ($msp) {
        case 4:
            $class = 'col-md-3';
            break;
        case 3:
            $class = 'col-md-4';
            break;
        case 2:
            $class = 'col-md-6';
            break;
        case 1:
            $class = 'col-md-12';
            break;
        case 0:
            $class = 'col-md-0';
            break;
        default:
            $class = 'col-md-3';
            break;
    }
    //edit layout by fajar 27/1/2021
    for ($i = 1; $i <= 4; $i++) {
        $mspicon = theme_eguru_get_setting('mspot'.$i.'icon');
        $msptitle = theme_eguru_get_setting('mspot'.$i.'title');
        $msptitle = theme_eguru_lang($msptitle);
        $mspdescription = theme_eguru_get_setting('mspot'.$i.'desc');
        $mspdescription = theme_eguru_lang($mspdescription);

        if (!empty($mspicon) || !empty($msptitle) || !empty($mspdescription)) {
            $content .= html_writer::start_tag('div', array('class' => $class));

                $content .= html_writer::start_tag('div', array('class' => 'ebox'));
            if (!empty($mspicon)) {
                $content .= html_writer::start_tag('div', array('class' => 'ebox-head'));

                    //$content .= html_writer::start_tag('div', array('class' => 'rcthumb'));
                    if ($i == 3){
                        //$content .= html_writer::end_tag('div');
                        $content .= html_writer::start_tag('div', array('class' => 'rcthumb'));
                        $content .= html_writer::start_tag('a', array('href' => 'https://bit.ly/38oZ170'));
                        $content .= html_writer::start_tag('img', array('src' => 'https://kelaspersonalia.id/assets/logo.png', 'width'=>"138", 'height'=>"138"));
                        $content .= html_writer::end_tag('img');
                        $content .= html_writer::end_tag('a');
                        $content .= html_writer::end_tag('div');
                    }else if($i == 1){
                        $content .= html_writer::start_tag('a', array('href' => 'https://kelaspersonalia.id/course/index.php?categoryid=28'));
                        $content .= html_writer::start_tag('div', array('class' => 'rcthumb'));
                        $content .= html_writer::start_tag('i', array('class' => 'fa fa-'.$mspicon));
                        $content .= html_writer::end_tag('i');
                        $content .= html_writer::end_tag('div');
                        $content .= html_writer::end_tag('a');
                    }else if($i == 2){
                        $content .= html_writer::start_tag('a', array('href' => 'https://kelaspersonalia.id/underconst.html'));
                        $content .= html_writer::start_tag('div', array('class' => 'rcthumb'));
                        $content .= html_writer::start_tag('i', array('class' => 'fa fa-'.$mspicon));
                        $content .= html_writer::end_tag('i');
                        $content .= html_writer::end_tag('div');
                        $content .= html_writer::end_tag('a');
                    }
                $content .= html_writer::end_tag('div');
            }
            if (!empty($msptitle) || !empty($mspdescription)) {
                $content .= html_writer::start_tag('div', array('class' => 'ebox-body'));

                if ($i == 3){
                    $content .= html_writer::start_tag('h6');
                    $content .= "PadKast";
                    $content .= html_writer::end_tag('h6');

                    $content .= html_writer::start_tag('p');
                    //$content .= $mspdescription;
                    $content .= "Podcast Sharing Profesi";
                    $content .= html_writer::end_tag('br');
                    $content .= "Konsultasi Online Dunia Kerja dan Ketenagakerjaan Free.";
                    $content .= "(Setiap Minggu 15.00-17.00 WIB) - Segera. 14 Februari 2021";
                    $content .= html_writer::end_tag('br');
                    $content .= html_writer::start_tag('a', array('href' => 'https://bit.ly/38oZ170'));
                    $content .= html_writer::start_tag('img', array('src' => 'https://kelaspersonalia.id/assets/logo yt.png', 'width'=>"138", 'height'=>"138"));
                    $content .= html_writer::end_tag('img');
                    $content .= html_writer::end_tag('a');
                    $content .= html_writer::end_tag('p');
                }else if($i == 1){
                    $content .= html_writer::start_tag('h6');
                    $content .= $msptitle;
                    $content .= html_writer::end_tag('h6');
                    $content .= html_writer::start_tag('a', array('href' => 'https://kelaspersonalia.id/course/index.php?categoryid=28'));
                    $content .= html_writer::start_tag('p');
                    $content .= $mspdescription;
                    $content .= html_writer::end_tag('p');
                    $content .= html_writer::end_tag('a');
                }else if($i == 2){
                    $content .= html_writer::start_tag('h6');
                    $content .= $msptitle;
                    $content .= html_writer::end_tag('h6');
                    $content .= html_writer::start_tag('a', array('href' => 'https://kelaspersonalia.id/underconst.html'));
                    $content .= html_writer::start_tag('p');
                    $content .= $mspdescription;
                    $content .= html_writer::end_tag('p');
                    $content .= html_writer::end_tag('a');
                }else if($i == 4){
                    $content .= html_writer::start_tag('h6');
                    $content .= $msptitle;
                    $content .= html_writer::end_tag('h6');
                    $content .= html_writer::start_tag('a', array('href' => 'https://kelaspersonalia.id/videotutor/helptutor.html'));
                    $content .= html_writer::start_tag('img', array('src' => 'https://kelaspersonalia.id/assets/help.png', 'width'=>"138", 'height'=>"138"));

                    $content .= html_writer::start_tag('p');
                    $content .= $mspdescription;
                    $content .= html_writer::end_tag('p');
                }
                $content .= html_writer::end_tag('div');
            }
            $content .= html_writer::end_tag('div');
            $content .= html_writer::end_tag('div');
        }
    }
    $content .= html_writer::end_tag('div');
    $content .= html_writer::end_tag('div');
    $content .= html_writer::end_tag('div');
    return $content;
}
echo eguru_marketingspot();
