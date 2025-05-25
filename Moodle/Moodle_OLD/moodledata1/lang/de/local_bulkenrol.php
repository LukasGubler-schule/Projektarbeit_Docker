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
 * Strings for component 'local_bulkenrol', language 'de', version '3.10'.
 *
 * @package     local_bulkenrol
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bulkenrol:enrolusers'] = 'Einschreibung per Liste nutzen';
$string['bulkenrol_form_intro'] = 'Auf dieser Seite können Sie Teilnehmer/innen per Liste in Ihren Kurs einschreiben. Die einzuschreibenden Teilnehmer/innen werden anhand der E-Mail-Adresse, welche in ihrem Moodle-Konto hinterlegt ist, identifiziert.';
$string['enrol_users'] = 'Teilnehmer/innen einschreiben';
$string['enrol_users_successful'] = 'Teilnehmer/innen erfolgreich per Liste eingeschrieben';
$string['enrolinfo_headline'] = 'Details zur Einschreibung';
$string['enrolplugin'] = 'Einschreibemethode';
$string['enrolplugin_desc'] = 'Die Einschreibemethode, die verwendet werden soll, um Teilnehmer/innen per Liste einzuschreiben. Falls die konfigurierte Einschreibemethode im Kurs, in den die Teilnehmer/innen per Liste eingeschrieben werden sollen, nicht aktiv oder hinzugefügt ist, wird sie automatisch aktiviert / hinzugefügt.';
$string['error_check_is_already_member'] = 'Es ist ein Fehler bei der Prüfung, ob der/die Teilnehmer/in (<em>{$a->email}</em>) bereits ein Mitglied der Gruppe (<em>{$a->groupname}</em>) ist, aufgetreten. {$a->error}';
$string['error_empty_line'] = 'Die Zeile {$a->line} ist leer und wird ignoriert.';
$string['error_enrol_user'] = 'Es ist ein Fehler beim Einschreiben des/der Teilnehmer/in mit der E-Mail-Adresse <em>{$a->email}</em> in den Kurs aufgetreten.';
$string['error_enrol_users'] = 'Es ist ein Fehler beim Einschreiben der Teilnehmer/innen in den Kurs aufgetreten.';
$string['error_exception_info'] = 'Information über den Fehler';
$string['error_getting_user_for_email'] = 'Es ist ein Fehler beim Abrufen des Nutzerkontos für die E-Mail-Adresse <em>{$a}</em> aus der Datenbank aufgetreten.';
$string['error_group_add_member'] = 'Es ist ein Fehler beim Hinzufügen des/der Teilnehmer/in mit der E-Mail-Adresse <em>{$a->email}</em> zur Gruppe <em>{$a->group}</em> aufgetreten.';
$string['error_group_add_members'] = 'Es ist ein Fehler beim Hinzufügen der Teilnehmer/innen zu der/den Gruppe(n) aufgetreten.';
$string['error_invalid_email'] = 'Ungültige E-Mail-Adresse gefunden in Zeile {$a->row} (<em>{$a->email}</em>). Diese Zeile wird ignoriert.';
$string['error_more_than_one_record_for_email'] = 'Es existiert mehr als ein Nutzerkonto mit E-Mail-Adresse <em>{$a}</em>.<br />Diese Zeile wird ignoriert und keine der existierenden Nutzer/innen wird eingeschrieben.';
$string['error_no_email'] = 'Keine E-Mail-Adresse gefunden in Zeile {$a->line} (<em>{$a->content}</em>). Diese Zeile wird ignoriert.';
$string['error_no_record_found_for_email'] = 'Kein existierendes Moodle-Konto mit E-Mail-Adresse <em>{$a}</em> gefunden.<br />Diese Zeile wird ignoriert, es wird kein Moodle-Konto angelegt.';
$string['error_no_valid_email_in_list'] = 'Es wurden keine gültigen E-Mail-Adressen in der angegebenen Liste gefunden.<br />Bitte <a href=\'{$a->url}\'>gehen Sie zurück und prüfen Sie Ihre Eingabe</a>.';
$string['error_usermails_empty'] = 'Die Liste mit E-Mail-Adressen ist leer. Bitte fügen Sie mindestens eine E-Mail-Adresse ein.';
$string['group_name_headline'] = 'Name der Gruppe';
$string['group_status_create'] = 'Gruppe wird erstellt';
$string['group_status_exists'] = 'Gruppe existiert bereits';
$string['group_status_headline'] = 'Status der Gruppe';
$string['groupinfos_headline'] = 'Gruppen in der Liste';
$string['hints'] = 'Hinweise';
$string['parameter_empty'] = 'Leerer Parameter';
$string['pluginname'] = 'Einschreibung per Liste';
$string['privacy:metadata'] = 'Das Plugin \'Einschreibung per Liste\' agiert als Werkzeug um Nutzer in Kurse einzuschreiben, speichert jedoch selbst keine personenbezogenen Daten.';
$string['role'] = 'Rolle';
$string['role_assigned'] = 'Zugewiesene Rolle';
$string['role_description'] = 'Die Rolle, welche genutzt werden soll, um die Teilnehmer/innen per Liste einzuschreiben.';
$string['row'] = 'Zeile';
$string['type_enrol'] = 'Einschreibemethode';
$string['user_enroled'] = 'Einschreibung';
$string['user_enroled_already'] = 'Teilnehmer/in ist bereits eingeschrieben';
$string['user_enroled_yes'] = 'Teilnehmer/in wird eingeschrieben';
$string['user_groups'] = 'Gruppenmitgliedschaft';
$string['user_groups_already'] = 'Teilnehmer/in ist bereits Gruppenmitglied';
$string['user_groups_yes'] = 'Teilnehmer/in wird zur Gruppe hinzugefügt';
$string['usermails'] = 'Liste mit E-Mail-Adressen';
$string['usermails_help'] = 'Um einen existierenden Moodle-Benutzer als Teilnehmer/in in diesen Kurs einzuschreiben, fügen Sie seine/ihre E-Mail-Adresse in diesem Formular ein, wobei ein Benutzer / E-Mail-Adresse pro Zeile vorgesehen ist.<br /><br />Beispiel:<br />alice@example.com<br />bob@example.com<br /><br />Optional ist es möglich auch Gruppen zu erstellen und die eingeschriebenen Teilnehmer/innen in die Gruppen einzutragen. Alles was Sie dazu tun müssen, ist eine zusätzliche Zeile, beginnend mit einer Raute und dem Gruppennamen, der Liste der Gruppenmitglieder voranzustellen.<br /><br />Beispiel:<br /># Gruppe 1<br />alice@example.com<br />bob@example.com<br /># Gruppe 2<br />carol@example.com<br />dave@example.com';
$string['users_to_enrol_in_course'] = 'Teilnehmer/innen, die in den Kurs eingeschrieben werden';
