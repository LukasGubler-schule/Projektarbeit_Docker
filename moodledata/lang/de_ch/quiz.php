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
 * Strings for component 'quiz', language 'de_ch', version '4.5'.
 *
 * @package     quiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autosaveperiod_desc'] = 'Teilnehmerantworten können während der Testversuche regelmässig automatisch gesichert werden. Bei jeder Eingabe einer Änderung erfolgt eine Sicherung und nach dem hier eingegebenen Zeitwert. Dies erhöht die Serverlast, verhindert aber den Verlust von Antworten. Prüfen Sie die entstehende Serverlast und passen Sie dann den Wert auf einer akzeptables Mass an. Der Eintrag \'0\' deaktiviert die automatische Sicherung.';
$string['canredoquestions_help'] = 'Die Option legt fest, dass nach dem Beenden einer bestimmten Frage eine Taste \'Versuchen Sie eine weitere Frage wie diese hier\' angezeigt wird. So kann eine andere Antwort für die gleiche Frage versucht werden, ohne den ganzen Testversuch schliessen und einen ganz neuen Testversuch zu starten. Diese Option ist vor allem nützlich zum Üben.

Die Option wirkt sich nur auf Fragen (keine Freitextfragen) und Verhaltensweisen (z.B. Direkte Auswertung oder Interaktiv mit mehreren Versuchen) aus, bei denen die Frage beendet werden kann, ohne den Versuch abzugeben.';
$string['caseno'] = 'Nein, Gross-/Kleinschreibung ist unwichtig';
$string['casesensitive'] = 'Gross-/Kleinschreibung';
$string['caseyes'] = 'Ja, Gross-/Kleinschreibung muss stimmen';
$string['close'] = 'Fenster schliessen';
$string['closepreview'] = 'Vorschau schliessen';
$string['closereview'] = 'Überprüfung schliessen';
$string['completionpassorattemptsexhausteddesc'] = 'Teilnehmer/innen müssen die Bestehensgrenze erreichen oder alle verfügbaren Versuche ausschöpfen, um diese Aktivität abzuschliessen';
$string['configmaximumgrade'] = 'Der Standardwert für diese Testbewertung liegt ausserhalb des gewählten Wertes.';
$string['decimalplaces_help'] = 'Mit dieser Einstellung wird die Anzahl der angezeigten Nachkommastellen für Bewertungen festgelegt. Die Einstellung beeinflusst ausschliesslich die Darstellung der Werte, nicht aber die Werte in der Datenbank oder die internen Berechnungen.';
$string['emailoverduebody'] = 'Guten Tag {$a->studentname},

Sie haben den Test \'{$a->quizname}\' im Kurs {$a->coursename} begonnen. Der Testversuch wurde von Ihnen jedoch bisher nicht abgeschlossen. Dies sollten Sie bis zu diesem Termin nachholen: {$a->attemptduedate}.

Um den Testversuch jetzt abzuschliessen, gehen Sie auf {$a->attemptsumaryurl} und klicken Sie die Taste \'Abgeben\'. Wenn Sie dies nicht vor dem {$a->attemptgracend} tun, wird der Versuch nicht gewertet.

Ihr E-Learning-Team';
$string['emailoverduesmall'] = 'Sie haben den Testversuch in {$a->quizname} nicht abgeschlossen. Gehen Sie vor dem {$a->attemptgraceend} zu {$a->attemptsummaryurl} wenn Sie den Versuch noch abschliessen möchten.';
$string['endtest'] = 'Versuch abschliessen ...';
$string['feedbackerrorboundaryoutofrange'] = 'Die Bewertungsgrenzen für das Feedback müssen zwischen 0% und 100% liegen. Der von Ihnen eingegebene Grenzwert {$a} liegt ausserhalb. Bei Prozentwerten darf kein Leerzeichen zwischen der Zahl und dem Prozentwert stehen.';
$string['feedbackerrororder'] = 'Bewertungsgrenzen für das Feedback müssen mit dem grössten Wert beginnen und bis zum kleinsten Wert fortgeführt werden. Der von Ihnen eingegebene Grenzwert {$a} liegt nicht in der Reihe.';
$string['grademethod_help'] = 'Wenn mehrere Versuche erlaubt sind, gibt es unterschiedliche Möglichkeiten, eine abschliessende Bewertung für die Teilnehmer/innen festzulegen:

* Beste Bewertung aus allen Versuchen
* Durchschnitt aus allen Versuchen
* Erster Versuch (alle weiteren Versuche werden
ignoriert)
* Letzter Versuch (alle weiteren Versuche werden
ignoriert)';
$string['overduehandling_desc'] = 'Grundeinstellung für den Test wenn Teilnehmer/innen einen Testversuch nicht abschliessen bevor der Zeitraum abgelaufen ist.';
$string['overduehandling_help'] = 'Die Einstellung legt fest, was passiert, wenn Teilnehmer/innen den Test nicht rechtzeitig abschliessen. Wenn die Teilnehmer/innen zu diesem Zeitpunkt aktiv am Test arbeiten, wird der aktuelle Bearbeitungsstand automatisch abgegeben. Sind sie nicht angemeldet, so entscheidet diese Einstellung.';
$string['pagesize'] = 'Seitengrösse';
$string['pleaseclose'] = 'Ihre Anfrage wurde bearbeitet. Sie können das Fenster jetzt schliessen.';
$string['quizclose'] = 'Testschliessung';
$string['quizclosed'] = 'Dieser Test schliesst am {$a}';
$string['quizcloses'] = 'Testschliessung';
$string['reviewoptionsheading_help'] = 'Mit diesen Optionen legen Sie fest, welche Informationen angezeigt werden, wenn Teilnehmer/innen einen Versuch überprüfen oder sich den Ergebnisbericht anschauen.

**Während des Versuchs** – Einstellungen sind nur mit gewissen Frageverhalten wie \'Mehrfachbeantwortung\' relevant, und steuern zum Beispiel das Feedback im direkten Zusammenhang mit der aktuell bearbeiteten Frage.

**Direkt nach dem Versuch** steuert, was während zwei Minuten, nachdem Test abgeschickt und beendet wurde, angezeigt wird.

**Später, während der Test noch geöffnet ist** steuert was danach, und vor dem Zeitpunkt der Testschliessung angezeigt wird.

**Wenn der Test abgeschlossen ist** – Einstellungen treten nach dem Zeitpunkt der Testschliessung in Kraft. Wenn kein Termin für die Testschliessung definiert ist, kommt diese Einstellung nie zur Anwendung.';
$string['showlargeimage'] = 'Grosses Bild';
$string['toomanyrandom'] = 'Die Anzahl der benötigten Zufallsfragen ist grösser als die Anzahl der in der Kategorie enthaltenen Fragen! ({$a})';
