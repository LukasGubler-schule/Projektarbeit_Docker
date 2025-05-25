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
 * Strings for component 'qtype_combined', language 'de', version '4.5'.
 *
 * @package     qtype_combined
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['controlnamegapselect'] = 'Auswahlliste';
$string['controlnamegapselectplural'] = 'Auswahllisten';
$string['controlnamemultichoice'] = 'Radiobuttons';
$string['controlnameshowworking'] = 'Texteingabe';
$string['correct_choice_embed_code'] = '[[{$a->qid}:{$a->qtype}:{korrekte Antwortmöglichkeit}]]';
$string['embeddedquestionremovedfromform'] = 'Eine oder mehrere eingebettete Fragen wurden aus dem Fragentext entfernt. Die Fragedaten für diese Fragen werden weiterhin unten angezeigt. Sie werden dauerhaft entfernt, wenn Sie entweder auf die Schaltfläche "Formular aktualisieren" oder "Änderungen speichern" klicken, es sei denn, Sie fügen die eingebetteten Codes wieder in den Fragentext ein.';
$string['err_accepts_vertical_or_horizontal_layout_param'] = '<p>Mit dem Fragetyp \'{$a}\' können Sie das Layout Ihres Fragetyps wie folgt festlegen:<ul>
<li>[[{question identifier}:{$a}:v]] vertikal ODER</li>
<li>[[{question identifier}:{$a}:h]] horizontal.</li></ul>
<p>Nach dem zweiten Doppelpunkt sollten Sie nichts anderes mehr eingeben.</p>';
$string['err_duplicateids'] = 'Jede eingebettete Frage sollte einen anderen Bezeichner haben. Sie haben den/die folgenden Bezeichner für mehr als eine Frage "{$a}" verwendet.';
$string['err_fillinthedetailsforsubq'] = 'Sie müssen die Details ausfüllen, um die Unterfrage "{$a}" zu beschreiben.';
$string['err_fillinthedetailshere'] = 'Sie müssen die Details für diese Unterfrage ausfüllen.';
$string['err_insufficientnoofcodeparts'] = 'Fehler: Ihr Code zum Einbetten einer Fragekontrolle \'{$a->fullcode}\' hat zu wenige durch Doppelpunkte getrennte Teile. Sie sollten mindestens eine Identifikationsnummer für die Frage haben, gefolgt von einer Identifikationsnummer für den Fragetyp.';
$string['err_invalid_number'] = 'Der Fragetyp \'{$a}\' erwartet eine Zahl nach der Kennung des Fragetyps, Ihr Einbettungscode sollte [[{ID der Frage}:{$a}:{eine Zahl hier}]] sein.';
$string['err_invalid_width_specifier_postfix'] = '<p>Mit dem Fragetyp \'{$a}\' können Sie die Breite Ihres Fragetyps wie folgt festlegen:<ul>
<li>[[{question identifier}:{$a}:____]] wobei die Breite des Eingabefeldes von der Anzahl der Unterstriche oder</li>
<li>[[{question identifier}:{$a}:__10__]] wobei die Breite des Eingabefeldes von der Zahl abhängt.</li></ul>
<p>Nach dem zweiten Doppelpunkt sollten Sie nichts anderes mehr eingeben.</p>';
$string['err_invalid_width_specifier_postfix_showworking'] = '<p>Mit dem Fragetyp \'{$a}\' können Sie die Breite Ihres Fragetyps wie folgt festlegen:<ul>
<li>[[{question identifier}:{$a}:____]] wobei die Breite des Eingabefeldes von der Anzahl der Unterstriche oder</li>
<li>[[{question identifier}:{$a}:__10__]] wobei die Breite des Eingabefeldes von der Zahl abhängt.</li>  <li>[[{question identifier}:{$a}:__80x5__]]  wobei die Breite und Höhe des Eingabefeldes von der
  der Zahl abhängen.</li>
</ul>
<p>Nach dem zweiten Doppelpunkt sollten Sie nichts anderes mehr eingeben.</p>';
$string['err_invalidquestionidentifier'] = 'Der Bezeichner Ihrer Frage besteht aus einem oder mehreren alphanumerischen Zeichen.';
$string['err_questionidentifiertoolong'] = 'Der Name der Unterfrage \'{$a}\' ist zu lang. Sie können bis zu 10 alphanumerische Zeichen verwenden.';
$string['err_subq_not_included_in_question_text'] = 'Es scheint, dass Sie diese Frage aus dem Fragentext entfernt haben. Fügen Sie diese Frage mit dem Code {$a} in das Formular ein, oder sie wird entfernt, wenn Sie das Formular erneut übermitteln.';
$string['err_thisqtypecannothavemorethanonecontrol'] = 'Sie haben versucht, mehr als ein Steuerelement für den Fragetyp \'{$a->qtype}\' mit dem Namen der Frageninstanz \'{$a->qid}\' einzubetten. Bei diesem Fragetyp können Sie nur ein Steuerelement pro Frageninstanz einbetten.';
$string['err_thisqtypedoesnotacceptextrainfo'] = 'Dieser Fragetyp ist mit dem Code [[{your question id}:{$a}]] eingebettet. Nach dem Fragetyp-Bezeichner sollten Sie nichts einfügen, auch keinen zweiten Doppelpunkt.';
$string['err_unrecognisedqtype'] = 'Die Kennung des Fragetyps \'{$a->qtype}\', die Sie im eingebetteten Code \'{$a->fullcode}\' eingegeben haben, ist nicht bekannt.';
$string['err_weightingsdonotaddup'] = 'Die Gewichtung der Teilfragen ergibt nicht die Summe 1.';
$string['err_you_must_provide_third_param'] = 'Sie müssen einen dritten Parameter für den Fragetyp {$a} angeben.';
$string['err_youneedmorechoices'] = 'Sie müssen zwei oder mehr Auswahlmöglichkeiten angeben.';
$string['incorrectfeedback'] = 'Feedback für falsche Antwort';
$string['multiresponse'] = 'Standardoptionen für Unterfragen mit Mehrfachantworten';
$string['noembeddedquestions'] = 'Es muss mindestens eine eingebettete Unterfrage vorhanden sein.';
$string['nosubquestiontypesinstalled'] = 'Dieser Fragetyp ermöglicht die Kombination der Funktionalitäten anderer Fragetypen. Sie müssen mindestens einen dieser anderen Fragetypen installieren, damit diese als Unterfragen verwendet werden können.

