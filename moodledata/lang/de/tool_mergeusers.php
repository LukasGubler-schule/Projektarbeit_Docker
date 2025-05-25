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
 * Strings for component 'tool_mergeusers', language 'de', version '4.5'.
 *
 * @package     tool_mergeusers
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['choose_users'] = 'Zusammenzulegende Nutzerkonten auswählen';
$string['clear_selection'] = 'Aktuelle Nutzerauswahl löschen';
$string['cligathering:description'] = 'Einführung von Paaren von Nutzer-IDs, um die erste ID in die zweite ID zu verschmelzen. Die erste Nutzer-ID (fromid) wird alle ihre Daten "verlieren" um in die zweite ID (toid) "migriert" zu werden. Nutzer "toid" wird die Daten beider Nutzer/innen erhalten.';
$string['cligathering:fromid'] = 'Quell-Nutzer ID (fromid):';
$string['cligathering:stopping'] = 'Um das Zusammenlegen zu stoppen, Ctrl+C oder -1 entweder in fromid oder toid Felder.';
$string['cligathering:toid'] = 'Ziel-Nutzer ID (toid):';
$string['dbko_no_transactions'] = '<strong>Zusammenführen fehlgeschlagen!</strong> <br/>Ihr Datenbank-Typ unterstützt keine Transaktionen. Daher muss Ihre Datenbank <strong>upgedatet</strong> werden. Ihre Datenbank ist möglicherweise inkonsistent.<br/>. Schauen Sie bitte in die Log-Datei der Zusammenführung und informieren sie die Plugin-Entwickler über den Fehler. Sie werden in Kürze eine Lösung erhalten. Nach dem Update des Lugins auf die neueste Version, welche die Lösung dieses Problems enthält, wiederholen Sie die Zusammenführung, um den Prozess erfolgreich abzuschließen.';
$string['dbko_transactions'] = '<strong>Zusammenführen fehlgeschlagen!</strong> <br/>Ihr Datenbank-Typ unterstützt Transaktionen. Daher wurde die gesamte laufende Transaktion zurückgesetzt und <strong>keine Änderung wurde an ihrer Datenbank vorgenommen</strong>.';
$string['dbok'] = 'Zusammenlegung erfolgreich';
$string['deleted'] = 'Das Nutzerkonto mit ID {$a} wurde gelöscht';
$string['error_return'] = 'Zurück zum Suchformular';
$string['errorsameuser'] = 'Versuch, gleiche Nutzerkonten zusammenzulegen';
$string['errortransactionsonly'] = 'Fehler: Transaktionen sind erforderlich, aber Ihr Datenbank-Typ {$a}
unterstützt sie nicht. Wenn nötig, können Sie das Zusammenführen von Benutzern ohne Transaktionen zulassen.
Bitte überprüfen Sie die Plugin-Einstellungen, um sie entsprechend einzurichten.';
$string['eventusermergedfailure'] = 'Zusammenlegung fehlgeschlagen';
$string['eventusermergedsuccess'] = 'Zusammenlegung erfolgreich';
$string['excluded_exceptions'] = 'Ausnahmen ausschließen';
$string['excluded_exceptions_desc'] = 'Die Erfahrungen zu diesem Thema zeigen, dass alle diese Datenbanktabellen vom Zusammenführen ausgeschlossen werden sollten. Lesen Sie die README-Datei für weitere Details. <br>
Um das Standard-Plugin-Verhalten anzuwenden, müssen Sie daher \'{$a}\' wählen, um
alle diese Tabellen aus dem Merging-Prozess auszuschließen (empfohlen). <br>
Wenn Sie möchten, können Sie Tabellen auswählen und in den Merging-Prozess aufnehmen (nicht empfohlen).';
$string['exportlogs'] = 'Logs as CSV exportieren';
$string['finishtime'] = 'Zusammenführung beendet um {$a}';
$string['form_description'] = '<p>Sie können hier nach Nutzern suchen, wenn Sie den Nutzernamen/die ID-Nummer des Benutzers nicht kennen. Andernfalls können Sie das Formular erweitern um diese Informationen direkt einzugeben. Bitte beachten Sie die Hilfe für die Felder für mehr Informationen</ p>';
$string['form_header'] = 'Zusammenzulegende Nutzerkonten suchen';
$string['header'] = 'Zwei Nutzerkonten in ein Nutzerprofil zusammenlegen.';
$string['header_help'] = '<p>Wenn ein Nutzerkonto gelöscht und eines behalten werden soll, werden hiermit die Daten des zu löschenden Nutzers dem zu behaltenden Nutzer zugeordnet. Beachten Sie, dass beide Nutzer bereits existieren müssen und kein Nutzerkonto gelöscht wird. Das Löschen des Nutzerkontos muss vom Administrator manuell durchgeführt werden.</p>
<p><strong>Dieser Prozess ist nicht umkehrbar! Führen Sie ihn nur aus, wenn sie genau wissen, was Sie tun!>/strong></p>';
$string['into'] = 'in';
$string['invalid_option'] = 'Ungültige Formularoption';
$string['invaliduser'] = 'Ungültiges Nutzerkonto';
$string['logid'] = 'Zur weiteren Referenz sind diese Ergebnisse in der Log-ID {$a} aufgezeichnet.';
$string['logko'] = 'Ein Fehler ist aufgetreten:';
$string['loglist'] = 'Alle diese Datensätze sind durchgeführte Zusammenführungen, angezeigt zur Erfolgskontrolle:';
$string['logok'] = 'Hier sind die Abfragen, die an die DB gesendet wurden:';
$string['mergedbyuseridonlog'] = 'Zusammengelegt von';
$string['mergeusers'] = 'Nutzerkonten zusammenlegen';
$string['mergeusers:mergeusers'] = 'Nutzerkonten zusammenlegen';
$string['mergeusers:view'] = 'Nutzerkonten zusammenlegen';
$string['mergeusers_confirm'] = 'Nach dem Bestätigen wird der Prozess zum Zusammenlegen starten.
<br /><strong>Dieser Vorgang kann nicht rückgängig gemacht werden.</strong>
Wollen Sie wirklich fortsetzen?';
$string['mergeusersadvanced'] = '<strong>Direkte Eingabe der Nutzerkonten</strong>';
$string['mergeusersadvanced_help'] = 'Hier können Sie die untenstehenden Felder ausfüllen, wenn Sie genau wissen, welche Benutzer Sie zusammenführen möchten.<br /><br />Klicken Sie auf die Schaltfläche "Suchen", um zu überprüfen/bestätigen, dass die eingegebenen Werte tatsächlich Benutzer sind.';
$string['merging'] = 'Zusammengelegt';
$string['newuser'] = 'Zu behaltendes Nutzerkonto';
$string['newuserid'] = 'Zu behaltende Nutzer ID';
$string['newuseridonlog'] = 'Nutzerkonto behalten';
$string['no_saveselection'] = 'Sie haben weder einen altes noch ein neues Benutzerkonto ausgewählt.';
$string['nologs'] = 'Es gibt noch keine Zusammenlegungs-Logs. Schön für Sie!';
$string['nomergedby'] = 'Nicht aufgezeichnet';
$string['olduser'] = 'Zu löschendes Nutzerkonto';
$string['olduserid'] = 'Zu löschende Nutzer ID';
$string['olduseridonlog'] = 'Nutzerkonto gelöscht';
$string['pluginname'] = 'Nutzerkonten zusammenlegen';
$string['privacy:metadata'] = 'Das Plugin "Nutzerkonten zusammenlegen" speichert keine personenbezogenen Daten.';
$string['qa_action_delete_fromid'] = 'Versuche des neuen Nutzerkontos behalten';
$string['qa_action_delete_toid'] = 'Versuche des alten Nutzerkontos behalten';
$string['qa_action_remain'] = 'Nichts tun: weder zusammenfügen noch löschen';
$string['qa_action_remain_log'] = 'Benutzerdaten aus den Tabellen <strong>{$a}</strong> werden nicht aktualisiert.';
$string['qa_action_renumber'] = 'Versuche beider Nutzer zusammenführen und neu nummerieren';
$string['qa_chosen_action'] = 'Aktive Option für Quizversuche: {$a}';
$string['qa_grades'] = 'Bewertungen für Quize neuberechnet: {$a}';
$string['quizattemptsaction'] = 'Wie sollen Testversuche aufgelöst werden?';
$string['quizattemptsaction_desc'] = 'Beim Zusammenführen von Testversuchen können drei Fälle auftreten:
  <ol>
  <li>Nur der alte Benutzer hat Testversuche. Alle Versuche werden so angezeigt, als ob sie vom neuen Benutzer gemacht worden wären.</li>
  <li>Nur der neue Benutzer hat Testversuche. Alles ist korrekt und es wird nichts unternommen.</li>
  <li>Beide Benutzer haben Versuche für dasselbe Quiz. <strong>Sie müssen entscheiden, was in diesem Konfliktfall zu tun ist.
  </strong>. Sie müssen eine der folgenden Aktionen auswählen:
    <ul>
    <li><strong>{$a->renumber}</strong>. Versuche des alten Benutzers werden mit denen des neuen Benutzers zusammengeführt
    und nach dem Zeitpunkt neu nummeriert, zu dem sie gestartet wurden.</li>
    <li><strong>{$a->delete_fromid}</strong>. Versuche des alten Benutzers werden entfernt. Versuche des neuen Benutzers
    werden beibehalten, da diese Option sie als die wichtigsten betrachtet.</li>
    <li><strong>{$a->delete_toid}</strong>. Versuche des neuen Benutzers werden entfernt. Versuche
    des alten Benutzers werden beibehalten, da diese Option sie als die wichtigsten betrachtet.</li>
    <li><strong>{$a->remain}</strong> (standardmäßig). Versuche werden weder zusammengeführt noch gelöscht, sondern bleiben mit
    dem Benutzer verknüpft, der sie gemacht hat. Dies ist die sicherste Aktion, aber das Zusammenführen von Benutzern von Benutzer A zu Benutzer B oder von B zu A
    kann zu unterschiedlichen Quiznoten führen.</li>
    </ul>
  </li>
  </ol>';
