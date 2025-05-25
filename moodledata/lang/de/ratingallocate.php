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
 * Strings for component 'ratingallocate', language 'de', version '4.5'.
 *
 * @package     ratingallocate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['algorithm_already_running'] = 'Eine weitere Instanz des Verteilungsalgorithmus läuft bereits. Bitte warten Sie ein paar Minuten und aktualisieren Sie dann die Seite.';
$string['algorithm_now_scheduled_for_cron'] = 'Die Ausführung des Verteilungsalgorithmus wurde jetzt für die Ausführung durch den Cronjob geplant. Bitte warten Sie ein paar Minuten und aktualisieren Sie dann die Seite.';
$string['algorithm_scheduled_for_cron'] = 'Die Ausführung des Verteilungsalgorithmus ist für den nächsten Durchlauf des Cronjobs geplant. Bitte warten Sie ein paar Minuten und aktualisieren Sie dann die Seite.';
$string['algorithmforcebackground'] = 'Berechnung als Hintergrund-Task ausführen.';
$string['algorithmtimeout'] = 'Zeitüberschreitung des Algorithmus';
$string['allocation_manual_explain_all'] = 'Ordnen Sie den Teilnehmer/innen eine Wahlmöglichkeit zu.';
$string['allocation_manual_explain_only_raters'] = 'Ordnen Sie den Teilnehmer/innen eine Wahlmöglichkeit zu. Es werden nur diejenigen Teilnehmer/innen angezeigt, welche mindestens eine Möglichkeit ausgewählt haben.';
$string['allocation_notification_message'] = 'Ihnen wurde in "{$a->ratingallocate}" die Wahlmöglichkeit "{$a->choice}  ({$a->explanation})" zugewiesen.';
$string['allocation_notification_message_subject'] = 'Verteilung veröffentlicht für {$a}';
$string['allocation_statistics'] = 'Verteilungsstatistik';
$string['allocation_statistics_description'] = 'Diese Tabelle gibt einen Überblick über die Verteilung. Sie wird errechnet mit Bezug zu den Abstimmungen der Teilnehmer/innen für ihre Wahlmöglichkeiten.
<ul>
<li>{$a->rated} von {$a->usersinchoice} Teilnehmer/innen haben eine Auswahl getroffen.</li>
<li>{$a->users} von {$a->total} Teilnehmer/innen haben die Auswahl "{$a->rating}" getroffen.</li>
<li>{$a->unassigned} Teilnehmer/innen konnten noch nicht verteilt werden.</li>
</ul>';
$string['allocation_statistics_description_no_alloc'] = 'Diese Tabelle gibt einen Überblick über die Verteilung. Sie wird errechnet mit Bezug zu den Abstimmungen der Teilnehmer/innen für ihre Wahlmöglichkeiten.
<ul>
<li>Zurzeit haben {$a->notrated} Teilnehmer/innen noch keine Auswahl getroffen.</li>
<li>{$a->rated} Teilnehmer/innen haben bereits eine Auswahl getroffen.</li>
<li>Es gibt derzeit noch keine Verteilungen.</li>
</ul>';
$string['allocation_table_description'] = 'Diese Statistik gibt einen Überblick über die Zuweisungen für diese Gerechte Verteilung.
Alle Teilnehmer/innen, welche an der Abstimmung teilgenommen haben, aber nicht zugewiesen wurden, werden unter \'Keine Zuweisung\' angezeigt.';
$string['allocations_table'] = 'Verteilungsüberblick';
$string['allocations_table_choice'] = 'Wahlmöglichkeit';
$string['allocations_table_noallocation'] = 'Keine Verteilung';
$string['allocations_table_users'] = 'Teilnehmer/innen';
$string['at_least_one_rateable_choices_needed'] = 'Mindestens eine Wahlmöglichkeit muss aktiv sein.';
$string['calendarstart'] = '{$a} beginnt';
$string['calendarstop'] = '{$a} schließt';
$string['choice_active'] = 'Wahlmöglichkeit aktiv';
$string['choice_active_help'] = 'Teilnehmer/innen können nur aktive Wahlmöglichkeiten nutzen. Inaktive Wahlmöglichkeiten werden nicht angezeigt.';
$string['choice_added_notification'] = 'Wahlmöglichkeit gespeichert.';
$string['choice_deleted_notification'] = 'Wahlmöglichkeit "{$a}" wurde gelöscht.';
$string['choice_deleted_notification_error'] = 'Die zu löschende Wahlmöglichkeit wurde nicht gefunden.';
$string['choice_explanation'] = 'Beschreibung (optional)';
$string['choice_groupselect'] = 'Gruppen';
$string['choice_maxsize'] = 'Max. Anzahl von Teilnehmer/innen';
$string['choice_maxsize_display'] = 'Max. Anzahl von Teilnehmer/innen';
$string['choice_navigation'] = 'Wahlmöglichkeiten';
$string['choice_table_active'] = 'Aktiv';
$string['choice_table_explanation'] = 'Beschreibung';
$string['choice_table_maxsize'] = 'Max. Größe';
$string['choice_table_title'] = 'Titel';
$string['choice_table_tools'] = 'Bearbeiten';
$string['choice_table_usegroups'] = 'Gruppen';
$string['choice_title'] = 'Titel';
$string['choice_title_help'] = 'Titel der Wahlmöglichkeit. *Achtung:* Alle aktiven Wahlmöglichkeiten werden  nach Titel aufsteigend sortiert.';
$string['choice_usegroups'] = 'Sichtbarkeit durch Gruppen eingeschränkt';
$string['choice_usegroups_help'] = '* Wenn diese Option aktiviert ist, ist diese Wahlmöglichkeit nur für Mitglieder der ausgewählten Gruppe sichtbar.
* Wenn diese Option nicht aktiviert ist, ist diese Wahlmöglichkeit für alle berechtigten Nutzer verfügbar.
* Wenn diese Option aktiviert ist aber keine Gruppe ausgewählt wurde, ist diese Wahlmöglichkeit für *keinen Nutzer* sichtbar.';
$string['choicestatusheading'] = 'Status';
$string['closebeforeopen'] = 'Der Endzeitpunkt der Aktivität muss nach dem Startzeitpunkt liegen.';
$string['completionallocation'] = 'Zu einer Wahlmöglichkeit zugeordnet werden';
$string['completionallocation_desc'] = 'Zugeordnet werden';
$string['completionallocation_help'] = 'Um diese Aktivität abzuschließen, müssen Teilnehmer/innen zu einer Wahlmöglichkeit zugeordnet werden.';
$string['completionvote'] = 'In der Aktivität abstimmen';
$string['completionvote_desc'] = 'Abstimmen';
$string['completionvote_help'] = 'Um diese Aktivität abzuschießen, müssen Teilnehmer/innen eine Abstimmung abschicken.';
$string['configalgorithmforcebackground'] = 'Auch bei manueller Ausführung durch Nutzer/innen wird die Verteilung immer im Hintergrund berechnet.';
$string['configalgorithmtimeout'] = 'Ausführungszeit in Sekunden, nach der vermutet wird, dass ein Algorithmus keine Lösung finden konnte. Die entsprechende Ausführung wird beendet und als fehlgeschlagen markiert.';
$string['configdownloaduserfields'] = 'Beim Herunterladen einer Tabelle mit enthaltenen Nutzer/innen können diese Felder zusätzlich zu den Vor- und Nachnamen angezeigt werden.';
$string['confirm_delete_all_ratings'] = 'Möchten Sie wirklich alle Abstimmungenlöschen, die bisher von Teilnehmer/innen gemacht wurden?';
$string['confirm_start_distribution'] = 'Die Ausführung des Algorithmus kann ggf. vorhandene Zuordnungen löschen. Möchten Sie wirklich weitermachen?';
$string['create_moodle_groups'] = 'Moodle-Gruppen erzeugen';
$string['crontask'] = 'Automatische Zuordnung für "Gerechte Verteilung"';
$string['csvempty'] = 'Die CSV-Datei ist leer.';
$string['csvupload'] = 'CSV hochladen';
$string['csvupload_explanation'] = 'Eine Liste von Wahlmöglichkeiten per CSV-Datei hochladen';
$string['csvupload_further_problems'] = '{$a} weitere Probleme gefunden aber nicht angezeigt.';
$string['csvupload_live_problems'] = 'Probleme beim CSV-Import gefunden: {$a}';
$string['csvupload_live_success'] = 'CSV-Import erfolgreich. {$a->importcount} Wahlmöglichkeiten importiert.';
$string['csvupload_missing_fields'] = 'Spalten fehlen im CSV-Import: {$a}';
$string['csvupload_missing_groups'] = 'Zeile {$a->row}: Gruppe(n) nicht verfügbar im Kurs: [{$a->invalidgroups}]';
$string['csvupload_test_problems'] = 'Probleme beim CSV-Testimport gefunden: {$a}';
$string['csvupload_test_success'] = 'CSV-Testimport erfolgreich. {$a->importcount} Wahlmöglichkeiten können importiert werden.';
$string['csvupload_test_upload'] = 'Test hochladen';
$string['csvupload_test_upload_help'] = 'Wenn diese Option ausgewählt ist, wird die hochgeladene CSV-Datei auf Fehler getestet, aber die Daten werden nicht in der Datenbank gespeichert.';
$string['csvupload_too_long_title'] = 'Zu langer Name (> 255 Zeichen): {$a}';
$string['datechanged'] = 'Datum geändert';
$string['delete_all_ratings'] = 'Alle Abstimmungen der Teilnehmer/innen löschen';
$string['delete_all_ratings_explanation'] = 'Löscht alle Abstimmungen, die bisher von Teilnehmer/innen gemacht wurden, und alle Verteilungen, die basierend auf diesen Abstimmungen vorgenommen wurden. Mit Vorsicht nutzen!';
$string['delete_choice'] = 'Wahlmöglichkeit löschen';
$string['delete_rating'] = 'Abstimmung löschen';
$string['deletechoice'] = 'Wahlmöglichkeit löschen';
$string['deleteconfirm'] = 'Wollen Sie die Wahlmöglichkeit "{$a}" wirklich löschen?';
$string['distribute_unallocated_equally_confirm'] = 'Alle bisher nicht verteilten Teilnehmer/innen werden zu den Wahlmöglichkeiten zugeteilt. Die Wahlmöglichkeiten werden gleichmäßig aufgefüllt, so dass alle ungefähr die gleiche Teilnehmerzahl übrig haben.';
$string['distribute_unallocated_fill_confirm'] = 'Alle bisher nicht verteilten Teilnehmer/innen werden zu den Wahlmöglichkeiten zugeteilt. Eine offene Wahlmöglichkeit wird bis zum Maximum aufgefüllt bevor die Teilnehmer/innen zu der nächsten Wahlmöglichkeit zugeordnet werden.';
$string['distributeequally'] = 'Gleichmäßige Verteilung';
$string['distributefill'] = 'Auffüllende Verteilung';
$string['distributing_unallocated_users_started'] = 'Die Verteilung von nicht zugeordneten Teilnehmer/innen wurde gestartet. Bitte warten Sie einige Zeit und werfen Sie danach einen Blick auf die Verteilungstabelle.';
$string['distribution_algorithm'] = 'Verteilungsalgorithmus';
$string['distribution_description'] = 'Verteilung von nicht zugeordneten Teilnehmer/innen';
$string['distribution_description_help'] = 'Sie können zwischen zwei verschiedenen Algorithmen wählen, um bisher noch nicht zugeordnete Teilnehmer/innen auf die Wahlmöglichkeiten zu verteilen. <br/>
<i>Gleichmäßige Verteilung:</i> Teilnehmer/innen werden gleichmäßig zwischen den Wahlmöglichkeiten mit freien Plätzen aufgeteilt mit Rücksicht auf das Maximum.<br/>
<i>Wahlmöglichkeiten auffüllen:</i> Jede Wahlmöglichkeit wird mit Teilnehmer/innen zum Maximum aufgefüllt bevor die nächste Wahlmöglichkeit aufgefüllt wird. Wahlmöglichkeiten mit den am wenigsten freien Plätzen werden zuerst aufgefüllt.<br/><br/>
Gruppenbeschränkungen für Wahlmöglichkeiten werden entsprechend berücksichtigt.';
$string['distribution_published'] = 'Die Ergebnisse der Verteilung wurden veröffentlicht.';
$string['distribution_saved'] = 'Verteilung gespeichert (in {$a}s).';
$string['distribution_table'] = 'Verteilungstabelle';
$string['distribution_unallocated_already_running'] = 'Die Verteilung von nicht zugeordneten Teilnehmer/innen wird derzeit durchgeführt. Bitte warten Sie einige Zeit und laden Sie die Seite danach erneut, um zu prüfen, ob der Vorgang abgeschlossen ist.';
$string['download_problem_mps_format'] = 'Gleichungen exportieren (mps/txt)';
$string['downloaduserfields'] = 'Zusätzliche Nutzerfelder für das Herunterladen';
$string['edit_choice'] = 'Wahlmöglichkeit bearbeiten';
$string['edit_rating'] = 'Auswahl treffen';
$string['err_maximum'] = 'Der maximale Wert für dieses Feld ist {$a}.';
$string['err_minimum'] = 'Der minimale Wert für dieses Feld ist {$a}.';
$string['err_positivnumber'] = 'In dieses Feld muss eine positive Zahl eintragen werden.';
$string['err_required'] = 'In dieses Feld muss ein Wert eingetragen werden.';
$string['error_deleting_all_insufficient_permission'] = 'Sie haben kein Recht, dies zu tun.';
$string['error_deleting_all_no_rating_possible'] = 'Die Abstimmungen können nicht gelöscht werden, wenn die Abstimmungsphase schon vorbei ist.';
$string['export_choice_alloc_suffix'] = '- Verteilung';
$string['export_choice_text_suffix'] = '- Text';
$string['export_options'] = 'Exportoptionen';
$string['filter_hide_users_without_rating'] = 'Teilnehmer/innen ohne vorgenommene Abstimmung ausblenden';
$string['filter_show_alloc_necessary'] = 'Teilnehmer/innen mit vorhandener Verteilung ausblenden';
$string['filtergroup'] = 'Gruppenfilter';
$string['filtergroup_help'] = '* Wählen Sie eine Gruppe aus, um die Teilnehmer/innen im Kurs nach den Gruppen zu filtern, denen sie angehören
und bewertbare Wahlmöglichkeiten nach Gruppen, die die Möglichkeit hatten, auf sie zuzugreifen.
* Es können nur Gruppen ausgewählt werden, die in der Option *Gruppen verwenden* ausgewählt werden können.
* Wenn *keine Gruppe* ausgewählt wurde, werden die Teilnehmer/innen angezeigt, die keiner der Gruppen angehören, die für eine Wahlmöglichkeit verwendet werden.';
$string['filtermanualtabledesc'] = 'Beschreibt die Filter, welche auf die manuelle Verteilungstabelle angewendet wurden.';
$string['filtertabledesc'] = 'Beschreibt die Filter, welche auf die Verteilungstabelle angewendet wurden.';
$string['groupingname'] = 'Erstellt von der Gerechten Verteilung "{$a}"';
$string['invalid_dates'] = 'Datumsangaben ungültig: Das Startdatum muss vor dem Enddatum liegen.';
$string['invalid_publishdate'] = 'Veröffentlichungsdatum ungültig: Datum muss nach der Abstimmungsphase liegen.';
$string['is_published'] = 'Veröffentlicht';
$string['last_algorithm_run_date'] = 'Letzter Algorithmusdurchlauf';
$string['last_algorithm_run_date_none'] = '-';
$string['last_algorithm_run_status'] = 'Status des letzten Durchlaufs';
$string['last_algorithm_run_status_-1'] = 'Fehlgeschlagen';
$string['last_algorithm_run_status_0'] = 'Nicht gestartet';
$string['last_algorithm_run_status_1'] = 'Läuft gerade';
$string['last_algorithm_run_status_2'] = 'Erfolgreich';
$string['log_all_ratings_deleted'] = 'Alle Abstimmungen von der Gerechten Verteilung wurden gelöscht.';
$string['log_all_ratings_deleted_description'] = 'Die Person mit der ID "{$a->userid}" hat alle Abstimmungen für die Gerechte Verteilung mit der ID "{$a->ratingallocateid}" gelöscht.';
$string['log_allocation_published'] = 'Die Ergebnisse der Verteilung wurden veröffentlicht.';
$string['log_allocation_published_description'] = 'Nutzer/in mit der ID \'{$a->userid}\' hat die Verteilung für die Aktivität \'Gerechte Verteilung\' mit der ID \'{$a->ratingallocateid}\' veröffentlicht.';
$string['log_allocation_statistics_viewed'] = 'Verteilungsstatistiken angesehen';
$string['log_allocation_statistics_viewed_description'] = 'Teilnehmer/in mit der ID \'{$a->userid}\' hat die Verteilungsstatistik für die Aktivität \'Gerechte Verteilung\' mit der ID \'{$a->ratingallocateid}\' angesehen.';
$string['log_allocation_table_viewed'] = 'Verteilungstabelle angesehen';
$string['log_allocation_table_viewed_description'] = 'Teilnehmer/in mit der ID \'{$a->userid}\' hat die Verteilungstabelle für die Aktivität \'Gerechte Verteilung\' mit der ID \'{$a->ratingallocateid}\' angesehen.';
$string['log_distribution_triggered'] = 'Verteilung gestartet';
$string['log_distribution_triggered_description'] = 'Teilnehmer/in mit der ID \'{$a->userid}\' hat die Verteilung für die Aktivität \'Gerechte Verteilung\' mit der ID \'{$a->ratingallocateid}\' gestartet. Der Algorithmus hat {$a->time_needed} Sekunden gebraucht.';
$string['log_index_viewed'] = 'Teilnehmer/in hat die Liste aller gerechten Verteilungen angesehen';
$string['log_index_viewed_description'] = 'Teilnehmer/in mit der ID "{$a->userid}" hat die Liste aller gerechten Verteilungen angesehen.';
$string['log_manual_allocation_saved'] = 'Die manuelle Verteilung wurde gesichert.';
$string['log_manual_allocation_saved_description'] = 'Teilnehmer/in mit der ID \'{$a->userid}\' hat eine manuelle Verteilung für die Aktivität \'Gerechte Verteilung\' mit der ID \'{$a->ratingallocateid}\' gespeichert.';
$string['log_rating_deleted'] = 'Abstimmung gelöscht';
$string['log_rating_deleted_description'] = 'Teilnehmer/in mit der ID "{$a->userid}" hat die Auswahl für die gerechte Verteilung mit der ID "{$a->ratingallocateid}" gelöscht.';
$string['log_rating_saved'] = 'Abstimmung des Nutzers gespeichert';
$string['log_rating_saved_description'] = 'Nutzer/in mit der ID \'{$a->userid}\' hat seine Abstimmung für die Aktivität \'Gerechte Verteilung\' mit der ID \'{$a->ratingallocateid}\' gespeichert.';
$string['log_rating_viewed'] = 'Abstimmung angesehen';
$string['log_rating_viewed_description'] = 'Teilnehmer/in mit der ID \'{$a->userid}\' hat die Abstimmung für die Aktivität \'Gerechte Verteilung\' mit der ID \'{$a->ratingallocateid}\' angesehen.';
$string['log_ratingallocate_viewed'] = '\'Gerechte Verteilung\' angesehen';
$string['log_ratingallocate_viewed_description'] = 'Teilnehmer/in mit der ID \'{$a->userid}\' hat die \'Gerechte Verteilung\' mit der ID \'{$a->ratingallocateid}\' angesehen.';
$string['log_ratings_and_allocation_table_viewed'] = 'Abstimmungs- und Verteilungstabelle angezeigt';
$string['log_ratings_and_allocation_table_viewed_description'] = 'Teilnehmerin mit der ID "{$a->userid}" hat die Abstimmungs- und Verteilungstabelle für die gerechte Verteilung mit der ID "{$a->ratingallocateid}" angezeigt.';
$string['manual_allocation'] = 'Manuelle Verteilung';
$string['manual_allocation_form'] = 'Formular für die manuelle Verteilung';
$string['manual_allocation_nothing_to_be_saved'] = 'Keine Veränderungen, die gespeichert werden müssten.';
$string['manual_allocation_saved'] = 'Ihre manuelle Verteilung wurde gespeichert.';
$string['messageprovider:allocation'] = 'Mitteilung über veröffentlichte Verteilung';
$string['messageprovider:notifyalloc'] = 'Benachrichtigung für die Aktivität \'Gerechte Verteilung\'';
$string['modify_allocation_group'] = 'Verteilung ändern';
$string['modify_allocation_group_desc_published'] = 'Die Verteilungen wurden veröffentlicht.
Sie sollten diese nur mit Bedacht verändern.
Informieren Sie die Teilnehmer/innen über eine nachträgliche Veränderung manuell!';
$string['modify_allocation_group_desc_rating_in_progress'] = 'Die Abstimmungsphase läuft gerade. Sie können den automatischen Verteilungsalgorithmus starten, nachdem die Abstimmungsphase vorbei ist.';
$string['modify_allocation_group_desc_ready'] = 'Die Abstimmungsphase ist beendet. Sie können nun den automatischen Verteilungsalgorithmus basierend auf den Abstimmungen der Teilnehmer/innen ausführen.';
$string['modify_allocation_group_desc_ready_alloc_started'] = 'Die Abstimmungsphase ist beendet. Einzelne Verteilungen wurden bereits erstellt.
Den Algorithmus erneut auszuführen wird alle derzeitigen Verteilungen löschen.
Sie können die Verteilung manuell verändern oder veröffentlichen.';
$string['modify_allocation_group_desc_too_early'] = 'Die Abstimmungsphase hat noch nicht begonnen. Sie können den Verteilungsalgorithmus ausführen sobald die Abstimmung beendet ist.';
$string['modify_choices'] = 'Wahlmöglichkeiten bearbeiten';
$string['modify_choices_explanation'] = 'Zeigt die Liste aller Wahlmöglichkeiten. Hier können Wahlmöglichkeiten versteckt, bearbeitet und gelöscht werden.';
$string['modify_choices_group'] = 'Wahlmöglichkeiten';
$string['modify_choices_group_desc_published'] = 'Die Verteilung wurde bereits veröffentlich. Es wird nicht empfohlen die Wahlmöglichkeiten noch zu verändern.';
$string['modify_choices_group_desc_rating_in_progress'] = 'Die Abstimmungsphase läuft gerade. Sie sollten die verfügbaren Wahlmöglichkeiten aktuell nicht verändern.';
$string['modify_choices_group_desc_ready'] = 'Die Abstimmungsphase ist beendet. Sie können nun die maximale Größe der Wahlmöglichkeiten verändern oder vereinzelte Wahlmöglichkeiten deaktivieren, um das Ergebnis des Zuteilungsalgorithmus zu variieren.';
$string['modify_choices_group_desc_ready_alloc_started'] = 'Die Abstimmungsphase ist beendet. Sie können nun die maximale Größe der Wahlmöglichkeiten verändern oder vereinzelte Wahlmöglichkeiten deaktivieren, um das Ergebnis des Zuteilungsalgorithmus zu variieren.';
$string['modify_choices_group_desc_too_early'] = 'Hier können Sie die Wahlmöglichkeiten spezifizieren, welche für die Teilnehmer/innen verfügbar sein sollen.';
$string['modulename'] = 'Gerechte Verteilung';
$string['modulename_help'] = 'Die Aktivität \'Gerechte Verteilung\' stellt Teilnehmer/innen Wahlmöglichkeiten zur Verfügung, die diese mittels verschiedener Strategien während eines Wahlzeitraums bewerten. Nach Ablauf des Zeitraums können Sie die Teilnehmer/innen automatisch auf die Wahlmöglichkeiten fair verteilen lassen. Anschließend können Sie die Verteilung noch manuell bearbeiten.';
$string['modulenameplural'] = 'Gerechte Verteilungen';
$string['moodlegroups_created'] = 'Die der Verteilung entsprechenden Moodle-Gruppen wurden erzeugt.';
$string['newchoice'] = 'Neue Wahlmöglichkeit hinzufügen';
$string['newchoicetitle'] = 'Neue Wahlmöglichkeit {$a}';
$string['no_allocation_notification_message'] = 'Sie konnten in "{$a->ratingallocate}" zu keiner Wahlmöglichkeit zugewiesen werden.';
$string['no_choice_to_rate'] = 'Es gibt keine Wahlmöglichkeit, über die abgestimmt werden könnte.';
$string['no_id_or_m_error'] = 'Sie müssen eine course_module ID oder eine instance ID angeben.';
$string['no_rating_given'] = 'nicht abgestimmt';
$string['no_rating_possible'] = 'Momentan ist es nicht möglich abzustimmen!';
$string['no_user_to_allocate'] = 'Es gibt keine Teilnehmer/innen, die Sie zuordnen könnten.';
$string['openafterclose'] = 'Der Startzeitpunkt der Aktivität muss vor dem Endzeitpunkt liegen.';
$string['pluginadministration'] = 'Administration für Gerechte Verteilung';
$string['pluginname'] = 'Gerechte Verteilung';
$string['privacy:metadata:preference:flextable_filter'] = 'Speichert die Filter, welche auf die Verteilungstabelle angewendet wurden.';
$string['privacy:metadata:preference:flextable_manual_filter'] = 'Speichert die Filter, welche auf die manuelle Verteilungstabelle angewendet wurden.';
$string['privacy:metadata:ratingallocate_allocations'] = 'Information über die zugewiesene Wahlmöglichkeit einer Person in einer Aktivitätsinstanz.';
$string['privacy:metadata:ratingallocate_allocations:choiceid'] = 'Die ID der Wahlmöglichkeit, die einer Person zugewiesen wurde.';
$string['privacy:metadata:ratingallocate_allocations:ratingallocateid'] = 'Die ID der Aktivitätsinstanz, zu der diese gerechte Verteilung gehört.';
$string['privacy:metadata:ratingallocate_allocations:userid'] = 'Die ID der Person, die zu einer Wahlmöglichkeit zugewiesen wurde.';
$string['privacy:metadata:ratingallocate_ratings'] = 'Information über die Abstimmung zu den gegebenen Wahlmöglichkeiten.';
$string['privacy:metadata:ratingallocate_ratings:choiceid'] = 'Die ID der Wahlmöglichkeit, die eine Person bewertet hat.';
$string['privacy:metadata:ratingallocate_ratings:rating'] = 'Die Abstimmung, die eine Person der Wahlmöglichkeit gegeben hat.';
$string['privacy:metadata:ratingallocate_ratings:userid'] = 'Nutzer-ID der abstimmenden Person';
$string['publish_allocation'] = 'Verteilung veröffentlichen';
$string['publish_allocation_group'] = 'Verteilung veröffentlichen';
$string['publish_allocation_group_desc_published'] = 'Die Verteilung wurde bereits veröffentlicht.
Sie können in Ihrem Kurs Gruppen entsprechend der Verteilungen erstellen.
Falls durch das Plugin bereits Gruppen erstellt wurden, werden diese gelöscht bevor sie erneut angelegt werden.';
$string['publish_allocation_group_desc_rating_in_progress'] = 'Die Abstimmungsphase läuft gerade. Bitte warten Sie bis die Abstimmungsphase beendet ist. Anschließend ist der erste Schritt die Verteilung zu erstellen.';
$string['publish_allocation_group_desc_ready'] = 'Bisher fand keine Verteilung statt.';
$string['publish_allocation_group_desc_ready_alloc_started'] = 'Die Verteilung kann nun veröffentlicht werden und Sie können in Ihrem Kurs Gruppen entsprechend der Verteilungen erstellen.';
$string['publish_allocation_group_desc_ready_alloc_started_help'] = 'Nach Veröffentlichung können die Verteilungen nicht mehr verändert werden.
Bitte betrachten Sie die derzeitige Verteilung im entsprechenden Bericht.

