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
 * Strings for component 'jitsi', language 'de', version '4.5'.
 *
 * @package     jitsi
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access'] = 'Teilnehmen';
$string['accessto'] = 'Teilnehmen bei {$a}. Tragen Sie den Namen ein, der angezeigt werden soll.';
$string['accesstotitle'] = 'Teilnehmen bei {$a}';
$string['accesstowithlogin'] = 'Teilnehmen bei {$a}.';
$string['account'] = 'Konto';
$string['accountconnected'] = 'Konto verbunden und auf <b>In Verwendung</b> geschaltet.';
$string['accountinsufficientprivileges'] = 'Das eingerichtete Streaming-Konto hat keine ausreichenden Rechte. Wenden Sie sich an die Administrator/innen.';
$string['accounts'] = 'Streaming-/Aufzeichnungskonten';
$string['activatetooltip'] = 'Klicken Sie, um es zu verwenden';
$string['addaccount'] = 'Konto hinzufügen';
$string['addedtoqueue'] = 'Zur Warteschlange hinzugefügt';
$string['addtoqueue'] = 'Zur Warteschlange hinzufügen';
$string['adminaccountex'] = 'Mindestens ein Konto ist erforderlich, um Sitzungen mit der Streaming-Methode "Moodle integriert" zu streamen bzw. aufzuzeichnen.
  </br>Nur ein Konto kann "<b>in Verwendung</b>" sein und wird zum Streamen bzw. Aufzeichnen alle Trainersitzungen verwendet.
  </br>Wenn Sie neue Konten hinzufügen, wird empfohlen, sie <b> mit echten Kontonamen </b> zu benennen, um sich in Zukunft möglicherweise erneut anzumelden können und das Konto erneut zu autorisieren.
  </br>Nur Konten ohne Aufzeichnungen im Zusammenhang mit den Jitsi-Aktivitäten von Trainer/innen und ohne Aufzeichnungen, die zum Löschen von den Streaming-Servern ausstehen, können hier mithilfe des Papierkorbsymbols entfernt werden.
  </br>Neue Konten ohne Anmeldeinformationen könnten hier erscheinen, wenn Backups von Jitsi-Aktivitäten von einem anderen Server auf diesem mit Konten wiederhergestellt werden, die hier nicht vorhanden waren.
