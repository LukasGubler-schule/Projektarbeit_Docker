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
 * Strings for component 'local_sandbox', language 'de', version '3.10'.
 *
 * @package     local_sandbox
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adjustcoursestartdate'] = 'Kursbeginn anpassen';
$string['adjustcoursestartdate_desc'] = 'Beim Zurücksetzen des Kurses soll der Kursbeginn auf das aktuelle Datum anstatt auf das in der Kurssicherungsdatei hinterlegte Datum gesetzt werden';
$string['coursebackups'] = 'Kurssicherungen';
$string['coursebackups_desc'] = 'Laden Sie hier die .mbz Kurssicherungs-Dateien hoch, die der Sandkasten nutzen soll. Kurssicherungen in diesem Dateiablagebereich müssen mit dem kurzen Kursname des zurückzusetzenden Kurses benannt sein und die Dateiendung .mbz haben. Bitte lesen Sie die README Datei für Details.';
$string['coursebackupsheading'] = 'Kurssicherungen';
$string['cronrunday'] = 'Ausführungstage';
$string['cronrunday_desc'] = 'Die Sandkasten-Kurse sollen an diesen Tagen zurückgesetzt werden';
$string['cronruntime'] = 'Ausführungszeit';
$string['cronruntime_desc'] = 'Die Sandkasten-Kurse sollen jeweils um diese Uhrzeit zurückgesetzt werden';
$string['cronruntimeheading'] = 'Ausführungszeit';
$string['cronruntimescheduledtasksactivate'] = 'Standardmäßig ist der geplante Vorgang für den Sandkasten im System \'Geplante Vorgänge\' deaktiviert. Sie müssen den geplanten Vorgang dort aktivieren, um das Plugin zu nutzen.';
$string['cronruntimescheduledtasksmanagement'] = 'Moodle unterstützt ein System namens "Geplante Vorgänge". Die Ausführungszeit des Sandkasten Plugins wird in diesen "Geplanten Vorgängen" konfiguriert.';
$string['cronruntimescheduledtasksstandardtime'] = 'Standardmäßig ist der geplante Vorgang für den Sandkasten im "Geplante Vorgänge" System auf 1:00 Uhr GMT gesetzt. Bitte ändern Sie diese Zeit dort ab, falls nötig.';
$string['emailsubjecterror'] = 'FEHLER: Sandkasten';
$string['emailsubjectnotice'] = 'HINWEIS: Sandkasten';
$string['emailsubjectwarning'] = 'WARNUNG: Sandkasten';
$string['errorlastcronerror'] = 'FEHLER: Der Zeitpunkt der letzten Ausführung des Sandkastens konnte nicht aus der Datenbank gelesen werdenestamp from database, Ausführung wird beendet...';
$string['eventcourserestored'] = 'Kurs zurückgesetzt';
$string['eventcourserestored_desc'] = 'Der Kurs \'{$a}\' wurde auf seinen definierten Ausgangszustand zurückgesetzt';
$string['exitingnoneed'] = 'Der Zeitpunkt zur nächsten Ausführung des Sandkastens ist noch nicht erreicht, Ausführung wird beendet...';
$string['keepcourseid'] = 'Kurs-ID beibehalten';
$string['keepcourseid_desc'] = 'Standardmäßig, um beim Zurücksetzen eines Kurses aus einer Kurssicherung ganz sicher zu gehen, löscht der Sandkasten den vorhanden Kurs und legt einen neuen an. Der zurückgesetzte Kurs erhält dann eine neue Kurs-ID. Wenn Sie diese Einstellung aktivieren wird der Sandkasten seine Strategie aber dahingehend ändern, dass er den vorhandenen Kurs beibehält und stattdessen nur den Kursinhalt löscht bevor er den Kurs aus der Kurssicherung wiederherstellt. Der zurückgesetzte Kurs wird dann weiterhin dieselbe Kurs-ID wie vor dem Zurücksetzen haben.';
$string['noticedaysnotconfigured'] = 'HINWEIS: Die Tage, an denen der Sandkasten ausgeführt werden soll, sind nicht konfiguriert, es gibt also nichts zu tun, Ausführung wird beendet...';
$string['noticenocoursebackups'] = 'HINWEIS: Der Sandkasten-Dateiablagebereich enthält keine Dateien, es gibt also nichts zu tun, Ausführung wird beendet...';
$string['noticerestorecount'] = 'HINWEIS: {$a} Kurse wurden zurückgesetzt';
$string['notifyheading'] = 'Benachrichtigungen';
$string['notifylevel'] = 'E-Mail Schwelle';
$string['notifylevel_desc'] = 'E-Mail-Mitteilungen bei Fehlern werden erst bei der eingestellten Fehlerstufe oder darüber verschickt';
$string['notifyonerrors'] = 'E-Mail bei Fehlern an';
$string['notifyonerrors_desc'] = 'Wenn Fehler bei der Ausführung des Sandkastens auftreten, können E-Mail-Benachrichtigungen verschickt werden. Wer soll diese Mitteilungen erhalten?';
$string['nowprocessing'] = 'JETZT: Kurs "{$a}" wird verarbeitet';
$string['pluginname'] = 'Sandkasten';
$string['privacy:metadata'] = 'Das Plugin \'Sandkasten\' bietet Moodle-Administrator/innen erweiterte Funktionalitäten an, speichert aber keine personenbezogenen Daten.';
$string['restoreheading'] = 'Einstellungen zum Zurücksetzen';
$string['restoresettingsdescription'] = 'Analog zu den Einstellungen zur Wiederherstellung in Moodle und analog zu den Einstellungen zur Wiederherstellung, die Sie sehen, wenn Sie händisch einen Kurs wiederherstellen, können Sie hier die Details zum Zurücksetzen der Kurse im Sandkasten konfigurieren.';
$string['restoresettingswarning'] = 'Bitte beachten Sie, dass der Sandkasten keine Überprüfung vornimmt, ob die hochgeladenen Kurssicherungen zu den gewählten Einstellungen passen. Bitte stellen Sie sicher, dass Sie nur die Einstellungen aktivieren, die Sie definitiv beim Zurücksetzen mit dem Sandkasten nutzen wollen. Testen Sie Ihre Einstellungen, bevor Sie den Sandkasten unbeaufsichtigt arbeiten lassen. Stellen Sie auch sicher, dass Sie nur die Einstellungen aktivieren, zu denen alle Ihre Kurssicherungen passen. Andernfalls riskieren Sie, dass der Sandkasten beim Zurücksetzen eines Kurses in einen Fehler läuft.';
$string['skippingadjuststartdatefailed'] = 'WARNUNG: Der Kursbeginn des Kurses "{$a}" konnte nicht angepasst werden, die Ausführung wird bei der nächsten Datei fortsetzt...';
$string['skippingcreatefailed'] = 'WARNUNG: Der Kurs "{$a}" konnte nicht angelegt werden, die Ausführung wird bei der nächsten Datei fortgesetzt...';
$string['skippingdbupdatefailed'] = 'WARNUNG: Die Aktualisierung des Datenbanksatzes des Kurses "{$a}" schlug fehl, die Ausführung wird bei der nächsten Datei fortgesetzt...';
$string['skippingdeletecontentfailed'] = 'WARNUNG: Der Kursinhalt des Kurses "{$a}" konnte (teilweise oder gar nicht) gelöscht werden, die Ausführung wird bei der nächsten Datei fortgesetzt...';
$string['skippingdeletionfailed'] = 'WARNUNG: Der Kurs "{$a}" konnte (teilweise oder gar nicht) gelöscht werden, die Ausführung wird bei der nächsten Datei fortgesetzt...';
$string['skippingnocourse'] = 'WARNUNG: Es gibt keinen Kurs mit dem Kurznamen "{$a}", die Ausführung wird bei der nächsten Datei fortgesetzt...';
$string['skippingrestorefailed'] = 'WARNUNG: Die Wiederherstellung des Kurses "{$a}" schlug fehl, die Ausführung wird bei der nächsten Datei fortgesetzt...';
$string['skippingunzipfailed'] = 'WARNUNG: Das Entpacken der Datei "{$a}" schlug fehl, die Ausführung wird bei der nächsten Datei fortgesetzt...';
$string['successrestored'] = 'ERFOLG: Kurs "{$a}" wurde zurückgesetzt';
$string['taskrestorecourses'] = 'Sandkasten-Kurse zurücksetzen';
$string['upgrade_notice_2014051200'] = '<strong>UPGRADE HINWEIS:</strong> Dieses Update des Sandkasten-Plugins fügt die Unterstützung für Moodles System der "Geplanten Vorgänge" hinzu. Die bisherige Einstellung für die Ausführungszeit des Plugins wird <strong>nicht</strong> in die geplanten Vorgänge übertragen werden. Der geplante Vorgang des Plugins ist nach dem Upgrade deaktiviert und die Ausführungszeit ist auf einen Standardwert gesetzt. Bitte konfigurieren Sie die Ausführungszeit entsprechend ihrem Bedarf in den "Geplanten Vorgängen" neu und reaktivieren Sie dort das Plugin von neuem.';
$string['upgrade_notice_2018020902'] = '<strong>UPGRADE HINWEIS:</strong> Die Dokumente aus dem Dokumenten-Verzeichnis wurden in einen neuen Dateiablagebereich in Moodle kopiert. Sie können das bisher genutzte Kurssicherungs-Verzeichnis {$a} nun löschen. Für weitere Hinweise zum Upgrade des Plugins lesen Sie bitte die README Datei des Plugins.';
