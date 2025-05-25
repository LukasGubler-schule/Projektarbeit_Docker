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
 * Strings for component 'factor_capability', language 'de', version '4.5'.
 *
 * @package     factor_capability
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['capability:cannotpassfactor'] = 'Zur Authentifizierung muss ein anderer Faktor in MFA verwendet werden';
$string['pluginname'] = 'Nutzerrecht';
$string['privacy:metadata'] = 'Das Faktorplugin \'Nutzerrecht\' speichert keine personenbezogenen Daten.';
$string['settings:adminpasses'] = 'Administrator/innen der Website können diesen Faktor bestehen';
$string['settings:adminpasses_help'] = 'Standardmäßig haben Administrator/innen alle Rechte, einschließlich dem Recht "factor/capability:cannotpassfactor", was bedeutet, dass sie diesen Faktor nicht bestehen.
     Wenn diese Option aktiviert ist, erfüllen alle Administrator/innen diesen Faktor, wenn sie diese Fähigkeit nicht von einer anderen Rolle aus haben.
     Wenn dies nicht der Fall ist, werden Administrator/innen diesen Faktor nie erfüllen.';
$string['summarycondition'] = 'verfügt NICHT über das Recht "factor/capability:cannotpassfactor", u.z. in keiner Rolle einschließlich Administrator/in.';
