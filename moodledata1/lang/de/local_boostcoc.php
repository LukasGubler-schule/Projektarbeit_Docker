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
 * Strings for component 'local_boostcoc', language 'de', version '3.10'.
 *
 * @package     local_boostcoc
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activefiltershiddencourses'] = 'Ausgeblendete Kurse';
$string['activefiltershintnotshowdisabled'] = 'Diese Kursliste zeigt Ihnen alle Kurse an, in die Sie eingeschrieben sind. Gefilterte und ausgeblendete Kurse sind hier trotzdem sichtbar.';
$string['activefiltershintnotshowenabledactivefilters'] = 'Aktive Filter:';
$string['activefiltershintnotshowenabledchangelink'] = 'Filter ändern / Ausgeblendete Kurse verwalten';
$string['activefiltershintnotshowenablednoactivefilters'] = 'Keine Filter aktiv';
$string['pluginname'] = 'Boost Kursübersicht (Campus)';
$string['privacy:metadata'] = 'Das Plugin \'Boost Kursübersicht (Campus)\' bietet Moodle-Nutzer/innen erweiterte Funktionalitäten an, speichert aber keine personenbezogenen Daten. Es verarbeitet die personenbezogenen Daten, die vom Plugin \'Kursübersicht (Campus) - block_course_overview_campus\' gespeichert werden.';
$string['setting_addactivefiltershint'] = 'Hinweis über aktive Filter anzeigen';
$string['setting_addactivefiltershint_desc'] = 'Durch Aktivieren dieser Einstellung wird am Ende der "Meine Kurse"-Liste in der Boost-Hauptnavigation ein weiterer Knoten angehängt, der dem Nutzer anzeigt wieso die Liste die Einträge hat die sie aktuell eben hat (d.h. welche Filter aktuell aktiv sind und ob es ausgeblendete Kurse gibt).';
$string['setting_addchangefilterslink'] = 'Link zum Ändern der Filter anzeigen';
$string['setting_addchangefilterslink_desc'] = 'Durch Aktivieren dieser Einstellung wird am Ende der "Meine Kurse"-Liste in der Boost-Hauptnavigation ein weiterer Knoten angehängt, der dem Nutzer hilft die aktiven Filter und ausgeblendeten Kurse zu ändern.';
$string['setting_changefilterslinktarget'] = 'Linkziel zum Ändern der Filter';
$string['setting_changefilterslinktarget_desc'] = 'Mit dieser Einstellung können Sie das Linkziel zum Ändern der Filter festlegen. Es stehen die Optionen Website-Start und Dashboard zur Verfügung, dies sind die zwei Seiten auf denen block_course_overview_campus platziert werden kann.<br />Bitte beachten Sie: Um Verwirrungen zu vermeiden sollten Sie sicherstellen dass block_course_overview_campus auch immer auf dieser Seite platziert ist, in dem Sie ihn dort als Sticky Block platzieren.<br /><em>Diese Einstellung wird nur verwendet, wenn die Einstellung "Link zum Ändern der Filter anzeigen" aktiviert ist</em>';
$string['setting_disableinprogressfilter'] = 'Eingebauten Filter für laufende Kurse aushebeln';
$string['setting_disableinprogressfilter_desc'] = 'Moodle zeigt standardmäßig in der "Meine Kurse"-Liste in der Boost-Hauptnavigation nur Kurse an, welche "laufend" sind, das heißt welche weder vergangen noch zukünftig sind. Die Kursliste in block_course_overview_campus hingegen zeigt alle Kurse ungeachtet ihres Status an. In der Kombination kann dies zu Verwirrung führen, z.B. weil Kurse in block_course_overview_campus enthalten aber in der Boost-Hauptnavigation nicht enthalten sind. Wenn Sie diese Einstellung aktivieren, hebeln Sie den eingebauten Filter für laufende Kurse aus.';
$string['setting_disableinprogressfilterperformancehint'] = 'Bitte beachten: Falls Sie diese Einstellung aktivieren und gleichzeitig die Einstellung <a href="/admin/search.php?query=navshowmycoursecategories">navshowmycoursecategories</a> aktiviert haben wird das Anzeigen der Kursknoten mehr Zeit benötigen. Sie sollten in diesem Fall prüfen ob Sie die navshowmycoursecategories Einstellung nicht aktivieren können.';
$string['setting_enablenotshown'] = 'Gefilterte oder ausgeblendete Kurse nicht anzeigen';
$string['setting_enablenotshown_desc'] = 'Durch Aktivieren dieser Einstellung passen Sie die "Meine Kurse"-Liste in der Boost-Hauptnavigation dahingehend an dass nur noch die Kurse gelistet werden, die aktuell in block_course_overview_campus gemäß der aktuell gewählten Filter und ausgeblendeten Kurse eines Nutzers dargestellt werden.';
$string['setting_enablenotshownperformancehint'] = 'Bitte beachten: Falls Sie diese Einstellung aktivieren und gleichzeitig die Einstellung <a href="/admin/search.php?query=navshowmycoursecategories">navshowmycoursecategories</a> aktiviert haben wird das Entfernen der Kursknoten mehr Zeit benötigen. Sie sollten in diesem Fall prüfen ob Sie die navshowmycoursecategories Einstellung nicht aktivieren können.';
$string['setting_enablenotshowntechnicalhint'] = 'Aus technischer Sicht wird der Kursknoten entfernt, indem sein showinflatnavigation Attribut auf nein gesetzt wird. Damit wird der Kursknoten nur in der Boost-Hauptnavigation verborgen, er verbleibt aber im internen Navigationsbaum und kann weiterhin von anderen Teilen von Moodle genutzt werden.';
$string['setting_filterstatusheading'] = 'Filter Status';
$string['setting_generalfunctionalityheading'] = 'Allgemeine Einstellungen';
