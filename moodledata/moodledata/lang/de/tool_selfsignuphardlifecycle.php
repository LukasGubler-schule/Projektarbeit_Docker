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
 * Strings for component 'tool_selfsignuphardlifecycle', language 'de', version '4.5'.
 *
 * @package     tool_selfsignuphardlifecycle
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['col_accountoverridden'] = 'Fristen überschrieben';
$string['col_accountstatus'] = 'Nutzerkonto Status';
$string['col_auth'] = 'Authentifizierung';
$string['col_nextstep'] = 'Nächster Schritt';
$string['col_profile'] = 'Nutzerprofil';
$string['col_timecreated'] = 'Nutzerkonto Erstellungsdatum';
$string['emptytable'] = 'Es gibt aktuell keine Nutzer/innen, welche auf der Basis der aktuellen Konfiguration des Dienstprogramms einem harten Lebenszyklus unterliegen würden.';
$string['eventuserdeleted'] = 'Nutzer/in gelöscht';
$string['eventuserdeleted_desc'] = 'Nutzer/in mit der ID {$a->userid} wurde {$a->period} volle Tage nach dem Erstellungsdatum des Nutzerkontos gelöscht.';
$string['eventuserdeletedoverridden_desc'] = 'Nutzer/in mit der ID {$a->userid} wurde basierend auf einem Überschreibungsdatum gelöscht.';
$string['eventusersuspended'] = 'Nutzer/in deaktiviert';
$string['eventusersuspended_desc'] = 'Nutzer/in mit der ID {$a->userid} wurde {$a->period} volle Tage nach dem Erstellungsdatum des Nutzerkontos deaktiviert.';
$string['eventusersuspendedoverridden_desc'] = 'Nutzer/in mit der ID {$a->userid} wurde basierend auf einem Überschreibungsdatum deaktiviert.';
$string['nextstep_deletioncomingup'] = 'Wird am {$a->date} gelöscht';
$string['nextstep_suspensioncomingup'] = 'Wird am {$a->date} deaktiviert';
$string['nextstep_unknown'] = 'Unbekannt';
$string['pluginname'] = 'Harter Lebenszyklus für selbstregistrierte Nutzer/innen';
$string['privacy:metadata'] = 'Das Plugin \'Harter Lebenszyklus für selbstregistrierte Nutzer/innen\' speichert keine personenbezogenen Daten.';
$string['profileedit'] = 'Bearbeiten';
$string['profileview'] = 'Ansehen';
$string['setting_authmethodsheading'] = 'Authentifizierungsmethoden';
$string['setting_coveredauth'] = 'Berücksichtigte Authentifizierungsmethoden';
$string['setting_coveredauth_desc'] = 'Mit dieser Einstellung steuern Sie, welche Nutzer/innen von diesem Dienstprogramm behandelt werden. Falls Sie eine bestimmte Authentifizierungsmethode auswählen, werden alle Nutzer/innen, welche diese Authentifizierungsmethode nutzen, Kandidaten für die automatisierte (Deaktivierung und) Löschung. Falls Sie eine bestimmte Authentifizierungsmethode nicht auswählen, werden alle Nutzer/innen, welche diese Authentifizierungsmethode haben, von diesem Dienstprogramm unangetastet bleiben.';
$string['setting_enableuseroverrides'] = 'Überschreibungen aktivieren';
$string['setting_enableuseroverrides_desc'] = 'Mit dieser Einstellung erlauben Sie das Überschreiben des Datums der Nutzerlöschung oder Suspendierung für einzelne Nutzer/innen. .';
$string['setting_enableusersuspension'] = 'Aktiviere Nutzerdeaktivierung vor Nutzerlöschung';
$string['setting_enableusersuspension_desc'] = 'Mit dieser Einstellung steuern Sie, ob Nutzer/innen vor der Nutzerlöschung noch deaktiviert werden sollen.';
$string['setting_userdeletionheading'] = 'Nutzerlöschung';
$string['setting_userdeletionoverridefield'] = 'Nutzerprofilfeld zur Überschreibung der Nutzerlöschung';
$string['setting_userdeletionoverridefield_desc'] = 'Mit dieser Einstellung konfigurieren Sie das Nutzerprofilfeld, welches herangezogen wird, um das Datum der Nutzerlöschung zu überschreiben. Nutzer/innen, welche dieses Nutzerprofilfeld aktiviert und befüllt haben, werden an ebendiesem Datum gelöscht werden und nicht basierend auf dem errechneten Löschdatum.';
$string['setting_userdeletionperiod'] = 'Frist zur Nutzerlöschung';
$string['setting_userdeletionperiod_desc'] = 'Mit dieser Einstellung konfigurieren Sie die Anzahl an Tagen, nach welchen ein Nutzerkonto von diesem Dienstprogramm gelöscht werden wird.';
$string['setting_userlifecyclestatic_desc'] = 'Mit diesem Dienstprogramm können Nutzer/innen basierend auf dem Erstellungsdatum ihres Nutzerkontos gelöscht (und optional deaktiviert) werden. Es ist insbesondere dazu gedacht, Nutzer/innen zu entfernen, welche sich auf Moodle selbstregistriert haben und einem festen Zeitplan unterliegen sollen. Das Dienstprogramm ist dabei simpel aufgebaut und arbeitet wirklich nur auf dem Erstellungsdatum des Nutzerkontos. Es berücksichtigt nicht, ob das Nutzerkonto noch aktiv genutzt wird oder nicht. Darüberhinaus versendet es auch keine Benachrichtigungen an die jeweilige Perdon, bevor das Nutzerkonto deaktiviert oder gelöscht wird.';
$string['setting_useroverridesheading'] = 'Überschreibungen';
$string['setting_useroverridesnofieldyet_desc'] = 'Mit dieser Einstellung konfigurieren Sie das Nutzerprofilfeld, welches für Überschreibungen herangezogen wird. Aktuell gibt es noch kein geeignetes Nutzerprofilfeld. Bitte gehen Sie zu <a href="{$a->url}">{$a->linktitle}</a> und erstellen Sie zunächst ein Nutzerprofilfeld vom Typ {$a->fieldname}.';
$string['setting_useroverridesrelation_desc'] = 'Bitte beachten Sie: Sie können die Einstellung \'Nutzerprofilfeld zur Überschreibung der Nutzerdeaktivierung\' auf dasselbe Profilfeld setzen wie die Einstellung \'Nutzerprofilfeld zur Überschreibung der Nutzerlöschung\', die Einstellung verhindert dies nicht. Eine solche Konfiguration wird jedoch nicht empfohlen da sich das Dienstprogramm dann eher unerwartet verhalten wird: Nutzer/innen werden nach dem im Nutzerprofilfeld gesetzten Datum deaktiviert werden, aber nicht vor dem nächsten Durchlauf des geplanten Tasks endgültig gelöscht werden. Dasselbe gilt, wenn die Administrator/innen für einen Nutzerkonto das Löschdatum vor das Deaktivierungsdatum setzt: Das Nutzerkonto wird stets immer zuerst deaktiviert und danach dann gelöscht.';
$string['setting_userperiodscalc_desc'] = 'Dieser Zeitraum wird basierend auf dem Erstellungsdatum des Nutzerkontos errechnet. Der konfigurierte Zeitraum wird als volle Tage interpretiert. Dies bedeutet, dass der erste, nicht vollständige Tag an dem eine Person sich in Moodle registriert, nicht gezählt werden wird.';
$string['setting_userperiodsrelation_desc'] = 'Bitte beachten Sie: Sie können die Einstellung \'Frist zur Nutzerdeaktivierung" auf den gleichen oder einen höheren Wert als die \'Frist zur Nutzerlöschung\' setzen, die Einstellung verhindert dies nicht. Eine solche Konfiguration wird jedoch nicht empfohlen da sich das Dienstprogramm dann eher unerwartet verhalten wird: Nutzer/innen werden nach der konfigurierten Frist deaktiviert und dann am direkt folgenden nächsten Durchlauf des geplanten Tasks endgültig gelöscht.';
$string['setting_usersuspensionheading'] = 'Nutzerdeaktivierung';
$string['setting_usersuspensionoverridefield'] = 'Nutzerprofilfeld zur Überschreibung der Nutzerdeaktivierung';
$string['setting_usersuspensionoverridefield_desc'] = 'Mit dieser Einstellung konfigurieren Sie das Nutzerprofilfeld, welches herangezogen wird, um das Datum der Nutzerdeaktivierung zu überschreiben. Nutzer/innen, welche dieses Nutzerprofilfeld aktiviert und befüllt haben, werden an ebendiesem Datum deaktiviert und nicht basierend auf dem errechneten Deaktivierungsdatum.';
$string['setting_usersuspensionperiod'] = 'Frist zur Nutzerdeaktivierung';
$string['setting_usersuspensionperiod_desc'] = 'Mit dieser Einstellung konfigurieren Sie die Anzahl an Tagen, nach welchen ein Nutzerkonto von diesem Dienstprogramm deaktiviert wird.';
$string['settingsuserlist'] = 'Nutzerliste';
$string['status_active'] = 'Aktiv';
$string['status_suspended'] = 'Deaktiviert';
$string['status_unknown'] = 'Unbekannt';
$string['taskprocesslifecycle'] = 'Lebenszyklus für selbstregistrierte Nutzer/innen verarbeiten';
