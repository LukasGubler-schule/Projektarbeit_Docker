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
 * Strings for component 'etherpadlite', language 'de', version '4.5'.
 *
 * @package     etherpadlite
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityclose'] = 'Bearbeiten erlauben bis';
$string['activityopen'] = 'Bearbeiten erlauben von';
$string['activityopenclose'] = 'Bearbeiten erlauben von/bis';
$string['activityopenclose_help'] = 'Wenn diese Option aktiviert ist, können Teilnehmer/innen das Etherpad nur in angegebenen Zeitraum bearbeiten.';
$string['adminguests'] = 'Schreibzugriff für Gäste erlauben?';
$string['adminguestsdesc'] = 'Diese Option legt fest, dass berechtigte Nutzer/innen in dieser Aktivität für Gäste einen Schreibzugriff erteilen können.';
$string['apikey'] = 'API Schlüssel';
$string['apikeydesc'] = 'Der API Schlüssel wird vom Plugin benötigt, um sich mit Ihrem Etherpad Lite Server zu verbinden. Der API Schlüssel ist auf Ihrem Etherpad Lite Server gespeichert und kann von dort bezogen werden.';
$string['apiversion'] = 'API-Version';
$string['apiversiondesc'] = 'Die Standardversion ist 1.2. Sie sollten die Version 1.1 nur dann verwenden, wenn sie einen Server mit einer sehr alten Etherpad lite Version haben.';
$string['checkssl'] = 'HTTPS Zertifikat verifizieren';
$string['checkssldesc'] = 'Diese Option legt fest, dass das HTTPS Zertifikat des Etherpad Lite Servers beim Verbindungsaufbau verifiziert wird, um Man-In-The-Middle Angriffe zu unterbinden.';
$string['connected'] = 'Verbunden';
$string['connecttimeout'] = 'Verbindungs-Timeout';
$string['connecttimeoutdesc'] = 'Der Verbindungs-Timeout ist die maximale Zeit in Sekunden, die zum Herstellen der Verbindung mit dem Server zulässig ist. Es kann auf 0 gesetzt werden, um diese Grenze zu deaktivieren, dies ist jedoch in einer Produktionsumgebung nicht ratsam.<br>
Siehe auch: <a href="https://curl.se/libcurl/c/CURLOPT_CONNECTTIMEOUT.html" target="blank">CURLOPT_CONNECTTIMEOUT</a>';
$string['cookiedomain'] = 'Cookie Domain';
$string['cookiedomaindesc'] = 'Hier können Sie die Domain eingeben, welche im Session Cookie hinterlegt werden soll, damit der Etherpad-Lite-Server das Cookie erkennt. Wenn Moodle unter der Domain moodle.example.com und Ihr Etherpad-Lite-Server unter etherpadlite.example.com läuft, sollte Ihre Cookie Domain auf .example.com lauten.';
$string['cookietime'] = 'Session Gültigkeit';
$string['cookietimedesc'] = 'Geben Sie hier die Zeit (in Sekunden) ein, bis zu der die Etherpad-Lite-Session gültig sein soll.';
$string['copylink'] = 'Pad-Link kopieren';
$string['copylinkdesc'] = 'Fügen Sie den Navigationseinstellungen des Moduls eine Schaltfläche hinzu, die es Trainer/innen und Manager/innen ermöglicht, den vollständigen Link für das aktuelle Pad abzurufen.';
$string['deletein24hours'] = '24 Stunden';
$string['deleteinonehour'] = '1 Stunde';
$string['deleteintwelvehours'] = '12 Stunden';
$string['deletemgroupads'] = 'Gruppenpads löschen in';
$string['deletemgroupadsdesc'] = 'Alle Gruppenpads, die im Gruppenmodus von Moodle angelegt worden sind, werden gelöscht.';
$string['deletenow'] = 'Sofort';
$string['donotdelete'] = 'Nicht löschen';
$string['error_config_has_no_api_key'] = 'Der Api-Schlüssel ist noch nicht konfiguriert! Bitte überprüfen Sie Ihre Konfiguration!';
$string['error_config_has_no_valid_baseurl'] = 'Die konfigurierte Server-URL ist nicht gültig! Bitte überprüfen Sie Ihre Konfiguration!';
$string['error_could_not_get_api_version'] = 'Der Moodle-Server konnte die Api-Version nicht abrufen! Ihr Moodle-Server kann sich möglicherweise nicht mit dem Etherpad-Server verbinden. Bitte überprüfen Sie Ihre Konfiguration!';
$string['error_invalid_api_key'] = 'Der Api-Schlüssel ist ungültig! Bitte überprüfen Sie Ihre Konfiguration!';
$string['error_wrong_api_version'] = 'Die Api-Version ist nicht kompatibel! Bitte überprüfen Sie die Version Ihres Etherpad-Servers!';
$string['etherpadlite'] = 'Etherpad Lite';
$string['etherpadlite:addinstance'] = 'Etherpad hinzufügen';
$string['etherpadlite_link_copied_to_clipboard'] = 'Der Link für dieses Etherpad wurde in die Zwischenablage kopiert.';
$string['etherpadliteintro'] = 'Beschreibung des Etherpads';
$string['etherpadlitename'] = 'Name des Etherpads';
$string['fullscreen'] = 'Vollbildschirm';
$string['guestsallowed'] = 'Schreibzugriff für Gäste erlauben?';
$string['guestsallowed_help'] = 'Diese Option legt fest, dass Gäste im Etherpad schreiben dürfen. Wenn nicht, dürfen Gäste den Inhalt des Etherpads nur lesen.';
$string['ignoresecurity'] = 'Sicherheit ignorieren';
$string['ignoresecuritydesc'] = 'Wenn diese Option aktiviert ist, wird die URL trotz der Einstellungen für "cURL-Blocked-Hosts-Liste" zugelassen (siehe: curlsecurityblockedhosts).';
$string['link_copied'] = 'Link kopiert';
$string['minwidth'] = 'Minimale Breite';
$string['minwidthdesc'] = 'Wenn Sie auf kleinen Displays wie Smartphones kein sehr minimiertes Etherpad wünschen, können Sie eine Mindestbreite für das Etherpad festlegen.';
$string['modulename'] = 'Etherpad Lite';
$string['modulename_help'] = 'Mit der Aktivität \'Etherpad Lite\' können mehrere Personen kollaborativ an einem Text arbeiten. Der Text wird automatisch synchronisiert, während geschrieben wird.

