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
 * Strings for component 'factor_webauthn', language 'de', version '4.5'.
 *
 * @package     factor_webauthn
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:manage'] = 'Security Key verwalten';
$string['action:revoke'] = 'Security Key entfernen';
$string['authenticator:ble'] = 'BLE';
$string['authenticator:hybrid'] = 'Hybrid';
$string['authenticator:internal'] = 'Intern';
$string['authenticator:nfc'] = 'NFC';
$string['authenticator:usb'] = 'USB';
$string['authenticatorname'] = 'Name des Sicherheitsschlüssels';
$string['error'] = 'Authentifizierung fehlgeschlagen';
$string['error:alreadyregistered'] = 'Dieser Security Key ist bereits registriert.';
$string['info'] = 'Physikalischen Security Key oder Fingerabdruckscanner verwenden';
$string['logindesc'] = 'Klicken Sie auf "Weiter", um Ihren Security Key zu verwenden.';
$string['loginoption'] = 'Security Key verwenden';
$string['loginskip'] = 'Ich habe meinen Sicherheitsschlüssel nicht.';
$string['loginsubmit'] = 'Weiter';
$string['logintitle'] = 'Bestätigen Sie Ihre Identität per Security Key';
$string['managefactor'] = 'Security Key verwalten';
$string['managefactorbutton'] = 'Verwalten';
$string['manageinfo'] = 'Sie verwenden \'{$a}\' zur Authentifizierung.';
$string['pluginname'] = 'Sicherheitsschlüssel';
$string['privacy:metadata'] = 'Das Faktorplugin \'Sicherheitsschlüssel\' speichert keine personenbezogenen Daten.';
$string['register'] = 'Security Key registrieren';
$string['replacefactor'] = 'Security Key ersetzen';
$string['replacefactorconfirmation'] = 'Security Key \'{$a}\' ersetzen?';
$string['revokefactorconfirmation'] = 'Security Key \'{$a}\' entfernen?';
$string['settings:authenticatortypes'] = 'Art des Authentifikators';
$string['settings:authenticatortypes_help'] = 'Aktivieren und deaktivieren Sie die verschiedenen Arten von Authentifikatoren.';
$string['settings:userverification'] = 'Nutzerbestätigung';
$string['settings:userverification_help'] = 'Dies stellt sicher, dass die Person, die sich authentifiziert, tatsächlich die Person ist, für die sie sich ausgibt. Die Nutzerverifizierung kann verschiedene Formen annehmen, z.B. Kennwort, PIN, Fingerabdruck usw.';
$string['setupfactor'] = 'Security Key einrichten';
$string['setupfactor:instructionsregistersecuritykey'] = '2. Einen Security Key registrieren';
$string['setupfactor:instructionssecuritykeyname'] = '1. Geben Sie Ihrem Security Key einen Namen.';
$string['setupfactor:intro'] = 'Ein Security Key ist ein physisches Gerät, mit dem Sie sich authentifizieren können. Security Key können USB-Token, Bluetooth-Geräte oder in Ihrem Telefon bzw. Computer integrierte Fingerabdruckscanner sein.';
$string['setupfactor:securitykeyinfo'] = 'Dies hilft Ihnen herauszufinden, welchen Security Key Sie verwenden.';
$string['setupfactorbutton'] = 'Einrichten';
$string['setupfactorbuttonadditional'] = 'Sicherheitsschlüssel hinzufügen';
$string['summarycondition'] = 'mit einem von WebAuthn unterstützten Authentifikators';
$string['userverification:discouraged'] = 'Eine Nutzerverifizierung sollte nicht eingesetzt werden, um beispielsweise die Nutzerinteraktion zu minimieren.';
$string['userverification:preferred'] = 'Die Nutzerverifizierung wird bevorzugt. Die Authentifizierung schlägt aber nicht fehl, wenn die Nutzerverifizierung fehlt.';
$string['userverification:required'] = 'Die Nutzerverifizierung ist notwendig (z.B. per PIN). Die Authentifizierung schlägt fehl, wenn für den Sicherheitsschlüssel keine Nutzerverifizierung vorliegt.';