</br></br>NEU ab Version 3.3.3: Eine neue Spalte namens "In Warteschlange" ermöglicht die Verwendung aller Recorder im Round-Robin-Verfahren. Sie können Recorder zur Warteschlange hinzufügen, indem Sie auf <b>+</b> klicken, und Sie können sie aus der Warteschlange entfernen, indem Sie auf <b>-</b> klicken. Wenn ein Recorder verwendet wurde, weil er der Recorder war, der "<b>in Verwendung</b>" war (oder der nächste zu verwendende Recorder war), wird das Flag "In Verwendung" auf den nächsten Recorder in der Warteschlange gesetzt. Mit dieser Funktion können Sie viele Recorder verwenden, um YouTube-Kontingentbeschränkungen wie die pro Tag zulässigen Live-Streams zu vermeiden.';
$string['alertacceswithlogin'] = 'Sie greifen über einen externen Link zu, obwohl Sie in Moodle angemeldet sind. Greifen Sie bitte über den Kurs zu.';
$string['alias'] = 'Alias';
$string['allow'] = 'Beginn der Videokonferenz';
$string['allowbreakoutrooms'] = 'Breakout-Räume erlauben';
$string['allowbreakoutroomsex'] = 'Diese Option erlaubt die Erstellung von Breakout-Räumen. Der Server muss so konfiguriert werden, dass er Breakout-Räume zulässt.';
$string['apikeyid8x8'] = 'API-Schlüssel-ID';
$string['apikeyid8x8ex'] = 'Der API-Schlüssel-ID wird mit einem 8x8 Server verwendet. Sie bekommen ihn von der Administration des 8x8 Servers. (https://jaas.8x8.com/)';
$string['appaccessinfo'] = 'Um mit einem mobilen Endgerät am Meeting teilzunehmen, brauchen Sie die mobile App "Jitsi Meet".';
$string['appid'] = 'App-ID';
$string['appidex'] = 'App-ID für die Token-Konfiguration';
$string['appinstalledtext'] = 'Wenn Sie die App bereits haben:';
$string['appnotinstalledtext'] = 'Wenn Sie die App noch nicht haben:';
$string['attendeesreport'] = 'Teilnehmerübersicht';
$string['authq'] = 'Melden Sie sich mit diesem Konto an, um Anmeldedaten zu erhalten und "in Verwendung" zu setzen?';
$string['blurbutton'] = 'Hintergrundoptionen anzeigen';
$string['blurbuttonex'] = 'Allen Nutzer/innen wird die Option „Hintergrund auswählen“ angezeigt. Diese Funktion ist cool, erfordert aber leistungsstarke Computer. Vielleicht sollten Sie es deaktivieren.';
$string['buttondownloadapp'] = 'App herunterladen';
$string['buttonopeninbrowser'] = 'Im Browser öffnen';
$string['buttonopenwithapp'] = 'Mit der App am Meeting teilnehmen';
$string['calendarstart'] = 'Das Meeting \'{$a}\' beginnt';
$string['click'] = 'Klicken';
$string['close'] = 'Ende der Videokonferenz';
$string['closebeforeopen'] = 'Das Meeting konnte nicht aktualisiert werden. Sie haben ein Ende festgelegt, das vor dem Beginn liegt.';
$string['completiondetail:minutes'] = '{$a} Minuten teilnehmen';
$string['completionminutes'] = 'Teilnehmer/in muss teilnehmen';
$string['completionminutes_help'] = 'Dauer in Minuten, die Teilnehmer/innen teilnehmen müssen, um die Aktivität abschließen zu können.';
$string['completionminutesex'] = 'Minuten teilnehmen';
$string['config'] = 'Konfiguration';
$string['confignewexpirationtime'] = 'Konfigurieren Sie eine neue Ablaufzeit in den Einstellungen.';
$string['confirmdeleterecordinactivity'] = 'Möchten Sie diese Aufnahme wirklich löschen? Dieser Vorgang kann nicht rückgängig gemacht werden.';
$string['connectedattendeesnow'] = 'Teilnehmer/innen';
$string['copied'] = 'Link in die Zwischenablage kopiert';
$string['crontaskdelete'] = 'Aufzeichnungen löschen';
$string['deeplink'] = 'Deep Link';
$string['deeplinkex'] = 'Wenn Sie die Moodle-App verwenden, können Sie Jitsi-Meetings in die Jitsi App übertragen.';
$string['deleteq'] = 'Löschen und Konto trennen';
$string['deleterecord'] = 'Aufzeichnung löschen';
$string['deletesourceq'] = 'Möchten Sie wirklich löschen? Die Aufzeichnung wird dauerhaft vom Videoserver gelöscht und kann nicht wiederhergestellt werden.';
$string['deletesources'] = 'Aufzeichnungen zum Löschen verfügbar';
$string['deletetooltip'] = 'Löschen';
$string['deprecated'] = 'Veraltet';
$string['deprecatedex'] = 'Veraltete Parameter, die wahrscheinlich nicht funktionieren werden, weil Jitsi Meet die Implementierung geändert hat.';
$string['desktopaccessinfo'] = 'Wenn Sie am Meeting teilnehmen möchten, klicken Sie auf die Taste und öffnen Sie Jitsi im Browser.';
$string['domain'] = 'Server';
$string['domainex'] = 'Zu verwendender Domänen-Jitsi-Server. Der Standardserver (<b>meet.jit.si</b>) hat ein Zeitlimit von 5 Minuten pro Konferenz.
  Sie können in Google nach alternativen öffentlichen Jitsi-Servern suchen, die Ihren Nutzern am nächsten sind und eine geringere Latenz aufweisen.
  Wenn Sie über einen privaten Jitsi-Server verfügen, teilen Sie dies hier ohne „https://“ mit.
  Der professionelle 8x8-Server lautet normalerweise (<b>8x8.vc</b>) und erfordert die Konfiguration Ihrer Anmeldeinformationen im Abschnitt „Token-Konfiguration“ unten.';
