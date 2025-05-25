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
 * Strings for component 'block_course_checker', language 'de', version '3.10'.
 *
 * @package     block_course_checker
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activedates_noactivedates'] = 'Im Abschnitt "Aktivitätsabschluss" sollte es kein Abschlusstermin geben.';
$string['activedates_noactivedatesinactivity'] = 'In der Aktivität {$a->modtype} sollte es keine aktivierten Datumsangaben geben, suchen Sie nach den folgenden Feldern: {$a->adateissetin}';
$string['activedates_setting_coursesregex'] = 'Vollständiger Kursname RegEx-Filter';
$string['activedates_setting_coursesregex_help'] = 'Definieren Sie die RegExp, um diesen Checker nur dort zu erlauben, wo er mit den vollständigen Kursnamen übereinstimmt.';
$string['activedates_setting_modules'] = 'Aktivierte Module';
$string['activedates_setting_modules_help'] = 'Definieren Sie die erlaubten Module (müssen in <a href="/admin/modules.php" target="_blank">Aktivitäten verwalten</a> aktiviert sein), die auf aktive Termine geprüft werden sollen.';
$string['activedates_success'] = 'Die {$a}-Aktivität ist richtig konfiguriert';
$string['admin_domain_list_notvalid'] = 'In dieser Liste gibt es ungültige Domains';
$string['admin_domain_name_default_missing'] = 'Domainname fehlt: {$a}';
$string['admin_domain_name_notvalid'] = 'Der Domainname ist nicht korrekt: {$a}. Fügen Sie nur einen Domainnamen pro Zeile hinzu.';
$string['admin_restrictedint_max'] = 'Der maximale Wert ist {$a}';
$string['admin_restrictedint_min'] = 'Der minimale Wert ist {$a}';
$string['attendance_missingattendanceactivity'] = 'Anwesenheits-Check fehlgeschlagen - keine Anwesenheitsaktivität in diesem Kurs';
$string['attendance_missingplugin'] = 'Überspringen des Testfalls, weil das Plugin mod_attendance nicht installiert ist';
$string['attendance_onlyoneattendenceactivityallowed'] = 'Anwesenheits-Check fehlgeschlagen - nur eine Anwesenheits-Lerneinheit ist erlaubt';
$string['attendance_sessionsnotemty'] = 'Anwesenheits-Check fehlgeschlagen - es ist nicht erlaubt Lerneinheiten einzufügen';
$string['attendance_success'] = 'Die Anwesenheitsaktivität ist korrekt konfiguriert';
$string['automaticcheck'] = 'Letzter automatischer Check';
$string['automaticcheckempty'] = 'Die Checks wurden nie für diesen Kurs ausgeführt';
$string['backtocourse'] = 'Zurück zum Kurs';
$string['blocks_activity'] = 'Block "{$a->name}"';
$string['blocks_comparison'] = '(Referenzkurs: "{$a->valuereference}" | Aktueller Kurs: "{$a->valuecurrent}")';
$string['blocks_error'] = 'Der Block ist versehentlich vorhanden oder fehlt im aktuellen Kurs.';
$string['blocks_setting'] = 'Aktivierte Blöcke';
$string['blocks_setting_help'] = 'Definieren Sie die erlaubten Blöcke ( müssen in <a href="/admin/blocks.php" target="_blank">Blöcke verwalten</a> aktiviert sein), die geprüft werden sollen.';
$string['blocks_success'] = 'Der Block ist korrekt in den aktuellen Kurs eingefügt';
$string['check_failed'] = 'Fehler';
$string['check_successful'] = 'Erfolg';
$string['checker_activedates'] = 'Prüfung aktiver Termine';
$string['checker_activedates_display'] = 'Aktive Termine in den Aktivitätskonfigurationen';
$string['checker_attendance'] = 'Überprüfung der Anwesenheits-Lerneinheiten';
$string['checker_attendance_display'] = 'Anwesenheits-Lerneinheiten';
$string['checker_blocks'] = 'Prüfung der Blöcke';
$string['checker_blocks_display'] = 'Blöcke vorhanden';
$string['checker_col_block_header'] = 'Check';
$string['checker_data'] = 'Prüfung der Datenbank';
$string['checker_data_display'] = 'Datenbank mit Feldern';
$string['checker_groups'] = 'Prüfung der Gruppeneinreichung';
$string['checker_groups_display'] = 'Gruppeneinreichung für Aufgaben';
$string['checker_last_run'] = 'Letzte Ausführung {$a}';
$string['checker_last_run_global'] = 'Unbekanntes Datum für diesen Checker. Die globale Kursüberprüfung war am {$a}';
$string['checker_links'] = 'Prüfung der Links';
$string['checker_links_activity'] = 'Aktivität: {$a->name} ({$a->modname})';
$string['checker_links_book_chapter'] = 'Buchkapitel: {$a->title}';
$string['checker_links_display'] = 'Links in der Kursbeschreibung und Aktivitäten';
$string['checker_links_error_code'] = 'HTTP-Fehler {$a->http_code} bei {$a->url}';
$string['checker_links_error_curl'] = 'cURL-Fehler {$a->curl_errno} {$a->curl_error} bei {$a->url}';
$string['checker_links_error_httpsecurity'] = 'Die angegebene Domain {$a} befindet sich auf einer sogenannten "Blacklist". Die Domain und die Port-Nummer wird mit der Black-/Whitelist der Moodle-HTTP-Sicherheit abgeglichen.';
$string['checker_links_error_skipped'] = 'Die Domain {$a->host} steht auf der Whitelist bei {$a->url}';
$string['checker_links_error_undefined'] = 'Ein undefinierter Fehler ist beim Link aufgetreten';
$string['checker_links_ok'] = '{$a->url} ist gültig (Code {$a->http_code})';
$string['checker_links_setting_connect_timeout'] = 'cURL-Verbindungs-Timeout';
$string['checker_links_setting_timeout'] = 'cURL-Timeout';
$string['checker_links_setting_useragent'] = 'User Agent';
$string['checker_links_setting_useragent_help'] = 'User Agent';
$string['checker_links_setting_whitelist'] = 'Whitelist für Prüfung der Links';
$string['checker_links_setting_whitelist_desc'] = 'Beachten Sie, dass <code>www.w3.org</code> vorhanden sein muss.';
$string['checker_links_setting_whitelist_help'] = 'Bitte fügen Sie eine URL pro Zeile hinzu, z.B. <code>https://moodle.org</code>';
$string['checker_links_summary'] = 'Kursbeschreibung';
$string['checker_links_wiki_page'] = 'Wiki-Seite: {$a->title}';
$string['checker_quiz'] = 'Prüfung des Quiz';
$string['checker_quiz_display'] = 'Beste Bewertung im Quiz';
$string['checker_referencefilter_comparison'] = '(Referenzkurs: "{$a->filtervaluereference}" | Aktueller Kurs: "{$a->filtervaluecurrent}")';
$string['checker_referencefilter_enabled'] = 'Prüfung der Filter für Referenzeinstellungen aktiviert';
$string['checker_referencefilter_enabled_help'] = 'Bitte aktivieren Sie dies, um alle Kursfilter mit dem Referenzkurs zu vergleichen.';
$string['checker_referencefilter_failing'] = 'Der Filter "{$a->filterkey}" ist nicht korrekt';
$string['checker_referencefilter_filternotsetincurrentcourse'] = 'Der Filter "{$a->filterkey}" fehlt im aktuellen Kurs.';
$string['checker_referencefilter_success'] = 'Alle Filter sind im aktuellen Kurs korrekt eingestellt';
$string['checker_referenceformatoptions_enabled'] = 'Prüfung der Formatoptionen für Referenzeinstellungen aktiviert';
$string['checker_referenceformatoptions_enabled_help'] = 'Bitte aktivieren Sie diese Option, um alle Kursformatoptionen mit dem Referenzkurs zu vergleichen.';
$string['checker_referenceformatoptions_failing'] = 'Die Formatoption "{$a->optionkey}" ist nicht korrekt';
$string['checker_referenceformatoptions_success'] = 'Alle Formatoptionen sind im aktuellen Kurs korrekt eingestellt';
$string['checker_referencesettings'] = 'Referenzeinstellungen-Check';
$string['checker_referencesettings_checklist'] = 'Checkliste für die Einstellungen des Referenzkurs-Checkers';
$string['checker_referencesettings_checklist_help'] = 'Wählen Sie eine oder mehrere Einstellungen zum Vergleich mit dem Referenzkurs aus.';
$string['checker_referencesettings_comparison'] = '(Referenzkurs: "{$a->settingvaluereference}" | Aktueller Kurs: "{$a->settingvaluecurrent}")';
$string['checker_referencesettings_display'] = 'Einstellungen im Vergleich zum Referenzkurs';
$string['checker_referencesettings_failing'] = 'Die Einstellung "{$a->setting}" ist nicht korrekt';
$string['checker_referencesettings_settingismissing'] = 'Das "{$a->setting}" ist kein Kurssetting';
$string['checker_referencesettings_success'] = 'Die Einstellung "{$a->setting}" ist korrekt';
$string['checker_subheadings'] = 'Label-Untertitel Check';
$string['checker_subheadings_display'] = 'Label-Untertitel';
$string['checker_subheadings_setting_whitelist'] = 'Whitelist für Untertitel';
$string['checker_subheadings_setting_whitelist_help'] = 'Bitte fügen Sie eine Zeichenfolge pro Zeile hinzu. Beispiel: "Liebe(r) Modulentwickler".';
$string['checker_userdata'] = 'Prüfung der Nutzerdaten';
$string['checker_userdata_display'] = 'Nutzerdaten in Aktivitäten';
$string['course_checker:addinstance'] = 'Einen neuen Kurs-Checker Block hinzufügen';
$string['course_checker:view'] = 'Den Kurs-Checker Block anzeigen';
$string['course_checker:view_notification'] = 'Die Kurs-Checker Notifikationen anzeigen';
$string['course_checker:view_report'] = 'Die Resultat-Seite anzeigen';
$string['data_success'] = 'Die Datenbank ist korrekt konfiguriert und die Felder sind definiert';
$string['group_activities'] = 'Aktivitäts-Einstellungen';
$string['group_blocks'] = 'Block-Einstellungen';
$string['group_course_settings'] = 'Kurs-Einstellungen';
$string['group_links'] = 'Link-Validator';
$string['groups_activity'] = 'Aktivität "{$a->name}"';
$string['groups_deactivated'] = 'Die Gruppeneinreichungs-Einstellung ist deaktiviert';
$string['groups_idmissing'] = 'Die Gruppeneinreichung ist aktiv, aber es ist keine Gruppierung festgelegt.';
$string['groups_lessthantwogroups'] = 'Es wurden weniger als 2 Gruppen für die Gruppierung eingerichtet';
$string['groups_missing'] = 'Die Gruppierung wurde nicht korrekt eingerichtet';
$string['groups_success'] = 'Die Gruppeneinreichungs-Einstellung ist richtig eingerichtet';
$string['humancheck'] = 'Letzte händische Kontrolle:';
$string['humancheck_comment_placeholder'] = 'Kommentar';
$string['humancheck_reason'] = 'Grund:';
$string['humancheck_title'] = 'Datum der letzten händischen Kontrolle:';
$string['humancheck_update'] = 'Aktualisieren';
$string['humancheckempty'] = 'Dieser Kurs wurde nie von Hand kontrolliert';
$string['invalidtoken'] = 'Ihr Token ist ungültig';
$string['lastactivityedition'] = 'Letzte Aktivitätsänderungen';
$string['lastactivityedition_notimestamp'] = 'Kein Datum gefunden';
$string['link'] = 'Link';
$string['link_col_page_header'] = 'Link zum Lösen des Problems';
$string['message'] = 'Nachricht';
$string['message_col_page_header'] = 'Nachricht';
$string['messageprovider:checker_completed'] = 'Der Kurs ist kontrolliert';
$string['messageprovider_allchecks_completed'] = 'Die Checks sind abgeschlossen.';
$string['messageprovider_allchecks_subject'] = 'Der Check {$a->checkername} ist für den Kurs {$a->coursename} abgeschlossen';
$string['messageprovider_result_html'] = 'Sie sehen das Ergebnis unter {$a->urlhtml}';
$string['messageprovider_result_html_label'] = 'der entsprechenden Ergebnisseite';
$string['messageprovider_result_plain'] = 'Sie sehen das Ergebnis unter {$a->url}.';
$string['messageprovider_singlechecks_completed'] = 'Der Check {$a->checkername} ist abgeschlossen.';
$string['messageprovider_singlechecks_subject'] = 'Der Check {$a->checkername} ist für den Kurs {$a->coursename} abgeschlossen';
$string['nogroupresults'] = 'Es wurde nichts zum Testen gefunden. Alles sieht gut aus!';
$string['noresults'] = 'Der Kurs wurde nie automatisch kontrolliert';
$string['pluginname'] = 'Kurs-Checker';
$string['privacy:metadata'] = 'Der Kurs-Checker enthält ausschließlich anonyme Daten.';
$string['quiz_activity'] = 'Aktivität: {$a->name} ({$a->modname})';
$string['quiz_grade_sum_error'] = 'Beste Bewertung ({$a->grade}) und die Summe der Punkte ({$a->sumgrades}) sollten in diesem Quiz identisch sein';
$string['quiz_grade_sum_success'] = 'Dieses Quiz ist richtig konfiguriert';
$string['rerun_col_block_header'] = 'Erneut ausführen';
$string['rerun_disabled_col_block_header'] = 'Dieser Check ist schon in der Warteschlange';
$string['resolutionlink'] = 'Auflösung:';
$string['result'] = 'Ergebnis';
$string['result_checker_disabled'] = 'Dieser Check wurde vom Administrator deaktiviert.';
$string['result_checker_manualtask'] = 'Dieser Checker erfordert ein wenig manuelle Arbeit.';
$string['result_col_block_header'] = 'Ergebnis';
$string['result_col_page_header'] = 'Ergebnis';
$string['result_last_activity_empty'] = 'Keine geänderten Aktivitäten seit {$a}';
$string['result_last_activity_header'] = 'Zuletzt geänderte Aktivitäten';
$string['result_last_activity_header_date'] = 'Zuletzt geänderte Aktivitäten seit {$a}';
$string['resultpagegoto'] = 'Ergebnisübersicht anzeigen';
$string['resultpageheader'] = 'Ergebnisübersicht anzeigen';
$string['resultpagetitle'] = 'Detaillierte Ergebnisse zum Kurs {$a->name} anzeigen';
$string['resultpermissiondenied'] = 'Sie haben keine Berechtigung, um auf diese Seite zuzugreifen';
$string['runcheckbtn'] = 'Kurs checken';
$string['runcheckbtn_already'] = 'Dieser Kurs ist bereits für die automatische Kontrolle eingeplant.';
$string['runcheckbtn_nocheckers'] = 'Keine Checker sind aktiviert.';
$string['settings_checker_dependency'] = '<div class="alert alert-warning">Checker-Abhängigkeit fehlgeschlagen, prüfen Sie, ob das Plugin <a href="/admin/modules.php" target="_blank">{$a}</a> installiert und aktiviert ist.</div>';
$string['settings_checker_header'] = '{$a} Einstellungen';
$string['settings_checker_hide'] = '{$a} verborgen';
$string['settings_checker_toggle'] = '{$a} aktiviert';
$string['settings_general'] = '<p>If the checker is disabled (after save changes) there will be shown below a new setting to hide and show each checker results.</p>';
$string['settings_referencecourseid'] = 'Referenzkurs-ID';
$string['settings_rolesallowedmanual'] = 'Rollen für die händische Kontrolle';
$string['settings_rolesallowedmanual_description'] = 'Definieren Sie die erlaubten Rollen, die global oder pro Kurs festgelegt werden, um das händische Kontrollformular zu verwenden.';
$string['subheadings_generalerror'] = 'Es gab ein Problem bei der Durchführung dieses Checks';
$string['subheadings_iconmissing'] = 'Das Icon fehlt im ersten html-Tag';
$string['subheadings_labelignored'] = 'Dieses Label wird aufgrund der Whitelist in der Plugin-Konfiguration ignoriert.';
$string['subheadings_success'] = 'Dieses Textfeld hat einen schönen Untertitel und ein Symbol';
$string['subheadings_wrongfirsthtmltag'] = 'Der erste html-Tag ist kein {$a->htmltag}';
$string['userdata_error'] = 'Es sollten keine Nutzerdaten in der {$a}-Aktivität vorhanden sein.';
$string['userdata_help'] = 'Wenn Sie die Nutzerdaten in andere Kurse kopieren möchten, müssen Sie die Daten manuell importieren. Hier finden Sie einige nützliche Anleitungen: <a href="https://docs.moodle.org/38/de/Nutzerdaten_sichern" target="_blank">Nutzerdaten sichern</a> und <a href="https://docs.moodle.org/38/de/Aktivit%C3%A4ten_wiederverwenden" target="_blank">Aktivitäten wiederverwenden</a>.';
$string['userdata_setting_coursesregex'] = 'Vollständiger Kursname RegEx-Filter';
$string['userdata_setting_coursesregex_help'] = 'Definieren Sie die RegExp, um diesen Checker nur dort zu erlauben, wo er mit den vollständigen Kursnamen übereinstimmt.';
$string['userdata_setting_modules'] = 'Aktivierte Module';
$string['userdata_setting_modules_help'] = 'Definieren Sie die erlaubten Module ( müssen in <a href="/admin/modules.php" target="_blank">Aktivitäten verwalten</a> aktiviert sein, die Methode reset_userdata in <code>mod/{modname}/lib.php</code> enthalten und von diesem Plugin unterstützt sein), die auf Nutzerdaten geprüft werden sollen.';
$string['userdata_success'] = 'Die Aktivität {$a} enthält keine Nutzerdaten.';
