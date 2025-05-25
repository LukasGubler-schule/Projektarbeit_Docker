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
 * Strings for component 'qtype_mtf', language 'de', version '4.5'.
 *
 * @package     qtype_mtf
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeduction'] = 'Abzüge erlauben';
$string['allowdeduction_help'] = 'Wenn diese Option aktiviert ist, können Trainer/innen ihre Fragen so konfigurieren, dass für falsche Antworten ein Abzug erfolgt. Andernfalls ist diese Möglichkeit nicht verfügbar, z.B. weil solche Abzüge bei diesem Fragetyp grundsätzlich nicht gewollt sind.<br/>
Wenn "Teilpunkte mit Abzug" als Standard-Bewertungsmethode eingestellt ist, kann diese Option nicht deaktiviert werden.';
$string['answernumbering'] = 'Wahlantworten nummerieren?';
$string['answernumbering123'] = '1., 2., 3., ...';
$string['answernumberingABCD'] = 'A., B., C., ...';
$string['answernumberingIIII'] = 'I., II., III., ...';
$string['answernumberingabc'] = 'a., b., c., ...';
$string['answernumberingiii'] = 'i., ii., iii., ...';
$string['answernumberingnone'] = 'Keine Nummerierung';
$string['answersingleno'] = 'Mehrere Antworten';
$string['cannotusedeductions'] = 'Gültige Bewertungsmethode auswählen.';
$string['clearrow'] = 'Antworten für Zeile {$a} löschen';
$string['configintro'] = 'Standardeinstellungen für Mehrfach Wahr/Falsch-Fragen.';
$string['configscoringmethod'] = 'Standard-Bewertungungsmethode für Mehrfach Wahr/Falsch-Fragen.';
$string['configshuffleanswers'] = 'Standardeinstellung für das Mischen von Optionen in Mehrfach-Wahr/Falsch-Fragen.';
$string['correctresponse'] = 'Richtige Antwort';
$string['deduction'] = 'Abzug für falsche Antwort';
$string['deduction_help'] = 'Abzug für falsche Antworten, anzugeben als Anteil der Punkte, die man erreichen kann. Diese Einstellung ist nur sinnvoll, wenn als Bewertungsmethode "Teilpunkte mit Abzug" gewählt wurde.';
$string['deletedchoice'] = 'Diese Option wurde gelöscht, nachdem der Versuch gestartet wurde.';
$string['deleterawswarning'] = 'Wenn Sie auf eine kleinere Anzahl Wahlantworten wechseln, werden überzählige Wahlantworten gelöscht. Möchten Sie fortfahren?';
$string['enterfeedbackhere'] = 'Feedback hinzufügen.';
$string['entergeneralfeedbackhere'] = 'Allgemeines Feedback hinzufügen.';
$string['enteroptionhere'] = '';
$string['enterstemhere'] = 'Stamm in Form einer Frage oder einer Aussage eingeben.';
$string['false'] = 'Falsch';
$string['feedbackforoption'] = 'Feedback für';
$string['generalfeedback'] = 'Allgemeines Feedback.';
$string['generalfeedback_help'] = 'Allgemeines Feedback wird unabhängig von der gegebenen Antwort angezeigt. <br />Allgemeines Feedback kann eingesetzt werden, um korrekte Antworten zu erläutern oder Links zu weiteren Informationen zu geben.';
$string['incorrect'] = 'Falsch';
$string['invaliddeduction'] = 'Abzug muss eine Zahl zwischen 0 und 1 (inklusive) sein.';
$string['maxpoints'] = 'Max. Punkte';
$string['mustdeleteextrarows'] = 'Der Fragetyp MTF erlaubt maximal 5 Wahlantworten.  {$a} Wahlantwort(en) werden gelöscht. Falls Sie abbrechen ohne zu speichern, bleiben die überzähligen Wahlantworten erhalten.';
$string['mustsupplyresponses'] = 'Sie müssen für alle Texte einen Wert eingeben.';
$string['mustsupplyvalue'] = 'Sie müssen hier einen Wert eingeben.';
$string['notenoughanswers'] = 'Dieser Fragetyp braucht mindestens {$a} Wahlantwort(en)';
$string['numberchoicehaschanged'] = 'Die Anzahl Antwortoptionen wurde geändert. Frage kann nicht neu bewertet werden.';
$string['numberofrows'] = 'Anzahl Wahlantworten';
$string['numberofrows_help'] = 'Wählen Sie die Anzahl Wahlantworten. Wenn Sie auf eine kleinere Anzahl Wahlantworten wechseln, werden überzählige Wahlantworten gelöscht, sobald die Frage gespeichert wird.';
$string['oneanswerperrow'] = 'Bitte beantworten Sie alle Teile der Frage.';
$string['optionno'] = 'Wahlantwort {$a}';
$string['optionsandfeedback'] = 'Text und Feedback';
$string['pluginname'] = 'MTF (ETH)';
$string['pluginname_help'] = 'Teilnehmer/innen bewerten zur Beantwortung einer Fragestellung Wahlantworten als „wahr“ oder „falsch“. Es können statt „wahr“ oder „falsch“ auch eigene Kriterien gesetzt werden.';
$string['pluginname_link'] = 'question/type/mtf';
$string['pluginnameadding'] = 'Mehrfach Wahr/Falsch-Frage hinzufügen';
$string['pluginnameediting'] = 'Mehrfach Wahr/Falsch-Frage bearbeiten';
$string['pluginnamesummary'] = 'In Mehrfach Wahr/Falsch-Aufgaben („Typ X“) müssen Wahlantworten als „wahr“ oder „falsch“ bewertet werden.';
$string['privacy:metadata'] = 'Das MTF-Plugin speichert keine persönlichen Daten.';
$string['responsedesc'] = 'Standardtext für die Wahrheitsauswahl {$a}.';
$string['responseno'] = 'Wahrheitsauswahl {$a}';
$string['responsetext'] = 'Text für Wahrheitsauswahl {$a}';
$string['responsetext1'] = 'Wahr';
$string['responsetext2'] = 'Falsch';
$string['responsetexts'] = 'Bewertungsoptionen';
$string['save'] = 'Speichern';
$string['scoringmethod'] = 'Bewertung';
$string['scoringmethod_help'] = 'Es gibt drei alternative Bewertungsmethoden. <br /><strong>Teilpunkte</strong> (empfohlen): Bei der Auswahl „Teilpunkte“ erhalten Kandidat/innen Teilpunkte für jede richtige Bewertung einer Wahlantwort.<br /><strong>Teilpunkte mit Abzug</strong>: Kandidat/innen erhalten Teilpunkte für jede richtige Bewertung einer Wahlantwort und Abzug für falsche Antworten. Diese Methode is nur verfügbar, wenn sie durch den Administrator freigegeben wurde.<br/><strong>MTF1/0</strong>: Bei der Auswahl „MTF1/0“ erhalten Kandidat/innen die volle Punktzahl, wenn alle Wahlantworten richtig bewertet wurden und sonst null Punkte.';
$string['scoringmtfonezero'] = 'MTF1/0';
$string['scoringmtfonezero_help'] = 'Wenn alle Antworten korrekt sind, wir die Frage mit der vollen Punktzahl bewertet. Ansonsten gibt es keine Punkte.';
$string['scoringsubpointdeduction'] = 'Teilpunkte mit Abzug';
$string['scoringsubpointdeduction_help'] = 'Teilnehmer/innen erhalten Teilpunkte für jede richtige Bewertung einer Wahlantwort und Abzug für falsche Antworten.';
$string['scoringsubpoints'] = 'Teilpunkte';
$string['scoringsubpoints_help'] = 'Für jede richtige Antwort gibt es Teilpunkte.';
$string['showscoringmethod'] = 'Bewertungsmethode anzeigen';
$string['showscoringmethod_help'] = 'Wenn diese Option aktiviert ist, wird die Bewertungsmethode im Test angezeigt.';
$string['shuffleanswers'] = 'Antwortoptionen zufällig mischen';
$string['shuffleanswers_help'] = 'Wenn diese Option aktiviert ist, werden die Antwortoptionen für jeden Versuch zufällig gemischt, vorausgesetzt die Option "Optionen innerhalb der Frage mischen" ist für die Aktivität ebenfalls aktiviert.';
$string['stem'] = 'Stamm';
$string['tasktitle'] = 'Aufgabentitel';
$string['true'] = 'Richtig';
