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
 * Strings for component 'qtype_varnumericset', language 'de', version '4.5'.
 *
 * @package     qtype_varnumericset
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreanswerblanks'] = 'Leerzeichen für {no} weitere Antworten';
$string['addmorevariants'] = '{$a} Leerstellen hinzufügen für weitere Varianten';
$string['addmorevars'] = 'Füge {no} Leerzeichen ein für weiter Variable';
$string['ae_numericallycorrect'] = 'Die Antwort ist fast richtig. Du hast den richtigen Wert und er ist richtig gerundet.';
$string['ae_numericallycorrectandwrongformat'] = 'Die Antwort ist fast richtig. Du hast den richtigen Wert und er ist richtig gerundet. Aber die Angabe ist nicht in wissenschaftlicher Schreibweise.';
$string['ae_roundingincorrect'] = 'Die Antwort ist fast richtig, aber nicht richtig gerundet.';
$string['ae_roundingincorrectandwrongformat'] = 'Die Antwort ist fast richtig aber nicht richtig gerundet die Angabe ist nicht in wissenschaftlicher Schreibweise.';
$string['ae_toomanysigfigs'] = 'Ihre Antwort ist fast richtig, aber sie enthält zu viele Zahlen.';
$string['ae_toomanysigfigsandwrongformat'] = 'Ihre Antwort ist fast richtig, aber sie enthält zu viele Zahlen und ist nicht in wissenschaftlicher Notation.';
$string['ae_wrongbyfactorof10'] = 'Ihre Antwort ist fast richtig, aber sie ist um den Faktor 10 falsch.';
$string['ae_wrongbyfactorof10andwrongformat'] = 'Ihre Antwort ist fast richtig, aber sie ist um den Faktor 10 falsch und sie ist nicht in wissenschaftlicher Notation.';
$string['answer'] = 'Antwort: {$a}';
$string['answermustbegiven'] = 'Sie müssen eine Antwort eingeben, wenn es eine Note oder Rückmeldung gibt.';
$string['answerno'] = 'Antwort: {$a}';
$string['autofirehdr'] = 'Feedback und Teilbewertung angeben, wenn die Antwort {$a} teilweise falsch ist';
$string['calculatewhen'] = 'Wann sollen berechnete Werte berechnet werden?';
$string['cannotrecalculate'] = 'Werte für berechnete Variablen können nicht neu berechnet werden, da Fehler im Formular vorhanden sind. Korrigieren Sie die Fehler, und dann können Sie die Werte neu berechnen.';
$string['checknumerical'] = 'Wenn korrekt berechnet';
$string['checkpowerof10'] = 'Wenn Faktor 10 deaktiviert ist';
$string['checkrounding'] = 'Wenn falsch gerundet wurde';
$string['checkscinotation'] = 'Wenn wissenschaftliche Notation gefordert, aber nicht benutzt wurde';
$string['correctansweris'] = 'Die richtige Antwort lautet: {$a}';
$string['correctansweriserror'] = '{$a->answer} <sup>+</sup>/<sub>-</sub> {$a->error}';
$string['correctanswerissigfigs'] = '{$a->answer} ({$a->sigfigs} significant figures)';
$string['correctanswers'] = 'Richtige Antworten';
$string['err_ousupsubnotsupportedonmobile'] = 'Diese Frage erfordert hochgestellte oder tiefgestellte Zeichen und funktioniert noch nicht in dieser App. Beantworten Sie diese Frage bitte im Webbrowser.';
$string['error'] = 'Akzeptierter Abweichung +/-';
$string['errorreportedbyexpressionevaluator'] = 'Ausdrucksbewertungsfehler: {$a}';
$string['expectingassignment'] = 'Sie müssen einen mathematischen Ausdruck verwenden, um einer \'berechneten Variablen\' einen Wert zuzuweisen.';
$string['expectingvariablename'] = 'Hier wird ein Variablenname erwartet';
$string['expressionevaluatesasinfinite'] = 'Das Ergebnis ist unendlich.';
$string['expressionevaluatesasnan'] = 'Ergebnis ist keine Zahl.';
$string['expressionmustevaluatetoanumber'] = 'Sie sollten einen Ausdruck eingeben, der hier zu einer Zahl ausgewertet wird, nicht eine Zuweisung.';
$string['filloutoneanswer'] = 'Sie müssen mindestens eine mögliche Antwort angeben. Antworten, die leer gelassen wurden, werden nicht verwendet. \'*\' kann als Platzhalter für eine beliebige Zahl verwendet werden. Die erste passende Antwort wird verwendet, um die Punktzahl und das Feedback zu bestimmen.';
$string['forallanswers'] = 'Für alle Antworten';
$string['hintoverride'] = 'Wenn eine automatische Prüfung ausgelöst wird, verwenden Sie diese Strafe anstelle der Standardstrafe und zeigen Sie diesen Hinweis nicht an.';
$string['illegalthousandseparator'] = 'Sie haben in Ihrer Antwort ein ungültiges Tausendertrennzeichen "{$a->thousandssep}" verwendet. Wir akzeptieren Antworten nur mit einem Dezimaltrennzeichen "{$a->decimalsep}".';
$string['notenoughanswers'] = 'Diese Art von Frage erfordert mindestens {$a} Antworten';
$string['notolerancehere'] = 'Sie können keine Toleranz für diese Aufgabe eingeben.';
$string['notvalidnumber'] = 'Sie haben kein Ergebnis in einem anerkannten Format eingegeben.';
$string['notvalidnumberprepostfound'] = 'Bitte geben Sie nur eine gültige Zahl ein und sonst nichts.';
$string['options'] = 'Optionen';
$string['pleaseenterananswer'] = 'Antwort eingeben';
$string['pluginname'] = 'Variable numeric set';
$string['pluginname_help'] = 'Als Antwort auf eine solche Frage gibt der Befragte eine Zahl ein.
Zahlen, die in der Frage verwendet werden und zur Berechnung der Antwort verwendet werden, werden aus vordefinierten Mengen ausgewählt, die mit mathematischen Ausdrücken ermittelt werden können.
Alle Ausdrücke werden zum Zeitpunkt der Fragenerstellung berechnet und Werte aus zufälligen Funktionen sind für alle Benutzer gleich. Für eine Frage ohne Varianten, mit automatisch berechneten Ausdrücken und mit für jeden Benutzer unterschiedlichen Zufallswerten, nutzen Sie den Fragentyp \'Variable numeric\'.';
$string['pluginname_link'] = 'question/type/varnumericset';
$string['pluginnameadding'] = '"Variable numeric set"-Frage wird hinzugefügt';
$string['pluginnameediting'] = '"Variable numeric set"-Frage wird bearbeitet';
$string['pluginnamesummary'] = 'Erlaubt eine numerische Antwort, die Frage kann mehrere \'Varianten\' haben, Ausdrücke werden für jede Fragenvariante vorab ausgewertet.';
$string['preandpostfixesignored'] = 'Nur der numerische Teil Ihrer Antwort wurde bewertet.';
$string['privacy:metadata'] = 'Das Plugin Variable Numeric Set speichert keine personenbezogenen Daten.';
$string['questiontext'] = 'Fragetext und eingebettete Variablen';
$string['questiontext_help'] = 'Sie können Variablennamen und Ausdrücke in Fragetexte, allgemeine Rückmeldungen, Antwortrückmeldungen und Hinweise einbetten.
Alles, was in doppelten eckigen Klammern eingeschlossen ist, wird ausgewertet, bevor es angezeigt wird. Wenn Sie beispielsweise [[a]] eingeben, wird der Wert der Variablen a angezeigt. [[log (a)]] zeigt den Logarithmus von a an.

