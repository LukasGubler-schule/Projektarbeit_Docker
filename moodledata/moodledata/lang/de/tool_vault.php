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
 * Strings for component 'tool_vault', language 'de', version '4.5'.
 *
 * @package     tool_vault
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addonplugins'] = 'Zusatz-Plugins';
$string['addonplugins_autoupgrade'] = 'Der Moodle-Upgrade-Prozess wird während der Wiederherstellung automatisch durchgeführt. <a href="{$a}">Ändern</a>.';
$string['addonplugins_extraplugins'] = 'Zusätzliche Plugins';
$string['addonplugins_extraplugins_desc'] = 'Die folgenden Plugins sind auf dieser Site vorhanden, jedoch nicht im Backup enthalten. Alle mit diesen Plugins verknüpften Daten werden beim Wiederherstellungsvorgang gelöscht. Nach Abschluss des Wiederherstellungsvorgangs werden Sie aufgefordert, den Moodle-Upgrade-Prozess auszuführen, der diese Plugins neu installiert.';
$string['addonplugins_fail'] = 'Das Backup enthält Plugins mit höheren Versionen als der Code auf dieser Site. Sie müssen den Code für diese Plugins aktualisieren, bevor Sie aus diesem Backup wiederherstellen.';
$string['addonplugins_fail_missing'] = 'Einige Zusatz-Plugins sind im Backup vorhanden, aber auf dieser Site nicht installiert. Sie müssen diese Plugins entweder installieren oder die Einstellung „Wiederherstellung mit fehlenden Plugins zulassen“ aktivieren.';
$string['addonplugins_missing'] = 'Fehlende Plugins';
$string['addonplugins_missing_autoremove'] = 'Fehlende Plugins werden nach der Wiederherstellung automatisch entfernt. <a href="{$a}">Ändern</a>';
$string['addonplugins_missing_desc'] = 'Die folgenden Plugins sind im Backup vorhanden, aber nicht auf dieser Seite installiert. Nach der Wiederherstellung werden diese Plugins als „Fehlt auf der Festplatte“ aufgeführt. Sie können sie deinstallieren oder die Daten behalten, bis Sie den Code für die Plugins hinzufügen. Bis dahin können Fehler auftreten, z. B. fehlende geplante Aufgaben.';
$string['addonplugins_missing_noautoremove'] = 'Sie können fehlende Plugins nach der Wiederherstellung automatisch entfernen lassen unter <a href="{$a}">Einstellungen</a>';
$string['addonplugins_noautoupgrade'] = 'Sie können den Moodle-Upgrade-Prozess automatisch als Teil der Wiederherstellung in den <a href="{$a}">Einstellungen </a>ausführen lassen.';
$string['addonplugins_notpresent'] = 'Auf dieser Seite gefundene, aber nicht im Backup vorhandene Plugins';
$string['addonplugins_pluginsdirectory'] = 'Plugins-Verzeichnis';
$string['addonplugins_pluginversioninbackup'] = 'Version im Backup';
$string['addonplugins_pluginversiononsite'] = 'Aktuelle Version auf dieser Seite';
$string['addonplugins_restorewithmissing_not_allowed'] = 'Eine Wiederherstellung mit fehlenden Plugins ist nicht zulässig. <a href="{$a}">Ändern</a>.';
$string['addonplugins_subpluginof'] = 'Subplugin von';
$string['addonplugins_success'] = 'Alle Plugins im Backup haben die gleiche Version wie die Plugins auf dieser Seite';
$string['addonplugins_success_needsupgrade'] = 'Einige Plugins müssen nach der Wiederherstellung aktualisiert werden';
$string['addonplugins_success_withmissing'] = 'Einige Plugins fehlen, aber die Wiederherstellung ist möglich';
$string['addonplugins_willrequireupgrade'] = 'Erfordert ein Upgrade';
$string['addonplugins_willrequireupgrade_desc'] = 'Die folgenden Plugins haben eine höhere Version wie die im Backup. Nach Abschluss des Wiederherstellungsvorgangs werden Sie aufgefordert, den Moodle-Upgrade-Prozess auszuführen.';
$string['addonplugins_withhigherversion'] = 'Plugins, die eine höhere Codeversion haben als die im Backup vorhandenen';
$string['addonplugins_withlowerversion'] = 'Plugins, die eine niedrigere Codeversion haben als die im Backup vorhandenen';
$string['addonplugins_withlowerversion_desc'] = 'Die folgenden Plugins haben auf dieser Seite eine niedrigere Version als im Backup. Sie müssen den Code für diese Plugins aktualisieren, bevor Sie diese aus diesem Backup wiederherstellen.';
$string['apikey'] = 'API-Schlüssel';
$string['backup'] = 'Sicherung';
$string['backupdescription'] = 'Sicherungsbeschreibung';
$string['backupdetails'] = 'Sicherungsdetails';
$string['backupfinished'] = 'Dieses Backup ist bereits abgeschlossen. Sie können die Protokolle <a href="{$a}">hier</a> einsehen.';
$string['backupinprogres'] = 'Während der Sicherung wird die Site in den Wartungsmodus versetzt. Auf dieser Seite können Sie Protokolle zum aktuellen Vorgang abrufen.';
$string['backupkey'] = 'Backup-Schlüssel';
$string['backupprocesslog'] = 'Sicherungsvorgangsprotokoll';
$string['backupscheduled'] = 'Sicherung (geplant)';
$string['backuptitle'] = 'Sicherung {$a}';
$string['checkagain'] = 'Nochmals prüfen';
$string['cliprocess'] = 'CLI-Prozess';
$string['collapselogs'] = 'Protokolle ausklappen';
$string['configoverrides'] = 'Konfigurationsüberschreibungen';
$string['configoverrides_settingname'] = 'Einstellungsname';
$string['configoverrides_settingvalue'] = 'Einstellungswert';
$string['configoverrides_valueredacted'] = 'redigiert';
$string['configoverrides_willbeincluded'] = 'Einstellungen aus config.php, die in die Sicherung einbezogen werden';
$string['configoverrides_willbeincludedplugin'] = 'Plugin-Einstellungen aus config.php, die in das Backup einbezogen werden';
$string['configoverrides_willnotbeincluded'] = 'Einstellungen aus config.php, die NICHT in die Sicherung einbezogen werden';
$string['configoverrides_willnotbeincludedplugin'] = 'Plugin-Einstellungen aus config.php, die NICHT in die Sicherung einbezogen werden';
$string['containsstandardplugins'] = '{$a} Standard-Plugins';
$string['dbmodifications'] = 'Datenbankänderungen';
$string['dbmodifications_changedtables'] = 'Geänderte Tabellen';
$string['dbmodifications_extratable_warning'] = 'Zusätzliche Tabelle: Die Tabelle fehlt in der Definition, ist jedoch in der tatsächlichen Datenbank vorhanden.';
$string['dbmodifications_extratables'] = 'Zusätzliche Tabellen';
$string['dbmodifications_invalidtables'] = 'Ungültige Tabellen';
$string['dbmodifications_missingtable_warning'] = 'Fehlende Tabelle: Die Tabelle ist in der Definition vorhanden, fehlt jedoch in der eigentlichen Datenbank.';
$string['dbmodifications_missingtables'] = 'Fehlende Tabellen';
$string['dbmodifications_status_clean'] = 'Die Datenbanktabellen stimmen mit den Beschreibungen in install.xml überein';
$string['dbmodifications_status_invalid'] = 'Ihre Datenbank enthält Änderungen, die von Moodle nicht verarbeitet werden können. Sie müssen die „Backup-Einstellungen“ anpassen und bestimmte Entitäten ausschließen, wenn Sie ein Site-Backup durchführen möchten.';
$string['dbmodifications_status_modified'] = 'Ihr Datenbankstatus entspricht nicht den Angaben in install.xml. Die Seite kann gesichert werden, die Änderungen werden in die Sicherung aufgenommen.';
$string['dbmodifications_status_nomodifications'] = 'Site-Backups können ohne Datenbankänderungen durchgeführt werden';
$string['defaultbackupdescription'] = '{$a->site} von {$a->name}';
$string['diskspacebackup'] = 'Speicherplatz';
$string['diskspacebackup_countfiles'] = 'Anzahl der Dateien im Dateispeicher';
$string['diskspacebackup_datarootsize'] = 'Erforderlicher Speicherplatz für Datenverzeichnis (ohne filedir)';
$string['diskspacebackup_dbmaxsize'] = 'Die größte DB-Tabellengröße (ungefähr)';
$string['diskspacebackup_dbrecords'] = 'Gesamtzahl der Zeilen in DB-Tabellen';
$string['diskspacebackup_dbtotalsize'] = 'Erforderlicher Speicherplatz für die Datenbank';
$string['diskspacebackup_fail'] = 'Für die Seiten-Sicherung ist nicht genügend Speicherplatz vorhanden';
$string['diskspacebackup_fail_datarootunreadable'] = 'Pfad(e) im Datenstammverzeichnis <b>{$a->paths}</b> können nicht gelesen werden. Korrigieren Sie entweder die Dateiberechtigungen auf dem Server oder schließen Sie diese Pfade von der Sicherung aus. -<a href="{$a->settingsurl}">Einstellungen</a>.';
$string['diskspacebackup_freespace'] = 'Freier Speicherplatz im temporären Verzeichnis';
$string['diskspacebackup_maxdatarootfilesize'] = 'Die größte Datei im Datenverzeichnis';
$string['diskspacebackup_maxfilesize'] = 'Die größte Datei im Dateispeicher';
$string['diskspacebackup_success'] = 'Es ist genügend Speicherplatz vorhanden, um eine Seiten-Sicherung durchzuführen';
$string['diskspacebackup_totalfilesize'] = 'Gesamtgröße der Dateien im Dateispeicher';
$string['diskspacerestore'] = 'Speicherplatz';
$string['diskspacerestore_dbtotalsizefootnote'] = 'Beachten Sie, dass das Tool Vault <b>nicht prüfen kann</b>, ob in der Datenbank genügend Speicherplatz für die Wiederherstellung vorhanden ist.';
$string['diskspacerestore_fail'] = 'Im temporären Verzeichnis ist nicht genügend Speicherplatz vorhanden, um die Seiten-Wiederherstellung durchzuführen.';
$string['diskspacerestore_filedirsize'] = 'Benötigter Speicherplatz für Dateien';
$string['diskspacerestore_mintmpspace'] = 'Mindestens erforderlicher Speicherplatz im temporären Verzeichnis';
$string['diskspacerestore_success'] = 'Im temporären Verzeichnis ist ausreichend Speicherplatz vorhanden, um die Seiten-Wiederherstellung durchzuführen.';
$string['diskspacerestore_success_warning'] = 'Im temporären Verzeichnis ist ausreichend Speicherplatz vorhanden. Es kann jedoch sein, dass nicht genügend Speicherplatz für alle Dateien und das Datenstammverzeichnis vorhanden ist, wenn sich diese auf derselben lokalen Festplattenpartition befinden.';
$string['enterapikey'] = 'Ich habe einen API-Schlüssel';
$string['enterpassphrase'] = 'Dieses Backup ist mit einem Kennwort geschützt';
$string['environ_fail'] = 'Vault konnte die Einstellung für die maximale Ausführungszeit nicht ändern. Weitere Informationen finden Sie unter <a href="{$a}" target="_blank">{$a}</a>';
$string['environ_success_warning'] = 'Vault konnte die Einstellung für die maximale Ausführungszeit nicht ändern. Wenn der Prozess nicht innerhalb von {$a->value} abgeschlossen ist, wird er abgebrochen. Weitere Informationen finden Sie unter <a href="{$a->url}" target="_blank">{$a->url}</a>';
$string['environbackup'] = 'Voraussetzungen prüfen';
$string['environbackup_maxexecutiontime'] = 'Maximale Ausführungszeit (max_execution_time)';
$string['error_accesskeyisnotvalid'] = 'Der Zugriffsschlüssel ist ungültig';
$string['error_anotherbackupisinprogress'] = 'Eine andere Sicherung wird gerade ausgeführt';
$string['error_anotherrestoreisinprogress'] = 'Eine andere Wiederherstellung wird gerade ausgeführt';
$string['error_apikeycharacters'] = 'Der API-Schlüssel darf nur lateinische Buchstaben und Ziffern enthalten';
$string['error_apikeynotvalid'] = 'API-Schlüssel ungültig';
$string['error_apikeytoolong'] = 'Der API-Schlüssel ist zu lang';
$string['error_apikeytooshort'] = 'Der API-Schlüssel ist zu kurz';
$string['error_backupfailed'] = 'Die Sicherung mit dem Schlüssel {$a} ist fehlgeschlagen';
$string['error_backuphaswrongstatus'] = 'Backup mit dem Schlüssel {$a} hat einen falschen Status';
$string['error_backupinprogressnotfound'] = 'Laufende Sicherung nicht gefunden';
$string['error_backupnotavailable'] = 'Backup mit dem Schlüssel {$a} ist nicht mehr verfügbar';
$string['error_backupnotfinished'] = 'Die Sicherung mit dem Schlüssel {$a} ist noch nicht abgeschlossen';
$string['error_backupprecheckfailed'] = 'Beim Ausführen der Sicherungsvorprüfung „{$a->name}“ ist ein Fehler aufgetreten: {$a->message}';
$string['error_cannotcreatezip'] = 'ZIP-Datei kann nicht erstellt werden';
$string['error_cannotresumerestore'] = 'Kann nur fehlgeschlagene Wiederherstellungen fortsetzen. Der letzte Wiederherstellungsprozess hat den Status {$a}';
$string['error_dbstructurenotvalid'] = 'Archiv {$a} enthält keine Datenbankstruktur';
$string['error_failedmultipartupload'] = 'Der mehrteilige Upload konnte nicht gestartet werden. Die Upload-ID wurde in der Befehlsausgabe nicht gefunden: {$a}';
$string['error_filenotfound'] = 'Erwartete Datei {$a} nicht gefunden';
$string['error_invaliddownloadlink'] = 'Die Vault-API hat keinen gültigen Download-Link für {$a->filename} zurückgegeben: {$a->url}';
$string['error_invaliduploadlink'] = 'Die Vault-API hat keinen gültigen Upload-Link {$a} zurückgegeben.';
$string['error_metadatanotvalid'] = 'Archiv {$a} enthält keine Backup-Metadaten';
$string['error_notavalidlink'] = 'Die Vault-API hat keinen gültigen Link zurückgegeben: {$a}';
$string['error_nothingtorestore'] = 'Nichts fortzusetzen';
$string['error_passphrasewrong'] = 'Fehler beim Zugriff auf das kennwortgeschützte Backup. Überprüfen Sie die Kennwort und versuchen Sie es erneut.';
$string['error_restoreprecheckfailed'] = 'Beim Ausführen der Wiederherstellungsvorprüfung „{$a->name}“ ist ein Fehler aufgetreten: {$a->message}';
$string['error_restoresnotallowed'] = 'Wiederherstellungen sind auf dieser Seite nicht erlaubt';
$string['error_serverreturnednodata'] = 'Der Server hat keine Daten zurückgegeben';
$string['error_shutdown'] = 'Herunterfahren erkannt. {$a} ist abgelaufen oder wurde von Nutzer/in unterbrochen.';
$string['error_unabletorunprecheck'] = 'Vorprüfung {$a} kann nicht ausgeführt werden';
$string['error_usecli'] = 'Sie können von dieser Seite aus keine Seiten-Sicherung und -Wiederherstellung durchführen. Verwenden Sie bitte die Befehlszeilenschnittstelle.';
$string['excludetablefrombackup'] = 'Fügen Sie "{$a}" zur Einstellung für ausgeschlossene Tabellen hinzu.';
$string['expandlogs'] = 'Protokolle erweitern';
$string['forgetapikey'] = 'API-Schlüssel vergessen';
$string['hidebacktrace'] = 'Backtrace ausblenden';
$string['history'] = 'Historie';
$string['history_desc'] = 'Protokolle früherer Sicherungen und Wiederherstellungen auf dieser Site.';
$string['lastop_backupfailed_header'] = 'Sicherung fehlgeschlagen';
$string['lastop_backupfailed_text'] = 'Die für {$a} durchgeführte Sicherung ist fehlgeschlagen';
$string['lastop_backupfinished_header'] = 'Sicherung abgeschlossen';
$string['lastop_backupfinished_text'] = 'Sicherung {$a->backupkey} gestartet am {$a->started} und beendet am {$a->finished}';
$string['lastop_backupinprogress_header'] = 'Sicherung läuft';
$string['lastop_backupinprogress_text'] = 'Sie führen gerade eine Sicherung durch';
$string['lastop_backupscheduled_header'] = 'Sicherung geplant';
$string['lastop_backupscheduled_text'] = 'Ihr Backup ist nun geplant und wird beim nächsten Cron-Lauf ausgeführt';
$string['lastop_restorefailed_canberesumed'] = 'Diese Wiederherstellung kann fortgesetzt werden.';
$string['lastop_restorefailed_header'] = 'Wiederherstellung fehlgeschlagen';
$string['lastop_restorefailed_text'] = 'Die für {$a} durchgeführte Wiederherstellung ist fehlgeschlagen.';
$string['lastop_restorefinished_header'] = 'Wiederherstellung abgeschlossen';
$string['lastop_restorefinished_text'] = 'Wiederherstellung aus Backup {$a->backupkey}, begonnen am {$a->started} und beendet am {$a->finished}';
$string['lastop_restoreinprogress_header'] = 'Wiederherstellung läuft';
$string['lastop_restoreinprogress_text'] = 'Sie führen gerade eine Wiederherstellung durch';
$string['lastop_restoreprecheckfailed_header'] = 'Vorprüfung der Wiederherstellung fehlgeschlagen';
$string['lastop_restoreprecheckfailed_text'] = 'Die Wiederherstellungsvorprüfung wurde um {$a} abgeschlossen. Eine Wiederherstellung ist erst möglich, wenn alle Probleme behoben sind.';
$string['lastop_restoreprecheckfinished_header'] = 'Vorprüfung der Wiederherstellung erfolgreich';
$string['lastop_restoreprecheckfinished_text'] = 'Die Wiederherstellungsvorprüfung wurde um {$a->finished} abgeschlossen. Die Sicherung {$a->backupkey} kann jetzt auf dieser Seite wiederhergestellt werden.';
$string['lastop_restoreprecheckinprogress_header'] = 'Vorprüfung der Wiederherstellung läuft';
$string['lastop_restoreprecheckinprogress_text'] = 'Sie führen gerade eine Vorabprüfung durch';
$string['lastop_restoreprecheckscheduled_header'] = 'Vorabprüfung für Wiederherstellung geplant';
$string['lastop_restoreprecheckscheduled_text'] = 'Ihre Wiederherstellungsvorprüfung ist nun geplant und wird beim nächsten Cron-Lauf ausgeführt';
$string['lastop_restorescheduled_header'] = 'Wiederherstellung geplant';
$string['lastop_restorescheduled_text'] = 'Ihre Wiederherstellung ist geplant und wird beim nächsten Cron-Lauf ausgeführt';
$string['lastupdated'] = 'Zuletzt aktualisiert';
$string['loginexplanation'] = 'Erstellen Sie ein Konto bei {$a}, um die Website sichern oder wiederherstellen zu können. Mit dem <b>kostenlosen Konto</b> können Sie kleine Websites sichern, wiederherstellen und bis zu 7 Tage in der Cloud speichern.';
$string['manageremoteaccount'] = 'Verwalten Sie Ihr Konto';
$string['messageprovider:statusupdate'] = 'Statusaktualisierung für Vault – Site-Migration';
$string['moodleversion_backupinfo'] = 'Sicherung erstellt in Version {$a->version} (Moodle {$a->branch})';
$string['moodleversion_fail'] = 'Die Versionsnummer der Seite muss größer oder gleich der Version im Backup sein. Dieses Backup hat die Versionsnummer {$a->version} und diese Seite die Versionsnummer {$a->siteversion}.';
$string['moodleversion_fail_cannotupgrade'] = 'Die Versionsnummer der Seite muss größer oder gleich der Version im Backup sein. Dieses Backup hat die Versionsnummer {$a->version} und diese Seite die Versionsnummer {$a->siteversion}.';
$string['moodleversion_siteinfo'] = 'Diese Webseite hat die Version {$a->version} (Moodle {$a->branch})';
$string['moodleversion_success'] = 'Moodle-Version identisch';
$string['moodleversion_success_withautoupgrade'] = 'Die Wiederherstellung kann durchgeführt werden. Vault führt im Rahmen der Wiederherstellung automatisch den Moodle-Upgrade-Prozess aus.';
$string['moodleversion_success_withextraupgrade'] = 'Die Wiederherstellung kann durchgeführt werden. Vault aktualisiert die Seite von {$a->backuprelease} auf {$a->intermediaryrelease} und führt anschließend ein Standard-Moodle-Upgrade auf {$a->currentrelease} durch.';
$string['moodleversion_success_withupgrade'] = 'Eine Wiederherstellung ist möglich, Sie müssen jedoch nach Abschluss den Moodle-Upgrade-Prozess ausführen.';
$string['nobackupsavailable'] = 'Es sind keine Remote-Backups zur Wiederherstellung verfügbar';
$string['nopastbackups'] = 'Sie haben keine früheren Backups';
$string['nopastrestores'] = 'Sie haben keine früheren Wiederherstellungen';
$string['operation'] = 'Vorgang {$a}';
$string['passphrase'] = 'Kennwort';
$string['pastbackupslist'] = 'Past backups on this site';
$string['pastrestoreslist'] = 'Frühere Wiederherstellungen auf dieser Seite';
$string['performedby'] = 'Aufgeführt von';
$string['pleasewait'] = 'Bitte warten...';
$string['pluginname'] = 'Vault - Site migration';
$string['precheckdetails'] = 'Details zur Vorabprüfung';
$string['privacy:metadata'] = 'Das Vault-Plugin speichert keine personenbezogenen Daten.';
$string['privacy:metadata:alldata'] = 'Alle Daten aus der Datenbank, dem Dateisystem und dem Datenverzeichnis';
$string['privacy:metadata:lmsvault'] = 'Das Vault-Migrationstool kann die gesamte Seite in der Cloud sichern. Weitere Informationen finden Sie unter https://lmsvault.io.';
$string['refreshpage'] = '<a href="{$a}">Aktualisieren</a> Sie diese Seite, um die aktualisierten Protokolle anzuzeigen.';
$string['remotebackup'] = 'Remote-Sicherung';
$string['remotebackupdetails'] = 'Details zur Remotesicherung';
$string['remotebackups'] = 'Remote-Sicherungen';
$string['remotesignin'] = 'Anmelden';
$string['remotesignup'] = 'Nutzerkonto erstellen';
$string['repeatprecheck'] = 'Vorprüfung wiederholen';
$string['restoredetails'] = 'Wiederherstellungs-Details';
$string['restorefinished'] = 'Diese Wiederherstellung ist bereits abgeschlossen. Sie können die Protokolle <a href="{$a}">hier</a> abrufen.';
$string['restorefrombackup'] = 'Wiederherstellen aus der Sicherung {$a}';
$string['restoreinprogress'] = 'Während der Wiederherstellung wird die Seite in den Wartungsmodus versetzt. Auf dieser Seite können Sie Protokolle zum aktuellen Vorgang abrufen.';
$string['restoreprechecks'] = 'Vorabprüfungen wiederherstellen';
$string['resume'] = 'Fortsetzen';
$string['resumerestore'] = 'Diese Wiederherstellung fortsetzen';
$string['resumerestore_desc'] = 'Die Wiederherstellung wird beim nächsten Cron-Lauf fortgesetzt';
$string['returntothesite'] = 'Zurück zur Webseite';
$string['scheduledtask'] = 'Geplante Aufgabe';
$string['seefullreport'] = 'Vollständigen Bericht ansehen';
$string['setting_restoreremovemissing'] = 'Fehlende Plugins nach der Wiederherstellung automatisch entfernen';
$string['setting_restoreremovemissing_desc'] = 'Enthält eine Sicherung Daten für Plugins, die nicht in der Codebasis dieser Webseite vorhanden sind, werden diese in der Plugin-Übersicht als „Fehlt auf der Festplatte“ gekennzeichnet.<br>
– Wenn Sie diese Option aktivieren, werden diese Plugins automatisch deinstalliert und alle zugehörigen Daten aus der Datenbank und dem Dateispeicher entfernt.<br>
– Wenn Sie diese Option deaktivieren, verbleiben die Daten in der Datenbank und Sie können den Plugin-Code nach Abschluss der Wiederherstellung hinzufügen oder das Deinstallationsskript manuell ausführen.<br>
<em>Fehlende Plugins werden nicht entfernt, wenn nach der Wiederherstellung ein Upgrade aussteht, d. h. wenn Sie eine höhere Moodle-Version wiederherstellen oder andere Plugins aktualisiert werden müssen. In diesem Fall können Sie „Moodle nach Wiederherstellung automatisch aktualisieren“ auswählen.</em>';
$string['setting_upgradeafterrestore'] = 'Moodle nach der Wiederherstellung automatisch aktualisieren';
$string['setting_upgradeafterrestore_desc'] = 'Starten Sie nach der Wiederherstellung der Webseite sofort den Moodle-Upgrade-Prozess. Wenn Sie diese Option auswählen, kann Vault Moodle von jeder Version aktualisieren, die für die Sicherung unterstützt wurde. Sie können beispielsweise von 3.9 direkt auf 4.3 aktualisieren, obwohl Sie für Moodle selbst zuerst auf 3.11.8-4.2 und erst dann auf 4.3 aktualisieren müssten.';
$string['settings_allowrestore'] = 'Wiederherstellungen auf dieser Seite zulassen';
$string['settings_allowrestore_desc'] = 'Die Seiten-Wiederherstellung entfernt alle Inhalte dieser Seite vollständig und ersetzt sie durch die wiederhergestellten Inhalte. Überprüfen Sie alles noch einmal, bevor Sie diese Option aktivieren.';
$string['settings_allowrestorewithmissing'] = 'Wiederherstellung mit fehlenden Plugins zulassen';
$string['settings_allowrestorewithmissing_desc'] = 'Wenn die gesicherte Webseite zwar Add-on-Plugins enthielt, deren Code aber dort fehlt, kann die Wiederherstellung trotzdem durchgeführt werden. Nach der Wiederherstellung werden diese Plugins als „Fehlt auf der Festplatte“ aufgeführt. Sie können sie deinstallieren oder die Daten behalten, bis Sie den Code für die Plugins hinzugefügt haben. Bis dahin können Fehler auftreten, z. B. fehlende geplante Aufgaben.';
$string['settings_backupcompressionlevel'] = 'Zip-Komprimierungsstufe';
$string['settings_backupcompressionlevel_desc'] = 'Bei einer niedrigeren Komprimierungsstufe dauert das Erstellen von ZIP-Archiven zwar weniger Zeit, die Archive sind jedoch größer und die Backup-Größe nimmt zu.<br>
Beachten Sie, dass Dateien mit der Erweiterung {$a} immer zu den ZIP-Archiven mit Komprimierungsstufe 0 hinzugefügt werden, da sie bereits komprimiert sind.';
