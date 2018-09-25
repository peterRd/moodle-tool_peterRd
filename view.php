<?php

require_once(__DIR__ . '/../../../config.php');
$url = new moodle_url('/admin/tool/peterrd/view.php');
$PAGE->set_context(context_system::instance());
$PAGE->set_url($url);
$PAGE->set_pagelayout('report');
$PAGE->set_title('Hello to the todo list');
$PAGE->set_heading(get_string('pluginname', 'tool_peterrd'));
echo get_string('helloworld', 'tool_peterrd');