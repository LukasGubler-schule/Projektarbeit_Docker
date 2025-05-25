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
 * Strings for component 'paygw_stripe', language 'de', version '4.5'.
 *
 * @package     paygw_stripe
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowpromotioncodes'] = 'Promotion-Codes zulassen';
$string['anchoredbilling'] = 'Verwenden Sie den Beginn des aktuellen Intervalls als festes Abrechnungsdatum';
$string['anchoredbilling_help'] = 'Wenn Sie z.B. in der Mitte des Monats ein Abonnement abschließen, wird Ihnen sofort der laufende Monat in Rechnung gestellt.';
$string['apikey'] = 'API Schlüssel';
$string['apikey_help'] = 'Der API-Schlüssel, den wir verwenden, um uns bei Stripe zu identifizieren';
$string['cancel'] = 'Abbrechen';
$string['cancelsubscription'] = 'Abonnement kündigen';
$string['cancelsubscriptionconfirm'] = 'Sind Sie sicher, dass Sie dieses Abonnement kündigen möchten?';
$string['cancelsubscriptions'] = 'Abonnements ändern';
$string['customerdescription'] = 'Moodle-Benutzer-ID: {$a}';
$string['customsubscriptioninterval'] = 'Benutzerdefinierte Abonnementdauer';
$string['customsubscriptioninterval:day'] = 'Tag';
$string['customsubscriptioninterval:month'] = 'Monat';
$string['customsubscriptioninterval:week'] = 'Woche';
$string['customsubscriptioninterval:year'] = 'Jahr';
$string['customsubscriptionintervalcount'] = 'Individuelles Intervall für die Abonnementdauer';
$string['customsubscriptionintervalcount_help'] = 'Individueller Zahlungsintervall einstellbar';
$string['defaulttaxbehavior'] = 'Standard-Steuerverhalten';
$string['defaulttaxbehavior_help'] = 'Standardverhalten der Steuer (inklusive, exklusiv). Änderbar in Stripe Dashboard.';
$string['enableautomatictax'] = 'Automatische Steuer einschalten';
$string['enableautomatictax_desc'] = 'Die automatische Steuer muss im Stripe-Dashboard aktiviert und konfiguriert werden.';
$string['failedtosetdefaultpaymentmethod'] = 'Die Zahlungsmethode für das Abonnement konnte nicht eingerichtet werden. Bitte versuchen Sie es erneut.';
$string['fee'] = 'Gebühr';
$string['gatewaydescription'] = 'Stripe ist ein zugelassener Anbieter von Zahlungsgateways für die Abwicklung von Kreditkartentransaktionen.';
$string['gatewayname'] = 'Stripe';
$string['messageprovider:payment_failed'] = 'Fehlgeschlagene Benachrichtigung bei Zahlungsverzug';
$string['messageprovider:payment_successful'] = 'Benachrichtigung über eine erfolgreiche verspätete Zahlung';
$string['payment:failed:message'] = 'Ihre Zahlung konnte nicht freigegeben werden. Bitte überprüfen Sie Ihre Zahlungsdaten und versuchen Sie es erneut.';
$string['payment:failed:subject'] = 'Zahlung fehlgeschlagen';
$string['payment:successful:message'] = 'Ihre Zahlung war erfolgreich, Sie können jetzt {$a->url} besuchen';
$string['payment:successful:subject'] = 'Zahlung erfolgreich';
$string['paymentcancelled'] = 'Die Zahlung wurde abgebrochen';
$string['paymentmethod:alipay'] = 'Alipay';
$string['paymentmethod:bancontact'] = 'Bancontact';
$string['paymentmethod:card'] = 'Karte';
$string['paymentmethod:eps'] = 'EPS';
$string['paymentmethod:giropay'] = 'giropay';
$string['paymentmethod:ideal'] = 'iDEAL';
$string['paymentmethod:netbanking'] = 'NetBanking';
$string['paymentmethod:p24'] = 'P24';
$string['paymentmethod:sepa_debit'] = 'SEPA-Lastschriftverfahren';
$string['paymentmethod:sofort'] = 'Sofort';
$string['paymentmethod:upi'] = 'UPI';
$string['paymentmethod:wechat_pay'] = 'WeChat Pay';
$string['paymentmethods'] = 'Zahlungsarten';
$string['paymentpending'] = 'Die Zahlung ist noch ausstehend, Sie werden eingeschrieben, sobald die Zahlung eingegangen ist.';
$string['paymentsuccessful'] = 'Die Zahlung war erfolgreich';
$string['paymenttype'] = 'Zahlungsart';
$string['paymenttype:onetime'] = 'Einmalig';
$string['paymenttype:subscription'] = 'Abonnement';
$string['pluginname'] = 'Stripe';
$string['pluginname_desc'] = 'Das Stripe-Plugin ermöglicht es Ihnen, Zahlungen über Stripe zu empfangen.';
$string['privacy:metadata:stripe_customers'] = 'Speichert die Beziehung von Moodle-Nutzern zu Stripe-Kundenobjekten';
$string['privacy:metadata:stripe_customers:customerid'] = 'Von Stripe zurückgegebene Kunden-ID';
$string['privacy:metadata:stripe_customers:userid'] = 'Moodle Benutzer ID';
$string['privacy:metadata:stripe_intents'] = 'Speichert Daten zur Zahlungsabsicht, um den Zahlungsverlauf zu verfolgen';
$string['privacy:metadata:stripe_intents:userid'] = 'Moodle Benutzer ID';
$string['privacy:metadata:stripe_subscriptions'] = 'Speichert die Beziehung von Abonnements in Moodle zu Stripe-Abonnementobjekten';
$string['privacy:metadata:stripe_subscriptions:userid'] = 'Moodle Benutzer ID';
$string['product'] = 'Produkt';
$string['profilecat'] = 'Stripe-Zahlungsabonnements';
$string['scheduledrenewal'] = 'Planmässige Erneuerung';
$string['secretkey'] = 'Geheimer Schlüssel';
$string['secretkey_help'] = 'Geheimer Schlüssel für die Authentifizierung bei Stripe';
$string['status'] = 'Status';
$string['stripeaccount'] = 'Stripe Account ID';
$string['stripeaccount_help'] = 'Für die Erstellung der Branding-Seite für Direktzahlungen';
$string['subscriptionerror'] = 'Es ist ein Fehler bei der Erstellung des Abonnements aufgetreten. Bitte wenden Sie sich an den Administrator der Website, um Hilfe zu erhalten.';
$string['subscriptioninterval'] = 'Abonnementzeitraum';
$string['subscriptionperiod:custom'] = 'Benutzerdefiniert';
$string['subscriptionperiod:daily'] = 'Täglich';
$string['subscriptionperiod:every3months'] = 'Alle 3 Monate';
$string['subscriptionperiod:every6months'] = 'Alle 6 Monate';
$string['subscriptionperiod:monthly'] = 'Monatlich';
$string['subscriptionperiod:weekly'] = 'Wöchentlich';
$string['subscriptionperiod:yearly'] = 'Jährlich';
$string['subscriptions'] = 'Abonnements';
$string['subscriptionssubheading'] = 'Auf dieser Seite werden die von Ihnen erworbenen Abonnements aufgelistet. Hier können Sie Abonnements kündigen. Die Kündigung wird sofort bearbeitet und Sie können den Kurs nicht mehr betreten.';
$string['subscriptionstatus:active'] = 'Aktiv';
$string['subscriptionstatus:canceled'] = 'Abgesagt';
$string['subscriptionstatus:incomplete'] = 'Unvollständig';
$string['subscriptionstatus:incomplete_expired'] = 'Abgelaufen';
$string['subscriptionstatus:past_due'] = 'Überfällige Zahlung';
$string['subscriptionstatus:paused'] = 'Pausiert';
$string['subscriptionstatus:trialing'] = 'Erprobung';
$string['subscriptionstatus:unpaid'] = 'Unbezahlt';
$string['subscriptionsuccessful'] = 'Erfolgreich abonniert';
$string['taxbehavior:exclusive'] = 'Exklusiv';
$string['taxbehavior:inclusive'] = 'Inklusive';
$string['trialperiod'] = 'Probezeit';
$string['trialperiod_help'] = 'Z.B. Sie melden sich am 25. April an, der April ist kostenlos und die Abrechnung beginnt am 1. Mai';
$string['updatepaymentmethod'] = 'Zahlungsmethode aktualisieren';
