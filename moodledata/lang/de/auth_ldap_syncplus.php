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
 * Strings for component 'auth_ldap_syncplus', language 'de', version '4.5'.
 *
 * @package     auth_ldap_syncplus
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_ldap_syncplusdescription'] = '<p>Diese Anmeldemethode ermöglicht die Authentifizierung über einen externen LDAP-Server.

<p>Um ein neues LDAP-basiertes Nutzerkonto in Moodle anzulegen, muss vorher das LDAP-Nutzerkonto existieren. Beim ersten Login wird automatisch ein neues Nutzerkonto in der Moodle-Datenbank, wobei Anmeldename und Kennwort vorher von LDAP geprüft werden. Das Modul sorgt dafür, dass ausgewählte Nutzerdaten von LDAP in die Moodle-Datenbank übernommen werden können. Wenn das Kennwort weiterhin ausschließlich von LDAP verwaltet wird, ermöglicht dies einheitliche Anmeldedaten in unterschiedlichen Moodle-Instanzen und bei anderen Servern.

<p>Bei allen weiteren Logins werden weiterhin Anmeldename und Kennwort vom LDAP-Server überprüft.';
$string['auth_remove_deletewithgraceperiod'] = 'Intern sperren und erst nach der Wartefrist endgültig intern löschen';
$string['nouserentriestosuspend'] = 'Keine Nutzerkonten zum Sperren gefunden';
$string['pluginname'] = 'LDAP server (Sync Plus)';
$string['privacy:metadata'] = 'Das Plugin \'Authentifizierung LDAP-Server (Sync Plus)\' speichert keine personenbezogenen Daten.';
$string['removeuser_graceperiod'] = 'Wartefrist bis zur endgültigen Löschung';
$string['removeuser_graceperiod_desc'] = 'Wenn ein Nutzerkonto intern gesperrt wurde, wartet das Synchronisierungsskript die angegebene Anzahl von Tagen, bevor das Nutzerkonto endgültig intern gelöscht wird. Falls das LDAP-Nutzerkonto im LDAP Server während der Wartefrist wieder erscheint, wird der zugehörige Moodle-Account reaktiviert. Hinweis: Diese Einstellung wird nur verarbeitet, wenn die Einstellung "Entfernte externe Nutzer/innen" auf "Intern sperren und erst nach der Wartefrist endgültig intern löschen" gesetzt ist.';
$string['sync_script_createuser_enabled'] = 'Wenn diese Option aktiviert ist (Standard), wird das Cron-Synchronisierungsskript Moodle-Accounts für alle LDAP Nutzer, welche sich noch nie in Moodle eingeloggt haben, anlegen.
Wenn diese Option deaktiviert ist, wird das Cron-Synchronisierungsskript keine Moodle-Accounts für alle LDAP Nutzer anlegen.';
$string['sync_script_createuser_enabled_key'] = 'Neue Nutzer/innen erstellen';
$string['syncroles'] = 'Synchronisierung von LDAP-Nutzerrollen (Sync Plus)';
$string['synctask'] = 'Synchronisierung von LDAP-Nutzerkonten (Sync Plus)';
$string['userentriestosuspend'] = 'Nutzerkonten zum Sperren: {$a}';
$string['waitinginremovalqueue'] = 'Vorgemerkt zur endgültigen Löschung nach der {$a->days}-tägigen Wartefrist: {$a->name} ID {$a->id}';
