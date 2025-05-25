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
 * Strings for component 'tool_apcu', language 'de', version '4.5'.
 *
 * @package     tool_apcu
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['guidroperror'] = 'Leider hatte diese Moodle Installation nicht ausreichend Berechtigungen um die APCu management GUI Datei in das MOODLEDATA Verzeichnis herunterladen und dort ablegen zu können. Bitte laden Sie die APCi management GUI Dartei von {$a->source} herunter und legen Sie sie in {$a->target} auf Ihrem Webserver ab. Solange Sie die Datei nicht dort ablegen wird das tool_apcu Plugin nicht funktionieren.';
$string['guidropinstallintro'] = 'Das tool_apcu Plugin bindet eine APCu management GUI ein, welche von den APCu Entwicklern erstellt wurde. Diese APCu management GUI ist nur eine kleine PHP Datei. Leider darf diese Datei nicht zusammen mit diesem Plugin ausgeliefert werden, da ihre PHP Lizenz inkompatibel zu Moodles GPL Lizenz ist.';
$string['guidropinstalloutro'] = 'Bitte beachten Sie: Mit "inkompatibler Lizenz" ist lediglich gemeint dass Code, welcher unter der PHP Lizenz veröffentlicht ist, nicht auf moodle.org/plugins angeboten werden darf. Für Sie als Administrator ist es hingegen vollkommen in Ordnung, die APCu management GUI Datei herunterzuladen, zu speichern und auszuführen und sie letzten Endes zu Ihrer lokalen Installation des Moodle Plugins hinzuzufügen.';
$string['guidropmissing'] = 'Die von diesem Plugin benötigte APCu management GUI Datei liegt nicht am erwarteten Ort oder enthält nicht den erwarteten PHP code. Bitte lesen Sie die README Datei des Plugins für weitere Hilfestellungen. Solange Sie die APCu management GUI Datei nicht korrekt ablegen wird das Plugin nicht funktionieren.';
$string['guidropmissingonthefly'] = 'Die von diesem Plugin benötigte APCu management GUI Datei lag nicht am erwarteten Ort oder enthielt nicht den erwarteten PHP code. Sie wurde automatisch runtergeladen und im MOODLEDATA Verzeichnis gespeichert so dass Sie das Plugin (wieder) nutzen können.';
$string['guidropsuccess'] = 'Glücklicherweise hatte diese Moodle Installation ausreichend Berechtigungen um die APCu management GUI Datei in Ihr MOODLEDATA Verzeichnis herunterladen und dort ablegen zu können. Sie wurde von {$a->source} heruntergeladen und in {$a->target} abgelegt. Sobald Sie diesen Installationsassistenten abgeschlossen haben wird das tool_apcu Plugin für Sie wie gewünscht funktionieren.';
$string['guidropupgradecheckfail'] = 'Die benötigte APCu management GUI Datei fehlt nach dem Plugin Upgrade leider im MOODLEDATA Verzeichnis.';
$string['guidropupgradechecksuccess'] = 'Die benötigte APCu management GUI Datei existiert nach dem Plugin Upgrade weiterhin im MOODLEDATA Verzeichnis.';
$string['pluginname'] = 'APCu management';
$string['privacy:metadata'] = 'Das Plugin \'APCu management\' bietet Moodle-Administrator/innen erweiterte Funktionalitäten an, speichert aber keine personenbezogenen Daten.';
