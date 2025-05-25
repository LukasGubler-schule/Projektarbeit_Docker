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
 * Strings for component 'tool_opencast', language 'de', version '4.5'.
 *
 * @package     tool_opencast
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addinstance'] = 'Instanz hinzufügen';
$string['apicreadentialstestfailedlong'] = 'Der angegebene Nutzername oder das Kennwort für die Opencast API ist nicht gültig.<br />Bitte verwenden Sie einen gültigen Nutzernamen und ein gültiges Kennwort, um einen fatalen Fehler bei Aufgaben zu vermeiden, die diese Einstellung verwenden.';
$string['apicreadentialstestfailedshort'] = 'Opencast API Nutzeranmeldedaten Test mit http-Code fehlgeschlagen: {$a}';
$string['apicreadentialstestsuccessfulshort'] = 'Opencast API Nutzeranmeldedaten Test erfolgreich.';
$string['apipassword'] = 'Kennwort für Opencast API Nutzerkonto';
$string['apipassworddesc'] = 'Konfigurieren Sie das Kennwort des Opencast Nutzerkontos, welches für die Opencast API Aufrufe genutzt wird.';
$string['apipasswordempty'] = 'Das Kennwort des Opencast API Nutzerkontos ist nicht korrekt konfiguriert. Gehen Sie zu den Einstellungen des Opencast API Tools, um dies zu korrigieren.';
$string['apiurl'] = 'Opencast API URL';
$string['apiurldesc'] = 'Konfigurieren Sie die Basis-URL des Opencast Systems. Hier wird eine gültige URL erwartet. Falls Sie den Protokoll-Teil weglassen, wird \'https://\' automatisch beim Aufruf der Opencast API ergänzt werden.';
$string['apiurlempty'] = 'Die URL der Opencast API ist nicht korrekt konfiguriert. Gehen Sie zu den Einstellungen des Opencast API Tools, um dies zu korrigieren.';
$string['apiurltestfailedlong'] = 'Es läuft keine Opencast-Instanz unter der angegebenen URL.<br />Bitte verwenden Sie eine gültige URL, um fatale Fehler bei Aufgaben zu vermeiden, die diese Einstellung verwenden.';
$string['apiurltestfailedshort'] = 'Opencast API URL-Test mit http-Code fehlgeschlagen: {$a}';
$string['apiurltestsucceedbutnocredentialslong'] = 'Die Opencast API URL ist gültig, aber Nutzername oder Kennwort sind noch nicht angegeben.<br />Bitte geben Sie einen gültigen Nutzernamen und ein gültiges Kennwort ein, um fatale Fehler bei Aufgaben zu vermeiden, die diese Einstellung verwenden.';
$string['apiurltestsuccessfulshort'] = 'Opencast API URL Test erfolgreich.';
$string['apiusername'] = 'Benutzername für Opencast API Nutzerkonto';
$string['apiusernamedesc'] = 'Konfigurieren Sie den Benutzernamen des Opencast Nutzerkontos welches für die Opencast API Aufrufe genutzt wird. Moodle nutzt dieses Opencast Nutzerkonto für die gesamte Kommunikation mit Opencast. Die Autorisierung erfolgt über das Hinzufügen geeigneter Rollen zum Aufruf.';
$string['apiusernameempty'] = 'Der Benutzername des Opencast API Nutzerkontos ist nicht korrekt konfiguriert. Gehen Sie zu den Einstellungen des Opencast API Tools, um dies zu korrigieren.';
$string['configuration'] = 'Konfiguration';
$string['configuration_instance'] = 'Konfiguration: {$a}';
$string['connecttimeout'] = 'Timeout der Verbindung';
$string['connecttimeoutdesc'] = 'Konfigurieren Sie die Zeit (in Millisekunden), in der Moodle den Verbindungaufbau zu Opencast versuchen soll. Falls Opencast während dieser Zeit nicht antwortet, wird der Verbindungsversuch abgebrochen.';
$string['delete_instance'] = 'Instanz löschen';
$string['delete_instance_confirm'] = 'Möchten Sie diese Instanz wirklich löschen?<br> Trainer/innen werden die in dieser Instanz verwendeten Videos nicht mehr sehen können.<br>
<b>Achtung:</b> Alle Daten, die sich auf diese Instanz beziehen, gehen verloren.<br><br>
Die Löschung wird durchgeführt, nachdem Sie auf der Hauptseite der Einstellungen auf "Änderungen speichern" geklickt haben.';
$string['demoservernotification'] = 'Das Opencast API Tool ist aktuell konfiguriert sich mit dem <a href="https://stable.opencast.org">öffentlichen Opencast Demo Server</a> zu verbinden. Sie können diesen Opencast Server nutzen um das Plugin zu evaluieren.<br />Nutzen Sie ihn jedoch für keinerlei Produktionszwecke. Bitte <a href="https://docs.opencast.org/">installieren Sie stattdessen Ihren eigenen Opencast Server</a>.';
$string['errornumdefaultinstances'] = 'Es muss genau eine Standard-Opencast-Instanz vorhanden sein.';
$string['exception_code_unabletoaddhandler'] = 'Es gab einen Fehler beim Laden der Opencast API Middleware, der von einem Entwickler behoben werden muss.';
$string['exception_connect'] = 'Opencast API-Aufruf fehlgeschlagen: {$a}';
$string['exception_connect_generic'] = 'Opencast ist aufgrund eines Verbindungsfehlers nicht erreichbar.';
$string['exception_request_400'] = 'Unerwarteter Opencast API Antwortfehler: (400) Bad Request!';
$string['exception_request_401'] = 'Unerwarteter Opencast API Antwortfehler: (401) Nicht autorisiert!';
$string['exception_request_403'] = 'Unerwarteter Opencast API-Antwortfehler: (403) Forbidden!';
$string['exception_request_404'] = 'Unerwarteter Opencast API Antwortfehler: (404) Nicht gefunden!';
$string['exception_request_405'] = 'Unerwarteter Opencast API Antwortfehler: (405) Methode nicht erlaubt!';
$string['exception_request_408'] = 'Unerwarteter Opencast API Antwortfehler: (408) Request Timeout!';
$string['exception_request_409'] = 'Unerwarteter Opencast API-Antwortfehler: (409) Conflict!';
$string['exception_request_410'] = 'Unerwarteter Opencast API-Antwortfehler: (410) Gone!';
$string['exception_request_422'] = 'Unerwarteter Opencast API Antwortfehler: (422) Unverarbeitbarer Inhalt!';
$string['exception_request_500'] = 'Unerwarteter Opencast API Antwortfehler: (500) Interner Serverfehler!';
$string['exception_request_501'] = 'Unerwarteter Opencast API Antwortfehler: (501) Nicht implementiert!';
$string['exception_request_502'] = 'Unerwarteter Opencast API Antwortfehler: (502) Bad Gateway!';
$string['exception_request_503'] = 'Unerwarteter Opencast API-Antwortfehler: (503) Service nicht verfügbar!';
$string['exception_request_generic'] = 'Beim Versuch, den Opencast Server zu erreichen, ist ein Fehler aufgetreten. Bitte versuchen Sie es später noch einmal.';
$string['exception_request_ingest_endpoint_notfound'] = 'Der Ingest-Endpunkt ist nicht verfügbar, dies muss vom Systemadministrator behoben werden.';
$string['isdefault'] = 'Standard';
$string['isvisible'] = 'ist für Trainer/innen sichtbar';
$string['lticonsumerkey_desc'] = 'LTI Consumer Key für die Integration von Opencast-Diensten, die eine Authentifizierung erfordern, wie z.B. Studio oder der Editor.';
$string['lticonsumersecret_desc'] = 'LTI Consumer secret für die Integration von Opencast-Diensten, die eine Authentifizierung erfordern.';
$string['maintenance_default_notification_message'] = '<h5>Opencast Wartungshinweis</h5><br>Bitte beachten Sie, dass Opencast derzeit gewartet wird. Infolgedessen können einige oder alle Funktionen von Opencast vorübergehend nicht verfügbar sein. Wir danken Ihnen für Ihr Verständnis.';
$string['maintenance_exception_message'] = 'Opencast befindet sich derzeit in der Wartung. Interaktionen sind vorübergehend deaktiviert.';
$string['maintenanceheader'] = 'Wartung';
$string['maintenanceheader_desc'] = 'In diesem Abschnitt kann der Wartungsmodus mit den folgenden Einstellungen konfiguriert werden.<br />Abhängig von der Opencast-Funktion und der Verfügbarkeit der Einstellungen, ist es auch möglich, {$a}';
$string['maintenancemode'] = 'Wartungsmodus';
$string['maintenancemode_btn'] = 'Sync Opencast Wartungsmodus';
$string['maintenancemode_btn_disabled'] = 'Erforderliche js-Module sind nicht geladen.';
$string['maintenancemode_datetime_expired_error'] = 'Dieses Feld sollte nicht der Vergangenheit liegen!';
$string['maintenancemode_datetime_ge_error'] = 'Dieses Feld sollte vor „{$a}“ sein.';
$string['maintenancemode_datetime_le_error'] = 'Dieses Feld sollte nach „{$a}“ seinn.';
$string['maintenancemode_desc'] = 'Einstellen des Wartungsmodus, um Konflikte während der Ausfallzeit von Opencast zu vermeiden.<br>Wenn der Nur-Lesen-Modus ausgewählt ist, können nur Ressourcen von Opencast gelesen werden.';
$string['maintenancemode_disable'] = 'Deaktivieren';
$string['maintenancemode_enable'] = 'Aktivieren';
$string['maintenancemode_end'] = 'Die Wartung endet am';
$string['maintenancemode_end_desc'] = 'Das Enddatum und die Uhrzeit der Wartung';
$string['maintenancemode_message'] = 'Wartungsmeldung';
$string['maintenancemode_message_desc'] = 'Eine Fehlermeldung, die während der Wartung angezeigt wird.';
$string['maintenancemode_modal_sync_confirmation_btn'] = 'Synchronisation';
$string['maintenancemode_modal_sync_confirmation_text'] = 'Sind Sie sicher, dass Sie den Wartungsmodus mit Opencast synchronisieren wollen? Dadurch wird die aktuelle Konfiguration überschrieben.';
$string['maintenancemode_modal_sync_confirmation_title'] = 'Sync Opencast Wartungsmodus';
$string['maintenancemode_modal_sync_error_noinstance_message'] = 'Die Opencast-Instanz-ID kann nicht gefunden werden!';
$string['maintenancemode_modal_sync_error_title'] = 'Synchronisierungsfehler';
$string['maintenancemode_modal_sync_failed'] = 'Wartungs-Synchronisation nicht erfolgreich!';
$string['maintenancemode_modal_sync_succeeded'] = 'Die Wartung wurde erfolgreich synchronisiert. Die Seite wird in 3 Sekunden aktualisiert, um die aktualisierten Änderungen zu übernehmen.';
$string['maintenancemode_notiflevel'] = 'Benachrichtigungs-Level';
$string['maintenancemode_notiflevel_desc'] = 'Mit dieser Einstellung können Sie die Stufe der Benachrichtigung festlegen, die je nach Stufe in verschiedenen Stilen und Farben dargestellt wird. So wird z. B. bei der Fehlerstufe eine Benachrichtigung in einem roten Feld gedruckt.';
$string['maintenancemode_notiflevel_error'] = 'Fehler';
$string['maintenancemode_notiflevel_info'] = 'Information';
$string['maintenancemode_notiflevel_success'] = 'Erfolg';
$string['maintenancemode_notiflevel_warning'] = 'Warnung';
$string['maintenancemode_readonly'] = 'Nur lesen';
$string['maintenancemode_start'] = 'Die Wartung beginnt am';
$string['maintenancemode_start_desc'] = 'Datum und Uhrzeit des Wartungsbeginns';
$string['name'] = 'Name';
$string['needphp55orhigher'] = 'Mindestens PHP 5.5 ist notwendig.';
$string['nomockhandler'] = 'Das Opencast API Objekt ist nicht in der Lage, die Antworten zu Testzwecken zu verarbeiten.';
$string['notestingjsonresponses'] = 'Die JSON-Antworten sind nicht gesetzt. Bitte stellen Sie sicher, dass Sie api_testable::add_json_response verwenden, bevor Sie die Klasse ausführen und benutzen.';
$string['ocinstances'] = 'Opencast Instanzen';
$string['ocinstancesdesc'] = 'Legt eine Liste von Opencast-Instanzen fest, mit denen sich die Opencast-Plugins verbinden können.';
$string['opencast:externalapi'] = 'Zugang zu den Opencast API Webservices';
$string['opencast:instructor'] = 'Gibt die Rolle eines Instructors in Opencast';
$string['opencast:learner'] = 'Gibt die Rolle eines Lernenden in Opencast';
$string['pluginname'] = 'Opencast API';
$string['privacy:metadata'] = 'Das Opencast API Tool bietet lediglich API-Endpunkte und allgemeine Einstellungen für die Opencast Plugins an. Es speichert, welche Opencast Serie zu welchem Moodle Kurs gehört, aber es speichert keine personenbezogenen Daten.';
$string['serverconnectionerror'] = 'Es gab ein Problem mit der Verbindung zum Opencast Server. Bitte kontrollieren Sie Ihre Opencast API Zugangsdaten und die Netzwerk-Einstellungen.';
$string['testtooldisabledbuttontitle'] = 'Der Verbindungstest kann nicht durchgeführt werden, da die js-Module nicht geladen sind.';
$string['testtoolheader'] = 'Tool zum Testen der Verbindung';
$string['testtoolheaderdesc'] = 'Um die aktuellen Opencast-API-Einstellungen zu testen, verwenden Sie: {$a}';
$string['testtoolurl'] = 'Tool zum Testen der Verbindung';
$string['timeout'] = 'Zeitüberschreitung bei der Ausführung von API-Anfragen';
$string['timeoutdesc'] = 'Legen Sie die Zeit in Millisekunden fest, die jede API-Anfrage an Opencast dauern darf. Wenn Opencast die Anfrage nicht innerhalb dieser Zeit beantwortet, wird die Anfrage abgebrochen.';
$string['wrongmimetypedetected'] = 'Ein falscher MIME-Type wurde während des Uploads von {$a->filename} aus Kurs {$a->coursename} erkannt. Sie können nur Video-Dateien hochladen!';
