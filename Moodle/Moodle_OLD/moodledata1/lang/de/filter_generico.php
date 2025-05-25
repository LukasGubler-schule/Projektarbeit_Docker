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
 * Strings for component 'filter_generico', language 'de', version '3.10'.
 *
 * @package     filter_generico
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['appauthorised'] = 'Cloud Poodll ist für diese Seite autorisiert.';
$string['appnotauthorised'] = 'Cloud Poodll ist für diese Seite nicht autorisiert.';
$string['bundle'] = 'Bundle';
$string['cleartemplate'] = 'Vorlage löschen';
$string['commonpageheading'] = 'Allgemeine Einstellungen';
$string['cpapi_heading'] = 'Cloud Poodll API-Einstellungen';
$string['cpapi_heading_desc'] = 'Cloud Poodll ermöglicht es Ihnen, den Recorder direkt von cloud.poodll.com in Widgets einzubetten. Dies ist optional und muss nicht ausgefüllt werden.';
$string['cpapisecret'] = 'Cloud Poodll API Geheimschlüssel';
$string['cpapisecret_details'] = 'Dies ist ein spezieller Geheimschlüssel, der aus dem <a href=\'https://support.poodll.com/support/solutions/articles/19000083076-cloud-poodll-api-secret\'>API-Tab</a> in Ihrem Mitgliederbereich auf Poodll.com generiert werden kann.';
$string['cpapiuser'] = 'Cloud Poodll API Benutzer';
$string['cpapiuser_details'] = 'Dies ist das Gleiche wie Ihr Benutzername auf Poodll.com.';
$string['credentialsinvalid'] = 'Dies ist derselbe wie Ihr Benutzername auf Poodll.com.';
$string['dataset'] = 'Datensatz';
$string['dataset_desc'] = 'Generico ermöglicht es Ihnen, einen Datensatz aus der Datenbank zur Verwendung in Ihrer Vorlage zu holen. Dies ist eine erweiterte Funktion. Geben Sie hier den SQL-Anteil eines $DB->get_records_sql-Aufrufs ein.';
$string['datasetvars'] = 'Datensatz-Variablen';
$string['datasetvars_desc'] = 'Fügen Sie eine kommagetrennte Liste von Variablen hinzu, aus denen die Variablen für das SQL bestehen. Du kannst und wirst wahrscheinlich Variablen verwenden wollen.';
$string['displaysubs'] = '{$a->subscriptionname} : verfällt {$a->expiredate}';
$string['filterdescription'] = 'Konvertieren von Filterstrings in Vorlagen, die mit Daten zusammengeführt werden.';
$string['filtername'] = 'Generico';
$string['genericotemplatesadmin'] = 'Generico Vorlagen Admin';
$string['jumpcat_explanation'] = 'Den vollständigen Satz der Generico Filtereinstellungen finden Sie <a href="{$a}">hier</a>.';
$string['jumpcat_heading'] = 'Allgemeine Generico Filtereinstellungen';
$string['noapisecret'] = 'Es wurde kein API-Geheimschlüssel eingegeben.';
$string['noapiuser'] = 'Es wurde kein API-Benutzername eingegeben.';
$string['notokenincache'] = 'Aktualisieren Sie die Cloud Poodll-Lizenzinformationen um Details zu sehen.';
$string['pluginname'] = 'Generico';
$string['presets'] = 'Automatisches Ausfüllen der Vorlage mit einer Vorgabe';
$string['presets_desc'] = 'Generico enthält einige Standardvoreinstellungen, die Sie sofort nach dem ersten Gebrauch verwenden können, oder um Ihnen zu helfen, mit Ihren eigenen Vorlagen zu beginnen. Wählen Sie eine davon aus, oder erstellen Sie einfach Ihre eigene Vorlage. Sie können eine Vorlage als Bundle exportieren, indem Sie oben auf das grüne Kästchen klicken. Sie können ein Bundle importieren, indem Sie es auf das grüne Kästchen ziehen.';
$string['privacy:metadata'] = 'Das atto_generico Plugin speichert keine personenbezogenen Daten.';
$string['refreshtoken'] = 'Aktualisieren Sie die Cloud Poodll-Lizenzinformationen.';
$string['template'] = 'Der Inhalt der Vorlage {$a}';
$string['template_desc'] = 'Platzieren Sie die Vorlage hier, definieren Sie Variablen, indem Sie sie mit @@-Markierungen umgeben, z.B. @@variable@@.';
$string['templatealternate'] = 'Alternativer Inhalt';
$string['templatealternate_desc'] = 'Inhalte, die verwendet werden können, wenn die benutzerdefinierten und hochgeladenen CSS- und Javascript-Inhalte nicht verfügbar sind. Dies wird derzeit verwendet, wenn die Vorlage von einem Webservice verarbeitet wird, wahrscheinlich für Inhalte auf der mobilen App.';
$string['templatealternate_end'] = 'Alternatives Inhaltsende (template {$a})';
$string['templatealternate_end_desc'] = 'Schliessen der alternativen Inhalts-Tags für Vorlagen, die Benutzerinhalte mit Start- und End-Tags von Generico umschliessen.';
$string['templatecount'] = 'Anzahl der Vorlagen';
$string['templatecount_desc'] = 'Die Anzahl der Vorlagen, die Sie zur Auswahl stellen. Der Standardwert ist 20.';
$string['templatedefaults'] = 'Variablenvorgaben (template {$a})';
$string['templatedefaults_desc'] = 'Definieren Sie die Standardeinstellungen in kommagetrennten Gruppen wie name=value Paaren. z.B. width=800,height=900,feeling=joy';
$string['templateend'] = 'End-Tags(template {$a})';
$string['templateend_desc'] = 'Wenn Ihre Vorlage Benutzerinhalte, z.B. eine Infobox enthält, fügen Sie hier die abschließenden Tags ein. Der Benutzer gibt etwas wie {GENERICO:mytag_end} ein, um den Filter zu schliessen.';
$string['templateheading'] = 'Einstellungen für Generico Vorlage {$a}';
$string['templateheadingcss'] = 'CSS/Style-Einstellungen.';
$string['templateheadingjs'] = 'Javascript-Einstellungen.';
$string['templateinstructions'] = 'Anweisungen (template {$a})';
$string['templateinstructions_desc'] = 'Alle hier eingegebenen Anweisungen werden auf dem Formular Generic atto für diese Vorlage angezeigt. Haltet sie kurz, sonst sieht es nicht überschaubar aus.';
$string['templatekey'] = 'Der Schlüssel, der die Vorlage identifiziert {$a}';
$string['templatekey_desc'] = 'Der Schlüssel sollte ein Wort sein und nur aus Zahlen, Buchstaben, Unterstriche, Bindestriche und Punkte bestehen.';
$string['templatename'] = 'Name der Vorlage';
$string['templatename_desc'] = 'Der Name dieser Vorlage.';
$string['templatepageheading'] = 'Vorlage: {a}';
$string['templaterequire_amd'] = 'Laden über AMD';
$string['templaterequire_amd_desc'] = 'AMD ist ein Javascript-Lademechanismus. Wenn Sie in Ihrer Vorlage Javascript-Bibliotheken hochladen oder verlinken, müssen Sie dies möglicherweise deaktivieren. Dies gilt nur für Moodle 2.9 oder höher.';
$string['templaterequire_css'] = 'Erforderliches CSS (template {$a})';
$string['templaterequire_css_desc'] = 'Ein Link (nur 1) zu einer externen CSS-Datei, die diese Vorlage benötigt. optional.';
$string['templaterequire_js'] = 'Erforderliches Benötigtes JS (template {$a})';
$string['templaterequire_js_desc'] = 'Ein Link (nur 1) zu einer externen JS-Datei, den diese Vorlage benötigt. optional.';
$string['templaterequirejsshim'] = 'Erforderte Shim-Export';
$string['templaterequirejsshim_desc'] = 'Lassen Sie das Feld leer, es sei denn, Sie wissen, was Shimming ist.';
$string['templates'] = 'Vorlagen';
$string['templatescript'] = 'Benutzerdefiniertes JS (template {$a})';
$string['templatescript_desc'] = 'Wenn Ihre Vorlage benutzerdefiniertes Javascript ausführen muss, geben Sie dieses hier ein. Es wird ausgeführt, sobald alle Elemente auf der Seite geladen sind.';
$string['templatestyle'] = 'Benutzerdefiniertes CSS (template {$a})';
$string['templatestyle_desc'] = 'Geben Sie hier ein beliebiges benutzerdefiniertes CSS ein, das Ihre Vorlage verwendet. Template-Variablen funktionieren hier nicht. Nur eine einfache alte CSS.';
$string['templateupdated'] = '{$a} Poodll-Vorlagen aktualisiert.';
$string['templateuploadjsshim'] = 'Shim-Export hochladen';
$string['templateuploadjsshim_desc'] = 'Lassen Sie das Feld leer, es sei denn, Sie wissen, was Shimming ist.';
$string['templateversion'] = 'Die Version dieser Vorlage {$a}';
$string['templateversion_desc'] = 'Verwenden Sie semantische Versionierung, z.B. 1.0.0. Generico zeigt eine Aktualisierungsschaltfläche an, wenn die voreingestellte Version größer als die Vorlagenversion ist.';
$string['updateall'] = 'Alle aktualisieren';
$string['updatetoversion'] = 'Update auf Version: {$a}';
$string['uploadcss'] = 'CSS (template {$a}) hochladen';
$string['uploadcss_desc'] = 'Sie können hier eine CSS-Datei hochladen, die für Ihre Vorlage geladen wird. Nur eine Datei.';
$string['uploadjs'] = 'JS (template {$a}) hochladen';
$string['uploadjs_desc'] = 'Sie können eine JS-Datei hochladen, die für Ihre Vorlage geladen wird. Nur eine Datei.';
