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
 * Coupon processor interface
 *
 * File         icoupontype.php
 * Encoding     UTF-8
 *
 * @package     block_coupon
 *
 * @copyright   Sebsoft.nl
 * @author      R.J. van Dongen <rogier@sebsoft.nl>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace block_coupon\coupon;

defined('MOODLE_INTERNAL') || die();

/**
 * block_coupon\coupon\typebase
 *
 * @package     block_coupon
 *
 * @copyright   Sebsoft.nl
 * @author      R.J. van Dongen <rogier@sebsoft.nl>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
interface icoupontype {

    /**
     * Claim coupon.
     * @param int $foruserid user that claims coupon. Current userid if not given.
     * @param mixed $options any options required by the instance
     */
    public function claim($foruserid = null, $options = null);

}