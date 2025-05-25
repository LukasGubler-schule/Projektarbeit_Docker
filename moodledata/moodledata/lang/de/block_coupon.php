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
 * Strings for component 'block_coupon', language 'de', version '4.5'.
 *
 * @package     block_coupon
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:coupon:delete'] = 'Gutschein löschen';
$string['action:coupon:delete:confirm'] = 'Diesen Gutschein löschen? Vorgang kann nicht rückgängig gemacht werden!';
$string['action:coursegrouping:delete'] = 'Gruppierung löschen';
$string['action:coursegrouping:details'] = 'Gruppierungsdetails anzeigen';
$string['action:coursegrouping:edit'] = 'Gruppierung bearbeiten';
$string['action:error:delete'] = 'Fehler löschen';
$string['and'] = 'und';
$string['batchidselect'] = 'Stapel ID';
$string['blockname'] = 'Gutschein';
$string['button:continue'] = 'Weiter';
$string['button:next'] = 'Weiter';
$string['button:save'] = 'Gutscheine erstellen';
$string['button:submit_coupon_code'] = 'Gutschein einlösen';
$string['choose:courses:explain'] = 'Wählen Sie die Kurse aus, für die Sie sich anmelden möchten.<br/>
Mit diesem Coupon können Sie max. {$a->maxamount} Kurs(e) auswählen.';
$string['cleanup:confirm:confirmmessage'] = 'Ja, ich möchte alle Gutscheine mit diesen Optionen löschen';
$string['cleanup:confirm:header'] = 'Bestätigen Sie bitte die folgenden Aufräumaktionen';
$string['clientref'] = 'Kundenreferenz';
$string['cohort'] = 'Globale Gruppe';
$string['confirm_coupons_sent_body'] = 'Hallo,<br /><br />

wir haben die Gutscheine, die Sie am {$a->timecreated} erstellt haben, versendet.<br /><br />

Mit freundlichen Grüßen,<br /><br />

Moodle Administration';
$string['confirm_coupons_sent_subject'] = 'Alle Gutscheine wurden versendet.';
$string['coupon:addinstance'] = 'Neuen Gutschein-Block einfügen';
$string['coupon:administration'] = 'Einstellungen des Gutschein-Blocks ändern';
$string['coupon:claim:wronguser'] = 'Dieser Coupon ist personalisiert und kann <i>nicht</i> von Ihnen beansprucht werden.';
$string['coupon:cleanup:heading'] = 'Coupons aufräumen';
$string['coupon:cleanup:info'] = 'Nutzen Sie dieses Formular, um Coupons vom System zu löschen.<br/>
<b>Warnung:</b> Dieser Prozess <i>entfernt</i> Gutscheine aus dem System. Nach dem Löschen gibt es keine Möglichkeit, sie wiederherzustellen..';
$string['coupon:coursegrouping:heading'] = 'Gruppierung konfigurieren';
$string['coupon:deleted'] = 'Der Gutschein wurde gelöscht.';
$string['coupon:extendenrol'] = 'Einschreibe-Erweiterungs Gutschein';
$string['coupon:extendenrolments'] = 'Erzeugen Sie Gutscheine um Kurs-Einschreibungen zu erweitern';
$string['coupon:extenrol:summary'] = 'Gutschein Typ: {$a->coupontype}<br/>
Anzahl Gutscheine die Sie erzeugen möchten: {$a->amount}<br/>
Gutschein Hintergrund (Bild): {$a->logo}<br/>
Gutscheine erzeugt von: {$a->owner}<br/>
Ausgewählte(r) Kurs(e): {$a->courses}<br/>
Erweiterungs-Zeitraum {$a->duration}<br/>
Gutscheine senden über: {$a->senddate}<br/>
Gutrscheine senden an {$a->recipient}<br/><br/>
Email-Nachricht: {$a->emailbody}<br/>';
$string['coupon:generatecoupons'] = 'Neuen Gutschein erstellen';
$string['coupon:inputcoupons'] = 'Mit einem Gutschein einschreiben';
$string['coupon:myaddinstance'] = 'Neuen Gutschein-Block in Dashboard einfügen';
$string['coupon:send:fail'] = 'E-Mail-Versand fehlgeschlagen! Fehlermeldung: {$a}';
$string['coupon:senddate:instant'] = 'Sofort';
$string['coupon:timeframe'] = 'Typ';
$string['coupon:type'] = 'Typ';
$string['coupon:type:all'] = 'Alle';
$string['coupon:type:cohort'] = 'Gruppen- (Kohorten-) Einschreibung';
$string['coupon:type:course'] = 'Kurseinschreibung';
$string['coupon:type:coursegrouping'] = 'Gruppierungseinschreibung';
$string['coupon:type:enrolext'] = 'Einschreibungserweiterung';
$string['coupon:used'] = 'Entfernen';
$string['coupon:used:all'] = 'Alle Gutscheine';
$string['coupon:used:no'] = 'Nur ungenutzte Gutscheine';
$string['coupon:used:yes'] = 'Nur verwendete Gutscheine';
$string['coupon:user:heading'] = 'Nutzerkonfiguration für {$a->firstname} {$a->lastname}';
$string['coupon:user:info'] = 'Nutzen Sie das Formular, um die Optionen und zugreifbaren Kurse zu wählen, für die diese Person Gutscheine beantragen kann.';
$string['coupon:viewallreports'] = 'Gutscheinberichte anzeigen (für alle Gutscheine)';
$string['coupon:viewreports'] = 'Gutscheinberichte anzeigen (nur meine Gutscheine)';
$string['coupon_mail_content'] = '<p>Hallo {$a->fullname},</p>
<p>Sie erhalten diese Nachricht, weil für Sie neue Gutscheine erzeugt wurden.<br/>
Die Gutscheine stehen im Qnline-Lernsystem zum Download bereit.<br /><br />
Klicken Sie bitte auf {$a->downloadlink}, um die Gutscheine zu erhalten</p>
<p>Mit freundlichen Grüßen,<br /><br />
{$a->from_name}</p>';
$string['coupon_mail_csv_content'] = 'Hallo ##to_gender## ##to_name##,<br /><br />

Sie sind in unserem Kurs ##course_fullnames## eingeschrieben.
Während des Kurses haben Sie Zugriff auf unser online Lernsystem : ##site_name##.<br /><br />

In diesem Lernsystem bekommen Sie, abgesehen von Kursunterlagen, auch Möglichkeiten, sich mit anderen Teilnehmern zu vernetzen.
Der Kurs fängt mit vorbereitenden Aufgaben an. Wir bitten Sie, diese Aufgaben spätestens 3 Arbeitstage vor dem Kursanfang genauer anzuschauen.
So können Sie und der Dozent / die Dozentin sich ordentlich auf den Kurs vorbereiten.<br /><br />

Alle Kursunterlagen werden Ihnen spätestens 4 Tage vor dem Kursanfang zur Verfügung stehen.
Möglicherweise fügt der Dozent / die Dozentin später weitere Unterlagen hinzu, z.B. nach einer Präsenzeinheit. In einem solchen Fall werden Sie die Unterlagen auch hier im Lernsystem wiederfinden.
Während den Treffen werden keine Papierunterlagen verteilt. Wir empfehlen, ein Laptop oder Tablet mitzubringen. <br /><br />

Der Gutschein für den Kurs ist als Anhang angefügt. Dieser Gutschein ist persönlich und einmalig. Er verleiht Ihnen Zugang zu den passenden Kursen für Ihre Ausbildung.
Lesen Sie die Anweisungen auf dem Gutschein bitte sorgfältig.<br /><br />

Sollten Sie noch Fragen haben über das Anmelden oder über sonstige Probleme, können Sie unseren Helpdesk kontaktieren.
Informationen dazu finden Sie in unserem Lernsystem.
Wenn unser Helpdesk nicht besetzt sein sollte, bitten wir Sie, Ihren Namen, Mailadresse und Telefonnummer anzugeben. Wir werden uns dann so schnell wie möglich melden.<br /><br />

Viel Erfolg mit dem Kurs.<br /><br />

Mit freundlichen Grüßen,<br /><br />

