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
 * Strings for component 'plagiarism_turnitin', language 'de', version '3.10'.
 *
 * @package     plagiarism_turnitin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allownonor'] = 'Jeden Dateityp zur Übermittlung zulassen?';
$string['allownonor_help'] = 'Mit dieser Einstellung können alle Dateitypen übermitteln werden. Ist diese Option auf &#34;Ja&#34; gesetzt, werden Übermittlungen ggf. auf ihre Echtheit überprüft und zum Download bereitgestellt. Außerdem stehen wenn möglich GradeMark-Feedbacktools zur Verfügung.';
$string['anonblindmarkingnote'] = 'Hinweis: Die separate Turnitin-Einstellung für anonyme Benotung wurde entfernt. Turnitin legt die Einstellung für anonymes Benoten anhand der Moodle-Einstellung für Blindbewertung fest.';
$string['assigngeterror'] = 'Daten für turnitintooltwo konnten nicht aufgerufen werden.';
$string['attachrubric'] = 'Dieser Aufgabe eine Rubrik anhängen';
$string['attachrubricnote'] = 'Hinweis: Studenten können angehängte Rubriken und deren Inhalt vor dem Übermitteln aufrufen.';
$string['because'] = 'Ursache: Ein Administrator hat die ausstehende Aufgabe aus der Verarbeitungswarteschlange gelöscht und die Übermittlung an Turnitin abgebrochen.<br /><strong>Die Datei ist weiterhin in Moodle vorhanden; wenden Sie sich an die zuständige Lehrkraft.</strong><br />Fehlercodes siehe unten:';
$string['changerubricwarning'] = 'Durch das Ändern oder Entfernen einer Rubrik werden alle vorhandenen Rubrikbewertungen der Arbeiten zu dieser Aufgabe entfernt, einschließlich ausgefüllter Bewertungskarten. Gesamtnoten für zuvor bewertete Arbeiten bleiben erhalten.';
$string['checkagainstnote'] = 'Hinweis: Wenn Sie nicht für mindestens eine der folgenden Abgleichoptionen „Ja“ auswählen, wird KEIN Echtheitsbericht generiert.';
$string['classupdateerror'] = 'Daten des Turnitin-Kurses konnten nicht aktualisiert werden.';
$string['closebutton'] = 'Schließen';
$string['code'] = 'Code';
$string['compareinstitution'] = 'Eingereichte Dateien mit den an dieser Institution übermittelten Arbeiten vergleichen';
$string['config'] = 'Konfiguration';
$string['configupdated'] = 'Konfiguration aktualisiert';
$string['configureerror'] = 'Sie müssen dieses Modul vollständig als Administrator konfigurieren, um es in einem Kurs benutzen zu können. Wenden Sie sich an Ihren Moodle-Administrator.';
$string['connecttesterror'] = 'Bei der Verbindung mit Turnitin ist ein Fehler aufgetreten, siehe Fehlermeldung:<br />';
$string['course'] = 'Kurs';
$string['coursegeterror'] = 'Kursdaten konnten nicht abgerufen werden.';
$string['cronsubmittedsuccessfully'] = 'Übermittlung: {$a->title} (TII-ID: {$a->submissionid}) für die Aufgabe {$a->assignmentname} in Kurs {$a->coursename} wurde erfolgreich an Turnitin übermittelt.';
$string['defaultinserterror'] = 'Beim Einfügen einer Standardwerteinstellung in die Datenbank ist ein Fehler eingetreten.';
$string['defaults'] = 'Standardeinstellungen';
$string['defaultsdesc'] = 'Die folgenden Einstellungen bilden den Standard, wenn Turnitin mit einem Aktivitätsmodul aktiviert ist.';
$string['defaultupdated'] = 'Turnitin-Standards aktualisiert';
$string['defaultupdateerror'] = 'Beim Aktualisieren einer Standardwerteinstellung in der Datenbank ist ein Fehler eingetreten.';
$string['deleteconfirm'] = 'Möchten Sie diese Übermittlung wirklich löschen? \\n\\nDieser Vorgang kann nicht rückgängig gemacht werden.';
$string['deleted'] = 'Gelöscht';
$string['deletesubmission'] = 'Übermittlung löschen';
$string['digital_receipt_subject'] = 'Dies ist Ihr digitaler Beleg von Turnitin.';
$string['digitalreceipt'] = 'Digitaler Beleg';
$string['draftsubmit'] = 'Wann muss die Datei an Turnitin übermittelt werden?';
$string['erater'] = 'e-rater-Grammatikprüfung aktivieren';
$string['erater_categories'] = 'e-rater-Kategorien';
$string['erater_dictionary'] = 'e-rater-Wörterbuch';
$string['erater_dictionary_en'] = 'Britisches und US-amerikanisches Englisch-Lexikon';
$string['erater_dictionary_engb'] = 'Britisches Englisch-Lexikon';
$string['erater_dictionary_enus'] = 'US-amerikanisches Englisch-Lexikon';
$string['erater_grammar'] = 'Grammatik';
$string['erater_handbook'] = 'ETS&copy;-Handbuch';
$string['erater_handbook_advanced'] = 'Erweitert';
$string['erater_handbook_elementary'] = 'Grundschule';
$string['erater_handbook_highschool'] = 'Oberstufe';
$string['erater_handbook_learners'] = 'Englisch Lernende';
$string['erater_handbook_middleschool'] = 'Mittelstufe';
$string['erater_mechanics'] = 'Funktionsweise';
$string['erater_spelling'] = 'Rechtschreibung';
$string['erater_style'] = 'Stil';
$string['erater_usage'] = 'Gebrauch';
$string['errorcode0'] = 'Diese Datei wurde nicht an Turnitin übermittelt; wenden Sie sich an Ihren Systemadministrator.';
$string['errorcode1'] = 'Diese Datei wurde nicht an Turnitin gesendet, da sie nicht genügend Inhalt zum Erstellen eines Echtheitsberichts enthält.';
$string['errorcode2'] = 'Diese Datei wird nicht an Turnitin übermittelt, da sie die maximal zulässige Größe von {$a} überschreitet.';
$string['errorcode3'] = 'Diese Datei wurde nicht an Turnitin übermittelt, da der Benutzer die Endbenutzer-Lizenzvereinbarung nicht akzeptiert hat.';
$string['errorcode4'] = 'Sie müssen einen unterstützten Dateityp für diese Aufgabe hochladen. Folgende Dateitypen werden akzeptiert: DOC, DOCX, PPT, PPTX, PPS, PPSX, PDF, TXT, HTM, HTML, HWP, ODT, WPD, PS und RTF.';
$string['errorcode5'] = 'Diese Datei wurde nicht an Turnitin übermittelt, da beim Erstellen des Moduls in Turnitin ein Problem aufgetreten ist, das Übermittlungen verhindert. Weitere Informationen finden Sie in Ihren API-Protokollen.';
$string['errorcode6'] = 'Diese Datei wurde nicht an Turnitin übermittelt, da beim Bearbeiten der Moduleinstellungen in Turnitin ein Problem aufgetreten ist, das Übermittlungen verhindert. Weitere Informationen finden Sie in Ihren API-Protokollen.';
$string['errorcode7'] = 'Diese Datei wurde nicht an Turnitin übermittelt, da beim Erstellen des Benutzers in Turnitin ein Problem aufgetreten ist, das Übermittlungen verhindert. Weitere Informationen finden Sie in Ihren API-Protokollen.';
$string['errorcode8'] = 'Diese Datei wurde nicht an Turnitin übermittelt, da beim Erstellen der temporären Datei ein Problem aufgetreten ist. Die wahrscheinlichste Ursache ist ein ungültiger Dateiname. Benennen Sie die Datei um, und laden Sie sie mit der Option zum Bearbeiten von Übermittlungen erneut hoch.';
$string['errorcode9'] = 'Die Datei kann nicht übermittelt werden, da im Dateipool kein zugänglicher Inhalt für eine Übermittlung vorhanden ist.';
$string['errors'] = 'Fehler';
$string['excludebiblio'] = 'Bibliografie ausschließen';
$string['excludebiblio_help'] = 'Literaturlisten können auch eingeschlossen bleiben und beim Betrachten des Ähnlichkeitsberichts ausgeblendet werden. Diese Einstellung kann mehr nicht geändert werden, sobald die erste Datei übertragen wurde.';
$string['excludepercent'] = 'Prozent';
$string['excludequoted'] = 'Zitiertes Material ausschließen';
$string['excludequoted_help'] = 'Zitiertes Material kann auch eingeschlossen bleiben und beim Betrachten des Ähnlichkeitsberichts ausgeblendet werden. Diese Einstellung kann mehr nicht geändert werden, sobald die erste Datei übertragen wurde.';
$string['excludevalue'] = 'Geringfügige Übereinstimmungen ausschließen';
$string['excludewords'] = 'Wörter';
$string['faultcode'] = 'Fehlercode';
$string['filedoesnotexist'] = 'Datei wurde gelöscht';
$string['genduedate'] = 'Berichte am Fälligkeitsdatum erstellen (erneute Übermittlungen sind bis zum Fälligkeitsdatum zulässig)';
$string['genimmediately1'] = 'Berichte sofort erstellen (erneute Übermittlungen sind nicht zulässig)';
$string['genimmediately2'] = 'Berichte sofort erstellen (erneute Übermittlungen sind bis zum Fälligkeitsdatum zulässig)';
$string['grademark'] = 'GradeMark';
$string['id'] = 'ID';
$string['institutionalrepository'] = 'Institutions-Repository (wenn vorhanden)';
$string['internetcheck'] = 'Abgleich mit dem Internet';
$string['journalcheck'] = 'Abgleich mit Zeitungen,<br />Periodika und anderen Publikationen';
$string['launchpeermarkmanager'] = 'PeerMark-Manager starten';
$string['launchpeermarkreviews'] = 'PeerMark-Reviews starten';
$string['launchquickmarkmanager'] = 'QuickMark-Manager starten';
$string['launchrubricmanager'] = 'Rubrikmanager starten';
$string['launchrubricview'] = 'Die für das Markieren verwendete Rubik anzeigen';
$string['line'] = 'Linie';
$string['loadingdv'] = 'Turnitin-Dokumentenansicht wird geladen...';
$string['locked_message'] = 'Gesperrte Nachricht';
$string['locked_message_default'] = 'Diese Einstellung ist auf Websiteebene gesperrt.';
$string['locked_message_help'] = 'Wenn Einstellungen gesperrt sind, wird in dieser Nachricht der Grund dafür angegeben.';
$string['message'] = 'Nachricht';
$string['messageprovider:submission'] = 'Turnitin-Plugin zur Plagiarismuserkennung – Benachrichtigungen zum digitalen Beleg';
$string['module'] = 'Module';
$string['norepository'] = 'Kein Repository';
$string['norubric'] = 'Keine Rubrik';
$string['noscriptula'] = '(Da Sie Javascript nicht aktiviert haben, müssen Sie diese Seite manuell aktualisieren, ehe Sie nach dem Akzeptieren der Nutzungsbedingungen von Turnitin eine Übermittlung vornehmen können)';
$string['notavailableyet'] = 'Nicht verfügbar';
$string['notorcapable'] = 'Für diese Datei lässt sich kein Echtheitsbericht erstellen.';
$string['otherrubric'] = 'Rubrik einer anderen Lehrkraft verwenden';
$string['pending'] = 'Ausstehend';
$string['pluginname'] = 'Turnitin-Plugin zur Plagiarismuserkennung';
$string['pp_createsubmissionerror'] = 'Beim Versuch, eine Übermittlung zu Turnitin einzurichten, ist ein Fehler aufgetreten.';
$string['pp_digital_receipt_message'] = 'Sehr geehrte/r {$a->firstname} {$a->lastname},<br /><br />Sie haben die Datei <strong>{$a->submission_title}</strong> für die Aufgabe <strong>{$a->assignment_name}{$a->assignment_part}</strong> in Kurs <strong>{$a->course_fullname}</strong> am <strong>{$a->submission_date}</strong> erfolgreich hochgeladen. Ihre Übermittlungs-ID lautet <strong>{$a->submission_id}</strong>. Ihren vollständigen digitalen Beleg können Sie über die Schaltfläche „Drucken/Download“ in der Dokumentenansicht anzeigen und drucken.<br /><br />Vielen Dank, dass Sie Turnitin verwenden,<br /><br />das Turnitin-Team';
$string['pp_submission_error'] = 'Turnitin hat einen Fehler für Ihre Übermittlung zurückgegeben:';
$string['pp_updatesubmissionerror'] = 'Beim Versuch, Ihre Übermittlung zu Turnitin erneut vorzunehmen, ist ein Fehler aufgetreten.';
$string['ppcronsubmissionlimitreached'] = 'Von diesem Cron-Ausdruck werden keine weiteren Übermittlungen mehr an Turnitin gesendet, da nur {$a} pro Ausführung verarbeitet werden.';
$string['pperrorsdesc'] = 'Beim Versuch, die folgenden Dateien bei Turnitin hochzuladen, ist ein Problem aufgetreten. Wählen Sie für eine erneute Übermittlung die gewünschten Dateien aus, und klicken Sie auf die Schaltfläche „Erneut übermitteln“. Diese Dateien werden dann bei der nächsten Cron-Ausführung verarbeitet.';
$string['pperrorsfail'] = 'Bei einigen der ausgewählten Dateien ist ein Problem aufgetreten. Für diese Dateien konnte kein neues Cron-Ereignis erstellt werden.';
$string['pperrorssuccess'] = 'Die ausgewählten Dateien wurden erneut übermittelt und werden von Cron verarbeitet.';
$string['ppeventsfailedconnection'] = 'In dieser Cron-Ausführung werden vom Turnitin-Plugin zur Plagiarismuserkennung keine Ereignisse verarbeitet, da keine Verbindung mit Turnitin hergestellt werden kann.';
$string['ppqueuesize'] = 'Anzahl der Ereignisse in der Ereigniswarteschlange des Plugin zur Plagiarismuserkennung';
$string['ppsubmissionerrorseelogs'] = 'Diese Datei wurde nicht an Turnitin übermittelt; wenden Sie sich an Ihren Systemadministrator.';
$string['ppsubmissionerrorstudent'] = 'Diese Datei wurde nicht an Turnitin übermittelt, für zusätzliche Details kontaktieren Sie bitte Ihren Tutor';
$string['reportgenspeed'] = 'Geschwindigkeit beim Erstellen des Berichts';
$string['resubmitselected'] = 'Ausgewählte Dateien erneut übermitteln';
$string['resubmitting'] = 'Wird erneut übermittelt...';
$string['resubmittoturnitin'] = 'Erneut an Turnitin übermitteln';
$string['saveusage'] = 'Datenanzeige sichern';
$string['semptytable'] = 'Keine Ergebnisse vorhanden.';
$string['sharedrubric'] = 'Freigegebene Rubrik';
$string['showusage'] = 'Datenspeicher anzeigen';
$string['similarity'] = 'Ähnlichkeit';
$string['spapercheck'] = 'Abgleich mit vorhandenen Studentenarbeiten';
$string['standardrepository'] = 'Standard-Repository';
$string['student'] = 'Student';
$string['student_notread'] = 'Der Student hat die Arbeit nicht aufgerufen.';
$string['student_read'] = 'Der Student hat die Arbeit aufgerufen über:';
$string['studentreports'] = 'Studenten den Echtheitsbericht anzeigen';
$string['studentreports_help'] = 'Ermöglicht Studenten das Anzeigen von Turnitin-Echtheitsberichten. Wenn Sie die Option "Ja" wählen, können Studenten den von Turnitin erstellten Echtheitsbericht ansehen.';
$string['submitondraft'] = 'Datei beim ersten Hochladen übermitteln';
$string['submitonfinal'] = 'Datei übermitteln, wenn der Student sie zum Markieren sendet.';
$string['submitpapersto'] = 'Studentenarbeiten ablegen';
$string['submitpapersto_help'] = 'Mit dieser Einstellung können Lehrkräfte festlegen, ob Arbeiten in einem Turnitin-Repository für Studentenarbeiten gespeichert werden. Der Vorteil einer Übermittlung von Arbeiten das Studentenarbeits-Repository besteht darin, dass die zu einer Aufgabe übermittelten Studentenarbeiten mit den Arbeiten von Studenten&#39; Ihrer aktuellen sowie früheren Kurse abgeglichen werden. Wenn Sie die Option &#34;Kein Repository&#34; wählen, werden die Arbeiten Ihrer Studenten&#39; nicht im Studentenarbeits-Repository von Turnitin gespeichert.';
$string['tii_submission_failure'] = 'Weitere Informationen erhalten Sie von Ihrem Tutor oder dem Systemadministrator.';
$string['tiiassignmentgeterror'] = 'Beim Versuch, eine Aufgabe von Turnitin abzurufen, ist ein Fehler aufgetreten.';
$string['tiiexplain'] = 'Turnitin ist ein kommerzielles Produkt, und Sie benötigen ein zahlungspflichtiges Abonnement, um diesen Dienst nutzen zu können. Weitere Informationen finden Sie unter <a href=http://docs.moodle.org/en/Turnitin_administration>http://docs.moodle.org/en/Turnitin_administration</a>.';
$string['tiisubmissiongeterror'] = 'Beim Versuch, eine Übermittlung vom Turnitin zu erhalten, ist ein Fehler aufgetreten.';
$string['tiisubmissionsgeterror'] = 'Beim Versuch, von Turnitin Übermittlungen zu dieser Aufgabe abzurufen, ist ein Fehler aufgetreten.';
$string['transmatch'] = 'Übersetzte Übereinstimmung';
$string['turnitin'] = 'Turnitin';
$string['turnitin:enable'] = 'Turnitin aktivieren';
$string['turnitin:viewfullreport'] = 'Echtheitsbericht anzeigen';
$string['turnitinconfig'] = 'Konfiguration für das Turnitin-Plugin gegen Plagiarismus';
$string['turnitindefaults'] = 'Standardeinstellungen für das Turnitin-Plugin zur Plagiarismuserkennung';
$string['turnitindeletionerror'] = 'Die Löschung der Turnitin-Übermittlung ist fehlgeschlagen. Die lokale Moodle-Kopie wurde entfernt, die Übermittlung bei Turnitin konnte jedoch nicht gelöscht werden.';
$string['turnitinid'] = 'Turnitin-ID';
$string['turnitinpluginsettings'] = 'Einstellungen für das Turnitin-Plugin zur Plagiarismuserkennung';
$string['turnitinppulapost'] = 'Ihre Datei wurde nicht an Turnitin übermittelt. Klicken Sie hier, um unsere EULA zu akzeptieren.';
$string['turnitinppulapre'] = 'Vor der Übermittung einer Datei an Turnitin müssen Sie unsere EULA (Endbenutzer-Lizenzvereinbarung) akzeptieren. Wenn Sie die EULA nicht akzeptieren, wird Ihre Datei nur an Moodle übermittelt. Klicken Sie zum Akzeptieren hier.';
$string['turnitinrefreshingsubmissions'] = 'Übermittlungen werden aktualisiert...';
$string['turnitinrefreshsubmissions'] = 'Übermittlungen aktualisieren';
$string['turnitinstatus'] = 'Turnitin-Status';
$string['turnitintoolofflineerror'] = 'Es ist ein vorübergehendes Problem aufgetreten. Bitte versuchen Sie es später erneut.';
$string['useturnitin'] = 'Turnitin aktivieren';
$string['useturnitin_mod'] = 'Turnitin aktivieren für {$a}';
