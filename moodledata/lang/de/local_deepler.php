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
 * Strings for component 'local_deepler', language 'de', version '4.5'.
 *
 * @package     local_deepler
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowsublangs'] = 'Untersprachen können ihren Hauptsprachen zugeordnet werden';
$string['allowsublangs_desc'] = 'Wenn Ihre Installation eine lokale Untersprache hat, z.B. de_ch, wird ihre Hauptsprache (de) als Ausgangssprache betrachtet, andernfalls zeigt das Plugin eine Fehlerseite "Die Ausgangssprache, in der Sie sich befinden, wird von DeepL nicht unterstützt." an (Standardeinstellung: ein)';
$string['apikeytitle'] = 'API Key für DeepL Translate';
$string['apikeytitle_desc'] = 'Kopieren Sie Ihren API-Schlüssel von DeepL, um die maschinelle Übersetzung zu nutzen.';
$string['badsettings'] = 'Die Einstellung DeepL scheint unvollständig zu sein, wahrscheinlich fehlt die API.
Fragen Sie Ihre/n Moodle-Administrator/in';
$string['canttranslate'] = 'Kann \'{$a}\' nicht in \'{$a}\' übersetzen, bitte wählen Sie eine andere Zielsprache';
$string['canttranslatesame'] = 'Beide Sprachen sind gleich:';
$string['contextdeepl'] = 'Kurskontext';
$string['contextdeepl_placeholder'] = 'Informieren Sie den Übersetzer (DeepL) über den Kontext, damit er kontextbezogener übersetzen kann... (experimentell)';
$string['deeplapidoc'] = 'siehe Einzelheiten in der Dokumentation von DeepL';
$string['deeplapidoctitle'] = 'API Einstellungen von DeepL';
$string['deeplapiexception'] = 'Die API von DeepL hat einen Fehler zurückgegeben';
$string['deepler:edittranslations'] = 'Kursübersetzungen in Deepl Übersetzer bearbeiten';
$string['deeplprotitle'] = 'DeepL Pro benützen?';
$string['deeplprotitle_desc'] = 'Wenn diese Option aktiviert ist, verwendet Deepl Übersetzer DeepL Pro anstelle der kostenlosen Version von DeepL.';
$string['doselecttarget'] = 'Wählen Sie bitte eine Zielsprache.';
$string['editbutton'] = 'Quelle direkt bearbeiten';
$string['errordbpartial'] = '{$a} der Felder wurden NICHT in der Datenbank gespeichert. Überprüfen Sie manuell vor Ort';
$string['errordbtitle'] = 'Datenbankfehler';
$string['errortoolong'] = '(Es könnte sein, dass der Text zu lang für das Feld ist... Prüfen Sie manuell vor Ort)';
$string['filters'] = 'Filter';
$string['formality'] = 'Anredeform';
$string['formalitydefault'] = 'standard';
$string['formalityless'] = 'informell';
$string['formalitymore'] = 'formell';
$string['formalitypreferless'] = 'informell bevorzugen';
$string['formalityprefermore'] = 'formell bevorzugen';
$string['glossaryid'] = 'Glossar-ID';
$string['glossaryid_placeholder'] = 'Glossar-ID, falls Sie eine haben ...';
$string['ignoretags'] = 'Zu ignorierende Tags';
$string['keepselected'] = 'Ausgewählt lassen';
$string['latexeascape'] = 'LaTeX escapen ($$LaTeXFormulas$$ nicht zum Übersetzen senden)';
$string['latexescapeadmin'] = 'Standardwert für LaTeX escapen
(in the courses translation page "Advanced Settings")';
$string['latexescapeadmin_desc'] = 'Wenn diese Option aktiviert ist, wird im Kursübersetzungsformular die Option "LaTeX-Formeln escapen" aktiviert.
Dadurch wird standardmässig die Nichtübersetzung von LaTeX-Formeln im Kurs aktiviert.
Deaktivieren Sie diese Option hier, wenn Ihre Organisation in den Kursen selten LaTeX-Formeln verwendet, um die Leistung von Deepler Übersetzer leicht zu verbessern.';
$string['modeltype'] = 'Modell';
$string['needsupdate'] = 'Aktualisierung erforderlich';
$string['nevertranslated'] = 'Noch keine \'{$a}\' Übersetzung';
$string['nodeeplpapi'] = ':-( Es kann keine Verbindung zur DeepL-API hergestellt werden. <br/>Wenden Sie sich an Ihren Administrator. Offenbar liegt ein Netzwerkproblem vor.';
$string['nonsplittingtags'] = 'Nicht trennende Tags';
$string['notsupportedsource'] = 'Die Ausgangssprache, in der Sie sich befinden, wird von DeepL nicht unterstützt.';
$string['othersettingstitle'] = 'Andere Einstellungen';
$string['outlinedetection'] = 'XML-Outline-Erkennung';
$string['pluginname'] = 'Deepl Übersetzer';
$string['pluginversion'] = 'Aktuelle Version';
$string['preescape'] = 'PRE html-Tag escapen';
$string['preescapeadmin'] = 'PRE html-Tag escapen';
$string['preescapeadmin_desc'] = 'Wenn diese Option aktiviertist, werden &lt;pre&gt;...&lt;/pre&gt; Inhalte nicht zur Übersetzung gesendet';
$string['preserveformatting'] = 'Formatierung beibehalten';
$string['privacy:metadata'] = 'Das Deepl Übersetzer Plugin speichert keine personenbezogenen Daten.';
$string['saveall'] = 'Alle&nbsp;speichern';
$string['saveallexplain'] = 'Speicherung aller ausgewählten Übersetzungen in der Datenbank.';
$string['saveallmodalbody'] = '<div class="spinner-border text-primary" role="status"><span class="sr-only">Speichert...</span>\\n</div>
<p>Bitte warten ...<br/>Wenn alle Felder in der Datenbank gespeichert sind,<br/>schliesse ich mich automatisch.</p>
<p>Wenn Sie ungeduldig sind und dieses Fenster schließen möchten,
<br/>stellen Sie sicher, dass alle ausgewählten Übersetzungen diesen Status haben <i class="fa fa-database" aria-hidden="true"></i></p>';
$string['saveallmodaltitle'] = 'Saving translations to the database';
$string['scannedfieldsize'] = 'Minimale Textfeldgröße';
$string['scannedfieldsize_desc'] = 'Kleine Textfelder sind in der Datenbank oft in der Grösse begrenzt. Der Textinhalt wächst recht schnell
 (plus die mlang-Tags) bei jedem Übersetzungsschritt.
 Nach der Übersetzung, wenn der Text zu groß ist, wird die Datenbank einen Fehler werfen. Legen Sie die Größe hier auf der Grundlage Ihrer wichtigsten Spracheigenschaften und
 der Anzahl der Sprachen, die Ihr Moodle unterstützt fest.';
