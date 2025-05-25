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
 * Strings for component 'local_assignsubmission_download', language 'de', version '4.5'.
 *
 * @package     local_assignsubmission_download
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['all'] = 'Alle';
$string['assignsubmission_download:view'] = 'Zugriff zu Dateiumbenennung und Abgaben-Export gewähren';
$string['choosegradingaction'] = 'Bewertungsvorgang';
$string['clean_filerenaming'] = 'Dateinamen bereinigen';
$string['clean_filerenaming_help'] = 'Sonderzeichen aus Dateinamen entfernen. Leerzeichen und Umlaute werden ersetzt, z.B. \'Übung 1-Gruppe$4\' wird zu \'Uebung_1-Gruppe4\'';
$string['data_preview'] = 'Datenvorschau';
$string['data_preview_help'] = 'Klicken Sie in der Datenvorschau auf [+] und [-] um die zu druckenden Spalten ein bzw. auszuschalten!';
$string['datapreviewtitle'] = 'Datenvorschau';
$string['datasettingstitle'] = 'Dateneinstellungen';
$string['dateinthefutureerror'] = '\'Abgabe neuer als\' kann nicht in der Zukunft sein';
$string['defaultfilerenamingpattern'] = '[filename]';
$string['defaultziprenamingpattern'] = '[courseshortname]-[assignmentname]-[assignmentid]';
$string['downloadprintpreviewtable'] = 'Abgabentabelle herunterladen.';
$string['downloadtype'] = 'Download';
$string['downloadtype:error'] = 'Wählen Sie bitte mindestens eine Option aus';
$string['downloadtype:feedbacks'] = 'Alle Feedbackdateien von Trainer/innen';
$string['downloadtype:submissions'] = 'Alle Abgabedateien von Teilnehmer/innen';
$string['downloadtype_feedbacks'] = 'Feedback herunterladen';
$string['downloadtype_help'] = 'Hier können Sie die Dateien auswählen, welche Sie herunterladen möchten - abgegebene Dateien von Teilnehmer/innen und/oder Feedback von Trainer/innen (Kommentare, kommentierte PDF-Dateien, Feedbackdateien)';
$string['downloadtype_submissions'] = 'Abgaben herunterladen';
$string['exportformat'] = 'Format';
$string['filenumberinfo'] = 'Anzahl hochladbarer Dateien ist höher als 1. Verwenden Sie [filenumber], um alle Abgaben einer Person zu sortieren.';
$string['filerenamesettingstitle'] = 'Alle Abgaben umbenannt herunterladen';
$string['filerenamingpattern'] = 'Namensschema';
$string['filerenamingpattern_help'] = 'Der Parameter \'Namensschema\' legt die Benennung der neuen Dateinamen fest. Für die Benennung stehen folgende Klammerausdrücke \'Tags\' zur Verfügung:<br>
<br>
[idnumber] Matrikelnummer<br>
[lastname] Nachname <br>
[firstname] Vorname <br>
[fullname] Voller Name <br>
[group] Gruppe, wenn Teilnehmer/in eingeschrieben<br>
[groupid] Gruppen-ID, wenn vorhanden<br>
[filename] ursprünglicher Dateiname<br>
[filenumber] fortlaufende Nummerierung für Dateien, die von einer Person hochgeladen werden<br>
[assignmentname] Name der Aufgabe<br>
[courseshortname] Kurzer Kursname<br>
[currentdate] Datum: Format JJJJMMTT (JahrMonatTag) <br>
[currenttime] Uhrzeit: Format HHMM (StundenMinuten) <br>
<br>
Werden im Textfeld zusätzliche alphanumerische Zeichen eingetragen, so werden diese allen Dateien zugefügt.<br>
<br>
Beispiel:<br>
Der Eintrag \'[idnumber]-[lastname]_[assignmentname]\' würde folgenden beispielhaften Dateinamen ergeben: \'01234567-Muster_Aufgabenname\'';
$string['hiddenuser'] = 'Teilnehmer/in';
$string['labelgroup'] = 'Download auf Gruppe fokussieren';
$string['labelgroup_help'] = 'Es werden nur die Abgaben der Teilnehmer/innen aus dieser Gruppe inkludiert.';
$string['labelgrouping'] = 'Download auf Gruppierung fokussieren';
$string['labelgrouping_help'] = 'Es werden nur die Abgaben der Studierenden aus dieser Gruppierung inkludiert.';
$string['lastdownloaded_title'] = 'Letzter Download der Person';
$string['lastdownloaded_title_help'] = 'Das Datum zeigt den Zeitpunkt des letzten Downloads von Abgaben der Teilnehmer/innen durch die Person an.';
$string['lastdownloadedfeedbacks_title'] = 'Letzter Download von Feedbackdateien der Person';
$string['lastdownloadedfeedbacks_title_help'] = 'Das Datum zeigt den Zeitpunkt des letzten Downloads von Feedbackdateien der Trainer/innen durch die Person an.';
$string['lastfeedbackdownloadsettings'] = 'Einstellungen zum letzten Download von Feedbackdateien';
$string['lastsubmissionsdownloadsettings'] = 'Einstellungen zum letzten Download';
$string['nameofziparchive'] = 'Name des Zip-Archivs';
$string['nameofziparchive_help'] = 'Name des Zip-Archivs, das die heruntergeladenen Dateien beinhaltet. Die folgenden Klammerbegriffe (\'tags\') sind verfügbar:<br>
    <br>
    [assignmentname] Name der Aufgabe<br>
    [assignmentid] ID der Aufgabe<br>
    [courseshortname] kurzer Kursname<br>
    [currentdate] Aktuelles Datum im Format YYYYMMDD (YearMonthDay)<br>
    [currenttime] Aktuelle Zeit im Format HHMM (HoursMinutes)<br>
    <br>
    Wenn Sie alphanumerische Zeichen (ohne Klammern) hinzufügen, werden diese Zeichen an den Namen des ZIP-Archivs angehängt<br>
    <br>
    Beispiel:<br>
    Der Eintrag \'[courseshortname]-[assignmentname]_[currentdate]\' ergibt den folgenden Zip-Archivnamen: \'EC-exampleassignment_20240401\'';
