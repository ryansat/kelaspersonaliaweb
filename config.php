<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();


//backup setting
//$CFG->theme     = 'boost';
// $CFG->dbsessions=0;
$CFG->lang      ="id";
// $CFG->debug     = (E_ALL | E_STRICT);
$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = '192.46.226.13';
$CFG->dbname    = 'moodledatabase';
$CFG->dbuser    = 'admin';
$CFG->dbpass    = '!#@KelasPersonalia2020!$3cu1e';
$CFG->prefix    = 'tid_';

// $CFG->dbtype    = 'mariadb';
// $CFG->dblibrary = 'native';
// $CFG->dbhost    = '34.101.254.170';
// $CFG->dbname    = 'u7147375_d0tid';
// $CFG->dbuser    = 'moodle_admin';
// $CFG->dbpass    = '!#@KelasPersonalia2020!$3cu1e';
// $CFG->prefix    = 'tid_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_general_ci',
);

$CFG->wwwroot   = 'https://kelaspersonalia.id';
$CFG->dataroot  = '/usr/local/lsws/Example/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
