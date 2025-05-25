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
 * Strings for component 'local_recompletion', language 'de', version '4.5'.
 *
 * @package     local_recompletion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abandoned'] = 'Verlassen';
$string['advancedrecompletiontitle'] = 'Erweitert';
$string['archive'] = 'Alte Versuche archivieren';
$string['archivecertificate'] = 'Ausgestellte Zertifikate archivieren (mod_certificate)';
$string['archivecertificate_help'] = 'Sollen ausgestellte Zertifikate archiviert werden?';
$string['archivechoice'] = 'Alte Abstimmungsversuche archivieren';
$string['archivecompletiondata'] = 'Abschlussdaten archivieren';
$string['archivecompletiondata_help'] = 'Schreibt Abschlussdaten in die Tabellen  local_recompletion_cc, local_recompletion_cc_cc und local_recompletion_cmc. Abschjlußdaten werden endgkltig gelöscht wenn diese Option nicht aktiviert wird.';
$string['archivecoursecertificate'] = 'Ausgestellte nutzerdefinierte Zertifikate archivieren';
$string['archivecoursecertificate_help'] = 'Sollen ausgestellte Zertifikate archiviert werden? Archivierte Zertifikate bleiben in der Tabelle "tool_certificate_Issues", haben jedoch einen Archivstatus.';
$string['archivecustomcertcertificates'] = 'Ausgestellte nutzerdefinierte Zertifikate (mod_customcert) archivieren';
$string['archivecustomcertcertificates_help'] = 'Sollen ausgestellte nutzerdefinierte Zertifikate archiviert werden?';
$string['archiveh5p'] = 'Alte H5P-Versuche (mod_h5pactivity) archivieren';
$string['archivehotpot'] = 'Alte H5P-Versuche archivieren';
$string['archivehvp'] = 'Alte H5P-Versuche (mod_hvp) archivieren';
$string['archivelesson'] = 'Alte Lektionsversuche archivieren';
$string['archivequestionnaire'] = 'Alte Befragungsversuche archivieren';
$string['archivequiz'] = 'Alte Testversuche archivieren';
$string['archivescorm'] = 'Alte Lernpaketversuche archivieren';
$string['assignattempts'] = 'Aufgabenlösungen';
$string['assignattempts_help'] = 'Wie wird mit Aufgabenversuchen innerhalb eines Kurses umgegangen:
Wenn die Einstellung \'Aktualisierung nach Bewertungsänderung\' verwendet wird, Trainer/innen die Benotung innerhalb einer Aufgabe ändern und der Kurs bereits abgeschlossen war, wird das Kursabschlussdatum auf das Datum der Bewertungsänderung gesetzt.';
$string['assignevent'] = 'Kursabschluss bei Bewertungsänderung aktualisieren';
$string['bulkchangedate'] = 'Kursabschlussdatum für die ausgewählten Nutzer/innen ändern';
$string['bulkresetallcompletion'] = 'Alle Abschlüsse der ausgewählten Nutzer/innen zurücksetzen';
$string['certificate'] = 'Zertifikate (mod_certificate)';
$string['certificate_help'] = 'Sollen ausgestellte Zertifikate gelöscht werden?';
$string['certificateverifywarn'] = 'Achtung: Das Löschen der ausgestellten Zertifikate ohne Archivierung führt dazu, dass die ausgestellten Zertifikate in Moodle nicht mehr verifiziert werden können. Löschen Sie die Zertifikate nur, wenn Sie dem zustimmen können.';
$string['choiceattempts'] = 'Abstimmungsversuche';
$string['choiceattempts_help'] = 'Sollen vorhandene Abstimmungsversuche gelöscht werden? Wenn Archivieren ausgewählt ist, werden die alten Abstimmungsversuche in der Tabelle local_recompletion_cha archiviert.';
$string['completed'] = 'Abgeschlossen';
$string['completionnotenabled'] = 'Die Kursabschlussverfolgung ist für diesen Kurs nicht aktiviert.';
$string['completionreset'] = 'Abschlüsse der ausgewählten Nutzer/innen wurden in diesem Kurs zurückgesetzt.';
$string['completionresetuser'] = 'Abschluss für {$a} wurde in diesem Kurs zurückgesetzt.';
$string['completionupdated'] = 'Kursabschlussdaten wurden geändert!';
$string['coursecertificate'] = 'Zertifikate (mod_coursecertificate)';
$string['coursecertificate_help'] = 'Sollen ausgestellte Zertifikate gelöscht werden?';
$string['coursecertificateverifywarn'] = 'Achtung: Das Löschen der ausgestellten Zertifikate ohne Archivierung führt dazu, dass ausgestellte Zertifikate in Moodle nicht mehr überprüft werden können. Löschen Sie die Zertifikate bitte nur, wenn dies für Sie akzeptabel ist.';
$string['coursecompletiondate'] = 'Neues Kursabschlussdatum';
$string['customcertcertificates'] = 'Nutzerdefinierte Zertifikate (mod_customcert)';
$string['customcertcertificates_help'] = 'Sollen ausgestellte nutzerdefinierte Zertifikate gelöscht werden?';
$string['customcertresetcertificates'] = 'Ausgestellte Zertifikate löschen';
$string['customcertresetcertificatesverifywarn'] = 'Achtung: Das Löschen der ausgestellten Zertifikate, auch wenn Sie diese vor dem Löschen archivieren, führt dazu, dass die ausgestellten Zertifikate in Moodle nicht mehr überprüft werden können. Löschen Sie die Zertifikate bitte nur, wenn dies für Sie akzeptabel ist.';
$string['datasource:local_recompletion_cc'] = 'Kursabschlüsse archivieren';
$string['datasource:local_recompletion_ccert_is'] = 'Archiv der ausgestellten Zertifikate (mod_customcert)';
$string['datasource:local_recompletion_cert'] = 'Archiv der ausgestellten Zertifikate (mod_certificate)';
$string['datasource:local_recompletion_cmc'] = 'Aktivitätsabschlüsse archivieren';
$string['datasource:local_recompletion_h5p'] = 'H5P-Versuche (mod_h5pactivity) archivieren';
$string['datasource:local_recompletion_hpa'] = 'HotPot-Versuche archivieren';
$string['datasource:local_recompletion_lg'] = 'Lektionsbewertungen archivieren';
$string['datasource:local_recompletion_qa'] = 'Testversuche archivieren';
$string['datasource:local_recompletion_qg'] = 'Testbewertungen archivieren';
$string['defaultsettings'] = 'Standardeinstellungen der Kurswiederholung';
$string['delete'] = 'Bestehende Lösungen löschen';
$string['deletecertificate'] = 'Ausgestellte Zertifikate löschen';
$string['deletecoursecertificate'] = 'Ausgestellte Zertifikate löschen';
$string['deletegradedata'] = 'Alle Bewertungen einer Person löschen';
$string['deletegradedata_help'] = 'Vorhandene Abschlussbewertungen aus der Tabelle grade_grades löschen. Daten werden in der Bewertungstabelle endgültig gelöscht, sind über die Historie jedoch weiter verfügbar.';
$string['donothing'] = 'Nichts tun';
$string['editcompletion'] = 'Kursabschlussdatum bearbeiten';
$string['editcompletion_desc'] = 'Kursabschlussdatum für die folgende Nutzer/innen ändern:';
$string['editrecompletion'] = 'Kurswiederholungseinstellungen bearbeiten';
$string['emailrecompletiontitle'] = 'Kursspezifische Nachricht bei Wiederholung';
$string['endtime'] = 'Endzeit';
$string['entity:local_recompletion_cc'] = 'Archiv der Kursabschlüsse';
$string['entity:local_recompletion_ccert_is'] = 'Archiv der ausgestellten Zertifikate (mod_customcert)';
$string['entity:local_recompletion_cert'] = 'Archiv der ausgestellten Zertifikate (mod_certificate)';
$string['entity:local_recompletion_cmc'] = 'Archiv der Aktivitätsabschlüsse';
$string['entity:local_recompletion_h5p'] = 'Archiv der H5P-Versuche (mod_h5pactivity)';
$string['entity:local_recompletion_hpa'] = 'Archiv der HotPot-Versuche';
$string['entity:local_recompletion_lg'] = 'Archiv der Lektionsbewertungen';
$string['entity:local_recompletion_qa'] = 'Archiv der Testversuche';
$string['entity:local_recompletion_qg'] = 'Archiv der Testbewertungen';
$string['eventrecompletion'] = 'Kurswiederholung';
$string['extraattempt'] = 'Teilnehmer/in zusätzliche Versuche ermöglichen';
$string['forcearchivecompletiondata'] = 'Abschlussdaten erzwingend archivieren';
$string['forcearchivecompletiondata_help'] = 'Wenn diese Option aktiviert ist, wird die Archivierung der Abschlussdaten für alle Kurswiederholungen erzwungen. Dadurch kann ein versehentlicher Datenverlust verhindert werden.';
$string['h5pattempts'] = 'H5P-Versuche (mod_h5pactivity)';
$string['h5pattempts_help'] = 'Wie soll mit H5P-Versuchen innerhalb des Kurses umgegangen werden? Wenn das Archiv ausgewählt ist, werden die alten H5P-Versuche in den Tabellen local_recompletion_h5p und local_recompletion_h5pr archiviert.';
$string['hotpotattempts'] = 'HotPot-Versuche';
$string['hotpotattempts_help'] = 'Wie soll mit HotPot-Versuchen innerhalb des Kurses umgegangen werden? Wenn das Archiv ausgewählt ist, werden die Versuche archiviert.';
$string['hvpattempts'] = 'H5P-Versuche (mod_hvp)';
$string['hvpattempts_help'] = 'Wie soll mit H5P-Versuchen innerhalb des Kurses umgegangen werden? Wenn das Archiv ausgewählt ist, werden die alten H5P-Versuche in der Tabelle local_recompletion_hvp archiviert.';
$string['inprogress'] = 'In Bearbeitung';
$string['invalidscheduledate'] = 'Ungültiges Zeitplandatum eingegeben.';
$string['lessonattempts'] = 'Lektionsversuche';
$string['lessonattempts_help'] = 'Wie soll mit Lektionsversuchen innerhalb des Kurses umgegangen werden? Wenn das Archiv ausgewählt ist, werden die Versuche archiviert.';
$string['modifycompletiondates'] = 'Kursabschlussdaten ändern';
$string['noassigngradepermission'] = 'Der Abschluss wurde zurückgesetzt, enthält aber eine Aufgabe, die nicht zurückgesetzt werden kann. Bitten Sie Ihre Trainer/innen, das zu übernehmen.';
$string['nousersselected'] = 'Keine Nutzer/innen ausgewählt';
$string['penalties'] = 'Abzüge';
$string['pluginname'] = 'Kurswiederholung';
$string['pluginssettings'] = 'Plugin-Einstellungen';
$string['privacy:metadata:attempt'] = 'Versuchsnummer';
$string['privacy:metadata:completionstate'] = 'Wenn die Aktivität abgeschlossen war';
$string['privacy:metadata:correct'] = 'Richtige Antwort';
$string['privacy:metadata:course'] = 'Kurs-ID, die mit der Tabelle verbunden ist';
$string['privacy:metadata:coursemoduleid'] = 'Aktivitäts-ID';
$string['privacy:metadata:coursesummary'] = 'Speichert die Kursabschlussdaten eines Teilnehmers';
$string['privacy:metadata:deadline'] = 'Frist';
$string['privacy:metadata:endtime'] = 'Endzeit';
$string['privacy:metadata:flag'] = 'Kennzeichen';
$string['privacy:metadata:grade'] = 'Bewertung';
$string['privacy:metadata:gradefinal'] = 'Endbewertung bei Kursabschluss';
$string['privacy:metadata:lessontime'] = 'Lektionsdauer';
$string['privacy:metadata:local_recompletion_cc'] = 'Archiv früherer Kursabschlüsse';
$string['privacy:metadata:local_recompletion_cc_cc'] = 'Archiv vorheriger course_completion_crit_compl';
$string['privacy:metadata:local_recompletion_ccert_is'] = 'Archiv vorheriger Kurs-CustomCert-Ausgaben.';
$string['privacy:metadata:local_recompletion_ccert_is:emailed'] = 'Wenn die CustomCert-Ausgabe per E -Mail gesendet wurde.';
$string['privacy:metadata:local_recompletion_ccert_is:timecreated'] = 'Zeit, zu der die CustomCert-Ausgabe erzeugt wurde';
$string['privacy:metadata:local_recompletion_cert'] = 'Archiv der vorher ausgestellten Zertifikate';
$string['privacy:metadata:local_recompletion_cert:timecreated'] = 'Zeit, zu der das Zertifikat ausgestellt wurde';
$string['privacy:metadata:local_recompletion_cha'] = 'Archiv von Abstimmungsantworten';
$string['privacy:metadata:local_recompletion_cha:choiceid'] = 'Auswahl-ID des Archivs der Abstimmungsantworten';
$string['privacy:metadata:local_recompletion_cha:optionid'] = 'Option-ID des Archivs der Abstimmungsantworten';
$string['privacy:metadata:local_recompletion_cmc'] = 'Archiv vorheriger Kursmodulabschlüsse';
$string['privacy:metadata:local_recompletion_cmv'] = 'Archiv vorheriger Kursmodulansichten';
$string['privacy:metadata:local_recompletion_h5p'] = 'Archiv für Trackinginfos von H5P-Versuchen (mod_h5pactivity)';
$string['privacy:metadata:local_recompletion_h5pr'] = 'Archiv für Trackinginfos von H5P-Versuchsergebnissen (mod_h5pactivity)';
$string['privacy:metadata:local_recompletion_hpa'] = 'Archiv von HotPot-Versuchen';
$string['privacy:metadata:local_recompletion_hvp'] = 'Archiv für H5P-Nutzerdaten (mod_hvp)';
$string['privacy:metadata:local_recompletion_hvp:data'] = 'Die aktuellen Nutzerdaten, die gespeichert wurden.';
$string['privacy:metadata:local_recompletion_hvp:hvp_id'] = 'ID des HVP-Inhalts';
$string['privacy:metadata:local_recompletion_la'] = 'Archiv für lesson_attempts';
$string['privacy:metadata:local_recompletion_lb'] = 'Archiv von lesson_branch';
$string['privacy:metadata:local_recompletion_lg'] = 'Archiv von lesson_grades';
$string['privacy:metadata:local_recompletion_lo'] = 'Archiv von lesson_overrides';
$string['privacy:metadata:local_recompletion_lt'] = 'Archiv von lesson_timer';
$string['privacy:metadata:local_recompletion_ltia'] = 'Nutzerzugriffs- und Bewertungsdaten';
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
$string['privacy:metadata:maxattempts'] = 'Maximale Anzahl von Versuchen';
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
$string['privacy:metadata:quiz_grades:userid'] = 'Bewertete Person';
$string['privacy:metadata:rawscore'] = 'Punktzahl erhalten';
$string['privacy:metadata:reaggregate'] = 'Wenn der Kursabschluss zusammengefasst wurde';
$string['privacy:metadata:retake'] = 'Wiederholung';
$string['privacy:metadata:scoes_value:element'] = 'ID des Elements, das getrackt wird';
$string['privacy:metadata:scoes_value:value'] = 'Wert des angegebenen Elements';
$string['privacy:metadata:score'] = 'Punktzahl';
$string['privacy:metadata:scorm_attempt'] = 'Archiv der vorher versuchten Lernpakete';
$string['privacy:metadata:scorm_scoes_value'] = 'Archiv der erfassten Daten der SCOes, die zur Aktivität gehören';
$string['privacy:metadata:scormid'] = 'Lernpaket-ID';
$string['privacy:metadata:starttime'] = 'Startzeit';
$string['privacy:metadata:timecompleted'] = 'Zeitpunkt des Kursabschlusses';
$string['privacy:metadata:timecreated'] = 'Zeit, zu der das getreckte Element erzeugt wurde';
$string['privacy:metadata:timeenrolled'] = 'Zeit, zu der die Person im Kurs eingeschrieben wurde';
$string['privacy:metadata:timemodified'] = 'Zeit, zu der das Element das letzte mal getrackt wurde';
$string['privacy:metadata:timestarted'] = 'Zeit, zu der der Kurs begonnen wurde';
$string['privacy:metadata:unenroled'] = 'Wenn der Nutzer aus dem Kurs ausgetragen wurde';
$string['privacy:metadata:useranswer'] = 'Antwort';
$string['privacy:metadata:userid'] = 'Nutzer-ID, die mit dieser Tabelle verlinkt ist';
$string['privacy:metadata:viewed'] = 'Wenn Aktivität angesehen wurde';
$string['pulsenotifications'] = 'Pulsbenachrichtigungen';
$string['pulsenotifications_help'] = 'Sollen die Pulse-Benachrichtigungen, die bereits gesendet wurden, zurückgesetzt werden?';
$string['pulseresetnotifications'] = 'Benachrichtigungen zurücksetzen';
$string['questionnaireattempts'] = 'Befragungsversuche';
$string['questionnaireattempts_help'] = 'Was soll mit bestehenden Befragungsversuchen passieren? Wenn Löschen und Archivieren ausgewählt ist, werden die alten Befragungsversuche in den local_recompletion-Tabellen archiviert.';
$string['quizattempts'] = 'Testversuche';
$string['quizattempts_help'] = 'Was passiert mit früheren Testversuchen? Wenn löschen oderarchivieren ausgewählt wurde, werden alte Testversuche in der Tabelle local_recompletion archiviert.
Wenn zusätzliche Testversuche ausgewählt wurde, können weitere Testversuche bis zur festgelegten Höchstzahl durchgeführt werden.';
$string['recompletion'] = 'Wiederholung';
$string['recompletion:bulkoperations'] = 'Massenoperationen (Bulk)';
$string['recompletion:manage'] = 'Zulassen, dass Einstellungen zur Wiederholung von Kursen geändert werden können';
$string['recompletion:resetmycompletion'] = 'Eigene Abschlüsse zurücksetzen';
$string['recompletioncalculateddate'] = 'Berechnetes Datum: {$a}';
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
$string['recompletionemailsubject'] = 'Titel der Mitteilung zur Wiederholung';
$string['recompletionemailsubject_help'] = 'Ein unformatierter Text zur Benachrichtigung von Nutzer/innen zur Wiederholung kann hier eingefügt werden.

