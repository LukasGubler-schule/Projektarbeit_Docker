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
 * Strings for component 'qtype_pmatchjme', language 'de', version '3.10'.
 *
 * @package     qtype_pmatchjme
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowanothertry'] = 'Einen weiteren Versuch erlauben';
$string['answeringoptions'] = 'Einstellungen für den Java Molecular Editor';
$string['atomcount'] = 'Feedback über Anzahl der Atome';
$string['autoez'] = 'Automatische Erstellung von SMILES mit E,Z Stereochemie ("autoez")';
$string['enablejavascript'] = '<p>Laden des Java Molecular Editor...</p><p>Wenn diese Nachricht nicht durch den Java Molecular Editor ersetzt wird, dann haben Sie kein Javascript in Ihrem Browser aktiviert.</p>';
$string['firstcorrectanswermustbestraightmatch'] = 'Die erste richtige Antwort muss direkt zu einer SMILES Zeichenkette ohne Wild Cards, beispielsweise match(SMILESEXPRESSION), abgleichbar sein.';
$string['firstcorrectanswermustnotrequireatomcountfeedback'] = 'Die erste richtige Antwort darf kein Feedback über die Anzahl der Atome beinhalten';
$string['nostereo'] = 'Stereochemie nicht beachten beim Erzeugen von SMILES ("nostereo")';
$string['pluginname'] = 'Musterabgleich mit Java Molecular Editor';
$string['pluginname_help'] = 'Als Antwort auf eine Frage (welche auch ein Bild sein kann) benutzt der Antwortende den Java Molecular Editor, um eine molekulare Struktur zu beschreiben. Es darf mehrere mögliche Antworten geben, welche unterschiedlich gewertet werden.';
$string['pluginnameadding'] = '"Musterabgleich mit Java Molecular Editor" Frage hinzufügen';
$string['pluginnameediting'] = '"Musterabgleich mit Java Molecular Editor"-Frage bearbeiten';
$string['pluginnamesummary'] = 'Ermöglicht es, Moleküle mit dem Java Molecular Editor zu zeichnen, welche nach dem Abgleich mit mehreren Muster-Antworten (beschrieben durch die OU Musterabgleichs-Syntax) unterschiedlich bewertet werden können.';
$string['privacy:metadata'] = 'Der Fragetyp \'Musterabgleich mit Java Molecular Editor\' speichert keine personenbezogenen Daten.';
$string['smiles_aromatic_c'] = 'Aromatische Kohlenstoffatome';
$string['smiles_br'] = 'Bromatome';
$string['smiles_c'] = 'Aliphatische Kohlenstoffatome';
$string['smiles_cl'] = 'Chloratome';
$string['smiles_doublebond'] = 'Doppelbindungen';
$string['smiles_f'] = 'Fluoratome';
$string['smiles_i'] = 'Jodatome';
$string['smiles_n'] = 'Stickstoffatome';
$string['smiles_o'] = 'Sauerstoffatome';
$string['smiles_s'] = 'Schwefelatome';
$string['smiles_triplebond'] = 'Dreifachbindungen';
$string['smilescorrectcount'] = 'Sie haben die richtige molekulare Formel, aber nicht die richtige Struktur';
$string['smilesequal'] = 'Sie haben die korrekte Anzahl von {$a}.';
$string['smilestoofew'] = 'Sie haben zuwenig {$a}.';
$string['smilestoomany'] = 'Sie haben zuviel {$a}.';
