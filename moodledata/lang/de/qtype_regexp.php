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
 * Strings for component 'qtype_regexp', language 'de', version '4.5'.
 *
 * @package     qtype_regexp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addahint'] = 'Hinweis hinzufügen';
$string['addingregexp'] = 'Regulärer-Ausdruck-Frage hinzufügen';
$string['addmoreanswers'] = '{no} Antwort(en) hinzufügen';
$string['answer'] = 'Antwort:';
$string['answer1mustbegiven'] = 'Die Antwort 1 darf nicht leer sein.';
$string['answermustbegiven'] = 'Sie müssen eine Kurzantwort angeben, falls es eine Bewertung oder ein Feedback geben soll.';
$string['answerno'] = 'Antwort {$a}';
$string['bestcorrectansweris'] = '<strong>Die beste Antwort ist:</strong><br />{$a}';
$string['calculatealternate'] = 'Andere zulässige Antworten (neu) errechnen';
$string['caseno'] = 'Groß- und Kleinschreibung ist unwichtig';
$string['casesensitive'] = 'Groß- und Kleinschreibung';
$string['caseyes'] = 'Groß- und Kleinschreibung muss stimmen';
$string['clicktosubmit'] = 'Klicken Sie die Taste <strong>Prüfen</strong>, um diese <strong>korrekte</strong> Antwort abzusenden.';
$string['correctansweris'] = '<strong>Die richtige Antwort ist:</strong><br />{$a}.';
$string['correctanswersare'] = '<strong>Die anderen zulässigen Antworten sind:</strong>';
$string['editingregexp'] = 'Regulärer-Ausdruck-Frage bearbeiten';
$string['filloutoneanswer'] = '<strong>Antwort 1</strong> muss richtig sein (Bewertung = 100%) und wird <strong>nicht</strong> als regulärer Ausdruck analysiert.';
$string['hidealternate'] = 'Die anderen zulässigen Fragen verbergen';
$string['illegalcharacters'] = 'Fehler: Bei den Antworten mit einer Bewertung höher als 0%, sind diese <em>unmaskierten</em> Metazeichen nicht erlaubt:<strong>{$a}</strong>';
$string['letter'] = 'Buchstabe';
$string['misplacedwords'] = 'Falsch platzierte Wörter';
$string['notenoughanswers'] = 'Dieser Fragetyp benötigt mindestens eine Antwort';
$string['penaltyforeachincorrecttry'] = 'Abzug für einen falschen Versuch oder Kauf eines Buchstabens oder Worts';
$string['penaltyforeachincorrecttry_help'] = 'Wenn Sie Ihre Fragen mit dem Frageverhalten "Mehrfachbeantwortung (mit Hinweisen)" oder "Mehrfachbeantwortung (mit Abzügen)" ausführen, damit der Schüler mehrere Versuche hat, die Frage richtig zu beantworten, steuert diese Option, wie stark sie für jeden falschen Versuch bestraft werden.

Der Abzug ist ein Anteil der Gesamtpunktzahl der Frage, wenn also die Frage drei Punkte wert ist und die Strafe 0,33333333 beträgt, dann erhält der Studierende 3 Punkte, wenn er die Frage beim ersten Mal richtig beantwortet hat, 2 wenn sie beim zweiten Versuch und 1, sie beim dritten Versuch richtig beantwortet wird.

Wenn Sie für dise Frage den Hilfe-Button-Modus auf <strong>Buchstabe</strong> oder <strong>Wort</strong> gesetzt haben,
 wird derselbe Abzug jedesmal angewendet, wenn der Button <strong>Buchstabe/Wort kaufen</strong> geklickt wird';