Falls durch das Plugin bereits Gruppen erstellt wurden, werden diese gelöscht bevor sie erneut erstellt werden.
Dies kann vor und nach Veröffentlichung geschehen.';
$string['publish_allocation_group_desc_too_early'] = 'Die Bewertungsphase hat noch nicht begonnen. Warten Sie bitte das Ende der Bewertungsphase ab und beginnen Sie dann erst mit der Erstellung der Zuordnungen.';
$string['publishdate'] = 'Voraussichtliches Veröffentlichungsdatum';
$string['publishdate_estimated'] = 'Voraussichtliches Veröffentlichungsdatum';
$string['rateable_choices'] = 'Zur Verfügung stehende Wahlmöglichkeiten';
$string['rated'] = 'abgestimmt mit {$a}';
$string['rating_begintime'] = 'Abstimmung startet am';
$string['rating_endtime'] = 'Abstimmung endet am';
$string['rating_is_over'] = 'Die Abstimmungsphase ist vorbei.';
$string['rating_is_over_no_allocation'] = 'Die Abstimmungsphase ist vorbei. Sie konnten zu keiner Wahlmöglichkeit zugewiesen werden.';
$string['rating_is_over_with_allocation'] = 'Die Abstimmungsphase ist vorbei. Sie wurden \'{$a}\' zugewiesen.';
$string['rating_raw'] = '{$a}';
$string['ratingallocate'] = 'Gerechte Verteilung';
$string['ratingallocate:addinstance'] = 'Neue Instanz "Gerechte Verteilung" hinzufügen';
$string['ratingallocate:distribute_unallocated'] = 'Möglichkeit, nicht zugeordnete Teilnehmer/innen automatisch zu verteilen.';
$string['ratingallocate:export_ratings'] = 'Möglichkeit, die Präferenzen von Teilnehmer/innen zu exportieren.';
$string['ratingallocate:give_rating'] = 'Eine Wahl abgeben';
$string['ratingallocate:modify_choices'] = 'Möglichkeit, die Wahlmöglichkeiten einer Gerechten Verteilung zu bearbeiten oder zu löschen.';
$string['ratingallocate:start_distribution'] = 'Verteilung starten';
$string['ratingallocate:view'] = 'Gerechte Verteilung ansehen';
$string['ratingallocatename'] = 'Name der Gerechten Verteilung';
$string['ratingallocatename_help'] = 'Wählen Sie einen Namen für die Aktivität "Gerechte Verteilung"';
$string['ratings_and_allocations_deleted'] = 'Abstimmungen und Verteilungen gelöscht';
$string['ratings_deleted'] = 'Ihre Abstimmungen wurden gelöscht.';
$string['ratings_saved'] = 'Ihre Abstimmungen wurden gesichert.';
$string['ratings_table'] = 'Abstimmungen und Verteilungen';
$string['ratings_table_sum_allocations'] = 'Anzahl Verteilungen / Maximum';
$string['ratings_table_sum_allocations_value'] = '{$a->sum} / {$a->max}';
$string['ratings_table_user'] = 'Teilnehmer/in';
$string['remove_ratings_and_allocations'] = 'Alle Abstimmungen und Verteilungen löschen';
$string['reports_group'] = 'Berichte';
$string['results_not_yet_published'] = 'Die Ergebnisse wurden noch nicht veröffentlicht.';
$string['runalgorithmbycron'] = 'Automatische Verteilung nach Ende der Abstimmungsphase';
$string['runalgorithmbycron_help'] = 'Der Verteilungsalgorithmus wird automatisch gestartet, nachdem die Abstimmungsphase beendet ist. Die Ergebnisse der Verteilung müssen allerdings manuell veröffentlicht werden.';
$string['saveandcontinue'] = 'Speichern und weiter';
$string['saveandnext'] = 'Speichern und weiter';
$string['select_strategy'] = 'Abstimmungsstrategie';
$string['select_strategy_help'] = 'In welchem Modus sollen die Teilnehmer/innen abstimmen?

