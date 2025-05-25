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
 * Strings for component 'assignsubmission_changes', language 'de', version '3.10'.
 *
 * @package     assignsubmission_changes
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admin_diff'] = 'Suche nach Unterschieden standardmäßig aktivieren';
$string['admin_diff_help'] = 'Wenn gesetzt wird die Suche nach Unterschieden standardmäßig bei allen neuen Aufgaben aktiviert.<br>Die Suche nach Unterschieden benötigt die Erstellung einer Änderungshistorie.';
$string['allow_changelog'] = 'Erstellung einer Änderungshistorie für studentische Abgaben erlauben';
$string['allow_changelog_help'] = 'Wenn gesetzt kann eine Änderungshistorie für studentische Abgaben generiert werden. Sie können die entsprechende Option in den Einstellungen der Aufgabe setzen. Wenn diese Einstellung deaktiviert ist, wird eine Erstellung in allen Aufgaben unterbunden.';
$string['default'] = 'Änderungshistorie standardmäßig aktivieren';
$string['default_help'] = 'Wenn gesetzt wird die Änderungshistorie standardmäßig bei allen neuen Aufgaben angelegt.';
$string['diff'] = 'Automatisch nach Unterschieden suchen';
$string['diff_help'] = 'Lokalisiert automatisch Unterschiede in den Aktualisierungen studentischer Abgaben.';
$string['diff_not_available'] = '<p>Die Suche nach Unterschieden in PDF Dokumenten ist nicht verfügbar, da das Programm <code>dif</code> nicht auf dem System gefunden wurde. Wenn Sie die obige Einstellung aktiviert haben, überprüfen Sie die Einstellungsseite des Plugins ChangelogLib um den korrekten Pfad anzugeben. Diese Nachricht verschwindet sobald das Programm gefunden wurde.</p>';
$string['diff_prefix'] = 'Die folgenden Seiten der neuen Datei wurden geändert:';
$string['diff_requires_changelog'] = 'Sie müssen für die Suche nach Unterschieden die Erstellung einer Änderungshistorie aktivieren.';
$string['edit_form_changes'] = 'Eintrag der Änderungshistorie';
$string['edit_form_changes_help'] = 'Beschreiben Sie die Änderungen in Ihrer Abgabe.';
$string['edit_form_error_empty'] = 'Der Eintrag in der Änderungshistorie darf nicht leer sein.';
$string['edit_form_error_too_long'] = 'Sie können nicht mehr als {$a->max} Zeichen in Ihrer Beschreibung verwenden. Im Moment haben Sie {$a->used} Zeichen eingegeben.';
$string['edit_form_headline'] = 'Bearbeiten des Anzeigetextes in der Änderungshistorie für Ihre Abgabe am {$a}.';
$string['enabled'] = 'Änderungshistorie';
$string['enabled_help'] = 'Suche nach Unterschieden aktivieren';
$string['is_an_update'] = 'ist eine Aktualisierung von';
$string['last_grading'] = 'Die letzte Bewertung war am';
$string['long_diff'] = '{$a} Seiten wurden verändert';
$string['max_filesize'] = 'Max. Dateigröße in MB für die Suche nach Unterschieden';
$string['max_filesize_help'] = 'Die Dateigröße bis zu der Unterschiede gegenüber dem Vorgänger lokalisiert werden. Ein größerer Wert kann die Antwortzeit des Servers negativ beeinflussen und erhebliche Last verursachen. Setzen Sie diesen Wert auf Null um die Suche nach Unterschieden zu verbieten.';
$string['new_changes_prefix'] = 'Die folgenden Änderungen wurden durch den Benutzer nach der letzten Bewertung vorgenommen';
$string['no_changes'] = 'Es wurden keine Unterschiede gefunden.';
$string['no_last_grading'] = 'Bislang liegt keine Bewertung vor.';
$string['no_new_changes'] = 'Es gibt keine Änderungen nach der letzten Bewertung';
$string['no_old_changes'] = 'Der Studierende hat vor der letzten Bewertung keine Änderungen durchgeführt.';
$string['no_ungraded_changes'] = 'Keine unbewerteten Änderungen';
$string['old_changes_prefix'] = 'Die folgenden Änderungen wurden durch den Benutzer vor der letzten Bewertung durchgeführt.';
$string['pdftotext_not_available'] = '<p>Die Suche nach Unterschieden in PDF Dateien ist nicht verfügbar, da das Programm <code>pdftotext</code> nicht auf Ihrem System gefunden werden konnte. Wenn Sie die obige Option aktiviert haben, besuchen Sie die Einstellungsseite des Plugins ChangelogLib um den korrekten Pfad zu dem Programm anzugeben. Diese Nachricht verschwindet sobald das Programm gefunden wurde.';
$string['pluginname'] = 'Änderungshistorie';
$string['pluginname_desc'] = 'AssignSubmission Changes';
$string['pluginname_help'] = 'AssignSubmission Changes';
$string['replaces'] = 'ersetzt';
$string['ungraded_changes'] = 'Es gibt keine unbewertete Änderungen';
$string['warning'] = 'Warnung';
$string['was_added'] = 'wurde hinzugefügt';
$string['was_deleted'] = 'wurde entfernt';
