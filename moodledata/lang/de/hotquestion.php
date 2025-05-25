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
 * Strings for component 'hotquestion', language 'de', version '4.5'.
 *
 * @package     hotquestion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ago'] = 'vor {$a}';
$string['allowanonymouspost'] = 'Erlauben von anonymen Einreichungen';
$string['allowanonymouspost_descr'] = 'Wenn diese Option aktiviert ist, können Fragen anonym gestellt werden. Wenn zusätzlich zum Anschauen genehmigt, können alle eine Dringlichkeitsstimme abgeben.';
$string['allowanonymouspost_help'] = 'Wenn diese Option aktiviert ist, können Fragen anonym gestellt werden. Wenn zusätzlich zum Anschauen genehmigt, können alle eine Dringlichkeitsstimme abgeben.';
$string['allowauthorinfohide'] = 'Erlauben, den Autorennamen zu verbergen';
$string['allowauthorinfohide_descr'] = 'Wenn aktiviert, ist der Autorennamen nur für Trainer/innen, aber nicht für Teilnehmer/innen sichtbar.';
$string['allowauthorinfohide_help'] = 'Wenn aktiviert, ist der Autorennamen nur für Trainer/innen, aber nicht für Teilnehmer/innen sichtbar.';
$string['allowcomments'] = 'Kommentare für Einträge erlauben';
$string['allowcomments_help'] = 'Wenn diese Option aktiviert ist, können alle Teilnehmer/innen mit der entsprechenden Berechtigung Kommentare zu Dringende-Frage-Einträgen hinzufügen.';
$string['alwaysshowdescription'] = 'Beschreibung immer zeigen';
$string['alwaysshowdescription_help'] = 'Wenn diese Option deaktiviert ist, wird die Beschreibung für Teilnehmer/innen nicht angezeigt';
$string['anonymous'] = 'Anonym';
$string['approvallabel'] = 'Bezeichnung der Spalte "Genehmigt"';
$string['approvallabel_descr'] = 'Standardbezeichnung der Spalte "Genehmigt"';
$string['approvedno'] = 'Nicht genehmigt';
$string['approvedyes'] = 'Genehmigt';
$string['authorinfo'] = 'Geschrieben von {$a->user} am {$a->time}';
$string['authorinfohide'] = 'Erstellt {$a->time}';
$string['calendarend'] = '{$a} schließt';
$string['calendarstart'] = '{$a} öffnet';
$string['cnfallowcomments'] = 'Legen Sie fest, ob eine dringende Frage standardmäßig Kommentare zu Einträgen akzeptiert.';
$string['completiondetail:pass'] = 'Bewertung zum Bestehen: {$a}';
$string['completiondetail:post'] = 'Fragen stellen: {$a}';
$string['completiondetail:vote'] = 'Dringlichkeit vergeben: {$a}';
$string['completionpass'] = 'Teilnehmer/in muss bestehen';
$string['completionpassdesc'] = 'Teilnehmer/in muss zum Bestehen eine Bewertung von {$a} erreichen';
$string['completionpassgroup'] = 'Kennwort benötigt:';
$string['completionpost'] = 'Teilnehmer/in muss Fragen hinzufügen:';
$string['completionpostdesc'] = 'Teilnehmer/in muss mindestens {$a} Fragen erstellen';
$string['completionpostgroup'] = 'Fragen benötigt';
$string['completionvote'] = 'Teilnehmer/in muss Dringlichkeit hinzufügen:';
$string['completionvotedesc'] = 'Teilnehmer/in muss bewerten/Dringlichkeit vergeben für {$a} Fragen';
$string['completionvotegroup'] = 'Dringlichkeit benötigt:';
$string['connectionerror'] = 'Verbindungsfehler';
$string['content'] = 'Inhalt';
$string['crontask'] = 'Hintergrundverarbeitung für die Hotquestion-Aktivität';
$string['csvexport'] = 'Exportieren als .csv';
$string['deleteentryconfirm'] = 'Möchten Sie wirklich den Eintrag löschen?';
$string['deleteroundconfirm'] = 'Möchten Sie wirklich die Runde löschen?';
$string['description'] = 'Beschreibung';
$string['displayasanonymous'] = 'Als anonym anzeigen';
$string['entries'] = 'Einträge';
$string['eventaddquestion'] = 'Frage hinzugefügt';
$string['eventaddround'] = 'Neue Runde eröffnet';
$string['eventdownloadquestions'] = 'Fragen herunterladen';
$string['evententriesviewed'] = 'Angesehene Fragen';
$string['evententryupdated'] = 'Aktualisierte Frage';
$string['eventremovequestion'] = 'Frage entfernen';
$string['eventremoveround'] = 'Runde entfernen';
$string['eventremovevote'] = 'Entfernte Stimme';
$string['eventupdatevote'] = 'Aktualisierte Stimmabgabe';
$string['exportfilename'] = 'questions.csv';
$string['exportfilenamep1'] = 'All_Site_';
$string['exportfilenamep2'] = '_HQ_Dringende_Frage_am_';
$string['factorheat'] = 'Erhaltener Dringlichkeitsfaktor';
$string['factorheat_help'] = 'Ein Faktor, der auf Fragen angewendet wird, die für die Bewertung auf der Grundlage der Dringlichkeit zählen.
Je dringlicher die Frage, desto größer das Gewicht bei der Bewertung.
Eine Frage von Teilnehmer/in zählt als 1 plus Gutschrift

