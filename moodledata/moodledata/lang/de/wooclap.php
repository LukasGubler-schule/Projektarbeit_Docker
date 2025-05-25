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
 * Strings for component 'wooclap', language 'de', version '4.5'.
 *
 * @package     wooclap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accesskeyid'] = 'Plattform-ID (accessKeyId)';
$string['accesskeyid-description'] = 'Access Key ID, die zur Kommunikation mit Wooclap verwendet wird. Sollte mit \'ak.\' beginnen.';
$string['baseurl'] = 'Base URL';
$string['baseurl-description'] = 'Dies ist nur zum Debuggen oder Testen. Ändern Sie diesen Wert nur auf Anfrage des Wooclap-Supportteams.';
$string['consent-screen:agree'] = 'Ich stimme zu';
$string['consent-screen:description'] = '<b>Wooclap</b> lässt die Teilnehmer/innen eine aktive Rolle in ihrer Lernerfahrung spielen.';
$string['consent-screen:disagree'] = 'Ich stimme nicht zu';
$string['consent-screen:explanation'] = 'Damit einige Optionen funktionieren, wie z.B. das Senden eines personalisierten Berichts am Ende einer Sitzung, fragt Wooclap nach Ihrer E-Mail-Adresse. Sie wird niemals für Marketingzwecke verwendet. Klicken Sie auf "Ich stimme zu", um Ihre E-Mail-Adresse an Wooclap weiterzugeben, oder auf "Ich stimme nicht zu", um ohne die erweiterten Funktionen fortzufahren.';
$string['customcompletion'] = 'Abschlussstatus nur von Wooclap aktualisiert';
$string['customcompletion_help'] = 'Wenn diese Option aktiviert ist, gilt die Aktivität als abgeschlossen, wenn Teilnehmer/innen mindestens eine Wooclap-Frage beantwortet haben.';
$string['customcompletiongroup'] = 'Wooclap benutzerdefinierter Abschluss';
$string['error-auth-nosession'] = 'Fehlende Session bei der Authentifizierung';
$string['error-callback-is-not-url'] = 'Callback-Parameter ist keine gültige URL';
$string['error-couldnotauth'] = 'Konnte während der Authentifizierung Nutzer/in oder Kurs nicht erhalten';
$string['error-couldnotloadevents'] = 'Konnte die Wooclap-Events der Person nicht laden';
$string['error-couldnotperformv3upgradestep1'] = 'Der Schritt 1 des V3-Upgrades konnte nicht durchgeführt werden. Stellen Sie sicher, dass die accesskeyid, die baseurl und der secretaccesskey in den Plugin-Einstellungen konfiguriert sind.';
$string['error-couldnotperformv3upgradestep2'] = 'Der Schritt 2 des V3-Upgrades konnte nicht durchgeführt werden';
$string['error-couldnotredirect'] = 'Konnte nicht weiterleiten';
$string['error-couldnotupdatereport'] = 'Konnte Bericht nicht aktualisieren';
$string['error-during-quiz-import'] = 'Der Test kann nicht in Wooclap-Fragen umgewandelt werden, da er nur Fragen enthält, die nicht mit Wooclap kompatibel sind.';
$string['error-invalid-callback-url'] = 'Die angegebene Callback-URL stimmt nicht mit dem in den Einstellungen definierten baseurl-Domainnamen überein.';
$string['error-invalidjoinurl'] = 'Ungültige Join-URL';
$string['error-invalidtoken'] = 'Ungültiges Token';
$string['error-missingparameters'] = 'Fehlende Parameter';
$string['error-noeventid'] = 'Konnte Event-ID nicht bestimmen';
$string['error-reportdeprecated'] = 'report_wooclap.php ist veraltet. Verwenden Sie stattdessen report_wooclap_v3.php.';
$string['importquiz_help'] = 'Nicht alle Moodle Test-Fragen werden von Wooclap unterstützt. Klicken Sie [hier](https://docs.google.com/spreadsheets/d/1qNfegWe99EBQD2Sv2HEDD2i2cC1OVM-x1H9E2ZWliA4/edit?gid=0#gid=0), um mehr Informationen über die Kompatibilität der Fragen zwischen den beiden Plattformen zu erhalten.';
$string['modulename'] = 'Wooclap';
$string['modulename_help'] = 'Dieses Modul bietet eine Integration der interaktiven Wooclap-Plattform in Moodle';
$string['modulenameplural'] = 'Wooclap';
$string['modulenamepluralformatted'] = 'Liste der Wooclap-Aktivitäten';
$string['nowooclap'] = 'Es gibt keine Wooclap-Instanz';
$string['pingNOTOK'] = 'Die Verbindung mit Wooclap konnte nicht hergestellt werden. Bitte überprüfen Sie Ihre Einstellungen.';
$string['pingOK'] = 'Verbindung mit Wooclap hergestellt';
$string['pluginadministration'] = 'Wooclap-Administration';
$string['pluginname'] = 'Wooclap';
$string['privacy:metadata:wooclap_server'] = 'Für die Integration mit Wooclap müssen Benutzerdaten ausgetauscht werden.';
$string['privacy:metadata:wooclap_server:userid'] = 'Die Nutzer-ID wird von Moodle gesendet, um Ihnen den Zugriff auf Ihre Daten auf Wooclap zu ermöglichen.';
$string['quiz'] = 'Einen Moodle-Test importieren';
$string['secretaccesskey'] = 'API Key (secretAccessKey)';
$string['secretaccesskey-description'] = 'Geheimer Zugangsschlüssel für die Kommunikation mit Wooclap. Sollte mit \'sk.\' beginnen.';
$string['showconsentscreen'] = 'Zustimmungsbildschirm anzeigen?';
$string['showconsentscreen-description'] = 'Wenn diese Option aktiviert ist, bittet Wooclap die Teilnehmer vor der Erfassung ihrer E-Mail-Adresse um ihre Zustimmung.';
$string['testconnection'] = 'Verbindung testen';
$string['warn-missing-config-during-upgrade-to-v3'] = 'Um die Migration durchführen zu können, sollten die accesskeyid, die baseurl und der secretaccesskey in den Einstellungen konfiguriert werden. Die Migration vorerst überspringen: Sie können sie später über das Skript cli/v3_upgrade.php durchführen. Hinweis: Wenn Sie das Plugin verwenden möchten, ist diese Migration erforderlich.';
$string['wooclap:addinstance'] = 'Eine Wooclap-Aktivität zu Ihrem Kurs hinzufügen';
$string['wooclap:view'] = 'Eine Wooclap-Aktivität ansehen';
$string['wooclapeventid'] = 'Eine Wooclap-Aktivität duplizieren';
$string['wooclapintro'] = 'Beschreibung';
$string['wooclapname'] = 'Name';
$string['wooclapsettings'] = 'Einstellungen';
