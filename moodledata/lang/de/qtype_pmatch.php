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
 * Strings for component 'qtype_pmatch', language 'de', version '4.5'.
 *
 * @package     qtype_pmatch
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add'] = 'Hinzufügen';
$string['addmoreanswerblanks'] = 'Leerfeld für {$a} weitere Antworten';
$string['addmoresynonymblanks'] = 'Leerfeld für {$a} weitere Synonyme';
$string['addtoanswer'] = 'Zur Antwort hinzufügen';
$string['allowsubscript'] = 'Benutzung von tiefgestellten Buchstaben erlauben';
$string['allowsuperscript'] = 'Benutzung von hochgestellten Buchstaben erlauben';
$string['amatiwsurl'] = 'Amati webservice URL';
$string['amatiwsurl_desc'] = 'URL für den Amati webservice';
$string['answer'] = 'Antwort: {$a}';
$string['answeringoptions'] = 'Optionen für Antworten';
$string['answermustbegiven'] = 'Sie müssen eine Antwort eingeben, wenn es eine Bewertung oder ein Feedback gibt.';
$string['answerno'] = 'Antwort {$a}';
$string['answeroptions'] = 'Antwortmöglichkeiten';
$string['anyotheranswer'] = 'Jede andere Antwort';
$string['apply_spellchecker_label'] = 'Rechtschreibung von Teilnehmer/in nicht überprüfen';
$string['apply_spellchecker_missing_language_attempt'] = 'Diese Frage ist so eingestellt, dass die Rechtschreibprüfung {$a} verwendet wird, aber diese Sprache ist auf diesem Server nicht verfügbar.';
$string['apply_spellchecker_missing_language_select'] = '{$a} (Warnung! Wörterbuch nicht auf diesem Server installiert)';
$string['apply_spellchecker_select'] = '{$a->name} ({$a->code})';
$string['applydictionarycheck'] = 'Rechtschreibprüfung';
$string['caseno'] = 'Nein, Groß- und Kleinschreibung ist unwichtig';
$string['casesensitive'] = 'Groß- und Kleinschreibung';
$string['caseyes'] = 'Ja, Groß- und Kleinschreibung muß stimmen';
$string['choosetoken'] = 'Token auswählen';
$string['combinedcontrolnamepmatch'] = 'Texteingabe';
$string['converttospace'] = 'Folgende Zeichen in Leerzeichen umwandeln';
$string['converttospace_help'] = 'Geben Sie Zeichen an, die das System in Leerzeichen umwandeln soll, bevor es den Musterabgleich durchführt. Dies eignet sich hervorragend zur Vereinfachung der Eingabe, wenn Satzzeichen keine Rolle spielen.';
$string['correctanswers'] = 'Richtige Antworten';
$string['env_dictmissing'] = 'Wörterbuch für die Rechtschreibprüfung {$a->langforspellchecker} fehlt für die installierte Sprache {$a->humanfriendlylang}';
$string['env_dictmissing2'] = 'Teilnehmer hat eine Rechtschreibprüfung in der Sprache \'{$a}\' probiert. Leider ist das aspell dictionary für diese Sprache nicht installiert.';
$string['env_dictok'] = 'Wörterbuch für die Rechtschreibprüfung {$a->langforspellchecker} für die installierte Sprache {$a->humanfriendlylang} ist installiert.';
$string['env_peclnormalisationmissing'] = 'PECL Package for Unicode Normalizer scheint nicht korrekt installiert zu sein';
$string['env_peclnormalisationok'] = 'PECL Package for Unicode Normalizer scheint korrekt installiert zu sein';
$string['env_pspellmissing'] = 'Pspell library scheint nicht korrekt installiert zu sein';
$string['env_pspellok'] = 'Pspell library scheint korrekt installiert zu sein';
$string['environmentcheck'] = 'Prüfung, ob die Anforderungen des Musterabgleich-Fragetyps vom Server erfüllt werden';
$string['err_ousupsubnotsupportedonmobile'] = 'Diese Frage erfordert Hoch- oder Tiefstellungen und funktioniert daher in dieser App noch nicht. Bitte beantworten Sie diese Frage im Webbrowser.';
$string['err_providepmatchexpression'] = 'Sie müssen hier einen pmatch-Ausdruck vorgeben.';
$string['error:blank'] = 'Die Antwort darf nicht leer sein';
$string['error:title'] = 'Fehler';
$string['errorfilecell'] = 'Die Datei benötigt mindestens zwei Zeilen (die erste Zeile ist die Kopfzeile, ab der zweiten Zeile folgen die Antworten).';
$string['errorfilecolumnbigger'] = 'Die Datei hat mehr als zwei Spalten. Bitte fügen Sie nur die erwartete Bewertung und die Antwort ein.';
$string['errorfilecolumnless'] = 'Die Datei benötigt mindestens zwei Spalten (die erste Spalte für die erwarteten Bewertungen, die zweite Spalte für die Antworten).';
$string['errorfileformat'] = 'Die Datei muss im Format .csv/.xlsx/.html/.json/.ods vorliegen.';
$string['errors'] = 'Beheben Sie bitte folgende Probleme: {$a}';
$string['exclude'] = 'Ausschliessen';
$string['extenddictionary'] = 'Diese Wörter zum Wörterbuch hinzufügen';
$string['filloutoneanswer'] = 'Benutzen Sie die Musterabgleich-Syntax, um die richtige Antwort zu beschreiben. Die Antworten der Teilnehmer/innen werden mit diesen der Reihe nach abgeglichen und der erste Treffer bestimmt die Punkteanzahl und das Feedback. Es muss mindestens ein Muster angegeben werden. <br> Bewertungsgenauigkeit:';
$string['forcelength'] = 'Wenn die Antwort länger als 20 Wörter ist';
$string['forcelengthno'] = 'nicht warnen';
$string['forcelengthyes'] = 'warnen, dass die Antwort zu lang ist, und den Studenten auffordern, sie zu kürzen';
$string['ie_illegaloptions'] = 'Unzulässige Option in Ausdruck "match<strong><em>{$a}</em></strong>()".';
$string['ie_lastsubcontenttypeorcharacter'] = 'Das Oder-Zeichen darf den Teiltext "{$a}" nicht beenden.';
$string['ie_lastsubcontenttypeworddelimiter'] = 'Das Wortbegrenzungszeichen darf den Teiltext "{$a}" nicht beenden.';
$string['ie_missingclosingbracket'] = 'Schließende Klammer fehlt im Code Fragment "{$a}".';
$string['ie_nofullstop'] = 'Punkte sind innerhalb von pmatch-Ausdrücken nicht erlaubt. (Dezimalpunkte innerhalb von Zahlen sind hingegen kein Problem.)';
$string['ie_nomatchfound'] = 'Fehler im Musterabgleichs-Code.';
$string['ie_unrecognisedexpression'] = 'Unerkannter Ausdruck.';
$string['ie_unrecognisedsubcontents'] = 'Nicht erkannter Teiltext im Code Fragment "{$a}".';
$string['inputareatoobig'] = 'Der Eingabebereich, der von "{$a}" bestimmt wurde, ist zu groß. Die Größe eines Eingabebereichs ist auf eine Breite von 150 und eine Höhe von 100 Zeichen beschränkt.';
$string['minresponses'] = 'Minimale Anzahl von Antworten';
$string['minresponses_desc'] = 'Mindestanzahl der bewerteten Antworten, die hochgeladen werden sollten, damit das Amati-System Regeln generieren kann';
$string['modelanswer'] = 'Beispielantwort';
$string['modelanswer_help'] = 'Geben Sie eine mögliche Antwort auf diese Frage an, die als richtig bewertet werden würde.';
$string['modelanswererror'] = '\'<strong>{$a}</strong>\' ist keine korrekte Antwort auf diese Frage.';
$string['nolanguagesfound'] = '<i>Keine Sprachen gefunden</i>';
$string['nomatchingsynonymforword'] = 'Keine Synonyme für das Wort angegeben. Löschen Sie das Wort oder geben Sie Synonyme an.';
$string['nomatchingwordforsynonym'] = 'Sie haben kein Wort angegeben, für welches das Synonym stellvertretend ist. Löschen Sie das Synonym oder geben Sie ein stellvertretendes Wort an.';
$string['notenoughanswers'] = 'Diese Frageart erfordert mindestens {$a} Antworten';
$string['or'] = 'Oder';
$string['pleaseenterananswer'] = 'Bitte geben Sie eine Antwort ein.';
$string['pluginname'] = 'Musterabgleich';
$string['pluginname_help'] = 'Der Teilnehmende schreibt einen kurzen Satz als Antwort auf eine Frage (diese kann ein Bild enthalten). Es kann mehrere richtige Antworten geben, welche unterschiedlich gewertet werden. Wenn die Groß- und Kleinschreibungsoption ausgewählt ist, kann es verschiedene Wertungen für "Wort" oder "wort" geben.';
$string['pluginname_link'] = 'question/type/pmatch';
$string['pluginnameadding'] = 'Musterabgleichs-Frage hinzufügen';
$string['pluginnameediting'] = 'Musterabgleichs-Frage bearbeiten';
$string['pluginnamesummary'] = 'Erlaubt eine kurze Antwort für einen oder mehrere Sätze, welche nach dem Abgleich mit mehreren Muster-Antworten (beschrieben durch die OU Musterabgleichs-Syntax) unterschiedlich bewertet werden können.';
$string['precedes'] = 'Steht vor';
$string['precedesclosely'] = 'Steht nahe vor';
$string['privacy:metadata'] = 'Der Fragetyp "Pattern Match" ermöglicht es den Autor/innen, Standardoptionen als Nutzereinstellungen festzulegen.';
$string['privacy:preference:allowsubscript'] = 'Ob tiefgestellte Zeichen im Antwortfeld verwendet werden.';
$string['privacy:preference:allowsuperscript'] = 'Ob hochgestellte Zeichen im Antwortfeld verwendet werden.';
$string['privacy:preference:applydictionarycheck'] = 'Ob die Rechtschreibprüfung für Antworten eingeschaltet werden soll.';
$string['privacy:preference:converttospace'] = 'Welche Zeichen in Leerzeichen umgewandelt werden sollen.';
$string['privacy:preference:defaultmark'] = 'Die Standardbewertung für eine bestimmte Frage.';
$string['privacy:preference:forcelength'] = 'Ob eine Warnung angezeigt werden soll, wenn die Antwort länger als 20 Worte ist.';
$string['privacy:preference:penalty'] = 'Abzüge für jeden falschen Versuch, wenn Fragen mit den Optionen \'Mehrfachbeantwortung (mit Abzügen)\' oder \'Mehrfachbeantwortung (mit Hinweisen)\' verwendet wird.';
$string['privacy:preference:sentencedividers'] = 'Welche Zeichen für die Markierung eines Satzendes definiert werden.';
$string['privacy:preference:testquestion_pagesize'] = 'Anzahl der Versuche von Musterabgleich-Fragen, die auf einer Seite angezeigt werden sollen.';
$string['privacy:preference:usecase'] = 'Ob Groß- und Kleinschreibung in der Antwort berücksichtigt werden soll.';
$string['processingxofy'] = 'Antwort {$a->row} von {$a->total} wird verarbeitet: {$a->response}';
$string['repeatedword'] = 'Dieses Wort taucht mehrmals in der Synonymliste auf.';
$string['resetrule'] = 'Regel zurücksetzen';
$string['row'] = 'Zeile';
$string['rule'] = 'Regel';
$string['ruleaccuracy'] = 'Oberhalb nicht übereinstimmende Antworten: {$a->responseneedmatch} <br>Korrekt von dieser Regel abgeglichen: {$a->correctlymatched}, <span class="{$a->class}">Falsch abgeglichen: {$a->incorrectlymatched}</span> <br>Unterhalb noch zu verarbeitende Antworten: {$a->responsestillprocess}';
$string['ruleaccuracylabel'] = 'Auswirkung auf Beispielantworten';
$string['rulecreationasst'] = 'Regelerstellungsassistent ein-/ausblenden';
$string['rulecreationtoomanyors'] = 'Zu viele "OR".';
$string['rulecreationtoomanyterms'] = 'Zu viele Terme.';
$string['rulesuggestionbutton'] = 'Abgleichsregeln automatisch generieren';
$string['rulesuggestiondescriptionnoresponses'] = 'Automatische Generierung passender Regeln durch Hochladen eines Satzes vorhandener bewerteter Antworten';
$string['rulesuggestionlabel'] = 'Regel-Vorschlag';
$string['savedxresponses'] = '{$a} Antworten gespeichert';
$string['sentencedividers'] = 'Satzendpunkt';
$string['sentencedividers_help'] = 'Geben Sie Zeichen an, die das System als Satzendpunkte behandeln soll. Standardmäßig ist \'?\' ein Satzendpunkt. Wenn Sie also "Hallo?" abgleichen möchten, würden Sie \'?\' aus diesem Feld entfernen und "match (hello\\?)" verwenden. Beachten Sie, dass \'?\' im Übereinstimmungsausdruck mit einem Escapezeichen ("\\") versehen werden muss, da es sich um ein Sonderzeichen handelt, während \'.\' und \'!\' dies nicht tun.';
$string['sentencedividers_noconvert'] = '\'<strong>{$a}</strong>\' wird als <strong>Satzendpunkt</strong> verwendet und kann nicht in ein Leerzeichen umgewandelt werden.';
$string['setting_installed_spell_check_dictionaries'] = 'Wörterbücher zur Rechtschreibprüfung';
$string['setting_installed_spell_check_dictionaries_des'] = 'Diese Einstellung steuert, welche Sprachoptionen für die Rechtschreibprüfung den Fragenautoren beim Erstellen oder Bearbeiten einer Frage angezeigt werden.';
$string['showcoverage'] = 'Abdeckung anzeigen';
$string['showingresponsesforquestion'] = 'Anzeige der Antworten für die ausgewählte Frage: {$a}';
$string['spellcheckerenchant'] = 'Enchant';
$string['spellcheckernull'] = 'Keine Rechtschreibprüfung verfügbar';
$string['spellcheckerpspell'] = 'Pspell';
$string['spellcheckertype'] = 'Bibliothek zur Rechtschreibprüfung';
$string['spellcheckertype_desc'] = 'Welche Bibliothek zur Rechtschreibprüfung soll verwendet werden? Diese Einstellung sollte bei der Installation des Plugins automatisch auf den korrekten Wert gesetzt werden.';
$string['spellingmistakes'] = 'Die folgenden Wörter sind nicht in unserem Wörterbuch: {$a}. Bitte korrigieren Sie die Rechtschreibung.';
$string['subsuponelineonly'] = 'Der Editor für hoch-/tiefgestellte Buchstaben kann nur in einer einzeiligen Eingabebox verwendet werden.';
$string['synonym'] = 'Synonyme';
$string['synonymcontainsillegalcharacters'] = 'Synonym enthält ungültige Zeichen';
$string['synonymsheader'] = 'Synonyme für Wörter in der Antwort festlegen';
$string['synonymsno'] = 'Synonym {$a}';
$string['template'] = 'Vorlage';
$string['term'] = 'Term';
$string['test'] = 'Testen';
$string['testquestionactualmark'] = 'Berechnete Bewertung';
$string['testquestionbacklink'] = 'Zurück zu Fragen überprüfen';
$string['testquestionchangescore'] = 'Wert ändern';
$string['testquestioncorrect'] = 'Korrekt';
$string['testquestiondeletedresponses'] = 'Die Antworten wurden erfolgreich gelöscht.';
$string['testquestioneditresponse'] = 'Antwort bearbeiten';
$string['testquestionexpectedfraction'] = 'Menschliche Bewertung';
$string['testquestionformcancelresponsebutton'] = 'Abbrechen';
$string['testquestionformdeletecheck'] = 'Wollen Sie diese Antworten wirklich löschen?';
$string['testquestionformdeletesubmit'] = 'Löschen';
$string['testquestionformduplicateresponse'] = 'Doppelte Antworten sind nicht erlaubt.';
$string['testquestionformerror_incorrectquestionid'] = 'Falsche Frage-ID oder keine Musterabgleich-Frage.';
$string['testquestionformheader'] = 'Bewertete Antworten zum Hochladen';
$string['testquestionforminfo'] = 'Sie sollten eine Tabellenkalkulationsdatei (.csv oder .xlsx) mit zwei Spalten hochladen. Die erste Spalte enthält die erwartete Bwertugn für diese Antwort, und die zweite Spalte sollte diese Antwort enthalten. Bei der ersten Zeile in der Datei wird davon ausgegangen, dass sie Spaltenüberschriften enthält, und sie wird ignoriert.';
$string['testquestionformnewresponsebutton'] = 'Neue Antwort hinzufügen';
$string['testquestionformsaveresponsebutton'] = 'Speichern';
$string['testquestionformtestsubmit'] = 'Ausgewählte Fragen überprüfen';
$string['testquestionformtitle'] = 'Werkzeug zur Prüfung von Musterabgleichs-Fragen';
$string['testquestionformuploadlabel'] = 'Bewertete Antworten';
$string['testquestionheader'] = 'Überprüfung von Frage: {$a}';
$string['testquestionidlabel'] = '#';
$string['testquestionincorrectlymarkedrights'] = 'missed negative';
$string['testquestionmatches'] = 'stimmt überein mit';
$string['testquestionresponse'] = 'Antworten';
$string['testquestionresponsesthatare'] = 'Antworten anzeigen, auf die folgendes zutrifft:';
$string['testquestionresultsheader'] = 'Prüfungsergebnisse: {$a}';
$string['testquestionresultssummary'] = 'Beispielantwort: {$a->total} <br>
     Korrekt bewertet: {$a->correct} ({$a->accuracy}%)<br>
     <span>Berechnete Bewertung höher als menschliche Bewertung: {$a->misspositive} (missed positive)</span><br>
     <span>Berechnete Bewertung tiefer als menschliche Bewertung: {$a->missnegative} (missed negative)</span>';
