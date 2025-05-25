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
 * Strings for component 'qtype_essayautograde', language 'de', version '4.5'.
 *
 * @package     qtype_essayautograde
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmultiplebands'] = '{$a} weitere Notenbereiche hinzufügen';
$string['addmultiplephrases'] = '{$a} weitere Ausdrücke hinzufügen';
$string['addpartialgrades'] = 'Teilnoten geben?';
$string['addpartialgrades_help'] = 'Falls diese Option ausgewählt ist, werden Noten für teilweise abgeschlossene Notenbereiche gegeben.';
$string['addsingleband'] = 'Einen weiteren Notenbereich hinzufügen';
$string['addsinglephrase'] = 'Einen weiteren Ausdruck hinzufügen';
$string['allowsimilarity'] = 'Ähnlichkeit zum Beispieltext erlauben?';
$string['allowsimilarity_help'] = 'Der maximale Grad an Ähnlichkeit, der zwischen der Antwort und der Antwortvorlage oder der Musterantwort zulässig ist. Je höher dieser Wert ist, desto ähnlicher kann die Antwort der Vorlage oder dem Muster sein. Umgekehrt gilt: Je niedriger der Wert, desto mehr muss sich die Antwort  von der Vorlage oder dem Muster unterscheiden. Die Anpassung dieses Wertes kann sich auf das Maß an Originalität und Detailgenauigkeit auswirken, das in den Antworten verlangt wird.';
$string['allowsimilaritypercent'] = 'Ja - bis zu {$a}% Ähnlichkeit erlauben';
$string['auto'] = 'Automatisch';
$string['autograding'] = 'Auto-Benotung';
$string['chars'] = 'Zeichen';
$string['charspersentence'] = 'Zeichen pro Satz';
$string['commonerror'] = 'Üblicher Fehler';
$string['commonerrors'] = 'Übliche Fehler';
$string['commonerrors_help'] = 'Die üblichen Fehler sind im "Fehlerverzeichnis" dieser Frage definiert.';
$string['correctresponse'] = 'Um die volle Punktzahl für diese Frage zu bekommen, müssen Sie die folgenden Kriterien beachten:';
$string['countcharslabel'] = 'Zeichensumme';
$string['countfileslabel'] = 'Anzahl Dateien';
$string['countparagraphslabel'] = 'Anzahl Abschnitte';
$string['countsentenceslabel'] = 'Anzahl Sätze';
$string['countwordslabel'] = 'Aktuelle Wörter Anzahl';
$string['crop'] = 'Abschneiden';
$string['enableautograde'] = 'Automatische Benotung aktivieren';
$string['enableautograde_help'] = 'Automatische Benotung aktivieren oder deaktivieren';
$string['errorbehavior'] = 'Fehleranalyse Verhalten';
$string['errorbehavior_help'] = 'Diese Einstellungen spezifizieren das Analyseverhalten für Einträge im Fehlerglossar.';
$string['errorcmid'] = 'Fehlerglossar';
$string['errorcmid_help'] = 'Wählen Sie ein Glossar aus, das die üblichen Fehler enthält.

