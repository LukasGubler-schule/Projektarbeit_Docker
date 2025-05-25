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
 * Strings for component 'local_mail', language 'de', version '3.10'.
 *
 * @package     local_mail
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addbcc'] = 'Blindkopie (Bcc) hinzufügen';
$string['addcc'] = 'Kopie (Cc) hinzufügen';
$string['addrecipients'] = 'Empfänger/in hinzufügen';
$string['addto'] = 'Empfänger/in hinzufügen';
$string['advsearch'] = 'Suche ...';
$string['all'] = 'Alle';
$string['applychanges'] = 'Anwenden';
$string['assigntonewlabel'] = 'Einem neuen Label zuordnen ...';
$string['attachments'] = 'Anhänge';
$string['attachnumber'] = '{$a} Anhänge';
$string['bcc'] = 'Bcc';
$string['bulkmessage'] = 'Sende Nachricht an ausgewählte Personen';
$string['cancel'] = 'Abbrechen';
$string['cannotcompose'] = 'Sie können keine Nachrichten schreiben, da Sie bisher noch in keinen Kurs eingeschrieben sind.';
$string['cc'] = 'Cc';
$string['compose'] = 'Erstellen';
$string['configenablebackup'] = 'Sichern / Wiederherstellen';
$string['configenablebackupdesc'] = 'Sichern und Wiederherstellen von Nachrichten und Labels aktivieren';
$string['configlegacynav'] = 'Alte Navigation';
$string['configlegacynavdesc'] = 'Die alte Navigation sollte nach Moodle 3.2 nicht genutzt werden und wird in Kürze aus dem Code entfernt.';
$string['continue'] = 'Weiter';
$string['courses'] = 'Kurse';
$string['delete'] = 'Löschen';
$string['discard'] = 'Verwerfen';
$string['downloadall'] = 'Alles herunterladen';
$string['draft'] = 'Entwurf';
$string['drafts'] = 'Entwürfe';
$string['editlabel'] = 'Label bearbeiten';
$string['emptyrecipients'] = 'Empfänger/in fehlt';
$string['emptytrash'] = 'Papierkorb leeren';
$string['emptytrashconfirm'] = 'Soll der Papierkorb geleert werden?';
$string['erroremptycourse'] = 'Wählen Sie einen Kurs.';
$string['erroremptylabelname'] = 'Wählen Sie einen Labelnamen.';
$string['erroremptyrecipients'] = 'Wählen Sie mindestens einen Empfänger aus.';
$string['erroremptysubject'] = 'Geben Sie einen Betreff an.';
$string['errorinvalidcolor'] = 'Ungültige Farbe';
$string['errorrepeatedlabelname'] = 'Labelname existiert bereits';
$string['filterbydate'] = 'Datum (bis)';
$string['forward'] = 'Weiterleiten';
$string['from'] = 'Von';
$string['hasattachments'] = 'Nachricht mit Anhängen';
$string['inbox'] = 'Eingang';
$string['invalidlabel'] = 'Ungültiges Label';
$string['invalidmessage'] = 'Ungültige Mitteilung';
$string['labelcolor'] = 'Farbe';
$string['labeldeleteconfirm'] = 'Soll das Label vollständig gelöscht werden? \'{$a}\\';
$string['labelname'] = 'Name';
$string['labels'] = 'Label';
$string['mail:addinstance'] = 'Neue E-Mail erstellen';
$string['mail:mailsamerole'] = 'E-Mail an Personen mit der gleichen Rolle senden';
$string['mail:usemail'] = 'E-Mail verwenden';
$string['mailmenu'] = 'Mail-Menü';
$string['mailupdater'] = 'E-Mail-Aktualisierer';
$string['markasread'] = 'Als gelesen markieren';
$string['markasread_help'] = 'Wenn aktiv, werden alle neuen Nachtrichten als gelesen markiert';
$string['markasstarred'] = 'Als hervorgehoben markieren';
$string['markasunread'] = 'Als ungelesen markieren';
$string['markasunstarred'] = 'Markierung entfernen';
$string['maxattachments'] = 'Maximale Anzahl an Anhängen';
$string['maxattachmentsize'] = 'Maximale Dateigröße der Anhänge';
$string['message'] = 'Nachricht';
$string['messagedeleteconfirm'] = 'Soll die Mitteilung komplett gelöscht werden? \'{$a}\\';
$string['messageprovider:mail'] = 'E-Mail eingegangen';
$string['messagesdeleteconfirm'] = 'Sollen alle Mitteilungen ({$a}) gelöscht werden?';
$string['moreactions'] = 'Weitere Funktionen';
$string['mymail'] = 'Meine E-Mail';
$string['newlabel'] = 'Neues Label';
$string['nocolor'] = 'Keine Farbe';
$string['nolabels'] = 'Keine Label verfügbar';
$string['nomessages'] = 'Keine Nachrichten';
$string['nomessageserror'] = 'Sie müssen für diese Aktion mindestens eine Nachricht auswählen';
$string['nomessagestoview'] = 'Es sind keine neuen Nachrichten vorhanden.';
$string['none'] = 'Keine';
$string['norecipient'] = '(kein Empfänger)';
$string['noselectedmessages'] = 'Keine Nachricht ausgewählt';
$string['nosubject'] = '(kein Betreff)';
$string['notificationbody'] = '- Von: {$a->user}

