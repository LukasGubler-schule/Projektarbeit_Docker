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
4. [Einführung](#einführung)

   * [Abnahmetest](#abnahmetest)
   * [Einführungskonzept](#einführungskonzept)
   * [Präsentation](#präsentation)

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

|               Rolle | Name             | Aufgabenbereich                       |
| ------------------: | ---------------- | ------------------------------------- |
|      Projektleitung | Gubler Lukas     | Gesamtkoordination, Planung, Review   |
|              DevOps | Garcia SanDiego  | Docker-Setup, CI/CD-Pipelines         |
| Backend-Entwicklung | Gantenbein Kenzo | Moodle-Container, Datenbank-Migration |
|  Qualitätssicherung | (noch offen)     | Testkonzepte, Abnahmetests            |

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

*(Platzhalter: Screenshots folgen nach erfolgreichem Test)*

### Datenübernahme

1. **SQL-Dump erstellen:**

   ```bash
   mysqldump -u root -p --single-transaction moodle_db > moodle_backup.sql
   ```
2. **Import in Container:**

   ```bash
   docker cp moodle_backup.sql phpmyadmin:/var/lib/mysql/moodle_backup.sql
   docker exec -it phpmyadmin bash -c "mysql -u root -p moodle_db < /var/lib/mysql/moodle_backup.sql"
   ```
3. **Validierung:**

   * Überprüfung der Kursliste in der Moodle-Oberfläche.
   * Überprüfung von Benutzerkonten und Berechtigungen.
   * Stichprobenartige Kontrolle hochgeladener Mediendateien.

### Unterschiedliche Container

Die Gesamtlösung besteht aus den folgenden, logisch getrennten Containern:

* **db:** MariaDB 10.11, konfiguriert über `.env`-Variablen, inkl. Persistenz im Volume `db_data`.
* **moodle:** Apache 2.4 + PHP 8.3, Moodle 4.5.2, Quellcode retrieved via Download-Script, Daten im Volume `moodle_data`.
* **phpmyadmin:** `phpmyadmin/phpmyadmin` als administratives Frontend zur Datenbankverwaltung.

### Schritt-für-Schritt-Anleitung: Nutzung des Moodle-Images

Diese Anleitung wurde mit dem Original-Repository-Pfad getestet und funktioniert auf gängigen Linux- oder macOS-Systemen sowie unter WSL2 auf Windows.

1. **Repository klonen**

   ```bash
   git clone https://github.com/LukasGubler-schule/Projektarbeit_Docker.git
   ```

2. **Docker-Netzwerk anlegen** (für die interne Kommunikation der Container)

   ```bash
   docker network create moodle_net
   ```

3. **In das Image-Verzeichnis wechseln**
   Achte auf das Leerzeichen im Ordnernamen:

   ```bash
   cd Projektarbeit_Docker/"moodle image"
   ```

4. **Docker-Image für Moodle bauen**

   ```bash
   docker build -t moodle-custom .
   ```

5. **Persistente Volumes erstellen** (für Moodle-Daten und die Datenbank)

   ```bash
   docker volume create moodle_data
   docker volume create db_data
   ```

6. **MariaDB-Container starten**
   (Ersetze `secureRootPass` und `securePass` nach Bedarf)

   ```bash
   docker run -d \
     --name db \
     --network moodle_net \
     -e MYSQL_ROOT_PASSWORD=secureRootPass \
     -e MYSQL_DATABASE=moodle \
     -e MYSQL_USER=moodle \
     -e MYSQL_PASSWORD=securePass \
     -v db_data:/var/lib/mysql \
     mysql:10.11
   ```

7. **Moodle-Container starten**

   ```bash
   docker run -d \
     --name moodle \
     --network moodle_net \
     -p 8080:80 \
     -v moodle_data:/var/www/html \
     moodle-custom
   ```

8. **phpMyAdmin-Container starten** (optional für DB-Administration)

   ```bash
   docker run -d \
     --name phpmyadmin \
     --network moodle_net \
     -p 8081:80 \
     -e PMA_HOST=db \
     phpmyadmin/phpmyadmin
   ```

9. **Zugriff auf Dienste**

   * Moodle: [http://localhost:8080](http://localhost:8080)
   * phpMyAdmin: [http://localhost:8081](http://localhost:8081)

10. **Moodle-Erstinstallation abschliessen**

    * Im Browser den Installationsassistenten durchlaufen: Sprache wählen, DB-Verbindung prüfen, Admin-Nutzer anlegen.

11. **Image aktualisieren und Container neu starten**
    Falls sich das `Dockerfile` oder `docker-entrypoint.sh` ändert:

    ```bash
    cd Projektarbeit_Docker/"moodle image"
    docker build -t moodle-custom .
    docker stop moodle && docker rm moodle
    docker run -d --name moodle --network moodle_net -p 8080:80 -v moodle_data:/var/www/html moodle-custom
    ```

### Aufbau von Dockerfile und docker-entrypoint.sh

#### Dockerfile

```dockerfile
############################################################
#  Moodle 4.5 LTS – Apache-Image (Debian 12 / PHP 8.3)
############################################################
# Basis-Image mit Apache und PHP 8.3
FROM php:8.3-apache

# Versionsparameter für Moodle
ARG MOODLE_SERIES=405        # 4.5 → 405
ENV MOODLE_VERSION=4.5 \
    MOODLE_SERIES=${MOODLE_SERIES}

# ---------- System- und PHP-Abhängigkeiten -----------
# Installation aller nötigen Bibliotheken und PHP-Erweiterungen
RUN set -eux; \
    apt-get update; \
    apt-get install -y --no-install-recommends \
        git cron curl unzip \
        libpng-dev libjpeg-dev libwebp-dev libfreetype6-dev \
        libzip-dev libicu-dev libxml2-dev libpq-dev \
        libsodium-dev; \
    docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp; \
    docker-php-ext-install -j"$(nproc)" \
        gd intl soap zip mysqli pdo pdo_mysql opcache sodium bcmath; \
    pecl install redis; \
    docker-php-ext-enable redis; \
    a2enmod rewrite headers env; \
    rm -rf /var/lib/apt/lists/*

# ---------- Moodle-Code --------------------------------
# Herunterladen und Entpacken der Moodle-Instanz
WORKDIR /var/www/html
RUN curl -fsSL \
        "https://download.moodle.org/download.php/direct/stable${MOODLE_SERIES}/moodle-latest-${MOODLE_SERIES}.tgz" \
        -o moodle.tgz && \
    tar -xzf moodle.tgz --strip-components=1 && \
    rm moodle.tgz

# ---------- Daten & Rechte -----------------------------
# Anlegen des Moodle-Datenverzeichnisses und Setzen von Dateirechten
RUN mkdir -p /var/moodledata && \
    chown -R www-data:www-data /var/moodledata /var/www/html

# Persistentes Volume für Moodle-Daten
VOLUME ["/var/moodledata"]
# Exponieren des HTTP-Ports
EXPOSE 80

# ---------- Entrypoint ---------------------------------
# Kopieren und Ausführbar machen des Entry-Point-Skripts
COPY docker-entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

# Definieren des Entrypoints und Standard-Kommandos
ENTRYPOINT ["/entrypoint.sh"]
CMD ["apache2-foreground"]
```

#### docker-entrypoint.sh

```bash
#!/usr/bin/env bash
set -e

# -----------------------------------------------------------------------------
#  Moodle 4.5 LTS – Entrypoint
#  – führt beim ersten Start die CLI-Installation durch
#  – startet danach den Apache im Vordergrund
# -----------------------------------------------------------------------------

# Standardwerte (können bei `docker run -e …` überschrieben werden)
: "${MOODLE_LANG:=en}"
: "${MOODLE_WWWROOT:=http://localhost}"
: "${MOODLE_DBTYPE:=mysqli}"
: "${MOODLE_DBHOST:=db}"
: "${MOODLE_DBNAME:=moodle}"
: "${MOODLE_DBUSER:=moodle}"
: "${MOODLE_DBPASS:=moodle}"
: "${MOODLE_ADMIN_USER:=admin}"
: "${MOODLE_ADMIN_PASS:=Admin!2025}"
: "${MOODLE_ADMIN_EMAIL:=admin@example.com}"

# ----------------------------------------------------------------------------- 
# 1) Erstinstallation, falls keine config.php vorhanden
# -----------------------------------------------------------------------------
if [ ! -f /var/www/html/config.php ]; then
  echo ">> config.php fehlt – Moodle CLI-Installer wird gestartet …"

  php /var/www/html/admin/cli/install.php \n      --chmod=2770 \n      --lang="${MOODLE_LANG}" \n      --wwwroot="${MOODLE_WWWROOT}" \n      --dataroot=/var/moodledata \n      --dbtype="${MOODLE_DBTYPE}" \n      --dbhost="${MOODLE_DBHOST}" \n      --dbname="${MOODLE_DBNAME}" \n      --dbuser="${MOODLE_DBUSER}" \n      --dbpass="${MOODLE_DBPASS}" \n      --fullname="Moodle Site" \n      --shortname="Moodle" \n      --adminuser="${MOODLE_ADMIN_USER}" \n      --adminpass="${MOODLE_ADMIN_PASS}" \n      --adminemail="${MOODLE_ADMIN_EMAIL}" \n      --agree-license \n      --non-interactive
else
  echo ">> config.php vorhanden – Überspringe CLI-Installation."
fi

# ----------------------------------------------------------------------------- 
# 2) Rechte sicherstellen (wichtig bei Bind-Mounts)
# -----------------------------------------------------------------------------
chown -R www-data:www-data /var/moodledata /var/www/html

# ----------------------------------------------------------------------------- 
# 3) Container-CMD ausführen (standardmässig apache2-foreground)
# -----------------------------------------------------------------------------
exec "$@"
```

## Einführung

### Abnahmetest

| Testfall | Beschreibung                              |  Mittel | Ergebnis    | Datum      | Tester       |
| -------: | ----------------------------------------- | ------: | ----------- | ---------- | ------------ |
|     T-01 | Aufruf der Moodle-Weboberfläche (`/`)     | Browser | Erfolgreich | 22.05.2025 | Gubler Lukas |
|     T-02 | Prüfung laufender Container (`docker ps`) |     CLI | Erfolgreich | 22.05.2025 | Gubler Lukas |
|     T-03 | Datenbankzugriff via phpMyAdmin           | Browser | Erfolgreich | 22.05.2025 | Gubler Lukas |
|     T-04 | Validierung der Datenintegrität           |     GUI | Erfolgreich | 22.05.2025 | Gubler Lukas |

### Einführungskonzept

1. **Backup der Altumgebung**

   * Export der VM-Daten (SQL-Dump, Moodle-Datenordner).
2. **Deployment**

   * Bereitstellung der Docker-Container auf dem Zielsystem.
3. **DNS und SSL**

   * Einrichten einer Subdomain `moodle.example.com` und automatisches Let's Encrypt-Zertifikat über `certbot`.
4. **Schulung**

   * 2-stündiger Workshop für Administratoren: Bedienung der Container, Wartung, Troubleshooting.
5. **Monitoring und Go-Live**

   * Erstes Monitoring mittels `docker stats` täglich für eine Woche.

### Präsentation

* **PowerPoint**: Übersicht über Ziele, Architektur, Demo, Lessons Learned.
* **Live-Demo**: Vorstellung der migratierten Plattform anhand eines Musterkurses.
* **Zeitplan**: 10–15 Minuten (Präsentationstermin: 01.06.2025).

---

*Dokument erstellt am: 22.05.2025*