* **Akzeptieren-Ablehnen** Teilnehmer/innen können für jede Wahlmöglichkeit abstimmen, ob sie diese akzeptieren würden oder ablehnen.
* **Akzeptieren-Neutral-Ablehnen** Teilnehmer/innen können für jede Wahlmöglichkeit abstimmen, ob sie diese akzeptieren oder ablehnen würden oder ob sie dieser Wahlmöglichkeit neutral gegenüberstehen.
* **Likert-Skala** Teilnehmer/innen können für jede Wahlmöglichkeit auf einer Skala mit positiven ganzen Zahlen abstimmen. Die Skala beginnt mit 0. Ihr Ende kann in den Einstellungen gesetzt werden. Eine hohe Zahl bedeutet eine hohe Präferenz.
* **Punkte verteilen** Teilnehmer/innen können für jede Wahlmöglichkeit Punkte vergeben. Die Gesamtzahl der zu vergebenden Punkte kann in den Einstellungen gesetzt werden. Je mehr Punkte eine Wahlmöglichkeit erhält, desto höher ist ihre Präferenz.
* **Reihenfolge** Teilnehmer/innen können ihre \'N\' besten Wahlmöglichkeiten angeben und ordnen. Wie viele Wahlmöglichkeiten angegeben werden müssen kann eingestellt werden.
* **Ankreuzen** Teilnehmer/innen können für jede Wahlmöglichkeit durch das Ankreuzen von Kästchen angeben, ob diese für sie akzeptabel ist.

