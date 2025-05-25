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
 * Strings for component 'plagiarism_unplag', language 'de', version '4.5'.
 *
 * @package     plagiarism_unplag
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['attempts'] = 'Versuche unternommen';
$string['check_confirm'] = 'Sind Sie sicher, dass Sie Überprüfung mit UNPLAG Plagiat-Plugin beginnen möchten?';
$string['check_file'] = 'Überprüfung beginnen';
$string['check_start'] = 'Unplag Originalität Benotung im Gange';
$string['check_type'] = 'Überprüfen Sie Arten der Plagiate';
$string['cronwarning'] = 'Das <a href="../../admin/cron.php">cron.php</a> Wartungsskript wurde mindestens 30 Minuten nicht ausgeführt - Cron muss so konfiguriert sein, damit UNPLAG richtig funktionieren.';
$string['defaultsdesc'] = 'Folgende Einstellungen sind Standardeinstellungen, die UNPLAG innerhalb eines Aktivitätsmodul ermöglicht';
$string['defaultupdated'] = 'Standardwerte aktualisiert';
$string['delete'] = 'Löschen';
$string['deletedwarning'] = 'Diese Datei konnte nicht gefunden werden - kann sein das sie vom Benutzer gelöscht wurde';
$string['explainerrors'] = 'Diese Seite listet alle Dateien auf, die zur Zeit in einem Fehlerzustand sind. <br/> Wenn Dateien auf dieser Seite gelöscht werden, können diese nicht erneut eingereicht werden und werden Lehrer oder Stdenten nicht mehr als Fehler angezeigt';
$string['file'] = 'Datei';
$string['filedeleted'] = 'Datei wurde aus der Warteschlange gelöscht';
$string['filereset'] = 'Diese Datei wurde zurückgesetzt für erneute Einreichung bei UNPLAG';
$string['fileresubmitted'] = 'Datei in Warteschlange der Einreichung';
$string['getscore'] = 'Punktzahl erhalten';
$string['heldevents'] = 'Gehaltene Veranstaltungen';
$string['heldeventsdescription'] = 'Es gibt Ereignisse, die nicht beim ersten Versuch erfolgreich absolviert wurden, diese wurden in die Warteschlange der Wiedereinreichungen gesetzt - dies verhindert den Abschluss der nachfolgender Ereignisse und sind weitere Untersuchungen erforderlich. Einige dieser Ereignisse sind möglicherweise nicht relevant für UNPLAG';
$string['id'] = 'ID';
$string['identifier'] = 'Identifikation';
$string['module'] = 'Modul';
$string['my_library'] = 'Dokumente gegen Bibliothek';
$string['name'] = 'Name';
$string['noreceiver'] = 'Wurde keine Empfängeradresse angegeben';
$string['pending'] = 'Diese Datei wird eingereicht bei UNPLAG';
$string['plagiarism'] = 'Potenzielles Plagiat';
$string['plagiarism_run_success'] = 'Datei auf Plagiat Prüfung senden';
$string['pluginname'] = 'UNPLAG Plagiat-Plugin';
$string['previouslysubmitted'] = 'Zuvor eingereicht als';
$string['processing'] = 'Diese Datei wurde bei UNPLAG eingereicht, nun warten auf die Analyse um verfügbar zu sein';
$string['progress'] = 'Skandieren';
$string['receivernotvalid'] = 'Dies ist keine gültige Empfängeradresse .';
$string['refresh'] = 'Seite aktualisieren, um Ergebnisse zu sehen';
$string['report'] = 'Vollständigen Bericht ansehen';
$string['resubmit'] = 'Wiedereinreichung';
$string['savedconfigfailed'] = 'Wurde eine falsche Geheimkombination der Client-ID/API eingegeben. UNPLAG wurde deaktiviert, bitte versuchen Sie es erneut.';
$string['savedconfigsuccess'] = 'Plagiatserkennungseinstellungen gespeichert';
$string['scoreavailable'] = 'Diese Datei wurde von UNPLAG verarbeitet und ein Prüfbericht ist ab sofort verfügbar.';
$string['scorenotavailableyet'] = 'Diese Datei wurde bisher noch nicht von UNPLUG verarbeitet.';
$string['showwhenclosed'] = 'Wann Aktivität geschlossen';
$string['similarity'] = 'Ähnlichkeit';
$string['status'] = 'Status';
$string['studentdisclosure'] = 'Bekannt machen der Studenten mit dem UNPLAG Datenschutz';
$string['studentdisclosure_help'] = 'Dieser Text wird auf der Datei-Upload-Seite für alle Studenten sichtbar sein.';
$string['studentdisclosuredefault'] = 'Alle hochgeladenen Dateien werden in das Plagiat Detektionssystem des UNPLAG eingereicht.';
$string['studentemailcontent'] = 'Die eingereichte Datei {$ a-> Modulname } in {$ a-> course name} wurde bereits von dem Plagiatserkennungssystem UNPLAG verarbeitet
{$ A-> Modul link}';
$string['studentemailsubject'] = 'Datei verearbeitet bei UNPLAG';
$string['submitondraft'] = 'Dateieinreichung beim Ersthochgeladen';
$string['submitonfinal'] = 'Dateieinreichung wenn Schüler es zur Einstufung sendet';
$string['toolarge'] = 'Diese Datei ist zu groß für die verarbitung bei UNPLAG';
$string['unknownwarning'] = 'Ein Fehler ist aufgetreten beim Versuch der Einsendung dieser Datei bei UNPLAG';
$string['unplag'] = 'UNPLAG Plagiat-Plugin';
$string['unplag:enable'] = 'Dem Lehrer gestatten innerhalb einer Aktivität UNPLAG zu aktivieren/deaktivieren';
$string['unplag:resetfile'] = 'Dem Lehrer gestatten die Datei bei UNPLAG einzureichen nachdem ein Fehler aufgetreten ist';
$string['unplag:viewreport'] = 'Dem Lehrer gestatten den vollständigen Bericht von UNPLAG anzuzeigen';
$string['unplag_api_secret'] = 'API Secret';
$string['unplag_api_secret_help'] = 'API Secret wird von UNPLAG zur Verfügung gestellt, den API Zugriff finden Sie auf <a href="https://unplag.com/profile/apisettings">https://unplag.com/profile/apisettings</a>';
$string['unplag_client_id'] = 'Nutzer ID';
$string['unplag_client_id_help'] = 'Nutzer ID wird von UNPLAG zur Verfügung gestellt, den API Zugriff finden Sie auf <a href="https://unplag.com/profile/apisettings">https://unplag.com/profile/apisettings</a>';
$string['unplag_draft_submit'] = 'Wann sollte die Datei eingereicht werden bei UNPLAG';
$string['unplag_enableplugin'] = 'Ermöglichen UNPLAG für {$a}';
$string['unplag_lang'] = 'Sprache';
$string['unplag_lang_help'] = 'Sprachcode wird von UNPLAG zur Verfügung gestellt';
$string['unplag_show_student_report'] = 'Prüfbericht für Studenten sichtbar machen';
$string['unplag_show_student_report_help'] = 'Das Prüfbericht enthält eine Aufschlüsselung, welche Teile der Einreichung Plagiate waren und deren Ort wo UNPLAG diesen Inhalt gefunden hat.';
$string['unplag_show_student_score'] = 'Ähnlichkeitsbewertung für Studenten sichtbar machen';
$string['unplag_show_student_score_help'] = 'Der Ähnlichkeitswert ist der Prozentsatz der Einreichung, der mit anderen Inhalten abgestimmt wurde';
$string['unplag_studentemail'] = 'E-Mail senden an Student';
$string['unplag_studentemail_help'] = 'Dies wird eine E-Mail an den Studenten senden, wenn die Datei die verarbeitet wurde fertig ist. Um wissen zu lassen, dass der Prüfbericht zur Verfügung steht.';
$string['unplagdebug'] = 'Fehlerbeseitigung';
$string['unplagdefaults'] = 'UNPLAG
Standardeinstellungen';
$string['unplagfiles'] = 'Unplag Dataien';
$string['unsupportedfiletype'] = 'Dieser Dateityp wird nicht von UNPLAG unterstützt';
$string['waitingevents'] = 'Es gibt {$a->countallevents} Ereignisse die auf cron warten
und {$ a-> countheld} Ereignisse werden für Wiedereinreichungen gehalten';
$string['web'] = 'Dokumente gegen Internet';
$string['web_and_my_library'] = 'Dokumente gegen Internet + Bibliothek';
