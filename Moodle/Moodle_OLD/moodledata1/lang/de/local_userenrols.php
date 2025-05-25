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
 * Strings for component 'local_userenrols', language 'de', version '3.10'.
 *
 * @package     local_userenrols
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ERR_CREATE_GROUP'] = 'Zeile %u: Gruppe \'%s\' kann nicht erstellt werden\\n';
$string['ERR_ENROLL_FAILED'] = 'Zeile %u: Rollenzuweisung für Nutzerkennung \'%s\' kann nicht erstellt werden\\n';
$string['ERR_ENROLL_META'] = 'Zeile %u: Keine vorhandene Einschreibung im Metakurs für Nutzerkennung \'%s\'\\n';
$string['ERR_GROUP_MEMBER'] = 'Zeile %u: Nutzerkennung \'%s\' kann nicht zur Gruppe \'%s\' hinzugefügt werden\\n';
$string['ERR_INVALID_GROUP_ID'] = 'Die Gruppen-ID %u ist für diesen Kurs ungültig.\\n';
$string['ERR_NO_MANUAL_ENROL'] = 'Für den Kurs muss das Plugin "Manuelle Anmeldung" aktiviert sein.';
$string['ERR_NO_META_ENROL'] = 'Für den Kurs muss das Einschreibeplugin "Kurs-Meta-Link" aktiviert sein.';
$string['ERR_PATTERN_MATCH'] = 'Zeile %u: Der Inhalt der Zeile kann nicht analysiert werden \'%s\'\\n';
$string['ERR_USERID_INVALID'] = 'Zeile %u: Ungültige Nutzerkennung \'%s\'\\n';
$string['ERR_USER_MULTIPLE_RECS'] = 'Zeile %u: Nutzerkennung \'%s\' nicht eindeutig. Mehrere Datensätze gefunden\\n';
$string['HELP_PAGE_IMPORT'] = 'Einschreibungen und Gruppenzuweisungen importieren';
$string['HELP_PAGE_IMPORT_help'] = '<p>
Verwenden Sie dieses Kursimportplugin, um Nutzereinschreibungen aus einer Textdatei mit Trennzeichen in den Kurs zu importieren.
Es werden keine neuen Nutzerkonten erstellt, d.h. jeder der in der Eingabedatei aufgeführten Nutzer/innen muss bereits ein Konto für die Website haben.<br />
<br />
Wenn ein Gruppenname in einem Nutzerdatensatz (Zeile) enthalten ist, wird diese Person zu dieser Gruppe hinzugefügt, falls sie existiert. Optional können Sie bei Bedarf neue Gruppen erstellen.
</p>

<ul>
  <li>Jede Zeile der Importdatei stellt einen Datensatz dar.</li>
  <li>Jeder Datensatz sollte mindestens ein Feld mit einem Wert zur Benutzeridentifikation enthalten, sei es ein Nutzername, eine
  E-Mail-Adresse oder eine interne ID-Nummer.</li>
  <li>Jeder Datensatz kann ein zusätzliches Feld für den Gruppennamen enthalten, das durch ein Komma, ein Semikolon oder ein
  Tabulatorzeichen getrennt ist.</li>
  <li>Die Rolle, die diesen Nutzer/innen zugewiesen wird, kann ausgewählt werden, sollte aber standardmäßig die Standardrolle des Kurses sein.</li>
  <li>Jedes oder keines der Felder kann in Anführungszeichen gesetzt werden. Das Feld für den Gruppennamen muss in Anführungszeichen gesetzt werden, wenn es ein Semikolon oder ein Komma enthält.</li>
  <li>Leere Zeilen in der Importdatei werden übersprungen.</li>
  <li>Hinweis: Wenn eine Person bereits für den Kurs eingeschrieben ist, werden keine Änderungen an der Einschreibung dieser Person vorgenommen (d.h. keine Rollenänderung).</li>
</ul>

<p>
Hinweis zu Metakursen: Dieses Plugin importiert keine Nutzereinschreibungen in einen Metakurs, da die Einschreibung in einem der untergeordneten Kurse erfolgen sollte. Es wird jedoch Gruppenzuweisungen vornehmen und bei Bedarf Gruppen erstellen, wenn die Nutzer-ID bereits mit dem Metakurs über einen untergeordneten Kurs eingeschrieben ist.
</p>

