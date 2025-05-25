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
 * Strings for component 'gradingform_checklist', language 'de', version '4.5'.
 *
 * @package     gradingform_checklist
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addgroup'] = 'Gruppe hinzufügen';
$string['alwaysshowdefinition'] = 'Benutzern die Vorschau der im Modul verwendeten Checkliste erlauben (sonst wird die Checkliste erst nach der Benotung sichtbar)';
$string['backtoediting'] = 'Zurück zur Bearbeitung';
$string['checked'] = 'Ausgewählt';
$string['checklist'] = 'Checkliste';
$string['checklistmapping'] = 'Regeln für die Zuordnung von Listenpunkten zu Noten';
$string['checklistmappingexplained'] = 'Die minimal mögliche Punktzahl für diese Checkliste ist <b>{$a->minscore} Punkte</b> und wird in die minimale Note umgerechnet, die in diesem Modul verfügbar ist (die Null ist, wenn die Skala nicht verwendet wird).
    Die maximale Punktzahl <b>{$a->maxscore} Punkte</b> wird in die maximale Note umgerechnet.<br />
    Zwischenergebnisse werden entsprechend umgerechnet und auf die nächstmögliche Note gerundet.<br />
    Wenn eine Skala anstelle einer Note verwendet wird, wird die Punktzahl in die Skalenelemente umgewandelt, als ob es sich um aufeinanderfolgende Ganzzahlen handelt.';
$string['checklistoptions'] = 'Checklisten Optionen';
$string['checkliststatus'] = 'Aktueller Status der Checkliste';
$string['confirmdeletegroup'] = 'Sind Sie sicher, dass Sie diese Gruppe löschen möchten?';
$string['confirmdeleteitem'] = 'Sind Sie sicher, dass Sie dieses Element löschen möchten?';
$string['definechecklist'] = 'Checkliste definieren';
$string['description'] = 'Beschreibung';
$string['enablegroupremarks'] = 'Erlauben Sie dem Bewerter, Textbemerkungen für jede Checklistengruppe hinzuzufügen';
$string['enableitemremarks'] = 'Erlauben Sie dem Bewerter, Textbemerkungen für jedes Checklistenelement hinzuzufügen';
$string['err_definitionmax'] = 'Die Elementdefinition kann nicht mehr als 255 Zeichen umfassen';
$string['err_descriptionmax'] = 'Die Gruppenbeschreibung kann nicht mehr als 255 Zeichen umfassen';
$string['err_nodefinition'] = 'Elementdefinition kann nicht leer sein';
$string['err_nodescription'] = 'Gruppenbeschreibung kann nicht leer sein';
$string['err_nogroups'] = 'Checkliste muss mindestens eine Gruppe enthalten';
$string['err_scoreformat'] = 'Die Anzahl der Punkte für jedes Element muss eine gültige nicht-negative Zahl sein';
$string['err_scoremax'] = 'Die Anzahl der Punkte für jedes Element darf nicht größer als 1000 sein';
$string['err_totalscore'] = 'Die maximal mögliche Punktzahl bei der Benotung durch die Checkliste muss größer als Null sein';
$string['gradingof'] = 'Bewertung von {$a}';
$string['groupadditem'] = 'Element hinzufügen';
$string['groupdelete'] = 'Gruppe löschen';
$string['groupdescription'] = 'Gruppenbeschreibung';
$string['groupempty'] = 'Klicken um Gruppe zu bearbeiten';
$string['groupfeedback'] = 'Gruppenfeedback für {$a}';
$string['groupmovedown'] = 'Nach unten verschieben';
$string['groupmoveup'] = 'Nach oben verschieben';
$string['grouppoints'] = 'Gruppenpunkte';
$string['groupremark'] = 'Gruppenhinweis für "{$a}"';
$string['itemdefinition'] = 'Elementdefinition';
$string['itemdelete'] = 'Element löschen';
$string['itemempty'] = 'Klicken um Element zu bearbeiten';
$string['itemfeedback'] = 'Feedback für "{$a}"';
$string['itemremark'] = 'Elementvermerk für "{$a}"';
$string['itemscore'] = 'Punktzahl';
$string['name'] = 'Name';
$string['needregrademessage'] = 'Die Definition der Checkliste wurde geändert, nachdem dieser Schüler benotet worden war. Der Schüler kann diese Checkliste nicht sehen, bis Sie die Checkliste überprüfen und die Note aktualisieren.';
$string['overallpoints'] = 'Gesamtpunktzahl';
$string['pluginname'] = 'Checkliste';
$string['previewchecklist'] = 'Checklistenvorschau';
$string['regrademessage1'] = 'Sie sind dabei, Änderungen an einer Checkliste zu speichern, die bereits für die Benotung verwendet wurde. Bitte geben Sie an, ob vorhandene Bewertungen überprüft werden müssen. Wenn Sie dies einstellen, wird die Checkliste für die Schüler ausgeblendet, bis ihre Elemente neu benotet werden.';
$string['regrademessage5'] = 'Sie sind im Begriff, wesentliche Änderungen an einer Checkliste zu speichern, die bereits für die Benotung verwendet wurde. Der Wert im Notenbuch bleibt unverändert, aber die Checkliste wird für die Schüler ausgeblendet, bis ihre Aufgaben neu benotet werden.';
$string['regradeoption0'] = 'Nicht zur erneuten Bewertung markieren';
$string['regradeoption1'] = 'Zur erneuten Bewertung markieren';
$string['restoredfromdraft'] = 'HINWEIS: Der letzte Versuch, diese Person zu benoten, wurde nicht richtig gespeichert, so dass die Entwurfsnoten wiederhergestellt wurden. Wenn Sie diese Änderungen rückgängig machen möchten, verwenden Sie die Schaltfläche "Abbrechen" unten.';
$string['save'] = 'Speichern';
$string['savechecklist'] = 'Checkliste speichern und bereitstellen';
$string['savechecklistdraft'] = 'Als Entwurf speichern';
$string['scorepostfix'] = '{$a} Punkte';
$string['showitempointseval'] = 'Punkte für jedes Element bei der Auswertung anzeigen';
$string['showitempointstudent'] = 'Anzeige der Punkte für jedes Element von denjenigen, die Bewertet werden sollen.';
$string['showremarksstudent'] = 'Zeigen Sie denjenigen alle Bemerkungen, die benotet werden';
$string['unchecked'] = 'Ungeprüft';