$string['editrecordname'] = 'Aufzeichnungsname bearbeiten';
$string['entersession'] = 'Meeting beitreten';
$string['error'] = 'Fehler';
$string['errordeleting'] = 'Fehler beim Löschen';
$string['experimental'] = 'Experimentell';
$string['experimentalex'] = 'Dies sind Optionen, mit denen wir experimentieren und die in zukünftigen Versionen möglicherweise verschwinden.';
$string['externalinvitations'] = 'Externe Einladung';
$string['externaltoken'] = 'Externes Token';
$string['externaltoken_help'] = 'Verwenden Sie diesen Link für Gäste, die kein Nutzerkonto in Moodle haben.';
$string['finish'] = 'Das Meeting ist beendet.';
$string['finishandreturn'] = 'Beenden und zurück';
$string['finishandreturnex'] = 'Zum Kurs zurückgehen, wenn die Sitzung beendet ist. Bei Verwendung des öffentlichen Jitsi gelangen die Nutzer/innen zum Kurs zurück, sobald sie die Werbung schließen.';
$string['finishinvitation'] = 'Der Einladungslink läuft ab am';
$string['forkids'] = 'Für Kids';
$string['forkidsex'] = 'Aufnahmen gelten als für Kinder erstellt.';
$string['guestform'] = 'Zum Gastformular';
$string['hasentered'] = 'hat Ihr privates Jitsi betreten.';
$string['help'] = 'Hilfe';
$string['helpex'] = 'Dieser Hilfetext wird am Ende in allen Jitsi-Aktivitäten angezeigt. Es ist ein guter Ort für Netiquette-Regeln oder Hilfeanweisungen für Nutzer/innen.';
$string['here'] = 'hier';
$string['identification'] = 'Nutzer-ID';
$string['identificationex'] = 'Nutzer-ID, die im Meeting angezeigt wird';
$string['inqueue'] = 'In Warteschlange';
$string['instruction'] = 'Klicken Sie auf die Taste \'Teilnehmen\'.';
$string['integrated'] = 'In Moodle integriert';
$string['internalerror'] = 'Interner Fehler. Wenden Sie sich an die Administrator/innen.';
$string['inuse'] = '<b>(in Verwendung)</b>';
$string['invitations'] = 'Einladungen';
$string['invitationsnotactivated'] = 'Die Einladungen sind nicht aktiviert.';
$string['invitebutton'] = 'Einladeoptionen';
$string['invitebuttonex'] = 'Erlauben Sie Nutzer/innen mit dem Recht mod/jitsi:createlink (Trainer/innen), auch Einladungslinks für Nutzer/innen zu erstellen, die nicht im Kurs eingeschrieben sind.';
$string['iscalling'] = 'lädt Sie ein, zum privaten Jitsi zu kommen.';
$string['jitsi'] = 'Jitsi';
$string['jitsi:addinstance'] = 'Neues Jitsi hinzufügen';
$string['jitsi:createlink'] = 'Einladungslinks für Gäste anzeigen und kopieren';
$string['jitsi:deleterecord'] = 'Aufzeichnungen löschen';
$string['jitsi:editrecordname'] = 'Aufzeichnungsnamen bearbeiten';
$string['jitsi:hide'] = 'Aufzeichnungen verbergen';
$string['jitsi:moderation'] = 'Jitsi-Moderation';
$string['jitsi:record'] = 'Meeting aufzeichnen';
$string['jitsi:sharedesktop'] = 'Bildschirm teilen';
$string['jitsi:view'] = 'Jitsi anzeigen';
$string['jitsi:viewexternallink'] = 'Externen Link anzeigen';
$string['jitsi:viewrecords'] = 'Aufzeichnungen anzeigen';
$string['jitsi:viewusersonsession'] = 'Zugriff auf die Teilnehmerübersicht';
$string['jitsiinterface'] = 'Jitsi-Schnittstelle';
$string['jitsiname'] = 'Name des Meetings';
$string['latency'] = 'Latenz';
$string['latencyex'] = 'Wählen Sie einen Latenzlevel zum Streamen';
$string['link'] = 'Link';
$string['linkexpiredon'] = 'Dieser Link läuft am {$a} ab.';
$string['livesessionsnow'] = 'Aufzeichnungen bereitgestellt';
$string['loginq'] = 'Möchten Sie dieses Konto auf "in Verwendung" schalten?';
$string['logintooltip'] = 'Für dieses Konto sind Anmeldedaten erforderlich.';
$string['messageprovider:callprivatesession'] = 'Zu privatem Jitsi einladen';
$string['messageprovider:onprivatesession'] = 'Nutzer/in in privatem Meeting';
$string['minpretime'] = 'Zugang vor Beginn';
$string['minpretime_help'] = 'Nutzer/innen mit Moderationsberechtigungen können diese Zeit (in Minuten) vor Beginn bereits zugreifen.';
$string['minutesconnected'] = 'Sie sind seit {$a} Minuten verbunden.';
$string['minutestoday'] = 'Minuten heute';
$string['modulename'] = 'Jitsi';
$string['modulename_help'] = 'Mit Jitsi können Sie eine Videokonferenz einrichten und durchführen. Für diese Videokonferenz sind alle Teilnehmer/innen Ihres Kurses zugelassen. Beim Betreten der Videokonferenz werden automatisch die Nutzernamen und die Nutzerbilder aus Moodle übernommen und angezeigt.

