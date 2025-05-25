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
 * Strings for component 'local_aiquestions', language 'de', version '4.5'.
 *
 * @package     local_aiquestions
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aiquestions'] = 'KI-Fragen';
$string['backtocourse'] = 'Zurück zum Kurs';
$string['createdquestionssuccess'] = 'Fragen erfolgreich erstellt';
$string['createdquestionsuccess'] = 'Frage erfolgreich erstellt';
$string['createdquestionwithid'] = 'Frage mit ID erstellt';
$string['cronoverdue'] = 'Die Cron-Task scheint nicht zu laufen. Die Erzeugung von Fragen benötigt eine AdHoc-Task, der von der Cron-Task erstellt wird. Überprüfen Sie bitte die Einstellungen zum Cron.
Mehr Informationen finden Sie unter <a href="https://docs.moodle.org/en/Cron#Setting_up_cron_on_your_system">
https://docs.moodle.org/en/Cron#Setting_up_cron_on_your_system</a>.';
$string['errornotcreated'] = 'Fehler: Fragen wurden nicht erstellt';
$string['generate'] = 'Fragen erzeugen';
$string['generatemore'] = 'Weitere Fragen erzeugen';
$string['generating'] = 'Ihre Fragen werden erzeugt ... Sie können die Seite problemlos verlassen und die Fragensammlung später anzeigen lassen.';
$string['generationfailed'] = 'Das Erzeugen der Fragen ist nach {$a} Versuchen fehlgeschlagen.';
$string['generationtries'] = 'Anzahl der an OpenAI gesendeten Versuche: <b>{$a}</b>';
$string['gotoquestionbank'] = 'Zur Fragensammlung';
$string['language'] = 'Sprache';
$string['languagedesc'] = 'Wählen Sie die Sprache, die zum Erzeugen der Fragen verwendet werden soll.<br>
Beachten Sie, dass einige Sprachen von ChatGPT weniger gut unterstützt werden als andere.';
$string['numofquestions'] = 'Anzahl der Fragen';
$string['numofquestionsdesc'] = 'Wählen Sie die Anzahl der jeweils zu erzeugenden Fragen';
$string['numoftries'] = '<b>{$a}</b> Versuche';
$string['numoftriesdesc'] = 'Geben Sie an, wie häufig eine Übertragung an OpenAI versucht werden soll';
$string['numoftriesset'] = 'Anzahl der Versuche';
$string['openaikey'] = 'OpenAI API-Schlüssel';
$string['openaikeydesc'] = 'Geben Sie Ihren OpenAI API-Schlüssel an<br>
Sie können Ihren API-Schlüssel über die folgende Adresse erstellen: <a href="https://platform.openai.com/account/api-keys">https://platform.openai.com/account/api-keys</a><br>
Wählen Sie dort den Button "+ Create New Secret Key" und kopieren Sie den Schlüssel in dieses Eingabefeld.<br>
Beachten Sie, dass in Ihrem OpenAI-Konto eine Zahlungsmethode hinterlegt sein muss, um einen API-Schlüssel zu generieren.';
$string['outof'] = 'von';
$string['personalprompt'] = 'Persönlicher Prompt';
$string['personalpromptdesc'] = 'Geben Sie Ihren persönlichen Prompt ein. Ein Prompt ist die Erklärung für ChatGPT, wie die Fragen zu erstellen sind.<br>
Der Prompt sollte die folgenden beiden Platzhalter beinhalten: {{numofquestions}} and {{language}}';
$string['pluginname'] = 'KI-Fragen-aus-Text-Generator';
$string['pluginname_desc'] = 'Dieses Plugin erlaubt Ihnen, Fragen aus einem Text zu generieren';
$string['pluginname_help'] = 'Rufen Sie das Plugin aus dem Menü zur Kurs-Administration auf';
$string['preview'] = 'Vorschau der Fragen in neuem Tab';
$string['privacy:metadata'] = 'Dieser KI-Fragen-aus-Text-Generator speichert keine personenbezogenen Daten.';
$string['story'] = 'Text';
$string['storydesc'] = 'Geben Sie hier Ihren Text ein';
$string['tasksuccess'] = 'Die Task zum Erzeugen der Fragen wurde erfolgreich erstellt.';
$string['usepersonalprompt'] = 'Persönlichen Prompt verwenden';
$string['usepersonalpromptdesc'] = 'Wählen Sie hier aus, ob Ihr persönlicher Prompt verwendet werden soll.';
