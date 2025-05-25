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
 * Strings for component 'tool_certification', language 'de', version '4.5'.
 *
 * @package     tool_certification
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['certified'] = 'Zertifiziert';
$string['conditioncertificationsuspended'] = 'Zertifizierung gesperrt';
$string['conditioncertificationsuspendeddescription'] = 'Nutzer/in, ist in der Zertifizierung \'{$a}\' gesperrt';
$string['conditioncertificationsuspendeddescriptionwithdate'] = 'Nutzer/in, ist in der Zertifizierung \'{$a->fullname}\' gesperrt<br />
Sperrdatum ist am oder nach \'{$a->conditiondate}\'';
$string['expired'] = 'Abgelaufen';
$string['outcomeallocationdescdate'] = 'Nutzer/innen der Zertifizierung {$a->certificationname} zuweisen<br />
{$a->startdatestr}<br />
Mit gesperrten Nutzer/innen: {$a->suspendedusers}';
$string['outcomeallocationsuspendedusers'] = 'gesperrte Nutzer/innen einbeziehen';
$string['outcomeallocationsuspendedusers_help'] = 'Auszuführende Aktion, wenn Nutzer/innen bereits zugewiesen sind, aber ihre Zuweisung gesperrt oder beendet wurde';
$string['privacy:metadata:certification_users:status'] = 'Gesperrte Nutzer/innen in der Zertifizierung einbeziehen';
$string['suspended'] = 'Gesperrt';
$string['suspendeddateisonorafter'] = 'Sperrdatum am oder nach dem';
$string['timesuspended'] = 'Gesperrt am';
$string['usergotsuspended'] = 'Nutzer/in wurde gesperrt';
$string['userstatus_help'] = 'Der Status "gesperrt" blendet diese Zertifizierung vor dieser Person aus, während der Status "Standard" die Zertifizierung anzeigt.';
