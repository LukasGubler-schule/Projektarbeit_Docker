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
 * Strings for component 'kialo', language 'de', version '4.5'.
 *
 * @package     kialo
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptterms'] = 'AGB bestätigen';
$string['acceptterms_desc'] = 'Um das Kialo Plugin zu aktivieren, müssen die Kialo Edu’s <a href="{$a->terms}" target="_blank">AGB</a> im Namen aller Moodle Nutzer/innen dieser Instanz bestätigt werden. Lesen Sie auch unsere <a href="{$a->privacy}" target="_blank">Datenschutzbestimmungen</a> und <a href="{$a->data_security}" target="_blank">Informationen zur Datensicherheit</a>.';
$string['cachedef_nonces'] = 'Speichert Nonces vorübergehend, um LTI Anfragen abzusichern.';
$string['close_prompt'] = 'Sie können dieses Fenster nun schließen.';
$string['discussion_title'] = 'Diskussion';
$string['display'] = 'Anzeige';
$string['display_embed'] = 'Eingebettete Anzeige';
$string['display_help'] = 'Wählen Sie, wie die Kialo-Diskussion in Moodle angezeigt wird. Standardmäßig ist sie eingebettet.';
$string['display_label'] = 'Anzeige';
$string['display_new_window'] = 'In neuem Fenster anzeigen';
$string['errors:deeplinking'] = 'Mit der Diskussions-Auswahl ist etwas schief gegangen. Bitte versuchen Sie es erneut.';
$string['errors:invalidrequest'] = 'Ungültige Anfrage';
$string['errors:ltiauth'] = 'Die Authentifizierung ist aufgrund eines unerwarteten FEhlers fehlgeschlagen. Bitte versuchen Sie es erneut.';
$string['errors:missingcourseid'] = 'Fehlende Kurs ID';
$string['errors:missingidtoken'] = 'Fehlender ID Token';
$string['errors:missingsessiondata'] = 'Fehlende Sitzungsdaten';
$string['errors:noguestaccess'] = 'Gäste können nicht auf diese Aktivität zugreifen. Bitte melden Sie sich an.';
$string['errors:nopermissiontoview'] = 'Sie haben nicht das Recht, diese Aktivität anzusehen.';
$string['errors:resourcelink'] = 'Die Aktivität kann aufgrund eines unerwarteten Fehlers nicht angezeigt werden. Bitte versuchen Sie es erneut.';
$string['kialo:addinstance'] = 'Neue Kialo Diskussion';
$string['kialo:kialo_admin'] = 'Vergebene Admin-Rechte in Kialo Diskussion';
$string['kialo:view'] = 'Kialo Diskussion ansehen';
$string['kialofieldset'] = 'Kialo Fieldset';
$string['kialoname'] = 'Aktivitätsname';
$string['kialosettings'] = 'Einstellungen';
$string['kialourl'] = 'Kialo URL';
$string['kialourl_desc'] = 'Die URL der Kialo Instanz, die verwendet werden soll. Lassen Sie diese leer, um die Standardeinstellung (edu-prod) zu verwenden oder verwenden Sie stattdessen den Wert der TARGET_KIALO_URL Umgebungsvariable.';
$string['modulename'] = 'Kialo Diskussion';
$string['modulename_help'] = 'Die Aktivität Kialo Diskussion erlaubt es Kialo Diskussionen in Ihrem Moodle Kurs einzubinden. Teilnehmer/innen können direkt in Moodle an der Diskussion teilnehmen, ohne manuell ein Kialo Konto erstellen zu müssen. Kialo Diskussionen sind eine gute Möglichkeit, um kritisches Denken, Argumentieren und angerete Klassendiskussionen zu unterrichten und zu fördern.';
$string['modulename_link'] = 'https://support.kialo-edu.com/en/hc/moodle';
$string['modulenameplural'] = 'Kialo Diskussionen';
$string['pluginadministration'] = 'Kialo Diskussionen bearbeiten';
$string['pluginname'] = 'Kialo Diskussion';
$string['privacy:metadata:kialo'] = 'Nutzerdaten müssen an Kialo Edu übermittelt werden, damit automatisch Konten für Moodle Nutzer/innen auf kialo-edu.com erstellt werden können und so die Nutzererfahrung möglichst angenehm zu gestalten.';
$string['privacy:metadata:kialo:courseid'] = 'Die ID des Kurses der Nutzerin / des Nutzers.';
$string['privacy:metadata:kialo:email'] = 'Die E-Mail-Adresse wird von Moodle übermittelt, um Ihnen den Zugriff auf Ihre Daten auf Kialo Edu zu ermöglichen.';
$string['privacy:metadata:kialo:fullname'] = 'Ihr vollständiger Name wird an Kialo Edu übermittelt, um eine bessere Benutzererfahrung zu gewährleisten.';
$string['privacy:metadata:kialo:language'] = 'Ihre Spracheinstellungen werden an Kialo Edu übermittelt, um die Spracheinstellungen automatisch zu treffen.';
$string['privacy:metadata:kialo:nullproviderreason'] = 'Es werden in der Moodle Datenbank keine Nutzerdaten von Kialo gespeichert. Alle Daten werden extern auf kialo-edu.com gespeichert.';
$string['privacy:metadata:kialo:picture'] = 'Ihr Benutzerkonto Avatar wird an Kialo Edu übermittelt, um eine bessere Nutzererfahrung zu ermöglichen.';
$string['privacy:metadata:kialo:role'] = 'Die Rolle im Kurs wird übermittelt, um die richtigen Rechte in der Kialo Diskussion zu vergeben.';
$string['privacy:metadata:kialo:timezone'] = 'Ihre Zeitzone wird an Kialo Edu übermittelt, um die Zeitzone automatisch einzustellen.';
$string['privacy:metadata:kialo:userid'] = 'Die Nutzer-ID wird von Moodle übermittelt, damit Sie auf Ihre Daten in Kialo zugreifen können.';
$string['privacy:metadata:kialo:username'] = 'Der Nutzername wird von Moodle übermittelt, um den Standard-Benutzernamen auf Kialo Edu einzustellen.';
$string['redirect_loading'] = 'Lädt';
$string['redirect_title'] = 'Lädt';
$string['select_discussion'] = 'Diskussion auwählen';
$string['select_discussion_help'] = 'Öffnet Kialo auf einem neuen Tab, um eine Diskussion für diese Aktivität auszuwählen. Wenn Sie noch kein Kialo Konto haben, können Sie direkt eines erstellen.';
$string['showmore'] = 'Mehr anzeigen';
$string['termsnotaccepted'] = 'Sie müssen die <a href="{$a->terms}" target="_blank">AGB</a> von Kialo akzeptieren, bevor Sie das Kialo Plugin aktivieren können.';
