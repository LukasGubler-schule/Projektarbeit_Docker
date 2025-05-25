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
 * Strings for component 'reengagement', language 'de', version '3.10'.
 *
 * @package     reengagement
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitycompleted'] = 'Diese Aktivität wurde als abgeschlossen markiert';
$string['afterdelay'] = 'Nach der Verzögerung';
$string['areyousure'] = 'Sind Sie sicher, dass Sie diese Änderung vornehmen wollen?';
$string['completeattimex'] = 'Diese Aktivität ist am {$a} beendet';
$string['completion'] = 'Fertigstellung';
$string['completiondatesupdated'] = 'Fertigstellungstermine aktualisiert';
$string['completiontime'] = 'Abschlusszeitpunkt';
$string['completionwillturnon'] = 'Beachten Sie, dass durch das Hinzufügen dieser Aktivität zum Kurs der Abschluss der Aktivität ermöglicht wird.';
$string['crontask'] = 'Cron Tasks für Erinnerungen';
$string['cronwarning'] = 'Der Task für die  Erinnerung ist in den letzten 60 Minuten nicht ausgeführt worden. Cron muss dafür aktiviert sein.';
$string['days'] = 'Tage';
$string['duration'] = 'Dauer';
$string['emailcontent'] = 'Benachrichtigungsinhalt (Nutzer)';
$string['emailcontent_help'] = 'Wenn das Modul einen Nutzer benachrichtigt, nimmt es den Benachrichtigungsinhalt aus diesem Feld.';
$string['emailcontentdefaultvalue'] = 'Dies ist eine Erinnerung aus dem Kurs %courseshortname%.';
$string['emailcontentmanager'] = 'Benachrichtigungsinhalt (Nutzer)';
$string['emailcontentmanager_help'] = 'Wenn das Modul den Vorgesetzten des Nutzers benachrichtigt, verwendet es diesen Inhalt';
$string['emailcontentmanagerdefaultvalue'] = 'Dies ist eine Erinnerung aus dem Kurs %courseshortname%,bzgl. des Nutzers  %userfirstname% %userlastname%.';
$string['emailcontentthirdparty'] = 'Inhalt der Nachricht, die weitergeleitet wird';
$string['emailcontentthirdparty_help'] = 'Wenn das Modul einen weiteren  Nutzer informiert, verwendet es diesen Inhalt';
$string['emailcontentthirdpartydefaultvalue'] = 'Dies ist eine Erinnerungsnachricht zum Kurs %courseshortname%,  bzgl. %userfirstname% %userlastname%.';
$string['emaildelay'] = 'Benachrichtigungsverzögerung';
$string['emaildelay_help'] = 'Wenn das Modul so eingestellt ist, dass Benutzer "nach Verzögerung" benachrichtigt werden, steuert diese Einstellung, wie lange die Verzögerung ist.';
$string['emailrecipient'] = 'Empfänger benachrichtigen';
$string['emailrecipient_help'] = 'Wenn eine Benachrichtigung gesendet werden muss, um den Nutzer erneut für den Kurs zu sensibilisieren, wird durch diese Einstellung gesteuert, ob eine Benachrichtigung an den Nutzer, dessen Manager oder beide gesendet wird.';
$string['emailsubject'] = 'Betreff der Benachrichtigung (Nutzer)';
$string['emailsubject_help'] = 'Wenn das Modul einen Benutzer benachrichtigt, nimmt es den Betreff der Benachrichtigung aus diesem Feld.';
$string['emailsubjectmanager'] = 'Betreff der Benachrichtigung (Manager)';
$string['emailsubjectmanager_help'] = 'Wenn das Modul die Manager eines Benutzers benachrichtigt, nimmt es den Betreff der Benachrichtigung aus diesem Feld.';
$string['emailsubjectthirdparty'] = 'Betreff der Nachricht an weiteren Nutzer';
$string['emailsubjectthirdparty_help'] = 'Wenn das Modul einen Dritten benachrichtigt, nimmt es den Betreff der Benachrichtigung aus diesem Feld.';
$string['emailtime'] = 'Zeit benachrichtigen';
$string['emailuser'] = 'Nutzer benachrichtigen';
$string['frequencytoohigh'] = 'Die maximale Erinnerungsanzahl für die von Ihnen eingestellte Verzögerungszeit beträgt {$a}.';
$string['hours'] = 'Stunden';
$string['introdefaultvalue'] = 'Dies ist eine Wiederbeschaffungsaktivität. Ihr Zweck besteht darin, eine Zeitspanne zwischen den vorausgehenden Aktivitäten und den darauf folgenden Aktivitäten durchzusetzen.';
$string['messageprovider:mod_reengagement'] = 'Wiedereinstellungsbenachrichtigungen';
$string['minutes'] = 'Minuten';
$string['modulename'] = 'Erinnerung';
$string['modulenameplural'] = 'Erinnerungen';
$string['never'] = 'Niemals';
$string['newcompletiontime'] = 'Neue Fertigstellungszeit';
$string['nochange'] = 'Keine Änderung';
$string['nochangenoaccess'] = 'Keine Änderung (Benutzer hat keinen Kurs aufgerufen)';
$string['noemailattimex'] = 'Die für {$ a} geplante Nachricht wird nicht gesendet, da Sie die Zielaktivität abgeschlossen haben';
$string['nosuppresstarget'] = 'Keine Zielaktivität ausgewählt';
$string['oncompletion'] = 'Abschluss bei Erinnerung';
$string['periodtoolow'] = 'Die Verzögerung ist zu gering - es muss bei mindestens 5 Minuten liegen.';
$string['pluginname'] = 'Erinnerung';
$string['privacy:metadata:completiontime'] = 'Wenn das Modul fertiggestellt wird';
$string['privacy:metadata:emailsent'] = 'E-Mail wurde versandt';
$string['privacy:metadata:emailtime'] = 'Wann der Nutzer per E-Mail benachrichtigt wird';
$string['privacy:metadata:reengagement'] = 'Erinnerungs_ID';
$string['privacy:metadata:reengagement_inprogress'] = 'Erinnerungen werden verarbeitet';
$string['privacy:metadata:userid'] = 'Nutzer-ID, auf die sich diesen Datensatz bezieht';
