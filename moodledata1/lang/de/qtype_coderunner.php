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
 * Strings for component 'qtype_coderunner', language 'de', version '3.10'.
 *
 * @package     qtype_coderunner
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['HIDE'] = 'Verstecken';
$string['HIDE_IF_FAIL'] = 'Verstecken falls fehlgeschlagen';
$string['HIDE_IF_SUCCEED'] = 'Verstecken falls bestanden';
$string['SHOW'] = 'Anzeigen';
$string['aborted'] = 'Der Test wurde aufgrund von Fehlern abgebrochen.';
$string['ace-language'] = 'Ace-Sprache';
$string['ace_ui_notready'] = 'Ace-Editor nicht bereit. Vielleicht Seite neu laden?';
$string['addingcoderunner'] = 'Eine CodeRunner-Frage hinzufügen';
$string['advanced_customisation'] = 'Weitergehende Anpassung';
$string['ajax_error'] = '*** AJAX ERROR. DIES NICHT SPEICHERN! ***';
$string['allok'] = 'Alle Tests bestanden!';
$string['allornone'] = 'Testcode muss entweder für alle Testfälle oder für keinen bereitgestellt werden.';
$string['allornothing'] = 'Alles-oder-nichts-Bewertung';
$string['allornothing_help'] = 'Wenn die "Alles oder nichts-Bewertung" aktiviert ist, müssen alle Testfälle
für die Einreichung bestanden sein, um irgendeine Bewertung zu erreichen. Andernfalls wird die Bewertung durch Summieren der Bewertung für alle Testfälle, die bestehen, und dies als einen Bruchteil der maximal möglichen Punkte ausgedrückt.

Die pro-Testfall-Bewertung kann nur angegeben werden, wenn die Alles-oder-nichts-Bewertung-Checkbox deaktiviert ist.

