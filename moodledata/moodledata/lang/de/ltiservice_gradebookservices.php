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
 * Strings for component 'ltiservice_gradebookservices', language 'de', version '4.5'.
 *
 * @package     ltiservice_gradebookservices
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alwaysgs'] = 'Service für die Synchronisation von Bewertungen und die Verwaltung der Spalten nutzen.';
$string['grade_synchronization'] = 'IMS LTI Aufgaben und Bewertung';
$string['grade_synchronization_help'] = 'Die Einstellung legt fest, ob der IMS LTI Aufgaben- und Bewertungsservice zur Synchronisierung von Bewertungen an Stelle des Basisdienstes genutzt wird.

* **Service nicht nutzen** - Der Basisservice und -Konfiguration wird genutzt
* **Service nur zur Bewertungssynchronisation nutzen** - Es werden die Bewertungen in die vorhandene Bewertungstabelle übernommen, jedoch keine neuen Spalten eingefügt.
* **Service für Bewertungssynchronisation und Spaltenverwaltung nutzen** - Der Service erstellt und aktualisiert Spalten in den Bewertungen und pflegt die Bewertungen ein.';
$string['ltiservice_gradebookservices'] = 'IMS LTI Zuweisungs- und Bewertungsservices';
$string['modulename'] = 'LTI Bewertungen';
$string['nevergs'] = 'Diesen Service nicht nutzen';
$string['partialgs'] = 'Service nur für Bewertungen nutzen';
$string['pluginname'] = 'LTI Aufgaben und Bewertungsservice';
$string['privacy:metadata:externalpurpose'] = 'Diese Information wird an externen LTI-Provider gesendet.';
$string['privacy:metadata:feedback'] = 'Feedback, die der Nutzer für LTI Aktivität erhalten hat';
$string['privacy:metadata:grade'] = 'Bewertung, die der Nutzer für LTI Aktivität erhalten hat.';
$string['privacy:metadata:maxgrade'] = 'Höchstbewertung, die für LTI-Aktivität vergeben wird';
$string['privacy:metadata:timemodified'] = 'Letzer Zeitpunkt an dem Bewertung aktualisiert wurde';
$string['privacy:metadata:userid'] = 'ID des Nutzers, der LTI-Consumer nutzte';
$string['taskcleanup'] = 'LTI Aufgaben und Bewertungsservicetabelle bereinigen';
