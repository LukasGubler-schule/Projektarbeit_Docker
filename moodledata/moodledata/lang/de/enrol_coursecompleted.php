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
 * Strings for component 'enrol_coursecompleted', language 'de', version '4.5'.
 *
 * @package     enrol_coursecompleted
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aftercourse'] = 'Nach Kursabschluss von {$a}';
$string['cachedef_compcourses'] = 'Cache für \'Einschreibung nach Kursabschluss\'';
$string['compcourse'] = 'Abgeschlossener Kurs';
$string['compcourse_help'] = 'Welcher Kurs muss abgeschlossen sein?';
$string['confirmbulkdeleteenrolment'] = 'Möchten Sie diese Nutzereinschreibungen wirklich löschen?';
$string['confirmbulkediteenrolment'] = 'Möchten Sie diese Nutzereinschreibungen wirklich ändern?';
$string['coursecompleted:config'] = 'Einschreibung nach Kursabschluss konfigurieren';
$string['coursecompleted:enrolpast'] = 'Nutzer/innen einschreiben, die andere Kurse abgeschlossen haben';
$string['coursecompleted:manage'] = 'Eingeschriebene Nutzer/innen verwalten';
$string['coursecompleted:unenrol'] = 'Nutzer/innen aus Kurs abmelden';
$string['coursecompleted:unenrolself'] = 'Mich selbst aus Kurs abmelden';
$string['customwelcome'] = 'Nutzerdefinierte Willkommensmitteilung';
$string['customwelcome_help'] = 'Eine nutzerdefinierte Willkommensmitteilung kann als reiner Text oder im Moodle-Auto-Format hinzugefügt werden, einschließlich HTML-Tags und Tags für mehreren Sprachen.

Die Nachricht kann folgende Platzhalter enthalten:

* Kurs {$a->coursename}
* abgeschlossener Kurs {$a->completed}
* Profilseite der Person {$a->profileurl}
* E-Mail der Person {$a->email}
* Vollständiger Name der Person {$a-> fullname}';
$string['deleteselectedusers'] = 'Ausgewählte \'Einschreibungen nach Kursabschluss\' löschen';
$string['editselectedusers'] = 'Ausgewählte \'Einschreibungen nach Kursabschluss\' bearbeiten';
$string['editusers'] = 'Nutzereinschreibungen ändern';
$string['group'] = 'Gruppe beibehalten';
$string['group_help'] = 'Es wird versucht, Nutzer/innen zu einer Gruppe mit demselben Namen hinzuzufügen';
$string['keepgroup'] = 'Standardmäßig die Gruppeneinstellung beibehalten';
$string['keepgroup_help'] = 'Standardmäßig versuchen, Nutzer/innen zu einer Gruppe mit gleichem Namen hinzuzufügen';
$string['pluginname'] = 'Einschreibung nach Kursabschluss';
$string['pluginname_desc'] = 'Einschreibung nach Kursabschluss gibt automatisch Zugriff auf Kurse, nachdem ein anderer Kurs abgeschlossen wurde';
$string['privacy:metadata'] = 'Das Plugin \'Einschreibung nach Kursabschluss\' speichert keine personenbezogenen Daten.';
$string['processexpirationstask'] = 'Task zur Teilnahmedauer von \'Einschreibung nach Kursabschluss\'';
$string['status'] = 'Aktiviert';
$string['status_desc'] = 'Einschreibung nach Kursabschluss standardmäßig erlauben';
$string['status_help'] = 'Die Einstellung legt fest, ob die \'Einschreibung nach Kursabschluss\' aktiviert wird.';
$string['status_link'] = 'enrol/coursecompleted';
$string['svglearnpath'] = 'Lernpfad anzeigen';
$string['svglearnpath_help'] = 'Mögliche Lernpfade über SVG-Icons anzeigen';
$string['unenrolusers'] = 'Nutzer/innen abmelden';
$string['uponcompleting'] = 'Nach Kursabschluss von {$a}';
$string['usersenrolled'] = '{$a} Nutzer/innen eingeschrieben';
$string['welcome'] = 'Willkommensmitteilung senden';
$string['welcome_help'] = 'Wenn Nutzer/innen über \'Einschreibung nach Kursabschluss\' in einen Kurs eingeschrieben werden, kann eine Willkommensmitteilung per E-Mail gesendet werden.';
$string['welcometocourse'] = 'Willkommen bei \'{$a->coursename}\'!

Herzlichen Glückwunsch!
Nach dem erfolgreichem Abschluss von \'{$a->completed}\' sind Sie nun automatisch im Kurs \'{$a->coursename}\' eingeschrieben.';
$string['willbeenrolled'] = 'Sie werden in diesen Kurs eingeschrieben, wenn Sie den Kurs \'{$a}\' abgeschlossen haben.';
