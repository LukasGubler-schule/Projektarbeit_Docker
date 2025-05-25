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
 * Strings for component 'tool_usersuspension', language 'de', version '4.5'.
 *
 * @package     tool_usersuspension
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:confirm-delete-exclusion'] = 'Möchten Sie dieses Elementwirklich von der Ausschlussliste entfernen?';
$string['action:delete-exclusion'] = 'Element von der Ausschlussliste entfernen';
$string['action:exclude:add:cohort'] = 'Globale Gruppe ausschließen';
$string['action:exclude:add:user'] = 'Nutzer/in ausschließen';
$string['button:backtocourse'] = 'Zurück zum Kurs';
$string['button:backtoexclusions'] = 'Zurück zur Übersicht der Ausschlüsse';
$string['button:backtouploadform'] = 'Zurück zum Upload-Formular';
$string['button:continue'] = 'Weiter';
$string['config:cleanlogs:disabled'] = 'Die automatische Log-Bereinigung ist in der globalen Konfiguration deaktiviert.';
$string['config:cleanup:disabled'] = 'Option \'Cleanup\' ist in der globalen Tool-Konfiguration deaktiviert.';
$string['config:fromfolder:disabled'] = 'Option \'Sperren über Upload-Ordner\' ist in der globalen Tool-Konfiguration deaktiviert.';
$string['config:fromfolder:enabled'] = 'Option \'Sperren über Upload-Ordner\' ist in der globalen Tool-Konfiguration aktiviert.';
$string['config:smartdetect:disabled'] = 'Option \'intelligente Erkennung\' ist in der globalen Tool-Konfiguration deaktiviert.';
$string['config:tool:disabled'] = 'Plugin-Funktionalität ist in der globalen Tool-Konfiguration deaktiviert.';
$string['config:tool:enabled'] = 'Plugin-Funktionalität ist in der globalen Tool-Konfiguration aktiviert.';
$string['config:unsuspendfromfolder:disabled'] = 'Option \'Aktivieren über Upload-Ordner\' ist in der globalen Tool-Konfiguration deaktiviert.';
$string['config:unsuspendfromfolder:enabled'] = 'Option \'Aktivieren über Upload-Ordner\' ist in der globalen Tool-Konfiguration aktiviert.';
$string['config:uploadfile:exists'] = 'Upload-Datei "{$a}" vorhanden';
$string['config:uploadfile:not-exists'] = 'Upload-Datei "{$a}" nicht vorhanden';
$string['config:uploadfolder:exists'] = 'Upload-Ordner "{$a}" vorhanden';
$string['config:uploadfolder:not-exists'] = 'Upload-Ordner "{$a}" nicht vorhanden';
$string['configoption:notactive'] = 'Entgegen der nachstehenden Übersicht wird der Prozess aufgrund der Einstellungen <i>nicht</i> erzwungen.';
$string['csv:delimiter'] = 'Trennzeichen';
$string['csv:enclosure'] = 'Anhang';
$string['csv:upload:continue'] = 'Weiter';
$string['csvdelimiter'] = 'CSV Trennzeichen';
$string['csvencoding'] = 'CSV Codierung';
$string['deleteon'] = 'Löschen am';
$string['download-sample-csv'] = 'Download Beispiel CSV-Datei';
$string['email:user:delete:body'] = '<p>Guten Tag {$a->name},</p>
<p>Ihr Konto wurde gelöscht, nachdem es für {$a->timesuspended} gesperrt war.</p>
<p>Viele Grüße<br/>{$a->signature}</p>';
$string['email:user:delete:subject'] = 'Ihr Konto wurde gelöscht.';
$string['email:user:suspend:auto:body'] = '<p>Guten Tag{$a->name},</p>
<p>Ihr Konto wurde nach {$a->timeinactive} der Inaktivität gesperrt.</p>
<p>Wenn Sie der Meinung sind, dass dies unbeabsichtigt war, oder wenn Sie Ihr Konto wieder aktivieren lassen möchten,
kontaktieren Sie bitte {$a->contact}</p>
<p>Viele Grüße<br/>{$a->signature}</p>';
$string['email:user:suspend:manual:body'] = '<p>Guten Tag{$a->name},</p>
<p>Ihr Konto wurde gesperrt.</p>
<p>Wenn Sie der Meinung sind, dass dies unbeabsichtigt war, oder wenn Sie Ihr Konto wieder aktivieren lassen möchten,
kontaktieren Sie bitte {$a->contact}</p>
<p>Viele Grüße<br/>{$a->signature}</p>';
$string['email:user:suspend:subject'] = 'Ihr Konto wurde  gesperrt.';
$string['email:user:unsuspend:body'] = '<p>Guten Tag{$a->name},</p>
<p>Ihr Konto wurde wieder aktiviert.</p>
<p>Wenn Sie der Meinung sind, dass dies unbeabsichtigt war, oder wenn Sie Ihr Konto wieder sperren lassen möchten,
kontaktieren Sie bitte {$a->contact}</p>
<p>Viele Grüße<br/>{$a->signature}</p>';
$string['email:user:unsuspend:subject'] = 'Ihr Konto wurde wieder aktiviert.';
$string['email:user:warning:body'] = '<p>Guten Tag {$a->name},</p>
<p>Ihr Konto wird in {$a->warningperiod} aufgrund von Inaktivität auf der Plattform gesperrt.</p>
<p>Sie müssen sich innerhalb der nächsten {$a->warningperiod} mindestens einmal anmelden, um Ihr Konto aktiv zu halten.
Um eine Sperrung zu vermeiden, sollten Sie sich bitte mindestens alle {$a->suspendinterval} einloggen.</p>
<p>Viele Grüße<br/>{$a->signature}</p>';
$string['email:user:warning:subject'] = 'Ihr Konto wird in Kürze gesperrt.';
$string['err:statustable:set_sql'] = 'set_sql() ist deaktiviert. Diese Tabelle definiert sich selbst und ist nicht anpassbar.';
$string['event:user:suspended'] = 'Nutzer/in gesperrt.';
$string['excludeuser'] = 'Nutzer/in von der Verarbeitung ausschließen';
$string['form:static:uploadfile:desc'] = 'Datei mit zu sperrenden Nutzer/innen hier hochladen<br/>
Die CSV-Datei kann folgendermaßen konfiguriert werden:<br/>
<ol>
<li>\'einfache (simple)\' Datei, die NUR E-Mail-Adressen enthält, eine pro Zeile</li>
<li>\'intelligente (smarte)\' Datei, die Spalten enthält.<br/>
Mögliche Werte sind
<ul><li>email: Spaltenwert E-Mail-Adresse des Kontos</li>
<li>idnumber: Spaltenwert enthält die IdNummer des Kontos</li>
<li>username: Spaltenwert enthält den Anmeldenamen des Kontos</li>
</ul></ol>';
$string['info:no-exclusion-cohorts'] = 'Alle globalen Gruppen sind bereits in die Ausschlussliste aufgenommen worden. Es können keine weiteren hinzugefügt werden.';
$string['label:users:excluded'] = 'Ausgeschlossene Nutzer/innen';
$string['label:users:potential'] = 'Mögliche Nutzer/innen';
$string['link:currentstatus:overview'] = 'Ansicht der aktuellen Statusänderungen';
$string['link:exclude:overview'] = 'Übersicht der Ausschlüsse';
$string['link:log:overview'] = 'Logs der Statusänderungen anzeigen';
$string['link:upload'] = 'Datei mit zu sperrenden Nutzer/innen hochladen';
$string['link:viewstatus'] = 'Statusliste anzeigen';
$string['msg:exclusion:cohort:none-selected'] = 'Keine globalen Gruppen zum Ausschluss ausgewählt';
$string['msg:exclusion:record:cohort:inserted'] = 'Globale Gruppe \'{$a->name}\' erfolgreich zum Ausschluss hinzugefügt.';
$string['msg:exclusion:record:exists'] = 'Ausschlusseintrag existiert bereits (kein Eintrag hinzugefügt)';
$string['msg:exclusion:record:inserted'] = 'Ausschlusseintrag erfolgreich hinzugefügt';
$string['msg:exclusion:record:user:deleted'] = 'Ausschlusseintrag für Nutzer/in \'{$a->fullname}\' erfolgreich entfernt.';
$string['msg:exclusion:record:user:inserted'] = 'Ausschlusseintrag für Nutzer/in \'{$a->fullname}\' erfolgreich hinzugefügt.';
$string['msg:exclusion:records:cohort:deleted'] = 'Ausschlusseinträge für globale Gruppen erfolgreich gelöscht';
$string['msg:exclusion:records:deleted'] = 'Ausschlusseinträge erfolgreich gelöscht';
$string['msg:exclusion:records:user:deleted'] = 'Ausschlusseinträge für Nutzer/in erfolgreich gelöscht';
$string['msg:file-not-readable'] = 'Hochgeladene Datei \'{$a}\' ist nicht lesbar';
$string['msg:file-not-writeable'] = 'Hochgeladene Datei \'{$a}\' ist nicht beschreibbar oder kann nicht entfernt werden';
$string['msg:file-would-delete'] = 'Die hochgeladene Datei würde jetzt gelöscht werden (wenn es sich nicht um eine Konfigurationsüberprüfung handelt)';
$string['msg:file:upload:fail'] = 'Die hochgeladene Datei konnte nicht erfolgreich gespeichert werden. Die Verarbeitung wurde abgebrochen.';
$string['msg:user:not-found'] = 'Nutzer/in konnte nicht gefunden werden';
$string['msg:user:suspend:failed'] = 'Nutzer/in \'{$a->username}\' konnte nicht gesperrt werden';
$string['msg:user:suspend:nosuspendmode'] = 'Nutzer/in \'{$a->username}\' wurde nicht gesperrt (läuft im Testmodus)';
$string['msg:user:suspend:success'] = 'Nutzer/in \'{$a->username}\' erfolgreich gesperrt';
$string['msg:user:unsuspend:failed'] = 'Nutzer/in \'{$a->username}\' konnte nicht aktiviert werden.';
$string['msg:user:unsuspend:nounsuspendmode'] = 'Nutzer/in \'{$a->username}\' wurde nicht aktiviert (läuft im Testmodus)';
$string['msg:user:unsuspend:success'] = 'Nutzer/in \'{$a->username}\' erfolgreich aktiviert';
$string['notifications:allok'] = 'Ihre Konfiguration scheint korrekt zu sein. Es wurden keine globalen Konfigurationsprobleme entdeckt.';
$string['notify:load-exclude-list'] = 'Laden der Nutzer-Ausschlussliste';
$string['notify:load-file'] = 'Öffnen der Datei  \'{$a}\'';
$string['notify:load-file-fail'] = 'Datei \'{$a}\' konnte nicht zum Lesen geöffnet werden';
$string['notify:suspend-excluded-user'] = 'Nutzer/in {$a->username} (id={$a->id}) ist in der Ausschlussliste: wird nicht gesperrt';
$string['notify:suspend-user'] = 'Nutzer/in {$a->username} (id={$a->id}) wird gesperrt';
$string['notify:unknown-suspend-type'] = 'Unbekannter suspension type identifier \'{$a}\'';
$string['page:view:exclude.php:introduction'] = '<p>Auf dieser Seite werden die konfigurierten Ausschlüsse angezeigt.<br/>
Ausschlüsse sind entweder Nutzer/innen oder globale Gruppen, die vollständig von der automatischen Verarbeitung ausgeschlossen werden.<br/>
Der Ausschluss einer globalen Gruppe bedeutet, dass alle Nutzer/innen, die Mitglied der globalen Gruppe sind, ausgeschlossen werden.
Verwenden Sie die Optionen auf dieser Seite, um globale Gruppen oder Nutzer/innen zur Ausschlussliste hinzuzufügen.</p>';
$string['page:view:log.php:introduction'] = 'Die nachstehende Tabelle zeigt den Status, der den Nutzer/innen entweder durch automatische Verarbeitung oder durch die Verwendung dieses Tools zugewiesen wurde.
 Die Tabelle zeigt, je nach Konfiguration, den Sperrstatus oder den Löschstatus Ihrer Nutzer/innen sowie den Zeitstempel, zu dem bestimmte Aktionen durchgeführt wurden.';
