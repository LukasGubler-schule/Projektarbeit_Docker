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
 * Strings for component 'tool_mfa', language 'de', version '3.10'.
 *
 * @package     tool_mfa
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievedweight'] = 'Erreichtes Gesamtgewicht';
$string['alltime'] = 'Immer';
$string['areyousure'] = 'Sind Sie sicher, dass Sie den Faktor widerrufen möchten?';
$string['combination'] = 'Kombination';
$string['connector'] = 'UND';
$string['created'] = 'Erstellt';
$string['createdfromip'] = 'Erstellt von IP';
$string['debugmode:currentweight'] = 'Aktuelles Gewicht: {$a}';
$string['debugmode:heading'] = 'Debug-Modus';
$string['devicename'] = 'Gerät';
$string['email:subject'] = 'Anmeldung bei {$a} nicht möglich';
$string['enablefactor'] = 'Faktor aktivieren';
$string['error:actionnotfound'] = 'Aktion \'{$a}\' wird nicht unterstützt';
$string['error:directaccess'] = 'Auf diese Seite sollte nicht direkt zugegriffen werden';
$string['error:factornotenabled'] = 'MFA Faktor \'{$a}\' nicht aktiviert';
$string['error:factornotfound'] = 'MFA Faktor \'{$a}\' nicht gefunden';
$string['error:home'] = 'Klicken Sie hier, um zur Startseite zurückzukehren.';
$string['error:notenoughfactors'] = 'Authentifizierung nicht möglich';
$string['error:reauth'] = 'Wir konnten Ihre Identität - entsprechend der Sicherheitsrichtlinie dieser Website für die Authentifizierung - nicht ausreichend bestätigen. Wenn Sie Anmeldefaktoren übersprungen haben, können Sie es erneut versuchen, oder wenden Sie sich an Ihren Seitenadministrator.';
$string['error:revoke'] = 'Der Faktor kann nicht widerrufen werden';
$string['error:setupfactor'] = 'Der Faktor kann nicht eingerichtet werden';
$string['error:support'] = 'Wenn Sie sich immer noch nicht anmelden können oder glauben, dass dies ein Fehler ist, dann senden Sie bitte, um Unterstützung zu erhalten, eine E-Mail an die folgende Adresse:';
$string['error:wrongfactorid'] = 'Die Faktor-ID \'{$a}\' ist falsch';
$string['event:failfactor'] = 'Die Authentifizierung ist fehlgeschlagen. Ein Faktor wurde nicht erfüllt.';
$string['event:faillockout'] = 'Die Authentifizierung ist fehlgeschlagen. Zu viele falsche Versuche.';
$string['event:userdeletedfactor'] = 'Der Faktor wurde gelöscht.';
$string['event:userfailedmfa'] = 'Teilnehmer/in konnte sich nicht authentifizieren.';
$string['event:userpassedmfa'] = 'Verifizierung erfolgreich';
$string['event:userrevokedfactor'] = 'Faktor Widerruf';
$string['event:usersetupfactor'] = 'Faktor-Setup';
$string['factor'] = 'Faktor';
$string['factorlocked'] = 'Ihre Authentifizierung per \'{$a}\' wurde gesperrt, da Sie zu viele falsche Versuche hatten.';
$string['factorreport'] = 'Gesamt-Faktor Bericht';
$string['factorreset'] = 'Ihre Authentifizierung per \'{$a->factor}\' wurde durch die Administrator/innen zurückgesetzt. Führen Sie die Authentifizierung bitte erneut durch. {$a->url}';
$string['factorresetall'] = 'Ihre Authentifizierung wurde durch die Administrator/innen zurückgesetzt. Führen Sie bitte die Authentifizierung erneut durch. {$a}';
$string['factorrevoked'] = 'Faktor \'{$a}\' erfolgreich widerrufen.';
$string['factorsetup'] = 'Faktor \'{$a}\' erfolgreich eingerichtet.';
$string['fallback'] = 'Fallback-Faktor';
$string['fallback_info'] = 'Dieser Faktor ist ein Fallback, wenn keine anderen Faktoren konfiguriert sind. Dieser Faktor wird immer fehlschlagen.';
$string['gotourl'] = 'Gehen Sie zu Ihrer ursprünglichen URL:';
$string['inputrequired'] = 'Nutzereingabe';
$string['lastverified'] = 'Zuletzt überprüft';
$string['lockoutnotification'] = 'Sie haben noch {$a} Überprüfungsversuche.';
$string['mfa'] = 'MFA';
$string['mfa:mfaaccess'] = 'Zugang über MFA';
$string['mfareports'] = 'MFA Berichte';
$string['mfasettings'] = 'Verwalte MFA';
$string['na'] = 'n/a';
$string['overall'] = 'Insgesamt';
$string['pending'] = 'Ausstehend';
$string['pluginname'] = 'Mehrfaktor-Authentifizierung';
$string['preferences:activefactors'] = 'Aktive Faktoren';
$string['preferences:availablefactors'] = 'Verfügbare Faktoren';
$string['preferences:header'] = 'Mehrfaktor-Authentifizierung Einstellungen';
$string['privacy:metadata:tool_mfa'] = 'Daten mit konfigurierten MFA-Faktoren';
$string['privacy:metadata:tool_mfa:createdfromip'] = 'IP, von der aus der Faktor eingerichtet wurde';
$string['privacy:metadata:tool_mfa:factor'] = 'Faktortyp';
$string['privacy:metadata:tool_mfa:id'] = 'Datensatz-ID';
$string['privacy:metadata:tool_mfa:label'] = 'Beschriftung für diese Faktor-Instanz, z.B. Gerät oder E-Mail';
$string['privacy:metadata:tool_mfa:lastverified'] = 'Zeitpunkt, zudem die Person zuletzt mit diesem Faktor verifiziert wurde';
$string['privacy:metadata:tool_mfa:secret'] = 'Alle geheimen Daten zum Faktor';
$string['privacy:metadata:tool_mfa:timecreated'] = 'Zeitpunkt der Einrichtung dieser Faktor-Instanz';
$string['privacy:metadata:tool_mfa:timemodified'] = 'Zeitpunkt der letzten Änderung des Faktors';
$string['privacy:metadata:tool_mfa:userid'] = 'Die ID der Person, der dieser Faktor gehört';
$string['redirecterrordetected'] = 'Nicht unterstützte Umleitung erkannt, Skriptausführung beendet. Der Umleitungsfehler trat zwischen MFA und {$a} auf.';
$string['revoke'] = 'Widerrufen';
$string['revokefactor'] = 'Faktor widerrufen';
$string['settings:combinations'] = 'Zusammenfassung positiver Bedingungen für die Anmeldung';
$string['settings:debugmode'] = 'Debug-Modus aktivieren';
$string['settings:debugmode_help'] = 'Im Debug-Modus wird ein kleines Benachrichtigungsbanner mit Informationen zu den aktuell aktivierten Faktoren auf den MFA-Administrationsseiten, sowie auf der Seite mit den Benutzereinstellungen angezeigt.';
$string['settings:enabled'] = 'MFA Plugin aktiviert';
$string['settings:enabled_help'] = '';
$string['settings:enablefactor'] = 'Aktiviere Faktor';
$string['settings:enablefactor_help'] = 'Aktivieren Sie dieses Kontrollkästchen, damit der Faktor für die MFA-Authentifizierung verwendet werden kann.';
$string['settings:general'] = 'Allgemeine MFA-Einstellungen';
$string['settings:lockout'] = 'Sperrschwelle';
$string['settings:lockout_help'] = 'Anzahl der Versuche einer Person, Eingabe-Faktoren richtig zu beantworten, bevor die Anmeldung verweigert wird.';
$string['settings:weight'] = 'Faktor-Gewicht';
$string['settings:weight_help'] = 'Das Gewicht dieses Faktors, bei erfolgreicher Nutzung. Eine Person benötigt mindestens 100 Punkte, um sich anzumelden.';
$string['setup'] = 'Setup';
$string['setupfactor'] = 'Faktor einrichten';
$string['setuprequired'] = 'Nutzereinstellungen';
$string['state:fail'] = 'Fehlgeschlagen';
$string['state:neutral'] = 'Neutral';
$string['state:pass'] = 'Erfolgreich';
$string['state:unknown'] = 'Unbekannt';
$string['totalweight'] = 'Gesamtgewicht';
$string['weight'] = 'Gewicht';