Gutschrift = (Stimmen) · Faktor/100.

Normalerweise ist ein Dringlichkeits-Faktor von 5% angemessen, d.h. wenn 20 Personen für eine Frage stimmen, verdoppelt sich ihr Wert.
Je nach Anzahl der Teilnehmer/innen und deren Engagement müssen Sie eventuell Anpassungen vornehmen.';
$string['factorpriority'] = 'Prioritätsfaktor';
$string['factorpriority_help'] = 'Ein Faktor zum Zählen von Fragen ohne gesetzte Priorität.
Jede Frage zählt in der Summe der von einem Teilnehmer gestellten Fragen als ihr Prioritätswert (1, 2 ...).
Bei den Fragen ohne Priorität (0) wird der angegebene Wert (in %) gezählt. <br />
Ein Faktor von 100% bedeutet, dass eine Frage ohne Priorität genauso zählt wie eine Frage mit Priorität 1.';
$string['factorvote'] = 'Vergebener Dringlichkeitsfaktor';
$string['factorvote_help'] = 'Ein Faktor, der bei der Berechnung der Bewertungen auf die Stimmenzahl der Teilnehmer/innen angewandt wird.
Zusätzlich zum Verfassen neuer Fragen können Teilnehmer/innen Teilnahmepunkte erhalten, durch das Abstimmen für Fragen anderer.
Diese Gutschrift ergibt sich aus der Anzahl der abgegebenen Stimmen mal diesem Faktor/100.

Gutschrift = (Stimmen) · Faktor/100

