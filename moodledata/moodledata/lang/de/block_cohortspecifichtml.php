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
 * Strings for component 'block_cohortspecifichtml', language 'de', version '4.5'.
 *
 * @package     block_cohortspecifichtml
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cohortselection'] = 'Für globale Gruppen anzeigen';
$string['cohortselection_help'] = 'Der Block wird nur den Nutzer/innen angezeigt, die in mindestens einer der ausgewählten globalen Gruppen Mitglied sind. Das bedeutet, wenn Sie z.B. zwei globale Gruppen ausgewählt haben und ein/e Nutzer/in in nur einer der gewählten Gruppen Mitglied ist, ist der Block für diese Person aufgrund der Mitgliedschaft in mindestens einer der ausgewählten Gruppen sichtbar. Dies entspricht einer ODER-Verknüpfung.';
$string['cohortspecifichtml:addinstance'] = 'Neuen Textblock (für globale Gruppen) hinzufügen';
$string['cohortspecifichtml:myaddinstance'] = 'Neuen Textblock (für globale Gruppen) zum Dashboard hinzufügen';
$string['cohortspecifichtml:viewalways'] = 'Den Block immer sehen';
$string['invertcohortselection'] = 'Die Auswahl umkehren (den Block für die ausgewählten globalen Gruppen verbergen)';
$string['invertcohortselection_help'] = 'Mit dieser Einstellung können Sie Ihre Auswahl umkehren. Das bedeutet, dass der Block den Mitgliedern der ausgewählten globalen Gruppen nicht angezeigt wird. Allen anderen Nutzer/innen wird er angezeigt.<br/>
Beispiele: <ul><li>Wenn ein/e Nutzer/in Mitglied in mindestens einer der ausgewählten globalen Gruppen ist, dann wird ihm/ihr der Block nicht angezeigt, selbst wenn er/sie Mitglied in einer anderen globalen Gruppe ist, die nicht ausgewählt wurde.</li>
<li>Wenn Sie keine globalen Gruppen ausgewählt haben und dies invertieren, dann wird der Block für <strong>alle</strong> Nutzer/innen sichtbar</li></ul>';
$string['newhtmlcohortblock'] = 'Neuer Textblock (für globale Gruppen)';
$string['nocohorts'] = 'Es wurden noch keine globalen Gruppen erstellt. Ohne globale Gruppen wird der Block <strong>für niemanden</strong> sichtbar sein, auch nicht, wenn Sie oben Inhalt hinzugefügt haben. <br/>
Globale Gruppen können in der <a href="{$a->url}"Webseitenadministration</a> verwaltet werden.';
$string['notvisibletoall'] = '<br/>Dieser Block ist für <strong>keine/n Nutzer/in sichtbar</strong>.';
$string['notvisibletocohorts'] = '<br/><strong>Nicht</strong> sichtbar für die globalen Gruppen:';
$string['pluginname'] = 'Textblock (für globale Gruppen)';
$string['privacy:metadata:block'] = 'Der Textblock (für globale Gruppen) speichert alle seine Daten im Block-Subsystem von Moodle.';
$string['resetcohortselection'] = 'Auswahl zurücksetzen';
$string['resetcohortselection_help'] = 'Wenn Sie diese Einstellung aktivieren, dann wird die vormals gewählte Auswahl zurückgesetzt. Dies bedeutet, dass dann keine globalen Gruppen ausgewählt sind. Leider ist dieser Umweg nötig, weil eine Deselektierung aller globalen Gruppen keine Änderung bewirken würde, da in diesem Fall nur ein leeres Ergebnis dem Server übermittelt wird. <br/>
Wenn Sie die Blockeinstellungen wieder öffnen, dann ist diese Einstellung zurückgesetzt und wird auch nicht mehr angezeigt, weil es dann keine Auswahl mehr gibt, die zurückgesetzt werden könnte.';
$string['unrestricted'] = 'Nicht eingeschränkt';
$string['visibletoall'] = '<br/>Dieser Block ist für <strong>alle</strong> Nutzer/innen <strong>sichtbar</strong>.';
$string['visibletocohorts'] = '<br/><strong>Nur</strong> sichtbar für die globalen Gruppen:';