$string['nodownloadsyet'] = 'noch kein Download';
$string['nosubmissionneweras'] = 'Es wurde keine Abgabe nach {$a} getätigt.';
$string['notreuploadable_hint'] = 'Hinweis: Beachten Sie, dass bei aktivierten Feedback-Typen \'Feedbackdateien\' bzw. \'Offline-Bewertungstabelle\' die umbenannten Abgaben dieser Seite nicht wieder hochgeladen werden können.';
$string['onlinetext_defaultfilename'] = 'Onlinetext';
$string['onlypdf'] = 'PDF Einstellungen';
$string['optimum'] = 'Optimal';
$string['pdf_assignment'] = 'Aufgabe';
$string['pdf_availablefrom'] = 'Abgabebeginn';
$string['pdf_course'] = 'Kurs';
$string['pdf_duedate'] = 'Abgabetermin';
$string['pdf_group'] = 'Gruppe';
$string['pdf_nogroup'] = 'keine Gruppe';
$string['pdf_notactive'] = 'nicht aktiviert';
$string['pdf_view'] = 'Druckansicht';
$string['perpage'] = 'Abgaben pro Seite';
$string['perpage_help'] = 'Setzt den Standardwert für die Anzahl der Abgaben, die pro Seite im pdf angezeigt werden sollen. Wenn in Ihrem Kurs sehr viele Teilnehmer/innen eingeschrieben sind, können Sie mittels der Einstellung "Optimal" die Aufteilung der Listeneinträge pro Seite entsprechend der gewählten Schriftgröße und Seitenausrichtung optimieren.';
$string['perpage_propertydefault'] = '100';
$string['perpage_propertydescription'] = 'Setzt den Standardwert für die Anzahl der Abgaben die pro Seite angezeigt werden sollen, wenn Trainer/innen diese einsehen.<br>Wird von den persönlichen Einstellungen der Trainer/innen überschrieben. Der Absolutwert der Eingabe wird gespeichert.';
$string['perpage_propertyname'] = 'Default - Angezeigte Abgaben';
$string['pluginname'] = 'Export- und Dateiumbenennung von Abgaben';
$string['pluginname_print'] = 'Export';
$string['pluginname_submissions'] = 'Alle Abgaben umbenannt herunterladen';
$string['prevent_nameextension'] = 'Automatische Erweiterung von Dateinamen verhindern';
$string['prevent_nameextension_help'] = 'Diese Funktion verhindert die automatische Erweiterung der Dateinamen (mit Begriffen wie „_Submission_File_submissions“).';
$string['printpreview'] = 'Export';
$string['printpreviewtabledownloaded'] = 'Exportansicht heruntergeladen';
$string['printpreviewtabledownloaded_description'] = 'Nutzer/in {$a->userid} hat die Exportansicht für die Aufgabe mit der Kursmodul id {$a->contextinstanceid} heruntergeladen.';
$string['printpreviewtableviewed'] = 'Exportansicht angezeigt';
$string['printpreviewtableviewed_description'] = 'Nutzer/in {$a->userid} hat die Exportansicht für die Aufgabe mit der Kursmodul id {$a->contextinstanceid} angezeigt.';
$string['printsettingstitle'] = 'Exporteinstellungen';
$string['privacy:metadata:local_assignsubm_download'] = 'Tabelle zur Speicherung der Informationen über den letzten Download der Abgaben.';
$string['privacy:metadata:local_assignsubm_download:choosegroup'] = 'Die Gruppen-ID der Gruppe, nach der gefiltert wird';
$string['privacy:metadata:local_assignsubm_download:choosegrouping'] = 'Die Gruppierungs-ID der Gruppierung, nach der gefiltert wird.';
$string['privacy:metadata:local_assignsubm_download:cleanfilenames'] = 'Ob Dateinamen von Sonderzeichen bereinigt werden.';
$string['privacy:metadata:local_assignsubm_download:cmid'] = 'Die Kursmodul-ID der Aufgabe';
$string['privacy:metadata:local_assignsubm_download:filenamingscheme'] = 'Das Dateinamensschema, das für die Dateien für den Download verwendet wird.';
$string['privacy:metadata:local_assignsubm_download:id'] = 'Der eindeutige Bezeichner des Datensatzes.';
$string['privacy:metadata:local_assignsubm_download:lastdownloaded'] = 'Der Zeitstempel des letzten Downloads der Abgaben';
$string['privacy:metadata:local_assignsubm_download:preventnameextension'] = 'Ob die automatische Erweiterung von Dateinamen verhindert wird.';
$string['privacy:metadata:local_assignsubm_download:userid'] = 'Die ID des Users, der die Abgaben heruntergeladen hat.';
$string['privacy:metadata:local_assignsubm_download:zipnamingscheme'] = 'Das für das Zip-Archiv verwendete Namensschema.';
$string['privacy:metadata:local_assignsubm_feedback'] = 'Tabelle zur Speicherung der Informationen über den letzten Download von Feedbacks.';
$string['privacy:metadata:local_assignsubm_feedback:choosegroup'] = 'Die Gruppen-ID der Gruppe, nach der gefiltert wird';
$string['privacy:metadata:local_assignsubm_feedback:choosegrouping'] = 'Die Gruppierungs-ID der Gruppierung, nach der gefiltert wird.';
$string['privacy:metadata:local_assignsubm_feedback:cleanfilenames'] = 'Ob Dateinamen von Sonderzeichen bereinigt werden.';
$string['privacy:metadata:local_assignsubm_feedback:cmid'] = 'Die Kursmodul-ID der Aufgabe';
$string['privacy:metadata:local_assignsubm_feedback:filenamingscheme'] = 'Das Dateinamensschema, das für die Dateien für den Download verwendet wird.';
$string['privacy:metadata:local_assignsubm_feedback:id'] = 'Der eindeutige Bezeichner des Datensatzes.';
$string['privacy:metadata:local_assignsubm_feedback:lastdownloaded'] = 'Der Zeitstempel des letzten Downloads der Abgaben';
$string['privacy:metadata:local_assignsubm_feedback:preventnameextension'] = 'Ob die automatische Erweiterung von Dateinamen verhindert wird.';
$string['privacy:metadata:local_assignsubm_feedback:userid'] = 'Die ID des Users, der die Abgaben heruntergeladen hat.';
$string['privacy:metadata:local_assignsubm_feedback:zipnamingscheme'] = 'Das für das Zip-Archiv verwendete Namensschema.';
$string['privacy:metadata:preference:clean_filerenaming'] = 'Voreinstellung: Ob in Dateinamen zusätzlich Leer- und Sonderzeichen bei heruntergeladenen Abgaben bereinigt werden.';
$string['privacy:metadata:preference:downloadtype_feedbacks'] = 'Voreinstellung: Ob Feedback heruntergeladen wird.';
$string['privacy:metadata:preference:downloadtype_submissions'] = 'Voreinstellung: Ob Abgaben heruntergeladen werden.';
$string['privacy:metadata:preference:exportformat'] = 'Voreinstellung: Welches Format wird verwendet, wenn eine Datei exportiert wird.';
$string['privacy:metadata:preference:filerenamingpattern'] = 'Voreinstellung: Welches Namensschema wird verwendet, wenn Abgaben umbenannt heruntergeladen werden.';
$string['privacy:metadata:preference:nameofziparchive'] = 'Voreinstellung: Welcher Name das Zip-Archiv erhält, wenn Abgaben oder Feedback heruntergeladen werden.';
$string['privacy:metadata:preference:optimum'] = 'Voreinstellung: Ob automatisch entschieden wird, wie viele Abgaben pro Seite auf einem pdf exportiert werden.';
$string['privacy:metadata:preference:pageorientation'] = 'Voreinstellung: Welche Seitenausrichtung wird gewählt, wenn in ein pdf exportiert wird.';
$string['privacy:metadata:preference:perpage'] = 'Voreinstellung: Wie viele Abgaben werden auf einer Seite dargestellt, wenn in ein pdf exportiert wird.';
$string['privacy:metadata:preference:prevent_nameextension'] = 'Voreinstellung: Ob die automatische Erweiterung von Dateinamen beim Herunterladen von Abgaben oder Feedback verhindert werden soll.';
$string['privacy:metadata:preference:printheader'] = 'Voreinstellung: Ob bei einem Export Kopf- und Fußzeile inkludiert werden.';
$string['privacy:metadata:preference:textsize'] = 'Voreinstellung: Welche Textgröße wird verwendet, wenn in ein pdf exportiert wird.';
$string['privacy:metadata:preference:userfilter'] = 'Voreinstellung: Welche Nutzer/innen werden gefiltert, wenn in ein pdf exportiert wird.';
$string['rename_propertydescription'] = 'Verfügbare Tags: {$a}';
$string['show'] = 'Anzeigen';
$string['show_propertydescription'] = 'Bestimmt, ob der \'{$a->entrytoshow}\' Menüeintrag in der Aufgabe angezeigt werden soll';
$string['show_propertyname'] = '\'{$a->entrytoshow}\' anzeigen';
$string['strallononepage'] = 'alles auf eine Seite';
$string['strfilerenaming'] = 'Abgaben herunterladen';
$string['strlandscape'] = 'Querformat';
$string['strlarge'] = 'groß';
$string['strmedium'] = 'mittel';
$string['stror'] = 'oder';
$string['strpageorientation'] = 'Seitenausrichtung';
$string['strpapersizes'] = 'Papierformat';
$string['strportrait'] = 'Hochformat';
$string['strprint'] = 'Datei herunterladen';
$string['strprintheader'] = 'Kopf-/Fußzeile';
$string['strprintheader_help'] = 'Kopf-/Fußzeilen inkludieren, wenn angekreuzt';
$string['strprintheaderlong'] = 'Kopf-/Fußzeilen inkludieren, wenn angekreuzt';
$string['strrefreshdata'] = 'Vorschau aktualisieren';
$string['strsmall'] = 'klein';
$string['strtextsize'] = 'Textgröße';
$string['submissionneweras'] = 'Abgaben neuer als';
$string['submissionneweras_help'] = 'Nur Abgaben herunterladen, die nach einem bestimmten Datum hinzugefügt wurden. Wenn ein Abgabetyp keinen Zeitstempel hat (Texteingabe online) wird der Zeitstempel der Abgabe verwendet.';
$string['submissions'] = 'Abgaben';
$string['userfilter'] = 'Nutzerfilter';
$string['viewprintpreviewtable'] = 'Abgabentabelle anzeigen';