Der Etherpad Lite Server, der hinter dieser Aktivität steht, ist noch im Beta-Stadium. Probleme könnten auftreten, werden aber nicht erwartet.';
$string['modulenameplural'] = 'Etherpads Lite';
$string['not_connected'] = 'Nicht verbunden';
$string['padname'] = 'Name für alle Etherpads';
$string['padnamedesc'] = 'Ein allgemeingültiger Pad-Name kann nützlich sein, um alle Pads dieser Moodle Installation auf Ihrem Etherpad Lite Server wiederzuerkennen. Pad-Gruppen werden dabei automatisch angelegt.';
$string['pluginadministration'] = 'Etherpad Lite Administration';
$string['pluginname'] = 'Etherpad Lite';
$string['privacy:metadata'] = 'Das Plugin "Etherpad Lite" speichert keine personenbezogenen Daten.';
$string['resetting_data'] = 'Daten von Etherpad Lite zurücksetzen';
$string['responsiveiframe'] = 'Responsiver iFrame';
$string['responsiveiframedesc'] = 'Mit dieser Option passt der iFrame für den Etherpad Lite-Editor gut in ein ansprechendes Moodle-Design und skaliert seine Breite entsprechend dem Browserfenster. Andernfalls hat der Etherpad Lite-Editor eine feste Breite, die sich beim Laden der Seite grundsätzlich an die Breite des Browserfensters anpasst, aber nicht skaliert, wenn sich die Größe des Fensters ändert.';
$string['restorewindowsize'] = 'Fenstergröße wiederherstellen';
$string['ssl'] = 'HTTPS Weiterleitung';
$string['ssldesc'] = 'Diese Option legt fest, dass Nutzer/innen automatisch zu HTTPS weitergeleitet, wenn ein Etherpad geöffnet wird.';
$string['summaryguest'] = 'Sie sind als Gast eingeloggt, weshalb Sie nur eine Leseansicht dieses Etherpads sehen. Laden Sie die Seite neu, um Änderungen anzuzeigen.';
$string['timeout'] = 'Timeout';
$string['timeoutdesc'] = 'Timeout ist die Gesamtzeit in Sekunden, die auf die Antwort auf eine bestimmte Anfrage gewartet wird, einschließlich der Zeit, die zum Herstellen der Verbindung benötigt wird, und der Zeit, die der Server benötigt, um zu antworten. Es kann auf 0 gesetzt werden, um diese Grenze zu deaktivieren, dies ist jedoch in einer Produktionsumgebung nicht ratsam.<br>
Siehe auch: <a href="https://curl.se/libcurl/c/CURLOPT_TIMEOUT.html" target="blank">CURLOPT_TIMEOUT</a>';
$string['url'] = 'Server URL';
$string['urldesc'] = 'Dies ist die URL Ihres Etherpad Lite Servers in der Form:
http[s]://Host[:Port]/[UnterVerzeichnis/]';
$string['urlisblocked'] = 'Der momentane Server "{$a}" ist blockiert.';
$string['urlisblocked_but_ignored'] = 'Der aktuelle Host "{$a}" ist gesperrt, aber "ignoresecurity" ist aktiviert.';
$string['urlnotset'] = 'Der Etherpad-Server ist für diese Website nicht konfiguriert.';
