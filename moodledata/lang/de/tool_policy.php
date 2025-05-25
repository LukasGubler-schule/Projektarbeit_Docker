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
 * Strings for component 'tool_policy', language 'de', version '4.5'.
 *
 * @package     tool_policy
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptanceacknowledgement'] = 'Ich bestätige, dass ich die Einwilligung zu diesen Richtlinien erhalten habe und ich dies im Namen der genannten Personen bestätigen darf.';
$string['acceptancenote'] = 'Bemerkungen';
$string['acceptancepolicies'] = 'Richtlinien';
$string['acceptancessavedsucessfully'] = 'Die Bestätigungen wurden erfolgreich gespeichert.';
$string['acceptancestatusaccepted'] = 'Bestätigt';
$string['acceptancestatusacceptedbehalf'] = 'Im Namen einer anderen Person bestätigt';
$string['acceptancestatusdeclined'] = 'Zurückgewiesen';
$string['acceptancestatusdeclinedbehalf'] = 'Im Namen einer anderen Person zurückgewiesen';
$string['acceptancestatusoverall'] = 'Insgesamt';
$string['acceptancestatuspartial'] = 'Teilweise bestätigt';
$string['acceptancestatuspending'] = 'Abwartend';
$string['acceptanceusers'] = 'Nutzer/innen';
$string['actions'] = 'Aktionen';
$string['activate'] = 'Status auf "Aktiv" setzen';
$string['activateconfirm'] = '<p>Sie sind dabei, die Richtlinie \'{$a->name}\' zu aktivieren und die Version \'{$a->revision}\' zur aktuellen Version zu machen.</p><p>Alle Nutzer/innen müssen diese neue Richtlinie bestätigen, um die Website nutzen zu können.</p>';
$string['activateconfirmyes'] = 'Aktivieren';
$string['activating'] = 'Richtlinie aktivieren';
$string['agreepolicies'] = 'Bestätigen Sie bitte die folgenden Richtlinien:';
$string['backtoprevious'] = 'Zurück zur vorherigen Seite';
$string['backtotop'] = 'Zum Seitenanfang';
$string['cachedef_policy_optional'] = 'Cache für optionale / verpflichtende Merkmale für Richtlinienversionen';
$string['consentbulk'] = 'Bestätigung';
$string['consentpagetitle'] = 'Bestätigung';
$string['contactdpo'] = 'Wenden Sie sich mit Fragen zu den Richtlinien an die Ansprechpersonen für Datenschutzfragen.';
$string['dataproc'] = 'Verarbeitung von personenbezogenen Daten';
$string['declineacknowledgement'] = 'Ich bestätige, eine Anfrage zum Zurückweisen der Bestätigung im Namen der obigen Person bekommen zu haben.';
$string['declinethepolicy'] = 'Nutzerbestätigung zurückweisen';
$string['deleteconfirm'] = '<p>Möchten Sie die Richtlinie \'{$a->name}\' wirklich löschen?</p><p>Der Vorgang kann nicht rückgängig gemacht werden.</p>';
$string['deleting'] = 'Version löschen';
$string['editingpolicydocument'] = 'Richtlinie bearbeiten';
$string['errorpolicyversioncompulsory'] = 'Verpflichtende Richtlinien können nicht zurückgewiesen werden!';
$string['errorpolicyversionnotfound'] = 'Es liegt keine Richtlinie mit dieser ID vor.';
$string['errorsaveasdraft'] = 'Kleinere Änderungen können nicht als Entwurf gespeichert werden.';
$string['errorusercantviewpolicyversion'] = 'Die Person hat keinen Zugriff auf diese Richtlinienversion.';
$string['event_acceptance_created'] = 'Nutzungsrichtlinie wurde erstellt';
$string['event_acceptance_updated'] = 'Nutzungsrichtlinie wurde aktualisiert';
$string['filtercapabilityno'] = 'Berechtigung: kann nicht bestätigen';
$string['filtercapabilityyes'] = 'Berechtigung: kann bestätigen';
$string['filterplaceholder'] = 'Suchbegriff oder ausgewählter Filter';
$string['filterpolicy'] = 'Richtlinie: {$a}';
$string['filterrevision'] = 'Version: {$a}';
$string['filterrevisionstatus'] = 'Version: {$a->name} ({$a->status})';
$string['filterrole'] = 'Rolle: {$a}';
$string['filters'] = 'Filter';
$string['filterstatusdeclined'] = 'Status: zurückgewiesen';
$string['filterstatuspending'] = 'Status: abwartend';
$string['filterstatusyes'] = 'Status: bestätigt';
$string['guestconsent:continue'] = 'Fortsetzen';
$string['guestconsentmessage'] = 'Wenn Sie weiter auf dieser Webseite arbeiten möchten, bestätigen Sie bitte unsere Nutzungsrichtlinie:';
$string['iagree'] = 'Ich stimme {$a} zu.';
$string['iagreetothepolicy'] = 'Bestätigung abgeben';
$string['idontagree'] = 'Ich stimme {$a} nicht zu.';
$string['inactivate'] = 'Status auf "inaktiv" setzen';
$string['inactivating'] = 'Richtlinie auf "inaktiv" setzen';
$string['inactivatingconfirm'] = '<p>Sie sind dabei, die Richtlinie \'{$a->name}\' (Version {$a->revision}) auf "inaktiv" zu setzen.</p>';
$string['inactivatingconfirmyes'] = 'Inaktiv';
$string['invalidversionid'] = 'Es gibt keine Richtlinie mit dieser ID!';
$string['irevokethepolicy'] = 'Bestätigung widerrufen';
$string['listactivepolicies'] = 'Liste von aktiven Richtlinien';
$string['managepolicies'] = 'Richtlinien verwalten';
$string['minorchange'] = 'Geringfügige Änderungen';
$string['minorchangeinfo'] = 'Geringfügige Änderungen beeinflussen den Wesensgehalt der Richtlinie nicht. Eine erneute Bestätigung ist nicht erforderlich.';
$string['movedown'] = 'Nach unten';
$string['moveup'] = 'Nach oben';
$string['mustagreetocontinue'] = 'Sie müssen alle Teile der Richtlinie bestätigen, um fortzufahren.';
$string['newpolicy'] = 'Neue Richtlinie';
$string['newversion'] = 'Neue Version';
$string['noactivepolicies'] = 'Es gibt keine Richtlinie mit einer aktiven Version.';
$string['nofiltersapplied'] = 'Keine Filter angewandt';
$string['nopermissiontoagreedocs'] = 'Keine Berechtigung, die Richtlinien zu bestätigen.';
$string['nopermissiontoagreedocs_desc'] = 'Sie haben nicht die Berechtigung, die Richtlinien zu bestätigen.<br/>Sie können unsere Website erst nutzen, wenn die folgende Richtlinie bestätigt wurde:';
$string['nopermissiontoagreedocsbehalf'] = 'Keine Berechtigung, die Richtlinien im Namen dieser Person zu bestätigen';
$string['nopermissiontoagreedocsbehalf_desc'] = 'Sie haben nicht die Berechtigung, die Richtlinien im Namen von {$a} zu bestätigen:';
$string['nopermissiontoagreedocscontact'] = 'Weitere Unterstützung:';
$string['nopermissiontoviewpolicyversion'] = 'Sie haben nicht die Berechtigung, diese Richtlinienversion anzuzeigen.';
$string['nopolicies'] = 'Es ist derzeit keine Version der Richtlinie für registrierte Nutzer/innen aktiviert.';
$string['pluginname'] = 'Richtlinien';
$string['policiesagreements'] = 'Richtlinien und Bestätigungen';
$string['policy:accept'] = 'Richtlinien bestätigen';
$string['policy:acceptbehalf'] = 'Richtlinien im Namen einer anderen Person bestätigen';
$string['policy:managedocs'] = 'Richtlinien verwalten';
$string['policy:viewacceptances'] = 'Berichte zu Nutzerbestätigungen anzeigen';
$string['policydocaudience'] = 'Nutzerbestätigung';
$string['policydocaudience0'] = 'Alle Nutzer/innen';
$string['policydocaudience1'] = 'Authentifizierte Nutzer/innen';
$string['policydocaudience2'] = 'Gäste';
$string['policydoccontent'] = 'Vollständige Richtlinie';
$string['policydochdrpolicy'] = 'Richtlinie';
$string['policydochdrversion'] = 'Dokumentenversion';
$string['policydocname'] = 'Name';
$string['policydocoptional'] = 'Bestätigung optional';
$string['policydocoptionalno'] = 'Verpflichtend';
$string['policydocoptionalyes'] = 'Optional';
$string['policydocrevision'] = 'Version';
$string['policydocsummary'] = 'Zusammenfassung';
$string['policydocsummary_help'] = 'Dieser Text sollte eine Zusammenfassung oder Vorbemerkung zur Richtlinie bereitstellen, möglicherweise in leicht verständlicher Form und einer klaren einfachen Sprache.';
$string['policydoctype'] = 'Typ';
$string['policydoctype0'] = 'Richtlinie zur Website';
$string['policydoctype1'] = 'Richtlinie zum Datenschutz';
$string['policydoctype2'] = 'Richtlinie für Dritte';
$string['policydoctype99'] = 'Andere Richtlinien';
$string['policydocuments'] = 'Richtliniendokumente';
$string['policynamedversion'] = 'Richtlinie  {$a->name} (Version {$a->revision} - {$a->id})';
$string['policypriorityagreement'] = 'Richtlinie anzeigen, bevor weitere Richtlinien angezeigt werden.';
$string['policyversionacceptedinbehalf'] = 'Dieser Richtlinie wurde durch eine andere Person in Ihrem Namen bestätigt.';
$string['policyversionacceptedinotherlang'] = 'Dieser Richtlinienversion wurde in einer anderen Sprache zugestimmt.';
$string['previousversions'] = '{$a} frühere Versionen';
$string['privacy:metadata:acceptances'] = 'Infos zu den Nutzerbestätigungen';
$string['privacy:metadata:acceptances:lang'] = 'Sprache, in der die Richtlinie bestätigt wurde';
$string['privacy:metadata:acceptances:note'] = 'Kommentare von Personen, die die Richtlinie im Namen einer anderen Person bestätigt haben.';
$string['privacy:metadata:acceptances:policyversionid'] = 'Version der Richtlinie, die bestätigt wurde';
$string['privacy:metadata:acceptances:status'] = 'Status der Bestätigung';
$string['privacy:metadata:acceptances:timecreated'] = 'Zeitpunkt, zu dem eine Person die Richtlinie bestätigt hat';
$string['privacy:metadata:acceptances:timemodified'] = 'Zeitpunkt, zu dem eine Person ihre Bestätigung aktualisiert hat.';
$string['privacy:metadata:acceptances:userid'] = 'Person, die die Richtlinie bestätigt hat';
$string['privacy:metadata:acceptances:usermodified'] = 'Person, die die Richtlinie bestätigt hat, falls sie im Namen einer anderen Person erfolgt ist.';
$string['privacy:metadata:subsystem:corefiles'] = 'Das Richtlinientool speichert Dateien, die in der Zusammenfassung und im vollständigen Text eingebunden wurden';
$string['privacy:metadata:versions'] = 'Infos zur Richtlinienversion';
$string['privacy:metadata:versions:archived'] = 'Status der Richtlinie (aktiv oder inaktiv)';
$string['privacy:metadata:versions:audience'] = 'Nutzergruppe, die die Richtlinie bestätigen muss';
$string['privacy:metadata:versions:content'] = 'Inhalt dieser Richtlinienversion';
$string['privacy:metadata:versions:contentformat'] = 'Format des Inhaltsfeldes';
$string['privacy:metadata:versions:name'] = 'Name der Richtlinie';
$string['privacy:metadata:versions:policyid'] = 'Richtlinie, der diese Version zugeordnet ist';
$string['privacy:metadata:versions:revision'] = 'Revisionsname dieser Richtlinienversion';
$string['privacy:metadata:versions:summary'] = 'Zusammenfassung dieser Richtlinienversion';
$string['privacy:metadata:versions:summaryformat'] = 'Format des Zusammenfassungsfeldes';
$string['privacy:metadata:versions:timecreated'] = 'Zeitpunkt, zu dem die Richtlinienversion erstellt wurde';
$string['privacy:metadata:versions:timemodified'] = 'Zeitpunkt, zu dem die Richtlinienversion geändert wurde';
$string['privacy:metadata:versions:type'] = 'Richtlinientyp';
$string['privacy:metadata:versions:usermodified'] = 'Person, die die Richtlinie geändert hat';
$string['privacysettings'] = 'Datenschutzeinstellungen';
$string['readpolicy'] = 'Lesen Sie bitte unsere Regelungen zu "{$a}"';
$string['refertofullpolicytext'] = 'Sie finden den vollständigen Text hier: {$a}';
$string['response'] = 'Antwort';
$string['responseby'] = 'Antwortende Person';
$string['responseon'] = 'Datum';
$string['revokeacknowledgement'] = 'Ich bestätige, dass ich im Namen der genannten Personen die Bestätigung widerrufen soll.';
$string['save'] = 'Speichern';
$string['saveasdraft'] = 'Als Entwurf speichern';
$string['selectpolicyandversion'] = 'Nutzen Sie den obigen Filter, um eine Richtlinie und/oder eine Version auszuwählen';
$string['selectuser'] = 'Nutzer/in {$a} auswählen';
$string['selectusersforconsent'] = 'Nutzer/innen auswählen, für die die Bestätigung abgegeben werden soll.';
$string['settodraft'] = 'Neuen Entwurf anlegen';
$string['status'] = 'Status der Richtlinie';
$string['status0'] = 'Entwurf';
$string['status1'] = 'Aktiv';
$string['status2'] = 'Inaktiv';
$string['statusformtitleaccept'] = 'Richtlinie bestätigen';
$string['statusformtitledecline'] = 'Richtlinie ablehnen';
$string['statusformtitlerevoke'] = 'Richtlinie widerrufen';
$string['statusinfo'] = 'Eine aktive Richtlinie erfordert die Bestätigung durch alle neuen Nutzer/innen. Vorhandene Nutzer/innen, die bereits einer älteren Version zugestimmt haben, müssen beim nächsten Login erneut zustimmen.';
$string['steppolicies'] = 'Richtlinie {$a->numpolicy} von {$a->totalpolicies}';
$string['useracceptanceactionaccept'] = 'Bestätigen';
$string['useracceptanceactionacceptone'] = '{$a} bestätigen';
$string['useracceptanceactionacceptpending'] = 'Ausstehende Richtlinien bestätigen';
$string['useracceptanceactiondecline'] = 'Ablehnen';
$string['useracceptanceactiondeclineone'] = '{$a} ablehnen';
$string['useracceptanceactiondeclinepending'] = 'Ausstehende Richtlinien ablehnen';
$string['useracceptanceactiondetails'] = 'Details';
$string['useracceptanceactionrevoke'] = 'Widerruf';
$string['useracceptanceactionrevokeall'] = 'Bestätigung der Richtlinien widerrufen';
$string['useracceptanceactionrevokeone'] = 'Bestätigung von {$a} widerrufen';
$string['useracceptancecount'] = '{$a->agreedcount} von {$a->userscount} ({$a->percent}%)';
$string['useracceptancecountna'] = 'N/A';
$string['useracceptances'] = 'Nutzerbestätigungen';
$string['userpolicysettings'] = 'Datenschutzinfos';
$string['usersaccepted'] = 'Bestätigungen';
$string['viewarchived'] = 'Frühere Versionen anzeigen';
$string['viewconsentpageforuser'] = 'Diese Seite im Namen von {$a} anzeigen';
