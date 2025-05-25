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
 * Strings for component 'jitsi', language 'de', version '3.10'.
 *
 * @package     jitsi
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access'] = 'Teilnehmen';
$string['accessto'] = 'Teilnehmen bei {$a}. Geben Sie Ihren Namen an.';
$string['accesstotitle'] = 'Teilnehmen bei {$a}';
$string['accesstowithlogin'] = 'Teilnehmen bei {$a}.';
$string['account'] = 'Konto';
$string['accountconnected'] = 'Konto verbunden und auf <b>In Verwendung</b> geschaltet.';
$string['accountinsufficientprivileges'] = 'Das eingerichtete Streaming-Konto hat keine ausreichenden Rechte. Wenden Sie sich an die Administrator/innen.';
$string['accounts'] = 'Streaming-/Aufzeichnungskonten';
$string['activatetooltip'] = 'Klicken Sie, um es zu verwenden';
$string['addaccount'] = 'Konto hinzufügen';
$string['adminaccountex'] = 'Mindestens ein Konto ist erforderlich, um Sitzungen mit der Streaming-Methode "Moodle integriert" zu streamen bzw. aufzuzeichnen.
  </br>Nur ein Konto kann "<b>in Verwendung</b>" sein und wird zum Streamen bzw. Aufzeichnen alle Trainersitzungen verwendet.
  </br>Wenn Sie neue Konten hinzufügen, wird empfohlen, sie <b> mit echten Kontonamen </b> zu benennen, um sich in Zukunft möglicherweise erneut anzumelden können und das Konto erneut zu autorisieren.
  </br>Nur Konten ohne Aufzeichnungen im Zusammenhang mit den Jitsi-Aktivitäten von Trainer/innen und ohne Aufzeichnungen, die zum Löschen von den Streaming-Servern ausstehen, können hier mithilfe des Papierkorbsymbols entfernt werden.
  </br>Neue Konten ohne Anmeldeinformationen könnten hier erscheinen, wenn Backups von Jitsi-Aktivitäten von einem anderen Server auf diesem mit Konten wiederhergestellt werden, die hier nicht vorhanden waren.';
