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
 * Strings for component 'filter_translations', language 'de', version '3.10'.
 *
 * @package     filter_translations
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bulkdeleteconfirmation'] = 'Möchten Sie ganz sicher diese Übersetzungen vollständig löschen?';
$string['cachedef_translatedtext_1'] = 'Übersetzter Text (Anfragelevel)';
$string['cachedef_translatedtext_2'] = 'Übersetzter Text (Sitzungslevel)';
$string['cachedef_translatedtext_4'] = 'Übersetzter Text (Anwendungslevel)';
$string['cachingmode'] = 'Caching-Modus';
$string['cachingmode_desc'] = 'Für Websites mit einer relativ geringen Anzahl von Kursen und einem hohen Nutzeraufkommen wird der Anwendungslevel empfohlen. Für eine große Anzahl von Kursen wird der Sitzunglevel bevorzugt. Und um das Caching zu minimieren, empfehlen wir den Anforderungslevel.';
$string['clihelptext_insertspans'] = 'Dieses Tool fügt Übersetzungs-Hashes an alle Rich-Text-Felder an, die in der Datenbank gefunden werden, MIT ÄUSSERSTER SORGFALT VERWENDEN.
Um die Aufgabe auszuführen, führen Sie diesen Befehl erneut aus und geben Sie einen Modus an, z.B.
php cli/insert_spans.php --mode=listcolumns

Gültige Modi sind:
prozess - Wirklich tun ...
listcolumns – Listen Sie die betroffenen Tabellen und Spalten auf

Die vorgeschlagene Verwendung besteht darin, die Spalten aufzulisten, die geändert werden könnten:
php filter/translations/cli/insert_spans.php --mode=listcolumns > /Users/moodleadmin/cols.json

Bearbeiten Sie die Datei mit einem Texteditor, um alle zu entfernen, die ignoriert werden sollen. Führen Sie dann den Vorgang aus, um diese Spalten zu verarbeiten:

