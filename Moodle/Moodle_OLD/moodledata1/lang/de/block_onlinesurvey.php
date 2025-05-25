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
 * Strings for component 'block_onlinesurvey', language 'de', version '3.10'.
 *
 * @package     block_onlinesurvey
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allsurveys'] = 'Alle Umfragen';
$string['error_config_not_accessible'] = 'Konfiguration nicht zugreifbar';
$string['error_debugmode_missing_capability'] = 'Der Block befindet sich im Debug-Modus. Ihnen fehlen die Rechte, um Inhalte gelistet zu bekommen.';
$string['error_lti_learnermapping_missing'] = 'Learner Rollenmapping fehlt';
$string['error_lti_password_missing'] = 'LTI Passwort fehlt';
$string['error_lti_settings_error'] = 'LTI - Einstellungsfehler';
$string['error_lti_url_missing'] = 'URL des LTI-Providers fehlt';
$string['error_occured'] = '<b>Ein Fehler ist aufgetreten:</b><br /> {$a} <br />';
$string['error_soap_settings_error'] = 'SOAP - Einstellungsfehler';
$string['error_survey_curl_timeout_msg'] = 'Die Umfragen konnten leider nicht abgefragt werden.';
$string['error_survey_login_missing'] = 'Pfad für Onlineumfragen fehlt';
$string['error_survey_pwd_missing'] = 'SOAP-Kennwort fehlt';
$string['error_survey_server_missing'] = 'URL des evasys Servers fehlt';
$string['error_survey_user_missing'] = 'SOAP-Benutzername fehlt';
$string['error_userid_not_found'] = 'User-ID nicht gefunden';
$string['error_warning_message'] = '<b>Warnung:</b><br />{$a}<br />';
$string['error_wsdl_namespace'] = 'WSDL Namespace Fehler beim Parsen<br />';
$string['lti'] = 'LTI';
$string['onlinesurvey:addinstance'] = 'Instanz des Blocks Evaluationen (evasys) hinzufügen';
$string['onlinesurvey:myaddinstance'] = 'Instanz des Blocks Evaluationen (evasys) zu meiner Seite hinzufügen';
$string['onlinesurvey:view'] = 'Block Evaluationen (evasys) anzeigen';
$string['onlinesurvey:view_debugdetails'] = 'Debug-Details anzeigen';
$string['pluginname'] = 'Evaluationen (evasys)';
$string['privacy:metadata:block_onlinesurvey'] = 'Das evasys Block Plugin speichert selbst keine personenbezogenen Daten, überträgt aber personenbezogene Daten von Moodle an die angebundene evasys Instanz.';
$string['privacy:metadata:block_onlinesurvey:email'] = 'Die E-Mail Adresse des Nutzers, welche an evasys übertragen wird um zu prüfen ob Umfragen vorliegen.';
$string['privacy:metadata:block_onlinesurvey:username'] = 'Der Anmeldename des Nutzers, welcher an evasys übertragen wird um zu prüfen ob Umfragen vorliegen.';
$string['setting_additionalcss'] = 'Zusätzliches CSS für iframe';
$string['setting_additionalcss_desc'] = 'Hier können Sie CSS code eingeben, welcher der Seite welche im evasys Block geladen wird, hinzugefügt wird. Sie können diese Einstellung dazu nutzen, um den Inhalt des evasys Blocks an Ihre Bedürfnisse anzupassen.<br /><em>Bitte beachten Sie: Diese Einstellung wird im kompakten Darstellungsmodus für LTI und SOAP Verbindungen sowie im detaillierten Darstellungsmodus für SOAP Verbindungen verwendet. Sie wird nicht im detaillierten Darstellungsmodus für LTI verwendet - falls Sie hier Stile ändern möchten, nehmen Sie die Änderungen bitte im LTI Template in evasys vor.</em>';
$string['setting_blocktitle'] = 'Titel';
$string['setting_blocktitle_desc'] = 'Der hier eingegebene Text wird als Block-Titel verwendet.';
$string['setting_blocktitle_multilangnote'] = 'Wenn erforderlich, können mehrere Sprachen (z.B. Englisch und Deutsch) mit der Moodle Multilanguage filter syntax eingegeben werden (siehe https://docs.moodle.org/en/Multi-language_content_filter).';
$string['setting_communication_interface'] = 'Kommunikationsprotokoll';
$string['setting_communication_interface_desc'] = 'Hier aktivieren Sie, ob Moodle per LTI oder SOAP mit evasys kommunizieren soll.<br /><em>Bitte nehmen Sie im zugehörigen folgenden Abschnitt die notwendigen Einstellungen für das hier gewählte Kommunikationsprotokoll vor.</em>';
$string['setting_customfieldnumber'] = 'Benutzerdatenfeld Nr.';
$string['setting_customfieldnumberinevasys'] = 'Benutzerdatenfeld in evasys';
$string['setting_customfieldnumberinevasys_desc'] = 'Bei Verwendung des Anmeldenamens als Nutzer-Identifikator kann für Studierende eines der ersten drei Benutzerdatenfelder in evasys zur Authentifizierung genutzt werden.<br /><em>Bitte beachten Sie: Diese Einstellung ist nur für Studierende relevant. Soll für Dozierende der Anmeldename als Nutzer-Identifikator verwendet werden, muss dieser in evasys in den Nutzereigenschaften im Feld "Externe ID" hinterlegt sein.</em>';
$string['setting_heading_appearance'] = 'Darstellung';
$string['setting_heading_appearance_desc'] = 'Die Einstellungen in diesem Abschnitt legen die Darstellung des evasys Blocks fest.';
$string['setting_heading_communication'] = 'Kommunikation';
$string['setting_heading_communication_desc'] = 'Die Einstellungen in diesem Abschnitt legen die Kommunikation des evasys Blocks mit evasys fest.';
$string['setting_heading_expert'] = 'Experten-Einstellungen';
$string['setting_heading_expert_desc'] = 'Die Einstellungen in diesem Abschnitt müssen im Normalfall nicht angepasst werden und sind speziellen Einsatzzwecken vorbehalten.';
$string['setting_heading_lti'] = 'LTI Einstellungen';
$string['setting_heading_lti_desc'] = 'Die Einstellungen in diesem Abschnitt legen die Kommunikation des evasys Blocks mit evasys fest.<br /><em>Diese Einstellungen sind nur erforderlich, wenn Sie "LTI" in der Einstellung "Kommunikationsprotokoll" ausgewählt haben.</em>';
$string['setting_heading_soap'] = 'SOAP Einstellungen';
$string['setting_heading_soap_desc'] = 'Die Einstellungen in diesem Abschnitt legen die Kommunikation des evasys Blocks mit evasys fest.<br /><em>Diese Einstellungen sind nur erforderlich, wenn Sie "SOAP" in der Einstellung "Kommunikationsprotokoll" ausgewählt haben.</em>';
$string['setting_lti_customparameters'] = 'evasys LTI Custom Parameter';
$string['setting_lti_customparameters_desc'] = 'Hier werden die Custom Parameter hinterlegt, mit deren Hilfe Einstellungen für die Anzeige der Umfragen festgelegt werden können, z.B. ob in der Studierendenansicht auch bereits ausgefüllte Umfragen angezeigt werden sollen (learner_show_completed_surveys=1) oder ob in der Dozierendenansicht auch die Reporte der Umfragen abgerufen werden können (instructor_show_report=1). Jeder Parameter wird in einer eigenen Zeile eingegeben. Für ausführliche Informationen zu den verfügbaren Parametern konsultieren Sie bitte das evasys LTI Handbuch.';
$string['setting_lti_instructormapping'] = 'LTI Rollenzuweisung "Instructor"';
$string['setting_lti_instructormapping_desc'] = 'Definiert, welche Moodle-Rollen der LTI-Rolle „Instructor“ entsprechen sollen und somit den evasys Block als Dozierende angezeigt bekommen sollen.';
$string['setting_lti_learnermapping'] = 'LTI Rollenzuweisung "Learner"';
$string['setting_lti_learnermapping_desc'] = 'Definiert, welche Moodle-Rollen der LTI-Rolle „Learner“ entsprechen sollen und somit den evasys Block als Studierende angezeigt bekommen sollen.';
$string['setting_lti_regex_instructor'] = 'LTI - Regulärer Ausdruck "Instructor"';
$string['setting_lti_regex_instructor_desc'] = 'Regulärer Ausdruck, der den Inhalt der LTI-Response nach offenen Onlineumfragen durchsucht. Er muss nur angepasst werden, wenn eigene Templates erstellt oder tiefergehend angepasst wurden, die in den Funktionen von den Standardtemplates abweichen.<br /><em>Bitte beachten Sie: Diese Einstellung wird nur verarbeitet, wenn Sie "LTI" in der Einstellung "Kommunikationsprotokoll" ausgewählt haben.</em>';
$string['setting_lti_regex_learner'] = 'LTI - Regulärer Ausdruck "Learner"';
$string['setting_lti_regex_learner_desc'] = 'Regulärer Ausdruck, der den Inhalt der LTI-Response nach offenen Onlineumfragen durchsucht. Er muss nur angepasst werden, wenn eigene Templates erstellt oder tiefergehend angepasst wurden, die in den Funktionen von den Standardtemplates abweichen.<br /><em>Bitte beachten Sie: Diese Einstellung wird nur verarbeitet, wenn Sie "LTI" in der Einstellung "Kommunikationsprotokoll" ausgewählt haben.</em>';
$string['setting_offer_zoom'] = 'Vergrößerte Listenansicht immer anbieten';
$string['setting_offer_zoom_desc'] = 'Wenn aktiviert, wird der Nutzer die vergrößerte Listenansicht immer öffnen können. Wenn deaktiviert, wird der Nutzer die vergrößerte Listenansicht nur öffnen können falls er offene Umfrage hat.<br /><em>Bitte beachten Sie: Wenn Sie im LTI-Template eingestellt haben, dass Studierende auch bereits abgeschlossene Umfragen und/oder Umfrageergebnisse einsehen dürfen, dann sollten Sie diese Einstellung aktivieren. Andernfalls könnten die Studierenden nach Teilnahme an der letzten Umfrage die Daten nicht mehr einsehen.</em>';
$string['setting_presentation'] = 'Darstellungsmodus';
$string['setting_presentation_brief'] = 'Kompakt';
$string['setting_presentation_desc'] = 'Im kompakten Darstellungsmodus wird im evasys Block lediglich die Anzahl der offenen Umfragen über eine Grafik ausgewiesen. In diesem Modus kann eine vergrößerte Listenansicht mit Klick auf die Grafik geöffnet werden sobald der Nutzer mindestens eine offene Umfrage hat.<br />Im detaillierten Darstellungsmodus werden die Links auf die Onlineumfragen direkt im evasys Block bereitgestellt. In diesem Modus, aber nur bei einer Kommunikation via SOAP, kann eine vergrößerte Listenansicht mit Klick auf einen Knopf unter der Liste geöffnet werden sobald der Nutzer mindestens eine offene Umfrage hat.';
$string['setting_presentation_detailed'] = 'Detailliert';
$string['setting_show_spinner'] = 'Wartebild anzeigen';
$string['setting_show_spinner_desc'] = 'Wenn aktiviert, wird ein Wartebild im evasys Block angezeigt bis die offenen Umfragen von evasys geladen sind.';
$string['setting_soap_request_eachtime'] = 'Daten per SOAP bei jeder Ausgabe anfordern';
$string['setting_soap_request_eachtime_desc'] = 'Wenn aktiviert, werden bei jeder Ausgabe des evasys Blocks die auszugebenden Daten von evasys abgerufen. Wenn nicht aktiviert, werden die Daten nur einmal pro Session (d.h. nur einmal nach jedem Moodle Login) abgerufen.';
$string['setting_survey_debug'] = 'Debug Modus';
$string['setting_survey_debug_desc'] = 'Wenn aktiviert, werden Debug- und Fehlermeldungen innerhalb des evasys Blocks angezeigt.';
$string['setting_survey_hide_empty'] = 'Leeren Block verbergen';
$string['setting_survey_hide_empty_desc'] = 'Wenn aktiviert, wird der evasys-Block verborgen, wenn keine Umfragen für den Nutzer vorhanden sind. Wenn nicht aktiviert, wird in der Kompaktansicht eine Grafik mit einem Häkchen und dem Text „Keine offenen Evaluationen“ angezeigt, in der Detailansicht eine leere Liste.<br /><em>Bitte beachten Sie: Wenn Sie im LTI-Template eingestellt haben, dass Studierende auch bereits abgeschlossene Umfragen und/oder Umfrageergebnisse einsehen dürfen, dann sollten Sie den Block nicht verbergen. Andernfalls könnten die Studierenden nach Teilnahme an der letzten Umfrage die Daten nicht mehr einsehen.</em>';
$string['setting_survey_login'] = 'evasys SOAP Pfad für Onlineumfragen';
$string['setting_survey_login_desc'] = 'URL des evasys Online-Umfrage Logins (https://[SERVERNAME]/evasys/).';
$string['setting_survey_lti_password'] = 'evasys LTI Passwort';
$string['setting_survey_lti_password_desc'] = 'Passwort der evasys LTI Schnittstelle.';
$string['setting_survey_lti_url'] = 'evasys LTI Provider URL';
$string['setting_survey_lti_url_desc'] = 'URL der LTI Provider PHP Datei auf dem evasys-Server (https://[SERVERNAME]/customer/lti/lti_provider.php).';
$string['setting_survey_popupinfo_content'] = 'Pop-up Inhalt';
$string['setting_survey_popupinfo_content_default'] = '<p>Liebe(r) Studierende,</p>
<p>aktuell sind Sie für eine oder mehrere Onlineumfragen zur Evaluation der von Ihnen besuchten Lehrveranstaltungen freigeschaltet. Mit Ihrer Teilnahme helfen Sie uns sehr, unser Studienangebot zu verbessern.<br />
Die Links zu den Befragungen werden Ihnen im Block "Evaluationen" angezeigt.</p>
<p>Vielen Dank für Ihre Unterstützung!<br />
Ihr Evaluationsteam</p>';
$string['setting_survey_popupinfo_content_desc'] = 'Falls erforderlich kann mit dieser Einstellung der Inhalt des Pop-up angepasst werden.';
$string['setting_survey_popupinfo_title'] = 'Pop-up Titel';
$string['setting_survey_popupinfo_title_default'] = 'Offene Evaluationen';
$string['setting_survey_popupinfo_title_desc'] = 'Falls erforderlich kann mit dieser Einstellung der Titel des Pop-up angepasst werden.';
$string['setting_survey_pwd'] = 'evasys SOAP Passwort';
$string['setting_survey_pwd_desc'] = 'Passwort des evasys SOAP Benutzers.';
$string['setting_survey_server'] = 'evasys SOAP WSDL URL';
$string['setting_survey_server_desc'] = 'URL der WSDL Datei auf dem evasys-Server (https://[SERVERNAME]/evasys/services/soapserver-v61.wsdl).<br /><em>Achtung: Wird evasys mit mehreren Servern betrieben (Dual Server Option), muss hier der Backend-Server angegeben werden, auf dem Nutzer, wie Administratoren arbeiten. Das verhindert eine zu hohe Last auf dem Onlineumfragenserver.</em>';
$string['setting_survey_show_popupinfo'] = 'Pop-up Meldung aktiv';
$string['setting_survey_show_popupinfo_desc'] = 'Wenn aktiviert, wird bei jedem Log-in eines Studierenden in Moodle ein Pop-up mit Informationen zu offenen Onlineumfragen (so vorhanden) angezeigt.';
$string['setting_survey_timeout'] = 'Verbindungstimeout';
$string['setting_survey_timeout_desc'] = 'Maximale Antwortzeit (in Sekunden) des evasys-Servers. Falls der evasys-Server innerhalb dieser Zeit nicht antwortet, wird die Anfrage abgebrochen und es werden dem Nutzer keine Umfragen angezeigt.';
$string['setting_survey_user'] = 'evasys SOAP Benutzername';
$string['setting_survey_user_desc'] = 'Benutzername des evasys SOAP Benutzers.';
$string['setting_useridentifier'] = 'Nutzer-Identifikator';
$string['setting_useridentifier_desc'] = 'Wählen Sie, ob die E-Mail-Adresse oder der Anmeldename eines Nutzers als eindeutiger Nutzer-Identifikator verwendet werden soll.';
$string['soap'] = 'SOAP';
$string['surveys_exist'] = 'Offene Evaluationen';
$string['surveys_exist_not'] = 'Keine offenen Evaluationen';
$string['upgrade_notice_2020010900'] = 'Die Version der empfohlenen Evasys SOAP API wurde von Version 51 auf Version 61 erhöht. Im Zuge des Plugin Updates wurden deshalb die Plugin Einstellungen automatisch angepasst.<br />Die Evasys SOAP WSDL URL lautete bisher: {$a->old}<br />Die Evasys SOAP WSDL URL lautet nun: {$a->new}<br />Bitte kontrollieren Sie die automatisch angepasste URL auf Korrektheit.';
$string['zoomsurveylist'] = 'Umfragenliste vergrößern';