$string['testquestionruleslabel'] = 'Regeln';
$string['testquestionseletresponsex'] = 'Antwort auswählen {$a}';
$string['testquestiontool'] = 'Werkzeug zur Musterabgleichsprüfung';
$string['testquestionungraded'] = 'unbewertet';
$string['testquestionuploadanother'] = 'Eine weitere Datei hochladen';
$string['testquestionuploadresponses'] = 'Antworten hochladen';
$string['testquestionuploadrowhastwoitems'] = 'Jede Zeile sollte genau zwei Elemente enthalten, eine numerische Bewertung und eine Antwort. Zeile <b>{$a->row}</b> enthält <b>{$a->items}</b> Element(e).';
$string['testquestionuploadrownotvalidutf8'] = 'Die Antwort in Zeile <b>{$a}</b> enthält nicht erkannte Sonderzeichen. Die Eingabe muss gültiges UTF-8 sein.';
$string['testquestionuploadtheseresponses'] = 'Diese Antworten hochladen';
$string['testsubquestionx'] = 'Unterfrage {$a} prüfen';
$string['testthisquestion'] = 'Diese Frage prüfen';
$string['testthisquestionnoresmoreponsesrequired'] = 'Es werden mehr Antworten benötigt, damit das automatische Vorschlagen funktioniert. Es sind {$a->existing} Antworten vorhanden und Sie benötigen {$a->required}.';
$string['testthisquestionnoresponsesfound'] = 'Es wurden keine Antworten gefunden.';
$string['testthisquestionnorulesreturned'] = 'Es wurden keine Regeln vorgeschlagen.';
$string['toomanywords'] = 'Ihre Antwort ist zu lang. Reduzieren Sie die Antwort auf weniger als 20 Wörter.';
$string['tryrule'] = 'Regel ausprobieren';
$string['tryrulecoverage'] = 'Reichweite';
$string['tryrulegradeerror'] = 'Regel ausprobieren funktioniert nur, wenn die Bewertung auf 100% oder Keine eingestellt ist.';
$string['tryrulenogradedresponses'] = 'Es gibt keine bewerteten Antworten, bitte bewerten Sie Ihren Antwortsatz.';
$string['tryrulenomatch'] = 'Diese Regel stimmt mit keiner bewerteten Antwort überein.';
$string['tryrulenovalidrule'] = 'Diese Regel ist kein gültiger pmatch-Ausdruck.';
$string['unknownlanguagex'] = 'Unbekannte Sprache ({$a})';
$string['unparseable'] = 'Wir verstehen die Buchstaben oder Satzzeichen bei "{$a}" nicht.';
$string['wordcontainsillegalcharacters'] = 'Wort enthält ungültige Zeichen.';
$string['wordwithsynonym'] = 'Wort';
$string['xresponsesduplicated'] = 'Die folgenden {$a} Antworten wurden dupliziert';
$string['xresponsesproblems'] = 'Die folgenden {$a} Antworten wurden nicht gespeichert';
$string['xrulesuggested'] = '{$a} neue Antwort(en) wurde(n) vorgeschlagen und an das Ende der vorhandenen Antworten angefügt';
