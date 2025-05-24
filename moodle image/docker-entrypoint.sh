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

  php /var/www/html/admin/cli/install.php \
      --chmod=2770 \
      --lang="${MOODLE_LANG}" \
      --wwwroot="${MOODLE_WWWROOT}" \
      --dataroot=/var/moodledata \
      --dbtype="${MOODLE_DBTYPE}" \
      --dbhost="${MOODLE_DBHOST}" \
      --dbname="${MOODLE_DBNAME}" \
      --dbuser="${MOODLE_DBUSER}" \
      --dbpass="${MOODLE_DBPASS}" \
      --fullname="Moodle Site" \
      --shortname="Moodle" \
      --adminuser="${MOODLE_ADMIN_USER}" \
      --adminpass="${MOODLE_ADMIN_PASS}" \
      --adminemail="${MOODLE_ADMIN_EMAIL}" \
      --agree-license \
      --non-interactive
else
  echo ">> config.php vorhanden – Überspringe CLI-Installation."
fi

# ----------------------------------------------------------------------------- 
# 2) Rechte sicherstellen (wichtig bei Bind-Mounts)
# -----------------------------------------------------------------------------
chown -R www-data:www-data /var/moodledata /var/www/html

# ----------------------------------------------------------------------------- 
# 3) Container-CMD ausführen (standardmäßig apache2-foreground)
# -----------------------------------------------------------------------------
exec "$@"
