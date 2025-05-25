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
 * Strings for component 'local_usertours', language 'de', version '3.10'.
 *
 * @package     local_usertours
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Aktionen';
$string['appliesto'] = 'Betrifft';
$string['backdrop'] = 'Mit Hintergrundbox anzeigen';
$string['backdrop_help'] = 'Sie können eine Hintergrundbox nutzen, um den referenzierten Teil der Seite hervorzuheben.

Hinweis: Hintergrundboxen sind nicht mit allen Teilen der Seite kompatibel, etwa dem Navigationsbereich.';
$string['block'] = 'Block';
$string['block_named'] = 'Block \'{$a}\'';
$string['bottom'] = 'Unten';
$string['confirmstepremovalquestion'] = 'Möchten Sie diesen Schritt wirklich entfernen?';
$string['confirmstepremovaltitle'] = 'Schritt entfernen';
$string['confirmtourremovalquestion'] = 'Möchten Sie diese Tour wirklich entfernen?';
$string['confirmtourremovaltitle'] = 'Tour entfernen';
$string['content'] = 'Inhalt';
$string['content_help'] = 'Dies ist der Inhalt des Schritts.

Sie können den Inhalt in den folgenden Formaten eingeben:
<dl>
<dt>Einfacher Text</dt>
<dd>Beschreibung als unformatierter Text</dd>
<dt>Moodle MultiLang</dt>
<dd>Text, der das Moodle MultiLang-Format verwendet</dd>
<dt>Text aus Moodle-Sprachpaket</dt>
<dd>Text, der in einer Standard-Moodle-Sprachdatei im Format identifier,component zu finden ist</dd>
</dl>';
$string['cssselector'] = 'CSS-Selektor';
$string['defaultvalue'] = 'Standard ({$a})';
$string['delay'] = 'Verzögerung vor Anzeige des Schritts';
$string['delay_help'] = 'Sie können optional eine Verzögerung festlegen, bevor der Schritt angezeigt wird.

Die Verzögerung wird in Millisekunden angegeben.';
$string['description'] = 'Beschreibung';
$string['done'] = 'Fertig';
$string['editstep'] = 'Bearbeiten von "{$a}"';
$string['enabled'] = 'Aktiviert';
$string['endtour'] = 'Tour beenden';
$string['exporttour'] = 'Tour exportieren';
$string['importtour'] = 'Tour importieren';
$string['left'] = 'Links';
$string['movestepdown'] = 'Schritt nach unten verschieben';
$string['movestepup'] = 'Schritt nach oben verschieben';
$string['movetourdown'] = 'Tour nach unten verschieben';
$string['movetourup'] = 'Tour nach oben verschieben';
$string['name'] = 'Name';
$string['newstep'] = 'Neuer Schritt';
$string['newtour'] = 'Neue Tour erstellen';
$string['next'] = 'Weiter';
$string['orphan'] = 'Anzeigen, wenn Ziel nicht gefunden';
$string['orphan_help'] = 'Schritt anzeigen, wenn das Ziel nicht auf der Seite gefunden werden konnte.';
$string['pathmatch'] = 'Anwenden auf passende URL';
$string['pathmatch_help'] = 'Touren werden auf jeder Seite angezeigt, deren URL diesem Wert entspricht.

Sie können das Zeichen % als Wildcard für beliebige Zeichen benutzen, z.B.

* /my/% - für das Dashboard
* /course/view.php?id=2 - für einen spezifischen Kurs
* /mod/forum/view.php% - für die Diskussionsliste des Forums
* /user/profile.php% - für die Nutzerprofilseite';
$string['pausetour'] = 'Pause';
$string['placement'] = 'Platzierung';
$string['placement_help'] = 'Sie können Schritte entweder über, unter, links oder rechts vom Ziel anordnen.

