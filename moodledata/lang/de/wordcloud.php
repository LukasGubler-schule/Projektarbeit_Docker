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
 * Strings for component 'wordcloud', language 'de', version '4.5'.
 *
 * @package     wordcloud
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityclose'] = 'Einreichungen bis';
$string['activityclose_help'] = 'Wenn diese Option aktiviert ist, können Teilnehmer/innen nach diesem Zeitpunkt keine Wörter einreichen. Wenn diese Option deaktiviert ist, ist eine Einreichung jederzeit möglich.';
$string['activityopen'] = 'Einreichungen ab';
$string['activityopen_help'] = 'Wenn diese Option aktiviert ist, können Teilnehmer/innen vor diesem Zeitpunkt keine Wörter einreichen. Wenn diese Option deaktiviert ist, ist eine Einreichung sofort möglich.';
$string['appearance'] = 'Darstellung';
$string['close'] = 'Schließt:';
$string['closebeforeopen'] = 'Die Wortwolke konnte nicht aktualisiert werden. Sie haben einen Endzeitpunkt vor dem Startzeitpunkt angegeben.';
$string['cloud'] = 'Wortwolke';
$string['cloudvisibility'] = 'Sichtbarkeit von eingereichten Wörtern';
$string['cloudvisibility_help'] = 'Hier können Sie die Anzeige von Wörtern der Wortwolke für Teilnehmer/innen steuern:<ul><li>Immer. - Wörter sind jederzeit sichtbar.</li><li>Erst nach eigener Einreichung. - Wörter sind erst sichtbar, sobald mindestens 1 Wort eingereicht wurde.</li><li>Erst nach Ende der Einreichungsfrist. - Wörter sind erst sichtbar, nachdem das Datum "Einreichen bis" überschritten wurde.</li></ul>';
$string['color_custom'] = 'Benutzerdefiniert';
$string['completiondetail:submits'] = 'Wörter einreichen: {$a}';
$string['completionsubmits'] = 'Teilnehmer/innen müssen mindestens folgende Anzahl an Wörtern eingeben:';
$string['completionsubmitsgroup'] = 'Einreichung erforderlich';
$string['count'] = 'Anzahl';
$string['editentry'] = 'Wörter bearbeiten';
$string['errormonocolorhex'] = 'Der eingegebene Wert ist kein hexadezimaler Farbenwert!';
$string['errortoomanywords'] = 'Maximale Anzahl an Wörtern erreicht!';
$string['errorupdateentries'] = 'Die folgenden Wörter konnten nicht aktualisiert werden:';
$string['errorwordoverflow'] = 'Eingabe ist zu lang!';
$string['export'] = 'Exportieren als ...';
$string['exportcsv'] = 'Export als CSV';
$string['exportdefault'] = 'Export';
$string['exportpng'] = 'Export als PNG';
$string['fontcolor'] = 'Textfarbe {$a}';
$string['fontcolordesc'] = 'Setzen Sie hiermit die Textfarbe {$a}. Farbwerte müssen als Hexcode angegeben werden. Die Wörter werden nur gefärbt wenn alle Textfarben gesetzt sind.';
$string['fullscreen'] = 'Vollbild';
$string['list'] = 'Liste';
$string['modulename'] = 'Wortwolke';
$string['modulename_help'] = 'Mit der Wortwolke wird eine Liste von Wörtern in Form einer Schlagwortwolke (Wordcloud) visualisiert. Die Wörter werden entsprechend der Anzahl ihrer Nennungen im Verhältnis größer oder kleiner dargestellt.';
$string['modulenameplural'] = 'Wortwolken';
$string['monocolor'] = 'Ausgangsfarbe';
$string['monocolor_help'] = 'Wählen Sie eine der in den Adminsettings definierten Farben für das monochrome Farbschema.';
$string['monocolor_hex'] = 'Benutzerdefinierte Farbe';
$string['monocolor_hex_help'] = 'Geben Sie bitte einen sechsstelligen hexadezimalen Wert der gewünschten Monofarbe ein, in Form von"aabb11" (ohne #).';
$string['monocolordesc'] = 'Setzen Sie hiermit eine Farbe für die Wörter in der Wortwolke. Das System berechnet dann 6 weitere mit unterschiedlichen Helligkeitsstufen. Farbwerte müssen als Hexcode (ohne #) angegeben werden.';
$string['notification'] = 'Wählen Sie bitte eine Gruppe aus, um dort ein Wort einzureichen!';
$string['open'] = 'Öffnet:';
$string['pagetitle'] = 'Moodle Wortwolke';
$string['pluginadministration'] = 'Administration der Wortwolke';
$string['pluginname'] = 'Wortwolke';
$string['privacy:metadata'] = 'Das Plugin Wortwolke speichert keine personenbezogenen Daten.';
$string['refreshtext'] = 'Aktualisieren Sie die Seite, um den aktuellen Inhalt der Wortwolke zu sehen';
$string['refreshtime'] = 'Aktualisierungsintervall';
$string['refreshtimedesc'] = 'Gibt das Intervall in Sekunden an, in welchem die Darstellung automatisch neu geladen wird.';
$string['removewordcheck'] = 'Möchten Sie das Wort \'{$a}\' wirklich aus der Wortwolke entfernen?';
$string['saved'] = 'Gespeichert';
$string['submitbtn'] = 'Einreichen';
$string['submittedwords'] = 'Eingereichte Wörter:';
$string['textbox'] = 'Geben Sie hier ein Wort ein...';
$string['timing'] = 'Verfügbarkeit';
$string['usemonocolor'] = 'Farbschema';
$string['usemonocolor_help'] = 'Sie können zwischen einem Zufallsfarbschema und einer sequentiell schattierten Palette wählen. Zufallsfarbschema: Den Wörtern werden jeweils zufällig eine von sechs Farben zugewiesen. Wörter die gleich oft bzw. ähnlich oft genannt wurden, bekommen dieselbe Farbe. Sequentiell schattierte Palette: Hier können Sie für ein monochromes Farbschema eine Farbe aus den zur Verfügung gestellten Farben auswählen oder selber eine beliebige Farbe im Hexadezimalcode eingeben. Je nach Häufigkeit des Wortes scheint dieses dann heller oder dunkler in der ausgewählten Farbe auf.';
$string['usemonocolor_random'] = 'Zufallsfarbschema';
$string['usemonocolor_sequential'] = 'sequentiell schattierte Palette';
$string['userinfosubmit'] = 'Wörter werden erst nach eigener Einreichung angezeigt!';
$string['userinfotime'] = 'Wörter werden erst nach Ende der Einreichungsfrist angezeigt!';
$string['visibilityalways'] = 'Immer';
$string['visibilitysubmit'] = 'Erst nach eigener Einreichung';
$string['visibilitytime'] = 'Erst nach Ende der Einreichungsfrist';
$string['visibilitytimeerror'] = 'Diese Option ist nur bei definiertem "Einreichen bis" nutzbar.';
$string['warning'] = 'Achtung';
$string['warningdoubleentries'] = 'Identische Einträge in der Liste gefunden. Wenn Sie fortsetzen, werden diese zusammengefasst und die Anzahl summiert.<br /><br />Folgende Einträge sind mehrfach vorhanden:';
$string['word'] = 'Wort';
$string['wordcloud:addinstance'] = 'Wortwolke anlegen';
$string['wordcloud:editentry'] = 'Wörter bearbeiten';
$string['wordcloud:submit'] = 'Neues Wort einreichen';
$string['wordcloud:view'] = 'Wortwolke anzeigen';
$string['wordcloudname'] = 'Name der Wortwolke';
$string['wordlist'] = 'Wortliste';
