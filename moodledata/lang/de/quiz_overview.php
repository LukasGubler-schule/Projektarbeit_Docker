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
 * Strings for component 'quiz_overview', language 'de', version '4.5'.
 *
 * @package     quiz_overview
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allattempts'] = 'Alle Versuche anzeigen';
$string['allattemptscontributetograde'] = 'Alle Versuche werden bei der Gesamtnote berücksichtigt.';
$string['allstudents'] = 'Alle {$a} anzeigen';
$string['attemptsonly'] = 'Nur {$a} mit Versuchen anzeigen';
$string['attemptsprepage'] = 'Versuche pro Seite';
$string['deleteselected'] = 'Ausgewählte Versuche löschen';
$string['done'] = 'Erledigt';
$string['err_failedtodeleteregrades'] = 'Löschen der berechneten Versuchsbewertungen ist fehlgeschlagen';
$string['err_failedtorecalculateattemptgrades'] = 'Neuberechnung der Versuchsbewertungen ist fehlgeschlagen';
$string['highlightinggraded'] = 'Der Versuch des Nutzers, der für die Endbewertung genutzt wird, ist hervorgehoben.';
$string['needed'] = 'Benötigt';
$string['noattemptsonly'] = 'Nur {$a} ohne Versuche anzeigen/downloaden';
$string['noattemptstoregrade'] = 'Kein Versuch braucht eine Neubewertung';
$string['nogradepermission'] = 'Sie haben kein Recht, diesen Test zu bewerten.';
$string['onlyoneattemptallowed'] = 'In diesem Test ist nur ein Versuch pro Nutzer möglich.';
$string['optallattempts'] = 'alle Versuche';
$string['optallstudents'] = 'alle \'{$a}\'';
$string['optattemptsonly'] = 'nur \'{$a}\' mit Versuchen';
$string['optnoattemptsonly'] = 'nur \'{$a}\' ohne Versuche';
$string['optonlyregradedattempts'] = 'die neu bewertet bzw. dafür markiert wurden';
$string['overview'] = 'Bewertung';
$string['overviewdownload'] = 'Download der Übersicht';
$string['overviewfilename'] = 'Bewertungen';
$string['overviewreport'] = 'Bewertungsübersicht';
$string['overviewreportgraph'] = 'Gesamtzahl der Teilnehmer/innen, die einzelne Bewertungsstufen erreicht haben';
$string['overviewreportgraphgroup'] = 'Anzahl derjenigen in der Gruppe \'{$a}\', die die Bewertungsgrenzen erreicht haben';
$string['pagesize'] = 'Seitengröße';
$string['pluginname'] = 'Bewertungen';
$string['preferencespage'] = 'Einstellungen für diese Seite';
$string['preferencessave'] = 'Bericht anzeigen';
$string['preferencesuser'] = 'Ihre Einstellungen für diesen Bericht';
$string['privacy:metadata:preference:quiz_overview_slotmarks'] = 'Ob Kennzeichen für jeden Fragenslot gezeigt werden.';
$string['privacy:preference:slotmarks:no'] = 'Kennzeichen werden nicht beim Fragenslot gezeigt';
$string['privacy:preference:slotmarks:yes'] = 'Kennzeichen werden beim Fragenslot angezeigt';
$string['regrade'] = 'Neu bewerten';
$string['regrade_allattempts'] = 'Alle Versuche';
$string['regrade_allquestions'] = 'Alle Fragen';
$string['regrade_attempts'] = 'Versuche neu bewerten …';
$string['regrade_commitregrade'] = 'Neubewertung durchführen';
$string['regrade_dryrun'] = 'Probelauf';
$string['regrade_help'] = 'Bei der Neubewertung wird die automatische Bewertung der Versuche neu berechnet, wobei die aktuelle Version jeder Frage verwendet wird. Ein Probelauf ermöglicht eine Vorschau der Notenänderungen, ohne dass dies Auswirkungen auf die Versuche hat.';
$string['regrade_link'] = 'Quiz_grades_report#Re-grading_attempts';
$string['regrade_regradeneedednotificationmessage'] = 'Beim letzten Probelauf wurde festgestellt, dass sich durch die Neubewertung die Noten für {$a->questions} Fragen in {$a->attempts} Versuchen ändern würden.';
$string['regrade_regradenow'] = 'Jetzt neu bewerten';
$string['regrade_selectedattempts'] = 'Ausgewählte Versuche';
$string['regrade_selectedquestions'] = 'Ausgewählte Fragen';
$string['regradeall'] = 'Alle neu bewerten';
$string['regradealldry'] = 'Probelauf einer vollständigen Neubewertung';
$string['regradealldrydo'] = 'Versuche neu bewerten, die entsprechend markiert sind ({$a})';
$string['regradealldrydogroup'] = 'Versuche ({$a->countregradeneeded}) neu bewerten, die entsprechend in der Gruppe \'{$a->groupname}\' markiert sind';
$string['regradealldrygroup'] = 'Probelauf einer vollständigen Neubewertung für die Gruppe  \'{$a->groupname}\'';
$string['regradeallgroup'] = 'Vollständige Neubewertung für die Gruppe \'{$a->groupname}\'';
$string['regradecomplete'] = 'Neubewertung abgeschlossen';
$string['regradedsuccessfullyxofy'] = 'Neubewertung abgeschlossen ({$a->done}/{$a->count})';
$string['regradeheader'] = 'Neubewertung';
$string['regradeselected'] = 'Markierte Versuche neu bewerten';
$string['regradingattemptissue'] = 'Slot {$a->slot}: {$a->reason}';
$string['regradingattemptxofy'] = 'Neubewertung des Versuchs ({$a->done}/{$a->count})';
$string['regradingattemptxofyproblem'] = 'Die folgenden Fragen konnten im Versuch {$and->attempted} von {$a->name} nicht neu bewertet werden (iD {$a->attemptid})';
$string['regradingattemptxofywithdetails'] = 'Neubewertung Versuch ({$a->done}/{$a->count}) - Versuch {$a->attemptnum} von {$a->name} (id {$a->attemptid})';
$string['show'] = 'Anzeigen / Herunterladen';
$string['showattempts'] = 'Versuche nur anzeigen/downloaden';
$string['showdetailedmarks'] = 'Bewertungen für jede Frage';
$string['showinggraded'] = 'Nur die bewerteten Versuche der Nutzer anzeigen';
$string['showinggradedandungraded'] = 'Bewertete und nicht bewertete Versuche der Teilnehmer/innen anzeigen. Der Versuch, der für die Bewertung genutzt wird, ist hervorgehoben. Als Bewertungsmethode wurde {$a} gewählt.';
$string['studentingroup'] = '\'{$a->coursestudent}\' in der Gruppe \'{$a->groupname}\'';
$string['studentingrouplong'] = '\'{$a->coursestudent}\' in dieser Gruppe';
