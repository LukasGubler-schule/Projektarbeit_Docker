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
 * Strings for component 'local_navbarplus', language 'de', version '3.10'.
 *
 * @package     local_navbarplus
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Navigationsleiste Plus';
$string['privacy:metadata'] = 'Das Plugin \'Navigationsleiste Plus\' bietet Moodle-Nutzer/innen erweiterte Funktionalitäten an, speichert aber keine personenbezogenen Daten.';
$string['resetusertours_hint'] = '(Könnte einen kurzen Moment dauern)';
$string['setting_inserticonswithlinks'] = 'Icons mit Links';
$string['setting_inserticonswithlinks_desc'] = 'Mit dieser Einstellung können Sie Icons (mit Links) in die Navigationsleiste links neben den Icons für "Benachrichtigungen" und "Mitteilungen" platzieren.<br/>
Jede Zeile setzt sich aus einem Icon-Bild, einer Link-URL, einem Text, unterstützten Sprachen (optional) und einer Einstellung "Öffnen in neuem Fenster" zusammen. Jedes Icon muss dabei in einer neuen Zeile stehen. <br/>
Zum Beispiel:<br/>
fa-question|https://moodle.org|Moodle|en,de|true|d-none d-sm-block<br/>
fa-sign-out|/login/logout.php|Logout||false<br/><br/>
Weitere Informationen zu den einzelnen Parametern:
<ul>
<li><b>Bild:</b> Sie können hier Font Awesome Icon Identifizierer (<a href="https://fontawesome.com/v4.7.0/icons/">See the icon list on fontawesome.com</a>) verwenden. Font Awesome ist seit der Version 3.3 automatisch in Moodle integriert.</li>
<li><b>Link:</b> Sie können das Linkziel mit einer vollen Web-URL (zum Beispiel https://moodle.org) oder einem relativen Pfad innerhalb Ihrer Moodle Instanz (zum Beispiel /login/logout.php) setzen. </li>
<li><b>Titel:</b> Dieser Parameter wird in das "title" und das "alt" Attribut des Icons geschrieben.</li>
<li><b>Unterstützte Sprache(n) (optional):</b> Dieser Parameter kann dafür genutzt werden das Icon nur den Nutzer/innen anzuzeigen, deren eingestellte Nutzersprache dieser Einstellung entspricht. Mehrere Sprachen müssen mit einem Komma getrennt werden. Wenn das Icon in allen Sprachen (also beliebig) angezeigt werden soll, können Sie diesem Parameter einfach leer lassen.</li>
<li><b>Neues Fenster (optional)</b>:  Standardmäßig wird der gesetzte Link im selben Fenster geöffnet. Der Wert dieser Einstellung ist auf "false" gesetzt. Wenn Sie den Link in einem neuen Browser-Fenster öffnen möchten, setzen Sie diesen Wert einfach auf "true".</li>
<li><b>Zusätzliche Klassen (optional)</b>: Mit diesem optionalen Parameter können Sie weitere Klassen hinzufügen. Ein übliches Nutzungsszenario könnte sein, dass Sie  die responsiven Klassen von Bootstrap hinzufügen möchten, um die Darstellung eines Icons auf bestimmten Bildschirmgrößen zu steuern.<br/>Sie können die responsiven Bootstrap Klassen für <a href="https://getbootstrap.com/docs/4.0/utilities/display/">Bootstrap Version 4</a> (für all Boost basierten Themes) nachschlagen.
Die wichtigsten Klassen für Boost basierte Themes könnten folgende sein:
"d-none d-sm-block", um ein Icon auf kleinen Bildschirmen nicht darzustellen oder "d-sm-none", um ein Icon nur auf kleinen Bildschirmen auszugeben.</li>
<li><b>ID (optional)</b>:  Sie können eine individuelle ID zu einem Icon Element hinzufügen. Dies ermöglicht es, das Icon schnell und einfach mit CSS anzusprechen (zum Beispiel für die geführten Touren in Moodle). Der von Ihnen eingegebenen ID wird immer ein "localnavbarplus-" voran gestellt.</li>
</ul>
Bitte beachten Sie:
<ul>
<li>Möchten Sie optionale Werte nicht nutzen, müssen Sie für diese Parameter trotzdem ein Trennungszeichen setzen, wenn sich die Option zwischen anderen Parametern befindet. Bitte schauen Sie sich dazu das Beispiel für das Font Awesome Icon weiter oben an. </li>
<li>Falls das Icon in der Navigationsleiste nicht erscheint, überprüfen Sie bitte, ob Sie alle Pflichtparameter korrekt gesetzt haben und ob das Icon in der momentanen Nutzersprache überhaupt angezeigt werden kann. </li>
</ul>';
$string['setting_resetusertours'] = '"Geführte Tour zurücksetzen"-Link';
$string['setting_resetusertours_desc'] = 'Mit dieser Einstellung ist es möglich, in der Navigationsleiste ein Font Awesome Kartensymbol zu platzieren, mit dem Nutzer/innen eine für die entsprechende Seite gültige geführte Tour zurücksetzen können. Standardmäßig wird der Link (z.B. in Boost) im Footer platziert. Dieser kann im Footer aber leicht übersehen werden. Mit dieser Einstellung kann er somit in der besser sichtbaren Navigationsleiste platziert werden. Wenn Sie dieses Icon ändern möchten, werfen Sie für eine Anleitung bitte einen Blick in die README.md Datei.<br/>';
