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
 * Strings for component 'customcertelement_daterange', language 'de', version '3.10'.
 *
 * @package     customcertelement_daterange
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addrange'] = 'Weiteren Zeitraum hinzufügen';
$string['completiondate'] = 'Abschlussdatum';
$string['courseenddate'] = 'Kursende';
$string['coursegradedate'] = 'Kursbewertungsdatum';
$string['coursestartdate'] = 'Kursbeginn';
$string['currentdate'] = 'Aktuelles Datum';
$string['dateitem'] = 'Datumselement';
$string['dateitem_help'] = 'Dies ist das Datum, das auf dem Zertifikat angezeigt wird.';
$string['dateranges'] = 'Zeiträume';
$string['datestring'] = 'Text';
$string['end'] = 'Ende';
$string['error:atleastone'] = 'Sie müssen mindestens einen Zeitraum konfigurieren';
$string['error:datestring'] = 'Sie müssen einen Text für den Zeitraum angeben';
$string['error:enddate'] = 'Das End-Datum muss nach dem Start-Datum sein';
$string['error:recurring'] = 'Der periodische Zeitraum darf nicht länger als 12 Monate sein';
$string['fallbackstring'] = 'Fallback-Text';
$string['fallbackstring_help'] = 'Dieser Text wird angezeigt, wenn kein Zeitraum auf das Datum zutrifft. Falls kein Fallback-Text angegeben ist, wird gar nichts ausgegeben.';
$string['help'] = 'Konfigurieren Sie einen Text für jeden Zeitraum.<br /><br />Falls Ihre Zeiträume überlappen wird der erste zutreffende Zeitraum angewendet.';
$string['issueddate'] = 'Austellungsdatum';
$string['placeholders'] = 'Die folgenden Platzhalter können im Text oder im Fallback-Text verwendet werden.<br/><br /> {{range_first_year}} - Das erste Jahr des zutreffenden Zeitraums,<br/> {{range_last_year}} - das letzte Jahr des zutreffenden Zeitraums,<br/> {{recurring_range_first_year}} - das erste Jahr des zutreffenden periodischen Zeitraums,<br/> {{recurring_range_last_year}} - das letzte Jahr des zutreffenden periodischen Zeitraums,<br/> {{current_year}} - das aktuelle Jahr,<br/>  {{date_year}} - das Jahr des zutreffenden Datums.';
$string['pluginname'] = 'Zeitraum';
$string['preview'] = 'Vorschau auf {$a}';
$string['privacy:metadata'] = 'Das Zeitraum-Plugin speichert keinerlei personenbezogene Daten.';
$string['recurring'] = 'Periodisch';
$string['recurring_help'] = 'Wenn Sie einen Zeitraum als periodisch kennzeichnen, wird das angegebene Jahr ignoriert.';
$string['setdeleted'] = 'Löschen';
$string['start'] = 'Start';
