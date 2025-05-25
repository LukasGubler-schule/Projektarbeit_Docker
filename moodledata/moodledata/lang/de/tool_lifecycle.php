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
 * Strings for component 'tool_lifecycle', language 'de', version '4.5'.
 *
 * @package     tool_lifecycle
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abortdisableworkflow'] = 'Workflow deaktivieren (Prozesse werden abgebrochen, eventuell unsicher!)';
$string['abortdisableworkflow_confirm'] = 'Möchten sie wirklich den Workflow deaktivieren? Alle laufenden Prozesse werden abgebrochen.';
$string['abortprocesses'] = 'Laufende Prozesse abbrechen (eventuell unsicher!)';
$string['abortprocesses_confirm'] = 'Alle laufenden Prozesse dieses Workflows werden abgebrochen. Sind Sie sicher?';
$string['activateworkflow'] = 'Aktivieren';
$string['active'] = 'Aktiv';
$string['active_automatic_workflows_heading'] = 'Aktive automatische Workflows';
$string['active_manual_workflows_heading'] = 'Aktive manuelle Workflows';
$string['active_workflow_not_changeable'] = 'Die Workflow-Instanz wurde bereits aktiviert. Es ist nicht möglich, Schritte zu ändern.';
$string['active_workflow_not_removeable'] = 'Die Workflow-Instanz ist aktiv. Es ist nicht möglich, sie zu entfernen.';
$string['active_workflows_header'] = 'Aktiv';
$string['active_workflows_header_title'] = 'Aktive Workflows';
$string['active_workflows_list'] = 'Aktive Workflows und Workflowdefinitionen anzeigen';
$string['add_new_step_instance'] = 'Füge neue Schritt-Instanz hinzu...';
$string['add_new_trigger_instance'] = 'Füge neue Trigger-Instanz...';
$string['add_workflow'] = 'Workflow hinzufügen';
$string['addtriggernewworkflow'] = 'Kursauswahl-Trigger zu diesem Workflow hinzufügen';
$string['adminapprovals_header'] = 'Bestätigungen';
$string['adminapprovals_header_title'] = 'Liste von unerledigten Admin-Bestätigungen';
$string['adminsettings_edit_step_instance_heading'] = 'Schritt-Instanz für Workflow \'{$a}\'';
$string['adminsettings_edit_trigger_instance_heading'] = 'Trigger-Instanz für Workflow \'{$a}\'';
$string['adminsettings_edit_workflow_definition_heading'] = 'Workflowdefinition';
$string['adminsettings_heading'] = 'Workflow-Einstellungen';
$string['adminsettings_nosteps'] = 'Kein Schritt-Subplugin installiert.';
$string['adminsettings_notriggers'] = 'Kein Trigger-Subplugin installiert.';
$string['adminsettings_workflow_definition_steps_heading'] = 'Workflowschritte';
$string['all_delays'] = 'Alle Verzögerungen';
$string['anonymous_user'] = 'Anonyme Person';
$string['apply'] = 'Anwenden';
$string['backupcreated'] = 'Erstellt am';
$string['backupworkflow'] = 'Workflow sichern';
$string['cachedef_application'] = 'Cache für das Kurs-Menü, wenn es aktive Workflows gibt.';
$string['cachedef_mformdata'] = 'Casht die Formular-Daten';
$string['cannot_trigger_workflow_manually'] = 'Der Workflow konnte nicht manuell ausgelöst werden.';
$string['config_backup_path'] = 'Pfad zum Lebenszyklus-Sicherungsverzeichnis';
$string['config_backup_path_desc'] = 'Diese Einstellung definiert den Speicherort der durch den Sicherungs-Schritt erstellten Sicherungen.
Der Pfad muss als absoluter Pfad auf Ihrem Server angegeben werden.';
$string['config_coursecategorydepth'] = 'Tiefe der Kurskategorien, die in der Interaktionstabelle angezeigt werden sollen';
$string['config_coursecategorydepth_desc'] = 'Standardmäßig wird die erste Kurskategorie angezeigt, wenn Lehrkräfte den Status ihrer Kurse in der view.php verwalten. Die Einstellung ermöglicht es, nicht die erste Ebene der Kurskategorien, sondern Kursunterkategorien anzuzeigen.';
$string['config_delay_duration'] = 'Standardlänge eines Kursausschlusses';
$string['config_delay_duration_desc'] = 'Diese Einstellung definiert den Standardlänge einer Kursausschlusses in einem Workflow falls ein Prozess des Workflows zurückgesetzt oder beendigt wird. Die Länge des Kursausschlusses besagt, wie lange es dauert, bis der Kurs wieder vom Workflow bearbeitet wird.';
$string['config_enablecategoryhierachy'] = 'Kurskategorienhierarchie in der Interaktionstabelle spezifizieren';
$string['config_enablecategoryhierachy_desc'] = 'Standardmäßig wird die direkt zugewiesene Kurskategorie angezeigt, wenn Lehrkräfte den Status ihrer Kurse in der view.php verwalten. Die Einstellung ermöglicht es, eine bestimmte Ebene des Kurskategorienbaums anzuzeigen.';
$string['config_logreceivedmails'] = 'Zusätzliches Logging von E-Mails an Nutzer/innen in der Datenbank speichern';
$string['config_logreceivedmails_desc'] = 'Das Schreiben in die Datenbank hat den Vorteil, dass es explizit nachgeguckt werden kann, allerdings verbraucht es Speicher.';
$string['config_showcoursecounts'] = 'Zeige Anzahl der Kurse, die getriggert werden';
$string['config_showcoursecounts_desc'] = 'Die Workflow-Konfigurationsseite zeigt normalerweise die Anzahl an Kursen, die durch
die konfigurierten Trigger getriggert werden, was Performance-Probleme verursachen kann. Bei Performance-Problemen kann dies hiermit
deaktiviert werden.';
$string['course_backups_list_header'] = 'Sicherungen';
$string['course_backups_list_header_title'] = 'Liste der Lifecycle-Kurssicherungen';
$string['courseid'] = 'Kurs-ID';
$string['coursename'] = 'Kursname';
$string['courseproceeded'] = 'Ein Kurs wurde dem nächsten Verarbeitungsschritt zugeführt.';
$string['courserolledback'] = 'Ein Kurs wurde zurückgesetzt.';
$string['courses_are_alreadyin'] = '{$a} Kurse befinden sich schon in diesem Prozess';
$string['courses_are_delayed'] = '{$a} Kurse sind verzögert';
$string['courses_are_delayed_total'] = '{$a} Kurse sind insgesamt verzögert';
$string['courses_are_used_total'] = '{$a} Kurse bereits in anderem Prozess';
$string['courses_excluded'] = 'Kurse insgesamt ausgeschlossen: {$a}';
$string['courses_size'] = 'Kurse insgesamt genauer betrachtet: {$a}';
$string['courses_triggered'] = 'Kurse insgesamt getriggered: {$a}';
$string['courses_will_be_excluded'] = '$a} Kurse werden ausgeschlossen';
$string['courses_will_be_excluded_total'] = '{$a} Kurse werden insgesamt ausgeschlossen';
$string['courses_will_be_triggered'] = '{$a} Kurse sind in der Auswahl';
$string['courses_will_be_triggered_total'] = '{$a} Kurse werden insgesamt getriggert';
$string['courses_will_be_triggered_total_without_amount'] = 'Kurse werden insgesamt getriggert';
$string['coursesdelayed'] = 'Verzögerte Kurse des Workflows \\\'{$a}\\\'';
$string['courseselected'] = 'Ein Kurs wurde dem Verarbeitungsprozess hinzugefügt.';
$string['courseselection_title'] = 'Kurs-Selektion';
$string['courseselectionrun_title'] = 'Nächster Selektionslauf';
$string['coursesexcluded'] = 'Ausgeschlossene Kurse für Trigger \\\'{$a}\\\'';
$string['coursesinstep'] = 'Kurse im Schritt \\\'{$a}\\\'';
$string['coursestriggered'] = 'Getriggerte Kurse für Trigger \\\'{$a}\\\'';
$string['coursestriggeredworkflow'] = 'Getriggerte Kurse für diesen Workflow \\\'{$a}\\\'';
$string['coursesused'] = 'Kurse schon in einem anderen Prozess für Workflow \\\'{$a}\\\'';
$string['create_copy'] = 'Kopie erstellen';
$string['create_step'] = 'Schritt erstellen';
$string['create_trigger'] = 'Trigger erstellen';
$string['create_workflow_from_existing'] = 'Kopie von bestehendem Workflow erstellen';
$string['customfieldsemesterdescription'] = 'Kurse gemäß dem nutzerdefinierten Kursfeld \\\'semester\\\' auslösen';
$string['date'] = 'Fällligkeitsdatum';
$string['deactivated'] = 'Deaktiviert';
$string['deactivated_workflows_header'] = 'Deaktiviert';
$string['deactivated_workflows_header_title'] = 'Liste der deaktivierten Workflows';
$string['deactivated_workflows_list'] = 'Zeige deaktivierte Workflows';
$string['deactivated_workflows_list_header'] = 'Deaktivierte Workflows';
$string['delaydeleted'] = 'Eine Kurs-Verzögerung wurde gelöscht.';
$string['delayed_courses_header'] = 'Verzögerte Kurse';
$string['delayed_courses_header_title'] = 'Liste von allen verzögerten Kursen';
$string['delayed_for_workflow_until'] = 'Verzögert für "{$a->name}" bis {$a->date}';
$string['delayed_for_workflows'] = 'Verzögert für {$a} Workflows';
$string['delayed_globally'] = 'Global verzögert bis {$a}';
$string['delayed_globally_and_seperately'] = 'Global und separat für {$a} Workflows verzögert';
$string['delayed_globally_and_seperately_for_one'] = 'Global und separat für 1 Workflow verzögert';
$string['delayeduntil'] = 'Verzögert bis';
$string['delays'] = 'Verzögerungen';
$string['delays_for_workflow'] = 'Verzögerungen für "{$a}"';
$string['delete_all_delays'] = 'Alle Verzögerungen löschen';
$string['delete_all_delays_confirmation'] = 'Möchten Sie wirklich alle Verzögerungen löschen?';
$string['delete_delay'] = 'Verzögerung löschen';
$string['deleteworkflow'] = 'Workflow löschen';
$string['deleteworkflow_confirm'] = 'Möchten Sie wirklich den Workflow löschen? Das kann nicht rückgängig gemacht werden.';
$string['details:finishdelay'] = 'Verzögerung nach Abschluss';
$string['details:finishdelay_help'] = 'Nachdem ein Kurs einen Workflow beendet, wird er für den angegebenen Zeitraum verzögert.';
$string['details:globaldelay_no'] = 'Diese Verzögerungen gelten nur für diesen Workflow.';
$string['details:globaldelay_yes'] = 'Diese Verzögerungen gelten für alle Workflows.';
$string['details:rollbackdelay'] = 'Verzögerung nach Zurücksetzen';
$string['details:rollbackdelay_help'] = 'Nachdem ein Kurs zurückgesetzt ist, wird er für den angegebenen Zeitraum verzögert.';
$string['disableworkflow'] = 'Workflow deaktivieren (Prozesse laufen weiter)';
$string['disableworkflow_confirm'] = 'Möchten Sie wirklich den Workflow deaktivieren?';
$string['dontshowextendeddetails'] = 'Keine detaillierten Workflow-Informationen anzeigen';
$string['download'] = 'Herunterladen';
$string['draft'] = 'Entwurf';
$string['duplicateworkflow'] = 'Workflow duplizieren';
$string['edit_step'] = 'Schritt bearbeiten';
$string['edit_trigger'] = 'Trigger bearbeiten';
$string['editworkflow'] = 'Allgemeine Einstellungen bearbeiten';
$string['error_wrong_trigger_selected'] = 'Sie haben einen nichtmanuellen Trigger ausgewählt.';
$string['errorbackuppath'] = 'Ein Fehler ist aufgetreten beim Versuch, das Backup-Verzeichnis zu erstellen.
Ihnen fehlen wahrscheinlich die Berechtigung dazu. Bitte überprüfen Sie den Pfad unter
Seitenadministration/Plugins/Dienstprogramme/Kurs-Lebenszyklus/Allgemein & Subplugins.';
$string['errornobackup'] = 'Es wurde kein Backup in dem angegebenen Pfad erstellt.';
$string['find_course_list_header'] = 'Kurse finden';
$string['finished'] = 'Beendet';
$string['followedby_none'] = 'Keine';
$string['force_import'] = 'Die Fehler ignorieren und den Workflow trotzdem importieren. Das kann zu unerwünschten Effekten führen.';
$string['forselected'] = 'Für alle ausgewählten Prozesse';
$string['general_config_header'] = 'Allgemein & Subplugins';
$string['general_config_header_title'] = 'Allgemeine Einstellungen & Subplugins';
$string['general_settings_header'] = 'Allgemeine Einstellungen';
$string['globally'] = 'Globale Verzögerungen';
$string['globally_until_date'] = 'Global bis {$a}';
$string['includedelayedcourses'] = 'Verzögerte Kurse einschließen';
$string['includedelayedcourses_help'] = 'Mit dieser Option werden verzögerte Kurse (ob global oder für den Workflow) in die Verarbeitung dieses Workflows eingeschlossen.';
$string['includesitecourse'] = 'Den Site-Kurs einschließen';
$string['includesitecourse_help'] = 'Mit dieser Option wird der Startkurs (Kurs mit der ID=1, "Home") in die Verarbeitung dieses Workflows eingeschlossen.';
$string['interaction_success'] = 'Aktion erfolgreich gespeichert.';
$string['invalid_workflow'] = 'Ungültige Workflowkonfiguration';
$string['invalid_workflow_cannot_be_activated'] = 'Der Workflow kann nicht aktiviert werden, da die Workflowdefinition ungültig ist';
$string['invalid_workflow_details'] = 'Gehe zur Detailanzeige, um einen Trigger für diesen Workflow zu erstellen.';
$string['lastaction'] = 'Letzte Aktion am';
$string['lastrun'] = 'Letzte Durchführung: {$a}';
$string['lifecycle:managecourses'] = 'Darf Kurse in tool_lifecycle verwalten.';
$string['lifecycle_cleanup_task'] = 'Alte Verzögerungseinträge für Lifecycle-Workflows löschen';
$string['lifecycle_error_notify_task'] = 'Administrator/innen bei Fehlern in tool_lifecycle-Prozessen benachrichtigen';
$string['lifecycle_task'] = 'Den Lifecycle-Prozess ausführen';
$string['lifecyclestep'] = 'Schritt';
$string['lifecycletrigger'] = 'Trigger';
$string['managecourses_link'] = 'Kurse verwalten';
$string['manual_trigger_process_existed'] = 'Es existiert bereits ein Workflow für diesen Kurs.';
$string['manual_trigger_success'] = 'Workflow erfolgreich gestartet.';
$string['manualtriggerenvolved'] = 'Ein manueller Trigger ist vorhanden.';
$string['manualtriggerenvolved_help'] = 'Kurse können erst getriggert werden, wenn der Workflow manuell gestartet wurde.';
$string['move_down'] = 'Nach unten bewegen';
$string['move_up'] = 'Nach oben bewegen';
$string['name_until_date'] = '"{$a->name}" bis {$a->date}';
$string['nextrun'] = 'Nächste Durchführung: {$a}';
$string['noactiontools'] = 'Keine Aktionen verfügbar';
$string['nocoursestodisplay'] = 'Es gibt derzeit keine Kurse, die Ihre Aufmerksamkeit erfordern!';
$string['nointeractioninterface'] = 'Keine Interaktionsschnittstelle verfügbar!';
$string['noprocesserrors'] = 'Es gibt keine fehlerhaften Prozesse, die behandelt werden müssen!';
$string['noprocessfound'] = 'Es konnte kein Prozess mit der gegebenen Prozess-ID gefunden werden!';
$string['noremainingcoursestodisplay'] = 'Es gibt derzeit keine verbleibenden Kurse!';
$string['nostepfound'] = 'Es konnte kein Schritt mit der gegeben Schritt-ID gefunden werden!';
$string['notifyerrorsemailcontent'] = '{$a->amount} neue fehlerhafte tool_lifecycle Prozesse warten darauf, behandelt zu werden!

