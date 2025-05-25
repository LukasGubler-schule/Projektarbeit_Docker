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
 * Strings for component 'report_ldapaccounts', language 'de', version '4.5'.
 *
 * @package     report_ldapaccounts
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['callreport'] = 'Bericht aufrufen';
$string['col_auth'] = 'Authentifizierung';
$string['col_calendartype'] = 'Kalender';
$string['col_currentlogin'] = 'Aktuelles Login';
$string['col_descriptionformat'] = 'Beschreibungsformat';
$string['col_lang'] = 'Sprache';
$string['col_maildigest'] = 'E-Mail-Zusammenfassung';
$string['col_maildisplay'] = 'E-Mail-Anzeige';
$string['col_mailformat'] = 'E-Mail-Format';
$string['col_mnethostid'] = 'MNet-Host-ID';
$string['col_moodlenetprofile'] = 'MoodleNet-Profil';
$string['col_policyagreed'] = 'Richtlinien akzeptiert';
$string['col_timemodified'] = 'Zeit geändert';
$string['col_trustbitmask'] = 'Trust-Bit-Maske';
$string['enable_emailstop'] = 'Benachrichtigungen einschalten';
$string['form_col_ldap_status'] = 'LDAP-Status';
$string['form_csv_delimiter'] = 'CSV-Trennzeichen';
$string['form_download_csv'] = 'Bericht als CSV herunterladen';
$string['form_error_column'] = 'Das Feld {0} existiert nicht in der Benutzertabelle.';
$string['form_error_input'] = 'Eingabe ungültig.';
$string['form_filter_auth'] = 'Authentifizierung';
$string['form_filter_deleted'] = 'Gelöscht';
$string['form_filter_email'] = 'E-Mail';
$string['form_filter_emailstop'] = 'Emailstop';
$string['form_filter_firstname'] = 'Vorname';
$string['form_filter_lastname'] = 'Nachname';
$string['form_filter_ldapstatus'] = 'LDAP-Status';
$string['form_filter_suspended'] = 'Suspendiert';
$string['form_filter_userdata'] = 'Nutzerdaten filtern';
$string['form_show_cols'] = 'Spalten';
$string['form_show_userdata'] = 'Nutzerdaten anzeigen';
$string['ldapaccounts:view'] = 'Moodle-Nutzerkonten in LDAP ansehen';
$string['ldapbasedn'] = 'LDAP base DN';
$string['ldapbasedn_desc'] = 'Der Wurzelknoten von dem aus alle LDAP Objekte hierarchisch gesucht werden.';
$string['ldapcacert'] = 'CA Cert File';
$string['ldapcacert_desc'] = 'Zertifikatsdatei der CA. Falls die Verbindung zum Server nicht funktioniert, kann man das Server-Zertifikat hier angeben. Dazu muss es runtergeladen und lokal gespeichert werden:
   1. Zertifikat anzeigen lassen mittels: openssl s_client -connect example.com:636.
   2. Alles zwischen (und einschliesslich) -----BEGIN CERTIFICATE----- and -----END CERTIFICATE----- kopieren.
   3. Die kopierte Zeichenkette in einer Datei auf dem Server speichern.
   4. Diese Datei (inkl. Pfad) hier in der Einstellung angeben.';
$string['ldapcert'] = 'Cert File';
$string['ldapcert_desc'] = 'Zertifikatsdatei des eigenen Moodle Servers, falls benötigt.';
$string['ldapmailfield'] = 'E-Mail-Feld in LDAP';
$string['ldapmailfield_desc'] = 'Der Name des Feldes in LDAP, in welchem die E-Mail-Adresse der Person gespeichert wird.';
$string['ldapnotconfigured'] = 'Die LDAP Verbindung ist nicht konfiguriert. Bitte in den [link]Einstellungen[/link] ändern.';
$string['ldappass'] = 'LDAP-Kennwort';
$string['ldappass_desc'] = 'Kennwort des LDAP-Bind-Nutzers.';
$string['ldapport'] = 'LDAP-Serverport';
$string['ldapport_desc'] = 'Serverport, über den der LDAP-Dienst erreichbar ist.';
$string['ldapquery'] = 'LDAP-Abfrage';
$string['ldapquery_desc'] = 'Feste Abfrage an LDAP, um Nutzer/innen auszuwählen (z.B. `(&(objectClass=person)(objectClass=top))`). Diese Abfrage wird mit der E-Mail aus dem Nutzerdatensatz erweitert.';
$string['ldapserver'] = 'LDAP-Server';
$string['ldapserver_desc'] = 'Servername oder IP, über welche der LDAP-Dienst erreichbar ist.';
$string['ldapuser'] = 'LDAP-Bind-Nutzer';
$string['ldapuser_desc'] = 'Der Name des Bind-Nutzers, welcher sich mit dem LDAP-Server verbinden soll.';
$string['logging'] = 'Logs für LDAP aktivieren';
$string['logging_desc'] = 'Die gesamte Kommunikation mit dem LDAP-Server wird im Log protokolliert.';
$string['permalink'] = 'Direktlink für diesen Bericht';
$string['pluginname'] = 'Moodle-Nutzerkonten in LDAP';
$string['privacy:metadata'] = 'Das Plugin "Moodle-Nutzerkonten in LDAP" speichert in der Standardeinstellung keine personenbezogenen Daten. Es können aber personenbezogene Daten im Log sowie in CSV-Dateien auf dem Server abgelegt werden, wenn die Option aktiviert ist.';
$string['reportldapaccountsdesc'] = 'Der Bericht "Moodle-Nutzerkonten in LDAP" zeigt auf, welche Nutzerkonten in Moodle auch in LDAP vorkommen.';
$string['resultcount'] = '{0} Einträge gefunden.';