Weitere Einzelheiten und eine Liste der Fragetypen, die als Unterfragen verwendet werden können, finden Sie im <a href="https://moodle.org/plugins/view.php?plugin=qtype_combined">Eintrag in der Plug-in-Datenbank</a>.';
$string['pluginname'] = 'Kombiniert';
$string['pluginname_help'] = 'Erstellen Sie eine Frage mit eingebetteten Antwortfeldern in Ihrem Fragentext.

Je nach den installierten Unterfragetypen können Sie die Teilnehmenden auffordern, einen numerischen oder einen Textwert einzugeben oder einen Wert aus einer Reihe von Optionen auszuwählen. Eingebettete Codes im Fragentext werden entweder durch Kontrollkästchen, Auswahlfelder oder ein Texteingabefeld ersetzt, in die die Studierenden ihre Antwort eingeben können.

Wenn Sie eine neue Frage erstellen, werden alle Codes zur Einbettung der verfügbaren Unterfragetypen automatisch als frei verwendbare Beispiel-Codes zum Fragentext hinzugefügt. Gleichzeitig werden die entsprechenden Formularfragmente zur Angabe der Optionen für jede Frage unterhalb des Fragetext-Eingabefelds angezeigt.  Bearbeiten Sie den Fragentext und ändern Sie die Codes im Fragentext, um festzulegen, welche Arten von Unterfragen in den Fragentext aufgenommen werden sollen. Klicken Sie dann auf die Schaltfläche "Formular aktualisieren", damit die richtigen Teile des Formulars angezeigt werden, und die Einstellungen für die Unterfragen korrekt dargestellt werden.';
$string['pluginname_link'] = 'question/type/combined';
$string['pluginnameadding'] = 'Kombinierte Frage hinzufügen';
$string['pluginnameediting'] = 'Kombinierte Frage bearbeiten';
$string['pluginnamesummary'] = 'Ein kombinierter Fragetyp, der die Einbettung der Antwortfelder für verschiedene verfügbare Unterfragen in den Fragentext einbettet.

Je nachdem, welche Fragetypen installiert sind, können Teilnehmende eine numerische oder eine Kurztextantwort eingeben oder eine oder mehrere Antworten über ein Auswahlfeld oder Kontrollkästchen auswählen.';
$string['privacy:metadata'] = 'Das Plugin "Kombiniert" (Combined) speichert keine personenbezogenen Daten.';
$string['regradeissuenumsubquestionschanged'] = 'Die Anzahl der eingebetteten Unterfragen in der Frage hat sich geändert.';
$string['shuffle'] = 'Mischen';
$string['singlechoice'] = 'Standardoptionen für Single-Choice-Teilfragen';
$string['subqheader'] = '\'{$a->qtype}\' Eingabe \'{$a->qid}\'';
$string['subqheader_not_in_question_text'] = '\'{$a->qtype}\' input \'{$a->qid}\' (nicht in den Fragetext eingebettet).';
$string['subquestiontypenotinstalled'] = 'Sie versuchen, eine kombinierte Frage mit einem Unterfragetyp \'{$a}\' zu verwenden, der nicht installiert ist.';
$string['subquestiontypes'] = 'Platzhalter für Unterfragen';
$string['updateform'] = 'Überprüfen Sie den Fragetext und aktualisieren Sie das Formular';
$string['validationerror'] = 'Überprüfen Sie noch einmal die folgenden Punkte: {$a}';
$string['validationerror_part'] = 'Teil {$a->identifier} - {$a->error}';
$string['validationerrors'] = 'Überprüfen Sie noch einmal die folgenden Punkte: {$a}';
$string['vertical_or_horizontal_embed_code'] = '[[{$a->qid}:{$a->qtype}:v]] oder [[{$a->qid}:{$a->qtype}:h]] abhängig davon, ob Sie die Optionen vertikal oder horizontal anordnen möchten.';
$string['weighting'] = 'Gewichtung';
$string['widthspecifier_embed_code'] = '[[{$a->qid}:{$a->qtype}:{width specifier}]] oder einfach [[{$a->qid}:{$a->qtype}]]';
$string['yougot1right'] = 'Eine Ihrer Antworten ist richtig.';
$string['yougotnright'] = '{$a->num} Antworten sind richtig.';