$string['page:view:notifications.php:introduction'] = 'Auf dieser Registerkarte werden alle erkannten potenziellen Probleme mit Ihrer Konfiguration von User Suspension angezeigt.';
$string['page:view:statuslist.php:introduction:delete'] = '<p>Diese Übersicht zeigt die Nutzerkonten, die innerhalb des Zeitrahmens gelöscht werden, der in den Einstellungen dieses Tools konfiguriert wurde.</p>';
$string['page:view:statuslist.php:introduction:status'] = 'Diese Übersicht zeigt Nutzer/innen, die aktiv überwacht werden. Aktiv überwachte Nutzer/innen sind Nutzer/innen, die nicht durch Konfiguration von der Überwachung ausgeschlossen sind. Diese Übersicht unterscheidet sich von der Übersicht des Haupt-Administrators dadurch, dass sie <i>keine Nutzerkonten anzeigt</i>, die über die Ausschlussfunktion dieses Tools von der Überwachung der ausgeschlossen wurden.';
$string['page:view:statuslist.php:introduction:suspended'] = '<p>Diese Übersicht zeigt die Nutzerkonten, die gesperrt wurden.</p>';
$string['page:view:statuslist.php:introduction:tosuspend'] = '<p>Diese Übersicht zeigt die Nutzerkonten, die innerhalb des
Zeitrahmens gesperrt werden, der in den Einstellungen dieses Tools konfiguriert wurde</p>';
$string['pluginname'] = 'Nutzersperrung';
$string['privacy:metadata:tool_usersuspension:mailedto'] = 'E-Mail-Adresse von wiederhergestelltem Nutzerkonto';
$string['privacy:metadata:tool_usersuspension:mailsent'] = 'Ob eine E-Mail gesendet wurde oder nicht';
$string['privacy:metadata:tool_usersuspension:status'] = 'Status der Sperrung';
$string['privacy:metadata:tool_usersuspension:timecreated'] = 'Zeitpunkt der Erstellung des Datensatzes.';
$string['privacy:metadata:tool_usersuspension:userid'] = 'Primärschlüssel der Person, für die das Konto wiederhergestellt wurde.';
$string['privacy:metadata:tool_usersuspension_excl'] = 'Die Nutzer-Ausschlüsse speichern die von der automatischen Sperrung ausgeschlossenen Nutzer/innen.';
$string['privacy:metadata:tool_usersuspension_log'] = 'Der Status der Nutzersperrung speichert historische/protokollierte Informationen über gesperrte Nutzer/innen.';
$string['privacy:metadata:tool_usersuspension_status'] = 'Der Status der Nutzersperrung speichert Informationen über gesperrte Nutzer/innen.';
$string['promo'] = 'Moodle Plugin zur Nutzersperrung';
$string['promodesc'] = 'Dieses Plugin wurde geschrieben von Sebsoft Managed Hosting & Software Development
    (<a href=\'http://www.sebsoft.nl/\' target=\'_new\'>http://sebsoft.nl</a>).<br /><br />
    {$a}<br /><br />';
$string['setting:cleanlogsafter'] = 'Häufigkeit der Log-Bereinigung';
$string['setting:cleanup_deleteafter'] = 'Löschintervall';
$string['setting:cleanup_interval'] = 'Bereinigungsintervall';
$string['setting:dep:desc:uploaddetect_interval'] = 'Um die Zeitabstände zu ändern, wann der Upload-Ordner geprüft und verarbeitet wird, passen Sie bitte den Zeitplan des zugehörigen geplanten Tasks <a href="{$a}/admin/tool/task/scheduledtasks.php">hier</a>an.
 (Tasks "\\tool_usersuspension\\task\\suspend\\fromfolder" und "\\tool_usersuspension\\task\\unsuspend\\fromfolder").';
$string['setting:dep:uploaddetect_interval'] = 'Verarbeitungsintervall für Upload-Ordner';
$string['setting:desc:cleanlogsafter'] = 'Legen Sie fest, wie oft die Logs bereinigt werden sollen. Alle Logs, die älter sind als diese Einstellung, werden entfernt.';
$string['setting:desc:cleanup_deleteafter'] = 'Legt fest, in welchem zeitlichen Abstand nach ihrer Sperrung Nutzer/innen automatisch gelöscht werden sollen';
$string['setting:desc:cleanup_interval'] = 'Legt das Intervall fest, mit dem die Bereinigung ausgeführt wird';
$string['setting:desc:enablecleanlogs'] = 'Aktiviert oder deaktiviert die automatische Bereinigung des Verlaufsprotokolls.';
$string['setting:desc:enablecleanup'] = 'Aktiviert oder deaktiviert die Bereinigung von Nutzer/innen';
$string['setting:desc:enabled'] = 'Aktiviert oder deaktiviert die Sperrung von Nutzer/innen';
$string['setting:desc:enablefromfolder'] = 'Aktiviert oder deaktiviert die automatische Sperrung von Nutzer/innen aus einer hochgeladenen CSV-Datei, die im Upload-Ordner gespeichert ist';
$string['setting:desc:enablefromupload'] = 'Aktiviert oder deaktiviert die Nutzersperrung über eine hochgeladene Datei';
$string['setting:desc:enablesmartdetect'] = 'Aktiviert oder deaktiviert die intelligente Erkennungsfunktion.';
$string['setting:desc:enablesmartdetectwarning'] = 'Wenn diese Funktion aktiviert ist, werden die Nutzer/innen per E-Mail über ihre bevorstehende Sperrung informiert.';
$string['setting:desc:enableunsuspendfromfolder'] = 'Aktiviert oder deaktiviert die automatische Reaktivierung von Nutzer/innen über eine hochgeladene CSV-Datei';
$string['setting:desc:senddeleteemail'] = 'Soll eine E-Mail verschickt werden, um die/den Nutzer/in über die Löschung ihres/seines Kontos zu informieren?';
$string['setting:desc:sendsuspendemail'] = 'Soll eine E-Mail verschickt werden, um die/den Nutzer/in über die Sperrung ihres/seines Kontos zu informieren?';
$string['setting:desc:smartdetect_interval'] = 'Legt die Zeit zwischen den Durchläufen für die intelligente Erkennung fest';
$string['setting:desc:smartdetect_suspendafter'] = 'Legt die Zeitschwelle für Inaktivität fest, nach der inaktive Nutzer/innen gesperrt werden';
$string['setting:desc:smartdetect_warninginterval'] = 'Legt fest,wann ein/e Nutzer/in mit einer Vorwarnung über die bevorstehende Sperrung informiert werden soll.';
$string['setting:desc:unsuspenduploadfilename'] = 'Dateiname der hochgeladenen Datei mit den Nutzer-Reaktivierungen festlegen';
$string['setting:desc:uploaddetect_interval'] = 'Intervall festlegen, wann der Dateiupload-Ordner auf Dateien geprüft wird';
$string['setting:desc:uploadfilename'] = 'Dateiname der hochgeladenen Datei mit den Nutzersperrungen festlegen';
$string['setting:desc:uploadfolder'] = 'Legen Sie den Ordner fest, in den die Dateien z. B. per FTP hochgeladen werden sollen.';
$string['setting:enablecleanlogs'] = 'Log-Bereinigung aktivieren';
$string['setting:enablecleanup'] = 'Bereinigung aktivieren';
$string['setting:enabled'] = 'Aktivieren';
$string['setting:enablefromfolder'] = 'Automatische Sperrung von Nutzer/innen anhand der vorliegenden CSV-Datei';
$string['setting:enablefromupload'] = 'Sperrung von Nutzer/innen über hochgeladene Datei aktivieren';
$string['setting:enablesmartdetect'] = 'Intelligente Erkennung aktivieren';
$string['setting:enablesmartdetectwarning'] = 'Sollen Warn-E-Mails über eine bevorstehende Sperrung verschickt werden?';
$string['setting:enableunsuspendfromfolder'] = 'Automatische Reaktivierung von Nutzer/innen anhand der vorliegenden CSV-Datei';
$string['setting:senddeleteemail'] = 'Soll eine E-Mail bei Löschung gesendet werden?';
$string['setting:sendsuspendemail'] = 'Soll eine E-Mail bei Sperrung gesendet werden?';
$string['setting:smartdetect_interval'] = 'Intervall für Intelligente Erkennung';
$string['setting:smartdetect_suspendafter'] = 'Zeitschwelle für Inaktivität';
$string['setting:smartdetect_warninginterval'] = 'Vorwarnzeit';
$string['setting:unsuspenduploadfilename'] = 'Dateiname der hochgeladenen Datei zur User-Reaktivierung';
$string['setting:uploaddetect_interval'] = 'Intervall für die Bearbeitung des Dateiupload-Ordners';
$string['setting:uploadfilename'] = 'Dateiname der hochgeladenen Datei zur Usersperrung';
$string['setting:uploadfolder'] = 'Speicherort des Upload-Ordners';
$string['status:deleted'] = 'gelöscht';
$string['status:suspended'] = 'gesperrt';
$string['status:unsuspended'] = 'aktiviert';
$string['suspend'] = 'Sperren';
$string['suspendmode'] = 'Verarbeitungsmodus';
$string['suspendon'] = 'Sperren am';
$string['suspensionsettings'] = 'Einstellungen für das Sperren von Usern';
$string['suspensionsettingscleanup'] = 'Bereinigung';
$string['suspensionsettingscleanupdesc'] = 'Konfigurieren Sie die Bereinigungseinstellungen weiter unten.<br/>
Der Bereinigungsprozess automatisiert die Nutzerbereinigung weiter, d.h. gesperrte Nutzerkonten werden gelöscht,
wenn diese Option verwendet wird. Wenn Nutzerkonten nach einer bestimmten Zeit automatisch gelöscht werden sollen, sollten Sie diese Einstellungen konfigurieren.
Wenn die automatische Löschung von Nutzerkonten nicht erfolgen soll, sollte diese Option deaktiviert werden.';
$string['suspensionsettingsfolder'] = 'Sperren über Dateien im Upload-Ordner';
$string['suspensionsettingsfolderdesc'] = 'Konfigurieren Sie die nachstehenden Einstellungen für die intelligente Erkennung.<br/>
Mit der intelligenten Erkennung werden Nutzerkonten, nach einer bestimmten Zeit der Inaktivität automatisch gesperrt.
Die "intelligente Erkennung" wird nur in einem konfigurierten Intervall ausgeführt und sperrt je nach Einstellung bei "Sperrung, wenn inaktiv seit", alle Nutzerkonten, die als inaktiv eingestuft wurden.';
$string['suspensionsettingssmartdetect'] = 'Intelligente Erkennung';
$string['suspensionsettingssmartdetectdesc'] = 'Konfigurieren Sie die nachstehenden Einstellungen für die intelligente Erkennung.<br/>
Mit der intelligenten Erkennung werden Nutzerkonten, die gemäß den nachstehenden Einstellungen als \'inaktiv\' eingestuft werden, automatisch gesperrt.
Die \'intelligente Erkennung\' wird nur im konfigurierten Intervall ausgeführt und bestimmt anhand der konfigurierten "Zeitschwelle für Inaktivität", ob ein Benutzerkonto aktiv ist oder nicht, und sperrt alle Nutzerkonten, die als inaktiv eingestuft werden.';
$string['suspensionsettingsupload'] = 'Über hochgeladene Datei gelöscht';
$string['suspensionsettingsuploaddesc'] = 'Konfigurieren Sie die Einstellungen für das \'Sperren über hochgeladene Datei\' weiter unten';
$string['tab:notifications'] = 'Prüfung der Konfiguration';
$string['table:exclusions'] = 'Ausschlüsse';
$string['table:log:all'] = 'Historisches Nutzersperrung-Log';
$string['table:log:latest'] = 'Letzte Nutzersperrung-Logs';
$string['table:logs'] = 'Logs';
$string['table:status:delete'] = 'Zu löschende Nutzer/innen';
$string['table:status:status'] = 'Aktiv überwachte Nutzer/innen';
$string['table:status:suspended'] = 'Gesperrte Nutzer/innen';
$string['table:status:tosuspend'] = 'Zu sperrende Nutzer/innen';
$string['task:delete'] = 'Task Nutzersperrung: Automatische Löschung von gesperrten Nutzer/innen';
$string['task:fromfolder'] = 'Task Nutzersperrung: Automatische Nutzer-Sperrung über eine hochgeladene Datei, die im Upload-Ordner gespeichert ist';
$string['task:logclean'] = 'Logs für Nutzersperrung bereinigen';
$string['task:mark'] = 'Task Nutzersperrung: Automatische Nutzersperrung';
$string['task:unsuspendfromfolder'] = 'Task Usersperrung: Automatische Nutzerreaktivierung (Aufhebung der Sperrung) über eine hochgeladene Datei, die im Upload-Ordner gespeichert ist';
$string['testfromfolder'] = 'Test der unbeaufsichtigten Verarbeitung';
$string['testfromfolder:suspend'] = 'Test der unbeaufsichtigten Sperrung von Nutzer/innen (über Ordner)';
$string['testfromfolder:unsuspend'] = 'Test der unbeaufsichtigten Reaktivierung von Nutzer/innen (über Ordner)';
$string['testing:suspendfromfolder'] = 'Testen der Konfiguration für "Sperren über Ordner"';
$string['testing:unsuspendfromfolder'] = 'Testen der Konfiguration für "Reaktivieren über Ordner"';
$string['thead:action'] = 'Aktion(en)';
$string['thead:deletein'] = 'Löschen in';
$string['thead:lastlogin'] = 'Letztes Login';
$string['thead:mailedto'] = 'Per E-Mail gesendet an';
$string['thead:mailsent'] = 'E-Mail gesendet';
$string['thead:name'] = 'Name';
$string['thead:status'] = 'Status';
$string['thead:suspendin'] = 'Sperren in';
$string['thead:timecreated'] = 'Erstellt am';
$string['thead:timedetect'] = 'Erkennung auf der Grundlage von';
$string['thead:timemodified'] = 'Geändert am';
$string['thead:type'] = 'Type';
$string['thead:userid'] = 'Nutzer-ID';
$string['thead:username'] = 'Anmeldename';
$string['unsuspend'] = 'Reaktivieren';
$string['usersuspension:administration'] = 'Verwaltung der Nutzersperrung';
$string['usersuspension:viewstatus'] = 'Status der Nutzersperrung anzeigen';
