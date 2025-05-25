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
 * Strings for component 'opencast', language 'de', version '4.5'.
 *
 * @package     opencast
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advancedsettings'] = 'Erweiterte Einstellungen';
$string['allowdownload'] = 'Herunterladen von Video(s) erlauben';
$string['allvideos'] = 'Alle Videos';
$string['captions_generator_type_auto'] = 'Automatisch generiert';
$string['captions_generator_type_manual'] = 'Manuell erzeugt';
$string['date'] = 'Datum';
$string['defaultuploadedvideotitle'] = 'Hochgeladenes Video';
$string['dnduploadvideofile'] = 'Videodatei zu Opencast hochladen';
$string['downloadvideo'] = 'Video herunterladen';
$string['duration'] = 'Dauer';
$string['episode'] = 'Opencast Episode';
$string['erroremptystreamsources'] = 'Es ist keine Videoquelle verfügbar. Bitte wenden Sie sich an Ihren Systemadministrator.';
$string['errorfetchingvideo'] = 'Beim Laden des Videos ist ein Problem aufgetreten';
$string['errorvideonotavailable'] = 'Das Video konnte nicht gefunden werden! <br />Bitte wenden Sie sich an Ihren Systemadministrator.';
$string['errorvideonotready'] = 'Das Video ist entweder noch nicht fertig oder kann nicht richtig von der Quelle abgerufen werden!<br />Bitte versuchen Sie es später noch einmal.';
$string['gridview'] = 'Rasteransicht';
$string['listview'] = 'Listenansicht';
$string['manualocid'] = 'Opencast ID der Serie/Episode manuell eingeben';
$string['modulename'] = 'Opencast Video';
$string['modulename_help'] = '<p>Das Video (Opencast)-Modul dient dazu, Videos oder Serien von einer angeschlossenen Opencast-Plattform anzuzeigen.</p><p>In den meisten Fällen ist es einfacher, die Aktivität nicht direkt zu erstellen, sondern über den Block „Opencast Videos“ zu realisieren.</p>';
$string['modulenameplural'] = 'Opencast Videos';
$string['ocinstance'] = 'Opencast Instanz';
$string['opencast:addinstance'] = 'Neue Opencast Video Instanz hinzufügen';
$string['opencastid'] = 'Opencast ID';
$string['opencastidnotrecognized'] = 'Diese ID konnte keinem Opencast Video und keiner Opencast Serie zugeordnet werden.';
$string['opencastname'] = 'Opencast Video Provider: {$a}';
$string['opencastnotreachable'] = 'Opencast ist zur Zeit nicht erreichbar. Bitte versuchen Sie es später noch einmal.';
$string['pluginadministration'] = 'Opencast Video Provider Administration';
$string['pluginname'] = 'Opencast Video Provider';
$string['privacy:metadata'] = 'Mit der Aktivität "Opencast" können Opencast Videos in moodle angezeigt werden. Es werden keine nutzerbezogene Daten gespeichert.';
$string['series'] = 'Opencast Serie';
$string['seriesisempty'] = 'Diese Serie enthält keine Videos';
$string['settings:api-channel'] = 'Opencast Kanal';
$string['settings:configurl'] = 'URL zur Paella config.json';
$string['settings:configurl_desc'] = 'Die URL der config.json, die im Paella Player verwendet wird. Kann eine absolute URL oder relativ zu wwwroot sein.';
$string['settings:download-channel'] = 'Opencast Download Kanal';
$string['settings:download-channel_desc'] = 'Opencast Veröffentlichung-Kanal, von dem die Videos zum Herunterladen bereitgestellt werden.';
$string['settings:download-default'] = 'Herunterladen standardmäßig zulassen';
$string['settings:download-default_desc'] = 'Wenn aktiviert, ist das Kontrollkästchen zum Zulassen von Downloads in den Formularen der Aktivität standardmäßig aktiviert.';
$string['settings:download_header'] = 'Download für Teilnehmer/innen konfigurieren';
$string['settings:global_download'] = 'Download für Teilnehmer/innen erzwingen';
$string['settings:global_download_desc'] = 'Global zulassen, dass Teilnehmer/innen Videos herunterladen können. Trainer/innen können diese Einstellung nicht überschreiben.';
$string['settings:themeurl'] = 'URL zur Paella theme.json';
$string['settings:themeurl_desc'] = 'URL der vom Paella Player verwendeten theme.json. Kann entweder eine absolute URL oder eine URL relativ zum wwwroot sein.';
$string['sortseriesby'] = 'Sortieren nach Serien';
$string['sortseriesby_help'] = 'Betrifft nur Serien';
$string['title'] = 'Titel';
$string['uploaddate'] = 'Datum des Hochladens';
$string['uploaddefaultintrodisplay'] = 'Dies ist ein Modul für die Opencast-Aktivitäten zum Hochladen eines Videos.';
$string['uploadedvideoisbeingprocesses'] = 'Dieses Video ({$a}) wurde bereits hochgeladen und wird von Opencast verarbeitet. Bitte warten Sie!';
$string['uploadform_flavor_label'] = 'Verwenden Sie das Video für den flavor von:';
$string['uploadform_flavor_presentation'] = 'Präsentationsvideo';
$string['uploadform_flavor_presenter'] = 'Präsentator-Video';
$string['uploadform_general_header'] = 'Allgemeine Einstellungen';
$string['uploadform_metadata_header'] = 'Erforderliche Event-Metadaten';
$string['uploadform_ocinstancesselect'] = 'Opencast-Instanz';
$string['uploadform_requirednotice'] = '<b>{$a}Erforderlich</b>: Alle Eingaben in diesem Formular müssen ausgefüllt werden.';
$string['uploadform_seriessselect'] = 'Serie';
$string['uploadform_uploadexplaination'] = 'Dies ist ein kurzes und unvollständiges Formular zum Hochladen von Videos. Um weitere Metadaten und andere Informationen hinzuzufügen, verwenden Sie bitte das Opencast Video Plugin.';
$string['uploadformtitle'] = 'Das Video zu Opencast hochladen';
$string['uploadinprogress'] = 'Das Video ({$a}) wird gerade hochgeladen , bitte versuchen Sie es später noch einmal.';
$string['uploadjobmissing'] = 'Es ist ein Fehler beim Hochladen der Daten für dieses Video aufgetreten. Bitte versuchen Sie, ein neues Video hochzuladen. Aufgrund unzureichender Daten wird dieses Modul gelöscht.';
$string['uploadlandinginfo'] = 'Sie sind dabei, ein Video nach Opencast hochzuladen. Bitte vergewissern Sie sich, dass die erforderlichen Informationen eingegeben wurden.';
$string['uploadmissingfile'] = 'Aufgrund einer fehlenden Datei ist dieses Modul nicht mehr gültig und wird nun gelöscht. Bitte versuchen Sie, ein anderes hinzuzufügen.';
$string['uploadnotallowed'] = 'Die Durchführung dieser Aktion ist nicht erlaubt';
$string['uploadsaved'] = 'Video-Upload erfolgreich. Das Video soll jetzt zu Opencast übertragen werden. Weitere Informationen finden Sie unter <a target=„_blank“ href=„{$a}“>Opencast Videos</a>';
$string['uploadtitledisplay'] = 'Video hochladen:';
$string['videotitle'] = 'Video Titel';
