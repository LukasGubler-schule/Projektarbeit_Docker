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
 * Strings for component 'webexactivity', language 'de', version '4.5'.
 *
 * @package     webexactivity
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionalsettings'] = 'Zusätzliche Besprechungseinstellungen';
$string['allchat'] = 'Teilnehmer/innen können untereinander chatten';
$string['apipassword'] = 'WebEx Administratorenkennwort';
$string['apipassword_help'] = 'Das Kennwort für ein Konto mit Administratorenrechten auf Ihrer Eebsite';
$string['apisettings'] = 'API Einstellungen';
$string['apiusername'] = 'WebEx Admin Benutzername';
$string['apiusername_help'] = 'Benutzername eines Kontos mit Administratorenrechten auf Ihrer Website. Das Konto sollte aus Sicherheitsgründen speziell für die Nutzung mit Moodle angelegt werden.';
$string['availabilityendtime'] = 'Endzeit der erweiterten Verfügbarkeit';
$string['badpassword'] = 'WebEx-Benutzername und -Kennwort passen nicht zusammen.';
$string['badpasswordexception'] = 'WebEx-Kennwort ist falsch und konnte nicht aktualisiert werden.';
$string['confirmrecordingdelete'] = 'Sind Sie sicher, dass Sie die Aufnahme <b>{$a->name}</b>, mit einer Länge von {$a->time} löschen wollen? Dieser Vorgang kann nicht rückgängig gemacht werden.';
$string['confirmrecordingsdelete'] = 'Sind Sie sicher, dass Sie die ausgewählten Aufnahmen löschen wollen? Dieser Vorgang kann nicht rückgängig gemacht werden.';
$string['connectionexception'] = 'Beim Verbindungsaufbau trat ein Fehler auf: {$a->error}';
$string['defaultmeetingtype'] = 'Standardbesprechungstyp';
$string['defaultmeetingtype_help'] = 'Beim Erstellen einer neuen Besprechung wird dieser Typ voreingestellt.';
$string['deletelink'] = '<a href="{$a->url}">Löschen</a>';
$string['deletetime'] = 'Zeitpunkt der Löschung';
$string['deletionin'] = '<div>{$a->time} bis zur Löschung.</div>';
$string['deletionsoon'] = '<div>Wird bald gelöscht.</div>';
$string['description'] = 'Beschreibung';
$string['directlinks'] = 'Direktlinks';
$string['directlinkstext'] = '<p>Diese Links bieten einen Direktzugang zu den Aufnahmen auf dem Moodle-Server. Ein Zugriff über diese Links erfordert keine Anmeldung und wird nicht registriert.</p><br />
Streaming: <a target="_blank" href="{$a->streamurl}" alt="Streaming link">{$a->streamurl}</a><br />
Download: <a target="_blank" href="{$a->fileurl}" alt="Streaming link">{$a->fileurl}</a><br />';
$string['duration'] = 'Voraussichtliche Dauer';
$string['duration_help'] = 'Die voraussichtliche Dauer der Besprechung. Die Angabe dient nur der Information und hat keinen Einfluß auf die tatsächliche Besprechungsdauer.';
$string['enablecallin'] = 'Ermöglicht Teilnahme über das Telefon';
$string['error_JM_MeetingLocked'] = 'Die Besprechung ist gesperrt und Sie können nicht daran teilnehmen.';
$string['error_JM_MeetingNotInProgress'] = 'Diese Besprechung ist zur Zeit nicht aktiv. Sie wurde entweder noch nicht gestartet oder ist bereits beendet.';
$string['error_LI_AccessDenied'] = 'Der Benutzer konnte nicht bei WebEx angemeldet werden.';
$string['error_LI_AccountLocked'] = 'Das WebEx-Benutzerkonto ist gesperrt.';
$string['error_LI_AutoLoginDisabled'] = 'Für diesen Benutzer ist die automatische Anmeldung deaktiviert.';
$string['error_LI_InvalidSessionTicket'] = 'Das Sitzungs-Ticket ist ungültig. Bitte versuchen Sie es noch einmal.';
$string['error_LI_InvalidTicket'] = 'Das Anmelde-Ticket ist ungültig. Bitte versuchen Sie es noch einmal.';
$string['error_unknown'] = 'Ein unbekannter Fehler ist aufgetreten.';
$string['errordeletingrecording'] = 'Fehler beim Löschen der Aufnahme';
$string['event_meeting_ended'] = 'Besprechung beendet';
$string['event_meeting_hosted'] = 'Besprechung eingerichtet';
$string['event_meeting_joined'] = 'In die Besprechung eingetreten';
$string['event_meeting_started'] = 'Besprechung gestartet';
$string['event_recording_created'] = 'Aufnahme erstellt';
$string['event_recording_deleted'] = 'Aufnahme gelöscht';
$string['event_recording_downloaded'] = 'Aufnahme heruntergeladen';
$string['event_recording_undeleted'] = 'Aufnahme wiederhergestellt';
$string['event_recording_viewed'] = 'Aufnahme angesehen';
$string['externallinktext'] = '<p>Dieser Link ist für Teilnehmer/innen, die nicht in diesem Kurs eingeschrieben sind. Kursteilnehmer/innen muss dieser Link nicht per E-Mail zugesendet werden, da Sie mit einem Klick auf den Link auf der vorigen Seite an der Besprechung teilnehmen können. Dieser Link sollte mit Bedacht verteilt werden - jede Person, die diesen Link besitzt, kann an der Besprechung teilnehmen. Um andere Personen zur Besprechung einzuladen, kopieren Sie die folgende URL und versenden sie per E-Mail. Wenn es sich um eine öffentliche Besprechung handelt, kann der Link auch auf einer Webseite platziert werden.</p>';
$string['externalpassword'] = 'Teilnehmer/innen müssen auch das Besprechungskennwort wissen: <b>{$a}</b>';
$string['getexternallink'] = '<a href="{$a->url}">Link für externe Teilnehmer</a>';
$string['host'] = 'Host';
$string['hostmeetinglink'] = '<a href="{$a->url}">Host Meeting</a>';
$string['hostschedulingexception'] = 'Benutzer kann keine Besprechung für diesen Host terminieren.';
$string['inprogress'] = 'In Bearbeitung';
$string['invalidtype'] = 'Ungültiger Typ.';
$string['joinmeetinglink'] = '<a href="{$a->url}">An der Besprechung teilnehmen</a>';
$string['longavailability'] = 'Erweiterte Verfügbarkeit';
$string['manageallrecordings'] = 'Alle WebEx-Aufnahmen verwalten';
$string['manageallrecordings_help'] = 'Verwaltet alls Aufnahmen auf dem WebEx-Server, nicht nur solche mit einer Moodle-Aktivität.';
$string['meetingpassword'] = 'Besprechungskennwort';
$string['meetingpast'] = 'Diese Besprechung ist beendet.';
$string['meetingsettings'] = 'Besprechungseinstellungen';
$string['meetingtemplate'] = 'WebEx Template';
$string['meetingtemplate_help'] = 'Name des Templates, das Sie in Ihrem WebEx-Konto für diesen Besprechungstyp festgelegt haben. Bleibt das Feld leer werden die Standardeinstellungen genutzt. Hinweis: Wird ein nicht existierender Template-Name eingegeben, könnten keine Besprechungen dieses Typs angelegt werden.';
$string['meetingtype'] = 'Besprechungstyp';
$string['meetingtypes'] = 'Besprechungstypen';
$string['meetingupcoming'] = 'Diese Besprechung ist jetzt nicht verfügbar.';
$string['modulename'] = 'WebEx Besprechung';
$string['modulenameplural'] = 'WebEx Besprechungen';
$string['page_managerecordings'] = 'Aufnahmen verwalten';
$string['page_manageusers'] = 'Benutzer verwalten';
$string['pluginadministration'] = 'Administration WebEx Besprechung';
$string['pluginname'] = 'WebEx Besprechung';
$string['pluginnamepural'] = 'WebEx Besprechungen';
$string['prefix'] = 'Prefix Benutzername';
$string['prefix_help'] = 'Diese Zeichenkette wird allen Benutzernamen vorangestellt, die durch dieses Modul erzeugt werden.';
$string['recordingfileurl'] = 'Herunterladen';
$string['recordinglength'] = '({$a->time}, {$a->size})';
$string['recordingname'] = 'Name der Aufzeichnung';
$string['recordings'] = 'Aufzeichnungen';
$string['recordingsettings'] = 'Einstellungen für Aufzeichnungen';
$string['recordingstreamurl'] = 'Play';
$string['recordingtrashtime'] = 'Verweilzeit von Aufzeichnungen im Papierkorb';
$string['recordingtrashtime_help'] = 'Stunden, die eine Aufzeichnung im Papierkorb bleibt, bevor sie endgültig gelöscht wird.';
$string['requiremeetingpassword'] = 'Besprechungskennwort erforderlich';
$string['requiremeetingpassword_help'] = 'Verlangt vom Nutzer die Eingabe eines Besprechungskennworts. Falls diese Option nicht ausgewählt wurde, der Besprechungstyp aber ein Kennwort verlangt, wird ein Zufallskennwort erzeugt.';
$string['settings'] = 'Einstellungen WebEx Besprechung';
$string['sitename'] = 'Site Name';
$string['sitename_help'] = 'Der URL-Teil vor .webex.com. Wenn die URL Ihrer Site z.B. \'https://beispiel.webex.com\' lautet, geben Sie \'beispiel\' in das obige Feld ein.';
$string['startssoon'] = 'Beginnt demnächst';
$string['starttime'] = 'Startzeit';
$string['stream'] = 'Stream';
$string['studentdownload'] = 'Erlaubt Teilnehmern das Herunterladen von Aufzeichnungen erlauben';
$string['studentdownload_help'] = 'Gibt Teilnehmer/innen den Zugriff auf den Download-Link für die Aufzeichnungen.';
$string['studentvisible'] = 'Für Teilnehmer/innen sichtbar';
$string['task_deleterecordings'] = 'Gelöschte Aufzeichnungen bereinigen';
$string['task_updateallrecordings'] = 'Alle Aufzeichnungen aktualisieren';
$string['task_updatemediumrecordings'] = 'Vor einiger Zeit erstellte Aufzeichnungen aktualisieren';
$string['task_updateopensessions'] = 'Offene Sitzungen aktualisieren';
$string['task_updaterecentrecordings'] = 'Kürzlich erstellte Aufzeichnungen aktualisieren';
$string['typeforall'] = 'Verfügbar für alle Benutzer';
$string['typeinstalled'] = 'Verfügbar';
$string['typemeetingcenter'] = 'Meeting Center';
$string['typepwreq'] = 'Besprechungskennwort erforderlich';
$string['typetrainingcenter'] = 'Training Center';
$string['undeletelink'] = '<a href="{$a->url}">Wiederherstellen</a>';
$string['unknownhostwebexidexception'] = 'WebEX Host ID existiert nicht';
$string['usereditauto'] = 'Ihr WebEx Benutzer wird intern verwaltet und kann nicht bearbeitet werden.';
$string['usereditbad'] = 'Sie sollten nicht auf dieser Seite angekommen sein.';
$string['usereditunabletoload'] = 'Ihr Benuterkonto konnte nicht von WebEx geladen werden.';
$string['userexistsexplanation'] = 'Ihre E-Mail-Adresse ({$a->email}) wird bereits vom WebEx-Benutzerkonto<b>{$a->username}</b> genutzt. Bitte geben Sie nachfolgend Ihr WebEx-Kennwort ein.';
$string['webexactivity:addinstance'] = 'Eine neue WebEx Besprechung hinzufügen';
$string['webexactivity:allavailabletypes'] = 'Besprechungen aller installiertert Typen erstellen';
$string['webexactivity:hostmeeting'] = 'WebEx Besprechungen planen und verwalten';
$string['webexactivity:reports'] = 'WebEx Berichte verwenden';
$string['webexactivity:view'] = 'WebEx Besprechung ansehen';
$string['webexactivityname'] = 'Name der Besprechung';
$string['webexid'] = 'WebEx ID';
$string['webexrecordings'] = 'WebEx Aufzeichnungen';
$string['webexusercollision'] = 'Konflikt mit existierendem WebEx Benutzerkonto.';
$string['webexxmlexception'] = 'In WebEx ist während der Ausführung von XML ein Fehler aufgetreten: {$a->errorcode} {$a->error}';
