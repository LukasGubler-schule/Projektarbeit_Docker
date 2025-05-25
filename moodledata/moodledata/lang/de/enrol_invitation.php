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
 * Strings for component 'enrol_invitation', language 'de', version '4.5'.
 *
 * @package     enrol_invitation
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['a_day'] = '1 Tag';
$string['a_minute'] = '1 Minute';
$string['about_hour'] = 'ungefähr 1 Stunde';
$string['about_x_hours'] = 'ungefähr {$a} Stunden';
$string['accepteddescription'] = 'Nutzerkonto {$a->userid} hat die Einladung für den Kurs mit der ID \'{$a->courseid}\' angenommen.';
$string['action_extend_invite'] = 'Einladung verlängern';
$string['action_resend_invite'] = 'Einladung erneut senden';
$string['action_revoke_invite'] = 'Einladung widerrufen';
$string['anonymoususer'] = '(unbekannt)';
$string['assignrole'] = 'Rolle zuweisen';
$string['customnamecourse'] = 'Nutzerdefiniertes Format';
$string['customsubjectformat'] = '{$a->shortname} - {$a->fullname}';
$string['default_subject'] = 'Kurseinladung: {$a}';
$string['defaultinvitevalues'] = 'Standardeinladungswerte';
$string['defaultsubjectformat'] = 'Standardbetreffformat';
$string['defaultsubjectformat_desc'] = 'Dies ist das Standardkursnamenformat, dass in der Betreffzeile der Einladungsmail verwendet wird. Beachten Sie, dass diese Änderungen nur sich nur auf Einschreibungsinstanzen auswirken wenn sie neu erstellt werden. Wenn Sie <strong> nutzerdefiniertes Format</strong> auswählen, können Sie Sprachanpassungen an dem String <strong>\'customsubjectformat\'</strong> von dem <strong>enrol_invitation</strong> Plugin vornehmen und jede Kombination von kurzen und vollständigen Kursnamen verwenden. Wenn dieses Plugin das erste Mal installiert wird, ist das nutzerdefinierte Format auf  \'shortname - fullname\' gesetzt.';
$string['deleteddescription'] = 'Nutzerkonto {$a->userid} hat die Einladung für den Kurs mit der ID \'{$a->courseid}\' an \'{$a->email}\' gelöscht.';
$string['editenrolment'] = 'Einschreibung bearbeiten';
$string['email_clarification'] = 'Es können mehrere E-Mail-Adressen angegeben werden, getrennt durch Semikolon, Komma, Leerzeichen oder neue Zeile';
$string['emailaddressnumber'] = 'E-Mail-Adresse';
$string['emailmessageuserenrolled'] = 'Hello,

{$a->userfullname} ({$a->useremail}) hat Ihre Einladung für den Kurs {$a->coursefullname} als "{$a->rolename}" angenommen. Sie können den Status dieser Einladung über folgende Optionen überprüfen:

* Teilnehmerliste: {$a->courseenrolledusersurl}
* Einladungshistorie: {$a->invitehistoryurl}

{$a->sitename}
-------------
{$a->supportemail}';
$string['emailmsghtml'] = 'Vorschau';
$string['emailmsghtml_help'] = '<p>Guten Tag,</p>
<p>Sie wurden eingeladen dem folgendem Kurs beizutreten:</p>
<ul>
  <li>Kursname: <b>{$a->coursename}</b></li>
  <li>Startdatum: <b>{$a->start}</b></li>
  <li>Enddatum: <b>{$a->end}</b></li>
