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
 * Strings for component 'bizexaminer', language 'de', version '4.5'.
 *
 * @package     bizexaminer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikeyinstance'] = 'Instanz Domain';
$string['apikeyinstance_desc'] = 'Der Domainname Ihrer bizExaminer Instanz (ohne https:// oder Pfad).';
$string['apikeyorganisation'] = 'API Schlüssel Organisation';
$string['apikeyorganisation_desc'] = 'Der API Schlüssel für die Organisation.';
$string['apikeyowner'] = 'API Schlüssel Owner';
$string['apikeyowner_desc'] = 'Der API Schlüssel für den Owner.';
$string['attempt_failed'] = 'Nicht bestanden';
$string['attempt_heading'] = 'Antritt für {$a}';
$string['attempt_noresults'] = '-';
$string['attempt_pass'] = 'Bestanden';
$string['attempt_status_aborted'] = 'Abgebrochen';
$string['attempt_status_completed'] = 'Abgeschlossen';
$string['attempt_status_date_completed'] = 'Beendet am {$a}';
$string['attempt_status_date_started'] = 'Begonnen am {$a}';
$string['attempt_status_pendingresults'] = 'Ergebnisse ausstehend';
$string['attempt_status_started'] = 'Gestartet';
$string['attempt_viewattempt'] = 'Details';
$string['attempts'] = 'Antritte';
$string['attempts_heading'] = 'Antritte für {$a}';
$string['attempts_no'] = '{$a} Antritte';
$string['attempts_table_actions'] = 'Aktionen';
$string['attempts_table_heading_all'] = 'Zusammenfassung aller Antritte';
$string['attempts_table_heading_yours'] = 'Zusammenfassung der vorherigen Antritte';
$string['attempts_table_no'] = 'Antritt #';
$string['attempts_table_user'] = 'Nutzer/in';
$string['attempts_view_all'] = 'Alle Antritte ansehen';
$string['bizexaminer:addinstance'] = 'Neue Prüfung erstellen';
$string['bizexaminer:attempt'] = 'Prüfung durchführen';
$string['bizexaminer:deleteanyattempt'] = 'Antritt (eines beliebigen Teilnehmenden) löschen';
$string['bizexaminer:view'] = 'Prüfung ansehen';
$string['bizexaminer:viewanyattempt'] = 'Alle Antritte (von beliebigen Teilnehmer/innen) zu einer Prüfung ansehen';
$string['bizexaminer:viewownattempt'] = 'Eigene Antritte zu einer Prüfung ansehen';
$string['callbackapi_differentuser'] = 'Sie sind nicht als der/die Nutzer/in eingeloggt, der/die Prüfung gestartet hat.';
$string['checktestapi'] = 'Zugangsdaten testen';
$string['configureapi'] = 'API Zugangsdaten konfigurieren';
$string['deletattempt'] = 'Löschen';
$string['deleteattemptcheck'] = 'Möchten Sie diesen Antritt wirklich löschen?';
$string['deletedattempt'] = 'Antritt wurde erfolgreich gelöscht.';
$string['error_api_error'] = 'bizExaminer konnte die Anfrage nicht abarbeiten.';
$string['error_api_invalid_data'] = 'Die Daten für bizExaminer waren ungültig und die Prüfung konnte nicht gestartet werden.';
$string['error_api_keys'] = 'Die API Zugangsdaten für bizExaminer sind ungültig.';
$string['error_api_return_value'] = 'bizExaminer hat ungültige Daten zurückgegeben.';
$string['error_api_url'] = 'bizExaminer konnte unter der URL der API Zugangsdaten nicht erreicht werden.';
$string['error_exam_not_found'] = 'Etwas ist schief gelaufen. Diese Prüfung existiert nicht (mehr).';
$string['error_general'] = 'Etwas ist schief gelaufen. Bitte probieren Sie es noch einmal oder kontaktieren Sie den Administrator.';
$string['error_saving_exam'] = 'Beim Speichern der Prüfung ist ein Fehler aufgetreten.';
$string['exam_access_nomoreattempts'] = 'Es sind keine weiteren Antritte erlaubt.';
$string['exam_access_subnetwrong'] = 'Diese Prüfung kann nur von bestimmten festgelegten Computern aus durchgeführt werden. Ihr Computer befindet sich nicht auf der Liste.';
$string['exam_access_timeclose'] = 'Diese Prüfung ist momentan nicht verfügbar.';
$string['exam_access_timeclosed'] = 'Die Prüfung ist bereits geschlossen.';
$string['exam_access_timeopen'] = 'Die Prüfung ist verfügbar ab {$a}';
$string['exam_access_wait'] = 'Sie müssen abwarten, bevor Sie eine Wiederholung für diese Prüfung versuchen dürfen. Sie dürfen einen weiteren Antritt nach {$a} beginnen.';
$string['exam_error_booking'] = 'Es konnte keine Buchung/Schedule via API erstellt werden.';
$string['exam_error_participant'] = 'Der/die Teilnehmer/in konnte nicht via API erstellt werden.';
$string['exam_error_save_attempt'] = 'Der Antritt konnte nicht gespeichert werden.';
$string['exam_error_save_results'] = 'Die Ergebnisse konnten nicht gespeichert werden.';
$string['exam_module_invalid'] = 'Bitte wählen Sie ein gültiges Exam Modul aus.';
$string['exam_pendingresults_user'] = 'Der/die Teilnehmer/in hat die Prüfung noch nicht fertig abgeschlossen oder die Ergebnisse werden noch manuell überprüft.
Sie finden die Ergebnisse hier, sobald sie fertig sind.';
$string['exam_pendingresults_you'] = 'Sie haben die Prüfung noch nicht fertig abgeschlossen oder die Ergebnisse werden noch manuell überprüft.
Sie finden die Ergebnisse in Ihrem Profil, sobald sie fertig sind.';
$string['exam_resumeattempt'] = 'Prüfung fortsetzen';
$string['exam_retakeattempt'] = 'Prüfung erneut versuchen';
$string['exam_startattempt'] = 'Starte Prüfung';
$string['exam_view_certificate'] = 'Zertifikat ansehen';
$string['grade_current'] = 'Ihre Bewertung';
$string['grade_infos'] = 'Bewertung';
$string['grade_pass_out_of'] = '{$a->gradepass} von {$a->maxgrade}';
$string['gradeattemptfirst'] = 'Erster Antritt';
$string['gradeattemptlast'] = 'Letzter Antritt';
$string['gradeaverage'] = 'Durchschnitt';
$string['gradehighest'] = 'Beste Bewertung';
$string['modform_access_restrictions'] = 'Weitere Zugriffsbeschränkungen';
$string['modform_access_restrictions_delay1st2nd'] = 'Pause zwischen 1. und 2. Antritt';
$string['modform_access_restrictions_delay1st2nd_help'] = 'Wenn diese Option aktiviert ist, können Studierende einen zweiten Antritt erst nach Ablauf der festgelegten Zeit durchführen.';
$string['modform_access_restrictions_delaylater'] = 'Pause bei späteren Antritten';
$string['modform_access_restrictions_delaylater_help'] = 'Wenn diese Option aktiviert ist, können Studierende einen dritten und weitere Antritte erst nach Ablauf der festgelegten Zeit durchführen.';
$string['modform_access_restrictions_overduehandling'] = 'Wenn die Zeit abgelaufen ist';
$string['modform_access_restrictions_overduehandling_autoabandon'] = 'Der Antritt muss abgegeben werden, bevor die Zeit abgelaufen ist, damit er gewertet werden kann.';
$string['modform_access_restrictions_overduehandling_graceperiod'] = 'Es gibt eine Nachfirst, in der laufende Antritte abgegeben werden können.';
$string['modform_access_restrictions_overduehandling_graceperiod_field'] = 'Nachfrist für Abgabe';
$string['modform_access_restrictions_overduehandling_graceperiod_field_help'] = 'Wenn für den Zeitablauf gewählt wurde "Es gibt eine Nachfirst, in der laufende Antritte abgegeben werden können" wird diese zusätzliche Zeitdauer gewährt.';
$string['modform_access_restrictions_overduehandling_help'] = 'Was soll geschehen, wenn Teilnehmer/innen einen Antritt nicht abschließen bevor der Zeitraum abgelaufen ist';
$string['modform_access_restrictions_password'] = 'Kennwort';
$string['modform_access_restrictions_password_error_length'] = 'Das Kennwort muss 4-12 Zeichen lang sein.';
$string['modform_access_restrictions_password_help'] = 'Wenn Sie ein Kennwort festlegen, müssen die Teilnehmer/innen zuerst das Kennwort eingeben, bevor sie die Prüfung starten können. Muss 4-12 Zeichen lang sein.';
$string['modform_access_restrictions_requiresubnet'] = 'IP-Adresse';
$string['modform_access_restrictions_requiresubnet_help'] = 'Sie können den Zugriff auf bestimmte Rechner oder IP-Adressen beschränken, wenn z.B. nur Teilnehmer/innen die Prüfung in einem bestimmten Raum durchführen dürfen. Die zugelassenen IP-Adressen geben Sie in einer kommagetrennten Liste teilweise oder vollständig an (z.B. <b>192.168. , 231.54.211.0/20, 231.3.56.211</b>).';
$string['modform_access_restrictions_timeclose'] = 'Prüfung schließen ab';
$string['modform_access_restrictions_timeclose_error_beforopen'] = 'Sie haben einen Endzeitpunkt vor dem Startzeitpunkt angegeben.';
$string['modform_access_restrictions_timeopen'] = 'Prüfung öffnen ab';
$string['modform_access_restrictions_timeopen_help'] = 'Teilnehmer/innen dürfen ihre Antritte nach dem Beginn anfangen und müssen sie vor den Ende beendet haben.';
$string['modform_add_feedbacks'] = '{no} weitere Feedbackfelder hinzufügen';
$string['modform_api_credentials'] = 'API Zugangsdaten';
$string['modform_api_credentials_help'] = 'Wählen Sie API Zugangsdaten für bizExaminer aus und speichern Sie das Formular. Sie können diese in den Einstellungen anlegen.';
$string['modform_api_credentials_invalid'] = 'Die Zugangsdaten für diese Prüfung sind ungültig.';
$string['modform_api_credentials_save'] = 'Speichere API Zugangsdaten';
$string['modform_api_credentials_save_help'] = 'Nachdem Sie die API Zugangsdaten ausgewählt haben, speichern Sie das Formular um die verfügbaren Exam Module und Remote Proctoren anzuzeigen.';
$string['modform_attemptsallowed'] = 'Erlaubte Antritte';
$string['modform_exam_module'] = 'Exam Modul';
$string['modform_exam_module_error'] = 'Fehler beim Laden der Exam Module. Überprüfen Sie bitte auch die API Zugangsdaten - Sie können diese in den Einstellungen testen.';
$string['modform_exam_module_help'] = 'Wählen Sie ein Exam Modul und eine Inhaltsversion aus.';
$string['modform_exam_module_none'] = 'Keine Exam Module gefunden. Bitte stellen Sie sicher, dass ein Exam in bizExaminer angelegt ist.
Überprüfen Sie bitte auch die API Zugangsdaten - Sie können diese in den Einstellungen testen.';
$string['modform_examity_courseId'] = 'Kurs ID';
$string['modform_examity_courseName'] = 'Name des Kurses';
$string['modform_examity_examInstructions'] = 'Anleitung für Studierende';
$string['modform_examity_examLevel'] = 'Session Typ';
$string['modform_examity_examLevel_auto_auth'] = 'Auto-Authentifizierung';
$string['modform_examity_examLevel_auto_proctoring_premium'] = 'Automatisches Proctoring Premium';
$string['modform_examity_examLevel_auto_proctoring_standard'] = 'Automatisches Proctoring Standard';
$string['modform_examity_examLevel_live_auth'] = 'Live Authentifizierung';
$string['modform_examity_examLevel_live_proctoring'] = 'Live Proctoring';
$string['modform_examity_examLevel_record_review'] = 'Record & Review Proctoring';
$string['modform_examity_examName'] = 'Name der Prüfung';
$string['modform_examity_instructorEmail'] = 'Email address of the instructor';
$string['modform_examity_instructorFirstName'] = 'Vorname des/der Instruktor/in';
$string['modform_examity_instructorLastName'] = 'Nachname des/der Instruktor/in';
$string['modform_examity_proctorInstructions'] = 'Anleitung für Proctoren';
$string['modform_examity_settings'] = 'Examity';
$string['modform_examity_v5_courseCode'] = 'Kurs Code';
$string['modform_examity_v5_courseName'] = 'Name des Kurses';
$string['modform_examity_v5_examName'] = 'Name der Prüfung';
$string['modform_examity_v5_examSecurityLevel'] = 'Exam Sicherheitslevel';
$string['modform_examity_v5_examSecurityLevel_automated'] = 'Automatisch';
$string['modform_examity_v5_examSecurityLevel_live_auth'] = 'Live Authentifizierung + audit';
$string['modform_examity_v5_examSecurityLevel_live_proctoring'] = 'Live proctoring';
$string['modform_examity_v5_instructorEmail'] = 'E-Mail-Adresse des/der Instruktor/in';
$string['modform_examity_v5_instructorFirstName'] = 'Vorname des/der Instruktor/in';
$string['modform_examity_v5_instructorLastName'] = 'Nachname des/der Instruktor/in';
$string['modform_examity_v5_settings'] = 'Examity';
$string['modform_examus_identification'] = 'Identifikation';
$string['modform_examus_identification_face'] = 'Gesicht';
$string['modform_examus_identification_face_and_passport'] = 'Gesicht und Reisepass';
$string['modform_examus_identification_passport'] = 'Reisepass';
$string['modform_examus_language'] = 'Constructor Sprache';
$string['modform_examus_language_ar'] = 'Arabisch';
$string['modform_examus_language_en'] = 'Englisch';
$string['modform_examus_language_es'] = 'Spanisch';
$string['modform_examus_language_it'] = 'Italienisch';
$string['modform_examus_language_ru'] = 'Russisch';
$string['modform_examus_proctoring'] = 'Typ';
$string['modform_examus_respondus'] = 'Respondus LockDown Browser verwenden';
$string['modform_examus_respondus_help'] = 'Respondus LockDown Browser verwenden';
$string['modform_examus_settings'] = 'Alemira';
$string['modform_feedbacktext'] = 'Feedback';
$string['modform_grademethod'] = 'Bewertungsmethode';
$string['modform_grademethod_help'] = 'Wenn mehrere Antritte erlaubt sind, gibt es unterschiedliche Möglichkeiten, eine abschließende Bewertung für die Teilnehmer/innen festzulegen:

