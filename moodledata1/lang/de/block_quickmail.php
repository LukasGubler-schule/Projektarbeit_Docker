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
 * Strings for component 'block_quickmail', language 'de', version '3.10'.
 *
 * @package     block_quickmail
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Aktionen';
$string['additional_emails'] = 'Weitere E-Mail-Adressen';
$string['additional_emails_help'] = 'Weitere E-Mail-Adressen, an die die Nachricht gesendet werden soll. Diese wird in einer Komma-separierten Liste erwartet. Beispiel:
email1@beispiel.de, email2@beispiel.de';
$string['additionalemail'] = 'E-Mails an externe E-Mail-Adressen zulassen';
$string['additionalemail_desc'] = 'Wenn diese Option aktiviert ist, können Nachrichten an weitere E-Mail-Adressen außerhalb von Moodle gesendet werden.';
$string['all_in_course'] = 'Alle im Kurs';
$string['allow_mentor_copy'] = 'Wenn diese Option aktiviert ist, können automatisch die Mentor/innen einer Empfänger/innen benachrichtiget werden.';
$string['allow_mentor_copy_help'] = 'Wenn "Nein", ist diese Option nicht sichtbar und die Mentor/innen werden nie benachrichtigt. Wenn "Ja", kann bei jeder Nachricht markiert werden, ob Mentor/innen benachrichtigt werden sollen. Bei "Erzwungen" wird die Benachrichtigung erzwungen und es gibt keine Möglichkeit, die Auswahl aufzuheben.';
$string['allowstudents'] = 'Studenten dürfen Quickmail nutzen';
$string['allowstudents_desc'] = 'Teilnehmer/innen die Verwendung von Quickmail gestatten. Wenn Sie "Nie" wählen, kann der Block nicht konfiguriert werden, dass Teilnehmer/innen der Zugriff auf Kursebene erlaubt wird.';
$string['alternate'] = 'Alternative E-Mail';
$string['alternate_activated'] = 'Alternative E-Mail {$a} kann jetzt verwendet werden!';
$string['alternate_already_confirmed'] = 'Diese E-Mail wurde bereits bestätigt.';
$string['alternate_availability'] = 'Wer kann von dieser E-Mail aus senden?';
$string['alternate_availability_course'] = 'Alle erlaubten Rollen in {$a->courseshortname}';
$string['alternate_availability_only'] = 'Nur ich, in {$a->courseshortname} nur';
$string['alternate_availability_user'] = 'Nur ich, in jedem Kurs';
$string['alternate_body'] = '<p>
{$a->fullname} hat die Adresse {$a->address} als alternative Adresse für den Kurs {$a->course} hinzugefügt.
</p>

<p>
Der Zweck dieser E-Mail ist die Überprüfung, dass diese Adresse tatsächlich existiert und ihr Besitzer die erforderlichen Berechtigungen hierfür im Moodle hat.
</p>

<p>
Wenn Sie den Prozess der Überprüfung abschließen möchten, so rufen Sie bitte den folgenden Link in Ihrem Browser auf: {$a->url}
</p>

<p>
Sollte die Beschreibung in dieser E-Mail für Sie keinen Sinn ergeben, so haben Sie diese Email versehentlich bekommen. Dann können Sie diese Nachricht getrost ignorieren.
</p>