Wenn Sie eine Bewerter-Vorlage verwenden, der Teilmarkierungen für Testfälle vergibt, sollte "Alles oder nichts-Bewertung" generell deaktiviert sein.';
$string['allowattachments'] = 'Anhänge erlauben';
$string['allowattachments_help'] = 'Ob und wie viele Anhänge Teilnehmer/innen ihren Einreichungen beifügen dürfen. Die Anhänge werden in das Runtime-Arbeitsverzeichnis kopiert und eine durch Kommata getrennte Liste der Namen der Anhänge wird der Vorlage in der Twig-Variablen {{ ATTACHMENTS }} zur Verfügung gestellt. Warnung: Das Zulassen von Anhängen könnte bei großen Klassen und/oder großen Anhängen Auswirkungen auf die Leistung oder den Plattenplatz der Moodle- und Jobe-Server haben. Der Moodle-Server und die Jobe-Server vor Februar 2019 speichern alle Anhänge auf unbestimmte Zeit.';
$string['allowedfilenames'] = 'Erlaubte Dateinamen';
$string['allowedfilenames_help'] = 'Alle hochgeladenen Dateinamen müssen dem angegebenen regulären PHP (Perl)-Ausdruck entsprechen, falls nicht leer. Verwenden Sie zum Beispiel \'.+\\\\.cpp\', um jede C++-Datei zuzulassen, oder \'(?!Prog)\\\\\\.java\', um jede Java-Datei außer \'Prog.java\' zuzulassen. Darüber hinaus dürfen Dateinamen nur alphanumerische Zeichen plus Unterstrich, Bindestrich und Punkt enthalten, nicht mit einem doppelten Unterstrich (\'\\_\\_\') beginnen und nicht in Konflikt mit den Namen der unterstützten Dateien geraten. Die Beschreibung ist eine Textnachricht, die dem/der Teilnehmenden angezeigt wird, um zu erklären, welche Datei(en) erwartet wird (werden). Lassen Sie sie leer, um den regulären Ausdruck selbst anzuzeigen. Lassen Sie beides leer, um die Prüfung des regulären Ausdrucks zu umgehen.';
$string['allowedfilenamesregex'] = 'Erlaubte Dateinamen (regulärer Ausdruck)';
$string['allowmultiplestdins'] = 'Mehrere stdins erlauben';
$string['answer'] = 'Antwort';
$string['answer_help'] = 'Eine Beispielantwort kann hier eingegeben und zur Überprüfung durch den Frageautor verwendet und optional den Studierenden während der Überprüfung gezeigt werden. Sie wird auch vom Bulk-Tester-Skript verwendet. Die Korrektheit einer nicht leeren Antwort wird beim Speichern überprüft, es sei denn, \'Beim Speichern prüfen\' ist deaktiviert.';
$string['answerbox_group'] = 'Antwortfeld';
$string['answerbox_group_help'] = 'Legen Sie die Anzahl der Zeilen für das Antwortfeld fest. Dies legt die Mindesthöhe des Nutzeroberflächenelements (z.B. Ace) fest, welches das Antwortfeld steuert. Die Breite wird dem Fenster angepasst. Wenn die Antwort das Feld vertikal oder horizontal überläuft, werden Bildlaufleisten angezeigt.';
$string['answerboxlines'] = 'Zeilen';
$string['answerpreload'] = 'Vorbelegung des Antwortfelds';
$string['answerpreload_help'] = 'Der hier eingegebene Text wird im Antwortfeld vorgeladen.';
$string['answerprompt'] = 'Antwort:';
$string['answerrequired'] = 'Bitte geben Sie eine nicht leere Antwort ein';
$string['answertooshort'] = 'Die Antwort ist zu kurz. Sie muss mindestens {$a} Zeichen enthalten.';
$string['asolutionis'] = 'Lösung des Frageautors:';
$string['atleastonetest'] = 'Sie müssen mindestens einen Testfall für diese Frage bereitstellen.';
$string['attachmentoptions'] = 'Optionen für Anhänge (experimentell)';
$string['attachmentsoptional'] = 'Anhänge sind optional';
$string['attachmentsrequired'] = 'Anhänge erforderlich';
$string['attachmentsrequired_help'] = 'Diese Option gibt die Mindestanzahl von Anhängen an, die für die Bewertung einer Antwort erforderlich sind.';
$string['autotagbycategoryindextitle'] = 'CodeRunner-Frage Autotagger';
$string['autotagbycategorytitle'] = 'CodeRunner Autotag nach Kategorie';
$string['bad_dotdotdot'] = 'Falsche Verwendung von "...". Muss sich am Ende befinden, nach zwei ansteigenden numerischen Abzügen';
$string['bad_empty_splitter'] = 'Der Test-Trenner kann nicht leer sein, wenn eine Kombinator-Vorlage verwendet wird.';
$string['bad_new_prototype_name'] = 'Ungültiger Name für neuen Prototyp: bereits in Verwendung';
$string['badacelangstring'] = 'Falsche Ace-Sprachzeichenfolge';
$string['badcputime'] = 'Die CPU-Zeitbegrenzung muss leer bleiben oder eine ganze Zahl größer als Null sein';
$string['bademptyprecheck'] = 'Die Vorabprüfung ist mit der folgenden unerwarteten Ausgabe fehlgeschlagen.';
$string['badfilenamesregex'] = 'Ungültiger regulärer Ausdruck';
$string['badfiles'] = 'Unzulässige(r) Dateiname(n): {$a}';
$string['badjson'] = 'Ungültiger JSON-Output der Kombinator-Bewerter-Ausgabe. Output war: {$a->output}';
$string['badjsonfunc'] = 'Unbekannte JSON embedded func ({$a->func})';
$string['badmemlimit'] = 'Die Speicherbegrenzung muss leer bleiben oder eine ganze Zahl größer als Null sein';
$string['badpenalties'] = 'Das Abzugssystem muss eine durch Komma getrennte Liste von Zahlen im Bereich [0, 100] sein';
$string['badquestion'] = 'Fehler in der Frage';
$string['badrandomintarg'] = 'Fehlerhaftes Argument für JSON @randomint-Funktion';
$string['badrandompickarg'] = 'Fehlerhaftes Argument für JSON @randompic-Funktion';
$string['badsandboxparams'] = 'Das Feld \'Andere\' (Sandbox-Parameter) muss entweder leer oder ein gültiger JSON-Datensatz sein';
$string['badtemplateparams'] = 'Vorlagenparameter müssen entweder leer oder ein gültiger JSON-Datensatz sein';
$string['brokencombinator'] = 'Erwartete {$a->numtests} Testergebnisse, erhielt {$a->numresults}. Vielleicht zu große Ausgabe oder Fehler in der Frage?';
$string['brokentemplategrader'] = 'Fehlerhafte Ausgabe des Bewerters: {$a->output}. Ihre Programmausführung wurde möglicherweise abgebrochen (z.B. wurde eine Zeitüberschreitung oder ein Speicherlimit überschritten).';
$string['bulkquestiontester'] = 'Das <a href="{$a->link}">Bulk-Tester-Skript</a> prüft, dass Beispielantworten für alle Fragen im aktuellen Kontext richtig bewertet werden. Erst sinnvoll, wenn einige Fragen mit Beispielantworten hinzugefügt wurden; die Erstinstallation hat keine.';
$string['bulktestallincontext'] = 'Alle ausführen';
$string['bulktestcontinuefromhere'] = 'Erneut ausführen, oder von hier an fortsetzen';
$string['bulktestindextitle'] = 'CodeRunner Bulk-Testing';
$string['bulktestrun'] = 'Alle Fragetests für alle Fragen im System ausführen (langsam, nur für Administratoren)';
$string['bulktesttitle'] = 'Alle Fragetests in {$a} ausführen';
$string['coderunner'] = 'Programmcode';
$string['coderunner_help'] = 'Als Antwort auf eine Frage, die eine Spezifikation für ein Programmfragment, eine Funktion oder ein ganzes Programm ist, geben die Studierenden Quellcode in einer bestimmten Computersprache ein, die die Spezifikation erfüllt.';
$string['coderunner_install_testsuite_failures'] = 'Fehlgeschlagene Tests';
$string['coderunner_install_testsuite_intro'] = 'Auf dieser Seite können Sie testen, ob die CodeRunner-Fragen mit Beispielantworten richtig funktionieren.';
$string['coderunner_install_testsuite_noanswer'] = 'Fragen ohne Beispielantworten';
$string['coderunner_install_testsuite_title'] = 'Eine Testsuite für CodeRunner-Beispielantworten';
$string['coderunner_install_testsuite_title_desc'] = 'Das <a href="{$a->link}">Beispiel-Antwort-Testskript</a> überprüft, ob die Fragen mit Beispielantworten korrekt ausgeführt werden.';
$string['coderunner_question_type'] = 'CodeRunner Fragetyp:';
$string['coderunnercategories'] = 'Kategorien mit CodeRunner-Fragen';
$string['coderunnercontexts'] = 'Kontexte mit CodeRunner-Fragen';
$string['coderunnersettings'] = 'CodeRunner Einstellungen';
$string['coderunnersummary'] = 'Antwort ist ein Programmcode, der im Kontext einer Anzahl Testfälle ausgeführt wird, um seine Korrektheit zu bestimmen.';
$string['coderunnertype'] = 'Fragetyp';
$string['coderunnertype_help'] = 'Wählen Sie die Programmiersprache und den Fragetyp. Nachdem ein Typ ausgewählt wurde, werden Details im Detailfenster "Fragetyp" unten angezeigt.';
$string['columncontrols'] = 'Resultatetabelle';
$string['columncontrols_help'] = 'Die Checkboxen markieren, welche Spalten der Ergebnistabelle den Studierenden nach der Einreichung angezeigt werden sollen';
$string['confirm_proceed'] = 'Wenn Sie diese Frage mit nicht gewähltem "Anpassen" speichern, gehen alle vorgenommenen Anpassungen verloren. Möchten Sie fortfahren?';
$string['confirmreset'] = 'Ihre gesamte Arbeit an dieser Frage verwerfen und das Antwortfeld auf den ursprünglichen vorinstallierten Wert zurücksetzen?';
$string['cputime'] = 'Zeitbegrenzung (s)';
$string['customisation'] = 'Anpassung';
$string['customisationcontrols'] = 'Anpassung';
$string['customise'] = 'Anpassen';
$string['datafiles'] = 'Laufzeit-Daten';
$string['datafiles_help'] = 'Alle hier hochgeladenen Dateien werden dem Arbeitsverzeichnis hinzugefügt, wenn das erweiterte Vorlagenprogramm ausgeführt wird. Dadurch können große Daten- oder Supportdateien bequem hinzugefügt werden.';
$string['default_penalty_regime'] = 'Standardmäßiges Abzugssystem';
$string['default_penalty_regime_desc'] = 'Das standardmäßige Abzugssystem für neue Fragen, bestehend aus einer kommagetrennten Liste von Prozentabzügen, die optional in ", ..." endet, um eine fortlaufende arithmetische Progression zu kennzeichnen.';
$string['display'] = 'Anzeige';
$string['downloadquizattempts'] = 'Testversuche herunterladen';
$string['downloadquizattemptshelp'] = 'Klicken Sie auf den entsprechenden Kurs und/oder Download-Button für den Kurs und den Test, den Sie herunterladen möchten. Zahlen in Klammern nach den Kursen sind die Anzahl der Tests im Kurs mit mindestens einet Einreichung. Die Zahlen in Klammern hinter dem Testnamen ist die Anzahl der Einreichungen.';
$string['editingcoderunner'] = 'Eine CodeRunner-Frage bearbeiten';
$string['empty_new_prototype_name'] = 'Der Name des neuen Fragetyps darf nicht leer sein';
$string['emptypenaltyregime'] = 'Abzugssystem muss definiert sein (seit Version 3.1)';
$string['enable'] = 'Aktivieren';
$string['enable_diff_check'] = 'Button "Unterschiede anzeigen" aktivieren';
$string['enable_diff_check_desc'] = 'Geben Sie Teilnehmer/innen eine Schaltfläche "Unterschiede anzeigen", wenn ihre Antwort falsch ist und ein Validierer für genaue Übereinstimmung verwendet wird (experimentell).';
$string['enable_sandbox_desc'] = 'Die Verwendung der angegebenen Sandbox für die Ausführung von Studierenden-Einreichungen erlauben';
$string['enablecombinator'] = 'Kombinator aktivieren';
$string['equalitygrader'] = 'Genaue Übereinstimmung';
$string['error_loading_prototype'] = 'Fehler beim Laden des Prototyps. Netzwerkprobleme oder Server down, vielleicht?';
$string['errorstring-accessdenied'] = 'Zugriff auf die Sandbox verweigert';
$string['errorstring-autherror'] = 'Nicht autorisiert, die Sandbox zu verwenden';
$string['errorstring-jobe400'] = 'Fehler vom Jobe Sandbox Server:';
$string['errorstring-ok'] = 'Ok';
$string['errorstring-overload'] = 'Job konnte wegen Serverüberlastung nicht ausgeführt werden. Vielleicht bald noch einmal versuchen?';
$string['errorstring-pastenotfound'] = 'Anforderung des Status eines nicht vorhandenen Jobs';
$string['errorstring-submissionfailed'] = 'Die Übermittlung an die Sandbox ist fehlgeschlagen';
$string['errorstring-submissionlimitexceeded'] = 'Begrenzung der Anzahl Sandbox-Einreichungen erreicht';
$string['errorstring-unknown'] = 'Unerwarteter Fehler beim Ausführen Ihres Codes. Der Sandbox-Server ist möglicherweise inaktiv oder überlastet. Vielleicht bald noch einmal versuchen?';
$string['errorstring-wronglangid'] = 'Nicht vorhandene Sprache angefordert';
$string['expand'] = 'Ausklappen';
$string['expandtitle'] = 'Fragekategorien anzeigen';
$string['expected'] = 'Erwartete Ausgabe';
$string['expected_help'] = 'Der erwartete Output des Tests. Von der Vorlage als {{TEST.expected}} erkannt.';
$string['expectedcolhdr'] = 'Erwartet';
$string['exportthisquestion'] = 'Dieser Frage exportieren';
$string['exportthisquestion_help'] = 'Dies wird eine Moodle-XML-Exportdatei erstellen, die nur diese eine Frage enthält. Dies ist zum Beispiel nützlich, wenn Sie glauben, dass diese Frage einen Fehler in CodeRunner vor Augen führt, den Sie den Entwicklern melden möchten.';
$string['extra'] = 'Zusätzliche Vorlagedaten';
$string['extra_help'] = 'Ein manchmal nützliches zusätzliches Textfeld für die Vorlage, als {{TEST.extra}} erkannt.';
$string['fail'] = 'Fehlgeschlagen';
$string['failedhidden'] = 'Ihr Code hat einen oder mehrere verborgene Tests nicht bestanden.';
$string['failedntests'] = '{$a->numerrors} Test(s) fehlgeschlagen';
$string['failedtesting'] = 'Testen fehlgeschlagen';
$string['fails'] = 'Fehler';
$string['feedback'] = 'Feedback';
$string['feedback_help'] = 'Wählen Sie "Vom Test festgelegt", damit die Test-Feedback-Einstellungen die Anzeige der Ergebnistabelle steuern können, "Anzeigen erzwingen", um die Ergebnistabelle immer anzuzeigen, und "Verbergen erzwingen", um sie immer auszublenden';
$string['feedback_hide'] = 'Verbergen erzwingen';
$string['feedback_quiz'] = 'Vom Test festgelegt';
$string['feedback_show'] = 'Anzeigen erzwingen';
$string['fileheader'] = 'Unterstützungsdateien';
$string['filenamesexplain'] = 'Beschreibung';
$string['filenamesregex'] = 'Regulärer Ausdruck';
$string['filloutoneanswer'] = 'Sie müssen Quellcode eingeben, der die Spezifikation erfüllt. Der von Ihnen eingegebene Code wird ausgeführt, um seine Korrektheit zu prüfen und entsprechend eine Bewertung zu vergeben.';
$string['firstfailure'] = 'Erster fehlgeschlagener Testfall: {$a}';
$string['forexample'] = 'Zum Beispiel';
$string['globalextra'] = 'Global extra';
$string['globalextra_help'] = 'Ein Textfeld zur allgemeinen Verwendung durch Vorlageautoren, wie das Zusatzfeld jedes Testfalls, aber global für alle Tests. Verfügbar für den Vorlageautor als {{ QUESTION.globalextra }}.';
$string['goodemptyprecheck'] = 'Bestanden';
$string['gotcolhdr'] = 'Erhalten';
$string['grader'] = 'Bewerter';
$string['grading'] = 'Benotung';
$string['gradingcontrols'] = 'Bewertungseinstellungen';
$string['graph_ui_invalidserialisation'] = 'GraphUI: ungültige Serialisation';
$string['graphhelp'] = '- Doppelklicken Sie auf eine leere Stelle, um einen neuen Knoten/Status zu erstellen.
- Doppelklicken Sie auf einen vorhandenen Knoten, um ihn zu "markieren", beipielsweise als Akzeptorzustand für Zustandsautomaten (FSMs). Doppelklicken Sie erneut, um die Markierung aufzuheben.
- Klicken und ziehen Sie, um einen Knoten zu verschieben.
- Halten Sie die Umschalttaste gedrückt, während Sie innerhalb eines Knotens klicken und ziehen Sie sie zu einem anderen, um eine Verknüpfung zu erstellen.
- Klicken Sie bei gedrückter Umschalttaste auf eine leere Stelle und ziehen Sie den Mauszeiger auf einen Knoten, um einen Startlink zu erstellen (nur FSMs).
- Klicken und ziehen Sie einen Link, um seine Kurve zu ändern.
- Klicken Sie auf einen Link/Knoten, um seinen Text zu bearbeiten.
- Eingabe von _ gefolgt von einer Ziffer macht diese Ziffer zu einer tiefergestellten Ziffer.
- Durch die Eingabe von \\epsilon wird ein Epsilon-Zeichen (und ähnlich für \\alpha, \\beta usw.) erstellt.
- Klicken Sie auf einen Link/
Knoten und drücken Sie die Entf-Taste, um ihn zu entfernen.';
$string['hidden'] = 'Versteckt';
$string['hidedifferences'] = 'Unterschiede ausblenden';
$string['hiderestiffail'] = 'Rest ausblenden bei Fehler';
$string['hoisttemplateparams'] = 'Vorlagen-Parameter heben';
$string['howtogetmore'] = 'Für detailliertere Informationen speichern Sie die Frage ohne aktiviertes  "Beim Speichern prüfen" und testen Sie sie manuell';
$string['ideone_pass'] = 'Ideone Server Passwort';
$string['ideone_pass_desc'] = 'Das Passwort, dass beim Herstellen einer Verbindung zum veralteten Ideone-Server verwendet werden soll (wenn die Ideone-Sandbox aktiviert ist)';
$string['ideone_user'] = 'Ideone Server Benutzername';
$string['ideone_user_desc'] = 'Der Benutzername, der beim Herstellen einer Verbindung zum veralteten Ideone-Server verwendet werden soll (wenn die Ideone-Sandbox aktiviert ist)';
$string['illegalformat'] = 'Ungültiges Format ({$a->format}) in den Spaltenformaten';
$string['info_unavailable'] = 'Informationen zum Fragentyp sind für angepasste Fragen nicht verfügbar.';
$string['inputcolhdr'] = 'Eingabe';
$string['insufficientattachments'] = 'Nicht genügend Anhänge, {$a} erforderlich.';
$string['is_prototype'] = 'Als Prototyp verwenden';
$string['iscombinatortemplate'] = 'Ist ein Kombinator';
$string['jobe_apikey'] = 'Jobe API-Schlüssel';
$string['jobe_apikey_desc'] = 'Der API-Schlüssel, der in allen REST-Anforderungen an den Jobe-Server enthalten sein muss (falls erforderlich). Max 40 Zeichen. Lassen Sie das Feld leer, um den API-Schlüssel aus Anfragen auszulassen';
$string['jobe_canterbury_html'] = '<p style=\'color:gray; font-style:italic; font-size:smaller\'>Ausführen auf dem Jobe Server der University of Canterbury</p>';
$string['jobe_host'] = 'Jobe Server';
$string['jobe_host_desc'] = 'Der Host-Name des Jobe-Servers und die Port-Nummer, falls nicht Port 80, z.b jobe.somewhere.edu:4010. Die URL für die Jobe-Anfrage erhält man durch Voranstellen dieser Zeichenfolge mit http: // und Anhängen von /jobe/index.php/restapi/<REST_METHOD>.';
$string['jobe_warning_html'] = '<p style=\'background-color:yellow\'>Ausgeführen auf dem Jobe-Server der University of Canterbury. Dies ist nur für erste Tests gedacht. Bitte richten Sie so bald wie möglich Ihren eigenen Jobe-Server ein. Siehe <a href=\'https://github.com/trampgeek/moodle-qtype_coderunner/blob/master/Readme.md#sandbox-configuration\' target=\'_blank\'>hier</a>.</p>';
$string['language'] = 'Sandbox-Sprache';
$string['languages'] = 'Sprachen';
$string['languages_help'] = 'Die Sandbox-Sprache ist die Computersprache, um die Einreichung auszuführen.
Es muss der gewählten Sandbox bekannt sein (sofern eine bestimmte Sandbox gewählt wurde) oder zumindestens einer der aktivierten Sandboxen (ansonsten).
Dies sollte normalerweise keine Änderung von dem Wert in
Elternvorlage erfordern; Modifikation auf eigene Gefahr.