Jedes Mal, wenn einer dieser Fehler in der Essay-Antwort gefunden wird, wird die angegebene Fehlerpunktzahl von der Note der Teilnehmer/innen für diese Frage abgezogen.';
$string['errorpercent'] = 'Fehlerpunktzahl pro Fehler';
$string['errorpercent_help'] = 'Wählen Sie aus, wieviel Prozent von der Gesamtnote für jeden in der Antwort gefundenen Fehler abgezogen werden sollen.';
$string['excludecommonerrors'] = 'Vermeide die üblichen Fehler aus <a href="{$a->href}" target="_blank">{$a->name}</a>';
$string['explanationautopercent'] = 'Da dies außerhalb des normalen Prozentbereiches liegt, wurde es auf {$a->autopercent}% geändert.';
$string['explanationcommonerror'] = '{$a->percent}% für "{$a->error}", was ein üblicher Fehler ist';
$string['explanationcompleteband'] = '{$a->percent}% für die Vervollständigung dieses Notenbereiches [{$a->gradeband}]';
$string['explanationdatetime'] = 'am %Y %b %d (%a) um %H:%M';
$string['explanationfiles'] = '{$a->percent}% für die Abgabe von {$a->filecount} / {$a->itemcount} Dateien';
$string['explanationfirstitems'] = '{$a->percent}% für den ersten {$a->count} {$a->itemtype}';
$string['explanationgrade'] = 'Deshalb ist die computergenerierte Note für dieses Essay {$a->finalgrade} = ({$a->finalpercent}% von {$a->maxgrade}).';
$string['explanationitems'] = '{$a->percent}% für {$a->count} {$a->itemtype}';
$string['explanationmaxgrade'] = 'Die Höchstnote für diese Frage ist {$a->maxgrade}.';
$string['explanationnotenough'] = '{$a->count} {$a->itemtype} ist weniger als der Minimalwert der erreicht werden muss um eine Note zu bekommen.';
$string['explanationoverride'] = 'Die Note für das Essay wurde später, {$a->datetime}, auf {$a->manualgrade} gesetzt.';
$string['explanationpartialband'] = '{$a->percent}% für die teilweise Vervollständigung der Notenbereiches [{$a->gradeband}]';
$string['explanationpenalty'] = 'Aber, {$a->penaltytext} wurde für das Überprüfen der Antwort vor der Abgabe abgezogen';
$string['explanationrawpercent'] = 'Der rechnerische Prozentsatz für diesen Text ist {$a->rawpercent}% <br /> = ({$a->details}).';
$string['explanationremainingitems'] = '{$a->percent}% für die verbleibenden {$a->count} {$a->itemtype}';
$string['explanationseecomment'] = '(siehe Kommentar unten)';
$string['explanationtargetphrase'] = '{$a->percent}% für die Benutzung des Begriffes "{$a->phrase}"';
$string['feedback'] = 'Feedback';
$string['feedbackhintbreaks'] = 'Haben Sie zu viele Zeilenumbrüche benutzt?';
$string['feedbackhintchars'] = 'Haben Sie die benötigte Anzahl Zeichen geschrieben?';
$string['feedbackhinterrors'] = 'Haben Sie irgendwelche üblichen Fehler gemacht?';
$string['feedbackhintfiles'] = 'Haben Sie die geforderte Anzahl Dateien hochgeladen?';
$string['feedbackhintparagraphs'] = 'Haben Sie die benötigte Anzahl Absätze geschrieben?';
$string['feedbackhintphrases'] = 'Haben Sie alle benötigten Ausdrücke benutzt?';
$string['feedbackhints'] = 'Tipps um Ihre Note zu verbessern';
$string['feedbackhintsentences'] = 'Haben Sie die benötigte Anzahl Sätze geschrieben?';
$string['feedbackhintwords'] = 'Haben Sie das Wortanzahl-Ziel erreicht?';
$string['files'] = 'Dateien';
$string['fogindex'] = 'Gunning Fog Index';
$string['fogindex_help'] = 'Der Gunning-Fog-Index ist ein Maß der Lesbarkeit von Texten. Er wird mit der folgenden Formel berechnet.

* ((Worte pro Satz) + (Lange Worte pro Satz)) x 0.4

Für mehr Informationen siehe: <https://en.wikipedia.org/wiki/Gunning_fog_index>';
$string['forceupgrade'] = 'Upgrade erzwingen';
$string['gradeband'] = 'Notenbereich [{no}]';
$string['gradeband_help'] = 'Geben Sie die Mindestanzahl zählbarer Elemente an, die für diesen Bereich angewendet werden soll, und die Note, die vergeben werden soll, wenn dieser Bereich angewendet wird.';
$string['gradebands'] = 'Notenbereich';
$string['gradecalculation'] = 'Noten Berechnung';
$string['gradeforthisquestion'] = 'Note für diese Frage';
$string['hidden'] = 'Ausgeblendet';
$string['hidesample'] = 'Beispiel verstecken';
$string['itemcount'] = 'Erwartete Anzahl von Elementen';
$string['itemcount_help'] = 'Die Mindestanzahl zählbarer Elemente, die im Essaytext enthalten sein muss, um die Höchstnote für diese Frage zu erreichen.

Beachten Sie, dass dieser Wert durch die unten definierten Notenbereiche, falls vorhanden, unwirksam gemacht werden kann.';
$string['itemtype'] = 'Art der zählbaren Elemente';
$string['itemtype_help'] = 'Wählen Sie aus, welche Art von Element bei der automatischen Benotung benutzt werden.';
$string['lexicaldensity'] = 'Lexikalische Dichte';
$string['lexicaldensity_help'] = 'Die Lexikalische Dichte ist ein prozentualer Wert die mit der folgenden Formel berechnet wird:

