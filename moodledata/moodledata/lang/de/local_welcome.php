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
 * Strings for component 'local_welcome', language 'de', version '4.5'.
 *
 * @package     local_welcome
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_plugins'] = 'Authentifizierungs-Plugins';
$string['auth_plugins_desc'] = 'Wählen Sie alle Authentifizierungs-Plugins, bei denen eine Willkommensnachricht gesendet werden soll';
$string['configure'] = 'Dieses Plugin konfigurieren';
$string['customprofilefields'] = 'Individuelle Profilfelder';
$string['default_moderator_email'] = '<html>
<body>
<table cellspacing="0" cellpadding="8">
<tr><td colspan="2"><h3>Neuer Benutzer [[fullname]]</h3>
Ein neues Benutzerkonto mit folgenden Details wurde eingerichtet:</td></tr>
<tr><td>Name:</td><td>[[fullname]]</td></tr>
<tr><td>Nutzername: </td><td>[[username]]</td></tr>
<tr><td>E-Mail: </td><td>[[email]]</td></tr>
</table>
</body>
</html>';
$string['default_moderator_email_subject'] = 'Ein neuer Benutzer auf [[sitename]] : [[fullname]]';
$string['default_user_email'] = '<html>
<body>
<table cellspacing="0" cellpadding="8">
<tr><td colspan="2"><h3>Herzlich Willkommen [[fullname]]</h3>
Ihr Benutzerkonto ist angelegt und Sie können starten. <br>Das Benutzerkonto bei [[sitelink]] wurde mit folgenden Details angelegt:</td></tr>
<tr><td>Name:</td><td>[[fullname]]</td></tr>
<tr><td>Nutzername: </td><td>[[username]]</td></tr>
<tr><td>E-Mail: </td><td>[[email]]</td></tr>
<tr><td colspan="2">Sollte Ihr Passwort verloren gehen, ist es hier leicht zu erneuern:<br>[[resetpasswordlink]]</tr>
</table>
</body>
</html>';
$string['default_user_email_subject'] = 'Herzlich Willkommen [[fullname]] bei [[sitename]]';
$string['defaultprofilefields'] = 'Standard-Profilfelder';
$string['fieldname'] = 'Feldname';
$string['globalhelp'] = 'Dieses Plugin für Moodle sendet konfigurierbare Willkommensnachrichten an neue Benutzer.
<br><br>
Das Plugin nutze das Event-System von Moodle und wird aktiv, wenn ein neuer Benutzer manuell angelegt wurde oder ein Benutzerkonto mittels E-Mail basierter Selbstregistrierung erstellt wird.
<br><br>
Die Tabelle auf dieser Seite zeigt die verfügbaren Profilfelder, die in einer E-Mail verwendet werden können.
Die angezeigten Werte sind die für Ihren Nutzer eingetragenen Werte und werden beim Versenden der Nachricht durch die aktuellen Benutzerwerte ersetzt.';
$string['message_moderator'] = 'Moderatorennachricht';
$string['message_moderator_desc'] = 'Diese Nachricht wird an eine Person gesendet, die über Anmeldungen benachrichtigt werden soll.';
$string['message_moderator_enabled'] = 'Moderatorennachricht einschalten';
$string['message_moderator_enabled_desc'] = 'Hier können Sie die Moderatorennachricht ein- und ausschalten';
$string['message_moderator_subject'] = 'Betreff der Moderatorennachricht';
$string['message_moderator_subject_desc'] = 'Hier tragen Sie die Betreffzeile für die Moderatorennachricht ein. Sie können [[fullname]] verwenden, um den Namen des neuen Benutzers anzuzeigen.';
$string['message_user'] = 'Benutzernachricht';
$string['message_user_desc'] = 'Diese Nachricht wird dem neuen Benutzer zugeschickt. Sie können HTML und Platzhalter verwenden, ( [[sitename]],[[fullname]],[[email]],[[resetpasswordlink]],[[email]] )';
$string['message_user_enabled'] = 'Benutzernachricht einschalten';
$string['message_user_enabled_desc'] = 'Hier können Sie die Benutzernachricht ein- und ausschalten';
$string['message_user_subject'] = 'Betreff der Benutzernachricht';
$string['message_user_subject_desc'] = 'Hier tragen Sie die Betreffzeile für die Benutzernachricht ein. Sie können [[fullname]] verwenden, um den Namen des neuen Benutzers anzuzeigen.';
$string['moderator_email'] = 'Moderatorennachricht';
$string['moderator_email_desc'] = 'Benutzernachrichten werden an diese E-Mail-Adresse gesendet';
$string['pluginname'] = 'Moodle Willkommen';
$string['resetpass'] = 'Passwort erneuern';
$string['sender_email'] = 'Absender E-Mail-Adresse';
$string['sender_email_desc'] = 'In der Benutzernachricht wird diese E-Mail-Adresse als Absender angezeigt';
$string['sender_firstname'] = 'Vorname im Absender der Benutzernachricht';
$string['sender_firstname_desc'] = 'Der Vorname wird dem Empfänger der Benutzernachricht angezeigt';
$string['sender_lastname'] = 'Nachname im Absender der Benutzernachricht';
$string['sender_lastname_desc'] = 'Der Nachname wird dem Empfänger der Benutzernachricht angezeigt';
$string['type'] = 'Typ';
$string['welcomefields'] = 'Zusätzliche Vorlagenfelder';
$string['yourvalue'] = 'Ihre Werte';
