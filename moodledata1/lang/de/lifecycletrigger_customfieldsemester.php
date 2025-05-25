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
 * Strings for component 'lifecycletrigger_customfieldsemester', language 'de', version '3.10'.
 *
 * @package     lifecycletrigger_customfieldsemester
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['error_delaypositive'] = 'Die Anzahl der Monate muss eine positive, ganze Zahl zwischen 1 und 999 sein.';
$string['error_missingfield'] = 'Das konfigurierte Kursfeld \'{$a->missingfield}\' existiert nicht mehr.';
$string['pluginname'] = 'Kursfeld Semester für Kurs-Lebenszyklus';
$string['privacy:metadata'] = 'Das "Kursfeld Semester für Kurs-Lebenszyklus" Subplugin zum "Kurs-Lebenszyklus" Plugin speichert keinerlei personenbezogene Daten.';
$string['setting_customfield'] = 'Kursfeld';
$string['setting_customfield_help'] = 'Mit dieser Einstellung definieren Sie welches Kursfeld das Semester eines Kurses enthält. Der jeweilige Wert des Kursfeldes wird als Basis für diesen Trigger genommen.';
$string['setting_customfield_nofield'] = 'Es existiert kein Kursfeld welches für diesen Trigger verwendet werden könnte. Bitte erstellen Sie zunächst ein Kursfeld vom Typ "Semester" auf der <a href="{$a}">Kursfelder Einstellungsseite</a>.';
$string['setting_delay'] = 'Trigger soll x Monate nach dem Semesterstart auslösen';
$string['setting_delay_help'] = 'Mit dieser Einstellung definieren Sie die Wartezeit bis ein Prozess gestartet wird.

Der Trigger ermittelt das Semester eines Kurses und daraus den Startmonat des Semesters, addiert die konfigurierte Anzahl von Monaten als Wartezeit und prüft danach ob diese Wartezeit schon verstrichen ist. Falls ja, wird der Trigger ausgelöst.

Für Kurse, welche den Wert \'semesterunabhängig\' im Kursfeld haben, wird der Trigger nie ausgelöst.';
