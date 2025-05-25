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
 * Strings for component 'vpl', language 'de', version '4.5'.
 *
 * @package     vpl
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['VPL_COMPILATIONFAILED'] = 'Die Vorbereitung zur Ausführung ist fehlgeschlagen.';
$string['about'] = 'Über';
$string['acceptcertificates'] = 'Selbstsignierte Zertifikate akzeptieren';
$string['acceptcertificates_description'] = 'Wenn die ausführenden Server keine selbstsignierten Zertifikate verwenden, deaktivieren Sie diese Option.';
$string['acceptcertificatesnote'] = '<p>Sie verwenden eine verschlüsselte Verbindung.<p/>
<p>Um eine verschlüsselte Verbindung mit den ausführenden Servern herzustellen, müssen Sie deren Zertifikate akzeptieren.</p>
<p>Wenn Sie Probleme mit diesem Prozess haben, können sie versuchen http (unverschlüsselte) Verbindung oder einen anderen Browser zu verwenden.</p>
<p>Bitte klicken Sie auf die folgenden Links (Server #) und akzeptieren sie die angebotenen Zertifikate.</p>';
$string['addfile'] = 'Datei hinzufügen';
$string['addoverride'] = 'Eine Überschreibung hinzufügen';
$string['advanced'] = 'Erweitert';
$string['allfiles'] = 'Alle Dateien';
$string['allsubmissions'] = 'Alle Abgaben';
$string['always_use_ws'] = 'Immer unverschlüsseltes Websocket (ws) Protokoll verwenden';
$string['always_use_wss'] = 'Immer verschlüsseltes Websocket Protokoll (wss) verwenden';
$string['anyfile'] = 'Beliebige Datei';
$string['attemptnumber'] = 'Versuch Nr. {$a}';
$string['autodetect'] = 'Automatische Erkennung';
$string['automaticevaluation'] = 'Automatische Evaluierung';
$string['automaticgrading'] = 'Automatische Bewertung';
$string['averageperiods'] = 'Durchschnittliche Überarbeitungen {$a}';
$string['averagetime'] = 'Durchschnittszeit {$a}';
$string['basedon'] = 'Basiert auf';
$string['basedon_chain_broken'] = 'Fehler: die Verknüpfung von Aktivitäten, auf die diese Aktivität basiert ist fehlerhaft. Bitte überprüfen Sie die die Aktivitäten, auf denen diese Aktivität basiert.';
$string['basedon_deleted'] = 'Fehler: die Aktivität, auf der diese Aktivität basiert fehlt (wurde gelöscht?). Bitte setzen sie die Basis-Aktivität.';
$string['basedon_missed'] = 'Die Basis-Aktivität wurde beim Wiederherstellen / Import verloren. Bitte schließen Sie "{$a}" ein.';
$string['basic'] = 'Einfach';
$string['binaryfile'] = 'Binärdatei';
$string['breakpoint'] = 'Breakpoint';
$string['browserupdate'] = 'Bitte aktualisieren Sie Ihren Browser auf die letzte Version<br /> oder verwenden Sie einen anderen Browser, der Websockets unterstützt.';
$string['calculate'] = 'Berechnen';
$string['calendardue'] = 'VPL Abgabe ist fällig';
$string['calendarexpectedon'] = 'VPL Abgabe erwartet';
$string['changesNotSaved'] = 'Änderungen wurden nicht gespeichert';
$string['check_jail_servers'] = 'Jail-Server überprüfen';
$string['check_jail_servers_help'] = '<p>Diese Seite überprüft und zeigt den Status der Jail-Server,
        die für diese Aktivität verwendet werden.</p>';
$string['clipboard'] = 'Zwischenspeicher';
$string['closed'] = 'Beendet';
$string['comments'] = 'Kommentare';
$string['compilation'] = 'Kompilierung';
$string['confirmoverridedeletion'] = 'Möchten sie dieses Überschreiben-Set wirklich löschen?';
$string['connected'] = 'Verbunden';
$string['connecting'] = 'Verbinde';
$string['connection_closed'] = 'Verbindung geschlossen';
$string['connection_fail'] = 'Verbindungsfehler';
$string['console'] = 'Konsole';
$string['control'] = 'Steuerung';
$string['copy'] = 'Kopieren';
$string['create_new_file'] = 'Neue Datei erstellen';
$string['crontask'] = 'VPL Hintergrundprozesse';
$string['crontask_check_vpljs'] = 'VPL Jail Server melden';
$string['currentstatus'] = 'Aktueller Status';
$string['cut'] = 'Ausschneiden';
$string['datesubmitted'] = 'Abgabedatum';
$string['debug'] = 'Debuggen';
$string['debugging'] = 'Debuggt';
$string['debugscript'] = 'Debug Script';
$string['debugscript_help'] = 'Wählen Sie das Debug Script, das in dieser Aktivität verwendet werden soll';
$string['defaultexefilesize'] = 'Standard maximale Größe der Ausführungsdatei';
$string['defaultexememory'] = 'Standard maximaler Speicherbedarf';
$string['defaultexeprocesses'] = 'Standard maximale Anzahl an Prozessen';
$string['defaultexetime'] = 'Standard maximale Ausführungszeit';
$string['defaultfilesize'] = 'Standard maximale Upload Dateigröße';
$string['defaultresourcelimits'] = 'Standard maximaler Ressourcenverbrauch bei Ausführung';
$string['delete'] = 'Löschen';
$string['delete_file_fq'] = 'Datei \'{\\$a}\' löschen?';
$string['delete_file_q'] = 'Datei wirklich löschen?';
$string['deleteallsubmissions'] = 'Alle Abgaben löschen';
$string['depends_on_https'] = 'Verwenden Sie ws oder wss abhängig ob Sie http oder https verwenden';
$string['description'] = 'Beschreibung';
$string['diff'] = 'diff';
$string['directory_not_renamed'] = 'Ordner \'{$a}\' wurde nicht umbenannt';
$string['disabled'] = 'Deaktiviert';
$string['discard_submission_period'] = 'Abgabenspeicherungsperiode';
$string['discard_submission_period_description'] = 'Pro Person und Aufgabe behält das System die letzte Abgabe sowie zumindest eine für jede Periode.';
$string['download'] = 'Herunterladen';
$string['downloadallsubmissions'] = 'Alle Abgaben herunterladen';
$string['downloadsubmissions'] = 'Abgaben herunterladen';
$string['duedate'] = 'Abgabetermin';
$string['dueevent'] = '{$a} Abgabe ist fällig';
$string['dueeventaction'] = 'Entwickeln/abgeben';
$string['edit'] = 'Bearbeiten';
$string['editing'] = 'Bearbeiten';
$string['editortheme'] = 'Editor Theme';
$string['error:inconsistency'] = 'Inkonsistenz gefunden: \'{\\$a}\'';
$string['error:recordnotdeleted'] = 'Eintrag \'{\\$a}\' nicht gespeichert';
$string['error:recordnotinserted'] = 'Eintrag \'{\\$a}\' nicht eingefügt';
$string['error:recordnotupdated'] = 'Eintrag \'{\\$a}\' nicht aktualisiert';
$string['error:recursivedefinition'] = 'Rekursiv basierend auf der VPL Definition';
$string['error:uninstalling'] = 'Fehler bei der Deinstallation von VPL. Es wurden möglicherweise nicht alle Daten gelöscht.';
$string['error:zipnotfound'] = 'ZIP Datei nicht gefunden';
$string['evaluate'] = 'Evaluieren';
$string['evaluateonsubmission'] = 'Nur bei Abgabe evaluieren';
$string['evaluating'] = 'Evaluiert';
$string['evaluation'] = 'Evaluierung';
$string['examples'] = 'Beispiele';
$string['execution'] = 'Ausführung';
$string['executionfiles'] = 'Ausführungsdateien';
$string['executionfiles_help'] = '<p>Hier definieren Sie die Dateien, die für die Ausführung, das Debugging oder die Bewertung einer Abgabe erforderlich sind. Dies beinhaltet Skripts, Test-Dateien und Dateien mit Daten.</p>
<p>Wenn kein Skript zum Ausführen oder Debuggen von Abgaben angegeben wird, verwendet das System automatisch ein Standardskript für die verwendete Sprache (abhängig von der angegebenen Dateiendung).';
$string['executionoptions'] = 'Ausführungsoptionen';
$string['executionoptions_help'] = '<p>Auf dieser Seite können verschiedene Ausführungsoptionen konfiguriert werden.</p>
<ul>
<li><b>Basiert auf</b>: selektiert eine andere VPL Instanz, von der einige Eigenschaften importiert werden:
<ul><li>Ausführungsdateien (Vordefinierte Skripts werden zusammengefügt)</li>
<li>Grenzen für die Ausführungsressourcen.</li>
<li>Variationen, die zusammengefügt werden, um Multivariationen zu erzeugen.</li>
<li>Maximale Größe jeder Datei, die mit der Abgabe hochgeladen wurde.</li>
</ul>
</li>
<li><b>Ausführen</b>, <b>Debuggen</b> and <b>Evalauieren</b>: Muss auf &quot;Ja&quot; gesetzt werden wenn die jeweilige Aktion beim bearbeiten der Abgabe für Studenten auswählbar sein soll.</li>
<li><b>Nur bei Abgabe evaluieren</b>: Die Abgabe wird automatisch evaluiert, sobald sie hochgeladen wird.</li>
<li><b>Automatische Bewertung</b>: Wenn das Evaluierungsergebnis Bewertungen enthält, werden diese automatisch als Bewertung für die Abgabe angewandt.</li>
</ul>';
$string['file'] = 'Datei';
$string['fileNotChanged'] = 'Datei ist unverändert';
$string['file_name'] = 'Dateiname';
$string['fileadded'] = 'Die Datei \'{\\$a}\' wurde hinzugefügt';
$string['filedeleted'] = 'Die Datei \'{\\$a}\' wurde gelöscht';
$string['filelist'] = 'Dateiliste';
$string['filenotadded'] = 'Datei wurde nicht hinzugefügt';
$string['filenotdeleted'] = 'Die Datei \'{$a}\' wurde NICHT gelöscht';
$string['filenotrenamed'] = 'Die Datei \'{$a}\' wurde NICHT umbenannt';
$string['filerenamed'] = 'Die Datei \'{\\$a->from}\' wurde auf \'{\\$a->to}\' umbenannt';
$string['filesChangedNotSaved'] = 'Dateien sind verändert, aber sie wurden nicht gespeichert';
$string['filesNotChanged'] = 'Dateien sind unverändert';
$string['filestoscan'] = 'Zu prüfende Dateien';
$string['fileupdated'] = 'Die Datei \'{\\$a}\' wurde aktualisiert';
$string['finalreduction'] = 'Finale Abzüge';
$string['finalreduction_help'] = '<b>FA [NE/AE A]</b><br>
<b>FA</b> Finale Bewertungsabzüge<br>
<b>AE</b> Automatische Evaluierung beantragt durch Teilnehmer/in<br>
<b>EE</b> Erlaubte Evaluierungen ohne Abzüge<br>
<b>A</b> Bewertungsabzüge pro Evaluierung. Wenn ein Prozentsatz angegeben ist, wird dieser über vorhergegangene Ergebnisse angewendet.<br>';
$string['find'] = 'Finden';
$string['find_replace'] = 'Suchen/Ersetzen';
$string['freeevaluations'] = 'Freie Evaluierungen';
$string['freeevaluations_help'] = 'Anzahl der automatischen Evaluierungen, die nicht zu einer Reduzierung der Abschlussnote beitragen';
$string['fulldescription'] = 'Beschreibung';
$string['fulldescription_help'] = '<p>Hier wird die komplette Beschreibung für diese Aktivität eingetragen.</p>
<p>Wenn hier nichts angegeben wird, wird stattdessen die Kurzbeschreibung angezeigt.</p>
<p>Wenn automatisch evaluiert werden soll, müssen die Interfacebeschreibungen für die Aufgabenstellungen detailliert und eindeutig sein.</p>';
$string['fullscreen'] = 'Vollbildmodus';
$string['functions'] = 'Funktionen';
$string['getjails'] = 'Ausführende Server anzeigen';
$string['gradeandnext'] = 'Bewerten & nächstes';
$string['graded'] = 'Bewertet';
$string['gradedbyuser'] = 'Bewertet durch Benutzer';
$string['gradedon'] = 'Bewertet am';
$string['gradedonby'] = 'Bewertet am {$a->date} von {$a->gradername}';
$string['gradenotremoved'] = 'Die Bewertung wurde NICHT gelöscht. Überprüfen Sie die Aktivitätskonfiguration in der Bewertungsverwaltung.';
$string['gradenotsaved'] = 'Die Bewertung wurde NICHT gespeichert. Überprüfen Sie die Aktivitätskonfiguration in der Bewertungsverwaltung.';
$string['gradeoptions'] = 'Benotungseinstellungen';
$string['grader'] = 'Bewerter';
$string['gradercomments'] = 'Kommentare zur Bewertung';
$string['graderemoved'] = 'Die Bewertung wurde gelöscht';
$string['groupwork'] = 'Gruppenarbeit';
$string['inconsistentgroup'] = 'Sie sind nicht Mitglied nur einer Gruppe (0 o >1)';
$string['incorrect_directory_name'] = 'Ungültiger Ordner-Name';
$string['incorrect_file_name'] = 'Falscher Dateiname';
$string['indicator:cognitivedepth'] = 'VPL Kognition';
$string['indicator:cognitivedepth_help'] = 'Dieser Indikator basiert auf der kognitiven Tiefe, die von Teilnehmer/innen einer VPL Aktivität erreicht wird.';
$string['indicator:socialbreadth'] = 'VPL Sozial';
$string['indicator:socialbreadth_help'] = 'Dieser Indikator basiert auf der sozialen Breite, die von Teilnehmer/innen einer VPL Aktivität erreicht wird.';
$string['individualwork'] = 'Einzelarbeit';
$string['inputoutput'] = 'Input/Output';
$string['instanceselection'] = 'VPL Auswahl';
$string['isexample'] = 'Dies ist eine Beispielaktivität';
$string['jail_servers'] = 'Jail-Server Liste';
$string['jail_servers_config'] = 'Jail-Server Konfiguration';
$string['jail_servers_description'] = 'Jeder Server in eine eigene Zeile';
$string['joinedfiles'] = 'Zusammengefügte ausgewählte Dateien';
$string['keepfiles'] = 'Dateien, die beim Ausführen behalten werden';
$string['keepfiles_help'] = '<p>Aufgrund von Sicherheitsrisiken werden Dateien, die als &quot;Ausführungsdateien&quot; hinzugefügt wurden,
gelöscht bevor das Skript vpl_execution ausgeführt wird.</p>
Falls einige dieser Dateien während der Ausführung benötigt werden (zum Beispiel als Testdaten) müssen sie hier markiert werden.';
$string['keyboard'] = 'Tastatur';
$string['lasterror'] = 'Letzte Fehlerbeschreibung';
$string['lasterrordate'] = 'Letzter Fehlerzeitpunkt';
$string['listofcomments'] = 'Kommentarliste';
$string['lists'] = 'Listen';
$string['listsimilarity'] = 'Liste der gefundenen Ähnlichkeiten';
$string['listwatermarks'] = 'Wasserzeichen-Liste';
$string['load'] = 'Laden';
$string['loading'] = 'Lädt...';
$string['local_jail_servers'] = 'Lokale Jail-Server';
$string['local_jail_servers_help'] = '<p>Hier können die lokalen Jail-Server für diese Aktivität definiert werden.</p>
<p>Jede Zeile beinhaltet die komplette URL eines Servers. Leere Zeilen und Kommentare die mit &quot;#&quot; starten können verwendet werden.</p>
<p>Diese Aktivität wird als Jail-Server Liste verwenden: die Server, die hier gesetzt werden plus die Server der Aktivität auf der diese Aktivität
basiert plus die allgemeinen Jail-Server. Wenn diese Aktivität und jene, die auf dieser Aktivität basieren, keine anderen Jail-Server benutzen sollen, kann man am Ende die Zeile &quot;end_of_jails&quot; anfügen.</p>';
$string['manualgrading'] = 'Manuelle Bewertung';
$string['math'] = 'Mathematik';
$string['maxexefilesize'] = 'Maximale Größe der Ausführungsdatei';
$string['maxexememory'] = 'Maximaler Speicherbedarf';
$string['maxexeprocesses'] = 'Maximale Anzahl an Prozessen';
$string['maxexetime'] = 'Maximale Ausführungszeit';
$string['maxfiles'] = 'Maximale Anzahl an Dateien';
$string['maxfilesexceeded'] = 'Maximale Anzahl an Dateien überschritten';
$string['maxfilesize'] = 'Maximale Upload Dateigröße';
$string['maxfilesizeexceeded'] = 'Maximale Dateigröße überschritten';
$string['maximumperiod'] = 'Max. Überarbeitungen {$a}';
$string['maxresourcelimits'] = 'Maximaler Ressourcenverbrauch bei Ausführung';
$string['maxsimilarityoutput'] = 'Maximale Ausgabe durch Ähnlichkeit';
$string['menucheck_jail_servers'] = 'Jail-Server überprüfen';
$string['menuexecutionfiles'] = 'Ausführungsdateien';
$string['menuexecutionoptions'] = 'Optionen';
$string['menukeepfiles'] = 'Zu behaltene Dateien';
$string['menulocal_jail_servers'] = 'Lokale Jail-Server';
$string['menuresourcelimits'] = 'Ressourcenbeschränkungen';
$string['message::bad_jailserver'] = 'Server Software Update muss durchgeführt werden. Kontaktieren Sie Ihre/n Systemadminstrator/in';
$string['message::body_footer_bad_jailservers'] = 'Um die aktuellste Version des VPL-Jail-Systems herunterzuladen, öffnen sie VPL von der Moodle Homepage und navigieren Sie zum Abschnitt "Downloads". Denken Sie daran, die Parameter URLPATH und/oder TASK_ONLY_FROM wie empfohlen zu verwenden, um die Sicherheitseinstellungen zu verbessern.

Um Aktivitäten, die lokale VPL-Jail-Server verwenden zu identifizieren, suchen Sie im Feld Jail-Server der Tabelle {prefix}vpl.';
$string['message::body_header_bad_jailservers'] = 'Die VPL Jail Server der folgenden Liste benötigen ein **dringendes** Update der VPL-Jail-System-Software.';
$string['message::subject_bad_jailservers'] = 'Wichtige Meldung des VPL Plugins in Moodle auf dem \'{$a}\' Server';
$string['messageprovider:bad_jailservers'] = 'VPL Jail Server melden';
$string['minsimlevel'] = 'Minimale angezeigte Ähnlichkeit';
$string['moduleconfigtitle'] = 'VPL Module Konfiguration';
$string['modulename'] = 'Virtual programming lab';
$string['modulename_help'] = '<p>VPL ist ein Aktivitätsmodul für Moodle, das Programmieraufgaben verwaltet und folgende Eigenschaften aufweist:
</p>
<ul>
<li>Möglichkeit, den Programmcode im Browser zu verändern</li>
<li>Teilnehmer/innen können Programme interaktiv im Browser ausführen</li>
<li>Automatische Tests zur Bewertung von Programmen können ausgeführt werden</li>
<li>Möglichkeit, Ähnlichkeiten zwischen Dateien zu suchen</li>
<li>Möglichkeit, Änderungseinschränkungen und externe Einfügeoptionen zu konfigurieren</li>
</ul>
<p><a href="http://vpl.dis.ulpgc.es">Virtual Programming lab Home Page</a></p>';
$string['modulename_link'] = 'mod/vpl/view';
$string['modulenameplural'] = 'Virtual programming labs';
$string['multidelete'] = 'Mehrfach-Löschung';
$string['nevaluations'] = '{$a} automatische Bewertungen durchgeführt';
$string['new'] = 'Neu';
$string['new_file_name'] = 'Neuer Dateiname';
$string['next'] = 'Weiter';
$string['nojailavailable'] = 'Kein Jail-Server verfügbar';
$string['noright'] = 'Keine ausreichenden Zugriffsberechtigungen';
$string['nosubmission'] = 'Keine Abgabe verfügbar';
$string['notexecuted'] = 'Nicht ausgeführt';
$string['notgraded'] = 'Nicht bewertet';
$string['notsaved'] = 'Nicht gespeichert';
$string['novpls'] = 'Kein virtual programming lab definiert';
$string['nowatermark'] = 'Eigene Wasserzeichen {$a}';
$string['nsubmissions'] = '{$a} abgaben';
$string['numcluster'] = 'Gruppe {$a}';
$string['open'] = 'Offen';
$string['operatorsvalues'] = 'Operatoren/Werte';
$string['opnotallowfromclient'] = 'Aktion ist von diesem Rechner nicht erlaubt';
$string['options'] = 'Optionen';
$string['optionsnotsaved'] = 'Einstellungen wurden nicht gespeichert';
$string['optionssaved'] = 'Einstellungen wurden gespeichert';
$string['origin'] = 'Ursprung';
$string['othersources'] = 'Andere zu prüfende Quellen';
$string['outofmemory'] = 'Out of memory';
$string['override'] = 'Überschreiben';
$string['override_help'] = 'Wenn "Überschreiben" aktiviert ist, wird diese Einstellung mit den gewählten Werten für betroffene Nutzer/innen überschrieben.';
$string['override_options'] = 'Überschreiben-Optionen';
$string['override_users'] = 'Betroffene Teilnehmer/innen';
$string['overridefor'] = '{$a->base} ist fällig am {$a->for}';
$string['overrideforgroup'] = '{$a->base} ist fällig für Mitglieder/innen von {$a->for}';
$string['overrides'] = 'Überschreiben';
$string['overrides_help'] = 'Einstellungen können für eine Aktivität überschrieben werden. Diese Einstellungen überschreiben Aktivitätseinstellungen für betroffene Nutzer/innen und Gruppen.';
$string['paste'] = 'Einfügen';
$string['pause'] = 'Pause';
$string['pluginadministration'] = 'VPL Administration';
$string['pluginname'] = 'Virtual programming lab';
$string['previoussubmissionslist'] = 'Vorige Abgabeliste';
$string['print'] = 'Drucken';
$string['privacy:metadata:vpl'] = 'Information der Aktivität';
$string['privacy:metadata:vpl:course'] = 'Kurs-ID';
$string['privacy:metadata:vpl:duedate'] = 'Fälligkeitsdatum der Aktivität';
$string['privacy:metadata:vpl:freeevaluations'] = 'Anzahl der freien automatischen Evaluierungen (ohne Abzüge)';
$string['privacy:metadata:vpl:grade'] = 'Bewertung der Aktivität';
$string['privacy:metadata:vpl:id'] = 'Aktivitäts-ID';
$string['privacy:metadata:vpl:name'] = 'Aktivitätsname';
$string['privacy:metadata:vpl:reductionbyevaluation'] = 'Abzüge der Bewertung pro Ausführung der automatischen Evaluierung';
$string['privacy:metadata:vpl:shortdescription'] = 'Kurzbeschreibung der Aktivität';
$string['privacy:metadata:vpl:startdate'] = 'Abgabebeginn';
$string['privacy:metadata:vpl_acetheme'] = 'Benutzerdefinierte Einstellungen zum Editor Theme der IDE';
$string['privacy:metadata:vpl_assigned_overrides:userid'] = 'Benutzer DB ID';
$string['privacy:metadata:vpl_assigned_overrides:vplid'] = 'VPL DB ID';
$string['privacy:metadata:vpl_assigned_variations:vplid'] = 'VPL DB ID';
$string['privacy:metadata:vpl_editor_fontsize'] = 'Benutzerdefinierte Einstellungen der Schriftgröße der IDE';
$string['privacy:metadata:vpl_running_processes'] = 'Informationen zu den laufenden Prozessen dieser Aktivität der Benutzerin/des Benutzers';
$string['privacy:metadata:vpl_running_processes:server'] = 'Server, der den Task ausführt';
$string['privacy:metadata:vpl_running_processes:starttime'] = 'Datum, an dem der Task ausgeführt wird';
$string['privacy:metadata:vpl_running_processes:userid'] = 'Benutzer DB ID';
$string['privacy:metadata:vpl_running_processes:vplid'] = 'VPL DB ID';
$string['privacy:metadata:vpl_submissions'] = 'Information zu den Versuchen / Abgaben und deren Evaluierung';
$string['privacy:metadata:vpl_submissions:dategraded'] = 'Datum und Uhrzeit der Evaluierung der Abgabe';
$string['privacy:metadata:vpl_submissions:datesubmitted'] = 'Datum und Uhrzeit der Abgabe';
$string['privacy:metadata:vpl_submissions:grade'] = 'Die Bewertung der Abgabe. Dieser Wert muss nicht mit der Bewertung in der Bewertungsübersicht übereinstimmen.';
$string['privacy:metadata:vpl_submissions:gradercomments'] = 'Kommentare der Trainerin / des Trainers zu dieser Abgabe';
$string['privacy:metadata:vpl_submissions:groupid'] = 'Gruppe DB ID';
$string['privacy:metadata:vpl_submissions:nevaluations'] = 'Anzahl der angeforderten automatischen Evaluierungen bis zu dieser Abgabe';
$string['privacy:metadata:vpl_submissions:studentcomments'] = 'Kommentare der Teilnehmer/innen zu dieser Abgabe';
$string['privacy:metadata:vpl_terminaltheme'] = 'Benutzerdefinierte Einstellungen zu den Farben der Konsole';
$string['privacy:runningprocesspath'] = 'laufender_prozess_{$a}';
$string['privacy:submissionpath'] = 'abgabe_{$a}';
$string['privacy:variationpath'] = 'zugeordnete_variante';
$string['proposedgrade'] = 'Bewertungsvorschlag: {$a}';
$string['proxy'] = 'Proxy';
$string['proxy_description'] = 'Proxy von Moodle zu ausführenden Servern';
$string['redo'] = 'Wiederholen';
$string['reductionbyevaluation'] = 'Reduktion durch automatische Evaluierung';
$string['reductionbyevaluation_help'] = 'Reduzierung der Abschlussnote um einen Wert oder einen Prozentsatz für jede automatische Evaluierung, die von dem/der Studierenden beantragt wird';
$string['regularscreen'] = 'Fenstermodus';
$string['removebreakpoint'] = 'Breakpoint entfernen';
$string['removegrade'] = 'Bewertung löschen';
$string['rename'] = 'Umbenennen';
$string['rename_directory'] = 'Ordner umbemennen';
$string['rename_file'] = 'Datei umbenennen';
$string['replace_find'] = 'Ersetzen/Finden';
$string['replacenewer'] = 'Eine neuere Version wurde bereits gespeichert.\\nMöchten Sie die neuere Version durch diese ersetzen?';
$string['requestedfiles'] = 'Erforderliche Dateien';
$string['requestedfiles_help'] = '<p>Hier können Namen für die erforderlichen Dateien gesetzt werden.</p>
<p>Wenn nicht für alle erforderlichen Dateien Namen gesetzt werden sind die unbenannten Dateien optionen und können beliebige Namen erhalten.</p>
<p>Man kann zusätzlich bereits Inhalte für die erforderlichen Dateien erzeugen, die beim ersten Öffnen mit dem Editor sichtbar werden, wenn noch keine andere Abgabe vorhanden ist.</p>';
$string['requirednet'] = 'Erlaubte Online-Abgabe';
$string['requiredpassword'] = 'Ein Passwort wird benötigt';
$string['resetfiles'] = 'Dateien zurücksetzen';
$string['resetvpl'] = '{$a} zurücksetzen';
$string['resourcelimits'] = 'Ressourcenbeschränkungen';
$string['resourcelimits_help'] = '<p>Grenzen für das Maximum können für die Ausführungszeit, den benutzten Arbeitsspeicher, die Ausführungsdateigrößen und die Anzahl der gleichzeitigen Prozesse gesetzt werden.</p>
<p>Diese Grenzen werden verwendet, wenn die Skripts vpl_run.sh, vpl_debug.sh, vpl_evaluate.sh und vpl_execution ausgeführt werden.</p>
<p>Wenn diese Aktivität auf einer anderen Aktivität basiert können diese Grenzen von denen der Basisaktivität und der globalen Konfiguration beeinflusst werden.</p>';
$string['restrictededitor'] = 'Hochladen und Einfügen von externen Dateien oder Inhalten deaktivieren';
$string['run'] = 'Ausführen';
$string['running'] = 'Läuft';
$string['runscript'] = 'Skript ausführen';
$string['save'] = 'Speichern';
$string['savecontinue'] = 'Speichern und fortfahren';
$string['saved'] = 'Gespeichert';
$string['savedfile'] = 'Die Datei \'{\\$a}\' wurde gespeichert';
$string['saveforotheruser'] = 'Sie speichern eine Abgabe für eine/n andere/n Teilnehmer/in';
$string['saveoptions'] = 'Einstellungen speichern';
$string['saving'] = 'Speichert';
$string['scanactivity'] = 'Aktivität';
$string['scandirectory'] = 'Ordner';
$string['scanningdir'] = 'Prüfe Ordner ...';
$string['scanoptions'] = 'Prüfeinstellungen';
$string['scanother'] = 'Prüfe Ähnlichkeit in hinzugefügten Quellen';
$string['scanzipfile'] = 'Zip-Datei';
$string['search:activity'] = 'Virtual Programming Lab - Aktivitätsinformationen (Name und Beschreibung)';
$string['sebkeys'] = 'SEB Prüfung Schlüssel';
$string['sebrequired'] = 'SEB Browser erforderlich';
$string['sebrequired_help'] = 'Richtige Konfiguration von SEB Browser ist erforderlich';
$string['select_all'] = 'Alles markieren';
$string['selectbreakpoint'] = 'Breakpoint auswählen';
$string['server'] = 'Server';
$string['serverexecutionerror'] = 'Server Ausführungsfehler';
$string['shortcuts'] = 'Tastenkürzel';
$string['shortdescription'] = 'Kurzbeschreibung';
$string['shrightpanel'] = 'Rechte Seitenleiste anzeigen / verbergen';
$string['similarity'] = 'Ähnlichkeit';
$string['similarto'] = 'Ähnlich wie';
$string['start'] = 'Start';
$string['startanimate'] = 'Animation starten';
$string['startdate'] = 'Verfügbar ab';
$string['starting'] = 'Beginn';
$string['step'] = 'Schritt';
$string['stop'] = 'Stop';
$string['submission'] = 'Abgabe';
$string['submissionperiod'] = 'Abgabezeitraum';
$string['submissionrestrictions'] = 'Abgabeeinschränkungen';
$string['submissions'] = 'Abgaben';
$string['submissionselection'] = 'Abgabeauswahl';
$string['submissionslist'] = 'Abgabeliste';
$string['submissionview'] = 'Abgabesicht';
$string['submittedby'] = 'Abgegeben von {$a}';
$string['submittedon'] = 'Abgegeben am';
$string['submittedonp'] = 'Abgegeben am {$a}';
$string['sureresetfiles'] = 'Wollen Sie Ihre Änderungen wirklich verwerfen?';
$string['test'] = 'Testaktivität';
$string['testcases'] = 'Testfälle';
$string['testcases_help'] = 'Dieses Feature erlaubt es, Programme der Teilnehmer/innen auszuführen und die Ausgabe für eine gegebene Eingabe zu überprüfen. Um die Testfälle zu konfigurieren, muss die Datei &quot;vpl_evaluate.cases&quot; befüllt werden.<br>
Die Datei &quot;vpl_evaluate.cases&quot; ist folgendermaßen aufgebaut:
<ul>
<li> &quot;<strong>case </strong>= Beschreibung des Testfalls&quot;: Definiert den Start eines Anwendungsfalls.</li>
<li> &quot;<strong>input </strong>= text&quot;: kann mehrere Zeilen umfassen und wird mit dem nächsten Befehl abgeschlossen.</li>
<li> &quot;<strong>output </strong>= text&quot;: kann mehrere Zeilen umfassen und wird mit dem nächsten Befehl abgeschlossen. Ein Testfall kann mehrere richtige Ausgaben haben. Dazu gibt es drei verschiedene Arten: Zahlen, Text und exakter Text:
<ul>
<li> <strong>number</strong>: definiert als eine Folge von Zahlen (ganze Zahlen und Fließkommazahlen). Es werden in der Ausgabe nur Zahlen beachten und anderer Text ignoriert. Fließkommazahlen besitzen eine gewisse Toleranz.</li>
<li> <strong>text</strong>: definiert als ein Text ohne Anführungszeichen. Es werden in der Ausgabe nur Wörter beachtet und die restlichen Zeichen ignoriert. Groß- und Kleinschreibung wird auch ignoriert.</li>
<li> <strong>exact text</strong>: definiert als ein Text mit Anführungszeichen. Jedes Zeichen der Ausgabe muss übereinstimmen.</li>
</ul>
</li>
<li> &quot;<strong>grade reduction</strong> = [Wert|Prozentsatz%]&quot; : Standardmäßig reduziert ein fehlgeschlagener Testfall die Punkte der Abgabe anteilsmäßig (Gesamtpunkte/Anzahl der Testfälle). Diese Anweisung ändert jedoch den Punkteabzug.</li>
</ul>';
$string['text'] = 'Text';
$string['timeleft'] = 'Verbleibende Zeit';
$string['timelimited'] = 'Zeitlich begrenzt';
$string['timeout'] = 'Timeout';
$string['timespent'] = 'Benötigte Zeit';
$string['timespent_help'] = 'Zeit, die mit dieser Aktivität verbracht wurde, basierend auf den gespeicherten Versionen<br>Das Balkendiagramm zeigt die Anzahl der Teilnehmer/innen pro Zeitspanne.';
$string['timeunlimited'] = 'Zeitlich unbegrenzt';
$string['totalnumberoferrors'] = 'Fehler';
$string['undo'] = 'Rückgängung';
$string['unexpected_file_name'] = 'Ungültiger Dateiname: \'{\\$a->expected}\' erwartet aber \'{\\$a->found}\' erhalten';
$string['unzipping'] = 'Entpacke ...';
$string['update'] = 'Aktualisieren';
$string['updating'] = 'Aktualisieren...';
$string['uploadfile'] = 'Datei hochladen';
$string['use_xmlrpc'] = 'XML-RPC verwenden';
$string['use_xmlrpc_description'] = 'Wenn aktiviert, verwendet das System das alte XML-RPC Protokoll statt des JSON-RPC Protokolls, um mit den VPL Servern zu kommunizieren. Wählen Sie diese Option, wenn Sie einen VPL-Jail-Server mit einer Version älter als V3.0.0 verwenden.';
$string['usevariations'] = 'Verwende Variationen';
$string['usewatermarks'] = 'Wasserzeichen verwenden';
$string['usewatermarks_description'] = 'Wasserzeichen zu den Dateien der Teilnehmer/innen hinzufügen (nur unterstützte Sprachen)';
$string['variables'] = 'Variablen';
$string['variation_n'] = 'Variante {$a}';
$string['variation_n_i'] = 'Variante {$a->number}: {$a->identification}';
$string['variation_options'] = 'Variationsoptionen';
$string['variations'] = 'Variationen';
$string['variations_help'] = '<p>Eine Menge von Variationen können für eine Aktivität definiert werden, die dann zufällig Studenten zugewiesen werden.</p>
<p>Hier kann festgelegt werden, ob diese Aktivität Variationen hat und welche Bezeichnung die Menge trägt und es können die Variationen selbst hinzugefügt werden.</p>
<p>Jede Variation hat eine Identifizierungsnummer und eine Beschreibung. Die Identifizierungsnummer wird von der Datei <b>vpl_enviroment.sh</b> benutzt, um die Variation
jedes Studenten an die Skriptdatei weiterzugeben. Die Beschreibung, in HTML formatiert, wird für die jeweiligen Studenten angezeigt.</p>';
$string['variations_unused'] = 'Diese Aktivität hat Variationen, die deaktiviert sind';
$string['variationtitle'] = 'Variationsname';
$string['varidentification'] = 'Identifikation';
$string['visiblegrade'] = 'Sichtbar';
$string['vpl'] = 'Virtual Programming Lab';
$string['vpl:addinstance'] = 'Neue VPL Instanzen hinzufügen';
$string['vpl:grade'] = 'VPL Aufgabe bewerten';
$string['vpl:manage'] = 'VPL Aufgabe verwalten';
$string['vpl:setjails'] = 'Jail-Server speziellen VPL Instanzen zuweisen';
$string['vpl:similarity'] = 'VPL Aufgaben Ähnlichkeit prüfen';
$string['vpl:submit'] = 'VPL Aufgabe abgeben';
$string['vpl:view'] = 'Komplette VPL Aufgabenbeschreibung anzeigen';
$string['vpl_debug.sh'] = 'Dieses Skript bereitet das abgegebene Programm zum Debuggen vor';
$string['vpl_evaluate.cases'] = 'Hier werden die Testfälle zur Evaluierung des abgegebenen Programms angegeben';
$string['vpl_evaluate.sh'] = 'Dieses Skript evaluiert das abgegebene Programm';
$string['vpl_run.sh'] = 'Dieses Skript bereitet das abgegebene Programm zur Ausführung vor';
$string['websocket_protocol'] = 'WebSocket Protokoll';
$string['websocket_protocol_description'] = 'Art des WebSocket Protokolls (ws:// oder wss://), das vom Browser verwendet wird, um eine Verbindung zum ausführenden Server herzustellen.';
$string['workingperiods'] = 'Arbeitszeiten';
$string['worktype'] = 'Arbeitstyp';
