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
 * Strings for component 'tool_resetpasswords', language 'de', version '4.5'.
 *
 * @package     tool_resetpasswords
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Aktion';
$string['csvdelimiter'] = 'CSV Trennzeichen';
$string['emailbodyhtml'] = '<div> Hallo {$a->userfullname} , <br/>
das Kennwort für Ihr Nutzerkonto bei <b> {$a->sitename} </b> wurde durch die Administrator/innen zurückgesetzt.
<br/>Ihre aktuellen Zugangsdaten sind:
<br/><br/>
Anmeldename: {$a->username} <br/>
Kennwort: {$a->password} <br/><br/>
URL: {$a->URL}
</div>';
$string['emailsender'] = '{$a->siteshortname} Administrator';
$string['emailsubject'] = 'Kennwortrücksetzung Nutzerkonto';
$string['encoding'] = 'Verschlüsselung';
$string['escaped_users'] = 'Entgangene Nutzer/innen';
$string['examplecsv'] = 'Beispiel CSV';
$string['examplecsv_help'] = 'Laden Sie eine CSV Datei mit nur einer Spalte für <b>username</b>, so wie in der Beispielsdatei';
$string['password_cron'] = 'Kennwort wurde in cron erzeugt';
$string['pluginname'] = 'Massenrücksetzung des Kennworts';
$string['privacy:metadata'] = 'Das Plugin Kennwort-Rücksetzung speichert keine personenbezogenen Daten';
$string['reseted_users'] = 'Nutzer/innen mit zurückgesetztem Kennwort';
$string['resetpasswords'] = 'Kennwörter zurücksetzen';
$string['resetpasswords:bulkresetpassword'] = 'Massenrücksetzung des Kennworts durch CSV-Dateiupload';
$string['taskname'] = 'Massenrücksetzung des Kennworts';
$string['total'] = 'Gesamt';
$string['uploadusers'] = 'Massenrücksetzung des Kennworts';
$string['usernotfound'] = 'Nutzer/in nicht gefunden';
