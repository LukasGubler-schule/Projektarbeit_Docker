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
 * Strings for component 'local_uploadnotification', language 'de', version '4.5'.
 *
 * @package     local_uploadnotification
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actioncreated'] = 'erstellt';
$string['actionupdated'] = 'aktualisiert';
$string['heading'] = 'Upload Benachrichtigung Einstellungen';
$string['long_diff'] = 'In dieser Datei wurden {$a} Seiten verändert.';
$string['long_diff_many'] = 'In dieser Datei wurden viele Seiten geändert.';
$string['messageprovider:digest'] = 'Kurs-Modifikationen Zusammenfassungsbenachrichtigung';
$string['pluginname'] = 'Upload Benachrichtigung';
$string['printed_changelog_prefix'] = 'Diese Datei ist eine Aktualisierung von {$a->filename} durchgeführt am {$a->date}.';
$string['printed_diff_prefix'] = 'Die folgenden Seiten dieser Datei wurden verändert:';
$string['settings_allow_changelog'] = 'Erlaube die automatische Erstellung einer Änderungshistorie';
$string['settings_allow_changelog_help'] = 'Erlaube Lehrenden die Erstellung einer automatischen Änderungshistorie für ihren Kurs zu aktivieren.';
$string['settings_allow_mail'] = 'Erlaube den Versand von E-Mail Benachrichtigungen';
$string['settings_allow_mail_help'] = 'Wenn aktiviert können E-Mails mit Benachrichtigungen bei neuen Materialien verschickt werden.';
$string['settings_course_allow_attachment'] = 'Erlaube E-Mail Anhänge';
$string['settings_course_allow_attachment_help'] = 'Wenn aktiviert können Studierende neue Materialien direkt als E-Mail Anhang erhalten. Auch diese Option gesetzt ist, werden nicht automatisch alle Mails mit einem Anhang versendet. Allrtdings haben Studierende die Möglichkeit dies zu aktivieren.';
$string['settings_course_disable'] = 'Deaktiviert';
$string['settings_course_enable'] = 'Aktiviert';
$string['settings_course_enable_changelog'] = 'Zeige eine Änderungshistorie bei Aktualisierungen';
$string['settings_course_enable_changelog_help'] = 'Wenn aktiviert werden Aktualisierungen des bereitgestellten Materials erkannt und eine Änderungshistorie unter der neuen Datei angezeigt. Diese kann Studierenden helfen die Anpassungen in ihren lokalen Kopien nachzutragen.';
$string['settings_course_enable_diff'] = 'Suche Unterschiede in der Aktualisierung';
$string['settings_course_enable_diff_help'] = 'Wenn aktiviert wird bei Aktualisierungen einer Datei die neue Version mit dem Vorgänger verglichen um geänderte Seiten zu identifizieren. Diese werden unter der neuen Datei angezeigt.';
$string['settings_course_enable_mail'] = 'Aktiviere die E-Mail Benachrichtigung bei neuen Materialien';
$string['settings_course_enable_mail_help'] = 'Keine Vorgaben: Die Studierenden können selber entscheiden, ob sie Benachrichtigungen wünschen, oder nicht.<br>
Deaktiviert: Es werden keine Mails bei geänderten Materialien in diesem Kurs versendet.<br>
Aktiviert: Studierende werden bei geänderten Materialien benachrichtigt, außer sie haben explizit widersprochen.';
$string['settings_course_error_diff_no_changelog'] = 'Die Suche nach Unterschieden setzt die Generierung einer Änderungshistorie voraus. Bitte die Änderungshistorie aktivieren, oder die Suche nach Unterschieden deaktivieren.';
$string['settings_course_headline'] = 'Kurseinstellungen für Upload Benachrichtigungen und Änderungshistorien';
$string['settings_course_no_preferences'] = 'Keine Vorgaben';
$string['settings_course_require_valid_course_admin'] = 'Diese Funktionalität ist nur für Kurs-Administratoren verfügbar.';
$string['settings_course_require_valid_course_id'] = 'Diese Funktionalität ist nur für gültige Kurs-IDs verfügbar.';
$string['settings_diff_not_available'] = '<p>Die Suche nach Unterschieden in PDF Dateien ist nicht verfügbar, da das Tool <code>diff</code> nicht auf dem System gefunden werden konnte. Wenn die obige Einstellung aktiviert wurde, prüfen Sie bitte in den Einstellungen des lokalen Plugins ChangelogLib die Pfadangaben zu dem Programm. Diese Nachricht verschwindet sobald das Programm gefunden wurde.</p>';
$string['settings_digest'] = 'Uhrzeit für den Versand der Zusammenfassung';
$string['settings_digest_help'] = 'Die Uhrzeit zu der jeden Tag die Zusammenfassung aller Benachrichtigungen verscickt werden soll.';
$string['settings_enable_changelog_by_default'] = 'Aktiviere die Änderungshistorie standardmäßig';
$string['settings_enable_changelog_by_default_help'] = 'Wenn aktiviert wird die Änderungshistorie automatsich in allen Kursen aktiviert, welche keine eigenen Einstellungen vorgenommen haben. Wenn ein Lehrender dies nicht wünscht, so kann der die Vorgaben für seinen Kurs überschreiben.';
$string['settings_enable_diff_by_default'] = 'Aktiviere die Suche nach Unterschieden standardmäßig';
$string['settings_enable_diff_by_default_help'] = 'Wenn aktiviert wird die Suche nach Unterschieden automatsich in allen Kursen aktiviert, welche keine eigenen Einstellungen vorgenommen haben. Wenn ein Lehrender dies nicht wünscht, so kann der die Vorgaben für seinen Kurs überschreiben.';
$string['settings_max_diff_filesize'] = 'Maximale Dateigröße von analysierten Datein<br>(in MB)';
$string['settings_max_diff_filesize_help'] = 'Wenn die Dateigröße der Materialien größer ist als dieser Wert werden keine Unterschiede in den Dateien gesucht. Setzen Sie diesen Wert auf Null um die Suche vollständig zu verbieten.<br>Die Suche nach Unterschieden benötigt eine aktivierte Änderungshistorie.';
$string['settings_max_mail_amount'] = 'Maximale Kursgröße für E-Mail Benachrichtigungen';
$string['settings_max_mail_amount_help'] = 'Setzen Sie diesen Wert um eine zu große Serverbelastung zu verhindern. Er definiert die maximale Größe eines Kurses bis zu der E-Mails versendet werden dürfen.';
$string['settings_max_mail_filesize'] = 'Maximale Dateigröße von E-Mail Anhängen<br>(in KB)';
$string['settings_max_mail_filesize_help'] = 'Die maximale Dateigröße von Materialien die über E-Mail Anhänge verschickt werden dürfen. Setzen Sie diesen Wert auf Null um den Versand von Anhängen vollständig zu unterbinden.';
$string['settings_max_mails_for_resource'] = 'Maximale Anzahl an Mails mit dem gleichen Anhang';
$string['settings_max_mails_for_resource_help'] = 'Setzen Sie diesen Wert um Lastspitzen zu unterbinden. Definiert die maximale Anzahl an Mails mit Anhang die auf Grund eines Kursmoduls verschickt werden dürfen.';
$string['settings_pdftotext_not_available'] = '<p>Die Suche nach Unterschieden in PDF Dateien ist nicht verfügbar, da das Programm <code>pdftotext</code> nicht auf dem System gefunden werden konnte. Wenn Sie die obige Einstellung aktiviert haben, schauen Sie bitte in den Einstellungen des lokalen Plugins ChangelogLib ob der Pfad korrekt gesetzt wurde. Diese Nachricht verschwindet sobald das Programm gefunden wurde.</p>';
$string['settings_required_mail_suffix'] = 'Geforderter Suffix der E-Mail Adressen';
$string['settings_required_mail_suffix_help'] = 'Tragen Sie hier den Domainnamen Ihrer Institution ein um einen Versand ausschließlich an diese E-Mail Adressen zu erlauben. Lassen Sie das Feld leer um keine Einschränkung vorzunehmen.';
$string['settings_saved_successfully'] = 'Ihre Einstellungen wurden gespeichert.';
$string['settings_user_disable'] = 'Deaktiviert';
$string['settings_user_enable'] = 'Aktiviert';
$string['settings_user_enable_digest'] = 'Nur eine tägliche Zusammenfassung versenden.';
$string['settings_user_enable_digest_help'] = 'Aktiviert: Sie werden nur eine Mail am Abend mit allen Änderungen des Tages erhalten.<br>
Deaktiviert: Sie werden eine Mail sobald wie möglich nach einer Änderung erhalten.';
$string['settings_user_enable_mail'] = 'Aktiviere E-Mail Benachrichtigungen bei Material-Uploads';
$string['settings_user_enable_mail_help'] = 'Keine Vorgaben: Sie werden nur eine E-Mail erhalten, wenn ein Lehrender dies explizit für seinen Kurs aktiviert hat.<br>
Deaktiviert: Sie werden keine Mails erhalten.<br>
Aktiviert: Sie werden Mails erhalten außer ein Lehrender hat den Versand für seinen Kurs verboten.';
$string['settings_user_headline'] = 'Möchten Sie eine Benachrichtigung erhalten, wenn neues Material in einem Kurs verfügbar wurde?';
$string['settings_user_max_mail_filesize'] = 'Maximale Dateigröße von E-Mail Anhängen<br>(in KB)';
$string['settings_user_max_mail_filesize_help'] = 'Sie können neues oder aktualisiertes Material direkt per E-Mail erhalten. Dieses Feld definiert die maximale Dateigröße, die in einem Anhang versendet werden soll. <br>Setzen Sie dieses Feld auf Null um keine Anhänge zu erhalten.';
$string['settings_user_max_mail_filesize_not_more_than_admin'] = 'Der Moodle-Administrator erlaubt nur Anhänge bis zu {$a}KB';
$string['settings_user_no_preferences'] = 'Keine Vorgaben';
$string['settings_user_not_negative'] = 'Negative Werte sind nicht erlaubt';
$string['settings_user_require_valid_users'] = 'Diese Funktionalität ist nur für gültige Benutzer verfügbar.';
$string['templatemessage'] = 'Hallo {$a->firstname},

