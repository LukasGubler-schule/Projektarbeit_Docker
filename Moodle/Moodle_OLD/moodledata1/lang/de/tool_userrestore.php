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
 * Strings for component 'tool_userrestore', language 'de', version '3.10'.
 *
 * @package     tool_userrestore
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['button:backtocourse'] = 'Zurück zum Kurs';
$string['button:backtoform'] = 'Zurück zum Wiederherstellungsformular';
$string['button:userrestore:continue'] = 'Nutzerkonten wiederherstellen';
$string['config:cleanlogs:disabled'] = 'Automatische Löschung der Wiederherstellungshistorie ist allgemein abgeschaltet.';
$string['config:tool:disabled'] = 'Die Funktion Benutzerdaten-Wiederherstellung ist grundsätzlich abgeschaltet.';
$string['deletedby'] = 'Gelöscht von';
$string['email:user:restore:body'] = '<p>Guten Tag {fullname}</p>
<p>Nach einer Löschung wurden Ihr Nutzerkonto wiederhergestellt.</p>
<p>Evtl. ist Ihr Anmeldename nicht korrekt, da alle Daten aus Log-Dateien erzeugt werden und möglicherweise nicht alle Log-Daten lange genug aufbewahrt wurden, um eine vollständige Rekonstruktion zu ermöglichen.</p>
<p>Ihr aktueller Anmeldename lautet: {username}</p>
<p>Wenn die Daten nicht stimmen oder andere Fragen bestehen, wenden Sie sich an: {contact}.</p>
<p>Wenn Ihr bisheriges Kennwort nicht funktioniert, nutzen Sie Ihre E-Mail-Adresse für die Zurücksetzung des Kennworts.<br/>
{loginlink}</p>
<p>Mit freundlichen Grüßen<br/>{signature}</p>';
$string['email:user:restore:subject'] = 'Ihr Nutzerkonto wurde wiederhergestellt';
$string['err:statustable:set_sql'] = 'set_sql() is disabled. This table defines it\'s own and is not customomizable';
$string['form:label:email'] = 'E-Mail-Text';
$string['form:label:sendmail'] = 'E-Mail senden';
$string['form:label:subject'] = 'E-Mail-Betreff';
$string['form:static:email:template'] = 'You can use the following template strings in your email.
They will automatically be replaced with the correct variables. Please use the exactly as indicated, or the result might be unexpected.
Die folgenden Platzhalter können im E-Mail Text genutzt werden. Sie werden automatisch mit durch die aktuellen Inhaltern ersetzt. Schreibweise bitte exakt einhalten.
<ul>
<li>{firstname} - Vorname des wiederhergestellten Benutzers</li>
<li>{lastname} - Nachname des wiederhergestellten Benutzers</li>
<li>{fullname} - Zusammengesetzter Name des wiederhergestellten Benutzers</li>
<li>{username} - Anmeldename des wiederhergestellten Benutzers (ist ggf. anders als zu Löschzeitpunkt)</li>
<li>{signature} - Signatur (Name, der Support-Person der moodle-Installation.)</li>
<li>{contact} - Support E-Mail  (Support-E-Mail der moodle-Installation.)</li>
<li>{loginlink} - Login-link der moodle-Installation (mit Anmeldename)</li>
</ul>';
$string['hasloginfo'] = 'Log verfügbar?';
$string['label:users:potential'] = 'Potentielle Nutzerkonten';
$string['link:currentstatus:overview'] = 'Zeige aktuelle Statusänderung';
$string['link:log'] = 'Log-Daten wiederherstellen';
$string['link:log:overview'] = 'Zeige Statusänderungs-Log';
$string['link:restore'] = 'Nutzerkonto wiederherstellen';
$string['link:viewstatus'] = 'Zeige Statusliste';
$string['msg:no-users-to-restore'] = 'keine Wiederherstellungshistorie gefunden.';
$string['page:view:log.php:introduction'] = 'Diese Tabelle zeigt den  Statusbericht zu den wiederhergestellten Benutzerdaten.';
$string['page:view:restore.php:introduction'] = 'Dieses Formular ermöglicht die Auswahl von gelöschten Benutzerdaten zur Wiederherstellung und Zusendung einer Info-Mail. Beachten:Die Daten werden aus dem Event.Log erzeugt.';
$string['pluginname'] = 'Nutzerwiederherstellung';
$string['promo'] = 'Nutzerwiederherstellung für  Moodle';
$string['promodesc'] = 'Dieses Plugin wurde von Sebsoft Managed Hosting & Software Development erstellt. Deutsche Übersetzeung: www.lern.link.de
    (<a href=\'http://www.sebsoft.nl/\' target=\'_new\'>http://sebsoft.nl</a>).<br /><br />
    {$a}<br /><br />';
$string['restore:deleted-user-not-found'] = 'Nicht wiederherstellbar: Das gelöschte Nutzerkonto wurde nicht gefunden';
$string['restore:email-exists'] = 'Nicht wiederherstellbar: Die E-Mail-Adresse \'{$a->email}\' wird von einem aktiven Nutzerkonto verwendet';
$string['restore:user-mnet-not-local'] = 'Nicht wiederherstellbar: MNET host für diesen Benutzer ist kein MNET-Host';
$string['restore:user-restored'] = 'Nutzerkonto <i>\'{$a->username}\'</i> (\'{$a->email}\') wurde wiederhergestellt';
$string['restore:username-exists'] = 'Nicht wiederherstellbar: Anmeldename \'{$a->username}\' wird von einem aktiven Benutzer verwendet';
$string['restoresettings'] = 'Einstellungen Nutzerwiederherstellung';
$string['restoresettingsdesc'] = '';
$string['setting:cleanlogsafter'] = 'Wiederherstellungshistorie regelmäßig löschen';
$string['setting:desc:cleanlogsafter'] = 'Einstellungen zur Löschung der Wiederherstellunghistorie. Alle älteren Logdaten werden unwiderruflich gelöscht.';
$string['setting:desc:enablecleanlogs'] = 'Aktiviert/deaktiviert automatisches löschen der Wiederherstellungshistorie.';
$string['setting:enablecleanlogs'] = 'Log-Datei aufräumen';
$string['table:log:all'] = 'Wiederherstellungshistorie';
$string['table:log:latest'] = 'Aktuelle Wiederherstellungshistorie';
$string['table:logs'] = 'Log-Daten';
$string['task:logclean'] = 'Wiederherstellungshistorie aufräumen';
$string['th:action'] = 'Aktion';
$string['th:mailedto'] = 'E-Mail an';
$string['th:mailsent'] = 'E-Mail gesendet';
$string['th:name'] = 'Name';
$string['th:restored'] = 'Wiederhergestellt';
$string['th:timecreated'] = 'Erzeugt am';
$string['th:userid'] = 'Nutzer-ID';
$string['timedeleted'] = 'Gelöscht am';
