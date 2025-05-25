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
 * Strings for component 'coursecertificate', language 'de', version '4.5'.
 *
 * @package     coursecertificate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityhiddenwarning'] = 'Diese Aktivität ist derzeit verborgen. Wenn Sie sie sichtbar machen, erhalten Teilnehmer/innen, die die Zugangsbeschränkungen für die Aktivität erfüllen, automatisch eine PDF-Kopie des Zertifikats.';
$string['automaticsend_helptitle'] = 'Hilfe beim automatischen Senden';
$string['automaticsenddisabled'] = 'Der automatische Versand dieses Zertifikats ist deaktiviert.';
$string['automaticsenddisabled_help'] = 'Wenn Sie diese Option deaktiviert lassen, müssen die Teilnehmer/innen auf den auf der Kursseite angezeigten Aktivitätslink klicken, um das Zertifikat zu erhalten, sobald sie die Voraussetzungen für diese Aktivität erfüllen.<br/><br/>
Wenn Sie diese Option aktivieren, erhalten die Teilnehmer/innen automatisch eine PDF-Kopie des Zertifikats, sobald sie die Voraussetzungen für diese Aktivität erfüllen. Beachten Sie, dass alle Kursteilnehmer/innen, die bereits die Zugangsbeschränkungen dieser Aktivität erfüllen, das Zertifikat erhalten, wenn Sie diese Funktion aktivieren.';
$string['automaticsenddisabledalert'] = 'Teilnehmer/innen, die die Voraussetzungen für diese Aktivität erfüllen, erhalten ihr Zertifikat, sobald sie darauf zugreifen.';
$string['automaticsendenabled'] = 'Das automatische Versenden dieses Zertifikats ist aktiviert.';
$string['automaticsendenabled_help'] = 'Wenn diese Option aktiviert ist, erhalten die Teilneh,er/innen automatisch eine PDF-Kopie des Zertifikats, sobald sie die Voraussetzungen für diese Aktivität erfüllen.<br/><br/>
Wenn Sie diese Option deaktivieren, müssen die Kursteilnehmer/innen auf den auf der Kursseite angezeigten Aktivitätslink klicken, um das Zertifikat zu erhalten, sofern sie die Voraussetzungen für diese Aktivität erfüllen.';
$string['certificateissues'] = 'Zertifikate';
$string['certifiedusers'] = 'Zertifizierte Nutzer/innen';
$string['chooseatemplate'] = 'Wählen Sie eine Vorlage...';
$string['code'] = 'Code';
$string['coursecertificate:addinstance'] = 'Eine neue Kurszertifikatsaktivität hinzufügen';
$string['coursecertificate:receive'] = 'Ausgestellte Zertifikate empfangen';
$string['coursecertificate:view'] = 'Kurszertifikat anzeigen';
$string['coursecertificate:viewreport'] = 'Bericht über die Ausstellung von Kurszertifikaten anzeigen';
$string['coursecompletiondate'] = 'Datum der Fertigstellung';
$string['courseinternalid'] = 'In URLs verwendete interne Kurs-ID';
$string['courseurl'] = 'Kurs-URL';
$string['disableautomaticsend'] = 'Die Teilnehmer/innen erhalten nicht mehr automatisch eine PDF-Kopie des Zertifikats, sobald sie die
 Voraussetzungen für diese Aktivität erfüllen. Stattdessen müssen sie auf den im Kurs angezeigten Aktivitätslink klicken, um das Zertifikat zu erhalten.
 um das Zertifikat zu erhalten, sobald sie die Voraussetzungen für diese Aktivität erfüllen.';
$string['enableautomaticsendpopup'] = 'Alle Teilnehmer/innen erhalten automatisch eine PDF-Kopie des Zertifikats, sobald sie die Voraussetzungen für dieser Aktivität erfüllen.<br/><br/>
Teilnehmer/innen, die die Voraussetzungen bereits erfüllen, aber noch nicht auf diese Aktivität zugegriffen haben, erhalten ihre Kopie ebenfalls sofort.<br/><br/>
Teilnehmer/innen, die bereits auf diese Aktivität zugegriffen haben, erhalten das Zertifikat nicht erneut.';
$string['expirydate'] = 'Verfallsdatum';
$string['issueddate'] = 'Ausstellungsdatum';
$string['managetemplates'] = 'Zertifikatsvorlagen verwalten';
$string['modulename'] = 'Kurszertifikat';
$string['modulename_help'] = 'Das Plugin für Kurszertifikate bietet den Teilnehmer/innen die Möglichkeit, ihre Leistungen mit Zertifikaten zu dokumentieren.
 Es erlaubt Ihnen, aus verschiedenen Zertifikatsvorlagen zu wählen, die automatisch Nutzerdaten wie Name, Kurs usw. anzeigen.
 wie z.B. vollständiger Name, Kurs, etc. <br/><br/> Die Nutzer/innen können eine PDF-Kopie des Zertifikats selbst herunterladen, indem sie auf diese klicken
 Es besteht die Möglichkeit, eine PDF-Kopie des Zertifikats automatisch per E-Mail zu versenden.<br/><br/>Wenn die für diese Aktivität verwendete Vorlage einen QR-Code enthält, können die Nutzer/innen diesen scannen, um ihre Zertifikate zu überprüfen. einen QR-Code, die Nutzer/innen können diesen scannen, um ihre Zertifikate zu überprüfen.';
$string['modulename_link'] = 'mod/certificate/view';
$string['modulenameplural'] = 'Kurszertifikate';
$string['notemplateselected'] = 'Die ausgewählte Vorlage kann nicht gefunden werden. Bitte gehen Sie zu den Aktivitätseinstellungen und wählen Sie eine neue aus.';
$string['notemplateselecteduser'] = 'Das Zertifikat ist nicht verfügbar. Bitte wenden Sie sich an den/die Trainer/in.';
$string['notemplateswarning'] = 'Es sind keine Vorlagen verfügbar. Bitte kontaktieren Sie die Website-Administration';
$string['notemplateswarningwithlink'] = 'Es sind keine Vorlagen verfügbar. Bitte gehen Sie zur <a href="{$a}">Zertifikatsvorlagen-Verwaltungsseite</a> und erstellen Sie eine neue.';
$string['nouserscertified'] = 'Es wurden keine Zertifikate ausgestellt.';
$string['page-mod-coursecertificate-x'] = 'Jede Modulseite eines Kurszertifikats';
$string['pluginadministration'] = 'Verwaltung von Kurszertifikaten';
$string['pluginname'] = 'Kurszertifikat';
$string['previewcoursefullname'] = 'Vollständiger Name des Kurses';
$string['previewcourseshortname'] = 'Kurzname des Kurses';
$string['privacy:metadata'] = 'Die Kurszertifikatsaktivität speichert keine persönlichen Daten.';
$string['revoke'] = 'Widerrufen';
$string['revokeissue'] = 'Sind Sie sicher, dass Sie diese Zertifikatsausstellung von diesem/r Nutzer/in widerrufen wollen?';
$string['selectdate'] = 'Datum auswählen';
$string['selecttemplatewarning'] = 'Sobald diese Aktivität mindestens ein Zertifikat ausgestellt hat, wird dieses Feld gesperrt und ist nicht mehr editierbar.';
$string['status'] = 'Status';
$string['taskissuecertificates'] = 'Kurszertifikate ausstellen';
$string['template'] = 'Vorlage';