Ace-Sprache ist die Sprache, die der Ace-Code-Editor (falls aktiviert) für die Antwort des Studierenden verwendet.
Standardmäßig entspricht dies der Sandbox-Sprache; geben Sie hier nur einen anderen Wert ein, wenn die Vorlagensprache von der Sprache abweicht in der man erwartet, dass der Studierende schreibt (z.B. wenn es sich um einen Python-Präprozessor handelt, der verwendet wird, um C-Programm von Teilnehmer/innen zu validieren, bevor sie ausgeführt werden).

Mehrsprachige Fragen sind Fragen, auf die die Teilnehmer/innen in mehr als einer Sprache antworten können. Sie werden aktiviert, indem die Ace-Sprache auf eine Komma-getrennte Liste der Sprachen gesetzt wird. Den Teilnehmer/innen wird dann ein Dropdown-Menü zur Auswahl angeboten, um die Sprache auszuwählen, in der ihre Antwort geschrieben werden soll. Wenn genau eine der Sprachen ein Sternchen (\'*\') vorangestellt hat, wird diese Sprache wird als Standardsprache gewählt, die die Ausgangseinstellung des Dropdown-Menüs ist. Ein Ace-Sprachwert von beispielsweise "C,C++,Java*,Python3" würde es erlauben, eine Antwort in C, C++, Java oder Python3 einzureichen, aber das Dropdown-Menü würde anfänglich Java als Standard zeigen. Wenn kein Standardwert angegeben ist, bleibt der Anfangszustand des Dropdown-Menüs leer und die Teilnehmer/innen müssen eine Sprache auswählen.
Mehrsprachige Fragen erfordern eine spezielle Vorlage, die {{ANSWER\\_LANGUAGE}} verwendet, um die Vorlagenvariablen zu steuern, wie der Code ausgeführt wird, siehe das eingebaute Beispiel für den mehrsprachigen Fragentyp. Die Variable {{ANSWER\\_LANGUAGE}} ist <i>nur</i> für mehrsprachige Fragen definiert.

Wenn der Autor eine Beispielantwort zu einer mehrsprachigen Frage liefern möchte, muss er es entweder in der Standardsprache schreiben, falls angegeben, oder ansonsten in der ersten der erlaubten Sprachen.';
$string['languageselectlabel'] = 'Sprache';
$string['mark'] = 'Punkte';
$string['marking'] = 'Punktevergabe';
$string['markinggroup'] = 'Bewertung';
$string['markinggroup_help'] = 'Wenn die "Alles oder nichts-Bewertung" aktiviert ist, müssen alle Testfälle für die Einreichung bestanden sein, um irgendeine Bewertung zu erreichen. Andernfalls wird die Bewertung durch Summieren der Bewertung für alle Testfälle, die bestehen, und dies als einen Bruchteil der maximal möglichen Punkte ausgedrückt.
Die pro-Testfall-Bewertung kann nur angegeben werden, wenn die Alles-oder-nichts-Bewertung-Checkbox deaktiviert ist. Wenn Sie eine Bewerter-Vorlage verwenden, die Teilmarkierungen für Testfälle vergibt, sollte "Alles oder nichts-Bewertung" generell deaktiviert sein.

Das obligatorische Abzugssystem ist eine durch Komma getrennte Liste von Strafen (jeweils in Prozent) die auf sich aufeinanderfolgende Einreichungen anzuwenden sind. Diese sind absolut, nicht kumulativ. Als ein Sonderfall kann die letzte Strafe "..." lauten, was bedeutet: "verlängere die vorherige zwei Strafen als eine arithmetische Progression bis zu 100". Zum Beispiel, `0,5,10,30,...` entspricht `0,5,10,30,50,70,90,100`.
Wenn es mehr Einreichungen als definierte Abzüge gibt, wird der letzte Wert verwendet.

Das Standard-Abzugssystem kann durch einen Systemadministrator über  Website-Administration> Plugins> Fragetypen> CodeRunner für die gesamte Site festgelegt werden.

Setzen Sie das Abzugssystem auf 0, um bei allen Einreichungen keine Abzüge anzuwenden.';
$string['maxfilesize'] = 'Maximal zulässige Dateigröße (Bytes)';
$string['maxfilesize_help'] = 'Wählen Sie die maximale Datei-Upload-Größe (Bytes). Das Zulassen großer Datei-Uploads mit großen Klassen kann sich auf die Leistung und den Speicherplatz sowohl auf Moodle- als auch auf Jobe-Servern auswirken.';
$string['memorylimit'] = 'Speicherbegrenzung (MB)';
$string['missinganswers'] = 'fehlende Antworten';
$string['missingorbadfraction'] = 'Ungültiger oder fehlender Bruch im Output der Kombinator-Bewerter-Ausgabe. Output war: {$a->output}';
$string['missingoutput'] = 'Die erwartete Ausgabe dieses Testfalls muss angegeben werden.';
$string['missingprototype'] = 'Diese Frage wurde als vom Typ \'{$a->crtype}\' definiert, aber der Prototyp existiert nicht oder ist nicht eindeutig oder in diesem Kontext nicht verfügbar. Sie sollten abbrechen und versuchen, den Prototyp (erneut) zu installieren.
Fahren Sie mit der Bearbeitung nur fort, wenn Sie wissen, was Sie tun!';
$string['missingprototypes'] = 'Fehlende Prototypen';
$string['missingprototypewhenrunning'] = 'Fehlerhafte Frage (fehlender Prototyp \'{$a->crtype}\'). Kann nicht ausgeführt werden.';
$string['morehidden'] = 'Einige verborgene Testfälle sind ebenfalls fehlgeschlagen.';
$string['multipledefaults'] = 'Höchstens eine Sprache kann als Standard ausgewählt werden';
$string['multipleprototypes'] = 'Mehrere Prototypen gefunden für \'{$a->crtype}\'';
$string['mustrequirefewer'] = 'Sie können nicht mehr Anhänge verlangen, als Sie zulassen.';
$string['nearequalitygrader'] = 'Ungefähre Übereinstimmung';
$string['negativeorzeromark'] = 'Punkte müssen größer als Null sein';
$string['nodetailsavailable'] = 'Wählen Sie einen Fragetyp aus, um detaillierte Hilfe anzuzeigen.';
$string['noerrorsallowed'] = 'Ihr Code muss alle Tests bestehen, um eine Bewertung zu erhalten. Versuchen Sie es noch einmal.';
$string['nonnumericmark'] = 'Nichtnumerische Bewertung';
$string['noqtype'] = 'Kein Fragetyp ausgewählt';
$string['nosampleanswer'] = 'Keine Beispielantwort';
$string['options'] = 'Optionen';
$string['ordering'] = 'Sortierung';
$string['overallresult'] = 'Gesamtergebnis';
$string['pass'] = 'Bestanden';
$string['passes'] = 'bestanden';
$string['penaltyregime'] = '(Abzugssystem: {$a} %)';
$string['penaltyregimelabel'] = 'Abzugssystem:';
$string['pluginname'] = 'CodeRunner';
$string['pluginname_help'] = 'Verwenden Sie das Feld "Fragetyp", um die Programmiersprache auszuwählen, die verwendet werden soll, um die Einreichung der Teilnehmer/innen auszuführen.
Geben Sie das Problem an, für das die Teilnehmer/innen Code schreiben müssen, und definieren Sie dann eine Reihe von Tests, die bei der Einreichung der Teilnehmer/innen durchgeführt werden';
$string['pluginnameadding'] = 'Eine CodeRunner-Frage hinzufügen';
$string['pluginnameediting'] = 'Eine CodeRunner-Frage bearbeiten';
$string['pluginnamesummary'] = 'CodeRunner: führt von Studierenden eingegebenen Code in einer Sandbox aus';
$string['precheck'] = 'Vorabprüfung';
$string['precheck_all'] = 'Alle';
$string['precheck_disabled'] = 'Deaktiviert';
$string['precheck_empty'] = 'Leer';
$string['precheck_examples'] = 'Beispiele';
$string['precheck_help'] = 'Wenn die Vorabprüfung aktiviert ist, haben die Studierenden einen zusätzlichen Button links neben dem üblichen Prüfknopf, um ihnen einen abzugfreien Durchlauf ihres Codes gegenüber zu eine Teilmenge der Frage-Testfälle zu ermöglichen.

Wenn \'Leer\' ausgewählt ist, wird ein einzelner Lauf mit der Testvorlage durchgeführt, die einen Testfall verwendet, in dem alle Felder (Testcode, stdin, erwartet, usw.) leere Zeichenfolgen sind. Eine nicht leere Ausgabe
wird als Vorabprüfungsfehler angesehen. Verwenden Sie dies mit Vorsicht: Einige Fragetypen werden dies nicht korrekt behandeln, z.B. "schreiben Sie ein Programm"- Fragen, die eine Ausgabe erzeugen.

Wenn \'Beispiele\' ausgewählt ist, wird der Code gegen alle Tests getestet werden, für die \'Als Beispiel verwenden\' aktiviert wurde.

Wenn \'Ausgewählt\' ausgewählt ist, wird jedem Testfall ein zusätzliches Benutzeroberflächenelement hinzugefügt damit der Autor eine bestimmte Teilmenge der Tests auswählen kann.

Wenn "Alle" ausgewählt ist, werden alle Testfälle ausgeführt (obwohl ihr Verhalten möglicherweise von der normalen Prüfung abweichen kannn, wenn der Vorlagencode dies so vorschreibt).

Die Vorlage kann anhand des Twig-Parameter {{IS_PRECHECK}}, der während des Vorüberprüfungslaufs "1" ist, ansonsten "0", überprüfen, ob der Lauf ein Vorabprüfungslauf ist oder nicht.';
$string['precheck_only'] = 'Nur Vorabprüfung';
$string['precheck_selected'] = 'Ausgewählt';
$string['precheckingemptyset'] = 'Beispiele am Vorabprüfen, aber keine vorhanden!';
$string['privacy:metadata'] = 'Der CodeRunner-Fragetyp speichert keine benutzerspezifischen Daten.';
$string['proceed_at_own_risk'] = 'Bearbeiten eines vorausgelieferten Frageprototyps?! Fahren Sie auf eigene Verantwortung fort!';
$string['prototypeQ'] = 'Ist Prototyp?';
$string['prototype_error'] = '*** FEHLER BEIM LADEN DES PROTOTYPS. DIES NICHT SPEICHERN! ***';
$string['prototype_load_failure'] = 'Fehler beim Laden des Prototyps:';
$string['prototypecontrols'] = 'Prototyping';
$string['prototypecontrols_help'] = 'Wenn "Ist Prototyp" gewählt ist, wird diese Frage zum Prototyp für andere Fragen. Nach dem Speichern wird der angegebene Name des Fragetyps in der Dropdown-Liste der Fragetypen angezeigt. Neue Fragen basierend auf diesem Typ übernehmen dann standardmäßig alle Anpassungsattribute, die für diese Frage angegeben wurden. Nachfolgende Änderungen an dieser Frage wirken sich dann auf alle abgeleiteten Fragen aus, sofern sie nicht selbst angepasst werden, wodurch die Verbindung unterbrochen wird.

Die prototypische Vererbung ist nur einstufig. Wenn diese Frage als Prototyp gespeichert wird, verliert sie ihre Verbindung zum ursprünglichen Basistyp und wird zu einem neuen Basistyp. Seien Sie darauf hingewiesen, dass sie, wenn Sie abgeleitete Fragen exportieren,  sicherstellen müssen, dass diese Frage auch im Export enthalten ist, ansonsten wird die abgeleitete Frage verwaist, wenn sie in ein anderes System importiert wird. Sie sind auch dafür verantwortlich zu verfolgen, welche Fragen Sie als Prototypen verwenden. Es wird dringend empfohlen, die Frage in "PROTOTYPE_for_my_new_question_type" umzubenennen, um die spätere Wartung zu vereinfachen.';
$string['prototypeusage'] = 'CodeRunner Frageprototyp-Verwendung für Kurs {$a}';
$string['prototypeusageindex'] = 'Verfügbare Kurse';
$string['qWrongBehaviour'] = 'Verwenden Sie das adaptive Verhalten für alle CodeRunner-Fragen, oder es können massive Leistungseinbußen auftreten. Beispielsweise müssen alle Fragen auf einer Seite neu bewertet werden, wenn die Seite erneut angezeigt wird.';
$string['qtype_cpp_program'] = '<p>Verwendet für Schreib-ein-C++-Programm-Fragen, bei denen es keinen Code für jeden Testfall gibt und die verschiedenen Tests einfach unterschiedliche Standardeingabedaten (stdin) verwenden. Es wird erwartet, dass die Antwort der Teilnehmer/innen ein vollständig
lauffähiges Programm ist, das ohne Änderung durch CodeRunner in der vorliegenden Form einmal für jeden Testfall ausgeführt wird. Die Werte des Testcodes und der zusätzlichen Felder der Testfälle werden ignoriert.</p>';
$string['qtype_java_program'] = '<p>Eine Schreib-ein-Java-Programm-Frage, bei der die Teilnehmer/innen
Ihnen ein vollständiges Programm als Antwort vorlegen. Das Programm wird kompiliert und für jede Testfall ausgeführt. Es gibt keinen Testcode, nur stdin-Testdaten, obwohl dies nicht tatsächlich überprüft wird: caveat emptor. Die zusätzlichen Felder der Testfälle werden ebenfalls
ignoriert.</p>
<p>Dieser Fragetyp wird sehr ineffizient, wenn es viele Testfälle gibt, da
jeder einzelne einen vollständigen Kompilierungs- und Ausführungszyklus auf dem Jobe-Server erfordert. Es ist möglich, alle Tests in einen einzigen Python-Job zu packen, der an den Sandbox-Server gesandt wird und dieser kompiliert das Programm nur einmal und führt es dann bei jedem Testfall aus.
Einzelheiten zu diesem Ansatz finden Sie im Forum für Fragenautoren unter coderunner.org.nz.</p>';
$string['qtype_pascal_program'] = '<p>Ein Pascal-Fragetyp, bei dem die Antwort der/des Teilnehmer/in ein vollständiges Pascal-Programm ist. Das Programm wird für jeden Testfall einmal kompiliert und ausgeführt, wobei die im Testfall vorgesehene Standardeingabe verwendet wird und die Felder <i>testcode</i> und <i>extra</i> ignoriert werden.</p>';
$string['qtype_php'] = '<p>Eine php-Frage, bei dem die Antwort der/des Teilnehmer/in PHP-Code ist. Im einfachsten Fall beginnt der Code der/des Teilnehmer/in mit </p><pre><?php</pre>, aber <i>schließt den PHP-Tag nicht</i>. Der Grund für das Nichtschließen kann durch Einsicht in die Vorlage erkannt werden: Auf die Antwort der/des Teilnehmer/in folgen alle Testfall-Testcodes. Wenn Sie stattdessen möchten, dass der Code der/des Teilnehmer/innen durch Schließen des PHP-Tags beendet wird, sollten Sie die Vorlage so bearbeiten, dass der PHP-Tag vor der Testsequenz wieder geöffnet wird.</p>
<p>Die Ausgabe aus jedem Testfall, die mit dem <i>Erwartet</i> Feld aus dem Testfall übereinstimmen sollte, ist die Ausgabe aus dem PHP-Code der/des Teilnehmer/in (einschließlich aller Inhalte außerhalb des Geltungsbereichs von &lt;?php...?&gt; Tags) plus die Ausgabe aus dem Testcode.</p><p>Untersuchen Sie den Vorlagee-Code (durch Klicken auf <i>Anpassen</i>), um dies zu verstehen.</p>';
$string['qtypehelp'] = 'Hilfe für den Fragetyp';
$string['question_type_changed'] = 'Änderung des Fragetyps. Klicken Sie auf Ok, um die Anpassungsfelder neu zu laden oder Abbrechen, um Ihre angepassten Felder beizubehalten.';
$string['questioncheckboxes'] = 'Anpassung';
$string['questioncheckboxes_help'] = 'Um den Fragetyp anzupassen, z.B. um die Fragevorlagen oder
Sandbox-Parameter zu bearbeiten, aktivieren Sie die "Anpassen"-Checkbox und lesen Sie die Hilfe zu den neu sichtbaren Formularelementen für
mehr Informationen.

Wenn die Checkbox "Vorlagen-Debugging" aktiviert ist, wird für jeden Testfall das generierte Programm in der Ausgabe angezeigt.';
$string['questionloaderror'] = 'Frage konnte nicht geladen werden';
$string['questionpreview'] = 'Fragevorschau';
$string['questiontype'] = 'Fragetyp';
$string['questiontype_help'] = 'Wählen Sie den spezifischen Fragetyp aus.

Die Auswahl wählt einen der eingebauten Typen aus, der eine bestimmte Sprache und manchmal eine Sandbox spezifiziert, in der das Programm ausgeführt wird.
Jeder Fragetyp hat eine Vorlage, die definiert, wie das ausführbare Programm aus den Testfalldaten und der Antwort des Studierenden erstellt wird.

Die Vorlage angezeigt und optional durch Auswählen der Checkbox "Anpassen" angepasst werden,

Wenn die Checkbox Template-Debugging ausgewählt ist, wird das generierte Programm für jeden Testfall in der Ausgabe angezeigt.';
$string['questiontype_required'] = 'Sie müssen einen Fragentyp auswählen';
$string['questiontypedetails'] = 'Fragetyp-Details';
$string['regexgrader'] = 'Regulärer Ausdruck';
$string['replacedollarscount'] = 'Diese Kategorie enthält {$a} CodeRunner-Fragen.';
$string['replaceexpectedwithgot'] = 'Klicken Sie auf den &lt;&lt;-Button, um die erwartete Ausgabe dieses Testfalls durch die tatsächliche Ausgabe zu ersetzen.';
$string['reset'] = 'Antwort zurücksetzen';
$string['resethover'] = 'Änderungen verwerfen und Antwort auf den ursprünglichen vorinstallierten Wert zurücksetzen';
$string['resultcolumnheader'] = 'Resultat';
$string['resultcolumns'] = 'Resultatespalten';
$string['resultcolumns_help'] = 'Standardmäßig zeigt die Ergebnistabelle Spalten mit dem Testcode, stdin, Erwartet und Erhalten, vorausgesetzt, die Spalten sind nicht leer. Sie können die Voreinstellung und/oder die Spaltenüberschriften, indem Sie einen Wert für die Ergebnisspalten eingeben (leer lassen für
das Standardverhalten).

