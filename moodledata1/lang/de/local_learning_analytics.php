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
 * Strings for component 'local_learning_analytics', language 'de', version '3.10'.
 *
 * @package     local_learning_analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admin_customfield_category'] = 'Umbenennen der Kategorie';
$string['admin_customfield_category_hint'] = 'durch Klick auf das Stift-Symbol kann die Kategorie umbenannt werden';
$string['admin_customfield_info'] = 'Den Namen der Option in den Kurseinstellungen können Sie selbst ändern, indem Sie diese auf den folgenden Seiten umbenennen:';
$string['admin_customfield_no_manual_delete'] = 'Sie dürfen die Kategorie oder die Option nicht löschen. Sie dürfen sie nur umbenennen. Wenn Sie die Option entfernen möchten, ändern Sie stattdessen den obigen Status.';
$string['admin_customfield_option'] = 'Umbenennen der Option';
$string['admin_customfield_option_hint'] = 'nur der Name und die Beschreibung dürfen verändert werden';
$string['customfield_category_description'] = 'Diese Kategorie wurde automatisch durch das Learning Analytics Plugin erstellt (local_learning_analytics). Sie sollten diese Kategorie nicht manuell löschen.';
$string['customfield_category_name'] = 'Learning Analytics';
$string['customfield_field_description'] = 'Die Aktivierung fügt der Kursnavigation den Link "Zugriffsstatistiken" hinzu.';
$string['customfield_field_name'] = 'Zugriffsstatistiken aktivieren';
$string['dataprivacy_threshold_description'] = 'Bestimmt wie viele Datenpunkte ein Datensatz haben muss, bevor er angezeigt wird.';
$string['general_settings'] = 'Allgemeine Einstellungen';
$string['help_faq'] = 'Häufig gestellte Fragen (FAQ)';
$string['help_faq_data_storage_answer'] = 'Die dargestellten Daten stammen aus zwei Datenquellen.
Beide Quellen sind in der internen Moodle-Datenbank gespeichert.
Die erste Datenquelle ist die interne Moodle-Datenbank, z.B. die Anzahl der Teilnehmer/innen im Kurs (linke Box im Dashboard).
Einige dieser Datensätze können auch auf anderen Moodle-Seiten eingesehen werden und werden auf diesen Seiten nur anders dargestellt.
Die zweite Datenquelle sind Daten, die speziell für die Darstellung auf der Seite Nutzungsstatistiken gesammelt werden.
Alle zu diesem Zweck gesammelten Daten werden anonymisiert gespeichert und können nicht auf einzelne Nutzer/innen zurückverfolgt werden.
Im Einzelnen werden folgende Daten, bei jeder Anfrage in Moodle gespeichert:';
$string['help_faq_data_storage_answer_list'] = 'Art der Aktion (z.B. "Ressource angezeigt")
Zeit (auf die Sekunde genau)
Entsprechender Kurs, in dem die Aktion stattfand
Entsprechender Kontext (z.B. die betrachtete Ressource)
Betriebssystem und Browser (z.B. "Windows 10" und "Firefox"), detaillierte Browser- oder Betriebssystemversionen werden nicht gespeichert';
$string['help_faq_data_storage_question'] = 'Welche Daten werden von dem Dienst gespeichert und angezeigt?';
$string['help_faq_datapoints_answer'] = 'Die dargestellten Zahlen zeigen die Anzahl an Zugriffen. Diese können je nach Materialtyp stark variieren.
So wird beim Herunterladen eines PDFs nur ein Zugriff gespeichert.
Bei einem Test, dessen Fragen auf mehrere Seiten verteilt sind, wird es dagegen zu mehreren Zugriffen bei einem einzigen Testdurchlauf kommen.';
$string['help_faq_datapoints_question'] = 'Warum sind die Zugriffszahlen so unterschiedlich für verschiedene Typen von Materialien?';
$string['help_faq_developer_answer'] = 'Der Learning Analytics Dienst wird vom Zentrum für Lehr- und Lernservices der RWTH Aachen entwickelt.
Die Entwicklung ist Open Source (Quelloffen). Daher können Sie die verwendeten Algorithmen selbst überprüfen. Auf den folgenden Seiten können Sie weitere Informationen abrufen:';
$string['help_faq_developer_question'] = 'Wer entwickelt den Dienst und wo kann ich weitere Informationen erhalten?';
$string['help_faq_personal_data_answer'] = 'Aus Gründen des Datenschutzes sammelt der Learning Analytics Dienst keine personalisierten Daten. Daher enthalten die meisten der angezeigten Statistiken (z.B. die meistgenutzten Aktivitäten) nur Informationen darüber, wie oft auf eine Ressource zugegriffen wurde, aber nicht, von wie vielen Teilnehmern.
Eine Ausnahme bilden die Statistiken über Teilnehmer und Quiz/Aufgaben, die auch Moodle-interne Daten anzeigen.';
$string['help_faq_personal_data_question'] = 'Warum werden keine personalisierten Statistiken angezeigt, wie z.B. Klicks pro Nutzer/in?';
$string['help_faq_privacy_threshold_answer'] = 'Aus Gründen des Datenschutzes werden nur aggregierte Daten angezeigt, wenn mindestens {$a} Datenpunkte vorhanden sind.';
$string['help_faq_privacy_threshold_question'] = 'Warum werden einige Werte als "< {$a}" angezeigt?';
$string['help_faq_visibility_answer'] = 'Um maximale Transparenz zu gewährleisten, können die Daten sowohl von den Kurstrainer/innen als auch von den Kursteilnehmer/innen angezeigt werden.';
$string['help_faq_visibility_question'] = 'Wer kann auf die Nutzungsstatistiken zugreifen?';
$string['help_faq_week_start_answer'] = 'Die Darstellung im Dashboard ist abhängig von der Einstellung "Kursbeginn" in den Kurseinstellungen. Stimmt das dort angegebene Datum nicht mit dem tatsächlichen Beginn der Lerneinheit überein, stimmt auch die Darstellung im Dashboard nicht.
Trainer/innen des Kurses können die Einstellung in den Kurseinstellungen (unter Allgemein / Kursbeginn) korrigieren.';
$string['help_faq_week_start_question'] = 'Warum entspricht die erste Woche im Dashboard-Diagramm nicht dem tatsächlichen Beginn der Lerneinheit?';
$string['help_take_tour'] = 'Starten Sie die interaktive Tour';
$string['help_text'] = 'Die Seite "Nutzungsstatistiken" des Learning Analytics Dienstes zeigt Ihnen die wichtigsten Kennzahlen Ihres Kurses.

