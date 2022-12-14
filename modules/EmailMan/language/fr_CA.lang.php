<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2019 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_SEND_DATE_TIME' => 'Date Envoi',
    'LBL_IN_QUEUE' => 'En cours',
    'LBL_IN_QUEUE_DATE' => 'Date Entr??e File d\'attente',

    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Utilisez uniquement des valeurs enti??res pour sp??cifier le nombre d\'emails envoy??s par lot',

    'LBL_ATTACHMENT_AUDIT' => ' a ??t?? envoy??. Il n\'a pas ??t?? dupliqu?? localement pour conserver l\'utilisation du disque.',
    'LBL_CONFIGURE_SETTINGS' => 'Configurer Param??tres Email',
    'LBL_CUSTOM_LOCATION' => 'D??fini par Utilisateur',
    'LBL_DEFAULT_LOCATION' => 'D??faut',

    'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS' => 'Supprimer les notes et pi??ces jointes associ??es aux emails supprim??s',
    'LBL_EMAIL_WARNING_NOTIFICATIONS' => 'Notifications par courrier ??lectronique',
    'LBL_EMAIL_ENABLE_CONFIRM_OPT_IN' => 'Param??tres Inscription',
    'LBL_EMAIL_ENABLE_SEND_OPT_IN' => 'Envoyer Automatiquement Email Inscription',
    'LBL_EMAIL_CONFIRM_OPT_IN_TEMPLATE_ID' => 'Mod??le Email Confirmation Inscription',
    'LBL_EMAIL_OUTBOUND_CONFIGURATION' => 'Configuration SMTP',
    'LBL_EMAILS_PER_RUN' => 'Nombre Emails envoy??s par lot:',
    'LBL_ID' => 'Id',
    'LBL_LIST_CAMPAIGN' => 'Campagne',
    'LBL_LIST_FORM_TITLE' => 'File d\'attente',
    'LBL_LIST_FROM_NAME' => 'Nom Exp??diteur',
    'LBL_LIST_IN_QUEUE' => 'En cours',
    'LBL_LIST_MESSAGE_NAME' => 'Message Marketing',
    'LBL_LIST_RECIPIENT_EMAIL' => 'Email Destinataire',
    'LBL_LIST_RECIPIENT_NAME' => 'Nom Destinataire',
    'LBL_LIST_SEND_ATTEMPTS' => 'Tentatives Envoi',
    'LBL_LIST_SEND_DATE_TIME' => 'Envoyer Le',
    'LBL_LIST_USER_NAME' => 'Nom Utilisateur',
    'LBL_LOCATION_ONLY' => 'Emplacement',
    'LBL_LOCATION_TRACK' => 'Emplacement des fichiers Traqueur de la Compagne (campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY' => 'Garder une copie des messages envoy??s via les Campagnes:',
    'LBL_CAMP_MESSAGE_COPY_DESC' => 'Voulez-vous stocker une copie compl??te de <bold>CHAQUE</bold> email envoy?? durant toutes les campagnes ?  <bold>La valeur par d??faut qui est aussi notre recommandation est Non</bold>. En chosissant Non, seul le mod??le du mail envoy?? sera stock?? et les variables seront donc n??cessaires pour re-construire les messages.',
    'LBL_MAIL_SENDTYPE' => '</td></tr><tr><th class="dataLabel" align="left" colspan="4"><h4 class="dataLabel" style="padding-bottom:5px;">Serveur utilis?? par le Syst??me pour envoyer emails</h4></td></tr><tr><td class="dataLabel" width="20%">Agent de Transfert de Mail:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Utiliser Authentification SMTP?',
    'LBL_MAIL_SMTPPASS' => 'Mot de Passe SMTP:',
    'LBL_MAIL_SMTPPORT' => 'Port SMTP:',
    'LBL_MAIL_SMTPSERVER' => 'Serveur SMTP:',
    'LBL_MAIL_SMTPUSER' => 'Nom Utilisateur:',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Choisissez votre fournisseur de messagerie:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail - Mot de passe:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID',
    'LBL_GMAIL_SMTPPASS' => 'Gmail - Mot de passe:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail - Adresse',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange - Mot de passe:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange - Nom Utilisateur:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange - Port Serveur',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange - Serveur',
    'LBL_EMAIL_LINK_TYPE' => 'Client Email',
    'LBL_MARKETING_ID' => 'Id Marketing',
    'LBL_MODULE_ID' => 'EmailMan',
    'LBL_MODULE_NAME' => 'Param??tres Email',
    'LBL_MODULE_TITLE' => 'Gestion de la file d\'attente des emails sortants',
    'LBL_NOTIFICATION_ON_DESC' => 'Lorsque cette option est activ??e, les emails sont envoy??s aux utilisateurs lorsque des enregistrements leur sont assign??s.',
    'LBL_NOTIFY_FROMADDRESS' => 'Email Exp??diteur:',
    'LBL_NOTIFY_FROMNAME' => 'Nom Exp??diteur:',
    'LBL_NOTIFY_ON' => 'Notifications Assignation',
    'LBL_NOTIFY_TITLE' => 'Options Email',
    'LBL_OUTBOUND_EMAIL_TITLE' => 'Options Email Sortant',
    'LBL_RELATED_ID' => 'Id Associ??',
    'LBL_RELATED_TYPE' => 'Type Associ??',
    'LBL_SEARCH_FORM_TITLE' => 'Recherche File d\'attente',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Valeur de r??glage Config.php site_url',
    'TXT_REMOVE_ME_ALT' => 'Pour vous retirer de cette liste Email allez ??',
    'TXT_REMOVE_ME_CLICK' => 'cliquez ici',
    'TXT_REMOVE_ME' => 'Pour vous retirer de cette liste Email ',
    'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER' => 'Envoyer une notification ?? partir de l\'adresse email de l\'utilisateur assignant',

    'LBL_SECURITY_TITLE' => 'Param??tres Securit?? Email ',
    'LBL_SECURITY_DESC' => 'Les tags s??lectionn??s dans la liste ci-dessous ne seront PAS accept??s ni affich??s dans les Emails entrants ou dans le module "Emails".',
    'LBL_SECURITY_APPLET' => 'Applet tag',
    'LBL_SECURITY_BASE' => 'Base tag',
    'LBL_SECURITY_EMBED' => 'Embed tag',
    'LBL_SECURITY_FORM' => 'Form tag',
    'LBL_SECURITY_FRAME' => 'Frame tag',
    'LBL_SECURITY_FRAMESET' => 'Frameset tag',
    'LBL_SECURITY_IFRAME' => 'iFrame tag',
    'LBL_SECURITY_IMPORT' => 'Import tag',
    'LBL_SECURITY_LAYER' => 'Layer tag',
    'LBL_SECURITY_LINK' => 'Link tag',
    'LBL_SECURITY_OBJECT' => 'Object tag',
    'LBL_SECURITY_OUTLOOK_DEFAULTS' => 'S??lectionnez les param??tres de s??curit?? minimum par d??faut d\'Outlook (erreurs sur le c??t?? de l\'affichage correct).',
    'LBL_SECURITY_STYLE' => 'Style tag',
    'LBL_SECURITY_TOGGLE_ALL' => 'S??lectionner/D??s??lectionner toutes les options',
    'LBL_SECURITY_XMP' => 'Xmp tag',
    'LBL_YES' => 'Oui',
    'LBL_NO' => 'Non',
    'LBL_PREPEND_TEST' => '[Test]:',
    'LBL_SEND_ATTEMPTS' => 'Tentatives Envoi',
    'LBL_OUTGOING_SECTION_HELP' => 'Param??tres du serveur SMTP pour les notifications et les alertes.',
    'LBL_ALLOW_DEFAULT_SELECTION' => "Les utilisateurs peuvent envoyer en tant que titulaire de ce compte :",
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Quand cette option est activ??e, tous les utilisateurs utilisent le m??me serveur SMTP pour les notifications et les alertes. Sinon chaque utilisateur peut<br>d??finir et choisir son propre serveur SMTP.',
    'LBL_FROM_ADDRESS_HELP' => 'Si activ??, le nom Utilisateur assign?? ainsi que son email seront utilis??s pour le champ "From" du message. Cela ne peut fonctionner que si le serveur SMTP utilis?? autorise la surcharge de cette information, pas gmail par exemple.',
    'LBL_HELP' => 'Aide' /*for 508 compliance fix*/,
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => 'Voir Comptes Messagerie Sortants',
    'LBL_ALLOW_SEND_AS_USER' => 'Les utilisateurs peuvent envoyer ?? leur nom :',
    'LBL_ALLOW_SEND_AS_USER_DESC' => 'Lorsque cette option est activ??e, <b>tous</b> les utilisateurs peuvent envoyer des courriers par le serveur de messagerie sortant en utilisant leur adresse ??lectronique principale en tant que &quot;De :&quot;. <br>Cette fonctionnalit?? peut ??chouer avec les serveurs SMTP qui n\'autorisent pas l\'envoi depuis un compte de messagerie diff??rent du compte du serveur.',
);
