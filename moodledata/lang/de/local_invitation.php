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
 * Strings for component 'local_invitation', language 'de', version '4.5'.
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
$string['delete_after_logout_help'] = 'Ein temporäres Nutzerkonto wird sofort nach dem Ausloggen gelöscht. Wenn diese Option aktiviert ist, ist die Person in den Kursberichten nicht sichtbar.';
$string['delete_confirmation'] = 'Möchten Sie diese Einladung wirklich löschen? Anschließend kann der Einladungslink nicht mehr verwendet werden.';
$string['delete_invitation'] = 'Einladung löschen';
$string['edit_invitation'] = 'Einladung für temporären Kurszugang bearbeiten';
$string['error_could_not_create_and_enrol'] = 'Fehler: Nutzerkonto konnte nicht erstellt und eingeschrieben werden!';
$string['error_invalid_invitation'] = 'Fehler: Diese Einladung ist ungültig!';
$string['error_invitation_not_active'] = 'Fehler: Die Einladungsfunktion ist in diesem System nicht aktiviert.';
$string['error_invitation_usegroup_no_group'] = '"Gruppe verwenden" ist definiert, aber es wurde keine Gruppe ausgewählt!';
$string['error_invitation_usegroup_no_groupname'] = '"Gruppe verwenden" ist definiert, aber der Gruppenname fehlt!';
$string['error_timeend_can_not_be_before_timestart'] = 'Die Einladung kann nicht enden, bevor sie beginnt.';
$string['error_timeend_can_not_be_in_past'] = 'Die Einladung kann nicht in der Vergangenheit enden.';
$string['error_userrole_not_defined'] = 'In der Konfiguration ist keine Nutzerrolle festgelegt. Wenden Sie sich bitte an Ihre Administrator/innen.';
$string['expiration_time'] = 'Ablaufzeit (Tage)';
$string['expiration_time_help'] = 'Ein temporäres Nutzerkonto, das mit dieser Option erstellt wird, läuft nach der festgelegten Anzahl von Tagen ab. Ein abgelaufenes Konto wird anonymisiert und anschließend gelöscht.';
$string['free_slots'] = 'Freie Plätze:';
$string['group_created_by_invitation'] = 'Die Gruppe wurde über die Einladung angelegt.';
$string['group_not_found'] = 'Gruppe nicht gefunden';
$string['guestuser_suffix'] = '(Gast)';
$string['info_already_loggedin'] = 'Sie sind bereits eingeloggt. Wenn Sie fortfahren, werden Sie abgemeldet.';
$string['invitation'] = 'Einladung';
$string['invitation:manage'] = 'Einladungen verwalten';
$string['invitation_created'] = 'Einladung erfolgreich erstellt.';
$string['invitation_delete_note_timeandlogout'] = 'Das temporäre Nutzerkonto und die zugehörigen Daten werden automatisch gelöscht, sobald sich die Person abmeldet, spätestens jedoch nach {$a}.';
$string['invitation_delete_note_timeonly'] = 'Das temporäre Nutzerkonto und die zugehörigen Daten werden nach {$a} automatisch gelöscht.';
$string['invitation_deleted'] = 'Einladung erfolgreich gelöscht.';
$string['invitation_is_not_allowed'] = 'Sie haben kein Recht, externe Personen einzuladen.';
$string['invitation_note'] = 'Mit der Einladung erlauben Sie einen temporären Zugang zu diesem Kurs. Alle Personen, die den Einladungslink kennen, dürfen ohne reguläres Konto teilnehmen.';
$string['invitation_updated'] = 'Einladung erfolgreich aktualisiert.';
$string['invite_participants'] = 'Neue Einladung für den temporären Kurszugang';
$string['join'] = 'Beitreten';
$string['link_copied'] = 'Der Link wurde kopiert.';
$string['max_users'] = 'Anzahl';
$string['max_users_per_invitation'] = 'Maximale Nutzerzahl pro Einladung';
$string['nameinfo'] = 'Info zum Namen';
$string['nameinfo_help'] = 'Mit diesem Text können Sie kurz beschreiben, wie der Name im Anmeldeformular verwendet wird.';
$string['no_group_defined'] = 'Keine Gruppe definiert';
$string['none_existing_group_info'] = 'Diese Gruppe existiert nicht und wird angelegt.';
$string['note'] = '<br>Hinweis:';
$string['pluginname'] = 'Einladung';
$string['preventactions'] = 'Maßnahmen verhindern';
$string['preventactions_help'] = '<strong>Hinweis:</strong> Sie können URLs oder Teile von URLs definieren, die eingeladene Personen nicht aufrufen können. Wenn eingeladene Personen eine solche URL aufrufen, werden sie zum Kurs oder zur Startseite umgeleitet. Nehmen Sie bitte das Dashboard und die Startseite nicht in diese Liste auf!';
$string['qrcode'] = 'QR-Code';
$string['remove_old_invitations'] = 'Alte Nutzer/innen entfernen';
$string['search_or_create_group'] = 'Gruppe suchen oder anlegen';
$string['show_icon_in_usernavigation'] = 'Icon in Nutzernavigation anzeigen';
$string['showqrcode'] = 'QR-Code anzeigen';
$string['single_name_field'] = 'Name angeben';
$string['single_name_field_help'] = 'Wenn die Option "Name angeben" aktiviert ist, wird die Person aufgefordert, vor dem Zugriff ihren Namen anzugeben. In der Teilnehmerliste wird ein Zusatz an den Namen angehängt.';
$string['systemrole'] = 'Systemrolle';
$string['systemrole_help'] = 'Wenn eine Systemrolle definiert ist, wird diese den eingeladenen Personen zugewiesen. Das kann verwendet werden, um eingeladene Personen über Systemrechte einzuschränken.';
$string['timeend'] = 'Endzeit';
$string['timestart'] = 'Startzeit';
$string['usedslots'] = 'Verwendet:';
$string['usegroup'] = 'Gruppe verwenden';
$string['userrole'] = 'Nutzerrolle';
$string['welcome_note'] = 'Willkommen {$a->firstname} {$a->lastname}!';