$string['alias'] = 'Alias';
$string['allow'] = 'Beginn der Videokonferenz';
$string['apikeyid8x8'] = 'API-Schlüssel-ID';
$string['apikeyid8x8ex'] = 'Der API-Schlüssel-ID wird mit einem 8x8 Server verwendet. Sie bekommen ihn von der Administration des 8x8 Servers. (https://jaas.8x8.com/)';
$string['appaccessinfo'] = 'Um mit einem mobilen Endgerät am Meeting teilzunehmen, brauchen Sie die App "Jitsi Meet".';
$string['appid'] = 'App-ID';
$string['appidex'] = 'App-ID für die Token-Konfiguration';
$string['appinstalledtext'] = 'Wenn Sie die App bereits haben:';
$string['appnotinstalledtext'] = 'Wenn Sie die App noch nicht haben:';
$string['attendeesreport'] = 'Teilnehmerübersicht';
$string['authq'] = 'Melden Sie sich mit diesem Konto an, um Anmeldedaten zu erhalten und "in Verwendung" zu setzen?';
$string['blurbutton'] = 'Hintergrundoptionen';
$string['blurbuttonex'] = 'Alle Nutzer/innen sehen die Option „Hintergrund auswählen“. Diese Funktion ist cool, erfordert aber leistungsstarke Computer. Vielleicht sollten Sie es deaktivieren.';
$string['buttondownloadapp'] = 'App herunterladen';
$string['buttonopeninbrowser'] = 'Im Browser öffnen';
$string['buttonopenwithapp'] = 'Mit der App am Meeting teilnehmen';
$string['calendarstart'] = 'Das Meeting \'{$a}\' beginnt';
$string['click'] = 'Klicken';
$string['close'] = 'Ende der Videokonferenz';
$string['closebeforeopen'] = 'Sie haben für das Meeting ein Ende festgelegt, das vor dem Beginn liegt.';
$string['completiondetail:minutes'] = '{$a} Minuten teilnehmen';
$string['completionminutes'] = 'Teilnehmer/in muss teilnehmen';
$string['completionminutes_help'] = 'Dauer in Minuten, die Teilnehmer/innen teilnehmen müssen, um die Aktivität abschließen zu können.';
$string['completionminutesex'] = 'Minuten teilnehmen';
$string['confirmdeleterecordinactivity'] = 'Möchten Sie diese Aufnahme wirklich löschen? Dieser Vorgang kann nicht rückgängig gemacht werden.';
$string['connectedattendeesnow'] = 'Teilnehmer/innen';
$string['copied'] = 'Link in die Zwischenablage kopiert';
$string['deeplink'] = 'Deep Link';
$string['deeplinkex'] = 'Wenn Sie die Moodle-App verwenden, können Sie Jitsi-Meetings in die Jitsi App übertragen.';
$string['deleteq'] = 'Löschen und Konto trennen';
$string['deletesourceq'] = 'Möchten Sie wirklich löschen? Die Aufzeichnung wird dauerhaft vom Videoserver gelöscht und kann nicht wiederhergestellt werden.';
$string['deletesources'] = 'Aufzeichnungen zum Löschen verfügbar';
$string['deletetooltip'] = 'Löschen';
$string['deprecated'] = 'Veraltet';
$string['deprecatedex'] = 'Veraltete Parameter, die wahrscheinlich nicht funktionieren werden, weil Jitsi Meet die Implementierung geändert hat.';
$string['desktopaccessinfo'] = 'Wenn Sie am Meeting teilnehmen möchten, klicken Sie auf die Taste und öffnen Sie Jitsi im Browser.';
$string['domain'] = 'Jitsi-Server';
$string['domainex'] = 'Das ist der Jitsi-Server, der verwendet werden soll. Sie können im Internet nach alternativen öffentlichen Jitsi-Servern suchen, die lokal näher liegen und weniger Latenz aufweisen.
Wenn Sie einen eigenen Jitsi-Server beteiben, tragen Sie bitte die URL hier ohne "https://" ein.';
$string['editrecordname'] = 'Aufzeichnungsname bearbeiten';
$string['entersession'] = 'Meeting beitreten';
$string['errordeleting'] = 'Fehler beim Löschen';
$string['experimental'] = 'Experimentell';
$string['experimentalex'] = 'Dies sind Optionen, mit denen wir experimentieren und die in zukünftigen Versionen möglicherweise verschwinden.';
$string['finish'] = 'Das Meeting ist beendet.';
$string['finishandreturn'] = 'Beenden und zurück';
$string['finishandreturnex'] = 'Zum Kurs zurückgehen, wenn die Sitzung beendet ist. Bei Verwendung von einem öffentlichem Jitsi gelangen die Nutzer/innen zum Kurs zurück, sobald sie die Werbung schließen.';
$string['finishinvitation'] = 'Der Einladungslink läuft ab am';
$string['guestform'] = 'Zum Gastformular';
$string['hasentered'] = 'hat Ihr privates Jitsi betreten.';
$string['help'] = 'Hilfe';
$string['helpex'] = 'Dieser Hilfetext wird am Ende in allen Jitsi-Aktivitäten angezeigt. Es ist ein guter Ort für Netiquette-Regeln oder Hilfeanweisungen für Nutzer/innen.';
$string['here'] = 'hier';
$string['identification'] = 'Nutzer-ID';
$string['identificationex'] = 'Nutzer-ID, die im Meeting angezeigt wird';
$string['instruction'] = 'Klicken Sie auf die Taste \'Teilnehmen\'.';
$string['integrated'] = 'Moodle integriert';
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
$string['jitsi:viewusersonsession'] = 'Zugriff auf die Teilnehmerübersicht';
$string['jitsiinterface'] = 'Jitsi-Schnittstelle';
$string['jitsiname'] = 'Name des Meetings';
$string['linkexpiredon'] = 'Dieser Link läuft am {$a} ab.';
$string['loginq'] = 'Möchten Sie dieses Konto auf "in Verwendung" schalten?';
$string['logintooltip'] = 'Für dieses Konto sind Anmeldedaten erforderlich.';
$string['messageprovider:callprivatesession'] = 'Zu privatem Jitsi einladen';
$string['messageprovider:onprivatesession'] = 'Nutzer/in in privatem Meeting';
$string['minpretime'] = 'Zugang vor Beginn';
$string['minpretime_help'] = 'Nutzer/innen mit Moderationsberechtigungen können diese Zeit (in Minuten) vor Beginn bereits zugreifen.';
$string['minutesconnected'] = 'Sie sind seit {$a} Minuten verbunden.';
$string['modulename'] = 'Jitsi';
$string['modulename_help'] = 'Mit Jitsi können Sie eine Videokonferenz einrichten und durchführen. Für diese Videokonferenz sind alle Teilnehmer/innen Ihres Kurses zugelassen. Beim Betreten der Videokonferenz werden automatisch die Nutzernamen und die Nutzerbilder aus Moodle übernommen und angezeigt.