Sie können auch angeben, wie das Ergebnis mit printf-Codes angezeigt werden soll. Zum Beispiel zeigt [[a, .3e]] den Wert von a in wissenschaftlicher Notation mit 4 signifikanten Stellen an.';
$string['randomseed'] = 'Ausdruck für die Erzeugung von Zufallszahlen';
$string['recalculatenow'] = 'Jetzt neuberechnen';
$string['requirescinotation'] = 'Erfordert wissenschaftliche Notation';
$string['sigfigs'] = 'Festgelegte Stellen';
$string['syserrorpenalty'] = 'Abzug für jeden Fehler';
$string['unspecified'] = 'Nicht festgelegt';
$string['usesuperscript'] = 'Hochgestellten Eintrag verwenden';
$string['varheader'] = 'Variable {no}';
$string['variables'] = 'Variablen';
$string['variant'] = 'Wert für Variante {$a}';
$string['variants'] = 'Wert für Varianten';
$string['variants_help'] = 'Geben Sie hier Werte für \'Vordefinierte Variablen\' ein ODER wenn es sich um eine \'Berechnete Variable\' handelt, werden hier die berechneten Werte angezeigt.
Für eine vordefinierte Variable müssen Sie einen Wert für mindestens eine Fragenvariante eingeben und für alle vordefinierten Variablen müssen Sie eine gleiche Anzahl von Feldern eingeben.

