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
 * Strings for component 'filter_filtercodes', language 'de', version '3.10'.
 *
 * @package     filter_filtercodes
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['brief'] = 'Knapp';
$string['categorycardshowpic'] = 'Hintergrund {categorycards} anzeigen';
$string['categorycardshowpic_desc'] = 'Wenn diese Option aktiviert ist, wird eine Hintergrundfarbe bzw. ein Muster für das {categorycards}-Tag angezeigt (ähnlich den Kursbildern), wenn kein Bild angegeben ist.';
$string['chartprogressbarlabel'] = '{$a->label}: {$a->value}';
$string['contentmissing'] = '<h1>Inhalte fehlen.</h1><p>Wenden Sie sich bitte an die Administrator/innen der Website.</p>';
$string['coursecardsbyenrol'] = 'Maximal {coursecardsbyenrol}-Karten';
$string['coursecardsbyenrol_desc'] = 'Maximale Anzahl von anzuzeigenden Kurskarten für das Tag {coursecardsbyenrol}. Für unbegrenzt auf Null setzen (nicht empfohlen).';
$string['coursecontactlinktype'] = 'Linktyp für Kontakte';
$string['coursecontactlinktype_desc'] = 'Wählen Sie den Linktyp für den Kontaktlink in den Tags {coursecontacts} aus.';
$string['coursecontactshowdesc'] = 'Profilbeschreibung des Kontakts anzeigen.';
$string['coursecontactshowdesc_desc'] = 'Wenn diese Option aktiviert ist, wird die Profilbeschreibung des Kontakts in {coursecontacts}-Tags angezeigt.';
$string['coursecontactshowpic'] = 'Kontaktbild anzeigen';
$string['coursecontactshowpic_desc'] = 'Wenn diese Option aktiviert ist, wird das Profilbild des Kontakts in {coursecontacts}-Tags angezeigt.';
$string['disabled_customnav_description'] = '<strong>Hinweis für nutzerdefinierte Menüs </strong> - Um die Unterstützung für FilterCodes im nutzerdefinierten Menü Ihrer Moodle-Website zu aktivieren, müssen Sie möglicherweise Ihr Design oder Ihren Moodle-Core anpassen. <a href="https://github.com/michael-milette/moodle-filter_filtercodes#can-i-use-filtercodes-in-moodles-custom-menus">Infos zum Hinzufügen der FilterCodes-Unterstützung in nutzerdefinierten Menüs</a>.';
$string['enable_customnav'] = 'Support für nutzerdefinierte Navigation';
$string['enable_customnav_description'] = '<strong>Experimentell</strong>: Aktivieren Sie die Unterstützung für FilterCode-Tags im nutzerdefinierten Navigationsmenü.
Hinweis: Kompatibel sind clean- und boost-basierte Designs nur in Moodle 3.2 bis 3.4. Filtert keine Tags auf der Seite "Design-Einstellungen".';
$string['enable_scrape'] = 'Support für Scrape-Tags';
$string['enable_scrape_description'] = 'Scrape-Tags aktivieren';
$string['enable_sesskey'] = 'Support für Sesskey-Tag';
$string['enable_sesskey_description'] = 'Diese Option aktiviert das sesskey-Tag global. Diese Funktion ist in Foren deaktiviert, auch wenn sie global aktiviert ist.';
$string['escapebraces'] = 'Escape Tags';
$string['escapebraces_desc'] = 'Wenn diese Option aktiviert ist, können Sie FilterCode-Tags anzeigen, ohne dass sie von diesem Filter interpretiert werden. Dazu müssen Sie Ihr Tag in [eckige Klammern] setzen. Dies kann nützlich sein, wenn Sie eine FilterCodes-Dokumentation für Trainer/innen oder Kursersteller/innen auf Ihrer Moodle-Website erstellen. <br><br> Beispiel: [{fullname}] zeigt nicht den vollständigen Namen einer Person an, sondern stattdessen das Tag {fullname} ohne die eckigen Klammern.';
$string['filtername'] = 'Filtercodes';
$string['formcheckin'] = '<form action="{wwwroot}/local/contact/index.php" method="post" class="cf check-in">
    <fieldset>
        <input type="hidden" id="subject" name="subject" value="Anwesend!">
        <input type="hidden" id="sesskey" name="sesskey" value="">
        <script>document.getElementById("sesskey").value = M.cfg.sesskey;</script>
        {recaptcha}
    </fieldset>
    <div>
        <input type="submit" name="submit" id="submit" value="Ich bin hier!">
    </div>
