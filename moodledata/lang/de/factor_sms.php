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
 * Strings for component 'factor_sms', language 'de', version '4.5'.
 *
 * @package     factor_sms
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:manage'] = 'Mobilnummer verwalten';
$string['action:revoke'] = 'Mobilnummer entfernen';
$string['addnumber'] = 'Mobilnummer';
$string['clientnotfound'] = 'AWS Service Client nicht gefunden. Der Client muss ein vollständig gültiger Classname sein, z.B. \\Aws\\S3\\S3Client';
$string['editphonenumber'] = 'Mobilnummer bearbeiten';
$string['editphonenumberinfo'] = 'Wenn Sie keinen Code bekommen oder die falsche Nummer eingetragen haben, korrigieren Sie bitte die Nummer und versuchen es noch einmal.';
$string['error:emptyverification'] = 'Leerer Code. Versuchen Sie es noch einmal.';
$string['error:wrongphonenumber'] = 'Die eingegebene Mobilnummer hat kein gültiges Format.';
$string['error:wrongverification'] = 'Falscher Code. Versuchen Sie es noch einmal.';
$string['errorawsconection'] = 'Fehler beim Verbinden zum AWS-Server: {$a}';
$string['errorsmssent'] = 'Fehler beim Senden einer SMS-Nachricht mit Ihrem Bestätigungscode.';
$string['event:smssent'] = 'SMS-Nachricht gesendet';
$string['event:smssentdescription'] = 'An Nutzerin {$a->userid} wurde ein Bestätigungscode per SMS gesendet. <br> Informationen: {$a->debuginfo}';
$string['info'] = 'Lassen Sie sich einen Bestätigungscode an die von Ihnen gewählte Mobilnummer senden.';
$string['logindesc'] = 'Eine SMS mit einem 6-stelligen Code wurde an die Mobilnummer {$a} gesendet';
$string['loginoption'] = 'Ein Code wurde an Ihr Mobilphone gesendet';
$string['loginskip'] = 'Ich habe keinen Code erhalten';
$string['loginsubmit'] = 'Weiter';
$string['logintitle'] = 'Geben Sie den Bestätigungscode ein, der an Ihr Mobilphone gesendet wurde.';
$string['managefactor'] = 'SMS verwalten';
$string['managefactorbutton'] = 'Verwalten';
$string['manageinfo'] = 'Sie verwenden \'{$a}\' zur Authentifizierung.';
$string['notification:smsgatewaymigration'] = 'SMS-Einstellungen wurden verschoben';
$string['notification:smsgatewaymigrationinfo'] = 'Für die Verwaltung und Konfiguration aller SMS-bezogenen Funktionen steht nun ein neues SMS-Subsystem zur Verfügung. Ihre vorhandenen SMS-Konfigurationen wurden auf die Seite <a href="{$a}">SMS-Gateways</a> migriert.';
$string['phonehelp'] = 'Geben Sie Ihre Mobilnummer (zusammen mit dem Ländercode) ein, an die ein Bestätigungscode gesendet werden soll.';
$string['pluginname'] = 'SMS Mobilphone';
$string['privacy:metadata'] = 'Das Faktorplugin SMS Mobilphone speichert keine personenbezogenen Daten.';
$string['revokefactorconfirmation'] = '\'{$a}\'-SMS entfernen?';
$string['settings:aws'] = 'AWS SMS';
$string['settings:aws:key'] = 'Schlüssel';
$string['settings:aws:key_help'] = 'Anmeldeinformationen für den Amazon-API-Schlüssel.';
$string['settings:aws:region'] = 'Region';
$string['settings:aws:region_help'] = 'Amazon API-Gateway-Region.';
$string['settings:aws:secret'] = 'Secret';
$string['settings:aws:secret_help'] = 'Anmeldeinformationen für das Amazon-API-Secret';
$string['settings:aws:usecredchain'] = 'Verwenden Sie die Standardanbieterkette, um AWS-Anmeldeinformationen zu finden';
$string['settings:countrycode'] = 'Ländercode';
$string['settings:countrycode_help'] = 'Der Ländercode ohne das führende + als Standard, wenn Nutzer/innen selber keine internationale Nummer mit + und Ländercode angeben.

Liste mit Ländercodes: {$a}';
$string['settings:duration'] = 'Gültigkeitsdauer';
$string['settings:duration_help'] = 'Zeitdauer, in der der Code gültig ist.';
$string['settings:gateway'] = 'SMS-Gateway';
$string['settings:gateway_help'] = 'SMS-Provider, über den Nachrichten gesendet werden sollen.';
$string['settings:heading'] = 'Nutzer/innen erhalten beim Anmelden eine SMS mit einem 6-stelligen Code, den sie eingeben müssen, um den Anmeldevorgang abzuschließen.

Nutzer/innen müssen dazu zuerst ihre Mobiltelefonnummer registrieren.';
$string['settings:setupdesc'] = 'Um SMS als Authentifizierungsfaktor zu verwenden, müssen Sie zuerst <a href="{$a}">ein SMS-Gateway einrichten</a>.';
$string['settings:smsgateway'] = 'SMS-Gateway';
$string['settings:smsgateway_help'] = 'Wählen Sie ein Gateway aus der Liste oder <a href="{$a}">erstellen Sie ein neues Gateway</a>.';
$string['setupfactor'] = 'SMS einrichten';
$string['setupfactorbutton'] = 'Einrichten';
$string['setupsubmitcode'] = 'Speichern';
$string['setupsubmitphone'] = 'Code senden';
$string['smsstring'] = '{$a->code} ist Ihr einmaliger {$a->fullname}-Sicherheitscode.

@{$a->url} #{$a->code}';
$string['summarycondition'] = 'Verwendung eines einmaligen SMS-Sicherheitscodes';
