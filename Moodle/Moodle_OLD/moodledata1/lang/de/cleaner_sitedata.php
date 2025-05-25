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
 * Strings for component 'cleaner_sitedata', language 'de', version '3.10'.
 *
 * @package     cleaner_sitedata
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allcontextlevels'] = 'Alle Kontextebenen';
$string['allcontextlevelsdesc'] = 'Ersetzen Sie alle Dateien in jeder Kontextebene durch einen generischen Standardwert';
$string['allfiletypes'] = 'Alle Dateitypen';
$string['allfiletypesdesc'] = 'Ersetzen Sie alle Dateien aller Dateitypen durch einen allgemeinen Standardwert';
$string['checkcontextsettings'] = 'Bitte überprüfen Sie Ihre Einstellungen. Kein Kontext ausgewählt.';
$string['checkfiletypesettings'] = 'Bitte überprüfen Sie Ihre Einstellungen. Keine Dateitypen ausgewählt.';
$string['contextlevels'] = 'Kontextebenen';
$string['contextlevelsdesc'] = 'Es werden nur Dateien in den ausgewählten Kontexten ersetzt (wenn nicht alle Kontextebenen eingestellt sind).';
$string['filecopyerror'] = 'Fehler. Beim Kopieren der Platzhalterdatei nach sitedata ist ein Fehler aufgetreten. Bitte stellen Sie sicher, dass Sie die richtigen Berechtigungen haben.';
$string['filetypes'] = 'Dateitypen';
$string['filetypesdesc'] = 'Es werden nur die ausgewählten Dateitypen ersetzt (wenn nicht Alle Dateitypen eingestellt ist).';
$string['nothingtoupdate'] = 'Nichts zu aktualisieren.';
$string['pluginname'] = 'Bereinigung der Sitedata';
$string['privacy:metadata'] = 'Das Plugin cleaner sitedata speichert keine personenbezogenen Daten.';
$string['willreplace'] = 'Aktualisiert {$a->total} Datensätz(e) in der files Tabelle.
 Dateityp = \'{$a->mimetype}\'.
 Dateierweiterung(en) = \'{$a->extensions}\'.
 Platzhalterdatei = \'{$a->placeholderfilename}\'.';
$string['willreplaceunknowntype'] = 'Wird {$a->total} Einträge in der files Tabelle geupdated.
 Nicht unterstützter Dateitype = \'{$a->mimetype}\'.
 Neuer Dateityp = \'{$a->newmimetype}\'.
 Dateierweiterung(en) = \'{$a->extensions}\'.
 Platzhalterdatei = \'{$a->placeholderfilename}\'.';
$string['wouldreplace'] = 'Würde {$a->total} Datensätz(e) aus der files Tabelle aktualisieren.
 Dateityp = "{$a->mimetype}".
 Dateierweiterung(en) = \'{$a->extensions}\'.
 Platzhalterdatei = "{$a->placeholderfilename}".';
$string['wouldreplaceunknowntype'] = 'Würde {$a->total} Datensätz(e) aus der files Tabelle aktualisieren.
 Nicht unterstützter Dateityp = \'{$a->mimetype}\'.
 Neuer Dateityp = \'{$a->newmimetype}\'.
 Dateierweiterung(en)= \'{$a->extensions}\'.
 Platzhalterdatei = \'{$a->placeholderfilename}\'.';
