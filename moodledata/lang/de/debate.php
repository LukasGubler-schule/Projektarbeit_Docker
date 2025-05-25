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
 * Strings for component 'debate', language 'de', version '4.5'.
 *
 * @package     debate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Aktionen';
$string['active'] = 'Aktiv';
$string['attemptsdeleted'] = 'Debattenantworten gelöscht';
$string['cancel'] = 'Abbrechen';
$string['cancel_team_form'] = 'Abbrechen';
$string['confirm_delete'] = 'Möchten Sie diese Antwort wirklich löschen?';
$string['cons'] = 'Negativ';
$string['cons_response_count'] = 'Anzahl negativer Reaktionen';
$string['cons_user_count'] = 'Anzahl der negativer Nutzer/innen';
$string['createnew'] = 'Neue Gruppe erstellen';
$string['debate:addinstance'] = 'Hinzufügen einer neuen Debatteninstanz';
$string['debate:deleteanyresponse'] = 'Lösche alle Debattenantworten';
$string['debate:deleteownresponse'] = 'Lösche eigene Debattenantwort';
$string['debate:manageteams'] = 'Debattengruppen verwalten';
$string['debate:updateownresponse'] = 'Aktualisiere eigene Debattenantwort';
$string['debate:view'] = 'Inhalt der Debatte anzeigen';
$string['debate_team_active'] = 'Debattengruppe: {$a->name} aktiviert.';
$string['debate_team_active_error'] = 'Aktivierung Debattengruppe fehlgeschlagen: {$a->name}.';
$string['debate_team_deactive'] = 'Debattengruppe: {$a->name} deaktiviert.';
$string['debate_team_deactive_error'] = 'Deaktivierung Debattengruppe fehlgeschlagen: {$a->name}.';
$string['debate_team_delete_failed'] = 'Debattengruppe: {$a->name} konnte nicht gelöscht werden.';
$string['debate_team_deleted'] = 'Debattengruppe: {$a->name} ist erfolgreich gelöscht.';
$string['debate_team_saved'] = 'Debattengruppe gespeichert.';
$string['debate_teams'] = 'Debattengruppe';
$string['debate_topic'] = 'Thema der Debatte';
$string['debatename'] = 'Name';
$string['debateresponsecom'] = 'Teilnehmer/innen müssen Antworten veröffentlichen';
$string['debateresponsecomgroup'] = 'Antwort erforderlich';
$string['delete'] = 'Löschen';
$string['delete_debate_team'] = 'Debattengruppe löschen';
$string['delete_debate_team_confirmation'] = 'Möchten Sie die Debattengruppe {$a->name} wirklich löschen?';
$string['edit'] = 'Bearbeiten';
$string['edit_mode_active'] = 'Entweder ist der Bearbeitungsmodus aktiv oder es ist keine Antwort mehr erlaubt.';
$string['edit_negative_team'] = 'Negativ-Gruppe bearbeiten';
$string['edit_positive_team'] = 'Positiv-Gruppe bearbeiten';
$string['empty_response'] = 'Eine leere Antwort kann nicht gespeichert werden.';
$string['error_add'] = 'Fehler beim Aktualisieren der Antwort. Prüfen Sie bitte die eingegebene Antwort, denn hier kann nämlich nur Text eingegeben werden.';
$string['error_delete'] = 'Fehler beim Löschen der Antwort. Prüfen Sie bitte die Datenbank für weitere Informationen.';
$string['event_response_added'] = 'Debattenantwort hinzugefügt';
$string['event_response_added_desc'] = 'Die Person mit der ID "{$a->userid}" hat eine Antwort mit der ID "{$a->objectid}" in der Debatte mit ID "{$a->debateid}" hinzugefügt.';
$string['event_response_deleted'] = 'Debattenantwort gelöscht';
$string['event_response_deleted_desc'] = 'Die Person mit der ID "{$a->userid}" hat dieAntwort mit der ID "{$a->objectid}" in der Debatte mit ID "{$a->debateid}" gelöscht.';
$string['event_response_error'] = 'Fehler aus einer Antwort der Debatte';
$string['event_response_updated'] = 'Debattenantwort aktualisiert';
$string['goback'] = 'Zurück';
$string['grade_debater'] = 'Teilnehmer/innen bewerten';
$string['groupselection'] = 'Gruppe auswählen';
$string['id'] = 'ID';
$string['inactive'] = 'Inaktiv';
$string['join_debate'] = 'Debatte beitreten/ansehen';
$string['manage_negative_team'] = 'Negativ-Gruppe verwalten';
$string['manage_positive_team'] = 'Positiv-Gruppe verwalten';
$string['manage_teams'] = 'Gruppen verwalten';
$string['maximum_character_2'] = 'Maximal zweistellige Zahlen für die Antworten erlaubt';
$string['maximum_character_255'] = 'Maximal 255 Zeichen erlaubt.';
$string['missingidandcmid'] = 'Kurs-ID fehlt';
$string['missingresponsetype'] = 'Antworttyp fehlt';
$string['modulename'] = 'Debatte';
$string['modulenameplural'] = 'Debatten';
$string['name'] = 'Name';
$string['no_more_response'] = 'Ihre Gruppe darf auf dieser Seite nicht mehr antworten.';
$string['no_possible_match'] = 'Keine passenden Antworten';
$string['no_team'] = 'Ihre Gruppe darf auf dieser Seite nicht antworten.';
$string['one_response'] = 'Erlaubt eine Antwort auf einer Seite';
$string['one_response_any_side'] = 'Auf jeder Seite ist nur eine Antwort erlaubt, Sie können keine weiteren Antworten hinzufügen.';
$string['one_response_each_side'] = 'Auf jeder Seite ist nur eine Antwort erlaubt. Sie können keine weiteren Antworten hinzufügen, da Sie bereits eine Antwort für diese Seite haben.';
$string['pluginadministration'] = 'Debatten-Admin';
$string['pluginname'] = 'Debatte';
$string['possible_match'] = 'Mögliche passende Antworten';
$string['privacy:metadata:debate_response'] = 'Informationen über die Reaktion des Debattenthemas für einen Debattenkurs';
$string['privacy:metadata:debate_response:courseid'] = 'Die ID des Debattenkurses';
$string['privacy:metadata:debate_response:debateid'] = 'Die ID der Debatteninstanz';
$string['privacy:metadata:debate_response:response'] = 'Antwort der Person für die Debattenaktivität';
$string['privacy:metadata:debate_response:responsetype'] = 'Antworttyp für die Debattenaktivität der Person';
$string['privacy:metadata:debate_response:timecreated'] = 'Zeitstempel, der angibt, wann eine Person erstmals eine Interaktion mit dem Debattenkurs aufgezeichnet hat';
$string['privacy:metadata:debate_response:timemodified'] = 'Zeitstempel, der angibt, wann eine Person zuletzt eine Interaktion mit dem Debattenkurs aufgezeichnet hat';
$string['privacy:metadata:debate_response:userid'] = 'ID der antwortenden Person';
$string['pros'] = 'Positiv';
$string['pros_response_count'] = 'Anzahl der positiven Antworten';
$string['pros_user_count'] = 'Anzahl der positiven Nutzer/innen';
$string['reset_debate_attempts'] = 'Debattenantworten löschen';
$string['reset_debate_teams'] = 'Debattengruppe löschen';
$string['responseallowed'] = 'Antwort erlaubt';
$string['save'] = 'Speichern';
$string['search:activity'] = 'Debatte - Informationen zur Aktivität';
$string['showinmodule'] = 'Beschreibung auf der Debattenseite anzeigen';
$string['showinmodule_help'] = 'Beschreibung auf der Debattenseite nach dem Diskussionsthema anzeigen';
$string['status'] = 'Status';
$string['success_delete'] = 'Die Antwort wurde erfolgreich gelöscht';
$string['teamsdeleted'] = 'Debattengruppe gelöscht';
$string['timemodified'] = 'Zeit angepasst';
$string['topicheader'] = 'Thema';
$string['two_response'] = 'Nur eine Antwort auf jeder Seite erlauben';
$string['unlimited_response'] = 'Unbegrenzte Anzahl von Antworten erlauben';
$string['update'] = 'Update';
$string['use_teams'] = 'Gruppenfunktion verwenden';
$string['user_response'] = 'Antworttyp von Nutzer/in';
