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
 * Strings for component 'block_people', language 'de', version '3.10'.
 *
 * @package     block_people
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['noparticipantslist'] = 'Die Anzeige der Teilnehmerliste wurde in diesem Kurs deaktiviert';
$string['participantslist'] = 'Teilnehmerliste anzeigen';
$string['people:addinstance'] = 'Neuen Block \'Personen\' hinzufügen';
$string['people:myaddinstance'] = 'Block \'Personen\' zum Dashboard hinzufügen';
$string['pluginname'] = 'Personen';
$string['privacy:metadata'] = 'Das Plugin \'Personen\' bietet Moodle-Nutzer/innen erweiterte Funktionalitäten an, speichert aber keine personenbezogenen Daten.';
$string['resetvisibilityerror'] = 'Ups... Bei der Aktualisierung der Tabellen in der Datenbank ist etwas schief gelaufen... <br/> Die Einstellung "Sichtbarkeit zurücksetzen" wurde zurückgesetzt.';
$string['resetvisibilitysuccess'] = 'Erfolg! Alle Instanzen des Blocks "Personen" sind (wieder) sichtbar. <br/>  Die Einstellung "Sichtbarkeit zurücksetzen" wurde zurückgesetzt.';
$string['setting_hideblock'] = 'Den Block verbergen';
$string['setting_hideblock_desc'] = 'Wenn diese Einstellung aktiviert wird, kann der Block durch die Nutzer/innen verborgen werden.<br/>
Wichtiger Hinweis:<br/>
Wenn Sie diese Einstellung deaktivieren, wird dies den Menüeintrag zum Verbergen / Wiederanzeigen des Blocks komplett entfernen. Dies hat zur Folge, dass Nutzer/innen den Block nicht mehr verbergen können, aber andererseits können bereits verborgene Blöcke damit auch nicht wieder sichtbar gemacht werden. Wenn Sie dies nutzen möchten, ziehen Sie die nachfolgende Funktion in Betracht, mit der Sie die Sichtbarkeit für alle Instanzen des Blocks "Personen" zurückzusetzen können.';
$string['setting_hideblockheading'] = 'Den Block verbergen';
$string['setting_linkparticipantspage'] = 'Link zur Teilnehmerliste zeigen';
$string['setting_linkparticipantspage_desc'] = 'Wenn Sie diese Einstellung aktivieren, wird innerhalb des Blocks ein Link zur Teilnehmerliste angezeigt.';
$string['setting_multipleroles'] = 'Mehrere Rollen anzeigen';
$string['setting_multipleroles_desc'] = 'Mit dieser Einstellung können Sie steuern, ob Teilnehmer/innen mit mehr als einer der obigen Rollen im Kurs auch mehrfach im Block angezeigt werden. Wenn diese Einstellung deaktiviert ist, werden Teilnehmer/innen nur mit der ersten (gemäß der globalen Rollensortierung) Rolle angezeigt. Wenn diese Einstellung aktiviert ist, werden Teilnehmer/innen mit jeder ihrer Rollen angezeigt';
$string['setting_participantspageheading'] = 'Teilnehmer/innen';
$string['setting_resetvisibility'] = 'Sichtbarkeit zurücksetzen';
$string['setting_resetvisibility_desc'] = 'Wenn Sie diese Funktion aktivieren, wird die Sichtbarkeit aller existierenden Instanzen vom Block "Personen" auf (wieder) sichtbar gesetzt. <br/>
Bitte beachten Sie: <br/>
Wenn Sie diese Änderung speichern, werden die Datenbankoperationen zum Zurücksetzen der Sichtbarkeit gestartet und diese Einstellung wird automatisch wieder deaktiviert. Das nächste Mal, wenn Sie diese Einstellung wieder setzen und speichern werden erneut die Datenbankoperationen gestartet.';
$string['setting_roles'] = 'Rollen anzeigen';
$string['setting_roles_desc'] = 'Mit dieser Einstellung können Sie steuern, welche Rollen im Block angezeigt werden. Teilnehmer/innen, die mindestens eine dieser Rollen in einem Kurs haben, werden im Block angezeigt.';
$string['setting_rolesheading'] = 'Rollen';
