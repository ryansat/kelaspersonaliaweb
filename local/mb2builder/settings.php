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
 *
 * @package    local_mb2builder
 * @copyright  2018 - 2019 Mariusz Boloz (www.mb2themes.com)
 * @license    Commercial https://themeforest.net/licenses
 */

defined('MOODLE_INTERNAL') || die();

global $CFG, $PAGE;

require_once(__DIR__ . '/lib.php');

$pages_count = 1;

if ($hassiteconfig)
{

	$ADMIN->add('root', new admin_category('local_mb2builder', get_string('pluginname', 'local_mb2builder', null, true)));
    $page = new admin_settingpage('local_mb2builder_builder', get_string('builderfp', 'local_mb2builder', null, true));

    if ($ADMIN->fulltree)
	{

		$page->add (new admin_setting_configmb2builder('local_mb2builder/builderfp','','',''));
		$page->add (new admin_setting_configtextarea('local_mb2builder/builderfptext','','',''));

		//$page->add (new admin_setting_configmb2builder('local_mb2builder/builderfooter','','',''));
		//$page->add (new admin_setting_configtextarea('local_mb2builder/builderfootertext','','',''));

		$page->add (new admin_setting_configmb2buildersettings('local_mb2builder/buildersettings','','',''));
    }

    $ADMIN->add('local_mb2builder', $page);

	$page = new admin_settingpage('local_mb2builder_images', get_string('images', 'local_mb2builder', null, true));
	$page->add (new admin_setting_configstoredfile('local_mb2builder/images','','','images', 0, array('maxfiles' => 500, 'accepted_types' => array('.jpg','.png','.gif'))));

	$ADMIN->add('local_mb2builder', $page);

}
