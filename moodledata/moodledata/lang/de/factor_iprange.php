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
 * Strings for component 'factor_iprange', language 'de', version '4.5'.
 *
 * @package     factor_iprange
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedipsempty'] = 'Niemand wird aktuell diesen Faktor bestehen. Sie können Ihre eigene IP-Adresse <i>{$a->ip}</i> hinzufügen.';
$string['allowedipshasmyip'] = 'Ihre IP-Adresse <i>{$a->ip}</i> steht in der Liste und Sie werden diesen Faktor bestehen.';
$string['allowedipshasntmyip'] = 'Ihre IP-Adresse <i>{$a->ip}</i> steht nicht in der Liste und Sie werden diesen Faktor nicht bestehen.';
$string['pluginname'] = 'IP-Bereich';
$string['privacy:metadata'] = 'Das Faktorplugin \'IP-Bereich\' speichert keine personenbezogenen Daten.';
$string['settings:safeips'] = 'Sichere IP-Bereiche';
$string['settings:safeips_help'] = 'Geben Sie eine Liste von IP-Adressen oder Subnetzen an, die als Zugangsfaktor gelten sollen. Wenn die Liste leer ist, wird niemand diesen Faktor bestehen. {$a->info} {$a->syntax}';
$string['summarycondition'] = 'ist innerhalb eines gesicherten Netzwerks';
