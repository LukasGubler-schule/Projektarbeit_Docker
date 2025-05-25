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
 * Strings for component 'tiny_multilang2', language 'de', version '4.5'.
 *
 * @package     tiny_multilang2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addlanguage'] = 'Sprache manuell hinzufügen';
$string['addlanguage_desc'] = 'Wenn Sie diese Option wählen, können Sie Sprachen manuell hinzufügen, indem Sie den ISO-Code der Sprache in das nachfolgende Textfeld eingeben. Andernfalls müssen Sie mindestens zwei Sprachen im Sprachpaket installieren.';
$string['helplinktext'] = 'Mehrsprachiger Inhalt (v2)';
$string['highlight'] = 'Trennzeichen hervorheben';
$string['highlight_desc'] = 'Die Trennzeichen für mehrsprachige Inhalte werden im Editor optisch hervorgehoben (z.B. {mlang XX} und {mlang}).';
$string['highlightcss'] = 'CSS für Trennzeichen';
$string['highlightcss_desc'] = 'CSS zum Hervorheben der Trennzeichen für mehrsprachige Inhalte.

Wenn Sie die Sprache anzeigen möchten, die in einem sprachabhängigen Block verwendet wird, kann folgendes CSS verwendet werden. Dieses Beispiel ist für Deutsch. Die Farben sind eventuell nicht optimal gewählt.

<pre>
.multilang-begin:lang(de):before {
    content: "de";
    position: relative;
    top: -0.5em;
    font-weight: bold;
    background-color: #e05e5e;
    color: #ffffff;
}
</pre>';
$string['language_options_desc'] = 'Wählen Sie Optionen für die Taste "Sprache" aus.
                              <br>Die vollständige Liste ist unter <small><a href=\'https://www.w3schools.com/tags/ref_lingual_codes.asp\'>
                              <u>https://www.w3schools.com/tags/ref_lingual_codes.asp</u></a> verfügbar.</small>';
$string['language_setting'] = 'Einstellungen für Sprachtaste';
$string['languageoptions'] = 'Sprache';
$string['multilang2:desc'] = 'Tags für mehrsprachigen Inhalt hinzufügen';
$string['multilang2:langTagsInSelection'] = 'Der ausgewählte Text enthält Sprachtags. Klicken Sie bitte auf einen Tag, um ihn auszuwählen.';
$string['multilang2:language'] = 'Sprache';
$string['multilang2:multiBlockElements'] = 'Der ausgewählte Text erstreckt sich über mehrere Absätze oder Blockelemente. Wählen Sie bitte nur einen Absatz oder ein Blockelement aus.';
$string['multilang2:other'] = 'Andere';
$string['multilang2:removetag'] = 'Sprachtag entfernen';
$string['multilang2:use'] = 'Sprachemenü im Editor nutzen';
$string['multilang2:viewlanguagemenu'] = 'Sprachemenü im Editor anzeigen';
$string['pluginname'] = 'Mehrsprachiger Inhalt (v2)';
$string['privacy:metadata'] = 'Das Plugin "Mehrsprachiger Inhalt (v2)" speichert keine personenbezogenen Daten.';
$string['removealltags'] = 'Alle Sprachtags entfernen';
$string['requiremultilang2'] = 'Filter "Mehrsprachiger Inhalt (v2)" notwendig';
$string['requiremultilang2_desc'] = 'Wenn diese Option aktiviert ist, wird das Sprachmenü im Editor nur angezeigt, wenn der Filter "Mehrsprachiger Inhalt (v2)" aktiv ist.';
$string['showalllangs'] = 'Alle Sprachen anzeigen';
$string['showalllangs_desc'] = 'Wenn diese Option aktiviert ist, werden im Editor alle Sprachen angezeigt, die von Moodle unterstützt werden. Andernfalls werden nur die installierten und aktivierten Sprachen angezeigt.';
