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
 * Strings for component 'tutorialbooking', language 'de', version '3.10'.
 *
 * @package     tutorialbooking
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addstudents'] = 'Teilnehmer/innen hinzufügen';
$string['adminlockhelp'] = 'Wählen Sie diese Option, um alle Terminwahlen standardmäßig zu sperren.';
$string['adminlockprompt'] = 'Wählen Sie diese Option, um Terminwahlen standardmäßig zu sperren.';
$string['adminnumbershelp'] = 'Definieren Sie hier die Standardanzahl an möglichen Plätzen für alle Terminwahlen - diese Standardanzahl kann bei der Konfiguration von Terminwahlen überschrieben werden';
$string['adminnumbersprompt'] = 'Anzahl der Teilnehmer/innen';
$string['adminservicehelp'] = 'Achtung: Wenn eingeschaltet werden E-Mails und Benachrichtigungen an Teilnehmer/innen im Kurs gesendet - wenn abgeschaltet, erhalten nur die Administrator/innen (id=2) die Benachrichtigungen.';
$string['adminserviceprompt'] = 'Markieren Sie diese Instanz als Moodle-Live-Dienst';
$string['after'] = 'Nach {$a->session}';
$string['ajax_invalid_slots'] = 'Die Termine sind nicht in der richtigen Terminwahl';
$string['ajax_slots_not_exist'] = 'Die Termine existieren nicht.';
$string['alreadysignedup'] = 'Sie haben sich bereits für einen Termin angemeldet.';
$string['attendcoltitle'] = 'Anwesenheit';
$string['attendees'] = 'Teilnehmer/innen';
$string['availabletoadd'] = 'Verfügbar zum Hinzufügen';
$string['backtosession'] = 'Nachricht gesendet. Hier klicken, um zur Terminwahl zurück zu gelangen.';
$string['cancel'] = 'Abbrechen';
$string['completionsignedup'] = 'Teilnehmer/innen müssen einen Termin auswählen, damit die Aktivität als abgeschlossen markiert wird.';
$string['completionsignedupgroup'] = 'Terminwahl einfordern';
$string['confirm'] = 'Bestätigen';
$string['confirmmessage'] = 'Sind Sie sicher, dass Sie {$a->name} in {$a->timeslot} stornieren wollen?';
$string['confirmremovefromslot'] = 'Möchten Sie wirklich Ihre Terminwahl stornieren?';
$string['confirmusersignupremoval'] = 'Entfernung der Terminwahlen bestätigen';
$string['copysession'] = 'Termin kopieren';
$string['cronfixduplicates'] = 'Doppelbuchungen korrigieren';
$string['defaultdescription'] = 'Termin {$a}';
$string['deletepageheader'] = 'Wirklich löschen?';
$string['deletesession'] = 'Löschen';
$string['deletewarningtext'] = 'Wollen Sie wirklich "{$a}" löschen?';
$string['editsession'] = 'Bearbeiten';
$string['editsessionheading'] = 'Vorhandenen Termin bearbeiten';
$string['editsessionhelp'] = 'Füllen Sie bitte das Formular unten aus, um diesen Termin zu bearbeiten.';
$string['editspaceserror'] = 'FEHLER: Sie können die Anzahl der Plätze ({$a->spaces}) nicht unter die Anzahl der Anmeldungen ({$a->signedup}) reduzieren.';
$string['emailgroupprompt'] = 'E-Mail an Gruppe';
$string['emailpagetitle'] = 'E-Mail an Gruppe';
$string['eventexport'] = 'Terminwahlen exportiert';
$string['eventexportall'] = 'Alle Terminwahlen exportiert';
$string['eventsessionadded'] = 'Termin hinzugefügt';
$string['eventsessiondeleted'] = 'Termin gelöscht';
$string['eventsessionmessage'] = 'Teilnehmer/innen des Termins benachrichtigt';
$string['eventsessionupdated'] = 'Termin aktualisiert';
$string['eventsignupadded'] = 'Buchen';
$string['eventsignupcapabilityremoved'] = 'Anmeldemöglichkeit verloren';
$string['eventsignupremoved'] = 'Einschreibung entfernt';
$string['eventsignupteacheradded'] = 'Einschreibung erzwungen';
$string['eventsignupteacherremoved'] = 'Einschreibung widerrufen';
$string['exportcsvlistallprompt'] = 'Alle Terminwahlen im Kurs als CSV exportieren';
$string['exportlistprompt'] = 'Diese Terminwahlen exportieren';
$string['first'] = 'Erster';
$string['freespaces'] = 'Freie Plätze';
$string['indexnoid'] = 'Für alle Terminwahlen muss eine Kurs-ID festgelegt werden.';
$string['instancedesc'] = 'Anmerkungen zur Terminwahl';
$string['instancedeschelp'] = 'Für Teilnehmer/innen bei der Einschreibung notwendige Informationen wie z.B. Dauer eines Termins';
$string['instanceheading'] = 'Allgemeine Einstellungen';
$string['instancenamehelp'] = 'z.B. Tutorium1 oder Computer Labor oder vierzehntägiges Tutorium';
$string['instancetitle'] = 'Titel der Terminwahl';
$string['last'] = 'Letzter';
$string['linktomanagetext'] = 'Termine verwalten';
$string['liveservicemsg'] = 'Live-Dienst erkannt, Benachrichtigungen werden an die Teilnehmer/innen gesendet';
$string['locked'] = 'Terminwahl entsperren';
$string['lockederror'] = 'Terminwahl ist gesperrt. Sie können sich nicht für Termine buchen.';
$string['lockedprompt'] = 'Gesperrt';
$string['lockhelp'] = 'Wenn gesperrt, sind Teilnehmer/innen nicht mehr in der Lage sich für Termine in dieser Terminwahl ein- oder auszutragen.
Wenn Sie jetzt sperren, werden die Terminwahlen im jetzigen Zustand eingefroren.';
$string['lockwarning'] = 'Diese Terminwahl ist von der/dem Veranstalter/in gesperrt. Sie können sich nicht eintragen oder abmelden.';
$string['messageprompt'] = 'Nachricht';
$string['messageprovider:notify'] = 'Benachrichtigung der Terminwahl';
$string['messagessent'] = 'Nachricht gesendet';
$string['messagewillbesent'] = 'Nachricht an Teilnehmer/in entfernt';
$string['moduleadminname'] = 'Terminwahl';
$string['modulename'] = 'Terminwahl';
$string['modulename_help'] = 'Die Aktivität Terminwahl erlaubt Teilnehmer/innen sich für ein Termine einzutragen.

