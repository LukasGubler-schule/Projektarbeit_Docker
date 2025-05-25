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
 * Strings for component 'local_changeloglib', language 'de', version '3.10'.
 *
 * @package     local_changeloglib
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['deletion_backup_clean_task'] = 'Säuberung alter Sicherungen';
$string['pluginname'] = 'Changelog Lib';
$string['settings_diff_available'] = '<p>Das Programm diff wurde gefunden und kann benutzt werden um Änderungen zu lokalisieren</p>';
$string['settings_diff_not_available'] = '<p>Das Programm <code>diff</code> wurde an der angegebenen Stelle nicht gefunden. Bitten Sie den Server-Administrator das Programm zu installieren und besuchen Sie diese Seite erneut. Diese Mitteilung verschwindet sobald das Programm korrekt installiert wurde.</p>';
$string['settings_diff_path'] = 'Pfad zu diff';
$string['settings_diff_path_help'] = 'Der Pfad zu dem Kommandozeilenprogramm diff. Es wird benötigt um den Inhalt von Textdokumenten zu vergleichen.';
$string['settings_pdftotext_available'] = '<p>Das Programm pdftotext wurde gefunden und kann verwendet werden um Änderungen zu lokalisieren.</p>';
$string['settings_pdftotext_not_available'] = '<p>Das Programm <code>pdftotext</code> wurde an der angegebenen Stelle nicht gefunden. Bitten Sie den Server-Administrator das Programm über <code>apt-get install poppler-utils</code> zu installieren und besuchen Sie diese Seite erneut. Diese Mitteilung verschwindet sobald das Programm korrekt installiert wurde.</p>';
$string['settings_pdftotext_path'] = 'Pfad zu pdftotext';
$string['settings_pdftotext_path_help'] = 'Der Pfad zu dem Kommandozeilenprogramm pdftotext. Es wird benötigt um PDF Dokumente zu konvertieren bevor Unterschiede gesucht werden können.';
$string['success'] = 'Erfolg';
$string['warning'] = 'Warnung';
