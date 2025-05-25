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
 * Strings for component 'block_dukreminder', language 'de', version '3.10'.
 *
 * @package     block_dukreminder
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['blockstring'] = 'Kursabschlusserinnerungen';
$string['criteria_all'] = 'Alle';
$string['criteria_completion'] = 'Kursabschluss';
$string['criteria_enrolment'] = 'Kurseinschreibung';
$string['criteria_error'] = 'Eine Kombination aus absolutem Datum und dem Kriterium Kurseinschreibung kann nicht verwendet werden.';
$string['criteria_error2'] = 'Eine Kombination aus relativer Zeitspanne und dem Kriterium Alle kann nicht verwendet werden.';
$string['daterelative_error'] = 'Es ist kein negativer Wert hier erlaubt.';
$string['email_teacher_notification'] = 'Soeben wurden folgende {$a->amount} Personen im Kurs {$a->course} erinnert:';
$string['form_criteria'] = 'Erinnerungskriterien';
$string['form_criteria_help'] = 'Es stehen verschiedene Kriterien zur Verfügung. Bei Unklarheiten sind in der Block-Dokumentation ausführliche Informationen vorhanden und Anwendungsfälle beschrieben.';
$string['form_dateabsolute'] = 'absolutes Versanddatum';
$string['form_dateabsolute_help'] = 'Das absolute Versanddatum legt eine Deadline fest, an der die Erinnerungen versendet werden.';
$string['form_daterelative'] = 'relative Versandzeit';
$string['form_daterelative_completion'] = 'Verschicke eine Erinnerung bei Kursabschluss';
$string['form_daterelative_help'] = 'Die relative Versandzeit gibt an in welchem relativem Abstand zum gewählten Kriterium die Erinnerung versendet werden soll.';
$string['form_delete'] = 'Sind Sie sich sicher ?';
$string['form_header_criteria'] = 'Kriterien';
$string['form_header_general'] = 'Allgemeines';
$string['form_header_groups'] = 'Gruppenfilter';
$string['form_header_report'] = 'Einstellungen';
$string['form_header_time'] = 'Zeit';
$string['form_mailssent'] = 'Gesendete Erinnerungen';
$string['form_placeholder'] = 'Platzhalter';
$string['form_subject'] = 'E-Mail Betreff';
$string['form_subject_help'] = 'Betreff der Benachrichtungs-Email';
$string['form_text'] = 'E-Mail-Text für Teilnehmende';
$string['form_text_help'] = 'Hier wird der Text für den Bericht an die KursteilnehmerInnen erfasst. Folgende Platzhalter stehen zur Auswahl: ###username### wird in der E-Mail mit dem Namen des Teilnehmers ersetzt, ###usermail### mit dessen Mail und ###coursename### mit dem aktuellen Kurs.';
$string['form_text_teacher'] = 'Email-Text für Lehrende';
$string['form_text_teacher_help'] = 'Hier wird der Text für den Bericht an die Lehrenden erfasst. Folgende Platzhalter stehen zur Auswahl: ###coursename### wird in der E-Mail mit dem Kursnamen ersetzt. ###users### wird durch eine Liste der benachrichtigten Kursteilnehmer ersetzt, und ###usercount### durch die Anzahl der benachrichtigten Teilnehmer.';
$string['form_title'] = 'Interne Beschreibung';
$string['form_to_groups'] = 'Empfänger';
$string['form_to_mail'] = 'Benachrichtigung zusätzlicher Nutzer';
$string['form_to_mail_help'] = 'Hier können mit ; getrennte E-Mail-Adressen als sonstige Empfänger für den Lehrenden-Bericht definiert werden.';
$string['form_to_reportsuperior'] = 'Bericht an Kursverantwortlichen';
$string['form_to_reporttrainer'] = 'Benachrichtigung an die Lehrenden';
$string['form_to_reporttrainer_help'] = 'Wenn aktiviert, wird dem Kursverantwortlichen eine Bericht gesendet.';
$string['form_to_status'] = 'Kursabschlussstatus';
$string['form_to_status_all'] = 'Alle';
$string['form_to_status_completed'] = 'Mit Abschluss';
$string['form_to_status_notcompleted'] = 'Ohne Abschluss';
$string['newblock:addinstance'] = 'Füge einen Block hinzu';
$string['newblock:myaddinstance'] = 'Füge einen Block zu meinem Moodle hinzu';
$string['pluginname'] = 'Kursabschlusserinnerung';
$string['tab_course_reminders'] = 'Kurserinnerungen';
$string['tab_new_reminder'] = 'Neue Erinnerung';
$string['to_mail_error'] = 'Falsche E-Mail-Adresse! Die E-Mail-Adressen müssen durch ein ; getrennt werden';