Wenn angegeben, muss das Feld resultcolumns eine JSON-codierte Liste von Spaltenspezifizierern sein. Jeder Spaltenspezifizierer ist selbst eine Liste, normalerweise mit nur zwei oder drei Elementen. Das erste Element ist die Spaltenüberschrift, das zweite Element ist das Feld aus dem TestResult-Objekt, das in der Spalte angezeigt wird, und das optionale dritte Element ist eine Zeichenfolge im sprintf-Format, mit der das Feld angezeigt wird.

Die im standardmäßigen TestResult-Objekt verfügbaren Felder sind: testcode, stdin, expected, got, extra, awarded, und mark. testcode, stdin, expected und extra sind die Felder aus dem Testfall, während got die tatsächlich erzeugte und vergebene Ausgabe ist und mark die tatsächlich vergebene Bewertung bzw. die maximale Bewertung für den Testfall ist.

Per-Test Bewerter-Vorlagen können ihre eigenen Felder hinzufügen, die auch zur Anzeige ausgewählt werden können. Es ist auch möglich, mehrere Felder zu einer Spalte zu kombinieren, indem dem Bezeichner zusätzliche Felder hinzugefügt werden: Diese müssen vor dem sprintf-Formatbezeichner stehen, der dann obligatorisch wird. Um beispielsweise eine Bruch-Spalte für die Bewertung in der Form 0,74 / 1,00 anzuzeigen, könnte beispielsweise ein Spaltenformatbezeichner von ["Bewertungsanteil", "awarded", "mark", "% .2f /%. 2f"] verwendet werden.

