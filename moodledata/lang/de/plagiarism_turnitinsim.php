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
 * Strings for component 'plagiarism_turnitinsim', language 'de', version '4.5'.
 *
 * @package     plagiarism_turnitinsim
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessoptions'] = 'Teilnehmerzugriff';
$string['accessoptions_help'] = 'Teilnehmer/innen können auf den Ähnlichkeitsbericht für ihre Übermittlung zugreifen, nachdem dieser generiert wurde.';
$string['accessstudents'] = 'Teilnehmer/innen erlauben, sich Ähnlichkeitsberichte anzusehen';
$string['addtoindex'] = 'Alle Übermittlungen indexieren';
$string['code'] = 'Code';
$string['connecttest'] = 'Turnitin-Verbindung testen';
$string['connecttestfailed'] = 'Der Verbindungstest ist fehlgeschlagen.';
$string['connecttestsuccess'] = 'Der Verbindungstest war erfolgreich';
$string['dbexport'] = 'Datenbankexport';
$string['dbexporttable'] = 'Exportieren von {$a}-Daten';
$string['defaultsettings'] = 'Standardeinstellungen';
$string['errorenabledfeatures'] = 'Die Liste der aktivierten Funktionen konnte nicht abgerufen werden.';
$string['errorgettingsubmissioninfo'] = 'Beim Versuch, die Abgabeinformation zu erhalten, ist ein Fehler aufgetreten.';
$string['errorprocessingdeletedsubmission'] = 'Diese Abgabe gehört zu einer gelöschten Aufgabe und kann nicht verarbeitet werden.';
$string['errorquizattemptnotfound'] = 'Der Testversuch für diese Abgabe konnte nicht gefunden werden.';
$string['errortoolarge'] = 'Diese Datei wird nicht an Turnitin übermittelt, da sie die zulässige Maximalgröße von {$a} überschreitet.';
$string['eulaaccept'] = 'Ich akzeptiere die Turnitin-EULA.';
$string['eulaaccepted'] = 'Danke, dass Sie die neue Turnitin-EULA akzeptiert haben. Alle zukünftigen Übermittlungen werden nun zur Verarbeitung an Turnitin gesendet.';
$string['eulaalreadyaccepted'] = 'Sie haben die neue Turnitin-EULA bereits akzeptiert.';
$string['euladecline'] = 'Ich lehne die Turnitin-EULA ab.';
$string['euladeclined'] = 'Ihre Übermittlungen werden nicht an Turnitin gesendet, da Sie die Turnitin-Endbenutzer-Lizenzvereinbarung nicht akzeptiert haben.';
$string['eulaheader'] = 'Turnitin-Endbenutzer-Lizenzvereinbarung';
$string['eulalink'] = 'Damit diese Übermittlungen an Turnitin gesendet werden kann, müssen Sie die <a href="{$a}" target="_blank">Turnitin-Endbenutzer-Lizenzvereinbarung</a> akzeptieren.';
$string['eulalinkgeneric'] = 'Wenn zukünftige Übermittlungen an Turnitin gesendet werden sollen, müssen Sie die <a href="{$a}" target="_blank">Turnitin-Endbenutzer-Lizenzvereinbarung</a> akzeptieren.';
$string['eulalinkmodal'] = 'Damit diese Übermittlung an Turnitin gesendet werden kann, müssen Sie die <a href="#" class="eula_link">Turnitin-Endbenutzer-Lizenzvereinbarung</a> akzeptieren.';
$string['eulanotrequired'] = 'Sie müssen die Turnitin-EULA nicht akzeptieren.';
$string['excludebiblio'] = 'Literaturverzeichnis';
$string['excludeoptions'] = 'Aus Ähnlichkeitsberichten ausschließen';
$string['excludeoptions_help'] = 'Ausgewählte Optionen werden nicht als Übereinstimmung in Ähnlichkeitsberichten angezeigt.';
$string['excludequotes'] = 'Zitate';
$string['faultcode'] = 'Fehlercode';
$string['getwebhookfailure:message'] = 'Möglicherweise besteht ein Problem mit dem Webhook, den Sie bei Turnitin für das Plugin zum Prüfen auf Diebstahl von geistigem Eigentum registriert haben. Die geplante Aufgabe zum Einchecken konnte keine Verbindung mit Turnitin herstellen. Bitte überprüfen Sie Ihre Protokolle.';
$string['getwebhookfailure:subject'] = 'Fehler bei der Turnitin-Webhook-Überprüfung';
$string['help_link'] = 'https://help.turnitin.com/integrity/instructor/moodle.htm';
$string['indexoptions'] = 'Indexierung der übermittelten Dokumente';
$string['indexoptions_help'] = 'Indexierte Übermittlungen können in Ähnlichkeitsberichten verglichen werden.';
$string['invalidtablename'] = 'Tabelle {$a} konnte nicht exportiert werden';
$string['line'] = 'Zeile';
$string['message'] = 'Mitteilung';
$string['messageprovider:digital_receipt_instructor'] = 'Digitaler Turnitin-Lehrkraftbeleg';
$string['messageprovider:digital_receipt_student'] = 'Digitaler Turnitin-Teilnehmerbeleg';
$string['messageprovider:get_webhook_failure'] = 'Fehler bei der Turnitin-Webhook-Überprüfung';
$string['messageprovider:new_eula'] = 'Neue Version der Turnitin-EULA';
$string['neweula:message'] = 'Turnitin hat eine neue EULA veröffentlicht. Für weitere Informationen klicken Sie bitte <a href="{$a}">hier</a>.';
$string['neweula:subject'] = 'Neue Turnitin-EULA veröffentlicht';
$string['pluginname'] = 'Turnitin Integrity-Plugin';
$string['pluginsetup'] = 'Einrichtung';
$string['privacy:metadata:plagiarism_turnitinsim_client'] = 'Für eine erfolgreiche Übermittlung an Turnitin müssen bestimmte Benutzerdaten zwischen Moodle und Turnitin ausgetauscht werden. Für weitere Informationen zu Moodle-Plugins und der DSGVO besuchen Sie bitte diese Webseite: https://help.turnitin.com/feedback-studio/moodle/moodle-plugins-and-gdpr.htm';
$string['privacy:metadata:plagiarism_turnitinsim_client:firstname'] = 'Der Vorname des Benutzers wird an Turnitin bei einem Turnitin Viewer-Start gesendet, sodass der Benutzer identifiziert werden kann.';
$string['privacy:metadata:plagiarism_turnitinsim_client:lastname'] = 'Der Nachname des Benutzers wird an Turnitin bei einem Turnitin Viewer-Start gesendet, sodass der Benutzer identifiziert werden kann.';
$string['privacy:metadata:plagiarism_turnitinsim_client:submission_content'] = 'Bitte beachten Sie, dass der Inhalt einer Datei/Übermittlung an Turnitin zur Verarbeitung gesendet wird.';
$string['privacy:metadata:plagiarism_turnitinsim_client:submission_filename'] = 'Der Name der übermittelten Datei wird an Turnitin gesendet und ist damit identifizierbar.';
$string['privacy:metadata:plagiarism_turnitinsim_client:submission_title'] = 'Der Titel der Übermittlung wird an Turnitin gesendet und ist damit identifizierbar.';
$string['privacy:metadata:plagiarism_turnitinsim_sub'] = 'Informationen, die eine Moodle-Übermittlung mit einer Turnitin-Übermittlung verknüpfen.';
$string['privacy:metadata:plagiarism_turnitinsim_sub:identifier'] = 'Ein von Moodle genutzter Hash-Wert, um die übermittelte Datei zu identifizieren.';
$string['privacy:metadata:plagiarism_turnitinsim_sub:itemid'] = 'ID zur Identifizierung der Übermittlung für den relevanten Modultyp.';
$string['privacy:metadata:plagiarism_turnitinsim_sub:overallscore'] = 'Die Ähnlichkeitsbewertung insgesamt für die Übermittlung.';
$string['privacy:metadata:plagiarism_turnitinsim_sub:submittedtime'] = 'Zeitstempel für das Absenden der Übermittlung des Benutzers an Turnitin.';
$string['privacy:metadata:plagiarism_turnitinsim_sub:turnitinid'] = 'Die von Turnitin genutzte ID, um die Übermittlung zu referenzieren.';
$string['privacy:metadata:plagiarism_turnitinsim_sub:userid'] = 'Die ID des Benutzers, der eine Übermittlung vorgenommen hat.';
$string['privacy:metadata:plagiarism_turnitinsim_users'] = 'Informationen, die einen Moodle-Benutzer mit einem Turnitin-Benutzer verknüpfen.';
$string['privacy:metadata:plagiarism_turnitinsim_users:lasteulaaccepted'] = 'Die letzte Version der Turnitin-EULA, die vom Benutzer akzeptiert wurde.';
$string['privacy:metadata:plagiarism_turnitinsim_users:lasteulaacceptedlang'] = 'Die Sprache, in der der Benutzer die Turnitin-EULA zuletzt akzeptiert hat.';
$string['privacy:metadata:plagiarism_turnitinsim_users:lasteulaacceptedtime'] = 'Ein Zeitstempel für das letzte Akzeptieren der Turnitin-EULA durch den Benutzer.';
$string['privacy:metadata:plagiarism_turnitinsim_users:turnitinid'] = 'Die von Turnitin genutzte ID, um den Benutzer zu referenzieren.';
$string['privacy:metadata:plagiarism_turnitinsim_users:userid'] = 'Die ID des Benutzers, der eine Übermittlung vorgenommen hat.';
$string['queuedrafts'] = 'Eingereichte Entwürfe verarbeiten';
$string['queuedrafts_help'] = 'Bitte beachten Sie, dass eingereichte Entwürfe nicht zur Überprüfung in Turnitin indexiert werden.';
$string['receiptsinstructor:message'] = 'Eine Übermittlung mit dem Titel <strong>{$a->submission_title}</strong> an das Modul <strong>{$a->module_name}</strong> im Kurs <strong>{$a->course_fullname}</strong> wurde an Turnitin gesendet.<br /><br />Übermittlungs-ID: <strong>{$a->submission_id}</strong><br />Übermittlungsdatum: <strong>{$a->submission_date}</strong>';
$string['receiptsinstructor:subject'] = 'An Turnitin gesendete Übermittlung';
$string['receiptstudent:message'] = 'Sehr geehrte(r) {$a->firstname} {$a->lastname},<br /><br />Ihre Datei <strong>{$a->submission_title}</strong>, die Sie an das Modul <strong>{$a->module_name}</strong> im Kurs <strong>{$a->course_fullname}</strong> übermittelt haben, wurde am <strong>{$a->submission_date}</strong> erfolgreich an Turnitin übertragen. Ihre Übermittlungs-ID lautet <strong>{$a->submission_id}</strong>.<br /><br />Vielen Dank, dass Sie Turnitin nutzen.<br /><br />Das Turnitin Team';
$string['receiptstudent:subject'] = 'Dies ist Ihr digitaler Beleg von Turnitin.';
$string['reportgen0'] = 'Sofort';
$string['reportgen1'] = 'Sofort und neu generieren am Fälligkeitsdatum';
$string['reportgen2'] = 'Fälligkeitsdatum';
$string['reportgenoptions'] = 'Ähnlichkeitsberichte generieren';
$string['reportgenoptions_help'] = '<strong>Sofort:</strong> Ähnlichkeitsberichte werden sofort nach der Übermittlung der Datei generiert.<br/><br/><strong>Am Fälligkeitsdatum:</strong> Ähnlichkeitsberichte werden nur am Fälligkeitsdatum der Aufgabe generiert.<br/><br/><strong>Sofort und am Fälligkeitsdatum:</strong> Ein Ähnlichkeitsbericht wird sofort nach der Übermittlung der Datei generiert. Am Fälligkeitsdatum der Aufgabe wird der Ähnlichkeitsbericht erneut generiert. Dies ist sinnvoll, wenn festgestellt werden soll, ob in einem Kurs geheime Absprachen stattfanden.';
$string['resubmittoturnitin'] = 'Erneut an Turnitin übermitteln';
$string['savesuccess'] = 'Die Änderungen wurden gespeichert';
$string['settingslearnmore'] = 'Weitere Informationen zu Turnitin-Einstellungen';
$string['submissiondisplayerror:cannotextracttext'] = 'Bericht nicht verfügbar';
$string['submissiondisplayerror:cannotextracttext_help'] = 'Für diese Übermittlung konnte kein Bericht erstellt werden. Möglicherweise kann dieser Dateityp keinen Bericht erzeugen oder es ist nicht genug Text vorhanden.';
$string['submissiondisplayerror:corruptfile'] = 'Datei beschädigt';
$string['submissiondisplayerror:corruptfile_help'] = 'Die hochgeladene Datei ist möglicherweise beschädigt.';
$string['submissiondisplayerror:eulanotaccepted'] = 'EULA nicht akzeptiert';
$string['submissiondisplayerror:eulanotaccepted_help'] = 'Die Turnitin-EULA muss vom Einreichenden akzeptiert werden, bevor die Übermittlung auf Ähnlichkeit überprüft werden kann.';
$string['submissiondisplayerror:filelocked'] = 'Datei gesperrt';
$string['submissiondisplayerror:filelocked_help'] = 'Die hochgeladene Datei erfordert zum Öffnen ein Passwort.';
$string['submissiondisplayerror:generic'] = 'Datei wurde nicht an Turnitin gesendet';
$string['submissiondisplayerror:generic_help'] = 'Diese Datei wurde nicht an Turnitin übermittelt. Bitte wenden Sie sich an Ihren Systemadministrator.';
$string['submissiondisplayerror:notsent'] = 'Datei wurde nicht an Turnitin gesendet';
$string['submissiondisplayerror:notsent_help'] = 'Diese Datei wurde nicht an Turnitin übermittelt, da Turnitin zum Zeitpunkt der Übermittlung nicht aktiviert war. Bitte ändern Sie Ihre Übermittlung, wenn sie an Turnitin gesendet werden soll, oder laden Sie sie erneut hoch.';
$string['submissiondisplayerror:processingerror'] = 'Fehler bei der Verarbeitung';
$string['submissiondisplayerror:processingerror_help'] = 'Beim der Verarbeitung der Übermittlungen ist ein unspezifischer Fehler aufgetreten.';
$string['submissiondisplayerror:toolarge'] = 'Datei ist zu groß';
$string['submissiondisplayerror:toolarge_help'] = 'Diese Datei ist zu groß, um an Turnitin gesendet zu werden. Zum Durchführen der Plagiatsprüfung senden Sie bitte eine Datei mit weniger als 100 MB Größe.';
$string['submissiondisplayerror:toolittletext'] = 'Nicht genug Text';
$string['submissiondisplayerror:toolittletext_help'] = 'Die Übermittlung enthält nicht genug Text, um einen Ähnlichkeitsbericht zu generieren (eine Übermittlung muss mindestens 20 Wörter enthalten).';
$string['submissiondisplayerror:toomanypages'] = 'Zu viele Seiten';
$string['submissiondisplayerror:toomanypages_help'] = 'Die Übermittlung hat zu viele Seiten, um einen Ähnlichkeitsbericht zu generieren (eine Übermittlung darf maximal 400 Seiten enthalten).';
$string['submissiondisplayerror:toomuchtext'] = 'Zu viel Text';
$string['submissiondisplayerror:toomuchtext_help'] = 'Die Übermittlung enthält zu viel Text, um einen Ähnlichkeitsbericht zu generieren (nachdem der extrahierte Text in UTF-8 konvertiert wurde, darf die Übermittlung weniger als {$a} Text enthalten).';
$string['submissiondisplayerror:unknown'] = 'Fehler bei Ihrer Übermittlung';
$string['submissiondisplayerror:unknown_help'] = 'Bei Ihrer Übermittlung ist ein unbekannter Fehler aufgetreten. Die Datei wurde nicht an Turnitin übermittelt. Bitte wenden Sie sich an Ihren Systemadministrator.';
$string['submissiondisplayerror:unsupportedfiletype'] = 'Nicht unterstützter Dateityp';
$string['submissiondisplayerror:unsupportedfiletype_help'] = 'Der hochgeladene Dateityp wird nicht unterstützt.';
$string['submissiondisplaystatus:awaitingeula'] = 'Warte auf EULA';
$string['submissiondisplaystatus:cannotextracttext'] = 'Bericht nicht verfügbar';
$string['submissiondisplaystatus:error'] = 'Fehler';
$string['submissiondisplaystatus:notsent'] = 'Nicht gesendet';
$string['submissiondisplaystatus:pending'] = 'Ausstehend';
$string['submissiondisplaystatus:queued'] = 'In der Warteschlange';
$string['submissiondisplaystatus:unknown'] = 'Unbekannter Fehler';
$string['taskadminupdate'] = 'Lokale Konfiguration des Turnitin Integrity-Plugins aktualisieren';
$string['taskgetreportscores'] = 'Berichtbewertungen für Turnitin Integrity-Plugin abrufen';
$string['taskoutputenabledfeaturesnotretrieved'] = 'Turnitin-Funktionen konnten nicht abgerufen werden.';
$string['taskoutputenabledfeaturesretrievalfailure'] = 'Aufruf der Turnitin-Funktionen fehlgeschlagen';
$string['taskoutputenabledfeaturesretrieved'] = 'Turnitin-Funktionen abgerufen';
$string['taskoutputfailedconnection'] = 'Beim Verbinden mit der Turnitin-API ist ein Problem aufgetreten.';
$string['taskoutputfailedcvlaunchurl'] = 'Fehler beim Abfragen einer Turnitin Viewer-URL von der Turnitin-API für Übermittlungs-ID: {$a}';
$string['taskoutputfailedreportrequest'] = 'Fehler beim Anfordern einer Echtheitsbericht-Generierung von der Turnitin-API für Übermittlungs-ID: {$a}';
$string['taskoutputfailedscorerequest'] = 'Fehler beim Anfordern eines Echtheitsbericht-Wertes von der Turnitin-API für Übermittlungs-ID: {$a}';
$string['taskoutputfailedupload'] = 'Fehler beim Hochladen einer Datei in die Turnitin-API für Übermittlungs-ID: {$a}';
$string['taskoutputfileuploaded'] = 'Datei zu Turnitin-Übermittlung hochgeladen: {$a}';
$string['taskoutputlatesteulanotretrieved'] = 'Die neueste EULA-Version konnte nicht abgerufen werden.';
$string['taskoutputlatesteularetrievalfailure'] = 'Die neueste EULA-Version konnte nicht abgerufen werden.';
$string['taskoutputlatesteularetrieved'] = 'EULA-Version {$a} wurde abgerufen.';
$string['taskoutputpluginnotconfigured'] = 'Die Aufgabe für {$a} konnte nicht ausgeführt werden, da das Turnitin Integrity-Plugin nicht konfiguriert ist. <br/>Bitte rufen Sie die Plugin-Konfigurationsseite in „Site Administration“ auf, um Ihre Turnitin-API-Anmeldeinformationen einzugeben.';
$string['taskoutputsubmissioncreated'] = 'In Turnitin erstellte Übermittlung: {$a}';
$string['taskoutputsubmissionnotcreatedeula'] = 'Die Übermittlung konnte nicht in Turnitin erstellt werden, da der Einreichende die EULA nicht akzeptiert hat.';
$string['taskoutputsubmissionnotcreatedgeneral'] = 'Die Übermittlung konnte nicht in Turnitin erstellt werden.';
$string['taskoutputwebhookcreated'] = 'Webhook erstellt. Turnitin sendet Rückrufe an {$a}';
$string['taskoutputwebhookcreationfailure'] = 'Anfrage zur Webhook-Erstellung fehlgeschlagen. Bitte überprüfen Sie Ihre Protokolle.';
$string['taskoutputwebhookdeleted'] = 'Webhook {$a} wurde gelöscht.';
$string['taskoutputwebhookdeletefailure'] = 'Webhook konnte nicht gelöscht werden. Bitte überprüfen Sie Ihre Protokolle.';
$string['taskoutputwebhooknotcreated'] = 'Webhook konnte nicht erstellt werden. Bitte überprüfen Sie Ihre Protokolle.';
$string['taskoutputwebhooknotdeleted'] = 'Webhook {$a} konnte nicht gelöscht werden.';
$string['taskoutputwebhooknotretrieved'] = 'Webhook {$a} konnte nicht abgerufen werden. Ein neuer Webhook wird erstellt.';
$string['taskoutputwebhookretrievalfailure'] = 'Abruf des Webhooks {$a} fehlgeschlagen.';
$string['taskoutputwebhookretrieved'] = 'Webhook {$a} abgerufen. Webhook ist aktiv.';
$string['tasksendqueuedsubmissions'] = 'Dateien in Warteschlange vom Turnitin Integrity-Plugin senden';
$string['turnitinapikey'] = 'Turnitin-API-Schlüssel';
$string['turnitinapiurl'] = 'Turnitin-API-URL';
$string['turnitinconfig'] = 'Plugin-Konfiguration';
$string['turnitinenablelogging'] = 'Diagnosemodus aktivieren';
$string['turnitinenableremotelogging'] = 'Logdaten an Turnitin übermitteln';
$string['turnitinenableremotelogging_help'] = 'Logs werden automatisch an Turnitin für Diagnosezwecke übermittelt. Es werden keine personenbezogene Daten übermittelt. Wir empfehlen, dass diese Einstellung aktiviert bleibt, sodass wir bei Bedarf schnell unterstützen können. Logdaten werden auch in Ihrer Moodle-Umgebung gespeichert und können manuell an Turnitin übermittelt werden.';
$string['turnitinfeatures'] = 'Turnitin Integrity-Funktionen';
$string['turnitinfeatures::eulanotrequired'] = 'Benutzer müssen die Turnitin-EULA nicht akzeptieren.';
$string['turnitinfeatures::eularequired'] = 'Alle Benutzer müssen die Turnitin-EULA akzeptieren.';
$string['turnitinfeatures::header'] = 'Turnitin Integrity-Funktionen';
$string['turnitinfeatures::moreinfo'] = 'Für weitere Informationen zu den aktivierten Turnitin-Funktionen und verfügbaren Paketen rufen Sie bitte diese Website auf: <a href="http://www.turnitin.com" target="_blank">http://www.turnitin.com</a>.';
$string['turnitinfeatures::repositories'] = 'Abgeglichene Repositorys:';
$string['turnitinfeatures::viewoptions'] = 'Turnitin Viewer-Optionen:';
$string['turnitinhideidentity'] = 'Identität der Teilnehmer/innen vor Turnitin verbergen';
$string['turnitinmodenabled'] = 'Turnitin Integrity aktivieren für {$a}';
$string['turnitinpluginenabled'] = 'Turnitin aktivieren';
$string['turnitinpluginsettings'] = 'Einstellungen des Turnitin Integrity-Plugins';
$string['turnitinsim'] = 'Turnitin Integrity-Plugin';
$string['turnitinsim:enable'] = 'Turnitin Integrity aktivieren';
$string['turnitinsim:viewfullreport'] = 'Echtheitsbericht anzeigen';
$string['turnitinsiminternet'] = 'Mit Internetinhalten abgleichen';
$string['turnitinsimprivate'] = 'Mit privaten Inhalten abgleichen';
$string['turnitinviewermatchsubinfo'] = 'Lehrkräften in Ihrem Institut das Anzeigen von Übermittlungsinformationen für interne Übereinstimmungen erlauben';
$string['turnitinviewersavechanges'] = 'Änderungen in der Anzeige speichern';
$string['turnitinviewerviewfullsource'] = 'Lehrkräften in Ihrem Institut das Anzeigen des gesamten Textes von Übermittlungen für interne Übereinstimmungen erlauben';
$string['viewapilog'] = 'Anzeigen von API-Protokollen von {$a}';
$string['viewerpermissionferpa'] = 'Die folgenden Berechtigungen haben Einfluss darauf, wie Daten in Ihrem Institut ausgetauscht werden können. Die Verantwortung für diese Daten liegt ausschließlich bei Ihrem Institut. Wenn Sie diese Berechtigungen festlegen, müssen Sie daher sicherstellen, dass sie den Richtlinien Ihres Instituts in Bezug auf Teilnehmerdatensätze entsprechen.';
$string['viewerpermissionoptions'] = 'Viewer-Berechtigungen';
$string['viewlogs'] = 'Protokolle';
$string['webhook_description'] = 'Webhook für {$a}';
$string['webhookincorrectsignature'] = 'Webhook-Rückruf wegen falscher Signatur fehlgeschlagen';
