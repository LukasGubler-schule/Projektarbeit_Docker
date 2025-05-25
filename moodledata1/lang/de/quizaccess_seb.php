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
 * Strings for component 'quizaccess_seb', language 'de', version '3.10'.
 *
 * @package     quizaccess_seb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtemplate'] = 'Neues Template hinzufügen';
$string['allowedbrowserkeysdistinct'] = 'Die Keys müssen alle unterschiedlich sein.';
$string['allowedbrowserkeyssyntax'] = 'Ein Key sollte eine 64-stellige Hex-Zeichenfolge sein.';
$string['cachedef_config'] = 'SEB-Konfiguration-Cache';
$string['cachedef_configkey'] = 'SEB Config Key-Cache';
$string['cachedef_quizsettings'] = 'SEB Test-Einstellungen-Cache';
$string['cantdelete'] = 'Das Template kann nicht gelöscht werden, da es für ein oder mehrere Tests verwendet wurde.';
$string['cantedit'] = 'Das Template kann nicht bearbeitet werden, da es für ein oder mehrere Tests verwendet wurde.';
$string['clientrequiresseb'] = 'Dieser Test wurde für die Verwendung des Safe Exam Browser mit Client-Konfiguration konfiguriert.';
$string['confirmtemplateremovalquestion'] = 'Möchten Sie dieses Template wirklich löschen?';
$string['confirmtemplateremovaltitle'] = 'Löschen des Templates bestätigen?';
$string['conflictingsettings'] = 'Sie haben keine Berechtigungen zum Aktualisieren der vorhandenen Safe-Exam-Browser-Einstellungen.';
$string['content'] = 'Template';
$string['description'] = 'Beschreibung';
$string['disabledsettings'] = 'Deaktivierte Einstellungen.';
$string['disabledsettings_help'] = 'Die Safe-Exam-Browser-Einstellungen können nicht aktualisiert werden, wenn ein oder mehrere Testversuche vorhanden sind. Um die Einstellungen ändern zu können, müssen vorher alle Testversuche gelöscht werden.';
$string['downloadsebconfig'] = 'SEB-Konfigurationsdatei downloaden';
$string['duplicatetemplate'] = 'Es gibt bereits ein Template mit dem gleichen Namen.';
$string['edittemplate'] = 'Template bearbeiten';
$string['enabled'] = 'Aktiviert';
$string['event:accessprevented'] = 'Zugang zum Test wurde verwehrt';
$string['event:templatecreated'] = 'SEB-Template wurde erstellt';
$string['event:templatedeleted'] = 'SEB-Template wurde gelöscht';
$string['event:templatedisabled'] = 'SEB-Template wurde deaktiviert';
$string['event:templateenabled'] = 'SEB-Template wurde aktiviert';
$string['event:templateupdated'] = 'SEB Template wurde aktualisiert';
$string['exitsebbutton'] = 'Safe Exam Browser beenden';
$string['filemanager_sebconfigfile'] = 'Safe Exam Browser-Konfigurationsdatei hochladen';
$string['filemanager_sebconfigfile_help'] = 'Laden Sie bitte Ihre Safe Exam Browser-Konfigurationsdatei für diesen Test hoch.';
$string['filenotpresent'] = 'Laden Sie bitte eine SEB-Konfigurationsdatei hoch.';
$string['fileparsefailed'] = 'Die hochgeladene Datei konnte nicht als SEB-Konfigurationsdatei gespeichert werden.';
$string['httplinkbutton'] = 'Konfiguration herunterladen';
$string['invalid_browser_key'] = 'Ungültiger SEB Browser Exam Key';
$string['invalid_config_key'] = 'Ungültiger SEB Config Key';
$string['invalidkeys'] = 'Der Config Key oder Browser Exam Key konnte nicht validiert werden. Stellen Sie bitte sicher, dass Sie den Safe Exam Browser mit der richtigen Konfigurationsdatei verwenden.';
$string['invalidtemplate'] = 'Ungültiges SEB Konfiguration-Template';
$string['manage_templates'] = 'Safe Exam Browser Templates';
$string['managetemplates'] = 'Templates verwalten';
$string['missingrequiredsettings'] = 'Die Konfigurationseinstellung hat nicht alle erforderlichen Optionen gesetzt.';
$string['name'] = 'Name';
$string['newtemplate'] = 'Neues Template';
$string['noconfigfilefound'] = 'Keine hochgeladene SEB-Konfigurationsdatei konnte für den Test mit der cmid: {$a} gefunden werden.';
$string['noconfigfound'] = 'Keine SEB-Konfiguration konnte für den Test mit der cmid: {$a} gefunden werden.';
$string['not_seb'] = 'Es wurde kein SEB-Browser verwendet.';
$string['notemplate'] = 'Kein Template';
$string['passwordnotset'] = 'Die Verwendung von Safe Exam Browser erfordert die Festlegung eines Test-Kennworts.';
$string['pluginname'] = 'Zugriffsregeln für den Safe-Exam-Browser';
$string['privacy:metadata:quizaccess_seb_quizsettings'] = 'Safe Exam Browser Settings für einen Test. Dies beinhaltet auch die ID der Person, die die Settings erstellt oder zuletzt geändert hat.';
$string['privacy:metadata:quizaccess_seb_quizsettings:quizid'] = 'ID des Tests, für den Settings existieren.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timecreated'] = 'Zeitpunkt, zu dem die Settings erstellt wurden.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timemodified'] = 'Zeitpunkt, zu dem die Settings zuletzt geändert wurden.';
$string['privacy:metadata:quizaccess_seb_quizsettings:usermodified'] = 'ID der Person, die die Settings erstellt oder zuletzt geändert hat.';
$string['privacy:metadata:quizaccess_seb_template'] = 'Safe Exam Browser Template. Dies beinhaltet auch die ID des Nutzers, der das Template erstellt oder zuletzt geändert hat.';
$string['privacy:metadata:quizaccess_seb_template:timecreated'] = 'Zeitpunkt, zu dem das Template erstellt wurden.';
$string['privacy:metadata:quizaccess_seb_template:timemodified'] = 'Zeitpunkt, zu dem das Template zuletzt geändert wurden.';
$string['privacy:metadata:quizaccess_seb_template:usermodified'] = 'ID der Person, die das Template erstellt oder zuletzt geändert hat.';
$string['quizsettings'] = 'Test-Settings';
$string['restoredfrom'] = '{$a->name} (wiederhergestellt via cmid {$a->cmid})';
$string['seb'] = 'Safe Exam Browser';
$string['seb:bypassseb'] = 'Die Anforderung umgehen, einen Test im Safe Exam Browser anzuzeigen.';
$string['seb:manage_filemanager_sebconfigfile'] = 'SEB-Einstellungen: SEB-Konfigurationsdatei auswählen';
$string['seb:manage_seb_activateurlfiltering'] = 'SEB-Einstellungen: URL-Filter aktivieren';
$string['seb:manage_seb_allowedbrowserexamkeys'] = 'SEB-Einstellungen: Erlaubte Browser-Exam-Schlüssel eingeben';
$string['seb:manage_seb_allowreloadinexam'] = 'SEB-Einstellungen: Neuladen der Prüfung erlauben';
$string['seb:manage_seb_allowspellchecking'] = 'SEB-Einstellungen: Rechtschreibprüfung aktivieren';
$string['seb:manage_seb_allowuserquitseb'] = 'SEB-Einstellungen: Beenden von SEB erlauben';
$string['seb:manage_seb_enableaudiocontrol'] = 'SEB-Einstellungen: Audio-Steuerung anzeigen';
$string['seb:manage_seb_expressionsallowed'] = 'SEB-Einstellungen: Erlaubte Ausdrücke';
$string['seb:manage_seb_expressionsblocked'] = 'SEB-Einstellungen: Blockierte Ausdrücke';
$string['seb:manage_seb_filterembeddedcontent'] = 'SEB-Einstellungen: Eingebetteten Inhalt filtern';
$string['seb:manage_seb_linkquitseb'] = 'SEB-Einstellungen: Link zum Beenden von SEB';
$string['seb:manage_seb_muteonstartup'] = 'SEB-Einstellungen: Stummschaltung beim Start';
$string['seb:manage_seb_quitpassword'] = 'SEB-Einstellungen: Beenden-Kennwort';
$string['seb:manage_seb_regexallowed'] = 'SEB-Einstellungen: Erlaubte Regex';
$string['seb:manage_seb_regexblocked'] = 'SEB-Einstellungen: Blockierte Regex';
$string['seb:manage_seb_requiresafeexambrowser'] = 'SEB-Einstellungen: Safe Exam Browser notwendig machen';
$string['seb:manage_seb_showkeyboardlayout'] = 'SEB-Einstellungen: Tastaturbelegung anzeigen';
$string['seb:manage_seb_showreloadbutton'] = 'SEB-Einstellungen: Neuladen-Taste anzeigen';
$string['seb:manage_seb_showsebdownloadlink'] = 'SEB-Einstellungen: Download-Taste anzeigen';
$string['seb:manage_seb_showsebtaskbar'] = 'SEB-Einstellungen: Taskleiste anzeigen';
$string['seb:manage_seb_showtime'] = 'SEB-Einstellungen: Zeit anzeigen';
$string['seb:manage_seb_showwificontrol'] = 'SEB-Einstellungen: WLAN-Auswahl anzeigen';
$string['seb:manage_seb_templateid'] = 'SEB-Einstellungen: SEB-Template auswählen';
$string['seb:manage_seb_userconfirmquit'] = 'SEB-Einstellungen: Nutzer/in muss das Beenden bestätigen';
$string['seb:managetemplates'] = 'SEB-Konfigurationstemplates verwalten.';
$string['seb_activateurlfiltering'] = 'URL-Filter aktivieren';
$string['seb_activateurlfiltering_help'] = 'Wenn die Option aktiviert ist, werden URLs gefiltert, wenn Webseiten geladen werden. Das Filter-Set muss hierunter definiert werden.';
$string['seb_allowedbrowserexamkeys'] = 'Erlaubte Browser-Exam-Schlüssel';
$string['seb_allowedbrowserexamkeys_help'] = 'In diesem Feld können Sie die erlaubten Browser-Exam-Schlüssel für verschiedene Versionen des Safe-Exam-Browser eingeben, die auf diesen Test zugreifen dürfen. Wenn keine Schlüssel eingegeben werden, werden für diesen Test keine Browser-Exam-Schlüssel überprüft.';
$string['seb_allowreloadinexam'] = 'Neuladen in Prüfung zulassen';
$string['seb_allowreloadinexam_help'] = 'Wenn die Option aktiviert ist, ist das erneute Laden einer Webseite erlaubt (Neuladen-Taste in der SEB-Taskleiste, Browser-Toolbar, iOS-Seiten-Schiebereglermenü, Tastatur-Kurzbefehl F5, Befehlstaste-R). Das Offline-Caching kann unterbrochen werden, wenn Nutzer/innen versuchen, eine Seite ohne Internetverbindung neu zu laden.';
$string['seb_allowspellchecking'] = 'Rechtschreibprüfung zulassen';
$string['seb_allowspellchecking_help'] = 'Wenn die Option aktiviert ist, ist die Rechtschreibprüfung im SEB-Browser zugelassen.';
$string['seb_allowuserquitseb'] = 'Beenden von SEB erlauben';
$string['seb_allowuserquitseb_help'] = 'Wenn die Option aktiviert ist, können Nutzer/innen SEB mit dem "Beenden"-Button in der SEB-Taskleiste, durch Drücken der Cmd-Q (Befehl-Q) oder der Fenster-Schließen-Taste beenden.';
$string['seb_enableaudiocontrol'] = 'Audio-Steuerung anzeigen';
$string['seb_enableaudiocontrol_help'] = 'Wenn die Option aktiviert ist, wird die Audio-Steuerung in der SEB-Taskleiste angezeigt.';
$string['seb_expressionsallowed'] = 'Erlaubte Ausdrücke';
$string['seb_expressionsallowed_help'] = 'Ein Textfeld, das die Filterausdrücke für erlaubte URLs enthält. Die Verwendung des Wildcard-Characters \'\\*\' ist möglich. Beispiele für Ausdrücke: \'example.com\' oder \'example.com/stuff/\\*\'. \'example.com\' passt zu \'example.com\', \'www.example.com\' und \'www.mail.example.com\'. \'example.com/stuff/\\*\' passt zu allen Anfragen an eine beliebige Unterdomäne von  \'example.com\', die \'stuff\' als erstes Segment des Pfades haben.';
$string['seb_expressionsblocked'] = 'Blockierte Ausdrücke';
$string['seb_expressionsblocked_help'] = 'Ein Textfeld, das die Filterausdrücke für blockierte URLs enthält. Die Verwendung des Wildcard-Characters \'\\*\' ist möglich. Beispiele für Ausdrücke: \'example.com\' oder \'example.com/stuff/\\*\'. \'example.com\' passt zu \'example.com\', \'www.example.com\' und \'www.mail.example.com\'. \'example.com/stuff/\\*\' passt zu allen Anfragen an eine beliebige Unterdomäne von  \'example.com\', die \'stuff\' als erstes Segment des Pfades haben.';
$string['seb_filterembeddedcontent'] = 'Eingebetteten Inhalt ebenfalls filtern';
$string['seb_filterembeddedcontent_help'] = 'Wenn die Option aktiviert ist, werden auch alle eingebetteten Ressourcen Ober die Filtern gefiltert.';
$string['seb_help'] = 'Einen Test zur Verwendung des Safe Exam Browser einrichten.';
$string['seb_linkquitseb'] = '"Safe Exam Browser beenden"-Button anzeigen, konfiguriert mit diesem Link zum Beenden';
$string['seb_linkquitseb_help'] = 'In diesem Feld können Sie den Link zum Beenden von SEB angeben. Dieser wird bei einem "Safe Exam Browser beenden" Button auf der Seite, wenn ein Test abgeschlossen wurde, erscheinen. Wenn der Button oder der Link, wo auch immer positioniert, angeklickt wird, ist es möglich SEB zu beenden, ohne ein Beenden/Entsperren-Kennwort anzugeben. Wenn kein Link zum Beenden angegeben ist, erscheint der "Safe Exam Browser beenden" Button nicht und kein Link wird gesetzt, um den SEB zu beenden.';
$string['seb_managetemplates'] = 'Safe Exam Browser Templates verwalten';
$string['seb_muteonstartup'] = 'Stummschaltung beim Start';
$string['seb_muteonstartup_help'] = 'Wenn die Option aktiviert wird, ist das Audio beim Starten des SEB zunächst stummgeschaltet.';
$string['seb_quitpassword'] = 'Beenden/Entsperren-Kennwort';
$string['seb_quitpassword_help'] = 'Dieses Kennwort wird abgefragt, wenn SEB mittels Fenster-Schließen-Taste, Beenden-Taste oder Strg-Q (Cmd-Q), beenden wollen. Wenn kein Beenden/Entsperren-Kennwort gesetzt ist, fragt SEB nur "Sind Sie sicher, dass Sie SEB beenden wollen?".';
$string['seb_regexallowed'] = 'Erlaubte Regex';
$string['seb_regexallowed_help'] = 'Ein Textfeld, das die Filterausdrücke für erlaubte URLs in einem Format mit regulärem Ausdruck (Regex) enthält.';
$string['seb_regexblocked'] = 'Blockierte Regex';
$string['seb_regexblocked_help'] = 'Ein Textfeld, das die Filterausdrücke für blockierte URLs in einem Format mit regulärem Ausdruck (Regex) enthält.';
$string['seb_requiresafeexambrowser'] = 'Nutzung des Safe Exam Browsers erforderlich';
$string['seb_requiresafeexambrowser_help'] = 'Wenn die Option aktiviert ist, können Teilnehmer/innen den Test nur mit dem Safe Exam Browser durchführen.
Die verfügbaren Optionen sind:

