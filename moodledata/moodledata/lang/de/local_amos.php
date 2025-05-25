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
 * Strings for component 'local_amos', language 'de', version '4.5'.
 *
 * @package     local_amos
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['about'] = '<p>AMOS ist eine zentrale Ablage von Moodle-Zeichenketten und ihrer Geschichte. Es verfolgt das Hinzufügen von englischen Zeichenketten in Moodle-Code, sammelt Übersetzungen, erledigt häufige Übersetzungsaufgaben und generiert Sprachpakete, die auf Moodle-Servern bereitgestellt werden.</p>
<p>Siehe <a href="https://docs.moodle.org/dev/AMOS_manual">AMOS-Dokumentation</a> für weitere Informationen.</p>';
$string['amos'] = 'AMOS Übersetzungswerkzeug';
$string['amos:changecontriblang'] = 'Sprache von bereitgestellten Texten ändern';
$string['amos:commit'] = 'Texte aus dem Arbeitsspeicher ins AMOS Repository übertragen';
$string['amos:editlangconfig'] = 'Konfigurationstexte des Sprachpakets bearbeiten';
$string['amos:execute'] = 'Angegebenes AMOScript ausführen';
$string['amos:importfile'] = 'Übersetzung hochladen und im Arbeitsspeicher zeigen';
$string['amos:importstrings'] = 'Texte (zusammen mit den englischen Texten) in das AMOS Repository importieren';
$string['amos:manage'] = 'AMOS-Portal verwalten';
$string['amos:stage'] = 'Texte im Arbeitsspeicher übersetzen';
$string['amos:stash'] = 'Arbeitsspeicher als Ablage sichern';
$string['amos:usegoogle'] = 'Mit Google-Translate-Service übersetzen';
$string['applangindexfile'] = 'Speicherort der Datei langindex zur Moodle App';
$string['applangindexfile_desc'] = 'Vollständige URL, wo die Datei heruntergeladen werden kann. Dies wird von einer Cron-Task erledigt.';
$string['branchesall'] = 'Alle Moodle-Versionen';
$string['branchesall_desc'] = 'Kommagetrennte Liste von Moodle-Versionscodes, die AMOS unterstützt. Dies wird verwendet, um die Liste der Versionen im Übersetzerfilter und an anderen Stellen aufzufüllen.';
$string['branchsupported'] = 'Älteste unterstützte Moodle-Version';
$string['branchsupported_desc'] = 'Code der ältesten Moodle-Version, in der Änderungen in den englischen Texten noch verfolgt werden sollen und für die die Installer-Sprachpakete noch generiert werden. Verwenden Sie <https://docs.moodle.org/dev/Releases#Version_support> als Referenz.';
$string['cachedef_lists'] = 'Liste von Sprachen und und Komponenten, die in AMOS bekannt sind';
$string['cachedef_stats'] = 'Von AMOS generierte Statistikdaten';
$string['commitbutton'] = 'Übernehmen';
$string['commitkeepstaged'] = 'Im Arbeitsspeicher behalten';
$string['commitmessage'] = 'Mitteilung';
$string['commitmessageempty'] = 'Schreiben Sie bitte eine Mitteilung';
$string['commitstage'] = 'Texte aus dem Arbeitsspeicher übernehmen';
$string['commitstage_help'] = 'Alle übersetzten Texte werden aus dem Arbeitsspeicher in das AMOS Repository übernommen. Der Arbeitsspeicher wird automatisch sortiert und nicht übertragbare Übersetzungen entfernt, bevor er übergeben wird. Dies bedeutet, dass nur die Übersetzungen in Feldern mit grüner Hintergrundfarbe gespeichert werden. Der Arbeitsspeicher wird anschließend geleert.';
$string['committable'] = 'Sie haben nicht das Recht, dieses Sprachpaket festzulegen';
$string['committableall'] = 'Alle Sprachen';
$string['committablenone'] = 'Keine Sprache zugewiesen - wenden Sie sich an den AMOS-Verwalter';
$string['componentsall'] = 'Alle';
$string['componentsapp'] = 'Moodle App';
$string['componentsnone'] = 'Keine';
$string['componentsstandard'] = 'Standard';
$string['componentsworkplace'] = 'Moodle Workplace';
$string['confirmaction'] = 'Möchten Sie diesen Vorgang wirklich ausführen?';
$string['contribaccept'] = 'Annehmen';
$string['contribactions'] = 'Beigesteuerte Übersetzungsaktion';
$string['contribactions_help'] = 'Abhängig von Ihren Rechten und dem Arbeitsablauf haben Sie folgende Möglichkeiten:

* Verwenden - Kopieren Sie die beigesteuerten Übersetzung in Ihren Arbeitsspeicher, ohne etwas zu verändern
* Mir zuweisen - sich selbst als Prüfer/in eintragen, die eingesandte Übersetzung prüfen und ins Sprachpaket einbinden
* Abgeben - niemanden zur Prüfung zuweisen
* Prüfung beginnen - Weisen Sie den Beitrag sich selbst zu, setzen Sie den Status auf "In Bearbeitung" und kopieren Sie die eingereichten Übersetzung in den Arbeitsspeicher
* Annehmen - markieren Sie den Beitrag als angenommen
* Ablehnen - markieren Sie den Beitrag als abgelehnt. Bitte schreiben Sie die Gründe in einem Kommentar.

