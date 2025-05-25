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
 * Strings for component 'tool_httpsreplace', language 'de', version '4.5'.
 *
 * @package     tool_httpsreplace
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['complete'] = 'Abgeschlossen';
$string['count'] = 'Anzahl der einbezogenen Objekte';
$string['disclaimer'] = 'Ja, ich habe die Risiken dieses Vorgangs verstanden.';
$string['doclink'] = 'HTTPS-Konvertierung';
$string['doit'] = 'Konvertierung ausführen';
$string['domain'] = 'Problematische Domain';
$string['domainexplain'] = 'Wenn eine Website von HTTP auf HTTPS umgestellt wird, kann eingebetteter Content über HTTP-Links vielfach nicht mehr angezeigt. Dieses Tool ermöglicht Ihnen die Verbindungen automatisch von HTTP auf HTTPS umzustellen.

Bevor das Tool die Konvertierung durchgeführt, wird der gesamte Inhalt der Website nach Verlinkungen durchsucht, die möglicherweise nach einer Umstellung nicht mehr aufgerufen werden können. Sie sollten prüfen, ob diese Verlinkungenn auch über HTTPS funktionieren, oder ggfs. andere Quellen verwenden.';
$string['domainexplainhelp'] = 'Die aufgelisteten Domains unterstützen möglicherweise den Aufruf über HTTPS nicht. Nach einer Umstellung auf HTTPS wird deren Inhalt wahrscheinlich nicht mehr angezeigt. Moderne Browser verweigern die Anzeige von HTTP-Quellen, wenn sie aus einer HTTPS-Seite aufgerufen werden. Prüfen Sie daher die angezeigten Quellen, bevor Sie die Umstellung beginnen.';
$string['httpwarning'] = 'Ihre Instanz läuft aktuell mit HTTP. Sie können dieses Tool verwenden, um Verlinkungen auf externe Inhalte auf HTTPS umzustellen. Die internen Verlinkungen bleiben bei HTTP.

Wenn Sie ihre Website auf HTTPS umschalten, müssen Sie das Tool erneut verwenden, um auch alle internen Verlinkungen auf HTTPS umzustellen.';
$string['notimplemented'] = 'Diese Funktion ist in Ihrem Datenbanktreiber nicht installiert.';
$string['oktoprocede'] = 'Der Scan findet keine Einträge mehr in Ihrer Website. Sie können die Konvertierung von HTTP nach HTTPS fortsetzen.';
$string['pageheader'] = 'Extern gehostete URLs nach HTTPS ändern';
$string['pluginname'] = 'HTTPS-Konvertierung';
$string['privacy:metadata'] = 'Das Plugin \'Tool HTTPS-Konvertierung\' speichert keine personenbezogenen Daten.';
$string['replacing'] = 'HTTP-Inhalte werden durch HTTPS ersetzt ...';
$string['searching'] = 'Suche {$a}';
$string['takeabackupwarning'] = 'Hinweis: Wenn Sie dieses Tool verwenden, können Sie dessen Änderungen nicht rückgängig machen. Wir empfehlen Ihnen dringend, vor der Konvertierung eine Sicherung der Website zu erstellen.';
$string['toolintro'] = 'Wenn Sie Ihre Site auf HTTPS umstellen, können Sie die <a href="{$a}"> HTTPS-Konvertierung </a> verwenden, um alle interne Verlinkungen auf HTTPS anzupassen.';
