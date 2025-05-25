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
 * Strings for component 'quizaccess_ipaddresslist', language 'de', version '4.5'.
 *
 * @package     quizaccess_ipaddresslist
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addsubnet'] = 'Ort hinzufügen';
$string['allowedsubnets'] = 'Erlaubte Orte';
$string['allowedsubnets_help'] = 'Zugriff auf das Quiz kann aufgrund der IP-Adressen auf bestimmte Orte eingeschränkt werden. Die Liste der Orte und zugehöriger IP Adressen wird vom Administrator definiert. Wählen Sie keine Option, um diese Restriktion zu deaktivieren.';
$string['editsubnet'] = 'Orte bearbeiten';
$string['managesubnets'] = 'Orte verwalten';
$string['pluginname'] = 'Zuriffsbeschränkung für Test über IP-Adressen';
$string['subnet'] = 'IP-Subnet';
$string['subnet_help'] = 'Geben Sie die IP-Adressen vollständig oder teilweise als kommagetrennte Liste an.

Beispiele:

* 192.168.10.1
* 192.168.
* 231.54.211.0/20
* 231.3.56.10-20
* 192.168.10.1,192.168.,231.54.211.0/20,231.3.56.10-20';
$string['subnetwrong'] = 'Dieser Test ist nur an bestimmten Computern zugänglich, und dieser Computer ist nicht auf der Liste.';
