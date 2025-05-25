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
 * Strings for component 'qbehaviour_deferredcbm', language 'de_ch', version '3.10'.
 *
 * @package     qbehaviour_deferredcbm
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cbmgrades_help'] = 'Jede richtige Antwort mit dem Wert C=1 (geringe Gewissheit) führt zu einer 100% Bewertung bei der Gewissheits-basierten Bewertung (Certainty Based Marking = CBM). Die Bewertung der Frage kann auch dreimal so hoch sein, wenn die richtige Antwort mit hoher Gewissheit (C=3) verbunden ist. Fehleinschätzungen bei der Gewissheit über die Antwort beeinflussen die Bewertung sehr viel stärker als die Angabe von Unsicherheit.

**Genauigkeit** ist der Prozentsatz richtiger Antworten, wobei die Gewissheit ignoriert, aber die Höchstnote jeder Frage gewichtet wird. Die erfolgreiche Unterscheidung zwischen mehr und weniger zuverlässigen Antworten ergibt eine bessere Note als die Auswahl der gleichen Gewissheit für jede Frage. Dies spiegelt sich im **CBM-Bonus** wider. **Genauigkeit** + **CBM-Bonus** ist ein besseres Mass für Wissen als **Genauigkeit**. Missverständnisse können zu einem negativen Bonus führen, einer Warnung, sich genau anzusehen, was bekannt ist und was nicht.';
