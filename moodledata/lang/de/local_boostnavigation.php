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
 * Strings for component 'local_boostnavigation', language 'de', version '4.5'.
 *
 * @package     local_boostnavigation
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['inc_bottomnodes'] = 'Endknoten';
$string['inc_bottomnodeslocation'] = 'nach dem Hauptabschnitt der Navigation (vergleichbar zum Knoten "Webseiten-Administration")';
$string['inc_coursenode'] = 'Kursknoten';
$string['inc_coursenodes'] = 'Kursknoten';
$string['inc_coursenodeslocation'] = 'zum Kursbereich in der Navigation (wo sich die Knoten für die Kursabschnitte befinden)';
$string['inc_custombottomnodes'] = 'Eigene Endknoten';
$string['inc_customcoursenodes'] = 'Eigene Kursknoten';
$string['inc_customrootnodes'] = 'Eigene Hauptknoten';
$string['inc_customwhoadmins'] = 'Administrator/innen';
$string['inc_customwhousers'] = 'alle Nutzer/innen';
$string['inc_mycoursesrootnode'] = 'Hauptknoten "Meine Kurse"';
$string['inc_notselectedhomenode'] = 'nicht ausgewählte Startseite / Dashboard';
$string['inc_rootnode'] = 'Hauptknoten';
$string['inc_rootnodes'] = 'Hauptknoten';
$string['inc_rootnodeslocation'] = 'zum Hauptbereich in der Navigation (wo sich unter anderem der Knoten "Meine Kurse" befindet)';
$string['inc_selectedhomenode'] = 'ausgewählte Startseite / Dashboard';
$string['mycoursesrootnodefilterhintenabledcourselist'] = 'Kursliste gefiltert nach:';
$string['mycoursesrootnodefilterhintenabledcurrentfilter'] = 'Aktueller Kursfilter:';
$string['mycoursesrootnodefilterlink'] = 'Filter ändern';
$string['pluginname'] = 'Boost Navigations-Frickelei';
$string['privacy:metadata:preference:collapse'] = 'Der Status des Zusammenklappens eines Knotens in der Navigation.';
$string['privacy:request:preference:collapse'] = 'Der Status des Zusammenklappens des Knotens "{$a->nodename}" in der Navigation ist {$a->collapse}.';
$string['setting_collapsecustomnodes'] = '{$a->what} für {$a->who} zusammenklappbar';
$string['setting_collapsecustomnodes_desc'] = 'Durch Aktivierung dieser Einstellung können die {$a->what} für {$a->who} zusammengeklappt werden.<br/>
<em>Diese Einstellung wird nur verarbeitet, wenn in der zugehörigen Einstellung mindestens ein eigener Knoten hinzugefügt wurde.</em>';
$string['setting_collapsecustomnodesaccordion'] = '{$a->what} für {$a->who} zusammenklappen';
$string['setting_collapsecustomnodesaccordion_desc'] = 'Durch Aktivierung dieser Einstellung werden die {$a->what} für {$a->who} zusammengeklappt.';
$string['setting_collapsecustomnodesdefault'] = '{$a->what} für {$a->who} standardmäßig zusammenklappen';
$string['setting_collapsecustomnodesdefault_desc'] = 'Durch Aktivierung dieser Einstellung werden die {$a->what} für {$a->who} standardmäßig zugeklappt ausgeliefert.';
$string['setting_collapsecustomnodesicon'] = 'Elternknoten-Icon der {$a->what} für {$a->who} anzeigen';
$string['setting_collapsecustomnodesicon_desc'] = 'Mit dieser Einstellung steuern Sie, ob Elternknoten-Icons der {$a->what} für {$a->who} angezeigt werden und / oder ob diese Elternknoten eingerückt werden.';
$string['setting_collapsecustomnodessession'] = 'Zusammenklapp-Status der {$a->what} für {$a->who} nur für Sitzung speichern';
$string['setting_collapsecustomnodessession_desc'] = 'Durch Aktivieren dieser Einstellung steuern Sie, dass der Status, ob die {$a->what} für {$a->who} zusammengeklappt oder ausgeklappt sind, nur innerhalb einer Sitzung gespeichert wird.';
$string['setting_collapsemycoursesnodeperformancehint'] = 'Beachten Sie, dass diese Einstellung nur funktioniert, wenn Sie die Einstellung <a href="{$a->url}">navshowmycoursecategories</a> nicht aktiviert haben. Falls Sie navshowmycoursecategories aktiviert haben, wird diese Einstellung ignoriert werden.';
$string['setting_collapsenode'] = '{$a->what} "{$a->which}" zusammenklappbar';
$string['setting_collapsenode_desc'] = 'Durch Aktivierung dieser Einstellung kann der {$a->what} "{$a->which}" zusammengeklappt werden.';
$string['setting_collapsenodeaccordionexplanation'] = 'Dies bedeutet, dass nur ein Elternknoten ausgeklappt sein kann. Wird ein zweiter Elternknoten ausgeklappt, wird der aktuell ausgeklappte Knoten automatisch zusammengeklappt. Wenn diese Einstellung deaktiviert ist, können mehrere Elternknoten gleichzeitig ausgeklappt sein.';
$string['setting_collapsenodedefault'] = '{$a->what} "{$a->which}" standardmäßig zusammenklappen';
$string['setting_collapsenodedefault_desc'] = 'Durch Aktivierung dieser Einstellung wird der {$a->what} "{$a->which}" standardmäßig zugeklappt ausgeliefert.';
$string['setting_collapsenodeicon'] = 'Elternknoten-Icon des {$a->what} "{$a->which}" anzeigen';
$string['setting_collapsenodeicon_desc'] = 'Mit dieser Einstellung steuern Sie, ob das Elternknoten-Icon des {$a->what} "{$a->which}" angezeigt wird und / oder ob dieser Elternknoten eingerückt wird.';
$string['setting_collapsenodeicon_justindent'] = 'Kein Icon anzeigen, aber den Elternknoten einrücken';
$string['setting_collapsenodeicon_none'] = 'Kein Icon anzeigen und den Elternknoten auch nicht einrücken';
$string['setting_collapsenodeicon_yes'] = 'Ein Icon anzeigen und den Elternknoten einrücken';
$string['setting_collapsenodesdefaultexplanation'] = 'Andernfalls sind sie standardmäßig ausgeklappt. Diese Einstellung hat nur Einfluss auf den initialen Zusammenklapp-Status, wenn der Knoten zum ersten mal angezeigt wird.';
$string['setting_collapsenodesession'] = 'Zusammenklapp-Status des {$a->what} "{$a->which}" nur für Sitzung speichern';
$string['setting_collapsenodesession_desc'] = 'Durch Aktivieren dieser Einstellung steuern Sie, dass der Status, ob der {$a->what} "{$a->which}" zusammengeklappt oder ausgeklappt ist, nur innerhalb einer Sitzung gespeichert wird.';
$string['setting_collapsenodesheading'] = '{$a->what} in der Navigation zusammenklappen';
$string['setting_collapsenodessessionexplanation'] = 'Nach dem nächsten Logout und Login eines Nutzers wird der Status wieder auf den Standardwert, welcher weiter oben definiert ist, gesetzt. Wenn die Einstellung deaktiviert ist, wird der Status sitzungsübergreifend gespeichert.';
$string['setting_collapsenodestechnicalhint'] = 'Technischer Hintergrund: Diese Funktionalität wird erreicht, indem etwas JavaScript und CSS zur Seite hinzugefügt wird, welche die Knoten zweiter Ebene anzeigt oder verbirgt, sobald der Nutzer auf den Knoten klickt. Der Zuammenklapp-Status des Knoten wird in der Session jedes Nutzers verarbeitet und in einer persönlichen Nutzereinstellung gespeichert. Die Knoten werden also nur in der Navigation verborgen, sie verbleiben aber im internen Navigationsbaum und können weiterhin von anderen Teilen von Moodle genutzt werden.';
$string['setting_customnodesusageadminsexample'] = 'Moodle|http://www.moodle.org|en,de<br />
Nutzerliste|/admin/user.php';
$string['setting_customnodesusageadminsintro'] = 'Jede Zeile besteht aus einem Link-Titel, einer Link-URL und unterstützten Sprachen (optional). Die einzelnen Elemente sind mit einem Trennzeichen ("|") separiert. Jeder Knoten steht in einer neuen Zeile.';
$string['setting_customnodesusageadminsparameternote'] = 'Eigene Knoten für Administratoren werden von der selben Funktion verarbeitet wie eigene Knoten für alle Nutzer/innen. Daher stehen für eigene Knoten für Administratoren neben den oben angegebenen Parametern prinzipiell dieselben Parameter wie für eigene Knoten für alle Nutzer/innen zur Verfügung. Sie können diese problemlos einsetzen falls Sie sie für einen speziellen Bedarf benötigen, auch wenn sie hier aus Gründen der Vereinfachung nicht noch einmal dokumentiert werden.';
$string['setting_customnodesusagechildnodes'] = 'Eigene Knoten können mit einer Hierarchieebene verschachtelt werden. Dies bedeutet, dass ein benutzerdefinierter Knoten Kindknoten haben kann. Um einen Knoten als einen Kindknoten zu deklarieren, stellen Sie diesem einfach einen Bindestrich voran.';
$string['setting_customnodesusagechildnodesexample'] = 'Administration|/admin/index.php<br />
-Nutzerliste|/admin/user.php<br />
-Kursverwaltung|/course/management.php';
$string['setting_customnodesusagechildnodespleasenoterecursive'] = 'Wenn ein Elternknoten aufgrund einer Beschränkung (Sprache, globale Gruppe, Rolle...) nicht angezeigt wird, werden seine Kindknoten auch nicht dargestellt.';
$string['setting_customnodesusagechildnodespleasenoteurl'] = 'Aus technischen Gründen benötigt ein Elternknoten immer eine gültige URL, auch wenn der Knoten später zusammen geklappt werden soll.';
$string['setting_customnodesusageexamples'] = 'Beispiele:';
$string['setting_customnodesusageparameterbeforenodedd'] = 'Dieser Parameter kann dazu verwendet werden um anzugeben vor welchem anderen Knoten ein Knoten eingefügt werden soll. Sie finden den Wert für diesen Parameter im \'data-key\' HTML Attribut des Knotens vor welchem Sie den Knoten einfügen möchten. Falls Sie eine Kombination bestehend aus einem Eltern- und einem oder mehreren Kind-Knoten vor einen anderen Knoten platzieren möchten, muss dieser Parameter für alle Knoten der Kombination angegeben werden.<br/>Bitte beachten Sie, dass Sie nur Knoten aus demselben Kontext wie der zu dem Sie den Knoten hinzufügen möchten referenzieren können. Zum Beispiel können Sie \'privatefiles\' oder \'calendar\' oder \'contentbank\' in der Hauptnavigation sowie \'participants\' oder \'grades\' in der Kursnavigation referenzieren. Falls der \'Vor-diesem-Knoten Schlüssel\' nicht gefunden oder aus anderen Gründen nicht verarbeitet werden kann, wird der Knoten am Ende der Navigation hinzugefügt.<br />Bitte beachten Sie auch, dass Sie mit diesem Parameter gegebenenfalls nicht alle anderen Knoten referenzieren können und der Parameter daher als teilweise experimentell angesehen werden muss.';
$string['setting_customnodesusageparameterbeforenodedt'] = '\'Vor-diesem-Knoten Schlüssel\' (optional):';
$string['setting_customnodesusageparameterclassdd'] = 'Diese Einstellung kann dazu verwendet werden, um dem eigenen Knoten eine oder mehrere zusätzliche CSS-Klassen hinzuzufügen.';
$string['setting_customnodesusageparameterclassdt'] = 'CSS-Klassen (optional):';
$string['setting_customnodesusageparametercohortdd'] = 'Der Knoten wird nur Mitgliedern der hier angegebenen globalen Gruppen angezeigt. Nutzen Sie die Gruppen-ID, nicht den Namen. Mehrere globale Gruppen werden über Komma separiert. Um den Knoten allen Nutzer/innen unabhängig von globalen Gruppen anzuzeigen, lassen Sie dieses Feld einfach leer.';
$string['setting_customnodesusageparametercohortdt'] = 'Unterstützte globale Gruppen (optional):';
$string['setting_customnodesusageparametericondd'] = 'Dieses Icon wird als Icon für den Knoten verwendet werden, z.B. fa-flag. Nutzen Sie den Font Awesome Icon Identifier (<a href="https://fontawesome.com/v4.7.0/icons/">Siehe Liste der Icons auf fontawesome.io</a>) um das zu nutzende Icon zu referenzieren. Font Awesome ist in Boost enthalten, klassische Moodle pix icons werden hier nicht unterstützt. Um den Knoten mit einem standardmäßigen Bullet Icon anzuzeigen, lassen Sie dieses Feld einfach leer.';
$string['setting_customnodesusageparametericondt'] = 'Icon (optional):';
$string['setting_customnodesusageparameteriddd'] = 'Dieser Parameter kann dazu verwendet werden, um das Data-key Attribut eines Knotens auf den angegebenen Wert zu setzen. Der angegebene Wert wird von allen nicht-alphanumerischen Zeichen befreit und mit dem betreffenden Bereich eigener Knoten gepräfixed. Ein Knoten im Bereich eigener Knoten am Ende der Navigation mit dem Wert \'my_node\' würde dann ein Data-key Attribut mit dem Wert \'localboostnavigationcustombottomadminsmynode\' erhalten. Diese Einstellung gibt Ihnen die Möglichkeit, den Knoten in CSS Selektoren oder gar in eigenem JavaScript Code zu referenzieren. Das Setzen desselben Data-key für mehrere Knoten wird hier nicht verhindert, aber beachten Sie, dass doppelte Data-keys langfristig Probleme verursachen könnten. Falls dieses Feld leer gelassen wird, wird der eigene Knoten einen automatisch erstellten Data-key erhalten, der nicht unbedingt als Referenz herangezogen werden kann.';
$string['setting_customnodesusageparameteriddt'] = 'Data-key Attribut (optional):';
$string['setting_customnodesusageparameterlanguagedd'] = 'Der Knoten wird nur Nutzer/innen angezeigt, die die entsprechende Sprache eingestellt haben. Mehrere unterstütze Sprachen werden über Komma separiert. Um den Knoten in allen Sprachen anzuzeigen, lassen Sie dieses Feld leer.';
$string['setting_customnodesusageparameterlanguagedt'] = 'Unterstützte Sprachen (optional):';
$string['setting_customnodesusageparameterlinkdd'] = 'Das Linkziel muss eine vollständige URL (z.B. https://moodle.org) oder ein relativer Pfad innerhalb der Moodle Instanz (z.B. /login/logout.php) sein.';
$string['setting_customnodesusageparameterlinkdt'] = 'Link:';
$string['setting_customnodesusageparameterlogicaldd'] = 'Dieser Parameter kann dazu verwendet werden um die logische Verknüpfung der Parameter für globale Gruppen, Rollen und globale Rollen abzuändern. Wenn Sie diesen Parameter auf AND setzen oder ihn weglassen werden die Parameter für globale Gruppen, Rollen und globale Rollen mit AND logisch verknüpft und der Knoten wird nur sichtbar sein wenn ALLE Parameter zutreffen. Wenn Sie diesen Parameter auf OR setzen oder ihn weglassen werden die Parameter für globale Gruppen, Rollen und globale Rollen mit OR logisch verknüpft und der Knoten wird nur sichtbar sein wenn mindestens EINER der Parameter zutrifft. Dies gibt Ihnen die Flexibilität um einen Knoten zu erstellen, der beispielsweise Nutzern mit einer bestimmten Kursrolle als auch Nutzern mit einer bestimmten globalen Rolle angezeigt wird wie in unserem Beispiel oben angegeben.';
$string['setting_customnodesusageparameterlogicaldt'] = 'Logischer Verknüpfungs-Operator (optional):';
$string['setting_customnodesusageparameterroledd'] = 'Der Knoten wird nur Nutzer/innen mit bestimmten Rollen angezeigt. Nutzen Sie jeweils den Kurznamen der Rollen. Mehrere Rollen werden über Komma separiert. Um den Knoten allen Nutzer/innen unabhängig von Rollen anzuzeigen, lassen Sie dieses Feld einfach leer.';
$string['setting_customnodesusageparameterroledt'] = 'Unterstützte Rollen (optional):';
$string['setting_customnodesusageparameters'] = 'Infos zu den Parametern:';
$string['setting_customnodesusageparametersystemroledd'] = 'Der Knoten wird nur Nutzer/innen mit bestimmten globalen Rollen angezeigt. Nutzen Sie jeweils den Kurznamen der globalen Rollen. Der Kurzname \'admin\' identifiziert die Administratoren. Mehrere Rollen werden über Komma separiert. Um den Knoten allen Nutzer/innen unabhängig von globalen Rollen anzuzeigen, lassen Sie dieses Feld einfach leer.';
$string['setting_customnodesusageparametersystemroledt'] = 'Unterstützte globale Rollen (optional):';
$string['setting_customnodesusageparametertitledd'] = 'Dieser Text wird als anklickbare Beschriftung des Knotens angezeigt.';
$string['setting_customnodesusageparametertitledt'] = 'Titel:';
$string['setting_customnodesusagepleasenote'] = 'Beachten Sie:';
$string['setting_customnodesusagepleasenotecheck'] = 'Falls der hinzugefügte Knoten nicht in der Navigation erscheint, prüfen Sie bitte, ob Sie alle Pflichtparameter korrekt eingestellt sind, ob der Knoten in der eingestellten Nutzersprache überhaupt angezeigt werden kann und ob die anderen optionalen Parameter für die Nutzer/innen zutreffen.';
$string['setting_customnodesusagepleasenotecss'] = 'Aufgrund der Art und Weise wie die Navigation in Boost in Moodle gebaut ist, werden alle Knoten gleichartig angezeigt. Es ist nicht möglich, eigene CSS-Klassen, IDs für HTML-Elemente oder ein Zielattribut zum Öffnen eines Links in einem neuen Fenster anzugeben.';
$string['setting_customnodesusagepleasenotelink'] = 'Das angegebene Linkziel kann ebenfalls Platzhalter enthalten, z.B. /course/edit.php?id={courseid} um einen Knoten zu erzeugen, der auf die Einstellungen des aktuellen Kurses verlinkt.';
$string['setting_customnodesusagepleasenotemultilang'] = 'Der Link-Titel Parameter kann <a href="https://docs.moodle.org/en/Multi-language_content_filter">mehrsprachige Texte</a> enthalten, mit denen Knoten erzeugt werden können, deren Titel sich abhängig von der Sprache des Nutzers anpasst.';
$string['setting_customnodesusagepleasenotephavailable'] = 'Folgende Platzhalter stehen zur Verfügung:';
$string['setting_customnodesusagepleasenotephcoursefullnamedd'] = 'Der Langname des Kurses';
$string['setting_customnodesusagepleasenotephcoursefullnamedt'] = '{coursefullname}:';
$string['setting_customnodesusagepleasenotephcourseiddd'] = 'Die (interne) ID des Kurses';
$string['setting_customnodesusagepleasenotephcourseiddt'] = '{courseid}:';
$string['setting_customnodesusagepleasenotephcourseshortnamedd'] = 'Der Kurzname des Kurses';
$string['setting_customnodesusagepleasenotephcourseshortnamedt'] = '{courseshortname}:';
$string['setting_customnodesusagepleasenotepheditinglinkdd'] = 'Der Wert \'on\' oder \'off\' welcher benötigt wird, um den Bearbeiten-Modus an- und auszuschalten';
$string['setting_customnodesusagepleasenotepheditinglinkdt'] = '{editingtoggle}:';
$string['setting_customnodesusagepleasenotepheditingtitledd'] = 'Der Wert \'Bearbeiten einschalten\' oder \'Bearbeiten ausschalten\' des verwendeten Sprachpakets';
$string['setting_customnodesusagepleasenotepheditingtitledt'] = '{editingtoggle}:';
$string['setting_customnodesusagepleasenotephexplanation'] = 'Platzhalter werden in geschweifte Klammern eingefasst und automatisch beim Erzeugen des Knotens ersetzt.';
$string['setting_customnodesusagepleasenotephpagecontextiddd'] = 'Die Kontext-ID der aktuellen Seite';
$string['setting_customnodesusagepleasenotephpagecontextiddt'] = '{pagecontextid}:';
$string['setting_customnodesusagepleasenotephpagepathdd'] = 'Der URL Pfad der aktuellen Seite';
$string['setting_customnodesusagepleasenotephpagepathdt'] = '{pagepath}:';
$string['setting_customnodesusagepleasenotephsesskeydd'] = 'Der Sesskey zur Verwendung in abgesicherten URLs';
$string['setting_customnodesusagepleasenotephsesskeydt'] = '{sesskey}:';
$string['setting_customnodesusagepleasenotephuserfullnamedd'] = 'Der Name des angemeldeten Nutzers';
$string['setting_customnodesusagepleasenotephuserfullnamedt'] = '{userfullname}:';
$string['setting_customnodesusagepleasenotephuseriddd'] = 'Die (interne) ID des angemeldeten Nutzers';
$string['setting_customnodesusagepleasenotephuseriddt'] = '{userid}:';
$string['setting_customnodesusagepleasenotephuserusernamedd'] = 'Der Anmeldename des angemeldeten Nutzers';
$string['setting_customnodesusagepleasenotephuserusernamedt'] = '{userusername}:';
$string['setting_customnodesusagepleasenotepipes'] = 'Möchten Sie optionale Werte nicht nutzen, müssen Sie für diese Parameter trotzdem ein Trennungszeichen setzen, wenn sich die Option zwischen anderen Parametern befindet. Schauen Sie sich dazu das Beispiel für die mathematische Fakultät an.';
$string['setting_customnodesusagepleasenotetitle'] = 'Der angegebene Titel kann auch Platzhalter enthalten, z.B. {coursefullname} um einen Knoten zu erzeugen, der mit dem Namen des aktuellen Kurses beschriftet ist.';
$string['setting_customnodesusageusersexample'] = 'Moodle|http://www.moodle.org|en,de<br />
Unsere Universität|http://www.our-university.edu<br />
Mathematische Fakultät|http://www.our-university.edu/math||math<br />
Handbuch für Trainer|http://www.our-university.edu/teacher-handbook|||editingteacher,teacher<br />
Informationen für Studenten|/course/view.php?id=1234||||||fa-graduation-cap<br />
{editingtoggle}|/course/view.php?id={courseid}&sesskey={sesskey}&edit={editingtoggle}|||editingteacher|admin,manager|OR|fa-pencil|editing|participants';
$string['setting_customnodesusageusersintro'] = 'Jede Zeile besteht aus einem Link-Titel, einer Link-URL, unterstützten Sprachen (optional), unterstützten globalen Gruppen (optional), unterstützten Rollen (optional), unterstützten globalen Rollen (optional), dem logischen Verknüpfungs-Operator (optional), einem Icon (optional), dem Data-key Attribut (optional) und einem \'Vor-diesem-Knoten Schlüssel\' (optional). Die einzelnen Elemente sind mit einem Trennzeichen ("|") separiert. Jeder Knoten steht in einer neuen Zeile.';
$string['setting_insertactivitiescoursenodeexplanation'] = 'Dieser Knoten enthält wiederum Knoten, die auf die Übersichtsseiten der Aktivitäten verlinken. Dieser Knoten bringt im Prinzip die Funktionalität des "Aktivitäten"-Blocks in die Navigation.';
$string['setting_insertactivitiescoursenoderealicons'] = 'Aktivitätsspezifische Icons verwenden';
$string['setting_insertactivitiescoursenoderealicons_desc'] = 'Durch Aktivieren dieser Einstellung werden die Knoten unterhalb des "Aktivitäten" Knotens die jeweiligen Icons der Aktivitäten verwendet. Diese Icons sind farbig und detaillierter als die FontAwesome Icons der restlichen Navigation. Durch Deaktivieren dieser Einstellung wird dasselbe FontAwesome Icon für alle Knoten unterhalb des "Aktivitäten" Knotens verwendet werden.';
$string['setting_insertcoursesectionscoursenodecorehint'] = 'Bitte beachten: Diese Einstellung funktioniert nur, wenn Sie die Einstellung <a href="{$a->url}">linkcoursesections</a> aktiviert haben. Falls Sie linkcoursesections nicht aktiviert haben, wird diese Einstellung ignoriert.';
$string['setting_insertcoursesectionscoursenodeexplanation'] = 'Dieser Knoten wird oberhalb des ersten Abschnitts des aktuellen Kurses platziert.';
$string['setting_insertcustomnodes'] = '{$a->what} für {$a->who} hinzufügen';
$string['setting_insertcustomnodes_desc'] = 'Mit dieser Einstellung können Sie {$a->what} zur Navigation hinzufügen, welche {$a->where} hinzugefügt werden und für {$a->who} angezeigt werden.';
$string['setting_insertnode'] = '{$a->what} "{$a->which}" hinzufügen';
$string['setting_insertnode_desc'] = 'Durch Aktivieren dieser Einstellung fügen Sie den {$a->what} "{$a->which}" zur Navigation hinzu.';
$string['setting_insertnodescollapsehint'] = 'Bitte beachten Sie, dass dieser neu hinzugefügte Knoten mit einem Link hinterlegt ist, welcher auf die Kursstartseite verlinkt. Dies ist nötig, da Boost leider das Hinzufügen von Knoten ohne Link nicht unterstützt. Der Link wird, sobald Sie ebenfalls die Einstellung zum Zusammenklappen des Knoten aktivieren, wirkungslos sein.';
$string['setting_insertnodesheading'] = '{$a->what} zur Navigation hinzufügen';
$string['setting_insertresourcescoursenodeexplanation'] = 'Dieser Knoten verlinkt auf die Übersichtsseite für Arbeitsmaterial.<br /><em>Diese Einstellung steht in Zusammenhang mit der Einstellung "\'Aktivitäten\'-Knoten hinzufügen". Wenn Sie beide Einstellungen aktivieren, erhalten Sie sowohl einen "Aktivitäten"- als auch einen "Arbeitsmaterial"-Knoten. Wenn Sie nur die "Aktivitäten"-Einstellung aktivieren, erhalten Sie, wird der "Aktivitäten"-Knoten auch einen Link zur Übersichtsseite für Arbeitsmaterial enthalten.</em>';
$string['setting_modifymycoursesrootnodefilterhint'] = 'Knoten mit Hinweis über aktive Filter anzeigen';
$string['setting_modifymycoursesrootnodefilterhint_desc'] = 'Durch Aktivieren dieser Einstellung wird am Ende der "Meine Kurse"-Liste in der Hauptnavigation ein weiterer Knoten angehängt, der dem Nutzer anzeigt wieso die Liste die Einträge hat die sie aktuell eben hat (d.h. welcher aktive Filter zur gegebenen Kursliste geführt hat).';
$string['setting_modifymycoursesrootnodefilterlink'] = 'Knoten mit Link zum Filter anzeigen';
$string['setting_modifymycoursesrootnodefilterlink_desc'] = 'Durch Aktivieren dieser Einstellung wird am Ende der "Meine Kurse"-Liste in der Hauptnavigation ein weiterer Knoten angehängt, der dem Nutzer hilft den aktiven Filter zu ändern (das heißt der Link zeigt direkt auf das Dashboard).<br /><em>Diese Einstellung ist verknüpft mit der Einstellung "Knoten mit Hinweis über aktive Filter anzeigen". Falls Sie beide Einstellungen aktivieren, dann wird ein kombinierter Knoten angezeigt anstatt zweier Knoten.</em>';
$string['setting_modifymycoursesrootnodeshowfiltered'] = 'Gefilterte Kurse anzeigen';
$string['setting_modifymycoursesrootnodeshowfiltered_desc'] = 'Durch Aktivieren dieser Einstellung passen Sie die "Meine Kurse"-Liste in der Hauptnavigation dahingehend an dass nur die Kurse gelistet werden, die aktuell im "Kursübersicht" Block gemäß des jeweils gewählten Filter eines Nutzers dargestellt werden. Durch Deaktivieren dieser Einstellung wird die "Meine Kurse"-Liste in der Hauptnavigation die Kurs anzeigen, die als "Laufend" eingestuft werden, was Moodle\'s Standardverhalten entspricht.';
$string['setting_modifymycoursesrootnodeshowfilterednavcourselimit'] = 'Bitte beachten Sie: Durch Aktivieren dieser Einstellung wird der Wert der Einstellung <a href="{$a->url}">navcourselimit</a> bei jedem Seitenaufruf auf 100.000 gesetzt. Das Setzen eines so hohen Werts ist nötig, damit unter allen Umständen vermieden wird dass die Kursliste gekürzt wird, wodurch der Filtermechanismus nicht mehr funktionieren würde.';
$string['setting_modifynodesheading'] = '{$a->what} in der Navigation anpassen';
$string['setting_movecontentbanknodeincoursecontext'] = '{$a->rootnode} "{$a->contentbank}" im Kurs-Kontext verschieben';
$string['setting_movecontentbanknodeincoursecontext_desc'] = 'Durch Aktivieren dieser Einstellung verschieben Sie den {$a->rootnode} "{$a->contentbank}" auf Seiten, die innerhalb eines Kurses angesiedelt sind, in den {$a->coursenode} Abschnitt der Navigation';
$string['setting_movecontentbanknodeincoursecontextbefore'] = '{$a->rootnode} "{$a->contentbank}" vor Knoten {$a->coursenode} verschieben';
$string['setting_movecontentbanknodeincoursecontextbefore_desc'] = 'Mit dieser Einstellung definieren Sie vor welchen {$a->coursenode} der {$a->rootnode} "{$a->contentbank}" verschoben werden wird. Bitte beachten Sie dabei dass es an Ihnen liegt sicherzustellen dass der konfigurierte {$a->coursenode} auch derselben Menge von Nutzern angezeigt wird wie denen welche den "{$a->contentbank}" {$a->rootnode} sehen. Falls der konfigurierte {$a->coursenode} einem bestimmten Nutzern nicht angezeigt wird, wird der "{$a->contentbank}" {$a->rootnode} an das Ende des {$a->coursenode} Abschnitts verschoben werden und eine Debug Warnung wird angezeigt / ins Logfile geschrieben werden.';
$string['setting_movenodesheading'] = '{$a->what} in Navigation verschieben';
$string['setting_movenodestechnicalhint'] = 'Technischer Hintergrund: Der Knoten wird verschoben, indem er an der ursprünglichen Stelle aus der Navigation entfernt wird und derselbe Knoten an einer anderen Stelle wieder eingehängt wird. Unterm Strich wird er damit innerhalb der Navigation nur verschoben und verbleibt ansonsten unverändert, so dass er auch weiterhin von anderen Teilen von Moodle genutzt werden kann.';
$string['setting_removebadgescoursenodeexplanation'] = 'Der Knoten wird nur entfernt falls im Kurs keine Auszeichnungen angelegt sind. Trainer/innen können weiterhin immer auf die Auszeichnungen über das Kursmenü (Zahnrad-Menü) zugreifen.<br /><em>Diese Einstellung wird nur verwendet, wenn das Subsystem für Auszeichnungen in Moodle auch aktiviert ist.</em>';
$string['setting_removecompetenciescoursenodeexplanation'] = 'Der Knoten wird nur entfernt falls im Kurs keine Kompetenzen angelegt sind. Für Trainer/innen wird ein neuer "Kompetenzen" Eintrag zum Kursmenü (Zahnrad-Menü) hinzugefügt.<br /><em>Diese Einstellung wird nur verwendet, wenn das Subsystem für Kompetenzen in Moodle auch aktiviert ist.</em>';
$string['setting_removecoursenodestechnicalhint'] = 'Technischer Hintergrund: Der Knoten wird entfernt, indem er aus dem Navigationsbaum gelöscht wird. Damit kann der Knoten nicht mehr von anderen Teilen in Moodle genutzt werden. Für normale Moodle Instanzen sollte dies jedoch nicht zu Problemen führen.';
$string['setting_removegradescoursenodeexplanation'] = 'Der Knoten wird für alle Nutzer/innen entfernt, ungeachtet ob sie berechtigt wären den Knoten zu sehen und ungeachtet der Einstellung \'Bewertungen anzeigen\' in der Kurs-Administration.';
$string['setting_removemycoursesnodeperformancehint'] = 'Bitte beachten: Wenn Sie diese Einstellung aktivieren und gleichzeitig die Einstellung <a href="{$a->url}">navshowmycoursecategories</a> aktiviert ist, wird das Entfernen des "Meine Kurse"-Knoten mehr Zeit benötigen. Sie sollten in diesem Fall prüfen, ob Sie die Einstellung navshowmycoursecategories nicht deaktivieren können.';
$string['setting_removenode'] = '{$a->what} "{$a->which}" entfernen';
$string['setting_removenode_desc'] = 'Durch Aktivieren dieser Einstellung entfernen Sie den {$a->what} "{$a->which}" aus der Navigation.';
$string['setting_removenodeincoursecontext'] = '{$a->what} "{$a->which}" im Kurs-Kontext entfernen';
$string['setting_removenodeincoursecontext_desc'] = 'Durch Aktivieren dieser Einstellung entfernen Sie den {$a->what} "{$a->which}" aus der Navigation auf Seiten, die innerhalb eines Kurses angesiedelt sind.';
$string['setting_removenodeinnoncoursecontext'] = '{$a->what} "{$a->which}" außerhalb des Kurs-Kontexts entfernen';
$string['setting_removenodeinnoncoursecontext_desc'] = 'Durch Aktivieren dieser Einstellung entfernen Sie den {$a->what} "{$a->which}" aus der Navigation auf Seiten, die nicht innerhalb eines Kurses angesiedelt sind.';
$string['setting_removenodesheading'] = '{$a->what} aus der Navigation entfernen';
$string['setting_removenotselectedhomerootnodeexplanation'] = 'Die nicht ausgewählte Startseite / Dashboard ist die Seite welche der Nutzer nicht als seine Startseite festgelegt hat.';
$string['setting_removeparticipantscoursenodeexplanation'] = 'Der Knoten wird für alle Nutzer/innen entfernt, ungeachtet ob sie berechtigt wären den Knoten zu sehen.';
$string['setting_removerootnodestechnicalhint'] = 'Technischer Hintergrund: Der Knoten wird entfernt, indem sein showinflatnavigation Attribut auf nein gesetzt wird. Damit wird der Knoten nur in der Navigation verborgen, er verbleibt aber im internen Navigationsbaum und kann weiterhin von anderen Teilen von Moodle genutzt werden.';
$string['setting_removeselectedhomerootnodeexplanation'] = 'Die ausgewählte Startseite / Dashboard ist die Seite welche der Nutzer als seine Startseite festgelegt hat.';
$string['settingspage_bottomnodes'] = 'Endknoten';
$string['settingspage_coursenodes'] = 'Kursknoten';
$string['settingspage_custombottomnodes'] = 'Eigene Endknoten';
$string['settingspage_customcoursenodes'] = 'Eigene Kursnoten';
$string['settingspage_customrootnodes'] = 'Eigene Hauptknoten';
$string['settingspage_mycoursesrootnode'] = 'Hauptknoten "Meine Kurse"';
$string['settingspage_rootnodes'] = 'Hauptknoten';