Der Faktor muss je nach der Gesamtzahl der Stimmen, die Teilnehmer/innen abgeben könnten, angepasst werden
und der gewünschten Gewichtung dieser Art der Beteiligung.
Wenn ein/e Teilnehmer/in z.B. 5 Dringlichkeits-Stimmen abgeben kann, bedeutet ein Faktor von 20 %, dass die Stimmabgabe für andere 5 Fragen soviel zählt wie eine von diesem Teilnehmer geschriebene Frage. Ein Faktor von 100% bedeutet, dass das Abstimmen für andere Fragen genausoviel zählt wie das Schreiben einer neuen Frage.';
$string['finalgrade'] = 'Endgültige Bewertung';
$string['for'] = 'für Website:';
$string['grading'] = 'Entwurfs-Bewertung';
$string['heat'] = 'Dringlichkeit';
$string['heaterror'] = 'Zu viele Stimmen';
$string['heatgiven'] = 'Vergebene Dringlichkeit';
$string['heatlabel'] = 'Bezeichnung der Spalte "Dringlichkeit"';
$string['heatlabel_descr'] = 'Eingabe der Bezeichnung der Spalte "Dringlichkeit"';
$string['heatlimit'] = 'Limit für "Dringlichkeit"';
$string['heatlimit_descr'] = 'Anzahl möglicher Dringlichkeitsstimmen pro Runde. Null blendet die Spalte "Dringlichkeit" aus.';
$string['heatlimit_help'] = 'Anzahl möglicher Dringlichkeitsstimmen pro Runde. Null blendet die Spalte "Dringlichkeit" aus.';
$string['heatreceived'] = 'Erhaltene Dringlichkeit';
$string['heatvisibility'] = 'Sichtbarkeit der Spalte "Dringlichkeit"';
$string['heatvisibility_descr'] = 'Wenn diese Option aktiviert ist, ist die Spalte "Dringlichkeit" sichtbar, ansonsten ist sie verborgen.';
$string['heatvisibility_help'] = 'Wenn diese Option aktiviert ist, ist die Spalte "Dringlichkeit" sichtbar.';
$string['hotquestion'] = 'Dringende Frage';
$string['hotquestion:addinstance'] = 'Kann eine neue dringende Frage einfügen';
$string['hotquestion:ask'] = 'Fragen stellen';
$string['hotquestion:comment'] = 'Kommentare schreiben';
$string['hotquestion:manage'] = 'Fragen verwalten';
$string['hotquestion:manageentries'] = 'Liste der Aktivitäten anzeigen';
$string['hotquestion:rate'] = 'Fragen bewerten';
$string['hotquestion:view'] = 'Fragen anzeigen';
$string['hotquestion:vote'] = 'Über Fragen abstimmen';
$string['hotquestionclosed'] = 'Diese Aktivität schloss am {$a}.';
$string['hotquestionclosetime'] = 'Geschlossen seit';
$string['hotquestionintro'] = 'Thema';
$string['hotquestionname'] = 'Aktivitätsname';
$string['hotquestionopen'] = 'Diese Aktivität wird verfügbar sein ab {$a}.';
$string['hotquestionopentime'] = 'Verfügbar ab';
$string['id'] = 'ID';
$string['improperuseviewgradesclass'] = 'Unzulässige Verwendung der Klasse viewgrades. Das Bewertungeselement kann nicht geladen werden.';
$string['incorrectmodule'] = 'Die Kursmodul-ID war falsch';
$string['inputapprovallabel'] = 'Genehmigt';
$string['inputapprovallabel_descr'] = 'Änderung der Bezeichnung für die Spalte "Genehmigt"';
$string['inputapprovallabel_help'] = 'Ändern Sie die Bezeichnung der Spalte "Genehmigt" passend zu Ihrem Nutzungsszenario.';
$string['inputheatlabel'] = 'Dringlichkeit';
$string['inputheatlabel_descr'] = 'Änderung der Bezeichnung für die Spalte "Dringlichkeit"';
$string['inputheatlabel_help'] = 'Ändern Sie die Bezeichnung der Spalte "Dringlichkeit" passend zu Ihrem Nutzungsszenario.';
$string['inputquestion'] = 'Stellen Sie hier Ihre Frage:';
$string['inputquestion_descr'] = 'Ändern der Einreichungs-Aufforderung.';
$string['inputquestion_help'] = 'Ändern Sie die Einreichungs-Aufforderung wie Sie sie haben möchten.';
$string['inputquestionlabel'] = 'Fragen';
$string['inputquestionlabel_descr'] = 'Änderung der Bezeichnung für die Spalte "Fragen"';
$string['inputquestionlabel_help'] = 'Ändern Sie die Bezeichnung der Spalte "Fragen" passend zu Ihrem Nutzungsszenario.';
$string['inputremovelabel'] = 'Entfernen';
$string['inputremovelabel_descr'] = 'Änderung der Bezeichnung für die Spalte "Entfernen"';
$string['inputremovelabel_help'] = 'Ändern Sie die Bezeichnung der Spalte "Entfernen" passend zu Ihrem Nutzungsszenario.';
$string['inputteacherprioritylabel'] = 'Priorität';
$string['inputteacherprioritylabel_descr'] = 'Änderung der Bezeichnung für die Spalte "Priorität"';
$string['inputteacherprioritylabel_help'] = 'Ändern Sie die Bezeichnung der Spalte "Priorität" passend zu Ihrem Nutzungsszenario.';
$string['invalidquestion'] = 'Leere Fragen werden ignoriert.';
$string['modulename'] = 'Dringende Frage';
$string['modulename_help'] = 'Dringende Frage erlaubt es den Student/innen, Fragen zu stellen und darüber abzustimmen, damit die Lehrenden wissen, was die Student/innen erwarten.';
$string['modulename_link'] = 'mod/hotquestion/view';
$string['modulenameplural'] = 'Dringende Fragen';
$string['newround'] = 'Neue Runde starten';
$string['newroundconfirm'] = 'Sind Sie sicher? Vorhandene Fragen und Abstimmungen werden archiviert.';
$string['newroundsuccess'] = 'Sie haben erfolgreich eine neue Runde gestartet.';
$string['nextround'] = 'Nächste Runde';
$string['noquestions'] = 'Noch keine Einträge.';
$string['notapproved'] = '<b>Dieser Eintrag ist aktuell nicht zum Anschauen genehmigt.<br></b>';
$string['notavailable'] = '<b>Momentan nicht verfügbar!<br></b>';
$string['pluginadministration'] = 'Verwaltung der dringenden Fragen';
$string['pluginname'] = 'Dringende Frage';
$string['postbutton'] = 'Klicken zum Absenden';
$string['postmaxgrade'] = 'Fragenzahl für Maximalbewertung';
$string['postmaxgrade_help'] = 'Anzahl nötiger Fragen zum Erreichen der maximalen Bewertung.

