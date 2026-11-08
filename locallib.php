<?php
defined('MOODLE_INTERNAL') || die();

class assign_feedback_annotateed extends assign_feedback_plugin {
    public function get_name() {
        return get_string('pluginname', 'assignfeedback_annotateed');
    }
}