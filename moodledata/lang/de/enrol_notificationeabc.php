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
 * Strings for component 'enrol_notificationeabc', language 'de', version '4.5'.
 *
 * @package     enrol_notificationeabc
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activar'] = 'Erstverifizierung aktivieren';
$string['activar_help'] = 'Im Falle einer Aktivierung wird durch die sofortige Ausführung des cron-Jobs auf Nutzer/innen überprüft, die im angegebenen Zeitraum eingeschrieben wurden.';
$string['activarglobal'] = 'Systemweit aktiv';
$string['activarglobal_help'] = 'Systemweit aktive Einschreibungsbenachrichtigungen';
$string['activarglobalenrolupdated'] = 'Systemweit aktiv';
$string['activarglobalenrolupdated_help'] = 'Systemweit aktive Einschreibungsupdatebenachrichtigungen';
$string['activarglobalunenrolalert'] = 'Systemweit aktiv';
$string['activarglobalunenrolalert_help'] = 'Systemweit aktive Einschreibungsbenachrichtigungen';
$string['activeenrolalert'] = 'Aktiver Einschreibealarm';
$string['activeenrolalert_help'] = 'Aktiver Einschreibealarm';
$string['activeenrolupdatedalert'] = 'Aktive Benachrichtigungen über Einschreibungsaktualisierungen';
$string['activeenrolupdatedalert_help'] = 'Aktive Benachrichtigungen über Einschreibungsaktualisierungen';
$string['activeunenrolalert'] = 'Aktive Benachrichtigungen über Einschreibungsabmeldungen';
$string['activeunenrolalert_help'] = 'Aktiver Abmeldealarm';
$string['emailsender'] = 'E-Mail-Absender';
$string['emailsender_help'] = 'Standardmäßig wird der E-Mail-Nutzersupport verwendet.';
$string['fecha'] = 'Zeitraum für die Überprüfung von den Nutzereinschreibungen';
$string['fecha_help'] = 'Geben Sie den Zeitraum an, für den Sie die erste Überprüfung durchführen möchten.';
$string['filelockedmail'] = 'Sie wurden in {$a->vollständiger Name} ({$a->url}) eingeschrieben.';
$string['location'] = 'Nachricht';
$string['location_help'] = 'Personalisieren Sie die Nachricht, dass ein Nutzer abgemeldet wird. Dieses Feld akzeptiert die folgenden Schlüsselworte, die dann dynamisch durch die entsprechenden Werte ersetzt werden.
<pre>
{COURSENAME} = Name des Kurses
{USERNAME} = Anmeldename
{NOMBRE} = Vorname
{APELLIDO} = Nachname
{URL} = Kurs-URL
</pre>';
$string['messageprovider:notificationeabc_enrolment'] = 'Mitteilungen über die Teilnehmereinschreibung';
$string['namesender'] = 'Name des Absenders';
$string['namesender_help'] = 'Standardmäßig wird der Name übernommen, der für den Nutzersupport festgelegt wurde.';
$string['notificationeabc:manage'] = 'Einschreibebenachrichtigungen verwalten';
$string['pluginname'] = 'Einschreibungsbenachrichtigungen';
$string['pluginname_desc'] = 'Einschreibungsbenachrichtigungen per E-Mail vornehmen';
$string['status'] = 'Aktive Einschreibungsbenachrichtigungen';
$string['subject'] = 'Einschreibungsbenachrichtigungen';
$string['unenrolmessage'] = 'Benutzerspezifische Nachricht';
$string['unenrolmessage_help'] = 'Personalisieren Sie die Benachrichtigung, dass ein Benutzer nicht mehr im Lernsystem angemeldet ist. Dieses Feld akzeptiert die folgenden Schlüsselworte, die dann dynamisch durch die entsprechenden Werte ersetzt werden.
<pre>
{COURSENAME} = Name des Kurses
{USERNAME} = Anmeldename
{NOMBRE} = Vorname
{APELLIDO} = Nachname
{URL} = Kurs-URL
</pre>';
$string['unenrolmessagedefault'] = 'Sie wurden von {$a->fullname} ({$a->url}) abgemeldet.';
$string['updatedenrolmessage'] = 'Personalisierte Nachricht';
$string['updatedenrolmessage_help'] = 'Personalisieren Sie die Benachrichtigung, dass ein Nutzer aktualisiert werden wird. Dieses Feld akzeptiert die folgenden Schlüsselworte, die dann dynamisch durch die entsprechenden Werte ersetzt werden.
<pre>
{COURSENAME} = Name des Kurses
{USERNAME} = Anmeldename
{NOMBRE} = Vorname
{APELLIDO} = Nachname
{URL} = Kurs-URL
</pre>';
$string['updatedenrolmessagedefault'] = 'Ihre Einschreibung von {$a->Vollname} wurde aktualisiert ({$a->url}).';
