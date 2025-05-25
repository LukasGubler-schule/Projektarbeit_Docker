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
 * Strings for component 'local_recompletion', language 'de', version '3.10'.
 *
 * @package     local_recompletion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advancedrecompletiontitle'] = 'Erweitert';
$string['archive'] = 'Alte Versuche archivieren';
$string['archivecompletiondata'] = 'Abschlussdaten archivieren';
$string['archivecompletiondata_help'] = 'Schreibt Abschlussdaten in die Tabellen  local_recompletion_cc, local_recompletion_cc_cc und local_recompletion_cmc. Abschjlußdaten werden endgkltig gelöscht wenn diese Option nicht aktiviert wird.';
$string['archivequestionnaire'] = 'Alte Befragungsversuche archivieren';
$string['archivequiz'] = 'Alte Testversuche archivieren';
$string['archivescorm'] = 'Alte Lernpaketversuche archivieren';
$string['assignattempts'] = 'Aufgabenlösungen';
$string['assignattempts_help'] = 'Wie wird mit Aufgabenversuchen innerhalb eines Kurses umgegangen:
Wenn die Einstellung \'Aktualisierung nach Bewertungsänderung\' verwendet wird, Trainer/innen die Benotung innerhalb einer Aufgabe ändern und der Kurs bereits abgeschlossen war, wird das Kursabschlussdatum auf das Datum der Bewertungsänderung gesetzt.';
$string['assignevent'] = 'Kursabschluss bei Bewertungsänderung aktualisieren';
$string['bulkchangedate'] = 'Kursabschlussdatum für die ausgewählten Nutzer/innen ändern';
$string['completionnotenabled'] = 'Die Kursabschlussverfolgung ist für  diesen Kurs nicht aktiviert.';
$string['completionresetuser'] = 'Abschluss für {$a}, in diesem Kurs, wurde zurückgesetzt.';
$string['completionupdated'] = 'Kursabschlussdaten wurden geändert!';
$string['coursecompletiondate'] = 'Neues Kursabschlussdatum';
$string['defaultsettings'] = 'Standardeinstellungen der Kurswiederholung';
$string['delete'] = 'Bestehende Lösungen löschen';
$string['deletegradedata'] = 'Bewertungen der Nutzer löschen';
$string['deletegradedata_help'] = 'Vorhandene Abschlussbewertungen aus der Tabelle grade_grades löschen. Daten werden in der Bewertungstabelle endgültig gelöscht, sind über die Historie jedoch weiter verfügbar.';
$string['donothing'] = 'Nichts tun';
$string['editcompletion'] = 'Kursabschlussdatum bearbeiten';
$string['editcompletion_desc'] = 'Kursabschlussdatum für die folgende Nutzer/innen ändern:';
$string['editrecompletion'] = 'Kurswiederholungseinstellungen bearbeiten';
$string['emailrecompletiontitle'] = 'Kursspezifische Nachricht bei Wiederholung';
$string['enablerecompletion'] = 'Wiederholung aktivieren';
$string['enablerecompletion_help'] = 'Das Wiederholungs-Plugin ermöglicht es, nach einem definierten Zeitraum die Abschlussdetails zurückzusetzen.';
$string['eventrecompletion'] = 'Kurswiederholung';
$string['extraattempt'] = 'Teilnehmer/in zusätzliche Versuche ermöglichen';
$string['forcearchivecompletiondata'] = 'Abschlussdaten erzwingend archivieren';
$string['forcearchivecompletiondata_help'] = 'Wenn diese Option aktiviert ist, wird die Archivierung der Abschlussdaten für alle Kurswiederholungen erzwungen. Dadurch kann ein versehentlicher Datenverlust verhindert werden.';
$string['modifycompletiondates'] = 'Kursabschlussdaten ändern';
$string['noassigngradepermission'] = 'Der Abschluss wurde zurückgesetzt, enthält aber eine Aufgabe, die nicht zurückgesetzt werden kann. Bitten Sie Ihre Trainer/innen, das zu übernehmen.';
$string['nousersselected'] = 'Keine Nutzer/innen ausgewählt';
$string['pluginname'] = 'Kurswiederholung';
$string['privacy:metadata:attempt'] = 'Versuchsnummer';
$string['privacy:metadata:completionstate'] = 'Wenn die Aktivität abgeschlossen war';
$string['privacy:metadata:course'] = 'Kurs-ID, die mit der Tabelle verbunden ist';
$string['privacy:metadata:coursemoduleid'] = 'Aktivitäts-ID';
$string['privacy:metadata:coursesummary'] = 'Speichert die Kursabschlussdaten eines Teilnehmers';
$string['privacy:metadata:gradefinal'] = 'Endbewertung bei Kursabschluss';
$string['privacy:metadata:local_recompletion_cc'] = 'Archiv früherer Kursabschlüsse';
$string['privacy:metadata:local_recompletion_cc_cc'] = 'Archiv früherer course_completion_crit_compl';
$string['privacy:metadata:local_recompletion_cmc'] = 'Archiv früherer Kursmodulabschlüsse';
$string['privacy:metadata:local_recompletion_ltia'] = 'Nutzerzigriffs- und Bewertungsdaten';
$string['privacy:metadata:local_recompletion_ltia:lastaccess'] = 'Zeit, zu der die Person zuletzt auf den Kurs zugegriffen hat';
$string['privacy:metadata:local_recompletion_ltia:lastgrade'] = 'Bewertung, die die Person zuletzt erhalten hat';
$string['privacy:metadata:local_recompletion_ltia:timecreated'] = 'Zeit, zu der die Person eingeschrieben wurde';
$string['privacy:metadata:local_recompletion_ltia:toolid'] = 'ID des Tools der LTI-Einschreibemethode';
$string['privacy:metadata:local_recompletion_ltia:userid'] = 'Nutzer-ID';
$string['privacy:metadata:local_recompletion_qr'] = 'Antworttabelle zum erneuten Ausfüllen der Befragung';
$string['privacy:metadata:local_recompletion_qr:complete'] = 'abgeschlossen';
$string['privacy:metadata:local_recompletion_qr:grade'] = 'Bewertung';
$string['privacy:metadata:local_recompletion_qr:questionnaireid'] = 'Befragungs-ID';
$string['privacy:metadata:local_recompletion_qr:submitted'] = 'Übertragen';
$string['privacy:metadata:overrideby'] = 'ID des Nutzers, der frühere Daten überschrieben hat';
$string['privacy:metadata:quiz_attempts'] = 'Archivierte Details zu jedem Testversuch';
$string['privacy:metadata:quiz_attempts:attempt'] = 'Versuchsnummer';
$string['privacy:metadata:quiz_attempts:currentpage'] = 'Seite auf der der Nutzer derzeit ist';
$string['privacy:metadata:quiz_attempts:preview'] = 'Ob es eine Testvorschau gibt';
$string['privacy:metadata:quiz_attempts:state'] = 'Derzeitiger Status des Versuchs';
$string['privacy:metadata:quiz_attempts:sumgrades'] = 'Summe der Bewertungen im Versuch';
$string['privacy:metadata:quiz_attempts:timecheckstate'] = 'Zeitpunkt der Statsufeststellung';
$string['privacy:metadata:quiz_attempts:timefinish'] = 'Zeitpunkt zu dem der Versuch  abgeschlossen wurde';
$string['privacy:metadata:quiz_attempts:timemodified'] = 'Zeitpunkt zu dem der Versuch aktualiert wurde';
$string['privacy:metadata:quiz_attempts:timemodifiedoffline'] = 'Zeitpunkt des Updates eines Versuchs bei Offline-Nutzung';
$string['privacy:metadata:quiz_attempts:timestart'] = 'Zeitpunkt zu dem Versuch begonnen wurde';
$string['privacy:metadata:quiz_grades'] = 'Archivierte Details der Gesamtbewertung früherer Testversuche';
$string['privacy:metadata:quiz_grades:grade'] = 'Gesamtbewertung des Tests';
$string['privacy:metadata:quiz_grades:quiz'] = 'Der bewertete Test';
$string['privacy:metadata:quiz_grades:timemodified'] = 'Zeitpunkt an dem die Bewertung geändert wurde.';
$string['privacy:metadata:quiz_grades:userid'] = 'Der bewertete Nutzer';
$string['privacy:metadata:reaggregate'] = 'Wenn der Kursabschluss zusammengefasst wurde';
$string['privacy:metadata:scoes_track:element'] = 'Name des getrackten Elements';
$string['privacy:metadata:scoes_track:value'] = 'Wert des ausgewählten Elements';
$string['privacy:metadata:scorm_scoes_track'] = 'Archiv der getrackten SCO Daten der Aktivität';
$string['privacy:metadata:timecompleted'] = 'Zeitpunkt des Kursabschlusses';
$string['privacy:metadata:timeenrolled'] = 'Zeitpunkt der Kurseinschreibung des Nutzers';
$string['privacy:metadata:timemodified'] = 'Zeitpunkt zu dem der Datensatz verändert wurde';
$string['privacy:metadata:timestarted'] = 'Zeitpunkt des Kursbeginns';
$string['privacy:metadata:unenroled'] = 'Wenn der Nutzer aus dem Kurs ausgetragen wurde';
$string['privacy:metadata:userid'] = 'Nutzer-ID, die mit der Tabelle verknüpft ist';
$string['privacy:metadata:viewed'] = 'Wenn Aktivität angesehen wurde';
$string['questionnaireattempts'] = 'Befragungsversuche';
$string['questionnaireattempts_help'] = 'Was soll mit bestehenden Befragungsversuchen passieren? Wenn Löschen und Archivieren ausgewählt ist, werden die alten Befragungsversuche in den local_recompletion-Tabellen archiviert.';
$string['quizattempts'] = 'Testversuche';
$string['quizattempts_help'] = 'Was passiert mit früheren Testversuchen? Wenn löschen oderarchivieren ausgewählt wurde, werden alte Testversuche in der Tabelle local_recompletion archiviert.
Wenn zusätzliche Testversuche ausgewählt wurde, können weitere Testversuche bis zur festgelegten Höchstzahl durchgeführt werden.';
$string['recompletion'] = 'Wiederholung';
$string['recompletion:manage'] = 'Zulassen, dass Einstellungen zur Wiederholung von Kursen geändert werden können';
$string['recompletion:resetmycompletion'] = 'Eigene Abschlüsse zurücksetzen';
$string['recompletionemailbody'] = 'Mitteilungstext für Wiederholung';
$string['recompletionemailbody_help'] = 'Formulieren Sie einen kursspezifischen Text für eine E-Mail an die Nutzer/innen als unformatierten Text oder mit  HTML-Tags und Mehrsprachigkeit.

