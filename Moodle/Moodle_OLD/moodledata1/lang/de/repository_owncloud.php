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
 * Strings for component 'repository_owncloud', language 'de', version '3.10'.
 *
 * @package     repository_owncloud
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['both'] = 'Intern und Extern';
$string['cannotconnect'] = 'Verbindung mit ownCloud konnte nicht hergestellt werden. Bitte loggen Sie sich ein und laden Sie anschließend die Datei hoch.';
$string['chooseissuer'] = 'OAuth 2-Service';
$string['chooseissuer_help'] = 'Ein neuer Service kann unter der Seite OAuth 2-Services im Administrationsbereich hinzugefügt werden.<br>
Weitere Hilfe zur OAuth 2-API erhalten Sie in der Moodle-Dokumentation.';
$string['configplugin'] = 'ownCloud-Konfiguration';
$string['configuration_exception'] = 'Bei der Konfiguration des OAuth 2-Clients ist ein Fehler aufgetreten: {$a}';
$string['confirmmigration'] = 'Sind Sie sicher, dass Sie die Einstellungen und Dateien auf das Nextcloud-Repository übertragen möchten? Das Nextcloud-Repository muss installiert sein, damit Dateien weiterhin funktionieren. Warnung: Dies kann nicht rückgängig gemacht werden.';
$string['contactadminwith'] = 'Die angeforderte Aktion konnte nicht ausgeführt werden. Falls dies häufiger vorkommt, kontaktieren Sie bitte Ihren Administrator mit folgenden zusätzlichen Hinweisen:<br>"<i>{$a}</i>"';
$string['couldnotmove'] = 'Die Datei konnte nicht in den Ordner {$a} verschoben werden.';
$string['defaultreturntype'] = 'Standardmäßiger Rückgabewert';
$string['external'] = 'Extern (in Moodle werden nur Links gespeichert)';
$string['filenotaccessed'] = 'Auf die angeforderte Datei konnte nicht zugegriffen werden. Bitte stellen Sie sicher, dass Sie eine gültige Datei ausgewählt haben und mit dem korrekten Konto authentifiziert sind.';
$string['fileoptions'] = 'Die Typen und Standardeinstellungen für zurückgegebene Dateien werden hier konfiguriert. Beachten Sie, dass alle extern verlinkten Dateien angepasst werden, so dass das Moodle-Systemkonto als Eigentümer eingetragen ist.';
$string['foldername'] = 'Name eines Ordners, in welchem geteilte Dateien bereitgestellt werden';
$string['foldername_help'] = 'Der Zugriff auf sog. "Access Controlled Links" sorgt dafür, dass die entsprechende Datei privat mit der/dem Zugreifenden geteilt wird. Damit die geteilten Dateien nicht ungeordnet im Hauptordner der Nutzer*innen erscheinen, werden Sie in einem Ordner abgelegt.<br>
Hier wird festgelegt, wie der Ordner benannt wird. Es ist sinnvoll, einen Namen zu wählen, der einen Bezug zu Ihrer Moodle-Instanz herstellt.';
$string['internal'] = 'Intern (Dateien werden in Moodle gespeichert)';
$string['issuervalidation_invalid'] = 'Der Service {$a} ist ausgewählt, implementiert aber nicht alle erforderlichen Endpunkte. Das Repository wird nicht funktionieren.';
$string['issuervalidation_valid'] = 'Der Service {$a} ist ausgewählt.';
$string['issuervalidation_without'] = 'Sie haben noch keinen Service ausgewählt.';
$string['migration'] = 'Repository migrieren';
$string['migrationexplanation'] = 'Seit Moodle 3.6 ist dieses Repository als offizielles Moodle-Plugin in den Core übernommen worden und heißt dort Nextcloud-Repository. Es funktioniert sowohl mit ownCloud als auch mit Nextcloud. Aus diesem Grund ist dieses Plugin hier nicht mehr notwendig. Bitte migrieren Sie Einstellungen und Dateien zu dem neuen, offiziellen Plugin mit Hilfe der folgenden Möglichkeit.';
$string['migrationlink'] = 'Migration beginnen';
$string['no_right_issuers'] = 'Keiner der bestehenden Services implementiert alle erforderlichen Endpunkte. Bitte legen Sie einen passenden Service an.';
$string['notauthorized'] = 'Sie haben nicht die notwendige Berechtigung, um diese Aktion auszuführen. Bitte stellen Sie sicher, dass Sie mit dem korrekten Konto authentifiziert sind.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Verweis auf die OAuth 2-Services-Konfiguration">OAuth 2-Services-Konfiguration</a>';
$string['owncloud'] = 'ownCloud';
$string['owncloud:view'] = 'ownCloud anzeigen';
$string['owncloudfilesmigrated'] = 'Einstellungen und Dateien wurden an das Nextcloud-Repository übergeben. Das alte ownCloud-Repository-Plugin kann nun deinstalliert werden.';
$string['owncloudfilesnotmigrated'] = 'Bei der Migration ist ein Fehler aufgetreten.';
$string['pluginname'] = 'ownCloud';
$string['pluginname_help'] = 'ownCloud-Repository';
$string['privacy:metadata'] = 'Es werden keine personenbezogenen Daten gespeichert oder an Dritte übertragen.';
$string['request_exception'] = 'Eine Anfrage an {$a->instance} ist fehlgeschlagen: {$a->errormessage}';
$string['requestnotexecuted'] = 'Die angeforderte Aktion konnte nicht ausgeführt werden. Falls dies häufiger vorkommt, kontaktieren Sie bitte Ihren Administrator.';
$string['right_issuers'] = 'Die folgenden Services implementieren die erforderlichen Endpunkte: <br> {$a}';
$string['supportedreturntypes'] = 'Unterstützte Dateien';