</form>';
$string['formcontactus'] = '<form action="{wwwroot}/local/contact/index.php" method="post" class="cf contact-us">
    <fieldset>
        <div class="form-group">
            <label for="name" id="namelabel" class="d-block">Ihr Name <strong class="required">(notwendig)</strong></label>
            <input id="name" name="name" type="text" size="57" maxlength="45" pattern="[A-zÀ-ž]([A-zÀ-ž\\s]){2,}"
                    title="Mindestens 3 Zeichen/Leerzeichen" required="required" {readonly}{ifloggedin} disabled{/ifloggedin} value="{fullname}">
        </div>
        <div class="form-group">
            <label for="email" id="emaillabel" class="d-block">E-Mail-Adresse <strong class="required">(notwendig)</strong></label>
            <input id="email" name="email" type="email" size="57" maxlength="60"
                    required="required" {readonly}{ifloggedin} disabled{/ifloggedin} value="{email}">
        </div>
        <div class="form-group">
            <label for="subject" id="subjectlabel" class="d-block">Betreff <strong class="required">(notwendig)</strong></label>
            <input id="subject" name="subject" type="text" size="57" maxlength="80" minlength="5"
                    title="Mindestens 5 Zeichen." required="required">
        </div>
        <div class="form-group">
            <label for="message" id="messagelabel" class="d-block">Nachricht <strong class="required">(notwendig)</strong></label>
            <textarea id="message" name="message" rows="5" cols="58" minlength="5"
                    title="Mindestens 5 Zeichen." required="required"></textarea>
        </div>
        <input type="hidden" id="sesskey" name="sesskey" value="">
        <script>document.getElementById("sesskey").value = M.cfg.sesskey;</script>
        {recaptcha}
    </fieldset>
    <div>
        <input type="submit" name="submit" id="submit" value="Absenden">
    </div>
</form>';
$string['formcourserequest'] = '<form action="{wwwroot}/local/contact/index.php" method="post" class="cf new-course-request">
    <fieldset>
        <div class="form-group">
            <label for="name" id="namelabel" class="d-block">Ihr Name <strong class="required">(notwendig)</strong></label>
            <input id="name" name="name" type="text" size="57" maxlength="45" pattern="[A-zÀ-ž]([A-zÀ-ž\\s]){2,}"
                    title="Mindestens 3 Zeichen/Leerzeichen" required="required" {readonly}{ifloggedin} disabled{/ifloggedin} value="{fullname}">
        </div>
        <div class="form-group">
            <label for="email" id="emaillabel" class="d-block">E-Mail-Adresse <strong class="required">(notwendig)</strong></label>
            <input id="email" name="email" type="email" size="57" maxlength="60" required="required" {readonly}{ifloggedin} disabled{/ifloggedin} value="{email}">
        </div>
        <div class="form-group">
            <label for="new_course_name" id="new_course_namelabel" class="d-block">Vorgeschlagener Name für den neuen Kurs <strong class="required">(notwendig)</strong></label>
            <input id="new_course_name" name="new_course_name" type="text" size="57" maxlength="80" minlength="5"
                    title="Mindestens 5 Zeichen." required="required">
        </div>
        <div class="form-group">
            <label for="description" id="descriptionlabel" class="d-block">Kursbeschreibung <strong class="required">(notwendig)</strong></label>
            <textarea id="description" name="description" rows="5" cols="58" minlength="5"
                    title="Mindestens 5 Zeichen." required="required"></textarea>
        </div>
        <input type="hidden" id="sesskey" name="sesskey" value="">
        <script>document.getElementById("sesskey").value = M.cfg.sesskey;</script>
        {recaptcha}
    </fieldset>
    <div>
        <input type="submit" name="submit" id="submit" value="Kursantrag für diesen Kurs absenden">
    </div>
