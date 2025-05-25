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
 * Strings for component 'customfield_semester', language 'de', version '4.5'.
 *
 * @package     customfield_semester
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['beginofsemesters'] = 'Das Jahr, in dem die Liste der Semester anfängt.';
$string['defaultmonthsintofuture'] = 'Standard ist das Semester in X Monaten.';
$string['internaltermrepresentation'] = 'Interne Semester-Repräsentierung';
$string['internaltermrepresentation_desc'] = 'Mit dieser Einstellung definitieren Sie wie das Kursfeld die Semester intern (in der Moodle Datenbank) repräsentiert. Dies ist relevant falls Sie Moodle mit externen Kursplanungssystemen integrieren und das Kursfeld direkt mit Werten eines externen Systems befüllen wollen.';
$string['internaltermrepresentationst0wt1'] = 'Sommersemester als Semester 0 und  Wintersemester als Semester 1 repräsentieren';
$string['internaltermrepresentationst1wt2'] = 'Sommersemester als Semester 1 und  Wintersemester als Semester 2 repräsentieren';
$string['internaltermrepresentationwarning'] = '<strong>Warnung:</strong> Eine Änderung dieser Einstellung bewirkt <em>nicht</em> dass existierende Feldwerte in existierenden Kursen aktualisiert werden. Bitte ändern Sie diese Einstellung ausschließlich wenn Sie dies wirklich benötigen und Sie sich bewusst sind dass Sie danach die Feldwerte existierender Kurse neu befüllen müssen.';
$string['pluginname'] = 'Semesterfeld';
$string['semesterindependent'] = 'Semesterunabhängig';
$string['showmonthsintofuture'] = 'Ein Semester ist auswählbar, wenn es in weniger als X Monaten beginnt.';
$string['specificsettings'] = 'Einstellungen für das Semesterfeld';
$string['startmonthnote'] = 'Bitte beachten: Gültige Einstellungen sind Werte zwischen 1 und 12. Diese Einstellung geht davon aus, dass das Sommersemester im Jahresverlauf vor dem Wintersemester kommt. Falls Sie die Semester andersrum konfigurieren, wird das Kursfeld Ihre Einstellung stillschweigend ignorieren und die Standardwerte nutzen.';
$string['summersemester'] = 'SoSe {$a}';
$string['summertermstartmonth'] = 'Der Monat in dem das Sommersemester startet';
$string['summertermstartmonth_desc'] = 'Mit dieser Einstellung definieren Sie in welchem Monat das Sommersemester startet.';
$string['termpresentationasc'] = 'Ältere Semester zuerst, semesterunabhängiger Eintrag am Beginn der Liste';
$string['termpresentationdesc'] = 'Neuere Semester zuerst, semesterunabhängiger Eintrag am Ende der Liste';
$string['termpresentationorder'] = 'Darstellungsreihenfolge der Semester';
$string['termpresentationorder_desc'] = 'Mit dieser Einstellung definieren Sie wie die Liste der Semester innerhalb der Kurseinstellungen und (falls das Feld als Kursfilter verwendet wird) innerhalb des Kursübersichtsblocks auf dem Dashboard dargestellt wird.';
$string['visibleincoursesettings'] = 'Sichtbar in den Kurseinstellungen';
$string['visibleincoursesettings_desc'] = 'Das Semesterfeld ist in den Kurseinstellungen sicht- und editierbar.';
$string['wintersemester'] = 'WiSe {$a}';
$string['wintertermstartmonth'] = 'Der Monat in dem das Wintersemester startet';
$string['wintertermstartmonth_desc'] = 'Mit dieser Einstellung definieren Sie in welchem Monat das Wintersemester startet.';
