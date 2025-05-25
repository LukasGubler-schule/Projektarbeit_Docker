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
 * Strings for component 'local_datacleaner', language 'de', version '3.10'.
 *
 * @package     local_datacleaner
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cachedef_courses'] = 'Kurs-Cache';
$string['cachedef_schema'] = 'Schema-Cache';
$string['cascadedeletesettings'] = 'Kaskaden-Löscheinstellungen';
$string['cleaning'] = 'Bereinigung';
$string['disable'] = 'Deaktivieren';
$string['enable'] = 'Aktivieren';
$string['enabledisable'] = 'Aktiviert';
$string['error:explicitconfigphp'] = 'Setzen Sie bitte local_datacleaner_allowexecution in der config.php';
$string['errordeletingdir'] = 'Fehler. Beim Löschen des Verzeichnisses ist ein Fehler aufgetreten: {$a}';
$string['info'] = '<p>Sie können einstellen, welche Daten nach dem Klonen aus der Produktionsumgebung bereinigt werden sollen und wie. </p><p>Nachdem die Datenbank und die Standortdaten in eine andere Umgebung geklont wurden, wird ein CLI ausgeführt, das die Bereinigung vornimmt. Es werden mehrere Prüfungen durchgeführt, um sicherzustellen, dass dies nicht in der Produktionsumgebung ausgeführt werden kann.</p>';
$string['manage'] = 'Verwalten von Bereinigungsaufgaben';
$string['mismatch_threshold'] = 'Schwellenwert für die Nichtübereinstimmung';
$string['mismatch_thresholddesc'] = 'Der Data Cleaner verwendet eine Heuristik, um kaskadenartige Löschregeln in der Datenbank zu erstellen, die
die normalerweise nicht vorhanden sind. Bevor eine Regel erstellt wird, wird geprüft, wie viele Datensätze die potenzielle Beziehung verletzen würden. Diese Einstellung
steuert den Schwellenwert, ab dem die Beziehung nicht erstellt wird (was auch bedeutet, dass Datensätze in der Zieltabelle nicht
gelöscht werden). Der Schwellenwert wird als Prozentsatz der Gesamtzahl der betroffenen Datensätze ausgedrückt. Wenn die Gesamtzahl der Datensätze in einer Tabelle weniger als 100 ist, wird dieser Wert ignoriert und alle Konflikte führen dazu, dass die Regel nicht erstellt wird.';
$string['noplugins'] = 'Keine Plugins zur Datenbereinigung gefunden.';
$string['notes'] = 'Notizen';
$string['pluginname'] = 'Data-Cleaner';
$string['privacy:metadata'] = 'Das lokale Plugin "Data-Cleaner" speichert keine persönlichen Daten.';
$string['progress'] = 'Fortschritt';
$string['sortorder'] = 'Reihenfolge';