* Nein
<br/>Der Safe Exam Browser ist nicht erforderlich, um den Test zu versuchen.
* Ja – Bestehendes Template verwenden
<br/>Zur Konfiguration des Safe Exam Browser wird ein Template verwendet. Die Templates werden vom Moodle-Administrator verwaltet. Ihre manuellen Einstellungen überschreiben die Einstellungen im Template.
* Ja – Manuell konfigurieren
<br/>Zur Konfiguration des Safe Exam Browser wird kein Template verwendet. Sie können den Safe Exam Browser manuell konfigurieren.
* Ja – Meine eigene Konfiguration hochladen
<br/>Sie können Ihre eigene Konfigurationsdatei für den Safe Exam Browser hochladen. Alle manuellen Einstellungen und die Verwendung von Templates werden deaktiviert.
* Ja – SEB-Client-Konfiguration verwenden
<br/>Es gibt keine Konfiguration des Safe Exam Browser auf der Moodle-Seite. Der Test kann mit jeder Konfiguration des Safe Exam Browser durchgeführt werden.';
$string['seb_showkeyboardlayout'] = 'Auswahl Tastaturbelegung anzeigen';
$string['seb_showkeyboardlayout_help'] = 'Wenn die Option aktiviert ist, wird die aktuelle Tastaturbelegung in der SEB-Taskleiste angezeigt. Dies erlaubt es Ihnen, zu anderen Tastenbelegungen zu wechseln, die im Betriebssystem aktiviert wurden.';
$string['seb_showreloadbutton'] = 'Neuladen-Taste anzeigen';
$string['seb_showreloadbutton_help'] = 'Wenn die Option aktiviert ist, erscheint eine Neuladen-Taste in der SEB-Taskleiste. Diese Taste ermöglicht es, die aktuelle Webseite neu zu laden.';
$string['seb_showsebdownloadlink'] = 'Safe Exam Browser Download-Button anzeigen';
$string['seb_showsebdownloadlink_help'] = 'Wenn die Option aktiviert ist, wird ein Safe Exam Browser Download-Button auf der Startseite des Tests angezeigt.';
$string['seb_showsebtaskbar'] = 'SEB-Taskleiste anzeigen';
$string['seb_showsebtaskbar_help'] = 'Wenn die Option aktiviert ist, wird eine Taskleiste unten im SEB-Browserfenster dargestellt. Diese Taskleiste ist notwendig, um die WLAN-Auswahl, die Neuladen-Taste, die Uhrzeit oder die Tastaturbelegung anzuzeigen.';
$string['seb_showtime'] = 'Uhrzeit anzeigen';
$string['seb_showtime_help'] = 'Wenn die Option aktiviert ist, wird die aktuelle Uhrzeit in der SEB-Taskleiste angezeigt.';
$string['seb_showwificontrol'] = 'WLAN-Auswahl anzeigen';
$string['seb_showwificontrol_help'] = 'Wenn die Option aktiviert ist, erscheint eine Taste zur WLAN-Auswahl in der SEB-Taskleiste. Die Taste erlaubt es, sich mit WLAN-Netzwerken zu verbinden, mit denen zuvor eine Verbindung bestand.';
$string['seb_templateid'] = 'Safe Exam Browser Konfiguration-Template';
$string['seb_templateid_help'] = 'Die Einstellungen im gewählten Konfiguration-Template werden für die Konfiguration des Safe Exam Browser bei der Durchführung des Quiz verwendet. Sie können die Einstellungen im Template mit Ihren manuellen Einstellungen überschreiben.';
$string['seb_use_client'] = 'Ja – SEB-Client-Konfiguration verwenden';
$string['seb_use_manually'] = 'Ja – Manuell konfigurieren';
$string['seb_use_template'] = 'Ja – Bestehendes Template verwenden';
$string['seb_use_upload'] = 'Ja – Meine eigene Konfiguration hochladen';
$string['seb_userconfirmquit'] = 'Der/die Nutzende muss das Beenden bestätigen';
$string['seb_userconfirmquit_help'] = 'Wenn die Option aktiviert ist, müssen Teilnehmer/innen das Beenden des SEB bestätigen, wenn ein Link zum Beenden erkannt wird.';
$string['sebdownloadbutton'] = 'Safe Exam Browser downloaden';
$string['seblinkbutton'] = 'Safe Exam Browser starten';
$string['sebrequired'] = 'Für diesen Test wurde festgelegt, dass er ausschließlich im Safe Exam Browser durchgeführt werden kann.';
$string['setting:autoreconfigureseb'] = 'Automatische Konfiguration von SEB';
$string['setting:autoreconfigureseb_desc'] = 'Wenn die Option aktiviert ist, wird bei Nutzenden, die mit dem Safe Exam Browser zum Test navigieren, der Safe Exam Browser automatisch neu konfiguriert.';
$string['setting:displayblocksbeforestart'] = 'Blöcke anzeigen, bevor ein Test gestartet wird';
$string['setting:displayblocksbeforestart_desc'] = 'Wenn die Option aktiviert ist, werden Blöcke angezeigt, bevor ein Test gestartet wird.';
$string['setting:displayblockswhenfinished'] = 'Blöcke anzeigen, nachdem ein Test beendet wurde';
$string['setting:displayblockswhenfinished_desc'] = 'Wenn die Option aktiviert ist, werden Blöcke angezeigt, nachdem eine Person ihren Testversuch beendet hat.';
$string['setting:downloadlink'] = 'Safe Exam Browser Download-Link';
$string['setting:downloadlink_desc'] = 'URL um das Safe Exam Browser-Programm herunterzuladen.';
$string['setting:quizpasswordrequired'] = 'Test-Kennwort erforderlich';
$string['setting:quizpasswordrequired_desc'] = 'Wenn die Option aktiviert ist, müssen alle Tests, die den Safe Exam Browser erfordern, ein gesetztes Test-Kennwort haben.';
$string['setting:showhttplink'] = 'http:// Link anzeigen';
$string['setting:showseblink'] = 'seb:// Link anzeigen';
$string['setting:showseblinks'] = 'Safe Exam Browser-Konfigurations-Links anzeigen';
$string['setting:showseblinks_desc'] = 'Entscheiden Sie, ob Links für Nutzer/innen angezeigt werden sollen, um auf die SEB-Konfigurationsdatei zuzugreifen, wenn der Zugriff auf den Test verhindert wird. Beachten Sie, dass seb://-Links möglicherweise nicht für jeden Browser funktionieren.';
$string['setting:supportedversions'] = 'Beachten Sie, dass folgende Versionen des Safe-Exam-Browsers mindestens erforderlich sind, um die Config-Key-Funktion zu nutzen: macOS - 2.1.5pre2, Windows - 2.4, iOS - 2.1.14';
$string['settingsfrozen'] = 'Da es mindestens einen Testversuch gibt, können die Einstellungen des Safe Exam Browser nicht mehr aktualisiert werden.';
$string['unknown_reason'] = 'Unbekannte Ursache';
$string['used'] = 'In Verwendung';
