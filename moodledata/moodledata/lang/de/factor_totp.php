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
 * Strings for component 'factor_totp', language 'de', version '4.5'.
 *
 * @package     factor_totp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:manage'] = 'Zeitbasierten Einmalkennwort-Authenticator (TOTP) verwalten';
$string['action:revoke'] = 'Zeitbasierten Einmalkennwort-Authenticator (TOTP) entfernen';
$string['devicename'] = 'Gerätebezeichnung';
$string['devicename_help'] = 'Dies ist das Endgerät, auf dem Sie eine Authenticator-App installiert haben. Wenn Sie mehrere Endgeräte verwenden, sollten Sie jeweils einen eindeutigen Namen vergeben, um die Verwendung kontrollieren und jedes Endgerät einzeln widerrufen zu können.';
$string['devicenameexample'] = 'z.B. iPhone 11 (Arbeit)';
$string['error:alreadyregistered'] = 'Diese Registrierung für das zeitbasierte Einmalkennwort (TOTP) wurde bereits verwendet.';
$string['error:codealreadyused'] = 'Dieser Code wurde bereits zur Authentifizierung verwendet. Warten Sie bitte, bis ein neuer Code generiert wurde, und versuchen Sie es noch einmal.';
$string['error:futurecode'] = 'Dieser Code ist ungültig. Kontrollieren Sie bitte die Uhrzeit auf Ihrem Authentifizierungsgerät und versuchen Sie es dann noch einmal.
     Die aktuelle Systemzeit ist {$a}.';
$string['error:oldcode'] = 'Dieser Code ist zu alt. Kontrollieren Sie bitte die Uhrzeit auf Ihrem Authentifizierungsgerät und versuchen Sie es dann noch einmal.
     Die aktuelle Systemzeit ist {$a}.';
$string['error:wrongverification'] = 'Falscher Bestätigungscode';
$string['factorsetup'] = 'App einrichten';
$string['info'] = 'Generieren Sie einen Bestätigungscode mit einer Authenticator-App.';
$string['logindesc'] = 'Verwenden Sie die Authenticator-App auf Ihrem mobilen Endgerät, um einen Code zu generieren.';
$string['loginoption'] = 'Authenticator-App verwenden';
$string['loginskip'] = 'Ich habe mein Gerät nicht zur Hand';
$string['loginsubmit'] = 'Weiter';
$string['logintitle'] = 'Bestätigen Sie Ihre Identität per mobiler App';
$string['managefactor'] = 'Authentificator-App verwalten';
$string['managefactorbutton'] = 'Verwalten';
$string['manageinfo'] = 'Sie verwenden \'{$a}\' zur Authentifizierung.';
$string['pluginname'] = 'Authenticator-App';
$string['privacy:metadata'] = 'Das Faktorplugin \'Authenticator-App\' speichert keine personenbezogenen Daten.';
$string['replacefactor'] = 'Authenticator-App ersetzen';
$string['replacefactorconfirmation'] = 'Authenticator-App \'{$a}\' ersetzen?';
$string['revokefactorconfirmation'] = 'Authenticator-App \'{$a}\' entfernen?';
$string['settings:totplink'] = 'Link zur Einrichtung der mobilen App anzeigen';
$string['settings:totplink_help'] = 'Wenn diese Option aktiviert ist, wird Nutzer/innen eine dritte Setup-Option mit einem direkten Link otpauth:// angezeigt';
$string['settings:window'] = 'TOTP-Bestätigungsfenster';
$string['settings:window_help'] = 'Das Fenster von TOTP fungiert als Zeitverschiebung und gibt an, wie lange jeder Code gültig ist.
Der Zeitraum, also die Zeit zwischen neu generierten Codes, beträgt 30 Sekunden.
Wenn das Fenster 15 (Standard) beträgt und der aktuelle Zeitstempel 147682209 ist, liegen die getesteten OTPs zwischen 147682194 (147682209 - 15), 147682209 und 147682224 (147682209 + 15).
Das Fenster muss kleiner als 30 sein. Daher umfasst dieser Test das vorherige OTP, aber nicht das nächste.
Sie können dies als Workaround auf einen höheren Wert (bis zu 29) einstellen, wenn die Geräteuhren Ihrer Nutzer/innen häufig ungenau laufen.';
$string['setupfactor'] = 'Authenticator-App einrichten';
$string['setupfactor:account'] = 'Nutzerkonto:';
$string['setupfactor:devicename'] = 'Gerätename';
$string['setupfactor:devicenameinfo'] = 'Dies hilft Ihnen herauszufinden, welches Gerät den Bestätigungscode erhält.';
$string['setupfactor:enter'] = 'Details manuell eingeben';
$string['setupfactor:instructionsdevicename'] = '1. Geben Sie Ihrem Gerät einen Namen.';
$string['setupfactor:instructionsscan'] = '2. Scannen Sie den QR-Code mit Ihrer Authenticator-App.';
$string['setupfactor:instructionsverification'] = '3. Geben Sie den Bestätigungscode ein.';
$string['setupfactor:intro'] = 'Um diese Methode einzurichten, benötigen Sie ein Gerät mit einer Authenticator-App. Wenn Sie keine App haben, können Sie eine herunterladen, z.B.: <a href="https://2fas.com/" target="_blank">2FAS Auth</a>, <a href="https://freeotp.github.io/" target="_blank ">FreeOTP</a>, Google Authenticator, Microsoft Authenticator oder Twilio Authy.';
$string['setupfactor:key'] = 'Secret Key:';
$string['setupfactor:link'] = 'Oder geben Sie die Details manuell ein.';
$string['setupfactor:link_help'] = 'Wenn Sie ein mobiles Endgerät verwenden und bereits eine Authenticator-App installiert haben, funktioniert dieser Link möglicherweise. Beachten Sie, dass die Verwendung von TOTP auf demselben Gerät, auf dem Sie sich anmelden, die Vorteile von MFA schwächen kann.';
$string['setupfactor:linklabel'] = 'Öffnen Sie die App, die bereits auf diesem Gerät installiert ist.';
$string['setupfactor:mode'] = 'Modus:';
$string['setupfactor:mode:timebased'] = 'Zeitabhängig';
$string['setupfactor:scan'] = 'QR-Code scannen';
$string['setupfactor:scanfail'] = 'Scannen nicht möglich?';
$string['setupfactor:scanwithapp'] = 'Scannen Sie den QR-Code mit der von Ihnen gewählten Authenticator-App.';
$string['setupfactor:verificationcode'] = 'Bestätigungscode';
$string['setupfactorbutton'] = 'Einrichten';
$string['summarycondition'] = 'mit einer TOTP-App';
$string['systimeformat'] = '%H:%M:%S %Z';
$string['verificationcode'] = 'Geben Sie Ihren 6-stelligen Code ein';
$string['verificationcode_help'] = 'Öffnen Sie Ihre Authenticator-App (z.B. 2FAS Auth) und suchen Sie nach dem 6-stelligen Code, der zu dieser Website und diesem Anmeldenamen passt';