$string['pleaseenterananswer'] = 'Geben Sie eine Antwort ein.';
$string['pluginname'] = 'Kurzantwort vom Typ regulärer Ausdruck';
$string['pluginname_help'] = 'Klicken Sie mit der rechten Maustaste auf den Link <em>Hilfe</ em>, um die Hilfeseite in der Moodle-Dokumentation zu öffnen.';
$string['pluginname_link'] = 'question/type/regexp';
$string['pluginnameadding'] = 'Regulärer-Ausdruck-Frage hinzufügen';
$string['pluginnameediting'] = 'Regulärer-Ausdruck-Frage bearbeiten';
$string['pluginnamesummary'] = 'Kurzantwort-Frage bei der die Antworten der Studierenden gegen reguläre Ausdrücken geprüft werden';
$string['privacy:metadata'] = 'Der Fragetyp \'Kurzantwort vom Typ regulärer Ausdruck\' speichert keine personenbezogenen Daten.';
$string['regexp'] = 'Kurzantwort vom Typ <br />regulärer Ausdruck';
$string['regexp_help'] = 'Klicken Sie mit der rechten Maustaste auf den Link <em>Hilfe</ em>, um die Hilfeseite in der Moodle-Dokumentation zu öffnen.';
$string['regexp_link'] = 'question/type/regexp';
$string['regexperror'] = 'Fehler in Ihrem regulären Ausdruck: <strong>{$a}</strong>';
$string['regexperrorclose'] = 'schließende: <strong>{$a}</strong>';
$string['regexperrornopermutations'] = 'Fehler: In Ihren doppelten eckigen Klammern sind keine permutierten Wörter enthalten!';
$string['regexperroroddunderscores'] = 'Fehler: Es gibt eine ungerade Anzahl von Unterstrichen innerhalb Ihrer doppelten eckigen Klammern!';
$string['regexperroropen'] = 'öffnende: <strong>{$a}</strong>';
$string['regexperrorparen'] = 'Fehler: Überprüfen Sie Ihre runden und eckigen Klammern!';
$string['regexperrorsqbrack'] = 'Eckige Klammern';
$string['regexperrortoomanypermutations'] = 'Fehler: Pro Antwort dürfen maximal 2 Permutationssätze erlaubt sein (doppelte eckige Klammern)!';
$string['regexpsensitive'] = 'Reguläre Ausdrücke verwenden, um die Antworten zu analysieren';
$string['regexpsummary'] = 'Kurzantwort-Frage bei der die Antworten der Studierenden gegen reguläre Ausdrücken geprüft werden';
$string['settingsformultipletries'] = 'Einstellungen für mehrere Versuche und Kauf von Buchstaben oder Worten';
$string['showhidealternate'] = 'Die anderen zulässigen Antworten anzeigen/verbergen';
$string['showhidealternate_help'] = 'Alle zulässigen Antworten in diesem Formular berechnen und anzeigen? Dies kann einige Zeit auf Ihrem Server beanspruchen, abhängig von der Anzahl und Komplexität der regulären Ausdrücke, die Sie in den Antwortfeldern eingegeben haben!

Andererseits ist es die empfohlene Methode, um zu überprüfen, ob Ihre Ausdrücke für "richtige Antworten" korrekt geschrieben sind.';
$string['studentshowalternate'] = 'Alternativen anzeigen';
$string['studentshowalternate_help'] = '<strong>Alle</strong> anderen zulässigen Antworten auf der Überprüfungsseite den Studierenden anzeigen? Wenn es viele automatisch generierten anderen zulässigen Antworten gibt, die alle angezeigt werden, kann die Überprüfungsseite ziemlich lang werden…';
$string['usehint'] = 'Hilfe-Button-Modus';
$string['usehint_help'] = 'Wenn ein anderer Modus als <strong>keine</strong> ausgewählt ist, wird eine Taste  angezeigt, mit dem die Teilnehmer/innen den nächsten Buchstaben oder das nächste Wort erhalten können.

Im Modus <strong>Mehrfachbeantwortung (mit Abzügen)</strong> wird auf der angezeigten Taste "<strong>Nächsten Buchstaben kaufen</strong>" oder "<strong>Nächstes Wort kaufen</strong>" angezeigt, entsprechend dem ausgewählten Modus. Um die "Kosten" für den Kauf eines Buchstabens oder Wortes festzulegen, siehe die Einstellungen zu <strong>Abzug für einen falschen Versuch oder Kauf eines Buchstabens oder Worts</strong> weiter unten auf dieser Seite.

Im Modus <strong>Mehrfachbeantwortung (ohne Abzüge)</strong> wird auf der angezeigten Taste "<strong>Nächsten Buchstaben erhalten</strong>" oder "<strong>Nächstes Wort erhalten</strong>" angezeigt.

Standardmäßig ist der Wert des Hilfetastenmodus auf <b>Keine</b> eingestellt.';
$string['word'] = 'Wort';
$string['wordorpunctuation'] = 'Wort oder Zeichensetzung';
$string['wrongwords'] = 'Falsche Wörter';