$string['seesetting'] = 'Erweiterte Einstellungen';
$string['selectall'] = 'Alle';
$string['selecttargetlanguage'] = 'Zielsprache <em>{mlang {$a}}</em>';
$string['showhiddenforstudents'] = '"{$a}" anzeigen';
$string['sourcelang'] = 'Ausgangssprache <em>{mlang other}</em>';
$string['specialsourcetext'] = 'Eine andere Quelle als "{$a}" benützen';
$string['splitsentences'] = 'Sätze trennen?';
$string['splitsentences0'] = 'überhaupt kein Trennen';
$string['splitsentences1'] = 'Trennung bei Satzzeichen und Zeilenumbrüchen';
$string['splitsentencesnonewlines'] = 'Trennung nur bei Satzzeichen, Zeilenumbrüche ignorieren';
$string['splittingtags'] = 'Trennende Tags';
$string['statusfailed'] = 'Fehlgeschlagen';
$string['statussaved'] = 'Gespeichert';
$string['statussuccess'] = 'Erfolgreich';
$string['statustosave'] = 'Dies speichern';
$string['statustotranslate'] = 'Bereit zur Übersetzung';
$string['statuswait'] = 'Nicht ausgewählt';
$string['taghandling'] = 'Tags behandeln als :';
$string['tagsplaceholder'] = 'Alle Tags auflisten (Tags mit Komma trennen &quot;,&quot;)';
$string['tour_advancedsettings00'] = 'Klicken Sie hier, um zu sehen, wie Sie das Verhalten von DeepL optimieren können.<br/><br/>Klicken Sie jetzt, um eine Führung durch die Funktionen zu erhalten.';
$string['tour_advancedsettings00title'] = 'Erweiterte Einstellungen von DeepL';
$string['tour_advancedsettings01formality'] = '';
$string['tour_advancedsettings01formalitytitle'] = '';
$string['tour_advancedsettings02split'] = '';
$string['tour_advancedsettings02splittitle'] = '';
$string['tour_advancedsettings03formating'] = '';
$string['tour_advancedsettings03formatingtitle'] = '';
$string['tour_advancedsettings04glossary'] = '';
$string['tour_advancedsettings04glossarytitle'] = '';
$string['tour_advancedsettings05context'] = '';
$string['tour_advancedsettings05contexttitle'] = '';
$string['tour_advancedsettings06tag'] = '';
$string['tour_advancedsettings06tagtitle'] = '';
$string['tour_advancedsettings07outline'] = '';
$string['tour_advancedsettings07outlinetitle'] = '';
$string['tour_advancedsettings08skiptag'] = '';
$string['tour_advancedsettings08skiptagtitle'] = '';
$string['tour_advancedsettings09splittag'] = '';
$string['tour_advancedsettings09splittagtitle'] = '';
$string['tour_advancedsettings101other'] = '<p>Hier teilen Sie dem Plugin mit, dass es die Übersetzung von LaTeX-Zeichenfolgen ($$...$$) und oder PRE HTML-Tags vermeiden soll.</p>';
$string['tour_advancedsettings101othertitle'] = 'LaTeX und/oder PRE-Tag-Escaping aktivieren';
$string['tour_advancedsettings10splittag'] = '<p>Kommagetrennte Liste von XML- oder HTML-Tags, die immer ein Aufteilen verursachen.</p>';
$string['tour_advancedsettings10splittagtitle'] = 'Tags, welche den Text in Sätze aufteilt.';
$string['tour_advancedsettings11sourcelang'] = '<p>Die Ausgangssprache ist die Sprache, in der der Kurs geschrieben wurde.
Am besten ist es, die gleiche Sprache für den gesamten Kurs zu verwenden.</p>';
$string['tour_advancedsettings11sourcelangtitle'] = 'Ausgangssprache';
$string['tour_advancedsettings12targetlang'] = '<p>Die Zielsprache ist die, welche Sie möchten, dass DeepL zurückgibt.</p>
<p>Wenn Sie dieselbe Sprache wie die Quelle auswählen, ist die Übersetzungsschaltfläche natürlich deaktiviert.</p>';
$string['tour_advancedsettings12targetlangtitle'] = 'Zielsprache';
$string['tour_advancedsettings13filters'] = '';
$string['tour_advancedsettings13filterstitle'] = '';
$string['tour_advancedsettings14filters'] = '';
$string['tour_advancedsettings14filterstitle'] = 'Alle auswählen';
$string['tour_advancedsettings15filters'] = '';
$string['tour_advancedsettings15filterstitle'] = '';
$string['tour_advancedsettings16sendtodeepl'] = '<p>Clinkg this button will send all selected texts to DeepL and feed it in the editors.</p>
<p>At least one selection is needed to ctivate it.</p>';
$string['tour_advancedsettings16sendtodeepltitle'] = 'Zu DeepL senden';
$string['tour_advancedsettings17statusbullet'] = '';
$string['tour_advancedsettings17statusbullettitle'] = '';
$string['tour_advancedsettings18selection'] = '';
$string['tour_advancedsettings18selectiontitle'] = '';
$string['tour_advancedsettings19editsource'] = '<p><span class="p-1 btn btn-sm btn-outline-info"><i class="fa fa-pencil"> </i>
</span>Mit einem Klick auf den Stift gelangen Sie zum Kurseditor im Moodle-Kurs.</p>
<p>Sollten Sie Überarbeitungen der Quelle haben oder Änderungen vornehmen wollen, so können Sie die Quelle nicht von hier aus ändern.</p>';
$string['tour_advancedsettings19editsourcetitle'] = 'Quelle direkt bearbeiten.';
$string['tour_advancedsettings20togglemultilang'] = '';
$string['tour_advancedsettings20togglemultilangtitle'] = '';
$string['tour_advancedsettings21secondsource'] = 'Sie können eine sekundäre Quelle für bestimmte Inhalte auswählen. <br/>Wenn noch kein "Andere"-Sprachtag vorhanden ist, wird die Quelle in ihrer Sprache und "Andere" gespeichert.';
$string['tour_advancedsettings21secondsourcetitle'] = 'Sekundäre Ausganssprache';
$string['tour_advancedsettings22process'] = '';
$string['tour_advancedsettings22processtitle'] = '';
$string['tour_advancedsettings23saveall'] = '';
$string['tour_advancedsettings23savealltitle'] = 'Alle Übersetzungen in der Datenbank speichern.';
$string['translatebutton'] = 'Übersetzen &rarr; {$a}';
$string['translateexplain'] = 'Alle markierten Zeilen in {$a} übersetzen';
$string['translationdisabled'] = 'Die Übersetzung ist deaktiviert, da dies als Link in der Datenbank verwendet wird.';
$string['uptodate'] = 'Aktuell';
$string['viewsource'] = 'Mehrsprachigen Inhalt überprüfen';
$string['viewsourcedisabled'] = 'Noch kein mehrsprachiger Inhalt.';
$string['warningsource'] = 'Achtung! Die aktuelle Quellsprache &quot;{$a}&quot; ist neben dem Fallback-Tag „Andere“ bereits ein mehrsprachiges Tag. Beachten Sie, dass beide als „Andere“ Multilang-Tag zusammengeführt werden.';
$string['wordcountsentence'] = 'Total <span id="local_deepler__wc">0</span> Worte, <span id="local_deepler__wosc">0</span> Zeichen (<span id="local_deepler__wsc">0</span> Zeichen inklusive Leerzeichen) Verwendung von DeepL = <span id="local_deepler__used">0</span>/<span id="local_deepler__max">0</span>';