Als weiterer Sonderfall bedeutet ein Format von% h, dass das Testergebnisfeld als ausgabebereites HTML verwendet und nicht weiter verarbeitet werden sollte. Dies ist nur bei benutzerdefinierten Bewerter-Vorlagen nützlich, die HTML-Ausgaben generieren, z.B. SVG-Grafiken.

Der Standardwert für Ergebnisspalten ist [["Test", "testcode"], ["Eingabe", "stdin"], ["Erwartet", "expected"], ["Erhalten", "got"]].

Die Einstellung des Felds resultcolumns hat keine Auswirkung, wenn ein Kombinator-Vorlage-Bewerter verwendet wird. Der Frageersteller ist dann dafür verantwortlich, die Ergebnistabelle in beliebiger Weise zu formatieren.';
$string['resultcolumnsnotjson'] = 'Das Resultatespalten-Feld ist keine gültige JSON-Zeichenfolge';
$string['resultcolumnsnotlist'] = 'Das Feld Resultatespalten muss eine JSON-codierte Liste von Spaltenbezeichnern enthalten';
$string['resultcolumnspecbad'] = 'Ungültiger Spaltenbezeichner gefunden: Jeder muss eine Liste mit zwei oder mehr Zeichenfolgen sein';
$string['resultstring-abnormaltermination'] = 'Fehlerhafter Programmabbruch';
$string['resultstring-compilationerror'] = 'Kompilierungsfehler';
$string['resultstring-illegalsyscall'] = 'Illegaler Funktionsaufruf';
$string['resultstring-internalerror'] = 'CodeRunner-Fehler (IE): bitte einen Tutor informieren';
$string['resultstring-memorylimit'] = 'Speicherbegrenzung überschritten';
$string['resultstring-norun'] = 'Kein Programmdurchlauf';
$string['resultstring-outputlimit'] = 'Zu große Ausgabe';
$string['resultstring-runtimeerror'] = 'Laufzeitfehler';
$string['resultstring-sandboxoverload'] = 'Der Sandbox-Server ist überlastet. Vielleicht bald noch einmal versuchen?';
$string['resultstring-sandboxpending'] = 'CodeRunner-Fehler (PD): bitte einen Tutor informieren';
$string['resultstring-sandboxpolicy'] = 'CodeRunner-Fehler (BP): bitte einen Tutor informieren';
$string['resultstring-success'] = 'Ok';
$string['resultstring-timelimit'] = 'Zeitbegrenzung überschritten';
$string['run_failed'] = 'Tests konnten nicht ausgeführt werden';
$string['sampleanswerattachments'] = 'Beispiel für Antwortanhänge';
$string['sampleanswerattachments_help'] = 'Wenn die Beispielantwort Anhänge benötigt, laden Sie diese hier hoch';
$string['sandboxcontrols'] = 'Sandbox';
$string['sandboxcontrols_help'] = 'Wählen Sie aus, welche Sandbox zum Ausführen der Studierendeneinreichungen verwendet werden soll. DEFAULT verwendet die Sandbox mit der höchsten Priorität, die für die ausgewählte Sprache verfügbar ist. Da Jobe alle Sandbox-Typen mit Ausnahme der veralteten "ideonesandbox" ersetzt hat, wird der Wert "jobesandbox" für die normale Verwendung empfohlen und führt zu besseren Fehlermeldungen, als DEFAULT, wenn der Jobe-Server ausgefallen ist.