Moodle ermittelt automatisch, wie viele Varianten eine Frage hat, indem es sieht, wie viele Variantenwerte für vordefinierte Variablen ausgefüllt wurden, oder wenn es keine vordefinierten Variablen gibt, die nur berechnet werden, dann werden 5 Fragevarianten angenommen. Sie müssen die letzten Zeilen nur bei Bedarf ausfüllen, um weitere Werte für Varianten zur Frage hinzuzufügen.';
$string['varname'] = 'Name oder Zuordnung';
$string['varname_help'] = 'Für eine \'Vordefinierte Variable\' geben Sie hier nur einen Variablennamen, z.B \'a\' ein. Geben Sie anschließend die Werte für diese Variable für jede der folgenden Fragenvarianten ein.

Für eine "berechnete Variable" geben Sie einen Variablennamen ein und weisen ihm einen Wert aus einem Ausdruck zu, z.B. \'b = a ^ 4\' (wobei \'a\' eine zuvor definierte Variable ist).

Wenn Sie dieses Feld leer lassen, werden die folgenden Werte ignoriert.';
$string['varnumericset'] = 'Variable Numeric Set';
$string['varnumericset_help'] = 'Als Antwort auf eine Frage gibt der Befragte eine Zahl ein.
Zahlen, die in der Frage und zur Berechnung der Antwort verwendet werden, werden aus vordefinierten Mengen ausgewählt, die aus mathematischen Ausdrücken ermittelt werden können.
Alle Ausdrücke werden zum Zeitpunkt der Fragenerstellung berechnet und Werte aus zufälligen Funktionen sind für alle Benutzer gleich. Für eine Frage ohne Varianten, mit automatisch berechneten Ausdrücken und mit für jeden Benutzer unterschiedlichen Zufallswerten, nutzen Sie den Fragentyp \'Variable numeric\'.';
$string['varnumericset_link'] = 'question/type/varnumericset';
$string['varnumericsetsummary'] = 'Erlaubt eine numerische Antwort, die Frage kann mehrere \'Varianten\' haben, Ausdrücke werden für jede Fragenvariante vorab ausgewertet.';
$string['vartypecalculated'] = 'Berechnete Variable';
$string['vartypepredefined'] = 'Vordefinierte Variable';
$string['youmustprovideavalueforallvariants'] = 'Bitte füllen Sie für alle vordefinierten Variablen eine gleiche Anzahl von Zellen aus, dh. ein Wert für jede vordefinierte Variable für alle gewünschten Fragenvarianten.';
$string['youmustprovideavalueforatleastonevariant'] = 'Sie müssen hier einen Wert angeben.';