##site_name##';
$string['coupon_mail_csv_content_cohorts'] = 'Hallo ##to_gender## ##to_name##,<br /><br />

Sie sind in unserem Kurs ##course_fullnames## eingeschrieben.
Während des Kurses haben Sie Zugriff auf unser online Lernsystem : ##site_name##.<br /><br />

In diesem Lernsystem bekommen SIe, abgesehen von Kursunterlagen, auch Möglichkeiten, sich mit anderen Teilnehmern zu vernetzen.
Der Kurs fängt mit vorbereitenden Aufgaben an. Wir bitten Sie, diese Aufgaben spätestens 3 Arbeitstage vor dem Kursanfang genauer anzuschauen.
So können Sie und der Dozent / die Dozentin sich ordentlich auf den Kurs vorbereiten.<br /><br />

Alle Kursunterlagen werden Ihnen spätestens 4 Tage vor dem Kursanfang zur Verfügung stehen.
Möglicherweise fügt der Dozent / die Dozentin später weitere Unterlagen hinzu, z.B. nach einer Präsenzeinheit. In einem solchen Fall werden Sie die Unterlagen auch hier im Lernsystem wiederfinden.
Während den Treffen werden keine Papierunterlagen verteilt. Wir empfehlen, ein Laptop oder Tablet mitzubringen. <br /><br />

Der Gutschein für den Kurs ist als Anhang angefügt. Dieser Gutschein ist persönlich und einmalig. Er verleiht Ihnen Zugang zu den passenden Kursen für Ihre Ausbildung.
Lesen Sie die Anweisungen auf dem Gutschein bitte sorgfältig.<br /><br />

Sollten Sie noch Fragen haben über das Anmelden oder über sonstige Probleme, können Sie unseren Helpdesk kontaktieren.
Informationen dazu finden Sie in unserem Lernsystem.
Wenn unser Helpdesk nicht besetzt sein sollte, bitten wir Sie, Ihren Namen, Mailadresse und Telefonnummer anzugeben. Wir werden uns dann so schnell wie möglich melden.<br /><br />

Viel Erfolg mit dem Kurs.<br /><br />

Mit freundlichen Grüßen,<br /><br />

##site_name##';
$string['coupon_mail_extend_content'] = 'Liebe(r) ##to_gender## ##to_name##,<br /><br />

Sie wurden für unseren Trainingskurs ##course_fullnames## eingeschrieben oder es wurde Ihnen einen Erweiterung gewährt.
Sie haben bereits Zugriff auf unsere Online Trainingsumgebung: ##site_name##.<br /><br />
Ihre Erweiterung ist ##extensionperiod##.<br /><br />

Sie finden den Gutschein für die Kursverlängerung anbei. Dieser Gutschein ist für Sie personalisiert und nur für den angegebenen Kurs gültig.
Bitte beachten Sie die Informationen und Anleitungen auf dem Gutschein sorgfältig.<br /><br />

Wenn Sie Fragen haben, kontaktieren Sie bitte den Help-Desk.
Weitere Infos finden Sie auf der Lernumgebung. Wenn niemand verfügbar ist um Ihnen zu helfen, hinterlassen Sie bitte Ihren Namen, email und Telefonnummer, damit wir Sie erreichen können. Wir melden uns so schnell wie möglich.<br /><br />

Mit freundlichen Grüßen<br /><br />