Herzlichen Dank.';
$string['alternate_confirmation_email_resent'] = 'Die Bestätigungs-E-Mail wurde erneut gesendet!';
$string['alternate_confirmed'] = 'Bestätigt';
$string['alternate_created'] = 'Alternativer E-Mail-Versand erfolgreich erstellt!';
$string['alternate_delete'] = 'Alternative Adresse löschen';
$string['alternate_delete_confirm'] = 'Dies löscht Ihre alternative E-Mail-Adresse dauerhaft. Sind Sie sicher?';
$string['alternate_deleted'] = 'Ihre alternativ sendende E-Mail-Adresse wurde gelöscht.';
$string['alternate_email_not_found'] = 'Es konnte keine alternative E-Mail-Adresse gefunden werden.';
$string['alternate_invalid_token'] = 'Ungültiges Bestätigungs-Token.';
$string['alternate_new'] = 'Alternative Adresse hinzufügen';
$string['alternate_owner_must_confirm'] = 'Muss Besitzer/in der E-Mail-Adresse sein, um zu bestätigen.';
$string['alternate_owner_must_delete'] = 'Muss Besitzer/in der E-Mail-Adresse sein, um zu löschen.';
$string['alternate_resend_confirmation'] = 'E-Mail zur Bestätigung erneut senden';
$string['alternate_subject'] = 'Überprüfung der alternativen E-Mail-Adresse';
$string['alternate_waiting'] = 'Warten';
$string['altsendfrom'] = 'Alternative E-Mail-Adressen zulassen';
$string['altsendfrom_desc'] = 'Erlauben Sie den Wechsel von E-Mails (hierfür ist eine Core-Änderung erforderlich).';
$string['attached_files'] = 'Angehängte Dateien ({$a})';
$string['attachments'] = 'Anhänge';
$string['back_to_course'] = 'Zurück zum Kurs';
$string['back_to_mypage'] = 'Zurück zum Dashboard';
$string['backup_block_configuration'] = 'Blockbezogene Quickmail-Einstellungen sichern (z.B. [Teilnehmer/innen dürfen Quickmail nutzen])';
$string['backup_history'] = 'Quickmail-Verlauf einschließen';
$string['body'] = 'Mail-Text';
$string['broadcast'] = 'Admin-Nachricht verfassen';
$string['cachedef_qm_controller_store'] = 'Cache-Speicher für Controller-Instanzen.';
$string['cachedef_qm_event_notif_last_fired_at'] = 'Cache-Speicher für Zeitstempel, wann die letzte Benachrichtigung über ein Ereignis ausgelöst wurde.';
$string['cachedef_qm_msg_addl_email_count'] = 'Die zwischengespeicherte Nachricht zählt zusätzliche E-Mails.';
$string['cachedef_qm_msg_attach_count'] = 'Zwischengespeicherte Nachrichtenanhänge werden gezählt.';
$string['cachedef_qm_msg_deliv_count'] = 'Zwischengespeicherte gesendete Nachrichten werden gezählt.';
$string['cachedef_qm_msg_recip_count'] = 'Zwischengespeicherte Anzahl der Nachrichtenempfänger.';
$string['compose'] = 'Kursnachricht verfassen';
$string['condition_grade_greater_than'] = 'Klasse größer als';
$string['condition_grade_less_than'] = 'Klasse weniger als';
$string['condition_summary_reminder_course_grade_range'] = 'Alle, die eine Klasse zwischen {$a->grade_greater_than} und {$a->grade_less_than} haben';
$string['condition_summary_reminder_course_non_participation'] = 'Alle, die in {$a->time_amount} {$a->time_unit} nicht auf den Kurs zugegriffen haben';
$string['could_not_duplicate'] = 'Dieser Entwurf konnte nicht dupliziert werden. Bitte versuchen Sie es erneut.';
$string['course_required'] = 'Ein Kurs ist erforderlich.';
$string['coursealternate_not_allowed'] = 'Sie können diese alternative E-Mail in diesem Kurs nicht weitergeben.';
$string['courseferpa'] = 'Gruppenmodus respektieren';
$string['courseneveraccessed'] = 'Nie zugegriffen';
$string['create_new'] = 'Neu erstellen';
$string['create_notification'] = 'Benachrichtigung erstellen';
$string['create_notification_message'] = 'Erstellen {$a->model} {$a->type} Benachrichtigungsnachricht';
$string['create_notification_message_description'] = 'Erstellen Sie nun die Nachricht, die Sie bei der Versendung der Benachrichtigung erhalten möchten.';
$string['created'] = 'Erstellt';
$string['critical_error'] = 'Kritischer Fehler';
$string['default_message_type'] = 'Bevorzugte Methode der Nachrichtenübermittlung';
$string['default_message_type_configuration'] = 'Diese Einstellung ist die Standard-Sendemethode für jeden, der eine Nachricht in diesem Kurs verfasst. Der Absender kann sie beim Verfassen der Nachricht außer Kraft setzen.';
$string['default_message_type_configuration_help'] = 'Diese Einstellung ist die Standard-Sendemethode für jeden, der eine Nachricht in diesem Kurs verfasst. Der Absender kann sie beim Verfassen der Nachricht außer Kraft setzen.';
$string['default_message_type_desc'] = 'Senden Sie Ihre Nachrichten als Moodle-Nachrichten oder als herkömmliche E-Mail.';
$string['delete_draft_confirm_message'] = 'Dadurch wird Ihr Nachrichtenentwurf endgültig gelöscht, sind Sie sicher?';
$string['delete_draft_modal_title'] = 'Nachrichtenentwürfe löschen';
$string['delete_signature'] = 'Signatur löschen';
$string['delete_signature_confirm_message'] = 'Dadurch wird Ihre Signatur endgültig gelöscht, sind Sie sicher?';
$string['delete_signature_modal_title'] = 'Signatur löschen';
$string['deleted'] = 'Gelöscht';
$string['download_file_content'] = 'Dateiinhalt herunterladen';
$string['downloads'] = 'Für Anhänge Anmeldung verlangen';
$string['downloads_desc'] = 'Diese Einstellung legt fest, ob Anhänge nur für angemeldete Moodle-Benutzer verfügbar sind';
$string['draft_no_record'] = 'Dieser Nachrichtenentwurf konnte nicht gefunden werden.';
$string['drafted'] = 'Entworfen';
$string['drafts'] = 'Entwürfe';
$string['duplicate'] = 'Duplikat';
$string['duplicate_draft_confirm_message'] = 'Hiermit wird eine Kopie des Entwurfs erstellt. Sind Sie sicher?';
$string['duplicate_draft_modal_title'] = 'Duplizierter Nachrichtenentwurf';
$string['edit_conditions'] = 'Bedingungen bearbeiten';
$string['edit_event_details'] = 'Ereignisdetails bearbeiten';
$string['edit_message'] = 'Nachricht bearbeiten';
$string['edit_notification'] = 'Benachrichtigung bearbeiten';
$string['edit_schedule'] = 'Zeitplan bearbeiten';
$string['email_profile_fields'] = 'E-Mail-Profilfelder';
$string['email_profile_fields_desc'] = 'Diese Profilfelder werden automatisch per E-Mail versendet, wenn sie für die Empfänger/innen eingestellt sind.';
$string['enable_notification'] = 'Benachrichtigung einschalten';
$string['eventalternateemailadded'] = 'Alternative E-Mail-Adresse hinzugefügt';
$string['eventalternateemailadded_desc'] = 'Der Benutzer mit der ID {$a->user_id} hat eine alternative E-Mail hinzugefügt: {$a->email}';
$string['excluded_ids_label'] = 'Ausschließen';
$string['excluded_recipients_desc'] = 'Wer sollte diese Nachricht NICHT erhalten?';
$string['failed_recipients'] = 'Fehlgeschlagene oder ausstehende Empfänger/innen';
$string['failed_recipients_promise'] = 'Es wird weiter versucht, diese Empfänger zu erreichen, bis die Nachricht erfolgreich gesendet wurde.';
$string['ferpa'] = 'FERPA Modus';
$string['ferpa_desc'] = 'Diese Option legt fest, ob Quickmail  den Gruppenmodus des Kurses beachtet, alle Gruppenmodi bis auf separate Gruppen ignoriert oder Gruppen komplett ignoriert.';
$string['found_filtered_users'] = 'Nutzer/innen gefunden: {$a}';
$string['from_email'] = 'Absender-E-Mail-Adresse';
$string['from_email_help'] = 'Die E-Mail-Adresse, von der diese Nachricht gesendet wird. Sie können weitere alternative Adressen über das Blockmenü auf der Kursseite hinzufügen.';
$string['here'] = 'hier';
$string['included_ids_label'] = 'An';
$string['included_recipients_desc'] = 'Wer sollte diese Nachricht erhalten?';
$string['invalid_additional_email'] = 'Die von Ihnen eingegebene zusätzliche E-Mail "{$a}" ist ungültig';
$string['invalid_additional_emails_validation'] = 'Einige der von Ihnen eingegebenen zusätzlichen E-Mails waren ungültig.';
$string['invalid_availability'] = 'Ungültiger Verfügbarkeitswert.';
$string['invalid_condition_grade_greater_than'] = 'Ungültige Note größer als Wert.';
$string['invalid_condition_grade_less_than'] = 'Ungültige Note kleiner als der Wert.';
$string['invalid_condition_time_amount'] = 'Ungültige Zeitspanne für die Bedingung.';
$string['invalid_condition_time_unit'] = 'Ungültige Zeiteinheit für die Bedingung.';
$string['invalid_custom_data_delimiters'] = 'Die Ersetzungscodes im Nachrichtentext sind nicht richtig formatiert.';
$string['invalid_custom_data_key'] = 'Nutzerdefinierter Datenschlüssel "{$a}" ist nicht zulässig.';
$string['invalid_custom_data_not_allowed'] = 'Nutzerdefinierte Ersetzungscodes sind für diese Nachricht nicht zulässig.';
$string['invalid_email'] = 'Ungültige E-Mail Adresse.';
$string['invalid_notification_model'] = 'Die Auswahl des Benachrichtigungsmodells ist ungültig.';
$string['invalid_notification_type'] = 'Der Benachrichtigungstyp muss "Erinnerung" oder "Ereignis" sein.';
$string['invalid_schedule_time_amount'] = 'Ungültige Zeitspanne für den Zeitplan.';
$string['invalid_schedule_time_unit'] = 'Ungültige Zeiteinheit für den Zeitplan.';
$string['invalid_send_method'] = 'Diese Sendemethode ist nicht zulässig.';
$string['invalid_time_amount'] = 'Ungültige Zeitspanne.';
$string['invalid_time_relation'] = 'Muss "vorher" oder "nachher" sein.';
$string['invalid_time_unit'] = 'Ungültige Zeiteinheit.';
$string['is_enabled'] = 'Aktiviert';
$string['last_run_at'] = 'Letzter Durchlauf';
$string['last_updated'] = 'Zuletzt aktualisiert';
$string['manage_alternates'] = 'Alternative E-Mails';
$string['manage_drafts'] = 'Entwürfe ansehen';
$string['manage_signatures'] = 'Meine Signaturen';
$string['mentor_copy'] = 'Kopien an Mentoren von Empfängern senden?';
$string['mentor_copy_help'] = 'Wenn Sie diese Option wählen, erhalten alle Mentoren Ihrer Empfänger eine Kopie der Nachricht.';
$string['mentor_copy_message_prefix'] = '<p><strong>Sie erhalten diese Nachricht, weil Sie als Mentor/in eingesetzt sind.</strong> Das Folgende ist eine Kopie der Nachricht, die auch an {$a} gesendet wurde.</p>';
$string['mentor_copy_subject_prefix'] = '[Mentor/innen-Kopie]';
$string['mentors_copied'] = 'Kopien an Mentor/innen senden';
$string['message_deleted'] = 'Nachricht gelöscht';
$string['message_details'] = 'Nachrichtendetails';
$string['message_no_record'] = 'Ich konnte diese Nachricht nicht finden.';
$string['message_not_found'] = 'Ich konnte diese Nachricht nicht finden.';
$string['message_preview'] = 'Nachrichtenvorschau';
$string['message_queued'] = 'Nachricht geplant für den Versand';
$string['message_sent_asap'] = 'Nachricht wird in Kürze verschickt';
$string['message_sent_now'] = 'Nachricht gesendet';
$string['message_type'] = 'Quickmail-Nachrichten senden als';
$string['message_type_available_all'] = 'Keine Einschränkungen, Absenderpräferenz';
$string['message_type_available_email'] = 'Nur auf herkömmliche E-Mails beschränken';
$string['message_type_available_message'] = 'Nur auf Moodle-Nachrichten beschränken';
$string['message_type_desc'] = 'Ermöglicht das Versenden von Quickmail-Nachrichten als Moodle-Nachricht, herkömmliche E-Mail oder als Absenderpräferenz.';
$string['message_type_email'] = 'E-Mail';
$string['message_type_message'] = 'Moodle-Nachricht';
$string['message_types_available'] = 'Einschränkungen des Nachrichtentyps';
$string['message_types_available_desc'] = 'Schränken Sie ein, dass Quickmail-Nachrichten als Moodle-Nachrichten, herkömmliche E-Mails oder als Absender Voreinstellungen versendet werden sollen.';
$string['message_unqueued'] = 'Nachricht nicht geplant';
$string['messageprovider:quickmessage'] = 'Quickmail-Nachricht';
$string['migrate'] = 'Daten migrieren';
$string['migrate_legacy_data_task'] = 'Migrieren Sie historische Daten von Quickmail v1 nach v2';
$string['migration_chunk_size'] = 'Größe des Migrationsblocks (Chunk)';
$string['migration_chunk_size_desc'] = 'Anzahl der Datensätze, die bei jeder Ausführung von der Altdaten-Migrationsaufgabe verarbeitet werden sollen, falls aktiviert.';
$string['missing_body'] = 'Fehlender Nachrichtentext.';
$string['missing_email'] = 'Fehlende E-Mail Adresse.';
$string['missing_firstname'] = 'Fehlender Vorname.';
$string['missing_lastname'] = 'Fehlender Nachname.';
$string['missing_notification_name'] = 'Der Name der Benachrichtigung fehlt.';
$string['missing_subject'] = 'Fehlende Betreffzeile.';
$string['ms_alternate'] = 'Alternative E-Mails';
$string['ms_compose'] = 'Verfassen Sie';
$string['ms_config'] = 'Konfigurieren Sie';
$string['ms_create_notification'] = 'Benachrichtigung erstellen';
$string['ms_drafts'] = 'Entwürfe';
$string['ms_notifications'] = 'Benachrichtigungen';
$string['ms_queued'] = 'Geplant';
$string['ms_sent'] = 'Gesendete E-Mails';
$string['ms_signatures'] = 'Meine Signaturen';
$string['must_be_draft_to_duplicate'] = 'Die Nachricht muss ein Entwurf sein, um sie zu duplizieren.';
$string['must_be_owner_to_duplicate'] = 'Dieser Entwurf gehört leider nicht Ihnen und kann nicht dupliziert werden.';
$string['mute_time_summary'] = 'Stummschaltzeit';
$string['mute_time_unit'] = 'Stummschaltzeit';
$string['mute_time_unit_help'] = 'Eine optionale Zeitspanne, die zwischen dem automatischen Versand dieser Benachrichtigung vergehen muss.';
$string['never'] = 'Nie';
$string['next_run_at'] = 'Nächster Durchlauf';
$string['no_alternates'] = 'Keine alternativen E-Mails für {$a->fullname} gefunden. Erstellen Sie eine im nächsten Schritt.';
$string['no_drafts'] = 'Sie haben keine gespeicherten Entwürfe.';
$string['no_excluded_recipients'] = 'Keine ausgenommenen Empfänger/innen';
$string['no_included_recipients'] = 'Keine enthaltenen Empfänger/innen';
$string['no_included_recipients_validation'] = 'Sie müssen mindestens einen Empfänger bzw. eine Empfängerin auswählen.';
$string['no_notifications'] = 'Sie haben keine Benachrichtigungen erstellt.';
$string['no_queued'] = 'Sie haben keine geplanten Nachrichten.';
$string['no_sents'] = 'Sie haben keinen Verlauf gesendeter Nachrichten.';
$string['no_signatures_create'] = 'Sie haben keine Signaturen. {$a}.';
$string['noferpa'] = 'Gruppen ignorieren';
$string['notification_already_sent'] = 'Diese Meldung wurde bereits mindestens einmal versandt.';
$string['notification_conditions'] = 'Bedingungen';
$string['notification_conditions_description'] = 'Geben Sie die Bedingungen für diese Benachrichtigung an. Alle Empfänger/innen, die diese Bedingungen erfüllen, werden benachrichtigt.';
$string['notification_created'] = 'Benachrichtigung erstellt.';
$string['notification_deleted'] = 'Benachrichtigung gelöscht.';
$string['notification_is_enabled'] = 'Benachrichtigung Aktiviert';
$string['notification_is_enabled_help'] = 'Wenn diese Option aktiviert ist, ist die Benachrichtigung aktiv, andernfalls ist sie deaktiviert, bis Sie sie aktivieren.';
$string['notification_model'] = 'Benachrichtigungsmodell';
$string['notification_model_event_course_entered'] = 'Kurs eingegeben';
$string['notification_model_event_course_entered_description'] = 'Teilnehmer/innen benachrichtigen, wenn sie das erste Mal auf den Kurs zugreifen.';
$string['notification_model_reminder_course_grade_range'] = 'Kurs Klassenbereich';
$string['notification_model_reminder_course_grade_range_condition_description'] = 'Geben Sie den Klassenbereich an. Wenn Teilnehmer/innen derzeit innerhalb dieses Bereichs liegen, werden Sie benachrichtigt.';
$string['notification_model_reminder_course_grade_range_description'] = 'Benachrichtigen Sie die Teilnehmer/innen, die derzeit eine Klasse innerhalb des angegebenen Bereichs haben.';
$string['notification_model_reminder_course_non_participation'] = 'Nichtteilnahme am Kurs';
$string['notification_model_reminder_course_non_participation_condition_description'] = 'Geben Sie an, wie viel Zeit seit dem letzten Kurszugang vergangen ist. Wenn Teilnehmer/innen innerhalb dieser Zeitspanne nicht auf den Kurs zugegriffen haben, werden sie benachrichtigt.';
$string['notification_model_reminder_course_non_participation_description'] = 'Teilnehmer/innen benachrichtigen, die innerhalb einer bestimmten Zeitspanne nicht auf den Kurs zugegriffen haben.';
$string['notification_name'] = 'Titel';
$string['notification_name_help'] = 'Eine kurze Beschreibung dieser Benachrichtigung, damit Sie diese leicht von anderen Benachrichtigungen unterscheiden können, die Sie möglicherweise eingerichtet haben.';
$string['notification_name_too_long'] = 'Der Name der Benachrichtigung darf höchstens 40 Zeichen lang sein.';
$string['notification_not_found'] = 'Diese Benachrichtigung ist nicht zu finden.';
$string['notification_not_updated'] = 'Benachrichtigung aktualisiert.';
$string['notification_review'] = 'Überprüfen Sie Ihre Benachrichtigung';
$string['notification_schedule'] = 'Terminplan';
$string['notification_type'] = 'Art der Benachrichtigung';
$string['notification_type_event'] = 'Veranstaltung';
$string['notification_type_event_description'] = 'Eine automatische Nachricht, die als Reaktion auf ein bestimmtes Ereignis gesendet wird. Ereignisse können verwendet werden, um Empfänger/innen zu benachrichtigen, dass Aktivitäten abgeschlossen wurden, Aufgaben eingereicht oder benotet wurden und vieles mehr.';
$string['notification_type_reminder'] = 'Erinnerung';
$string['notification_type_reminder_description'] = 'Eine wiederkehrende Nachricht, die automatisch nach einem bestimmten Zeitplan gesendet wird. Erinnerungen können verwendet werden, um Empfänger/innen auf bevorstehende Aktivitäten, Fälligkeitstermine, die Teilnahme am Unterricht und vieles mehr hinzuweisen.';
$string['notification_updated'] = 'Benachrichtigung aktualisiert.';
$string['notifications'] = 'Benachrichtigungen';
$string['notifications_enabled'] = 'Quickmail-Benachrichtigungen aktivieren';
$string['notifications_enabled_desc'] = 'Kursen erlauben, automatische Benachrichtigungen zu erstellen, einschließlich Erinnerungen und Antworten auf Ereignisse.';
$string['notified_by'] = 'Benachrichtigt von';
$string['open'] = 'Öffnen';
$string['open_broadcast'] = 'Nachricht verfassen';
$string['open_compose'] = 'Nachricht verfassen';
$string['overwrite_history'] = 'Quickmail-Verlauf überschreiben';
$string['pending_recipients'] = 'Ausstehende Empfänger/innen';
$string['pending_recipients_promise'] = 'Diese Empfänger/innen werden gerade benachrichtigt. Prüfen Sie später mögliche Fehlschläge.';
$string['picker_style_autocomplete'] = 'Autovervollständigen';
$string['picker_style_multiselect'] = 'Mehrfachauswahl';
$string['picker_style_option_title'] = 'Mein bevorzugter Empfängerauswahltyp';
$string['picker_style_option_title_help'] = 'Ihre persönlich bevorzugte Schnittstelle für die Auswahl von Empfänger/innen beim Verfassen einer Nachricht.';
$string['pluginname'] = 'Quickmail';
$string['prepend_class'] = 'Kursname voranstellen';
$string['prepend_class_configuration'] = 'Dem Betreff der Nachricht eine Kursidentifikation voranstellen.';
$string['prepend_class_configuration_help'] = 'Dem Betreff der Nachricht eine Kursidentifikation voranstellen.';
$string['prepend_class_desc'] = 'Dem Betreff der Nachricht eine Kursidentifikation voranstellen. Diese Einstellung kann durch die Kurskonfiguration überschrieben werden.';
$string['preview_no_body'] = '(kein Inhalt)';
$string['preview_no_subject'] = '(kein Betreff)';
$string['profile_mentor_copy_message_prefix'] = '<p><strong>Sie erhalten diese Nachricht, weil Sie als {$a} zugewiesen sind</strong>. Im Folgenden finden Sie eine Kopie der Nachricht, die an die Empfänger/innen gesendet wurde.</p>';
$string['queue_scheduled_notifications_task'] = 'Warteschlange mit geplanten Quickmail-Benachrichtigungen';
$string['queued'] = 'Geplant';
$string['queued_no_record'] = 'Die Nachricht in der Warteschlange konnte nicht gefunden werden.';
$string['quickmail:addinstance'] = 'Einen neuen Quickmail-Block zu einer Kursseite hinzufügen';
$string['quickmail:allowalternate'] = 'Alternative E-Mail-Adressen zum Absenden anlegen';
$string['quickmail:allowcoursealternate'] = 'Alternative E-Mail-Adressen zum Teilen mit anderen Trainer/innen anlegen';
$string['quickmail:canconfig'] = 'Quickmail-Einstellungen in einem Kurs konfigurieren';
$string['quickmail:cansend'] = 'Quickmail-Nachrichten in einem Kurs senden';
$string['quickmail:createnotifications'] = 'Automatische Benachrichtigungen in Quickmail erstellen';
$string['quickmail:myaddinstance'] = 'Block \'Quickmail\' für \'Meine Startseite\' hinzufügen';
$string['quickmail:viewgroupusers'] = 'Alle Nutzer/innen in jeder Gruppe anzeigen';
$string['receipt'] = 'Empfang eines Sendeberichts';
$string['receipt_configuration'] = 'Eine Bestätigungs-E-Mail an den Absender der Nachricht senden, wenn die Nachricht gesendet wurde. Diese Einstellung ist die Standardpräferenz für den Absender.';
$string['receipt_configuration_help'] = 'Eine Bestätigungs-E-Mail an den Absender der Nachricht senden, wenn die Nachricht gesendet wurde. Diese Einstellung ist die Standardpräferenz für den Absender.';
$string['receipt_email_body'] = '<p>Ihre Nachricht wurde gesendet! Sie können weitere Details dieser gesendeten Nachricht {$a->sent_message_link} ansehen.</p>

