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
 * Strings for component 'collaborativefolders', language 'de', version '3.10'.
 *
 * @package     collaborativefolders
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessfolders'] = 'Verzeichniszugriff';
$string['activityoverview'] = 'Kollaboratives Verzeichnis';
$string['btnlogin'] = 'Anmelden';
$string['btnlogout'] = 'Abmelden ({$a})';
$string['cachedef_token'] = 'OAuth-Token';
$string['cachedef_userinfo'] = 'OAuth-Nutzerinformation';
$string['cannotaccess'] = 'Wenn der obige Link nicht funktioniert und Sie das Verzeichnis nicht finden können, klicken Sie auf die Schaltfläche auf der linken Seite, um die Freigabe zurückzusetzen. Auf diese Weise erhalten Sie wieder Zugriff, ohne Änderungen an den Dateien in diesem Verzeichnis vorzunehmen.';
$string['cannotaccessheader'] = 'Kein Zugriff?';
$string['chooseissuer'] = 'Service';
$string['collaborativefolders'] = 'Kollaborative Verzeichnisse';
$string['collaborativefolders:addinstance'] = 'Neues kollaboratives Verzeichnis hinzufügen';
$string['collaborativefolders:isteacher'] = 'Bei der Anzeige, alle außer Teilnehmer/innen (mit eingeschränktem Zugang) berücksichtigen';
$string['collaborativefolders:view'] = 'Kollaboratives Verzeichnis anzeigen';
$string['collaborativefoldersname'] = 'Name des kollaborativen Verzeichnisses';
$string['collaborativefoldersname_help'] = 'Geben Sie einen neuen Namen ein, der auf der Kursseite angezeigt werden soll.';
$string['configuration_exception'] = 'Es ist ein Fehler in der Konfiguration des OAuth 2 Clients aufgetreten: {$a}';
$string['creationstatus'] = 'Verzeichnisstatus';
$string['creationstatus_created'] = 'Verzeichnis erstellt';
$string['creationstatus_pending'] = 'Verzeichnisse werden in Kürze erstellt';
$string['edit_after_creation'] = 'Beachten Sie, dass der Trainerzugang und die gruppenbezogenen Einstellungen nach dem Anlegen dieser Aktivität nicht mehr geändert werden können.';
$string['error_illegalpathchars'] = 'Es muss ein gültiger Verzeichnis- oder Pfadname eingegeben werden. Verwenden Sie \\\'/\\\' (slash), um Verzeichnisse eines Pfades zu begrenzen.';
$string['eventlinkgenerated'] = 'Eine benutzerspezifische Freigabe für ein gemeinsames Verzeichnis wurde erfolgreich erstellt.';
$string['folder'] = 'Verzeichnis';
$string['foldershared'] = 'Das Verzeichnis wurde erfolgreich für Ihre {$a} freigegeben.';
$string['getaccess'] = 'Zugriff erhalten';
$string['grouplabel'] = 'Gruppe: {$a}';
$string['groupmode'] = 'Modus';
$string['groupmode_off'] = 'Ein Verzeichnis für den gesamten Kurs';
$string['groupmode_on'] = 'Ein Verzeichnis pro Gruppe';
$string['groups'] = 'Gruppen';
$string['incompletedata'] = 'Überprüfen Sie die Moduleinstellungen. Entweder ist kein OAuth 2-Service ausgewählt oder es ist kein entsprechendes Systemkonto verbunden.';
$string['issuer_choice_unconfigured'] = '(unkonfiguriert)';
$string['issuervalidation_invalid'] = 'Derzeit ist der {$a} Service aktiv, implementiert aber nicht alle notwendigen Endpunkte. Das Plugin funktioniert nicht. Wählen Sie einen gültigen Issuer aus.';
$string['issuervalidation_notconnected'] = 'Derzeit ist der gültige Service {$a} aktiv, aber kein Systemkonto ist verbunden. Das Plugin funktioniert nicht. Verbinden Sie ein Systemkonto.';
$string['issuervalidation_valid'] = 'Derzeit ist der Service {$a} gültig und aktiv.';
$string['issuervalidation_without'] = 'Sie haben noch keinen OAuth 2-Service gewählt.';
$string['loginfailure'] = 'Es ist ein Problem aufgetreten: Nicht berechtigt, sich mit {$a} zu verbinden.';
$string['loginsuccess'] = 'Erfolgreich verbunden mit {$a}';
$string['logoutsuccess'] = 'Erfolgreich Verbindung zu {$a} getrennt.';
$string['modulename'] = 'Kollaboratives Verzeichnis';
$string['modulename_help'] = 'Verwenden Sie kollaborative Verzeichnisse, um Verzeichnis in der Cloud (OwnCloud, Nextcloud) für Teilnehmer/innen für kollaboratives Arbeiten zu erstellen. Das Verzeichnis wird individuell mit den Mitgliedern der ausgewählten Gruppen geteilt. Sie müssen keine E-Mail-Adressen von Ihren Teilnehmer/innen sammeln. Alles ist automatisiert!';
$string['modulenameplural'] = 'Kollaboratives Verzeichnis';
$string['namefield'] = 'Name';
$string['namefield_explanation'] = 'Wählen Sie einen Namen, unter dem das gemeinsame Verzeichnis in Ihrem {$a} gespeichert wird.';
$string['namemismatch'] = 'Warnung: Dieses Verzeichnis wurde mit \\\'{$a->link}\\\' geteilt, aber Sie sind als \\\'{$a->current}\\\' angemeldet - Sie müssen möglicherweise die Anmeldungen wechseln, um auf die Dateien zugreifen zu können.';
$string['no_right_issuers'] = 'Keiner der bestehenden Services implementiert alle erforderlichen Endpunkte. Registrieren Sie einen geeigneten Service.';
$string['nocollaborativefolders'] = 'In diesem Kurs ist keine Instanz eines kolloborativen Verzeichnisses aktiv.';
$string['nogroups'] = 'Keine Gruppen';
$string['notcreated'] = 'Verzeichnis {$a} konnte nicht erstellt werden.';
$string['notingroup'] = 'Sie sind in keiner Gruppe und haben Sie keinen Zugriff auf diese Verzeichnisse.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Link zur Konfiguration der OAuth 2 Dienste">Konfiguration der OAuth 2 Dienste</a>';
$string['ocserror'] = 'Ein Fehler mit der OCS-Sharing-API ist aufgetreten.';
$string['openinowncloud'] = 'Öffnen in {$a}';
$string['overview'] = 'Überblick';
$string['pluginadministration'] = 'Administration von kollaborativen Verzeichnissen';
$string['pluginname'] = 'Kollaborative Verzeichnisse';
$string['privacy:metadata:collaborativefolders_link:cmid'] = 'Das Kursmodul, dem diese Verzeichnisfreigabe zugeordnet ist';
$string['privacy:metadata:collaborativefolders_link:groupid'] = 'Die Moodle-Kursgruppe, auf die sich das gemeinsame Verzeichnis bezieht';
$string['privacy:metadata:collaborativefolders_link:link'] = 'Der Name, der dem Verzeichnis bei der Freigabe gegeben wurde.';
$string['privacy:metadata:collaborativefolders_link:owncloudusername'] = 'Die Person, für die das Verzeichnis in OwnCloud freigegeben wurde';
$string['privacy:metadata:collaborativefolders_link:userid'] = 'Die Person, für die das Verzeichnis in Moodle freigegeben wurde';
$string['problem_misconfiguration'] = 'Das Plugin ist nicht korrekt konfiguriert oder der Server ist nicht erreichbar. Wenden Sie sich an Ihren Administrator, um dieses Problem zu beheben.';
$string['problem_nosystemconnection'] = 'Das Systemkonto kann sich nicht mit {$a} verbinden, so dass Verzeichnisse für diese Aktivität nicht erstellt werden. Informieren Sie den Administrator über dieses Problem.';
$string['problem_sharessuppressed'] = 'Das Systemkonto kann sich nicht mit {$a->servicename} verbinden, so dass {$a->sharessuppressed} Verzeichnisse nicht angezeigt wurden. Informieren Sie den Administrator über dieses Problem.';
$string['remotesystem'] = 'Verbindung mit {$a}';
$string['resetpressed'] = 'Freigabe zurücksetzen. Sie können nun wieder Zugriff auf Ihr Verzeichnis erhalten.';
$string['right_issuers'] = 'Die folgenden Services implementieren die erforderlichen Endpunkte: {$a}';
$string['servicename'] = 'Name des Dienstes';
$string['share_exists_exception'] = 'Das Verzeichnis ist bereits für Sie freigegeben. {$a}';
$string['share_failed_exception'] = 'Das Verzeichnis kann nicht für Sie freigegeben werden: {$a}';
$string['sharedtoowncloud'] = 'Dieses Verzeichnis wurde bereits für Ihre {$a} freigegeben.';
$string['socketerror'] = 'Der WebDAV Socket konnte nicht geöffnet werden.';
$string['solveproblems'] = 'Probleme lösen';
$string['teacher_access'] = 'Trainerzugriff';
$string['teacher_mode'] = 'Trainerzugriff auf das Verzeichnis gewähren.';
$string['teacher_mode_help'] = 'In der Regel haben nur Teilnehmer/innen Zugriff auf ihre Verzeichnisse. Wenn dieses Kontrollfeld jedoch aktiviert ist, erhalten Trainer/innen ebenfalls Zugriff. Beachten Sie, dass diese Einstellung nach dem Anlegen nicht mehr geändert werden kann.';
$string['teacheraccess_no'] = 'Die Verzeichnisse sind privat und Trainer/innen haben keinen Zugriff';
$string['teacheraccess_yes'] = 'Trainer/innen haben Zugriff auf alle Verzeichnisse';
$string['teachersnotallowed'] = 'Leider ist es Trainer/innen nicht erlaubt, diese Inhalte zu sehen.';
$string['technicalnotloggedin'] = 'Das Systemkonto ist nicht angemeldet oder hat keine Berechtigung im Remote-System.';
$string['unexpectedcode'] = 'Ein unerwarteter Response Status Code ({$a}) wurde empfangen.';
$string['usernotloggedin'] = 'Sie sind derzeit nicht am Remote-System angemeldet.';
$string['webdav_response_exception'] = 'WebDAV antwortete mit einem Fehler: {$a}';
$string['webdaverror'] = 'WebDAV Fehlercode {$a}';