##site_name##';
$string['coupon_mail_subject'] = 'Ein Moodle Gutschein wurde erstellt';
$string['coupon_notification_content'] = '<p>Die angeforderten Gutscheine wurden erzeugt. <br/>
Prüfen Sie Ihren E-Mail-Eingang, dort sollte sich ein Link für den Download der Gutscheine finden.<br/>
Sie können Ihre Gutscheine auch direkt über {$a->downloadlink} herunterladen.</p>';
$string['coupon_notification_subject'] = 'Gutscheine erzeugt';
$string['coupon_recipients_desc'] = 'Die folgenden Spalten müssen in der hochgeladenen CSV-Datei vorhanden sein (die Reihenfolge ist nicht wichtig): E-Mail, Geschlecht, Name.<br/>
Für jede Person in der CSV, wird ein Gutschein erstellt und dem Teilnehmer zugeschickt.<br/>
Beachten Sie, dass diese Gutscheine von einem Hintergrundprogramm asynchron erstellt werden. Sie werden  <i>nicht</i> sofort verfügbar sein.
Der Grund dafür ist, dass die Erstellung von Gutscheinen lange dauern kann, besonders wenn mehrere Gutscheine für mehrere Teilnehmer erstellt werden sollen.';
$string['coupons:cleaned'] = 'Es wurden {$a} Gutscheine gelöscht / entfernt.';
$string['coupons_generated'] = '<p>Ihre Gutscheine wurden erzeugt.<br/>
Sie sollten eine e-mail erhalten haben, in der sich ein Link zum Download der Gutscheine findet.<br/>
Sie können die Gutscheine auch direkt hier herunterladen, indem Sie auf den Link klicken:{$a}.</p>';
$string['coupons_generated_codes_only'] = '<p>Ihre Gutscheine wurden erzeugt.<br/>
Da Sie nur Codes erzeugen wollten, erhalten Sie KEINE e-mail<br/>
Sie finden Ihre Gutschein Codes in der Übersicht für ungenutzte Gutscheine. Nutzen Sie die Stapel ID (batch ID) Um Ihre erzeugten Codes für diesen Stapel zu filtern und herunterzuladen.</p>';
$string['coupons_ready_to_send'] = 'Ihre Gutscheine wurden erstellt und werden am eingestellten Datum versendet.<br /> Wenn alle Gutscheine verschickt wurden, werden Sie eine Bestätigung per E-Mail bekommen.';
$string['coupons_sent'] = 'Ihre Gutscheine wurden erstellt. Eine E-Mail mit den Gutscheinen im Anhang ist unterwegs zu Ihnen.';
$string['course'] = 'Kurs';
$string['coursegrouping'] = 'Kursgruppierung';
$string['coursegrouping-details'] = 'Kursgruppierungsdetails';
$string['crcohorts'] = 'Auswählbare globale Gruppen';
$string['crcohorts_help'] = 'Wählen Sie die globalen Gruppen aus, für die eine Person Gutscheine anfordern kann.<br/>
Beachten Sie bitte, was hier konfiguriert wird! Das Festlegen von globalen Gruppen bedeutet, dass die Person das Erzeugen von Gutscheinen für globale Gruppen anfordern kann.<br/>';
$string['days_access'] = '{$a} Tage';
$string['default-coupon-page-template-botleft'] = '<ol>
<li>Melden Sie sich an bei {site_url}</li>
<li>Sie werden eine E-Mail mit einem Aktivierungslink bekommen. Folgen Sie diesen Link um Ihren Zugang zu aktivieren. </li>
<li>Geben Sie die Nummer des Gutscheins im Block "Gutschein" ein.</li>
<li>Viel Vergnügen!</li>
</ol>';
$string['default-coupon-page-template-botright'] = '<ol>
<li>Melden Sie sich an bei {site_url}</li>
<li>Geben Sie die Nummer des Gutscheins im Block "Gutschein" ein.</li>
<li>Viel Vergnügen!</li>
</ol>';
$string['default-coupon-page-template-main'] = 'Mit diesem Gutschein können Sie Zugang zu den folgenden E-Learning-Modulen bekommen:<br/>
{courses} ({role})<br/><br/>
SIe haben {accesstime} Zugang zu diesem Modul.<br/><br/>
Aktivieren Sie den Zugang mit dem nachstehenden Code.<br/>
{coupon_code}';
$string['delete:coursegrouping:confirmmessage'] = 'Ich möchte diese Kursgruppierung löschen.';
$string['delete:coursegrouping:header'] = 'Löschen der Kursgruppierung bestätigen';
$string['delete:coursegrouping:successmsg'] = 'Kursgruppierung erfolgreich gelöscht';
$string['delete:request:confirmmessage'] = 'Ich möchte diese Anforderung löschen.';
$string['delete:request:description'] = 'todo: sollte renderfähig / vorlagenbasiert sein';
$string['delete:request:header'] = 'Meine Gutscheinanforderung löschen';
$string['delete:request:title'] = 'Meine Gutscheinanforderung löschen';
$string['delete:requestuser:confirmmessage'] = 'Ja, ich möchte diese Person löschen';
$string['delete:requestuser:description'] = 'Dies enfernt die Möglichkeit Gutscheine anzufordern für den Nutzer <b>{$a->firstname} {$a->lastname}</b>.<br/>
Dieser Schritt kann nicht wiederrufen werden, aber Sie können diesen Nutzer später von Neuem zu der Gruppe der autorisierten Nutzer hinzufügen';
$string['delete:requestuser:header'] = 'Nutzer/in von Gutschein-Anforderung entfernen';
$string['download-sample-csv'] = 'Beispieldatei (CSV) herunterladen';
$string['downloadcoupons:buttontext'] = 'Klicken Sie hier um den Download zu starten';
$string['downloadcoupons:text'] = '<div>Klicken Sie auf den Link, um Ihre Gutscheine herunterzuladen. <br/>
Beachten Sie bitte, dass Sie diese Gutscheine nur <i>einmal</i> herunterladen können. Nach dem Herunterladen wird die entsprechende Datei gelöscht.<br/>
{$a}
</div>';
$string['enrolperiod:extension'] = 'Für die Dauer von {$a}';
$string['enrolperiod:indefinite'] = '<i>unbegrenzt</i>';
$string['err:batchid'] = 'Dieser Batch Name existiert bereits. Bitte vergeben Sie einen anderen Namen oder lassen Sie das Feld leer.';
$string['err:choose:atleastone'] = 'Wählen Sie bitte einen Kurs';
$string['err:choose:maxamount'] = 'Sie können insgesamt {$a} Kurs(e) auswählen';
$string['err:codesize:left'] = 'Code-Größen-Fehler: Für {$a->want} Gutscheine von {$a->size} Zeichenstellen haben wir {$a->left} Slots übrig (gemäß der derzeitigen Anzahl von Zeichenstellen für die Gutschein-Codes)';
$string['err:coupon:generic'] = 'Da ist etwas schief gegangen. Wenden Sie sich bitte an den Administrator.';
$string['err:download-not-exists'] = 'Die Datei die Sie herunterladen wollen, existiert nicht mehr.<br/>
Wahrscheinlich hatten Sie diese Datei bereits heruntergeladen.<br/>
Wenn Sie absolut sicher sind, dass Sie selbst die Datei noch <i>nicht</i> heruntergeladen haben, kontaktieren Sie den System Administrator.';
$string['err:myrequests:finalized'] = 'Diese Gutscheinanfrage wurde bereits abgeschlossen.';
$string['err:not-a-requestuser'] = 'Sie haben kein Recht, um auf diese Seite zuzugreifen.';
$string['err:tab:enablemycouponsforru'] = '"Meine Gutscheine" ist nicht für die Anzeige aktiviert.';
$string['err:tab:enablemyprogressforru'] = '"Mein Fortschritt" aktivieren';
$string['error:already-enrolled-in-cohorts'] = 'Sie sind bereits in allen globalen Gruppen eingeschrieben.';
$string['error:already-enrolled-in-courses'] = 'Sie sind bereits in allen Kursen eingeschrieben.';
$string['error:alternative_email_invalid'] = 'Wenn Sie \'andere E-Mail-Adresse verwenden\' ausgewählt haben, sollte dieses Feld eine gültige Mailadresse enthalten.';
$string['error:alternative_email_required'] = 'Wenn Sie \'andere E-Mail-Adresse verwenden\' ausgewählt haben, ist dieses Feld ein Pflichtfeld.';
$string['error:cohort_sync'] = 'Fehler beim Synchronisieren der globalen Gruppen. Wenden Sie sich bitte an den Support.';
$string['error:coupon:generator'] = 'Fehler beim Generieren aufgetreten:<br/>{$a}';
$string['error:coupon_already_used'] = 'Der Gutschein mit dieser Nummer wurde bereits verwendet.';
$string['error:coupon_amount-recipients-both-set'] = 'Geben Sie bitte die Anzahl Gutscheine an, die erstellt werden sollen, ODER wählen Sie eine CSV-Liste mit Adressaten aus.';
$string['error:coupon_amount-recipients-both-unset'] = 'Dieses Feld oder das Feld Adressaten muss besetzt sein.';
$string['error:coupon_amount_too_high'] = 'Geben Sie bitte eine Menge zwischen {$a->min} und {$a->max} an.';
$string['error:coupon_reserved'] = 'Der Gutschein mit dieser Nummer wurde für einen anderen Teilnehmer ausgestellt.';
$string['error:course-coupons-not-copied'] = 'Das Kopieren der Gutschein-Kurse in die neue Tabelle coupon_courses ist fehlgeschlagen. Bitte kontaktieren Sie den Support.';
$string['error:course-not-found'] = 'Der Kurs ist nicht vorhanden.';
$string['error:grouping-not-found'] = 'Gruppierung nicht gefunden';
$string['error:invalid_coupon_code'] = 'Sie haben eine ungültige Gutschein-Nummer eingegeben.';
$string['error:invalid_email'] = 'Geben Sie bitte eine gültige E-Mail-Adresse ein.';
$string['error:missing_cohort'] = 'Die globale Gruppe, die mit diesem Gutschein verknüpft ist, existiert nicht mehr. Wenden Sie sich bitte an den Support.';
$string['error:missing_course'] = 'Der Kurs, der mit diesem Gutschein verknüpft ist, existiert nicht mehr. Wenden Sie sich bitte an den Support.';
$string['error:missing_group'] = 'Die Gruppen, die mit diesem Gutschein verknüpft ist, existieren nicht mehr. Wenden Sie sich bitte an den Support.';
$string['error:moodledata_not_writable'] = 'In das Verzeichnis moodledata/coupon_logos haben Sie keine Schreibrechte. Dieses Recht muss Ihnen erst gewährt werden.';
$string['error:myrequests:user'] = 'Sie können diese Anforderung nicht für jemand anders ausführen.';
$string['error:no-more-course-choices'] = 'Sie haben keine Kurse mehr zur Auswahl.<br/>
Anscheinend sind Sie bereits in allen Kursen eingeschrieben, für die dieser Coupon gültig ist.<br/>
<br/>Wenn Sie der Meinung sind, dass dies nicht korrekt ist, wenden Sie sich bitte an den Systemadministrator.';
$string['error:no_coupons_submitted'] = 'Keiner Ihrer Gutscheine wurde bis jetzt eingelöst.';
$string['error:nopermission'] = 'Für diesen Vorgang haben Sie keine Berechtigung.';
$string['error:numeric_only'] = 'Dieses Feld muss mit einer Zahl besetzt werden.';
$string['error:plugin_disabled'] = 'Das cohort_sync Plugin wurde abgeschaltet. Bitte kontaktieren Sie den Support.';
$string['error:recipients-columns-missing'] = 'Die Datei konnte nicht geprüft werden. Sind Sie sicher, dass die richtigen Spalten und Trennzeichen eingegeben wurden?<br/>
Die folgenden Spalten <i>müssen</i> in der ersten Zeile mit exakt diesem Namen enthalten sein: {$a}';
$string['error:recipients-email-invalid'] = 'Die Mailadresse {$a->email} ist nicht gültig. Bitte in der CSV-Datei korrigieren.';
$string['error:recipients-empty'] = 'Bitte mindestens einen Teilnehmer eingeben.';
$string['error:recipients-extension'] = 'Es können nur CSV-Dateien hochgeladen werden.';
$string['error:recipients-invalid'] = 'Die Datei konnte nicht geprüft werden. Sind Sie sicher, dass die richtigen Spalten und Trennzeichen eingegeben wurden?';
$string['error:recipients-max-exceeded'] = 'Die CSV-Datei enthält mehr als die Höchstzahl von 10.000 Gutschein-Adressaten. Bitte kürzen Sie die Datei.';
$string['error:required'] = 'Dieses Feld darf nicht leer sein.';
$string['error:sessions-expired'] = 'Ihre Sitzung ist abgelaufen. Bitte erneut versuchen.';
$string['error:unable_to_enrol'] = 'Die Einschreibung in den neuen Kurs ist fehlgeschlagen. Bitte kontaktieren Sie den Support.';
$string['error:validate-courses'] = 'Fehler bei der Kursvalidierung:
{$a}';
$string['error:validate-groupings'] = 'Fehler bei der Gruppierungsvalidierung:
{$a}';
$string['error:wrong_code_length'] = 'Geben Sie eine Zahl zwischen 6 und 32 ein.';
$string['error:wrong_doc_page'] = 'Sie versuchen eine Seite zu erreichen, die nicht existiert.';
$string['error:wrong_image_size'] = 'Der hochgeladene Hintergrund hat nicht die vorgeschriebene Größe. Bitte laden Sie ein Bild hoch mit einem Seitenverhältnis von 210 mm zu 197 mm.';
$string['extendaccess'] = '{$a} extra';
$string['extendenrol:abort-no-users'] = 'Fehler: Es wurden keine Nutzer/innen gefunden, deren Einschreibung erweitert werden kann.<br/>
Entweder sind alle Nutzer/innen bereits unbefristet eingeschrieben oder der Kurs hat noch keine Nutzer/innen.';
$string['findcohortcourses:noselectionstring'] = 'Keine Auswahl getroffen';
$string['findcohorts:noselectionstring'] = 'Keine globale Gruppe ausgewählt';
$string['findcohorts:placeholder'] = '... Wählen Sie globale Gruppen aus ...';
$string['findcourses'] = 'Erlaubte Kurse';
$string['findcourses:noselectionstring'] = '... Keine Kurse ausgewählt ...';
$string['findcourses:placeholder'] = '... Wählen Sie Kurse aus ...';
$string['findcourses_help'] = 'Die hier ausgewählten / hinzugefügten Kurse sind die einzigen Kurse, für die der Benutzer Gutscheine erstellen kann. Bitte beachten Sie, dass Sie eine Auswahl treffen <i>müssen</i>. Es ist nicht möglich, dieses Feld leer zu lassen, so dass alle Kurse ausgewählt werden können.<br/>';
$string['findusers:noselectionstring'] = 'Keine Nutzer/innen ausgewählt';
$string['findusers:placeholder'] = '... Nutzer/innen auswählen ...';
$string['forcelogo_exp'] = '<i>Wenn die Logo-Nutzung für diesen Nutzer abgewählt wird, <b>müssen</b> Sie ein Standard Logo im Dropdown Menü auswählen, das dann für alle Gutscheine angewendet wird, die dieser Nutzer anfordert</i>';
$string['forcerole_exp'] = '<i>Wenn die Rollen-Auswahl für diesen Nutzer abgewählt wird, <b>müssen</b> Sie eine Standard Rolle im Dropdown Menü auswählen, die dann für alle Gutscheine angewendet wird, die dieser Nutzer anfordert</i>';
$string['generator:export:mail:body'] = 'Hallo {$a->fullname},<br /><br />
Sie erhalten diese Nachricht, weil neue Gutscheine erstellt wurden..<br/>
Die Gutscheine können hier heruntergeladen werden: {$a->downloadlink} (erfordert Login).<br />
Beachten Sie, dass dieser Link nur einmal verwendet werden kann. Nachdem Sie die Gutscheine heruntergeladen haben, kann dieser Link nicht mehr verwendet werden.<br />
Herzliche Grüße,<br /><br />
{$a->signoff}';
$string['generator:export:mail:subject'] = 'Gutscheine zum Download bereit';
$string['heading:administration'] = 'Bearbeiten';
$string['heading:amountForm'] = 'Mengen-Einstellungen';
$string['heading:cohortandvars'] = 'Wählen Sie Coupon-Variablen, Kohorte(n) und Kurseinschreibe-Variablen';
$string['heading:cohortlinkcourses'] = 'Kurse mit Kohorte(n) verknüpfen';
$string['heading:coupon_type'] = 'Art Gutschein';
$string['heading:courseandvars'] = 'Wählen Sie Gutscheinvariablen, Kurs(e) und Kurseinschreibungsvariablen';
$string['heading:coursegroupingandvars'] = 'Wählen Sie Gutscheinvariablen, Kursgruppierung und Einschreibungsvariablen aus';
$string['heading:coursegroups'] = 'Kursgruppen mit ausgewählten Kursen verbinden';
$string['heading:csvForm'] = 'CSV-Einstellungen';
$string['heading:general_settings'] = 'Letzte Einstellungen';
$string['heading:generatecoupons'] = 'Gutscheine erstellen';
$string['heading:generatormethod'] = 'Wählen Sie aus, wie Sie die Coupons erstellen möchten';
$string['heading:imageupload'] = 'Bild hochladen';
$string['heading:info'] = 'Info';
$string['heading:input_cohorts'] = 'Globale Gruppen (Kohorten) auswählen';
$string['heading:input_coupon'] = 'Gutschein eingeben';
$string['heading:input_course'] = 'Kurs(e) auswählen';
$string['heading:input_groups'] = 'Gruppen auswählen';
$string['heading:inputcoupons'] = 'Gutschein eingeben';
$string['heading:label_instructions'] = 'Anleitung';
$string['heading:manualForm'] = 'Manuelle Einstellungen';
$string['here'] = 'Hier';
$string['knowncourses'] = 'Bekannte Kurse';
$string['label:alternative_email'] = 'Andere Mailadresse';
$string['label:alternative_email_help'] = 'Für den Gutschein-Versand wird grundsätzlich diese Adresse verwendet, wenn \'Andere Mailadresse verwenden\' ausgewählt wurde.';
$string['label:api_enabled'] = 'API aktivieren';
$string['label:api_enabled_desc'] = 'Das Gutschein API ermöglicht die Erstellung von Gutscheinen über ein externes System.';
$string['label:api_password'] = 'API Passwort';
$string['label:api_password_desc'] = 'Das Passwort wird gebraucht, um mit Hilfe des API einen Gutschein zu erstellen.';
$string['label:api_user'] = 'API Benutzername';
$string['label:api_user_desc'] = 'Der API Benutzername wird gebraucht, um mit Hilfe des API einen Gutschein zu erstellen.';
$string['label:batchid'] = 'Batch Name';
$string['label:batchid_help'] = 'Sie können diesem Stapel (Batch) einen benutzerdefinierten Namen geben, damit er später identifiziert werden kann<br/>
Die Benennung eines Stapels hilft Ihnen später, eine Gruppe generierter Coupons zu identifizieren.<br/>
Wenn Sie keinen Stapelnamen angeben, wird dieser automatisch generiert';
$string['label:buttonclass'] = 'Schaltfläche/Link Klasse';
$string['label:buttonclass_desc'] = 'Wählen Sie die Schaltflächenklasse; dies wirkt sich auf die Art und Weise aus, wie Links angezeigt werden';
$string['label:cleanupage'] = 'Das höchste Alter?';
$string['label:cleanupage_help'] = 'Geben Sie das höchste Alter ein, das ein unbenutzter Gutschein erreichen darf, bevor er gelöscht wird.';
$string['label:cohort'] = 'Globale Gruppe';
$string['label:connected_courses'] = 'Verknüpfte(r) Kurs(e)';
$string['label:coupon_amount'] = 'Anzahl Gutscheine';
$string['label:coupon_amount_help'] = 'Die Anzahl Gutscheine, die erstellt werden sollen. Nutzen Sie ENTWEDER dieses Feld ODER das Feld Adressaten, nicht beide.';
$string['label:coupon_code'] = 'Gutschein-Kode';
$string['label:coupon_code_help'] = 'Der Gutschein-Kode ist der Kode, der den Gutschein eindeutig identifiziert. Sie finden ihn auf Ihren Gutschein.';
$string['label:coupon_code_length'] = 'Länge des Kodes';
$string['label:coupon_code_length_help'] = 'Zeichenanzahl (Stellen) des Gutscheincodes.';
$string['label:coupon_cohorts'] = 'Globale Gruppe(n)';
$string['label:coupon_cohorts_help'] = 'Wählen Sie eine globale Gruppe (oder mehrere) zu denen Ihre Teilnehmer gehören sollen.';
$string['label:coupon_connect_course'] = 'Kurs(e) hinzufügen';
$string['label:coupon_connect_course_help'] = 'Wählen Sie alle Kurse, die zu der globalen Gruppe gehören sollen.
    <br /><b><i>Beachte: </i></b>Alle Teilnehmer, die bereits zu dieser globalen Gruppe gehören, werden ebenfalls automatisch in die genannten Kurse eingeschrieben!';
