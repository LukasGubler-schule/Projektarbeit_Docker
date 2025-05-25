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
 * Strings for component 'local_purgequestioncategory', language 'de', version '3.10'.
 *
 * @package     local_purgequestioncategory
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmmessage'] = 'Sie sind dabei eine Fragenkategorie zu bereinigen. Wenn Sie fortfahren, wird diese Kategorie und alle zugehörigen Unterkategorien dauerhaft gelöscht. Diese Aktion kann nicht rückgängig gemacht werden!';
$string['confirmpurge'] = 'Fragenkategoriebereinigung bestätigen';
$string['iconfirm'] = 'Ich bestätige, dass mir bewusst ist, was ich hier mache';
$string['infowithmove'] = 'Die Kategorie \'{$a->name}\' beinhaltet {$a->subcategories} Unterkategorien, {$a->unusedquestions} nicht verwendte Fragen und {$a->usedquestions} verwendete Fragen, die nicht gelöscht werden können (Fragen, die in existierenden Tests verwendet werden). Bitte wählen Sie eine andere Kategorie aus, in diese die nicht löschbaren Fragen verschoben werden können.';
$string['infowithoutmove'] = 'Die Kategorie \'{$a->name}\' beinhaltet {$a->subcategories} Unterkategorien und{$a->unusedquestions} nicht verwendete Fragen.';
$string['pluginname'] = 'Fragenkategorien bereinigen';
$string['purgecategories'] = 'Kategorien bereinigen';
$string['purgequestioncategory:purgecategory'] = 'Die Fragenkategorie mit allen Fragen und Unterkategorien löschen';
$string['purgethiscategory'] = 'Diese Kategorie bereinigen';
$string['validationcategory'] = 'Bitte wählen Sie eine gültige Kategorie aus';
$string['validationconfirm'] = 'Sie müssen diese Aktion bestätigen';
