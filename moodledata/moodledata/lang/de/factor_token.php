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
 * Strings for component 'factor_token', language 'de', version '4.5'.
 *
 * @package     factor_token
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['event:token_created'] = 'MFA-Token erzeugt';
$string['form:trust'] = 'Dieses Gerät ist vertrauensvoll bis {$a}.';
$string['pluginname'] = 'Vertrauensvolles Gerät';
$string['privacy:metadata'] = 'Das Faktorplugin \'vertrauensvolles Gerät\' speichert keine personenbezogenen Daten.';
$string['settings:expireovernight'] = 'Vertrauensstellung in der Nacht ablaufen lassen';
$string['settings:expireovernight_help'] = 'Diese Option erzwingt das Ablaufen von Tokens in der Nacht, um Unterbrechungen am Tag zu vermeiden. Die MFA-Authentifizierung  wird dann zu Beginn des nächsten Tages eingefordert.';
$string['settings:expiry'] = 'Vertrauensdauer';
$string['settings:expiry_help'] = 'Zeitraum, in dem ein Gerät als vertrauensvoll angesehen wird, bevor es eine neue Multi-Faktor-Authentifizierung benötigt.';
$string['summarycondition'] = 'Nutzer/in hat das Gerät bereits als vertrauensvoll bestätigt.';
$string['tokenstoredindevice'] = 'Nutzer/in mit der ID {$a->userid} hat ein Token zur Multi-Faktor-Authentifizierung auf diesem Gerät gespeichert. <br>Informationen: {$a->string}.';
