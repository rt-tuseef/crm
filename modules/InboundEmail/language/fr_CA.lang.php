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


    'LBL_RE' => 'RE:',

    'ERR_BAD_LOGIN_PASSWORD' => 'Utilisateur ou Mot de passe incorrect',
    'ERR_INI_ZLIB' => 'Impossible de d??sactiver temporairement la compression Zlib. "Teste Param??trage" peut ??chouer.',
    'ERR_NO_IMAP' => 'Aucune biblioth??que IMAP trouv??e. Veuillez r??soudre ce probl??me avant de continuer avec l\'email entrant',
    'ERR_NO_OPTS_SAVED' => 'Pas de param??tres optimaux sauvegard??s avec votre bo??te email entrante. Merci de revoir les param??trages',
    'ERR_TEST_MAILBOX' => 'Merci de v??rifier vos Param??tres et essayer ?? nouveau.',

    'LBL_ASSIGN_TO_USER' => 'Assigner Utilisateur',
    'LBL_AUTOREPLY' => 'Mod??le R??ponse Automatique',
    'LBL_AUTOREPLY_HELP' => 'S??lectionnez une r??ponse automatis??e pour informer les exp??diteurs que leur r??ponse a bien ??t?? re??ue.',
    'LBL_BASIC' => 'Information Compte Messagerie',
    'LBL_CASE_MACRO' => 'Macro Ticket',
    'LBL_CASE_MACRO_DESC' => 'D??finissez la macro qui sera analys??e et utilis??e pour lier le courrier ??lectronique import?? ?? un ticket.',
    'LBL_CASE_MACRO_DESC2' => 'Choisir la cha??ne de caract??res souhait??e, mais pr??server le <b>"%1"</b>.',
    'LBL_CLOSE_POPUP' => 'Fermer Fen??tre',
    'LBL_CREATE_TEMPLATE' => 'Cr??er',
    'LBL_DELETE_SEEN' => 'Supprimer les emails lus apr??s l\'import.',
    'LBL_EDIT_TEMPLATE' => 'Modifier',
    'LBL_EMAIL_OPTIONS' => 'Options Manipulation Email',
    'LBL_EMAIL_BOUNCE_OPTIONS' => 'Options Traitement Messages Rejet??s',
    'LBL_FILTER_DOMAIN_DESC' => 'Indiquez un domaine auquel aucune r??ponse automatique ne sera envoy??e.',
    'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'S??lectionnez pour enregistrer automatiquement les Emails dans le CRM pour tous les Emails entrants.',
    'LBL_FILTER_DOMAIN' => 'Pas de r??ponse automatique ?? ce domaine',
    'LBL_FIND_SSL_WARN' => '<br>Le test SSL peut prendre un certain temps. Merci de patienter.<br>',
    'LBL_FROM_ADDR' => 'Adresse Exp??diteur',
    'LBL_FROM_ADDR_DESC' => 'L\'adresse email fournie ici peut ne pas appara??tre dans la section "De" de l\'email envoy?? en raison des restrictions impos??es par le fournisseur de services de messagerie. Dans ce cas, l\'adresse email d??finie dans le serveur de courrier sortant sera utilis??e.', // as long as XTemplate doesn't support output escaping, transform quotes to html-entities right here (bug #48913)
    'LBL_FROM_NAME' => 'Nom Exp??diteur',
    'LBL_GROUP_QUEUE' => 'Assigner ?? un Groupe',
    'LBL_HOME' => 'Accueil',
    'LBL_LIST_MAILBOX_TYPE' => 'Utilisation Compte Messagerie',
    'LBL_LIST_NAME' => 'Nom:',
    'LBL_LIST_GLOBAL_PERSONAL' => 'Type',
    'LBL_LIST_SERVER_URL' => 'Serveur',
    'LBL_LIST_STATUS' => 'Statut',
    'LBL_LOGIN' => 'Nom Utilisateur',
    'LBL_MAILBOX_DEFAULT' => 'Bo??te de R??ception',
    'LBL_MAILBOX_SSL' => 'Utiliser SSL',
    'LBL_MAILBOX_TYPE' => 'Actions Possibles',
    'LBL_DISTRIBUTION_METHOD' => 'M??htode de Distribution',
    'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Mod??le de R??ponse pour une cr??ation de Ticket',
    'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'S??lectionnez une r??ponse automatis??e pour avertir les exp??diteurs d\'email qu\'un ticket a ??t?? cr????. L\'email contient le num??ro de dossier dans la ligne Objet qui correspond au param??tre Macro Ticket. Cette r??ponse n\'est envoy??e que lorsque le premier email est re??u du destinataire.',
    'LBL_MAILBOX' => 'Dossier Surveill??',
    'LBL_TRASH_FOLDER' => 'Dossier Poubelle',
    'LBL_SENT_FOLDER' => 'Dossier Envoy??',
    'LBL_SELECT' => 'Selectionner',
    'LBL_MARK_READ_NO' => 'Email marqu?? effac?? apr??s Import',
    'LBL_MARK_READ_YES' => 'Email laiss?? sur le Serveur apr??s Import',
    'LBL_MARK_READ' => 'Laisser les Messages sur le Seveur',
    'LBL_MAX_AUTO_REPLIES' => 'Nombre de r??ponses automatiques',
    'LBL_MAX_AUTO_REPLIES_DESC' => 'D??finissez le nombre maximal de r??ponses automatiques ?? envoyer ?? une adresse ??lectronique unique pendant une p??riode de 24 heures.',
    'LBL_PERSONAL_MODULE_NAME' => 'Compte Email Personnel',
    'LBL_CREATE_CASE' => 'Cr??er un Ticket',
    'LBL_CREATE_CASE_HELP' => 'S??lectionnez cette option pour cr??er automatiquement des enregistrements depuis des Emails entrants.',
    'LBL_MODULE_NAME' => 'Compte Email Groupe',
    'LBL_BOUNCE_MODULE_NAME' => 'Compte Messagerie Gestion des Messages Rejet??s',
    'LBL_MODULE_TITLE' => 'Email Entrant',
    'LBL_NAME' => 'Nom',
    'LBL_NONE' => 'Aucun',
    'LBL_ONLY_SINCE_NO' => 'Non. V??rifiez tous les emails sur le serveur de messagerie.',
    'LBL_ONLY_SINCE_YES' => 'Oui.',
    'LBL_PASSWORD' => 'Mot de Passe',
    'LBL_POP3_SUCCESS' => 'Votre connexion test POP3 a r??ussi.',
    'LBL_POPUP_TITLE' => 'Tester Param??tres',
    'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'S??lectionner Dossiers',
    'LBL_SELECT_TRASH_FOLDERS' => 'S??lectionner Dossier Poubelle',
    'LBL_SELECT_SENT_FOLDERS' => 'S??lectionner Dossier Envoy??',
    'LBL_DELETED_FOLDERS_LIST' => 'Le dossier(s) %s n\'existe pas ou a ??t?? supprim?? du serveur',
    'LBL_PORT' => 'Port Serveur Messagerie',
    'LBL_REPLY_TO_NAME' => 'Nom du "R??pondre ??"',
    'LBL_REPLY_TO_ADDR' => 'Adresse Email "R??pondre ??"',
    'LBL_SAME_AS_ABOVE' => 'Utiliser Adresse/Nom Exp??diteur',
    'LBL_SERVER_OPTIONS' => 'Param??tres Avanc??s',
    'LBL_SERVER_TYPE' => 'Protocole Serveur Messagerie',
    'LBL_SERVER_URL' => 'Adresse Serveur Messagerie',
    'LBL_SSL_DESC' => 'Si votre serveur de messagerie prend en charge les connexions de socket s??curis??es, activer cette option forcera les connexions SSL lors de l\'importation de courrier ??lectronique.',
    'LBL_ASSIGN_TO_TEAM_DESC' => 'L\'??quipe s??lectionn??e a acc??s au compte de messagerie.',
    'LBL_SSL' => 'Utiliser SSL',
    'LBL_STATUS' => 'Statut',
    'LBL_SYSTEM_DEFAULT' => 'Syst??me par d??faut',
    'LBL_TEST_BUTTON_TITLE' => 'Test',
    'LBL_TEST_SETTINGS' => 'Tester Param??tres',
    'LBL_TEST_SUCCESSFUL' => 'Test Connexion R??ussi.',
    'LBL_TEST_WAIT_MESSAGE' => 'Veuillez patienter...',
    'LBL_WARN_IMAP_TITLE' => 'Email Entrant D??sactiv??',
    'LBL_WARN_IMAP' => 'Avertissements:',
    'LBL_WARN_NO_IMAP' => 'Le syst??me n\'a pas les librairies c-client IMAP activ??es/compil??es dans le module PHP --with-imap=/path/to/imap_c-client_library. Veuillez contacter votre administrateur syst??me pour activer cette librairie.',

    'LNK_LIST_CREATE_NEW_GROUP' => 'Nouvelle Bo??te Messagerie de Groupe',
    'LNK_LIST_CREATE_NEW_BOUNCE' => 'Nouveau Compte pour Traitement des Messages Rejet??s',
    'LNK_LIST_MAILBOXES' => 'Liste Compte Messagerie',
    'LNK_LIST_SCHEDULER' => 'Planificateurs',
    'LNK_SEED_QUEUES' => 'Renseigner les files d\'attente depuis les ??quipes',
    'LBL_GROUPFOLDER_ID' => 'Id Dossier Groupe',

    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Autoriser les utilisateurs ?? envoyer des Emails en utilisant les informations du "De" nom et adresse en adresse de r??ponse (reply-to)',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Lorsque cette option est s??lectionn??e, les informations "De" nom et adresse associ??e avec ce compte Email de groupe apparaitront en option pour le champ "De" lorsque les utilisateurs qui ont acc??s ?? cette boite composeront un Email.',
    'LBL_STATUS_ACTIVE' => 'Actif',
    'LBL_STATUS_INACTIVE' => 'Inactif',
    'LBL_IS_PERSONAL' => 'Personnel',
    'LBL_IS_GROUP' => 'Groupe',
    'LBL_ENABLE_AUTO_IMPORT' => 'Importer automatiquement les emails',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Attention, vous aller modifier la configuration des imports automatiques des emails. Vous risquez des pertes de donn??es.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Attention : L\'import automatique des emails doit ??tre activ?? pour la cr??ation automatique de tickets.',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Brouillons',
    'LBL_LIST_TITLE_MY_INBOX' => 'Bo??te de R??ception',
    'LBL_LIST_TITLE_MY_SENT' => 'Email Envoy??',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'Emails Archiv??s',
    'LNK_MY_DRAFTS' => 'Brouillons',
    'LNK_MY_INBOX' => 'Email',
    'LNK_VIEW_MY_INBOX' => 'Voir Email',
    'LNK_QUICK_REPLY' => 'R??pondre',
    'LNK_SENT_EMAIL_LIST' => 'Emails Envoy??s',
    'LBL_EDIT_LAYOUT' => 'Modifier Mise en page' /*for 508 compliance fix*/,

    'LBL_MODIFIED_BY' => 'Modifi?? Par',
    'LBL_SERVICE' => 'Service',
    'LBL_STORED_OPTIONS' => 'Options Stock??es',
    'LBL_GROUP_ID' => 'ID Groupe',
);