Jitsi ist eine Open-Source-Software, mit der Sie Videokonferenzen einfach und sicher durchführen können.';
$string['modulenameplural'] = 'Jitsi';
$string['myprivatesession'] = 'Privates Meeting';
$string['nameandsurname'] = 'Vorname + Nachname';
$string['news'] = 'News';
$string['news1'] = 'Wenn Sie kürzlich ein Upgrade durchgeführt haben, wird empfohlen, dass Sie <a href="../mod/jitsi/CHANGES.md">CHANGES.md</a> auf Aktualisierungen prüfen und Ihre Sprache auf Englisch einstellen, um sicherzustellen, dass Sie die aktualisierten Anweisungen auf diesem Konfigurationsbildschirm lesen .
  </br></br><b>WICHTIGER HINWEIS</b>
  </br>Kürzlich haben die öffentlichen Server von meet.jit.si Einschränkungen für den Einbettungsmodus eingeführt, die die Dauer auf 5 Minuten pro Konferenz beschränken
  (<a href="https://github.com/udima-university/moodle-mod_jitsi#important-announcement-from-meetjitsi-team">lesen Sie hier mehr</a>).
  </br>Wenn Sie professionelle Hosting-Dienste für Jitsi buchen möchten, empfehlen wir <a href="https://jaas.8x8.vc/">https://jaas.8x8.vc/</a>.
  Es wird von den Jitsi-Entwicklern betrieben, sie haben <b>sehr wettbewerbsfähige Preise</b> und auf diese Weise tragen Sie dazu bei, das Jitsi Open Source-Projekt am Leben zu erhalten.
  Sie können <b>80 % Rabatt</b> in den ersten 3 Monaten <b>mit dem Gutschein MOODLE23</b> erhalten, wenn Sie sich für Ihr Konto anmelden.
  </br></br><b>HAFTUNGSAUSSCHLUSS</b></br>Dieses Plugin wird von der UDIMA University <a href="https://www.udima.es">www.udima.es</a> verwaltet und ist nicht verwandt oder Partner
  mit 8x8 Inc noch mit „Jitsi as a service“ (jaas).';
