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
 * Strings for component 'diary', language 'de', version '4.5'.
 *
 * @package     diary
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessdenied'] = 'Zugriff verweigert';
$string['additionallinks'] = 'Weitere Links für diese Aktivität und diesen Kurs:';
$string['addtofeedback'] = 'Zum Feedback hinzufügen';
$string['alias'] = 'Schlagwort';
$string['aliases'] = 'Schlagwörter';
$string['aliases_help'] = 'Jedem Tagebucheintrag kann eine Liste an Schlagwörtern oder Aliasnamen zugeordnet werden. Verwenden Sie für jedes Schlagwort eine neue Zeile (nicht getrennt durch Kommata)';
$string['alwaysopen'] = 'Immer geöffnet';
$string['alwaysshowdescription'] = 'Beschreibung immer anzeigen';
$string['alwaysshowdescription_help'] = 'Wenn deaktiviert, wird die Tagebuch Beschreibung oben nur angezeigt, wenn der Tagebucheintrag geöffnet ist.';
$string['and'] = 'und';
$string['attachment'] = 'Anhang';
$string['attachment_help'] = 'Sie können auch Dateien an einen Tagebucheintrag anhängen.';
$string['autorating'] = 'Automatischer Bewertungsvorschlag';
$string['autorating_descr'] = 'Wenn diese Option aktiviert ist, wird automatisch ein Bewertungsvorschlag basierend auf den Min/Max Einstellungen für einen Tagebucheintrag gemacht.';
$string['autorating_help'] = 'Diese Einstellungen gemeinsam mit der Min/Max Anzahl legen die Standardeinstellungen für alle automatischen Bewertungsvorschläge in neuen Tagebüchern fest.';
$string['autorating_title'] = 'Automatische Bewertungsvorschläge aktivieren';
$string['autoratingbelowmaxitemdetails'] = 'Der automatischen Bewertungsvorschlag benötigt {$a->one} oder mehr {$a->two} mit einem möglichen Abzug von {$a->three}% pro fehlendem.<br>Sie haben {$a->four}. Sie müssen noch {$a->five} schreiben. Der mögliche Abzug beträgt {$a->six} Punkte.';
$string['autoratingitempenaltymath'] = 'Der automatische Bewertungsvorschlag wird mit (max({$a->one} - {$a->two}, 0)) * {$a->three} =  {$a->four}.<br> berechnet. Info: max verhindert negative Zahlen, die durch Übererfüllung des Auftrags entstehen können.';
$string['autoratingitempercentset'] = 'Prozentsatz für den automatischen Bewertungsvorschlag: {$a}%';
$string['autoratingovermaxitemdetails'] = 'Der automatische Bewertungsvorschlag sieht ein Maximum von {$a->one} {$a->two} vor, mit einem möglichen Abzug von {$a->three}% pro {$a->two} zu viel.<br>Sie haben {$a->four}. Das sind {$a->five} zu viel. Der mögliche Abzug beträgt {$a->six} Punkte.';
$string['availabilityhdr'] = 'Verfügbarkeit';
$string['avgsylperword'] = 'Durchschnittliche Silben pro Wort: {$a}';
$string['avgwordlenchar'] = 'Durchschnittliche Wortlänge: {$a} Zeichen';
$string['avgwordpara'] = 'Durchschnittliche Wörter pro Absatz: {$a}';
$string['blankentry'] = 'Leerer Eintrag';
$string['calendarend'] = '{$a} schließt';
$string['calendarstart'] = '{$a} öffnet';
$string['cancel'] = 'Übertragung abbrechen';
$string['chars'] = 'Zeichen:';
$string['charspersentence'] = 'Zeichen pro Satz';
$string['clearfeedback'] = 'Feedback entfernen';
$string['commonerrorpercentset'] = 'Einstellungen für häufige Fehler: {$a}%';
$string['commonerrors'] = 'Häufige Fehler';
$string['commonerrors_help'] = 'Häufige Fehler werden im mit dieser Aktiviät verknüpften "Fehlerglossar" definiert.';
$string['configdateformat'] = 'Damit wird festgelegt, wie Daten in Tagebuchberichten angezeigt werden. Der Standardwert "M d, Y G:i" ist Monat, Tag, Jahr und Uhrzeit im 24-Stunden-Format. Weitere Beispiele und vordefinierte Datumskonstanten finden Sie unter Datum im PHP-Handbuch.';
$string['created'] = 'Erstellt vor {$a->one} Tagen und {$a->two}  Stunden.';
$string['createnewprompt'] = 'Neue Anweisung erstellen';
$string['crontask'] = 'Hintergrundprozess für Tagebuch läuft';
$string['csvexport'] = 'Exportieren nach .csv';
$string['currententry'] = 'Aktuelle Tagebucheinträge:';
$string['currpotrating'] = 'Aktueller Bewertungsvorschlag: {$a->one} Punkte, oder {$a->two}%.';
$string['datechanged'] = 'Datum geändert';
$string['dateformat'] = 'Standard-Datumsformat';
$string['datestart'] = 'Datum einstellen, um Anweisungs-ID {$a} zu verwenden:';
$string['datestop'] = 'Datum einstellen, um Anweisungs-ID {$a} nicht mehr zu verwenden:';
$string['daysavailable'] = 'Verfügbare Tage';
$string['daysavailable_help'] = 'Wenn Sie das Wochenformat verwenden, können Sie einstellen, wie viele Tage das Tagebuch für die Verwendung geöffnet ist.';
$string['deadline'] = 'Offene Tage';
$string['delete'] = 'Löschen';
$string['deleteallratings'] = 'Alle Bewertungen löschen';
$string['deleteexconfirm'] = 'Bestätigen Sie, dass Sie Schreibanweisung-ID löschen möchten.';
$string['deletenotenrolled'] = 'Einträge von nicht eingeschriebenen Nutzer/innen löschen';
$string['details'] = 'Details:';
$string['detectcommonerror'] = 'Mindestens {$a->one} erkannt, {$a->two}. Diese sind: {$a->three}
<br>Wenn möglich sollten die Probleme behoben und der Eintrag erneut abgegeben werden.';
$string['diary:addentries'] = 'Tagebucheinträge hinzufügen';
$string['diary:addinstance'] = 'Tagebuchinstanzen hinzufügen';
$string['diary:manageentries'] = 'Tagebucheinträge verwalten';
$string['diary:rate'] = 'Tagebucheinträge bewerten';
$string['diaryclosetime'] = 'Endzeit';
$string['diaryclosetime_help'] = 'Wenn diese Option aktiviert ist, können Sie ein Datum festlegen, an dem das Tagebuch geschlossen wird und nicht mehr verwendet werden kann.';
$string['diarydescription'] = 'Beschreibung des Tagebuchs';
$string['diaryentrydate'] = 'Datum für diesen Eintrag festlegen';
$string['diaryid'] = 'Tagebuch-ID für die Übertragung zu';
$string['diarymail'] = 'Hallo {$a->user},
{$a->teacher} hat einige Rückmeldungen zu Ihrem Tagebucheintrag für \'{$a->diary}\' veröffentlicht.

