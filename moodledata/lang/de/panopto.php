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
 * Strings for component 'panopto', language 'de', version '4.5'.
 *
 * @package     panopto
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asynchronousmode'] = 'Asynchroner Modus';
$string['asynchronousmode_desc'] = 'Im asynchronen Modus wird die Zugriffsanfrage, die an Panopto übermittelt wird, wenn ein Benutzer auf einen Videolink klickt, in eine Warteschlange gestellt und als Hintergrundaufgabe ausgeführt. Unter normalen Umständen würde diese Aufgabe sofort ausgeführt werden, aber wenn eine ganze Klasse von Schülern gleichzeitig auf ein Video zugreifen will, sollte die Bearbeitung der Anfragen auf diese Weise verhindern, dass Moodle überlastet wird.<br><br>Um diesen Modus zu ermöglichen, müssten Sie einen zusätzlichen Cron-Task einrichten, der die Warteschlange für Adhoc-Aufgaben überwacht, z. B. z.B. so etwas wie:<pre>* * * * * www-data /usr/bin/php /var/www/moodle/admin/tool/task/cli/adhoc_task.php -e --keep-alive=600 > /dev/null</pre> Beachten Sie, dass in diesem Beispiel die Aufgabe jede Minute ausgeführt wird und 10 Minuten lang läuft, so dass bis zu 10 Anfragen parallel bearbeitet werden können.<br><br>Im Zweifelsfall sollten Sie diese Option ausgeschaltet lassen.';
$string['chooseavideo'] = 'Panopto-Video auswählen';
$string['crontask'] = 'Panopto-Kursmodul: Entfernte Gruppenzugehörigkeit auflösen';
$string['deliveryid'] = 'Delivery ID';
$string['deliveryid_help'] = 'Wenn Ihr Video noch nicht über den obigen Panopto-Navigator verfügbar ist, können Sie die Delivery ID einfach hier einfügen.<br><br>Die Delivery ID finden Sie für jede Aufnahme im Panopto-Portal unter Einstellungen.';
$string['modulename'] = 'Panopto-Video';
$string['modulename_help'] = 'Die Panopto-Ressource ermöglicht es Trainer/innen, jedes Panopto-Video zu referenzieren. Wählen Sie einfach das Video mit dem Repository-Interface aus. Alle Teilnehmer/innen, die Zugriff auf diesen Moodlekurs haben, können das Video auf dem Panopto-Server ansehen.';
$string['modulename_link'] = 'mod/panopto/view';
$string['modulenameplural'] = 'Panopto-Videos';
$string['nopermissions'] = 'Sie haben leider nicht die erforderlichen Berechtigungen, um dieses Panopto-Video anzusehen.';
$string['nourl'] = 'Leider ist dieses Panopto-Video derzeit nicht verfügbar. Bitte versuchen Sie es später noch einmal.';
$string['novideo'] = 'Sie müssen entweder nach einem Video suchen und es auswählen oder eine Panopto Delivery ID eingeben.';
$string['off'] = 'Aus';
$string['on'] = 'An';
$string['panopto:addinstance'] = 'Neue Panopto-Ressource hinzufügen';
$string['panopto:view'] = 'Panopto-Video ansehen';
$string['pluginadministration'] = 'Panopto-Plugin verwalten';
$string['pluginname'] = 'Panopto';
$string['preparing'] = 'Video wird vorbereitet...';
$string['requiredaccesstime'] = 'Zugriffszeit überschritten';
$string['requiredaccesstime_desc'] = 'Beim Versuch, das Panopto-Video anzusehen, werden alle Nutzer/innen auf die Panopto-Website umgeleitet und dort einer Gruppe zugewiesen. Diese Einstellung legt fest, wie viele Stunden das Video verfügbar ist. Die Zugriffszeit wird in einer oben definierten Verzögerung festgelegt. Um das Video ansehen zu können, müssen die Nutzer/innen erneut von Moodle aus darauf zugreifen. Wenn diese Einstellung auf unbegrenzt gesetzt ist, können Nutzer/innen das Video über die Panopto-Website ansehen, solange das Kursmodul existiert, unabhängig davon, ob sie noch eingeschrieben sind und auf das Modul zugreifen können oder nicht.';
$string['unlimited'] = 'unbegrenzt';
$string['usereposettings'] = 'Dieses Plugin setzt voraus, dass das Plugin Panopto-Repository installiert ist und <a href="{$a}">konfiguriert</a> ist.';
$string['video'] = 'Video';