Die besten Optionen sind "oben" und "unten", da diese besser auf mobilen Geräte umgesetzt werden können.';
$string['pluginname'] = 'Nutzertouren';
$string['reflex'] = 'Weiter bei Klick';
$string['reflex_help'] = 'Zum nächsten Schritt gehen, wenn auf das Ziel geklickt wird.';
$string['resettouronpage'] = 'Tour für diese Seite zurücksetzen';
$string['resumetour'] = 'Fortfahren';
$string['right'] = 'Rechts';
$string['select_block'] = 'Wählen Sie einen Block aus';
$string['select_targettype'] = 'Jeder Schritt ist verbunden mit einem zu wählenden Teil der Seite. Um diese Auswahl zu erleichtern, gibt es verschiedene Arten von Zielen für verschiedene Arten von Seiteninhalten.
<dl>
  <dt>Block</dt>
  <dd>Schritt anzeigen neben dem ersten passenden Block des gewählten Typs auf der Seite</dd>
  <dt>Selektor<dt>
  <dd>CSS-Selektoren sind ein aussagekräftiger Typ, über den Sie verschiedene Teile der Seite anhand der eingebauten Metadaten auswählen können.</dd>
  <dt>Anzeige in der Seitenmitte</dt>
  <dd>Statt den Schritt mit einem speziellen Seitenteil zu assoziieren, können Sie ihn auch in der Mitte der Seite anzeigen lassen.</dd>
</dl>';
$string['selector_defaulttitle'] = 'Geben Sie einen aussagekräftigen Titel an';
$string['selectordisplayname'] = 'Ein CSS-Selektor passend zu \'{$a}\'';
$string['selecttype'] = 'Auswahl des Schritttyps';
$string['sharedtourslink'] = 'Tourenverzeichnis';
$string['skip'] = 'Überspringen';
$string['target'] = 'Ziel';
$string['target_block'] = 'Block';
$string['target_selector'] = 'Selector';
$string['target_selector_targetvalue'] = 'CSS-Selektoren';
$string['target_selector_targetvalue_help'] = 'Sie können einen "CSS-Selektor" verwenden, um fast jedes Element einer Seite als Ziel auszuwählen.

CSS-Selektoren sind sehr mächtig; Sie können damit einfach Teile der Seite finden, indem Sie den Selektor schrittweise verfeinern.

Mozilla bietet eine [sehr gute Dokumentation] (https://developer.mozilla.org/en/docs/Web/Guide/CSS/Getting_started/Selectors)
für Selektoren, die Ihnen beim Aufbauen eigener Selektoren helfen könnten.

Die Entwicklungswerkzeuge Ihres Browsers können ebenfalls sehr hilfreich sein:

* [Google Chrome](https://developer.chrome.com/devtools#dom-and-styles)
* [Mozilla Firefox](https://developer.mozilla.org/en-US/docs/Tools/DOM_Property_Viewer)
* [Microsoft Edge](https://developer.microsoft.com/en-us/microsoft-edge/platform/documentation/f12-devtools-guide/)
* [Apple Safari](https://developer.apple.com/library/iad/documentation/AppleApplications/Conceptual/Safari_Developer_Guide/ResourcesandtheDOM/ResourcesandtheDOM.html#//apple_ref/doc/uid/TP40007874-CH3-SW1)';
$string['target_unattached'] = 'Anzeige in der Seitenmitte';
$string['targettype'] = 'Zieltyp';
$string['title'] = 'Titel';
$string['title_help'] = 'Dies ist der Titel, der oben im Schritt angezeigt wird.

Sie können einen Titel in den folgenden Formaten eingeben:
<dl>
<dt>Einfacher Text</dt>
<dd>Text mit einer Beschreibung</dd>
<dt>Moodle MultiLang</dt>
<dd>Text, der das Moodle MultiLang-Format verwendet</dd>
<dt>Text aus Moodle-Sprachpaket</dt>
<dd>Text, der in einer Standard-Moodle-Sprachdatei im Format identifier,component zu finden ist</dd>
</dl>';
$string['top'] = 'Oben';
$string['tourconfig'] = 'Zu importierende Konfigurationsdatei der Tour';
$string['tourlist_explanation'] = 'Sie können so viele Touren anlegen, wie Sie möchten, und diese für verschiedene Bereiche von Moodle aktivieren. Allerdings kann pro Seite nur eine Tour erstellt werden.';
$string['tours'] = 'Touren';
$string['usertours'] = 'Nutzertouren';
$string['viewtour_info'] = 'Dies ist die \'{$a->tourname}\' Tour. Sie gehört zum Pfad \'{$a->path}\'.';
