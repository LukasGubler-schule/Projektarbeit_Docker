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
 * Strings for component 'customfield_number', language 'de', version '4.5'.
 *
 * @package     customfield_number
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitytypes'] = 'Aktivitätstypen';
$string['automaticallypopulated'] = 'Automatisch ausgefüllt';
$string['crontaskname'] = 'Automatisch ausgefüllte Zahlenfelder';
$string['decimalplaces'] = 'Dezimalstellen';
$string['defaultvalueconfigerror'] = 'Der Standardwert muss zwischen dem kleinsten und dem größten Wert liegen.';
$string['display'] = 'Anzeigevorlage';
$string['display_help'] = 'Um den Wert des Feldes anzuzeigen, verwenden Sie die folgenden Platzhalter:

* **{value}** – Wert in einem allgemeinen Format anzeigen (Dezimalstellen im Feld konfigurieren)
* **{value} Euro** – Preis in Euro
* **{value} h** – Dauer in Stunden';
$string['displayvalueconfigerror'] = 'Ungültiger Platzhalter';
$string['displaywhenzero'] = 'Anzeigen, wenn Null';
$string['displaywhenzero_help'] = 'So zeigen Sie den Feldwert an, wenn der Wert „0“ ist. Bei einem Preis können Sie beispielsweise das Wort "kostenlos" anzeigen. Bei einer Zeitdauer möchten Sie das Feld möglicherweise leer lassen, wenn z.B. die Dauer nicht geschätzt wurde.

Lassen Sie das Feld leer, wenn Sie bei einem Wert von "0" nichts anzeigen möchten.';
$string['fieldtype'] = 'Feldtyp';
$string['fieldtype_help'] = 'Wählen Sie den Feldtyp des numerischen Feldes aus. Einige Optionen erfordern eine manuelle Eingabe auf der Seite der Kurseinstellungen, während andere die Werte automatisch füllen, z.B. mit der Anzahl der angegebenen Aktivitäten in einem Kurs.';
$string['genericfield'] = 'Feld für alle numerischen Daten';
$string['headerdisplaysettings'] = 'Anzeigeformat';
$string['invalidprovider'] = 'Falscher Anbieter';
$string['manualinput'] = 'Manuelle Eingabe';
$string['maximumvalue'] = 'Größter Wert';
$string['maximumvalueerror'] = 'Der Wert muss kleiner oder gleich {$a} sein.';
$string['minimumvalue'] = 'Kleinster Wert';
$string['minimumvalueconfigerror'] = 'Der kleinste Wert muss kleiner als der größte Wert sein.';
$string['minimumvalueerror'] = 'Der Wert muss größer oder gleich {$a} sein.';
$string['missingrequired'] = 'Fehlende Instanz-ID oder Feld-ID';
$string['nofactivities'] = 'Anzahl der Aktivitäten im Kurs';
$string['pluginname'] = 'Zahl';
$string['privacy:metadata'] = 'Das Plugin "Zahlenfeld" speichert keine personenbezogenen Daten.';
$string['specificsettings'] = 'Einstellungen für Zahlenfeld';
