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
 * Strings for component 'panoptosubmission', language 'de', version '4.5'.
 *
 * @package     panoptosubmission
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addvideo'] = 'Panopto Studierendeneinreichung hinzufügen';
$string['all'] = 'Alle';
$string['allowdeleting'] = 'Erneutes Einreichen zulassen';
$string['allowdeleting_help'] = 'Wenn aktiviert, können Studierende eingereichte Videos ersetzen. Ob eine Einreichung nach dem Fälligkeitsdatum möglich ist, wird durch die Einstellung \'Verspätete Einreichungen verhindern\' gesteuert.';
$string['assignmentexpired'] = 'Einreichung abgebrochen.  Der Einsendeschluss der Aufgabe ist überschritten';
$string['assignmentpastdue'] = 'Einreichung abgebrochen.  Das Fälligkeitsdatum der Aufgabe ist überschritten';
$string['assignmentsubmitted'] = 'Ihre Einreichung wurde erfolgreich übermittelt';
$string['availabledate'] = 'Einreichungen erlauben ab';
$string['availabledate_help'] = 'Wenn aktiviert, können Studierende vor diesem Datum keine Videos einreichen.
Wenn deaktiviert, können die Studierenden sofort mit der Einreichung beginnen.';
$string['cancel'] = 'Schließen';
$string['currentgrade'] = 'Aktuelle Punktzahl in der Bewertung';
$string['cutoffdate'] = 'Abgabe-Datum';
$string['cutoffdate_help'] = 'Wenn diese Option aktiviert ist, können nach diesem Datum keine Einreichungen mehr stattfinden.';
$string['cutoffdatefromdatevalidation'] = 'Der Einsendeschluss kann nicht vor dem Datum liegen, ab dem Einreichungen zulässig sind.';
$string['cutoffdatevalidation'] = 'Der Einsendeschluss kann nicht vor dem Fälligkeitsdatum liegen.';
$string['deleteallsubmissions'] = 'Alle Videoeinreichungen löschen';
$string['duedate'] = 'Fälligkeitsdatum';
$string['duedate_help'] = 'Dies ist das Datum, an dem die Einreichung fällig ist. Nach diesem Datum sind zwar noch Abgaben möglich, aber alle nach diesem Datum eingereichten Aufgaben werden als verspätet gekennzeichnet.
Legen Sie einen Abgabetermin für Aufgaben fest, um Einreichungen nach einem bestimmten Datum zu verhindern.';
$string['duedatevalidation'] = 'Das Fälligkeitsdatum kann nicht vor dem Datum liegen, ab dem Einreichungen zulässig sind.';
$string['early'] = '{$a} zu früh';
$string['emailteachers_help'] = 'Wenn diese Option aktiviert ist, erhalten Lehrende eine E-Mail-Benachrichtigung, wenn Studierende eine Einreichung für eine Aufgabe hinzufügen oder aktualisieren. Es werden nur Lehrende benachrichtigt, die in der Lage sind, die jeweilige Aufgabe zu bewerten. Wenn der Kurs z. B. getrennte Gruppen verwendet, erhalten Lehrende, die auf bestimmte Gruppen beschränkt sind, keine Benachrichtigung über Studierende in anderen Gruppen.';
$string['eventassignment_details_viewed'] = 'Details der Einreichung angezeigt';
$string['eventassignment_submitted'] = 'Einreichung übertragen';
$string['eventgrade_submissions_page_viewed'] = 'Seite für Bewertungen angezeigt';
$string['eventgrades_updated'] = 'Einreichungsbewertung aktualisiert';
$string['eventsingle_submission_page_viewed'] = 'Einzelne Seite der Einreichung aufgerufen';
$string['failedtoinsertsubmission'] = 'Einreichungsdatensatz konnte nicht eingefügt werden';
$string['feedback'] = 'Feedback';
$string['feedbackavailablehtml'] = '{$a->username} hat Feedback zu Ihrer
Einreichung \'<i>{$a->assignment} abgegeben</i>\'<br /><br />
Sie können es im Anhang zu <a href="{$a->url}">assignment submission</a> sehen.';
$string['feedbackavailablesmall'] = '{$a->username} hat Feedback für Einreichung {$a->assignment} abgegeben';
$string['feedbackavailabletext'] = '{$a->username} hat Feedback zur Ihrer
Einreichung \'{$a->assignment}\' abgegeben.

