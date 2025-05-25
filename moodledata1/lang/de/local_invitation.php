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
 * Strings for component 'local_invitation', language 'de', version '3.10'.
 *
 * @package     local_invitation
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['available_from'] = 'Verfügbar ab:';
$string['available_to'] = 'Verfügbar bis:';
$string['back_to_course'] = 'Zurück zum Kurs';
$string['clipboard'] = 'Zwischenablage';
$string['consent'] = 'Zustimmungstext';
$string['consent_help'] = 'Wenn Sie eine Zustimmung einfordern, wird den eingeladenen Personen dieser Text angezeigt und eine Zustimmung als Kontrollkästchen notwendig.';
$string['consent_title'] = 'Bestätigung';
$string['current_invitation'] = 'Aktuelle Einladung';
$string['current_invitation_note'] = 'Wenn Sie eine neue Einladung erstellen, wird die alte Einladung automatisch ungültig.';
$string['delete_after_logout'] = 'Nach Abmelden löschen';
$string['delete_after_logout_help'] = 'Ein temporäres Nutzerkonto, das mit diesem Plugin erstellt wurde, wird sofort nach dem Ausloggen gelöscht. Wenn diese Option aktiviert ist, können Sie die Person nicht in Ihren Kursberichten sehen.';
$string['delete_confirmation'] = 'Möchten Sie diese Einladung wirklich löschen? Anschließend kann der Einladungslink nicht mehr verwendet werden.';
$string['delete_invitation'] = 'Einladung löschen';
$string['edit_invitation'] = 'Einladung für temporären Kurszugang bearbeiten';
$string['error_could_not_create_and_enrol'] = 'Fehler: Nutzer/in konnte nicht erstellt und eingeschrieben werden!';
$string['error_invalid_invitation'] = 'Fehler: Diese Einladung ist ungültig!';
$string['error_invitation_not_active'] = 'Fehler: Die Einladungsfunktion ist in diesem System nicht aktiviert.';
$string['error_timeend_can_not_be_before_timestart'] = 'Die Einladung kann nicht enden, bevor sie beginnt.';
$string['error_timeend_can_not_be_in_past'] = 'Die Einladung kann nicht in der Vergangenheit enden.';
$string['error_userrole_not_defined'] = 'In der Konfiguration ist keine Nutzerrolle festgelegt. Wenden Sie sich bitte an Ihre Administrator/innen.';
$string['expiration_time'] = 'Ablaufzeit (Tage)';
$string['expiration_time_help'] = 'Ein temporäres Nutzerkonto, das mit diesem Plugin erstellt wurde, läuft nach der festgelegten Anzahl von Tagen ab. Ein abgelaufenes Konto wird anonymisiert und anschließend gelöscht.';
$string['free_slots'] = 'Freie Plätze:';
$string['guestuser_suffix'] = '(Gast)';
$string['info_already_loggedin'] = 'Sie sind bereits eingeloggt. Wenn Sie fortfahren, werden Sie abgemeldet.';
$string['invitation'] = 'Einladung';
$string['invitation:manage'] = 'Einladungen verwalten';
$string['invitation_created'] = 'Einladung erfolgreich erstellt.';
$string['invitation_delete_note_timeandlogout'] = 'Ein temporäres Nutzerkonto und die zugehörigen Daten werden automatisch gelöscht, sobald sich die Person abmeldet, spätestens jedoch nach {$a}.';
$string['invitation_delete_note_timeonly'] = 'Ein temporärer Zugang und die zugehörigen Daten werden nach {$a} automatisch gelöscht.';
$string['invitation_deleted'] = 'Einladung erfolgreich gelöscht.';
$string['invitation_note'] = 'Mit der Einladungsfunktion können Sie einen temporären Zugang zu diesem Kurs erlauben. Der erstellte Einladungslink ermöglicht Personen ohne reguläres Konto den Zugriff auf diesen Kurs.';
$string['invitation_updated'] = 'Einladung erfolgreich aktualisiert.';
$string['invite_participants'] = 'Neue Einladung für den temporären Kurszugang';
$string['join'] = 'Beitreten';
$string['link_copied'] = 'Der Link wurde kopiert.';
$string['max_users'] = 'Anzahl';
$string['max_users_per_invitation'] = 'Maximale Nutzerzahl pro Einladung';
$string['nameinfo'] = 'Hinweis zum Namen';
$string['nameinfo_help'] = 'Mit diesem Text können Sie kurz erläutern, wie das Namensfeld im Anmeldeformular verwendet wird.';
$string['note'] = 'Hinweis';
$string['pluginname'] = 'Einladung';
$string['preventactions'] = 'Maßnahmen verhindern';
$string['preventactions_help'] = '<strong>Hinweis:</strong> Sie können URLs oder Teile von URLs definieren, die eingeladene Personen nicht aufrufen können. Wenn eingeladene Personen eine solche URL aufrufen, werden sie zum Kurs oder zur Startseite umgeleitet. Nehmen Sie bitte das Dashboard und die Startseite nicht in diese Liste auf!';
$string['qrcode'] = 'QR-Code';
$string['remove_old_invitations'] = 'Alte Nutzer/innen entfernen';
$string['showqrcode'] = 'QR-Code anzeigen';
$string['single_name_field'] = 'Namensfeld';
$string['single_name_field_help'] = 'Wenn die Option "Namensfeld" aktiviert ist, werden Nutzer/innen aufgefordert, ihren Namen einzugeben. In der Teilnehmerliste wird ein Zusatz an den Namen angehängt.';
$string['systemrole'] = 'Systemrolle';
$string['systemrole_help'] = 'Wenn eine Systemrolle definiert ist, wird diese den eingeladenen Nutzer/innen zugewiesen. Das kann verwendet werden, um eingeladene Nutzer/innen über Systemrechte einzuschränken.';
$string['timeend'] = 'Endzeit';
$string['timestart'] = 'Startzeit';
$string['usedslots'] = 'Verwendet:';
$string['userrole'] = 'Nutzerrolle';
$string['welcome_note'] = 'Willkommen {$a->firstname} {$a->lastname}!';
