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
 * Strings for component 'qtype_shortanswer', language 'de', version '4.5'.
 *
 * @package     qtype_shortanswer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreanswerblanks'] = 'Leerfelder für {no} weitere Antwort(en)';
$string['answer'] = 'Antwort: {$a}';
$string['answermustbegiven'] = 'Sie müssen eine Kurzantwort angeben, falls es eine Bewertung oder ein Feedback geben soll.';
$string['answerno'] = 'Antwort {$a}';
$string['caseno'] = 'Nein, Groß-/Kleinschreibung unwichtig';
$string['casesensitive'] = 'Groß-/Kleinschreibung';
$string['caseyes'] = 'Ja, Groß-/Kleinschreibung muss stimmen';
$string['correctansweris'] = 'Die richtige Antwort ist: {$a}';
$string['correctanswers'] = 'Richtige Antworten';
$string['filloutoneanswer'] = 'Sie müssen mindestens eine mögliche Antwort angeben. Offen gelassene Antworten werden nicht benutzt. \'*\' kann als Ersatzzeichen für beliebige Buchstaben (Wildcard) benutzt werden. Die erste passende Antwort wird benutzt, um Bewertung und Feedback zu ermitteln.';
$string['notenoughanswers'] = 'Dieser Fragetyp benötigt mindestens {$a} Antworten';
$string['pleaseenterananswer'] = 'Bitte geben Sie eine Antwort ein';
$string['pluginname'] = 'Kurzantwort';
$string['pluginname_help'] = 'Als Antwort auf eine Frage (welche auch ein Bild enthalten darf) kann ein Wort oder ein kurzer Satz eingegeben werden. Dabei können mehrere richtige Antworten erlaubt sein, die alle unterschiedlich bewertet werden. Mit der Option "Groß-/Kleinschreibung" kann auch die Schreibweise berücksichtigt werden.';
$string['pluginname_link'] = 'question/type/shortanswer';
$string['pluginnameadding'] = 'Kurzantwort hinzufügen';
$string['pluginnameediting'] = 'Kurztextfrage bearbeiten';
$string['pluginnamesummary'] = 'Die Antwort wird von Teilnehmer/innen eingetippt. Zur automatischen Bewertung wird der Eintrag mit Musterantworten verglichen. Wildcards (Platzhalter) sind möglich.';
$string['privacy:metadata'] = 'Das Plugin "Kurzantwort" erlaubt es Frageautor/innen, standardmäßige Optionen als Nutzereinstellungen zu setzen.';
$string['privacy:preference:defaultmark'] = 'Die Standardmarkierung wird für eine bestimmte Frage gesetzt.';
$string['privacy:preference:penalty'] = 'Abzug für jeden falschen Versuch, wenn Fragen mit dem Verhalten "Interaktiv mit mehreren Versuchen" oder "Adaptiver Modus" ausgeführt werden.';
$string['privacy:preference:usecase'] = 'Gibt an, ob die Antwort die Groß-/Kleinschreibung berücksichtigen soll.';