* Beste Bewertung aus allen Antritte
* Durchschnitt aus allen Antritte
* Erster Antritt (alle weiteren Antritte werden ignoriert)
* Letzter Antritt (alle weiteren Antritte werden ignoriert)';
$string['modform_meazure_allowedResources'] = 'Erlaubte Ressourcen';
$string['modform_meazure_allowedResources_all_websites'] = 'Alle Websites';
$string['modform_meazure_allowedResources_approved_website'] = 'Genehmigte Websites';
$string['modform_meazure_allowedResources_bathroom_breaks'] = 'WC-Pause';
$string['modform_meazure_allowedResources_course_website'] = 'Kurs Website';
$string['modform_meazure_allowedResources_ebook_computer'] = 'Ebook (PC)';
$string['modform_meazure_allowedResources_ebook_website'] = 'Ebook (Website)';
$string['modform_meazure_allowedResources_excel'] = 'Excel';
$string['modform_meazure_allowedResources_excel_notes'] = 'Notizen (Excel)';
$string['modform_meazure_allowedResources_handwritten_notes'] = 'Handgeschrieben Notizen';
$string['modform_meazure_allowedResources_pdf_notes'] = 'Notizen (PDF)';
$string['modform_meazure_allowedResources_powerpoint'] = 'Powerpoint';
$string['modform_meazure_allowedResources_powerpoint_notes'] = 'Notizen (Powerpoint)';
$string['modform_meazure_allowedResources_printed_notes'] = 'Gedruckte Notizen';
$string['modform_meazure_allowedResources_scientific_calculator'] = 'Wissenschaftlicher Taschenrechner';
$string['modform_meazure_allowedResources_word'] = 'Word';
$string['modform_meazure_allowedResources_word_notes'] = 'Notizen (Word)';
$string['modform_meazure_allowedUrls'] = 'Erlaubte URLs';
$string['modform_meazure_allowedUrls_add'] = 'URL hinzufügen';
$string['modform_meazure_allowedUrls_delete'] = 'URL entfernen';
$string['modform_meazure_open_on_start'] = 'Öffne URL {no} beim Starten';
$string['modform_meazure_securityPreset_high'] = 'Hoch';
$string['modform_meazure_securityPreset_low'] = 'Niedrig';
$string['modform_meazure_securityPreset_medium'] = 'Mittel';
$string['modform_meazure_sessionType'] = 'Typ';
$string['modform_meazure_settings'] = 'Meazure Learning';
$string['modform_meazure_url'] = 'Erlaubte URL {no}';
$string['modform_mingrade'] = 'Mindestpunkte/-note';
$string['modform_proctorexam_dontSendEmails'] = 'Keine Emails an TeilnehmerInnen senden';
$string['modform_proctorexam_examInfo'] = 'Allgemeine Anweisungen';
$string['modform_proctorexam_examInfo_help'] = 'Diese werden angezeigt, bevor der Teilnehmer die Prüfung startet.';
$string['modform_proctorexam_individualInfo'] = 'Individuelle Informationen für TeilnehmerInnen.';
$string['modform_proctorexam_individualInfo_help'] = 'Ein personalisierter Link zum Starten der Prüfung (Text siehe unten) wird am Ende des Texts eingefügt. Alternativ kann mit <code>##start_exam##</code> die Position des Links genauer kontrolliert werden.';
$string['modform_proctorexam_mobileCam'] = 'Mobile Kamera verwenden';
$string['modform_proctorexam_mobileCam_help'] = 'Mobile Kamera als zusätzliches Aufnahmegerät verwenden';
$string['modform_proctorexam_sessionType'] = 'Session Typ';
$string['modform_proctorexam_sessionType_classroom'] = 'Klassenzimmer';
$string['modform_proctorexam_sessionType_live_proctoring'] = 'Live Proctoring';
$string['modform_proctorexam_sessionType_record_review'] = 'Record Review';
$string['modform_proctorexam_settings'] = 'Proctor Exam';
$string['modform_proctorexam_startExamLinkText'] = 'Text für den »Prüfung starten« Link';
$string['modform_proctorexam_startExamLinkText_default'] = 'Starte Exam';
$string['modform_proctorio_allowNewTabs'] = 'Erlaube neue Tabs';
$string['modform_proctorio_closeOpenTabs'] = 'Schließe offene Tabs';
$string['modform_proctorio_disableClipboard'] = 'Zwischenablage deaktivieren';
$string['modform_proctorio_disableDownloads'] = 'Downloads deaktivieren';
$string['modform_proctorio_disablePrinting'] = 'Drucken deaktivieren';
$string['modform_proctorio_disableRightClick'] = 'Rechtsklick deaktivieren';
$string['modform_proctorio_fullscreenMode'] = 'Vollbild erzwingen';
$string['modform_proctorio_fullscreenMode_lenient'] = 'Lenient';
$string['modform_proctorio_fullscreenMode_moderate'] = 'Moderate';
$string['modform_proctorio_fullscreenMode_no'] = 'Nein';
$string['modform_proctorio_fullscreenMode_severe'] = 'Severe';
$string['modform_proctorio_recordAudio'] = 'Audio aufzeichnen';
$string['modform_proctorio_recordRoomStart'] = 'Record room on start';
$string['modform_proctorio_recordRoomStart_help'] = 'Require the test taker to perform a room scan before starting the exam';
$string['modform_proctorio_recordScreen'] = 'Bildschirm aufzeichnen';
$string['modform_proctorio_recordVideo'] = 'Video aufzeichnen';
$string['modform_proctorio_settings'] = 'Proctorio';
$string['modform_proctorio_verifyIdMode'] = 'ID Überprüfen';
$string['modform_proctorio_verifyIdMode_auto'] = 'Automatische ID Überprüfung';
$string['modform_proctorio_verifyIdMode_live'] = 'Live ID Überprüfung';
$string['modform_proctorio_verifyIdMode_no'] = 'Nein';
$string['modform_remote_proctor'] = 'Remote Proctoring verwenden';
$string['modform_remote_proctor_error'] = 'Fehler beim Laden der Remote Proctoring Accounts. Überprüfen Sie bitte die API Zugangsdaten - Sie können diese in den Einstellungen testen.';
$string['modform_remote_proctor_header'] = 'Remote Proctoring';
$string['modform_remote_proctor_help'] = 'Wählen Sie einen konfigurierten Remote Proctoring Service aus.';
$string['modform_remote_proctor_invalid'] = 'Sie müssen einen Remote Proctoring Service oder "Kein Remote Proctoring" auswählen.';
$string['modform_remote_proctor_none'] = 'Keine Remote Proctoring Services gefunden. Bitte stellen Sie sicher, dass Remote Proctor Accounts angelegt sind.
Überprüfen Sie bitte auch die API Zugangsdaten - Sie können diese in den Einstellungen testen.';
$string['modform_usebecertificate'] = 'bizExaminer Zertifikate verwenden.';
$string['modform_usebecertificate_help'] = 'Aktivieren Sie diese Option, um dem Nutzer das Zertifikat aus bizExaminer anzuzeigen.';
$string['modulename'] = 'bizExaminer Prüfung';
$string['modulename_help'] = 'Führen Sie eine bizExaminer Prüfung in ihrem Kurs durch.

