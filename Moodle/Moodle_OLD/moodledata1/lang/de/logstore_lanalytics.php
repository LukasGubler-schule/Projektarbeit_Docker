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
 * Strings for component 'logstore_lanalytics', language 'de', version '3.10'.
 *
 * @package     logstore_lanalytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['buffersize'] = 'Puffergröße';
$string['pluginname'] = 'Learning Analytics Protokoll';
$string['privacy:metadata'] = 'Dieses Plugin speichert keine personenbezogenen Daten. Alle Daten werden protokolliert und anonymisiert gespeichert.';
$string['setting_course_ids'] = 'course_ids';
$string['setting_course_ids_descr'] = 'Wird mit der log_scope-Option "include" oder "exclude" verwendet, um nur bestimmte Kurse zu erfassen. Beispiel: <code>10,153,102</code>.';
$string['setting_log_scope'] = 'log_scope';
$string['setting_log_scope_all'] = 'Alle Ereignisse protokollieren';
$string['setting_log_scope_descr'] = 'Umfang des Protokollierungsprozesses festlegen. Standardmäßig wird alles protokolliert.';
$string['setting_log_scope_exclude'] = 'Protokollierung von Ereignissen AUSSCHLIEßLICH der unten über course_ids angegebenen Kurse';
$string['setting_log_scope_include'] = 'Ereignisse nur in Kursen protokollieren, die über course_ids unten angegeben sind';
$string['setting_nontracking_roles'] = 'Nichtverfolgte_Rollen';
$string['setting_nontracking_roles_descr'] = 'Definieren Sie, welche Rollen <strong>nicht</strong> verfolgt werden sollen (schwarze Liste). Dies ist nützlich, wenn Sie bestimmte Rollen (wie Manager oder Lehrer) nicht verfolgen wollen. Geben Sie die Rolle mit Hilfe des "Kurznamens" an (zu finden über <em>Site Administration</em> -> Registerkarte <em>Benutzer</em> -> Kategorie <em>Berechtigungen</em> -> <em>Rollen definieren</em>). Standardmäßig werden alle Rollen verfolgt. Beispiel: <code>Lehrer,Lehrer bearbeiten,Manager</code>. Diese Einstellung hat Vorrang vor <code>tracking_roles</code>.';
$string['setting_tracking_roles'] = 'Verfolgte_Rollen';
$string['setting_tracking_roles_descr'] = 'Legen Sie fest, welche Rollen verfolgt werden sollen (Whitelist). Dies ist nützlich, wenn Sie nur bestimmte Rollen verfolgen wollen (wie Teilnehmer/innen oder Gäste). Geben Sie für die Rolle den "Kurznamen" an (zu finden über <em>Site-Verwaltung</em> -> Registerkarte <em>Teilnehmer/innen</em> -> Kategorie <em>Berechtigungen</em> -> <em>Rollen definieren</em>). Standardmäßig werden alle Rollen nachverfolgt. Beispiel: <code>student, guest</code>';
