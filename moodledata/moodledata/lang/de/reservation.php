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
 * Strings for component 'reservation', language 'de', version '4.5'.
 *
 * @package     reservation
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addparticipant'] = 'Reservierung hinzufügen';
$string['after10min'] = '10 Minuten nach Beginn';
$string['after12h'] = '12 Stunden nach Beginn';
$string['after1d'] = '1 Tag nach Beginn';
$string['after1h'] = '1 Stunde nach Beginn';
$string['after1w'] = '1 Woche nach Beginn';
$string['after2d'] = '2 Tage nach Beginn';
$string['after2h'] = '2 Stunden nach Beginn';
$string['after2w'] = '2 Wochen nach Beginn';
$string['after30min'] = '30 Minuten nach Beginn';
$string['after3w'] = '3 Wochen nach Beginn';
$string['after4h'] = '4 Stunden nach Beginn';
$string['after4w'] = '4 Wochen nach Beginn';
$string['after5min'] = '5 Minuten nach Beginn';
$string['after6h'] = '6 Stunden nach Beginn';
$string['alreadybooked'] = 'Sie haben bereits reserviert.&nbsp';
$string['alreadyoverbooked'] = 'Sie befinden sich bereits auf der Warteliste';
$string['atstart'] = 'Ab Veranstaltungsbeginn';
$string['autohide'] = 'Reservierungsliste automatisch ausblenden';
$string['availablerequests'] = 'Freie Plätze';
$string['badcourse'] = 'Kurs existiert nicht';
$string['badparent'] = 'Diese Reservierung war mit einer ungespeicherten Reservierung verknüpft. Die Verknüpfung wurde entfernt. Falls nötig können Sie diese manuell wieder herstellen.';
$string['badsection'] = 'Abschnitt existiert nicht im Kurs "{$a}"';
$string['badteachers'] = 'Spezifizierte Trainer E-Mail ({$a}) wurde nicht gefunden';
$string['badteachersmail'] = 'Spezifizierte Trainer E-Mail ({$a}) ist falsch';
$string['badtimeclose'] = 'Schließzeit ist falsch';
$string['badtimeend'] = 'Endzeit ist falsch';
$string['badtimeopen'] = 'Öffnungszeit ist falsch';
$string['badtimestart'] = 'Startzeit ist falsch';
$string['by'] = 'mit';
$string['bydate'] = 'Veranstaltungsdatum';
$string['byname'] = 'Name';
$string['bysection'] = 'Thema/Woche';
$string['cancelledon'] = 'Abgesagt';
$string['checkclashes'] = 'Ort- und Zeitüberschneidungen prüfen';
$string['clashesfound'] = 'Ort- oder Zeitüberschneidungen gefunden';
$string['clashesreport'] = 'Überschneidungsbericht';
$string['cleanview'] = 'Nur aktuelle Reservierungen anzeigen';
$string['close'] = 'Schließen';
$string['closed'] = 'Geschlossen';
$string['completionreserved'] = 'Sie müssen reservieren, um die Aktion abzuschließen';
$string['config'] = 'Globale Einstellungen für das Modul Reservierung';
$string['configautohide'] = 'Definieren Sie ab wann Reservierungen auf der Reservierungsliste (mod/reservation/index.php) ausgeblendet werden sollen. Dies könnte nützlich sein, um bei öffentlichen Listen eine "bereinigte" Aufstellung anzuzeigen.';
$string['configcheckclashes'] = 'Mit dieser Einstellung können Sie den Schalter "Ort- und Zeit Überschneidungen prüfen" auf der Bearbeitungsseite sichtbar machen.';
$string['configconnectto'] = 'Definieren Sie womit die Reservierung verbunden werden soll.';
$string['configdownload'] = 'Definieren Sie das Standard-Downloadformat für alle Listen.';
$string['configevents'] = 'Definieren Sie, welche Einträge bei einer Reservierung erzeugt werden sollen.';
$string['configfields'] = 'Definieren Sie welche weiteren Felder in der Reservierungstabelle auf der Bearbeitungsseite angezeigt werden sollen.';
$string['configlocations'] = 'Auf dieser Seite können Sie Veranstaltungsorte definieren und verwalten.';
$string['configmanualusers'] = 'Definieren Sie, welche Benutzerliste im Drop-Down-Menü "Reservierung hinzufügen" auf der Seite "Verwalten" verwendet werden soll.';
$string['configmaxoverbook'] = 'Definieren Sie den maximalen Prozentsatz für Überbuchung.';
$string['configmaxrequests'] = 'Definieren Sie die Obergrenze für Reservierungen im dazugehörigen Drop-Down-Menü auf der Bearbeitungsseite.';
$string['configminduration'] = 'Definieren Sie die Mindestdauer einer Reservierung, für die keine Endzeit festgelegt wurde. Diese Einstellung wird verwendet, um Ort- und Zeitverfügbarkeit zu prüfen.';
$string['confignotifies'] = 'Definieren Sie welche Benachrichtigungen gesendet werden sollen.';
$string['configoverbookstep'] = 'Definieren Sie die prozentuale Schrittweite für Überbuchung.';
$string['configpubliclists'] = 'Definieren Sie, ob Reservierungslisten veröffentlicht werden sollen. Das ermöglicht Einsichtnahme ohne Anmeldung!';
$string['configsortby'] = 'Definieren Sie, wonach die Reservierungslisten sortiert werden sollen.';
$string['configsublimits'] = 'Definieren Sie die Anzahl der Limitierungsregeln (Zeilen) auf der Bearbeitungsseite.';
$string['configupload'] = 'Erstellen Sie mehrere Reservierungen durch das Hochladen einer Text-Datei';
$string['confirmdelete'] = 'Sind Sie sicher, dass Sie die ausgewählten Reservierungsanfragen löschen wollen?';
$string['connectedto'] = 'Verbunden mit';
$string['connectto'] = 'Verbinden der Reservierung mit';
$string['description'] = 'Beschreibung';
$string['downloadas'] = 'Standard Downloadformat';
$string['duration10h'] = '10 Stunden';
$string['duration10min'] = '10 Minuten';
$string['duration11h'] = '11 Stunden';
$string['duration12h'] = '12 Stunden';
$string['duration15min'] = '15 Minuten';
$string['duration20min'] = '20 Minuten';
$string['duration2h'] = '2 Stunden';
$string['duration30min'] = '30 Minuten';
$string['duration3h'] = '3 Stunden';
$string['duration45min'] = '45 Minuten';
$string['duration4h'] = '4 Stunden';
$string['duration5h'] = '5 Stunden';
$string['duration5min'] = '5 Minuten';
$string['duration60min'] = '60 Minuten';
$string['duration6h'] = '6 Stunden';
$string['duration7h'] = '7 Stunden';
$string['duration8h'] = '8 Stunden';
$string['duration90min'] = '90 Minuten';
$string['duration9h'] = '9 Stunden';
$string['enablenote'] = 'Benutzeranmerkung zulassen';
$string['equal'] = 'gleich';
$string['err_sublimitsgreater'] = 'Die Summe der Limitierungen übersteigt die Obergrenze für Reservierungen.';
$string['err_timeendlower'] = 'Der Endtermin liegt vor dem Starttermin';
$string['err_timeopengreater'] = 'Der Starttermin liegt nach dem Endtermin';
$string['eventevent'] = 'Veranstaltungszeitraum (Dauer der Veranstaltung)';
$string['eventreminder'] = '{$a} (reserviert)';
$string['eventrequestadded'] = 'Reservierung hinzugefügt';
$string['eventrequestcancelled'] = 'Reservierung storniert';
$string['eventrequestdeleted'] = 'Reservierung gelöscht';
$string['events'] = 'Kalendereinträge';
$string['eventsettings'] = 'Allgemeine Einstellungen';
$string['explainconfig'] = 'Administratoren können hier globale Einstellungen für das Reservierungsmodul definieren.';
$string['fields'] = 'anzeigbare Felder';
$string['fullview'] = 'Zeige gelöschte Reservierungen';
$string['gradedmail'] = '{$a->teacher} hat ein Feedback zu Ihrer Reservierung geschrieben \'{$a->reservation}\' Sie können es hier einsehen: {$a->url}';
$string['gradedmailhtml'] = '{$a->teacher} hat ein Feedback zu Ihrer Reservierung geschrieben \'<i>{$a->reservation}</i>\'<br /><br /> Sehen Sie <a href="{$a->url}">hier</a>.';
$string['importreservations'] = 'Reservierungen importieren';
$string['invalidreservationid'] = 'Fehlerhafte Reservierungs-ID';
$string['justbooked'] = 'Sie haben reserviert als: {$a}';
$string['justoverbooked'] = 'Sie sind überbucht als: {$a}';
$string['linenumber'] = '#';
$string['location'] = 'Veranstaltungsort';
$string['locations'] = 'Veranstaltungsorte verwalten';
$string['locationslist'] = 'Orte auflisten';
$string['mail'] = 'Reservierung \'{$a->reservation}\' wurde geschlossen.

