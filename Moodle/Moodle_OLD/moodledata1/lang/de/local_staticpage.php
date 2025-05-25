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
 * Strings for component 'local_staticpage', language 'de', version '3.10'.
 *
 * @package     local_staticpage
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apacherewrite'] = 'Apache mod_rewrite Nutzung erzwingen';
$string['apacherewrite_desc'] = 'Statische Seiten sollen ausschließlich unter einer griffigen URL, die von Apache mod_rewrite erzeugt wird, bereitgestellt werden. Bitte lesen Sie die <a href="https://github.com/moodle-an-hochschulen/moodle-local_staticpage/blob/master/README.md#apache-mod_rewrite">Plugin Dokumentation auf Github</a> für Details.';
$string['checkavailability'] = 'Verfügbarkeit prüfen';
$string['checkavailability_desc'] = 'Konfigurieren Sie, ob Moodle die Verfügbarkeit statischer Seiten prüfen soll oder nicht.';
$string['checkavailabilityconnecttimeout'] = 'Zeitüberschreitung beim Verbindungsaufbau';
$string['checkavailabilityconnecttimeout_desc'] = 'Konfigurieren Sie die maximale Anzahl von Sekunden, die Moodle während der Verfügbarkeitsprüfung auf den Verbindungsaufbau warten soll. Der Wert 0 setzt eine unbeschränkte Ausführungszeit.';
$string['checkavailabilityno'] = 'Nein, Verfügbarkeit nicht prüfen';
$string['checkavailabilityresponsedisabled'] = 'Nicht geprüft';
$string['checkavailabilityresponseerror'] = 'Nicht verfügbar - Fehler';
$string['checkavailabilityresponsefail'] = 'Nicht verfügbar - Non-2xx';
$string['checkavailabilityresponsesuccess'] = 'Verfügbar';
$string['checkavailabilitytimeout'] = 'Zeitüberschreitung';
$string['checkavailabilitytimeout_desc'] = 'Konfigurieren Sie die maximale Anzahl von Sekunden, die cURL zur Durchführung der Verfügbarkeitsprüfung verwenden darf. Der Wert 0 setzt eine unbeschränkte Ausführungszeit.';
$string['checkavailabilityyes'] = 'Ja, Verfügbarkeit prüfen';
$string['cleanhtml'] = 'HTML Code bereinigen';
$string['cleanhtml_desc'] = 'Konfigurieren Sie, ob der HTML Code einer statischen Seite bei der Ausgabe bereinigt werden soll (und dabei spezielle HTML Tags wie &lt;iframe&gt; entfernt werden). Bitte lesen Sie die <a href="https://github.com/moodle-an-hochschulen/moodle-local_staticpage/blob/master/README.md#24-process-content">Plugin Dokumentation auf Github</a> für Details.';
$string['cleanhtmlno'] = 'Nein, HTML Code nicht bereinigen';
$string['cleanhtmlyes'] = 'Ja, HTML Code bereinigen';
$string['documentheadingsource'] = 'Datenquelle für die Dokumentenüberschrift';
$string['documentheadingsource_desc'] = 'Die Datenquelle, aus der die Überschrift des Dokuments bezogen werden soll';
$string['documentnavbarsource'] = 'Datenquelle für den Brotkrumenpfad';
$string['documentnavbarsource_desc'] = 'Die Datenquelle, aus der die Beschriftung für den Brotkrumenpfad (verwendet in Moodles "Navbar") bezogen werden soll';
$string['documents'] = 'Dokumente';
$string['documents_desc'] = 'Die .html Dateien mit dem HTML Code für die statischen Seiten. Bitte lesen Sie die <a href="https://github.com/moodle-an-hochschulen/moodle-local_staticpage/blob/master/README.md#1-documents">Plugin Dokumentation auf Github</a> für Details.';
$string['documenttitlesource'] = 'Datenquelle für den Dokumententitel';
$string['documenttitlesource_desc'] = 'Die Datenquelle, aus der der Titel des Dokuments (sichtbar in der Titelzeile des Browsers) bezogen werden soll';
$string['documenttitlesourceh1'] = 'Erstes h1 tag im HTML Code (normalerweise direkt nach dem öffnenden body Tag platziert)';
$string['documenttitlesourcehead'] = 'Erstes title tag im HTML Code (normalerweise innerhalb des head tags platziert)';
$string['forcelogin'] = 'Anmeldung notwendig';
$string['forcelogin_desc'] = 'Statische Seiten sollen nur für eingeloggte Nutzer/innen oder auch für nicht-eingeloggte Nutzer/innen zugänglich sein. Das Verhalten kann hier für statische Seiten gesetzt werden. Alternativ kann auch die globale Einstellung "Anmeldung notwendig" von Moodle auf statische Seiten angewendet werden. Bitte lesen Sie die <a href="https://github.com/moodle-an-hochschulen/moodle-local_staticpage/blob/master/README.md#23-force-login">plugin documentation on Github</a>Plugin Dokumentation auf Github</a> für Details.';
$string['forceloginglobal'] = 'Globale Einstellung $CFG->forcelogin übernehmen';
$string['pagenotfound'] = 'Diese Seite existiert leider nicht';
$string['pluginname'] = 'Statische Seiten';
$string['privacy:metadata'] = 'Das Plugin \'Statische Seiten\' bietet Moodle-Administrator/innen erweiterte Funktionalitäten an, speichert aber keine personenbezogenen Daten.';
$string['processcontent'] = 'Inhalte anpassen';
$string['processfilters'] = 'Filter anwenden';
$string['processfilters_desc'] = 'Konfigurieren Sie hier, ob bei der Ausgabe einer statischen Seite Moodle Filter (insbesondere der Multilanguage Filter zur Unterstützung von mehrsprachigen statischen Seiten) angewendet werden sollen. Bitte lesen Sie die <a href="https://github.com/moodle-an-hochschulen/moodle-local_staticpage/blob/master/README.md#24-process-content">Plugin Dokumentation auf Github</a> für Details.';
$string['processfiltersno'] = 'Nein, Filter nicht anwenden';
$string['processfiltersyes'] = 'Ja, Filter anwenden';
$string['settingspagelist'] = 'Liste statischer Seiten';
$string['settingspagelistentryfilename'] = 'Folgendes Dokument wurde gefunden:<br /><strong>{$a}</strong>';
$string['settingspagelistentrypagename'] = 'Moodle hat vom Dateinamen des Dokuments folgenden Seitennamen abgeleitet:<br /><strong>{$a}</strong>';
$string['settingspagelistentryrewritedisabled'] = 'Die statische Seite sollte unter folgender griffiger URL verfügbar sein, dies wurde aber nicht verifiziert da die Verfügbarkeitsprüfung deaktiviert ist:<br /><strong>{$a}</strong>';
$string['settingspagelistentryrewriteerror'] = 'Die statische Seite sollte unter folgender griffiger URL verfügbar sein, leider wird sie ein Browser dort aber nicht herunterladen und anzeigen können da es ein Problem beim Verbindungsaufbau gab oder der Server langsamer als der in checkavailabilitytimout eingestellte Wert geantwortet hat (vielleicht gibt es ein Problem mit Ihrer Webserver oder mod_rewrite Konfiguration):<br /><strong>{$a}</strong>';
$string['settingspagelistentryrewritefail'] = 'Die statische Seite sollte unter folgender griffiger URL verfügbar sein, leider wird sie ein Browser dort aber nicht herunterladen und anzeigen können da die Verfügbarkeitsprüfung einen Non-2xx HTTP Status Code ermittelte (vielleicht gibt es ein Problem mit Ihrer Webserver oder mod_rewrite Konfiguration):<br /><strong>{$a}</strong>';
$string['settingspagelistentryrewritesuccess'] = 'Die statische Seite ist unter folgender griffiger URL verfügbar und kann unter dieser URL verlinkt werden:<br /><strong>{$a}</strong>';
$string['settingspagelistentrystandarddisabled'] = 'Die statische Seite sollte unter folgender Standard-URL verfügbar sein, dies wurde aber nicht verifiziert da die Verfügbarkeitsprüfung deaktiviert ist:<br /><strong>{$a}</strong>';
$string['settingspagelistentrystandarderror'] = 'Die statische Seite sollte unter folgender Standard-URL verfügbar sein, leider wird sie ein Browser dort aber nicht herunterladen und anzeigen können da es ein Problem beim Verbindungsaufbau gab oder der Server langsamer als der in checkavailabilitytimout eingestellte Wert geantwortet hat (vielleicht gibt es ein Problem mit Ihrer Webserver Konfiguration):<br /><strong>{$a}</strong>';
$string['settingspagelistentrystandardfail'] = 'Die statische Seite sollte unter folgender Standard-URL verfügbar sein, leider wird sie ein Browser dort aber nicht herunterladen und anzeigen können da die Verfügbarkeitsprüfung einen Non-2xx HTTP Status Code ermittelte (vielleicht gibt es ein Problem mit Ihrer Webserver Konfiguration):<br /><strong>{$a}</strong>';
$string['settingspagelistentrystandardsuccess'] = 'Die statische Seite ist unter folgender Standard-URL verfügbar und kann unter dieser URL verlinkt werden:<br /><strong>{$a}</strong>';
$string['settingspagelistinstruction'] = 'In dieser Liste finden Sie alle statischen Seiten, die im <a href="{$a}">Dokumentenbereich</a> hochgeladen wurden, zusammen mit ihren URLs';
$string['settingspagelistnofiles'] = 'Der <a href="{$a}">Dokumentenbereich</a> enthält keine .html Dateien, es werden also keine statischen Seiten bereitgestellt. Bitte lesen Sie die <a href="https://github.com/moodle-an-hochschulen/moodle-local_staticpage/blob/master/README.md#1-documents">Plugin Dokumentation auf Github</a> für Details.';
$string['staticpage:managedocuments'] = 'Dokumente für statische Seiten verwalten';
$string['upgrade_notice_2016020307'] = '<strong>UPGRADE HINWEIS:</strong> Die Dokumente aus dem Dokumenten-Verzeichnis wurden in einen neuen Dateiablagebereich in Moodle kopiert. Sie können das bisher genutzte Dokumenten-Verzeichnis {$a} nun löschen. Für weitere Hinweise zum Upgrade des Plugins, insbesondere wenn Sie die Mehrsprachen-Funktion des Plugins genutzt haben, lesen Sie bitte die <a href="https://github.com/moodle-an-hochschulen/moodle-local_staticpage/blob/master/README.md#upgrading-from-previous-versions">Plugin Dokumentation auf Github</a> des Plugins.';
