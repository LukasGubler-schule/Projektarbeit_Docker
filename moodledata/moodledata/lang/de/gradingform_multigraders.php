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
 * Strings for component 'gradingform_multigraders', language 'de', version '4.5'.
 *
 * @package     gradingform_multigraders
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomment'] = 'häufig genutzten Kommentar einfügen';
$string['auto_calculate_final_method'] = 'Berechnungsmethode zu Gesamtbewertung';
$string['auto_calculate_final_method_0'] = 'letzte Bewertung';
$string['auto_calculate_final_method_1'] = 'niedrigste Bewertung';
$string['auto_calculate_final_method_2'] = 'höchste Bewertung';
$string['auto_calculate_final_method_3'] = 'durchschnittliche Bewertung';
$string['auto_calculate_final_method_help'] = 'Die endgültige Note wird von der letzten bewertenden Person bestimmt, das System berechnet jedoch automatisch die nächste Note in Abhängigkeit von der vorherigen, basierend auf der hier gewählten Methode.';
$string['backtoediting'] = 'Zurück';
$string['blind_marking'] = 'Blindbewertung';
$string['blind_marking_explained'] = 'Blindbewertung ist aktiviert. Zweitgutachter/innen können die Erstbewertung nicht einsehen. Nach der Freigabe können alle die Bewertungen einsehen.';
$string['blind_marking_help'] = 'falls markiert, können Zweitgutachter/innen die vorherigen Bewertungen nicht sehen.';
$string['clicktocopy'] = 'Anmerkungen zum Feedback kopieren.';
$string['clicktodeleteadmin'] = 'Alle Bewertungsdaten löschen';
$string['clicktoedit'] = 'Bearbeiten';
$string['comment'] = 'Kommentieren';
$string['criteria'] = 'Bewertungskriterium';
$string['definition'] = 'Bewertungsgrundlage';
$string['description'] = 'Beschreibung der Vorlage';
$string['editdefinition'] = 'Mehrfachbewerter-Einstellungen ändern';
$string['err_gradeinvalid'] = 'Ungültige Bewertung';
$string['err_gradeoutofbounds'] = 'Bewertung ist nicht im Bewertungsspielraum.';
$string['err_grader_intermediary'] = '<b>{$a}</b> - Als Zweitgutachter/in können Sie die Bewertung nicht freigeben.';
$string['err_noformula'] = 'Es gibt keine Formel für die Berechnung der Note aus den Ergebnissen. Ändern Sie dies in den Bewertungseinstellungen.';
$string['err_notgraded'] = '<b>{$a}</b> - Teilnehmer/in unbewertet';
$string['feedback_label'] = 'Anmerkungen';
$string['final_grade_check'] = 'Bewertung veröffentlichen';
$string['final_grade_message'] = 'Bewertung veröffentlicht';
$string['finalgradefinished_noaccess'] = '{$a} hat die Bewertung abgeschlossen. Sie können keine Veränderung mehr vornehmen.';
$string['finalgradenotdecidedyet'] = 'Endbewertung noch nicht veröffentlicht.';
$string['finalgradestarted_noaccess'] = '{$a} hat mit der Bewertung begonnen. Sie sind nicht in der Liste der Zweitgutachter/innen und dürfen daher keine Bewertung vornehmen.';
$string['finalgradestarted_nosecond'] = '{$a} hat die Bewertung begonnen. Keine Zweitbewertung angefordert.';
$string['graderdetails_display'] = 'Bewertet durch {$a}';
$string['gradingdisabled'] = 'Die Benotung für diese Aufgabe ist deaktiviert. Sie wurde entweder gesperrt oder überschrieben.';
$string['gradingof'] = '{$a} bewertet';
$string['instancedetails_display'] = '{$a} Bewertungen hinzugefügt.';
$string['maxscore'] = 'Höchstpunktzahl';
$string['message_assign_name'] = 'Aufgabe {$a}';
$string['message_footer'] = '<br/><span style="font-size:80%">[Automatische Nachricht]</span><br/>';
$string['message_header'] = '<br/>';
$string['message_smallmessage1'] = '{$a} hat eine Zweitbewertung angefordert.';
$string['message_smallmessage2'] = 'Bitte bewerten Sie diese Abgabe.';
$string['message_smallmessage3'] = '{$a} hat die Zweitbewertung abgeschlossen.';
$string['message_smallmessage4'] = 'Bitte ansehen und die Endnote festlegen.';
$string['message_student_name'] = 'Teilnehmer/in {$a}';
$string['message_subject'] = 'Für  {$a} ist eine Zweitbewertung notwendig.';
$string['message_subject_to_initial'] = 'Zweitbewertung für  {$a} vollständig.';
$string['messageprovider:secondgrading'] = 'Benachrichtigung, dass Zweitgutachten benötigt werden.';
$string['needregrademessage'] = 'Das Mehrfachbewerter-Formular wurde geändert, nachdem diese Person benotet worden war. Sie kann das Ergebnis erst sehen, wenn {$a} die veröffentlichte Note überprüft hat.';
$string['no_grade'] = 'ohne Bewertung';
$string['now_grading'] = '{$a} in Bewertung';
$string['pluginname'] = 'Mehrfachbewertung';
$string['previewdefinition'] = 'Vorschau auf Bewertungsbogen';
$string['privacy:metadata'] = 'Dieses Plugin speichert keine persönlichen Daten. Alle persönlichen Daten werden in anderen Stellen in moodle gespeichert.';
$string['require_second_grader'] = 'Zweitbewertung anfordern';
$string['restoredfromdraft'] = 'HINWEIS: Der letzte Bewertungsdurchgang wurde nicht ordentlich gespeichert, daher wird der Entwurfsmodus wieder hergestellt.';
$string['save'] = 'Speichern';
$string['score'] = 'Punktzahl';
$string['secondary_graders'] = 'Zweitgutachter';
$string['secondary_graders_help'] = 'Diese Trainer werden benachrichtigt, falls ein Zweitgutachten eingeholt werden soll.';
$string['secondary_graders_list'] = 'Zweitgutachter definiert:  {$a}';
$string['show_intermediary_to_students'] = 'Namen der Zweitgutachter für Teilnehmende anzeigen?';
$string['show_intermediary_to_students_explained'] = 'Die Teilnehmer/innen können alle Zweitgutachten sehen, wenn die Bewertung veröffentlicht wurde.';
$string['show_intermediary_to_students_help'] = 'Wenn diese Option aktiviert ist, können Zweitgutachter wählen, ob ihre Notizen bei der Veröffentlichung der Note von den Teilnehmenden eingesehen werden können.';
$string['show_notify_student_box'] = 'Benachrichtigungsoption aktivieren';
$string['show_notify_student_box_help'] = 'Falls markiert, können die Bewerter/innen die Teilnehmer/innen informieren.';
$string['timestamp_format'] = 'd/m/Y H:i:s';
$string['useralreadygradedthisitem'] = 'Sie haben das bereits bewertet. Jemand anderes muss über die Endbewertung entscheiden und das Feedback festlegen.';
$string['useralreadygradedthisitemfinal'] = 'Nur {$a} kann die Endbewertung verändern.';
$string['visible_to_students'] = 'Notizen für Teilnehmer/innen anzeigen?';
