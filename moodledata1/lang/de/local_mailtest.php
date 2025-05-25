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
 * Strings for component 'local_mailtest', language 'de', version '3.10'.
 *
 * @package     local_mailtest
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alwaysshowlog'] = 'Das Protokoll der Kommunikation mit dem Mail-Server immer zeigen, auch wenn keine Fehler auftreten.';
$string['credit'] = 'Michael Milette - <a href="http://www.instruxmedia.com/">TNG Consulting Inc.</a>';
$string['errorcommunications'] = 'Moodle konnte nicht mit Ihrem Mailserver kommunizieren.</p><p><strong>Empfehlung:</strong></p><p>Beginnen Sie mit der Überprüfung Ihrer Moodle <a href="{$a}">SMTP Mail-Einstellungen</a>.</p><p>Wenn sie korrekt aussehen, überprüfen Sie Ihre SMTP-Server- und / oder Firewall-Einstellungen, um sicherzustellen, dass sie so konfiguriert sind, dass sie SMTP-Verbindungen von Ihrem Moodle-Webserver und von Ihrer E-Mail-Antwort annehmen.';
$string['errorsend'] = 'Die Testnachricht konnte nicht an den SMTP Server weitergeleitet werden. Überprüfen Sie Ihre <a href="../../admin/settings.php?section=messagesettingemail" target="blank"> SMTP Einstellungen </a>.';
$string['from'] = '{$a->type}: <strong>{$a->email}</strong> (<a href="{$a->url}">{$a->label}</a>)';
$string['fromemail'] = 'Von der E-Mail-Adresse';
$string['heading'] = 'E-Mail Konfigurationstest';
$string['message'] = '<P>Dies ist eine Testnachricht. Bitte ignorieren!</p>
<hr>
<p><strong>Benutzerinformationen:</strong></p>
<ul>
<li><strong>Anmeldestatus: </strong>{$a->regstatus}</li>
<li><strong> Bevorzugte Sprache: </strong>{$a->lang}</li>
<li><strong>Webbrowser: </strong>{$a->browser}</li>
<li><strong>Nachricht übermittelt von: </strong>{$a->referer}</li>
<li><strong>Moodle-Version: </strong>{$a->release}</li>
<li><strong>IP-Adresse: </strong>{$a->ip}</li>
</ul>';
$string['notregistered'] = 'Nicht registriert oder nicht angemeldet.';
$string['phpmethod'] = 'PHP default Methode';
$string['pluginname'] = 'Mail Test';
$string['pluginname_help'] = 'Das Plugin "Mail-Test" wird die Moodle-E-Mail-Konfiguration überprüfen, indem Sie eine Nachricht an eine bestimmte E-Mail-Adresse schicken. Diese Funktion ist nur für Administratoren vorgesehen.';
$string['primaryadminemail'] = 'E-Mail–Adresse des primären Administrators';
$string['privacy:metadata'] = 'Das Plugin "Mail-Test" speichert keine personenbezogenen Daten.';
$string['recipientisrequired'] = 'Sie müssen die E-Mail-Adresse des Empfängers angeben.';
$string['registered'] = 'Registrierter Nutzer ({$a}).';
$string['sendmethod'] = 'E-Mail-Versand-Methode';
$string['sendtest'] = 'Testnachricht senden';
$string['sentmail'] = 'Die Textnachricht wurde erfolgreich an den SMTP-Server ausgeliefert.';
$string['sentmailphp'] = 'Die Testnachricht wurde erfolgreich von PHP Mail akzeptiert.';
$string['smtpmethod'] = 'SMTP hosts: {$a}';
$string['toemail'] = 'An die E-Mail-Adresse';
$string['youremail'] = 'Ihre E-Mail-Adresse';
