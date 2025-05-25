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
 * Strings for component 'local_profilecohort', language 'de', version '3.10'.
 *
 * @package     local_profilecohort
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addintro'] = 'In diesem Tab können Sie eine neue Regel anlegen, mit der der Wert eines Profilfelds eines Nutzers auf eine globale Gruppe, die diesem Nutzer zugewiesen wird, abgebildet wird.';
$string['addrule'] = 'Regel für Profilfeld anlegen ...';
$string['addrules'] = 'Neue Regel erstellen';
$string['andnextrule'] = 'Die nächste Regel muss auch zutreffen, damit diese globale Gruppe zugewiesen wird.';
$string['cohortsintro'] = 'In diesem Tab wählen Sie die globalen Gruppen, welche mit diesem Plugin verwaltet werden.<br>Sobald eine globale Gruppe ausgewählt ist, werden Sie die Nutzer, die der globalen Gruppe zugewiesen sind, nicht mehr manuell festlegen können. Außerdem werden alle Nutzer, die derzeit der globalen Gruppe zugewiesen sind, aus der globalen Gruppe entfernt und die globale Gruppe danach von Grund auf mit den Nutzern befüllt, auf die die mit diesem Plugin definierten Regeln zutreffen.<br>Wenn Sie sich später dazu entscheiden, eine globale Gruppe dann doch nicht mehr mit diesem Plugin zu verwalten und sie hier abwählen, werden alle Nutzer, die der globalen Gruppe zu diesem Zeitpunkt zugewiesen sind, zugewiesen bleiben und die globale Gruppe kann wieder manuell verwaltet werden.';
$string['delete'] = 'Diese Regel löschen';
$string['iffield'] = 'Falls {$a}';
$string['invisiblecohortsnote'] = 'Hinweis: Dieses Plugin behandelt unsichtbare und sichtbare globale Gruppen gleich. Daher enthält die Liste der globalen Gruppen auch globale Gruppen, welche als unsichtbar angelegt wurden.';
$string['match_contains'] = 'enthält';
$string['match_defined'] = 'definiert ist';
$string['match_empty'] = 'leer ist';
$string['match_exact'] = 'übereinstimmt mit';
$string['match_notcontains'] = 'nicht enthält';
$string['match_notdefined'] = 'nicht definiert ist';
$string['match_notempty'] = 'nicht leer ist';
$string['match_notexact'] = 'nicht übereinstimmt mit';
$string['matchtype'] = 'Prüfkriterium für den Profilfeld-Typ';
$string['matchvalue'] = 'Prüfkriterium für den Profilfeld-Wert';
$string['members'] = 'Liste der Gruppenzuweisungen';
$string['membersintro'] = 'In diesem Tab sehen Sie die Nutzer/innen, die derzeit den globalen Gruppen, welche mit diesem Plugin verwaltet werden, zugewiesen sind.';
$string['moveto'] = 'An diese Position verschieben';
$string['nocohorts'] = 'Bis jetzt sind noch keine globalen Gruppen angelegt - bitte gehen Sie zu {$a} um globale Gruppen anzulegen';
$string['nofields'] = 'Bis jetzt sind noch keine Profilfelder angelegt.<br>Sie müssen zuerst Profilfelder anlegen bevor Sie hier eine Regel erstellen können - bitte gehen Sie zu {$a} um mindestens ein Profilfeld anzulegen';
$string['nousers'] = 'Diese globale Gruppe enthält, derzeit, noch keine Nutzer/innen.';
$string['pluginname'] = 'Profilfeld-basierende Zuweisung globaler Gruppen';
$string['privacy:metadata'] = 'Das Plugin \'Profilfeld-basierende Zuweisung globaler Gruppen\' bietet Moodle-Administrator/innen erweiterte Funktionalitäten an, speichert aber keine personenbezogenen Daten.';
$string['selectcohorts'] = 'Verwaltete Gruppen wählen';
$string['selectvalue'] = 'wird der Nutzer zugewiesen zur globalen Gruppe';
$string['updatecohorts'] = 'Aktualisierung der profilfeld-basierenden Zuweisung globaler Gruppen';
$string['viewintro'] = 'In diesem Tab definieren Sie die Regeln, mit der die Werte der Profilfelder eines Nutzers auf die globalen Gruppen, welchen er zugewiesen wird, abgebildet werden.<br>Die Regeln werden in der dargestellten Reihenfolge abgearbeitet, ein Nutzer wird jedoch allen globalen Gruppen mit zutreffenden Regeln zugewiesen.<br>Bitte beachten Sie: Sobald Sie eine Regel ändern und speichern wird ein Hintergrundprozess angestoßen, welcher alle betroffenen Nutzer und ihre Zuweisung zu den globalen Gruppen aktualisiert - nach einer kurzen Zeit (ein paar Minuten, abhängig von der Cronjob-Konfiguration des Servers und der Konfiguration der geplanten Vorgänge in Moodle) sind alle Zuweisungen der globalen Gruppen aktualisiert. Nichtsdestotrotz wird jeder Nutzer welcher sich in der Zeit, in der der Hintergrundprozess arbeitet, einloggt sofort zu den zutreffenden globalen Gruppen zugewiesen.';
$string['viewrules'] = 'Regeln prüfen / bearbeiten';
