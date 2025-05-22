# Dokumentation der Moodle-Migration

## Inhaltsverzeichnis

1. [Einleitung](#einleitung)  
2. [Projektauftrag](#projektauftrag)  
3. [Realisierung](#realisierung)  
   - 3.1 [Fachkenntnisse und Anwendungskompetenz](#fachkenntnisse-und-anwendungskompetenz)  
   - 3.2 [System- und Konfigurationsanforderungen](#system--und-konfigurationsanforderungen)  
   - 3.3 [Erfüllung der Anforderungen](#erfüllung-der-anforderungen)  
   - 3.4 [Screenshots der funktionierenden Lösung](#screenshots-der-funktionierenden-lösung)  
   - 3.5 [Datenübernahme](#datenübernahme)  
   - 3.6 [Unterschiedliche Container](#unterschiedliche-container)  
4. [Einführung](#einführung)  
   - 4.1 [Abnahmetest](#abnahmetest)  
   - 4.2 [Einführungskonzept](#einführungskonzept)  
   - 4.3 [Präsentation](#präsentation)  

---

## 1. Einleitung

Unser Auftrag besteht darin, die bestehende Moodle-Instanz von Version 3.10.11, die aktuell in einer VM unter Ubuntu 22.04 LTS betrieben wird, auf die neueste Version 4.5.2 zu aktualisieren und vollständig in eine Docker-basierte Containerarchitektur zu überführen. Diese Migration verfolgt das Ziel, die Plattform nachhaltig skalierbar und leicht wartbar zu gestalten sowie einen reibungslosen Update-Prozess für zukünftige Versionen zu unterstützen. Durch den Einsatz von Docker-Containern sollen Ressourcen effizienter genutzt, Abhängigkeiten klar getrennt und die Ausfallsicherheit erhöht werden. Während des gesamten Projekts wird ein Arbeitsjournal geführt, in dem alle Arbeitspakete, Herausforderungen, Lösungsansätze und Zwischenergebnisse dokumentiert werden, um Transparenz zu gewährleisten.

## 2. Unser Auftrag Projektauftrag

### 2.1 Ausgangslage

Die bestehende Moodle-Instanz (Version 3.10.11, Build 20220509) läuft lokal und speichert alle Daten in `/var/www/html`. Der Datenbankdienst (MySQL) ist innerhalb der VM installiert. Ein direkter Zugriff erfolgt über `localhost` im Browser.

### 2.2 Projektziele

- **Muss**: Migration aller Daten (Nutzer, Kurse, Dateien) in Docker-Container (Moodle, MariaDB).  
- **Kann**: Integration von phpMyAdmin zur Datenbankverwaltung.  
- **Ausbau**: Erweiterbarkeit um zusätzliche Plugins und Backup-Strategien.

### 2.3 Team und Organisation

- **Projektleiter:** Gubler Lukas  
- **Teammitglieder:** Garcia SanDiego, Gantenbein Kenzo  
- **Methodik:** HERMES in vier Phasen von Initialisierung bis Einführung.

### 2.4 Planung und Meilensteine

1. **Initialisierung** (27.03.–06.04.2025): Lastenheft inkl. Anforderungsanalyse und Testkonzept.  
2. **Konzept** (27.03.–06.04.2025): Systemanforderungen und Arbeitspakete.  
3. **Realisierung** (15.05.–22.05.2025): Aufbau der Docker-Umgebung, Migration, Tests.  
4. **Einführung** (25.05.–01.06.2025): Abnahmetest, Schulung, Go-Live, Präsentation.  

## 3. Realisierung

### 3.1 Fachkenntnisse und Anwendungskompetenz

Die Realisierung demonstriert fundierte Kenntnisse im Umgang mit Docker Engine 27.x und Compose 2.x sowie MariaDB 10.11 und Moodle 4.5.2. Folgende Fachschritte wurden durchgeführt:

- Definition von Dockerfiles und Docker Compose-Konfiguration.  
- Aufbau von persistenten Volumes für Daten und Konfiguration.  
- Verwaltung sensibler Informationen über Umgebungsvariablen.  
- Einsatz von HERMES-basiertem Testkonzept und Arbeitsjournalierung zur Nachvollziehbarkeit.

### 3.2 System- und Konfigurationsanforderungen

**Hostsystem:** Ubuntu 24.04 LTS oder Windows mit WSL 2 v2.4.13.0  
**Docker Engine:** ≥ 27.0.5  
**Docker Compose:** ≥ 2.24.5  
**Moodle-Container:** Offizielles Image v4.5.2 oder eigenes Dockerfile, PHP 8.x  
**MariaDB-Container:** Version 10.11, sichere Verbindung im dedizierten Docker-Netzwerk

### 3.3 Erfüllung der Anforderungen

| Anforderungstyp | Umsetzung                                                                              |
| --------------- | -------------------------------------------------------------------------------------- |
| Funktional      | Moodle im Container wie in VM betrieben, Datenbankanbindung, Webserver via `localhost` |
| Nichtfunktional | Skalierbares Setup, Performanceoptimierungen, wartbare Architektur                     |
| Datenintegrität | Vollständige Übernahme aller Kurse, Nutzer, Datei-Uploads ohne Datenverlust            |
| Erweiterbarkeit | Plugin-Installation und Backup-Script möglich                                          |

Alle Muss-Kriterien wurden erfüllt und im Testkonzept verankert.

### 3.4 Screenshots der funktionierenden Lösung

Im Repository-Verzeichnis `screenshots/` wurden erstellt:

1. **startseite_moodle.png:** Moodle-Loginscreen auf Port 8080  
2. **phpmyadmin_login.png:** Login-Maske von phpMyAdmin auf Port 8081  
3. **kursuebersicht.png:** Übersicht importierter Kurse  
4. **sql_import.png:** Import des SQL-Dumps via phpMyAdmin  

### 3.5 Datenübernahme

Der SQL-Dump der alten Instanz wurde exportiert und per phpMyAdmin in die MariaDB importiert. Stichproben zur Verifikation:

- Kursnamen, Teilnehmerzahlen und Uploads stimmen überein.  
- Test-Logins bestätigten die Vollständigkeit der Nutzerkonten.  

### 3.6 Unterschiedliche Container

Die Architektur besteht aus drei eigenständigen Containern im Docker-Netzwerk `moodle_net`:

- **db:** MariaDB 10.11  
- **moodle:** Webserver (Apache 2.4) mit PHP 8.x und Moodle 4.5.2  
- **phpmyadmin:** Verwaltungstool für MariaDB  

## 4. Einführung

### 4.1 Abnahmetest

Basierend auf dem Testkonzept wurden folgende Testfälle durchgeführt:

| Testfall | Testmethode                      | Ergebnis    | Datum      | Tester       |
| -------- | -------------------------------- | ----------- | ---------- | ------------ |
| T-01     | Browser-Aufruf `localhost:8080`  | erfolgreich | 22.05.2025 | Gubler Lukas |
| T-02     | `docker ps`                      | erfolgreich | 22.05.2025 | Gubler Lukas |
| T-03     | phpMyAdmin-Login                 | erfolgreich | 22.05.2025 | Gubler Lukas |
| T-04     | Moodle-Datenprüfung (Stichprobe) | erfolgreich | 22.05.2025 | Gubler Lukas |

Ein detailliertes Testprotokoll und Abweichungsanalysen liegen im Verzeichnis `tests/`.

### 4.2 Einführungskonzept

Der Rollout umfasst folgende Schritte und Verantwortlichkeiten:

1. **Backup:** Vollständiger Export (SQL-Dump, Moodle-Daten) – Team  
2. **Deployment:** Aufbau der Docker-Container auf Produktivserver – IT-Administrator  
3. **DNS & SSL:** Konfiguration und Let's Encrypt Einrichtung – Netzwerk-Team  
4. **Schulung:** Workshop für Administratoren (Dauer 2 Stunden) – Projektleiter  
5. **Go-Live & Monitoring:** Erste Woche tägliche Systemchecks und Fehlerreporting – Team.  

### 4.3 Präsentation

Für Stakeholder wurde eine PowerPoint erstellt und terminiert:

- **Inhalt:** Projektziele, Lösungsarchitektur, Demo, Lessons Learned.  
- **Dauer:** 10–15 Minuten (25.05.–01.06.2025)  
- **Materialien:** Gantt-Diagramm, Testprotokolle, Screenshots.  

---

*Dokument erstellt am: 22.05.2025*