Sie können folgende Platzhalter verwenden

* Kursname {$a->coursename}
* Vollständiger Nutzername {$a->fullname}';
$string['recompletionnotenabledincourse'] = 'Die Wiederholung ist für die Kurs-ID {$a} nicht aktiviert.';
$string['recompletionrange'] = 'Wiederholungszeitraum';
$string['recompletionrange_help'] = 'Legen Sie fest in welchen Zeitabständen die Kursabschlussergebnisse zurückgesetzt werden sollen';
$string['recompletionschedule'] = 'Zeitplan zum Zurücksetzen';
$string['recompletionschedule_help'] = 'Legen Sie ein Datum fest (z.B. Jan 1st oder Mar 15), zu dem die Abschlussergebnisse zurückgesetzt werden. Dieses Datum wird ab der letzten Ausführung weitergerechnet. Die Zurücksetzung findet dann in einem Intervall statt. \'Jan 1\' führt zu einer jährlichen Wiederholung. \'friday\' bewirkt, dass jeden Freitag eine Zurücksetzung passiert.

Bitte beachten Sie dabei dass das System wie in den Beispielen nur englische Datumsangaben akzeptiert.';
$string['recompletionsettingssaved'] = 'Wiederholungseinstellungen geändert';
$string['recompletiontask'] = 'Prüfen, ob Nutzer Kurs wiederholen müssen';
$string['recompletiontype'] = 'Art der Kurswiederholung';
$string['recompletiontype:disabled'] = 'Deaktiviert';
$string['recompletiontype:ondemand'] = 'Nach Bedarf';
$string['recompletiontype:period'] = 'Periode';
$string['recompletiontype:schedule'] = 'Zeitplan';
$string['recompletiontype_help'] = 'Legen Sie (für neue Kurse) fest wie die Kursabschlussergebnisse zurückgesetzt werden sollen.

