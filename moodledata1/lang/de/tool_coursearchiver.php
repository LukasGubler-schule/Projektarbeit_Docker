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
 * Strings for component 'tool_coursearchiver', language 'de', version '3.10'.
 *
 * @package     tool_coursearchiver
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessafter'] = 'Letzter Zugriff nach';
$string['accessbefore'] = 'Letzter Zugriff vor';
$string['accessbeforeafter'] = 'Aufgerufen vor / nach';
$string['anycategory'] = 'Alle Kursbereiche';
$string['archive'] = 'Kurse archivieren';
$string['archiveemail'] = 'Sende "Kurs wird archiviert" - E-Mails';
$string['archivelist'] = 'Kursarchive';
$string['archivelocation'] = 'Kursarchivierung Unterverzeichnis';
$string['archivewarningemailsetting'] = 'Standardmäßiger E-Mail-Text "Kurs wird archiviert"';
$string['archivewarningemailsetting_help'] = 'Das ist der Inhalt der E-Mail, der an alle Trainer/innen eines zu archivierenden Kurses gesendet wird.';
$string['archivewarningemailsettingdefault'] = '%to

Wir möchten Sie darüber informieren, dass die folgenden Moodlekurse, in denen Sie als Trainer/in eingesetzt wurden, bald archiviert werden.
Das bedeutet, dass die Kurse gesichert und anschließend aus Moodle entfernt werden. Es besteht die Möglichkeit, bestimmte Kurse von dieser Kursarchivierung auszuschließen. Bitte klicken Sie hierzu auf den Link neben dem betreffenden Kurs.

%courses

Vielen Dank.';
$string['archivewarningsubject'] = 'Achtung: Kurse werden bald archiviert.';
$string['back'] = 'Zum Start';
$string['cannotdeletecoursenotexist'] = 'Ein Kurs, der nicht existiert, kann nicht gelöscht werden.';
$string['category'] = 'Kursbereich';
$string['cli_cannot_continue'] = '\\nAngehalten: Nicht ausreichend Information um fortzufahren.\\n';
$string['cli_question_archive'] = '{$a} Kurse archivieren und löschen?';
$string['cli_question_archiveemail'] = '{$a} Nutzer/innen eine E-Mail "Kurs wird archiviert" senden?';
$string['cli_question_delete'] = '{$a} Kurse löschen?';
$string['cli_question_hide'] = '{$a} Kurse verbergen?';
$string['cli_question_hideemail'] = '{$a} Nutzer/innen eine E-Mail "Kurs wird verborgen" senden?';
$string['confirm'] = 'Weiter';
$string['confirmmessage'] = 'Möchten Sie wirklich den Kurs {$a}?';
$string['confirmmessagearchive'] = '{$a} Kurse archivieren und löschen?';
$string['confirmmessagearchiveemail'] = 'E-Mail an {$a} Kurseigentümer/innen senden?';
$string['confirmmessagedelete'] = '{$a} Kurse vollständig löschen?';
$string['confirmmessagehide'] = '{$a} Kurse verbergen?';
$string['confirmmessagehideemail'] = 'E-Mail an {$a} Kurseigentümer/innen senden?';
$string['course_skipped'] = '{$a->fullname} wird für {$a->optoutmonths} Monat(e) übersprungen. Vielen Dank!';
$string['coursearchiver'] = 'Kursarchivierung';
$string['coursearchiver_settings'] = 'Kursarchivierung: Einstellungen';
$string['coursearchiverpath'] = 'Ordnerpfad, in dem Kurse archiviert werden';
$string['coursedeleted'] = 'Kurs gelöscht';
$string['coursedeletionnotallowed'] = 'Das Löschen dieses Kurses ist nicht erlaubt.';
$string['coursefullname'] = 'Kurs Langname';
$string['courseid'] = 'Kurs ID';
$string['courseidnum'] = 'Kurs ID-Nummer';
$string['courseselector'] = 'Kurs Suchresultate';
$string['courseshortname'] = 'Kurs Kurzname';
$string['createdafter'] = 'Erstellt nach';
$string['createdbefore'] = 'Erstellt vor';
$string['createdbeforeafter'] = 'Erstellt vor / nach';
$string['delete'] = 'Kurse löschen';
$string['deselectall'] = 'Alles abwählen';
$string['email'] = 'E-Mail senden';
$string['emailselector'] = 'Nutzer/innen ausgewählt, die E-Mails erhalten sollen';
$string['empty'] = 'leer';
$string['emptycourse'] = 'Leerer Kurs';
$string['emptyonly'] = 'Nur leere Kurse finden';
$string['endafter'] = 'Endet nach';
$string['endbefore'] = 'Endet vor';
$string['error_key'] = 'Falscher Sicherheitsschlüssel';
$string['errorarchivepath'] = 'Ordnerpfad zur Archivierung konnte nicht erstellt werden.';
$string['errorarchivingcourse'] = 'Kurs: ({$a->id}) {$a->fullname} konnte nicht archiviert werden.';
$string['errorbackup'] = 'Die Sicherung ist fehlgeschlagen.';
$string['errordeletingcourse'] = 'Kurs: ({$a->id}) {$a->fullname} konnte nicht gelöscht werden.';
$string['erroremptysearch'] = 'Keine Suchkriterien eingegeben';
$string['errorhidingcourse'] = 'Kurs: ({$a->id}) {$a->fullname} konnte nicht verborgen werden.';
$string['errorinsufficientdata'] = 'Es sind nicht genügend Informationen vorhanden, um diese Aktion durchzuführen.';
$string['errormissingcourses'] = 'Die Variable "%courses" ist nicht in der E-Mail-Vorlage enthalten. Das ist eine Liste von Kursen.';
$string['errormissingto'] = 'Die Variable  "%to" ist nicht in der E-Mail-Vorlage enthalten. Das ist eine Liste von Empfängern.';
$string['errornonnumericid'] = 'Kurs-ID muss eine Zahl sein.';
$string['errors'] = 'Fehler:';
$string['errors_count'] = 'Fehler: {$a}';
$string['errorsendingemail'] = 'E-Mail-Versand für {$a->firstname} {$a->lastname} ({$a->email}) ist gescheitert.';
$string['errorvalidarchive'] = 'Keine gültige Sicherungsdatei';
$string['hide'] = 'Kurse verbergen';
$string['hideemail'] = 'Sende "Kurs wird verborgen" - E-Mails';
$string['hidewarningemailsetting'] = 'Standardmäßiger E-Mail-Text "Kurs wird verborgen"';
$string['hidewarningemailsetting_help'] = 'Das ist der Inhalt der E-Mail, der an alle Trainer/innen eines zu verbergenden Kurses gesendet wird.';
$string['hidewarningemailsettingdefault'] = '%to

