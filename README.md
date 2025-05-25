# Dokumentation der Moodle-Migration

## Inhaltsverzeichnis

1. [Einleitung](#einleitung)
2. [Projektauftrag](#projektauftrag)
3. [Realisierung](#realisierung)

   * [Fachkenntnisse und Anwendungskompetenz](#fachkenntnisse-und-anwendungskompetenz)
   * [System- und Konfigurationsanforderungen](#system--und-konfigurationsanforderungen)
   * [Erfüllung der Anforderungen](#erfüllung-der-anforderungen)
   * [Screenshots der funktionierenden Lösung](#screenshots-der-funktionierenden-lösung)
   * [Datenübernahme](#datenübernahme)
   * [Unterschiedliche Container](#unterschiedliche-container)
   * [Schritt-für-Schritt-Anleitung: Nutzung des Moodle-Images](#schritt-für-schritt-anleitung-nutzung-des-moodle-images)
   * [Aufbau von Dockerfile und docker-entrypoint.sh](#aufbau-von-dockerfile-und-docker-entrypointsh)

---

## Einleitung

Unser Auftrag besteht darin, die bestehende Moodle-Instanz (aktuell in Version 3.10.11) aus einer klassischen VM-Umgebung unter Ubuntu 22.04 LTS in eine moderne, containerisierte Infrastruktur mit Docker zu migrieren. Während der Implementierung wird ein strukturiertes Arbeitsjournal geführt, um Arbeitsschritte, Entscheidungen und Problemlösungen lückenlos festzuhalten. Ziel ist es, durch den Einsatz von Containern und Docker Compose eine skalierbare, wartbare und hoch verfügbare Plattform zu schaffen. Darüber hinaus soll ein standardisierter Update-Prozess etabliert werden, der in Zukunft schnelle Versionswechsel ermöglicht, ohne den laufenden Betrieb zu beeinträchtigen.

## Projektauftrag

### Ausgangslage

Die vorhandene Moodle-Installation betreibt alle Dienste in einer einzelnen VM, auf der Apache, PHP und MySQL direkt installiert sind. Diese Monolith-Architektur führt zu Herausforderungen in Bezug auf Ressourcennutzung, Skalierbarkeit, Wartung und Ausfallsicherheit. Ein Systemausfall erfordert längere Downtimes und manuelle Eingriffe.

### Projektziele

* **Migration und Aktualisierung**: Überführung der bestehenden Moodle 3.10.11 in eine Docker-Umgebung und Upgrade auf Moodle 4.5.2.
* **Modularisierung**: Trennung von Webserver, Applikation und Datenbank in separate Container.
* **Skalierbarkeit**: Ermöglichen von horizontalem Skalieren einzelner Dienste.
* **Wartbarkeit**: Klare Trennung der Verantwortlichkeiten und Versionierung aller Komponenten.
* **Sicherheitshärtung**: Nutzung aktueller Basisimages und automatisierte Security-Updates.
* **Minimale Downtime**: Planung und Durchführung der Migration mit Unterbrechungen von maximal einer Stunde.

### Team und Organisation

|              Rolle | Name             | Aufgabenbereich                                |
| -----------------: | ---------------- | ---------------------------------------------- |
|     Projektleitung | Gubler Lukas     | Gesamtkoordination, Projektleitung, Dockerfile |
|             DevOps | Garcia San Diego | Moodle-Aktualisierung, Infrastrukturbetrieb    |
|      Dokumentation | Gantenbein Kenzo | Erstellung und Pflege der Projektdokumentation |
| Qualitätssicherung | (noch offen)     | Testkonzepte, Abnahmetests                     |

### Planung und Meilensteine

|           Phase | Zeitraum          | Meilenstein                                  |
| --------------: | ----------------- | -------------------------------------------- |
| Initialisierung | 27.03.–06.04.2025 | Lastenheft, Anforderungsanalyse, Testkonzept |
|         Konzept | 07.04.–14.05.2025 | Architekturskizze, Docker-Konzept            |
|    Realisierung | 15.05.–22.05.2025 | Implementierung, Unit-Tests, Dokumentation   |
|      Einführung | 25.05.–01.06.2025 | Abnahmetest, Schulung, Go-Live, Präsentation |

## Realisierung

### Fachkenntnisse und Anwendungskompetenz

In dieser Phase wurden folgende Schwerpunkte fachlich bearbeitet:

1. **Docker-Grundlagen**: Installation und Konfiguration von Docker Engine (≥ 27.0.5) und Docker Compose (≥ 2.24.5) auf Ubuntu und WSL 2.
2. **Netzwerktechnik**: Aufbau eines dedizierten Docker-Netzwerks (`moodle_net`) für sichere Service-Kommunikation.
3. **Datenpersistenz**: Konzeption und Einrichtung von Docker Volumes (`moodle_data`, `db_data`) zur dauerhaften Speicherung von Moodle- und Datenbankdaten.
4. **Security**: Nutzung minimaler, aktueller Basisimages, regelmässige Updates über Build-Pipelines und sichere Verwaltung von Zugangsdaten durch Umgebungsvariablen und `.env`-Dateien.
5. **Testautomatisierung**: Einsatz von automatisierten Smoke-Tests (z. B. `curl`-Aufrufe) und manuellen Abnahmetests gemäss Testkonzept.

### System- und Konfigurationsanforderungen

|          Komponente | Version / Spezifikation                                                     |
| ------------------: | --------------------------------------------------------------------------- |
|             Host-OS | Ubuntu 24.04 LTS / Windows 10 mit WSL 2                                     |
|       Docker Engine | ≥ 27.0.5                                                                    |
|      Docker Compose | ≥ 2.24.5                                                                    |
|    Moodle-Container | Moodle 4.5.2 basierend auf `php:8.3-apache`, Apache 2.4, PHP 8.3-Extensions |
| Datenbank-Container | MariaDB 10.11, UTF8MB4-Collation, max\_allowed\_packet 128M                 |
|      Volume Storage | Docker Volumes für `/var/www/html` und `/var/lib/mysql`                     |
|            Netzwerk | Bridge-Netzwerk `moodle_net`, interne DNS-Namen (`db`, `moodle`)            |

### Erfüllung der Anforderungen

| Anforderung         | Beschreibung                                                   | Erfüllung                                                      |
| ------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- |
| R1 (Migration)      | Bestehende VM-Instanz in Container-Architektur überführen      | Vollständige Daten- und Konfigurations-Übernahme               |
| R2 (Aktualisierung) | Update auf Moodle 4.5.2 und PHP 8.x                            | Erfolgreiches Upgrade und Tests aller Kern-Funktionalitäten    |
| R3 (Skalierbarkeit) | Modularer Aufbau von Web-, Applikations- und Datenbankdiensten | Trennung in drei Container, Docker Compose-Struktur            |
| R4 (Persistenz)     | Dauerhafte Speicherung von Daten                               | Nutzung von Docker Volumes                                     |
| R5 (Sicherheit)     | Sichere Verwaltung von Zugangsdaten und Basisimages            | `.env`-Datei, Umgebungsvariablen, minimalistische Images       |
| R6 (Dokumentation)  | Vollständige Dokumentation aller Schritte                      | Dieses Dokument, Schritt-für-Schritt-Anleitung, Testprotokolle |

### Screenshots der funktionierenden Lösung

![image](https://github.com/user-attachments/assets/0335e8e9-7431-40e1-b5f0-1475b8226209)







# Moodle-Instanz in Docker Compose exportieren

Diese Anleitung erklärt, wie eine bestehende Moodle-Installation (Code, Datenbank und `moodledata`) in ein portables Docker-Compose-Setup überführt wird.&#x20;

---

## 1. Projektverzeichnis und Struktur anlegen

1. Wenn man in einem Terminal ins gewünschte Home-Verzeichnis wechselt und das Projektverzeichnis erstellt, dann steht folgendes Verzeichnis zur Verfügung:

   ```bash
   mkdir -p ~/moodle-docker-export
   cd ~/moodle-docker-export
   ```
2. Wenn man anschließend die Unterverzeichnisse anlegt, dann entsteht diese Struktur:

   ```
   moodle-docker-export/
   ├── db/            # Persistent Volume für MariaDB
   ├── moodle/        # Moodle-Code
   ├── moodledata1/   # Verzeichnis für moodledata
   └── moodle.sql     # SQL-Dump der Datenbank (wird später erstellt)
   ```

> **Abbildung 1:** Ausgabe von `ls` im Verzeichnis `moodle-docker-export`
![image](https://github.com/user-attachments/assets/0987eb71-7ef6-428a-89fd-756c13011861)

---

## 2. Moodle-Code und moodledata übernehmen

1. Wenn man den Moodle-Quellcode aus der alten Installation übernimmt, dann kopiert man mit:

   ```bash
   cp -r /var/www/html/* ./moodle/
   ```
2. Wenn man das `moodledata`-Verzeichnis übernimmt, dann verwendet man:

   ```bash
   cp -r /var/www/moodledata/* ./moodledata1/
   ```

Hinweis: Ab diesem Schritt wird ausschließlich `moodledata1` verwendet.

---

## 3. Datenbank-Dump erstellen

1. Wenn man einen SQL-Dump der bestehenden Moodle-Datenbank anfertigt, dann lautet der Befehl:

   ```bash
   mysqldump -u root -p moodle > moodle.sql
   ```
2. Nach Eingabe des MySQL-Root-Passworts liegt die Datei `moodle.sql` im Projektverzeichnis.

---

## 4. Docker-Compose-Datei anlegen

1. Wenn man im Projektverzeichnis eine Datei `docker-compose.yml` erstellt und den folgenden Inhalt einfügt, dann definiert man beide Dienste (Datenbank und Webserver) sowie das gemeinsame Netzwerk:

   ```yaml
   version: '3.9'

   services:
     mariadb_exported:
       image: mariadb:10.5
       container_name: moodle_db_exported
       restart: unless-stopped
       environment:
         MYSQL_ROOT_PASSWORD: root
         MYSQL_DATABASE: moodle
         MYSQL_USER: moodle
         MYSQL_PASSWORD: moodle
       volumes:
         - ./db:/var/lib/mysql
       networks:
         - moodle_net

     moodle_exported:
       image: moodlehq/moodle-php-apache:7.4
       container_name: moodle_exported
       restart: unless-stopped
       depends_on:
         - mariadb_exported
       ports:
         - "8085:80"
       volumes:
         - ./moodle:/var/www/html
         - ./moodledata1:/var/www/moodledata1
       environment:
         MOODLE_DOCKER_DBTYPE: mariadb
         MOODLE_DOCKER_DBHOST: mariadb_exported
       networks:
         - moodle_net

   networks:
     moodle_net:
       driver: bridge
   ```

> **Abbildung 2:** Vollständiger Inhalt der Datei `docker-compose.yml`
> ![image](https://github.com/user-attachments/assets/9fc3153f-b89a-4e40-9a48-5e343f0a9832)

---

## 5. Moodle-Konfiguration anpassen

1. Wenn man in das Verzeichnis `moodle/` wechselt und die Datei `config.php` öffnet, dann müssen folgende Einstellungen angepasst werden:

   ```php
   $CFG->dbtype    = 'mariadb';
   $CFG->dblibrary = 'native';
   $CFG->dbhost    = 'mariadb_exported';
   $CFG->dbname    = 'moodle';
   $CFG->dbuser    = 'moodle';
   $CFG->dbpass    = 'moodle';

   $CFG->dataroot  = '/var/www/moodledata1';
   ```
2. Wenn man die Datei speichert, dann ist die Verbindung zwischen Moodle und der Docker-Datenbank sichergestellt.

---

## 6. Docker-Container starten

1. Wenn man im Projektverzeichnis folgenden Befehl ausführt, dann werden die beiden Container im Hintergrund gestartet:

   ```bash
   docker compose up -d
   ```
2. Wenn man mit `docker ps` prüft, dann sollten die Container `moodle_db_exported` und `moodle_exported` laufen.

---

## 7. Datenbank-Dump importieren

1. Wenn man den Dump in den Datenbank-Container kopiert, dann nutzt man:

   ```bash
   docker cp moodle.sql moodle_db_exported:/moodle.sql
   ```
2. Wenn man in den MariaDB-Container einloggt, dann lautet der Befehl:

   ```bash
   docker exec -it moodle_db_exported bash
   ```
3. Wenn man den Dump importiert, dann führt man aus:

   ```bash
   mysql -u root -p moodle < /moodle.sql
   ```

   Nach Eingabe des Passworts (`root`) ist die Datenbank migriert.
4. Wenn man die Container-Shell verlässt, dann mit `exit`.

---

## 8. Dateiberechtigungen anpassen (optional)

1. Wenn Moodle beim Zugriff auf `moodledata1` Rechteprobleme meldet, dann kann man im Web-Container die Berechtigungen anpassen:

   ```bash
   docker exec -it moodle_exported bash
   chown -R www-data:www-data /var/www/moodledata1
   exit
   ```

---

## 9. Funktionstest im Browser

1. Wenn man im Browser die URL `http://localhost:8085` aufruft, dann erscheint die typische Moodle-Startseite mit allen migrierten Kursen.

> **Abbildung 3:** Beispielansicht des migrierten Moodle-Frontends
> ![image](https://github.com/user-attachments/assets/60bdfcff-a38f-4371-b34c-b8d7db96a586)







# Moodle-Instanz in Docker Compose migrieren

Diese Anleitung erklärt, wie eine bestehende Moodle‑Instanz (Code, Datenbank und `moodledata`) in ein Docker‑Compose‑Setup mit PHP 8.1 und MariaDB 10.5 überführt wird.

---

## 1. SQL‑Dump der Datenbank erstellen

Wenn die bestehende Moodle‑Datenbank gesichert werden soll, dann folgenden Befehl ausführen:

```bash
mysqldump -u root -p moodle > moodle.sql
```

* Nach Eingabe des MySQL‑Root‑Passworts wird die Datei `moodle.sql` im aktuellen Verzeichnis erzeugt.

---

## 2. Projektverzeichnis und Ordnerstruktur anlegen

1. Terminal öffnen und ins Home‑Verzeichnis wechseln, anschließend das Projektverzeichnis erstellen:

   ```bash
   mkdir -p ~/moodle-docker
   cd ~/moodle-docker
   ```
2. Die folgenden Ordner und Dateien anlegen:

   ```plaintext
   moodle-docker/
   ├── docker-compose.yml   # Definition für Web- und Datenbank-Services
   ├── Dockerfile           # Build-Anweisungen für PHP 8.1 + Apache
   ├── moodle.sql           # SQL-Dump der Moodle-Datenbank
   ├── moodle/              # Moodle‑Quellcode (Git-Repository)
   └── moodledata/          # Bestehendes Datenverzeichnis
   ```

> **Abbildung 1:** Ausgabe von `ls` im Verzeichnis `moodle-docker`
> ![image](https://github.com/user-attachments/assets/e29bb8e6-8c1f-4c89-84ee-c228f1b005df)

---

## 3. Moodle‑Code aus Git auschecken

Um den Moodle‑Quellcode in der stabilen Version 4.5 herunterzuladen, dann folgende Befehle ausführen:

```bash
rm -rf moodle
git clone --branch MOODLE_45_STABLE https://github.com/moodle/moodle.git moodle
```

---

## 4. bestehendes `moodledata` kopieren

1. Falls ein vorhandenes `moodledata` unter `/var/www/moodledata` existiert, dann in das Projektverzeichnis kopieren:

   ```bash
   rm -rf moodledata && mkdir moodledata
   rsync -a /var/www/moodledata/ ./moodledata/
   ```
2. Zugriffsrechte setzen, damit der Webserver darauf zugreifen kann:

   ```bash
   sudo chown -R www-data:www-data moodledata
   sudo chmod -R 770 moodledata
   ```

---

## 5. `config.php` anpassen

In der Datei `moodle/config.php` die Datenbank- und Pfadparameter auf die Docker-Umgebung einstellen:

```php
$CFG->dbtype   = 'mariadb';
$CFG->dbhost   = 'db';
$CFG->dbname   = 'moodle';
$CFG->dbuser   = 'moodle';
$CFG->dbpass   = 'moodle';
$CFG->wwwroot  = 'http://localhost:8084';
$CFG->dataroot = '/var/www/moodledata';
```

---

## 6. `Dockerfile` erstellen

Datei `Dockerfile` im Projekt-Root anlegen mit folgendem Inhalt:

```dockerfile
# Verwende PHP 8.1 mit Apache
FROM php:8.1-apache

# Zeitsynchronisation für GPG
RUN apt-get update && apt-get install -y --no-install-recommends \
    tzdata && \
    ln -fs /usr/share/zoneinfo/Europe/Zurich /etc/localtime && \
    dpkg-reconfigure -f noninteractive tzdata

# PHP-Erweiterungen und Tools installieren
RUN apt-get update && apt-get install -y --no-install-recommends \
    gnupg \
    ca-certificates \
    libpng-dev \
    libjpeg-dev \
    libzip-dev \
    unzip \
    default-mysql-client && \
    docker-php-ext-configure gd --with-jpeg && \
    docker-php-ext-install \
        mysqli \
        pdo_mysql \
        gd \
        zip && \
    a2enmod rewrite headers expires && \
    rm -rf /var/lib/apt/lists/*
```

> **Abbildung 4:** Inhalt der Datei `Dockerfile`
> ![image](https://github.com/user-attachments/assets/3a7cb61d-bae8-4f69-b7db-a8574ec343a0)

---

## 7. `docker-compose.yml` anlegen

Datei `docker-compose.yml` im Projekt-Root erstellen und folgenden Inhalt einfügen:

```yaml
version: '3.8'

services:
  db:
    image: mariadb:10.5
    restart: always
    environment:
      MYSQL_ROOT_PASSWORD: root
      MYSQL_DATABASE: moodle
      MYSQL_USER: moodle
      MYSQL_PASSWORD: moodle
    volumes:
      - db_data:/var/lib/mysql

  web:
    build: .
    depends_on:
      - db
    ports:
      - "8084:80"
    volumes:
      - ./moodle:/var/www/html:ro
      - ./moodledata:/var/www/moodledata
    restart: always

volumes:
  db_data:
```

> **Abbildung 5:** Inhalt der Datei `docker-compose.yml`
> ![image](https://github.com/user-attachments/assets/7ef56ab7-868a-44fc-85f9-0234ac85802a)


---

## 8. Container starten und Daten importieren

1. Vorhandene Container und zugehörige Volumes löschen:

   ```bash
   docker compose down --volumes
   ```
2. Nur die Datenbank starten und kurz warten, damit sie initialisiert wird:

   ```bash
   docker compose up -d db
   sleep 5
   ```
3. SQL‑Dump in den Datenbank‑Container importieren:

   ```bash
   docker exec -i $(docker ps -qf "name=moodle-docker_db_1") \
     mysql -u root -proot moodle < moodle.sql
   ```
4. Den Web‑Container starten:

   ```bash
   docker compose up -d web
   ```

> **Abbildung 3:** Ausgabe von `docker compose up -d`
> ![image](https://github.com/user-attachments/assets/e89f947c-6d77-48ba-9e68-6038c8c5ffb2)

---

## 9. Funktionstest im Browser

> **Abbildung 2:** Browser-Ansicht von `http://localhost:8084`
> ![image](https://github.com/user-attachments/assets/fae75f81-ded1-4298-9f7e-480fa037a090)

Im Browser folgende Adresse aufrufen:

```
http://localhost:8084
```

Die Moodle‑Startseite mit allen importierten Kursen und Inhalten sollte erscheinen.

---

Die bestehende Moodle‑Instanz läuft nun unter PHP 8.1 und MariaDB 10.5 vollständig containerisiert und ist einsatzbereit.

*Dokument erstellt am: 22.05.2025*
