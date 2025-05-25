<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'tool_asynccourseimport', language 'de', version '3.10'.
 *
 * @package     tool_asynccourseimport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['event_importcourse_error'] = 'Ein Kurs konnte mit dem Async-Kursimportprozess nicht importiert werden.';
$string['import_footer_count'] = '{$a} Kurs(e) ist/sind für den Import vorgesehen';
$string['import_footer_message'] = 'Ihre Kurse wurden für den Import eingeplant. Sie müssen warten, da die Aufgabe von einem Cron bearbeitet wird.';
$string['pluginname'] = 'Asynchroner Kursimport';
$string['report_errors_header'] = '<p>Die folgenden Kurse konnten nicht importiert werden:</p>';
$string['report_header'] = 'Eine von Ihnen geplante Aufgabe zum Import von Kursen ist abgeschlossen.\\n';
$string['task_complete'] = 'Der Import der asynchronen Kurse ist abgeschlossen.';
$string['task_incomplete'] = 'Der Kursimport kann nicht abgeschlossen werden (Task id: {$a}).';
