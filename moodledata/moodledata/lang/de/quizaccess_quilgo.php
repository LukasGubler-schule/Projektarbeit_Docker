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
 * Strings for component 'quizaccess_quilgo', language 'de', version '4.5'.
 *
 * @package     quizaccess_quilgo
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['config_api_token'] = 'API TOKEN';
$string['config_client_token'] = 'CLIENT TOKEN';
$string['config_failed_register'] = 'Beim Versuch, Ihre Website zu registrieren, ist ein Fehler aufgetreten. Bitte versuchen Sie es später noch einmal';
$string['config_register'] = 'Meine Website registrieren';
$string['config_success_register'] = 'Ihre Website wurde erfolgreich registriert';
$string['config_title'] = 'Quilgo';
$string['config_warning_not_active_yet'] = 'Ihr Quilgo Proctoring-Plugin ist noch nicht aktiv. Das liegt daran, dass Ihre Website bei der Plugin-Installation nicht erfolgreich für Quilgo Proctoring registriert wurde. Sie können die Registrierung erneut versuchen, indem Sie unten auf "Meine Website registrieren" klicken.';
$string['create_session_error_default_description'] = 'Die Einrichtung der Aufsicht ist fehlgeschlagen. Bitte versuchen Sie, die Quizseite zu aktualisieren.';
$string['create_session_error_limit_reached_description'] = 'Ihr Lehrer hat die automatische Überwachung für dieses Quiz aktiviert, aber das Limit ist erreicht. Bitte versuchen Sie in ein paar Minuten erneut, das Quiz zu starten.';
$string['general_continue'] = 'Weitermachen';
$string['general_yes'] = 'Ja';
$string['limit_info_contact_admin'] = 'Wenden Sie sich für ein Upgrade an Ihren Moodle-Administrator oder kontaktieren Sie uns unter <strong>hello@quilgo.com</strong>, wenn Sie eine Testversion für eine größere Anzahl von Studierenden benötigen.';
$string['limit_info_run_up'] = 'Quilgo Free erlaubt die gleichzeitige Durchführung von bis zu <strong><span class="free-limitation">0</span> beaufsichtigten Testversuchen</strong>. Dieses Limit gilt für alle Tests.';
$string['limit_info_upgrade'] = 'Klicken Sie {$a}<strong><span class="quilgo-upgrade-cta">hier, um ein Upgrade durchzuführen</span></strong> oder kontaktieren Sie uns unter <strong>hello@quilgo.com</strong>, wenn Sie eine Testversion für eine größere Anzahl von Schülern benötigen.';
$string['manage_subscription_failed_info'] = 'Beim Versuch, das Quilgo-Abonnement zu verwalten, ist ein Fehler aufgetreten. Bitte versuchen Sie es später erneut.';
$string['manage_subscription_title'] = 'Mein Quilgo-Abonnement verwalten';
$string['plasm_camera'] = 'Kamera verfolgen';
$string['plasm_camera_help'] = 'Stellen Sie sicher, dass der Teilnehmer die Person ist, die es sein sollte, und verlässt seinen Platz nicht, bis das Quiz abgeschlossen ist';
$string['plasm_enabled'] = 'Überwachung aktivieren';
$string['plasm_focus'] = 'Aktivität verfolgen (standardmäßig aktiviert)';
$string['plasm_focus_help'] = 'Zeigt an, wie oft ein Prüfling das Quiz verlassen hat, um zu einem anderen Tab oder einer anderen App zu wechseln';
$string['plasm_force'] = 'Verfolgung erzwingen';
$string['plasm_force_help'] = 'Erfordert ausgewählte Verfolgungsmethoden, um das Quiz zu starten';
$string['plasm_screen'] = 'Bildschirm verfolgen';
$string['plasm_screen_help'] = 'Automatische Aufzeichnung der Bildschirme Ihrer Teilnehmer und verdächtiger Aktivitäten in hoher Qualität, um unfaires Verhalten zu verhindern';
$string['pluginname'] = 'Quilgo Proctoring';
$string['privacy:export:quizaccess_quilgo_reports'] = 'Quilgo Proctoring Bericht';
$string['privacy:export:quizaccess_quilgo_settings'] = 'Quilgo Proctoring Einstellungen';
$string['privacy:export:quizaccess_quilgo_settings:camera_disabled'] = 'Kameraüberwachung deaktiviert';
$string['privacy:export:quizaccess_quilgo_settings:camera_enabled'] = 'Kameraüberwachung aktiviert';
$string['privacy:export:quizaccess_quilgo_settings:force_disabled'] = 'Erzwungene Verfolgung deaktiviert';
$string['privacy:export:quizaccess_quilgo_settings:force_enabled'] = 'Erzwungene Verfolgung aktiviert';
$string['privacy:export:quizaccess_quilgo_settings:screen_disabled'] = 'Bildschirmverfolgung deaktiviert';
$string['privacy:export:quizaccess_quilgo_settings:screen_enabled'] = 'Bildschirmverfolgung aktiviert';
$string['privacy:metadata:quizaccess_quilgo_proctoring'] = 'Dieses Plugin sendet Daten extern an Quilgo für den Überwachungsbericht.';
$string['privacy:metadata:quizaccess_quilgo_proctoring:focuses'] = 'Fokus oder unfokussiertes Fensterereignis während eines Quizversuchs.';
$string['privacy:metadata:quizaccess_quilgo_proctoring:images'] = 'Bilder, die während eines Quizversuchs von einer Kamera oder einem Bildschirm aufgenommen wurden.';
$string['privacy:metadata:quizaccess_quilgo_reports'] = 'Informationen zur Überwachungssitzung des Benutzer-Quizversuchs.';
$string['privacy:metadata:quizaccess_quilgo_reports:attemptid'] = 'Die ID des Benutzer-Quizversuchs.';
$string['privacy:metadata:quizaccess_quilgo_reports:camera_enabled'] = 'Der Status der Kameraüberwachung ist aktiviert oder deaktiviert, wenn ein Benutzer ein Quiz versucht.';
$string['privacy:metadata:quizaccess_quilgo_reports:error_reason'] = 'Die Fehlerbeschreibung, falls ein Fehler während der Generierung des Überwachungsberichts aufgetreten ist, wenn der Benutzer versucht hat, ein Quiz zu beenden.';
$string['privacy:metadata:quizaccess_quilgo_reports:force_enabled'] = 'Der Status der erzwungenen Verfolgung ist aktiviert oder deaktiviert, wenn ein Benutzer ein Quiz versucht.';
$string['privacy:metadata:quizaccess_quilgo_reports:plasmsessionid'] = 'Die ID der Überwachungssitzung.';
$string['privacy:metadata:quizaccess_quilgo_reports:screen_enabled'] = 'Der Status der Bildschirmverfolgung ist aktiviert oder deaktiviert, wenn ein Benutzer ein Quiz versucht.';
$string['privacy:metadata:quizaccess_quilgo_settings'] = 'Informationen zu den Überwachungseinstellungen des Quiz.';
$string['privacy:metadata:quizaccess_quilgo_settings:camera_enabled'] = 'Die Kameraüberwachung ist aktiviert oder deaktiviert.';
$string['privacy:metadata:quizaccess_quilgo_settings:force_enabled'] = 'Die erzwungene Verfolgung ist aktiviert oder deaktiviert.';
$string['privacy:metadata:quizaccess_quilgo_settings:quizid'] = 'Eine ID eines Quiz, das Überwachung verwendet.';
$string['privacy:metadata:quizaccess_quilgo_settings:screen_enabled'] = 'Die Bildschirmverfolgung ist aktiviert oder deaktiviert.';
$string['proctoring_disabled_info'] = 'Die automatische Prüfungsaufsicht ist <i>deaktiviert</i>. Um sie zu aktivieren, gehen Sie zu den <a href="{$a}"><u>Quiz-Einstellungen</u></a>, erweitern Sie die „Zusätzlichen Beschränkungen für Versuche“, setzen Sie ein Häkchen bei „Prüfungsaufsicht aktivieren“, wählen Sie die Tracking-Methoden aus, klicken Sie auf „Speichern“ und kehren Sie zu dieser Seite zurück.';
$string['proctoring_setup_failed_title'] = 'Einrichtung der Aufsicht fehlgeschlagen';
$string['refresh_quiz_page'] = 'Quiz aktualisieren';
$string['report_camera_tracking'] = 'Kameraverfolgung:';
$string['report_detail_title'] = 'Proctoring-Bericht';
$string['report_empty'] = 'Proctoring ist jetzt aktiviert. Die Ergebnisse erscheinen hier, sobald mindestens ein Quiz-Versuch unternommen wurde.';
$string['report_error'] = 'Beim Abrufen des Proctoring-Berichts ist ein Fehler aufgetreten. Bitte versuchen Sie es später erneut';
$string['report_expired'] = 'Der Bildbericht wurde aus dem System entfernt, da er abgelaufen ist';
$string['report_expires_in'] = 'Bilder werden in {$a} Tagen aus dem System entfernt';
$string['report_face_presence'] = 'Gesichtspräsenz:';
$string['report_focus_good'] = 'Gut';
$string['report_focus_not_good'] = 'Test {$a} Mal verlassen';
$string['report_focus_not_good_multiple'] = 'Test {$a} Mal verlassen';
$string['report_left_test'] = 'Aktivität:';
$string['report_link_caption'] = 'Proctoring-Berichte anzeigen | Quilgo<sup>®</sup>';
$string['report_notready'] = 'Ihr Proctoring-Bericht ist noch nicht bereit. Bitte warten Sie einen Moment';
$string['report_patterns_detected'] = 'Muster erkannt:';
$string['report_patterns_see_answer_below'] = 'siehe Antworten unten';
$string['report_patterns_step_change_answer'] = 'Antwort ändern';
$string['report_patterns_step_copy_question'] = 'Frage kopieren';
$string['report_patterns_step_leave_test'] = 'Test verlassen';
$string['report_patterns_step_paste_answer'] = 'Antwort einfügen';
$string['report_patterns_step_return'] = 'Zurückkehren';
$string['report_patterns_used_multiple_screens'] = 'Mehrere Bildschirme verwendet:';
$string['report_preview_faces_detected'] = '| Gesichter erkannt: {$a}';
$string['report_preview_info'] = 'Nur die <strong>erste Minute</strong> dieses Versuchs wurde verfolgt, da dies ein <strong>Vorschauversuch</strong> ist. Die Versuche Ihrer <strong>Schüler</strong> werden <strong>vollständig verfolgt</strong>';
$string['report_preview_page_unfocused'] = '| Seite nicht fokussiert';
$string['report_preview_time'] = 'Zeit:';
$string['report_preview_title'] = 'Vorschau';
$string['report_proctoring_methods'] = 'Proctoring-Methoden:';
$string['report_screen_tracking'] = 'Bildschirmverfolgung:';
$string['report_setting_camera'] = 'Kamera';
$string['report_setting_focus'] = 'Aktivität';
$string['report_setting_screen'] = 'Bildschirm';
$string['report_settings_recommendation'] = 'Wir empfehlen, sowohl <strong>Kamera- als auch Bildschirmverfolgung</strong> zu aktivieren, um besser überwachen zu können. Gehen Sie zu <a href="{$a}" target="_blank"><u>Quiz-Einstellungen</u></a>, erweitern Sie den Abschnitt "Zusätzliche Einschränkungen bei Versuchen", kreuzen Sie die Verfolgungsmethoden an und klicken Sie auf "Speichern", um zusätzliche Verfolgungsmethoden zu aktivieren.';
$string['report_suspicious_caption'] = '{$a} verdächtig';
$string['report_suspicious_screenshots'] = 'Screenshots:';
$string['report_table_header_attempt'] = 'Versuch #';
$string['report_table_header_attempt_results'] = 'Versuchsergebnisse';
$string['report_table_header_confidence_levels'] = 'Proctoring-Sicherheitsstufe';
$string['report_table_header_email'] = 'E-Mail';
$string['report_table_header_name'] = 'Name';
$string['report_table_header_proctoring_report'] = 'Proctoring-Bericht';
$string['report_table_header_score'] = 'Ergebnis';
$string['report_table_header_time_taken'] = 'Dauer';
$string['report_table_header_timefinish'] = 'Eingereicht';
$string['report_table_row_confidence_level_high'] = 'Hoch';
$string['report_table_row_confidence_level_low'] = 'Niedrig';
$string['report_table_row_confidence_level_moderate'] = 'Mäßig';
$string['report_table_row_notyetgraded'] = 'Noch nicht bewertet';
$string['report_table_row_overdue'] = 'Überfällig: {$a}';
$string['report_table_row_stat_loading'] = 'Wird geladen...';
$string['report_table_row_stat_not_ready'] = 'Bitte warten Sie bis zu einer Minute';
$string['report_table_row_stat_queued'] = 'Warteschlange';
$string['report_table_row_view_report'] = 'Bericht anzeigen';
$string['setting_group'] = '<strong>Quilgo<sup>®</sup> Proctoring</strong>';
$string['setup-additional-collector-description'] = 'Bitte gewähren Sie nun Zugriff auf Ihren Bildschirm';
$string['setup-additional-collector-title'] = 'Fast fertig';
$string['setup_camera_error_desc'] = 'Um die Kameraverfolgung zu aktivieren, müssen Sie den Zugriff auf Ihre Kamera erlauben. Ändern Sie die Zugriffseinstellungen für Ihre Kamera.';
$string['setup_camera_error_title'] = 'Kamerazugriff fehlgeschlagen';
$string['setup_camera_hint'] = 'Kamera';
$string['setup_connection_hint'] = 'und';
$string['setup_consent_activity_tracking_enabled'] = 'Ich bin damit einverstanden, dass die Aufsichtsdaten aufgezeichnet, verarbeitet und gespeichert werden und dass ich sie meinem Lehrer weitergebe.';
$string['setup_consent_camera_and_screen_tracking_enabled'] = 'Ich bin damit einverstanden, dass die Aufsichtsdaten, einschließlich Screenshots meines Bildschirms und Fotos von mir, aufgezeichnet, verarbeitet und gespeichert werden und dass ich sie meinem Lehrer weitergebe.';
$string['setup_consent_camera_tracking_enabled'] = 'Ich bin damit einverstanden, dass die Aufsichtsdaten, einschließlich Fotos von mir, aufgezeichnet, verarbeitet und gespeichert werden und dass ich sie meinem Lehrer weitergebe.';
$string['setup_consent_provided_report'] = 'Ein Bericht wird Ihrem Lehrer angezeigt, sobald Sie Ihren Testversuch abgeschlossen haben';
$string['setup_consent_screen_tracking_enabled'] = 'Ich bin damit einverstanden, dass die Aufsichtsdaten, einschließlich Screenshots meines Bildschirms, aufgezeichnet, verarbeitet und gespeichert und an meinen Lehrer weitergegeben werden.';
$string['setup_consent_snapshots_from'] = 'Schnappschüsse von Ihrem';
$string['setup_consent_snapshots_will_taken'] = 'werden während des Versuchs gemacht';
$string['setup_consent_to_start_quiz'] = 'Um eine Prüfung zu starten, müssen Sie Zugriff auf Ihr';
$string['setup_disable_device_warning_attention'] = 'Aufmerksamkeit!';
$string['setup_disable_device_warning_check_camera_only'] = 'Ich verstehe. Ich werde meinen Kamerazugriff während meines Tests NICHT deaktivieren.';
$string['setup_disable_device_warning_check_camera_or_screen'] = 'Ich verstehe, dass ich meine Kamera oder den Bildschirmzugriff während meines Tests NICHT deaktivieren werde';
$string['setup_disable_device_warning_check_screen_only'] = 'Ich verstehe, dass ich meinen Bildschirmzugriff während meines Tests NICHT deaktivieren werde';
$string['setup_disable_device_warning_description_camera_only'] = 'Deaktivieren Sie Ihre Kamera während des Tests NICHT, da dies Ihre Testergebnisse beeinträchtigen kann.';
$string['setup_disable_device_warning_description_camera_or_screen'] = 'Deaktivieren Sie während des Tests NICHT Ihre Kamera oder Ihren Bildschirm, da dies Ihre Testergebnisse beeinträchtigen kann.';
$string['setup_disable_device_warning_description_screen_only'] = 'Deaktivieren Sie Ihren Bildschirm während des Tests NICHT, da dies Ihre Testergebnisse beeinträchtigen kann.';
$string['setup_finish_tick_box'] = 'Kreuzen Sie das unten stehende Kästchen an, um Ihr Einverständnis zu geben:';
$string['setup_finish_title'] = 'Sehen Sie';
$string['setup_finish_your_screen'] = 'Ihren Bildschirm';
$string['setup_finish_yourself'] = 'sich selbst';
$string['setup_not_supported_error_desc'] = 'Entschuldigung, Ihr Gerät unterstützt keine Kamera-/Bildschirmverfolgung. Bitte wählen Sie ein anderes Gerät für das Quiz.';
$string['setup_not_supported_error_title'] = 'Gerät nicht unterstützt';
$string['setup_provide_access_camera'] = 'Kamerazugriff erlauben';
$string['setup_provide_access_screen'] = 'Bildschirmzugriff erlauben';
$string['setup_required_error'] = 'Sie müssen die Einrichtung abschließen, bevor Sie das Quiz starten';
$string['setup_retry'] = 'Wiederholen';
$string['setup_screen_area_error_desc'] = 'Bitte versuchen Sie es erneut und wählen Sie unbedingt den <strong>gesamten Bildschirm</strong> zur Freigabe aus.';
$string['setup_screen_area_error_title'] = 'Falscher Bildschirmbereich ausgewählt';
$string['setup_screen_error_desc'] = 'Um die Bildschirmaufzeichnung zu aktivieren, müssen Sie den Zugriff auf Ihren Bildschirm erlauben. Vergewissern Sie sich außerdem, dass Sie die Bildschirmaufzeichnung nicht in den Systemeinstellungen verweigert haben.';
$string['setup_screen_error_title'] = 'Bildschirmzugriff fehlgeschlagen';
$string['setup_screen_hint'] = 'Bildschirm';
$string['setup_tracking_enabled_hint'] = 'Verfolgung ist aktiviert';
$string['upgrade_failed_info'] = 'Beim Versuch, Quilgo zu aktualisieren, ist ein Fehler aufgetreten. Bitte versuchen Sie es später erneut.';
