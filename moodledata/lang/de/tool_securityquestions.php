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
 * Strings for component 'tool_securityquestions', language 'de', version '4.5'.
 *
 * @package     tool_securityquestions
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answerquestionspagestring'] = 'Überprüfung der Sicherheitsfrage erforderlich';
$string['badconfigload'] = 'Vorlagenkonfigurationsdatei kann nicht geladen werden. Überprüfen Sie, ob die Variablen korrekt sind und sich diese Vorlage im Vorlagenordner befindet. -';
$string['configloc'] = 'am Ort:';
$string['configpath'] = '/config_policies/{$a}.php';
$string['forcedconfig'] = 'Die Einstellungen sind schreibgeschützt, die Konfiguration wird durch die Vorlagendatei erzwungen:';
$string['formaddquestion'] = 'Frage hinzufügen';
$string['formalreadyanswered'] = 'Fragen mit gesetzten Antworten';
$string['formanswerfailed'] = 'Die Antworten stimmen nicht mit den gespeicherten Antworten überein.';
$string['formanswerquestion'] = 'Geben Sie eine Antwort auf die Frage {$a} ein:';
$string['formclearresponses'] = 'Nutzerantworten löschen:';
$string['formclearresponsesdesc'] = 'Geben Sie den Nutzernamen oder die E-Mail-Adresse ein, um die Antworten für eine Person zu löschen.';
$string['formclearresponsestable'] = 'Antworten löschen';
$string['formcurrentquestions'] = 'Aktuelle Fragen: {$a}';
$string['formdeleteresponse'] = 'Antwort löschen';
$string['formdeprecate'] = 'Frage als veraltet markieren';
$string['formdeprecateentry'] = 'Geben Sie eine Frage-ID ein, die als veraltet markiert werden soll:';
$string['formdeprecatenotfound'] = 'Frage existiert nicht';
$string['formduplicateresponse'] = 'Sie dürfen eine Frage nicht zweimal beantworten.';
$string['formgraceperiodtimerem'] = 'Sie befinden sich derzeit in einer Nachfrist für Sicherheitsfragen. In dieser Zeit brauchen Sie Sicherheitsfragen nicht zu beantworten und werden beim nächsten Anmelden daran erinnert.
Nach Ablauf der Nachfrist müssen Sie Sicherheitsfragen beantworten, bevor Sie auf den Rest des Systems zugreifen können. Dauer der Nachfrist: {$a}';
$string['formlockedout'] = 'Für dieses Konto kann das Kennwort nicht zurückgesetzt werden. Bitte wenden Sie sich an die Systemadministratoren, um weitere Unterstützung zu erhalten.';
$string['formlockedoutusers'] = 'Gesperrte Nutzer';
$string['formnewquestion'] = 'Neue Frage:';
$string['formnolockedusers'] = 'Keine gesperrten Nutzer gefunden';
$string['formnoquestions'] = 'Keine Fragen gesetzt';
$string['formquestionadded'] = 'Frage erfolgreich hinzugefügt: {$a}';
$string['formquestiondeleted'] = 'Frage ID {$a} erfolgreich gelöscht.';
$string['formquestiondeprecated'] = 'Frage ID {$a} erfolgreich als veraltet markiert.';
$string['formquestionentry'] = 'Geben Sie eine Frage ein, die dem Fragenpool hinzugefügt werden soll:';
$string['formquestioninfo'] = 'Um die Sicherheit zu erhöhen, können Sie die gespeicherten Antworten nicht sehen. Sie können nur neue Antworten auf die Fragen speichern oder die Antwort löschen.';
$string['formquestionnotdeleted'] = 'Die Frage {$a} kann nicht gelöscht werden.';
$string['formquestionnotdeprecated'] = 'Die Frage {$a} kann nicht als veraltet markiert werden.';
$string['formquestionnumtext'] = 'Frage: {$a}';
$string['formrecordnewresponse'] = 'Nehmen Sie eine neue Antwort für die Frage auf:';
$string['formremindme'] = 'Erinnere mich beim nächsten Login';
$string['formresetbutton'] = 'Antworten löschen';
$string['formresetid'] = 'Geben Sie die zu entsperrende Konto-ID ein:';
$string['formresetlockout'] = 'Sperre zurücksetzen';
$string['formresetnotfound'] = 'Nutzer/in existiert nicht';
$string['formresetnotnumber'] = 'ID muss eine Nummer sein';
$string['formresponsedeleted'] = 'Antwort erfolgreich gelöscht.';
$string['formresponseempty'] = 'Die Antwort darf nicht leer sein.';
$string['formresponseentrybox'] = 'Geben Sie die Antwort auf die ausgewählte Frage ein:';
$string['formresponsenotdeleted'] = 'Antwort kann nicht gelöscht werden. Fügen Sie zuerst weitere Antworten hinzu oder geben Sie eine neue Antwort auf die Frage ein.';
$string['formresponsenotrecorded'] = 'Beim Einstellen der Antwort(en) ist ein Fehler aufgetreten. Bitte versuchen Sie es erneut.';
$string['formresponserecorded'] = 'Antwort(en) erfolgreich aufgezeichnet.';
$string['formresponseselectbox'] = 'Wählen Sie eine Frage aus, auf die geantwortet werden soll:';
$string['formresponsesremaining'] = '{$a} zusätzliche Antworten erforderlich.';
$string['formsaveresponse'] = 'Antwort(en) speichern';
$string['formselectquestion'] = 'Wählen Sie eine Frage';
$string['formstatusactive'] = 'Aktiv - {$a} zusätzliche Fragen erforderlich.';
$string['formstatusnotactive'] = 'Nicht aktiv - {$a} zusätzliche Fragen erforderlich.';
$string['formtablecount'] = 'Anzahl der Verwendung';
$string['formtabledeprecate'] = 'Veraltet';
$string['formtablequestion'] = 'Frage';
$string['formusernameplaceholder'] = 'Nutzername oder E-Mail';
$string['formuserresponsescleared'] = 'Nutzerantworten erfolgreich gelöscht';
$string['formuserunlocked'] = 'Nutzer/in erfolgreich entsperrt.';
$string['injectedquestiontitle'] = 'Sicherheitsfrage {$a->num}: {$a->content}';
$string['pluginname'] = 'Sicherheitsfragen';
$string['privacy:metadata:preference:tool_securityquestions_logintime'] = 'Die Zeit, zu der sich eine Person zum ersten Mal angemeldet und die Nachfrist für Antworten auf Sicherheitsfragen ausgelöst hat.';
$string['privacy:metadata:tool_securityquestions'] = 'Daten zu Sicherheitsfragen';
$string['privacy:metadata:tool_securityquestions_ans'] = 'In dieser Tabelle werden Informationen darüber gespeichert, ob zufällige Fragen ausgewählt wurden, um sie einer Person zu präsentieren, und wann die letzte zufällige Auswahl getroffen wurde.';
$string['privacy:metadata:tool_securityquestions_ans:qid'] = 'Die Fragen-ID einer Frage, die für eine Person ausgewählt wurde.';
$string['privacy:metadata:tool_securityquestions_ans:timecreated'] = 'Die Zeit, zu der diese Frage für eine Person ausgewählt wurde.';
$string['privacy:metadata:tool_securityquestions_ans:userid'] = 'Die ID der Person, um die zu beantwortenden Fragen zu verfolgen.';
$string['privacy:metadata:tool_securityquestions_loc'] = 'In dieser Tabelle werden Informationen darüber gespeichert, ob eine Person daran gehindert ist, sein Kennwort zurückzusetzen, sowie die Anzahl der fehlgeschlagenen Versuche, Sicherheitsfragen einzugeben.';
$string['privacy:metadata:tool_securityquestions_loc:counter'] = 'Die Häufigkeit, mit der ein e Person die Überprüfung von Sicherheitsfragen seit dem letzten Zurücksetzen des Kennworts nicht bestanden hat.';
$string['privacy:metadata:tool_securityquestions_loc:userid'] = 'Die ID der Person, für die der Sperrstatus verfolgt werden soll.';
$string['privacy:metadata:tool_securityquestions_res'] = 'In dieser Tabelle werden Informationen zu Nutzerantworten auf Sicherheitsfragen gespeichert, einschließlich der gehashten Antworten und der Fragen, auf die geantwortet wurde.';
$string['privacy:metadata:tool_securityquestions_res:qid'] = 'Die Frage-ID, der eine Antwort entspricht.';
$string['privacy:metadata:tool_securityquestions_res:response'] = 'Die sicher gehashte Antwort, die eine Person als Antwort auf eine Frage eingegeben hat.';
$string['privacy:metadata:tool_securityquestions_res:userid'] = 'Die ID der Person mit dieser Antwort.';
$string['questionaddedeventname'] = 'Der Administrator hat eine Sicherheitsfrage hinzugefügt.';
$string['questiondeletedeventname'] = 'Der Administrator hat eine Sicherheitsfrage gelöscht.';
$string['questiondeprecatedeventname'] = 'Die Sicherheitsfrage wurde vom Administrator als veraltet gesetzt.';
$string['resetuserpagename'] = 'Die Sperrung von Sicherheitsfragen zurücksetzen';
$string['securityquestions:questionsaccess'] = 'Interaktion mit Sicherheitsfragen';
$string['securityquestionssettings'] = 'Einstellungen für Sicherheitsfragen';
$string['setquestionspagename'] = 'Ändern Sie Sicherheitsfragen';
$string['setresponsespagestring'] = 'Antworten auf Sicherheitsfragen festlegen';
$string['setresponsessettingsmenu'] = 'Antworten auf Sicherheitsfragen';
$string['setsecurityquestionspagestring'] = 'Sicherheitsfragen ändern';
$string['settingsanswerquestions'] = 'Fragen zur Überprüfung erforderlich';
$string['settingsanswerquestionsdesc'] = 'Die Anzahl der Fragen, die Benutzer benötigen, um sich selbst zu überprüfen und sicherheitsrelevante Kontoaktionen auszuführen.';
$string['settingsenabledesc'] = 'Aktivieren Sie diese Option, um die Validierung von Sicherheitsfragen zu aktivieren';
$string['settingsenablename'] = 'Plugin aktivieren';
$string['settingsgraceperiod'] = 'Antwortfrist';
$string['settingsgraceperioddesc'] = 'Ein Zeitraum, in dem eine Person festlegen kann, dass keine Sicherheitsfragen festgelegt werden sollen, selbst wenn verpflichtende Fragen aktiviert sind. Nach dieser Zeit müssen Personen, die bisher keine Antworten festgelegt haben, Antworten festlegen. Setzen Sie dieses Steuerelement auf 0, um die Antwortfrist zu deaktivieren.';
$string['settingsinjectchangepw'] = 'Kennwortänderungsformular';
$string['settingsinjectpoints'] = 'Einsatzpunkte für Sicherheitsfragen';
$string['settingsinjectpointsdesc'] = 'Wählen Sie alle Formulare aus, in die die Sicherheitsfragen eingefügt werden sollen.';
$string['settingsinjectsetpw'] = 'Kennwortformular festlegen.';
$string['settingslockoutnum'] = 'Antwortversuche vor dem Sperren des Kontos';
$string['settingslockoutnumdesc'] = 'Die Anzahl der Versuche, die eine Person hat Fragen zu beantworten, bevor das Zurücksetzen des Kennworts gesperrt wird. Setzen Sie diese Einstellung auf 0, um die Sperrung zu deaktivieren.';
$string['settingsmandatoryquestions'] = 'Verpflichtende Sicherheitsfragen';
$string['settingsmandatoryquestionsdesc'] = 'Aktivieren Sie dieses Steuerelement, um Sicherheitsfragen verpflichtend zu machen. Wenn deaktiviert, werden Personen weiterhin aufgefordert, Fragen beim Anmelden zu beantworten aber sie werden in der Lage sein, dies zu überspringen. Bei der nächsten Anmeldung werden sie erneut aufgefordert.';
$string['settingsminquestions'] = 'Mindestanzahl aktiver Sicherheitsfragen';
$string['settingsminquestionsdesc'] = 'Geben Sie die Mindestanzahl der Sicherheitsfragen ein, die gleichzeitig aktiv sein können. Weitere Fragen müssen hinzugefügt werden, bevor andere Fragen veraltet sein können.';
$string['settingsminuserquestions'] = 'Mindestanzahl der zu beantworteten Fragen';
$string['settingsminuserquestionsdesc'] = 'Geben Sie die Mindestanzahl aktiver Sicherheitsfragen ein, die eine Person beantworten muss, bevor er nicht mehr dazu aufgefordert wird.';
$string['settingsquestionduration'] = 'Fragendauer';
$string['settingsquestiondurationdesc'] = 'Die Dauer, für die Fragen aktiv sind, wenn sie auf einer Hochsicherheitsseite ausgewählt werden. Nach dieser Zeit werden neue Fragen ausgewählt.';
$string['taskcleantables'] = 'Bereinigen der Plugin-Datenbank um gelöschte Nutzer/innen';
$string['templateforced-on'] = 'Diese Vorlage erzwingt die Standardeinstellungen für die Sicherheitskontrollen und stellt sicher, dass Personen immer genügend Fragen zur Beantwortung und Antworten zur Validierung haben.';
$string['userlockedeventname'] = 'Person für das Zurücksetzen des Kennworts gesperrt, u.z. aufgrund fehlgeschlagener Fragenversuche.';
$string['userunlockedeventname'] = 'Person vom Zurücksetzen des Kennworts durch einen Administrator entsperrt.';
