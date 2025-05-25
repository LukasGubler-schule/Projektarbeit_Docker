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
 * Strings for component 'assignsubmission_maharaws', language 'de', version '4.5'.
 *
 * @package     assignsubmission_maharaws
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['archiveonrelease'] = 'Archivieren nach der Bewertung';
$string['archiveonrelease_help'] = 'Nachdem eine Bewertung vergeben wurde, wird eine Momentaufnahme des Portfolios gemacht.';
$string['assign_submission_maharaws_description'] = 'Mahara-Funktionen, die im Mahara-Plugin für die Übermittlung von Aufgaben verwendet werden.<br />Die Veröffentlichung dieses Dienstes auf einer Moodle-Website hat keine Auswirkungen. Abonnieren Sie diesen Dienst, wenn Sie die Möglichkeit haben möchten, Aufgaben mit {$a} zu verwenden.<br />';
$string['assign_submission_maharaws_name'] = 'Mahara Aufgabeneinreichung (Webservices)';
$string['collectionsby'] = 'Sammlungen von {$a}';
$string['debug'] = '';
$string['defaultlockpages'] = 'Standard "{$a}"';
$string['defaulton'] = 'Standardmäßig aktiviert';
$string['defaulton_help'] = 'Wenn diese Option gesetzt ist, wird diese Übermittlungsmethode standardmäßig für alle neuen Aufgaben aktiviert.';
$string['defaultsite'] = 'Standard "{$a}"';
$string['defaultsite_help'] = 'Standardeinstellung für die Einstellung "{$a}" in neuen Mahara-Aufgaben.';
$string['emptysubmission'] = 'Sie haben kein Portfolio ausgewählt, das Sie einreichen möchten.';
$string['enabled_help'] = 'Wenn diese Option aktiviert ist, können Studierende Mahara-Seiten und -Sammlungen zur Bewertung auf dieser Website in diesem Kurs einreichen.';
$string['errorinvalidapistring'] = 'Die Mahara-Instanz hat einen Api-String mit einem unerwarteten Format zurückgegeben.';
$string['errorinvalidhost'] = 'Ungültige Host-ID ausgewählt';
$string['errorinvalidstatus'] = 'Entwickler-Fehler: Ungültiger Übermittlungsstatus gesendet an assign_submission_mahara::set_mahara_submission_status()';
$string['errorinvalidurl'] = 'Fehler bei der Verbindung zu Mahara Web Services. {$a}';
$string['errorrequest'] = 'Attempt to send OAuth request resulted in error: {$a}';
$string['errorvieworcollectionalreadysubmitted'] = 'Die ausgewählte Seite oder Sammlung konnte nicht übermittelt werden. Bitte wählen Sie eine andere.';
$string['errorwsrequest'] = 'Beim Versuch, eine Anfrage an Mahara zu senden, ist ein Fehler aufgetreten: {$a}';
$string['eventassessableuploaded'] = 'Eine Seite oder Sammlung wurde eingereicht.';
$string['forceglobalcredentials'] = 'Globale Anmeldeinformationen erzwingen';
$string['forceglobalcredentials_help'] = 'Verwenden Sie immer diese Anmeldedaten, um sich mit Mahara zu verbinden';
$string['forceglobalcredentialserror'] = 'Die Mahara-URL und  die Anmeldedaten wurden festgelegt, sind aber nicht auf der Website-Ebene eingestellt. Bitten Sie Ihren Administrator, das Mahara-Einreichungs-Plugin korrekt zu konfigurieren.';
$string['forceglobalcredentialswarning'] = 'Mahara-URL und  die Anmeldedaten wurden global festgelegt';
$string['gclabel'] = 'Globale Anmeldedaten';
$string['invalidurlhelp'] = 'Überprüfen Sie, ob URL und OAuth-Anmeldeinformationen korrekt sind und ob ein gültiges SSL-Zertifikat vorhanden ist, wenn https verwendet wird. Prüfen Sie auch, ob dem OAuth-Zugang die richtigen Funktionen zugewiesen sind.';
$string['key'] = 'OAuth-Schlüssel für Mahara-Webdienste';
$string['key_help'] = 'Geben Sie den OAuth-Schlüssel für Webservices von der Mahara-Website ein.';
$string['legacy_ext_username'] = 'Veraltetes Format ext_user_username verwenden';
$string['legacy_ext_username_help'] = 'Die Aktivierung dieser Option bewirkt, dass das Format des Feldes ext_usr_username dem folgenden Aufbau folgt "Feldname:value". Es wird nicht empfohlen, diese Einstellung zu aktivieren, es sei denn, Sie haben einen besonderen Grund dafür.';
$string['lockpages'] = 'Eingereichte Portfolios sperren';
$string['lockpages_help'] = 'Wenn "Ja, gesperrt halten" ausgewählt ist, werden die eingereichten Mahara-Seiten und -Sammlungen für die Bearbeitung in Mahara gesperrt und bleiben auch nach der Bewertung gesperrt. Wenn "Ja, aber nach der Bewertung freigeben" gewählt wird, werden die Seiten oder Sammlungen nach der Bewertung der Einsendung freigegeben, oder, wenn der Bewertungsworkflow verwendet wurde, werden sie freigegeben, wenn die Bewertungen für die Studierenden freigegeben werden.';
$string['maharaws:configure'] = 'Mahara-Einreichung konfigurieren';
$string['nomaharahostsfound'] = 'Keine Mahara-Hosts gefunden.';
$string['noneselected'] = 'Nichts ausgewählt';
$string['noviewscreated'] = 'Sie haben keine verfügbaren Seiten oder Sammlungen. Bitte besuchen Sie "{$a->name}" und legen Sie eine <a href="{$a->jumpurl}" target="_blank" rel="noopener noreferrer">neue Seite an</a>.';
$string['option_collections'] = 'Sammlungen';
$string['option_views'] = 'Seiten';
$string['outputforlognew'] = 'Neue {$a} Einreichung.';
$string['pluginname'] = 'Mahara-Portfolio Einreichungen';
$string['previousattemptsnotvisible'] = 'Vorherige Versuche mit dem Mahara-Einreichungs-Plugin sind nicht sichtbar.';
$string['privacy:metadata:assignment'] = 'Die ID der Aufgabe';
$string['privacy:metadata:assignmentsubmission_maharaws:coursefullname'] = 'Der vollständige Name des Kurses wird gesendet, um Mahara eine bessere Bedienbarkeit zu ermöglichen.';
$string['privacy:metadata:assignmentsubmission_maharaws:courseid'] = 'Die Kursnummer des Moodle-Kurses wird gesendet, damit das Mahara Ihr Portfolio dem richtigen Kurs zuordnen kann.';
$string['privacy:metadata:assignmentsubmission_maharaws:courseshortname'] = 'Die Kurzbezeichnung des Kurses wird an Mahara gesendet, um eine bessere Benutzerfreundlichkeit zu ermöglichen.';
$string['privacy:metadata:assignmentsubmission_maharaws:email'] = 'Ihre E-Mail wird an Mahara gesendet, um die Benutzerfreundlichkeit zu erhöhen und die Benutzerverwaltung zu ermöglichen.';
$string['privacy:metadata:assignmentsubmission_maharaws:firstname'] = 'Ihr Vorname wird an das entfernte System gesendet, um eine bessere Benutzerfreundlichkeit zu ermöglichen.';
$string['privacy:metadata:assignmentsubmission_maharaws:fullname'] = 'Ihr vollständiger Name wird an das entfernte System gesendet, um eine bessere Benutzerfreundlichkeit zu ermöglichen.';
$string['privacy:metadata:assignmentsubmission_maharaws:idnumber'] = 'Ihre IS-Nummer wird an Mahara gesendet, um Ihnen den Zugang zu Ihren Daten zu ermöglichen.';
$string['privacy:metadata:assignmentsubmission_maharaws:lastname'] = 'Ihr Nachname wird an Mahara gesendet, um eine bessere Benutzerfreundlichkeit zu ermöglichen.';
$string['privacy:metadata:assignmentsubmission_maharaws:userid'] = 'Die Benutzerkennung wird an Mahara gesendet, damit Sie auf Ihre Daten zugreifen können.';
$string['privacy:metadata:assignmentsubmission_maharaws:username'] = 'Ihr Nutzername wird an Mahara gesendet, um Ihnen den Zugang zu Ihren Daten ermöglichen.';
$string['privacy:metadata:assignsubmission_maharaws'] = 'Speichert Informationen über Mahara-Seiten und -Sammlungen, die an Aufgaben übermittelt wurden.';
$string['privacy:metadata:iscollection'] = 'Handelt es sich bei dieser Einreichung um eine Seite oder eine Sammlung?';
$string['privacy:metadata:submission'] = 'Die ID der Einreichung';
$string['privacy:metadata:viewid'] = 'Die ID der Mahara-Seite oder -Sammlung';
$string['privacy:metadata:viewstatus'] = 'Der Status der Mahara-Seite oder -Sammlung';
$string['privacy:metadata:viewtitle'] = 'Der Titel der Mahara-Seite oder -Sammlung';
$string['privacy:metadata:viewurl'] = 'Die URL der Mahara-Seite oder -Sammlung';
$string['privacy:path'] = 'Mahara-Seiten und -Sammlungen';
$string['remoteuser'] = 'Remoteuser verwenden';
$string['secret'] = 'Mahara Webdienste OAuth secret';
$string['secret_help'] = 'Geben Sie den OAuth secret für Webservices von der Mahara-Website ein.';
$string['selectmaharaview'] = 'Wählen Sie eine Ihrer verfügbaren Portfolioseiten oder Sammlungen aus der folgenden Liste oder besuchen Sie "{$a->name}" und erstellen <a href="{$a->jumpurl}" target="_blank" rel="noopener noreferrer">eine neue Seite</a>.';
$string['viewsby'] = 'Seiten von {$a}';
$string['yeskeeplocked'] = 'Ja, gesperrt halten';
$string['yesunlock'] = 'Ja, aber nach der Bewertung freigeben';
