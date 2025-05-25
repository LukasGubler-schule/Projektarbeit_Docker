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
 * Strings for component 'report_coursesize', language 'de', version '4.5'.
 *
 * @package     report_coursesize
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allcourses'] = 'Alle Kurse';
$string['backupsize'] = 'Backup Größe';
$string['cachedef_topuserdata'] = 'Zwischengespeicherte Infos über Nutzer/innen mit der größten Gesamtmenge an Daten';
$string['calcmethod'] = 'Bericht aktualisieren';
$string['calcmethodcron'] = 'Geplante Task';
$string['calcmethodhelp'] = 'Wenn der Bericht mit der geplanten Task berechnet wird, wird der Bericht erst später zum geplanten Zeitpunkt aktualisiert und kann erst danach angezeigt werden. Dies wird empfohlen, da bei sofortigen Berechnungen der Server stark belastet sein wird.';
$string['calcmethodlive'] = 'Beim Laden der Seite';
$string['catsystembackupuse'] = 'Backup Größe des System und der Kategorien: {$a}.';
$string['catsystemuse'] = 'Speicherplatzbedarf des System und der Kategorien (ausgenommen Nutzerkonten und Kurse): {$a}';
$string['coursebackupbytes'] = 'Kurs {$a->shortname} benötigt {$a->backupbytes} Bytes im Kursbackup';
$string['coursebytes'] = 'Kurs {$a->shortname} benötigt {$a->backupbytes} Bytes';
$string['coursereport'] = 'Zusammenfassung der Plugin-Typen - Beachten Sie, dass dies von der Hauptkursliste abweichen kann und wahrscheinlich genauer ist.';
$string['coursesize'] = 'Kursgrößen';
$string['coursesize:view'] = 'Kursgrößen-Bericht ansehen';
$string['coursesize_desc'] = '<p>Dieser Bericht stellt nur Näherungswerte zur Verfügung. Falls eine Datei mehrere Male innerhalb eines Kurses oder in mehreren Kursen verwendet wird, wird sie der Bericht auch mehrfach zählen, obwohl Moodle nur ein Exemplar der Datei im Dateisystem speichert..</p>';
$string['coursesummary'] = '(Statistiken anzeigen)';
$string['diskusage'] = 'Speicherplatzbedarf';
$string['emptycourseshidden'] = 'Kurse, welche keine im Filesystem abgelegten Dateien enthalten, werden in diesem Bericht nicht gelistet.';
$string['exportcsv'] = 'CSV exportieren';
$string['filearea'] = 'Dateibereich';
$string['lastupdate'] = '(Zuletzt aktualisiert {$a})';
$string['lastupdatenever'] = 'Warten auf die geplante Aufgabe zum Erstellen der Statistiken.';
$string['nouserfiles'] = 'Keine Nutzerkonten gelistet.';
$string['numberofusers'] = 'Größte Nutzeranzahl';
$string['numberofusershelp'] = 'Wie viele Nutzer/innen soll der Bericht anzeigen?';
$string['pluginname'] = 'Kursgrößen';
$string['privacy:metadata'] = 'Das Plugin "Kursgröße" speichert keine personenbezogenen Daten.';
$string['sharedusage'] = 'Gemeinsam genutzt';
$string['sharedusagecourse'] = 'Etwa {$a} wird mit anderen Kursen geteilt.';
$string['sitefilesusage'] = 'Bericht zum Speicherplatzbedarf';
$string['sizepermitted'] = '(Erlaubte Quota {$a} MB)';
$string['totalsitedata'] = 'Speicherplatzbedarf insgesamt: {$a}';
$string['userstopnum'] = 'Nutzer/innen (Top {$a})';
