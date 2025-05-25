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
 * Strings for component 'block_demostudent', language 'de', version '3.10'.
 *
 * @package     block_demostudent
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adviceforfirstuse'] = 'Durch die Einrichtung eines DemoStudent-Kontos wird ein Benutzer "DemoStudent" in diesen Kurs eingeschrieben. Danach ist es möglich, als DemoStudent einzuloggen, um so die Teilnehmersicht zu testen.';
$string['adviceforinstructor'] = 'Ein DemoStudent-Konto wurde für diesen Kurs erstellt. Durch den Wechsel zum DemoStudent-Konto kann man:<blockquote>
<ul><li>den Kurs als Teilnehmer ansehen
<li>die Gruppen-Zugehörigkeit austesten
<li>Aktivitäten aus Teilnehmersicht austesten
</ul></blockquote>';
$string['advicetwowindows'] = '<p>Zwei Browser, beide in Moodle eingeloggt<br>
der eine als Trainer, der andere als sein DemoStudent<br>
machen häufiges Hin- und Herwechseln<br>
von der einen zur anderen Rolle unnötig.';
$string['buttonfordemostudent'] = 'Zurück zu meiner <b>Trainer</b> Rolle.';
$string['buttonforfirstuse'] = 'DemoStudent erstellen';
$string['buttonforinstructor'] = 'Zu DemoStudent wechseln';
$string['buttonforunenrol'] = 'DemoStudent aus Kurs austragen';
$string['demostudent'] = 'DemoStudent Ansicht';
$string['demostudent:addinstance'] = 'Füge einen neuen DemoStudent-Block hinzu (nur für Trainer).';
$string['demostudent:seedemostudentblock'] = 'DemoStudent-Block ansehen (für Trainer und DemoStudent).';
$string['errorfailedtocreateuser'] = '<hr><h4>ERROR:</h4>Benutzer <b>{$a}</b>konnte nicht erstellt werden.';
$string['errorinstructormasquerade'] = '<hr><h4>ERROR:</h4>Ein DemoStudent Konto kann einen Kurs nicht als Trainer betrachten.<p>Bitte nochmals einloggen.<hr>';
$string['errormissingaddinstancecapability'] = '<hr><h4>ERROR:</h4>Sie brauchen die                                         <i>block/demostudent:addinstance</i> Eigenschaft um
ein DemoStudent-Konto zu erstellen.<p> Lassen Sie einen Administrator Ihre Rolle und Eigenschaften überprüfen.<p>Bitte erneut einloggen.<hr>';
$string['errorremovenotinstructor'] = '<hr><h4>ERROR:</h4>Nur ein Trainer kann seinen eigenen DemoStudent löschen.<p>Bitte nochmals einloggen.<hr>';
$string['pluginname'] = 'DemoStudent Block';
$string['returntocourse'] = '<p><a href="{$a}">Zurück</a> zum Kurs.';
$string['roledemostudentdescription'] = 'Rolle für Kontos, welche mit dem DemoStudent Block erstellt wurden, damit Trainer ihre Kurse testen können.';
$string['roledemostudentname'] = 'DemoStudent';
$string['switchfromdemostudentview'] = 'Zurück zur Trainer-Ansicht. Möglicherweise nochmals einloggen.';
$string['switchfromfirstuseview'] = 'Erstelle in diesem Kurs einen DemoStudent und schreibe ihn hier ein.';
$string['switchfrominstructorview'] = 'Kurs als DemoStudent anzeigen.';
$string['unenroltip'] = 'Den DemoStudent aus diesem Kurs austragen.';
$string['viewisdemostudent'] = 'Jetzt in <b>DemoStudent</b> Ansicht.';
$string['viewisfirstuse'] = 'Jetzt in <b>Trainer</b> Ansicht.';
$string['viewisinstructor'] = 'Jetzt in <b>Trainer</b> Ansicht.';
$string['warningcoursenotvisible'] = '<hr><h4>Dieser Kurs ist für Teilnehmer nicht verfügbar.</h4>
Trainer können dies nötigenfalls in den Einstellungen ändern .<hr>';
$string['warningmissingrole'] = '<hr><h4>ACHTUNG:</h4>Es konnte keine "demostudent" Rolle in der Datenbank gefunden werden.
Das kann zu unerwartetem Verhalten des DemoStudent-Blocks führen.
Bitte einen Administrator darum bitten, die Systemrollen zu überprüfen, und das Plugin nötigenfalls nochmals zu installieren.';