</form>';
$string['formquickquestion'] = '<form action="{wwwroot}/local/contact/index.php" method="post" class="cf contact-us">
    <fieldset>
        <div class="form-group">
            <label for="subject" id="subjectlabel" class="d-block">Betreff <strong class="required">(notwendig)</strong></label>
            <input class="block" id="subject" name="subject" type="text" size="57" maxlength="80" minlength="5"
                    title="Mindestens 5 Zeichen." required="required">
        </div>
        <div class="form-group">
            <label for="message" id="messagelabel" class="d-block">Nachricht <strong class="required">(notwendig)</strong></label>
            <textarea id="message" name="message" rows="5" cols="58" minlength="5"
                    title="Mindestens 5 Zeichen." required="required"></textarea>
        </div>
        <input type="hidden" id="sesskey" name="sesskey" value="">
        <script>document.getElementById("sesskey").value = M.cfg.sesskey;</script>
        {recaptcha}
    </fieldset>
    <div>
        <input type="submit" name="submit" id="submit" value="Absenden">
    </div>
</form>';
$string['formsupport'] = '<form action="{wwwroot}/local/contact/index.php" method="post" class="cf support-request">
    <fieldset>
        <div class="form-group">
            <label for="name" id="namelabel" class="d-block">Ihr Name <strong class="required">(notwendig)</strong></label>
            <input id="name" name="name" type="text" size="57" maxlength="45" pattern="[A-zÀ-ž]([A-zÀ-ž\\s]){2,}"
                    title="Minimum 3 letters/spaces." required="required" {readonly}{ifloggedin} disabled{/ifloggedin} value="{fullname}">
        </div>
        <div class="form-group">
            <label for="email" id="emaillabel" class="d-block">E-Mail-Adresse <strong class="required">(notwendig)</strong></label>
            <input id="email" name="email" type="email" size="57" maxlength="60" required="required" {readonly}{ifloggedin} disabled{/ifloggedin} value="{email}">
        </div>
        <div class="form-group">
            <label for="subject" id="subjectlabel" class="d-block">Betreff <strong class="required">(notwendig)</strong></label>
            <select id="subject" name="subject" required="required">
                <option label="Wählen Sie einen Betreff"></option>
                <option>Ich kann mein Kennwort nicht ändern</option>
                <option>Ich kann mich nicht anmelden</option>
                <option value="Suggestion">Ich habe einen Vorschlag</option>
                <option value="Error message">Ich bekomme eine Fehlermeldung</option>
                <option value="System error">Etwas funktioniert nicht so wie erwartet</option>
                <option value="Course">Ich habe Schwierigkeiten, auf einen Kurs bzw. auf Kursinhalte zuzugreifen</option>
                <option value="Other reason">Andere Gründe (bitte näher beschreiben)</option>
            </select>
        </div>
        <div class="form-group">
            <label for="specific_subject" id="specifylabel" class="d-block">Nähere Angaben zum Problem oder Kursname&nbsp;<strong class="required">(notwendig)</strong></label>
            <input type="text" id="specific_subject" name="specific_subject" size="57" maxlength="80" required="required">
        </div>
        <div class="form-group">
            <label for="url" id="urllabel" class="d-block">URL angeben address</label>
            <input type="url" id="url" name="url" size="57" maxlength="80" value="{referer}">
        </div>
        <div class="form-group">
            <label for="description" id="descriptionlabel" class="d-block">Beschreibung und Details zum Reproduzieren des Problems&nbsp;<strong class="required">(notwendig)</strong></label>
            <textarea id="description" name="description" rows="5" cols="58" minlength="5"
                    title="Mindestens 5 Zeichen." required="required"></textarea>
        </div>
        <input type="hidden" id="sesskey" name="sesskey" value="">
        <script>document.getElementById("sesskey").value = M.cfg.sesskey;</script>
        {recaptcha}
    </fieldset>
    <div>
        <input type="submit" name="submit" id="submit" value="Anfrage absenden">
    </div>
