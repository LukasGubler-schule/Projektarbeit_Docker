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
 * Strings for component 'factor_grace', language 'de', version '4.5'.
 *
 * @package     factor_grace
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['info'] = 'Diese Option erlaubt die Anmeldung während eines angegebenen Zeitraums ohne weitere Faktoren.';
$string['pluginname'] = 'Kulanzzeit';
$string['preferences'] = 'Nutzerpräferenzen';
$string['privacy:metadata'] = 'Das Faktorplugin \'Kulanzzeit\' speichert keine personenbezogenen Daten.';
$string['redirectsetup'] = 'Sie müssen die Multi-Faktor-Authentifizierung vollständig einrichten, bevor Sie weitermachen können.';
$string['revokeexpiredfactors'] = 'Abgelaufene Kulanzzeit-Faktoren widerrufen';
$string['settings:customwarning'] = 'Inhalt des Warnfeldes';
$string['settings:customwarning_help'] = 'Fügen Sie hier einen Text ein, um die standardmäßige Warnung zur Kulanzzeit zu ersetzen. Mit dem Parameter {timeremaining} im Text wird die aktuelle Kulanzzeit der Person eingesetzt, mit dem Parameter {setuplink} die URL zur jeweiligen Einstellungsseite.';
$string['settings:forcesetup'] = 'Faktoreinrichtung erzwingen';
$string['settings:forcesetup_help'] = 'Diese Option zwingt eine Person dazu, die  Multi-Faktor-Authentifizierung einzurichten, wenn deren Kulanzzeit abläuft. Falls diese Option deaktiviert ist, können sich Personen nach Ablauf der Kulanzzeit nicht mehr anmelden.';
$string['settings:graceperiod'] = 'Kulanzzeit';
$string['settings:graceperiod_help'] = 'Zeitdauer, in der Nutzer/innen auf Moodle zugreifen können, ohne Faktoren konfiguriert und aktiviert zu haben.';
$string['settings:ignorelist'] = 'Ignorierte Faktoren';
$string['settings:ignorelist_help'] = 'Die Kulanzzeit vergibt keine Punkte, wenn andere Faktoren zur Multi-Faktor-Authentifizierung verwendet werden können. Mit der Kulanzzeit kann eine Authentifizierung vorübergehend zugelassen werden, wenn bei einem anderen Faktor wie E-Mail Konfigurations- oder Systemprobleme auftreten.';
$string['setupfactors'] = 'Sie sind aktuell in der Kulanzzeit. Möglicherweise haben Sie nicht genügend Faktoren eingerichtet, um sich nach Ablauf der Kulanzzeit weiter anmelden zu können. Überprüfen Sie Ihren Authentifizierungsstatus auf der Seite {$a->url} und richten Sie weitere Authentifizierungsfaktoren ein. Ihre Kulanzzeit läuft in {$a->time} ab.';
$string['summarycondition'] = 'ist innerhalb der Kulanzzeit';