Sie können auch die maximale CPU-Zeit in Sekunden festlegen, die für jeden Testfalllauf zulässig ist, und den maximalen Speicher, den ein einzelner Testfalllauf verbrauchen kann (MB). Ein leerer Eintrag verwendet den Standardwert der Sandbox (normalerweise 5 Sekunden für das CPU-Zeitlimit und eine sprachabhängige Speichermenge), aber die Standardwerte sind möglicherweise nicht für ressourcenintensive Programme geeignet. Ein Wert von Null für den maximalen Speicher führt dazu, dass keine Begrenzung auferlegt wird. Die hier angegebene Speichermenge ist die Gesamtmenge, die für den Durchlauf benötigt wird, einschließlich aller Bibliotheken, Interpreter, VMs usw.

Der Parameter \'Parameters\' wird verwendet, um weitere Sandbox-spezifische Daten wie Compileroptionen und API-Schlüssel zu übergeben. Er sollte normalerweise leer gelassen werden, aber wenn er nicht leer ist, muss es ein gültiger JSON-Datensatz sein. Im Falle der Jobe-Sandbox umfassen die verfügbaren Attribute disklimit, streamsize, numprocs, compileargs, linkargs und interpreterargs. Zum Beispiel würde `{"compileargs":["-std=c89"]}` für eine C-Frage die C89-Konformität erzwingen und keine anderen C-Optionen würden verwendet werden. Details finden Sie in der Jobe-Dokumentation. Einige Sandboxen (z.B. die veraltete Ideone-Sandbox) ignorieren möglicherweise einige oder alle dieser Einstellungen stillschweigend.

