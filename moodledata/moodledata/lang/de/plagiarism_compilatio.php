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
 * Strings for component 'plagiarism_compilatio', language 'de', version '4.5'.
 *
 * @package     plagiarism_compilatio
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['account_expire_soon_title'] = 'Ende des Compilatio.net Abonnements';
$string['activate_compilatio'] = 'Das Compilatio Plugin aktivieren';
$string['activate_submissiondraft'] = 'Um Teilnehmer/innen die Möglichkeit zu geben, ihre Entwürfe zu analysieren, müssen Sie die Option <b>{$a}</b> im Abschnitt';
$string['admin_account_expire_content'] = 'Ihr aktuelles Abonnement endet am Ende des laufenden Monats. Wenn Ihr Vertrag nicht am Ende des Monats ausläuft, wird von unseren Diensten automatisch ein neues Abonnement eingerichtet. Sobald dies geschehen ist, wird diese Meldung ausgeblendet. Für weitere Informationen können Sie sich an unsere Vertriebs- oder Supportabteilung wenden: support@compilatio.net.';
$string['admin_disabled_reports'] = 'Der Administrator hat die Anzeige der Ähnlichkeitsberichte für die Teilnehmer/innen deaktiviert.';
$string['admin_goto_helpcenter'] = 'Gehen Sie zum Compilatio Hilfecenter, um die Artikel zur Verwaltung des Moodle-Plugins zu lesen.';
$string['allow_analyses_auto'] = 'Möglichkeit, die Analysen direkt zu starten';
$string['allow_analyses_auto_help'] = 'Mit dieser Option können Trainer/innen den automatischen Start der Analyse von Dokumenten zu einer Aktivität aktivieren (d.h. unmittelbar nach deren Einreichung).
Beachten Sie, dass in diesem Fall:
<ul>
    <li>Die Anzahl der von Ihrer Einrichtung durchgeführten Scans kann deutlich höher sein.</li>
    <li>Die Dokumente der ersten Einreicher werden nicht mit den Dokumenten der letzten Einreicher verglichen.</li>
</ul>
Um alle Dokumente einer Abtretung zu vergleichen, müssen Sie die "geplante" Analyse verwenden, indem Sie ein Datum nach der Einreichungsfrist wählen.';
$string['allow_search_tab'] = 'Suchwerkzeug zur Identifizierung von Autor/innen eines Dokuments.';
$string['allow_search_tab_help'] = 'Mit dem Suchtool können Sie auf der Grundlage einer in den Analyseberichten sichtbaren Dokumentenkennung unter allen auf Ihrer Plattform vorhandenen Dokumenten nach dem Vor- und Nachnamen eines Teilnehmer/innen suchen.';
$string['allow_student_analyses'] = 'Möglichkeit, Teilnehmer/innen die Analyse von Entwürfen zu ermöglichen.';
$string['allow_student_analyses_help'] = 'Mit dieser Option können Trainer/innen die Analyse der von den Teilnehmer/innen im Entwurfsmodus mit Compilatio Magister eingereichten Dokumente vor der endgültigen Übermittlung an die Trainer/innen für eine Aktivität aktivieren.';
$string['allow_teachers_to_show_reports'] = 'Möglichkeit, Teilnehmer/innen Ähnlichkeitsberichte zu zeigen';
$string['analysing'] = 'Das Dokument wird gegenwärtig analysiert';
$string['analysis'] = 'Analyse starten';
$string['analysis_auto'] = 'Analyse starten';
$string['analysis_auto_help'] = '<p>Sie haben drei Möglichkeiten:
    <ul>
        <li><strong>Manuell:</strong> Die Analyse der Dokumente muss manuell über die Schaltfläche "Analysieren" jedes einzelnen Dokuments oder über die Schaltfläche "Alle Dokumente analysieren" ausgelöst werden.</li>
        <li><strong>Geplant: </strong> Alle Dokumente werden zum ausgewählten Zeitpunkt/Datum analysiert.</li>
        <li><strong>Direkt: </strong> Jedes Dokument wird analysiert, sobald Teilnehmer/innen die einreichen. Die Dokumente in der Aktivität werden nicht miteinander verglichen.</li>
    </ul>
    Um alle Dokumente während der Analysen miteinander zu vergleichen, warten Sie, bis alle Arbeiten von den Teilnehmer/innen eingereicht wurden und lösen dann die Analysen aus.</p>';
