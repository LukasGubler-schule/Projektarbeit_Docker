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
 * Strings for component 'local_mailtest', language 'de', version '4.5'.
 *
 * @package     local_mailtest
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionalinfo'] = 'Weitere Informationen:';
$string['alwaysshowlog'] = 'Das Protokoll der Kommunikation mit dem Mail-Server immer zeigen, auch wenn keine Fehler auftreten.';
$string['bimidmarcfailure'] = 'BIMI aufgrund von einer oder mehrerer fehlgeschlagenen DMARC-Abhängigkeiten fehlgeschlagen';
$string['bimiinvalidlogo'] = 'Fehlendes BIMI Logo: {$a}';
$string['biminorecordfound'] = 'BIMI Eintrag fehlt.';
$string['bimipctinvalid'] = 'DMARC %-Wert muss für BIMI auf 100 gesetzt werden.';
$string['bimirecordfound'] = 'BIMI Eintrag gefunden.';
$string['bimitagsfound'] = 'BIMI Tags sind gültig.';
$string['checkingdomain'] = 'DNS Sicherheitscheck für {$a}:';
$string['commoncommissues'] = '<li>Ihre Moodle Seite könnte von einer Firewall gesperrt sein, die die Kommunikation mit Ihrem Mail-Server verhindert.</li>
<li>Sie müssen eventuell die IP Adresse Ihrer Webseite in einer Liste von erlaubten IP Adressen in Ihrer Mail-Server-Konfiguration eintragen.</li>
<li>Stellen Sie sicher, dass Ihr SMTP Server läuft.</li>';
$string['commondeliveryissues'] = 'Wenn die E-Mail nicht innerhalb von 15-30 Minuten versendet wird, überprüfen Sie folgendes:
<ul>
<li>Stellen Sie sicher das die Empfänger E-Mail-Adresse richtig ist.</li>
<li>Überprüfen Sie den Spam/Junk Ordner des Empfängers.</li>
<li>Stellen Sie sicher, dass das E-Mail-Postfach des Empfängers nicht voll ist.</li>
<li>Überprüfen Sie das E-Mail-Postfach Ihrer No-Reply-Adresse, ob die E-Mail aus irgendeinem Grund nicht versendet wurde.</li>
<li>Stellen Sie sicher, dass Ihr E-Mail-Inhalt nicht von irgend einem Filter auf Ihrem Mail-Server oder auf dem Mail-Server des Empfängers als Spam/Junk klassifiziert wird.</li>
<li>Stellen Sie sicher, dass die IP Adresse Ihres Mail-Servers nicht von einem Mail Anbieter black-gelistet wurde.</a></li>
{$a}
</ul>';
$string['connectionlog'] = 'Kommunikations-Log mit Mail Server';
$string['credit'] = 'Michael Milette - <a href="http://www.instruxmedia.com/">TNG Consulting Inc.</a>';
$string['divertallemails'] = 'Alle E-Mails umleiten';
$string['divertedto'] = 'Umgeleitet nach {$a}';
$string['dkiminvalidrecord'] = 'Der DKIM Eintrag muss gültige v, k und p Tags enthalten.';
$string['dkimmissingselector'] = 'DKIM Selektor wurde nicht konfiguriert.';
$string['dkimnorecordfound'] = 'DKIM Eintrag fehlt.';
$string['dkimrecordfound'] = 'DKIM Eintrag gefunden';
$string['dkimselectorconfigured'] = 'DKIM Selektor ist konfiguriert.';
$string['dkimspffailed'] = 'Für DMARC müssen SPF oder DKIM Einträge konfiguiert werden.';
$string['dkimvalidrecord'] = 'Das Format des DKIM Eintrags ist gültig.';
$string['dmarcnorecordfound'] = 'DMARC Eintrag fehlt.';
$string['dmarcpctinvalid'] = 'DMARC %-Wert liegt außerhalb des gültigen Bereichs.';
$string['dmarcrecordfound'] = 'DMARC Eintrag gefunden.';
$string['dmarcruainvalid'] = 'Das Format des DMARC rua Eintrags ist ungültig.';
$string['dmarcrufinvalid'] = 'Das Format des DMARC ruf Eintrags ist ungültig.';
$string['dmarctagsfound'] = 'Tags für DMARC gefunden.';
$string['emailfail'] = 'Senden der E-Mail Nachricht fehlgeschlagen';
$string['errorcommunications'] = 'Moodle konnte nicht mit Ihrem Mailserver kommunizieren.</p><p><strong>Empfehlung:</strong></p><p>Beginnen Sie mit der Überprüfung Ihrer Moodle <a href="{$a}">SMTP Mail-Einstellungen</a>.</p><p>Wenn sie korrekt aussehen, überprüfen Sie Ihre SMTP-Server- und / oder Firewall-Einstellungen, um sicherzustellen, dass sie so konfiguriert sind, dass sie SMTP-Verbindungen von Ihrem Moodle-Webserver und von Ihrer No-Reply E-Mail-Adresse annehmen. Weitere Hilfe finden Sie im FAQ Abschnitt der Dokumentation.';
$string['errorsend'] = 'Die Testnachricht konnte nicht an den SMTP Server weitergeleitet werden. Überprüfen Sie Ihre <a href="../../admin/settings.php?section=messagesettingemail" target="blank"> SMTP Einstellungen </a>.';
$string['errorunknown'] = '<p>Ein unvorhergesehener Fehler ist aufgetreten.</p><p><strong>Empfehlungen:</strong></p><p>Sehen Sie sich den Kommunikations-Log unten an. Eine Liste von SMTP-Codes kann unter <a href="https://www.rfc-editor.org/rfc/rfc5321.html#section-4.2.3" target="_blank">RFC 5321</a> und <a href="https://datatracker.ietf.org/doc/html/rfc4954#section-6" target="_blank">RFC 4954</a> aufgerufen werden.</p>';
$string['failaccessdenied'] = '<li>Der Mailserver hat die Verbindung geschlossen.</li>';
$string['failclosedport'] = 'Server Port {$a} ist geschlossen. Haben Sie die richtige :Port Nummer angegeben?';
$string['failcredentials'] = '<li>Authentifizierungsdaten sind ungültig oder nicht vorhanden. Stellen Sie sicher, dass Sie die richtigen Anmeldeinformationen eingetragen haben.</li>';
$string['faildnslookup'] = 'DNS Lookup fehlgeschlagen. Stellen Sie sicher, dass \'<strong>{$a}</strong>\' mit eine Adresse des Mailservers aufgelöst wird.';
$string['failmissingport'] = 'Sie müssen ev. eine :Port Nummer für "{$a}" Verbindungen angeben.';
$string['failmissingprotocol'] = 'Sie müssen ev. ein Sicherheitsprotokoll (SSL/TLS) mit Port \'{$a}\' angeben.';
$string['failoutboundsmtpblocked'] = 'Ausgehende SMTP Verbindungen werden blockiert. Blockiert eine Firewall die Verbindung zu Ihrem Mailserver?';
$string['failphpmailer'] = 'Es könnte ein Problem mit Ihrer Moodle Installation geben. Eine mögliche Ursache ist eine fehlerhafte Besitzer/Gruppenberechtigung von Applikations-Dateien.';
$string['failphpmailerconfig'] = 'Das Mail-Service auf Ihrem Moodle Webserver läuft nicht oder ist falsch konfiguriert.';
$string['failprotocolmismatch'] = 'Protokoll \'{$a->protocol}\' und Port \'{$a->port}\' passen nicht zusammen.';
$string['failunknownmailbox'] = '<li>Das VON Postfach wurde nicht gefunden, aufgrund von Website-Richtlinien abgelehnt oder es kann nicht darauf zugregriffen werden. Stellen Sie sicher, dass sowohl die AN als auch die VON E-Mail-Adressen gültig sind und existieren. Die "No-Reply" Adresse benötigt auch eine gültiges Postfach auf Ihrem Mailserver.';
$string['from'] = '{$a->type}: <strong>{$a->email}</strong> (<a href="{$a->url}">{$a->label}</a>)';
$string['fromemail'] = 'Von der E-Mail-Adresse';
$string['heading'] = 'E-Mail Konfigurationstest';
$string['iconlabel'] = 'Sicherheitscheck für {$a}';
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
$string['noemailever'] = '<p>Auf dieser Seite wurden E-Mails über <strong>$CFG-&gt;noemailever = true;</strong> deaktiviert.</p>';
$string['nologavailable'] = '<p>Wenn die PHP mail() Funktion verwendet wird, steht kein Logging zur Verfügung. Es könnten aber Serverlogs vorhanden sein. In Linux sind Serverlogs meist unter:</p>
<ul>
<li>/var/log/maillog</li>
<li>/var/log/mail.log</li>
<li>/var/adm/maillog</li>
<li>/var/adm/syslog/mail.log</li>
</ul>
<p>Ein benutzerdefinierter Pfad für mail.log Einstellungen könnte in php.ini definiert worden sein.</p>';
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
$string['server'] = 'Server: {$a}';
$string['smtpmethod'] = 'SMTP hosts: {$a}';
$string['spfinvalidrecord'] = 'Der SPF Record muss mindestens einen Eintrag enthalten.';
$string['spfnorecordfound'] = 'SPF Eintrag fehlt.';
$string['spfrecordfound'] = 'SPF Eintrag gefunden.';
$string['spfvalidrecord'] = 'Das Format des SPF Eintrags ist gültig.';
$string['testing'] = 'E-Mail Konfigurationstest';
$string['toemail'] = 'An die E-Mail-Adresse';
$string['winsyslog'] = 'Ereignisprotokoll in Windows';
$string['youremail'] = 'Ihre E-Mail-Adresse';