Diese Option kann nicht mehr verändert werden, sobald Teilnehmer/innen abgestimmt haben.';
$string['show_allocation_statistics'] = 'Verteilungsstatistik anzeigen';
$string['show_allocation_table'] = 'Verteilungsüberblick anzeigen';
$string['show_choices_header'] = 'Liste aller Wahlmöglichkeiten';
$string['show_table'] = 'Abstimmungen und Verteilungen anzeigen';
$string['start_distribution'] = 'Verteilungsalgorithmus starten';
$string['start_distribution_explanation'] = 'Der Algorithmus wird die Teilnehmer/innen entsprechend ihrer Abstimmungen auf die Wahlmöglichkeiten möglichst fair verteilen.';
$string['strategy_altered_after_preferences'] = 'Die Strategie kann nicht mehr verändert werden, sobald Teilnehmer/innen abgestimmt haben.';
$string['strategy_lickert_max_no'] = 'Sie können höchstens {$a} Wahlmöglichkeiten mit 0 Punkten bewerten.';
$string['strategy_lickert_name'] = 'Likert-Skala';
$string['strategy_lickert_rating_biggestwish'] = '{$a} - Starke Präferenz';
$string['strategy_lickert_rating_exclude'] = '{$a} - Ablehnung';
$string['strategy_lickert_setting_maxlickert'] = 'Höchste Zahl auf der Skala (üblich sind 3, 5 oder 7)';
$string['strategy_lickert_setting_maxno'] = 'Maximale Anzahl Wahlmöglichkeiten, die eine Person mit *0* bewerten kann';
$string['strategy_not_specified'] = 'Sie müssen eine Abstimmungsstrategie auswählen.';
$string['strategy_order_choice_none'] = 'Bitte wählen ...';
$string['strategy_order_explain_choices'] = 'Treffen Sie eine Wahl zu jeder Wahlmöglichkeit. Ihre erste Auswahl wird Ihre höchste Präferenz.';
$string['strategy_order_header_description'] = 'Verfügbare Wahlmöglichkeiten';
$string['strategy_order_name'] = 'Reihenfolge angeben';
$string['strategy_order_no_choice'] = '{$a}. Wahl';
$string['strategy_order_setting_countoptions'] = 'Mindestanzahl der Felder, über die eine Person abstimmen muss (kleiner oder gleich der Anzahl der Auswahlmöglichkeiten!)';
$string['strategy_order_use_only_once'] = 'Wahlmöglichkeiten können nicht zweimal ausgewählt werden und müssen eindeutig sein.';
$string['strategy_points_explain_distribute_points'] = 'Geben Sie jeder Wahlmöglichkeit Punkte - insgesamt {$a} Punkte. Verteilen Sie viele Punkte auf stark präferierte Wahlmöglichkeiten. Sie können auch *0* Punkte vergeben.';
$string['strategy_points_explain_max_per_choice'] = 'Sie können höchstens {$a} Punkte für eine Wahlmöglichkeit vergeben.';
$string['strategy_points_explain_max_zero'] = 'Sie können höchstens {$a} Wahlmöglichkeiten *0* Punkte geben.';
$string['strategy_points_illegal_entry'] = 'Die Punkte, die Sie einer Wahlmöglichkeit zuweisen, müssen zwischen 0 und {$a} liegen.';
$string['strategy_points_incorrect_totalpoints'] = 'Die Summe Ihrer Punkte muss {$a} ergeben.';
$string['strategy_points_max_count_zero'] = 'Sie können höchstens {$a} Wahlmöglichkeiten mit 0 Punkten bewerten.';
$string['strategy_points_name'] = 'Punkte verteilen';
$string['strategy_points_setting_maxperchoice'] = 'Maximale Anzahl von Punkten, die eine Person für eine einzige Wahlmöglichkeit vergeben kann';
$string['strategy_points_setting_maxzero'] = 'Maximalanzahl der Wahlmöglichkeiten, die eine Person mit *0* Punkten bewerten kann';
$string['strategy_points_setting_totalpoints'] = 'Gesamtzahl der Punkte, die eine Person verteilen kann';
$string['strategy_settings_default'] = 'Standardwert für das Abstimmungsformular';
$string['strategy_settings_default_help'] = 'Das Abstimmungsformular, das allen Teilnehmer/innen angezeigt wird, enthält eine Reihe von Optionsfeldern für jede verfügbare Wahlmöglichkeit.
Dieser Standardwert legt fest, welches Optionsfeld dabei vorausgewählt ist.';
$string['strategy_settings_label'] = 'Bezeichnung für "{$a}"';
$string['strategy_tickyes_accept'] = 'Akzeptieren';
$string['strategy_tickyes_error_mintickyes'] = 'Sie müssen mindestens {$a} Wahlmöglichkeiten auswählen.';
$string['strategy_tickyes_explain_mintickyes'] = 'Sie müssen mindestens {$a} Wahlmöglichkeiten auswählen.';
$string['strategy_tickyes_name'] = 'Ankreuzen';
$string['strategy_tickyes_not_accept'] = '-';
$string['strategy_tickyes_setting_mintickyes'] = 'Minimum von zu akzeptierenden Wahlmöglichkeiten';
$string['strategy_yesmaybeno_max_count_no'] = 'Sie können höchstens {$a} Optionen ablehnen.';
$string['strategy_yesmaybeno_max_no'] = 'Sie können höchstens {$a} Wahlmöglichkeit(en) ablehnen.';
$string['strategy_yesmaybeno_name'] = 'Akzeptieren-Neutral-Ablehnen';
$string['strategy_yesmaybeno_rating_maybe'] = 'Neutral';
$string['strategy_yesmaybeno_rating_no'] = 'Ablehnen';
$string['strategy_yesmaybeno_rating_yes'] = 'Akzeptieren';
$string['strategy_yesmaybeno_setting_maxno'] = 'Maximalanzahl von ablehnbaren Wahlmöglichkeiten';
$string['strategy_yesno_max_no'] = 'Sie können höchstens {$a} Wahlmöglichkeit(en) ablehnen.';
$string['strategy_yesno_maximum_crossout'] = 'Sie können höchstens {$a} Wahlmöglichkeiten ablehnen.';
$string['strategy_yesno_name'] = 'Akzeptieren-Ablehnen';
$string['strategy_yesno_rating_choose'] = 'Akzeptieren';
$string['strategy_yesno_rating_crossout'] = 'Ablehnen';
$string['strategy_yesno_setting_crossout'] = 'Maximalanzahl von ablehnbaren Wahlmöglichkeiten';
$string['strategyname'] = 'Die Abstimmungsstrategie lautet "{$a}".';
$string['strategyspecificoptions'] = 'Strategie-spezifische Einstellungen';
$string['success_deleting_all'] = 'Alle Abstimmungen wurden gelöscht.';
$string['timeremaining'] = 'Verbleibende Zeit';
$string['title_too_long_error'] = 'Der Name der Wahlmöglichkeit hat zu viele Zeichen, es sind nur bis zu 255 zulässig.';
$string['too_early_to_distribute'] = 'Verteilung noch nicht möglich. Die Abstimmung findet noch statt.';
$string['too_early_to_rate'] = 'Zu früh zum Abstimmen.';
$string['too_few_choices_to_rate'] = 'Sie haben zu wenige Wahlmöglichkeiten angelegt! Teilnehmer/innen müssen mindestens {$a} Optionen wählen!';
$string['unallocated_user_count'] = '{$a->count} Teilnehmer/innen sind derzeit noch nicht zugeordnet. Sie können <b>nicht zugeordnete</b> Teilnehmer/innen auf die freien Plätze der Wahlmöglichkeiten ohne Berücksichtigung der Abstimmungen verteilen.';
$string['unassigned_users'] = 'Teilnehmer/innen ohne Auswahl';
$string['update_filter'] = 'Filter aktualisieren';
$string['upload_choices'] = 'Wahlmöglichkeiten via CSV hochladen';
$string['upload_choices_fields_desc'] = 'Hochgeladene CSV-Dateien müssen UTF-8 kodiert sein und folgende Felder beinhalten: <br/><pre>{$a}</pre>
Es wird erwartet, dass die Datei eine Titelzeile hat. Mehrere Gruppen müssen durch ein Semikolon getrennt werden. Die "aktive" Spalte sollte 1 oder 0 enthalten, um die Wahlmöglichkeit entweder zu aktivieren oder zu deaktivieren.
Beispielhafter CSV-Inhalt:
<pre>
title,explanation,maxsize,active,groups
First Choice,This is the description of the first choice,15,1,Group A;Group B;Group C
Second Choice,This is the description of the second choice,12,0,Group A;Group D
</pre>';
$string['upload_choices_required_fields'] = 'Notwendige Felder';
$string['userid'] = 'Nutzer-ID';
$string['you_are_not_allocated'] = 'Sie konnten zu keiner Wahlmöglichkeit zugeordnet werden!';
$string['your_allocated_choice'] = 'Ihre Zuweisung';
$string['your_rating'] = 'Ihre Bewertung';
