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
 * Strings for component 'quiz_essaydownload', language 'de', version '4.5'.
 *
 * @package     quiz_essaydownload
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allinone'] = 'Alle Antworten pro Versuch in einer Datei';
$string['allinone_help'] = 'Wenn diese Option aktiviert ist, werden alle Antworten eines Versuchs in einer einzigen Datei gesammelt.';
$string['attachments'] = 'Dateianhänge';
$string['byattempt'] = 'Versuch';
$string['byquestion'] = 'Frage';
$string['errorfilename'] = 'fehler-{$a}.txt';
$string['errorfontsize'] = 'Die Schriftgröße sollte eine ganze Zahl zwischen 6 und 50 sein.';
$string['errormargin'] = 'Die Seitenränder müssen ganzzahlig sein sowie zwischen 0 und 80 liegen.';
$string['errormessage'] = 'Ein interner Fehler ist aufgetreten. Das Archiv ist eventuell unvollständig. Bitte kontaktieren Sie die Entwickler des Plugins «quiz_essaydownload» and senden Sie ihnen die folgenden Details:';
$string['essaydownload'] = 'Antworten von Freitext-Fragen herunterladen';
$string['fileformat'] = 'Dateiformat';
$string['fileformat_help'] = 'Sie können zwischen zwei Formaten wählen: <ul><li>Portable Document Format (PDF) ermöglicht es, für jede Antwort direkt ein formatiertes Dokument zu erhalten, passend für eine Korrektur am Bildschirm oder zum Ausdrucken.</li><li>Text (TXT) ist schneller und führt zu einer kleineren Dateigrösse beim Export, was insbesondere für grosse Tests wichtig sein könnte. Die Dateien können mit einem beliebigen Texteditor gelesen oder mithilfe einer Textverarbeitung formatiert werden. Das Format ist auch geeignet, falls Sie, z. B. mithilfe von eigenen Hilfsprogrammen, die Antworten selbst verarbeiten.';
$string['fileformatpdf'] = 'Portable Document Format (PDF)';
$string['fileformattxt'] = 'Text (TXT)';
$string['firstlast'] = 'Vorname - Nachname';
$string['fixremfontsize'] = 'Unlesbar kleinen Text vermeiden.';
$string['fixremfontsize_help'] = 'Der Moodle-HTML-Editor <i>Atto</i> fügt manchmal unbemerkt unerwünschte Schriftformate ein, welche Teile des Texts im PDF unlesbar klein machen können. Diese Option umgeht das Problem.';
$string['font'] = 'Schriftart';
$string['font_help'] = 'Beachten Sie: Wenn die originale, HTML-formatierte Antwort verwendet wird, kann die Schriftart im PDF-Dokument abweichen, abhängig von der gewählten Formatierung.<br><br>Wenn Sie die Text-Zusammenfassung als Datenquelle verwenden, ist eventuell eine Festbreiten-Schriftart sinnvoll.';
$string['fontmono'] = 'Festbreite';
$string['fontsans'] = 'Serifenlos';
$string['fontserif'] = 'Serifen';
$string['fontsize'] = 'Schriftgrösse (Punkt)';
$string['fontsize_help'] = 'Beachten Sie: Wenn die originale, HTML-formatierte Antwort verwendet wird, kann die Schriftgröße im PDF-Dokument abweichen, abhängig von der gewählten Formatierung.';
$string['footer'] = 'Fußzeile';
$string['forceqtsummary'] = 'Für Fragetext Verwendung der Text-Zusammenfassung erzwingen';
$string['forceqtsummary_help'] = 'Der Export des Fragetexts im HTML-Format kann in manchen Fällen fehlschlagen, zum Beispiel wenn dieser Bilder enthält, die nur eingeschränkt zugänglich sind. Wenn diese Option aktiviert ist, wird für den Export die Text-Zusammenfassung verwendet, auch wenn die Textquelle auf <i>Originaltext inklusive Formatierung</i> gesetzt ist.';
$string['generaloptions'] = 'Allgemeine Optionen';
$string['groupby'] = 'Gruppiert nach';
$string['groupby_help'] = 'Das Archiv kann nach Fragen oder nach Versuchen strukturiert werden:<ul><li>Wenn Sie nach Frage gruppieren, enthält das Archiv einen Ordner für jede Frage.</li><li>Wenn Sie nach Versuch gruppieren, enthält das Archiv einen Ordner für jeden Versuch. Innerhalb jedes Ordners gibt es dann einen Ordner für jede Frage.</li></ul>';
$string['includeattachments'] = 'Allfällig in der Antwort vorhandene Dateianhänge einbeziehen';
$string['includeattachments_help'] = 'Dateianhänge werden so integriert, wie sie sind. Beachten Sie, dass Anhänge Schadsoftware enthalten können.';
$string['includefooter'] = 'Fußzeile mit Seitennummer hinzufügen';
$string['includequestiontext'] = 'Fragetext einbeziehen';
$string['includequestiontext_help'] = 'Der Einbezug des Fragetexts kann nützlich sein, wenn ein Test Zufallsfragen verwendet.';
$string['includestats'] = 'Wort- und Zeichenzahl am Ende der Antwort anfügen.';
$string['includestats_help'] = 'Hinweis: Die Zeichenzahl zählt keine Leerzeichen.';
$string['lastfirst'] = 'Nachname - Vorname';
$string['limitattempts'] = 'Anzahl Versuche beschränken';
$string['linedouble'] = 'Doppelt';
$string['lineoneandhalf'] = '1.5 Zeilen';
$string['linesingle'] = 'Einfach';
$string['linespacing'] = 'Zeilenabstand';
$string['margins'] = 'Seitenränder (mm): links, rechts, oben, unten';
$string['nameordering'] = 'Namensformat';
$string['noessayquestion'] = 'Der Test verfügt über keine Freitext-Fragen.';
$string['nothingtodownload'] = 'Nichts herunterzuladen';
$string['onlyone'] = 'Max. einen fertigen Versuch pro Teilnehmer/in exportieren: {$a}';
$string['onlyone_help'] = 'Wenn bei einem Test mehrere Versuche erlaubt sind, werden normalerweise alle abgeschlossenen Versuche aller Teilnehmer/innen exportiert. Manchmal ist allerdings nur der letzte relevant, oder der erste oder jener mit der höchsten Bewertung. Mit dieser Option wird nur maximal ein Versuch pro Teilnehmer/in ins Archiv aufgenommen.';
$string['page'] = 'Seitenformat';
$string['pagea4'] = 'A4';
$string['pageletter'] = 'Letter';
$string['pagenumber'] = 'Seite {$a}';
$string['pdfoptions'] = 'Einstellungen für PDF-Format';
$string['plugindescription'] = 'Textantworten und Dateianhänge herunterladen, die als Antwort auf Freitext-Fragen in einem Test eingereicht wurden.';
$string['pluginname'] = 'Plugin zum Herunterladen von Freitext-Antworten (quiz_essaydownload)';
$string['presentedto'] = 'Bearbeitet von: {$a}';
$string['privacy:metadata'] = 'Das Plugin \'Eingaben von Freitext-Fragen herunterladen\' speichert keine personenbezogenen Daten.';
$string['response'] = 'Antwort';
$string['responsewith'] = 'Antwort zu Frage {$a}';
$string['shortennames'] = 'Archiv- und Ordnernamen verkürzen.';
$string['shortennames_help'] = 'Wenn die Gesamtlänge des Ordner- und Dateinamens einer extrahierten Datei länger als 260 Zeichen ist, kann das beim eingebauten Windows-Entpacker zu einem Fehler führen. Diese Option sorgt für kürzere Ordner- und Dateinamen und kann das Problem umgehen. Sie kann es aber schwieriger machen, die einzelnen Studierenden zu erkennen, falls diese sehr lange Namen haben.';
$string['source'] = 'Zu verwendende Textquelle';
$string['source_help'] = 'Wenn der Fragetext oder die Antwort im HTML-Format eingegeben wurde, erstellt Moodle automatisch eine Text-Zusammenfassung des formatierten Texts. Diese Zusammenfassung enthält keine HTML-Tags mehr, gewisse grundlegende Formatierungen bleiben durch Umwandlungen sichtbar (z. B. Titel oder Fettschrift umgewandelt in GROSSBUCHSTABEN).<br><br>Beim Erstellen von PDF-Dateien können Sie wählen, ob die Text-Zusammenfassung oder der Originaltext bzw. die originale Antwort inklusive Formatierung verwendet werden soll. Wenn Sie die Zusammenfassung wählen, sollten sie eventuell eine Festbreiten-Schriftart verwenden.<br><br>Beachten Sie, dass Sie den Originaltext bzw. die originale Antwort inklusive Formatierung nicht verwenden können, wenn Sie das Dateiformat Text (TXT) wählen. Beachten Sie ausserdem, dass die Einstellung keine Auswirkung hat, wenn die Antwort nicht im HTML-Format eingegeben worden ist, z. B. weil die Frage dies gar nicht zuliess.';
$string['sourceoriginal'] = 'Originaltext inklusive Formatierung';
$string['sourcesummary'] = 'Text-Zusammenfassung';
$string['statistics'] = 'Statistik';
$string['statisticsnote'] = '{$a->words} Wörter, {$a->chars} Zeichen (ohne Leerzeichen)';
$string['troubleshooting'] = 'Problembehandlung';
$string['useflatarchive'] = 'Flache Ordnerstruktur verwenden';
$string['useflatarchive_help'] = 'Wenn diese Option aktiviert ist, wird die Ordnerstruktur im Archiv «flacher», d.h. statt <i>Attempt_X/Question_Y/response.pdf</i> lautet der Pfadname <i>Attempt_X/Question_Y_response.pdf</i> (oder analog, wenn nach Frage gruppiert). Entsprechend braucht es weniger Klicks, um auf die einzelnen Dokumente zuzugreifen.';
