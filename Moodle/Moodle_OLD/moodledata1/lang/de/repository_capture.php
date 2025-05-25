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
 * Strings for component 'repository_capture', language 'de', version '3.10'.
 *
 * @package     repository_capture
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['btn_audio'] = 'Audio aufnehmen';
$string['btn_help'] = 'Hilfe für die Aufnahme';
$string['btn_help_help'] = 'Aufnahme-Anleitung:<br>
<ol>
<li>Verwenden Sie den Aufnahme-Button um Ihren Ton oder Ihr Video aufzunehmen</li>
<li>Mit dem Abspielen-Button können Sie Ihre Aufnahme abspielen</li>
<li>Verwenden Sie die beiden dreieckigen Regler, um den Anfang und das Ende des Videos festzulegen.</li>
<li>Wenn Sie die Bearbeitung beendet haben, klicken Sie auf den Speichern-Button, um Ihre Aufnahme an Moodle zu senden. (Die Verarbeitung kann eine gewisse Zeit in Anspruch nehmen, abhängig von der Aufnahmelänge, der Bandbreite und der Serverleistung.)</li>
</ol>';
$string['btn_photo'] = 'Bild aufnehmen';
$string['btn_play'] = 'Abspielen/Pause';
$string['btn_record'] = 'Aufnahme';
$string['btn_record_photo'] = 'Bild aufnehmen';
$string['btn_reset'] = 'Versuchen Sie es noch einmal';
$string['btn_save'] = 'Speichern';
$string['btn_settings'] = 'Einstellungen für die Aufnahme';
$string['btn_stop'] = 'Stop';
$string['btn_video'] = 'Video aufnehmen';
$string['capture:audio'] = 'Nutzen Sie den Capture Audio-Modus in der Dateiauswahl';
$string['capture:photo'] = 'Nutzen Sie den Capture Foto-Modus in der Dateiauswahl';
$string['capture:video'] = 'Nutzen Sie den Capture Video-Modus in der Dateiauswahl';
$string['capture:view'] = 'Nutzen Sie Capture in der Dateiauswahl';
$string['configplugin'] = 'Konfiguration für das Capture-Plugin';
$string['default_filename'] = 'Aufnahme';
$string['download'] = 'Herunterladen';
$string['err_no_hardware'] = 'Kamera oder Mikrofon fehlt. Bitte verbinden Sie Ihr Gerät und aktualisieren Sie die Seite (in Abhängigkeit von Ihrem Browser müssen Sie den Browser evtl. neu starten)';
$string['err_record_ffmpeg_exec'] = 'Ausführung von FFMPEG schlug fehlt. Bitte prüfen Sie den Pfad und versuchen Sie es noch einmal.';
$string['err_record_file_not_exists'] = 'Die Aufnahme existiert nicht. Es gibt möglicherweise ein Problem mit der Serverkonfiguration. Überprüfen Sie, ob das temp-Verzeichnis beschreibbar und FFMPEG richtig installiert ist.';
$string['err_record_fps_range'] = 'Wert muss zwischen 10 und 60 liegen';
$string['err_record_quality_range'] = 'Wert muss zwischen 20 und 100 liegen';
$string['head_index'] = 'Capture';
$string['pluginname'] = 'Capture';
$string['pluginname_help'] = 'Nimmt Audio oder Video direkt in Moodle auf und lädt es in das Moodle Dateisystem';
$string['radio_no'] = 'Nein';
$string['radio_yes'] = 'Ja';
$string['record_audio'] = 'Audio-Aufnahme erlaubt';
$string['record_audio_help'] = 'Wählen Sie diese Option, wenn Sie Nutzern erlauben wollen, mit ihrem Mikrofon Audio-Aufnahmen zu machen.';
$string['record_ffmpeg'] = 'FFMPEG exec Pfad';
$string['record_ffmpeg_help'] = 'Der Pfad zu FFMPEG (oder avconv, abhängig von Ihrem System). Im Allgemeinen ist <b>ffmpeg</b> ausreichend, aber auf manchen Servern muss der komplette Pfad angegegeben werden, z.B. <b>"C:\\Program Files\\ffmpeg\\bin\\ffmpeg.exe"</b> (Anführungszeichen sind wichtig, wenn Leerzeichen im Pfad enthalten sind).';
$string['record_fps'] = 'Framerate';
$string['record_fps_help'] = 'Legt die Framerate in Frames pro Sekunde fest.<b>Standard = 15</b>.<br>
<b>Hinweis:</b>: Je mehr Frames pro Sekunde, desto größer die Video-Datei und das Rendern des Videos wird langsamer. Max FPS 60';
$string['record_photo'] = 'Foto-Aufnahme von der Webcam erlaubt';
$string['record_photo_help'] = 'Wählen Sie ja, wenn Sie Nutzern erlauben wollen, ein Foto mit ihrer Webcam aufzunehmen.';
$string['record_quality'] = 'Aufnahmequalität (in %)';
$string['record_quality_help'] = 'Standard: 70%. 100% für die höchste Qualität.<br>
<b>Hinweis:</b> Je höher die Qualität, desto länger dauert die Kodierung des Videos';
$string['record_video'] = 'Video-Aufnahme erlaubt';
$string['record_video_help'] = 'Wählen Sie ja, wenn Sie Nutzern erlauben wollen, mit Webcam und Mikrofon Videos aufzuzeichnen';
$string['saveas'] = 'Dateiname:';
$string['setauthor'] = 'Autor:';
$string['setlicense'] = 'Wählen Sie die Lizenz:';
$string['title_audio'] = 'Audio';
$string['title_audio_help'] = 'Klicken Sie auf Audio aufnehmen, um mit Ihrem Mikrofon eine neue mp3-Datei einzufügen.';
$string['title_info'] = 'Information';
$string['title_info_help'] = 'Vervollständigen Sie die Informationen, um die Datei zu speichern';
$string['title_photo'] = 'Foto';
$string['title_photo_help'] = 'Wählen Sie Ihre Bildgröße und klicken Sie auf "Foto aufnehmen", um mit Ihrer Webcam eine neue jpg-Datei einzufügen';
$string['title_video'] = 'Video';
$string['title_video_help'] = 'Wählen sie Ihre Videogröße und klicken Sie auf "Video aufnehmen" um mit Ihrer Webcam und Ihrem Mikrofon eine neue mp4-Datei einzufügen';
$string['video_conversion_processing'] = 'In Bearbeitung...';
$string['video_height'] = '- Höhe:';
$string['video_width'] = 'Breite:';
