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
 * Strings for component 'atto_styles', language 'de', version '3.10'.
 *
 * @package     atto_styles
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['code_example'] = '{<br />
    "title": "Blue box",<br />
    "type": "block",<br />
    "classes": "box blue",<br />
    "preview": true<br />
}';
$string['code_example_bootstrap'] = '{<br />
    "title": "Success alert",<br />
    "type": "block",<br />
    "classes": "alert alert-success"<br />
}';
$string['code_example_bootstrap_multiple'] = '[{<br />
    "title": "Success alert",<br />
    "type": "block",<br />
    "classes": "alert alert-success"<br />
},{<br />
    "title": "Danger alert",<br />
    "type": "block",<br />
    "classes": "alert alert-danger"<br />
}]';
$string['config'] = 'Gestaltungsvorlagen Konfiguration';
$string['config_desc'] = 'Konfiguration für die Gestaltungsvorlagen in Atto im JSON Format.<br/> Sie können ein ausgiebiges Beispiel in der README.md im Abschnitt <a href="https://github.com/moodle-an-hochschulen/moodle-atto_styles/blob/master/README.md#usage--settings">"Usage & Settings"</a> finden.
<hr />
Beispiel:<br />
{$a->code_example}
<hr />
Das Attribut <em>title</em> bestimmt den Namen der Gestaltungsvorlage.<br />
<br />
Der Titel unterstützt den Mehrsprachen-Filter (falls aktiviert), in diesem Fall müssen doppelte Anführungszeichen aber escaped werden.<br/>
In der README-Datei des Plugins finden Sie ein Beispiel für eine solche Konfiguration.<br />
<hr />
Das Attribut <em>type</em> kann einer der beiden folgenden Werte enthalten: "block" oder "inline".<br />
<br />
"block" wird ein div-Tag mit der/den angegebenen CSS Klasse/n anlegen und sich wie ein Standard Block-Level Element verhalten. Die Gestaltung wird auf das aktuell ausgewählte Block-Level Element angewendet und wirkt sich damit gegebenenfalls auf mehr als den aktuell markierten Text aus.<br />
<br />
"inline" wird ein span-Tag mit der/den angegebenen CSS Klasse/n anlegen und sich wie ein Standard Inline-Element verhalten. Die Gestaltung wird hierbei nur auf den ausgewählten Text angewendet.
<hr />
Im classes Attribut geben Sie dann den CSS Klassennamen, welcher dem Block- / Inline-Element zugewiesen werden soll, an.<br />
<br />
Für eine Gestaltungsvorlage können mehrere CSS Klassen angegeben werden, jeweils getrennt durch Leerzeichen. Dem Block- / Inline-Element werden in diesem Fall alle CSS Klassen zugewiesen.<br />
<br />
Die CSS Klassendefinitionen können leider nicht innerhalb dieses Plugins gesetzt werden. Sie müssen Ihre CSS Klassendefinitionen deswegen zum Design oder mit Hilfe der Funktion "Zusätzliches HTML" zu Moodle hinzufügen.<br />
<br />
<hr />
Das <em>preview</em> Attribut akzeptiert die Werte true und false (was der Standardwert ist). Wenn dieses Attribut auf true gesetzt ist, wird die Gestaltungsvorlage mit einer Vorschau in der Liste der Gestaltungsvorlagen angezeigt. Andernfalls wird die Gestaltungsvorlage nur mit ihrem Titel in der Liste angezeigt.<br />
<br />
Bitte beachten Sie, dass wenn Sie sich entscheiden, die Vorschau für eine Gestaltungsvorlage anzuzeigen, muss diese Klasse im CSS so definiert sein, dass Sie zu span-Tags hinzugefügt werden kann, auch wenn die Gestaltungsvorlage selbst ein Block-Level-Element ist.
<hr />
In Websites, die ein Bootstrap-basiertes Design verwenden (insbesondere <em>Boost</em>), können Sie auch Gestaltungsvorlagen mit Hilfe der Bootstrap CSS Klassen erstellen.
<br /><br />
Beispiel:<br />
{$a->code_example_bootstrap}
<br/><br/>
Für mehr Informationen zu den Bootstrap Klassen. besuchen Sie bitte die folgenden Links in der Bootstrap 4 Dokumentation:
<ul>
<li><a href="https://getbootstrap.com/docs/4.3/components/badge/">Bootstrap badges</a></li>
<li><a href="https://getbootstrap.com/docs/4.3/components/alerts/">Bootstrap alerts</a></li>
<li><a href="https://getbootstrap.com/docs/4.3/utilities/">Bootstrap utilities</a></li>
</ul>
<hr />
Bitte beachten Sie, dass Definitionen mit mehren Stilen mit eckigen Klammern umschlossen sein müssen.
<br /><br />
Zum Beispiel:<br />
{$a->code_example_bootstrap_multiple}';
$string['inlinehint'] = 'Um diesen Stil anzuwenden, müssen Sie Text markieren.';
$string['jsondecodemessage'] = 'Der eingegebene JSON Code ist nicht gültig.';
$string['nostyle'] = 'Ohne Gestaltungsvorlage';
$string['pluginname'] = 'Gestaltungsvorlagen';
$string['privacy:metadata'] = 'Das Plugin atto_styles speichert keine personenbezogenen Daten.';
$string['settings'] = 'Gestaltungsvorlagen';
