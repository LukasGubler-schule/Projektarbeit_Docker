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
 * Strings for component 'local_csp', language 'de', version '4.5'.
 *
 * @package     local_csp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Aktion';
$string['areyousuretodeleteallrecords'] = 'Möchten Sie wirklich alle CSP Einträge löschen?';
$string['areyousuretodeleteonerecord'] = 'Möchten Sie wirklich diesen CSP Eintrag löschen?';
$string['blockeduri'] = 'Blockierte URI';
$string['configurecspheader'] = 'CSP-Header konfigurieren';
$string['cspdirectives'] = 'CSP-Richtlinien';
$string['cspdirectivesinfo'] = '<p>Beispiel für CSP-Richtlinien (folgen Sie bitte obigem Link für eine genaue Syntax):<br /><span style="color:#00acdf">script-src https:; style-src cdn.example.com; default-src \'self\';</span></p>';
$string['cspheaderenable'] = 'CSP-Header aktivieren';
$string['cspheaderenabledescription'] = 'CSP-Header aktivieren';
$string['cspheaderenforce'] = 'Content-Security-Policy';
$string['cspheaderenforcinghelp'] = 'Browser dazu zwingen, die CSP-Richtlinien einzuhalten, z.B. unsichere Inhalte zu blockieren';
$string['cspheaderreportinghelp'] = 'Verstöße überprüfen und aufzeichnen';
$string['csphttpresponseheader'] = 'CSP-HTTP-Response-Header';
$string['cspreports'] = 'Berichte zu CSP-Verstößen';
$string['cspsettings'] = 'Content-Security-Policy-Einstellungen';
$string['cspsettingsinfo'] = '<p>CSP fügt einen speziellen HTTP-Response-Header zu jeder Moodle-Seite hinzu. Moderne Browser können bestimmte Aktionen ausführen, wenn sie diesen Header sehen, z.B. unsichere Inhalte von solchen Seiten blockieren. Lesen Sie bitte <a target="_blank" href="https://developer.mozilla.org/en-us/docs/web/http/csp"> weitere Infos zu CSP</a>. </p> <p> Wenn Sie eine dieser Einstellungen leer lassen, werden CSP-Header nicht verwendet.</p>';
$string['loadingmixedcontentdescription'] = 'Wenn Sie die Moodle-Website über HTTPS aufrufen, verhindert der Browser das Anzeigen untenstehender Ressourcen, da diese über HTTP geladen werden.<br />Sie sollten dies in der Javascript-Konsole des Browsers sehen können.';
$string['loadinsecurecss'] = 'Unsicheres CSS laden von {$a}';
$string['loadinsecureiframe'] = 'Unsicheren iframe laden von {$a}';
$string['loadinsecureimage'] = 'Unsicheres Bild laden von {$a}';
$string['loadinsecurejavascript'] = 'Unsicheres Javascript laden von {$a}';
$string['localcspheadingdirectives'] = 'CSP-Richtlinien konfigurieren';
$string['localcspheadinghttpresponseheader'] = 'CSP-HTTP-Response-Header wählen';
$string['mixedcontentexamples'] = 'Beispiele für gemischte Inhalte';
$string['pluginname'] = 'Content Security Policy';
$string['privacy:metadata'] = 'Das CSP-Plugin speichert keine nutzerbezogenen Daten.';
$string['reset'] = 'Zurücksetzen';
$string['resetallcspstatistics'] = 'Alle Statistiken zurücksetzen';
$string['scspheadernone'] = 'Nicht verwendet';
$string['timeupdated'] = 'Letzte Aktualisierung';
$string['violateddirective'] = 'Richtlinie';
