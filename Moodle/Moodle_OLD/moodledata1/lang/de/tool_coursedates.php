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
 * Strings for component 'tool_coursedates', language 'de', version '3.10'.
 *
 * @package     tool_coursedates
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['atleastonedate'] = 'Sie müssen mindestens ein Datum setzen, um es zu aktualisieren';
$string['autoenddate'] = 'Kursende über die Anzahl der Abschnitte errechnen?';
$string['autoenddate_default'] = 'Nicht ändern';
$string['autoenddate_help'] = 'Moodle kann in Kursen, die das Wochenformat verwenden, Enddaten abhängig vom Kursbeginn und der Anzahl der Abschnitte errechnen. Mit dieser Option können Sie die Funktion auf Kursbereichsebene festlegen.';
$string['autoenddate_off'] = 'Errechnetes Kursende deaktivieren';
$string['autoenddate_on'] = 'Errechnetes Kursende erzwingen';
$string['coursedates:setdates'] = 'Start- und Enddaten in allen Kursen eines Kursbereichs setzen';
$string['pluginname'] = 'Kursdaten setzen';
$string['privacy:metadata'] = 'Das Plugin \'Kursdaten setzen\' speichert keine personenbezogenen Daten.';
$string['setdates'] = 'Kursdaten setzen';
$string['setdatesinstruction'] = 'Mit diesem Werkzeug setzen Sie die Start- und Enddaten für alle Kurse des Kursbereichs einschließlich der Unterkursbereiche. Bitte wählen Sie die gewünschten Werte und klicken Sie auf "Bestätigen". Im folgenden wird Moodle eine "Ad-hoc-Aufgabe" anlegen, welche alle Daten im Hintergrund setzen wird. Hierzu muss der Cron in dieser Moodle Instanz aktiv sein.';
$string['updatequeued'] = 'Eine Ad-hoc-Aufgabe wurde in die Warteschlange gestellt, um alle Kurse in der Kategorie <strong>{$a}</strong> zu aktualisieren. Sie wird das nächste Mal ausgeführt, wenn Cron aufgerufen wird.';