$string['results'] = 'Resultate der Zusammenlegung und Log';
$string['review_users'] = 'Zusammenzulegende Nutzerkonten bestätigen';
$string['saveselection_submit'] = 'Auswahl sichern';
$string['searchuser'] = 'Nutzerkonten suchen';
$string['searchuser_help'] = 'Geben Sie einen Benutzernamen, Vor- / Nachnamen, E-Mail-Adresse oder Nutzer-ID ein, um nach möglichen Nutzern zu suchen. Sie können auch angeben, ob Sie nur ein bestimmtes Feld durchsuchen möchten.';
$string['starttime'] = 'Zusammenführung gestartet um {$a}';
$string['suspenduser_setting'] = 'Altes Nutzerkonto sperren';
$string['suspenduser_setting_desc'] = 'Wenn aktiviert, wird das alte Nutzerkonto automatisch nach einer erfolgreichen Zusammenführung gesperrt, damit sich der Nutzer nicht mehr über dieses Konto in Moodle einloggen kann (empfohlen). Wenn nicht aktiviert, bleibt das alte Nutzerkonto aktiv. In beiden Fällen hat das alte Benutzerkonto die zugeordneten Daten nicht mehr.';
$string['tableko'] = 'Tabelle {$a} : update NOT OK!';
$string['tableok'] = 'Tabelle {$a} : update OK';
$string['tableskipped'] = 'Aus Logging- oder Sicherheitsgründen überspringen wir <strong>{$a}</strong>.
<br />Um diese Einträge zu entfernen, löschen Sie das alte Nutzerkonto, sobald dieses Skript erfolgreich ausgeführt wurde.';
$string['timetaken'] = 'Zusammenführung dauerte {$a} Sekunden';
$string['transactions_not_supported'] = 'Zu Ihrer Information, Ihre Datenbank
<strong>unterstützt keine Transaktionen</strong>.';
$string['transactions_setting'] = 'Nur Transaktionen erlaubt';
$string['transactions_setting_desc'] = 'Wenn diese Option aktiviert ist , funktioniert das Zusammenführen von Benutzern überhaupt nicht bei Datenbanken, die KEINE Transaktionen unterstützen (empfohlen). Die Aktivierung ist notwendig, um sicherzustellen, dass Ihre Datenbank bei Zusammenführungsfehlern konsistent bleibt. <br />Wenn deaktiviert, werden immer Zusammenführungsaktionen ausgeführt. Bei Fehlern zeigt Ihnen das Zusammenführungsprotokoll, was das Problem war. Wenn Sie es den Plugin-Unterstützern melden, erhalten Sie in Kürze eine Lösung. <br />Vor allem werden Core-Tabellen von Moodle und einige Plugins von Drittanbietern bereits von diesem Plugin berücksichtigt. Wenn Sie keine Plugins von Drittanbietern in Ihrer Moodle-Installation haben, können Sie dieses Plugin ruhig ausführen, indem Sie diese Option aktivieren oder deaktivieren.';
$string['transactions_supported'] = 'Zu Ihrer Information, Ihre Datenbank <strong>unterstützt Transaktionen</strong>.';
$string['uniquekeynewidtomaintain'] = 'Daten des neuen Nutzers behalten';
$string['uniquekeynewidtomaintain_desc'] = 'Im Fall eines Datenkonflikts, wenn z.B. die der user.id zugeordnete Spalte ein eindeutiger Schlüssel ist, wird das Plugin die Daten des neuen Nutzers behalten (Standard). Das bedeutet auch, dass die Daten des alten Nutzers gelöscht werden, um die Datenkonsistenz sicherzustellen. Im anderen Fall, wenn Sie diese Option deaktivieren, werden die Daten des alten Nutzers behalten.';
$string['usermergingheader'] = '«{$a->username}» (Nutzer ID = {$a->id})';
$string['userreviewtable_legend'] = '<b>Zusammenzulegende Nutzerkonten überprüfen</b>';
$string['userselecttable_legend'] = '<b>Zusammenzulegende Nutzerkonten auswählen</b>';
$string['viewlog'] = 'Zusammenlegung-Logs ansehen';
$string['wronglogid'] = 'Das Log, das Sie aufrufen wollen, existiert nicht.';