Dies ist nominell eine Zählung der Fragen, aber der von einer Person erreichte Wert kann durch den Faktor Dringlichkeit (heat, Fragen mit größerer Dringlichkeit zählen mehr) verbessert werden
und durch die Abstimmung über andere Fragen (Nutzer/innen können ihre Bewertung verbessern, indem sie an der Abstimmung an Fragen anderer teilnehmen).';
$string['previousround'] = 'Vorherige Runde';
$string['privacy:metadata:hotquestion_grades'] = 'Bewertungsdaten für Hotquestion-Instanzen';
$string['privacy:metadata:hotquestion_grades:rawrating'] = 'Unbearbeitete Bewertung';
$string['privacy:metadata:hotquestion_grades:userid'] = 'Die ID der Person,, die diese Bewertung eingegeben hat.';
$string['privacy:metadata:hotquestion_questions'] = 'Informationen zu den Einträgen in einer gegebenen Aktivität \'Dringende Frage\'';
$string['privacy:metadata:hotquestion_questions:anonymous'] = 'Wurde der Eintrag anonym eingestellt?';
$string['privacy:metadata:hotquestion_questions:approved'] = 'Ist die Frage zum Anschauen genehmigt?';
$string['privacy:metadata:hotquestion_questions:content'] = 'Der Inhalt der Frage.';
$string['privacy:metadata:hotquestion_questions:hotquestion'] = 'Die ID der \'Dringende Frage\'-Aktivität, in welcher die Frage gestellt wurde.';
$string['privacy:metadata:hotquestion_questions:id'] = 'ID des Eintrags.';
$string['privacy:metadata:hotquestion_questions:time'] = 'Zeitpunkt, zu welchem die Frage gestellt wurde.';
$string['privacy:metadata:hotquestion_questions:tpriority'] = 'Hat der Lehrende eine Prioritat für diesen Eintrag gegeben?';
$string['privacy:metadata:hotquestion_questions:userid'] = 'Die Nutzer-ID der Person, die den Eintrag eingestellt hat.';
$string['privacy:metadata:hotquestion_votes'] = 'Informationen zu Stimmen für die Fragen.';
$string['privacy:metadata:hotquestion_votes:id'] = 'ID des Eintrags.';
$string['privacy:metadata:hotquestion_votes:question'] = 'Die ID des Eintrags zu dieser Stimme.';
$string['privacy:metadata:hotquestion_votes:voter'] = 'Nutzer-ID der/des Abstimmenden.';
$string['question'] = 'Fragen';
$string['questionlabel'] = 'Bezeichnung der Spalte "Fragen"';
$string['questionlabel_descr'] = 'Standardbezeichnung der Spalte "Fragen"';
$string['questionremove'] = 'Entfernen';
$string['questionremovesuccess'] = 'Sie haben erfolgreich diese Frage gelöscht.';
$string['questions'] = 'Fragen';
$string['questionsubmitted'] = 'Ihre Frage wurde erfolgreich eingereicht.';
$string['rawgrade'] = 'Bewertung {$a->rawgrade} / {$a->max}';
$string['removedround'] = 'Sie haben diese Runde erfolgreich entfernt.';
$string['removelabel'] = 'Bezeichnung der Spalte "Entfernen"';
$string['removelabel_descr'] = 'Standardbezeichnung der Spalte "Entfernen"';
$string['removeround'] = 'Diese Runde entfernen';
$string['removevote'] = 'Meine Stimme entfernen';
$string['requireapproval'] = 'Genehmigung benötigt';
$string['requireapproval_descr'] = 'Wenn diese Option aktiviert ist, benötigen Fragen eine Genehmigung eines Lehrenden, bevor sie von allen eingesehen werden können.';
$string['requireapproval_help'] = 'Wenn diese Option aktiviert ist, benötigen Fragen eine Genehmigung eines Lehrenden, bevor sie von allen eingesehen werden können.';
$string['resethotquestion'] = 'Alle Fragen und Abstimmungen löschen';
$string['returnto'] = 'Zurück zu {$a}';
$string['round'] = 'Runde {$a}';
$string['showrecentactivity'] = 'Letzte Aktivitäten zeigen';
$string['showrecentactivityconfig'] = 'Jeder kann Benachrichtigungen der letzten Aktivitäten sehen.';
$string['teacherpriority'] = 'Priorität';
$string['teacherprioritylabel'] = 'Bezeichnung der Spalte "Priorität"';
$string['teacherprioritylabel_descr'] = 'Standardbezeichnung der Spalte "Priorität"';
$string['teacherpriorityvisibility'] = 'Sichtbarkeit der Spalte "Priorität für Trainer/innen"';
$string['teacherpriorityvisibility_descr'] = 'Wenn diese Option aktiviert ist, ist die Spalte "Priorität für Trainer/innen" sichtbar, ansonsten ist sie verborgen.';
$string['teacherpriorityvisibility_help'] = 'Wenn diese Option aktiviert ist, ist die Spalte "Priorität für Trainer/innen" sichtbar.';
$string['time'] = 'Zeit';
$string['totalcomments'] = 'Total Kommentare';
$string['unapprovedquestionhide'] = 'Verberge ungenehmigte Fragen';
$string['unapprovedquestionnotset'] = 'Voreinstellung nicht gesetzt';
$string['unapprovedquestionsee'] = 'Ungenehmigte Fragen zeigen';
$string['unapprovedquestionvisibility'] = 'Sichtbarkeit ungenehmigter Fragen';
$string['userid'] = 'Nutzer-ID';
$string['valueinterror'] = 'Der Faktor muss eine positive ganze Zahl sein';
$string['viewaftertimeclose'] = 'Sichtbar nach dem Schließen';
$string['viewaftertimeclose_descr'] = 'Wenn diese Einstellung aktiviert ist (Ja), können Teilnehmer/innen die Fragen und Dringlichkeit nach dem Schließen sehen, aber nicht ändern; bei Nein werden sie nach dem Schließen ausgeblendet.';
$string['viewaftertimeclose_help'] = 'Wenn diese Einstellung aktiviert ist (Ja), können Teilnehmer/innen die Fragen und Dringlichkeit nach dem Schließen sehen, aber nicht ändern; bei Nein werden sie nach dem Schließen ausgeblendet.';
$string['viewaftertimeclosevalidation'] = 'Wenn kein Abschlusstermin festgelegt ist, muss "Sichtbar nach dem Schließen" "Nein" sein.';
$string['viewallentries'] = '{$a->ucount} Nutzer/in(nen) haben {$a->qcount} Frage(n) eingereicht.';
$string['viewallhotquestions'] = 'Alle Fragen des Kurses ansehen';
$string['viewentries'] = 'Teilnahme an der aktuellen Runde';
$string['viewgrades'] = 'Bewertungen ansehen';
$string['vote'] = 'Abstimmen';
$string['xofn'] = 'von';