Sie können Ihre Reservierungsliste herunterladen unter:

    {$a->url}';
$string['mailhtml'] = 'Reservierung <em>{$a->reservation}</em> wurde geschlossen.<br/><br/>
Sie können Ihre Reservierungsliste <a href="{$a->url}">hier</a> herunterladen.';
$string['mailrequest'] = 'Reservierung \'{$a->reservation}\' wurde geschlossen. Sie sehen Ihre Reservierung unter: {$a->url}';
$string['mailrequesthtml'] = 'Reservierung <em>{$a->reservation}</em> wurde geschlossen. <br/>
Sie können Ihre Reservierung <a href="{$a->url}">hier</a> aufrufen.';
$string['manage'] = 'Verwalten';
$string['manualusers'] = 'Benutzerliste verwenden von:';
$string['maxoverbook'] = 'Obergrenze für Überbuchung in Prozent';
$string['maxrequest'] = 'Obergrenze für Reservierungen';
$string['message'] = 'Nachricht an die Teilnehmer';
$string['minduration'] = 'Mindestdauer';
$string['modulename'] = 'Reservierung';
$string['modulename_help'] = '<p>Das Hauptziel dieser Aktivität ist die Planung von Laborveranstaltungen und Prüfungen, Sie können aber auch alle anderen Ereignisse planen.</p>Trainer können die Anzahl der verfügbaren Plätze für die Veranstaltung, das Datum des Ereignisses, sowie die Verfügbarkeit der Reservierung bestimmen.</br><p>Die Lernenden können sich einen Sitzplatz reservieren und dieser Reservierung eine Anmerkung hinzufügen.</p><p>Nach dem Ende der Veranstaltung kann der Trainer die Ergebnisse bewerten. Die Bewertung kann in Worten oder in Punkten erfolgen. Die Lernenden werden per Mail benachrichtigt.</p><p>Die Reservierungslisten können in verschiedenen Formaten heruntergeladen werden.</p>';
$string['modulenameplural'] = 'Reservierungen';
$string['newlocation'] = 'Orte anlegen';
$string['noclashes'] = 'Keine Ort- und Zeitüberschneidungen gefunden';
$string['nocourseswithnsections'] = 'Kein Kurs mit {$a} Abschnitten';
$string['nolimit'] = 'Keine Obergrenze für Reservierung';
$string['nomorerequest'] = 'Keine Plätze mehr vorhanden';
$string['nooverbook'] = 'Keine Überbuchung';
$string['noparent'] = 'Keine';
$string['noreservations'] = 'Keine Reservierungen anzeigbar';
$string['note'] = 'Anmerkung zur Reservierung';
$string['noteachers'] = 'Keine Trainer verfügbar';
$string['notequal'] = 'ungleich';
$string['notifies'] = 'Benachrichtigung senden';
$string['notifygrades'] = 'Reservierung bewertet, Benachrichtigung an Lernenden';
$string['notifystudents'] = 'Reservierung geschlossen, Benachrichtigung an Lernenden';
$string['notifyteachers'] = 'Reservierung geschlossen, Benachrichtigung an Trainer';
$string['notopened'] = 'Nicht geöffnet';
$string['novalues'] = 'Keine verfügbaren Werte für dieses Feld';
$string['number'] = 'Reservierungsnummer';
$string['optional'] = 'Optional';
$string['otherlocation'] = 'Anderen Ort bestimmen';
$string['overbook'] = 'Überbuchung';
$string['overbookonly'] = 'Nur noch überbuchte Plätze frei';
$string['overbookstep'] = 'Überbuchen (Schrittweite)';
$string['overview'] = 'Übersicht';
$string['parent'] = 'Reservierung verbinden mit';
$string['pluginadministration'] = 'Reservierung Administration';
$string['pluginname'] = 'Reservierung';
$string['privacy:metadata:reservation_request:reservationid'] = 'Reservierungs ID';
$string['privacy:metadata:reservation_request:timecancelled'] = 'Datum und Zeit der Anfrage-Stornierung';
$string['privacy:metadata:reservation_request:timecreated'] = 'Datum und Zeit der Anfrage-Erstellung';
$string['publiclists'] = 'Reservierungslisten veröffentlichen';
$string['requestoverview'] = 'Reservierungsübersicht';
$string['requests'] = 'Reservierungen';
$string['required'] = 'Erforderlich';
$string['reservation:addinstance'] = 'Neue Reservierung hinzufügen';
$string['reservation:downloadrequests'] = 'Reservierungsliste herunterladen';
$string['reservation:grade'] = 'Bewertung hinzufügen';
$string['reservation:manualdelete'] = 'Reservierungen anderer Benutzer löschen';
$string['reservation:manualreserve'] = 'Reservierungen für anderer Benutzer vornehmen';
$string['reservation:reserve'] = 'Eigene Reservierungen vornehmen';
$string['reservation:uploadreservations'] = 'Reservierungen hochladen';
$string['reservation:viewnote'] = 'Anmerkung zur Reservierung sehen';
$string['reservation:viewrequest'] = 'Die Reservierungsliste einsehen';
$string['reservation_listing'] = 'Einstellungen für Seitenindex';
$string['reservation_other'] = 'Weitere Einstellungen';
$string['reservation_settings'] = 'Einstellungen bearbeiten';
$string['reservation_view'] = 'Einstellungen für Seitenansicht';
$string['reservationcancelled'] = 'Reservierung storniert';
$string['reservationclosed'] = 'Reservierung geschlossen';
$string['reservationdenied'] = 'Reservierung nicht zugelassen';
$string['reservationevent'] = 'Reservierungszeitraum (Dauer der Reservierungsmöglichkeit)';
$string['reservationnotopened'] = 'Reservierung noch nicht geöffnet';
$string['reservations'] = 'Reservierungen';
$string['reservationsettings'] = 'Einstellungen für Reservierung';
$string['reserve'] = 'Reservieren';
$string['reservecancel'] = 'Reservierung stornieren';
$string['reserved'] = 'Reserviert';
$string['reservedon'] = 'Reserviert am';
$string['reservedonconnected'] = 'Sie haben die ausgewählte Veranstaltung bereits gebucht:{$a}';
$string['resetreservation'] = 'Alle Reservierungen löschen';
$string['save'] = 'Bewertung speichern';
$string['selectvalue'] = 'Wählen Sie einen der verfügbaren Werte';
$string['showrequest'] = 'Teilnehmer kann Reservierungsliste einsehen (nach Schließung)';
$string['sortby'] = 'Reservierungsliste sortiert nach';
$string['sublimit'] = 'Limit {$a}';
$string['sublimitrules'] = 'Limitierungsregeln';
$string['sublimits'] = 'Limitierungsregeln';
$string['timeclose'] = 'Reservierungsende';
$string['timeend'] = 'Veranstaltungsende';
$string['timeopen'] = 'Reservierungsbeginn';
$string['timestart'] = 'Veranstaltungsbeginn';
$string['upload'] = 'Reservierungen hochladen';
$string['upload_help'] = '<p>Reservierung können per Text-Datei hochgeladen werden. Das Format der Datei sollte wie folgt aussehen:</p><ul><li> Jede Zeile der Datei enthält einen Datensatz</li><li>Jeder Datensatz ist eine Reihe von Daten, die durch Kommas (oder andere Trennzeichen) getrennt sind</li><li>Der erste Datensatz enthält eine Liste von Feldnamen, die das Format vom Rest der Datei definieren</li><li> Pflichtfelder sind "section", "name" und "timestart"</li><li>Optionale Feldnamen sind "course", "intro", "teachers", "timeend", "maxgrade", "timeopen", "timeclose", "maxrequest"</li><li>Ist kein Kurs angegeben, muss nach Vorschau ausgewählt werden.</li></ul>';
$string['uploadreservations'] = 'Reservierungen hochladen';
$string['uploadreservationspreview'] = 'Vorschau für hochzuladende Reservierungen';
$string['uploadreservationsresult'] = 'Ergebnis der hochgeladenen Reservierungen';
$string['with'] = 'mit';
$string['withselected'] = 'Auswählen...';
$string['yourgrade'] = 'Die Bewertung zu Ihrer Aktivität: {$a->grade}/{$a->maxgrade}';
$string['yournote'] = 'Ihre Notizen:';
$string['yourscale'] = 'Die Bewertung zu Ihrer Aktivität: {$a}';
