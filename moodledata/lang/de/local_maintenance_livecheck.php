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
 * Strings for component 'local_maintenance_livecheck', language 'de', version '4.5'.
 *
 * @package     local_maintenance_livecheck
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Wartungsmodus (Live Check)';
$string['privacy:metadata'] = 'Das Plugin \'Wartungsmodus (Live Check)\' bietet Moodle-Nutzer/innen erweiterte Funktionalitäten an, speichert aber keine personenbezogenen Daten.';
$string['setting_advancedsettingsheading'] = 'Erweiterte Einstellungen';
$string['setting_backoff'] = 'Live Check Wartezeit';
$string['setting_backoff_desc'] = 'Mit dieser Einstellungen können Sie eine Wartezeit (in Sekunden) setzen, in welcher der Browser des Nutzers noch keine Prüfung durchführen wird. Sie können damit die Last auf Serverseite reduzieren, was am besten an einem Beispiel ersichtlich wird: Wenn Sie den Wartungsmodus stets mit 10 Minuten Vorlaufzeit aktivieren und das Live Check Interval auf 60 Sekunden gesetzt haben, können Sie die Live Check Wartezeit auf 120 Sekunden setzen. Der Browser des Nutzers wird dann die erste Prüfung 180 Sekunden nach dem Laden der Seite ausführen. Damit werden Ihre Nutzer immer noch mindestens 7 Minuten vor dem Start des Wartungsmodus informiert, was für die meisten Szenarios ausreichen sollte.';
$string['setting_checkinterval'] = 'Live Check Interval';
$string['setting_checkinterval_desc'] = 'Mit dieser Einstellungen können Sie das Interval (in Sekunden) setzen, in welchem der Browser des Nutzers prüfen wird, ob der Wartungsmodus bald aktiviert werden wird oder zwischenzeitlich schon aktiviert wurde. Diese Prüfung ist auf Serverseite sehr leichtgewichtig. Sie sollten aber trotzdem mit sehr kurzen Intervallen vorsichtig sein, da diese, zusammen mit einer hohen Anzahl gleichzeitig aktiver Nutzer, doch eine spürbare zusätzliche Last auf Ihren Server auswirken können. Für normale Moodle Installationen sollte die Standardeinstellung ausreichen.';
$string['setting_enable'] = 'Live Check aktivieren';
$string['setting_enable_desc'] = 'Mit dieser Einstellung aktivieren Sie den Live Check für den Wartungsmodus. Solange der Live Check nicht aktiviert ist werden die Ankündigungen für den Wartungsmodus nur dann angezeigt wenn der Browser die Seite komplett neu lädt.';
$string['setting_generalfunctionalityheading'] = 'Allgemeine Einstellungen';
$string['setting_livecheckend'] = 'Live Check Endzeit';
$string['setting_livecheckend_desc'] = 'Mit diesen beiden Einstellungen können Sie die Tageszeit (bezogen auf die Serverzeit) einstellen, in der der Live Check aktiv sein soll. Wenn beide Einstellungen auf 0:00 stehen, was die Voreinstellung ist, ist der Live Check dauerhaft aktiv. Wenn Sie den Wartungsmodus aber stets nur während eines bekannten Wartungsfensters aktivieren, können Sie den Live Check auf diese Zeit einschränken und die Last auf Serverseite während der restlichen Tageszeit reduzieren.';
$string['setting_livecheckstart'] = 'Live Check Startzeit';
$string['setting_livecheckweekdays'] = 'Live Check Wochentage';
$string['setting_livecheckweekdays_desc'] = 'Mit dieser Einstellung können Sie die Wochentage einstellen, an denen der Live Check aktiv sein soll. Wenn Sie den Wartungsmodus nie während des Wochenendes oder bestimmter Wochentage aktivieren, können Sie den Live Check an diesen Wochentagen deaktivieren und die Last auf Serverseite während dieser Tage reduzieren.';