Jitsi ist eine Open-Source-Software, mit der Sie Videokonferenzen einfach und sicher durchführen können.';
$string['modulenameplural'] = 'Jitsi';
$string['myprivatesession'] = 'Privates Meeting';
$string['nameandsurname'] = 'Vorname + Nachname';
$string['newvaluefor'] = 'Neuer Wert für';
$string['noinviteaccess'] = 'Der Zugriff für Gäste ist momentan nicht erlaubt.';
$string['nojitsis'] = 'Keine Jitsi-Aktivitäten gefunden';
$string['nostart'] = 'Das Meeting hat noch nicht begonnen. Sie können {$a} Minuten vor Beginn zugreifen.';
$string['notloggedin'] = 'Anmeldedaten erforderlich';
$string['noviewpermission'] = 'Sie haben nicht das Recht, dieses Jitsi-Meeting anzuzeigen.';
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
$string['presscambutton'] = 'Taste \'Kamera\' drücken';
$string['pressdesktopbutton'] = 'Taste \'Schreibtisch\' drücken';
$string['pressendbutton'] = 'Taste \'Ende\' drücken';
$string['pressmicrophonebutton'] = 'Taste \'Mikrofon\' drücken';
$string['pressrecordbutton'] = 'Taste \'Aufnehmen\' drücken';
$string['privacy:metadata:jitsi'] = 'Zur Integration in ein Jitsi-Meeting müssen Nutzerdaten mit dem Jitsi-Server ausgetauscht werden.';
$string['privacy:metadata:jitsi:avatar'] = 'Das Nutzerbild wird von Moodle gesendet, um es anderen Personen im Jitsi-Meeting zu zeigen.';
$string['privacy:metadata:jitsi:username'] = 'Der Nutzername wird von Moodle gesendet, um ihn anderen Personen im Jitsi-Meeting zu zeigen.';
$string['privatekey'] = 'Persönlicher Schlüssel';
$string['privatekeyex'] = 'Der persönliche Schlüssel wird mit einem 8x8-Server verwendet, um das Token zu signieren. Sie bekommen ihn von den Administrator/innen des 8x8-Servers.';
$string['privatesession'] = 'Privates Meeting {$a}';
$string['privatesessiondisabled'] = 'Private Meetings sind deaktiviert';
$string['privatesessions'] = 'Private Meetings';
$string['privatesessionsex'] = 'Private Meetings in den Nutzerprofilen hinzufügen';
$string['raisehand'] = 'Taste \'Hand heben\'';
$string['raisehandex'] = 'Die Taste \'Hand heben\' für alle anzeigen. Wenn Nutzer/innen ihre Hand heben, können sie auf das Teilnehmerfeld zugreifen. Wenn Sie das Teilnehmerfeld ausblenden, sollten Sie auch diese Schaltfläche ausblenden.';
$string['reactions'] = 'Reaktionen';
$string['reactionsex'] = 'Laute Emoticons wie Applaus, Überraschung usw. anzeigen. Die Taste \'Hand heben\' muss aktiviert sein.';
$string['record'] = 'Aufnahme';
$string['recordex'] = 'Aktivieren Sie die nativen Optionen für Jitsi-Aufzeichnungen (eigentlich Dropbox) für Nutzer/innen mit dem Recht mod/jitsi:record (Trainer/innen). Wenn Sie die "Streaming-Konfiguration" auf "Moodle integriert" einstellen, möchten Sie diese wahrscheinlich deaktivieren.';
$string['records'] = 'Aufnahmen';
$string['recordtitle'] = 'Aufnahme';
$string['secret'] = 'Secret';
$string['secretex'] = 'Secret für die Token-Konfiguration';
$string['securitybutton'] = 'Taste \'Sicherheit\'';
$string['securitybuttonex'] = 'Dies aktiviert die native Jitsi-Optionen \'Sicherheit\' und den \'Lobby-Modus\'. Sie sollten diese Option deaktivieren, wenn Sie oben ein Kennwort festgelegt haben, da das Kennwort den Nutzer/innen angezeigt wird. Bei Token-Konfiguration können Sie mit dieser Option experimentieren.';
$string['separator'] = 'Trennzeichen';
$string['separatorex'] = 'Legen Sie das Trennzeichen für die Meeting-Namen fest.';
$string['sessionisbeingrecorded'] = 'Das Meeting wird aufgezeichnet.';
$string['sessionnamefields'] = 'Felder für Meeting-Namen';
$string['sessionnamefieldsex'] = 'Felder, die den Meeting-Namen festlegen';
$string['sharetoinvite'] = 'Teilen Sie diesen Link, um jemanden zum Jitsi-Meeting einzuladen (auch extern).';
$string['showavatars'] = 'Nutzerbilder in Jitsi anzeigen';
$string['showavatarsex'] = 'Nutzerbilder der Teilnehmer/innen in Jitsi anzeigen. Wenn Nutzer/innen kein Profilbild haben, wird das standardmäßige Profilbild von Moodle geladen, anstatt die in Jitsi üblichen Initialen zu verwenden.';
$string['simultaneouscameras'] = 'Gleichzeitige Kameras';
$string['simultaneouscamerasex'] = 'Anzahl der gleichzeitig möglichen Kameras. Dies könnte vom Jitsi-Server mit einem niedrigeren Wert überschrieben werden. Zu viele Kameras könnten die Browser der Teilnehmer/innen überlasten.';
$string['staticinvitationlink'] = 'Option \'Einladung\'';
$string['staticinvitationlinkex'] = 'Verwenden Sie diesen Link für Personen, die nicht in diesem Kurs eingeschrieben sind, z.B. für Gäste ohne Nutzerkonto in Moodle.';
$string['staticinvitationlinkexview'] = 'Teilen Sie diesen Link mit Personen, die nicht in diesem Kurs eingeschrieben sind, z.B. für Gäste ohne eigenes Nutzerkonto in Moodle.';
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
$string['tokenconfiguration8x8ex'] = 'Wenn Sie 8x8-Server verwenden, müssen Sie die folgenden Parameter konfigurieren.';
$string['tokenconfigurationex'] = 'Wenn Sie einen  Jitsi-Server im \'Token-Modus\' verwenden, z.B. Ihren eigenen Server oder einen 8x8-Server, füllen Sie je nach Servertyp die folgenden Parameter aus. Dies ist erforderlich, um Nutzer/innen mit dem Recht mod/jitsi:moderation als native Jitsi-Moderatoren zu unterstützen.';
$string['tokennconfig'] = 'Token-Konfiguration';
$string['tokennconfig8x8'] = 'Konfiguration für 8x8-Server';
$string['updated'] = 'Aktualisiert';
$string['usercall'] = '{$a} lädt Sie zu einem privaten Jitsi ein';
$string['userenter'] = '{$a} ist in Ihrem privaten Jitsi';
$string['username'] = 'Anmeldename';
$string['validitytimevalidation'] = 'Die Einladung kann nicht ablaufen, bevor das Meeting beginnt oder nachdem das Meeting bereits beendet ist.';
$string['warningprivate'] = 'Wenn Sie zugreifen, bekommt {$a} eine Benachrichtigung.';
$string['watermarklink'] = 'Wasserzeichen-Link';
$string['watermarklinkex'] = 'Wasserzeichen-Link';
$string['whiteboard'] = 'Whiteboard';
$string['whiteboardex'] = 'Taste für das Whiteboard allen Nutzer/innen anzeigen';
$string['youtubebutton'] = 'Option \'Teilen per Youtube\'';
$string['youtubebuttonex'] = 'Option \'Teilen per Youtube\' anzeigen';
