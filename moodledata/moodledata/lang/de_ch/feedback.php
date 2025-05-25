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
 * Strings for component 'feedback', language 'de_ch', version '4.5'.
 *
 * @package     feedback
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configallowfullanonymous'] = 'Wenn diese Option aktiviert ist, kann ein Feedback ohne vorhergehende Anmeldung abgegeben werden. Dies betrifft aber ausschliesslich Feedbacks auf der Startseite.';
$string['depending_help'] = 'Ein abhängiges Element wird in Abhängigkeit von einem anderen Element angezeigt.<br /><br />
<strong>Beispiel:</strong>
<ul>
<li>Legen Sie zunächst das Element an, von dem ein anderes Element abhängt.</li>
<li>Fügen Sie dann einen Seitenumbruch hinzu.</li>
<li>Fügen Sie nun die Elemente hinzu, die vom Wert des zuvor erstellten Elements abhängen. Wählen Sie das Element in der Liste "Abhängigkeitselement" aus und legen Sie den erforderlichen Wert im Textfeld "Abhängigkeitswert" fest.</li>
</ul>
<strong>Die Struktur sollte folgendermassen aussehen:</strong>
<ol>
<li>Element - Frage: Haben Sie ein Auto? Antwort: ja/nein</li>
<li>Seitenumbruch</li>
<li>Element - Frage: Welche Farbe hat Ihr Auto?<br />
(Dieses Element wird bei der Antwort "ja" in der ersten Frage angezeigt)</li>
<li>Element - Frage: Warum haben Sie kein Auto?<br />
(Dieses Element wird bei der Antwort "nein" in der ersten Frage angezeigt)</li>
<li> ... weitere Elemente</li>
</ol>
Das ist schon alles.';
$string['feedback:complete'] = 'Feedback abschliessen';
$string['modulename_help'] = 'Mit dem Feedback können Sie eigene Umfragen oder Evaluationsformulare anlegen, wofür eine Reihe von Fragetypen, einschliesslich Multiple-Choice, Ja/Nein oder Texteingabe, zur Verfügung stehen.

Die Antworten können Personen zugeordnet werden oder anonym erfolgen. Die Ergebnisse können Sie nach dem Ausfüllen anzeigen lassen und später als Datei exportieren.

Feedbacks auf der Startseite können völlig anonym auch von nicht angemeldeten Personen ausgefüllt und abgegeben werden.

Eine Feedback-Aktivität kann verwendet werden

* Bei Kursbewertungen, um den Inhalt für spätere Teilnehmer/innen zu verbessern
* Um den Teilnehmer/innen die Möglichkeit zu geben, sich für Kursmodule, Veranstaltungen usw. anzumelden
* Für Gästebefragungen zu Kurswahl, Schulpolitik usw.
* Für Anti-Mobbing-Befragungen, bei denen Teilnehmer/innen Vorfälle anonym melden können';
$string['numberoutofrange'] = 'Zahl ausserhalb des Bereichs';