$string['analysis_completed'] = 'Analyse beendet: Ähnlichkeitsquote von {$a}%.';
$string['analysis_date'] = 'Analysedatum (nur bei geplanter Analyse)';
$string['analysis_help'] = '<p>Sie haben zwei Möglichkeiten:
    <ul>
        <li><strong>Manuell:</strong> Die Analyse der Dokumente muss manuell über die Schaltfläche "Analysieren" jedes einzelnen Dokuments oder über die Schaltfläche "Alle Dokumente analysieren" ausgelöst werden.</li>
        <li><strong>Geplant: </strong> Alle Dokumente werden zum ausgewählten Zeitpunkt/Datum analysiert.</li>
    </ul>
    Um alle Dokumente während der Analysen miteinander zu vergleichen, warten Sie, bis alle Arbeiten von den Teilnehmer/innen eingereicht wurden und lösen dann die Analysen aus.</p>';
$string['analysis_started'] = '{$a} gewünschte Analyse(n).';
$string['analysistype_auto'] = 'Direkt';
$string['analysistype_manual'] = 'Manuell';
$string['analysistype_prog'] = 'Geplante';
$string['analyze'] = 'Analysieren';
$string['analyzing'] = 'Analyse';
$string['api_key_not_tested'] = 'Der API-Key konnte nicht überprüft werden, da die Verbindung zur Dienstleistung von Compilatio.net nicht hergestellt werden konnte.';
$string['api_key_not_valid'] = 'Der gespeicherte API-Key ist gültig. Er ist auf die verwendete Plattform zugeschnitten. Er kann bei <a href=\'mailto:ent@compilatio.net\'>ent@compilatio.net</a> angefordert werden.';
$string['api_key_valid'] = 'Der gespeicherte API-Key ist gültig.';
$string['apiconfiguration'] = 'API-Konfiguration';
$string['assign_statistics'] = 'Statistiken der Arbeiten';
$string['auto_diagnosis_title'] = 'Selbstdiagnose';
$string['average'] = 'Durchschnitt';
$string['average_similarities'] = 'Bei dieser Aktivität beträgt die durchschnittliche Ähnlichkeitsquote {$a}%.';
$string['badqualityanalysis'] = 'Bei der Analyse des Dokuments sind Probleme aufgetreten. Es ist möglich, dass bestimmte Quellen nicht identifiziert wurden oder dass das Ergebnis unvollständig ist.';
$string['compi_student_analyses'] = 'Erlauben Sie den Teilnehmer/innen, ihre Dokumente zu analysieren';
$string['compi_student_analyses_help'] = 'Auf diese Weise können die Teilnehmer/innen ihre Entwürfe mit Compilatio Magister analysieren, bevor sie sie endgültig den Trainer/innen vorlegen.';
$string['compilatio'] = 'Plugin zur Plagiatserkennung Compilatio';
$string['compilatio:enable'] = 'Den Trainer/innen erlauben, Compilatio innerhalb einer Aufgabe zu aktivieren/deaktivieren';
$string['compilatio:resetfile'] = 'Den Trainer/innen erlauben, die Datei nach einem Fehler erneut Compilatio vorzulegen.';
$string['compilatio:triggeranalysis'] = 'Den Trainer/innen erlauben, die Analyse manuell auszulösen.';
$string['compilatio:viewreport'] = 'Den Trainer/innen erlauben, den vollständigen Bericht auf Compilatio einzusehen.';
$string['compilatio_author'] = 'Das Dokument {$a->idcourt} in der Aktivität <b>{$a->modulename}</b> gehört zu <b>{$a->lastname} {$a->firstname}</b>.';
$string['compilatio_display_student_report'] = 'Teilnehmer/in die Ansicht des Analyseberichts ermöglichen';
$string['compilatio_display_student_report_help'] = 'Der Analysebericht eines Dokuments zeigt die den ermittelten Quellen ähnliche Stellen und die entsprechende Ähnlichkeitsquote auf.';
$string['compilatio_display_student_score'] = 'Ähnlichkeitsquote pro Teilnehmer/in sichtbar machen';
$string['compilatio_display_student_score_help'] = 'Die Ähnlichkeitsquote zeigt den Textanteil im Dokument an, der auch in anderen Dokumenten gefunden wurde.';
$string['compilatio_help_assign'] = 'Hilfe zum Compilatio Plugin anfordern.';
$string['compilatio_iddocument'] = 'Kennung des Dokuments';
$string['compilatio_search'] = 'Suche';
$string['compilatio_search_help'] = 'Sie können Autor/innen eines Dokuments ermitteln, indem Sie die Dokumentenkennung aus den Quellen des Analyseberichts abrufen. Beispiel: 1. Ihr Dokument: <b>1st5xfj2</b> - Zuweisen_Name(30)Name_Kopiertes_Dokument.odt.';
$string['compilatio_search_notfound'] = 'Unter den Dokumenten, die auf Ihrer Moodle-Plattform geladen sind, wurde kein Dokument mit dieser Kennung gefunden.';
$string['compilatio_search_tab'] = 'Autor/in eines Dokuments finden';
$string['compilatio_studentemail'] = 'E-Mail an Teilnehmer/in senden';
$string['compilatio_studentemail_help'] = 'Dadurch wird eine E-Mail mit der Information, dass der Bericht verfügbar ist, versendet.';
$string['compilatioapi'] = 'Adresse der API-Schnittstelle';
$string['compilatioapi_help'] = 'Es handelt sich um die Adresse der Compilatio API-Schnittstelle';
$string['compilatiodate'] = 'Datum der Aktivierung';
$string['compilatiodate_help'] = 'Klicken Sie auf "Aktivieren", wenn Sie möchten, dass diese API-Konfiguration automatisch zu einem gewünschten Datum aktiviert wird. Lassen Sie das Datum leer, wenn Sie sie sofort aktivieren möchten.';
$string['compilatiodefaults'] = 'Standartwerte für Compilatio.';
$string['compilatioenableplugin'] = 'Compilatio aktivieren für {$a}';
$string['compilatioexplain'] = 'Weitere Informationen zu diesem Plugin finden Sie unter: <a href="http://compilatio.net" target="_blank">compilatio.net</a>';
$string['compilatiopassword'] = 'API-Key';
$string['compilatiopassword_help'] = 'Von Compilatio gelieferter persönlicher Zugangscode zur API-Schnittstelle';
$string['context'] = 'Kontext';
$string['cron_check'] = 'Der CRON Job wurde zum letzten Mal am {$a} durchgeführt.';
$string['cron_check_never_called'] = 'Es wurde seit der Aktivierung des Plugins kein CRON Job ausgeführt. Er ist möglicherweise falsch konfiguriert.';
$string['cron_check_not_ok'] = 'Er wurde seit über einer Stunde nicht mehr durchgeführt.';
$string['cron_frequency'] = 'Es scheint, dass er jede {$a} Minute durchgeführt wird.';
$string['cron_recommandation'] = 'Wir empfehlen einen kürzeren Abstand als 15 Minuten zwischen jedem CRON Job.';
$string['defaults_desc'] = 'Folgende Parameter werden als Standartwerte für die Aktivitäten von Compilatio innerhalb von Moodle verwendet.';
$string['defaultupdated'] = 'Die Standartwerte wurden aktualisiert';
$string['disable_ssl_verification'] = 'Ignorieren Sie die Überprüfung des SSL-Zertifikats.';
$string['disable_ssl_verification_help'] = 'Aktivieren Sie diese Option, wenn Sie Probleme mit der Überprüfung von SSL-Zertifikaten haben oder wenn beim Senden von Dateien an Compilatio Fehler auftreten.';
$string['disclaimer_data'] = 'Indem Sie Compilatio aktivieren, akzeptieren Sie, dass die Informationen zur Konfiguration Ihrer Moodle Plattform gesammelt werden, um die Unterstützung und Wartung der Dienstleistung zu erleichtern.';
$string['display_notifications'] = 'Benachrichtigungen anzeigen';
$string['display_stats'] = 'Statistiken über diese Aktivität anzeigen';
$string['document_deleting'] = 'Löschen von Dokumenten';
$string['documents_analyzed'] = '{$a->countAnalyzed} Dokument(e) von {$a->documentsCount} sind analysiert worden.';
$string['documents_analyzed_between_thresholds'] = '{$a->documentsBetweenThresholds} Dokument(e) zwischen {$a->greenThreshold}% und {$a->redThreshold}%.';
$string['documents_analyzed_higher_red'] = '{$a->documentsAboveRedThreshold} Dokument(e) über {$a->redThreshold}%.';
$string['documents_analyzed_lower_green'] = '{$a->documentsUnderGreenThreshold} Dokument(e) unter {$a->greenThreshold}%.';
$string['documents_analyzing'] = '{$a} Dokument(e) werden gegenwärtig analysiert.';
$string['documents_failed'] = '{$a} Dokument(e), deren Analyse nicht korrekt funktioniert hat.';
$string['documents_in_queue'] = '{$a} Dokument(e) in der Warteschleife zur Analyse.';
$string['documents_notfound'] = '{$a} Dokument(e) wurden nicht gefunden.';
$string['documents_number'] = 'Analysierte Dokumente';
$string['enable_activities_title'] = 'Aktivieren Sie Compilatio für Aktivitäten';
$string['enable_javascript'] = 'Bitte aktivieren Sie JavaScript, um alle Funktionalitäten von Compilatio nutzen zu können. <br/> Finden Sie hier <a href=\'http://www.enable-javascript.com/fr/\' target=\'_blank\'>Anweisungen, um JavaScript in Ihrem Browser zu aktivieren</a>.';
$string['enable_mod_assign'] = 'Aktivieren Sie Compilatio für Zuweisungen';
$string['enable_mod_forum'] = 'Aktivieren Sie Compilatio für Foren';
$string['enable_mod_quiz'] = 'Aktivieren Sie Compilatio für Quiz';
$string['enable_mod_workshop'] = 'Aktivieren Sie Compilatio für Workshops';
$string['enabledandworking'] = 'Das Compilatio Plugin ist aktiv und funktionsfähig.';
$string['error'] = 'Fehler';
$string['errors'] = 'Fehler :';
$string['export_csv'] = 'Daten über diese Aktivität in eine CSV-Datei exportieren';
$string['export_global_csv'] = 'Klicken Sie hier um diese Daten im CSV-Format zu exportieren';
$string['export_raw_csv'] = 'Klicken Sie hier um die Ausgangsdaten im CSV-Format zu exportieren';
$string['extraction_in_progress'] = 'Dokumentenextraktion läuft, bitte versuchen Sie es später noch einmal';
$string['failed'] = 'Die Analyse dieses Dokuments hat nicht richtig funktioniert.';
$string['failedanalysis'] = 'Compilatio konnte Ihr Dokument nicht analysieren:';
$string['failedanalysis_files'] = 'Die Analyse der folgenden Dokumente hat nicht richtig funktioniert. Sie können diese Dokumente zurücksetzen und ihre Analyse erneut starten:';
$string['filename'] = 'Dateiname';
$string['filereset'] = 'Die Datei wurde zur erneuten Unterbreitung an Compilatio zurückgesetzt';
$string['firstname'] = 'Vorname';
$string['formapikey'] = 'API-Schlüssel';
$string['formcheck'] = 'Prüfen Sie';
$string['formdelete'] = 'Löschen';
$string['formenabled'] = 'Aktiviert';
$string['formstartdate'] = 'Datum der Aktivierung';
$string['formurl'] = 'API-Url';
$string['get_scores'] = 'Ruft die Ähnlichkeitsquoten auf Compilatio.net ab';
$string['global_statistics'] = 'Gesamtstatistiken';
$string['global_statistics_description'] = 'Alle Daten der Dokumente werden an Compilatio gesendet.';
$string['goto_compilatio_service_status'] = 'Siehe Status der Compilatio-Dienste.';
$string['goto_helpcenter'] = 'Klicken Sie auf das Fragezeichen, um ein neues Fenster zu öffnen und sich im Compilatio Hilfecenter einzuloggen.';
$string['green_threshold'] = 'Grün bis';
$string['help_compilatio_format_content'] = 'Compilatio.net unterstützt die meisten in der Büroelektronik und im Internet verwendeten Formate. Folgende Formate werden akzeptiert:';
$string['helpcenter'] = 'Rufen Sie das Compilatio Help Center für die Verwendung des Compilatio-Plugins in Moodle auf.';
$string['helpcenter_error'] = 'Wir können Sie nicht automatisch mit dem Hilfecenter verbinden. Bitte versuchen Sie es später noch einmal oder gehen Sie direkt über den folgenden Link dorthin:';
$string['hide_area'] = 'Die Compilatio Informationen ausblenden';
$string['immediately'] = 'Unmittelbar';
$string['indexed_document'] = 'Dokument, das der Dokumentendatenbank Ihrer Institution hinzugefügt wurde. Sein Inhalt kann verwendet werden, um Ähnlichkeiten mit anderen Dokumenten zu erkennen.';
$string['indexing_state'] = 'Dokumente zur Referenzbibliothek hinzufügen';
$string['indexing_state_help'] = 'Ja: Fügen Sie Dokumente in der Dokumentendatenbank hinzu. Diese Dokumente werden als Vergleichsmaterial für zukünftige Analysen verwendet.
Nein: Die Dokumente werden nicht in die Dokumentendatenbank aufgenommen und werden nicht für Vergleiche verwendet.';
$string['information_settings'] = 'Informationen';
$string['keep_docs_indexed'] = 'Dokumente in der Handbibliothek aufbewahren';
$string['keep_docs_indexed_help'] = 'Wenn Sie einen Kurs löschen, einen Kurs zurücksetzen oder eine Aktivität löschen, können Sie wählen, ob Sie die an Compilatio gesendeten Dokumente endgültig löschen oder in der Referenzbibliothek aufbewahren möchten (nur der Text wird aufbewahrt und dient als Vergleichsmaterial für Ihre nächsten Analysen).';
$string['lastname'] = 'Nachname';
$string['loading'] = 'Wird geladen, bitte warten...';
$string['manual_analysis'] = 'Die Analyse dieses Dokuments muss manuell ausgelöst werden';
$string['manual_send_confirmation'] = '{$a} Compilatio vorgelegte Datei(n).';
$string['max_attempts_reach_files'] = 'Folgende Dateien konnten nicht von Compilatio analysiert werden. Der Grenzwert zum Neustart der Analysen wurde erreicht:';
$string['max_file_size_allowed'] = 'Maximale Größe der Dokumente : <strong>{$a->Mo} MB</strong>';
$string['maximum'] = 'Maximum';
$string['migration_apikey'] = 'Geben Sie den neuen v5 API-Schlüssel ein';
$string['migration_btn'] = 'Initiieren Sie die Aktualisierung der in Moodle gespeicherten Daten';
$string['migration_completed'] = 'Aktualisierung abgeschlossen:';
$string['migration_failed_doc'] = 'Dokument nicht aktualisiert werden konnte, können Sie am Ende der Aktualisierung erneut versuchen, diese Dokumente zu aktualisieren';
$string['migration_form_title'] = 'Starten Sie die Aktualisierung der in Moodle gespeicherten Daten, um die Migration von v4 auf v5 abzuschließen.';
$string['migration_info'] = 'Compilatio führt eine neue technische Plattform v5 für alle seine Kunden ein.<br>
    Wenn Sie vom technischen Team dazu aufgefordert werden, müssen Sie eine Aktion durchführen, um diese Migration abzuschließen.';
