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
 * Strings for component 'qtype_coderunner', language 'de_ch', version '3.10'.
 *
 * @package     qtype_coderunner
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['badcputime'] = 'Die CPU-Zeitbegrenzung muss leer bleiben oder eine ganze Zahl grösser als Null sein.';
$string['badmemlimit'] = 'Die Speicherbegrenzung muss leer bleiben oder eine ganze Zahl grösser als Null sein.';
$string['brokencombinator'] = 'Erwartete {$a->namtests} -Testergebnisse, erhielt {$a->numresults}. Vielleicht zu grosse Ausgabe oder Fehler in der Frage?';
$string['datafiles_help'] = 'Alle hier hochgeladenen Dateien werden dem Arbeitsverzeichnis hinzugefügt, wenn das erweiterte Vorlagenprogramm ausgeführt wird. Dadurch können grosse Daten- oder Supportdateien bequem hinzugefügt werden.';
$string['default_penalty_regime'] = 'Standardmässiges Abzugssystem';
$string['default_penalty_regime_desc'] = 'Das standardmässige Abzugssystem für neue Fragen, bestehend aus einer kommagetrennten Liste von Prozentabzügen, die optional in ", ..." endet, um eine fortlaufende arithmetische Progression zu kennzeichnen.';
$string['languages_help'] = 'Die Sandbox-Sprache ist die verwendete Computersprache, um die Einreichung auszuführen.
Es muss der gewählten Sandbox bekannt sein (sofern eine bestimmte Sandbox gewählt wurde) oder zumindestens einer der aktivierten Sandboxen (ansonsten).
Dies sollte normalerweise keine Änderung von dem Wert in Elternvorlage erfordern; Modifikation auf eigene Gefahr.

Ace-Sprache ist die Sprache, die der Ace-Code-Editor (falls aktiviert) für die Antwort des Studierenden verwendet.
Standardmässig entspricht dies der Sandbox-Sprache; geben Sie hier nur einen anderen Wert ein, wenn die Vorlagensprache von der Sprache abweicht in der man erwartet, dass der Studierende schreibt (z. B. wenn es sich um einen Python-Präprozessor handelt, der verwendet wird, um das C-Programm eines Studierenden zu validieren, bevor es ausgeführt wird).

Mehrsprachige Fragen sind Fragen, auf die die Studierenden in mehr als einer Sprache antworten können, sie werden aktiviert, indem die Ace-Sprache auf eine Komma-getrennte Liste der Sprachen gesetzt wird. Den Studierenden wird dann ein Dropdown-Menü zur Auswahl angeboten, um die Sprache, in der ihre Antwort geschrieben werden soll, auzuwählen. Wenn genau eine der Sprachen ein Sternchen (\'*\') vorangestellt hat, wird diese Sprache wird als Standardsprache gewählt, die die Ausgangseinstellung des Dropdown-Menüs ist. Ein Ace-Sprachwert von beispielsweise "C,C++,Java*,Python3" würde dem Studierenden erlauben, eine Antwort in C, C++, Java oder Python3 einzureichen, aber das Dropdown-Menü würde anfänglich Java als Standard zeigen. Wenn kein Standardwert angegeben ist, ist der Anfangszustand des Dropdown-Menüs leer und der Studierende muss eine Sprache auswählen.
Mehrsprachige Fragen erfordern eine spezielle Vorlage, die {{LANGUAGE}} verwendet, um die Vorlagenvariablen zu steuern, wie der Studierendencode ausgeführt wird, siehe das eingebaute Beispiel für den mehrsprachigen Fragentyp. Die Variable {{LANGUAGE}} ist <i>nur</ i> für mehrsprachige Fragen definiert.

Wenn der Autor eine Beispielantwort zu einer mehrsprachigen Frage liefern möchte, muss er es entweder in der Standardsprache schreiben, falls angegeben, oder ansonsten in der ersten der erlaubten Sprachen.';
$string['negativeorzeromark'] = 'Punkte müssen grösser als Null sein';
$string['prototypecontrols_help'] = 'Wenn "Ist Prototyp" gewählt ist, wird diese Frage zum Prototyp für andere Fragen. Nach dem Speichern wird der angegebene Name des Fragetyps in der Dropdown-Liste der Fragetypen angezeigt. Neue Fragen basierend auf diesem Typ übernehmen dann standardmässig alle Anpassungsattribute, die für diese Frage angegeben wurden. Nachfolgende Änderungen an dieser Frage wirken sich dann auf alle abgeleiteten Fragen aus, sofern sie nicht selbst angepasst werden, wodurch die Verbindung unterbrochen wird.

Die prototypische Vererbung ist nur einstufig. Wenn diese Frage als Prototyp gespeichert wird, verliert sie ihre Verbindung zum ursprünglichen Basistyp und wird zu einem neuen Basistyp. Seien Sie darauf hingewiesen, dass sie, wenn Sie abgeleitete Fragen exportieren,  sicherstellen müssen, dass diese Frage auch im Export enthalten ist, ansonsten wird die abgeleitete Frage verwaist, wenn sie in ein anderes System importiert wird. Sie sind auch dafür verantwortlich zu verfolgen, welche Fragen Sie als Prototypen verwenden. Es wird dringend empfohlen, die Frage in "PROTOTYPE_for_my_new_question_type" umzubenennen, um die spätere Wartung zu vereinfachen.';
$string['qWrongBehaviour'] = 'Verwenden Sie das adaptive Verhalten für alle CodeRunner-Fragen, oder es können massive Leistungseinbussen auftreten. Beispielsweise müssen alle Fragen auf einer Seite neu bewertet werden, wenn die Seite erneut angezeigt wird.';
$string['resultstring-outputlimit'] = 'Zu grosse Ausgabe';
$string['templateparams_help'] = 'Im Vorlageparameter-Feld können Sie String-Parameter an die Vorlage einer Frage übergeben. Wenn es nicht leer ist, muss dies ein Datensatz im JSON-Format sein. Die Felder des Datensatzs können dann in der Vorlage verwendet werden, in der sie als QUESTION.parameters.<<param>> angezeigt werden. Zum Beispiel, wenn Vorlageparameter

        {"age": 23}

ist, würde der Wert 23 in die Vorlage eingefügt anstelle der Vorlagenvariable `{{QUESTION.parameters.age}}`.

Die Menge der Vorlagenparameter, die an die Vorlage übergeben werden, besteht aus beliebigen Vorlageparameter, die mit den Parametern, die in der Fragevorlage im Prototyp definiert sind, fusioniert werden. Frageparameter können somit Prototypparameter ausser Kraft setzen, sie aber nicht löschen.';