die folgenden Materialien wurden in einem Ihrer Kurse angepasst.

{$a->notifications}

{$a->signoff}

Sie erhalten diese E-Mail da Sie oder einer Ihrer Lehrenden den Versand beantragt hat. Sie können Ihre Einstellungen unter folgendem Link ändern: {$a->user_settings}';
$string['templatemessage_html'] = 'Hallo {$a->firstname},<br><br>

die folgenden Materialien wurden in einem Ihrer Kurse angepasst.

<ul>
{$a->notifications}
</ul>

{$a->signoff}<br><br>

Sie erhalten diese E-Mail da Sie oder einer Ihrer Lehrenden den Versand beantragt hat. Sie können Ihre Vorgaben in den <a href="{$a->user_settings}">Einstellungen</a> ändern.';
$string['templateresource'] = '* "{$a->filename}" in "{$a->coursefullname}" ({$a->url_course}) wurde {$a->action}: {$a->url_file}';
$string['templateresource_html'] = '<li><a href="{$a->url_file}">{$a->filename}</a> in <a href="{$a->url_course}">{$a->coursefullname}</a> wurde {$a->action}</li>';
$string['templatesubject_plural'] = 'Aktualisierung von Materialien in Ihren Kursen {$a}';
$string['templatesubject_singular'] = 'Aktualisierung von Materialien in Ihrem Kurs {$a}';
$string['uploadnotification:receivedigest'] = 'Erhalte eine Zusammenfassung von Kurs Modifikationen';
$string['warning'] = 'Warnung';
