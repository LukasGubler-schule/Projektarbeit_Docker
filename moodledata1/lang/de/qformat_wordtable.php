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
 * Strings for component 'qformat_wordtable', language 'de', version '3.10'.
 *
 * @package     qformat_wordtable
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cannotopentempfile'] = 'Temporäre Datei <b>{$a}</b> kann nicht geöffnet werden';
$string['cannotreadzippedfile'] = 'Kann gezippte Datei <b>{$a}</b> nicht lesen';
$string['cannotwritetotempfile'] = 'In die temporäre Datei <b>{$a}</b> kann nicht geschrieben werden';
$string['cloze_distractor_column_label'] = 'Distraktoren';
$string['cloze_feedback_column_label'] = 'Feedback zu Distraktoren';
$string['cloze_instructions'] = 'Verwenden Sie <strong>fett</strong> für Multiple-Choice, <em>kursiv</em> für Kurzantwort und <u>unterstreichen</u> für Numerische Fragen.';
$string['cloze_mcformat_label'] = 'Ausrichtung (D = Dropdown; V = vertikale, H = horizontale Radio-Buttons,)';
$string['description_instructions'] = 'Dies ist keine Frage, sondern eine Möglichkeit, der Aktivität Anweisungen, Rubriken oder andere Inhalte hinzuzufügen. Dies ist vergleichbar damit, wie Textfelder verwendet werden, um der Kursseite Inhalte hinzuzufügen.';
$string['docnotsupported'] = 'Dateien im Word 2003 Format werden nicht unterstützt: <b>{$a}</b>, stattdessen Moodle2Word 3.x verwenden';
$string['essay_instructions'] = 'Erlaubt eine Antwort in wenigen Sätzen oder Absätzen. Diese muss dann manuell benotet werden.';
$string['htmldocnotsupported'] = 'Falsches Word-Format: bitte <b>{$a}</b> mit <i>Datei>Speichern unter...</i> im originalen Word 2010-Format (.docx) speichern und erneut importieren';
$string['htmlnotsupported'] = 'Dateien im HTML-Format werden nicht unterstützt: <b>{$a}</b>';
$string['interface_language_mismatch'] = 'Es wurden keine Fragen importiert, weil die Sprache der Textfelder in der Word-Datei nicht mit der Sprache Ihrer aktuellen Moodle-Oberfläche übereinstimmt.';
$string['multichoice_instructions'] = 'Erlaubt die Auswahl einer oder mehrerer Antworten aus einer vordefinierten Liste.';
$string['noquestions'] = 'Keine Fragen zu exportieren';
$string['pluginname'] = 'Microsoft Word 2010 Tabellenformat (wordtable)';
$string['pluginname_help'] = 'Dies ist ein Frontend zum Konvertieren von Microsoft Word 2010-Dateien in das Moodle Question XML-Format für den Import, und auch umgekehrt für die Konvertierung des Moodle Question XML-Formats in ein für die Bearbeitung in Microsoft Word geeignetes Format.';
$string['preview_question_not_found'] = 'Vorschaufrage nicht gefunden, Name / Kurs-ID: {$a}';
$string['privacy:metadata'] = 'Das WordTable-Fragenformat-Plugin speichert keine personenbezogenen Daten.';
$string['stylesheetunavailable'] = 'XSLT-Stylesheet <b>{$a}</b> ist nicht verfügbar';
$string['transformationfailed'] = 'XSLT-Transformation fehlgeschlagen (<b>{$a}</b>)';
$string['truefalse_instructions'] = 'Setzen Sie die Bewertung \'100\' für die richtige Antwort';
$string['unsupported_instructions'] = 'Das Importieren dieses Fragetyps wird nicht unterstützt';
$string['word_about_moodle2word'] = 'Über Moodle2Word';
$string['word_about_moodle2word_screentip'] = 'Über die Moodle2Word Word-Vorlagen und das Moodle-Plugin';
$string['word_addcategory_supertip'] = 'Kategorienamen verwenden den Stil Heading 1';
$string['word_currentquestion'] = '(Aktuelle Frage)';
$string['word_gapselect_screentip'] = 'Achtung: angepasstes Moodle-Plugin Select missing words ist für diesen Fragetyp erforderlich.';
$string['word_import'] = 'Import';
$string['word_multiple_answer'] = 'Mehrfachantwort';
$string['word_new_question_file'] = 'Neue Fragendatei';
$string['word_new_question_file_screentip'] = 'Die Fragen müssen im Word 2010-Format (.docx) gespeichert werden';
$string['word_new_question_file_supertip'] = 'Jede Word-Datei kann mehrere Kategorien enthalten';
$string['word_setunset_assessment_view'] = 'Ein/Aus der Bewertungsansicht';
$string['word_showhide_assessment_screentip'] = 'Frage-Metadaten zum Bearbeiten einblenden, zur Vorschau der gedruckten Bewertung ausblenden';
$string['word_showhide_assessment_supertip'] = '\'Verborgenen Text\' ein-/ausblenden';
$string['word_showhide_assessment_view'] = 'Bewertungsansicht ein-/ausblenden';
$string['word_shuffle_screentip'] = 'Mischen Sie die Antworten auf MCQ/TF/MA-Fragen';
$string['word_shuffle_supertip'] = 'Ein paar Mal mischen ist besser als 1 Mal';
$string['word_view'] = 'Ansicht';
$string['wordtable'] = 'Microsoft Word 2010 Tabellenformat (wordtable)';
$string['wordtable_help'] = 'Dies ist ein Front-End zum Konvertieren von Microsoft Word 2010-Dateien in das Moodle Question XML-Format für den Import und umgekehrt auch zum Konvertieren des Moodle Question XML-Formats in ein erweitertes XHTML-Format für den Export in ein für die Bearbeitung in Microsoft Word geeignetes Format.';
$string['xmlnotsupported'] = 'Dateien im XML-Format werden nicht unterstützt: <b>{$a}</b>';
$string['xsltunavailable'] = 'Sie benötigen die in PHP installierte XSLT-Bibliothek, um diese Word-Datei zu speichern';