* 100 x (Anzahl einzigartiger Wörter)/(Gesamtanzahl Wörter)

Also, ein Essay bei dem sich viele Wörter wiederholen hat eine niedrige lexikalische Dichte, während ein Essay mit vielen einzigartigen Wörtern eine hohe lexikalische Dichte hat.';
$string['longwords'] = 'Lange Wörter';
$string['longwords_help'] = '"Lange Wörter" sind Wörter mit drei oder mehr Silben. Beachten Sie, dass der Algorithmus zur Bestimmung der Silbenzahl nur ungefähre Ergebnisse liefert.';
$string['longwordspersentence'] = 'Lange Wörter per Satz';
$string['maximumfilecount'] = 'Maximale Anzahl an Dateien: {$a}';
$string['maximumfilesize'] = 'Maximale Dateigröße: {$a}';
$string['maxwordserror'] = 'Sie haben die Wortgrenze überschritten!';
$string['maxwordslabel'] = 'Maximale Wortanzahl';
$string['maxwordswarning'] = 'Oops, Sie haben zu viele Wörter geschrieben!';
$string['minimumfilecount'] = 'Minimale Anzahl an Dateien: {$a}';
$string['minwordserror'] = 'Sie haben die Wortuntergrenze noch nicht erreicht.';
$string['minwordslabel'] = 'Minimale Wortanzahl';
$string['minwordswarning'] = 'Machen Sie weiter! Sie haben noch nicht genügend  Wörter geschrieben.';
$string['missing'] = 'Fehlend';
$string['overflow'] = 'Überlauf';
$string['paragraphs'] = 'Absätze';
$string['phrasebehavior'] = 'Zielausdruck [{no}] Verhalten';
$string['phrasebehavior_help'] = 'Diese Einstellungen verbessern das Vergleichsverhalten für diesen Zielausdruck';
$string['phrasecasesensitiveno'] = 'Vergleich beachtet keine Groß-/Kleinschreibung';
$string['phrasecasesensitiveyes'] = 'Vergleich beachtet Groß-/Kleinschreibung';
$string['phrasefullmatchno'] = 'Ganze oder Teilwörter vergleichen';
$string['phrasefullmatchyes'] = 'Nur ganze Wörter vergleichen';
$string['phraseignorebreaksno'] = 'Zeilenumbrüche erkennen.';
$string['phraseignorebreaksyes'] = 'Zeilenumbrüche ignorieren.';
$string['phrasematch'] = 'Wenn';
$string['phrasepercent'] = 'benutzt wird, verleihe';
$string['pleaseattachfiles'] = 'Bitte laden Sie die benötigte Anzahl and Dateien hoch.';
$string['pleaseinputtext'] = 'Bitte schreiben Sie ihre Antwort in das Textfeld.';
$string['pluginname'] = 'Essay (Auto-Noten)';
$string['pluginname_help'] = 'Als Antwort auf eine Frage, die auch Bilder enthalten kann, schreiben Teilnehmer/innen eine Antwort über einen oder mehrere Absätze. Zu Anfang wird eine automatische Note generiert, die auf der Anzahl der Zeichen, Wörter, Sätze oder Absätze und der Anwesenheit bestimmter Zielausdrücke basiert. Die automatische Note kann später von den Trainer/innen überschreiben werden.';
$string['pluginname_link'] = 'question/type/essayautograde';
$string['pluginnameadding'] = 'Hinzufügen einer Essay (Auto-Noten) Frage';
$string['pluginnameediting'] = 'Bearbeiten einer Essay (Auto-Noten) Frage';
$string['pluginnamesummary'] = 'Dies erlaubt die Einreichung von Essays mit der Länge mehrere Sätze oder Absätze als Antwort auf eine Frage. Das Essay wird automatisch benotet. Die Note kann später manuell überschrieben werden.';
$string['present'] = 'Vorhanden';
$string['privacy:metadata'] = 'Das Essay (Auto-Noten) Fragen Plugin speichert keine persönlichen Daten.';
$string['requiredfilecount'] = 'Benötige Dateianzahl: {$a}';
$string['responseisnotoriginal'] = 'Bitte schreiben Sie einen originelleren Text.';
$string['responsesample'] = 'Beispiel Antwort';
$string['responsesample_help'] = 'Der Text hier wird als Beispielantwort gezeigt, wenn die Teilnehmer/innen auf den Link "Beispiel anzeigen" im Fragentext klicken.';
$string['responsesampleformat'] = 'Essay Format Beispiel';
$string['responsesampleformat_help'] = 'Wählen Sie das Format der Beispielantwort aus.';
$string['rewriteresubmit'] = 'und nochmal abschicken.';
$string['rewriteresubmitbreaks'] = 'Alle Zeilenumbrüche entfernen';
$string['rewriteresubmitchars'] = 'mehr Zeichen hinzufügen';
$string['rewriteresubmiterrors'] = 'Übliche Fehler beheben.';
$string['rewriteresubmitfiles'] = 'Benötige Dateianzahl anhängen';
$string['rewriteresubmitjoin'] = ',';
$string['rewriteresubmitparagraphs'] = 'mehr Absätze hinzufügen';
$string['rewriteresubmitphrases'] = 'fehlende Ausdrücke hinzufügen';
$string['rewriteresubmitsentences'] = 'mehr Sätze hinzufügen';
$string['rewriteresubmitwords'] = 'mehr Wörter hinzufügen';
$string['sentences'] = 'Sätze';
$string['sentencesperparagraph'] = 'Sätze pro Absatz';
$string['showcalculation'] = 'Notenberechnung anzeigen?';
$string['showcalculation_help'] = 'Falls diese Option aktiviert ist wird eine Erklärung über die Berechnung der automatischen Noten auf den Benotungs- und Überprüfungsseiten angezeigt.';
$string['showfeedback'] = 'Teilnehmerfeedback anzeigen?';
$string['showfeedback_help'] = 'Falls diese Option aktiviert ist, wird eine Tabelle mit umsetzbarem Feedback auf den Benotungs- und Überprüfungsseiten angezeigt. Umsetzbares Feedback ist Feedback, das den Teilnehmer/innen sagt, was verbessert werden muss.';
$string['showgradebands'] = 'Notenbereiche anzeigen?';
$string['showgradebands_help'] = 'Falls diese Option aktiviert ist werden die Details der Notenbereiche auf den Benotungs- und Überprüfungsseiten angezeigt werden.';
$string['showsample'] = 'Beispiel  anzeigen';
$string['showtargetphrases'] = 'Zielausdrücke anzeigen?';
$string['showtargetphrases_help'] = 'Falls diese Option aktiviert ist werden die Details der Zielausdrücke auf den Benotungs- und Überprüfungsseiten angezeigt werden.';
$string['showtextstats'] = 'Textstatistiken anzeigen?';
$string['showtextstats_help'] = 'Falls diese Option aktiviert ist werden Statistiken über den Text angezeigt werden?';
$string['showtostudentsonly'] = 'Ja, nur für Teilnehmer/innen anzeigen';
$string['showtoteachersandstudents'] = 'Ja, für Teilnehmer/innen und Trainer/innen anzeigen';
$string['showtoteachersonly'] = 'Ja, nur für Trainer/innen anzeigen';
$string['targetphrase'] = 'Zielausdruck [{no}]';
$string['targetphrase_help'] = 'Geben Sie die Note an, die hinzugefügt wird, wenn dieser Zielausdruck im Essay vorkommt.