Bitte besuchen Sie {$a->url}.';
$string['notifyerrorsemailcontenthtml'] = '{$a->amount} neue fehlerhafte tool_lifecycle Prozesse warten darauf, behandelt zu werden!<br>Bitte besuchen Sie <a href="{$a->url}">die Übersichtsseite</a>.';
$string['notifyerrorsemailsubject'] = '{$a->amount} neue fehlerhafte tool_lifecycle Prozesse warten darauf, behandelt zu werden!';
$string['overview:add_trigger'] = 'Trigger hinzufügen';
$string['overview:add_trigger_help'] = 'Es kann nur eine Instanz jedes Triggertyps hinzugefügt werden.';
$string['overview:timetrigger_help'] = 'Wann sollte der Kursselektionsjob für diesen Workflow das nächste Mal laufen?';
$string['overview:trigger'] = 'Trigger';
$string['overview:trigger_help'] = 'Die getriggerten Kurse würden der Verarbeitung dieses Worklows hinzugefügt werden, wenn der Kursselektions-Lauf jetzt zur Durchführung käme.
Ein Kurs fängt nur dann an, einen Workflow zu durchlaufen, wenn alle Trigger des Workflows dies übereinstimmend (UND-Verknüpfung) aussagen.
In den hier genannten Zahlen werden Kurse, die verzögert werden oder sich bereits in anderen Workflows befinden, nicht mitgezählt.
Trotzdem sind die Zahlen nur approximiert, da es sein könnte, dass die Kurse vor diesem einen anderen Workflow auslösen.';
$string['pluginname'] = 'Kurs-Lebenszyklus';
$string['plugintitle'] = 'Kurs-Lebenszyklus';
$string['privacy:metadata:tool_lifecycle_action_log'] = 'Ein Protokoll der von den Kursmanagern durchgeführten Aktionen.';
$string['privacy:metadata:tool_lifecycle_action_log:action'] = 'Kennung der durchgeführten Aktion.';
$string['privacy:metadata:tool_lifecycle_action_log:courseid'] = 'ID des Kurses, für den die Aktion durchgeführt wurde';
$string['privacy:metadata:tool_lifecycle_action_log:processid'] = 'ID des Prozesses, in dem die Aktion durchgeführt wurde.';
$string['privacy:metadata:tool_lifecycle_action_log:stepindex'] = 'Index des Schritts im Workflow, für den die Aktion durchgeführt wurde.';
$string['privacy:metadata:tool_lifecycle_action_log:time'] = 'Zeitpunkt, zu dem die Aktion durchgeführt wurde.';
$string['privacy:metadata:tool_lifecycle_action_log:userid'] = 'ID der/s Benutzers/in, die/der die Aktion durchgeführt hat.';
$string['privacy:metadata:tool_lifecycle_action_log:workflowid'] = 'ID des Workflows, in dem die Aktion durchgeführt wurde.';
$string['proceed'] = 'Fortfahren';
$string['process_errors_header'] = 'Fehler';
$string['process_errors_header_title'] = 'Liste der Bearbeitungsfehler';
$string['process_proceeded_event'] = 'Ein Prozess wurde fortgeführt';
$string['process_rollback_event'] = 'Ein Prozess wurde zurückgesetzt';
$string['process_triggered_event'] = 'Ein Prozess wurde ausgelöst';
$string['restore'] = 'Wiederherstellen';
$string['restore_error_in_step'] = 'Beim Importieren des Schritts \\\'{$a}\\\' ist ein Fehler aufgetreten:';
$string['restore_error_in_trigger'] = 'Beim Importieren des Triggers \\\'{$a}\\\' ist ein Fehler aufgetreten:';
$string['restore_step_does_not_exist'] = 'Der Schritt {$a} ist nicht installiert, aber in der Sicherungsdatei enthalten. Bitte installieren Sie ihn zuerst und versuchen es dann erneut.';
$string['restore_subplugins_invalid'] = 'Falsches Format der Sicherungsdatei. Das Format der Subpluginelemente ist nicht wie erwartet.';
$string['restore_trigger_does_not_exist'] = 'Der Trigger {$a} ist nicht installiert, aber in der Sicherungsdatei enthalten. Bitte installieren Sie ihn zuerst und versuchen es dann erneut.';
$string['restore_workflow_not_found'] = 'Falsches Format der Sicherungsdatei. Der Workflow konnte nicht gefunden werden.';
$string['rollback'] = 'Zurücksetzung';
$string['rolledback'] = 'Zurückgesetzt';
$string['searchcourses'] = 'Kurs-Suche';
$string['see_in_workflow'] = 'In Workflow ansehen';
$string['show_delays'] = 'Art der Ansicht';
$string['showextendeddetails'] = 'Detaillierte Workflow-Informationen anzeigen';
$string['status'] = 'Status';
$string['step'] = 'Schritt';
$string['step_delete'] = 'Entfernen';
$string['step_edit'] = 'Bearbeiten';
$string['step_instancename'] = 'Instanzname';
$string['step_instancename_help'] = 'Titel der Schritt/Trigger-Instanz (nur für Admins sichtbar).';
$string['step_settings_header'] = 'Spezifische Einstellungen des Schritttypen';
$string['step_show'] = 'Anzeigen';
$string['step_sortindex'] = 'Hoch/Runter';
$string['step_subpluginname'] = 'Subpluginname';
$string['step_subpluginname_help'] = 'Name des Schritt/Trigger-Subplugins (nur für Admins sichtbar).';
$string['step_type'] = 'Typ';
$string['steps_installed'] = 'Installierte Schritt-Subplugins';
$string['steptype_settings_header'] = 'Spezifische Einstellungen des Schritt-Typs';
$string['subplugins'] = 'Subplugins';
$string['subpluginsdesc'] = 'Subplugins';
$string['subplugintype_lifecyclestep'] = 'Schritt eines Lifecycle-Prozesses';
$string['subplugintype_lifecyclestep_plural'] = 'Schritte eines Lifecycle-Prozesses';
$string['subplugintype_lifecycletrigger'] = 'Trigger zum Starten eines Lifecycle-Prozesses';
$string['subplugintype_lifecycletrigger_plural'] = 'Trigger zum Starten eines Lifecycle-Prozesses';
$string['tablecourseslog'] = 'Vergangene Aktionen';
$string['tablecoursesremaining'] = 'Restliche Kurse';
$string['tablecoursesrequiringattention'] = 'Kurse, die Ihre Aufmerksamkeit erfordern';
$string['tools'] = 'Aktionen';
$string['trigger'] = 'Trigger';
$string['trigger_does_not_exist'] = 'Der Trigger existiert nicht.';
$string['trigger_enabled'] = 'Aktiviert';
$string['trigger_instancename'] = 'Instanzname';
$string['trigger_instancename_help'] = 'Titel der Trigger-Instanz (nur sichtbar für Admins).';
$string['trigger_settings_header'] = 'Spezifische Einstellungen des Triggertypen';
$string['trigger_sortindex'] = 'Hoch/Runter';
$string['trigger_subpluginname'] = 'Subplugin Name';
$string['trigger_subpluginname_help'] = 'Name des Schritt/Trigger-Subplugins (nur für Admins sichtbar).';
$string['trigger_workflow'] = 'Workflow';
$string['triggers_installed'] = 'Installierte Trigger';
$string['triggertype_settings_header'] = 'Spezifische Einstellungen des Triggertypen';
$string['type'] = 'Typ';
$string['upload_workflow'] = 'Workflow hochladen';
$string['viewheading'] = 'Kurse verwalten';
$string['viewsteps'] = 'Zeige Workflowschritte';
$string['workflow'] = 'Workflow';
$string['workflow_active'] = 'Aktiv';
$string['workflow_definition_heading'] = 'Workflowdefinitionen';
$string['workflow_delayforallworkflows'] = 'Ausschluss für alle Workflows?';
$string['workflow_delayforallworkflows_help'] = 'Falls ja, wird ein Kurs für die oben genannte Zeit nicht nur von diesem, sondern von allen Workflows ausgeschlossen. Das heißt, bis die Zeit abgelaufen ist, kann kein Prozess für den Kurs gestartet werden.';
$string['workflow_displaytitle'] = 'Angezeigter Titel des Workflows';
$string['workflow_displaytitle_help'] = 'Dieser Titel wird Nutzern beim Verwalten ihrer Kurse angezeigt.';
$string['workflow_drafts_header'] = 'Entwürfe';
$string['workflow_drafts_header_title'] = 'Liste von Workflow-Entwürfen';
$string['workflow_drafts_list'] = 'Workflow-Entwürfe anzeigen';
$string['workflow_duplicate_title'] = '{$a} (Kopie)';
$string['workflow_finishdelay'] = 'Kursauschluss bei Beendigung';
$string['workflow_finishdelay_help'] = 'Dieser Wert legt fest, nach welcher Zeit wieder ein Prozess für diesen Workflow und einen Kurs gestartet werden kann, nachdem der Kurs einen Prozess dieses Workflows beendet hat.';
$string['workflow_is_running'] = 'Workflow läuft.';
$string['workflow_not_removeable'] = 'Es ist nicht möglich, diese Workflow-Instanz zu entfernen. Vielleicht hat sie noch laufende Prozesse?';
$string['workflow_processes'] = 'Aktive Prozesse';
$string['workflow_rollbackdelay'] = 'Kursauschluss beim Zurücksetzen';
$string['workflow_rollbackdelay_help'] = 'Dieser Wert legt fest, nach welcher Zeit wieder ein Prozess für diesen Workflow und einen Kurs gestartet werden kann, nachdem der Kurs innerhalb eines Prozesses dieses Workflows zurückgesetzt wurde.';
$string['workflow_sortindex'] = 'Hoch/Runter';
$string['workflow_started'] = 'Workflow gestartet.';
$string['workflow_timeactive'] = 'Aktiv seit';
$string['workflow_timedeactive'] = 'Deaktiviert seit';
$string['workflow_title'] = 'Titel';
$string['workflow_title_help'] = 'Titel des Workflows (nur sichtbar für Admins).';
$string['workflow_tools'] = 'Aktionen';
$string['workflow_trigger'] = 'Trigger für den Workflow';
$string['workflow_was_not_imported'] = 'Der Workflow wurde nicht importiert!';
$string['workflownotfound'] = 'Es konnte kein Workflow mit der ID {$a} gefunden werden!';
$string['workflowoverview'] = 'Workflow ansehen';
$string['workflowoverview_list_header'] = 'Details zu Workflows';
$string['workflowsettings'] = 'Workflow Einstellungen';