<h3>Beispiele</h3>

Interne ID-Nummer und Gruppe
<pre>
2144323548;Dienstag Labor
2144323623
2144323647;Mittwoch Labor
2144323638;Mittwoch Labor
</pre>

E-Mail Adresse
<pre>
smith-john@university.edu
janedoe@university.edu, "Honors"
alan.jones@university.edu, "HonorsPlus"
</pre>

Nutzernamen (vom Gruppenfeld mit einem Tabulatorzeichen getrennt)
<pre>
johnsonf    "Präsentation, Gruppe Eins"
samsel      Zehn Uhr Test
</pre>';
$string['IMPORT_MENU_LONG'] = 'Einschreibungen und Gruppenzuweisungen importieren';
$string['IMPORT_MENU_SHORT'] = 'Einschreibung per CSV-Datei';
$string['INF_IMPORT_SUCCESS'] = 'Import der Nutzereinschreibung erfolgreich';
$string['INF_METACOURSE_WARN'] = '<b>WARNUNG</b>: Sie können Einschreibungen nicht direkt in einen Metakurs importieren.
Nehmen Sie stattdessen Einschreibungen in einem der untergeordneten Kurse vor.<br /><br />';
$string['LBL_ENROLL_OPTIONS'] = 'Einschreibeoptionen';
$string['LBL_FILE_OPTIONS'] = 'Importdatei';
$string['LBL_FILE_OPTIONS_help'] = 'Laden Sie eine Textdatei mit Trennzeichen mit Nutzer- und optional Gruppeninformationen hoch. Die Datei sollte entweder die Erweiterung .txt oder .csv haben.';
$string['LBL_GROUP'] = 'In Gruppen einschreiben:';
$string['LBL_GROUP_CREATE'] = 'Gruppen erstellen:';
$string['LBL_GROUP_CREATE_help'] = 'Wenn die Gruppen in der Importdatei nicht existieren, werden diese angelegt. Andernfalls werden Nutzer/innen nur dann Gruppen zugewiesen, wenn der angegebene Gruppenname bereits existiert.';
$string['LBL_GROUP_ID'] = 'Gruppen wählen:';
$string['LBL_GROUP_ID_help'] = 'Wählen Sie, ob Sie den Gruppennamen aus der Datei verwenden wollen, falls vorhanden, oder ob Sie eine vorhandene Gruppe auswählen und die Daten aus der Datei ignorieren wollen.';
$string['LBL_GROUP_OPTIONS'] = 'Gruppenoptionen';
$string['LBL_GROUP_help'] = 'Nehmen Sie Gruppenzuweisungen vor, entweder auf der Grundlage der Daten aus der Datei oder einer ausgewählten Gruppe.';
$string['LBL_IDENTITY_OPTIONS'] = 'Nutzerzuordnung';
$string['LBL_IMPORT'] = 'Import';
$string['LBL_IMPORT_TITLE'] = 'Import CSV Datei für Einschreibung und Gruppenzuweisungen';
$string['LBL_NO_GROUP_ID'] = 'Daten aus der Datei verwenden';
$string['LBL_NO_ROLE_ID'] = 'Keine Einschreibung';
$string['LBL_ROLE_ID'] = 'Rolle:';
$string['LBL_ROLE_ID_help'] = 'Welche Rolle sollen die importierten Nutzer/innen im Kurs haben? Wenn \'Keine Einschreibung\' gewählt ist, werden nur Gruppenzuweisungen vorgenommen.';
$string['LBL_USER_ID_FIELD'] = 'Feld für die Nutzerzuordnung:';
$string['LBL_USER_ID_FIELD_help'] = 'Geben Sie an, welches Feld im Nutzerdatensatz in der ersten Spalte der Importdatei dargestellt wird.';
$string['VAL_INVALID_FORM_DATA'] = 'Ungültige Formulardaten.';
$string['VAL_INVALID_SELECTION'] = 'Ungültige Auswahl';
$string['VAL_NO_FILES'] = 'Es wurde keine Datei für den Import ausgewählt';
$string['pluginname'] = 'Einschreibungen und Gruppenzuweisungen importieren';
$string['privacy:no_data_reason'] = 'Das Plugin \'Einschreibungen und Gruppenzuweisungen importieren\' speichert keine personenbezogenen Daten.';
