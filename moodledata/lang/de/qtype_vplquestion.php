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
 * Strings for component 'qtype_vplquestion', language 'de', version '4.5'.
 *
 * @package     qtype_vplquestion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionaloptions'] = 'Weitere Optionen';
$string['allornothing'] = 'Alles oder nichts';
$string['allowasynceval'] = 'Asynchrone Auswertungen erlauben';
$string['allowasynceval_desc'] = 'Wenn aktiviert, können Trainer/innen VPL Fragen so konfigurieren, dass diese über Adhoc Tasks ausgewertet werden.';
$string['answertemplate'] = 'Antwortvorlage';
$string['answertemplate_help'] = 'Schreiben Sie hier Code, der im Antwortformular der Teilnehmer/innen vorausgefüllt werden soll.';
$string['cannotimportquestionvplnotfound'] = 'Wichtige Warnung: die VPL Modul-ID, die in der VPL-Frage "{$a}" angegeben wurde, ist ungültig.';
$string['cannotimportquestionvplunreachable'] = 'Wichtige Warnung: Das VPL, das in der VPL-Frage "{$a}" verwendet wird, befindet sich nicht in diesem Kurs.';
$string['cfg:evaluationtries'] = 'Anzahl der internen Versuche zur Auswertung';
$string['cfg:evaluationtries_help'] = 'Bei Einstellung größer als 1, versucht der Server öfters, die Frage auszuwerten, wenn die Auswertung fehlschlägt.';
$string['choose'] = 'Wählen...';
$string['closerecievednoretrieve'] = 'Operation wurde vom ausführenden Server abgebrochen. Ressourcenlimits des ausführenden Servers könnten erschöpft sein.
Ursache: {$a}';
$string['compilation'] = 'Kompilierung:';
$string['correction'] = 'Verbesserung';
$string['deletesubmissions'] = 'VPL Abgaben löschen';
$string['deletesubmissions_help'] = 'Ob Abgaben in VPL Fragen, die im VPL gemacht wurden, bei der Auswertung der Frage entfernt werden sollen.<br>
ACHTUNG: Dies löscht alle Abgaben der betroffenen Teilnehmer/innen im Basis VPL wenn die Frage ausgewertet wird. Stellen Sie sicher, dass das Basis VPL nur für VPL Fragen verwendet wird.';
$string['editorfontsize'] = 'Editor Schriftgröße:';
$string['editoroptions'] = 'Editor Optionen';
$string['editortheme'] = 'Editor Theme:';
$string['errorvplgrade'] = 'VPL Bewertung ist nicht richtig gesetzt (sollte auf "Punkte" gesetzt werden).';
$string['evaluating'] = 'Diese Frage wird gerade bewertet...';
$string['evaluatingsoon'] = 'Diese Frage wird bald bewertet...';
$string['evaluatingsoontime'] = 'Diese Frage wird bald bewertet. Geschätzte Wartezeit: {$a}.';
$string['evaluation'] = 'Auswertung:';
$string['evaluationdetails'] = 'Details zur Auswertung:';
$string['evaluationerror'] = 'Fehler bei der Auswertung:';
$string['eventquestionasyncevaluated'] = 'VPL Frageauswertung via Adhoc Task';
$string['eventquestionevaluationfailed'] = 'Auswertung der VPL Frage fehlgeschlagen';
$string['eventquestionevaluationqueued'] = 'Auswertung der VPL Frage in Warteschleife zur Auswertung';
$string['execerror'] = 'Fehler beim Ausführen:';
$string['execfiles'] = 'Ausführbare Dateien';
$string['execfiles_help'] = 'Sie können hier ausführbare Dateien festlegen. Diese werden nur bei der Auswertung (und der Vorabprüfung, wenn es die gleichen Dateien sind) gesendet . Sie werden nicht beim Ausführen gesendet, außer sie wurden mit "beim Ausführen behalten" im VPL markiert.<br>
Um Dateien hinzuzufügen, fügen Sie diese dem VPL als ausführbare Dateien hinzu.<br>
Dateien, die mit "Von VPL erben" markiert wurden, werden nicht gespeichert und es wird der Inhalt der entsprechenden ausführbaren Dateien der VPL Aktivität verwendet.<br>
<em>Legacy</em>: Dateien die mit "UNUSED" beginnen, werden von den VPL Dateien vererbt. Bitte nutzen Sie das "Von VPL erben" Feature für diese Dateien.';
$string['execfilesevalsettings'] = 'Ausführbare Dateien und Einstellungen zur Auswertung';
$string['execution'] = 'Fehler beim Ausführen:';
$string['flagifproblem'] = 'Wenn Sie ein Problem mit der Frage vermuten, markieren Sie diese und melden Sie dies Ihrem Trainer.';
$string['gradehaschangedreload'] = 'Die Bewertung könnte gerade geändert worden sein. Sie können die <a {$a->aattr}>Seite neu laden</a>, um die neue Bewertung anzuzeigen.';
$string['gradetypeerror'] = 'Die Auswertung hat einen nicht-numberischen Wert zurückgegeben.';
$string['gradingmethod'] = 'Bewertung';
$string['gradingmethod_help'] = 'Bewertungsmethode für diese Frage festlegen.
<ul><li>Wenn "Alles oder nichts" gewählt ist, erhalten die Teilnehmer/innen entweder 100% oder 0% auf die Auswertung dieser Frage, abhängig davon, ob alle Teilbereiche richtig beantwortet wurden oder nicht.</li>
<li>Wenn "Skalierung" gewählt ist, sakliert die Bewertung für die Frage mit der Bewertung im VPL.</li></ul>';
$string['informationtext'] = 'VPL Frage';
$string['inheritfromvpl'] = 'Von VPL erben';
$string['lastservermessage'] = 'Letzte Nachricht vom ausführenden Server erhalten: "{$a}"';
$string['merge'] = 'Zusammenführung';
$string['noanswertag'] = 'Benötigter {{ANSWER}} Tag nicht gefunden. Bitte fügen Sie die Vorlage, in der der Code der Teilnehmer/innen eingefügt werden soll hinzu.';
$string['nogradeerror'] = 'Bei der Bewertung ist ein Fehler aufgetreten (keine Bewertung erhalten).
{$a}';
$string['nogradenoerror'] = 'Kein Fehler aufgetreten - erhaltene Bewertung: "{$a}".';
$string['noprecheck'] = 'Keine Vorab-Prüfung';
$string['noprevplrun'] = 'Diese VPL Vorlage hat keine pre_vpl_run.sh Datei!';
$string['noprevplrun_help'] = 'Für VPL Fragen muss die VPL Vorlage eine pre_vpl_run.sh ausführbare Datei enthalten. Der Inhalt dieser Datei wird in der <a href="https://moodle.org/plugins/qtype_vplquestion" target="_blank">Dokumentation</a> festgelegt.';
$string['noreqfile'] = 'Diese VPL Vorlage hat keine Pflicht-Datei!';
$string['noreqfile_help'] = 'Für VPL Fragen muss das Vorlage VPL eine Pflicht-Datei beinhalten. Die Frage funktioniert mit der aktuellen Vorlage nicht.';
$string['overwrite'] = 'Überschreiben';
$string['overwriteexecfile'] = 'Ersetzen';
$string['pleaseanswer'] = 'Bitte geben Sie eine Antwort ein.';
$string['pluginname'] = 'VPL Frage';
$string['pluginname_help'] = 'VPL Fragen ermöglichen das Erstellen von einfachen Programmierübungen.<br>
Sie basieren auf einem VPL, aber das Design ist in der Teilnehmer/innen-Ansicht einfacher gestaltet.';
$string['pluginnameadding'] = 'VPL Frage hinzufügen';
$string['pluginnameediting'] = 'VPL Frage bearbeiten';
$string['pluginnamesummary'] = 'VPL Fragen ermöglichen das Erstellen von einfachen Programmierübungen.<br>
Sie basieren auf einem VPL, aber das Design ist in der Teilnehmer/innen-Ansicht einfacher gestaltet.';
$string['possiblesolution'] = 'Lösungsvorschlag:';
$string['precheck'] = 'Vorab-Prüfung';
$string['precheckexecfiles'] = 'ausführbare Dateien Vorab-Prüfung';
$string['precheckexecfiles_help'] = 'Sie können hier ausführbare Dateien für die Vorab-Prüfung festlegen. Für weitere Informationen öffen Sie bitte die Dokumentation zu "Ausführbaren Dateien".';
$string['precheckhasownfiles'] = 'Vorab-Prüfung verwendet eigene ausführbare Dateien';
$string['precheckhassamefiles'] = 'Vorab-Prüfung verwendet die gleichen ausführbaren Dateien wie Prüfung';
$string['precheckhelp'] = 'Werten Sie Ihre Antwort basierend auf einem Teilbereich der Tests aus.';
$string['precheckisdebug'] = 'Vorabprüfung ist Debug';
$string['precheckpreference'] = 'Einstellungen Vorab-Prüfung';
$string['precheckpreference_help'] = 'Legt fest ob die Teilnehmer/innen Zugang zu einem "Vorabprüfung"-Button (mit unbegrenzter Nutzung) während des Frageversuchs haben.
<ul><li>"Keine Vorabprüfung": Es wird kein "Vorabprüfung"-Button zur Verfügung gestellt.</li>
<li>"Vorabprüfung ist Debug": Der "Vorabprüfung-Button agiert als "Debug"-Button in einem VPL. Bitte beachten Sie, dass dieser keine grafische Oberfläche bereitstellt.</li>
<li>"Vorabprüfung verwendet die gleichen ausführbaren Dateien wie Prüfung": Der "Vorabprüfung"-Button prüft die Antwort mit den oben angeführten ausführbaren Dateien.</li>
<li>"Vorabprüfung verwendet eigene ausführbare Dateien": Sie können spezielle ausführbare Dateien für die Vorabprüfung festlegen. Dies ist die empfohlene Option, da Sie einen Teilbereich der Tests festlegen können, die den Teilnehmer/innen während des Versuchs zur Verfügung stehen.</li></ul>';
$string['privacy:preference:defaultmark'] = 'Die Standardbewertung für eine bestimmte Frage.';
$string['privacy:preference:deletesubmissions'] = 'Ob VPL Abgaben bei der Bewertung verworfen werden sollen.';
$string['privacy:preference:gradingmethod'] = 'Ob die Bewertung mit der VPL Bewertung skalieren soll oder eine Alles-oder-Nichts Bewertung darstellt.';
$string['privacy:preference:penalty'] = 'Der Abzug für jeden falschen Versuch, wenn die Fragen im Modus "Mehrfachbeantwortung" oder "Direkte Auswertung" verwendet wird.';
$string['privacy:preference:precheckpreference'] = 'Das Verhalten des "Vorabprüfung"-Buttons.';
$string['privacy:preference:useasynceval'] = 'Ob die Frage asynchron mit einem Adhoc Task ausgewertet werden soll.';
$string['qvplbase'] = 'VPL Frage-Vorlage';
$string['run'] = 'Ausführen';
$string['scaling'] = 'Skalierung';
$string['selectavpl'] = '<a href="{$a}">Wählen Sie ein Vorlage VPL</a>, um die ausführbaren Dateien zu bearbeiten.';
$string['serverexecutionerrorstudentmessage'] = 'Dies könnte durch einen externen Faktor verursacht worden sein. Bitte führen Sie den Code erneut aus oder kontaktieren Sie Ihre/n Trainer/in.';
$string['serverexecutionerrorteachermessage'] = 'Dies könnte durch einen externen Faktor verursacht worden sein, was bedeutet, dass Sie wahrscheinlich keinen Fehler gemacht haben. Bitte führen Sie den Code erneut aus oder kontaktieren Sie den Support.';
$string['servermessages'] = 'Server Nachrichten:
{$a}';
$string['serverwassilent'] = 'Der ausführende Server hat nicht geantwortet - keine Nachricht erhalten';
$string['teachercorrection'] = 'Korrektur von Trainer/in';
$string['teachercorrection_help'] = 'Fügen Sie Ihre Korrektur für diese Frage hier ein.';
$string['templatecontext'] = 'Vorlage bearbeiten';
$string['templatevpl'] = 'VPL Vorlage';
$string['unexpectedendofws'] = 'Die Kommunikation mit dem ausführenden Server wurde unerwartet beendet.
Ursache: {$a}';
$string['unexpectederror'] = 'Bei der Auswertung ist ein unerwarteter Fehler aufgetreten.
{$a}';
$string['useasyncevaluation'] = 'Asynchrone Auswertung verwenden';
$string['useasyncevaluation_help'] = 'Wenn "Ja", dann wird die Auswertung der Frage von einem asynchronen Adhoc Task ausgeführt. Dies ermöglicht eine bessere Performance für Tests.';
$string['validateonsave'] = 'Überprüfen';
$string['validateonsave_help'] = 'Wenn aktiviert, wird der zur Verfügung gestellte Code vor dem Speichern der Frage mit den zur Verfügung gestellten Testcases überprüft.';
$string['vplnotavailablewarning'] = 'Warnung! Das VPL auf dem diese Frage basiert ist nicht verfügbar. Diese Frage könnte nicht richtig funktionieren.';
$string['vplnotfounderror'] = 'Fehler! Das VPL auf dem diese Frage basiert konnten nicht als Instanz erstellt werden: <br>{$a}';
$string['vplnotincoursewarning'] = 'Warnung! Das VPL auf dem diese Frage basiert befindet sich nicht in diesem Kurs. Die Frage könnte nicht richtig funktionieren.';
$string['wsconnectionerror'] = 'Es konnte keine Verbindung zum Server hergestellt werden.';
$string['wshandshakeerror'] = 'Websocket Handshake mit Server fehlgeschlagen.';
$string['wsreaderror'] = 'Lesen von Websocket fehlgeschlagen.';
