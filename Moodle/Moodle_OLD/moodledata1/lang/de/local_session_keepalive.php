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
 * Strings for component 'local_session_keepalive', language 'de', version '3.10'.
 *
 * @package     local_session_keepalive
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Sitzungs-Aufrechterhaltung';
$string['privacy:metadata'] = 'Das Plugin \'Sitzungs-Aufrechterhaltung\' bietet Moodle-Nutzer/innen erweiterte Funktionalitäten an, speichert aber keine personenbezogenen Daten.';
$string['setting_advancedsettingsheading'] = 'Erweiterte Einstellungen';
$string['setting_enable'] = 'Sitzungs-Aufrechterhaltung aktivieren';
$string['setting_enable_desc'] = 'Mit dieser Einstellung aktivieren Sie die Sitzungs-Aufrechterhaltung. Solange die Sitzungs-Aufrechterhaltung nicht aktiv ist werden die Sitzungen normal auslaufen. Dies bedeutet dass Nutzereingaben, welche an den Server gesendet werden nachdem die Sitzung schon ausgelaufen ist, verloren gehen. Sobald diese Einstellung aktiviert ist werden die Sitzungen solange wie nötig aufrechterhalten.';
$string['setting_generalfunctionalityheading'] = 'Allgemeine Einstellungen';
$string['setting_keepaliveend'] = 'Sitzungs-Aufrechterhaltung Endzeit';
$string['setting_keepaliveend_desc'] = 'Mit diesen beiden Einstellungen können Sie die Tageszeit (bezogen auf die Serverzeit) einstellen, in der die Sitzungs-Aufrechterhaltung aktiv sein soll. Wenn beide Einstellungen auf 0:00 stehen, was die Voreinstellung ist, ist die Sitzungs-Aufrechterhaltung dauerhaft aktiv. Wenn Sie sicher sind, dass Sie die Sitzungs-Aufrechterhaltung nur während einer definierten Zeitspanne benötigen, können Sie sie auf diese Zeit einschränken und die Last auf Serverseite während der restlichen Tageszeit reduzieren.';
$string['setting_keepaliveinterval'] = 'Sitzungs-Aufrechterhaltung Interval';
$string['setting_keepaliveinterval_desc'] = 'Mit dieser Einstellungen können Sie das Interval (in Minuten) setzen, in welchem der Browser des Nutzers prüfen wird, ob es ungesendete Nutzereingaben gibt und falls nötig die Sitzung aufrecht erhalten wird. Diese Prüfung ist auf Serverseite sehr leichtgewichtig. Sie sollten aber trotzdem das Interval nicht kürzer als nötig setzen da ein kurzes Interval, zusammen mit einer hohen Anzahl gleichzeitig aktiver Nutzer, doch eine spürbare zusätzliche Last auf Ihren Server auswirken kann. Für normale Moodle Installationen sollte die Standardeinstellung ausreichen.<br>
Das Interval wird am besten auf die Hälfte der auf der {$a->page} Einstellungsseite konfigurierten Zeitüberschreitung (derzeit {$a->minutes} Minuten) gesetzt. Ein Beispiel: Wenn die Zeitüberschreitung auf 120 Minuten gesetzt ist, setzen Sie das Sitzungs-Aufrechterhaltungs Interval auf 60 Minuten. Der Browser des Nutzers wird dann die erste Sitzungs-Aufrechterhaltungs-Prüfung 60 Minuten nach dem Laden der Seite durchführen was noch ausreichend rechtzeitig vor dem Auslaufen der Sitzung ist.';
$string['setting_keepaliveintervalpopupnote'] = 'Bitte beachten Sie: Ab Moodle 3.8 zeigt der Moodle Core dem Nutzer ein Popup an, sobald 90% der konfigurierten Zeitüberschreitung abgelaufen ist, um ihm die Möglichkeit zu geben, die Sitzung zu verlängern. Dieses Plugin kann problemlos mit dieser Core Funktionalität co-existieren. Sie müssen lediglich darauf achten dass Sie diese Einstellung auf einen nennenswert niedrigeren Wert als 90% der konfigurierten Zeitüberschreitung setzen (was derzeit weniger als {$a->minutes} Minuten bedeutet).';
$string['setting_keepalivestart'] = 'Sitzungs-Aufrechterhaltung Startzeit';
$string['setting_keepaliveweekdays'] = 'Sitzungs-Aufrechterhaltung Wochentage';
$string['setting_keepaliveweekdays_desc'] = 'Mit dieser Einstellung können Sie die Wochentage einstellen, an denen die Sitzungs-Aufrechterhaltung aktiv sein soll. Wenn Sie sicher sind, dass Sie die Sitzungs-Aufrechterhaltung nie während des Wochenendes oder bestimmter Wochentage benötigen, können Sie sie an diesen Wochentagen deaktivieren und die Last auf Serverseite während dieser Tage reduzieren.';
