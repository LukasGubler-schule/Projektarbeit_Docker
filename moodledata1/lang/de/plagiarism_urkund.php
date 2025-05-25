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
 * Strings for component 'plagiarism_urkund', language 'de', version '3.10'.
 *
 * @package     plagiarism_urkund
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['studentemailcontent'] = 'Die Datei, die Sie bei der Aktivität {$a->modulename} im Kurs {$a->coursename} eingereicht haben, wurde nun durch die Plagiatsprüfung von Ouriginal geprüft. {$a->modulelink}

Wenn Sie wünschen, dass Ihre Datei nicht zum Abgleich bei künftigen Prüfungen durch die externe Softawre Ouriginal verwendet wird, können Sie den folgenden Link verwenden: {$a->optoutlink}';
$string['studentemailsubject'] = 'Dateiverarbeitung durch Ouriginal';
$string['submitondraft'] = 'Beim ersten Upload';
$string['submitonfinal'] = 'Wenn Fertig zur Bewertung';
$string['toolarge'] = 'Die Datei ist für Ouriginal zu groß';
$string['unknownwarning'] = 'Beim Versand der Datei zu Ouriginal ist ein Fehler aufgetreten.';
$string['unsupportedfiletype'] = 'Der Dateityp wird von Ouriginal nicht unterstützt.';
$string['urkund'] = 'Ouriginal Plagiatsprüfung';
$string['urkund_api'] = 'Ouriginal Integrationsadresse';
$string['urkund_api_help'] = 'Adresse der Ouriginal API';
$string['urkund_draft_submit'] = 'Wann soll die Datei Ouriginal zur Prüfung übergeben werden?';
$string['urkund_lang'] = 'Sprache';
$string['urkund_lang_help'] = 'Sprachcode bei Ouriginal';
$string['urkund_password'] = 'Kennwort';
$string['urkund_password_help'] = 'Von Ouriginal übermitteltes Kennwort für API-Zugriff';
$string['urkund_receiver'] = 'Empfängeradresse';
$string['urkund_receiver_help'] = 'Dies ist die einmalige Adresse, die Ouriginal den Trainer/innen zur Verfügung stellt.';
$string['urkund_show_student_report'] = 'Ähnlichkeitsbericht Teilnehmern anzeigen';
$string['urkund_show_student_report_help'] = 'Der Ähnlichkeitsbericht zeigt, welche Teile der Einreichung aus anderen Quellen stammen und wo Ouriginal dies zuerst finden konnte.';
$string['urkund_show_student_score'] = 'Ähnlichkeitswert Teilnehmern anzeigen';
$string['urkund_show_student_score_help'] = 'Der Ähnlichkeitswert ist der Prozentwert zu dem die Einreichung mit anderem Inhalt/Quellen übereinstimmt.';
$string['urkund_studentemail'] = 'E-Mail an Teilnehmer versenden';
$string['urkund_studentemail_help'] = 'Versendet einen E-Mail an Teilnehmer wenn eine Datei verarbeitet wurde und informiert darüber, dass ein Bericht zur Verfügung steht. Die E-Mail  enthält auch einen Link zum Abbestellen der Benachrichtigungen';
$string['urkund_username'] = 'Nutzername';
$string['urkund_username_help'] = 'Von Ouriginal übermittelter Nutzername für API-Zugriff';
$string['urkunddefaults'] = 'Ouriginal Standardeinstellungen';
$string['urkundexplain'] = 'Weitere Informationen zum Plugin unter <a href="https://ouriginal.com" target="_blank">ouriginal.com</a>';
$string['useurkund'] = 'Ouriginal aktivieren';