Wenn die Sandbox auf "jobesandbox" eingestellt ist, wird der Jobe-Host, der zum Testen der Frage verwendet wird, normalerweise über die Administratoreinstellungen für das CodeRunner-Plugin festgelegt. Es ist jedoch möglich, einen anderen Jobserver auszuwählen, indem Sie einen Parameter \'jobeserver\' und optional \'jobeapikey\' definieren. Wenn beispielsweise das Feld \'Parameters\' auf `{"jobeserver": "myspecialjobe.com"} gesetzt ist, wird der Durchlauf stattdessen an den Server "myspecialjobe.com" gesendet. Warnung: Diese Funktion ist noch experimentell und kann sich in Zukunft ändern.';
$string['sandboxerror'] = 'Fehler der Sandbox [{$a->sandbox}]: {$a->message}';
$string['sandboxparams'] = 'Parameter';
$string['seethisquestioninthequestionbank'] = 'Diese Frage in der Fragesammlung anzeigen';
$string['showcolumns'] = 'Spalten anzeigen:';
$string['showcolumns_help'] = 'Wählen Sie, welche Spalten der Ergebnistabelle den Studierenden angezeigt werden sollen. Leere Spalten werden unabhängig davon ausgeblendet.
Die Standardeinstellungen sind für die meisten Anwendungen geeignet.';
$string['showdifferences'] = 'Unterschiede anzeigen';
$string['showsource'] = 'Vorlagen-Debugging';
$string['sourcecodeallruns'] = 'Debug: Quellcode aus allen Testdurchläufen';
$string['stdin'] = 'Standardeingabe';
$string['stdin_help'] = 'Die Standardeingabe für den Test, von der Vorlage als {{TEST.stdin}} erkannt.';
$string['student_answer'] = 'Antwort des Studierenden';
$string['supportscripts'] = 'Unterstützungsskripte';
$string['syntax_errors'] = 'Syntaxfehler';
$string['table_ui_invalidjson'] = 'Table UI: ungültige JSON-Serialisierung.';
$string['table_ui_invalidserialisation'] = 'Table UI: ungültige Serialisierung.';
$string['table_ui_missingparams'] = 'Die Tabellen-UI benötigt die Vorlagenparameter table_num_columns und
table_num_rows.';
$string['template'] = 'Vorlage';
$string['template_changed'] = 'Per-Test-Vorlage geändert - Kombinator deaktivieren? [\'Abbrechen\' lässt ihn aktiviert.]';
$string['template_help'] = 'Die Vorlage definiert die Programme, die in der Sandbox für eine bestimmte Antwort der Teilnehmer/innen und Tests ausgeführt wird. Es gibt zwei Arten von Vorlagen:

* eine Vorlage pro Testfall, die ein Programm definiert, das für einen einzelnen Testfall ausgeführt werden soll, und
* eine \'Kombinator\'-Vorlage, die ein Programm definiert, das alle verschiedenen Fälle in einem einzigen Programm kombiniert.

Das Kontrollkästchen \'Ist ein Kombinator\' wird bei einer Vorlage pro Testfall nicht angekreuzt und ist für eine für eine Kombinator-Vorlage angekreuzt. Der Rest dieses Hilfebereichs geht davon aus, dass Sie eine Vorlage pro Testfall verwenden; siehe die vollständige Dokumentation für die Verwendung von Kombinator-Vorlagen.