</ul>
{$a->message}
<p>Loggen Sie sich ein, um die Einschreibung in den Kurs zu bestätigen.</p>
<p>Indem Sie diesen Link verwenden, bestätigen Sie, dass diese Mail und die Einladung an Sie addressiert wurden.</p>
<p><a class="btn btn-primary" href="{$a->inviteurl}">{$a->acceptinvitation}</a></p>
<p>Wenn Sie diesem Kurs nicht beitreten wollen, nutzen Sie bitte stattdessen den folgenden Link:</p>
<p><a class="btn btn-danger" href="{$a->rejecturl}">{$a->rejectinvitation}</a></p>
<p>Beachten Sie dass diese Links am <b>{$a->expiration}</b> ablaufen.</p>
<p>Ich hoffe Sie in dem Kurs zu sehen.</p>';
$string['emailmsgunsubscribe'] = '<span class="apple-link">Falls Sie glauben, Sie haben diese Nachricht irrtümlicherweise erhalten, Sie Hilfe benötigen oder keine weiteren Einladungen für diesen Kurs erhalten möchten, bitte kontaktieren Sie:</span> <a href="mailto:{$a->supportemail}">{$a->supportemail}</a>.';
$string['emailtitleuserenrolled'] = '{$a->userfullname} hat die Einladung für den Kurs {$a->coursefullname} angenommen.';
$string['enrolconfimation'] = 'Nutzer/innen müssen die Einschreibung bestätigen';
$string['err_cohortlist'] = 'Oder eine globale Gruppe muss hier ausgewählt werden.';
$string['err_userlist'] = 'Oder Nutzerkonten müssen hier ausgewählt werden.';
$string['event_invitation_accepted'] = 'Annehmen';
$string['event_invitation_attempted'] = 'Versuch';
$string['event_invitation_deleted'] = 'Gelöscht';
$string['event_invitation_rejected'] = 'Ablehnung';
$string['event_invitation_sent'] = 'Senden';
$string['event_invitation_updated'] = 'Aktualisiert';
$string['event_invitation_viewed'] = 'Angesehen';
$string['expiredtoken'] = 'Einladungstoken ist abgelaufen oder wurde bereits benutzt.';
$string['extend_invite_sucess'] = 'Einladung erfolgreich verlängert';
$string['failuredescription'] = 'Fehler: Nutzerkonto {$a->userid}, Kursid: \'{$a->courseid}\', Grund: {$a->errormsg}.';
$string['half_minute'] = 'eine halbe Minute';
$string['header_email'] = 'Wen möchten Sie einladen?';
$string['header_role'] = 'Welche Rolle wollen Sie den Eingeladenen zuweisen?';
$string['historyactions'] = 'Aktionen';
$string['historydateexpiration'] = 'Ablaufdatum';
$string['historydatesent'] = 'Datum gesendet';
$string['historyexpires_in'] = 'läuft ab in';
$string['historyinvitee'] = 'Eingeladene';
$string['historyrole'] = 'Rolle';
$string['historystatus'] = 'Status';
$string['historyundefinedrole'] = 'Rolle konnte nicht gefunden werden. Wählen Sie eine andere Rolle und senden Sie die Einladung erneut.';
$string['invitation:config'] = 'Einladungsinstanzen konfigurieren';
$string['invitation:enrol'] = 'Nutzer/innen einladen';
$string['invitation:manage'] = 'Einladungsaufträge verwalten';
$string['invitation:unenrol'] = 'Nutzerkonten aus dem Kurs ausschreiben';
$string['invitation:unenrolself'] = 'Sich selbst aus dem Kurs ausschreiben';
$string['invitation_acceptance_title'] = 'Einladungsannahme';
$string['invitationacceptance'] = '<p>Sie wurden eingeladen an dem Kurs <strong>{$a->coursefullname}</strong> als <strong>{$a->rolename}</strong> teilzunehmen. Bitte bestätigen Sie die Annahme um dem Kurs beizutreten.</p>';
$string['invitationacceptancebutton'] = 'Einladung annehmen';
$string['invitationrejectbutton'] = 'Einladung ablehnen';
$string['invitationrejected'] = 'Einladung abgelehnt';
$string['invitationsuccess'] = 'Einladung erfolgreich versendet';
$string['inviteexpiration'] = 'Ablauf der Einladung';
$string['inviteexpiration_desc'] = 'Dauer in der die Einladung gültig ist (in Sekunden). Standard ist zwei Wochen.';
$string['invitehistory'] = 'Einladungshistorie';
$string['inviteusers'] = 'Nutzer/innen einladen';
$string['invtitation_rejected_notice'] = '<p>Diese Einladung wurde abgelehnt.</p>';
$string['less_minute'] = 'weniger als eine Minute';
$string['less_than_x_seconds'] = 'weniger als {$a} Sekunden';
$string['loggedinnot'] = '<p>Um diese Einladung anzunehmen, muss man eingeloggt sein.</p>';
$string['message'] = 'Nachricht';
$string['message_help_link'] = 'Anweisungen die den Nutzer/innen gesendet werden';
$string['noenddate'] = 'Kein Enddatum';
$string['noinvitationinstanceset'] = 'Es wurde keine Instanz der Einschreibemethode Einladung gefunden. Diese muss erst dem Kurs hinzugefügt werden.';
$string['noinvitehistory'] = 'Es wurden noch keine Einladungen versendet';
$string['nopermissiontosendinvitation'] = 'Keine Berechtigung die Einladung zu versenden';
$string['norole'] = 'Wählen Sie eine Rolle.';
$string['notify_inviter'] = 'Mail-Benachrichtigung an mich {$a->email} aktivieren wenn eingeladene Nutzer/innen die Einladung annehmen.';
$string['notsentdescription'] = 'Nutzerkonto {a->userid} konnte die Einladung für den Kurs mit der ID \'{a->courseid}\' nicht versenden weil es keinen Account mit der Mailadresse \'{a->email}\' gibt.';
$string['pluginname'] = 'Einladung';
$string['pluginname_desc'] = 'Diese Einschreibemethode erlaubt es Einladungen per E-Mail zu versenden. Diese Einladungen können nur einmal benutzt werden. Nutzer/innen werden automatisch eingeschrieben wenn sie auf den versendeten Link in der E-Mail klicken.';
$string['registeredonly'] = 'Einladungen werden nur an registrierte Nutzerkonten versendet';
$string['registeredonly_help'] = 'Einladungen werden nur an Mailadressen versendet, die zu einem registrierten Nutzerkonten gehören.';
$string['rejecteddescription'] = 'Nutzerkonto {$a->userid} hat die Einladung für den Kurs mit der ID \'{$a->courseid}\' abgelehnt.';
$string['reminder'] = 'Erinnerung:';
$string['resend_invite_sucess'] = 'Einladung erfolgreich erneut versendet';
$string['returntocourse'] = 'Zurück zum Kurs';
$string['returntoinvite'] = 'Neue Einladung versenden';
$string['revoke_invite_sucess'] = 'Einladung erfolgreich widerrufen';
$string['sentdescription'] = 'Nutzerkonto {$a->userid} hat eine Einladung für den Kurs mit der ID \'{$a->courseid}\' an \'{$a->email}\' versendet.';
$string['show_from_email'] = 'Eingeladene Nutzer/innen dürfen mich über {$a->email} kontaktieren (Ihre Mailadresse wird als Absender angezeigt. Wenn nicht ausgewählt, wird die Adresse {$a->supportemail} als Absender angezeigt)';
$string['status'] = 'Einladungen erlauben';
$string['status_desc'] = 'Nutzer/innen erlauben Teilnehmer/innen als Standard in den Kurs einzuladen.';
$string['status_invite_active'] = 'Aktiv';
$string['status_invite_expired'] = 'Abgelaufen';
$string['status_invite_invalid'] = 'Ungültig';
$string['status_invite_rejected'] = 'Abgelehnt';
$string['status_invite_resent'] = 'Erneut versendet';
$string['status_invite_revoked'] = 'Widerrufen';
$string['status_invite_used'] = 'Angenommen';
$string['status_invite_used_expiration'] = '(Zugang endet am {$a}';
$string['status_invite_used_noaccess'] = '(hat keinen Zugriff mehr)';
$string['subject'] = 'Betreff';
$string['unenrol'] = 'Nutzerkonto ausschreiben';
$string['unenroluser'] = 'Wollen Sie "{$a->user}" wirklich vom Kurs "{$a->course}" ausschreiben?';
$string['updateddescription'] = 'Nutzerkonto {$a->userid} hat die Einladung für den Kurs mit ID {$a->courseid} an \'{$a->email}\' erweitert.';
$string['used_by'] = 'von {$a->username} ({$a->roles}, {$a->useremail}) am {$a->timeused}';
$string['usedefaultvalues'] = 'Einladung mit Standardwerten nutzen';
$string['usernotmatch'] = '<p>Die Einladung ist für ein anderes Nutzerkonto bestimmt.</p>';
$string['vieweddescription'] = 'Nutzerkonto {$a->userid} hat die Einladung für den Kurs mit ID  \'{$a->courseid}\' angesehen.';
$string['x_days'] = '{$a} Tage';
$string['x_minutes'] = '{$a} Minuten';
