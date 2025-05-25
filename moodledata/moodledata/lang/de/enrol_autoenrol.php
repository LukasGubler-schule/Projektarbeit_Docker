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
 * Strings for component 'enrol_autoenrol', language 'de', version '4.5'.
 *
 * @package     enrol_autoenrol
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alwaysenrol'] = 'Immer einschreiben';
$string['alwaysenrol_help'] = 'Wenn diese Option aktiviert ist, werden die Plugins die Nutzer/innen immer anmelden, auch wenn sie bereits über eine andere Methode Zugang zum Kurs haben.';
$string['auto'] = 'Auto';
$string['auto_desc'] = 'Diese Gruppe wurde automatisch durch das Plugin "Automatische Einschreibung" erstellt. Sie wird gelöscht, wenn Sie das Plugin "Automatische Einschreibung" aus dem Kurs entfernen.';
$string['autoenrol:config'] = 'Automatische Einschreibungen konfigurieren';
$string['autoenrol:hideshowinstance'] = 'Nutzer/in kann Instanzen "Automatische Einschreibung" aktivieren oder deaktivieren';
$string['autoenrol:manage'] = 'Automatisch eingeschriebene Nutzer/innen verwalten';
$string['autoenrol:method'] = 'Nutzer/in kann Nutzer/innen beim Login für einen Kurs einschreiben';
$string['autoenrol:unenrol'] = 'Nutzer/in kann automatisch eingeschriebene Nutzer/innen abmelden';
$string['autoenrol:unenrolself'] = 'Nutzer/innen können sich selbst aus Kursen abmelden, wenn sie automatisch bei Zugriff eingeschrieben wurden.';
$string['autounenrolaction'] = 'Automatisches Abmelden';
$string['autounenrolaction_help'] = 'Wählen Sie die auszuführende Aktion aus, wenn die Filterregel für Nutzer/innen nicht mehr zutrifft. Beachten Sie bitte, dass einige Nutzerdaten und Nutzereinstellungen aus dem Kurs gelöscht werden, sobald Nutzer/innen abgemeldet werden.';
$string['availabilityplugins'] = 'Aktivierte Verfügbarkeits-Plugins';
$string['availabilityplugins_help'] = 'Wählen Sie die Verfügbarkeits-Plugins aus, die im Nutzerfilter "Automatische Einschreibung" verwendet werden können. Verwenden Sie Strg+Klick bzw. Cmd+Klick für die Mehrfachauswahl.';
$string['cannotenrol'] = 'Sie können sich für diesen Kurs nicht über die automatische Einschreibung anmelden.';
$string['config'] = 'Konfiguration';
$string['countlimit'] = 'Grenzwert';
$string['countlimit_help'] = 'Diese Instanz zählt die Anzahl der Nutzereinschreibungen in einen Kurs und kann diese stoppen, sobald eine bestimmte Anzahl von Nutzer/innen erreicht ist. Die Standardeinstellung von 0 bedeutet unbegrenzt.';
$string['customwelcomemessage'] = 'Nutzerdefinierte Begrüßungsmitteilung';
$string['customwelcomemessage_help'] = 'Eine nutzerdefinierte Begrüßungsnachricht kann als einfacher Text oder im Moodle-Automatikformat, einschließlich HTML-Tags und Multi-Lang-Tags, hinzugefügt werden.

Die folgenden Platzhalter können in die Nachricht aufgenommen werden:

* Kursname {$a->coursename}
* Link zur Profilseite des Benutzers {$a->profileurl}
* Nutzer-E-Mail {$a->email}
* Vollständiger Name {$a->fullname}';
$string['defaultrole'] = 'Standardmäßige Rollenzuweisung';
$string['defaultrole_desc'] = 'Wählen Sie die Rolle aus, die Nutzer/innen bei der automatischen Einschreibung zugewiesen werden soll.';
$string['deleteselectedusers'] = 'Ausgewählte Nutzereinschreibungen löschen';
$string['editselectedusers'] = 'Ausgewählte Nutzereinschreibungen bearbeiten';
$string['emptyfield'] = 'Kein {$a}';
$string['enrolenddate'] = 'Enddatum';
$string['enrolenddate_help'] = 'Wenn diese Option aktiviert ist, werden die Nutzer/innen nur bis zu diesem Datum angemeldet.';
$string['enrolme'] = 'Mich einschreiben';
$string['enrolperiod'] = 'Dauer der Einschreibung';
$string['enrolperiod_desc'] = 'Voreingestellte Dauer, für die die Registrierung gültig ist. Wird dieser Wert auf Null gesetzt, ist die Dauer der Registrierung standardmäßig unbegrenzt.';
$string['enrolperiod_help'] = 'Dauer der Einschreibung, beginnend mit dem Moment, in dem sich Nutzer/innen selbst registrieren. Ist diese Option deaktiviert, ist die Dauer der Einschreibung unbegrenzt.';
$string['enrolstartdate'] = 'Startdatum';
$string['enrolstartdate_help'] = 'Wenn diese Option aktiviert ist, werden die Nutzer/innen erst ab diesem Datum registriert.';
$string['expiredaction'] = 'Aktion zum Ablauf der Einschreibung';
$string['expiredaction_help'] = 'Wählen Sie die auszuführende Aktion, wenn die Einschreibung von Nutzer/innen abläuft. Beachten Sie bitte, dass einige Nutzerdaten und Nutzereinstellungen im Kurs gelöscht werden, sobald Nutzer/innen abgemeldet werden.';
$string['expirymessageenrolledbody'] = 'Hallo {$a->user},