> **z.B.** Falls [Endlich] benutzt wird, verleihe [10% der Aufgabennote.]

Der Zielausdruck kann ein einzelner Ausdruck oder eine List von Ausdrücken sein, die durch ein Koma "," oder das Wort "OR" (groß geschrieben) getrennt sind.

> **z.B.** Falls [Endlich OR Letztendlich] benutzt wird, verleihe [10% der Aufgabennote.]

Ein Fragezeichen "?" im Ausdruck entspricht irgendeinem einzelnen Zeichen, während ein Asterisk "*" für eine unbestimmte Anzahl Zeichen (auch null Zeichen) steht.

> **z.B.** Falls [Erst\\*Dann\\*Letztendlich] benutzt wird, verleihe [10% der Aufgabennote.]';
$string['targetphrases'] = 'Zielausdrücke';
$string['textstatistics'] = 'Textstatisiken';
$string['textstatitems'] = 'Statistische Elemente';
$string['textstatitems_help'] = 'Alle hier ausgewählten Elemente werden in den Textstatistiken auf den Benotungs- und Überprüfungsseiten angezeigt werden.';
$string['uniquewords'] = 'Einzigartige Wörter';
$string['uploadfiles'] = 'Dateien hochladen';
$string['visible'] = 'Eingeblendet';
$string['words'] = 'Wörter';
$string['wordspersentence'] = 'Wörter pro Satz';
