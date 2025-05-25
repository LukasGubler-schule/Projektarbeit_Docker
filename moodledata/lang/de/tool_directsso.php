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
 * Strings for component 'tool_directsso', language 'de', version '4.5'.
 *
 * @package     tool_directsso
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Direkter SSO Einsprungpunkt';
$string['privacy:metadata'] = 'Das \'Plugin \'Direkter SSO Einsprungpunkt\' speichert keine personenbezogene Daten.';
$string['setting_allowedauths'] = 'Erlaubte Authentifizierungs-Plugins';
$string['setting_allowedauths_desc'] = 'Mit dieser Einstellung steuern Sie, ob eine Authentifizierungs-Methode mit einem direkten SSO Einsprungpunkt genutzt werden kann oder nicht. Bitte beachten Sie, dass nicht alle installierten und aktivierten Authentifizierungs-Methoden hier verfügbar sind,. Nur ausgewählte Authentifizierungs-Methoden, zu denen eine Unterstützung in dieses Plugin integriert wurde, stehen zur Verfügung.';
$string['setting_allowedwantspages'] = 'Erlaubte Weiterleitungs-Ziele';
$string['setting_allowedwantspages_desc'] = 'Mit dieser Einstellung steuern Sie, wohin Nutzer/innen vom direkten SSO Einsprungspunkt aus hin weitergeleitet werden. Bitte beachten Sie, dass Nutzer/innen nur zu ausgewählten Moodle-Seiten und keineswegs zu jeder beliebigen URL innerhalb von Moodle weitergeleitet werden können.';
$string['setting_configurationheading'] = 'Konfiguration';
$string['setting_explanationstatic_desc'] = 'Dieses Plugin stellt einen Einsprungpunkt bereit, welcher als persistente URL genutzt werden kann, zu der externe Websites Nutzer/innen weiterleiten können. Im Rahmen der Weiterleitung werden Nutzer/innen direkt mit den Moodle SSO Mechanismen eingeloggt, ohne die Loginseite zu sehen und insbesondere ohne den SSO Button auf der Loginseite klicken zu müssen.';
$string['setting_introductionheading'] = 'Einführung';
$string['setting_usableurls_none'] = 'Keine';
$string['setting_usableurlsheading'] = 'Nutzbare URLs';
$string['setting_usableurlsintro_desc'] = '<p>Die Einsprungpunkt-URLs setzen sich aus mehreren Elementen zusammen:</p>
<ul><li>Die Domain der Moodle Instanz</li><li>Der Pfad zum PHP Skript des Einsprungpunkts</li><li>Der auth Parameter welcher angibt welche Authentifizierungs-Methode angefordert wird</li><li>Der wantspage Parameter welcher angibt zu welcher Seite der Nutzer nach dem SSO Login weitergeleitet werden soll</li><li>Falls die angeforderte Authentifizierungs-Methode die Konfiguration mehrerer Authentifizierungs-Backends unterstützt: Der id Parameter welcher die ID des Authentifizierungs-Backends angibt</li><li>Falls Sie \'Kurs\' als Weiterleitungs-Ziel aktiviert haben: Der courseide Parameter welcher die konkrete Kurs ID angibt zu welchem der Nutzer weitergeleitet werden soll</li></ul>';
$string['setting_usableurlslist_desc'] = 'Basierend auf der obigen gespeicherten Konfiguration sind folgende Einsprungpunkt-URLs aktuell nutzbar:';
