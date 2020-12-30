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
 * @package block_skypeweb
 * @author Aashay Zajriya <aashay@introp.net>
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @copyright (C) 2014 onwards Microsoft, Inc. (http://microsoft.com/)
 */

// Skype Web Block login return page after the web SDK's Authentication.

require_once(__DIR__ . '/../../config.php');
?>
<html>
    <head>
         <script type='text/javascript'>
            var hash = window.location.hash;
            var regexForState = /&state=(.+)&/g;
            var match = regexForState.exec(hash);
            var returnUrl = null;
            while (match != null) {
                returnUrl = match[1];
                break;
            }

            if (returnUrl != null && returnUrl.indexOf('http') == 0) {
                window.location = decodeURIComponent(returnUrl);
            }
        </script>
    </head>
    <body>
        <h1><?php get_string('waitmessage', 'block_skypeweb');?></h1>
        <?php
            global $SESSION;
            $SESSION->skype_login = true;
        ?>
    </body>
</html>
