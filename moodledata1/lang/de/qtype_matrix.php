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
 * Strings for component 'qtype_matrix', language 'de', version '3.10'.
 *
 * @package     qtype_matrix
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['all'] = 'Teilpunkte';
$string['allow_dnd_ui'] = 'Verwendung des Drag&Drop UI erlauben';
$string['allow_dnd_ui_descr'] = 'Wenn zugelassen, können Trainer/innen das Drag&Drop-Feature für jede Matrixfrage ermöglichen';
$string['cols_description'] = 'Beschreibung';
$string['cols_shorttext'] = 'Antwort';
$string['colsheader'] = 'Matrixspalten';
$string['colsheader_desc'] = '<p> Der Kurztext wird verwendet, wenn vorhanden, mit dem längeren Text als Tooltip. <br />Achten Sie darauf, wie dieser angezeigt wird. </p>
<p> Die Schüler können mehrere oder nur einzelne Spalten pro Zeile auswählen, je nachdem, wie die Frage konfiguriert wurde, und jede Zeile erhält eine Bewertung, definiert durch eine der Bewertungsmethoden. </p>
<p> Die Gesamtbewertung für die Frage ist ein Durchschnitt der Bewertungen für jede der Zeilen mit Ausnahme des Kprime-Typs, bei dem alle Antworten korrekt sein müssen.</p>';
$string['false'] = 'Falsch';
$string['grademethod'] = 'Bewertungsmethode';
$string['grademethod_help'] = '<ul>
<li> <b> KPrime </b>: Teilnehmer/innen erhalten einen Punkt, wenn alle Antworten korrekt sind, einen halben Punkt, wenn eine Antwort falsch und der Rest der Antworten korrekt ist, und ansonsten null Punkte.
<li> <b> Kprime1/0 </b>: Teilnehmer/innen erhalten einen Punkt, wenn alle Antworten korrekt sind, und ansonsten null Punkte.
<li> <b> Teilpunkte </b>: Teilnehmer/innen erhalten für jede richtige Antwort Teilpunkte.
</ul>';
$string['kany'] = 'Kprime (mindestens eine richtig, keine falsche Antwort)';
$string['kprime'] = 'Kprime1/0';
$string['matrixheader'] = 'Antwortmatrix';
$string['multipleallowed'] = 'Mehrere Antworten pro Zeile zulassen?';
$string['mustaddupto100'] = 'Die Summe aller nicht negativen Gewichtungen in einer Zeile muss 100% sein.';
$string['mustdefine1by1'] = 'Sie müssen mindestens eine 1 x 1 Matrix definieren; mit entweder einer kurzen oder langen Antwort für jede Zeile und jede Spalte';
$string['oneanswerperrow'] = 'Sie müssen eine Antwort für jede Zeile angeben';
$string['pluginname'] = 'Kprime';
$string['pluginname_help'] = '<p> Kprime-Fragen bestehen aus einer Stammfrage und vier zugehörigen Antworten. Bei jeder Antwort müssen die Schüler entscheiden, ob sie richtig oder falsch ist. </p>';
$string['pluginnameadding'] = 'Eine Kprime-Frage hinzufügen';
$string['pluginnameediting'] = 'Eine Kprime-Frage beantworten';
$string['pluginnamesummary'] = 'In Kprime-Fragen müssen genau 4 Antworten korrekt als "wahr" oder "falsch" bewertet werden.';
$string['privacy:metadata'] = 'der Kprime/Matrix-Fragentyp speichert keinerlei personenbezogene Daten.';
$string['refresh_matrix'] = 'Antwortmatrix aktualisieren';
$string['rows_description'] = 'Beschreibung';
$string['rows_feedback'] = 'Feedback';
$string['rows_shorttext'] = 'Antwort';
$string['rowsheader'] = 'Matrixzeilen';
$string['rowsheader_desc'] = '<p> Der Kurztext wird verwendet, wenn vorhanden, mit dem längeren Text als Tooltip. <br/>Achten Sie darauf, wie dieser angezeigt wird. </p> <p> Die Schüler können mehrere oder nur einzelne Spalten pro Zeile auswählen, je nachdem, wie die Frage konfiguriert wurde, und jede Zeile erhält eine Bewertung, definiert durch eine der Bewertungsmethoden. </p> <p> Die Gesamtbewertung für die Frage ist ein Durchschnitt der Bewertungen für jede der Zeilen mit Ausnahme des Kprime-Typs, bei dem alle Antworten korrekt sein müssen. </p>';
$string['show_non_kprime_gui'] = 'Grafisches Nutzerinterface für Einstellungen anzeigen, die nicht genau den Kprime-Matrix-Vorgaben entsprechen (mehr als 4 Zeilen, mehr als zwei Spalten, mehrere Antworten möglich).';
$string['shuffleanswers'] = 'Antworten mischen?';
$string['shuffleanswers_help'] = 'Wenn aktiviert, werden die Antworten bei jedem Versuch in einer zufälligen Reihenfolge angezeigt, vorausgesetzt, dass "Fragen mischen" in den Aktivitätseinstellungen ebenfalls aktiviert ist.';
$string['true'] = 'Wahr';
$string['use_dnd_ui'] = 'Drag and Drop verwenden?';
$string['weightednomultiple'] = 'Es macht keinen Sinn, gewichtete Bewertung auszuwählen, wenn mehrfache Antwort nicht erlaubt ist.';
