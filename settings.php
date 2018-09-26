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
 * Custom test plugin view information
 *
 * @package    tool_peterrd
 * @copyright  2018 onwards Peter Dias
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;
require_once(__DIR__ . '/../../../config.php');
require_once($CFG->libdir.'/adminlib.php');

$courseorid = 2;
require_login($courseorid);
$coursenode = $PAGE->navigation->find($courseorid, navigation_node::TYPE_COURSE);
if ($coursenode) {
    $thingnode = $coursenode->add(get_string('pluginname', 'tool_peterrd'),
            new moodle_url('/admin/tool/peterrd/view.php', array('id' => $courseorid)));
}

//$previewnode = $PAGE->navigation->add(get_string('helloworldnavigation', 'tool_peterrd'),
//    new moodle_url('/admin/tool/peterrd/view.php'),
//        navigation_node::TYPE_COURSE
//);
//$thingnode = $previewnode->add(get_string('pluginname', 'tool_peterrd'),
//    new moodle_url('/admin/tool/peterrd/view.php'));
//$thingnode->make_active();

//$previewnode = $PAGE->settingsnav->add(get_string('helloworldnavigation', 'tool_peterrd'),
//    new moodle_url('/admin/tool/peterrd/view.php'),
//navigation_node::TYPE_COURSE
//);
//$thingnode = $previewnode->add(get_string('pluginname','tool_peterrd'),
//    new moodle_url('/admin/tool/peterrd/view.php'));
//$thingnode->make_active();