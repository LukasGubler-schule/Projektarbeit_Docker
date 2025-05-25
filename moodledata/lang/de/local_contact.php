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
 * Strings for component 'local_contact', language 'de', version '4.5'.
 *
 * @package     local_contact
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configure'] = 'Konfigurieren Sie dieses Plugin';
$string['confirmationemail'] = '<p>[fromname],</p>
<p>Danke, dass Sie uns kontaktiert haben. Bei Bedarf werden wir uns sehr bald mit Ihnen in Verbindung setzen.</p>
<p>Mit freundlichen Grüßen,</p>
<p>[supportname]<br>
[sitefullname]<br>
<a href="[siteurl]">[siteurl]</a></p>';
$string['confirmationmessage'] = 'Danke, dass Sie uns kontaktiert haben. Bei Bedarf werden wir uns sehr bald mit Ihnen in Verbindung setzen.';
$string['confirmationsent'] = 'Eine E-Mail wurde an Ihre Adresse {$a} gesendet.';
$string['defaultsubject'] = 'Neue Nachricht';
$string['errorsending'] = 'Beim Senden der Nachricht ist ein Fehler aufgetreten. Versuchen Sie es später noch einmal.';
$string['errorsendingtitle'] = 'Fehler beim Senden von E-Mails';
$string['extrainfo'] = '<hr>
<p><strong>Zusätzliche Benutzerinformationen</strong></p>
<ul>
<li><strong>Website-Benutzer:</strong> [userstatus]</li>
<li><strong>Bevorzugte Sprache:</strong> [lang]</li>
<li><strong>Von der IP-Adresse:</strong> [userip]</li>
<li><strong>Webbrowser:</strong> [http_user_agent]</li>
<li><strong>Web-Formular:</strong> <a href="[http_referer]">[http_referer]</a></li>
</ul>';
$string['field-email'] = 'E-Mail';
$string['field-message'] = 'Nachricht';
$string['field-name'] = 'Name';
$string['field-subject'] = 'Betreff';
$string['forbidden'] = 'Verboten';
$string['globalhelp'] = 'Kontaktformular ist ein Plugin für Moodle, dass es Ihrer Website ermöglicht, Informationen zu verarbeiten, die über HTML-Webformulare an die Support-E-Mail-Adresse der Website übermittelt wurden.';
$string['lockedout'] = 'GESPERRT';
$string['norecaptcha'] = 'Kein ReCAPTCHA';
$string['norecaptcha_description'] = 'ReCaptcha nicht mit Formularen verwenden, die mit Kontaktformular erstellt wurden.';
$string['notconfirmed'] = 'NICHT BESTÄTIGT';
$string['pluginname'] = 'Kontaktformular';
$string['recapchainfo'] = 'ReCAPTCHA verwenden';
$string['recapchainfo_description'] = 'ReCAPTCHA ist zurzeit in Moodle aktiviert. Sie <strong>müssen</strong>:<br>
<ul>
<li>Sicherstellen, dass der {recaptcha} Tag in allen mit Kontaktformular erstellten Formularen in Moodle aktiviert ist.</li>
<li>Sicherstellen, dass das <a href="https://moodle.org/plugins/filter_filtercodes">FilterCodes-Plugin</a> installiert und aktiviert ist.</li>
</ul>';
$string['recipient_list'] = 'Liste aller verfügbarer Empfänger';