Sie können diese als Anhang zu Ihrem Tagebucheintrag sehen:

    {$a->url}';
$string['diarymailhtml'] = 'Hallo {$a->user},<br>
{$a->teacher} hat Rückmeldungen zum Tagebucheintrag für \'<i>{$a->diary}</i>\' veröffentlicht.<br /><br />
Sie können diese als Anhang zu Ihrem <a href="{$a->url}">Tagebucheintrag sehen </a>.';
$string['diarymailhtmluser'] = 'hat einen Eintrag für \'<i>{$a->diary}</i>\' verfasst.<br /><br />
Sie können den <a href="{$a->url}">Tagebucheintrag einsehen</a>.<br /><br />Hinweis: Sie müssen gegebenenfalls Feeedback geben oder den Status des Eintrags aktualisieren, dass die Aktivität als abgeschlossen markiert wird.';
$string['diarymailuser'] = 'hat einen Eintrag für \'{$a->diary}\' verfasst

Sie können den Eintrag einsehen:

    {$a->url}

Hinweis: Sie müssen gegebenenfalls Feedback geben oder den Status des Eintrags aktualisieren, damit die Aktivität als abgeschlossen markiert wird.';
$string['diaryname'] = 'Name des Tagebuchs';
$string['diaryopentime'] = 'Startzeit';
$string['diaryopentime_help'] = 'Wenn diese Option aktiviert ist, können Sie ein Datum festlegen, an dem das Tagebuch zur Verwendung geöffnet wird.';
$string['diarytitle'] = 'Überschrift';
$string['diarytitle_help'] = 'Sie können eine Überschrift und eine Beschreibung hinzufügen';
$string['editall'] = 'Alle Einträge bearbeiten';
$string['editall_help'] = 'Wenn aktiviert, können Nutzer/innen alle Einträge bearbeiten.';
$string['editdates'] = 'Eintragsdatum bearbeiten';
$string['editdates_help'] = 'Wenn aktiviert, können Nutzer/innen das Datum jedes Eintrags bearbeiten.';
$string['editingended'] = 'Die Bearbeitungszeit ist beendet';
$string['editingends'] = 'Bearbeitungszeitraum endet';
$string['editthisentry'] = 'Diesen Eintrag bearbeiten';
$string['edittopoflist'] = 'Den Anfang der Liste bearbeiten';
$string['eeditlabel'] = 'Bearbeiten';
$string['emaillater'] = 'E-Mail später senden';
$string['emailnow'] = 'E-Mail sofort senden';
$string['emailpreference'] = 'Toggle E-Mails {$a}';
$string['enableautorating'] = 'Automatische Bewertungsvorschläge aktivieren';
$string['enableautorating_help'] = 'Automatische Bewertungsvorschläge aktivieren oder deaktivieren';
$string['enablestats'] = 'Statistiken aktivieren';
$string['enablestats_descr'] = 'Wenn aktiviert, werden Statistiken für jeden Tagebucheintrag gezeigt.';
$string['enablestats_help'] = 'Statistiken für jeden Tagebucheintrag aktivieren oder deaktivieren.';
$string['enablestats_title'] = 'Statistiken aktivieren';
$string['enabletitles'] = 'Überschriften aktivieren';
$string['enabletitles_descr'] = 'Wenn diese Option aktiviert ist, sind Überschriften für jeden Eintrag verpflichtend und werden angezeigt.';
$string['enabletitles_help'] = 'Überschriften für Einträge aktivieren oder deaktivieren';
$string['enabletitles_title'] = 'Überschriften aktivieren';
$string['entries'] = 'Einträge';
$string['entry'] = 'Eintrag';
$string['entrybgc'] = 'Hintergrundfarbe für Tagebucheintrag / Feedback';
$string['entrybgc_colour'] = '#93FC84';
$string['entrybgc_descr'] = 'Hier wird die Hintergrundfarbe eines Tagebucheintrages bzw. eines Feedbacks festgelegt.';
$string['entrybgc_help'] = 'Diese Einstellung legt die generelle Hintergrundfarbe für jeden Tagebucheintrag und jedes Feedback fest.';
$string['entrybgc_title'] = 'Hintergrundfarbe für Tagebucheintrag und Feedback';
$string['entrycomment'] = 'Kommentar zum Eintrag';
$string['entrysuccess'] = 'Ihr Eintrag wurde gespeichert. Möglicherweise muss dieser bewertet werden, bevor die Aktivität abgeschlossen werden kann.';
$string['entrytextbgc'] = 'Hintergrundfarbe eines Tagebucheintrags';
$string['entrytextbgc_colour'] = '#EEFC84';
$string['entrytextbgc_descr'] = 'Diese Einstellung legt die Hintergrundfarbe eines Tagebucheintrags fest';
$string['entrytextbgc_help'] = 'Diese Einstellung legt die Hintergrundfarbe eines Tagebucheintrags fest';
$string['entrytextbgc_title'] = 'Hintergrundfarbe eines Tagebucheintrags';
$string['errorbehavior'] = 'Fehlerabgleich';
$string['errorbehavior_help'] = 'Diese Einstellungen legen den Fehlerabgleich für Glossareinträge von häufigen Fehlern fest.';
$string['errorcmid'] = 'Fehlerglossar';
$string['errorcmid_help'] = 'Wählen Sie das Glossar, das eine Liste mit häufigen Fehlern beinhaltet. Jedes Mal wenn ein Fehler in der Abgabe gefunden wird, wird der festgelegte Prozentsatz von der Gesamtbewertung für diesen Tagebucheintrag abgezogen.';
$string['errorfullmatch'] = 'Einstellungen zum Fehlervergleich';
$string['errorfullmatch_help'] = 'Diese Einstellung ermöglicht den Abgleich von Fehlern mit Einträgen im Glossar mit häufigen Fehlern.';
$string['errorpercent'] = 'Abzug pro Fehler';
$string['errorpercent_help'] = 'Wählen Sie den Prozentsatz der Gesamtbewertung, der pro in der Abgabe gefundenen Fehler abgezogen werden soll.';
$string['errp'] = 'Fehler %:';
$string['eventdiarycreated'] = 'Tagebuch erstellt';
$string['eventdiarydeleted'] = 'Tagebuch gelöscht';
$string['eventdiaryviewed'] = 'Tagebuch angezeigt';
$string['eventdownloadentriess'] = 'Tagebucheinträge herunterladen';
$string['evententriesviewed'] = 'Tagebucheinträge angezeigt';
$string['evententrycreated'] = 'Tagebucheintrag erstellt';
$string['evententryupdated'] = 'Tagebucheintrag aktualisiert';
$string['eventfeedbackupdated'] = 'Feedback zum Tagebuch aktualisiert';
$string['eventinvalidentryattempt'] = 'Ungültiger Versuch eines Tagebucheintrags';
$string['eventpromptcreated'] = 'Schreibauftrag erstellt';
$string['eventpromptedited'] = 'Schreibauftrag bearbeitet';
$string['eventpromptinuse'] = 'Anweisung konnte nicht gelöscht werden';
$string['eventpromptremoved'] = 'Schreibauftrag entfernt';
$string['eventpromptsviewed'] = 'Anweisungen angesehen';
$string['eventxfrentries'] = 'Journal zu Tagebucheintrag umwandeln';
$string['exportfilename'] = 'eintraege.csv';
$string['exportfilenamep1'] = 'Ganze_Seite';
$string['exportfilenamep2'] = '_Tagebuch_Einträge_exportiert_Ein_';
$string['feedbackupdated'] = 'Rückmeldungen für {$a}-Einträge aktualisiert';
$string['files'] = 'Dokumente';
$string['firstentry'] = 'Erste Tagebucheinträge:';
$string['fkgrade'] = 'Flesch-Kincaid-Grade-Level';
$string['fkgrade_help'] = 'Der Flesch-Kincaid-Grade-Level Lesbarkeitsindex versucht in der Anzahl der Schuljahre, die ein Leser absolviert haben muss, um den Text zu verstehen, die Lesbarkeit eines Textes auszudrücken. Er ist auf die englische Sprache und das US-amerikanische Schulsystem abgestimmt. Der Flesch-Kincaid-Grade-Level berechnet sich wie folgt:
Flesch-Kincaid-Grade-Level = (0,39 * Durchschnittliche Satzlänge) + (11,8* Durchschnittliche Silbenlänge eines Wortes) - 15,59.
Der Lesbarkeitsindex ist auf die deutsche Sprache nur bedingt anwendbar.';
$string['fogindex'] = 'Fog Index';
$string['fogindex_help'] = 'Der Gunning-Fog Lesbarkeitsindex versucht in der Anzahl der Schuljahre, die ein Leser absolviert haben muss, um den Text zu verstehen, die Lesbarkeit eines Textes auszudrücken. Er ist auf die englische Sprache und das US-amerikanische Schulsystem abgestimmt. Der Gunning-Fog Lesbarkeitsindex berechnet sich wie folgt:
 ((Wörter pro Satz) + (Lange Wörter pro Satz)) x 0.4
