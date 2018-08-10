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
 * Import workflow form class.
 *
 * @package     tool_trigger
 * @copyright   Matt Porritt <mattp@catalyst-au.net>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace tool_trigger;

defined('MOODLE_INTERNAL') || die();

require_once("$CFG->libdir/formslib.php");

/**
 * Import workflow form class.
 *
 * @package     tool_trigger
 * @copyright   Matt Porritt <mattp@catalyst-au.net>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class import_form extends \moodleform {

    /**
     * Build form for the general setting admin page for plugin.
     *
     * {@inheritDoc}
     * @see \moodleform::definition()
     */
    public function definition() {

        $mform = $this->_form;

        // Workflow name.
        $mform->addElement('text', 'workflowname', get_string ('workflowname', 'tool_trigger'), 'size="50"');
        $mform->setType('workflowname', PARAM_TEXT);
        $mform->addRule('workflowname', get_string('required'), 'required');
        $mform->addHelpButton('workflowname', 'workflowname', 'tool_trigger');
    }
}