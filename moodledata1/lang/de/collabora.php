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
 * Strings for component 'collabora', language 'de', version '3.10'.
 *
 * @package     collabora
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cachedef_discovery'] = 'Collabora XML-Datei für Discovery';
$string['collabora:addinstance'] = 'Kollaboratives Dokument zu einem Kurs hinzufügen';
$string['collabora:editlocked'] = 'Gesperrtes kollaboratives Dokument bearbeiten';
$string['collabora:lock'] = 'Kollaboratives Dokument sperren/entsperren';
$string['collabora:repair'] = 'Defektes Dokument reparieren';
$string['collabora:view'] = 'Kollaboratives Dokument anzeigen';
$string['collaboraurl'] = 'Collabora-URL';
$string['collaboraurlnotset'] = 'Collabora-URL ist für diese Seite nicht konfiguriert';
$string['current'] = 'Aktuelle Registerkarte';
$string['defaultdisplay'] = 'Standardanzeige';
$string['defaultdisplaydescription'] = 'Standardanzeigebeschreibung';
$string['defaultdisplayname'] = 'Standardanzeigename';
$string['defaultformat'] = 'Standardformat';
$string['display'] = 'Anzeigen';
$string['displaydescription'] = 'Beschreibung anzeigen';
$string['displayname'] = 'Name anzeigen';
$string['dnduploadcollabora'] = 'Kollaboratives Dokument anlegen';
$string['eventdocumentlocked'] = 'Kollaboratives Dokument gesperrt';
$string['eventdocumentrepaired'] = 'Das kollaborative Dokument wurde repariert.';
$string['eventdocumentunlocked'] = 'Kollaboratives Dokument entsperrt';
$string['format'] = 'Format';
$string['fullscreen'] = 'Vollbild';
$string['height'] = 'Höhe (0=automatisch)';
$string['initialfile'] = 'Datei-Vorlage';
$string['initialtext'] = 'Vorgegebener Text';
$string['locked'] = 'Dokument durch Trainer/in gesperrt';
$string['lockedunlock'] = 'Das Dokument ist gesperrt. Klicken Sie hier, um die Sperre aufzuheben.';
$string['modulename'] = 'Kollaboratives Dokument';
$string['modulename_help'] = 'Mit dieser Anwendung können Sie eine Verbindung zu einem Collabora Online Server herstellen, um ein Text-, Word-, Präsentations- oder Tabellen-Dokument zu erstellen oder ein Dokument hochzuladen und dieses gemeinsam zu bearbeiten.';
$string['modulenameplural'] = 'Kollaborative Dokumente';
$string['name'] = 'Name';
$string['new'] = 'Neue Registerkarte';
$string['nogroupaccess'] = 'Diese Aktivität steht nur Nutzer/innen zur Verfügung, die Mitglieder einer Kursgruppe sind';
$string['pluginadministration'] = 'Einstellungen für kollaboratives Dokument';
$string['pluginname'] = 'Kollaboratives Dokument';
$string['presentation'] = 'Präsentation';
$string['privacy:metadata:collabora_extsystem'] = 'Dateiinfos und -Inhalte werden mit Collabora geteilt, um eine interaktive Zusammenarbeit zu erlauben.';
$string['privacy:metadata:collabora_extsystem:filecontent'] = 'Inhalt der Datei';
$string['privacy:metadata:collabora_extsystem:lastmodified'] = 'Zeitpunkt der letzten Änderung';
$string['privacy:metadata:collabora_extsystem:username'] = 'Nutzername';
$string['privacy:metadata:core_files'] = 'Das Modul mod_collabora speichert kolloborative Dateien.';
$string['repair'] = 'Reparieren';
$string['repair_failed'] = 'Das Dokument konnte nicht repariert werden.';
$string['repair_succeeded'] = 'Das Dokument wurde repariert.';
$string['repairdocument'] = 'Dokument "{$a}" reparieren';
$string['repairdocumentconfirm'] = 'Möchten Sie wirklich versuchen, das Dokument zu reparieren?';
$string['repairdocumentconfirm_help'] = 'Es kann vorkommen, dass der Collabora-Server das letzte Dokument nicht laden kann z.B. weil es einen Versionskonflikt gibt oder weil ein Prozess auf dem Server abgestürzt ist.<br />
Normalerweise lösen sich solche Probleme von selbst. Allerdings kann das eine Weile dauern. Bis dahin kann das Dokument nicht bearbeitet werden.<br />
Wenn Sie diese Reparatur-Funktion nutzen, wird das Dokument auf dem Server mit einem neuen Prozess verbunden und kann anschließend wieder bearbeitet werden.<br />
<strong>Achtung: Stellen Sie sicher, dass das Dokument aktuell nicht von anderen Nutzer/innen bearbeitet wird. Ansonsten bekommen diese Nutzer/innen eine Fehlermeldung, wenn sie versuchen es zu speichern.</strong>';
$string['requiredfortext'] = 'Erforderlich, wenn das Format \'Vorgegebener Text\' ist';
$string['requiredforupload'] = 'Erforderlich, wenn das Format \'Vorlage hochladen\' ist';
$string['restorewindowsize'] = 'Fenstergröße wiederherstellen';
$string['setting_allowcollaboraserverexplicit'] = 'Die Collabora-URL explizit erlauben.';
$string['setting_allowcollaboraserverexplicit_help'] = '<strong>Beachten Sie:</strong> Diese Einstellung kann ein möglicherweise ein Sicherheitsrisiko darstellen. Sie sollten sie aktivieren, wenn Ihr Collabora-Server in einem privaten Netz oder auf dem selben Host wie Ihr Moodle betrieben wird.<br />
Wenn Ihr Collabora-Server über einen in <strong>$CFG->curlsecurityblockedhosts</strong> festgelegten Hostnamen erreicht wird, müssen Sie diese Einstellung aktivieren oder den Hostnamen aus der Block-List entfernen.';
$string['setting_header_security'] = 'Sicherheit';
$string['spreadsheet'] = 'Tabellenkalkulation';
$string['text'] = 'Vorgegebener Text';
$string['unlockedlock'] = 'Das Dokument ist bearbeitbar. Klicken Sie hier, um es zu sperren und die Bearbeitung zu verhindern.';
$string['unsupportedtype'] = 'Nicht unterstützter Dateityp {$a}';
$string['upload'] = 'Vorlage hochladen';
$string['width'] = 'Breite (0=automatisch)';
$string['wordprocessor'] = 'Textverarbeitung';