$string['migration_inprogress'] = 'Update läuft, es kann mehrere Stunden dauern <small>(Sie können diese Seite während des Updates verlassen)</small>';
$string['migration_np'] = 'Sie können das Compilatio-Plugin auch dann verwenden, wenn die Migration noch nicht abgeschlossen ist.';
$string['migration_restart'] = 'Wiederholen Sie';
$string['migration_success_doc'] = 'Die Dokumente wurden aktualisiert';
$string['migration_task'] = 'Dokumente von v4 auf v5 aktualisieren';
$string['migration_title'] = 'Migration v4 zu v5';
$string['migration_toupdate_doc'] = 'zu aktualisierende Dokumente';
$string['minimum'] = 'Minimum';
$string['news_analysis_perturbated'] = 'Compilatio.net Analysen beeinträchtigt';
$string['news_incident'] = 'Zwischenfall auf Compilatio.net';
$string['news_maintenance'] = 'Wartung von Compilatio.net';
$string['news_update'] = 'Aktualisierung von Compilatio.net';
$string['no_document_available_for_analysis'] = 'Es steht kein Dokument zur Analyse bereit.';
$string['no_documents_available'] = 'Zu dieser Aufgabe steht kein Dokument zur Analyse bereit.';
$string['no_statistics_yet'] = 'Derzeit sind keine Statistiken verfügbar.';
$string['not_analyzed'] = 'Folgende Dokumente konnten nicht analysiert werden:';
$string['not_analyzed_extracting'] = 'Die folgenden Dokumente können nicht analysiert werden, da sie gerade extrahiert werden. Bitte versuchen Sie es später erneut';
$string['not_analyzed_toolong'] = '{$a} Dokument(e) wurden nicht analysiert, weil sie zu viele Wörter enthalten.';
$string['not_analyzed_tooshort'] = '{$a} Dokument(e) wurden nicht analysiert, weil sie nicht genügend Wörter enthalten.';
$string['not_analyzed_unextractable'] = '{$a} Dokument(e) wurden nicht analysiert, da ihr Inhalt nicht extrahiert werden konnte.';
$string['not_analyzed_unsupported'] = '{$a} Dokument(e) wurden nicht analysiert, da ihr Format nicht unterstützt wird.';
$string['not_indexed_document'] = 'Das Dokument wurde nicht in die Dokumentendatenbank Ihrer Institution aufgenommen. Sein Inhalt wird nicht verwendet, um Ähnlichkeiten mit anderen Dokumenten zu erkennen.';
$string['notfound'] = 'Dieses Dokument wurde nicht gefunden. Bitte wenden Sie sich an Ihren Moodle-Administrator. Fehler : Dokument für diesen API-Schlüssel nicht gefunden.';
$string['numeric_threshold'] = 'Der Schwellenwert muss eine Zahl sein.';
$string['orange_threshold'] = 'Orange bis';
$string['owner_file'] = 'DSGVO und Eigentum der Arbeit';
$string['owner_file_school'] = 'Die Bildungsinstitution ist Eigentümerin der Arbeiten.';
$string['owner_file_school_details'] = 'Im Falle einer Anfrage zur Löschung von personenbezogenen Daten seitens eines Schülers wird der Inhalt der Arbeit aufbewahrt und steht für zukünftige Vergleiche mit neuen Arbeiten zur Verfügung. Nach Vertragsende mit Compilatio werden innerhalb der vertraglich festgelegten Fristen alle personenbezogenen Daten, die aus Ihrer Bildungsinstitution stammen, gelöscht, darunter auch die Arbeiten.';
$string['owner_file_student'] = 'Der Studierende ist Eigentümer seiner Arbeit';
$string['owner_file_student_details'] = 'Im Falle einer Anfrage zur Löschung von personenbezogenen Daten seitens eines Schülers werden die Arbeiten aus der Moodle Plattform und der Compilatio Referenzbibliothek gelöscht. Die Arbeiten stehen nicht mehr zum Vergleich mit neuen Dokumenten zur Verfügung.';
$string['pending'] = 'Die Datei ist bei Compilatio in der Warteschleife.';
$string['pending_status'] = 'Wartezeit';
$string['planned'] = 'Geplant';
$string['plugin_disabled'] = 'Das Plugin wurde nicht für die Moodle Plattform aktiviert.';
$string['plugin_disabled_assign'] = 'Das Plugin wurde nicht für die Aufgaben aktiviert.';
$string['plugin_disabled_forum'] = 'Das Plugin wurde nicht für die Foren aktiviert.';
$string['plugin_disabled_quiz'] = 'Das Plugin ist nicht für Quiz aktiviert.';
$string['plugin_disabled_workshop'] = 'Das Plugin wurde nicht für die Workshops aktiviert.';
$string['plugin_enabled'] = 'Das Plugin wurde für die Moodle Plattform aktiviert.';
$string['plugin_enabled_assign'] = 'Das Plugin wurde für die Aufgaben aktiviert.';
$string['plugin_enabled_forum'] = 'Das Plugin wurde für die Foren aktiviert.';
$string['plugin_enabled_quiz'] = 'Das Plugin ist für Quiz aktiviert.';
$string['plugin_enabled_workshop'] = 'Das Plugin wurde für die Workshops aktiviert.';
$string['pluginname'] = 'Compilatio – Plugin zur Plagiatserkennung';
$string['previouslysubmitted'] = 'Zuvor eingereicht als';
$string['privacy:metadata:core_files'] = 'Eingereichte oder in einem Eingabefeld erstellte Dateien';
$string['privacy:metadata:core_plagiarism'] = 'Dieses Plugin wird vom Plagiatserkennung-Untersystem von Moodle aufgerufen';
$string['privacy:metadata:external_compilatio_document'] = 'Informationen zu den Dokumenten in der Compilatio Datenbank';
$string['privacy:metadata:external_compilatio_document:filename'] = 'Name der Einreichung';
$string['privacy:metadata:plagiarism_compilatio_files'] = 'Informationen zu den bei Compilatio eingereichten Dateien in der Datenbank des Plugins';
$string['privacy:metadata:plagiarism_compilatio_files:filename'] = 'Der Name (eventuell auto-generiert) der Einreichung';
$string['privacy:metadata:plagiarism_compilatio_files:userid'] = 'Nutzer-ID der Person, die die Einreichung vorgenommen hat';
$string['processing_doc'] = 'Die Datei wird von Compilatio analysiert.';
$string['programmed_analysis_future'] = 'Die Dokumente werden am {$a} von Compilatio analysiert.';
$string['programmed_analysis_past'] = 'Die Dokumente wurden Compilatio am {$a} zur Analyse unterbreitet.';
$string['progress'] = 'Progression :';
$string['queue'] = 'Wartezeit';
$string['queued'] = 'Das Dokument befindet sich in der Warteschleife zur Analyse und wird in Kürze von Compilatio bearbeitet';
$string['quiz_help'] = 'Es werden nur Aufsatzfragen ausgewertet, deren Antwort mindestens {$a} Wörter enthält.';
$string['red_threshold'] = 'Rot ab';
$string['redirect_report_failed'] = 'Beim Abrufen des Analyseberichts ist ein Fehler aufgetreten. Bitte versuchen Sie es später noch einmal oder kontaktieren Sie den Support (support@compilatio.net), wenn das Problem weiterhin besteht.';
$string['report'] = 'Bericht';
$string['reset'] = 'Erneut auslösen';
$string['reset_failed_document'] = 'Dokumente irrtümlich zurücksetzen';
$string['reset_failed_document_in_progress'] = 'Dokumente im Fehlerfall zurücksetzen in Arbeit';
$string['reset_failed_document_title'] = 'Dokumente irrtümlich zurücksetzen:';
$string['results'] = 'Resultate :';
$string['saved_config_failed'] = '<strong>Die Kombination von Adresse und API-Key ist nicht korrekt. Das Plugin wurde deaktiviert, bitte versuchen Sie es erneut.<br/>
    Die Seite der<a href="autodiagnosis.php">auto-diagnostic</a> kann Ihnen dabei helfen, dieses Plugin zu konfigurieren.</strong><br/>
    Fehler :';
