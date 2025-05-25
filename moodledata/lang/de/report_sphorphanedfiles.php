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
 * Strings for component 'report_sphorphanedfiles', language 'de', version '4.5'.
 *
 * @package     report_sphorphanedfiles
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessruleviolationmessage'] = 'Bericht ist nicht aktiviert oder es fehlen die Berechtigungen';
$string['confighandleractivitiescore'] = 'Nicht jede <b>Moodle-Kernaktivität</b> unterstützt die Einführungsbeschreibung (z.B. Text- und Medienfeld).
Diese kommagetrennte Liste von Moodle-Kernaktivitäten wird auf verwaiste Dateien in der Einführungsbeschreibung geprüft.
Neue Moodle-Kernaktivitäten müssen zu dieser Liste hinzugefügt werden.';
$string['confighandleractivitiesplugin'] = 'Nicht jede <b>zusätzliche Moodle-Kernaktivität</b> unterstützt die Einführungsbeschreibung.
Diese kommagetrennte Liste von zusätzlichen Moodle-Kernaktivität wird auf verwaiste Dateien in der Einführungsbeschreibung geprüft.
Neue zusätzlichen Moodle-Kernaktivitäten müssen zu dieser Liste hinzugefügt werden.';
$string['confighandlermaterialscore'] = 'Nicht jede <b>Moodle-Kernressource</b> unterstützt die Einführungsbeschreibung.
Diese kommagetrennte Liste von Moodle-Kernressourcen wird auf verwaiste Dateien in der Einführungsbeschreibung geprüft.
Neue Moodle-Kernressourcen müssen zu dieser Liste hinzugefügt werden, wenn diese die Einführungsbeschreibung unterstützen.';
$string['confighandlermaterialsplugin'] = 'Nicht jede <b>Moodle-Zusatzressource</b> unterstützt die Einführungsbeschreibung.
Diese kommagetrennte Liste von Moodle-Zusatzressourcen wird auf verwaiste Dateien in der Einführungsbeschreibung geprüft.
Neue zusätzlichen Moodle-Zusatzressourcen müssen zu dieser Liste hinzugefügt werden, wenn diese die Einführungsbeschreibung unterstützen.';
$string['configisactive'] = 'Bei Aktivierung kann der Bericht in der Kursnavigation (Kursindex) aufgerufen (oder gestartet) werden.';
$string['configisactiveforadmin'] = 'Wenn aktiviert, dann kann ein Admin-Account den Bericht in der Kursnavigation starten, unabhängig davon, ob der der Bericht für normale Nutzende aktiv ist.';
$string['deleteMessage'] = 'Verwaiste Datei erfolgreich gelöscht!';
$string['description'] = 'Wenn Trainer/innen eine Datei zum Editor hinzufügen und die Datei innerhalb der Vorschau löschen, dann wird die Datei noch im Hintergrund dieses Kontextes (z.B. Textfeld) gespeichert. Trainer/innen können die Datei über den Dialog "Dateien verwalten" im Editor löschen. Dies ist nicht sehr komfortabel.
Dieser Bericht hilft, verwaiste Dateien aufzuzeigen, die möglicherweise nicht in Beschreibungen von Aktivitäten oder Materialien verwendet werden, und unterstützt beim Löschen.';
$string['handleractivitiescore'] = 'Diese Moodle-Kernaktivität (moodle core activity) auf verwaiste Dateien in der Beschreibung (Intro) überprüfen';
$string['handleractivitiesplugin'] = 'Diese zusätzlichen Aktivitäten auf verwaiste Dateien in der Beschreibung (Intro) überprüfen.';
$string['handlermaterialscore'] = 'Diese Moodle-Materialien (moodle core resources) auf verwaiste Dateien in der Beschreibung (Intro) überprüfen.';
$string['handlermaterialsplugin'] = 'Diese zusätzlichen Materialien auf verwaiste Dateien in der Beschreibung (Intro) überprüfen.';
$string['header.code'] = 'HTML-Quellcode:';
$string['header.content'] = 'Inhalt';
$string['header.filename'] = 'Dateiname';
$string['header.modName'] = 'Modul';
$string['header.moduleContent'] = 'Beschreibung, ...';
$string['header.preview'] = '';
$string['header.tool'] = 'Datei ohne Nachfrage löschen';
$string['invalidcourseidmessage'] = 'Ungültige Kurs-ID';
$string['isactive'] = 'Bericht aktivieren';
$string['isactiveforadmin'] = 'Bericht für Administrator/innen aktivieren';
$string['isallowedtodeleteallfiles'] = 'Berechtigung zum Löschen aller Dateien innerhalb des Kurses liegt vor.';
$string['isgridlayoutfilehint'] = 'Diese Datei wurde möglicherweise vom Grid-Kursformat verwendet, scheint aber nicht in Gebrauch zu sein. Prüfen vor dem Löschen empfohlen!';
$string['pluginname'] = 'Übersicht über verwaiste Dateien';
$string['sphorphanedfiles:delete'] = 'Berechtigung, jeder verwaisten Datei ein Papierkorb-Symbol hinzuzufügen, um die Datei löschen zu können.';
$string['sphorphanedfiles:view'] = 'Berechtigung zum Anzeigen dieses Berichtes';
