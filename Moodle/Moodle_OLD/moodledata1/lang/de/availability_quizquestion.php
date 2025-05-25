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
 * Strings for component 'availability_quizquestion', language 'de', version '3.10'.
 *
 * @package     availability_quizquestion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ajaxerror'] = 'Es ist ein Fehler beim Versuch aufgetreten, Fragen vom Server abzurufen.';
$string['description'] = 'Zugriff zu einer Aktivität an das Ergebnis einer Testfrage zu koppeln';
$string['error_selectquestion'] = 'Sie müssen eine Frage auswählen.';
$string['error_selectquiz'] = 'Sie müssen einen Test auswählen.';
$string['error_selectstate'] = 'Sie müssen einen Status auswählen.';
$string['label_question'] = 'Welche Frage im ausgewählten Test';
$string['label_state'] = 'Benötigter Status';
$string['pluginname'] = 'Voraussetzung: Testfrage';
$string['privacy:metadata'] = 'Das Plugin \'Voraussetzung: Testfrage\' speichert keine personenbezogenen Daten.';
$string['questionnumberandname'] = 'F{$a->number}) {$a->name}';
$string['requires_quizquestion'] = 'Die Frage <b>{$a->questiontext}</b> im <b><a href="{$a->quizurl}">{$a->quizname}</a></b> ist als <b>{$a->requiredstate}</b> markiert.';
$string['requires_quizquestionnot'] = 'Die Frage <b>{$a->questiontext}</b> im <b><a href="{$a->quizurl}">{$a->quizname}</a></b> ist nicht als <b>{$a->requiredstate}</b> markiert.';
$string['title'] = 'Testfrage';
