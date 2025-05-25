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
 * Strings for component 'auth_enrolkey', language 'de', version '3.10'.
 *
 * @package     auth_enrolkey
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cohortsync'] = 'Zielgruppen bei der Anmeldung synchronisieren';
$string['cohortsync_description'] = 'Zielgruppen synchronisieren, wenn sich Nutzer/innen anmelden. Dadurch wird eine Verzögerung bei der Ausführung von Cron und dieser Task beseitigt. Warnung: Dies kann dazu führen, dass der Anmeldevorgang langsamer wird.';
$string['description'] = 'Dieses Plugin bietet eine Selbstregistrierung, die einen Einschreibeschlüssel verwendet.';
$string['edit_cohort'] = 'Zuordnung bearbeiten';
$string['edit_profile'] = 'Felder bearbeiten';
$string['edit_redirect'] = 'URL bearbeiten';
$string['enrolkeyuse'] = 'Neuen Einschreibeschlüssel verwenden';
$string['errorenrolling'] = 'Bei der Einschreibung zum Kurs \'{$a->course}\' ist ein Fehler aufgetreten. Die Fehlermeldung lautet: {$a->err}';
$string['heading_unsuspend'] = 'Ihr Nutzerkonto könnte gesperrt sein. Geben Sie bitte einen Einschreibeschlüssel ein.';
$string['label_cohortselect'] = 'Globale Gruppen auswählen';
$string['label_cohortselect_empty'] = 'Keine globale Gruppe ausgewählt';
$string['label_cohortselect_help'] = 'Namen und IDs von globalen Gruppen suchen';
$string['label_redirection'] = 'Weiterleitungs-URL';
$string['label_redirection_help'] = 'Die hier eingegebene URL leitet die Nutzer/innen nach ihrer Selbstregistrierung weiter.<br/>
In dieses Feld können Sie absolute und relative URLs eintragen.<br/>
Eine relative URL muss am Anfang mit einem Schrägstrich / beginnen.
<ul>
<li>Relativ: /course/view.php?id=5</li>
<li>Absolut: http://vielleicht.ihr.intranet/irgendeine/seite</li>
</ul>';
$string['menumanage'] = 'Globale Rollen bei Selbstregistrierung mit Einschreibeschlüssel verwalten';
$string['menusettings'] = 'Einstellungen für Selbstregistrierung mit Einschreibeschlüssel';
$string['noemail'] = 'Der Versuch, Ihnen eine E-Mail zu schicken, ist leider fehlgeschlagen!';
$string['pluginname'] = 'Selbstregistrierung mit Einschreibeschlüssel';
$string['privacy:metadata'] = 'Das Plugin "Selbstregistrierung mit Einschreibeschlüssel" speichert keine personenbezogenen Daten.';
$string['privacy:metadata:auth_enrolkey'] = 'Plugin "Selbstregistrierung mit Einschreibeschlüssel"';
$string['privacy:metadata:auth_enrolkey_cohort'] = 'Globale Gruppe für Selbstregistrierung mit Einschreibeschlüssel';
$string['privacy:metadata:auth_enrolkey_cohort:usermodified'] = 'Globale Gruppen--ID für Selbstregistrierung mit Einschreibeschlüssel';
$string['privacy:metadata:auth_enrolkey_profile'] = 'Profil für Selbstregistrierung mit Einschreibeschlüssel';
$string['privacy:metadata:auth_enrolkey_profile:usermodified'] = 'Nutzer-ID für Selbstregistrierung mit Einschreibeschlüssel';
$string['privacy:metadata:auth_enrolkey_redirect'] = 'Weiterleitung für Selbstregistrierung mit Einschreibeschlüssel';
$string['privacy:metadata:auth_enrolkey_redirect:usermodified'] = 'Weiterleitung-ID für Selbstregistrierung mit Einschreibeschlüssel';
$string['recaptcha'] = 'Diese Option fügt der Anmeldeseite für die Selbstregistrierung ein visuelles/audiographisches Bestätigungsfeld hinzu. Dies schützt Ihre Website vor Spammern und trägt zu einer sinnvollen Sache bei. Weitere Infos: <a href="http://www.google.com/recaptcha">http://www.google.com/recaptcha</a>.';
$string['recaptcha_key'] = 'reCAPTCHA-Element aktivieren';
$string['settings_content'] = '<p>Die "Selbstregistrierung mit Einschreibeschlüssel" ermöglicht es Nutzer/innen, sich über die Anmeldeseite ein eigenes Konto zu erstellen. Es wird eine E-Mail mit einem Bestätigungslink verschickt. Bei zukünftigen Anmeldungen werden Anmeldename und Kennwort mit den gespeicherten Werten in der Moodle-Datenbank abgeglichen.</p><p>Wenn bei der Selbstregistrierung ein Einschreibeschlüssel in das entsprechende Feld eingegeben wird, werden neue Nutzer/innen automatisch für den passenden Kurs eingeschrieben. Der Einschreibeschlüssel wird für einen Kurs über "Kurs-Administration > Nutzer/innen > Einschreibemethoden > Methode hinzufügen > Selbsteinschreibung" aktiviert.</p><p>Hinweis: Zusätzlich zur Aktivierung des Plugins muss die "Selbstregistrierung mit Einschreibeschlüssel" auch aus dem Dropdown-Menü für die Selbstregistrierung unter "Website-Administration > Plugins > Authentifizierung > Übersicht" ausgewählt werden.</p>';
$string['settings_email_description'] = 'Müssen Nutzer/innen ihr Konto per E-Mail bestätigen, bevor sie auf eingeschriebene Kurse zugreifen können?
<ul>
<li>Nein – Keine E-Mail-Bestätigung erforderlich.</li>
<li>Ja – Zugriff wird gewährt, nachdem das Konto per E-Mail bestätigt wurde.</li>
<li>Vorläufig - Erster Zugriff wird gewährt. Nutzer/innen müssen aber ihr Konto vor der nächsten Anmeldung per E-Mail bestätigen.</li>
</ul>';
$string['settings_email_title'] = 'E-Mail-Bestätigung erforderlich';
$string['settings_heading'] = 'Allgemeine Einstellungen';
$string['settings_partial'] = 'Vorläufig';
$string['settings_required_description'] = 'Der Einschreibeschlüssel ist ein Pflichtfeld für die Validierung.';
$string['settings_required_title'] = 'Der Einschreibeschlüssel ist für die Validierung erforderlich.';
$string['settings_visible_description'] = 'Diese Registrierungsmethode fügt der Anmeldeseite ein neues Formularelement hinzu. Die Registrierung wird mit allen verfügbaren Einschreibeschlüsseln abgeglichen und meldet die Nutzer/innen für die alle Kurse mit dem entsprechenden Einschreibeschlüssel an.';
$string['settings_visible_title'] = 'Einschreibeschlüssel aktivieren';
$string['signup_auth_instructions'] = 'Haben Sie bisher keine Zugangsdaten für diese Website? Haben Sie einen "Einschreibeschlüssel" erhalten, um sich damit selber registrieren und in einen Kurs einschreiben zu können?
<ol>
<li>Füllen Sie bitte das Formular <a href="{$a}">Neues Nutzerkonto</a> aus.</li>
<li>Geben Sie den "Einschreibeschlüssel" an, den Sie erhalten haben.</li>
<li>Ihr Nutzerkonto wird erstellt und Sie werden automatisch eingeloggt.</li>
<li>Sie haben Zugriff auf den Kurs, bis Sie sich im Webbrowser abmelden.</li>
<li>An Ihre E-Mail-Adresse wird eine Mitteilung geschickt. Klicken Sie in der E-Mail auf den Link, um Ihr Nutzerkonto zu bestätigen und vollständig freizuschalten.</li>
<li>Melden Sie sich künftig mit Anmeldename und Kennwort an (Formular auf dieser Seite).</li>
</ol>';
$string['signup_failure'] = 'Opps! Da ist ein Fehler aufgetreten. Möglicherweise sind Sie nicht richtig eingeschrieben worden. Gehen Sie zur <a href="{$a->href}">Startseite</a>';
$string['signup_field_title'] = 'Einschreibeschlüssel';
$string['signup_missing'] = 'Fehlender Einschreibeschlüssel';
$string['signup_token_invalid'] = 'Der eingegebene Einschreibeschlüssel ist ungültig.';
$string['signup_view'] = 'Kurseinschreibung';
$string['signup_view_message_basic'] = 'Sie haben sich als {$a->role} in den Kurs \'<a href="{$a->href}">{$a->course}</a>\' eingeschrieben.';
$string['signup_view_message_basic_dates'] = 'Sie haben sich im Kurs {$a->course} als {$a->role} eingetragen. <a href={$a->href}>Klicken Sie hier, um den Kurs anzuzeigen.</a><br />Kursbeginn: {$a->startdate}<br />Kursende: {$a->enddate}';
$string['signup_view_message_basic_dates_endonly'] = 'Sie haben sich im Kurs {$a->course} als {$a->role} eingetragen. <a href={$a->href}>Klicken Sie hier, um den Kurs anzuzeigen.</a><br />Kursende: {$a->enddate}';
$string['signup_view_message_basic_dates_startonly'] = 'Sie haben sich im Kurs {$a->course} als {$a->role} eingetragen. <a href={$a->href}>Klicken Sie hier, um den Kurs anzuzeigen.</a><br />Kursbeginn: {$a->startdate}';
$string['suspendeduseratsignup'] = '<br />Vielleicht existiert Ihr Konto bereits, wurde aber gesperrt? <a href="{$a->href}">Bitte registrieren Sie sich hier mit einem neuen Einschreibeschlüssel</a>';
$string['th_cohorts'] = 'Zugeordnete globale Gruppen';
$string['th_enrolkeyname'] = 'Name Einschreibeschlüssel';
$string['th_fullname'] = 'Vollständiger Kursname';
$string['th_profilefields'] = 'Profilfelder';
$string['th_redirecturl'] = 'Weiterleitungs-URL';
$string['title_cohort'] = 'Zuordnung zu globaler Gruppe bearbeiten';
$string['title_profile'] = 'Profilfelder bearbeiten';
$string['title_redirect'] = 'Weiterleitungs-URL bearbeiten';
$string['title_unsuspend'] = 'Gesperrtes Nutzerkonto';
$string['unsuspendaccounts'] = 'Nutzerkonten mit gültigem Einschreibeschlüssel entsperren';
$string['unsuspendaccounts_description'] = 'Wenn eine Person bei der Anmeldung gesperrt ist und die Authentifizierung über einen Einschreibeschlüssel verwendet, leiten Sie sie auf eine Zwischenseite um. Diese Zwischenseite fragt zur Freigabe nach dem Anmeldenamen, dem Kennwort und dem Einschreibeschlüssel.';