</form>';
$string['globaltagcontentdesc'] = 'Dies ist der Inhalt, den Ihr globales Tag ersetzen wird. Beispiel: Wenn Ihr Tag "{global_address}" heißt, wird dieses Tag durch den in diesem Feld eingegebenen Inhalt ersetzt.';
$string['globaltagcontenttitle'] = 'Inhalt';
$string['globaltagcount'] = 'Anzahl der globalen Tags';
$string['globaltagcountdesc'] = 'Legen Sie die Anzahl von Tags fest, die Sie definieren möchten. Für eine höhere Systemleistung wählen Sie nur eine Anzahl, die Sie wirklich brauchen.';
$string['globaltagheadingdesc'] = 'Legen Sie eigene globale Tags fest, manchmal auch globale Blocks genannt.';
$string['globaltagheadingtitle'] = 'Nutzerdefinierte globale Tags';
$string['globaltagnamedesc'] = 'Dies wird Namensteil Ihres Tags mit dem Präfix „global_“. Beispiel: Wenn Sie hier "Adresse" eingeben, heißt Ihr Tag {global_address}". Es darf nur eine einzelne Buchstabenfolge sein, Leerzeichen, Zahlen oder Sonderzeichen sind nicht zulässig.';
$string['globaltagnametitle'] = 'Tag: global_';
$string['hidecompletedcourses'] = 'Abgeschlossene Kurse verbergen';
$string['hidecompletedcourses_desc'] = 'Aktivieren Sie diese Einstellung, um die abgeschlossenen Kurse in der Liste "{mycoursesmenu} Tag" auszufiltern.';
$string['ifprofilefiedonlyvisible'] = '{ifprofile_field_} nur sichtbar.';
$string['ifprofilefiedonlyvisible_desc'] = 'Wenn diese Option aktiviert ist, schränken Sie das Tag {ifprofile_field_...} so ein, dass nur auf sichtbare Nutzerprofilfelder zugegriffen wird. Verborgene Felder verhalten sich so, als ob die Felder leer wären. Wenn diese Option deaktiviert ist, kann dieses Tag auch verborgene Profilfelder überprüfen.';
$string['narrowpage'] = 'Schmale Seite';
$string['narrowpage_desc'] = 'Aktivieren Sie diese Option, um die Anzeige von Informationen zu optimieren, wenn Moodle ein Design mit eingeschränkter Seitenbreite verwendet (z.B. Boost in Moodle 4.0).';
$string['pagebuilder'] = 'Seitenersteller';
$string['pagebuilderlink'] = 'https://www.layoutit.com/build';
$string['photoeditor'] = 'Fotoeditor';
$string['photoeditorlink'] = 'https://pixlr.com/editor/';
$string['pluginname'] = 'Filtercodes';
$string['privacy:metadata'] = 'Das Plugin Filtercodes speichert keine personenbezogenen Daten.';
$string['screenrec'] = 'Screenrecorder';
$string['screenreclink'] = 'https://screenapp.io/#/recording';
$string['showhiddenprofilefields'] = 'Verborgene Profilfelder anzeigen';
$string['showhiddenprofilefields_desc'] = 'Die Option aktiviert das Tag {profile_field_...}, um alle Profilfelder zu verarbeiten, einschließlich derer, die für die Person verborgen sind.';
$string['sizeb'] = 'B';
$string['sizeeb'] = 'EB';
$string['sizegb'] = 'GB';
$string['sizekb'] = 'KB';
$string['sizemb'] = 'MB';
$string['sizetb'] = 'TB';
$string['sizeyb'] = 'YB';
$string['sizezb'] = 'ZB';
$string['teamcardsformat'] = 'Teamkartenformat';
$string['teamcardsformat_desc'] = 'Wählen Sie aus, wie die Teammitglieder im {teamcards}-Tag angezeigt werden.<br>
<ul>
<li>Keine: Zeigt nur das Bild und den Namen als Karte ohne die Nutzerbeschreibung an.</li>
<li>Symbol: Genauso wie keines, außer dass die Nutzerbeschreibung in einen Info-Popup angezeigt wird.</li>
<li>Knapp: Genauso wie keines, aber die Beschreibung wird unter dem Nutzerbild und dem Namen angezeigt.</li>
<li>Ausführlich: Listenformat. Empfohlen, wenn Ihre Teammitglieder dazu neigen, lange Nutzerbeschreibungen zu haben.</li>
</ul>';
$string['teamcardslinktype'] = 'Linktyp für Teams';
$string['teamcardslinktype_desc'] = 'Wählen Sie den Linktyp für Teammitglieder im Tag {teamcards} aus. Hinweis: Das Foto wird automatisch mit dem Profil verknüpft, wenn eine Person angemeldet ist, unabhängig von Ihrer Auswahl.';
$string['verbose'] = 'Ausführlich';
