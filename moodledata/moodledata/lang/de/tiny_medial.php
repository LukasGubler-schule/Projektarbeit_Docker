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
 * Strings for component 'tiny_medial', language 'de', version '4.5'.
 *
 * @package     tiny_medial
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowfeedback'] = 'Die Nutzung in Textblöcken im Rahmen des Feedbacks erlauben.';
$string['allowfeedback_desc'] = 'Für die Nutzung von Videofeedback wird das MEDIAL-Feedback-Plugin empfohlen. Der MEDIAL-Button des TinyMCE Editors kann zusätzlich auch für Textfelder im Rahmen des Feedbackprozesses verwendet werden.';
$string['button_insertmedial'] = 'MEDIAL-Video einfügen';
$string['embedopt'] = 'Verschiedene Optionen zum Einbetten anbieten';
$string['embedopt_desc'] = 'Beim Einbetten von Videos stehen verschiedenen Einbettungsoptionen (iframe, Vorschaubild mit Popup-Fenster, Link mit Popup-Fenster) zur Verfügung. Das MEDIAL-Filter-Plugin muss installiert sein.';
$string['helplinktext'] = 'MEDIAL-Video einfügen';
$string['hideinsert'] = 'Einfügen-Button verbergen';
$string['hideinsert_desc'] = 'Einfügen-Button am unteren Ende des Video-Einfügen-Dialogs ausblenden. Hinweis: Die Taste "Einfügen" wird unabhängig von dieser Einstellung immer angezeigt, wenn der Wert für "Verzögerung beim Schließen des Video-Einfügen-Dialogs in Sekunden" des Aktivitätsmoduls (helixmedia | modal_delay) auf eine negative Zahl gesetzt ist.';
$string['iframe'] = 'Eingebettetes Video';
$string['inserttype'] = 'Einfügen als';
$string['link'] = 'Link & Popup Video';
$string['medial:visible'] = 'Nutzer/innen können MEDIAL-Videos mit dem Tiny-Texteditor hinzufügen';
$string['medial:visiblemodtype'] = 'Nutzer/innen können MEDIAL-Videos mit dem Tiny-Texteditor in denjenigen Modulen hinzufügen, die in der MEDIAL-TinyMCE-Plugin Konfiguration als Ausnahme definiert sind.';
$string['menuitem_insertmedial'] = 'MEDIAL-Video einfügen';
$string['modaltitle'] = 'MEDIAL-Inhalt auswählen';
$string['modtypedesc'] = 'Das MEDIAL-TinyMCE-Plugin hat ein alternatives Recht tiny/medial:visiblemodtype, mit dem Nutzer/innen in ausgewählten Modulen Rechte zugewiesen werden können, die von den normalen Rechen, den MEDIAL-TinyMCE-Button zu verwenden, abweichen. Das dient hauptsächlich dazu, Teilnehmer/innen, (nur) in ausgewählten Modulen die Möglichkeit zu geben, den MEDIAL-Button zu verwenden. Als Standard sind keine Module aktiviert, aber es können beliebige Module in die folgende Box eingetragen werden. Die Liste muss einen Modulnamen pro Zeile enthalten und muss exakt der Formulierung im Moodle Code (in Kleinschreibung) entsprechen, zum Beispiel forum für die Aktivitität Forum. In allen Module, die hier genannt sind, werden die MEDIAL-Videos als Link und nicht als iframe eingefügt, weil Teilnehmer/innen keine iframes einfügen dürfen. Wenn dieses Feature nicht benötigt wird, kann die Box leer gelassen werden.';
$string['modtypetitle'] = 'Module, in denen die alternative Berechtigung gilt';
$string['newtab'] = 'Link & neuer Tab';
$string['placeholder'] = 'URL als Platzhalter verwenden (benötigt den MEDIAL-Filter)';
$string['placeholder_desc'] = 'Platzhalter als Start-URL statt der tatsächlichen, aktuellen URL verwenden. Dadurch werden defekte Links vermieden, die ansonsten bei einem Wechsel der Website-URL auftreten. <strong>Das MEDIAL Filter Plugin muss installiert und aktiviert sein.</strong>. Wenn diese Einstellung aktiviert ist, wird aus Gründen der Kompatibilität im Bearbeitungsmodus immer ein Link anstelle eines iframe eingefügt und die Einstellung "Link zur MEDIAL-Ressource verwenden" ignoriert. Da der Filter keine Auswirkungen auf den Editor hat, werden die MEDIAL-Links im Bearbeitungsmodus im TinyMCE-Editor nicht funktionieren, sondern nur auf der endgültig gespeicherten Seite.';
$string['pluginname'] = 'MEDIAL';
$string['privacy:metadata'] = 'Das MEDIAL-Plugin speichert keine personenbezogenen Daten.';
$string['showlibrary'] = 'MEDIAL-Verzeichnis anzeigen';
$string['showvideo'] = 'MEDIAL-Video anschauen';
$string['thumbnail'] = 'Vorschaubild und Popup-Video';
$string['uselinkdesc'] = 'In bestimmten Aktivitätsmodulen werden MEDIAL iframes, die vom MEDIAL-TinyMCE-Plugin erstellt wurden, beim Speichern herausgefiltert und gelöscht, selbst wenn eine Person Bearbeitungsrechte im Kurs hat. Als Workaround kann das MEDIAL-TinyMCE-Plugin stattdessen einen Link zur gewünschten Ressource einfügen. Module, in denen das erfolgen soll, können hier in gleicher Form wie bei der alternativen Berechtigung eingetragen werden. Sowohl bei bei der Gegenseitigen Beurteilung (workshop) als in Foren (forum) ist dieses Verhalten bekannt, weswegen diese beiden Module als Standard gelistet werden. Die eingefügten Links können wieder als eingebettete iframes angezeigt werden, wenn das MEDIAL-Filter-Plugin installiert wird. Wenn die Platzhalter-Funktion oben (tiny_medial | placeholder) aktiviert ist, wird ohnehin immer ein Link eingefügt und die Einstellungen hier sind irrelevant.';
$string['uselinktitle'] = 'Link zur MEDIAL-Ressource verwenden';