wir möchten Sie darüber informieren, dass Ihre Einschreibung in den Kurs \'{$a->course}\' am {$a->timeend} abläuft.

Wenn Sie Hilfe brauchen, wenden Sie sich bitte an {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Mitteilung über den Ablauf der Selbsteinschreibung';
$string['expirymessageenrollerbody'] = 'Die automatische Einschreibung in den Kurs \'{$a->course}\' läuft innerhalb der nächsten {$a->threshold} für die folgenden Nutzer/innen ab:

{$a->users}

Um deren Einschreibung zu verlängern, gehen Sie bitte zu {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Mitteilung zum Auslaufen der automatischen Einschreibung';
$string['expirynotifyall'] = 'Trainer/in und eingeschriebene/r Nutzer/in';
$string['expirynotifyenroller'] = 'Nur Trainer/in';
$string['filter'] = 'Nur zulassen';
$string['filter_help'] = 'Wenn Sie einen Gruppenfokus ausgewählt haben, können Sie dieses Feld zum Filtern verwenden,  welche Art von Nutzer/in Sie in den Kurs einschreiben möchten. Wenn Sie z.B. nach Authentifizierung gruppieren und über das Merkmal "manuell" filtern, werden nur Nutzer/innen eingeschrieben, die sich direkt auf Ihrer Website registriert haben.';
$string['filtering'] = 'Nutzerfilter';
$string['g_auth'] = 'Authentifizierungsmethode';
$string['g_dept'] = 'Abteilung';
$string['g_email'] = 'E-Mail-Adresse';
$string['g_inst'] = 'Institution';
$string['g_lang'] = 'Sprache';
$string['g_none'] = 'Auswählen ...';
$string['general'] = 'Allgemein';
$string['groupname'] = 'Gruppenname';
$string['groupname_help'] = 'Wenn Sie nach Nutzerfilter gruppieren, wird nur eine Gruppe erstellt und dies wird der Name der Gruppe sein.';
$string['groupon'] = 'Gruppieren nach';
$string['groupon_help'] = 'Das Plugin "Automatische Einschreibung" kann Nutzer/innen automatisch zu einer Gruppe hinzufügen, wenn diese basierend auf einem dieser Nutzerprofilfelder eingeschrieben werden.';
$string['instancename'] = 'Nutzerdefinierte Bezeichnung';
$string['instancename_help'] = 'Sie können eine nutzerdefinierte Bezeichnung hinzufügen, um deutlich zu machen, was diese Einschreibemethode bewirkt. Diese Option ist nützlich, wenn es mehrere Instanzen von AutoEnrol in einem Kurs gibt.';
$string['loginenrol'] = 'Einschreibungen beim Login erlauben';
$string['loginenrol_desc'] = 'Wenn Sie die Einschreibung beim Login erlauben, könnte das die Leistung Ihrer Website beeinträchtigen. Als Alternative kann eine geplante Task verwendet werden, um die Einschreibungen für alle Kurse zu aktualisieren - oder Sie benutzen cli für bestimmte Kurse.';
$string['longtimenosee'] = 'Inaktive Nutzer/innen abmelden nach';
$string['longtimenosee_help'] = 'Wenn Nutzer/innen längere Zeit nicht auf einen Kurs zugegriffen haben, werden sie automatisch abgemeldet. Dieser Parameter legt diese Zeitspanne fest.';
$string['m_confirmation'] = 'Bestätigung auf den Einschreibebildschirm';
$string['m_course'] = 'Diesen Kurs laden';
$string['m_site'] = 'Auf den Website einloggen';
$string['maxenrolled'] = 'Maximal eingeschriebene Nutzer/innen';
$string['maxenrolled_help'] = 'Diese Option legt die maximale Anzahl der Nutzer/innen fest, die automatisch eingeschrieben werden können. 0 bedeutet keine Begrenzung.';
$string['messageprovider:expiry_notification'] = 'Mitteilungen zum Auslaufen der automatischen Einschreibung';
$string['method'] = 'Einschreiben, wenn';
$string['method_help'] = 'Diese Option verändert das Verhalten des Plugins und schreibt Nutzer/innen bereits beim Einloggen in den Kurs ein, anstatt auf das Aufrufen des Kurses zu warten. Dies ist hilfreich für Kurse, die standardmäßig in der Liste "Meine Kurse" von Nutzer/innen angezeigt werden sollen.';
$string['newenrols'] = 'Neue Einschreibungen erlauben';
$string['newenrols_desc'] = 'Standardmäßig die "Automatische Einschreibung" in neue Kurse erlauben';
$string['newenrols_help'] = 'Diese Option legt fest, ob sich Nutzer/innen automatisch in diesen Kurs einschreiben können.';
$string['nogroupon'] = 'Keine Gruppen anlegen';
$string['pluginname'] = 'Automatische Einschreibung';
$string['pluginname_desc'] = 'Das Plugin "Automatische Einschreibung" erlaubt angemeldeten Nutzer/innen automatisch den Zugriff auf einem Kurs und schreibt sie dort ein. Dies ist vergleichbar mit dem Gastzugang, aber Nutzer/innen werden dauerhaft eingeschrieben und können an Foren und Aktivitäten teilnehmen.';
$string['pluginnotenabled'] = 'Automatische Einschreibung deaktiviert';
$string['privacy:metadata:core_group'] = 'Das Plugin "Automatische Einschreibung" kann neue Gruppen erstellen oder Teilnehmer/innen, die dem Nutzerfilter entsprechen, in bestehende Gruppen hinzuzufügen.';
$string['removegroups'] = 'Gruppen entfernen';
$string['removegroups_desc'] = 'Soll beim Löschen einer Einschreibeinstanz versucht werden, die von ihr erstellten Gruppen zu entfernen?';
$string['role'] = 'Standardmäßig zugewiesene Rolle';
$string['role_help'] = 'Diese Option legt fest, mit welcher Rollenzuweisung neue Nutzer/innen eingeschrieben werden.';
$string['selfunenrol'] = 'Selber abmelden erlauben';
$string['selfunenrol_desc'] = 'Bei Kursen mit automatischer Einschreibung dürfen sich standardmäßig Nutzer/innen selber wieder abmelden.';
$string['selfunenrol_help'] = 'Wenn diese Option aktiviert ist, können Nutzer/innen sich selber aus dem Kurs abmelden.';
$string['sendcoursewelcomemessage'] = 'Begrüßungsmitteilung senden';
$string['sendcoursewelcomemessage_help'] = 'Wenn Nutzer/innen automatisch in den Kurs eingeschrieben werden, kann ihnen eine Begrüßungsmitteilung per E-Mail geschickt werden. Wenn sie vom Kurskontakt (standardmäßig Trainer/in) gesendet wird und mehrere Personen diese Rolle haben, wird die E-Mail von der ersten Person gesendet, der die Rolle zugewiesen wurde.';
$string['sendexpirynotificationstask'] = 'Task zum Senden von Ablaufmitteilungen der automatischen Einschreibung';
$string['softmatch'] = 'Weiche Übereinstimmung';
$string['softmatch_help'] = 'Wenn diese Option aktiviert ist, werden Nutzer/innen auch dann automatisch eingeschrieben, wenn sie nur teilweise mit dem unter "Nur zulassen" hinterlegten Filterwert übereinstimmen. Eine genaue Übereinstimmung wird nicht verlangt, die Groß- und Kleinschreibung wird nicht berücksichtigt. Der Wert von "Filtern nach" wird für den Gruppennamen verwendet.';
$string['status'] = 'Bestehende Einschreibungen erlauben';
$string['status_desc'] = 'Die Einschreibemethode "Automatische Einschreibung" in neuen Kursen aktivieren.';
$string['status_help'] = 'Wenn diese Option aktiviert und die Option "Neue Einschreibungen zulassen" deaktiviert ist, können nur Nutzer/innen auf den Kurs zugreifen, die zuvor automatisch eingeschrieben wurden. Wenn diese Option deaktiviert ist, ist diese Methode der automatischen Einschreibung deaktiviert, da alle bestehenden automatischen Einschreibungen ausgesetzt werden und neue Nutzer/innen sich nicht automatisch einschreiben können.';
$string['syncenrolmentstask'] = 'Task zum Synchronisieren der automatischen Einschreibung';
$string['syncexpirationstask'] = 'Task zum Prüfen des Ablaufes der automatischen Einschreibung';
$string['unenrolselfconfirm'] = 'Möchten Sie sich wirklich vom Kurs "{$a}" abmelden? Sie können den Kurs erneut besuchen und sich erneut einschreiben, aber alle Infos über Sie, wie Bewertungen und eingereichte Aufgaben, können verloren gehen.';
$string['unenrolusers'] = 'Nutzer/innen abmelden';
$string['userfilter'] = 'Nutzerfilter';
$string['userfilter_help'] = 'Wenn diese Option aktiviert ist, werden Nutzer/innen nur dann eingeschrieben, wenn sie zu den Regeln passen.';
$string['warning'] = 'Achtung!';
$string['warning_message'] = 'Wenn Sie dieses Plugin zu Ihrem Kurs hinzufügen, können alle authentifizierten Nutzer/innen auf Ihren Kurs zugreifen. Installieren Sie dieses Plugin nur, wenn Sie einen automatischen Zugang zu Ihrem Kurs ermöglichen möchten.';
$string['welcomemessage'] = 'Begrüßungsmitteilung';
$string['welcometocourse'] = 'Willkommen an {$a}';
$string['welcometocoursetext'] = 'Willkommen im Kurs {$a->coursename}!

Wenn noch nicht geschehen, bearbeiten Sie bitte Ihre Profilseite, so dass Sie alle besser kennenlernen können:

{$a->profileurl}';