$string['savedconfigsuccess'] = 'Die Parameter wurden gespeichert';
$string['send_files'] = 'Schickt die Dateien an Compilatio.net zur Plagiatserkennung';
$string['showwhenclosed'] = 'Datum, an dem die Aktivität abgeschlossen wurde';
$string['similarities'] = 'Ähnlichkeiten';
$string['similarities_disclaimer'] = 'Sie können die Ähnlichkeiten in den Dokumenten dieser Aktivität mit <a href=\'http://www.compilatio.net/en/\' target=\'_blank\'>Compilatio</a> analysieren.<br/> Seien Sie vorsichtig: Ähnlichkeiten, die während der Analyse gemessen werden, bedeuten nicht unbedingt ein Plagiat. Der Analysebericht hilft Ihnen zu erkennen, ob die Ähnlichkeiten auf ein passendes Zitat oder ein Plagiat zurückzuführen sind.';
$string['similarity_percent'] = '% Ähnlichkeiten';
$string['start_analysis_in_progress'] = 'Lancierung der Analysen in Arbeit';
$string['start_analysis_title'] = 'Manueller Start der Analysen';
$string['startallcompilatioanalysis'] = 'Alle Dokumente analysieren';
$string['startanalysis'] = 'Die Analyse starten';
$string['statistics_title'] = 'Statistiken';
$string['stats_errors'] = 'Fehler';
$string['stats_failed'] = 'Analysen fehlgeschlagen';
$string['stats_notfound'] = 'Datei nicht gefunden';
$string['stats_toolong'] = 'Datei enthält zu viele Wörter';
$string['stats_tooshort'] = 'Die Datei enthält nicht genügend Wörter';
$string['stats_unextractable'] = 'Dateiinhalt konnte nicht extrahiert werden';
$string['stats_unsupported'] = 'Dateiformat nicht unterstützt';
$string['student_analyze'] = 'Analyse von Teilnehmer/in';
$string['student_help'] = 'Sie können Ihren Entwurf mit Compilatio Magister analysieren, um Ähnlichkeiten im Text Ihrer Dateien zu messen.<br/>
Der Inhalt Ihres Entwurfs wird von Compilatio nicht als Vergleichsmaterial für zukünftige Analysen verwendet.<br/>
Ihre Trainer/innen werden jedoch Zugang zu diesem Analysebericht haben.';
$string['student_start_analyze'] = 'Die Analyse kann vom Studenten selbst gestartet werden';
$string['studentdisclosuredefault'] = 'Alle hier hochgeladenen Dateien werden an den Ähnlichkeitserkennungsdienst Compilatio weitergeleitet.';
$string['studentemailcontent'] = 'Die Datei, die Sie {$a->modulename} vorgelegt {$a->coursename} haben, wurde vom Compilatio {$a->modulelink} Tool zur Plagiatserkennung verarbeitet';
$string['studentemailsubject'] = 'Die Datei wurde von Compilatio verarbeitet';
$string['students_disclosure'] = 'Präventive Botschaft an die Teilnehmer/innen';
$string['students_disclosure_help'] = 'Dieser Text wird für alle Teilnehmer/innen auf der Download-Seite angezeigt.';
$string['tabs_title_help'] = 'Hilfe';
$string['tabs_title_notifications'] = 'Benachrichtigungen';
$string['tabs_title_stats'] = 'Statistiken';
$string['teacher'] = 'Trainer/in';
$string['teacher_features_title'] = 'Aktivierte Funktionen für Lehrer';
$string['thresholds_description'] = 'Geben Sie die Grenzwerte ein, die Sie verwenden möchten, um den Analysebericht (Ähnlichkeitsquote) einfacher zu kennzeichnen:';
$string['thresholds_settings'] = 'Einstellung der Grenzwerte für die Anzeige der Ähnlichkeitsquote:';
$string['timesubmitted'] = 'Compilatio vorgelegt am';
$string['toolarge'] = 'Die Datei ist zu groß, um von Compilatio verarbeitet zu werden. Maximale Größe: {$a->Mo} MB';
$string['toolong'] = 'Dieses Dokument enthält zu viele Wörter, um analysiert zu werden. Maximale Größe : {$a} Wörter';
$string['toolong_files'] = 'Die folgende(n) Datei(en) kann (können) von Compilatio nicht analysiert werden, da sie zu viele Wörter enthält (Maximale Größe : {$a} Wörter) :';
$string['tooshort'] = 'Dieses Dokument enthält nicht genügend Wörter, um von Compilatio verarbeitet zu werden. Mindestgröße : {$a} Wörter';
$string['tooshort_files'] = 'Die folgende(n) Datei(en) kann (können) von Compilatio nicht analysiert werden, da sie nicht genügend Wörter enthält (Mindestgröße : {$a} Wörter):';
$string['trigger_analyses'] = 'Analysen auslösen';
$string['unextractable'] = 'Der Inhalt dieses Dokuments konnte nicht abgerufen werden';
$string['unextractable_files'] = 'Die folgende(n) Datei(en) kann (können) von Compilatio nicht analysiert werden, da ihr Inhalt nicht extrahiert werden konnte:';
$string['unextractablefile'] = 'Der Text in Ihrem Dokument kann nicht extrahiert werden.';
$string['unknownlang'] = 'Achtung, die Sprache einiger Passagen in diesem Dokument wurde nicht erkannt.';
$string['unknownwarning'] = 'Beim Verschicken der Datei an Compilatio ist ein Fehler aufgetreten';
$string['unsent_documents'] = 'Nicht vorgelegte Datei(n)';
$string['unsent_documents_content'] = 'Diese Aktivität enthält ein oder mehrere Dokumente, die nicht an Compilatio übermittelt wurden.';
$string['unsupported'] = 'Das Dokument wird nicht unterstützt';
$string['unsupported_files'] = 'Folgende Dokumente konnten nicht analysiert werden, da ihr Format nicht unterstützt wird:';
$string['unsupportedfiletype'] = 'Diese Dateiart wird von Compilatio nicht unterstützt';
$string['update_in_progress'] = 'Informationsaktualisierung';
$string['update_meta'] = 'Führt die von Compilatio.net geplanten Aufgaben aus';
$string['updatecompilatioresults'] = 'Informationen erneuern';
$string['updated_analysis'] = 'Die Resultate der Compilatio Analyse wurden aktualisiert.';
$string['use_compilatio'] = 'Ähnlichkeiten mit Compilatio erkennen';
$string['waitingforanalysis'] = 'Diese Datei wird am {$a} verarbeitet';
$string['webservice_not_ok'] = 'Der Webservice konnte nicht kontaktiert werden. Ihre Firewall blockiert möglicherweise die Verbindung.';
$string['webservice_ok'] = 'Der Server kann den Webservice kontaktieren.';
$string['webservice_unreachable_content'] = 'Die Compilatio.net Dienstleistung ist derzeit nicht verfügbar. Entschuldigen Sie bitte die Umstände.';
$string['webservice_unreachable_title'] = 'Compilatio.net nicht verfügbar';
