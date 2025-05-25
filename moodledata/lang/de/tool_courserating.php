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
 * Strings for component 'tool_courserating', language 'de', version '4.5'.
 *
 * @package     tool_courserating
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addrating'] = 'Bewertung hinterlassen';
$string['barwithrating'] = '{$a->rating} Sterne stehen für {$a->percent} der Bewertung';
$string['cannotrate'] = 'Sie haben kein Recht, eine Bewertung für diesen Kurs zu verfassen.';
$string['cannotview'] = 'Sie haben kein Recht, eine Bewertung für diesen Kurs anzusehen.';
$string['cfielddescription'] = 'Nicht bearbeiten. Der Inhalt wird automatisch eingefügt, sobald jemand eine Bewertung für diesen Kurs abgibt.';
$string['colorrating'] = 'Farbe der Bewertung';
$string['colorratingconfig'] = 'Diese ist in der Regel etwas dunkler als die Farbe des Sterns, um den besten visuellen Effekt zu erzielen.';
$string['colorstar'] = 'Farbe der Sterne';
$string['courserating:delete'] = 'Kursbewertungen und -rezensionen löschen, markierte Rezensionen anzeigen';
$string['courserating:rate'] = 'Bewertung für den Kurs hinterlassen';
$string['courserating:reports'] = 'Kursbewertungsbericht anzeigen';
$string['coursereviews'] = 'Kursbewertungen';
$string['datasource_courseratings'] = 'Kursbewertungen';
$string['deleterating'] = 'Dauerhaft löschen';
$string['deletereason'] = 'Grund für die Löschung';
$string['displayempty'] = 'Keine Bewertungen mit grauen Sternen anzeigen';
$string['displayemptyconfig'] = 'Für Kurse, bei denen die Bewertung aktiviert ist, aber noch keine Bewertungen vorliegen, werden graue Sterne angezeigt. Wenn nicht ausgewählt ist, wird für solche Kurse keine Bewertung angezeigt';
$string['editrating'] = 'Bewertung bearbeiten';
$string['entity_rating'] = 'Kursbewertung durch Nutzer/innen';
$string['entity_summary'] = 'Zusammenfassung der Kursbewertung';
$string['event:flag_created'] = 'Kursbewertung (Markiert)';
$string['event:flag_deleted'] = 'Kursbewertung (Markierung widerrufen)';
$string['event:rating_created'] = 'Kursbewertung (Erstellt)';
$string['event:rating_deleted'] = 'Kursbewertung (Gelöscht)';
$string['event:rating_updated'] = 'Kursbewertung (Aktualisiert)';
$string['flagrating'] = 'Markierung';
$string['parentcss'] = 'CSS-Selektor für übergeordnetes Element';
$string['parentcssconfig'] = 'Die Kursbewertung wird auf der Kursseite als letztes Kind des DOM-Elements angezeigt, das diesem Selektor entspricht. Sie müssen diesen Wert eventuell überschreiben, wenn die Website ein nutzerdefiniertes Design verwendet und Sie ein nutzerdefiniertes übergeordnetes Element angeben möchten. Bleibt der Selektor leer, wird der Standardwert verwendet. Für Moodle 4.0 ist der Standardwert "#page-header", für Moodle 3.11 ist der Standardwert "#page-header .card-body, #page-header #course-header, #page-header".';
$string['percourseoverride'] = 'Kursüberschreibungen';
$string['percourseoverrideconfig'] = 'Wenn diese Option aktiviert ist, wird ein nutzerdefiniertes Feld erstellt, mit dem Sie festlegen können, wann jeder einzelne Kurs bewertet werden kann. Der Wert der Einstellung "Wann können Kurse bewertet werden?" wird als Standardwert behandelt';
$string['pluginname'] = 'Kursbewertungen';
$string['privacy:metadata:tool_courserating:reason'] = 'Grund';
$string['privacy:metadata:tool_courserating:reasoncode'] = 'Grund (Code)';
$string['privacy:metadata:tool_courserating:timecreated'] = 'Erstellungszeitpunkt';
$string['privacy:metadata:tool_courserating:timemodified'] = 'Änderungszeitpunkt';
$string['privacy:metadata:tool_courserating_flag'] = 'Markierte Bewertungen';
$string['privacy:metadata:tool_courserating_flag:id'] = 'ID';
$string['privacy:metadata:tool_courserating_flag:ratingid'] = 'Bewertungs-ID';
$string['privacy:metadata:tool_courserating_flag:userid'] = 'Benutzer Id';
$string['privacy:metadata:tool_courserating_rating'] = 'Kursbewertungen';
$string['privacy:metadata:tool_courserating_rating:cohortid'] = 'Kurs-ID';
$string['privacy:metadata:tool_courserating_rating:hasreview'] = 'Bewertung vorhanden';
$string['privacy:metadata:tool_courserating_rating:id'] = 'ID';
$string['privacy:metadata:tool_courserating_rating:rating'] = 'Bewertung';
$string['privacy:metadata:tool_courserating_rating:review'] = 'Bewertung';
$string['privacy:metadata:tool_courserating_rating:timecreated'] = 'Erstellungszeitpunkt';
$string['privacy:metadata:tool_courserating_rating:timemodified'] = 'Änderungszeitpunkt';
$string['privacy:metadata:tool_courserating_rating:userid'] = 'Nutzer/in';
$string['ratebyanybody'] = 'Teilnehmer/innen können den Kurs jederzeit bewerten';
$string['ratebycompleted'] = 'Teilnehmer/innen können erst nach Abschluss des Kurses eine Bewertung abgeben';
$string['ratebydefault'] = 'Der Standardwert ist: "{$a}"';
$string['ratebynoone'] = 'Kursbewertungen sind deaktiviert';
$string['ratedcategory'] = 'Kategorie, in der Kursbewertungen erlaubt sind';
$string['rating'] = 'Bewertung';
$string['rating_actions'] = 'Aktionen';
$string['rating_hasreview'] = 'Wurde bewertet';
$string['rating_nofflags'] = 'Anzahl der Markierungen';
$string['rating_rating'] = 'Kursbewertung';
$string['rating_review'] = 'Bewertung';
$string['rating_timecreated'] = 'Erstellungszeitpunkt';
$string['rating_timemodified'] = 'Änderungszeitpunkt';
$string['ratingasstars'] = 'Kursbewertung in Sternen';
$string['ratingdeleted'] = 'Bewertung gelöscht';
$string['ratinglabel'] = 'Kursbewertung';
$string['ratingmode'] = 'Wann können Kurse bewertet werden?';
$string['ratingmodeconfig'] = 'Die Möglichkeit, Kurse zu bewerten, ist angehakt';
$string['reindextask'] = 'Kursbewertungen neu indizieren';
$string['review'] = 'Bewertung (Optional)';
$string['revokeratingflag'] = 'Widerrufen';
$string['settingsdescription'] = 'Das Ändern einiger Einstellungen kann eine Neuindizierung aller Kurse und Kursbewertungen erfordern. Dies wird beim nächsten CronJob automatisch geschehen.';
$string['showallratings'] = 'Alles anzeigen';
$string['showmorereviews'] = 'Mehr anzeigen';
$string['summary_avgrating'] = 'Kursbewertung';
$string['summary_cnt01'] = 'Anzahl der 1-Stern-Bewertungen';
$string['summary_cnt02'] = 'Anzahl der 2-Sterne-Bewertungen';
$string['summary_cnt03'] = 'Anzahl der 3-Sterne-Bewertungen';
$string['summary_cnt04'] = 'Anzahl der 4-Sterne-Bewertungen';
$string['summary_cnt05'] = 'Anzahl der 5-Sterne-Bewertungen';
$string['summary_cntall'] = 'Anzahl der Bewertungen';
$string['summary_cntreviews'] = 'Anzahl der Reviews';
$string['summary_ratingmode'] = 'Kursbewertungsmodus';
$string['summary_sumrating'] = 'Summe aller Bewertungen';
$string['usehtml'] = 'Rich-Text-Editor für Bewertungen verwenden';
$string['usehtmlconfig'] = 'Teilnehmer/innen erlauben, einen Rich-Text-Editor für die Bewertungen zu verwenden, Links einzufügen und Dateien anzuhängen.';
$string['usersflagged'] = '{$a} Nutzer/innen haben diese Bewertung als unangemessen/beleidigend gekennzeichnet.';
$string['viewallreviews'] = 'Alle Bewertungen anzeigen';
$string['youflagged'] = 'Sie haben diese Bewertung als unangemessen/beleidigend gekennzeichnet.';