Der Einsender wird per E-Mail informiert, wenn sich der Status seines Beitrags ändert.';
$string['contribactions_link'] = 'AMOS#Contributing_to_a_language_pack';
$string['contribapply'] = 'Verwenden';
$string['contribassignee'] = 'Prüfer/in';
$string['contribassigneenone'] = '-';
$string['contribassigntome'] = 'Mir zuweisen';
$string['contribauthor'] = 'Autor/in';
$string['contribclosedno'] = 'Erledigte Vorschläge verbergen';
$string['contribclosedyes'] = 'Erledigte Vorschläge anzeigen';
$string['contribcomponents'] = 'Komponenten';
$string['contribid'] = 'ID';
$string['contribincomingnone'] = 'Keine eingereichten Vorschläge';
$string['contribincomingsome'] = 'Eingereichte Vorschläge ({$a})';
$string['contriblanguage'] = 'Sprache';
$string['contriblanguagebutton'] = 'Konvertieren';
$string['contriblanguagechange'] = 'Falsche Sprache der Vorschläge korrigieren';
$string['contriblanguagechange_help'] = 'Wenn die Vorschläge für das falsche Sprachpaket abgegeben wurden, wählen Sie die richtige Sprache im Menü aus und klicken Sie auf die Taste \'Konvertieren\'.';
$string['contriblanguagereport'] = 'Falsche Sprache der Vorschläge mitteilen';
$string['contriblanguagereport_help'] = 'Wenn die bereitgestellte Übersetzung für das falsche Sprachpaket abgegeben wurde, kopieren Sie die URL in eine E-Mail an translation@moodle.org. Die bereitgestellte Übersetzung wird dann in das richtige Sprachpaket übertragen.';
$string['contriblanguagewrong'] = 'Falsche Sprache?';
$string['contribnotif'] = '[AMOS] Beitragsbenachrichtigung (#{$a->id})';
$string['contribnotifaccepted'] = '{$a->fullname} hat Ihre beigesteuerte Übersetzung
#{$a->id} {$a->subject} angenommen.

---------------------------------------------------------------------
Beitragsseite: {$a->contriburl}';
$string['contribnotifcommented'] = '{$a->fullname} hat die beigesteuerte Übersetzung
#{$a->id} {$a->subject} kommentiert.
---------------------------------------------------------------------

{$a->message}

---------------------------------------------------------------------
Beitragsseite: {$a->contriburl}';
$string['contribnotifconverted'] = '{$a->fullname} hat Ihre beigesteuerte Übersetzung
#{$a->id} {$a->subject} konvertiert.

Vielen Dank für Ihren Beitrag. Scheinbar wurde Ihr Beitrag versehentlich für das falsche Sprachpaket eingereicht. Deswegen wurde Ihr Beitrag für das falsche Sprachpaket abgelehnt und zum richtigen Sprachpaket verschoben. Dort findet jetzt die Prüfung durch die Betreuer/innen statt und Sie müssen nichts weiter tun.

Bitte überprüfen Sie künftig, dass Sie die richtige Sprache ausgewählt haben, wenn Sie mit der Übersetzung von Texten beginnen.

---------------------------------------------------------------------
Ursprüngliche Beitragsseite: {$a->contriborigurl}
Geänderte Beitragsseite: {$a->contribnewurl}';
$string['contribnotifpending'] = 'Es gibt eine ausstehende beigesteuerte Übersetzung, die Ihre Aktion erfordert.
#{$a->id} {$a->subject}

Als Betreuer/in des Sprachpakets sollten Sie alle eingereichten Beiträge überprüfen und schließlich übernehmen. Wenn Sie fertig sind, markieren Sie sie bitte als angenommen oder abgelehnt.

Weitere Details {$a->docsurl}
---------------------------------------------------------------------
Beitragsseite: {$a->contriburl}';
$string['contribnotifrejected'] = '{$a->fullname} hat Ihre beigesteuerte Übersetzung abgelehnt
#{$a->id} {$a->subject}

---------------------------------------------------------------------
Beitragsseite: {$a->contriburl}';
$string['contribnotifsubmitted'] = '{$a->fullname} hat eine neue beigesteuerte Übersetzung eingereicht
#{$a->id} {$a->subject}
---------------------------------------------------------------------

{$a->message}

* Sprache: {$a->language}
* Komponenten: {$a->components}
* Texte: {$a->strings}

---------------------------------------------------------------------
Beitragsseite: {$a->contriburl}';
$string['contribreject'] = 'Ablehnen';
$string['contribresign'] = 'Abgeben';
$string['contribstaged'] = 'Vorschlag im Arbeitsspeicher <a href="contrib.php?id={$a->id}">#{$a->id}</a> von {$a->author}';
$string['contribstagedinfo'] = 'Vorschlag im Arbeitsspeicher';
$string['contribstagedinfo_help'] = 'Die Texte im Arbeitsspeicher wurden von einem Community-Mitglied vorgeschlagen. Die Betreuer/innen des Sprachpakets werden gebeten, die Übersetzung zu prüfen. Die Texte erhalten den Status \'angenommen\' (und werden ins Sprachpaket übernommen) oder \'abgelehnt\' (wenn sie aus bestimmten Gründen nicht annehmbar sind).';
$string['contribstagedinfo_link'] = 'AMOS#Contributing_to_a_language_pack';
$string['contribstartreview'] = 'Prüfung beginnen';
$string['contribstatus'] = 'Status';
$string['contribstatus0'] = 'Neu';
$string['contribstatus10'] = 'In Bearbeitung';
$string['contribstatus20'] = 'Abgelehnt';
$string['contribstatus30'] = 'Angenommen';
$string['contribstatus_help'] = 'Die Arbeitsphasen für beigesteuerte Übersetzungen sind die folgenden:

* Neu - Vorschlag wurde eingereicht, wartet aber noch auf seine Überprüfung
* In Bearbeitung - Vorschlag wird von einem Betreuer/ einer Betreuerin des Sprachpakets bearbeitet
* Abgelehnt - Vorschlag wurde von einem Betreuer/ einer Betreuerin des Sprachpakets abgelehnt
* Angenommen - Vorschlag wurde von einem Betreuer/ einer Betreuerin des Sprachpakets ins Sprachpaket übergenommen';
$string['contribstatus_link'] = 'AMOS#Contributing_to_a_language_pack';
$string['contribstrings'] = 'Texte';
$string['contribstringseq'] = '{$a->orig} neu';
$string['contribstringsnone'] = '{$a->orig} (alle Texte sind übersetzt)';
$string['contribstringssome'] = '{$a->orig} (für {$a->same} Texte existiert eine neuere Übersetzung)';
$string['contribsubject'] = 'Betreff';
$string['contribsubmittednone'] = 'Keine eingereichten Vorschläge';
$string['contribsubmittedsome'] = 'Ihre Vorschläge ({$a})';
$string['contribtimemodified'] = 'Geändert';
$string['contribute'] = 'Mitmachen';
$string['contributenow'] = 'Jetzt mitmachen!';
$string['contributestats'] = 'Insgesamt wurden bisher <strong>{$a->count}</strong> Texte von Mitgliedern der Community übersetzt und in AMOS eingegeben.';
$string['contributethanks'] = 'Vielen Dank für die Beiträge von: {$a->listcontributors}';
$string['contributethankslist'] = '{$a->contributor1}, {$a->contributor2}, {$a->contributor3} und {$a->contributor4}';
$string['contributions'] = 'Vorschläge';
$string['creditsaddcontributor'] = 'Beteiligte Person hinzufügen';
$string['creditsaddmaintainer'] = 'Betreuer/in hinzufügen';
$string['creditscontact'] = 'Mitteilung senden';
$string['creditscontributors'] = 'Weitere beteiligte Personen';
$string['creditsdelcontributor'] = 'Beteiligte Person entfernen';
$string['creditsdelmaintainer'] = 'Betreuer/in entfernen';
$string['creditsmaintainedby'] = 'Betreut von';
$string['creditsnomaintainer'] = 'Aktuell ohne Betreuer/in. <a href="{$a->url}">Haben Sie Interesse?</a>';
$string['creditsthanks'] = 'Auf dieser Seite möchten wir uns bei allen bedanken, die an den Moodle-Übersetzungen mitgewirkt haben. Deren Arbeit hat die weltweite Verbreitung möglich gemacht.';
$string['creditstitlelong'] = 'Betreuer/innen und weitere beteiligte Personen beim Sprachpaket';
$string['creditstitleshort'] = 'Mitwirkende';
$string['diff'] = 'Vergleichen';
$string['diffstringmode'] = 'diff umschalten';
$string['err_exception'] = 'Fehler: {$a}';
$string['err_invalidlangcode'] = 'Ungültiger Sprachcode';
$string['err_parser'] = 'Parsingfehler: {$a}';
$string['filtercmp'] = 'Komponenten';
$string['filtercmp_desc'] = 'Texte für diese Komponenten zeigen';
$string['filtercmpnothingselected'] = 'Wählen Sie bitte eine Komponente';
$string['filterlng'] = 'Sprachen';
$string['filterlng_desc'] = 'Texte für diese Sprachen zeigen';
$string['filterlngnothingselected'] = 'Wählen Sie bitte eine Sprache';
$string['filtermis'] = 'Einschränkungen';
$string['filtermis_desc'] = 'Suche mit weiteren Angaben einschränken';
$string['filtermisfapp'] = 'Nur in der Moodle App verwendete Texte';
$string['filtermisfapp_help'] = 'Dieser Text wird in Moodle Apps verwendet als {$a}';
$string['filtermisfhas'] = 'Nur übersetzte Texte';
$string['filtermisfhlp'] = 'Nur Hilfetexte';
$string['filtermisfmis'] = 'Nur fehlende und geänderte Texte';
$string['filtermisfout'] = 'Nur geänderte Texte';
$string['filtermisfstg'] = 'Nur Texte im Arbeitsspeicher';
$string['filtermisfworkplace'] = 'Nur in Moodle Workplace verwendete Texte';
$string['filtermisfworkplace_help'] = 'Dieser Text wird in Moodle Workplace als {$a} verwendet';
$string['filtersid'] = 'Text-ID';
$string['filtersid_desc'] = 'Eindeutiges Schlüsselmerkmal';
$string['filtersidpartial'] = 'teilweise übereinstimmend';
$string['filtertxt'] = 'Textsuche';
$string['filtertxt_desc'] = 'Angegebener Textteil muss enthalten sein';
$string['filtertxtcasesensitive'] = 'Groß-/Kleinschreibung';
$string['filtertxteng'] = 'in den englischen Texten';
$string['filtertxtregex'] = 'regex';
$string['filtertxttra'] = 'In den übersetzten Texten';
$string['filterver'] = 'Version';
$string['filterver_desc'] = 'Texte für diese Moodle-Version zeigen';
$string['filtervernothingselected'] = 'Wählen Sie bitte eine Version';
$string['foundmissing'] = '{$a} fehlen';
$string['foundmissingonthispage'] = '{$a} auf dieser Seite';
$string['foundtotal'] = '{$a} gefunden';
$string['googletranslate'] = 'Google';
$string['importfile'] = 'Texte aus einer Datei importieren';
$string['importfile_help'] = 'Wenn Sie Ihre Texte offline übersetzen, laden Sie die Übersetzungen bitte über dieses Formular in den Arbeitsspeicher.

