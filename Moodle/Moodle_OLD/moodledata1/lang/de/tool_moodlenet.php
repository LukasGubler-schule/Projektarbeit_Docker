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
 * Strings for component 'tool_moodlenet', language 'de', version '3.10'.
 *
 * @package     tool_moodlenet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addingaresource'] = 'Inhalt von MoodleNet hinzufügen';
$string['aria:enterprofile'] = 'Geben Sie Ihre MoodleNet-Profil-ID ein';
$string['aria:footermessage'] = 'Suchen Sie Inhalte auf MoodleNet';
$string['browsecontentmoodlenet'] = 'Oder suchen Sie Inhalte auf MoodleNet';
$string['clearsearch'] = 'Suche löschen';
$string['connectandbrowse'] = 'Verbinden und durchsuchen:';
$string['defaultmoodlenet'] = 'MoodleNet-URL';
$string['defaultmoodlenet_desc'] = 'Die URL der MoodleNet-Instanz, die über die Aktivitätsauswahl verfügbar  sein soll.';
$string['defaultmoodlenetname'] = 'MoodleNet-Instanz';
$string['defaultmoodlenetname_desc'] = 'Der Name der MoodleNet-Instanz, die über die Aktivitätsauswahl verfügbar sein soll.';
$string['defaultmoodlenetnamevalue'] = 'MoodleNet Central';
$string['enablemoodlenet'] = 'MoodleNet integrieren';
$string['enablemoodlenet_desc'] = 'Wenn diese Option aktiviert ist, können Nutzer/innen mit der Berechtigung "Aktivitäten erstellen und verwalten" über die Aktivitätenauswahl MoodleNet durchsuchen und MoodleNet-Ressourcen in ihren Kurs importieren. Außerdem können Nutzer/innen mit der Berechtigung "Kurssicherungen wiederherstellen" eine Kurssicherung in MoodleNet auswählen und in ihrem Moodle wiederherstellen.';
$string['errorduringdownload'] = 'Beim Herunterladen der Datei ist ein Fehler aufgetreten: {$a}';
$string['footermessage'] = 'Oder suchen Sie Inhalte auf';
$string['forminfo'] = 'Ihr MoodleNet-Profil-ID wird automatisch in Ihrem Profil auf dieser Website gespeichert.';
$string['importconfirm'] = 'Möchten Sie wirklich den Inhalt "{$a->resourcename} ({$a->resourcetype})" zum Kurs "{$a->coursename}" hinzufügen?';
$string['importconfirmnocourse'] = 'Möchten Sie wirklich den Inhalt "{$a->resourcename} ({$a->resourcetype})" zum Ihrer Website hinzufügen?';
$string['importformatselectguidingtext'] = 'In welchem Format möchten Sie den Inhalt "{$a->name} ({$a->type})" zu Ihrem Kurs hinzufügen?';
$string['importformatselectheader'] = 'Wählen Sie das Format zur Anzeige des Inhalts';
$string['inputhelp'] = 'Wenn Sie bereits ein MoodleNet-Konto haben, kopieren Sie die ID aus Ihrem MoodleNet-Profil und fügen Sie sie hier ein:';
$string['instancedescription'] = 'MoodleNet ist eine offene Social-Media-Plattform für Pädagog/innen, deren Schwerpunkt beim kollaborativen Sammeln, Zusammenstellen und Aufbereiten offener Ressourcen liegt.';
$string['instanceplaceholder'] = 'a1b2c3d4e5f6-example@moodle.net';
$string['invalidmoodlenetprofile'] = '$userprofile ist nicht korrekt formatiert';
$string['missinginvalidpostdata'] = 'Die Ressourceninfos aus MoodleNet fehlen oder sie sind in einem falschen Format.
Wenn dies wiederholt auftritt, wenden Sie sich bitte an die/den Administrator/in Ihrer Website.';
$string['mnetprofile'] = 'MoodleNet-Profil';
$string['mnetprofiledesc'] = '<p>Geben Sie hier Ihre MoodleNet-Profildaten ein, um beim Besuch von MoodleNet zu Ihrem Profil weitergeleitet zu werden.</p>';
$string['moodlenetnotenabled'] = 'Die MoodleNet-Integration muss über "Website-Administration > MoodleNet" aktiviert sein, bevor Ressourcenimporte verarbeitet werden können.';
$string['moodlenetsettings'] = 'MoodleNet-Einstellungen';
$string['notification'] = 'Sie sind dabei, den Inhalt "{$a->name} ({$a->type})" in Ihre Website zu importieren. Wählen Sie einen Kurs, zu dem der Inhalt hinzugefügt werden soll, oder klicken Sie auf <a href="{$a->cancellink}">Abbrechen</a>.';
$string['pluginname'] = 'MoodleNet';
$string['privacy:metadata'] = 'Das MoodleNet-Werkzeug ermöglicht die Kommunikation mit MoodleNet. Es speichert keine Daten.';
$string['profilevalidationerror'] = 'Beim Versuch, Ihre MoodleNet-Profil-ID zu validieren, ist ein Problem aufgetreten.';
$string['profilevalidationfail'] = 'Geben Sie bitte eine gültige MoodleNet-Profil-ID ein';
$string['profilevalidationpass'] = 'Sieht gut aus!';
$string['removedmnetprofilenotification'] = '<p>Aufgrund von Änderungen auf der MoodleNet-Plattform können Nutzer/innen, die zuvor ihr MoodleNet-Profil auf der Website gespeichert haben, diese Daten nicht mehr zur Authentifizierung auf der MoodleNet-Plattform verwenden. Die zugehörigen Daten wurden entfernt, da sie nicht mehr gültig sind.</p>
<p>Die Nutzer/innen müssen diese Informationen auf der Website zurücksetzen, indem sie ihre MoodleNet-Profil-ID verknüpfen, die in ihrem MoodleNet-Profil zu finden ist.</p>';
$string['removedmnetprofilenotification_subject'] = 'Verknüpfte MoodleNet-Profile wurden entfernt.';
$string['saveandgo'] = 'Speichern und weiter';
$string['searchcourses'] = 'Kurse suchen';
$string['selectpagetitle'] = 'Seite auswählen';
$string['uploadlimitexceeded'] = 'Die Dateigröße {$a->filesize} überschreitet das Nutzer-Limit von {$a->uploadlimit} Bytes zum Hochladen.';