Die angezeigten Statistiken sind live und zeigen sowohl Daten, die vom Dienst gesammelt wurden, als auch Daten aus dem Moodle-Kurs selbst. Alle Daten, die der Learning Analytics Dienst sammelt, werden vollständig anonym erfasst und können nicht auf einzelne Nutzer/innen zurückgeführt werden.';
$string['help_title'] = 'Hilfe';
$string['hits'] = 'Treffer';
$string['learners'] = 'Teilnehmer/innen';
$string['learning_analytics'] = 'Learning Analytics';
$string['learning_analytics:view_statistics'] = 'Anzeige von Zugriffsstatistiken in Kursen';
$string['navigation_position_beforekey_description'] = 'Hier können Sie festlegen, wo in der Kursnavigation der Link zur Seite eingefügt werden soll. Standardmäßig wird der Link vor dem ersten Knoten "Abschnitt" eingefügt. Beispielwert: <code>Noten</code> soll vor dem Link zu den Noten angezeigt werden. Sie können den Schlüssel eines Knotens in der Navigation mit Hilfe der Entwicklerwerkzeuge finden. Klicken Sie mit der rechten Maustaste auf einen Link in der Navigation, drücken Sie <em>Untersuchen</em> und überprüfen Sie das Attribut <code>data-key</code> des entsprechenden <code>a</code>-Elements.';
$string['navigationlink'] = 'Zugriffsstatistiken';
$string['pluginname'] = 'Learning Analytics';
$string['privacy:metadata'] = 'Dieses Plugin speichert keine personenbezogenen Daten.';
$string['sessions'] = 'Sessions';
$string['setting_course_ids_description'] = 'Verwenden Sie diese Option, wenn Sie die zweite Option oben ausgewählt haben, um zu entscheiden, für welche Kurse die Benutzeroberfläche aktiviert werden soll.';
$string['setting_dashboard_boxes'] = 'Bestimmt, welche Boxen im Dashboard angezeigt werden, in welcher Reihenfolge und wie groß die Boxen sind. Die Angabe erfolgt im Format <code>Berichtsname:Breite</code>, getrennt durch Kommata. Eine Zeile hat eine maximale Breite von 12, danach bricht sie ab. Beispiel: <code>Lernende:8,Aktivitäten:4</code> zeigt im Dashboard zwei Felder an, wobei das erste viel breiter ist als das zweite. In den meisten Fällen muss der Wert nur geändert werden, wenn andere Subplugins installiert sind.';
$string['setting_status_course_customfield'] = 'Option zu den Kurseinstellungen hinzufügen, damit Lehrkräfte sie selbst aktivieren können';
$string['setting_status_description'] = 'Dieser Wert legt fest, ob die Nutzeroberfläche aktiviert und ob ein Link in der Navigation angezeigt werden soll. Standardmäßig sind der Link und die Seite sichtbar, wenn die Protokollierung für den Kurs aktiviert ist. Sie können diese Option verwenden, wenn Sie die Protokollierung in allen Kursen aktivieren möchten, die Nutzeroberfläche aber nur in bestimmten Kursen.';
$string['setting_status_option_disable'] = 'Navigationslink ausblenden und die Seite für alle Kurse deaktivieren';
$string['setting_status_option_hidelink'] = 'Navigationslink nicht anzeigen, aber die Seite selber aktivieren (wer den Link kennt, kann weiterhin die Seite nutzen)';
$string['setting_status_option_show_always'] = 'Navigationslink für alle Kurse anzeigen, auch wenn die Protokollierung für den Kurs deaktiviert ist (nur aktivieren, wenn Sie die Daten bereits vorher protokolliert haben)';
$string['setting_status_option_show_courseids'] = 'Navigationslink anzeigen, wenn Kurs unten über course_ids aufgeführt ist';
$string['setting_status_option_show_if_enabled'] = 'Navigationslink anzeigen, wenn die Protokollierung für den Kurs aktiviert ist';
$string['setting_student_enrols_groupby_description'] = 'Mit dieser Option wird festgelegt, welche Kurse auf der Seite "Vorheriger/Paralleler Kurs" zusammengeführt werden und welcher Wert für die Anzeige der Namen verwendet wird.';
$string['setting_student_rolenames_description'] = 'Wenn die Rolle(n) für Studenten/Benutzer in einem Kurs nicht <code>Student</code> ist, können Sie den entsprechenden Rollennamen angeben. Falls es mehrere Rollen für Studenten gibt, verwenden Sie ein einzelnes Komma. Beispiel: <code>Student,benutzerdefinierteRolle</code>';
$string['show_full_list'] = 'Liste erweitern';
$string['subplugintype_lalog'] = 'L.A. Log';
$string['subplugintype_lalog_plural'] = 'L.A. Berichte';
$string['subplugintype_lareport'] = 'L.A. Bericht';
$string['subplugintype_lareport_plural'] = 'L.A. Berichte';
$string['tour_activities'] = 'Die letzte Ansicht zeigt die drei meistgenutzten Aktivitäten der letzten 7 Tage.