Die Vorlage wird von der Twig-Templating-Engine (siehe http://twig.sensiolabs.org) verarbeitet in einem Kontext, in dem STUDENT_ANSWER die Antwort der/des Teilnehmenden ist und TEST.testcode der Code für den aktuellen Testfall ist. Diese Werte
(und andere Testfallwerte wie TEST.expected, TEST.stdin, TEST.mark)
können in die Vorlage eingefügt werden, indem sie in doppelte Klammern eingeschlossen werden, z.B. <tt>{{{TEST.testcode}}}</tt>. Für die Verwendung innerhalb von literalen Zeichenketten muss eine entsprechendes Escape-Funktion angewendet werden, z.B. <tt>{{{STUDENT_ANSWER | e(\'py\')}}</tt> ist die Antwort der/des Teilnehmenden in einer Weise escaped, die für die Verwendung innerhalb von dreifachen Anführungszeichen in Python geeignet ist. Andere Escape-Funktionen sind <tt>e(\'c\')</tt>, <tt>e(\'java\')</tt>,
<tt>e(\'matlab\')</tt>. Das Programm, das von Twig ausgegeben wird, wird dann mit der Sprache des gewählten eingebauten Typs kompiliert und mit stdin auf TEST.stdin gesetzt ausgeführt. Die Ausgabe dieses Programms wird dann an den ausgewählten Bewerter weitergegeben.
Weitere Informationen dazu finden Sie in der Hilfe unter \'Grading controls\'.

Beachten Sie, dass, wenn eine angepasste Vorlage pro Testfall verwendet wird, es für jeden Testfall einen Kompilierungs- und Ausführungszyklus geben wird, während die meisten integrierten Fragetypen stattdessen eine Kombinator-Vorlage definieren, die alle Testfälle in einem einzigen Lauf ausführt.

Wenn das Vorlagen-Debugging-Kontrollkästchen angeklickt ist, wird in der Ausgabe das generierte Programm für jeden Testfall  angezeigt.';
$string['templatecontrols'] = 'Vorlagensteuerung';
$string['templatecontrols_help'] = 'Das Ankreuzen des Kontrollkästchens \'Ist ein Kombinator\' legt fest, dass es sich bei der Vorlage um eine Kombinator-Vorlage handelt, welche die Antwort der/des Teilnehmer/in und alle Testfälle in einem einzigen Durchlauf kombiniert (oder zu kombinieren versucht). Wenn dieses Kontrollkästchen angekreuzt ist, müssen Sie auch den Wert des \'Test-Trenner (regex)\'-Feldes, bei dem es sich um den regulären PHP-Ausdruck handelt, der verwendet wird, um die Ausgabe aus dem Programmlauf zurück in eine Reihe einzelner Testläufe aufzuteilen, definieren. Sie brauchen dies jedoch nicht zu definieren, wenn Sie auch eine Bewerter-Vorlage verwenden, da in diesem Fall der Vorlage-Code dafür verantwortlich ist, die Ausgabe selbst aufzuteilen und zu bewerten.

Kombinator-Vorlagen werden nicht durch eine TEST Twig-Variable übergeben. Stattdessen erhalten sie eine Variable TESTCASES, die eine Liste aller Tests in der Frage ist. Es wird allgemein davon ausgegangen, dass das von der Vorlage erzeugte Programm die STUDENT_ANSWER und alle TESTCASES in einem einzigen Programm kombiniert, das bei seiner Ausführung die Testergebnisse aus jedem Testfall ausgibt, getrennt durch eine eindeutige Zeichenfolge. Die Trennzeichenkette wird durch einen regulären Ausdruck definiert, der durch das Formularfeld \'Test-Trenner (regex)\' unten angegeben wird.

Wenn für Testfälle jedoch eine Standardeingabe definiert ist, werden Kombinator-Vorlagen problematisch. Wenn die Vorlage ein einzelnes Programm konstruiert, wie sollte die Standardeingabe aussehen? Die einfachste Lösung (und Standardlösung) besteht darin, die Testfälle einzeln nacheinander auszuführen, die Kombinator-Vorlage zur Erstellung jedes Programms zu verwenden und ihr eine TESTCASES-Variable zu übergeben, die nur einen einzigen Test enthält. Durch diesen "Trick" kann die Kombinator-Vorlage eine doppelte Funktion erfüllen: Sie verhält sich wie eine Vorlage für jeden Testfall (mit einem TESTCASES-Array mit einem einzigen Element), wenn der Fragenersteller eine Standardeingabe liefert, ansonsten aber wie ein richtiger Kombinator (mit einem TESTCASES-Array mit n Elementen). Um dieses Verhalten so zu ändern, dass der Kombinator alle Testfälle erhält, auch wenn stdin vorhanden ist, aktivieren Sie das Kontrollkästchen "Mehrere stdins zulassen".

Wenn ein Lauf des Kombinator-Programms zu einer Ausgabe nach stderr führt, wird dies als Lauffehler interpretiert. Um sicherzustellen, dass der/dem Teilnehmer/in so viele gültige Tests wie möglich gutgeschrieben werden, verhält sich das System wie bei einer Standardeingabe und greift auf die separate Ausführung jedes Tests zurück. Dies gilt jedoch nicht für Kombinator-Bewerter, die alle Laufzeitfehler selbst behandeln müssen und immer ein gültiges JSON-Ergebnis zurückgeben müssen.';
$string['templateerror'] = 'VORLAGEFEHLER';
$string['templategrader'] = 'Bewerter-Vorlage';
$string['templateparams'] = 'Vorlageparameter';
$string['templateparams_help'] = 'Im Vorlageparameter-Feld können Sie String-Parameter an die Vorlage einer Frage übergeben. Wenn es nicht leer ist, muss dies ein Datensatz im JSON-Format sein. Die Felder des Datensatzs können dann in der Vorlage verwendet werden, in der sie als QUESTION.parameters.<<param>> angezeigt werden. Zum Beispiel, wenn Vorlageparameter

        {"age": 23}

ist, würde der Wert 23 in die Vorlage eingefügt anstelle der Vorlagenvariable `{{QUESTION.parameters.age}}`.

Die Menge der Vorlagenparameter, die an die Vorlage übergeben werden, besteht aus beliebigen Vorlageparameter, die mit den Parametern, die in der Fragevorlage im Prototyp definiert sind, fusioniert werden. Frageparameter können somit Prototypparameter außer Kraft setzen, sie aber nicht löschen.';
$string['testallincategory'] = 'Alle Fragen in dieser Kategorie ausführen';
$string['testalltitle'] = 'Alle Fragen in diesemr Kontext ausführen';
$string['testcase'] = 'Testfall {$a}';
$string['testcasecontrols'] = 'Testeigenschaften';
$string['testcasecontrols_help'] = 'Wenn "Als Beispiel verwenden" aktiviert ist, wird dieser Test automatisch in den Resultatetabelle "Zum Beispiel:" der Frage aufgeführt.

Die Einstellung "Anzeige" bestimmt, wann dieser Testfall dem Studenten in der Resultatetabelle angezeigt wird.

Wenn "Rest ausblenden bei Fehler" aktiviert ist und dieser Test fehlschlägt, werden alle hinterher ausgeführten Tests unabhängig von der Einstellung "Anzeige" vor den Studierenden verborgen.

"Punkte" setzt den Wert dieses Testfalls; nur sinnvoll, wenn dies nicht eine Alles-oder-nichts-Bewertung-Frage ist.

"Sortierung" kann verwendet werden, um die Reihenfolge der Testfälle zu ändern, wenn die Frage gespeichert wird: Testfälle werden nach diesem Feld sortiert.';
$string['testcases'] = 'Testfälle';
$string['testcode'] = 'Testcode';
$string['testcode_help'] = 'Der Code für den Test, von der Vorlage als {{TEST.testcode}} erkannt.';
$string['testcolhdr'] = 'Test';
$string['testingquestion'] = 'Testen der Frage {$a}';
$string['testsplitterre'] = 'Test-Trenner (regex)';
$string['testtype'] = 'Vorabprüfung-Testtyp';
$string['testtype_both'] = 'Beide';
$string['testtype_help'] = 'Wenn die Vorabprüfung aktiviert und auf "ausgewählt" eingestellt ist, steuert diese Einstellung, ob der Test nur in einem normalen Prüfungsdurchlauf, nur in einem Vorabprüfungsdurchlauf oder in beiden Durchläufen verwendet wird.
Wenn die Vorabprüfung auf etwas anderes als "ausgewählt" eingestellt ist, wird diese Einstellung ignoriert.';
$string['testtype_normal'] = 'Nur Prüfung';
$string['testtype_precheck'] = 'Nur Vorabprüfung';
$string['tooshort'] = 'Die Antwort ist zu kurz um einen Sinn zu ergeben und wurde ohne Strafe ignoriert';
$string['twigall'] = 'Twig für alles';
$string['twigcontrols'] = 'Twig für die Steuerungen';
$string['twigcontrols_help'] = 'Auf Vorlageparameter wird bei der Twig-Erweiterung normalerweise in der Form {{QUESTION.parameters.someparam}} Bezug genommen. Wenn jedoch das Kontrollkästchen \'Vorlagenparameter heben\' markiert ist, werden die Parameter in den globalen Namensraum von Twig gehoben und können einfach als {{someparam}} referenziert werden.

Der Twig-Makroprozessor wurde traditionell nur auf die Vorlage angewendet. Jetzt wird er auch auf die Vorlagenparameter und, wenn das Kontrollkästchen \'Twig für alles\' markiert ist, auf den Fragentext, die Musterantwort, den Antwort Preload und alle Testfallfelder angewendet, wobei die Parameter der Twig-erweiterten Vorlage als Umgebung verwendet werden. Normalerweise müssen Sie \'Twig für alles\' einschalten, wenn Sie die Randomisierung innerhalb der Vorlagenparameter benutzen möchten.';
$string['twigerror'] = 'Twig Fehler {$a}';
$string['twigerrorintest'] = 'Twig-Fehler bei der Verarbeitung dieses Tests {$a}';
$string['type_header'] = 'CodeRunner-Fragetyp';
$string['typename'] = 'Fragetyp';
$string['typerequired'] = 'Bitte wählen Sie den Typ der Frage (Sprache, Format, etc.)';
$string['ui_fallback'] = 'Rückgriff auf ein Rohtext-Feld.';
$string['uicontrols'] = 'Input UIs';
$string['unauthorisedbulktest'] = 'Sie haben keinen verwendbaren Zugriff auf CodeRunner-Fragen';
$string['unauthoriseddbaccess'] = 'Sie sind nicht berechtigt, dieses Skript zu verwenden';
$string['unknowncombinatorgraderfield'] = 'Unbekanntes Feld mit Name ({$a->fieldname}) im Output des Kombinator-Bewerters';
$string['unknownerror'] = 'Ein unerwarteter Fehler ist aufgetreten. Die Sandbox ist möglicherweise nicht verfügbar. Versuchen Sie es bald noch einmal.';
$string['unserializefailed'] = 'Gespeicherte Testergebnisse konnten nicht deserialisiert werden. Vielleicht eine Neubewertung versuchen?';
$string['useace'] = 'Vorlage verwendet Ace';
$string['useasexample'] = 'Als Beispiel verwenden';
$string['validateonsave'] = 'Beim Speichern prüfen';
$string['wrongnumberofformats'] = 'Falsche Anzahl der Testresultate-Spaltenformate. Erwartet {$a->expected}, erhalten {$a->got}';
$string['xmlcoderunnerformaterror'] = 'XML-Format-Fehler in der CodeRunner-Frage';
