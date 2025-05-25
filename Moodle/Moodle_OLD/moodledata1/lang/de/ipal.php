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
 * Strings for component 'ipal', language 'de', version '3.10'.
 *
 * @package     ipal
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['anonymousmess'] = 'Ihre Antwort wird anonym aufgezeichnet';
$string['attendancequestion'] = 'Sind Sie heute hier?';
$string['attendancequestion2'] = 'Wenn ja, geben sie bitte den angezeigten Code in das Textfeld ein und klicken Sie auf Absenden, so dass Sie als anwesend gezählt werden können.';
$string['basicideasofipal'] = 'Die Grundidee der Fragenauswahl für die In-der-Klasse-Umfrage';
$string['editingipal'] = 'Hinzufügen (auswählen) von IPAL-Fragen';
$string['editingipal_ex'] = 'IPAL bearbeiten: {$a}';
$string['editingipal_help'] = 'Bei der Auswahl von Fragen für IPAL sind die wichtigsten Konzepte:

* Wählen Sie Fragen, die Sie verwenden möchten, aus der Fragenbank, aus ComPADRE oder erstellen Sie neue Fragen.
* Die Reihenfolge der Fragen ist nicht wichtig, da Sie sie in beliebiger Reihenfolge senden können.
* Während einer Abfrage können Sie dieselbe Frage mehrmals senden.';
$string['eventeditpageviewed'] = 'IPAL-Bearbeitungsseite angesehen';
$string['introduction'] = 'Beschreibung';
$string['ipal'] = 'IPAL';
$string['ipal:addinstance'] = 'Eine neue IPAL hinzufügen';
$string['ipal:manage'] = 'IPALs verwalten';
$string['ipal:preview'] = 'Vorschau IPALS';
$string['ipal:view'] = 'IPAL-Informationen anzeigen';
$string['ipal:viewreports'] = 'IPAL-Bericht anzeigen';
$string['ipal_analytics'] = 'Analyse verbessern';
$string['ipal_analytics_help'] = 'Wenn dies ausgewählt wurde, werden die Abfragedaten des Teilnehmers, identifiziert nur durch die Moodle-Nutzer-ID, an die ComPADRE-Seite gesendet, damit sie dort ausgewertet werden können. Nur berechtigte Personen Ihrer Institution können auf die Daten zugreifen und den Namen des Nutzer oder den aktuellen Namen jedes Teilnehmers ermitteln. Diese berechtigten Personen können nur die Analysedaten ihrer eigenen Institution einsehen.<br />
Wenn dies nicht ausgewählt ist, werden keinerlei Daten an die ComPADRE-Seite gesendet.';
$string['ipal_autocreate_generic'] = 'Generische Fragen automatisch erzeugen';
$string['ipal_autocreate_generic_help'] = 'Wenn dies ausgewählt wurde, werden generische Multiple-Choice- und Text-Fragen automatisch erzeugt, wenn der Lehrer zuerst wählt, die Fragen für eine IPAL-Instanz auszuwählen.';
$string['ipal_enable_compadre'] = 'Den Abruf von Fragen aus ComPADRE ermöglichen';
$string['ipal_enable_compadre_help'] = 'Wenn diese Option ausgewählt ist, kann der Lehrer vorbereitete peer-reviewte Fragen importieren.
Der erste Fragensatz enthält Hunderte von einleitenden Physikfragen aus den ConcepTest-Fragen, die von Physik-Professor Eric Mazur und seiner Gruppe von der Harvard University verfasst wurden. Diese Fragen sind abgelegt unter <a href="http://www.compadre.org/" target="_blank"> ComPADRE </a>, einer nationalen digitalen Bibliothek für Physik und Astronomie.';
$string['ipalfieldset'] = 'Benutzerdefinierter Beispielssatz';
$string['ipalmobile'] = 'Klicker (Mobile Apps) ermöglichen';
$string['ipalmobile_error'] = 'Sie müssen zwischen "Nein" und "Mobile App" wählen';
$string['ipalmobile_help'] = 'Wälen Sie "Mobile App" um den Teilnehmern die Verwendung einer App bei der Beantwortung zu erlauben. Dies zeigt den Ipal-Zugangscode für den Lehrer auf der IPAL-Umfrageseite an.';
$string['ipalname'] = 'IPAL-Name';
$string['ipalname_help'] = 'Dies ist der Inhalt des Hilfe-Tooltips, das dem IPAL-Namefeld zugeordnet ist. Markdown-Syntax wird unterstützt.';
$string['ipalsettings'] = 'IPAL-Einstellungen';
$string['ipaltype'] = 'IPAL-Typ';
$string['ipaltype_error'] = 'Sie müssen zwischen anonym und nicht anonym wählen';
$string['ipaltype_help'] = 'Wählen Sie, ob die Nutzer-ID in der Antworttabelle aufgezeichnet wird (nicht anonym) oder nicht (anonym). Der IPAL-Typ kann nicht mehr geändert werden, nachdem eine Antwort aufgezeichnet wurde.';
$string['modulename'] = 'IPAL';
$string['modulename_help'] = 'Das Aktivitätsmodul IPAL (In-Class-Polling für alle Lerner) ermöglicht es einem Lehrer, Abfragen zu entwerfen und festzulegen, die aus Multiple-Choice-, Wahr-Falsch- und Text-Fragetypen bestehen. IPAL-Fragen können auch in einem Quiz verwendet werden und umgekehrt. Gebrauchsfertige Fragen können auch aus der ComPADRE-Datenbank abgerufen werden.

Die dynamischen Diagramme, die unter den Fragen angezeigt werden, können von der Tabellenansicht (einschließlich Schülernamen) in eine anonyme Anzeige der Antworten für die aktive Frage umgeschaltet werden - ein Histogramm für Multiple-Choice-Fragen und eine einzeilige Anzeige für Textfragen. Während die Abfrage aktiviert ist, kann eine Frage mehrmals beantwortet werden, so lange bis eine zweite Frage gesendet oder die Abfrage deaktiviert wird.

Eine Frage kann mehrmals gesendet werden. In der Tabellenansicht wird die jeweils zuletzt eingereichte Antwort angezeigt.

Abfragen können verwendet werden
* Um die Schülerbeteiligung und -beteiligung zu erhöhen
* Um das Verständnis der Schüler zu messen und das Tempo des Unterrichts zu steuern.
* Um eine stärkere verbale Diskussion im Klassenzimmer zu fördern.

<a href="https://www.compadre.org/iPAL/webdocs/Guide.cfm"> mehr </a>';
$string['modulenameplural'] = 'IPALS';
$string['pluginadministration'] = 'IPAL Verwaltung';
$string['pluginname'] = 'IPAL';
