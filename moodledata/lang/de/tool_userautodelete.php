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
 * Strings for component 'tool_userautodelete', language 'de', version '4.5'.
 *
 * @package     tool_userautodelete
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['a_users_would_be_deleted'] = 'Die folgenden {$a} Nutzer/innen würden gelöscht werden';
$string['a_users_would_be_warned'] = 'Die folgenden {$a} Nutzer/innen würden eine Warn-E-Mail erhalten';
$string['affected_users'] = 'Betroffene Nutzer/innen';
$string['back_to_settings'] = 'Zurück zu den Einstellungen';
$string['current_configuration'] = 'Aktuelle Konfiguration';
$string['current_configuration_table_desc'] = 'Diese Tabelle listet den Zeitpunkt der nächsten Inaktivitätsprüfung die im Hintergrund ausgeführt werden würde, sowie die konfigurierten Schwellenwerte für Warn-E-Mails und Nutzerlöschungen auf. Außerdem ist angegeben, welche Nutzerrollen von der automatischen Löschung ausgeschlossen sind.';
$string['delete_email_sent_to_user'] = 'Löschungsbenachrichtigung an Nutzer/in mit ID {$a} gesendet';
$string['dry_run'] = 'Probelauf';
$string['dry_run_affected_users_desc'] = 'Die hier aufgeführten Nutzer/innen würden entweder eine Warn-E-Mail erhalten oder gelöscht werden. Wenn keine Nutzer/innen aufgelistet sind, haben sich keine Nutzer/innen länger als die konfigurierten Schwellenwerte nicht eingeloggt oder die Nutzer/innen sind gemäß der Plugin-Konfiguration ausgeschlossen.';
$string['dry_run_explanation'] = 'Diese Seite zeigt die Aktionen, die während der nächsten Inaktivitätsprüfung ausgeführt werden würden. Keine der Aktionen wurde tatsächlich ausgeführt!';
$string['error_anonymizing_user'] = 'Anonymisieren von Nutzer/in mit ID {$a} fehlgeschlagen.';
$string['error_delete_email_body_empty'] = 'Der Inhalt der Löschungs-E-Mail ist leer.';
$string['error_delete_email_subject_empty'] = 'Der Betreff der Löschungs-E-Mail darf nicht leer sein.';
$string['error_delete_threshold_days_negative'] = 'Die Löschschwelle muss größer als 0 sein.';
$string['error_deleting_user'] = 'Löschen von Nutzer/in mit ID {$a} fehlgeschlagen.';
$string['error_invalid_config_aborting'] = 'Ungültige Plugin-Konfiguration gefunden. Abbruch ...';
$string['error_invalid_role_id'] = 'Ungültige Rollen-ID {$a} in der Liste der ignorierten Rollen gefunden. Dies ist höchstwahrscheinlich ein Fehler im Plugin. Bitte melden Sie dies dem Plugin-Maintainer.';
$string['error_sending_delete_mail_to_user'] = 'Senden der Löschbenachrichtigung an Nutzer/in mit ID {$a} fehlgeschlagen.';
$string['error_sending_warning_mail_to_user'] = 'Senden der Warn-E-Mail an Nutzer/in mit ID {$a} fehlgeschlagen.';
$string['error_warning_email_body_empty'] = 'Der Inhalt der Warn-E-Mail ist leer.';
$string['error_warning_email_subject_empty'] = 'Der Betreff der Warn-E-Mail darf nicht leer sein.';
$string['error_warning_threshold_days_geq_delete'] = 'Die Warnschwelle muss kleiner als die Löschschwelle sein.';
$string['error_warning_threshold_days_negative'] = 'Die Warnschwelle muss größer als 0 sein.';
$string['inactivity_warning'] = 'Inaktivitätswarnung';
$string['next_check'] = 'Nächste Prüfung';
$string['no_users_to_delete'] = 'Keine Nutzer/innen zur Löschung gefunden.';
$string['no_users_to_warn'] = 'Keine Nutzer/innen für den Versand einer Warn-E-Mail gefunden.';
$string['page_title_dryrun'] = 'Automatische Nutzerlöschung (Probelauf)';
$string['plugin_disabled_skipping_execution'] = 'Das Plugin ist global deaktiviert, Ausführung überspringen.';
$string['pluginname'] = 'Automatische Nutzerlöschung';
$string['privacy:metadata:tool_userautodelete_mail'] = 'Informationen über Nutzer/innen, die eine Inaktivitätswarnung per E-Mail erhalten haben.';
$string['privacy:metadata:tool_userautodelete_mail:timesent'] = 'Der Zeitpunkt zu dem die E-Mail gesendet wurde.';
$string['privacy:metadata:tool_userautodelete_mail:userid'] = 'Die ID der Person, der die E-Mail erhalten hat.';
$string['reltime_prefix_in'] = 'in';
$string['setting_anonymize_user_data'] = 'Gelöschte Nutzer/innen anonymisieren';
$string['setting_anonymize_user_data_desc'] = 'Beim Löschen eines Nutzerkontos behält Moodle einzelne Teile der Nutzerdaten in seiner Datenbank. Dies beinhaltet unter anderem Vorname, Nachname, E-Mail-Adresse, letzte IP-Adresse und andere sensible Informationen. Dies kann je nach den Datenschutzbestimmungen/-auflagen oder der lokalen Rechtsauslegung ein Problem darstellen. Wenn diese Einstellung aktiviert ist, werden alle verbleibenden Nutzerdaten anonymisiert, wodurch die Möglichkeit, ein gelöschtes Nutzerkonto dem vorherigen Besitzer zuzuordnen, vollständig ausgeschlossen wird.';
$string['setting_delete_email_body'] = 'Inhalt';
$string['setting_delete_email_body_default'] = '<p>Hallo,</p><p>Ihr Konto auf unserer Seite wurde aufgrund von Inaktivität gelöscht. Wenn Sie unseren Dienst weiterhin nutzen möchten, erstellen Sie sich bitte ein neues Konto.</p><p>Mit freundlichen Grüßen</p>';
$string['setting_delete_email_body_desc'] = 'Der Inhalt der Löschbenachrichtigungs-E-Mail.';
$string['setting_delete_email_enable'] = 'Löschbenachrichtigungen';
$string['setting_delete_email_enable_desc'] = 'Wenn die Option aktiviert ist, erhalten Nutzer/innen direkt vor der Kontolöschung eine abschließende E-Mail und werden anschließend sofort gelöscht. Dies kann verwendet werden, um Bestätigungen der Nutzerlöschung zu senden.';
$string['setting_delete_email_subject'] = 'Betreff';
$string['setting_delete_email_subject_default'] = 'Ihr Konto wurde gelöscht';
$string['setting_delete_email_subject_desc'] = 'Der Betreff der Löschbenachrichtigungs-E-Mail.';
$string['setting_delete_threshold_days'] = 'Löschschwelle';
$string['setting_delete_threshold_days_desc'] = 'Die Anzahl der Tage seit dem letzten Login, nach denen Nutzer/innen gelöscht werden. Die Löschung erfolgt nur, wenn sich Nutzer/innen für diese Anzahl von Tagen nicht eingeloggt hat.';
$string['setting_dryrun'] = 'Probelauf';
$string['setting_dryrun_button'] = 'Probelauf durchführen';
$string['setting_dryrun_desc'] = 'Ein Probelauf listet alle Nutzer/innen auf, die bei der nächsten Inaktivitätsprüfung eine Warnmeldung erhalten oder gelöscht würden. Dies ist nützlich beim Überprüfen, ob das Plugin korrekt konfiguriert ist, und um die betroffenen Nutzer/innen zu sehen. Der Probelauf führt keinerlei Aktionen durch und ist daher zerstörungsfrei!';
$string['setting_enable'] = 'Plugin aktivieren';
$string['setting_enable_desc'] = 'Plugin global aktivieren oder deaktivieren. Wenn dies deaktiviert ist, werden keine Aktionen ausgeführt.';
$string['setting_header_deletion_warning'] = 'Löschwarnungen';
$string['setting_header_deletion_warning_desc'] = 'Konfiguration der Löschwarnung-E-Mails. Warnungs-E-Mails werden einige Tage vor der inaktivitätsbedingten Löschung von Nutzer/innen gesendet. Diese  E-Mails informieren darüber, dass ein Konto bald gelöscht wird, und geben Zeit, sich einzuloggen und die Konten vor der Löschung zu bewahren.';
$string['setting_header_user_deletion'] = 'Nutzerlöschung';
$string['setting_header_user_deletion_desc'] = 'Konfiguration der automatischen Nutzerlöschung. Nutzer, die sich für mindestens die konfigurierte Anzahl von Tagen nicht eingeloggt haben und nicht durch die obigen Einstellungen ausgeschlossen sind, werden automatisch gelöscht.';
$string['setting_ignore_roles'] = 'Ignorierte Rollen';
$string['setting_ignore_roles_desc'] = 'Alle Nutzer/innen, die mindestens einer der ausgewählten Rollen zugewiesen sind, werden nicht gelöscht.';
$string['setting_ignore_siteadmins'] = 'Administrator/innen ignorieren';
$string['setting_ignore_siteadmins_desc'] = 'Administrator/innen können nicht gelöscht werden. Entfernen Sie die Person aus der Rolle Administrator/in, um sie in den automatischen Löschprozess einzubeziehen.';
$string['setting_plugin_desc'] = 'Dieses Plugin löscht automatisch Nutzer/innen, die sich für eine konfigurierbare Anzahl von Tagen nicht eingeloggt haben. Dies ist nützlich, um die Moodle-Datenbank sauber zu halten und inaktive Nutzerkonten zu entfernen. Das Plugin kann so konfiguriert werden, dass inaktive Nutzer/innen einige Tage vor der Kontolöschung eine Warn-E-Mail erhalten. Dies gibt Nutzer/innen die Möglichkeit, sich erneut einzuloggen und ihre Konten zu behalten. Das Plugin unterstützt außerdem das Löschen von Nutzer/innen auf DSGVO-konforme Weise, sodass keine personenbezogenen Daten in der Datenbank verbleiben.';
$string['setting_task_execution_interval'] = 'Prüfintervall';
$string['setting_task_execution_interval_button'] = 'Prüfintervall konfigurieren';
$string['setting_task_execution_interval_desc'] = 'Die Überprüfung auf inaktive Nutzer/innen wird über einen geplante Task durchgeführt, der über den Moodle-Cron ausgeführt wird. Sie können das Intervall, in dem dieser Task ausgeführt wird, über den folgenden Button konfigurieren.';
$string['setting_task_logs'] = 'Logdaten';
$string['setting_task_logs_button'] = 'Logdaten anzeigen';
$string['setting_task_logs_desc'] = 'Dieses Plugin protokolliert alle Aktionen, die es ausführt. Sie können die Protokolle aller vergangenen Task-Ausführungen über den folgenden Button einsehen.';
$string['setting_warning_email_body'] = 'Inhalt';
$string['setting_warning_email_body_default'] = '<p>Hallo,</p><p>Ihr Konto auf unserer Website war für einen langen Zeitraum inaktiv. Um Ihr Konto zu behalten, <strong>loggen Sie sich jetzt ein, um zu verhindern, dass Ihr Konto gemäß unserer Datenschutzrichtlinie in den nächsten Tagen gelöscht wird</strong>.</p><p>Wenn Sie möchten, dass Ihr Konto gelöscht wird, können Sie diese Nachricht ignorieren.</p><p>Mit freundlichen Grüßen</p>';
$string['setting_warning_email_body_desc'] = 'Der Inhalt der Warn-E-Mail.';
$string['setting_warning_email_enable'] = 'Löschwarnungen';
$string['setting_warning_email_enable_desc'] = 'Wenn die Option aktiviert ist, erhalten Nutzer/innen eine Anzahl an Tagen vor ihrer Löschung eine Warn-E-Mail.';
$string['setting_warning_email_subject'] = 'Betreff';
$string['setting_warning_email_subject_default'] = 'Ihr Konto wird bald gelöscht - Handlung erforderlich!';
$string['setting_warning_email_subject_desc'] = 'Der Betreff der Warn-E-Mail.';
$string['setting_warning_threshold_days'] = 'Warnschwelle';
$string['setting_warning_threshold_days_desc'] = 'Die Anzahl der Tage vor der Nutzerlöschung, an denen die Löschwarnung per E-Mail gesendet wird. Dies ist relativ zur Löschschwelle.';
$string['task_check_and_delete_users'] = 'Inaktive Nutzer/innen suchen und löschen';
$string['user_anonymized'] = 'Nutzer/in mit ID {$a} wurde anonymisiert';
$string['user_deleted'] = 'Nutzer/in mit ID {$a} wurde gelöscht';
$string['user_recovered'] = 'Nutzer/in mit ID {$a} war zuvor als inaktiv markiert, ist aber zurückgekehrt. Nutzer/in wird nicht gelöscht.';
$string['users_to_delete'] = 'Zu löschende Nutzer/innen';
$string['users_to_delete_a'] = '{$a} Nutzer/innen zur Löschung gefunden.';
$string['users_to_warn'] = 'Zu warnende Nutzer/innen';
$string['users_to_warn_a'] = '{$a} Nutzer/innen für den Versand einer Warn-E-Mail gefunden.';
$string['warning_email_disabled'] = 'Warn-E-Mails sind deaktiviert';
$string['warning_email_disabled_skipping'] = 'Warn-E-Mails sind deaktiviert, überspringe ...';
$string['warning_email_sent_to_user'] = 'Warn-E-Mail an Nutzer/in mit ID {$a} gesendet';