* Deaktiviert - Die Funktionalität ist ausgeschaltet.
* Periode - Erlaubt ein regelmäßiges Zurücksetzen auf der Basis einer vorgegebenen Periode (z.B. alle 60 Tage), basierend auf dem jeweiligen letzten Abschlussdatum eines Nutzers.
* Nach Bedarf - Erlaubt dem Trainer einzelne Nutzer nach Bedarf zurückzusetzen
* Zeitplan - Erlaubt das Zurücksetzen an einem vorgegebenen Tag, z.B. dem 1. Januar jedes Jahres';
$string['recompletionunenrolenable'] = 'Zurücksetzen des Abschlusses bei der Abmeldung';
$string['recompletionunenrolenable_help'] = 'Das Zurücksetzen des Abschlusses für die Nutzerabmeldung erlauben';
$string['resetallcompletion'] = 'Alle Abschlüsse zurücksetzen';
$string['resetcompletionconfirm'] = 'Möchten Sie wirklich alle Abschlussdaten im Kurs "{$a}" löschen?  Warnung: möglicherweise werden bereits übermittelte Inhalte dauerhaft gelöscht.';
$string['resetcompletionfor'] = 'Abschluss für {$a} zurücksetzen';
$string['resetlti'] = 'LTI-Bewertungen zurücksetzen';
$string['resetltis'] = 'LTI-Bewertungen';
$string['resetltis_help'] = 'Was soll mit den LTI-Bewertungen innerhalb des Kurses passieren?
Wenn die Einstellung "LTI-Bewertungen zurücksetzen" verwendet wird, werden alle LTI-Bewertungen auf 0 zurückgesetzt.
Wenn eine Person einen neuen Abschluss im Kurs erreicht hat, wird die aktualisierte Bewertung erneut an den LTI-Anbieter gesendet.';
$string['resetmycompletion'] = 'Meine Aktivitätsabschlüsse zurücksetzen';
$string['restricted'] = 'Das Zurücksetzen des Abschlusses für eine bestimmten Person ist eingeschränkt';
$string['restrictedbyenrol'] = 'Das Zurücksetzen des Abschlusses für eine bestimmten Person ist durch die Einschreibemethode eingeschränkt';
$string['restrictenrol'] = 'Einschreibemethode';
$string['restrictenrol_help'] = 'Nur Nutzer/innen, die mit ausgewählten Einschreibemethoden eingeschrieben sind, werden in die Abschlussdaten einbezogen. Wenn keine ausgewählt ist, gibt es keine Einschränkungen bei der Einschreibemethode für Nutzer/innen.';
$string['restrictionsettings'] = 'Einschränkungseinstellungen';
$string['restrictionsheader'] = 'Einschränkungen';
$string['score'] = 'Punktzahl';
$string['scormattempts'] = 'SCORM (Lernpaket)-Versuche';
$string['scormattempts_help'] = 'Sollen vorhandene Lernpakte-Versuche gelöscht werden. Wenn archiviert ausgewählt wurde,  werden alte Versuchsergebnisse in der Tabelle  local_recompletion_sst archiviert.';
$string['starttime'] = 'Startzeit';
$string['status'] = 'Abschlussstatus';
$string['timecreated'] = 'Zeit erzeugt';
$string['timedout'] = 'Zeit abgelaufen';
$string['timemodified'] = 'Zeit geändert';
$string['yearly'] = 'Jährlich';