* Die Datei muss gültige Definitionen für Moodle-PHP-Texte enthalten. Im Verzeichnis \'/lang/en/\' der Moodle-Installation finden Sie passende Beispiele.
* Der Name der Datei muss genauso wie der Name der englischen Datei für die jeweilige Komponente lauten  (z.B. \'moodle.php\', \'assignment.php\' oder \'enrol_manual.php\').

Alle Texte aus der Datei werden in den Arbeitsspeicher geladen, u.z. für die gewählte Version und die gewählte Sprache.

Sie können mehrere PHP-Dateien auf einmal hochladen, wenn Sie sie als ZIP-Datei packen.';
$string['importfile_link'] = 'local/amos/importfile';
$string['language'] = 'Sprache';
$string['languagepacks'] = 'Zusätzliche Sprachpakete können auf Ihrer Moodle-Website über <em>Administration > Website-Administration > Sprache > Sprachpakete</em> oder manuell installiert werden. Weitere Infos finden Sie in der <a href="https://docs.moodle.org/en/Language_packs">Dokumentation zu Sprachpaketen</a>.';
$string['languages'] = 'Sprachen';
$string['languagesall'] = 'Alle';
$string['languagesnone'] = 'Keine';
$string['lastavailable'] = 'Neuste verfügbare Version';
$string['lessfilteringoptions'] = 'Weniger Optionen';
$string['log'] = 'Logdaten';
$string['logfilterbranch'] = 'Versionen';
$string['logfiltercommithash'] = 'git hash';
$string['logfiltercommitmsg'] = 'Übergabemitteilung enthält';
$string['logfiltercommits'] = 'Übergabefilter';
$string['logfiltercommittedafter'] = 'Übergabe nach';
$string['logfiltercommittedbefore'] = 'Übergabe vor';
$string['logfiltercomponent'] = 'Komponenten';
$string['logfilterlang'] = 'Sprachen';
$string['logfiltershow'] = 'Gefilterte Übergaben und Texte zeigen';
$string['logfiltersource'] = 'Quelle';
$string['logfiltersourceamos'] = 'amos (Webbasierter Übersetzer)';
$string['logfiltersourceautomerge'] = 'automerge (Übersetzung aus anderem Zweig kopiert)';
$string['logfiltersourcebot'] = 'bot (Bulk-Verarbeitung per Script)';
$string['logfiltersourcecommitscript'] = 'commitscript (Übergabemitteilung mit AMOScript)';
$string['logfiltersourcefixdrift'] = 'fixdrift (korrigierter Git-Vorgang)';
$string['logfiltersourcegit'] = 'git (git-Server für Quelltexte und Pakete)';
$string['logfiltersourceimport'] = 'import (importierte Texte für nicht standardmäßiges Plugin)';
$string['logfiltersourcerevclean'] = 'revclean (nachträglicher Aufräumprozess)';
$string['logfilterstringid'] = 'Text-ID';
$string['logfilterstrings'] = 'Textfilter';
$string['logfilterusergrp'] = 'Übergabe durch';
$string['logfilterusergrpor'] = 'oder';
$string['maintainers'] = 'Maintainer/innen';
$string['manageamos'] = 'AMOS verwalten';
$string['markuptodate'] = 'Die Übersetzung ist aktuell';
$string['markuptodatelabel'] = 'Als aktuell markieren';
$string['messageprovider:checker'] = 'Ergebnisse der Sprachpaketprüfung';
$string['messageprovider:contribution'] = 'Bereitgestellte Übersetzungen';
$string['morefilteringoptions'] = 'Weitere Optionen';
$string['newlanguage'] = 'Neue Sprache';
$string['nodiffs'] = 'Keine Unterschiede gefunden';
$string['nofiletoimport'] = 'Keine Unterschiede gefunden';
$string['nologsfound'] = 'Keine Texte gefunden - prüfen Sie bitte die Filtereinstellung';
$string['nostringsfound'] = 'Keine Texte gefunden';
$string['nostringtoimport'] = 'In der Datei wurde keine gültige Textzeile gefunden. Sind Sie sicher, dass Sie die richtige Datei gewählt haben und dass die Datei richtig formatiert ist?';
$string['nothingtostage'] = 'Bei der Ausführung konnte kein Text gefunden und in den Arbeitsspeicher geholt werden.';
$string['novalidzip'] = 'ZIP-Datei kann nicht entpackt werden';
$string['numofcommitsabovelimit'] = '{$a->found} zum Filter passende Übergaben gefunden, {$a->limit} werden gezeigt';
$string['numofcommitsunderlimit'] = '{$a->found} zum Filter passende Übergaben gefunden';
$string['numofmatchingstrings'] = 'Davon passen {$a->strings} Änderungen in {$a->commits} Übergaben zum Filter';
$string['outdatednotcommitted'] = 'Geänderter Text';
$string['outdatednotcommitted_help'] = 'AMOS hat einen Text als \'Geändert\' markiert, weil die englische Version des Textes nach der Übersetzung verändert wurde. Prüfen Sie bitte die Übersetzung.';
$string['outdatednotcommittedwarning'] = 'Geändert';
$string['ownstashactions'] = 'Ablageaktionen';
$string['ownstashactions_help'] = '* Verwenden - Die übersetzten Texte von der Ablage in den Arbeitsspeicher kopieren, ohne die Ablage zu verändern. Wenn sich ein Text bereits im Arbeitsspeicher befindet, wird er von jenem der Ablage überschrieben.
* Aufnehmen - Die übersetzten Texte von der Ablage in den Arbeitsspeicher kopieren, und die Ablage leeren (das ist Verwenden und Löschen).
* Löschen - Die Texte in der Ablage löschen.
* An Betreuer/in senden - Öffnet ein Formular zum Senden der Ablage an die offiziellen Betreuer/innen des Sprachpakets, damit sie Ihren Beitrag in das offizielle Sprachpaket aufnehmen können.';
$string['ownstashes'] = 'Ihre Ablagen';
$string['ownstashes_help'] = 'Liste aller Ablagen';
$string['ownstashesnone'] = 'Keine eigenen Ablagen';
$string['permalink'] = 'Dauerlink';
$string['placeholder'] = 'Platzhalter';
$string['placeholder_help'] = 'Platzhalter sind spezielle Anweisungen innerhalb des Textes, wie z.B. \'{$a}\' oder \'{$a->something}\'. Sie werden bei der Ausgabe des Textes durch einen Wert ersetzt.

Es ist wichtig, die Platzhalter genauso zu kopieren, wie sie im Original vorkommen. Sie dürfen nicht übersetzt oder aus ihrer Schreibrichtung links-nach-rechts geändert werden.';
$string['placeholderwarning'] = 'Platzhalter';
$string['pluginclasscore'] = 'Core (Subsystem)';
$string['pluginclassnonstandard'] = 'Plugins (nicht standardmäßig)';
$string['pluginclassstandard'] = 'Plugins (standardmäßig)';
$string['pluginname'] = 'AMOS';
$string['plugintypelocations'] = 'Speicherorte von Plugintypen';
$string['plugintypelocations_desc'] = 'Ermöglicht die Festlegung von Speicherorten für zusätzliche Standard-Plugin-Typen, z.B. Sub-Plugin-Typen, die von Standard-Plugins bereitgestellt werden, oder Legacy-Typen.';
$string['presetcommitmessage'] = 'Übersetzung #{$a->id} von {$a->author}';
$string['presetcommitmessage2'] = 'Fehlende Textzeilen von {$a->source} nach {$a->target} hinzugefügt';
$string['presetcommitmessage3'] = 'Unterschiede zwischen {$a->versiona} und {$a->versionb} werden behoben';
$string['privacy:commitnumber'] = 'Bestätigen {$a}';
$string['privacy:contribnumber'] = 'Beitrag {$a}';
$string['privacy:filterusage'] = 'Filternutzung';
$string['privacy:metadata:db:amoscommits'] = 'Enthält alle die Übermittlung betreffenden Metadaten';
$string['privacy:metadata:db:amoscommits:commitmsg'] = 'Mitteilung bei der Übermittlung durch Nutzer/in';
$string['privacy:metadata:db:amoscommits:timecommitted'] = 'Zeitpunkt der Übermittlung';
$string['privacy:metadata:db:amoscommits:userinfo'] = 'Nutzeridentifikation wie in der Quellcode-Ablage bereitsgestellt, z.B. im Git';
$string['privacy:metadata:db:amoscontributions'] = 'Beigesteuerte Übersetzungen von Community-Mitgliedern.';
$string['privacy:metadata:db:amoscontributions:lang'] = 'Der Code der Sprache, zu der dieser Beitrag gehört.';
$string['privacy:metadata:db:amoscontributions:message'] = 'Einleitende Mitteilung, die die Einreichung beschreibt.';
$string['privacy:metadata:db:amoscontributions:stashid'] = 'Interner Bezeichner des angehängten Arbeitsspeichers.';
$string['privacy:metadata:db:amoscontributions:status'] = 'Der Status des Beitrags im Ablauf.';
$string['privacy:metadata:db:amoscontributions:subject'] = 'Betreff der beigesteuerten Einreichung.';
$string['privacy:metadata:db:amoscontributions:timecreated'] = 'Zeitstempel der Erstellung des Beitragsdatensatzes.';
$string['privacy:metadata:db:amoscontributions:timemodified'] = 'Zeitstempel der letzten Änderung des Beitragsdatensatzes.';
$string['privacy:metadata:db:amosfilterusage'] = 'Protokoll für die Verwendung des AMOS-Übersetzerfilters.';
$string['privacy:metadata:db:amosfilterusage:currentlang'] = 'Sprache der aktuellen Session';
$string['privacy:metadata:db:amosfilterusage:ismaintainer'] = 'Verfügt die Person über die Berechtigung, Übernahmen in das AMOS-Repository durchzuführen?';
$string['privacy:metadata:db:amosfilterusage:numofcomponents'] = 'Anzahl ausgewählter Komponenten';
$string['privacy:metadata:db:amosfilterusage:numoflanguages'] = 'Anzahl ausgewählter Sprachen';
$string['privacy:metadata:db:amosfilterusage:numofversions'] = 'Anzahl ausgewählter Versionen';
$string['privacy:metadata:db:amosfilterusage:showexistingonly'] = 'Sollen nur verfügbare Übersetzungen gezeigt werden?';
$string['privacy:metadata:db:amosfilterusage:showgreylistedonly'] = 'Sollen nur abgekündigte Texte gezeigt werden?';
$string['privacy:metadata:db:amosfilterusage:showhelpsonly'] = 'Sollen nur Hilfetexte gezeigt werden?';
$string['privacy:metadata:db:amosfilterusage:showmissingonly'] = 'Sollen nur fehlende und geänderte Texte angezeigt werden?';
$string['privacy:metadata:db:amosfilterusage:showoutdatedonly'] = 'Sollen nur geänderte Texte angezeigt werden?';
$string['privacy:metadata:db:amosfilterusage:showstagedonly'] = 'Sollen nur Texte im Arbeitsspeicher angezeigt werden?';
$string['privacy:metadata:db:amosfilterusage:showwithoutgreylisted'] = 'Sollen abgekündigte Texte aus den Ergebnissen entfernt werden?';
$string['privacy:metadata:db:amosfilterusage:stringidpartial'] = 'Ist eine teilweise Übereinstimmung für die String-ID erforderlich?';
$string['privacy:metadata:db:amosfilterusage:substringcasesensitive'] = 'Soll beim Textteil zwischen Groß- und Kleinschreibung unterschieden werden?';
$string['privacy:metadata:db:amosfilterusage:substringregex'] = 'Soll der Textteil als regulärer Ausdruck betrachtet werden?';
$string['privacy:metadata:db:amosfilterusage:timesubmitted'] = 'Zeitstempel der Übermittlung des Filterformulars';
$string['privacy:metadata:db:amosfilterusage:usercountry'] = 'Ländercode der Person, wie in ihrem Profil ausgewählt';
$string['privacy:metadata:db:amosfilterusage:userlang'] = 'Bevorzugte Sprache der Person aus ihrem Profil';
$string['privacy:metadata:db:amosfilterusage:usesdefaultlang'] = 'Hat die Person die vorab ausgewählten Sprachen verwendet?';
$string['privacy:metadata:db:amosfilterusage:usesdefaultversion'] = 'Hat die Person die im Formular vorab ausgewählten Versionen verwendet?';
$string['privacy:metadata:db:amosfilterusage:withstringid'] = 'Wurde die String-ID angegeben?';
$string['privacy:metadata:db:amosfilterusage:withsubstring'] = 'Wurde ein zu suchender Textteil angegeben?';
$string['privacy:metadata:db:amospreferences'] = 'AMOS-Vorinstellungen für bestimmte Person';
$string['privacy:metadata:db:amospreferences:name'] = 'Name der Voreinstellung';
$string['privacy:metadata:db:amospreferences:value'] = 'Wert der Voreinstellung';
$string['privacy:metadata:db:amosstashes'] = 'Behält die Informationen über die Ablagen im Ablagenpool';
$string['privacy:metadata:db:amosstashes:components'] = 'Liste der Komponenten, die in den gespeicherten Ablagen gespeichert sind';
$string['privacy:metadata:db:amosstashes:id'] = 'Interner Bezeichner des Speichers';
$string['privacy:metadata:db:amosstashes:languages'] = 'Liste der Sprachen, die  in den gespeicherten Ablagen enthalten sind';
$string['privacy:metadata:db:amosstashes:message'] = 'Die vollständige Nachricht, die die Ablage beschreibt. Wird als Standard-Übernahme-Nachricht verwendet, wenn die Ablage als bereitgestellte Übersetzung übermittelt wird.';
$string['privacy:metadata:db:amosstashes:name'] = 'Name oder Titel der Ablage';
$string['privacy:metadata:db:amosstashes:strings'] = 'Titel der Ablage';
$string['privacy:metadata:db:amosstashes:timecreated'] = 'Zeitstempel für die Erstellung der Ablage';
$string['privacy:metadata:db:amosstashes:timemodified'] = 'Zeitstempel der letzten Änderung des Datensatzes';
$string['privacy:metadata:db:amostranslators'] = 'Dies beschreibt die Stellung einer Person zu einem Sprachpaket. Entweder ist die Person Betreuer/in (hat das Recht, Texte in das Sprachpaket zu übernehmen) oder ausdrücklicher Mitwirkender (wird auf der Credits-Seite angezeigt, auch ohne eingereichte Beiträge).';
$string['privacy:metadata:db:amostranslators:lang'] = 'Der Sprachcode, den die Person übersetzen darf, oder ein Sternchen für alle Sprachen.';
$string['privacy:metadata:db:amostranslators:status'] = 'Diese Option legt fest, ob eine Person Betreuer/in (0) oder ausdrücklicher Mitwirkender (1) des Sprachpakets ist.';
$string['privacy:metadata:external:languagepacks'] = 'Übersetzungsbeiträge werden in ZIP-Dateien exportiert, global verteilt und in Moodle-Websites installiert.';
$string['privacy:metadata:external:languagepacks:email'] = 'Die E-Mail-Adresse der mitwirkenden Person kann in den Sprachpaketdateien enthalten sein.';
$string['privacy:metadata:external:languagepacks:firstname'] = 'Der Vorname der mitwirkenden Person kann in den Sprachpaketdateien enthalten sein.';
$string['privacy:metadata:external:languagepacks:lastname'] = 'Der Nachname der mitwirkenden Person kann in den Sprachpaketdateien enthalten sein.';
$string['privacy:metadata:subsystem:comment'] = 'Beschreibung, wie das Kommentar-Subsystem vom Plugin verwendet wird.';
$string['privacy:stashnumber'] = 'Ablage {$a}';
$string['privileges'] = 'Ihre Berechtigungen';
$string['privilegesnone'] = 'Sie haben einen Lesezugriff für offene Informationen.';
$string['processing'] = 'Prozess läuft ...';
$string['quicklinks'] = 'Links';
$string['quicklinks_amos'] = 'AMOS Übersetzer';
$string['quicklinks_forum'] = 'Übersetzungsforum';
$string['quicklinks_manual'] = 'Anleitung';
$string['quicklinks_newcomers'] = 'Hilfe für Neueinsteiger';
$string['requestactions'] = 'Aktion';
$string['requestactions_help'] = '* Übernehmen – Kopiert die übersetzten Strings aus dem Pull Request in Ihren Arbeitsspeicher Befindet sich der Text bereits im Arbeitsspeicher, wird er durch den gespeicherten Text überschrieben.
* Ausblenden – Blockiert den Pull Request, sodass er Ihnen nicht mehr angezeigt wird.';
$string['savefilter'] = 'Texte anzeigen';
$string['script'] = 'AMOScript';
$string['script_help'] = 'AMOScript sind Operationen, die mit den Texten im Repository ausgeführt werden.';
$string['scriptexecute'] = 'Ausführen und Ergebnis in den Arbeitsspeicher';
$string['sourceversion'] = 'Quelle';
$string['stage'] = 'Arbeitsspeicher';
$string['stageactions'] = 'Aktionen im Arbeitsspeicher';
$string['stageactions_help'] = '* Texte im Arbeitsspeicher bearbeiten - verändert die Filtereinstellungen des Übersetzers, so dass nur Übersetzungen, die im Arbeitsspeicher sind angezeigt werden.
* Nicht nutzbare entfernen - Entfernt alle Übersetzungen aus dem Arbeitsspeicher, die Sie nicht übergeben können. Nicht nutzbare werden automatisch aus dem Arbeitsspeicher entfernt, bevor er übergeben wird.
* Sortieren - Alle Übersetzungen aus dem Arbeitsspeicher entfernen, die entweder die aktuelle Übersetzung nicht verändern oder älter als die aktuellste Übersetzung im Repository sind.
Der Arbeitsspeicher wird automatisch sortiert, bevor er übergeben wird.
* Alle entfernen - löscht den Arbeitsspeicher, alle Übersetzungen im Arbeitsspeicher gehen verloren.';
$string['stagedownload'] = 'Herunterladen';
$string['stageedit'] = 'Texte im Arbeitsspeicher bearbeiten';
$string['stageprune'] = 'Nicht nutzbare entfernen';
$string['stagerebase'] = 'Sortieren';
$string['stagestringsnocommit'] = 'Texte im Arbeitsspeicher: {$a->staged}';
$string['stagestringsnone'] = 'Keine Texte im Arbeitsspeicher';
$string['stagestringssome'] = 'Texte im Arbeitsspeicher: {$a->staged}, davon {$a->committable} nutzbar';
$string['stagesubmit'] = 'Texte an die Betreuer/innen des Sprachpakets senden';
$string['stagetoolopen'] = 'Zum Arbeitsspeicher';
$string['stagetranslation'] = 'Übersetzung';
$string['stagetranslation_help'] = 'Zeigt die zu übergebende Übersetzung im Arbeitsspeicher an. Die Hintergrundfarbe der Zelle bedeutet:

* Grün - Sie haben eine fehlende Übersetzung hinzugefügt und dürfen diese übertragen.
* Gelb - Sie haben einen Text geändert und dürfen die Änderung übertragen.
* Blau - Sie haben die Übersetzung modifiziert oder eine fehlende Übersetzung hinzugefügt, aber Sie dürfen sie nicht in die angegebene Sprache übertragen.
* Keine Farbe - die Übersetzung im Arbeitsspeicher ist die gleiche wie die aktuelle und wird daher nicht übertragen.';
$string['stageunstageall'] = 'Alle entfernen';
$string['standardcomponents'] = 'Liste der standardmäßigen Komponenten';
$string['standardcomponents_desc'] = 'Liste der Standardkomponenten von Moodle. Die optionale Zahl gibt den Versionscode an, seit wann die Komponente als Standard gilt. Eine negative Zahl gibt die letzte Version an, in der die Komponente als Standard vorhanden war. Beide Zahlen können angegeben werden. Beispiel:

* `mod_workshop` – ohne Versionsangabe gilt diese Komponente in allen Versionen als Standard.
* `report_infectedfiles 310` – bezeichnet eine Komponente, die ab Moodle 3.10 als Standard gilt.
* `theme_clean 25–36` – Standardkomponente ab Moodle 2.5 bis einschließlich 3.6.';
$string['stashactions'] = 'Laufende Arbeiten speichern';
$string['stashactions_help'] = 'Eine Ablage ist eine Momentaufnahme des aktuellen Arbeitsspeichers. Eine solche Ablage kann als Vorschlag an die Betreuer/innen des Sprachpakets gesendet werden.';
$string['stashapply'] = 'Verwenden';
$string['stashautosave'] = 'Automatische Sicherung';
$string['stashautosave_help'] = 'Diese Ablage enthält den neuesten Snapshot Ihres Arbeitsspeichers. Sie können sie als Backup für Fälle verwenden, in denen alle Texte z.B. versehentlich nicht bereitgestellt werden. Drücken Sie auf die Taste \'Verwenden\', um alle abgelegten Texte wieder in den Arbeitsspeicher zu kopieren (überschreibt einen Text, wenn er sich bereits im Arbeitsspeicher befindet).';
$string['stashcomponents'] = '<span>Komponenten:</span> {$a}';
$string['stashdownload'] = 'Herunterladen';
$string['stashdrop'] = 'Löschen';
$string['stashdropconfirm'] = 'Möchten Sie die gespeicherten Ablage <em>\'{$a}\'</em> wirklich dauerhaft löschen?';
$string['stashes'] = 'Ablagen';
$string['stashlanguages'] = '<span>Sprachen:</span> {$a}';
$string['stashpop'] = 'Aufnehmen';
$string['stashpush'] = 'Arbeitsspeicher in Ablage sichern';
$string['stashstrings'] = '<span>Anzahl der Texte:</span> {$a}';
$string['stashsubmit'] = 'An Betreuer/innen senden';
$string['stashsubmitdetails'] = 'Kurze Mitteilung';
$string['stashsubmitmessage'] = 'Nachricht';
$string['stashsubmitsubject'] = 'Betreff';
$string['stashtitle'] = 'Name der Ablage';
$string['stashtitledefault'] = 'Laufende Arbeiten - {$a->time}';
$string['stdvernotebetween'] = 'Standard von {$a->from} bis {$a->to}';
$string['stdvernotefrom'] = 'Standard von {$a->from}';
$string['stdvernoteto'] = 'Standard bis {$a->to}';
$string['stringhistory'] = 'Verlauf';
$string['strings'] = 'Texte';
$string['stringversionnotlatest'] = 'neuere Version vorhanden';
$string['submitting'] = 'Vorschlag einreichen';
$string['submitting_help'] = 'Dadurch werden übersetzte Texte an die offiziellen Betreuer/innen des Sprachpakets gesendet. Diese holen Ihre Übersetzungen in deren Arbeitsspeicher, um sie zu überprüfen und sie schließlich ins Sprachpaket zu übernehmen. Schreiben Sie bitte eine Nachricht, in der Sie den Inhalt Ihrer Arbeit beschreiben und angeben, warum Sie Ihren Beitrag einbeziehen lassen möchten.';
$string['targetversion'] = 'Ziel';
$string['timeline'] = 'Verlauf';
$string['timelineheading'] = 'Timeline des Texts: {$a->component} | {$a->strname}';
$string['translatortool'] = 'Übersetzer';
$string['translatortoolopen'] = 'AMOS Übersetzer öffnen';
$string['translatortranslation'] = 'Übersetzung';
$string['translatortranslation_help'] = 'Klicken Sie auf die Zelle, um sie in den Eingabeditor zu verwandeln. Fügen Sie die Übersetzung ein und klicken Sie außerhalb der Zelle, um die Übersetzung in den Arbeitsspeicher zu legen. Die Hintergrundfarbe der Zelle bedeutet:

* Grün - der Text ist bereits übersetzt, Sie können die Übersetzung falls notwendig ändern.
* Gelb - der Text kann veraltet sein. Das englische Original wurde wahrscheinlich nach der Übersetzung des Textes geändert.
* Rot - der Text ist noch nicht übersetzt.
* Blau - Sie haben die Übersetzung geändert und sie ist nun im Arbeitsspeicher.
* Grau - AMOS kann nicht verwendet werden, um diesen Text zu übersetzen. Beispielsweise können Texte für Moodle 1.9 nur über den legacy CVS-Zugang bearbeitet werden.

Die Betreuer/innen des Sprachpakets sehen ein kleines rotes Symbol in der Ecke der Zellen, die sie übernehmen dürfen.';
$string['typecontrib'] = 'Zusätzliche Plugins';
$string['typecontribbadge'] = 'Zusätzlich';
$string['typecore'] = 'Core (Subsystem)';
$string['typecorebadge'] = 'Core';
$string['typestandard'] = 'Plugins (standardmäßig)';
$string['typestandardbadge'] = 'Standard';
$string['unableenfixaddon'] = 'Änderungen an der englischen Texten sind nur für die Standardplugins möglich';
$string['unableenfixcountries'] = 'Die Ländernamen wurden aus der ISO 3166-1 übernommen.';
$string['unablelangconfig'] = 'Keine Berechtigung zur Konfigurationsänderung des Sprachpakets';
$string['unableunmaintained'] = 'Das Sprachpaket \'{$a}\' hat zur Zeit keine Betreuer/innen, also können Beiträge zur Übersetzung nicht angenommen werden. Überlegen Sie sich bitte, ob Sie gerne selber als Betreuer/in des Sprachpakets \'{$a}\' tätig werden möchten.';
$string['unstage'] = 'Entfernen';
$string['unstageconfirm'] = 'Wirklich?';
$string['unstageconfirmlong'] = '<p>Möchten Sie wirklich die Übersetzung des Textes <code>{$a->stringid}</code>, Komponente <code>{$a->component}</code>, aus dem Sprachpaket <code>{$a->language}</code> löschen?</p>';
$string['unstaging'] = 'Entfernen ...';
$string['untranslate'] = 'Übersetzung löschen';
$string['untranslateconfirm'] = '<p>Möchten Sie wirklich die vorhandene Übersetzung des Textes <code>{$a->stringid}</code>, Modul <code>{$a->component}</code>, aus allen Versionen des Spachpakets <code>{$a->language}</code> löschen?';
$string['untranslatetitle'] = 'Die Übersetzung wird aus dem Sprachpaket gelöscht.';
$string['untranslating'] = 'Übersetzung löschen';
$string['userdefaultreset'] = 'Auf meinen Standard zurücksetzen';
$string['userdefaultsave'] = 'Als meinen Standard speichern';
$string['version'] = 'Version';