$string['label:coupon_courses'] = 'Kurs(e)';
$string['label:coupon_courses_help'] = 'Wählen Sie alle Kurse in die Ihre Teilnehmer eingeschrieben werden sollen.';
$string['label:coupon_email'] = 'Mailadresse';
$string['label:coupon_email_help'] = 'Dies ist die Mailadresse, an die die Gutscheine geschickt werden.';
$string['label:coupon_groups'] = 'Guppe(n) hinzufügen';
$string['label:coupon_groups_help'] = 'Wählen Sie die Gruppen, zu denen Ihre Teilnehmer gehören sollen, wenn sie in die Kurse eingeschrieben werden.';
$string['label:coupon_recipients'] = 'Empfänger';
$string['label:coupon_recipients_help'] = 'Mit diesem Feld können Sie eine CSV-Datei mit Teilnehmerdaten hochladen.';
$string['label:coupon_recipients_txt'] = 'Empfänger';
$string['label:coupon_recipients_txt_help'] = 'In diesem Feld können Sie letzte Änderungen an der hochgeladenen CSV-Datei vornehmen.';
$string['label:coupon_role'] = 'Rolle';
$string['label:coupon_role_help'] = 'Wählen Sie die Rolle aus, für die Gutscheine konfiguriert werden. Wenn Sie das Feld leer lassen wird der konfigurierte Standard verwendet (normalerweise \'Student\').';
$string['label:coupon_type'] = 'Gutschein(e) erstellen für';
$string['label:coupon_type_help'] = 'Die Gutscheine werden entweder Zugang zu einem Kurs oder zu einer (oder mehrere) globalen Gruppe geben.';
$string['label:current_image'] = 'Aktueller Hintergrund für die Gutscheine';
$string['label:date_send_coupons'] = 'Versanddatum';
$string['label:date_send_coupons_help'] = 'Datum, an dem die Gutscheine an den oder die Empfänger geschickt werden.';
$string['label:defaultlogo'] = 'Standard Logo';
$string['label:defaultlogo_help'] = 'Wählen Sie das Logo aus, das auf allen Coupons für diesen Benutzer erzwungen werden soll';
$string['label:defaultrole'] = 'Standardrolle';
$string['label:defaultrole_help'] = 'Dies ist die Standardrolle, die Benutzern zugewiesen wird, wenn sie einen Gutschein einlösen';
$string['label:displayinputhelp'] = 'Hilfetext zur Gutschein-Eingabe anzeigen';
$string['label:displayinputhelp_help'] = 'Aktivieren Sie diese Option, um Endbenutzern einen Text über dem Gutschein-Eingabefeld anzuzeigen.';
$string['label:displayregisterhelp'] = 'Hilfetext zur Registrierung anzeigen';
$string['label:displayregisterhelp_help'] = 'Aktivieren Sie diese Option, um nicht registrierten Endbenutzern einen Registrierungshilfetext anzuzeigen.<br/>
Dadurch wird eine kurze Erklärung über dem Link im Block angezeigt, auf den Benutzer klicken können, um ein **neues** Konto mit einem Gutscheincode zu registrieren.';
$string['label:email_body'] = 'E-Mail-Mitteilung';
$string['label:email_body_help'] = 'Die E-Mail-Mitteilung, an die der Gutschein angehängt ist.';
$string['label:enablecleanup'] = 'Löschen von nicht eingelösten Gutscheinen zulassen?';
$string['label:enablecleanup_help'] = 'Wenn diese Option ausgewählt ist, können nicht eingelöste Gutscheine automatisch aus dem System gelöscht werden.';
$string['label:enablemycouponsforru'] = '"Meine Gutscheine" aktivieren';
$string['label:enablemycouponsforru_help'] = 'Diese Einstellung aktiviert / deaktiviert eine Tabelle, in der Personen die Gutscheine sowie deren Status (benutzt / unbenutzt) und andere Infos anzeigen können.';
$string['label:enablemyprogressforru'] = '"Meinen Fortschritt" aktivieren';
$string['label:enablemyprogressforru_help'] = 'Diese Einstellung aktiviert / deaktiviert einen Fortschrittsbericht für Personen, die Gutscheincodes anfordern, die ihnen gehören.';
$string['label:enrolment_period'] = 'Dauer der Einschreibung';
$string['label:enrolment_period_help'] = 'Dauer (in Tagen) bevor der Teilnehmer automatisch aus dem Kurs ausgeschrieben wird. Wenn 0 eingestellt ist, wird der Teilnehmer nie ausgeschrieben.';
$string['label:enrolment_perioddefault'] = 'Standard-Registrierungszeitraum';
$string['label:enter_coupon_code'] = 'Geben Sie hier Ihren Gutschein-Kode ein';
$string['label:extendperiod'] = 'Verlängerungszeitraum für die Einschreibung';
$string['label:extendperiod:desc'] = 'Konfigurieren Sie unten den optionalen Verlängerungszeitraum. Wenn <i>nicht</i> aktiviert oder auf 0 gesetzt, wird die Einschreibung unbefristet angelegt';
$string['label:extendusers:desc'] = 'Wählen Sie unten einen oder mehrere Nutzer aus.<br/>
Sie sehen nur Benutzer, die sich <i>manuell</i> angemeldet haben und für deren Anmeldungen ein Enddatum festgelegt wurde.';
$string['label:font'] = 'Schriftart für PDF';
$string['label:font_help'] = 'Wählen Sie die Schriftart aus, die beim Generieren des PDF verwendet werden soll. In den meisten Fällen sind die Standardeinstellungen ausreichend.<br/>
Wenn Sie eine spezielle Sprachunterstützung benötigen (Kyrillisch, Arabisch, Farsi usw.), möchten Sie möglicherweise eine andere Schriftart auswählen.';
$string['label:forceenableemailregistration'] = 'Aktivierung der Selbstregistrierung per E-Mail erzwingen';
$string['label:forceenableemailregistration_help'] = 'Wenn diese Option aktiviert ist, können sich Personen per E-Mail-Authentifizierung registrieren, auch wenn dies eigentlich als Selbstregistrierungsmethode deaktiviert ist.';
$string['label:forcelogo'] = 'Erzwungenes Logo';
$string['label:forcelogo_help'] = 'Wählen Sie das Logo aus, das auf allen Coupons für diesen Benutzer erzwungen werden soll';
$string['label:forcerole'] = 'Erzwungene Rolle';
$string['label:forcerole_help'] = 'Wählen Sie die Rolle aus, die für alle Coupons für diesen Benutzer erzwungen wird';
$string['label:generate_pdfs'] = 'Erstelle getrennte PDF-Dateien';
$string['label:generate_pdfs_help'] = 'Hier kann eingegeben werden, ob alle Gutscheine in einer einzigen PDF-Datei, oder ob jeder Gutschein in eine getrennte PDF-Datei gedruckt wird.';
$string['label:generatecodesonly'] = 'Nur Codes generieren (kein PDF)';
$string['label:generatecodesonly_help'] = 'Wenn Sie diese Option aktivieren, werden nur Codes generiert.<br/>
In diesem Falle entfällt die komplette Mailing-Möglichkeit und das Erstellen von PDFs!';
$string['label:groupingselectactiveonly'] = 'Nur aktive Einschreibungen?';
$string['label:groupingselectactiveonly_help'] = 'Wenn nicht aktiviert, werden alle Kurse auf Anmeldungen geprüft, einschließlich aktiver.<br/>
Das bedeutet, dass auch inaktive / abgelaufene Anmeldungen auf die Kurse angerechnet werden, für die die Person, der den Coupon einlöst, angemeldet ist.<br/>
Alle Kurse, die die Person auswählen kann, werden für Kurse vergütet, für die er oder sie bereits eingeschrieben ist.';
$string['label:image'] = 'Hintergrund für Gutscheine';
$string['label:image_desc'] = 'Der Hintergrund der erstellten Gutscheine';
$string['label:info_coupon_cohort_courses'] = 'Info auf der Seite: Kurse der globalen Gruppe';
$string['label:info_coupon_cohorts'] = 'Info auf der Seite: Wähle globale Gruppen';
$string['label:info_coupon_confirm'] = 'Info auf der Seite: Bestätige Gutschein';
$string['label:info_coupon_course'] = 'Info auf der Seite: Wähle Kurs';
$string['label:info_coupon_course_groups'] = 'Info auf der Seite: Wähle Gruppen für den Kurs';
$string['label:info_coupon_type'] = 'Info auf der Seite: Wähle Art Gutschein';
$string['label:info_desc'] = 'Informationen, die über dem Formular erscheinen.';
$string['label:info_imageupload'] = 'Info auf der Seite: Bild hochladen';
$string['label:logo'] = 'Gutschein-Logo/Hintergrund';
$string['label:mailusers'] = 'Gutscheine per E-Mail an ausgewählte Kursteilnehmer versenden.';
$string['label:max_coupons'] = 'Höchste Anzahl Gutscheine';
$string['label:max_coupons_desc'] = 'Höchste Anzahl Gutscheine, die in einem Arbeitsgang angelegt werden können.';
$string['label:no_courses_connected'] = 'Zu dieser globalen Gruppe wurden keine Kurse zugeordnet.';
$string['label:no_groups_selected'] = 'Zu diesen Kursen wurden keine Gruppen zugeordnet.';
$string['label:personalsendpdf'] = 'PDF mit personalisierten Coupons versenden?';
$string['label:personalsendpdf_help'] = 'Wenn aktiviert, wird das PDF beim Senden von Gutscheinen an persönliche Empfänger angehängt.<br/>
Beachten Sie, dass, wenn dies deaktiviert ist, die E-Mail für Empfänger von persönlichen Gutscheinen ein Gutscheincodefeld/eine Vorlagenvariable haben <i>sollte</i> .<br/>
Fehlt diese Template-Variable und wird kein PDF mitgeschickt, wüsste der Empfänger sonst nicht, welchen Gutscheincode er eingeben soll.';
$string['label:redirect_url'] = 'Weiterleiten an';
$string['label:redirect_url_help'] = 'Die Adresse, an die die Teilnehmer weitergeleitet werden, nachdem sie ihren Gutschein eingelöst haben.';
$string['label:renderqrcode'] = 'QR-Code verwenden?';
$string['label:renderqrcode_help'] = 'Aktivieren um QR-Codes in das generierte PDF einzufügen.';
$string['label:selected_cohort'] = 'Gewählte globale Gruppe(n)';
$string['label:selected_courses'] = 'Gewählte Kurse';
$string['label:selected_groups'] = 'Gewählte Gruppe(n)';
$string['label:seperatepersonalcoupontab'] = 'Separaten personalisierten Coupon-Tab hinzufügen?';
$string['label:seperatepersonalcoupontab_help'] = 'Wenn aktiviert, wird eine zusätzliche Registerkarte speziell für personalisierte Coupons zugefügt.<br/>
Natürlich sind die standardmäßigen Registerkarten für verwendete/nicht verwendete Gutscheine auf jeden Fall verfügbar und personalisierte Gutscheine werden immer auf diesen Registerkarten verfügbar sein.<br/>
Daher wirkt sich diese Einstellung nicht auf die standardmßigen Registerkarten für verwendete/nicht verwendete Coupons aus.';
$string['label:showform'] = 'Einstellungen';
$string['label:type_cohorts'] = 'Einschreibung in globale Gruppe(n)';
$string['label:type_course'] = 'Kurseinschreibung';
$string['label:type_coursegrouping'] = 'Kursgruppierung (wählen Sie X von Y Kursen aus, um sich anzumelden)';
$string['label:use_alternative_email'] = 'Andere Mailadresse verwenden';
$string['label:use_alternative_email_help'] = 'Wenn diese Option ausgewählt ist, werden Gutscheine an diese Adresse geschickt.';
$string['label:useloginlayoutonsignup'] = '"Login" Seitenlayout bei interner Anmeldung verwenden?';
$string['label:useloginlayoutonsignup_help'] = 'Wenn diese Option aktiviert ist, wird das Standardlayout der Anmeldeseite auf der internen Anmeldeseite verwendet.<br/>
Das bedeutet, dass auf der Anmeldeseite alle Kopf- und Fußzeilen entfernt werden und nur das Anmeldeformular selbst bereitgestellt wird.';
$string['label:users'] = 'Benutzer';
$string['logo:default'] = 'Standard-Logo';
$string['logo:none'] = 'Kein Logo';
$string['logomanager:desc'] = 'Verwenden Sie den Logomanager unten, um die Logos zu verwalten, die auf den Coupon-PDFs verwendet werden können.<br/>
Achten Sie darauf, welche Art von Bildern Sie hochladen!<br/>
Sie sollten nur Bilder mit 300 DPI im <b>A4-Format (2480 x 3508 Pixel) </b>verwenden.<br/>
<i>Alle</i> anderen Bildgrößen führen wahrscheinlich zu unerwünschten Nebeneffekten.';
$string['messageprovider:coupon_notification'] = '\'Coupons generiert\' Nachricht';
$string['messageprovider:coupon_task_notification'] = 'Versand-Benachrichtigung für persönliche Coupons';
$string['missing_config_info'] = 'Geben Sie hier ggf. zusätzliche Informationen ein - sie erscheinen in den globalen Einstellungen des Blocks.';
$string['numcourses'] = 'Maximale Anzahl an Kursen zur Auswahl';
$string['othersettings'] = 'Andere Einstellungen / Optionen';
$string['page:generate_coupon.php:title'] = 'Gutscheine erstellen';
$string['page:generate_coupon_step_five.php:title'] = 'Gutscheine erstellen';
$string['page:generate_coupon_step_four.php:title'] = 'Gutscheine erstellen';
$string['page:generate_coupon_step_three.php:title'] = 'Gutscheine erstellen';
$string['page:generate_coupon_step_two.php:title'] = 'Gutscheine erstellen';
$string['page:unused_coupons.php:title'] = 'Nicht eingelöste Gutscheine';
$string['pdf-meta:keywords'] = 'Moodle Gutschein';
$string['pdf-meta:subject'] = 'Moodle Gutschein';
$string['pdf-meta:title'] = 'Moodle Gutschein';
$string['pdf:titlename'] = 'Moodle Gutschein';
$string['pdf_generated'] = 'Die Gutscheine finden Sie als PDF-Dateien im Anhang.<br /><br />';
$string['pluginname'] = 'Gutschein';
$string['preview-pdf'] = 'Preview PDF';
$string['privacy:metadata:block_coupon'] = 'Der Coupon-Block speichert Coupon-/Gutscheincodes und verlinkt Benutzer, die ihn beansprucht haben';
$string['privacy:metadata:block_coupon:claimed'] = 'Ob der Gutschein beansprucht wurde oder nicht';
$string['privacy:metadata:block_coupon:email_body'] = 'Inhalt der E-Mail, mit der ggf. ein (persönlicher) Gutschein versendet wird';
$string['privacy:metadata:block_coupon:for_user_email'] = 'E-Mail-Adresse der Person, an die ggf. ein (persönlicher) Gutschein gesendet wird';
$string['privacy:metadata:block_coupon:for_user_gender'] = 'Geschlecht der Person, an die ggf. ein (persönlicher) Gutschein verschickt wird';
$string['privacy:metadata:block_coupon:for_user_name'] = 'Name der Person, an die ggf. ein (persönlicher) Gutschein verschickt wird';
$string['privacy:metadata:block_coupon:roleid'] = 'Rollen-ID des zugewiesenen Gutscheins';
$string['privacy:metadata:block_coupon:submission_code'] = 'Gutschein-Abo-Code';
$string['privacy:metadata:block_coupon:timecreated'] = 'Zeitpunkt, zu dem der Coupon erstellt wird';
$string['privacy:metadata:block_coupon:timeexpired'] = 'Ablaufdatum für den Gutschein';
$string['privacy:metadata:block_coupon:timemodified'] = 'Zeitpunkt, zu dem der Coupon geändert wird';
$string['privacy:metadata:block_coupon:userid'] = 'Der primäre Datenbankschlüssel des Moodle-Benutzers';
$string['promo'] = 'Gutschein Plugin für Moodle';
$string['promodesc'] = 'Dieses Plugin wurde von Sebsoft Managed Hosting & Software Development entwickelt
(<a href=\'http://www.sebsoft.nl/\' target=\'_new\'>http://sebsoft.nl</a>).<br /><br />
{$a}<br /><br />';
$string['recipient:none'] = 'Kein';
$string['recipient:selected:users'] = 'Ausgewählte Benutzer';
$string['remove-count'] = 'Dadurch werden <i>{$a}</i> Gutscheine entfernt';
$string['removecourse'] = 'Kurs \'{$a}\' aus Optionen entfernen';
$string['report:cohorts'] = 'Globale Gruppe';
$string['report:coupon_code'] = 'Gutschein-Kode';
$string['report:dateformat'] = '%d.%m.%Y %H:%M:%S';
$string['report:dateformatymd'] = '%d.%m.%Y';
$string['report:download-excel'] = 'Nicht eingelöste Gutscheine herunterladen';
$string['report:enrolperiod'] = 'Dauer der Einschreibung';
$string['report:for_user_email'] = 'Geplant für';
$string['report:for_user_name'] = 'Empfängername';
$string['report:heading:action'] = 'Vorgehen';
$string['report:heading:cohortname'] = 'Globale Gruppen (Kohorten)';
$string['report:heading:coupon'] = 'Gutschein';
$string['report:heading:couponcode'] = 'Benutzter Code';
$string['report:heading:coursename'] = 'Name des Kurses';
$string['report:heading:coursetype'] = 'Kurstyp';
$string['report:heading:datecomplete'] = 'Abschlussdatum';
$string['report:heading:datestart'] = 'Anfangsdatum';
$string['report:heading:errormessage'] = 'Fehler';
$string['report:heading:errortype'] = 'Typ';
$string['report:heading:grade'] = 'Note';
$string['report:heading:iserror'] = 'Ist Fehler?';
$string['report:heading:status'] = 'Status';
$string['report:heading:timecreated'] = 'Datum';
$string['report:heading:type'] = 'Type';
$string['report:heading:user'] = 'Nutzer(in)';
$string['report:immediately'] = 'Sofort';
$string['report:issend'] = 'Wurde Versendet';
$string['report:owner'] = 'Eigner';
$string['report:senddate'] = 'Versanddatum';
$string['report:status_completed'] = 'Kurs abgeschlossen';
$string['report:status_not_started'] = 'Kurs noch nicht angefangen';
$string['report:status_started'] = 'Kurs in Bearbeitung';
$string['report:timeexpired'] = 'Läuft ab';
$string['request:accept:content'] = '<p>Sehr geehrter {$a->fullname}</p>,
<p>Sie erhalten diese Nachricht, weil Ihre angeforderten Gutscheine generiert wurden.<br/>
Die Gutscheine stehen in der E-Learning-Umgebung zum Download zur Verfügung.<br /><br />
Bitte klicken Sie auf {$a->downloadlink}, um Ihre Coupons zu erhalten</p>{$a->custommessage}
<p>Mit freundlichen Grüßen<br /><br />
{$a->signoff}</p>';
$string['request:accept:custommessage'] = '<p>Die folgende Bemerkung wurde für Sie hinzugefügt: {$a}</p>';
$string['request:accept:heading'] = 'Diese Gutscheinanfrage annehmen';
$string['request:accept:subject'] = 'Gutscheinanfrage angenommen.';
$string['request:adduser:heading'] = 'Fügen Sie einen Benutzer hinzu, der Gutscheinanfragen stellen kann';
$string['request:adduser:info'] = 'Wählen Sie unten einen Benutzer aus, der Gutscheinanfragen stellen darf.<br/>
Sie können mit der Eingabe in die Auswahl unten beginnen, um Ihre Benutzersuche einzugrenzen.<br/>
Wenn Sie den Benutzer ausgewählt haben, klicken Sie bitte auf Weiter und Sie werden weitergeleitet, um die Einstellungen für diesen Benutzer weiter zu konfigurieren.';
$string['request:coupons'] = 'Gutscheine anfordern';
$string['request:deny:heading'] = 'Lehnen Sie diese Gutscheinanfrage ab';
$string['request:deny:subject'] = 'Gutscheinanforderung abgelehnt.';
$string['request:info'] = 'Anforderung für {$a->amount} Gutscheine';
$string['request:message'] = 'Benutzernachricht';
$string['request:sendmessage'] = 'Benutzer informieren?';
$string['requestusersettings'] = 'Nutzereinstellungen anfordern';
$string['requestusersettings_desc'] = 'Dieser Abschnitt enthält Optionen zum Einschränken der Nutzerschnittstellen für Gutscheinanfragen.<br/>
Diese Einstellungen wurden speziell eingeführt, um einzuschränken, welche Anfragen die Nutzer/innen sehen können.<br/>
Für die Einhaltung der DSGVO möchten Sie möglicherweise einige dieser Optionen deaktivieren.';
$string['required:atleastonecohortorcourse'] = 'Mindestens ein Kurs oder eine globale Gruppe ist notwendig!';
$string['select:logo'] = 'Vorlagenlogo auswählen';
$string['select:logo:desc'] = 'Wählen Sie ein Vorlagenlogo aus.<br/>Dieses wird nur verwendet, wenn ein PDF für die Gutscheine generiert wird.';
$string['showform-amount'] = 'Ich möchte eine beliebige Anzahl Gutscheine erstellen';
$string['showform-csv'] = 'Ich möchte Gutscheine erstellen für Adressaten in einer CSV-Liste';
$string['showform-manual'] = 'Ich möchte die Empfänger manuell konfigurieren';
$string['signup:login'] = 'Ich habe bereits ein Konto und möchte mich anmelden';
$string['signup:success'] = 'Sie haben sich angemeldet und werden nun auf die Anmeldeseite weitergeleitet.<br/>
Bitte bestätigen Sie nach dem Login, dass Sie tatsächlich Zugang zum Kurs erhalten haben.';
$string['str:coursegroupings:add'] = 'Kursgruppierung hinzufügen';
$string['str:inputhelp'] = 'Verwenden Sie das Eingabefeld unten, um Zugang zu Kursen zu erhalten, wenn Sie einen Gutscheincode erhalten haben';
$string['str:mandatory'] = 'Plicht';
$string['str:optional'] = 'Optional';
$string['str:request:add'] = 'Gutscheine anfordern';
$string['str:request:adduser'] = 'Benutzer hinzufügen';
$string['str:request:cohortcoupons'] = 'Gutscheine für globale Gruppen anfordern';
$string['str:request:coursecoupons'] = 'Gutscheine für Kurse anfordern';
$string['str:request:details'] = 'Meine Anfragedetails';
$string['str:signuphelp'] = 'Verwenden Sie den unten stehenden Link, um ein neues Konto <i>mit</i> einem Gutscheincode zu erstellen, wenn Sie den Gutschein-Code erhalten haben, aber noch kein aktives Konto besitzen';
$string['success:coupon_used'] = 'Der Gutschein ist eingelöst - Sie haben jetzt Zugriff auf den Kurs / die Kurse';
$string['success:uploadimage'] = 'Das neue Gutschein-Bild wurde hochgeladen.';
$string['tab:apidocs'] = 'API Dokumentation';
$string['tab:cleaner'] = 'Aufräumen';
$string['tab:cpmycoupons'] = 'Meine Gutscheine';
$string['tab:downloadbatchlist'] = 'Chargen- (Batch-) Archive';
$string['tab:errors'] = 'Fehlerberichte';
$string['tab:listrequests'] = 'Meine Anfragen';
$string['tab:maillog'] = 'E-Mail-Protokoll';
$string['tab:personalcoupons'] = 'Personalisierte Gutscheine';
$string['tab:report'] = 'Fortgangsberichte';
$string['tab:requests'] = 'Gutscheinanfragen';
$string['tab:requestusers'] = 'Benutzer von Gutscheinanfragen';
$string['tab:unused'] = 'Nicht eingelöste Gutscheine';
$string['tab:used'] = 'Eingelöste Gutscheine';
$string['tab:wzcoupongroupings'] = 'Kursgruppierungen verwalten';
$string['tab:wzcouponimage'] = 'Bildvorlage';
$string['tab:wzcoupons'] = 'Gutschein(e) erstellen';
$string['task:cleanup'] = 'Nicht eingelöste alte Gutscheine löschen';
$string['task:sendcoupons'] = 'Gutscheine geplant versenden';
$string['task:unenrolcohorts'] = 'Entfernen Sie abgelaufene Coupon-Registrierungen aus globalen Gruppen (Kohorten)';
$string['tasksettings'] = 'Einstellungen';
$string['tasksettings_desc'] = '??_tasksettings_desc_??';
$string['textsettings'] = 'Text-Einstellungen';
$string['textsettings_desc'] = 'Hier können Texte erstellt werden, die im Assistenten des Gutschein-Generators verwendet werden.';
$string['th:action'] = 'Vorgehen';
$string['th:batchid'] = 'Batch';
$string['th:claimedon'] = 'Beansprucht am';
$string['th:cohorts'] = 'Globale Gruppe';
$string['th:course'] = 'Kurse';
$string['th:enrolperiod'] = 'Einschreibedauer';
$string['th:for_user_email'] = 'Geplant für';
$string['th:fullname'] = 'Voller name';
$string['th:groups'] = 'Gruppe(n)';
$string['th:immediately'] = 'Sofort';
$string['th:issend'] = 'Versendet?';
$string['th:owner'] = 'Eigner';
$string['th:roleid'] = 'Rolle';
$string['th:senddate'] = 'Versanddatum';
$string['th:submission_code'] = 'Gutschein-Kode';
$string['th:tid'] = 'Zeit ID';
$string['th:timecreated'] = 'Erzeugt am';
$string['th:usedby'] = 'Eingelöst von';
$string['timeafter'] = 'Erzeugt Nach';
$string['timebefore'] = 'Erzeugt Vor';
$string['unlimited_access'] = 'unbegrenzt';
$string['url:api_docs'] = 'API Dokumentation';
$string['url:couponsignup'] = 'Melden Sie sich mit einem Gutscheincode an';
$string['url:generate_coupons'] = 'Gutschein erstellen';
$string['url:input_coupon'] = 'Gutschein einlösen';
$string['url:managelogos'] = 'Gutschein-Pics verwalten';
$string['url:uploadimage'] = 'Gutscheinbild ändern';
$string['url:view_reports'] = 'Berichte';
$string['url:view_unused_coupons'] = 'Nicht eingelöste Gutscheine';
$string['userconfig:allowselectenrolperiod'] = 'Auswahl des Registrierungszeitraums zulassen';
$string['userconfig:allowselectlogo'] = 'Auswahl des Gutschein-Logos zulassen';
$string['userconfig:allowselectqr'] = 'Auswahl der QR-Code-Einbindung zulassen';
$string['userconfig:allowselectrole'] = 'Rollenauswahl zulassen';
$string['userconfig:allowselectseperatepdf'] = 'Auswahl der Fähigkeit zum Generieren separater PDFs zulassen';
$string['userconfig:default'] = 'Standard-Voreinstellung';
$string['userconfig:renderqrcode:default'] = 'Aktivieren Sie standardmäßig die Aufnahme des QR-Codes';
$string['userconfig:seperatepdf:default'] = 'Aktivieren Sie standardmäßig das Generieren separater PDFs';
$string['view:api:heading'] = 'Gutschein API';
$string['view:api:title'] = 'Gutschein API';
$string['view:api_docs:heading'] = 'Dokumentation Gutschein API';
$string['view:api_docs:title'] = 'Dokumentation Gutschein API';
$string['view:cleanup:heading'] = 'Gutscheine aufräumen';
$string['view:cleanup:title'] = 'Gutscheine aufräumen';
$string['view:coursegroupings:admin:heading'] = 'Kursgruppierungen verwalten';
$string['view:coursegroupings:admin:title'] = 'Kursgruppierungen';
$string['view:download:heading'] = 'Gutscheine herunterladen';
$string['view:download:title'] = 'Gutscheine herunterladen';
$string['view:downloadbatches:title'] = 'Herunterladbare Stapelarchive (Batch)';
$string['view:errorreport:heading'] = 'Bericht - Gutschein Fehler';
$string['view:errorreport:title'] = 'Bericht - Gutschein Fehler';
$string['view:extendenrolment:heading'] = 'Gutschein: Registrierungserweiterungen';
$string['view:extendenrolment:title'] = 'Gutschein: Registrierungserweiterungen';
$string['view:extendenrolment_step1:heading'] = 'Immatrikulation verlängern: Kurs(e) auswählen';
$string['view:extendenrolment_step1:title'] = 'Immatrikulation verlängern: Kurs(e) auswählen';
$string['view:extendenrolment_step2:heading'] = 'Immatrikulation verlängern: Nutzer auswählen';
$string['view:extendenrolment_step2:title'] = 'Immatrikulation verlängern: Nutzer auswählen';
$string['view:extendenrolment_step3:heading'] = 'Immatrikulation verlängern: Bestätigen';
$string['view:extendenrolment_step3:title'] = 'Immatrikulation verlängern: Bestätigen';
$string['view:generate_coupon:heading'] = 'Gutschein erstellen';
$string['view:generate_coupon:title'] = 'Gutschein erstellen';
$string['view:generator:cohort:heading'] = 'Kohortengutschein(e) generieren (Globale Gruppen)';
$string['view:generator:cohort:title'] = 'Kohortengutschein(e) generieren (Globale Gruppen)';
$string['view:generator:course:heading'] = 'Kursgutschein(e) generieren';
$string['view:generator:course:title'] = 'Kursgutschein(e) generieren';
$string['view:generator:coursegroupings:heading'] = 'Gutscheine für Kursgruppierungen erzeugen';
$string['view:generator:coursegroupings:title'] = 'Gutscheingenerator für Kursgruppierungen';
$string['view:input_coupon:heading'] = 'Gutschein einlösen';
$string['view:input_coupon:title'] = 'Gutschein einlösen';
$string['view:reports-maillog:heading'] = 'E-Mail-Protokoll';
$string['view:reports-maillog:title'] = 'E-Mail-Protokoll';
$string['view:reports-personal:heading'] = 'Liste - Personalisierte Coupons';
$string['view:reports-personal:title'] = 'Liste - Personalisierte Coupons';
$string['view:reports-unused:heading'] = 'Liste - Nicht eingelöste Gutscheine';
$string['view:reports-unused:title'] = 'Liste - Nicht eingelöste Gutscheine';
$string['view:reports-used:heading'] = 'Liste - Eingelöste Gutscheine';
$string['view:reports-used:title'] = 'Liste - Eingelöste Gutscheine';
$string['view:reports:heading'] = 'Liste - Fortschritt für Gutscheine';
$string['view:reports:title'] = 'Liste - Fortschritt für Gutscheine';
$string['view:request:heading'] = 'Gutscheine anfordern';
$string['view:request:title'] = 'Gutscheine anfordern';
$string['view:requests:admin:heading'] = 'Verwaltung von Gutscheinanfragen';
$string['view:requests:admin:title'] = 'Verwaltung von Gutscheinanfragen';
$string['view:selectcourses:heading'] = 'Kurs(e) zum Einschreiben auswählen';
$string['view:selectcourses:title'] = 'Kurs(e) auswählen';
$string['view:uploadimage:heading'] = 'Neuen Hintergrund für Gutscheine hochladen';
$string['view:uploadimage:title'] = 'Hintergrund für Gutscheine hochladen';
$string['view:userrequest:heading'] = 'Meine Gutscheinanforderungen';
$string['view:userrequest:title'] = 'Meine Gutscheinanforderungen';
$string['with-names'] = 'Mit den folgenden Namen oder Kennungen';