Prüfungen werden unterschiedlich eingesetzt und haben sehr umfangreiche Einstelloptionen.

Jeder Versuch wird automatisch bewertet (oder manuell, abhängig davon wie die Fragen in bizExaminer konfiguriert sind), und die Endnote wird in den Bewertungen festgehalten.

Ein Exam Modul muss in bizExaminer konfiguriert werden, Remote Proctor Verbindungen von bizExaminer können ebenfalls verwendet werden.';
$string['modulenameplural'] = 'bizExaminer Prüfungen';
$string['nocredentials'] = 'Bitte konfigurieren Sie die API Zugangsdaten.';
$string['overallfeedback'] = 'Gesamtfeedback';
$string['overallfeedback_help'] = 'Das Gesamtfeedback ist der Text, welcher angezeigt wird, wenn eine Prüfung abgeschlossen wurde. Indem zusätzliche Mindestpunkte/-noten eingetragen werden, kann der Text je nach Ergebnis unterschiedlich lauten.';
$string['pluginadministration'] = 'bizExaminer Verwaltung';
$string['pluginname'] = 'bizExaminer';
$string['privacy:metadata:attempt_results'] = 'Detaillierte Ergebnisse für Antritte aus bizExaminer.';
$string['privacy:metadata:attempt_results:achievedscore'] = 'Erreichte Punkteanzahl';
$string['privacy:metadata:attempt_results:attemptid'] = 'Die ID des Antritts.';
$string['privacy:metadata:attempt_results:certificateurl'] = 'URL zum bizExaminer Zertifikat';
$string['privacy:metadata:attempt_results:maxscore'] = 'Maximal mögliche Punkteanzahl';
$string['privacy:metadata:attempt_results:pass'] = 'Ob die Prüfung erfolgreich abgelegt wurde.';
$string['privacy:metadata:attempt_results:questionscorrectcount'] = 'Anzahl (korrekt) beantworteter Fragen.';
$string['privacy:metadata:attempt_results:questionscount'] = 'Anzahl angezeigter Fragen';
$string['privacy:metadata:attempt_results:result'] = 'Prozentpunkte die der/die Teilnehmer/in erreicht hat.';
$string['privacy:metadata:attempt_results:timetaken'] = 'Benötigte Zeit für den Antritt.';
$string['privacy:metadata:attempt_results:userid'] = 'Antretende/r Teilnehmer/in.';
$string['privacy:metadata:attempt_results:whenfinished'] = 'Zeitpunkt zu dem Versuch beendet wurde.';
$string['privacy:metadata:attempts'] = 'Details zu jedem Antritt der Prüfung';
$string['privacy:metadata:attempts:attempt'] = 'Antrittsnummer';
$string['privacy:metadata:attempts:bookingid'] = 'Die bookingId in bizExaminer (siehe Externe Daten).';
$string['privacy:metadata:attempts:examid'] = 'Die Prüfung zu der angetreten wurde.';
$string['privacy:metadata:attempts:participantid'] = 'Die participantid in bizExaminer (siehe Externe Daten).';
$string['privacy:metadata:attempts:status'] = 'Derzeitiger Status des Antritts.';
$string['privacy:metadata:attempts:timecreated'] = 'Zeitpunkt zu dem Versuch erstellt und gestartet wurde.';
$string['privacy:metadata:attempts:timemodified'] = 'Zeitpunkt zu dem Versuch aktualisiert wurde.';
$string['privacy:metadata:attempts:userid'] = 'Antretende/r Teilnehmer/in.';
$string['privacy:metadata:attempts:validto'] = 'Zeitpunkt bis wann der Antritt in bizExaminer gültig ist.';
$string['privacy:metadata:bizexaminer'] = 'Daten die zu bizExaminer gesendet werden.';
$string['privacy:metadata:bizexaminer:email'] = 'E-Mail Adresse des/der Teilnehmer/in aus dem Moodle Profil.';
$string['privacy:metadata:bizexaminer:firstname'] = 'Vorname des/der Teilnehmer/in aus dem Moodle Profil.';
$string['privacy:metadata:bizexaminer:lastname'] = 'Nachname des/der Teilnehmer/in aus dem Moodle Profil.';
$string['privacy:metadata:grades'] = 'Details über die Gesamtbewertung der Prüüfung.';
$string['privacy:metadata:grades:examid'] = 'Die Prüfung die bewertet wurde.';
$string['privacy:metadata:grades:grade'] = 'Gesamtbewertung der Prüfung';
$string['privacy:metadata:grades:timemodified'] = 'Zeitpunkt an dem Bewertung geändert wurde';
$string['privacy:metadata:grades:timesubmitted'] = 'Zeitpunkt an dem Bewertung erstellt wurde (=Antritt wurde abgegeben).';
$string['privacy:metadata:grades:userid'] = 'Bewertete/r Teilnehmer/in';
$string['reset_delete_attempts'] = 'Antritte gelöscht';
$string['reset_delete_grades'] = 'Gespeicherte Bewertungen gelöscht';
$string['reset_grades'] = 'Gradebook Bewertungen gelöscht';
$string['resetform_remove_attempts'] = 'Alle Antritte löschen';
$string['results_grade_link'] = '<a href="{$a}">Siehe Bewertungen</a>';
$string['results_notification_not_passed'] = 'Sie haben die Prüfung nicht bestanden.';
$string['results_notification_passed'] = 'Sie haben die Prüfung bestanden.';
$string['results_pass'] = 'Ergebnis';
$string['results_questionscorrectcount'] = 'Korrekte Fragen';
$string['results_questionscount'] = 'Fragen';
$string['results_score'] = 'Punkte';
$string['results_state'] = 'Status';
$string['results_timetaken'] = 'Verbrauchte Zeit';
$string['results_user'] = 'Nutzer/in';
$string['results_whenfinished'] = 'Beendet am';
$string['results_whenstarted'] = 'Begonnen am';
$string['settings_apicredentials'] = 'API Zugangsdaten';
$string['settings_apicredentials_actions'] = 'Aktionen';
$string['settings_apicredentials_actions_delete'] = 'Löschen';
$string['settings_apicredentials_actions_delete_disabled'] = 'API Zugangsdaten können nicht gelöscht werden, wenn sie noch in Prüfungen verwendet werden.';
$string['settings_apicredentials_actions_test_disabled'] = 'Bitte speicheren Sie Ihre Änderungen, bevor sie die Zugangsdaten testen.';
$string['settings_apicredentials_desc'] = 'Konfigurieren Sie die bizExaminer API Zugangsdaten';
$string['settings_apicredentials_error_invalid'] = 'Die eingegebenen API Zugangsdaten sind leer, ungültig oder beinhalten ungültige Zeichen. Bitte überprüfen Sie sie erneut.';
$string['settings_apicredentials_id'] = 'Id';
$string['settings_apicredentials_infos'] = 'Infos';
$string['settings_apicredentials_instance'] = 'Instanz Domain';
$string['settings_apicredentials_instance_row'] = 'Instanz Domain des API Zugangsdaten-Sets {$a}';
$string['settings_apicredentials_key_organisation'] = 'API Schlüssel Organisation';
$string['settings_apicredentials_key_organisation_row'] = 'API Schlüssel Organisation des API Zugangsdaten-Sets {$a}';
$string['settings_apicredentials_key_owner'] = 'API Schlüssel Owner';
$string['settings_apicredentials_key_owner_row'] = 'API Schlüssel Owner des API Zugangsdaten-Sets {$a}';
$string['settings_apicredentials_name'] = 'Name';
$string['settings_apicredentials_name_row'] = 'Name des API Zugangsdaten-Sets {$a}';
$string['settings_apicredentials_new_label'] = 'Neu';
$string['settings_apicredentials_used_in'] = 'Verwendet in {$a} Prüfungen';
$string['settings_apicredentials_used_in_singular'] = 'Verwendet in {$a} Prüfung';
$string['task_cleanup_abandoned'] = 'Aufgegebene Antritte abrechen.';
$string['testapi'] = 'Zugangsdaten testen';
$string['testapi_credentials_invalid'] = 'Ungültig';
$string['testapi_credentials_valid'] = 'Gültig';
$string['testapi_desc'] = 'Teste API Zugangsdaten.';
$string['testapi_error'] = 'Testen der API Zugangsdaten war fehlerhaft. Bitte überprüfen Sie die Zugangsdaten.';
$string['testapi_success'] = 'Testen der API Zugangsdaten war erfolgreich.';
