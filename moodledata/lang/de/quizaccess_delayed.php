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
 * Strings for component 'quizaccess_delayed', language 'de', version '4.5'.
 *
 * @package     quizaccess_delayed
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['attemptquiz'] = 'Test nun versuchen';
$string['delayedattemptlock'] = 'Gestufter Zugang zum Test';
$string['delayedattemptlock_help'] = 'Wenn aktiviert, wird die Schaltfläche zum Starten des Tests beim Laden der Testseite vor Startzeitpunkt deaktiviert.
Es startet ein Countdown auf Basis einer Zufallszahl (bis zu einer von der Institution vorgegebenen Grenze). Wenn der Countdown endet, wird die Schaltfläche wieder aktiviert und die Teilnehmer/innen können den Versuch starten.';
$string['explaindelayedattempt'] = 'Weist eine zufällige Verzögerung zu';
$string['flipdowncounter'] = 'Zähler als animierte Karten';
$string['noscriptwarning'] = 'Dieser Test erfordert einen Browser mit JavaScript. Wenn Sie einen JavaScript-Blocker nutzen, werden Sie diesen deaktivieren müssen.';
$string['plaintextcounter'] = 'Zähler als einfacher Text';
$string['pleasewait'] = 'Bitte warten Sie hier';
$string['pluginname'] = 'Zugang zu einem Testversuch mit zufälliger Verzögerung';
$string['pluginname_desc'] = 'Automatische Aktivierung der Schaltfläche für den Testversuch mit zufälliger Verzögerung';
$string['quizaccess_delayed_allowdisable'] = 'Die Trainer/innen können die Regelung abstellen';
$string['quizaccess_delayed_countertype'] = 'Art des zu nutzenden Countdowns';
$string['quizaccess_delayed_dangerousquiznotice'] = 'Mitteilung der Institution, die bei einem möglicherweise problematischem Test angezeigt wird';
$string['quizaccess_delayed_dangerousquiznotice_desc'] = 'Diese Mitteilung wird Trainer/innen angezeigt bei Erstellung des Tests, wenn das Plugin feststellt, dass die Parameter problematisch sein können. Das ist eine gute Stelle, um auf Handbücher oder Anweisungen für den Entwurf weniger kritischer Tests zu verweisen.';
$string['quizaccess_delayed_enabled'] = 'Verzögerter Versuch aktiviert';
$string['quizaccess_delayed_enabledbydefault'] = 'Neue Tests werden diese Regel standardmäßig verwenden';
$string['quizaccess_delayed_maxdelay'] = 'Maximale Verzögerung (in Minuten)';
$string['quizaccess_delayed_notice'] = 'Hinweis an Teilnehmer/innen';
$string['quizaccess_delayed_notice_desc'] = 'Dieser Text wird allen Teilnehmer/innen zusätzlich zu dem Text angezeigt, den die Trainer/innen als Beschreibung der Aktivität nutzen. Er ist so entworfen, dass eine Nachricht der Institution angezeigt werden soll, meist bezüglich Anweisungen, wie man die Tests verwenden kann.';
$string['quizaccess_delayed_showdangerousquiznotice'] = 'Zeigt Trainer/innen eine Warnung an, falls daher Test ressourcenintensiv ist';
$string['quizaccess_delayed_startrate'] = 'Zugangsrate (Teilnehmer/innen pro Minute)';
$string['quizaccess_delayed_teachernotice'] = 'Dieser Test verwendet eine gestufte Zugangssteuerung, die dafür sorgt, dass Teilnehmer/innen zufällig mit bis zu {$a} Minuten Verzögerung einen Zugang erhalten.';
$string['quizaccess_delayed_teachernotice2'] = 'Hinweis an die Trainer/innen: Teilnehmer/innen sehen beim Warten die folgende Nachricht.';
$string['quizaccess_delayed_timelimitpercent'] = 'Maximale Verzögerung als Prozentsatz der Fertigstellungsdauer';
$string['quizwillstartinabout'] = 'Ihr Zugang zu diesem Test beginnt in etwa';
$string['quizwillstartinless'] = 'Ihr Zugang zu diesem Test wird in weniger als einer Minute beginnen.';
$string['tooshortpagesadvice'] = 'Der Fragebogen hat {$a->pages} Seiten, die zu kurz sind. Das erhöht deutlich die Last für den Server. Überlegen Sie, mehr Zeit für jede Seite zu veranschlagen (d.h. mehr Fragen auf der Seite).';
$string['tooshorttimeguardadvice'] = 'Eine Verfügbarkeit von {$a->timespanstr} ist zu eng bemessen. Beachten Sie bitte, dass einige Teilnehmer/innen um bis zu {$a->maxdelaystr} Minuten verzögerten Zugriff erhalten und {$a->timelimitstr} Zeit zur Bearbeitung haben. Es ist ratsam, einen Sicherheitsrahmen für andere Verzögerungen beim Starten des Tests zu lassen.';