Wenn Sie auf den Link klicken, können Sie Details zu den Kursaktivitäten sehen.';
$string['tour_box_hits'] = 'Dieser Indikator zeigt die Anzahl der Aktionen in den letzten 7 Tagen an. Unten sehen Sie die Veränderungen in den letzten 7 Tagen.

Wenn Sie auf den Link klicken, können Sie eine Heatmap öffnen, die die Anzahl der Aktionen über das gesamte Semester visualisiert.';
$string['tour_box_learners'] = 'Der erste Indikator zeigt die Gesamtzahl der Teilnehmer an. Unterhalb der großen Zahl wird die Veränderung gegenüber der Vorwoche angezeigt.';
$string['tour_box_learnerslink'] = 'Durch einen Klick auf den Link werden weiterführende Informationen zu den Teilnehmer/innen angezeigt.';
$string['tour_box_quiz_assign'] = 'Hier wird die Anzahl der Quizversuche und der abgegebenen Aufgaben der letzten 7 Tage angezeigt. Darunter wird noch einmal die Veränderung gegenüber den letzten 7 Tagen angezeigt.

Wenn Sie auf den Link klicken, können Sie Details zu den Tests und Aufgaben des Kurses einsehen.';
$string['tour_dashboard_boxes'] = 'Im unteren Bereich werden wichtige Kennzahlen des Kurses angezeigt.

Darüber hinaus enthält jeder Kasten einen Link, über den weitere Informationen abgerufen werden können.';
$string['tour_dashboard_graph'] = 'Die Grafik zeigt die Anzahl aller Aktionen in der jeweiligen Woche an.

Wenn es sich um einen laufenden Kurs handelt, wird der Beginn der aktuellen Woche durch eine gepunktete Linie markiert. Die Zahlen der aktuellen Woche werden nicht angezeigt.';
$string['tour_more_information'] = 'Die interaktive Tour ist nun abgeschlossen. Wir hoffen, wir konnten Ihnen einen guten Überblick über die Funktionen geben.

Weitere Antworten auf häufig gestellte Fragen finden Sie auf der Hilfeseite.';
$string['tour_title'] = 'Learning Analytics';
