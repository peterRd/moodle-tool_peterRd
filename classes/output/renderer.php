<?php
// Standard GPL and phpdocs
namespace tool_peterrd\output;

defined('MOODLE_INTERNAL') || die;

use plugin_renderer_base;

class renderer extends plugin_renderer_base {
    /**
     * Defer to template.
     *
     * @param index_page $page
     *
     * @return string html for the page
     */
    public function render_index_page($page) {
        $data = $page->export_for_template($this);
        return parent::render_from_template('tool_peterrd/view_page', $data);
    }
}