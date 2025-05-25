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
 * Strings for component 'cachestore_apcu', language 'de', version '4.5'.
 *
 * @package     cachestore_apcu
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clusternotice'] = 'Beachten Sie, dass APCu nur für single node Seiten oder Caches gültig ist, die lokal gespeichert werden können.
Siehe <a href="{$a}">APC user cache documentation</a> für mehr Informationen.';
$string['notice'] = 'Nachricht';
$string['pluginname'] = 'APC Nutzer Cache (APCu)';
$string['prefix'] = 'Präfix';
$string['prefix_help'] = 'Das o.g. Prefix wird für alle in dieser APC-Instanz gespeicherten Keys verwendet. Als Standard wird das Prefix der Datenbank verwendet.';
$string['prefixinvalid'] = 'DAs von Ihnen gewählte Präfix ist ungültig. Sie können nur  a-z A-Z 0-9-_ nutzen.';
$string['prefixnotunique'] = 'Das von Ihnen gewählte Präfix ist nicht einmalig. Bitte wähle Sie ein einmaliges Präfix.';
$string['privacy:metadata'] = 'Das APC Nutzercache (uAPC) speichert Daten kurzfristig für das Cachig. Die Daten werden dann gelöscht und nicht weitergeleitet.';
$string['testperformance'] = 'Test-Performance';
$string['testperformance_desc'] = 'Bei Aktivierung werden die APCu-Ergebnisse mit angezeigt, wenn man die Seite für Testergebnisse öffnet. Es wird nicht empfohlen dies auf einer Produktionsseite zu aktivieren.';