Trainer/innen können:
* Die Namen von Teilnehmer/innen sichtbar oder unsichtbar schalten.
* Übersichten zu den einzelnen Terminen drucken.
* CSV-Dateien zu den Terminwahlen exportieren.
* Teilnehmer/innen manuell für Termine buchen und stornieren.
* Die Möglichkeit sich für Termine zu buchen, freigeben und sperren.
* Eine Nachricht an alle Teilnehmer/innen eines bestimmten Termins senden.';
$string['modulenameplural'] = 'Terminwahlen';
$string['movedownsession'] = 'Nach unten schieben';
$string['moveslot'] = 'Diesen Termin anfassen, um ihn zu verschieben.';
$string['moveupsession'] = 'Nach oben schieben';
$string['newsessionheading'] = 'Neuer Termin';
$string['newsessionhelp'] = 'Füllen Sie das folgende Formular aus, um einen neuen Termin in der Terminwahl zu erzeugen.';
$string['newtimslotprompt'] = 'Einen Termin zur Terminwahl hinzufügen';
$string['nosignup'] = 'Sie sind nicht in der Terminwahl eingetragen.';
$string['noslots'] = 'In dieser Terminwahl existieren keine Termine.';
$string['numbersline'] = '{$a->total} Plätze gesamt ({$a->taken} belegt, {$a->left} frei)';
$string['numbersline_oversubscribed'] = '{$a->total} Plätze gesamt ({$a->taken} belegt, überbelegt um {$a->left})';
$string['option_spaces_high'] = 'Die Anzahl der Plätze muss kleiner als 65536 sein.';
$string['option_spaces_low'] = 'Die Anzahl der Plätze muss größer als 0 sein.';
$string['oversubscribed'] = 'Es sind {$a->freeslots} Plätze frei für {$a->timeslotname}. Sie haben versucht {$a->numbertoadd} Teilnehmer/innen hinzuzufügen.';
$string['oversubscribedby'] = 'Überschrieben mit';
$string['pagecrumb'] = 'Termine';
$string['pagetitle'] = 'Terminwahl';
$string['pluginadministration'] = 'Terminwahl';
$string['pluginname'] = 'Terminwahl';
$string['positionfirst'] = 'Zum Anfang der Seite';
$string['positionlast'] = 'Zum Ende der Seite';
$string['positionprompt'] = 'Position';
$string['privacy'] = 'Privatsphäre';
$string['privacy:export:messages'] = 'Nachrichten';
$string['privacy:export:signups'] = 'Anmeldungen';
$string['privacy:metadata:core_message'] = 'Nachrichten wurden über das Nachrichtensystem an die Teilnehmer/innen gesendet.';
$string['privacy:metadata:tutorialbooking_messages'] = 'Speichert Nachrichten, die über das Terminwahl-Plugin an Teilnehmer/innen gesendet werden';
$string['privacy:metadata:tutorialbooking_messages:message'] = 'Diese Nachricht wurde gesendet';
$string['privacy:metadata:tutorialbooking_messages:sentby'] = 'Der Absender dieser Nachricht';
$string['privacy:metadata:tutorialbooking_messages:senttime'] = 'Diese Nachricht wurde gesendet am';
$string['privacy:metadata:tutorialbooking_messages:sentto'] = 'Der Empfänger dieser Nachricht';
$string['privacy:metadata:tutorialbooking_messages:subject'] = 'Der Betreff dieser Nachricht';
$string['privacy:metadata:tutorialbooking_signups'] = 'Speichert die Terminbuchungen der Teilnehmer/innen aus den Terminwahlen.';
$string['privacy:metadata:tutorialbooking_signups:sessionid'] = 'Der Termin, den sich die Person gebucht hat';
$string['privacy:metadata:tutorialbooking_signups:signupdate'] = 'Das Datum, an dem die Person gebucht hat';
$string['privacy:metadata:tutorialbooking_signups:userid'] = 'Nutzer-ID der Person, die gebucht hat';
$string['privacy_showall'] = 'Teilnehmer/innen können alle Einschreibungen sehen';
$string['privacy_showown'] = 'Teilnehmer/innen können nur ihre Einschreibungen sehen';
$string['reasonrequired'] = 'Sie müssen einen Grund für die Terminstornierung der Person angeben.';
$string['registerdateline'] = 'Geben Sie bitte das Datum des Termins an (tt/mm/jj):';
$string['registerfooter'] = 'Bestätigen Sie Ihre Terminwahl, um Ihre Anwesenheit zu signalisieren. Wenn Ihr Name nicht auf der Liste steht, dann fügen Sie ihn nicht hinzu, ohne vorher zu fragen.';
$string['registerprintdate'] = 'Teilnehmerliste drucken (nach Terminwahl)';
$string['registerprintname'] = 'Teilnehmerliste drucken (nach Name)';
$string['removalmessagesubject'] = 'Ihr Termin {$a->timeslot} wurde storniert';
$string['removalreason'] = 'Grund der Stornierung';
$string['remove'] = 'Stornierung bestätigen';
$string['removefromslot'] = 'Diesen Termin für mich stornieren';
$string['removeuserfromslot'] = 'Aus diesem Termin stornieren';
$string['reset'] = 'Rückgängig';
$string['save'] = 'Speichern';
$string['saveasnew'] = 'Als neuen Termin speichern';
$string['search:activity'] = 'Terminbuchung - Information zur Aktivität';
$string['search:session'] = 'Terminwahl- Information zum Termin';
$string['selectformat'] = 'Exportformat auswählen';
$string['sendmessage'] = 'Nachricht senden';
$string['sentby'] = 'Absender';
$string['senttime'] = 'gesendet an';
$string['sentto'] = 'Empfänger';
$string['sessiondescriptionhelp'] = 'Datum, Zeit und Ort z.B. 10:00 Uhr am Donnerstag, 16. August in Raum B35, Seminargebäude oder 10:00 Uhr am Donnerstag, 16. & 23. August und 6. September in Raum B35, Seminargebäude';
$string['sessiondescriptionhelp2'] = 'Vergessen Sie den Namen des Gebäudes nicht!<br/>
Vergewissern Sie sich, dass Sie den Raum reserviert haben!';
$string['sessiondescriptionprompt'] = 'Titel';
$string['sessionerror'] = '{$a}';
$string['sessionfull'] = 'Keine Plätze mehr frei! Wählen Sie einen anderen Termin.';
$string['sessionpagetitle'] = 'Terminverwaltung';
$string['sessionsummaryprompt'] = 'Details';
$string['showallmessages'] = 'Alle Nachrichten anzeigen';
$string['showalltutorialbookings'] = 'Index Terminwahl';
$string['showmymessages'] = 'Nur meine Nachrichten anzeigen';
$string['signupforslot'] = 'Mich auf diesen Termin buchen';
$string['signuprequired'] = 'Tragen Sie sich in die Terminwahl ein';
$string['spacesprompt'] = 'Anzahl der Plätze';
$string['statsline'] = 'Diese Terminwahl hat {$a->places} maximale Plätze und {$a->signedup} angemeldete Teilnehmer/innen.';
$string['studentcoltitle'] = 'Teilnehmername';
$string['subjecttitleprompt'] = 'Betreff';
$string['testservicemsg'] = 'Nicht aktiver Dienst - Benachrichtigung wird an die Administrator/innen gesendet (id=2)';
$string['thereareno'] = 'Für diesen Kurs gibt es keine Terminwahlen.';
$string['timeslottitle'] = 'Termintitel';
$string['totalspaces'] = 'Gesamtanzahl der Plätze';
$string['tutorialbooking'] = 'Terminwahl';
$string['tutorialbooking:addinstance'] = 'Nutzer/in erlauben, diese Aktivität zu einem Kurs hinzuzufügen.';
$string['tutorialbooking:adduser'] = 'Nutzer/in erlauben, andere Teilnehmer/innen zu einem Termin hinzu zu buchen.';
$string['tutorialbooking:editsignuplist'] = 'Nutzer/in erlauben, Termine zu bearbeiten.';
$string['tutorialbooking:export'] = 'Nutzer/in erlauben, Terminwahlen zu exportieren.';
$string['tutorialbooking:exportallcoursetutorials'] = 'Erforderlich für den Export der alle Terminwahlen in einem Kurs.';
$string['tutorialbooking:message'] = 'Nutzer/in erlauben, über die Aktivität der Terminwahl, Nachrichten an die Teilnehmer/innen zu senden.';
$string['tutorialbooking:oversubscribe'] = 'Ermöglicht es dem Benutzer, Teilnehmer zu einem Termin hinzu zubuchen, auch wenn dadurch die maximale Anzahl der Plätze überschritten wird.';
$string['tutorialbooking:printregisters'] = 'Nutzer/in erlauben, die Register für die Aktivität zu drucken.';
$string['tutorialbooking:removeuser'] = 'Nutzer/in erlauben, Teilnehmer/innen eines Termins zu stornieren.';
$string['tutorialbooking:submit'] = 'Erforderlich, um sich für einen Termin zu buchen.';
$string['tutorialbooking:viewadminpage'] = 'Nutzer/in erlauben, die Verwaltungsseite der Aktivität zu sehen.';
$string['tutorialbooking:viewallmessages'] = 'Erforderlich zum Anzeigen von Nachrichten, die andere Nutzer/innen an Teilnehmer/innen eines Termins gesendet haben.';
$string['unauthorised'] = 'Sie besitzen keine Berechtigung, sich zu buchen.';
$string['unlocked'] = 'Terminwahl sperren';
$string['usedspaces'] = 'Belegte Plätze';
$string['useralreadysignedup'] = 'Nutzer/in {$a->id} ist bereits für einen Termin gebucht.';
$string['userdisplay'] = '{$a->name} ({$a->username})';
$string['viewmessages'] = 'Gesendete Nachrichten anzeigen';
$string['you'] = 'Sie';
$string['yousignedup'] = 'Sie haben sich für diesen Termin gebucht';