- Betreff: {$a->subject}

{$a->content}';
$string['notificationbodyhtml'] = '<p>Von: {$a->user}</p><p>Betreff: <a href="{$a->url}">{$a->subject}</a></p><p>{$a->content}</p>';
$string['notificationpref'] = 'Sende Mitteilungen';
$string['notificationsubject'] = 'Neue E-Mail in  {$a}';
$string['notingroup'] = 'Sie sind kein Mitglied einer Gruppe';
$string['pagingmultiple'] = '{$a->first}-{$a->last} von {$a->total}';
$string['pagingsingle'] = '{$a->index} von {$a->total}';
$string['perpage'] = '{$a} Nachrichten anzeigen';
$string['pluginname'] = 'E-Mail';
$string['read'] = 'Lesen';
$string['references'] = 'Bezug';
$string['removelabel'] = 'Label entfernen';
$string['reply'] = 'Antworten';
$string['replyall'] = 'Allen antworten';
$string['restore'] = 'Wiederherstellen';
$string['save'] = 'Speichern';
$string['search'] = 'Suchen';
$string['searchbyattach'] = 'Mit Anhängen';
$string['searchbyunread'] = 'Nur ungelesene';
$string['send'] = 'Senden';
$string['sendmessage'] = 'Nachricht senden';
$string['sentmail'] = 'Gesendet';
$string['setlabels'] = 'Labels';
$string['shortaddbcc'] = 'Bcc';
$string['shortaddcc'] = 'Cc';
$string['shortaddto'] = 'An';
$string['showlabelmessages'] = 'Nachrichten mit Label \'{$a}\' anzeigen';
$string['showrecentmessages'] = 'Neueste Nachrichten anzeigen';
$string['smallmessage'] = '{$a->user} hat Ihnen eine E-Mail gesendet';
$string['starred'] = 'Markiert';
$string['starredmail'] = 'Markiert';
$string['subject'] = 'Betreff';
$string['to'] = 'An';
$string['togglemailmenu'] = 'Mail-Menü wechseln';
$string['toomanyrecipients'] = 'Die Suche hat zu viele Treffer';
$string['trash'] = 'Papierkorb';
$string['undo'] = 'Rückgängig machen';
$string['undodelete'] = '{$a} Nachrichten wurden in den Papierkorb verschoben';
$string['undorestore'] = '{$a} Nachrichten wurden wiederhergestellt';
$string['unread'] = 'Ungelesen';
$string['unstarred'] = 'Unmarkiert';
