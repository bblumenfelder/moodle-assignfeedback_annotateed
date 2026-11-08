<?php
defined('MOODLE_INTERNAL') || die();

class assign_feedback_annotateed extends assign_feedback_plugin {
    public function get_name() {
        return get_string('pluginname', 'assignfeedback_annotateed');
    }

    
    public function get_form_elements_for_user($grade, MoodleQuickForm $mform, stdClass $data, $userid) {
        global $OUTPUT;
        $html = $OUTPUT->render_from_template('assignfeedback_annotateed/editor', []);
        $mform->addElement('html', $html);
        return true;
    }
}