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
 * Strings for component 'report_customsql', language 'de', version '3.10'.
 *
 * @package     report_customsql
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcategory'] = 'Neue Kategorie hinzufügen';
$string['addcategorydesc'] = 'Um die Kategorie eines Berichts zu ändern, müssen Sie diesen Bericht bearbeiten. Hier können Sie Kategorientexte bearbeiten, eine Kategorie löschen oder eine neue Kategorie hinzufügen.';
$string['addreport'] = 'Neue Abfrage hinzufügen';
$string['addreportcategory'] = 'Neue Kategorie für Berichte hinzufügen';
$string['anyonewhocanveiwthisreport'] = 'Alle, die diesen Bericht sehen dürfen (report/customsql:view)';
$string['archivedversions'] = 'Archivierte Versionen dieser Abfrage';
$string['at'] = 'um';
$string['automaticallydaily'] = 'Anstehend, täglich';
$string['automaticallymonthly'] = 'Anstehend, am ersten Tag jeden Monats';
$string['automaticallyweekly'] = 'Anstehend, am ersten Tag jeder Woche';
$string['availablereports'] = 'Ad-hoc Datenbankabfragen';
$string['availableto'] = 'Verfügbar für {$a}.';
$string['backtoreportlist'] = 'Zurück zur Liste der Abfragen';
$string['category'] = 'Kategorie';
$string['categorycontent'] = '({$a->manual} nach Bedarf, {$a->daily} täglich, {$a->weekly} wöchentlich, {$a->monthly} monatlich)';
$string['categoryexists'] = 'Kategorienamen müssen eindeutig sein, dieser Name existiert bereits';
$string['categorynamex'] = 'Kategoriename: {$a}';
$string['changetheparameters'] = 'Die Parameter ändern';
$string['crontask'] = 'Ad-hoc Datenbankabfragen: Anstehende Abfragen ausführen';
$string['customdir'] = 'CSV in Pfad / Verzeichnis exportieren';
$string['customdir_help'] = 'Dateien werden im CSV-Format in den angegebenen Dateipfad exportiert. Wenn ein Verzeichnis angegeben ist, wird das Dateinamenformat reportid-timecreated.csv sein.';
$string['customdirmustexist'] = 'Das Verzeichnis "{$a}" existiert nicht.';
$string['customdirnotadirectory'] = 'Der Pfad "{$a}" ist kein Verzeichnis.';
$string['customdirnotwritable'] = 'Das Verzeichnis "{$a}" ist nicht schreibbar.';
$string['customsql:definequeries'] = 'Eigene Abfragen definieren';
$string['customsql:managecategories'] = 'Eigene Kategorien definieren';
$string['customsql:view'] = 'Ad-hoc Abfragen-Berichte ansehen';
$string['dailyheader'] = 'Täglich';
$string['dailyheader_help'] = 'Diese Abfragen werden jeden Tag zum angegebenen Zeitpunkt automatisch ausgeführt. Mit diesen Links können Sie die bereits gesammelten Ergebnisse anzeigen.';
$string['defaultcategory'] = 'Verschiedenes';
$string['delete'] = 'Löschen';
$string['deleteareyousure'] = 'Möchten Sie diese Abfrage wirklich löschen?';
$string['deletecategoryareyousure'] = '<p>Möchten Sie diese Kategorie wirklich löschen?</p><p>Sie darf keine Abfragen beinhalten.</p>';
$string['deletecategoryx'] = 'Kategorie löschen: \'{$a}\'';
$string['deletecategoryyesno'] = '<p>Möchten Sie diese Kategorie wirklich löschen?</p>';
$string['deletereportx'] = 'Abfrage löschen: \'{$a}\'';
$string['description'] = 'Beschreibung';
$string['displayname'] = 'Abfragename';
$string['displaynamerequired'] = 'Sie müssen einen Abfragenamen eingeben';
$string['displaynamex'] = 'Abfragename: {$a}';
$string['downloadthisreportas'] = 'Die Ergebnisse herunterladen als';
$string['downloadthisreportascsv'] = 'Diese Resultate als CSV herunterladen';
$string['edit'] = 'hinzufügen/bearbeiten';
$string['editcategory'] = 'Kategorie aktualisieren';
$string['editcategoryx'] = 'Kategorie bearbeiten: \'{$a}\'';
$string['editingareport'] = 'Eine Ad-hoc Datenbankabfrage bearbeiten';
$string['editreportx'] = 'Abfrage bearbeiten: \'{$a}\'';
$string['emailbody'] = 'Sehr geehrte/r {$a}';
$string['emailink'] = 'Um auf den Bericht zuzugreifen, klicken Sie auf diesen Link: {$a}';
$string['emailnumberofrows'] = 'Nur die Anzahl der Zeilen und der Link';
$string['emailresults'] = 'Ergebnisse in den E-Mail-Body übernehmen';
$string['emailrow'] = 'Der Bericht hat {$a} Zeile zurückgegeben.';
$string['emailrows'] = 'Der Bericht hat {$a} Zeilen zurückgegeben.';
$string['emailsent'] = 'Eine E-Mail-Benachrichtigung wurde an {$a} gesendet.';
$string['emailsentfailed'] = 'E-Mail kann nicht an {$a} gesendet werden';
$string['emailsubject'] = 'Abfrage {$a}';
$string['emailsubject1row'] = 'Abfrage {$a} [1 Zeile]';
$string['emailsubjectnodata'] = 'Abfrage {$a} [Keine Ergebnisse]';
$string['emailsubjectxrows'] = 'Abfrage {$a->name} [{$a->rows} Zeilen]';
$string['emailto'] = 'Automatisch E-Mail senden an';
$string['emailwhat'] = 'Was senden';
$string['enterparameters'] = 'Geben Sie Parameter für die Ad-hoc-Datenbankabfrage ein.';
$string['errordeletingcategory'] = '<p>Fehler beim Löschen einer Abfragekategorie.</p><p>Sie muss leer sein, um sie zu löschen.</p>';
$string['errordeletingreport'] = 'Fehler beim Löschen einer Abfrage.';
$string['errorinsertingreport'] = 'Fehler beim Einfügen einer Abfrage.';
$string['errorupdatingreport'] = 'Fehler beim Aktualisieren einer Abfrage.';
$string['invalidreportid'] = 'Ungültige Abfrage-ID {$a}.';
$string['lastexecuted'] = 'Diese Abfrage wurde zuletzt am {$a->lastrun} ausgeführt. Sie benötigte {$a->lastexecutiontime} s.';
$string['managecategories'] = 'Berichtkategorien bearbeiten';
$string['manual'] = 'Nach Bedarf';
$string['manualheader'] = 'Nach Bedarf';
$string['manualheader_help'] = 'Diese Abfragen werden nach Bedarf ausgeführt, wenn Sie den Link anklicken, um die Resultate zu sehen.';
$string['messageprovider:notification'] = 'Ad-hoc Datenbankabfragen Benachrichtigungen';
$string['monthlyheader'] = 'Monatlich';
$string['monthlyheader_help'] = 'Diese Abfragen werden automatisch am ersten Tag jedes Monats ausgeführt, um über den vorherigen Monat zu berichten. Mit diesen Links können Sie die bereits gesammelten Ergebnisse anzeigen.';
$string['monthlynote_help'] = 'Diese Abfragen werden automatisch am ersten Tag jedes Monats ausgeführt, um über den vorherigen Monat zu berichten. Mit diesen Links können Sie die bereits gesammelten Ergebnisse anzeigen.';
$string['morethanonerowreturned'] = 'Mehr als eine Zeile wurde zurückgegeben. Diese Abfrage sollte eine Zeile zurückgeben.';
$string['nodatareturned'] = 'Diese Abfrage hat keine Daten zurückgegeben.';
$string['noexplicitprefix'] = 'Bitte fügen Sie den Tabellennamen-Präfix <code>{$a}</ code> nicht in das SQL ein. Stattdessen setzen Sie den Tabellennamen ohne Präfix in <code>{}</code>-Zeichen.';
$string['noreportsavailable'] = 'Keine Abfragen verfügbar';
$string['norowsreturned'] = 'Keine Zeile wurde zurückgegeben. Diese Abfrage sollte eine Zeile zurückgeben.';
$string['noscheduleifplaceholders'] = 'Abfragen, die Platzhalter verwenden können nur nach Bedarf ausgeführt werden.';
$string['nosemicolon'] = 'Es ist kein ; Zeichen in der SQL-Abfrage erlaubt.';
$string['notallowedwords'] = 'Die Wörter <code>{$a}</code> sind in der SQL-Abfrage nicht erlaubt.';
$string['note'] = 'Notizen';
$string['notrunyet'] = 'Diese Abfrage wurde noch nie ausgeführt.';
$string['onerow'] = 'Die Abfrage gibt eine Zeile zurück, und sammelt die Ergebnisse jeweils in einer Zeile';
$string['parametervalue'] = '{$a->name}: {$a->value}';
$string['pluginname'] = 'Ad-hoc Datenbankabfragen';
$string['privacy:metadata'] = 'Das Plugin Ad-hoc Datenbankabfragen speichert keine personenbezogenen Daten.';
$string['query_deleted'] = 'Abfrage gelöscht';
$string['query_edited'] = 'Abfrage bearbeitet';
$string['query_viewed'] = 'Abfrage angesehen.';
$string['queryfailed'] = 'Fehler beim Ausführen der Abfrage: {$a}';
$string['querylimit'] = 'Obergrenze ausgegebener Zeilen';
$string['querylimitdefault'] = 'Standardgrenze wie viele Zeilen ausgegeben werden';
$string['querylimitdefault_desc'] = 'Um Zwischenfälle zu vermeiden, in der eine Abfrage eine große Anzahl an Zeilen zurückgibt und damit den Server überlasten könnte, gibt es für jede Abfrage eine Obergrenze an Zeilen, die sie zurückgeben kann. Dies ist der Standardwert für dieses Limit für neue Abfragen.';
$string['querylimitmaximum'] = 'Maximal erlaubte Zeilen, die zurückgegeben werden';
$string['querylimitmaximum_desc'] = 'Dies ist das absolute Maximum an zurückgegebenen Zeilen, die der Autor einer Abfrage setzen darf.';
$string['querylimitrange'] = 'Zahl muss zwischen 1 und {$a} sein';
$string['querynote'] = '<ul>
<li>Das Token <code>%%WWWROOT%%</code> in den Ergebnissen wird durch <code>{$ a}</code></li> ersetzt.
<li>Jeder Wert in der Ausgabe, der wie eine URL aussieht, wird automatisch zu einem Link gemacht.</li>
<li>Wenn Ihre Ergebnisse einer Abfrage zwei Spalten <code><i>spalten_name</i></li></code> und <code><i>spalten_name</i>_link_url</code> haben, dann wird der resultierende Bericht nur eine Spalte haben, die einen Link mit der ersten Spalte als Link Text und der zweiten als URL beinhaltet.</li>
<li>Wenn ein Spaltenname in den Ergebnissen mit den Zeichen <code>date</code> endet und die Spalte Ganzzahlen beinhaltet, dann werden diese als Unix Zeitstempel behandelt und automatisch in menschenlesbare Daten umgewandelt.</li>
<li>Das Token <code>%%USERID%%</code> in der Abfrage wird durch die Benutzer-ID des Benutzers ersetzt, der den Bericht anzeigt, bevor der Bericht ausgeführt wird.</li>
<li>Bei geplanten Reports werden die Token <code>%%STARTTIME%%</code> und <code>%%ENDTIME%%</code> in der Abfrage durch den Unix-Timestamp zu Anfang und Ende der/s Berichtswoche/-monats ersetzt, bevor der Bericht ausgeführt wird. </li>
<li>Sie können Parameter mithilfe von benannten Platzhaltern in SQL einfügen, z.B. <code>:parameter_name</code>. Wenn der Bericht ausgeführt wird, kann der Benutzer dann Werte für die Parameter eingeben, die beim Ausführen der Abfrage verwendet werden sollen.</li>
<li>Wenn <code>:parameter_name</code> mit den Zeichen <code>date</code> beginnt oder endet, wird ein Datum-Zeit-Selektor verwendet, um diesen Wert einzugeben, andernfalls wird eine einfache Textbox verwendet verwendet.</li>
<li>Sie können die Zeichen <code>:</code>, <code>;</code> oder <code>?</code> in Strings in Ihrer Abfrage nicht verwenden. <ul>
<li>Wenn Sie diese in Ihren Ausgabedaten benötigen (wenn Sie zum Beispiel URLs ausgeben), dann können Sie die Token <code>%%C%%</code>, <code>%%S%%</code> und <code>%%Q%%</code> verwenden.</li>
<li>Wenn Sie sie in Eingabedaten benötigen (z.B. in einem regulären Ausdruck oder bei der Abfrage von Zeichen), müssen Sie eine Datenbankfunktion verwenden, um die Zeichen abzurufen und selbst zu verketten. In Postgres sind dies CHR(58), CHR(59) und CHR(63); in MySQL CHAR(58), CHAR(59) und CHAR(63).</li>
</ul></li>
</ul>';
$string['queryparameters'] = 'Abfrageparameter';
$string['queryparams'] = 'Geben Sie die Standardwerte für die Abfrageparameter ein.';
$string['queryparamschanged'] = 'Die Platzhalter in der Abfrage haben sich geändert';
$string['queryrundate'] = 'Abfrage Ausführdatum';
$string['querysql'] = 'Abfrage-SQL';
$string['querysqlrequried'] = 'Sie müssen etwas SQL eingeben';
$string['recordcount'] = 'Dieser Bericht beinhaltet {$a} Zeilen.';
$string['recordlimitreached'] = 'Diese Abfrage erreichte die Grenze von {$a} Zeilen. Einige Zeilen können am Ende weggelassen worden sein.';
$string['reportfor'] = 'Abfrage am {$a} ausgeführt';
$string['requireint'] = 'Integer erforderlich';
$string['runable'] = 'Ausführen';
$string['runablex'] = 'Ausführen: {$a}';
$string['runquery'] = 'Abfrage ausführen';
$string['schedulednote'] = 'Diese Abfragen werden automatisch am ersten Tag jeder Woche oder jedes Monats ausgeführt, um über die vorherige Woche oder den vorherigen Monat zu berichten. Mit diesen Links können Sie die bereits gesammelten Ergebnisse anzeigen.';
$string['scheduledqueries'] = 'Anstehende Abfragen';
$string['startofweek'] = 'Tag, an dem die wöchentlichen Berichte ausgeführt werden';
$string['startofweek_default'] = 'Wochenstart {{$a}} im Kalender der Website verwenden';
$string['startofweek_desc'] = 'Dies ist der Tag, der als erster Tag der Woche angesehen werden soll (für wöchentlich geplante Berichte).';
$string['typeofresult'] = 'Art des Resultats';
$string['unknowndownloadfile'] = 'Unbekannte Download-Datei.';
$string['userhasnothiscapability'] = 'Nutzer/in \'{$a->name}\'  ({$a->userid}) hat kein \'{$a->capability}\' Recht. Löschen Sie diese Person aus der Liste oder ändern Sie die Auswahl in \'{$a->whocanaccess}\'.';
$string['userinvalidinput'] = 'Ungültige Eingabe, eine kommagetrennte Liste von Anmeldenamen ist erforderlich';
$string['usernotfound'] = 'Es existiert keine Person mit der ID \'{$a}\'.';
$string['userswhocanconfig'] = 'Nur Administratoren (moodle/site:config)';
$string['userswhocanviewsitereports'] = 'Nutzer/innen, die systemweite Berichte sehen dürfen (moodle/site:viewreports)';
$string['verifyqueryandupdate'] = 'Überprüfen Sie die SQL-Anfrage und aktualisieren Sie das Formular';
$string['weeklyheader'] = 'Wöchentlich';
$string['weeklyheader_help'] = 'Diese Abfragen werden automatisch am ersten Tag jeder Woche ausgeführt, um über die vorherige Woche zu berichten. Mit diesen Links können Sie die bereits gesammelten Ergebnisse anzeigen.';
$string['whocanaccess'] = 'Wer auf diese Abfrage zugreifen darf';
