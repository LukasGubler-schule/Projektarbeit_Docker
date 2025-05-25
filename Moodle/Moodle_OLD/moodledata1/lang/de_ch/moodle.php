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
 * Strings for component 'moodle', language 'de_ch', version '3.10'.
 *
 * @package     moodle
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['closebuttontitle'] = 'Schliessen';
$string['closewindow'] = 'Fenster schliessen';
$string['cookiesenabled_help'] = 'ssMoodle verwendet zwei Cookies:

Das wichtige Cookie heisst <b>MoodleSession</b>. Dieses Cookie muss erlaubt sein, damit Ihr Login bei den Zugriffen von Seite zu Seite erhalten bleibt. Beim Abmelden oder beim Beenden des Webbrowsers wird das Cookie automatisch gelöscht.

Das andere Cookie dient der Bequemlichkeit und heisst standardmässig <b>MoodleID</b>. Dieses Cookie speichert den Anmeldenamen im Webbrowser und bleibt auch nach dem Abmelden erhalten. Beim nächsten Login ist dann Ihr Anmeldename bereits eingetragen. Dieses Cookie können Sie verbieten, müssen dann aber bei jedem Login Ihren Anmeldenamen neu eingeben.';
$string['courseduration_desc'] = 'Die Kursdauer wird zur Berechnung des standardmässigen Kursendes benutzt. Das Kursende wird für Berichte und die Kursanzeige auf dem Dashboard genutzt. Der Eintrag kann auch für individuelle Berichte genutzt werden. Nutzer/innen können auch nach Kursende dem Kurs betreten.';
$string['coursehelpmaximumupload'] = 'Diese Option legt die maximale Dateigrösse fest, die in diesem Kurs hochgeladen werden darf, beschränkt durch die globalen Einstellungen der Website.';
$string['courselegacyfiles_help'] = 'Das Verzeichnis \'Kursdateien\' liefert eine Abwärtskompatibilität zu Moodle 1.9 (und älter). Alle Dateien in diesem Verzeichnis sind im Kurs verfügbar. Es gibt keinen Weg um herauszufinden, welche Dateien überhaupt in Moodle benutzt werden.

Wenn Sie in diesen Bereich eine Datei speichern, könnten eventuell Datenschutz- oder Sicherheitsprobleme entstehen. Ausserdem könnten Dateien bei einer Kurswiederherstellung oder einem Kursimport verloren gehen. Sie sollten diesen Bereich nicht zum Speichern von Dateien benutzen.';
$string['dndnotsupported_help'] = 'Der Browser unterstützt kein Hochladen von Dateien per Drag-and-drop. <br />Dieses Feature ist bei allen aktuellen Versionen von Chrome, Firefox und Safari verfügbar, ausserdem beim Internet Explorer 10.';
$string['edhelpfontsize'] = 'Voreingestellte Schriftgrösse für den Editor
<br />Gültige Werte sind z.B.: medium, large, smaller, larger, 10pt, 11px.';
$string['editorfontsize'] = 'Standardschriftgrösse';
$string['maxareabytesreached'] = 'Die Datei oder mehrere Dateien zusammen sind grösser als der verfügbare Platz in diesem Bereich.';
$string['maxfilesize'] = 'Maximale Dateigrösse: {$a}';
$string['maximumupload'] = 'Maximale Dateigrösse';
$string['maximumupload_help'] = '<h2>Maximale Dateigrösse zum Hochladen</h2>

<p>Diese Einstellungen legt die maximale Grösse einer Datei fest, die Teilnehmer/innen im Kurs hochladen können. Diese wird nach oben begrenzt durch die Voraussetzungen des Servers und die Einstellung der Administrator/innen für die gesamte Moodle-Installation.</p>

<p>Es ist möglich, diese Einstellung für einzelne Aktivitäten im Kurs weiter einzuschränken, indem Sie die gleichnamige Einstellung für die einzelne Aktivität entsprechend anpassen.</p>';
$string['maxsize'] = 'Max. Grösse: {$a}';
$string['maxsizeandareasize'] = 'Maximale Grösse für neue Dateien: {$a->size}, Gesamtgröße: {$a->areasize}';
$string['maxsizeandattachments'] = 'Maximale Grösse für neue Dateien: {$a->size}, Maximale Anzahl von Anhängen: {$a->attachments}';
$string['maxsizeandattachmentsandareasize'] = 'Maximale Grösse für neue Dateien: {$a->size}, Anhänge: {$a->attachments}, Gesamtgrösse: {$a->areasize}';
$string['namedfiletoolarge'] = 'Die Datei \'{$a->filename}\' ist zu gross und kann nicht hochgeladen werden.';
$string['pleaseclose'] = 'Bitte schliessen Sie jetzt dieses Fenster.';
$string['size'] = 'Grösse';
$string['uploadlimitwithsize'] = 'Max. Dateigrösse {$a->contextname} ({$a->displaysize})';
