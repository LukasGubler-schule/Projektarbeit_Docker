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
 * Strings for component 'report_securityaudit', language 'de', version '4.5'.
 *
 * @package     report_securityaudit
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessoutside'] = 'Von außen zugängliche Daten';
$string['action'] = 'Aktionen';
$string['area'] = 'Bereich';
$string['auditpanel'] = 'Prüfungsausschuss';
$string['backups'] = 'Backups';
$string['btnbackas'] = 'Zur "Website-Administration"';
$string['check_vuls'] = 'Bekannte Schwachstellen';
$string['check_vuls_details_moodle'] = '<h2>Gefundene Schwachstellen:</h2>';
$string['check_vuls_error_db'] = 'Fehler beim Lesen der Datenbankversion. Bericht an Plugin-Autor/in.';
$string['check_vuls_error_moodle'] = 'Fehler beim Lesen der Moodle-Version. Bericht an Plugin-Autor/in.';
$string['check_vuls_error_php'] = 'Fehler beim Lesen der PHP-Version. Bericht an Plugin-Autor/in.';
$string['check_vuls_founderror_db'] = 'Gefundene <span class="badge badge-pill bg-danger">{$a}</span> Sicherheitslücken für diese Version der Datenbank.';
$string['check_vuls_founderror_moodle'] = 'Gefundene <span class="badge badge-pill bg-danger">{$a}</span> Sicherheitslücken für diese Version von Moodle.';
$string['check_vuls_founderror_php'] = 'Gefundene  <span class="badge badge-pill bg-danger">{$a}</span> Schwachstellen für diese Version von PHP.';
$string['check_vuls_getdata'] = 'Laden Sie die Daten für weitere Informationen herunter.';
$string['check_vuls_hunknown_moodle'] = 'Es konnte keine Verbindung zum Analyseserver hergestellt werden. Sie können dies manuell auf unserer Website <a target="_blank" href="https://when2update.com">when2update.com</a> tun.';
$string['check_vuls_nosupporterror_db'] = 'Diese Version der Datenbank wird aus Sicherheitsgründen nicht mehr unterstützt, eine Aktualisierung auf eine neuere Version wird empfohlen.';
$string['check_vuls_nosupporterror_moodle'] = 'Diese Version von Moodle wird aus Sicherheitsgründen nicht mehr unterstützt, ein Update auf eine neuere Version wird empfohlen.';
$string['check_vuls_nosupporterror_php'] = 'Diese Version von PHP wird aus Sicherheitsgründen nicht mehr unterstützt, ein Update auf eine neuere Version wird empfohlen.';
$string['check_vuls_ok_db'] = 'Derzeit sind für diese Version der Datenbank keine Sicherheitslücken bekannt.';
$string['check_vuls_ok_moodle'] = 'Zurzeit sind für diese Version von Moodle keine Sicherheitslücken bekannt.';
$string['check_vuls_ok_php'] = 'Derzeit sind für diese Version von PHP keine Sicherheitslücken bekannt.';
$string['check_vuls_unknown_db'] = 'Es konnte keine Verbindung zum Analyseserver hergestellt werden. Sie können dies manuell auf unserer Website <a target="_blank" href="https://when2update.com">when2update.com</a> tun.';
$string['check_vuls_unknown_php'] = 'Es konnte keine Verbindung zum Analyseserver hergestellt werden. Sie können dies manuell auf unserer Website <a target="_blank" href="https://when2update.com">when2update.com</a> tun.';
$string['check_vulsdetails'] = '<h2>Gefundene Schwachstellen:</h2>';
$string['check_vulserror'] = 'Fehler beim Lesen der Moodle-Version. Bericht an den Plugin-Autor.';
$string['check_vulshok'] = 'Zurzeit sind für diese Version von Moodle keine Sicherheitslücken bekannt.';
$string['check_vulshunknown'] = 'Es konnte keine Verbindung zum Analyseserver hergestellt werden. Bitte versuchen Sie es später noch einmal oder führen Sie es manuell auf unserer Website <a target="_blank" href="https://when2update.com">when2update.com</a> durch.';
$string['check_vulsnosupporterror'] = 'Diese Version von Moodle wird aus Sicherheitsgründen nicht mehr unterstützt, ein Update auf eine neuere Version wird empfohlen.';
$string['checkadminhasmfa'] = 'Administratorkonten mit MFA';
$string['checkadminhasmfadetails'] = 'Erwägen Sie die Aktivierung der Zwei-Faktor-Authentifizierung für Administratorkonten, um die Sicherheit zu erhöhen.';
$string['checkadminhasmfaerror'] = 'Bei einigen Administratoren ist MFA nicht aktiviert.';
$string['checkadminhasmfahok'] = 'Für alle administrativen Konten ist MFA aktiviert.';
$string['checkadminhasmfainfo'] = 'Damit ein Administrator aus der obigen Liste verschwindet, muss er sich mindestens einmal mit MFA anmelden.';
$string['checkadminhasmfanoenabled'] = 'Das MFA-Plugin ist nicht aktiviert.';
$string['checkbackup_auto_active'] = 'Kurs-Backups';
$string['checkbackup_auto_activeerror'] = 'Es sind keine automatischen oder manuellen Kurssicherungen konfiguriert.';
$string['checkbackup_auto_activehok'] = 'Backups aktiviert. Es lohnt sich, von Zeit zu Zeit zu überprüfen, ob sie korrekt ausgeführt werden.';
$string['checkcleantext'] = 'Bereinigung des Textes';
$string['checkcleantextdetails'] = 'Sie können auch in Erwägung ziehen, die experimentelle Funktion "Inhalt überall bereinigen" zu aktivieren, um eine strengere Textbereinigung durchzuführen.';
$string['checkcleantexterror'] = 'Sie haben die Einstellung "Vertrauenswürdige Inhalte zulassen" aktiviert, die Nutzer/innen das Einfügen von Skripte erlaubt, was ein Sicherheitsrisiko darstellen könnte.<br>Stellen Sie sicher, dass diese Option notwendig ist.';
$string['checkcleantextok'] = 'Die Option "Vertrauenswürdige Inhalte zulassen" ist deaktiviert.';
$string['checkcookiesecure'] = 'Nur sichere Cookies';
$string['checkcookiesecuredetails'] = 'Gemäß den Einstellungsinformationen.';
$string['checkcookiesecureerror'] = 'Wenn der Server nur https-Verbindungen akzeptiert: es wird empfohlen, das Senden von sicheren Cookies zu aktivieren.';
$string['checkcookiesecurehok'] = 'Nur sichere Cookies sind aktiviert';
$string['checkcron'] = 'Cron-Betrieb';
$string['checkcronerror'] = 'Cron funktioniert nicht richtig.';
$string['checkcronhok'] = 'Cron ist in Betrieb.';
$string['checkdebug'] = 'Debug-Meldungen';
$string['checkdebugdisplay'] = 'Fehlermeldungen anzeigen';
$string['checkdebugdisplayerror'] = 'Die Anzeige von Fehlermeldungen, die auf HTML-Seiten erscheinen, ist aktiviert.';
$string['checkdebugdisplayhok'] = 'Die Anzeige von Fehlermeldungen ist deaktiviert.';
$string['checkdebugerror'] = 'Eine andere Option als <i>NONE: Keine Fehler oder Meldungen anzeigen</i> ist gesetzt.';
$string['checkdebughok'] = 'Auf <i>KEINE: Keine Fehler oder Meldungen anzeigen</i> setzen.';
$string['checkenablewebservices'] = 'Aktive Webservice-Protokolle';
$string['checkenablewebservicesdetails'] = 'Sie können die <a href="{$a}">Aktiven Webdienstprotokolle</a> zur Überprüfung einsehen.';
$string['checkenablewebserviceserror'] = 'Webdienste aktiviert. Deaktivieren, wenn nicht benötigt.';
$string['checkenablewebserviceshok'] = 'Webdienste sind deaktiviert, was die Sicherheit erhöht.';
$string['checkguestloginbutton'] = 'Taste für die Anmeldung von Gästen';
$string['checkguestloginbuttonerror'] = 'Die Schaltfläche für die Gastanmeldung auf der Anmeldeseite ist verfügbar.';
$string['checkguestloginbuttonhok'] = 'Schaltfläche für die Anmeldung von Gästen ausgeblendet.';
$string['checklogs'] = 'Protokolle prüfen';
$string['checkminpasswordlength'] = 'Länge des Passworts';
$string['checkminpasswordlengtherror'] = 'Die Länge des Passworts ist {$a}, die Standardlänge beträgt mindestens 8 Zeichen.';
$string['checkminpasswordlengthhok'] = 'Die Passwortlänge entspricht dem Minimum.';
$string['checkpasswordexpiration'] = 'Aktivieren Sie den Ablauf des Passworts für die <i>auth_manual</i>-Authentifizierung.';
$string['checkpasswordexpirationerror'] = 'Erzwingt eine Passwortänderung nach einer bestimmten Anzahl von Tagen nach der letzten Aktualisierung für die <i>auth_manual</i> Autorisierung.';
$string['checkpasswordexpirationhok'] = 'Ablauf des Passworts aktiviert.';
$string['checkvulnerabilities_db'] = 'Sicherheit der Datenbank';
$string['checkvulnerabilities_moodle'] = 'Moodle-Sicherheit';
$string['checkvulnerabilities_php'] = 'PHP-Sicherheit';
$string['checkw2u'] = 'Prüfung auf entfernte Sicherheitslücken';
$string['checkw2u_desc'] = 'Prüfen Sie Software-Schwachstellen mit <a href="https://when2update.com" target="_blank">when2update.com</a> (kann die Ladezeit des Berichts aufgrund der Kommunikation mit einem externen Server erhöhen).';
$string['countfailed'] = 'Anzahl der gemeldeten potenziellen Probleme';
$string['countsuccess'] = 'Anzahl der richtigen Antworten';
$string['critical'] = 'Kritisch';
$string['critical_desc'] = 'Deal with them quickly!';
$string['cve'] = 'Kümmern Sie sich schnell um sie!';
$string['description'] = 'Beschreibung';
$string['envirolment'] = 'LMS-Laufzeitumgebung';
$string['formlmswitaibtn'] = 'Einen Fehler melden / Hilfe anfordern / neue Funktion';
$string['gdpr'] = 'GDPR';
$string['info'] = 'Informationen';
$string['info_desc'] = 'Schauen Sie nach, wenn Sie einen Moment Zeit haben...';
$string['lastcheck'] = 'Letzte Überprüfung:';
$string['logfailmodule'] = 'Anzahl der Fehler aus 7 Tagen';
$string['moderate'] = 'Mäßig';
$string['moderate_desc'] = 'Informieren Sie sich und entscheiden Sie.';
$string['monitor_title_failureslogin'] = 'Anzahl der fehlgeschlagenen Anmeldungen (30 Tage)';
$string['monitor_title_failureslogintop'] = 'Top 10 Anmeldeprobleme (30 Tage)';
$string['monitorcronlog'] = 'Die Überprüfung auf ungültige Anmeldungen erfolgt einmal pro Tag entsprechend den Einstellungen im Mais, standardmäßig um 1:00 Uhr morgens.';
$string['monitoring'] = 'Überwachung';
$string['nisactions'] = 'Aktionen';
$string['nisantivirusforlms'] = 'Antivirus für LMS';
$string['nisapprovedsecuritypolicy'] = 'Genehmigte Sicherheitsrichtlinien und Verfahren für das Management von Zwischenfällen in Übereinstimmung mit den NIS2-Anforderungen.';
$string['nisassessmentofserverinfrastructure'] = 'Bewertung der Server-Infrastruktur: Überprüfung aller Serverkomponenten (Betriebssystem, Netzwerk, Software) und deren Übereinstimmung mit den NIS2-Anforderungen.';
$string['nisauditreportidentifyingvulnerabilities'] = 'Auditbericht, der Schwachstellen im Server und in der LMS-Plattform aufzeigt und Empfehlungen für Abhilfemaßnahmen enthält.';
$string['niscategory'] = 'Kategorie';
$string['niscollaborationwithexternalcompany'] = 'Zusammenarbeit mit einem externen Unternehmen';
$string['niscollaborationwithnationalcenter'] = 'Zusammenarbeit mit dem nationalen Zentrum, das für die Umsetzung und Überwachung der NIS2-Richtlinie zuständig ist: Fortsetzung der Zusammenarbeit mit den Notfallteams, um auf Vorfälle zu reagieren und Informationen auszutauschen.';
$string['niscompletedauditconfirmingcompliance'] = 'Abgeschlossenes Audit zur Bestätigung der Einhaltung der NIS2-Richtlinie.';
$string['nisconductinginternalaudit'] = 'Durchführung eines internen Audits, um zu bewerten, ob die Einrichtung und die IT-Infrastruktur die NIS2-Anforderungen erfüllen.';
$string['nisconfigurationbyitdepartment'] = 'Konfiguration durch die IT-Abteilung';
$string['niscontinuoussystemmonitoring'] = 'Continuous system monitoring: Regularly monitoring the server and LMS platform to detect and counter new threats. Monitoring logs, incidents, and network traffic.';
$string['niscorrectionsandfixes'] = 'Korrekturen und Behebungen: Auf der Grundlage der Ergebnisse von Tests und Audits Vornahme aller erforderlichen Korrekturen, Optimierung der Sicherheitspolitik und Aktualisierung der Systeme.';
$string['nisdatabasesecurity'] = 'Sicherheit der Datenbank: Zusätzliche Sicherheitsmaßnahmen für die LMS-Datenbank, z. B. Schutz vor SQL-Injection, regelmäßige Backups, Datenbanksegmentierung, Antivirensoftware speziell für LMS.';
$string['nisdataencryption'] = 'Datenverschlüsselung: Implementierung einer vollständigen Verschlüsselung der Daten, die zwischen den Nutzern und dem Server übertragen werden (SSL/TLS), sowie Verschlüsselung der auf dem Server gespeicherten Daten (in LMS-Datenbanken).';
$string['nisdevelopmentofsecuritypolicy'] = '2. Entwicklung einer Sicherheitspolitik';
$string['nisenhancedmonitoringoflmsandserver'] = 'Verbesserte Überwachung von LMS und Server';
$string['nisfullcompliancewithnis2'] = 'Vollständige Einhaltung der NIS2-Anforderungen und kontinuierliche Aktualisierung und Sicherheitsüberwachung.';
$string['nisincidentmanagementprocedurecreation'] = 'Erstellung von Verfahren für das Management von Zwischenfällen: Entwicklung und Umsetzung von Verfahren zur Meldung und Verwaltung von Vorfällen im Zusammenhang mit der Cybersicherheit (z. B. Hackerangriffe, Datenlecks).';
$string['nisincidentsimulationexercises'] = 'Übungen zur Simulation von Vorfällen: Organisation von Simulationen von Cyberangriffen und -vorfällen (z. B. Phishing), damit IT-Mitarbeiter und Benutzer Reaktionsverfahren üben können.';
$string['nisincreasedcybersecurityawareness'] = 'Erhöhtes Bewusstsein für Cybersicherheit bei Mitarbeitern und Nutzern der LMS-Plattform.';
$string['nislmsandserversecuritypolicy'] = 'Sicherheitspolitik für LMS und Server: Entwicklung einer umfassenden Sicherheitsrichtlinie für die LMS-Plattform, den Server, die Verwaltung der Benutzerdaten und den Zugang. Diese Richtlinie muss Standards für Passwörter, Autorisierung, Backups und Systemüberwachung festlegen.';
$string['nislmsandserverupdates'] = 'LMS- und Server-Aktualisierungen';
$string['nislmssoftwareaudit'] = 'LMS-Software-Audit: Beauftragung eines externen Audits, das das Sicherheitsniveau des LMS und des Servers bewertet. Dies umfasst die Überprüfung der Serverkonfiguration, der Datenbanken, der Sicherungssysteme und der Benutzerverwaltung.';
$string['nismethodofimplementation'] = 'Methode der Durchführung';
$string['nismonitoringandcontinuousimprovement'] = '6. Überwachung und kontinuierliche Verbesserung';
$string['nismonitoringandlogging'] = 'Überwachung und Protokollierung: Implementierung von Tools zur Überwachung des Netzwerkverkehrs, zur Protokollierung der Benutzeraktivitäten und zur Aufzeichnung von Ereignissen auf Server- und LMS-Plattform-Ebene, WAF speziell für die E-Learning-Plattform (Web Application Firewall).';
$string['nispenetrationtesting'] = 'Penetrationstests: Durchführung von Penetrationstests (z. B. OWASP Top 10) zur Überprüfung der Wirksamkeit der auf dem Server und der LMS-Plattform implementierten Sicherheitsmaßnahmen. Diese Tests zielen darauf ab, potenzielle Angriffe zu simulieren.';
$string['nispreparationofriskmanagementplan'] = 'Erstellung eines Risikomanagementplans: Ein Dokument, in dem die Grundsätze des Risikomanagements, seine Identifizierung und Kontrolle unter besonderer Berücksichtigung der LMS-Nutzerdaten festgelegt sind.';
$string['nisregularsecurityupdates'] = 'Regelmäßige Sicherheitsaktualisierungen: Fortführung des regelmäßigen Hochladens von Updates für den Server, die LMS-Software und alle Sicherheitstools.';
$string['nisresult'] = 'Ergebnis';
$string['nisriskanalysis'] = 'Risikoanalyse: Identifizierung von Bedrohungen im Zusammenhang mit dem LMS-Hosting, unbefugtem Zugriff auf Benutzerdaten, wie z. B. Anfälligkeit für DDoS-Angriffe oder Malware.';
$string['nissecurityauditandriskanalysis'] = '1. Sicherheitsaudit und Risikoanalyse';
$string['nissecuritypolicyreviews'] = 'Überprüfung der Sicherheitspolitik: Regelmäßige Überprüfung und Aktualisierung der Sicherheitspolitik mindestens einmal pro Jahr unter Berücksichtigung neuer Bedrohungen und rechtlicher Änderungen.';
$string['nissecuritytestingandnis2complianceaudit'] = '5. Sicherheitstests und Prüfung der NIS2-Konformität';
$string['nissecuritytraininginlms'] = 'Schulung - Wie kann man das LMS sicher nutzen?';
$string['nisserverandlmssecurityupgrades'] = '3. Server- und LMS-Sicherheitsupgrades';
$string['nisserverupdate'] = 'Server-Update: Installation der neuesten Sicherheitspatches für das Server-Betriebssystem und die LMS-Software. Konfiguration von Firewall, Intrusion Detection Systems (IDS/IPS) für den Server, spezielle WAF für die E-Learning-Plattform (Web Application Firewall).';
$string['nistrainingforitteam'] = 'Schulungen für das IT-Team: Spezialisierte technische Schulungen in den Bereichen Servermanagement, Sicherheitsupdates und Reaktion auf Cyber-Bedrohungen.';
$string['nistrainingforusersoflms'] = 'Schulung der Nutzer der LMS-Plattform: Ausarbeitung von Schulungsprogrammen für Nutzer (Lehrkräfte, Schüler, Verwaltung), die die sichere Nutzung des LMS, den Passwortschutz und bewährte Verfahren im Bereich der Cybersicherheit behandeln.';
$string['nistrainingofitstaffandusers'] = '4. Schulung von IT-Personal und Benutzern';
$string['nisupdatedstrengthenedserver'] = 'Aktualisierte und verstärkte Server, erhöhte Sicherheit der LMS-Plattform und verbesserte Datenverwaltungsmechanismen.';
$string['niswafforlms'] = 'WAF für LMS';
$string['nodata'] = 'Keine Daten';
$string['nofail_desc'] = 'Aus diesem Bereich werden keine Probleme gemeldet.';
$string['nofail_title'] = 'Gut!';
$string['nointernallogerror'] = 'Die Überwachung von fehlerhaften Anmeldungen unterstützt nur die interne Protokolldatenbank.';
$string['normal'] = 'Normal';
$string['normal_desc'] = 'Sehr gut.';
$string['notassigned'] = 'Nicht zugewiesen';
$string['other'] = 'Andere';
$string['overallmodule'] = 'Gesamtbewertung';
$string['password_expire_stats'] = 'Statistik der Passwortänderungen';
$string['pluginname'] = 'NIS2- und GDPR-Sicherheitsauditbericht';
$string['quantity'] = 'Menge';
$string['recommended_minimum_update'] = 'Aktualisieren Sie die Plattform mindestens auf die Version <strong>{$a}</strong>, um die unten aufgeführten Schwachstellen zu beseitigen. Wenn Sie nur bestimmte Schwachstellen beheben möchten, aktualisieren Sie die E-Learning-Plattform auf die in der Tabelle angegebene Version oder (falls verfügbar) deaktivieren Sie das entsprechende Element, um die Sicherheit zu gewährleisten.';
$string['requirementsnistwo'] = 'NIS2-Anforderungen';
$string['security'] = 'Sicherheit';
$string['securityaudit'] = 'Sicherheitsaudit';
$string['securityaudit:monitor'] = 'Sicherheitsaudit-Monitor anzeigen';
$string['securityaudit:nis'] = 'NIS2-Bericht anzeigen';
$string['securityaudit:view'] = 'Sicherheitsauditbericht anzeigen';
$string['setting'] = 'Einstellungen';
$string['status'] = 'Status';
$string['tooltipcheckbtn'] = 'Informationen vom When2update.com Server herunterladen';
$string['tooltipfaillogs'] = 'Anzahl der fehlgeschlagenen Anmeldungen über 30 Tage';
$string['unknown'] = 'Unbekannt';
$string['user_login_failed_stats'] = 'Statistiken über fehlgeschlagene Anmeldungen';
$string['usersaccount'] = 'Benutzerkonten';
$string['versionfixed'] = 'Version korrigiert';
$string['vulnerabilitie'] = 'Schwachstelle';
$string['vulnerabilities'] = 'Schwachstellen';