php filter/translations/cli/insert_spans.php --mode=process --file=/Users/moodleadmin/cols.json';
$string['clihelptext_migrate_filter_fulltranslate'] = 'Dieses Tool kopiert Übersetzungen aus dem Plugin filter_fulltranslate in das Plugin filter_translations.
Alle zuvor mit diesem Tool kopierten Einträge werden dupliziert.
Um die Aufgabe auszuführen, führen Sie diesen Befehl erneut aus und geben Sie den Parameter --confirm an, z.B.:
php cli/migrate_filter_fulltranslate.php --confirm';
$string['columndefinitionfileerror'] = 'Fehlende oder ungültige Spaltendefinitionsdatei';
$string['context'] = 'Kontext';
$string['createtranslation'] = 'Übersetzung anlegen';
$string['current'] = 'Aktuell';
$string['deleteissuesconfirmation'] = 'Möchten Sie ganz sicher diese Einträge vollständig löschen?';
$string['deleteselected'] = 'Ausgewählte Übersetzungen löschen';
$string['deleteselectedentries'] = 'Ausgewählte Einträge löschen';
$string['diff'] = 'Diff';
$string['edittranslation'] = 'Übersetzung bearbeiten';
$string['edittranslationsbutton'] = 'Übersetzung bearbeiten';
$string['excludelang'] = 'Sprachen von der Übersetzung ausschließen';
$string['excludelang_desc'] = 'Liste der Sprachen, die vollständig von der Übersetzung ausgeschlossen werden sollen.';
$string['filtername'] = 'Inhaltsübersetzungen';
$string['filteroptions'] = 'Filteroptionen';
$string['foundhash'] = 'Hash gefunden';
$string['generatedhash'] = 'Hash erzeugt';
$string['google_apiendpoint'] = 'API Endpunkt';
$string['google_apikey'] = 'API Schlüssel';
$string['google_backoffonerror'] = 'Von fehlerhafter API zurückziehen';
$string['google_enable'] = 'Google Translate API verwenden';
$string['googletranslate'] = 'Google Translate';
$string['hash'] = 'Hash';
$string['issue'] = 'Status';
$string['issue_10'] = 'Veraltet';
$string['issue_20'] = 'Fehlend';
$string['languagestringreverse'] = 'Rückwärtssuche nach Sprachzeichenfolgen';
$string['languagestringreverse_enable'] = 'Rückwärtssuche nach Sprachzeichenfolgen aktivieren';
$string['logdebounce'] = 'Protokolldauer entprellen';
$string['logexcludelang'] = 'Sprachen von der Protokollierung ausschließen';
$string['logexcludelang_desc'] = 'Liste der Sprachen, die von der Protokollierung fehlender Übersetzungen ausgeschlossen werden sollen.';
$string['logging'] = 'Protokollieren';
$string['logmissing'] = 'Fehlende Übersetzungen protokollieren';
$string['logstale'] = 'Veraltete Übersetzungen protokollieren';
$string['managetranslationissues'] = 'Ausstehende Übersetzungen verwalten';
$string['managetranslations'] = 'Übersetzungen verwalten';
$string['md5key'] = 'Übersetzungs-Hash-Key';
$string['nohash'] = 'Keinen Übersetzungs-Hash-Key gefunden';
$string['notranslation'] = 'Keine Übersetzung gefunden';
$string['old'] = 'Alter Inhalt';
$string['pluginname'] = 'Inhaltsübersetzung';
$string['privacy:metadata'] = 'Das Plugin "Inhaltsübersetzung" speichert keine personenbezogenen Daten.';
$string['rawhtml'] = 'Original HTML';
$string['rawtext'] = 'Original Inhalt';
$string['showperfdata'] = 'Performance-Daten in der Fußzeile anzeigen';
$string['staletranslation'] = 'Die Übersetzung wurde aus einem anderen Quelltext erzeugt. Aktualisieren Sie bitte die Übersetzung.';
$string['startinlinetranslation'] = 'Inline-Übersetzung starten';
$string['stopinlinetranslation'] = 'Inline-Übersetzung beenden';
$string['substitutetext'] = 'Übersetzter Inhalt';
$string['targetlanguage'] = 'Übersetzungssprache';
$string['translate_good'] = 'Übersetzen - Übersetzung ist aktuell';
$string['translate_none'] = 'Übersetzen - Keine Übersetzung verfügbar';
$string['translate_stale'] = 'Übersetzen - Übersetzung muss aktualisiert werden';
$string['translatedby'] = 'Übersetzt von';
$string['translation'] = 'Übersetzung';
$string['translationalreadyexists'] = 'Die Übersetzung kann nicht gespeichert werden. Es gibt bereits eine Übersetzung für die Sprache "{$a}".';
$string['translationdetails'] = 'Übersetzungsdetails';
$string['translationid'] = 'Übersetzungs-ID';
$string['translationissues'] = 'Übersetzungsprobleme';
$string['translationissuesincoursemissing'] = 'Fehlend in diesem Kurs';
$string['translationissuesincoursestale'] = 'Veraltet in diesem Kurs';
$string['translationissuesinpagemissing'] = 'Fehlend auf dieser Seite';
$string['translationissuesinpagemissingall'] = 'Alle fehlenden Übersetzungen';
$string['translationissuesinpagestale'] = 'Veraltet auf dieser Seite';
$string['translationissuesinpagestaleall'] = 'Alle veralteten Übersetzungen';
$string['translations'] = 'Übersetzungen';
$string['translations:bulkdeletetranslations'] = 'Übersetzungen löschen (Bulk)';
$string['translations:deletetranslations'] = 'Übersetzungen löschen';
$string['translations:editsitedefaulttranslations'] = 'Bearbeiten Sie die Standardsprachübersetzungen der Website';
$string['translations:edittranslationhashkeys'] = 'Hash-Keys bearbeiten';
$string['translations:edittranslations'] = 'Übersetzungen bearbeiten';
$string['untranslatedpages'] = 'Seiten, die unübersetzt bleiben sollen';
$string['untranslatedpages_desc'] = 'Eine pro Zeile.';
$string['url'] = 'Seite';
$string['userid'] = 'Nutzer-ID';