Wir möchten Sie darüber informieren, dass die folgenden Moodlekurse, in denen Sie als Trainer/in eingesetzt wurden, bald verborgen werden.
Das bedeutet, dass Studenten, die in diese Kurse eingeschrieben sind, keinen Zugriff mehr auf diese haben. Es besteht die Möglichkeit, bestimmte Kurse von diesem Vorgang auszuschließen. Klicken Sie hierzu auf den Link neben dem betreffenden Kurs.

%courses

Vielen Dank.';
$string['hidewarningsubject'] = 'Hinweis: Die Kurse werden bald verborgen.';
$string['includesubcat'] = 'Kurse in Subkategorien mit einbeziehen';
$string['messageprovider:courseowner'] = 'Mitteilungen durch das Plugin "Kursarchivierung"';
$string['never'] = 'Nie';
$string['nocoursesfound'] = 'Es wurden keine Kurse gefunden.';
$string['nocoursesselected'] = 'Um diese Aktion durchzuführen, muss mind. 1 Kurs ausgewählt sein.';
$string['noticecoursehidden'] = 'Kurs ({$a->id}) {$a->fullname} war bereits verborgen.';
$string['notices'] = 'Hinweise';
$string['notices_count'] = 'Hinweise: {$a}';
$string['nousersfound'] = 'Es gibt keine Kurseigentümer/innen zum Informieren';
$string['nousersselected'] = 'Um diese Aktion durchzuführen, muss mind. 1 Nutzer/in ausgewählt werden.';
$string['optoutarchive'] = 'Diesen Kurs nicht archivieren.';
$string['optoutby'] = 'Veranlasst durch';
$string['optouthide'] = 'Diesen Kurs nicht verbergen.';
$string['optoutleft'] = '{$a} Tage verbleibend';
$string['optoutlist'] = 'Optout Liste verwalten';
$string['outaccess'] = 'Letzter Zugriff';
$string['outemail'] = 'E-Mail';
$string['outfirstname'] = 'Vorname';
$string['outfullname'] = 'Langname';
$string['outid'] = 'ID';
$string['outidnumber'] = 'ID-Nummer';
$string['outlastname'] = 'Nachname';
$string['outowners'] = 'Kurseigentümer/innen';
$string['outselected'] = 'Gewählt';
$string['outshortname'] = 'Kurzname';
$string['outuse'] = 'Letzte Nutzung';
$string['pluginname'] = 'Kursarchivierung';
$string['privacy:metadata'] = 'Das Plugin \'Kursarchivierung\' speichert keine personenbezogenen Daten.';
$string['processarchiving'] = 'Ausgewählte Kurse werden archiviert';
$string['processcomplete'] = 'Vorgang beendet';
$string['processdeleting'] = 'Ausgewählte Kurse werden gelöscht';
$string['processemailing'] = 'E-Mails werden gesendet';
$string['processhiding'] = 'Ausgewählte Kurse werden verborgen';
$string['processstarted'] = 'Der Vorgang läuft bereits';
$string['results'] = 'Ergebnisse';
$string['results_archive'] = 'Archivierte Kurse: {$a}';
$string['results_archiveemail'] = 'Gesendete E-Mails zu "Kurse werden archiviert": {$a}';
$string['results_courselist'] = 'Gelistete Kurse: {$a}';
$string['results_delete'] = 'Gelöschte Kurse: {$a}';
$string['results_getemails'] = 'Gefundene E-Mail Adressen: {$a}';
$string['results_hide'] = 'Verborgene Kurse: {$a}';
$string['results_hideemail'] = 'Gesendete E-Mails zu "Kurse werden verborgen": {$a}';
$string['resume'] = 'Zurück';
$string['resumenone'] = 'Keine Sicherungen gefunden';
$string['resumeselect'] = 'Wähle Sicherung';
$string['save'] = 'Erstelle Sicherung';
$string['saved'] = 'Sicherung wurde durchgeführt';
$string['search'] = 'Nach Kursen suchen';
$string['selectall'] = 'Alles auswählen';
$string['startafter'] = 'Startet nach';
$string['startbefore'] = 'Startet vor';
$string['startend'] = 'Start / Ende Daten';
$string['status'] = 'Status:';
$string['step2savetitle'] = '{$a} Kursliste gesichert';
$string['step3savetitle'] = '{$a} E-Mail Liste gesichert';
$string['unknownerror'] = 'Der Vorgang führte zu einen Fehler, der den Neustart dieses Vorgangs erforderlich macht.';
$string['visible'] = 'sichtbar';