Sie können es im Anhang zu Ihrer Einreichung sehen:

    {$a->url}';
$string['feedbackfromteacher'] = 'Feedback des Lehrenden';
$string['finalgrade'] = 'Finale Bewertung';
$string['fullname'] = 'Name';
$string['grade_out_of'] = 'Punktzahl aus {$a}:';
$string['gradedby'] = 'Bewertet bei';
$string['gradedon'] = 'Bewertet am';
$string['gradeitem:submissions'] = 'Einreichungen';
$string['grademodified'] = 'Zuletzt geändert (Bewertung)';
$string['gradenoun'] = 'Bewertung';
$string['gradersubmissionupdatedhtml'] = '{$a->username} hat die Einreichung der Aufgabe
für <i>\'{$a->assignment}\'  um {$a->timeupdated} aktualisiert</i><br /><br />
Es ist <a href="{$a->url}">auf der Webseite verfügbar</a>.';
$string['gradersubmissionupdatedsmall'] = '{$a->username} hat die Einrichung für {$a->assignment} aktualisiert.';
$string['gradersubmissionupdatedtext'] = '{$a->username} hat die Einreichung
für \'{$a->assignment}\' um {$a->timeupdated} aktualisiert

Sehen Sie die Einreichung hier:

    {$a->url}';