$string['newvaluefor'] = 'Neuer Wert für';
$string['noinviteaccess'] = 'Der Zugriff für Gäste ist momentan nicht erlaubt.';
$string['nojitsis'] = 'Keine Jitsi-Aktivitäten gefunden';
$string['norecords'] = 'Keine Aufzeichnungen verfügbar';
$string['nostart'] = 'Das Meeting hat noch nicht begonnen. Sie können {$a} Minuten vor Beginn zugreifen.';
$string['notloggedin'] = 'Anmeldedaten erforderlich';
$string['noviewpermission'] = 'Sie haben nicht das Recht, dieses Jitsi-Meeting anzuzeigen.';
$string['numbervideosdeleted'] = 'Anzahl zu löschender Videos';
$string['numbervideosdeletedex'] = 'Anzahl zu löschender Videos bei jeder Ausführung der Cron Task';
$string['oauthid'] = 'OAuth2-ID';
$string['oauthidex'] = 'OAuth2-ID Google-Konto mit aktivierter YouTube Data API v3 und diesen autorisierten Weiterleitungs-URIs <b>\'{$a}\'</b> in der Google API-Konsole.';
$string['oauthsecret'] = 'OAuth2 Secret';
$string['oauthsecretex'] = 'Oauth2 Secret Google-Konto';
$string['participantspane'] = 'Teilnehmerfeld';
$string['participantspaneex'] = 'Das Teilnehmerfeld soll für alle Nutzer/innen angezeigt werden. Wenn Sie die Option deaktivieren, wird das Feld nur für Nutzer/innen mit dem Recht zur Jitsi-Moderation mod/jitsi:moderation angezeigt, normalerweise für Trainer/innen.';
$string['participatingsession'] = 'Teilnahme am Meeting';
$string['password'] = 'Kennwort';
$string['passwordex'] = 'Zum Schutz Ihrer Jitsi-Meetings wird ein Kennwort empfohlen, wenn Sie einen öffentlichen Jitsi-Server verwenden.';
$string['pluginadministration'] = 'Jitsi-Administration';
$string['pluginname'] = 'Jitsi';
$string['preparing'] = 'Vorbereiten …';
$string['presscambutton'] = 'Kamera-Taste drücken';
$string['pressdesktopbutton'] = 'Schreibtisch-Taste drücken';
$string['pressendbutton'] = 'Ende-Taste drücken';
$string['pressmicrophonebutton'] = 'Mikrofon-Taste drücken';
$string['pressrecordbutton'] = 'Aufnahme-Taste drücken';
$string['privacy:metadata:jitsi'] = 'Zur Integration in ein Jitsi-Meeting müssen Nutzerdaten mit dem Jitsi-Server ausgetauscht werden.';
$string['privacy:metadata:jitsi:avatar'] = 'Das Nutzerbild wird von Moodle gesendet, um es anderen Personen im Jitsi-Meeting zu zeigen.';
$string['privacy:metadata:jitsi:username'] = 'Der Nutzername wird von Moodle gesendet, um ihn anderen Personen im Jitsi-Meeting zu zeigen.';
$string['privatekey'] = 'Persönlicher Schlüssel';
$string['privatekeyex'] = 'Privater Schlüssel zum Signieren des Tokens mit dem 8x8-Server. Sie erhalten den Schlüssel von der 8x8-Serververwaltung. (https://jaas.8x8.com/).
Laden Sie die private Schlüsseldatei herunter und kopieren Sie den Inhalt hier.
</br><b>WICHTIG</b>: Denken Sie daran, die Einstellung "Domäne" auf etwa <b>8x8.vc</b> zu aktualisieren.';
$string['privatesession'] = 'Privates Meeting {$a}';
$string['privatesessiondisabled'] = 'Private Meetings sind deaktiviert';
$string['privatesessions'] = 'Private Meetings';
$string['privatesessionsex'] = 'Private Meetings in den Nutzerprofilen hinzufügen';
$string['raisehand'] = 'Taste \'Hand heben\'';
$string['raisehandex'] = 'Die Taste \'Hand heben\' für alle anzeigen. Wenn Nutzer/innen ihre Hand heben, können sie auf das Teilnehmerfeld zugreifen. Wenn Sie das Teilnehmerfeld ausblenden, sollten Sie auch diese Schaltfläche ausblenden.';
$string['reactions'] = 'Reaktionen';
$string['reactionsex'] = 'Laute Emoticons wie Applaus, Überraschung usw. anzeigen. Die Taste \'Hand heben\' muss aktiviert sein.';
$string['record'] = 'Aufnahme';
$string['recorders'] = 'Aufnahmeecorder';
$string['recordex'] = 'Aktivieren Sie die nativen Optionen für Jitsi-Aufzeichnungen (eigentlich Dropbox) für Nutzer/innen mit dem Recht mod/jitsi:record (Trainer/innen). Wenn Sie die "Streaming-Konfiguration" auf "Moodle integriert" einstellen, möchten Sie diese wahrscheinlich deaktivieren.';
$string['recordingbloquedby'] = 'Die Aufzeichnung ist blockiert von';
$string['recordingwasbloquedby'] = 'Die Person, die diese Aufzeichnung gestartet hat, nimmt nicht mehr an der Sitzung teil. Möchten Sie diese Aufnahme stoppen? Sie wurde begonnen von';
$string['records'] = 'Aufnahmen';
$string['recordsonair'] = 'Aufnahmen bereitgestellt';
$string['recordtitle'] = 'Aufnahme';
$string['removedfromqueue'] = 'Aus der Warteschlange entfernt';
$string['removefromqueue'] = 'Aus der Warteschlange entfernen';
$string['searchrecords'] = 'Aufzeichnungen suchen';
$string['secret'] = 'Secret';
$string['secretex'] = 'Secret für die Token-Konfiguration';
$string['securitybutton'] = 'Taste \'Sicherheit\'';
$string['securitybuttonex'] = 'Dies aktiviert die native Jitsi-Optionen \'Sicherheit\' und den \'Lobby-Modus\'. Sie sollten diese Option deaktivieren, wenn Sie oben ein Kennwort festgelegt haben, da das Kennwort den Nutzer/innen angezeigt wird. Bei Token-Konfiguration können Sie mit dieser Option experimentieren.';
$string['separator'] = 'Trennzeichen';
$string['separatorex'] = 'Legen Sie das Trennzeichen für die Meeting-Namen fest.';
$string['sessiondeleted'] = 'Geteilte Sitzung gelöscht';
$string['sessionisbeingrecorded'] = 'Das Meeting wird aufgezeichnet.';
$string['sessionisbeingrecordingby'] = 'Sitzung wird aufgezeichnet von {$a}';
$string['sessionnamefields'] = 'Felder für Meeting-Namen';
$string['sessionnamefieldsex'] = 'Felder, die den Meeting-Namen festlegen';
$string['sessionshared'] = 'Sitzung mit dem Kurs \'{$a}\' geteilt';
$string['sharedsessionwithtoken'] = 'Mit Token geteilte Sitzung. Wählen Sie diese Option aus, um das Token des anderen Kurses einzugeben.';
$string['sharetoinvite'] = 'Teilen Sie diesen Link, um jemanden zum Jitsi-Meeting einzuladen (auch extern).';
$string['showavatars'] = 'Nutzerbilder in Jitsi anzeigen';
$string['showavatarsex'] = 'Nutzerbilder von Teilnehmer/innen in Jitsi anzeigen. Wenn Nutzer/innen kein Profilbild haben, wird das standardmäßige Profilbild von Moodle geladen, anstatt die in Jitsi üblichen Initialen zu verwenden.';
$string['simultaneouscameras'] = 'Gleichzeitige Kameras';
$string['simultaneouscamerasex'] = 'Anzahl der gleichzeitig möglichen Kameras. Dies könnte vom Jitsi-Server mit einem niedrigeren Wert überschrieben werden. Zu viele Kameras könnten die Browser der Teilnehmer/innen überlasten.';
$string['startwithaudiomuted'] = 'Audio beim Start stummgeschaltet';
$string['startwithaudiomutedex'] = 'Wenn Personen eine Verbindung zur Sitzung herstellen, wird der Ton stummgeschaltet.';
$string['startwithvideomuted'] = 'Kamera beim Start ausblenden';
$string['startwithvideomutedex'] = 'Wenn Personen eine Verbindung zur Sitzung herstellen, wird die Kamera ausgeblendet.';
$string['staticinvitationlink'] = 'Option \'Einladung\'';
$string['staticinvitationlinkcapabilityex'] = 'Nutzen Sie diese Option für Gäste, die kein Nutzerkonto in Moodle haben. Nur wenn Sie das Recht mod/jitsi:createlink haben, können Sie den Einladungslink erstellen oder ändern.';
$string['staticinvitationlinkex'] = 'Verwenden Sie diesen Link für Gäste, die kein Nutzerkonto in Moodle haben. Sie können den Link auf der Registerkarte "Einladung" sehen und kopieren.';
$string['staticinvitationlinkexview'] = 'Teilen Sie diesen Link für Gäste, die kein Nutzerkonto in Moodle haben.';
$string['streamingandrecording'] = 'Streaming & Aufzeichnen';
$string['streamingbutton'] = 'Live-Streaming';
$string['streamingbuttonex'] = 'Aktivieren Sie die Live-Streaming-Funktionen für Nutzer/innen mit dem Recht mod/jitsi:record-Funktion (Trainer/innen). Wenn die Option aktiviert ist, möchten Sie vielleicht die Option \'Aufzeichnen\' oben deaktivieren.';
$string['streamingconfig'] = 'Streaming-Einstellungen';
$string['streamingconfigex'] = 'Die Standard-Streaming-Konfiguration funktioniert \'out of the box\'. Trainer/innen können ihre Sitzungen mit eigenen Streaming-Konten bei Streaming-Diensten (Youtube, Peertube, ...) streamen bzw. aufzeichnen, aber sie müssen dann selber ihre Watch-Links für Teilnehmer/innen im Kurs veröffentlichen. </br></br>Für ein besseres Erlebnis können Sie die Methode \'Moodle integriert\' aktivieren, um mit einem institutionellen Streaming-Konto aufzunehmen (bisher ist nur YouTube verfügbar) und die Aufzeichnungen automatisch für Teilnehmer/innen bereitzustellen.';
$string['streamingisstarting'] = 'Streaming hat begonnen. Warten Sie bitte ...';
$string['streamingoption'] = 'Live-Streaming-Methode';
$string['streamingoptionex'] = '<b>Jitsi-Oberfläche</b> Aktivieren Sie "Live-Streaming starten" in der Jitsi-Oberfläche. damit Nutzer/innen ihre eigenen Streaming-Konten verwenden. </br><b>Moodle integriert</b> Diese Option ist am einfachsten für Nutzer/innen. Trainer/innen können sofort \'Aufnehmen & Streamen\' starten, ohne dass dafür Zugangsdaten abgefragt werden. Aufzeichnungen und Streams werden in einem institutionellen Streaming-Konto gespeichert und werden Teilnehmer/innen sofort bereitgestellt. Sie müssen unten die OAuth2-Anmeldeinformationen und ein Streaming-Konto festlegen.';
$string['tablelistjitsis'] = 'Liste aller Videos in Ihren Streaming-/Aufzeichnungskonten, die gelöscht werden können, weil sie nicht mehr mit Jitsi-Aktivitäten in diesem Moodle verknüpft sind. Sie können Videos löschen, um Speicherplatz auf dem Streaming-Server freizugeben. Die Liste könnte auch Videos enthalten, die sich in irgendeinem Kurs im "Papierkorb" befinden. Löschen Sie wirklich nur alte Aufzeichnungen zu löschen, die sicher nicht benötigt werden. </br></br> <b>ACHTUNG!!! </b>Wenn Sie Moodle-Sicherungen haben, sollten Sie diese Videos NICHT entfernen, wenn sie in anderen Instanzen verlinkt sind.';
$string['toenter'] = 'zum Teilnehmen';
$string['token'] = 'Teilen Sie dieses Token im anderen Kurs';
$string['tokenconfiguration8x8ex'] = 'Wenn Sie 8x8-Server verwenden, müssen Sie die folgenden Parameter konfigurieren.';
$string['tokenconfigurationex'] = 'Wenn Sie einen  Jitsi-Server im \'Token-Modus\' verwenden, z.B. Ihren eigenen Server oder einen 8x8-Server, füllen Sie je nach Servertyp die folgenden Parameter aus. Dies ist erforderlich, um Nutzer/innen mit dem Recht mod/jitsi:moderation als native Jitsi-Moderatoren zu unterstützen.';
$string['tokeninterno'] = 'Token für Hauptsitzung';
$string['tokeninternocompartir'] = 'Token zum Teilen';
$string['tokeninternocompartir_help'] = 'Verwenden Sie dieses Token, um die Sitzung mit anderen Kursen zu teilen. Geben Sie dieses Token im Abschnitt des anderen Kurses ein.';
$string['tokeninvitacion'] = 'Geben Sie hier das Token der Sitzung ein, an der Sie teilnehmen möchten.';
$string['tokeninvitacion_help'] = 'Geben Sie hier das Token der Sitzung ein, an der Sie teilnehmen möchten. Holen Sie sich dieses Token aus dem anderen Kurs.';
$string['tokeninvitadovalidation'] = 'Das Token ist nicht gültig.';
$string['tokeninvitationnotvalid'] = 'Die Einladung kann nicht vorher ablaufen.';
$string['tokeninvitationvalidation'] = 'Das Token ist nicht gültig. Es gibt keine Sitzung mit diesem Token.';
$string['tokennconfig'] = 'Token-Konfiguration';
$string['tokennconfig8x8'] = 'Konfiguration für 8x8-Server';
$string['totalminutes'] = 'Minuten insgesamt';
$string['updated'] = 'Aktualisiert';
$string['urlerror'] = 'Die URL ist nicht gültig.';
$string['urlinvitacion'] = 'Einladungs-URL';
$string['usercall'] = '{$a} lädt Sie zu einem privaten Jitsi ein';
$string['userenter'] = '{$a} ist in Ihrem privaten Jitsi';
$string['username'] = 'Anmeldename';
$string['validitytimevalidation'] = 'Die Einladung kann nicht ablaufen, bevor das Meeting beginnt oder nachdem das Meeting bereits beendet ist.';
$string['videoexpiry'] = 'Aufbewahrungsdauer';
$string['videoexpiryex'] = 'Zeit, in der ein gelöschtes Video auf dem Streaming-Server verfügbar ist. Nach dieser Zeit wird das Video vom Streaming-Server gelöscht.';
$string['warningprivate'] = 'Wenn Sie zugreifen, bekommt {$a} eine Benachrichtigung.';
$string['watermarklink'] = 'Wasserzeichen-Link';
$string['watermarklinkex'] = 'Wasserzeichen-Link';
$string['whiteboard'] = 'Whiteboard';
$string['whiteboardex'] = 'Taste für das Whiteboard allen Nutzer/innen anzeigen. Derzeit ist Whiteboard auf Jaas-Servern nicht verfügbar.';
$string['youtubebutton'] = 'Option \'Teilen per Youtube\'';
$string['youtubebuttonex'] = 'Option \'Teilen per Youtube\' anzeigen';