Der Lesbarkeitsindex ist auf die deutsche Sprache nur bedingt anwendbar.';
$string['for'] = 'für Website:';
$string['format'] = 'Format';
$string['freadingease'] = 'Flesch Reading Ease';
$string['freadingease_help'] = 'Der Lesbarkeitsindex Flesch-Reading-Ease ist ein numerischer Wert für die Lesbarkeit, der aus einem Text berechnet werden kann. Je höher der Wert ist, desto leichter verständlich ist der Text. Gut verständliche Texte weisen einen Wert von etwa 60 bis 70 auf. Die Flesch-Reading-Ease ist dabei in ihrer Berechnung auf die englische Sprache abgestimmt. Der Flesch-Reading-Ease berechnet sich nach folgender Formel:
Flesch-Reading-Ease =206,835 - (1,015 * Durchschnittliche Satzlänge ) - (84,6 * Durchschnittliche Silbenzahl pro Wort)';
$string['generalerror'] = 'Ein Fehler ist aufgetreten.';
$string['generalerrorinsert'] = 'Tagebucheintrag konnte nicht erstellt werden.';
$string['generalerrorupdate'] = 'Tagebucheintrag konnte nicht aktualisiert werden.';
$string['gradeingradebook'] = 'Aktuelle Bewertung in der Bewertungsübersicht';
$string['highestgradeentry'] = 'Am besten bewertete Einträge:';
$string['idlable'] = '(ID: {$a})';
$string['incorrectcourseid'] = 'ungültige Kursmodul ID';
$string['incorrectmodule'] = 'Kursmodul ID war ungültig';
$string['invalidaccess'] = 'Ungültiger Zugriff';
$string['invalidaccessexp'] = 'Sie haben keine Berechtigung die Seite anzuzeigen. Der Zugriffsversuch wurde im Logfile vermerkt.';
$string['invalidtimechange'] = 'Ein ungültiger Versuch das Datum des Tagebucheintrags zu ändern wurde erkannt.';
$string['invalidtimechangenewtime'] = 'Geändertes Datum: {$a->one}.';
$string['invalidtimechangeoriginal'] = 'Ursprüngliches Datum: {$a->one}.';
$string['invalidtimeresettime'] = 'Das Datum wurde auf das ursprüngliche Datum des Eintrags zurückgesetzt: {$a->one}.';
$string['journalid'] = 'Journal-ID für die Übertragung';
$string['journalmissing'] = 'Derzeit gibt es keine Aktivität Journal in diesem Kurs.';
$string['journaltodiaryxfrdid'] = '<br>Liste der Tagebücher in diesem Kurs<br><b>    ID</b> | Kurs| Tagebuchname<br>';
$string['journaltodiaryxfrjid'] = 'Liste der Journale in diesem Kurs<br><b>    ID</b> | Kurs| Journal-Name<br>';
$string['journaltodiaryxfrp1'] = 'Dies ist eine Funktion für Administrator/innen, um Journaleinträge zu Tagebucheinträgen zu überführen. Einträge von mehreren Journalen können in einem einzigen Tagebuch zusammengefasst oder auf mehrere Tagebücher aufgeteilt werden. Dies ist eine neue Funktion und wird aktuell noch entwickelt.<br><br>';
$string['journaltodiaryxfrp2'] = 'Wenn die Checkbox <b>Umwandeln und E-Mail senden</b> aktiviert ist, werden alle Journaleinträge, die in einen Tagebucheintrag umgewandelt wurden markiert. Die Nutzer/innen werden über diese Umwandlung automatisch per E-Mail informiert.<br><br>';
$string['journaltodiaryxfrp3'] = 'Wenn die Checkbox, <b>Ohne E-Mail-Versand umwandeln</b> aktiviert ist, werden die Nutzer/innen über die Umwandlung von Journaleinträgen zu Tagebucheinträgen NICHT automatisch informiert. Die Umwandlung fügt jedoch automatisch zu jedem Tagebucheintrag ein Feedback hinzu, obwohl im ursprünglichen Journaleintrag kein Feedback vorhanden war.';
$string['journaltodiaryxfrp4'] = 'Der Name des aktuellen Kurses, in dem Sie arbeiten lautet: <b> {$a->one}</b>, mit Kurs-ID: <b> {$a->two}</b><br><br>';
$string['journaltodiaryxfrp5'] = 'Wenn Sie Feedback bezüglich der Übertragung hinzufügen möchten und der Journaleintrag noch kein Feedback beinhaltet, werden Sie automatisch als Lehrer/in zum Kurs hinzugefügt, um Fehler zu vermeiden.<br><br>';
$string['journaltodiaryxfrtitle'] = 'Journal zu Tagebuch xfr';
$string['lastnameasc'] = 'Nachname aufsteigend:';
$string['lastnamedesc'] = 'Nachname absteigend:';
$string['latestmodifiedentry'] = 'Zuletzt geänderte Einträge:';
$string['lexicaldensity'] = 'Lexikalische Dichte';
$string['lexicaldensity_help'] = 'Die lexikalische Dichte wird mit <br>
100 x (Anzahl an einzigartigen Wörtern) / (Gesamtzahl aller Wörter)<br>
berechnet.
Ein Eintrag mit vielen Wortwiederholungen hat also eine geringere lexikalische Dichte als ein Eintrag mit vielen unterschiedlichen Wörtern.';
$string['longwords'] = 'Einzigartige lange Wörter';
$string['longwords_help'] = 'Lange Wörter sind Wörter mit drei oder mehr Silben. Der Algorithmus zur Ermittlung der Silben liefert nur ungefähre Ergebnisse.';
$string['longwordspersentence'] = 'Lange Wörter pro Satz';
$string['lowestgradeentry'] = 'Am niedrigsten bewertete Einträge:';
$string['mailed'] = 'Benachrichtigt';
$string['mailsubject'] = 'Feedback zum Tagebuch';
$string['max'] = 'max';
$string['maxc'] = 'Max:';
$string['maxchar'] = 'Maximale Anzahl an Zeichen';
$string['maxchar_help'] = 'Wenn eine Zahl größer als 0 eingegeben wird, müssen die Teilnehmer/innen weniger Zeichen als die eingegebene maximale Anzahl verwenden. Ansonsten werden für jedes Zeichen, das zu viel eingegeben wurde, Punkte abgezogen.';
$string['maxcharacterlimit'] = 'Maximale Anzahl an Zeichen';
$string['maxcharacterlimit_desc'] = 'Info: In diesem Eintrag können <strong>maximal {$a} Zeichen</strong> verwendet werden.';
$string['maxcharacterlimit_help'] = 'Wenn eine Zahl eingetragen wird, können die Nutzer/innen maximal die angegebene Anzahl an Zeichen verwenden.';
$string['maxparagraph'] = 'Maximale Anzahl an Absätzen';
$string['maxparagraph_help'] = 'Wenn eine Zahl größer als 0 eingegeben wird, müssen die Teilnehmer/innen weniger Absätze als die eingegebene maximale Anzahl verwenden. Ansonsten werden für jeden Absatz, der zu viel eingegeben wurde, Punkte abgezogen.';
$string['maxparagraphlimit'] = 'Maximale Anzahl an Absätzen';
$string['maxparagraphlimit_desc'] = 'Info: In diesem Eintrag können <strong>maximal {$a} Absätze</strong> verwendet werden.';
$string['maxparagraphlimit_help'] = 'Wenn eine Zahl eingetragen wird, können die Nutzer/innen maximal die angegebene Anzahl an Absätzen verwenden.';
$string['maxpossrating'] = 'Die bestmögliche Bewertung für diesen Eintrag beträgt {$a} Punkte.';
$string['maxsentence'] = 'Maximale Anzahl an Sätzen';
$string['maxsentence_help'] = 'Wenn eine Zahl größer als 0 eingegeben wird, müssen die Teilnehmer/innen weniger Sätze als die eingegebene maximale Anzahl verwenden. Ansonsten werden für jeden Satz, der zu viel eingegeben wurde, Punkte abgezogen.';
$string['maxsentencelimit'] = 'Maximale Anzahl an Sätzen';
$string['maxsentencelimit_desc'] = 'Info: In diesem Eintrag können <strong>maximal {$a} Sätze</strong> verwendet werden.';
$string['maxsentencelimit_help'] = 'Wenn eine Zahl eingetragen wird, können die Nutzer/innen maximal die angegebene Anzahl an Sätzen verwenden.';
$string['maxword'] = 'Maximale Anzahl an Wörtern';
$string['maxword_help'] = 'Wenn eine Zahl größer als 0 eingegeben wird, müssen die Teilnehmer/innen weniger Wörter als die eingegebene maximale Anzahl verwenden. Ansonsten werden für jedes Wort, das zu viel eingegeben wurde, Punkte abgezogen.';
$string['maxwordlimit'] = 'Maximale Anzahl an Wörtern';
$string['maxwordlimit_desc'] = 'Info: In diesem Eintrag können <strong>maximal {$a} Wörter</strong> verwendet werden.';
$string['maxwordlimit_help'] = 'Wenn eine Zahl eingetragen wird, können die Nutzer/innen maximal die angegebene Anzahl an Wörtern verwenden.';
$string['mediumwords'] = 'Einzigartige mittellange Wörter';
$string['mediumwords_help'] = 'Mittellange Wörter sind Wörter mit zwei Silben. Der Algorithmus zur Ermittlung der Silben liefert nur ungefähre Ergebnisse.';
$string['min'] = 'min';
$string['minc'] = 'Min:';
$string['minchar'] = 'Mindestanzahl an Zeichen';
$string['minchar_help'] = 'Wenn eine Zahl größer als 0 eingegeben wird, müssen die Teilnehmer/innen mehr Zeichen als die eingegebene minmale Anzahl verwenden. Ansonsten werden für jedes Zeichen, das zu wenig eingegeben wurde, Punkte abgezogen.';
$string['mincharacterlimit'] = 'Mindestanzahl an Zeichen';
$string['mincharacterlimit_desc'] = 'Info: In diesem Eintrag müssen <strong>mindestens {$a} Zeichen</strong> verwendet werden.';
$string['mincharacterlimit_help'] = 'Wenn eine Zahl eingetragen wird, müssen die Nutzer/innen mindestens die eingetragene Anzahl an Zeichen verwenden.';
$string['minmaxcharpercent'] = 'Abzug für jede Verletzung der min/max Anzahl an Zeichen';
$string['minmaxcharpercent_help'] = 'Wählen Sie den Prozentsatz, der für jeden Fehler bei der minimalen/maximalen Zeichenanzahl vom Gesamtergebnis abgezogen werden sollte.';
$string['minmaxhdr'] = 'Min/Max Anzahl';
$string['minmaxhdr_help'] = 'Diese Einstellungen definieren den Standard für minimale und maximale Zeichen- und Wortanzahl für alle neuen Tagebücher';
$string['minmaxparagraphpercent'] = 'Abzüge für Verstöße gegen Min/Max-Anzahl an Absätzen';
$string['minmaxparagraphpercent_help'] = 'Wählen Sie den Prozentsatz, der für jeden Verstoß gegen die Min/Max Absatz-Anzahl von den Gesamtpunkte abgezogen werden soll.';
$string['minmaxparapercent'] = 'Abzug für jede Verletzung der min/max Anzahl an Absätzen';
$string['minmaxparapercent_help'] = 'Wählen Sie den Prozentsatz, der für jeden Fehler bei der minimalen/maximalen Absatzanzahl vom Gesamtergebnis abgezogen werden sollte.';
$string['minmaxpercent'] = 'Abzug für jeden Min/Max Fehler';
$string['minmaxpercent_help'] = 'Wählen Sie den Prozentsatz, der für jeden Fehler bei Verletzung der Min/Max-Angaben vom Gesamtergebnis abgezogen werden sollte.';
$string['minmaxsentencepercent'] = 'Abzüge für Verstöße gegen Min/Max-Anzahl an Sätzen';
$string['minmaxsentencepercent_help'] = 'Wählen Sie den Prozentsatz, der für jeden Verstoß gegen die Min/Max Satz-Anzahl von den Gesamtpunkte abgezogen werden soll.';
$string['minmaxsentpercent'] = 'Abzug für jede Verletzung der min/max Anzahl an Sätzen';
$string['minmaxsentpercent_help'] = 'Wählen Sie den Prozentsatz, der für jeden Fehler bei der minimalen/maximalen Satzanzahl vom Gesamtergebnis abgezogen werden sollte.';
$string['minmaxwordpercent'] = 'Abzug für jede Verletzung der min/max Anzahl an Wörtern';
$string['minmaxwordpercent_help'] = 'Wählen Sie den Prozentsatz, der für jeden Fehler bei der minimalen/maximalen Wortanzahl vom Gesamtergebnis abgezogen werden sollte.';
$string['minparagraph'] = 'Mindestanzahl Absätze';
$string['minparagraph_help'] = 'Wenn eine Zahl größer als 0 eingegeben wird, müssen die Teilnehmer/innen mehr Absätze als die eingegebene minmale Anzahl verwenden. Ansonsten werden für jeden Absatz, der zu wenig eingegeben wurde, Punkte abgezogen.';
$string['minparagraphlimit'] = 'Mindestanzahl an Absätzen';
$string['minparagraphlimit_desc'] = 'Info: In diesem Eintrag müssen <strong>mindestens {$a} Absätze</strong> verwendet werden.';
$string['minparagraphlimit_help'] = 'Wenn eine Zahl eingetragen wird, müssen die Nutzer/innen mindestens die eingetragene Anzahl an Absätzen verwenden.';
$string['minsentence'] = 'Mindestanzahl Sätze';
$string['minsentence_help'] = 'Wenn eine Zahl größer als 0 eingegeben wird, müssen die Teilnehmer/innen mehr Sätze als die eingegebene minmale Anzahl verwenden. Ansonsten werden für jeden Satz, der zu wenig eingegeben wurde, Punkte abgezogen.';
$string['minsentencelimit'] = 'Mindestanzahl an Sätzen';
$string['minsentencelimit_desc'] = 'Info: In diesem Eintrag müssen <strong>mindestens {$a} Sätze</strong> verwendet werden.';
$string['minsentencelimit_help'] = 'Wenn eine Zahl eingetragen wird, müssen die Nutzer/innen mindestens die eingetragene Anzahl an Sätzen verwenden.';
$string['minword'] = 'Mindestanzahl Wörter';
$string['minword_help'] = 'Wenn eine Zahl größer als 0 eingegeben wird, müssen die Teilnehmer/innen mehr Wörter als die eingegebene minmale Anzahl verwenden. Ansonsten werden für jedes Wort, das zu wenig eingegeben wurde, Punkte abgezogen.';
$string['minwordlimit'] = 'Mindestanzahl an Wörtern';
$string['minwordlimit_desc'] = 'Info: In diesem Eintrag müssen <strong>mindestens {$a} Wörter</strong> verwendet werden.';
$string['minwordlimit_help'] = 'Wenn eine Zahl eingetragen wird, müssen die Nutzer/innen mindestens die eingetragene Anzahl an Wörtern verwenden.';
$string['missing'] = 'Fehlend';
$string['modulename'] = 'Tagebuch';
$string['modulename_help'] = 'Die Tagebuchaktivität ermöglicht es Trainer/innen, über einen bestimmten Zeitraum hinweg von den Teilnehmer/innen ein Feedback zu bekommen.';
$string['modulenameplural'] = 'Tagebücher';
$string['needsgrading'] = 'Dieser Eintrag hat noch keine Rückmeldung oder Bewertung erhalten.';
$string['needsregrade'] = 'Dieser Eintrag hat sich geändert, seit ein Feedback oder eine Bewertung abgegeben wurde.';
$string['newdiaryentries'] = 'Neue Tagebucheinträge';
$string['nextentry'] = 'Nächster Eintrag';
$string['nodeadline'] = 'Immer offen';
$string['noentriesmanagers'] = 'Keine Trainer/innen';
$string['noentry'] = 'Kein Eintrag';
$string['noratinggiven'] = 'Keine Bewertung abgegeben';
$string['notextdetected'] = '<b>Kein Text erkannt!</b>';
$string['notopenuntil'] = 'Dieses Tagebuch ist nicht geöffnet bis';
$string['notstarted'] = 'Sie haben dieses Tagebuch noch nicht begonnen';
$string['numwordscln'] = '{$a->one} Wörter mit {$a->two} Zeichen, OHNE {$a->three} Leerzeichen.';
$string['numwordsnew'] = 'Neue Berechnung: {$a->one} Wörter mit {$a->two} Zeichen, in {$a->three} Sätzen, in {$a->four} Absätzen.';
$string['numwordsraw'] = '{$a->one} Wörter mit  {$a->two} Zeichen, inklusive {$a->three} Leerzeichen.';
$string['numwordsstd'] = '{$a->one} Wörter mit {$a->two} Zeichen, inklusive {$a->three} Leerzeichen.';
$string['outof'] = 'aus {$a} Einträgen.';
$string['overallrating'] = 'Gesamtbewertung';
$string['pagesize'] = 'Einträge pro Seite';
$string['paragraphs'] = 'Absätze:';
$string['percentofentryrating'] = '{$a}% der Bewertung des Eintrags';
$string['phrasecasesensitiveno'] = 'Groß-/Kleinschreibung nicht beachten';
$string['phrasecasesensitiveyes'] = 'Groß-/Kleinschreibung beachten';
$string['phrasefullmatchno'] = 'Ganze Wörter und Wortteile berücksichtigen';
$string['phrasefullmatchyes'] = 'Nur ganze Wörter berücksichtigen';
$string['phraseignorebreaksno'] = 'Zeilenumbrüche erkennen';
$string['phraseignorebreaksyes'] = 'Zeilenumbrüche ignorieren';
$string['pluginadministration'] = 'Administration zum Tagebuch';
$string['pluginname'] = 'Tagebuch';
$string['popoverhelp'] = 'Info';
$string['potautoratingerrpen'] = 'Abzug für automatischen Bewertungsvorschlag: {$a->one}% oder {$a->two} Punkte Abzug.';
$string['potcommerrpen'] = 'Abzug für häufige Fehler: {$a->one} * {$a->two} = {$a->three}% oder {$a->four} Punkte Abzug.';
$string['present'] = 'Aktuell';
$string['previousentry'] = 'Vorheriger Eintrag';
$string['privacy:metadata:diary_entries'] = 'Ein Datensatz eines Tagebucheintrags';
$string['privacy:metadata:diary_entries:diary'] = 'Die ID des Tagebuchs, in dem der Eintrag verfasst wurde.';
$string['privacy:metadata:diary_entries:entrycomment'] = 'Feedback von Trainer/in und möglicherweise automatischer Bewertungsvorschlag';
$string['privacy:metadata:diary_entries:mailed'] = 'E-Mail an Teilnehmer/in gesendet?';
$string['privacy:metadata:diary_entries:promptdatestart'] = 'Datum, an dem der automatische Schreibauftrag zuerst verwendet wurde';
$string['privacy:metadata:diary_entries:promptdatestop'] = 'Datum, ab dem der automatische Schreibauftrag nicht mehr verwendet wurde';
$string['privacy:metadata:diary_entries:promptid'] = 'ID des automatischen Schreibauftrags, die für automatische Bewertungsvorschläge und Feeback vewendet wird.';
$string['privacy:metadata:diary_entries:prompttext'] = 'Text des Schreibauftrags, der für automatische Bewertungsvorschläge und Feedback verwendet wird.';
$string['privacy:metadata:diary_entries:rating'] = 'Punkte für diesen Tagebucheintrag. Diese können durch Skalen oder erweiterte Bewertungseinstellungen ermittelt werden, aber sie werden immer zu Punkten konvertiert.';
$string['privacy:metadata:diary_entries:teacher'] = 'Nutzer-ID von Trainer/in';
$string['privacy:metadata:diary_entries:text'] = 'Inhalt des Eintrags';
$string['privacy:metadata:diary_entries:timecreated'] = 'Erstellungsdatum des Eintrags.';
$string['privacy:metadata:diary_entries:timemarked'] = 'Bewertungsdatum des Eintrags';
$string['privacy:metadata:diary_entries:timemodified'] = 'Zeitpunkt der letzten Bearbeitung des Eintrags.';
$string['privacy:metadata:diary_entries:userid'] = 'Nutzer-ID';
$string['prompt'] = 'Schreibauftrag eingeben';
$string['promptbgc'] = 'Hintergrundfarbe für diesen Auftrag';
$string['promptbgc_help'] = 'Legt die Hintergrundfarbe für diesen Auftrag fest.';
$string['promptid'] = 'Auftrags-ID';
$string['promptinfo'] = 'Es gibt {$a->past} vergangene, {$a->current} aktuelle und {$a->future} zukünftige Schreibaufträge für dieses Tagebuch.<br>';
$string['promptmaxc'] = 'Maximale Zeichenzahl';
$string['promptmaxp'] = 'Max Absätze';
$string['promptmaxs'] = 'Max Sätze';
$string['promptmaxw'] = 'Maximale Wortzahl';
$string['promptminc'] = 'Minimale Zeichenzahl';
$string['promptminmaxcp'] = 'Zeichen %';
$string['promptminmaxpp'] = 'Absätze %';
$string['promptminmaxsp'] = 'Sätze %';
$string['promptminmaxwp'] = 'Wörter %';
$string['promptminp'] = 'Min Absätze';
$string['promptmins'] = 'Min Sätze';
$string['promptminw'] = 'Min Wörter';
$string['promptremovefailure'] = 'Dieser Auftrag mit ID {$a} wird verwendet und kann nicht entfernt werden.';
$string['promptremovesuccess'] = 'Auftrag mit ID {$a} wurde erfolgreich entfernt.';
$string['promptstart'] = 'Auftragsbeginn';
$string['promptstitle'] = 'Tagebuch-Schreibaufträge';
$string['promptstop'] = 'Auftragsende';
$string['promptsviewtitle'] = 'Schreibaufträge ansehen';
$string['prompttext'] = 'Auftragstext';
$string['promptzerocount'] = '<td>Aktuell beinhaltet diese Tagebuchaktivität {$a} Schreibaufträge.</td>';
$string['rate'] = 'Bewerten';
$string['rating'] = 'Bewertung für diesen Eintrag';
$string['reload'] = 'Neuladen und Anzeigen vom aktuellsten zum ältesten Tagebucheintrag';
$string['removealldiarytags'] = 'Alle Tagebuch-Tags entfernen';
$string['removeentries'] = 'Alle Einträge entfernen';
$string['removemessages'] = 'Alle Tagebucheinträge entfernen';
$string['reportsingle'] = 'Alle Tagebucheinträge dieser Person anzeigen.';
$string['reportsingleallentries'] = 'Alle Tagebucheinträge dieser Person.';
$string['returnto'] = 'Zurück zu {$a}';
$string['returntoreport'] = 'Zurück zur Übersicht von {$a}';
$string['saveallfeedback'] = 'Mein Feedback speichern';
$string['savesettings'] = 'Einstellungen speichern';
$string['search'] = 'Suche';
$string['search:activity'] = 'Tagebuch - Informationen zur Aktivität';
$string['search:entry'] = 'Tagebucheinträge';
$string['search:entrycomment'] = 'Kommentar zum Tagebucheintrag';
$string['selectentry'] = 'Eintrag zur Kennzeichnung auswählen';
$string['sentences'] = 'Sätze:';
$string['sentencesperparagraph'] = 'Sätze pro Absatz';
$string['shortwords'] = 'Eindeutige kurze Wörter';
$string['shortwords_help'] = 'Kurze Wörter sind Wörter mit nur einer Silbe. Der Algorithmus zur Ermittlung der Silben liefert nur ungefähre Ergebnisse.';
$string['showlistno'] = 'Keinen Eintrag verbergen';
$string['showlistpreference'] = 'Nutzer/innen ohne Einträge anzeigen';
$string['showlistyes'] = 'Keinen Eintrag anzeigen';
$string['shownone'] = 'Keine anzeigen';
$string['showoverview'] = 'Tagebuchübersicht im Dashboard';
$string['showrecentactivity'] = 'Aktuelle Aktivität anzeigen';
$string['showstudentsonly'] = 'Nur Teilnehmer/innen anzeigen';
$string['showteacherandstudents'] = 'Teilnehmer/innen und Trainer/innen anzeigen';
$string['showteachersonly'] = 'Nur Trainer/innen anzeigen';
$string['showtextstats'] = 'Textstatistiken anzeigen';
$string['showtextstats_help'] = 'Wenn diese Option aktiviert ist, werden Textstatistiken angezeigt';
$string['showtostudentsonly'] = 'Ja, nur für Schüler/innen anzeigen';
$string['showtoteachersandstudents'] = 'Ja, für Trainer/innen und Schüler/innen anzeigen';
$string['showtoteachersonly'] = 'Ja, nur für Trainer/innen anzeigen';
$string['sortcurrententry'] = 'Vom aktuellen Tagebucheintrag bis zum ersten.';
$string['sortfirstentry'] = 'Vom ersten Tagebucheintrag bis zum letzten.';
$string['sorthighestentry'] = 'Vom am höchsten bewerteten Tagebucheintrag bis zum am niedrigsten bewerteten.';
$string['sortlastentry'] = 'Vom zuletzt geänderten Tagebucheintrag bis zum ältesten geänderten.';
$string['sortlowestentry'] = 'Vom am niedrigsten bewerteten Tagebucheintrag bis zum höchsten.';
$string['sortoptions'] = 'Einstellungen zur Sortierung:';
$string['sortorder'] = 'Sortierreihenfolge ist:';
$string['startnewentry'] = 'Neuen Eintrag beginnen';
$string['startoredit'] = 'Neuen Eintrag beginnen oder den heutigen Eintrag bearbeiten';
$string['statshdr'] = 'Textstatistiken';
$string['statshdr_help'] = 'Diese Einstellungen definieren die Standardeinstellungen für Statistiken aller neuen Tagebücher.';
$string['statshide'] = 'Statistiken verbergen';
$string['statsshow'] = 'Statistiken anzeigen';
$string['studentemail'] = 'E-Mail-Benachrichtigung an Teilnehmer/innen senden';
$string['studentemail_help'] = 'Berechtigung aktivieren oder deaktivieren, sofort E-Mail-Benachrichtigungen an Teilnehmer/innen zu senden';
$string['tablecolumncharacters'] = 'Zeichen';
$string['tablecolumnedit'] = 'Bearbeiten&nbsp;&nbsp;&nbsp;';
$string['tablecolumnparagraphs'] = 'Absätze';
$string['tablecolumnprompts'] = 'Aufträge';
$string['tablecolumnpromptsbgc'] = 'Hintergrundfarbe Auftrag';
$string['tablecolumnsentences'] = 'Sätze';
$string['tablecolumnstart'] = 'Start';
$string['tablecolumnstatus'] = 'Status';
$string['tablecolumnstop'] = 'Stop';
$string['tablecolumnwords'] = 'Wörter&nbsp;&nbsp;&nbsp;&nbsp;';
$string['tagarea_diary_entries'] = 'Tagebucheinträge';
$string['tcount'] = 'Derzeit beinhaltet diese Tagebuch Aktivität {$a} Schreibaufträge.<br>';
$string['teacher'] = 'Trainer/in';
$string['teacheremail'] = 'Email-Benachrichtigungen an Trainer/innen senden';
$string['teacheremail_help'] = 'Berechtigung aktivieren oder deaktivieren, sofort E-Mail-Benachrichtigungen an Trainer/innen zu senden';
$string['text'] = 'Geben Sie den Schreibauftrag ein';
$string['text_editor'] = 'Schreibauftrag';
$string['textstatitems'] = 'Statistiken';
$string['textstatitems_help'] = 'Wählen Sie alle Elemente, die in den Textstatistiken auf der Detailseite oder unter Berichten angezeigt werden sollten.';
$string['timecreated'] = 'Zeitpunkt der Erstellung';
$string['timemarked'] = 'Zeitpunkt der Bewertung';
$string['timemodified'] = 'Zeitpunkt der Bearbeitung';
$string['toolbar'] = 'Symbolleiste:';
$string['totalsyllables'] = 'Gesamtzahl an Silben:  {$a}';
$string['transfer'] = 'Einträge übertragen';
$string['transferwemail'] = 'Übertragen und E-Mail senden <b>Standard: Kein E-Mail senden</b>';
$string['transferwfb'] = 'Übertragen und Feedback zur Übertragung einfügen. <b>Standard: Kein Feedback einfügen</b>';
$string['transferwfbmsg'] = '<br> Dieser Eintrag wurde von Journal {$a} übertragen';
$string['transferwoe'] = 'Ohne automatische Benachrichtigung übertragen';
$string['uniquewords'] = 'Eindeutige Wörter';
$string['userid'] = 'Nutzer-ID';
$string['usertoolbar'] = 'Werkzeuge:';
$string['viewalldiaries'] = 'Alle Kurstagebücher anzeigen';
$string['viewallentries'] = 'Anzeigen von {$a} Tagebucheinträgen';
$string['viewentries'] = 'Einträge ansehen';
$string['warning'] = '<b>ACHTUNG - Sie haben {$a} aktuelle Schreibaufträge. Dies ist ein Fehler. Das aktuelle Datum kann sich nicht mehrfach überlappen. Dieser Fehler muss behoben werden!</b><br>';
$string['words'] = 'Wörter:';
$string['wordspersentence'] = 'Wörter pro Satz';
$string['writingpromptlable'] = 'Aktueller Schreibauftrag: {$a->counter} (ID: {$a->entryid}) begonnen am {$a->starton} und wird beendet am {$a->endon}.<br>{$a->datatext}';
$string['writingpromptlable2'] = 'Schreibauftrag:';
$string['writingpromptlable3'] = 'Schreibauftrag Editor';
$string['writingpromptnotused'] = 'Für die Prozentwerte des automatischen Bewertungsvorschlags wurden die Standard-Einstellungen verwendet.';
$string['writingpromptused'] = 'Schreibauftrag ID: {$a} wurde für die Prozenteinstellungen des automatischen Bewertungsvorschlages verwendet.';
$string['xfrresults'] = '{$a->one} Einträge verarbeitet und {$a->two} Einträge übermittelt';
