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
 * Strings for component 'report_benchmark', language 'de', version '4.5'.
 *
 * @package     report_benchmark
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminreport'] = 'System Benchmark';
$string['benchfail'] = '<b>Achtung!</b><br />Die Performance der Moodle-Plattform ist nicht optimal.';
$string['benchmark'] = 'Benchmark';
$string['benchmark:view'] = 'Benchmark-Report anzeigen';
$string['benchshare'] = 'Meine Ergebnisse im Forum teilen';
$string['benchsuccess'] = '<b>Herzlichen Glückwunsch!</b><br />Die Performance der Moodle-Plattform scheint perfekt zu sein.';
$string['cloadmoreinfo'] = 'Konfigurationsdatei "config.php" laden';
$string['cloadname'] = 'Ladezeit von Moodle';
$string['coursereadmoreinfo'] = 'Ein Kurs wird mehrmals gelesen, um die Lesegeschwindigkeit der Datenbank zu prüfen.';
$string['coursereadname'] = 'Lesegeschwindigkeit eines Kurses';
$string['coursewritemoreinfo'] = 'Ein Kurs wird mehrmals geschrieben, um die Schreibgeschwindigkeit der Datenbank zu prüfen.';
$string['coursewritename'] = 'Schreibgeschwindigkeit eines Kurses';
$string['description'] = 'Beschreibung';
$string['duration'] = '{$a} s';
$string['during'] = 'Zeit (Sekunden)';
$string['filereadmoreinfo'] = 'Eine Datei wird mehrmals gelesen, um die Lesegeschwindigkeit des temporären Moodle-Verzeichnisses zu prüfen.';
$string['filereadname'] = 'Lesegeschwindigkeit von Dateien';
$string['filewritemoreinfo'] = 'Eine Datei wird mehrmals geschrieben, um die Schreibgeschwindigkeit des temporären Moodle-Verzeichnisses zu prüfen.';
$string['filewritename'] = 'Schreibgeschwindigkeit von Dateien';
$string['info'] = 'Dieser Benchmark-Test sollte weniger als 1 Minute dauern und wird nach 2 Minuten automatisch abgebrochen. Warten Sie, bis die Ergebnisse angezeigt werden.';
$string['infoaverage'] = 'Es wird empfohlen, diesen Benchmark-Test mehrmals durchzuführen, um einen aussagekräftigen Durchschnitt zu erhalten. Wenn die Leistung Ihrer Installation nicht optimal ist, finden Sie zahlreiche Verbesserungsvorschläge in der <a href="https://docs.moodle.org/en/Performance_recommendations" target="_blank">Moodle-Dokumentation</a >.';
$string['infodisclaimer'] = 'Starten Sie diesen Benchmark-Test nicht auf einer produktiven Plattform, da dies zu erheblichen Leistungseinbußen führen könnte.';
$string['infodisclamer'] = 'Es wird nicht empfohlen, diesen Benchmark auf einer produktiven Plattform zu starten.';
$string['limit'] = 'Akzeptables Limit';
$string['loginguestmoreinfo'] = 'Das Laden der Anmeldeseite und das Anmelden des Gastkontos wird prüft.';
$string['loginguestname'] = 'Anmeldezeit für das Gastkonto';
$string['loginusermoreinfo'] = 'Das Laden der Anmeldeseite und das Anmelden eines fiktiven Nutzerkontos wird prüft.';
$string['loginusername'] = 'Anmeldezeit für ein fiktives Nutzerkonto';
$string['modulename'] = 'Moodle-Benchmark';
$string['modulenameplural'] = 'Moodle-Benchmarks';
$string['notificatiopagedownloadmoreinfo'] = 'Die Benachrichtigungsseite in der Website-Administration wird mehrfach geladen, um die Geschwindigkeit des Webservers zu prüfen';
$string['notificatiopagedownloadname'] = 'Ladezeit für die Benachrichtigungsseite in der Website-Administration';
$string['over'] = 'Kritisches Limit';
$string['pluginname'] = 'Moodle-Benchmark';
$string['points'] = '{$a} Punkte';
$string['privacy:no_data_reason'] = 'Das Plugin "Moodle-Benchmark" speichert keine personenbezogenen Daten.';
$string['processormoreinfo'] = 'Eine PHP-Funktion wird einer Wiederholschleife aufgerufen, um die Prozessorgeschwindigkeit zu prüfen.';
$string['processorname'] = 'Verarbeitungsgeschwindigkeit des Prozessors';
$string['querytype1moreinfo'] = 'Eine komplexe SQL-Abfrage wird ausgeführt, um die Geschwindigkeit der Datenbank zu prüfen.';
$string['querytype1name'] = 'Datenbank-Performance (#1)';
$string['querytype2moreinfo'] = 'Eine komplexe SQL-Abfrage wird ausgeführt, um die Geschwindigkeit der Datenbank zu prüfen.';
$string['querytype2name'] = 'Datenbank-Performance (#2)';
$string['redo'] = 'Benchmark erneut starten';
$string['score'] = 'Score';
$string['scoremsg'] = 'Benchmark Score:';
$string['seconde'] = '{$a} s';
$string['slowdatabaselabel'] = 'Die Datenbank scheint zu langsam zu sein.';
$string['slowdatabasesolution'] = '<ul><li><a href="https://mariadb.com/kb/en/library/mysqlcheck/" target="_blank">Prüfen Sie die Datenbankintegrität</a>.</li>
<li><a href="https://mariadb.com/kb/en/library/optimization-and-tuning/" target="_blank">Optimieren Sie die Datenbank</a>.</li></ul>';
$string['slowharddrivelabel'] = 'Die Festplatte scheint zu langsam zu sein.';
$string['slowharddrivesolution'] = '<ul><li>Prüfen Sie den Status der Festplatte und/oder des temporären Verzeichnisses.</li><li>Ändern Sie die Festplatte und/oder das temporäre Verzeichnis.</ li></ul>';
$string['slowprocessorlabel'] = 'Der Prozessor scheint zu langsam zu sein.';
$string['slowprocessorsolution'] = '<ul><li>Prüfen Sie, ob die Hardwarekonfiguration leistungsfähig genug ist, um Moodle auszuführen.</li></ul>';
$string['slowserverlabel'] = 'Der Webserver scheint zu langsam zu sein.';
$string['slowserversolution'] = '<ul><li>Setzen Sie Ihren Webserver Apache in den <a href="https://httpd.apache.org/docs/2.4/en/mpm.html" target="_blank">Multiprocessing-Modus</a>  oder wechseln Sie auf den Webserver <a href="https://nginx.org/" target="_blank">nginx</a>.</li><li>Wenn das Moodle auf Ihrem Computer installiert ist, konfigurieren Sie Antivirus so, dass es die Installation von Moodle nicht überprüft.</li></ul>';
$string['slowweblabel'] = 'Die Anmeldeseite wird zu langsam geladen.';
$string['slowwebsolution'] = '<ul><li><a href="{$a}" target="_blank">Leeren Sie den Moodle-Cache</a>.</li></ul>';
$string['start'] = 'Benchmark starten';
$string['total'] = 'Gesamtzeit';
