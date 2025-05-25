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
 * Strings for component 'filter_multilang2', language 'de', version '4.5'.
 *
 * @package     filter_multilang2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['filtername'] = 'Mehrsprachiger Inhalt (v2)';
$string['parentlangalwaysen'] = 'Immer übergeordnete Sprachen verwenden, einschließlich "en".';
$string['parentlangbehaviour'] = 'Verhalten von übergeordneten Sprachen';
$string['parentlangbehaviour_desc'] = '<p>Der Filter bestimmt, ob ein Sprachblock angezeigt werden soll,
basierend auf den im Block angegebenen Sprachen und der aktuell verwendeten
Sprache ("Aktuelle Sprache von Nutzer/in). Dieser Abgleichprozess kann drei verschiedenen
Ansätzen folgen, die als "<em>Verhalten von übergeordneten Sprachen</em>" bezeichnet werden:</p>
<ol>
<li><b>Immer übergeordnete Sprachen verwenden, ausgenommen "en".</b>
<ul>
<li>Dies ist die Standardeinstellung. Der Filter berücksichtigt die im Tag <code>{mlang
...}</code> des Sprachblocks aufgeführten
Sprachen und alle ihre übergeordneten Sprachen (bis zur Stammsprache <code>en</code>, jedoch nicht einschließlich).</li>
<li>Beispiel: Wenn ein Sprachblock <code>{mlang
en_us_k12}</code> angibt, wird er nur angezeigt, wenn die aktuelle Sprache der Nutzer/in <code>en_us_k12</code> oder <code>en_us</code> ist, aber nicht <code>en</code>.</li>
<li>Hinweis: Englisch kann im Sprachblock weiterhin explizit verwendet werden. Beispiel: <code>{mlang en}Dieser Text wird angezeigt,
wenn die aktuelle Sprache der Nutzer/in "en" ist.{mlang}</code> zeigt den Inhalt an, wenn die aktuelle Sprache der Nutzer/in <code>en</code> ist.</li>
</ul>
</li>
<li><b>Immer übergeordnete Sprachen verwenden, einschließlich "en".</b>
<ul>
<li>Diese Einstellung funktioniert wie die vorherige, schließt jedoch die Stammsprache <code>en</code> als gültige übergeordnete Sprache ein.</li>
<li>Beispiel: Wenn ein Sprachblock <code>{mlang
en_us_k12}</code> angibt, wird er nur angezeigt, wenn die aktuelle Sprache der Nutzer/in entweder <code>en_us_k12</code>,<code>en_us</code> oder <code>en</code> ist.</li>
</ul>
</li>
<li><b>Verwenden Sie niemals übergeordnete Sprachen.</b>
<ul>
<li>Wie der Name schon sagt, werden keine übergeordneten Sprachen verwendet. Der Filter stimmt nur mit den im Sprachblock explizit aufgeführten Sprachen überein, ohne übergeordnete Sprachen zu berücksichtigen.</li>
<li>Beispiel: Wenn ein Sprachblock <code>{mlang
en_us_k12}</code> angibt, wird er nur angezeigt, wenn die aktuelle Sprache der Nutzer/in <code>en_us_k12</code> ist, nicht <code>en_us</code> oder <code>en</code>.
</li>
</ul>
</li>
</ol>';
$string['parentlangdefault'] = 'Immer übergeordnete Sprachen verwenden, außer "en" (traditionelles Verhalten).';
$string['parentlangnever'] = 'Nie übergeordnete Sprachen verwenden';
$string['pluginname'] = 'Filter Mehrsprachiger Inhalt (v2)';
$string['privacy:metadata'] = 'Der Filter "Mehrsprachiger Inhalt (v2)" speichert keine personenbezogenen Daten.';
