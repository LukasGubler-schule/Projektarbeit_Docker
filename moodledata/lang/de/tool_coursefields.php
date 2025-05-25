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
 * Strings for component 'tool_coursefields', language 'de', version '4.5'.
 *
 * @package     tool_coursefields
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['coursefields:setfields'] = 'Kursfelder in allen Kursen eines Kursbereichs setzen';
$string['fieldisrequired'] = '<strong>Dieses Kursfeld wurde als notwendiges Feld konfiguriert</strong>. Mit diesem Werkzeug könnten Sie sich über diese Bedingung hinwegsetzen und das Kursfeld mit leeren Werten überschreiben. Bitte machen Sie dies ausschließlich wenn Sie wirklich wissen, was Sie dabei tun.';
$string['fieldisunique'] = '<strong>Dieses Kursfeld wurde als Feld mit eindeutigen Daten konfiguriert<strong>. Mit diesem Werkzeug könnten Sie sich über diese Bedingung hinwegsetzen und das Kursfeld mit gleichen Werten überschreiben. Bitte machen Sie dies ausschließlich wenn Sie wirklich wissen was Sie dabei tun.';
$string['overwritefield'] = 'Existierende Feldwerte überschreiben';
$string['pluginname'] = 'Kursfelder setzen';
$string['privacy:metadata'] = 'Das Plugin \'Kursfelder setzen\' speichert keine personenbezogenen Daten.';
$string['setfields'] = 'Kursfelder setzen';
$string['setfieldsinstruction'] = 'Mit diesem Werkzeug setzen Sie die Kursfelder für alle Kurse des Kursbereichs einschließlich der Unterkursbereiche. Bitte wählen Sie die gewünschten Werte und klicken Sie auf "Bestätigen". Im folgenden wird Moodle eine "Ad-hoc-Aufgabe" anlegen, welche alle Daten im Hintergrund setzen wird. Hierzu muss der Cron in dieser Moodle Instanz aktiv sein.';
$string['updatequeued'] = 'Eine Ad-hoc-Aufgabe wurde in die Warteschlange gestellt, um alle Kurse in der Kategorie <strong>{$a}</strong> zu aktualisieren. Sie wird das nächste Mal ausgeführt, wenn Cron aufgerufen wird.';