<p>
    <strong>Zusammenfassung der Nachrichtendetails:</strong><br><br>
    <strong>Kurs:</strong> {$a->course_name}<br><br>
    <strong>Betreff der Nachricht:</strong> {$a->subject}<br><br>
    <strong>Empfänger:</strong> {$a->recipient_count}<br><br>
    <strong>Zusätzliche Empfänger-E-Mails:</strong> {$a->addition_emails_string}<br><br>
    <strong>Gesendet an Mentoren:</strong> {$a->sendt_to_mentors}<br><br>
    <strong>Anzahl der Dateianhänge:</strong> {$a->attachment_count}<br><br>
    <strong>Nachrichteninhalt:</strong>
</p>

{$a->message_body}';
$string['receipt_help'] = 'Standardmäßig wird eine Bestätigungs-E-Mail an den Absender der Nachricht gesendet, wenn die Nachricht gesendet wurde. Diese Einstellung kann durch die Kurskonfiguration überschrieben werden.';
$string['recipients'] = 'Empfänger/innen';
$string['redirect_back_from_message_detail_message_deleted'] = 'Die Nachricht, die Sie anzeigen möchten, wurde gelöscht.';
$string['redirect_back_from_message_detail_no_access'] = 'Sie können diese Nachricht nicht sehen.';
$string['redirect_back_to_course_from_message_after_duplicate'] = 'Ihre Nachricht wurde erfolgreich dupliziert.';
$string['redirect_back_to_course_from_message_after_save'] = 'Ihr Entwurf wurde gespeichert.';
$string['redirect_back_to_course_from_notifications_not_enabled'] = 'Quickmail-Benachrichtigungen sind für Ihre Website deaktiviert.';
$string['reset_success_message'] = 'Die Quickmail-Standardeinstellungen wurden wiederhergestellt!';
$string['restore_default_confirm_message'] = 'Dadurch werden die Quickmail-Einstellungen dieses Kurses auf die Standardwerte zurückgesetzt, sind Sie sicher?';
$string['restore_default_modal_title'] = 'Standardkonfiguration wiederherstellen';
$string['restore_history'] = 'Wiederherstellen des Quickmail Verlaufs';
$string['save'] = 'Speichern';
$string['save_draft'] = 'Entwurf speichern';
$string['save_signature'] = 'Signatur speichern';
$string['schedule_begin_at'] = 'Start Datum';
$string['schedule_end_at'] = 'End Datum';
$string['scheduled_time'] = 'Geplante Zeit';
$string['select_allowed_user_fields'] = 'Unterstützte Benutzerdatenfelder';
$string['select_allowed_user_fields_desc'] = 'Die Absender/innen können auf die ausgewählten Felder verweisen, um den Inhalt der Nachricht dynamisch und empfängerspezifisch zu gestalten. Beispiel: "[:firstname:]"';
$string['select_message_type'] = 'Nachricht senden als';
$string['select_notification_model'] = 'Benachrichtigungsmodell {$a} wählen';
$string['select_signature_for_edit'] = 'Zu bearbeitende Signatur auswählen';
$string['selectable_roles'] = 'Wählbare Rollen';
$string['selectable_roles_configuration'] = 'Diese Rollen werden beim Verfassen einer Nachricht zur Auswahl stehen.';
$string['selectable_roles_configuration_help'] = 'Diese Rollen werden beim Verfassen einer Nachricht zur Auswahl stehen.';
$string['selectable_roles_desc'] = 'Diese Rollen werden beim Verfassen einer Nachricht zur Auswahl stehen. Diese Einstellung kann durch die Kurskonfiguration überschrieben werden.';
$string['send_all_ready_messages_task'] = 'Alle geplanten Quickmail-Nachrichten senden';
$string['send_as_tasks'] = 'Senden Sie alle Nachrichten als Hintergrundaufgaben.';
$string['send_as_tasks_help'] = 'Wenn diese Option ausgewählt ist, werden alle Nachrichten asynchron als Cron-Aufgaben gesendet. Andernfalls werden sie sofort gesendet.';
$string['send_at'] = 'Senden an';
$string['send_message'] = 'Nachricht senden';
$string['send_now'] = 'Jetzt senden';
$string['send_now_scheduled_confirm_message'] = 'Dadurch wird der Zeitplan vergessen und die Nachricht jetzt gesendet, sind Sie sicher?';
$string['send_now_scheduled_modal_title'] = 'Jetzt Nachricht senden';
$string['send_now_threshold'] = 'Jetzt senden Schwellenwert';
$string['send_now_threshold_desc'] = 'Erzwingt das sofortige Versenden einer nicht geplanten Nachricht, wenn die Anzahl der Empfänger diese Zahl oder weniger beträgt, auch wenn der Block für das Versenden von Nachrichten als Hintergrundaufgaben konfiguriert ist. Bei einer Einstellung von 0 wird diese Einstellung ignoriert.';
$string['send_receipt_subject_addendage'] = 'Gesendete Nachricht';
$string['send_schedule'] = 'Zeitplan für senden';
$string['sending'] = 'Senden';
$string['sent'] = 'Gesendet';
$string['sent_at'] = 'Gesendet am';
$string['sent_messages'] = 'Verlauf gesendeter Nachrichten';
$string['set_event_details'] = 'Setzen {$a->model} Details der Ereignisbenachrichtigung';
$string['set_event_details_description'] = 'Geben Sie zusätzliche Optionen für das Ereignis an.';
$string['set_notification_conditions'] = 'Benachrichtigungsbedingungen  {$a->model} {$a->type} setzen';
$string['set_notification_schedule'] = 'Benachrichtigungszeitplan  {$a->model} {$a->type} setzen';
$string['set_notification_schedule_description'] = 'Geben Sie an, wie oft diese Benachrichtigung gesendet werden soll, wann sie beginnen soll und wann sie enden soll. Wenn kein Enddatum angegeben wird, wird diese Benachrichtigung so lange gesendet, bis sie deaktiviert oder gelöscht wird.';
$string['signature'] = 'Signatur';
$string['signature_signature_required'] = 'Eine Signatur ist erforderlich.';
$string['signature_title_must_be_unique'] = 'Der Titel der Signatur muss eindeutig sein.';
$string['signature_title_required'] = 'Ein Signaturtitel ist erforderlich.';
$string['signatures'] = 'Signaturen';
$string['status'] = 'Status';
$string['strictferpa'] = 'Gruppen immer trennen';
$string['subject'] = 'Betreff';
$string['success_recipients_promise'] = 'Diese Empfänger/innen wurden alle erfolgreich vom System benachrichtigt.';
$string['time_amount'] = 'Zeitaufwand';
$string['time_beginning'] = 'Anfang';
$string['time_delay_summary'] = 'Zeitverzögerung';
$string['time_delay_unit'] = 'Zeitverzögerung';
$string['time_delay_unit_help'] = 'Eine optionale Zeitspanne, die gewartet wird, bevor die Benachrichtigung gesendet wird.';
$string['time_ending'] = 'Ende';
$string['time_every'] = 'Jede';
$string['time_once_a'] = 'Einmal pro';
$string['time_relation'] = 'Vorher oder nachher';
$string['time_unit'] = 'Zeiteinheit';
$string['time_unit_day'] = 'Tag';
$string['time_unit_days'] = 'Tage';
$string['time_unit_month'] = 'Monat';
$string['time_unit_months'] = 'Monate';
$string['time_unit_week'] = 'Woche';
$string['time_unit_weeks'] = 'Wochen';
$string['title'] = 'Titel';
$string['unqueue'] = 'Warteschlange aufheben';
$string['unqueue_scheduled_confirm_message'] = 'Dadurch wird der Zeitplan für das Versenden dieser Nachricht aufgehoben und die Nachricht als Entwurf gespeichert, sind Sie sicher?';
$string['unqueue_scheduled_modal_title'] = 'Geplante Nachricht aus der Warteschlange nehmen';
$string['user_signature_deleted'] = 'Ihre Signatur wurde gelöscht.';
$string['validation_exception_message'] = 'Ausnahme bei der Überprüfung!';
$string['view'] = 'Ansicht';
$string['view_message_detail'] = 'Details der Nachricht anzeigen';
$string['view_queued'] = 'Geplante anzeigen';
$string['view_sent'] = 'Gesendete Nachrichten anzeigen';
