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
 * Strings for component 'aiprovider_openai', language 'de', version '4.5'.
 *
 * @package     aiprovider_openai
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:generate_image:endpoint'] = 'API-Endpunkt';
$string['action:generate_image:model'] = 'KI-Modell';
$string['action:generate_image:model_desc'] = 'Das Modell, das zur Erzeugung von Bildern aus Prompts der Nutzer/innen verwendet wird.';
$string['action:generate_text:endpoint'] = 'API-Endpunkt';
$string['action:generate_text:model'] = 'KI-Modell';
$string['action:generate_text:model_desc'] = 'Modell, das zum Generieren von Texten aus einem Textprompt verwendet wird.';
$string['action:generate_text:systeminstruction'] = 'Systemanweisung';
$string['action:generate_text:systeminstruction_desc'] = 'Diese Anweisung wird zusammen mit dem Nutzerprompt an das KI-Modell gesendet. Es wird nicht empfohlen, diese Anweisung zu verändern, es sei denn, dies ist unbedingt erforderlich.';
$string['action:summarise_text:endpoint'] = 'API-Endpunkt';
$string['action:summarise_text:model'] = 'KI-Modell';
$string['action:summarise_text:model_desc'] = 'Modell, das zum Zusammenfassen von Texten aus einem Textprompt verwendet wird.';
$string['action:summarise_text:systeminstruction'] = 'Systemanweisung';
$string['action:summarise_text:systeminstruction_desc'] = 'Diese Anweisung wird zusammen mit dem Nutzerprompt an das KI-Modell gesendet. Es wird nicht empfohlen, diese Anweisung zu verändern, es sei denn, dies ist unbedingt erforderlich.';
$string['apikey'] = 'OpenAI API-Key';
$string['apikey_desc'] = 'Holen Sie sich einen Key von Ihren <a href="https://platform.openai.com/account/api-keys" target="_blank">OpenAI-API-Keys</a>.';
$string['enableglobalratelimit'] = 'Systemweite Ratenbegrenzung festlegen';
$string['enableglobalratelimit_desc'] = 'Begrenzen Sie die Anzahl der Anfragen, die beim OpenAI-API-Provider pro Stunde systemweit eingehen dürfen.';
$string['enableuserratelimit'] = 'Nutzerbezogene Ratenbegrenzung festlegen';
$string['enableuserratelimit_desc'] = 'Begrenzen Sie die Anzahl der Anfragen, die beim OpenAI-API-Provider pro Stunde und pro Nutzer/in eingehen dürfen.';
$string['globalratelimit'] = 'Maximale Anzahl von systemweiten Anfragen';
$string['globalratelimit_desc'] = 'Anzahl der Anfragen, die pro Stunde systemweit zulässig sind.';
$string['orgid'] = 'OpenAI Organisations-ID';
$string['orgid_desc'] = 'Holen Sie Ihre OpenAI Organisations-ID über Ihr <a href="https://platform.openai.com/account/org-settings" target="_blank">OpenAI Nutzerkonto</a>.';
$string['pluginname'] = 'OpenAI API-Anbieter';
$string['privacy:metadata'] = 'Das Plugin OpenAI-API-Provider speichert keine personenbezogenen Daten.';
$string['privacy:metadata:aiprovider_openai:externalpurpose'] = 'Diese Informationen werden an die OpenAI-API gesendet, damit eine Antwort generiert werden kann. Ihre OpenAI-Kontoeinstellungen können festlegen, wie OpenAI diese Daten speichert und aufbewahrt. Von diesem Plugin werden explizit keine Nutzerdaten an OpenAI gesendet oder in Moodle LMS gespeichert.';
$string['privacy:metadata:aiprovider_openai:model'] = 'Modell, das zum Generieren der Antwort verwendet wird';
$string['privacy:metadata:aiprovider_openai:numberimages'] = 'Anzahl der Bilder, die zum Generieren von Bildern für die Antwort verwendet wurden';
$string['privacy:metadata:aiprovider_openai:prompttext'] = 'Eingegebener Textprompt, der zum Generieren der Antwort verwendet wurde.';
$string['privacy:metadata:aiprovider_openai:responseformat'] = 'Format der Antwort, wenn  Bilder generiert werden.';
$string['userratelimit'] = 'Maximale Anzahl von Anfragen pro Nutzer/in';
$string['userratelimit_desc'] = 'Anzahl der Anfragen, die pro Stunde und pro Nutzer/in zulässig sind.';
