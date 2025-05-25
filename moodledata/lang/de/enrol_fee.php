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
 * Strings for component 'enrol_fee', language 'de', version '4.5'.
 *
 * @package     enrol_fee
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Rolle zuweisen';
$string['cost'] = 'Einschreibegebühr';
$string['costerror'] = 'Die Einschreibegebühr muss eine Zahl sein';
$string['currency'] = 'Währung';
$string['defaultrole'] = 'Standardmäßige Rollenzuweisung';
$string['defaultrole_desc'] = 'Wählen Sie eine Rolle, die der Person nach der Zahlung zugewiesen werden soll.';
$string['enrolenddate'] = 'Enddatum';
$string['enrolenddate_help'] = 'Wenn diese Option aktiviert ist, können Nutzer/innen nur bis zu diesem Datum eingeschrieben werden.';
$string['enrolenddaterror'] = 'Das Einschreibeende kann nicht früher sein als der Einschreibebeginn.';
$string['enrolperiod'] = 'Einschreibedauer';
$string['enrolperiod_desc'] = 'Standardmäßige Zeitdauer, für die die Einschreibung gültig ist. Wenn der Wert Null ist, ist die Einschreibedauer standardmäßig unbegrenzt.';
$string['enrolperiod_help'] = 'Zeitdauer, für die die Einschreibung gültig ist, beginnend mit dem Moment der Nutzereinschreibung. Wenn der Wert Null ist, ist die Einschreibedauer standardmäßig unbegrenzt.';
$string['enrolstartdate'] = 'Beginn';
$string['enrolstartdate_help'] = 'Wenn diese Option aktiviert ist, können Nutzer/innen erst ab diesem Zeitpunkt eingeschrieben werden.';
$string['expiredaction'] = 'Aktion zum Ablauf der Einschreibung';
$string['expiredaction_help'] = 'Wählen Sie, welche Aktion ausgeführt werden soll, wenn die Nutzereinschreibung abläuft. Bitte beachten Sie bitte, dass bei der Kursabmeldung Nutzerdaten und -einstellungen gelöscht werden.';
$string['fee:config'] = '\'Einschreibung bei Zahlung\' konfigurieren';
$string['fee:manage'] = 'Eingeschriebene Nutzer/innen verwalten';
$string['fee:unenrol'] = 'Nutzer/innen aus dem Kurs ausschreiben';
$string['fee:unenrolself'] = 'Selbst aus dem Kurs ausschreiben';
$string['nocost'] = 'Es gibt keine Einschreibegebühren für diesen Kurs.';
$string['paymentaccount'] = 'Zahlungskonto';
$string['paymentaccount_help'] = 'Einschreibegebühren werden auf dieses Konto bezahlt.';
$string['pluginname'] = 'Einschreibung bei Zahlung';
$string['pluginname_desc'] = 'Mit der Einschreibemethode \'Einschreibung bei Zahlung\' können Sie Kurse einrichten, für die eine Gebühr bezahlt werden muss. Wenn die Gebühr für jeden Kurs auf Null gesetzt ist, werden Teilnehmer/innen nicht zur Zahlung aufgefordert. Sie können auch eine Standortgebühr für die gesamte Website festlegen, und dann eine Kursgebühr für jeden einzelnen Kurs. Die Kursgebühr hat Vorrang vor der Standortgebühr.';
$string['privacy:metadata'] = 'Das Plugin \'Einschreibung bei Zahlung\' speichert keine personenbezogenen Daten.';
$string['purchasedescription'] = 'Einschreibung in Kurs {$a}';
$string['sendpaymentbutton'] = 'Wählen Sie eine Zahlungsart';
$string['status'] = '\'Einschreibung bei Zahlung\' erlauben';
$string['status_desc'] = 'Ermöglichen Sie Nutzer/innen, eine Zahlung zu leisten, um sich standardmäßig für einen Kurs anzumelden.';
