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
 * Strings for component 'badges', language 'de_ch', version '3.10'.
 *
 * @package     badges
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['backpackavailability_help'] = 'Für die Verifizierung von Auszeichnungen müssen externe Backpack-Dienste auf Ihre Website zugreifen können. Im Moment scheint diese Verbindung nicht erlaubt zu sein und bereits verliehene Auszeichnungen Ihrer Website können nicht von extern verifiziert werden.

**Warum sehe ich diese Mitteilung?**

Es kann sein, dass Ihre Firewall verhindert, dass Nutzer/innen von ausserhalb zugreifen. Eventuell ist Ihre Website ist kennwortgeschützt oder ist nicht über das Internet erreichbar (weil es sich z.B. um eine lokale Entwicklerinstallation handelt).

**Ist das ein Problem?**

Auf einer produktiven Website sollten Sie das Problem lösen. Andernfalls können Nutzer/innen nicht erkennen, dass die Auszeichnung von Ihnen verliehen wurde.

**Was muss ich tun, wenn meine Website nicht für jeden öffentlich erreichbar sein soll?**

Die einzige URL, die für die Verifizierung benötigt wird, ist [website]/badges/assertion.php. Wenn Sie Ihre Firewall so konfigurieren, dass der Zugriff auf dieses Skript erlaubt ist, dann funktioniert die Verifizierung von Auszeichnungen.';
$string['badgeimage_help'] = 'Dieses Bild wird verwendet, wenn die Auszeichnung verliehen wird.

Fügen Sie ein Bild im Format jpg oder png hinzu.

Das Bild wird in quadratische Form und geeignete Grösse skaliert.';
$string['badgesalt_desc'] = 'Mit Hilfe eines Hash können Backpack-Diensten die Empfänger/innen einer Auszeichnung bestätigen, ohne deren E-Mail-Adresse zu kennen. Verwenden Sie für den Hash ausschliesslich Ziffern und Buchstaben.';
$string['criteria_descr_short4'] = 'Kurs abschliessen';
$string['criteria_descr_single_short4'] = 'Kurs abschliessen';
$string['defaultissuercontact'] = 'Kontaktdaten des standardmässigen Verleihers';
$string['defaultissuercontact_desc'] = 'Tragen Sie hier eine E-Mail-Adresse ein, die standardmässig mit dem Verleiher von Auszeichnungen auf Ihrer Moodle-Site verknüpft ist.';
$string['defaultissuername'] = 'Name des standardmässigen Verleihers';
$string['defaultissuername_desc'] = 'Tragen Sie hier einen Namen ein, der standardmässig als Verleiher von Auszeichnungen auf Ihrer Moodle-Site verwendet wird (z.B. den Namen der verleihenden Institution).';
$string['localconnectto'] = 'Um diese Auszeichnungen ausserhalb dieser Moodle-Site zu teilen, müssen Sie eine <a href="{$a}">Verbindung zu einem Backpack</a> herstellen.';
