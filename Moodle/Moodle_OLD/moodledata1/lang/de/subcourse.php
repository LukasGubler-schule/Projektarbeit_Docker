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
 * Strings for component 'subcourse', language 'de', version '3.10'.
 *
 * @package     subcourse
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['blankwindow'] = 'In einem neuen Fenster öffnen';
$string['blankwindow_help'] = 'Falls diese Option aktiviert ist, wird der verlinkte Kurs in einem neuen Browserfenster geöffnet.';
$string['completioncourse'] = 'Kurs muss abgeschlossen sein';
$string['completioncourse_help'] = 'Falls diese Option aktiviert ist, wird die Aktivität als abgeschlossen markiert, wenn ein/e Teilnehmer/in den angegebenen Kurs abgeschlossen hat.';
$string['completioncourse_text'] = 'Teilnehmer/in muss den angegebenen Kurs abschließen, um diese Aktivität abzuschließen.';
$string['currentgrade'] = 'Aktuelle Bewertung: {$a}';
$string['currentprogress'] = 'Fortschritt: {$a}%';
$string['displayoption:coursepageprintgrade'] = 'Note eines verlinkten Kurses auf der Kursseite anzeigen';
$string['displayoption:coursepageprintprogress'] = 'Fortschriftt eines verlinkten Kurses auf der Kursseite anzeigen';
$string['errfetch'] = 'Bewertungen können nicht eingeholt werden: Fehler-Code {$a}';
$string['errlocalremotescale'] = 'Bewertungen können nicht eingeholt werden: die kursfremde Endnote verwendet eine lokale Skala.';
$string['eventgradesfetched'] = 'Bewertungen eingeholt';
$string['fetchgradesmode'] = 'Bewertungen übernehmen als';
$string['fetchgradesmode0'] = 'Originalwerte';
$string['fetchgradesmode1'] = 'Prozentwerte';
$string['fetchgradesmode_help'] = 'Abhängig von der Einrichtung des Notenbuchs im verlinkten Kurs stimmen der Rohwert und der prozentuale Wert der endgültigen Kursnote möglicherweise nicht immer mit den in dieser Unterkursaktivität angezeigten Werten überein. Diese Einstellung bestimmt, welcher der Werte übereinstimmen soll.

* Reale Werte: Der reale Wert der Abschlussnote im verlinkten Kurs wird in diesem Unterkurs als Aktivitätsnote abgerufen. Wenn der verlinkte Kurs einige ausgeschlossene Noten enthält, stimmt die im referenzierten Kurs berechnete prozentuale Abschlussnote möglicherweise nicht mit dem Prozentsatz in der Unterkursaktivität überein.
* Prozentwerte: Die im verlinkten Kurs erhaltene Abschlussnote wird neu berechnet, sodass der im referenzierten Kurs angezeigte Prozentsatz mit dem in dieser Unterkursaktivität angezeigten Prozentsatz übereinstimmt. Wenn der verlinkte Kurs einige ausgeschlossene Noten enthält, stimmt der tatsächliche tatsächliche Notenwert möglicherweise nicht überein.';
$string['fetchnow'] = 'Bewertungen jetzt einholen';
$string['gotocoursename'] = 'Zum Kurs <a href="{$a->href}">{$a->name}</a>';
$string['gotorefcourse'] = 'Gehe zu {$a}';
$string['gotorefcoursegrader'] = 'Alle Bewertungen in {$a}';
$string['gotorefcoursemygrades'] = 'Meine Bewertungen in {$a}';
$string['gradesfetching'] = 'Bewertungsformat zur Übernahme';
$string['hiddencourse'] = '*verborgen*';
$string['instantredirect'] = 'Zum angegebenen Kurs weiterleiten';
$string['instantredirect_help'] = 'Falls diese Option aktiviert ist, werden Nutzer zum angegebenen Kurs weitergeleitet, wenn sie versuchen, die Unterkurs-Modul-Seite zu öffnen. Dies trifft nicht auf Nutzer zu, die berechtigt sind, Bewertungen manuell einzuholen.';
$string['lastfetchnever'] = 'Die Bewertungen wurden bisher noch nicht eingeholt.';
$string['lastfetchtime'] = 'Zuletzt bezogen: {$a}';
$string['linkcontrol'] = 'Linkeinstellung für Unterkurs';
$string['modulename'] = 'Unterkurs';
$string['modulename_help'] = 'Dieses Modul fügt Ihrem Kurs eine einfache, sehr nützliche Funktionalität hinzu. Das Modul verhält sich wie eine bewertete Aktivität, gibt aber die Bewertung für Teilnehmer/innen aus den Bewertungen in einem anderen Kurs wieder. In Kombination mit Meta-Kursen können Kurse in getrennte Unterthemen geteilt und die Bewertungen an einer Stelle zusammengeführt werden.';
$string['modulenameplural'] = 'Unterkurse';
$string['nocoursesavailable'] = 'Keine Kurse, aus denen Sie Bewertungen beziehen können';
$string['nosubcourses'] = 'In diesem Kurs gibt es keine Unterkurse.';
$string['pluginadministration'] = 'Unterkurs-Administration';
$string['pluginname'] = 'Unterkurs';
$string['privacy:metadata'] = 'Der Unterkurs speichert keine personenbezogenen Daten.';
$string['refcourse'] = 'Angegebener Kurs';
$string['refcourse_help'] = 'Der verlinkte Kurs ist der Kurs, aus dem die Note der Aktivität stammt. Die Teilnehmer/innen sollten in den angegebenen Kurs eingeschrieben sein.

Sie müssen Trainer/in in den Kursen sein, damit sie hier aufgelistet wird. Möglicherweise müssen Sie die Administrator/innen der Website bitten, diesen Unterkurs anzulegen, um die Bewertungen aus anderen Kursen einzubinden.';
$string['refcoursecurrent'] = 'Aktuellen Kurs beibehalten';
$string['refcourselabel'] = 'Bewertungen holen von';
$string['refcoursenull'] = 'Kein Kurs angegeben';
$string['settings:coursepageprintgrade'] = 'Note auf Kursseite';
$string['settings:coursepageprintgrade_desc'] = 'Note eines verlinkten Kurses auf der Kursseite anzeigen';
$string['settings:coursepageprintprogress'] = 'Fortschritt auf der Kursseite';
$string['settings:coursepageprintprogress_desc'] = 'Fortschritt eines verlinkten Kurses auf der Kursseite anzeigen';
$string['subcourse:addinstance'] = 'Einen weiteren Unterkurs anlegen';
$string['subcourse:begraded'] = 'Bewertungen aus dem angegebenen Kurses empfangen';
$string['subcourse:fetchgrades'] = 'Bewertungen aus dem angegebenen Kurs manuell einholen';
$string['subcourse:view'] = 'Aktivität Unterkurs anzeigen';
$string['subcoursename'] = 'Name des Unterkurses';
$string['taskcheckcompletedrefcourses'] = 'Abschluss von angegebenen Kursen prüfen';
$string['taskfetchgrades'] = 'Bewertungen des Unterkurses einholen';
