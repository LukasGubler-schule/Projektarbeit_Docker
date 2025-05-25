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
 * Strings for component 'learningmap', language 'de', version '4.5'.
 *
 * @package     learningmap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advancedsettings'] = 'Weitere Einstellungen';
$string['allowedfilters'] = 'Filter, die mit der Lernlandkarte genutzt werden dürfen';
$string['allowedfilters_desc'] = 'Kommagetrennte Liste ohne filter_-Präfix';
$string['backgroundfile'] = 'Hintergrundbild';
$string['backgroundfile_help'] = 'Dieses Bild wird als Hintergrund für die Lernlandkarte verwendet.';
$string['backlink'] = 'Zurück zu "{$a->name}"';
$string['backlinkallowed'] = 'Automatische Zurück-Links erlauben';
$string['backlinkallowed_desc'] = 'Wenn diese Option aktiviert ist, können automatische Links zurück zur Lernlandkarte erzeugen werden. Diese sind dann auf allen Aktivitätsseiten enthalten, die in der Lernlandkarte genutzt werden.';
$string['cachedef_backlinks'] = 'Dieser Cache speichert ab, ob ein Link zurück zu einer Lernlandkarte auf der Aktivitätsseite angezeigt werden soll.';
$string['completion_with_all_places'] = 'Alle Orte müssen erreicht werden';
$string['completion_with_all_targets'] = 'Alle Zielorte müssen erreicht werden';
$string['completion_with_one_target'] = 'Ein Zielort muss erreicht werden';
$string['completiondetail:all_places'] = 'Alle Orte erreichen';
$string['completiondetail:all_targets'] = 'Alle Zielorte erreichen';
$string['completiondetail:one_target'] = 'Einen Zielort erreichen';
$string['completiondisabled'] = 'Die Abschlussverfolgung ist in den Kurseinstellungen deaktiviert. Ohne Abschlussverfolgung funktioniert dieses Plugin nicht.';
$string['completiontype'] = 'Art des Aktivitätsabschlusses';
$string['editorhelp'] = 'Wie wird der Editor verwendet?';
$string['editplace'] = 'Ort bearbeiten';
$string['fill_backlink_cache_task'] = 'Cache für die Funktion "Zurück zur Lernlandkarte" füllen';
$string['freetype_required'] = 'Die FreeType-Erweiterung für GD ist zum Verwenden von mod_learningmap erforderlich.';
$string['groupmode'] = 'Gruppenmodus';
$string['groupmode_help'] = 'Wenn der Gruppenmodus aktiv ist, genügt es, dass ein Mitglied der Gruppe eine Aktivität abgeschlossen hat, um die verbundenen Orte sehen zu können.';
$string['hiddenactivitywarning'] = 'Diese Aktivität ist verborgen und für Teilnehmer/innen nicht verfügbar';
$string['hidepaths'] = 'Pfade verbergen';
$string['hidepaths_help'] = 'Diese Einstellung blendet die Pfade in der Teilnehmeransicht aus, wobei sie für die Abhängigkeiten zwischen den Aktivitäten funktionsfähig bleiben.';
$string['hidestroke'] = 'Rand der Orte verbergen';
$string['hidestroke_help'] = 'Diese Einstellung blendet den Rand der Orte aus';
$string['hover'] = 'Hover-Animation für Orte';
$string['hover_help'] = 'Diese Einstellung fügt eine Animation zu den Orten hinzu, wenn diese mit dem Cursor berührt werden.';
$string['intro'] = 'Lernlandkarte';
$string['intro_help'] = '<ul><li><b>Hinzufügen eines Ortes:</b> Doppelklick auf den Hintergrund</li>
<li><b>Hinzufügen eines Pfades:</b> Zwei Orte nacheinander anklicken</li>
<li><b>Entfernen eines Ortes:</b> Doppelklick auf den Ort</li>
<li><b>Entfernen eines Pfades:</b> Doppelklick auf den Pfad</li>
<li><b>Ändern von Ortseigenschaften:</b> Rechtsklick auf den Ort</li></ul>';
$string['learningmap'] = 'Lernlandkarte';
$string['learningmap:addinstance'] = 'Lernlandkarte hinzufügen';
$string['learningmap:view'] = 'Lernlandkarte anzeigen';
$string['loading'] = 'Lernlandkarte wird geladen ...';
$string['modulename'] = 'Lernlandkarte';
$string['modulename_help'] = 'Lernlandkarten erlauben in einem Kurs, Aktivitäten als durch Pfade verbundene Orte auf einer Karte darzustellen. Einzelne Orte sind Startorte und werden zu Beginn angezeigt. Andere Orte und Pfade werden erst sichbar, sobald die Aktivitäten der verbundenen Orte abgeschlossen sind.';
$string['modulenameplural'] = 'Lernlandkarten';
$string['name'] = 'Titel der Lernlandkarte';
$string['name_help'] = 'Der Titel der Lernlandkarte wird nur angezeigt, wenn "Karte auf Kursseite anzeigen" nicht aktiviert ist.';
$string['nocompletion'] = 'Kein automatischer Abschluss über die Karte';
$string['nocompletionenabled'] = 'Nicht verfügbar, da der Aktivitätsabschluss nicht aktiviert ist';
$string['ownprogress'] = 'Mein eigener Fortschritt';
$string['paths'] = 'Pfade + Schrift';
$string['places'] = 'Unbesuchte Orte';
$string['pluginadministration'] = 'Administration für Lernlandkarte';
$string['pluginname'] = 'Lernlandkarte';
$string['privacy:metadata'] = 'Das Plugin "Lernlandkarte" speichert keine personenbezogenen Daten.';
$string['pulse'] = 'Animation für unbesuchte Orte';
$string['pulse_help'] = 'Diese Einstellung fügt eine Animation zu unbesuchten Orten  hinzu, um diese hervorzuheben.';
$string['showall'] = 'Alle Pfade und Orte anzeigen';
$string['showall_help'] = 'Diese Einstellung zeigt von Anfang an alle Wege und Orte der Karte an. Noch nicht erreichbare Orte und Wege sind ausgegraut.';
$string['showbacklink'] = 'Zurück-Links auf den Aktivitätsseiten anzeigen';
$string['showbacklink_help'] = 'Diese Einstellung zeigt auf jeder Aktivitätsseite, die zur Lernlandkarte gehört, einen Zurück-Link zur Lernlandkarte an.';
$string['showmaponcoursepage'] = 'Lernlandkarte auf der Kursseite anzeigen';
$string['showmaponcoursepage_help'] = 'Diese Einstellung zeigt die Lernlandkarte auf der Kursseite (wie ein Text- und Medienfeld) an. Ansonsten wird ein Link angezeigt und die Lernlandkarte erscheint auf einer separaten Seite.';
$string['showtext'] = 'Aktivitätsnamen anzeigen';
$string['showtext_help'] = 'Diese Einstellung zeigt die Aktivitätsnamen als Text neben den Orten an. Der Text kann verschoben werden und wird automatisch aktualisiert, wenn sich der Aktivitätsname ändert.';
$string['showwaygone'] = 'Weg hervorheben';
$string['showwaygone_help'] = 'Diese Einstellung hebt den Weg hervor, den eine Person durch die Karte genommen hat (in der Reihenfolge der Aktivitätsabschlüsse).';
$string['slicemode'] = 'Karte mit Orten aufdecken';
$string['slicemode_help'] = 'Diese Einstellung zeigt die Karte an, sobald neue Orte erreichbar werden. Die verborgenen Teile der Karte sind mit Nebel bedeckt. Der Nebel löst sich vollständig auf, sobald alle Orte erreichbar sind.';
$string['startingplace'] = 'Startort';
$string['svgcode'] = 'SVG Code';
$string['targetplace'] = 'Zielort';
$string['usecasehelp'] = 'Wie werden Lernlandkarten verwendet?';
$string['usecaselink'] = 'Link zu einer Seite, die den Einsatz der Lernlandkarte erklärt';
$string['usecheckmark'] = 'Haken für abgeschlossene Orte';
$string['usecheckmark_help'] = 'Diese Einstellung zeigt zusätzlich ein Häkchen bei besuchten Orten an.';
$string['visited'] = 'Besuchte Orte';
