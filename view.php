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

require_once(__DIR__ . '/../../../config.php');
require_once($CFG->libdir.'/adminlib.php');

// admin_externalpage_setup('toolpeterrd');
$id = optional_param('id', 0, PARAM_INT);

$url = new moodle_url('/admin/tool/peterrd/view.php', array('id' => 1));
$title = get_string('pluginname', 'tool_peterrd');
$PAGE->set_context(context_system::instance());
$PAGE->set_url($url);
$PAGE->set_url('/admin/tool/peterrd/view.php', array('id' => 1));
$PAGE->set_title($title);
$PAGE->set_heading($title);

$output = $PAGE->get_renderer('tool_peterrd');

echo $output->header();
echo $output->heading($title);

$renderable = new \tool_peterrd\output\view_page('Some text');
echo $output->render($renderable);

$userinput = get_string('helloworld', 'tool_peterrd');

echo html_writer::div(format_text($userinput)); // Used for multil-line rich-text contents such as forum post body.
echo html_writer::div(format_string(get_string('courseid', 'tool_peterrd', ['id' => $id])));

echo $output->footer();