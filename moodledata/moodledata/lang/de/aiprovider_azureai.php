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
 * Strings for component 'aiprovider_azureai', language 'de', version '4.5'.
 *
 * @package     aiprovider_azureai
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action_apiversion'] = 'API-Version';
$string['action_deployment'] = 'Bereitstellungs-ID';
$string['action_deployment_desc'] = 'Deployment-ID, die sich auf den API-Endpunkt bezieht, den der Provider für diese Aktion verwendet.';
$string['action_systeminstruction'] = 'Systemanweisung';
$string['action_systeminstruction_desc'] = 'Diese Anweisung wird zusammen mit dem Nutzerprompt an das KI-Modell gesendet. Es wird nicht empfohlen, diese Anweisung zu verändern, es sei denn, dies ist unbedingt erforderlich.';
$string['apikey'] = 'AzureAI-API-Key';
$string['apikey_desc'] = 'Geben Sie Ihren AzureAI-API-Key ein';
$string['deployment'] = 'Azure AI API-Bereitstellungsname';
$string['deployment_desc'] = 'Geben Sie den Bereitstellungsnamen Ihrer Azure AI API ein.';
$string['enableglobalratelimit'] = 'Systemweite Ratenbegrenzung festlegen';
$string['enableglobalratelimit_desc'] = 'Begrenzen Sie die Anzahl der Anfragen, die beim AzureAI-API-Provider pro Stunde systemweit eingehen dürfen.';
$string['enableuserratelimit'] = 'Nutzerbezogene Ratenbegrenzung festlegen';
$string['enableuserratelimit_desc'] = 'Begrenzen Sie die Anzahl der Anfragen, die beim AzureAI-API-Provider pro Stunde und pro Nutzer/in eingehen dürfen.';
$string['endpoint'] = 'AzureAI-API-Endpunkt';
$string['endpoint_desc'] = 'Geben Sie die Endpunkt-URL für Ihre AzureAI-API in der nachfolgenden Form ein: https://your_resource_name.azureai.azure.com';
$string['globalratelimit'] = 'Maximale Anzahl systemweiter Anfragen';
$string['globalratelimit_desc'] = 'Anzahl der Anfragen, die pro Stunde systemweit zulässig sind.';
$string['pluginname'] = 'Azure-KI-API-Anbieter';
$string['privacy:metadata'] = 'Das Plugin Azure-API-Anbieter speichert keine personenbezogenen Daten.';
$string['privacy:metadata:aiprovider_azureai:externalpurpose'] = 'Diese Informationen werden an die Azure-API gesendet, damit eine Antwort generiert werden kann. Ihre Azure-Kontoeinstellungen können festlegen, wie Microsoft diese Daten speichert und aufbewahrt. Von diesem Plugin werden explizit keine Nutzerdaten an Microsoft gesendet oder in Moodle LMS gespeichert.';
$string['privacy:metadata:aiprovider_azureai:model'] = 'Modell, das zum Generieren der Antwort verwendet wird.';
$string['privacy:metadata:aiprovider_azureai:numberimages'] = 'Anzahl der Bilder, die zum Generieren von Bildern für die Antwort verwendet wurden.';
$string['privacy:metadata:aiprovider_azureai:prompttext'] = 'Eingegebener Textprompt, der zum Generieren der Antwort verwendet wurde.';
$string['privacy:metadata:aiprovider_azureai:responseformat'] = 'Format der Antwort, wenn  Bilder generiert werden.';
$string['userratelimit'] = 'Maximale Anzahl von Anfragen pro Nutzer/in';
$string['userratelimit_desc'] = 'Anzahl der Anfragen, die pro Stunde und pro Nutzer/in zulässig sind.';
