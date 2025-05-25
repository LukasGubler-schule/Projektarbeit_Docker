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
 * Strings for component 'local_codechecker', language 'de', version '4.5'.
 *
 * @package     local_codechecker
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check'] = 'Code prüfen';
$string['clihelp'] = 'Überprüfen Sie etwas PHP-Code anhand der Moodle-Codierungsrichtlinien.
Optionen:
  --interactive, -i Hält nach jeder Datei an, um mit der nächsten Datei fortzufahren
                    oder die Überprüfung derselben Datei zu wiederholen.
  --exclude, -e     Schließt Dateien mit einer durch Kommas getrennten Liste von Pfaden aus,
                    Sternchen sind als Platzhalter an jeder Stelle erlaubt.
  --help, -h        Zeigt diese Informationen an
Beispiel:
  php run.php local/codechecker';
$string['error_find'] = 'Ordnersuche fehlgeschlagen';
$string['exclude'] = 'Ausschließen';
$string['filesfound'] = 'Gefundene Dateien: {$a}';
$string['filesummary'] = '{$a->path} - {$a->count}';
$string['includewarnings'] = 'Warnungen einbeziehen';
$string['info'] = '<p>Überprüft Code anhand einiger Aspekte der {$a->link}.</p>
<p>Geben Sie einen Pfad relativ zum Moodle-Code-Stamm ein, zum Beispiel: {$a->path}.</p>
<p>Sie können entweder eine bestimmte PHP-Datei oder einen Ordner eingeben, um alle darin enthaltenen Dateien zu überprüfen.
Mehrere Einträge werden unterstützt (Dateien oder Ordner), einer pro Zeile.</p>
<p>Um Dateien auszuschließen, kann eine durch Kommas getrennte Liste von Pfaden verwendet werden, zum Beispiel: {$a->excludeexample}. Sternchen sind als Platzhalter an jeder Stelle erlaubt.</p>';
$string['invalidpath'] = 'Ungültiger Pfad {$a}';
$string['moodlecodingguidelines'] = 'Moodle Coding Richtlinien';
$string['numerrorswarnings'] = '{$a->errors} Fehler und {$a->warnings} Warnungen';
$string['other_crlf'] = 'Windows (CRLF) Zeilenende statt nur LF (nur erstes Vorkommen wird gemeldet)';
$string['other_eol'] = 'Leerzeichen am Zeilenende';
$string['other_extralfs'] = 'Zusätzliche Leerzeile(n) am Ende der Datei (genau eine verwenden)';
$string['other_missinglf'] = 'Fehlendes LF am Ende der Datei (genau eine verwenden)';
$string['other_ratherlong'] = 'Zeile länger als die empfohlenen 132 Zeichen';
$string['other_tab'] = 'Tabulatorzeichen nicht erlaubt';
$string['other_toolong'] = 'Zeile länger als maximal 180 Zeichen';
$string['path'] = 'Zu überprüfende Pfade';
$string['pluginname'] = 'Code-Checker';
$string['privacy:metadata'] = 'Das Code-Checker-Plugin speichert keine persönlichen Daten.';
$string['recheckfile'] = 'Nur diese Datei erneut prüfen';
$string['showstandard'] = 'Zeige den mit einem Problem verbundenen phpcs-Standard an';
$string['success'] = 'Gut gemacht!';
$string['summary'] = 'Gesamt: {$a}';
$string['wholefile'] = 'Datei';