Folgende Platzhalter können verwandt werden:

* Kursname {$a->coursename}
* Link zum Kurs {$a->link}
* Link zur Profilseite des Nutzers {$a->profileurl}
* E-Mail-Adresse von Nutzer/in {$a->email}
* Vollständiger Name von Nutzer/in {$a->fullname}';
$string['recompletionemaildefaultbody'] = 'Guten Tag,
bitte wiederholen Sie den Kurs {$a->coursename} {$a->link}.

Ihr E-Learning-Team';
$string['recompletionemaildefaultsubject'] = 'Wiederholung des Kurses {$a->coursename} erforderlich';
$string['recompletionemailenable'] = 'Mitteilung zur Wiederholung versenden';
$string['recompletionemailenable_help'] = 'Funktion zur Benachrichtigung der Nutzer zur notwendigen Wiederholung aktivieren';
$string['recompletionemailsubject'] = 'Titel der Mitteilung zur Wiederholung';
$string['recompletionemailsubject_help'] = 'Ein unformatierter Text zur Benachrichtigung der Nutzer zur Wiederholung kann hiereingefügt werden.

Sie können folgende Platzhalter verwenden


* Kursname {$a->coursename}
* Vollständiger Name des Nutzers {$a->fullname}';
$string['recompletionnotenabled'] = 'Die Kurswiederholung ist nicht aktiviert in diesem Kurs';
$string['recompletionrange'] = 'Wiederholungszeitraum';
$string['recompletionrange_help'] = 'Legen Sie fest in welchen Zeitabständen die Kursabschlussergebnisse zurückgesetzt werden sollen';
$string['recompletionsettingssaved'] = 'Wiederholungseinstellungen geändert';
$string['recompletiontask'] = 'Prüfen, ob Nutzer Kurs wiederholen müssen';
$string['resetallcompletion'] = 'Alle Abschlüsse zurücksetzen';
$string['resetcompletionconfirm'] = 'Möchten Sie wirklich alle Abschlussdaten im Kurs "{$a}" löschen?  Warnung: möglicherweise werden bereits übermittelte Inhalte dauerhaft gelöscht.';
$string['resetcompletionfor'] = 'Abschluss für {$a} zurücksetzen';
$string['resetlti'] = 'LTI-Bewertungen zurücksetzen';
$string['resetltis'] = 'LTI-Bewertungen';
$string['resetltis_help'] = 'Was soll mit den LTI-Bewertungen innerhalb des Kurses passieren?
Wenn die Einstellung "LTI-Bewertungen zurücksetzen" verwendet wird, werden alle LTI-Bewertungen auf 0 zurückgesetzt.
Wenn eine Person einen neuen Abschluss im Kurs erreicht hat, wird die aktualisierte Bewertung erneut an den LTI-Anbieter gesendet.';
$string['resetmycompletion'] = 'Meine Aktivitätsabschlüsse zurücksetzen';
$string['scormattempts'] = 'SCORM (Lernpaket)-Versuche';
$string['scormattempts_help'] = 'Sollen vorhandene Lernpakte-Versuche gelöscht werden. Wenn archiviert ausgewählt wurde,  werden alte Versuchsergebnisse in der Tabelle  local_recompletion_sst archiviert.';