$string['gradesubmission'] = 'Bewertung';
$string['gradeverb'] = 'Bewerten';
$string['gradingsummary'] = 'Bewertungsüberblick';
$string['group_filter'] = 'Gruppenfilter';
$string['has_grade'] = 'Bewertet';
$string['hiddenfromstudents'] = 'Für Teilnehmer/innen verborgen';
$string['invalid_launch_parameters'] = 'Ungültige Startparameter';
$string['invalidid'] = 'Ungültige ID';
$string['invalidperpage'] = 'Geben Sie eine Zahl größer als Null ein';
$string['late'] = '{$a} zu spät';
$string['latesubmissions'] = 'Letzte Abgabemöglichkeit';
$string['latesubmissionsaccepted'] = 'Gestattet bis {$a}';
$string['messageprovider:panoptosubmission_updates'] = 'Panopto Studierendeneinreichung Benachrichtigungen';
$string['modulename'] = 'Panopto Studierendeneinreichung';
$string['modulename_help'] = 'Die Aktivität Panopto Student Submission ist eine bewertbare Aufgabe, bei der die Studierenden Panopto-Videos hochladen und einreichen müssen. Die Lehrer können auch Feedback geben.';
$string['modulenameplural'] = 'Panopto Studierendeneinreichung';
$string['name'] = 'Name';
$string['needs_grade'] = 'Benötigt Bewertung';
$string['no'] = 'Nein';
$string['no_automatic_operation_target_server'] = 'Bitte aktivieren Sie Automatischer Betrieb Zielserver in den Einstellungen, damit der Kurs provisioniert werden kann.';
$string['no_existing_lti_tools'] = 'Ein vorkonfiguriertes Panopto LTI Externes Tool mit dem benutzerdefinierten Parameter "panopto_student_submission_tool" muss vorhanden sein, um die Aktivität Panopto Einreichung von Studierenden nutzen zu können. Weitere Informationen finden Sie in der Support-Dokumentation.';
$string['noassignments'] = 'Keine Panopto Studierendeneinreichungs-Aktivität im Kurs gefunden';
$string['noenrolledstudents'] = 'Es sind keine Studierenden für den Kurs eingeschrieben';
$string['nosubmission'] = 'Keine Einreichungen';
$string['nosubmissions'] = 'Keine Einreichungen';
$string['nosubmissionsforgrading'] = 'Es sind keine Einreichungen zur Bewertung vorhanden';
$string['not_submitted'] = 'Nicht eingereicht';
$string['notallowedtoreplacemedia'] = 'Sie dürfen die Medien nicht ersetzen.';
$string['notifications'] = 'Benachrichtigungen';
$string['numberofparticipants'] = 'Teilnehmer/innen';
$string['numberofsubmissions'] = 'Anzahl der Einreichungen';
$string['numberofsubmissionsneedgrading'] = 'Bewertung erwartet';
$string['numberofsubmittedassignments'] = 'Eingereicht';
$string['optionalsettings'] = 'Optionale Einstellungen';
$string['pagesize'] = 'Einreichungen pro Seite angezeigt';
$string['pagesize_help'] = 'Legen Sie die Anzahl der Aufgaben fest, die pro Seite angezeigt werden sollen';
$string['panoptosubmission:addinstance'] = 'Eine Aktivität für Studierendeneinreichungen hinzufügen';
$string['panoptosubmission:gradesubmission'] = 'Bewertung von Video-Einreichungen';
$string['panoptosubmission:receivegradernotifications'] = 'Benachrichtigungen über die Abgabe von Bewertungen erhalten';
$string['panoptosubmission:submit'] = 'Einreichen';
$string['pluginadministration'] = 'Panopto Studierendeneinreichung';
$string['pluginname'] = 'Panopto Studierendeneinreichung';
$string['preventlate'] = 'Verspätete Einreichungen verhindern';
$string['preventlate_help'] = 'Wenn aktiviert, verhindert dies, dass Studierende die Aufgabe nach dem Fälligkeitsdatum einreichen.';
$string['privacy:markedsubmissionspath'] = 'Bewertete Einreichungen';
$string['privacy:metadata:emailteachersexplanation'] = 'Nachrichten werden über das Nachrichtensystem an Lehrende gesendet.';
$string['privacy:metadata:panoptosubmission_submission'] = 'Panopto Studiereneinreichungen-Abgaben';
$string['privacy:metadata:panoptosubmission_submission:email'] = 'Ihre E-Mail wird an Panopto gesendet, um die Nutzung der E-Mail-Funktionen von Panopto zu ermöglichen.';
$string['privacy:metadata:panoptosubmission_submission:grade'] = 'Bewertungspunktzahl für die Einreichung';
$string['privacy:metadata:panoptosubmission_submission:mailed'] = 'Ob die Benachrichtigung über die Einreichung der Aufgabe per E-Mail an den Lehrenden gesendet wurde';
$string['privacy:metadata:panoptosubmission_submission:source'] = 'Der LTI-Link, der den eingereichten Inhalt öffnet';
$string['privacy:metadata:panoptosubmission_submission:submissioncomment'] = 'Lehrenden-Kommentar zur Einreichung';
$string['privacy:metadata:panoptosubmission_submission:teacher'] = 'Moodle UserID des Lehrenden, der die Einreichung markiert hat';
$string['privacy:metadata:panoptosubmission_submission:timecreated'] = 'Zeitpunkt der Erstellung des Datensatzes für die Einreichung';
$string['privacy:metadata:panoptosubmission_submission:timemarked'] = 'Zeitpunkt der Bewertung der Einreichung';
$string['privacy:metadata:panoptosubmission_submission:timemodified'] = 'Zeitpunkt der Änderung der Einreichung';
$string['privacy:metadata:panoptosubmission_submission:userid'] = 'Moodle UserID';
$string['privacy:metadata:panoptosubmission_submission:username'] = 'Ihr Nutzername wird an Panopto gesendet, um die Nutzung der LTI-Funktionen zu ermöglichen.';
$string['privacy:metadata:panoptosubmissionfilter'] = 'Filterpräferenz für Einreichungen';
$string['privacy:metadata:panoptosubmissiongroupfilter'] = 'Präferenz für Gruppenfilter für Einreichungen';
$string['privacy:metadata:panoptosubmissionperpage'] = 'Präferenz für Anzahl der angezeigten Einreichungen pro Seite';
$string['privacy:metadata:panoptosubmissionquickgrade'] = 'Präferenz für schnelle Bewertung für die Panopto-Einreichung';
$string['privacy:submissionpath'] = 'Einreichung';
$string['quickgrade'] = 'Schnellbewertung aktivieren';
$string['quickgrade_help'] = 'Wenn aktiviert, können mehrere Aufgaben gleichzeitig bewertet werden. Aktualisieren Sie Bewertung und Feedback und klicken Sie dann auf "Alles Feedback speichern".';
$string['relativedatessubmissiontimeleft'] = 'Berechnet für jede/n Teilnehmer/in';
$string['replacevideo'] = 'Ersetzen';
$string['reqgrading'] = 'Bewertung anfordern';
$string['save'] = 'Änderungen speichern';
$string['savedchanges'] = 'Änderung gespeichert';
$string['savefeedback'] = 'Feedback speichern';
$string['savepref'] = 'Präferenzen speichern';
$string['select_submission'] = 'Panopto-Einreichung auswählen';
$string['sendlatenotifications'] = 'Bewerter/innen über verspätete Einreichungen benachrichtigen';
$string['sendlatenotifications_help'] = 'Wenn diese Option aktiviert ist, erhalten Bewerter/innen eine Nachricht, wenn Teilnehmer/innen eine Aufgabe zu spät einreichen.';
$string['sendnotifications'] = 'Bewerter/innen über Einreichungen benachrichtigen';
$string['sendnotifications_help'] = 'Wenn diese Option aktiviert ist, erhalten Bewerter/innen eine Nachricht, wenn Teilnehmer/innen eine Aufgabe frühzeitig, pünktlich oder zu spät einreichen.';
$string['sendstudentnotifications'] = 'Teilnehmer/in benachrichtigen';
$string['sendstudentnotifications_help'] = 'Markieren Sie dieses Kästchen, um eine Benachrichtigung über die aktualisierte Note oder das Feedback zu senden. Wenn die Aufgabe einen Bewertungs-Workflow verwendet oder die Noten im Bericht der Bewerter/innen verborgen sind, wird die Benachrichtigung erst gesendet, wenn die Note freigegeben wird.';
$string['sendstudentnotificationsdefault'] = 'Standard für \'Teilnehmer/in benachrichtigen\'';
$string['sendstudentnotificationsdefault_help'] = 'Soll bei der Benotung der einzelnen Teilnehmer/innen standardmäßig die Option \'Teilnehmer/in benachrichtigen\' aktiviert sein?';
$string['sessionpreview_hide'] = 'Videovorschau ausblenden';
$string['sessionpreview_show'] = 'Videovorschau einblenden';
$string['show'] = 'Anzeigen';
$string['show_help'] = 'Wenn der Filter auf \'Alle\' eingestellt ist, werden alle Einreichungen von Studierenden angezeigt, auch wenn der Studierende nichts eingereicht hat.
Wenn der Filter auf \'Bewertung erforderlich\' eingestellt ist, werden nur Einreichungen angezeigt, die noch nicht bewertet wurden, oder Einreichungen, die vom Studierenden aktualisiert wurden, nachdem sie bewertet wurden.
Bei der Einstellung \'Eingereicht\' werden nur Studierende angezeigt, die eine Videoaufgabe eingereicht haben.';
$string['singlegrade'] = 'Hilfetext hinzufügen';
$string['singlegrade_help'] = 'Hilfetext hinzufügen';
$string['singlesubmissionheader'] = 'Einreichung bewerten';
$string['status'] = 'Status';
$string['submission'] = 'Einreichung';
$string['submissioncomment'] = 'Kommentar';
$string['submissioncommentfeedback'] = 'Feedback-Kommentar';
$string['submissionisdue'] = 'Aufgabe ist fällig';
$string['submissionreceipthtml'] = '<p>Sie haben eine Einreichung für die Aufgabe \'<i>{$a->assignment} vorgenommen</i>\'.</p>
<p>Sie können den Status Ihrer <a href="{$a->url}">Einreichung einsehen</a>.</p>';
$string['submissionreceiptsmall'] = 'Sie haben eine Einreichung für die Aufgabe {$a->assignment} vorgenommen';
$string['submissionreceipttext'] = 'Sie haben eine Einreichung
für \'{$a->assignment}\' vorgenommen.

Sie können den Status Ihrer Einreichung einsehen:

    {$a->url}';
$string['submissions'] = 'Einreichungen';
$string['submitted'] = 'Eingereicht';
$string['submitvideo'] = 'Einreichen';
$string['timemodified'] = 'Einreichung zuletzt geändert';
$string['timeremaining'] = 'Verbleibende Zeit';
$string['useremail'] = 'E-Mail';
$string['userpicture'] = 'Benutzerbild';
$string['video_preview_header'] = 'Vorschau der Einreichung';
$string['viewsubmission'] = 'Einreichung anzeigen';
$string['yes'] = 'Ja';
