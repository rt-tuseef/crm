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
    'LBL_EMAIL_INFORMATION' => 'Email',
    'LBL_FW' => 'TR:',
    'LBL_RE' => 'RE:',

    'LBL_BUTTON_CREATE' => 'Créer',
    'LBL_BUTTON_EDIT' => 'Modifier',
    'LBL_BUTTON_EDIT_EDIT_DRAFT' => 'Modifier Brouillon',
    'LBL_QS_DISABLED' => '(La recherche rapide n\'est pas disponible pour ce module. Veuillez utiliser le bouton de sélection.)',
    'LBL_SIGNATURE_PREPEND' => 'Signature avant le message original',
    'LBL_IMPORT' => 'Importer',
    'LBL_LOADING' => 'Chargement',
    'LBL_MARKING' => 'Marquage',
    'LBL_DELETING' => 'Suppression',

    'LBL_CONFIRM_DELETE_EMAIL' => 'Êtes-vous sûr de vouloir supprimer cet Email?',
    'LBL_ENTER_FOLDER_NAME' => 'Veuillez saisir un nom de dossier',

    'LBL_ERROR_SELECT_MODULE' => 'Merci de sélectionner un module dans le champ Associé à',

    'ERR_ARCHIVE_EMAIL' => 'ERREUR: Sélectionner les emails à archiver.',
    'ERR_DELETE_RECORD' => 'Erreur: Vous devez spécifier un numéro d\'enregistrement pour supprimer le compte.',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Comptes',
    'LBL_ADD_DASHLETS' => 'Ajouter Dashlets',
    'LBL_ADD_DOCUMENT' => 'Ajouter Documents',
    'LBL_ADD_ENTRIES' => 'Ajouter Entrées',
    'LBL_ADD_FILE' => 'Ajouter Fichiers',
    'LBL_ATTACHMENTS' => 'Pièce jointe:',
    'LBL_ATTACH_FILES' => 'Joindre Fichiers',
    'LBL_ATTACH_DOCUMENTS' => 'Joindre Documents',
    'LBL_HAS_ATTACHMENT' => 'Avec pièce jointe?:',
    'LBL_BCC' => 'Cci:',
    'LBL_BODY' => 'Corps:',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bogues',
    'LBL_CC' => 'Cc:',
    'LBL_COMPOSE_MODULE_NAME' => 'Écrire Email',
    'LBL_CONTACT_NAME' => 'Contact:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_CREATED_BY' => 'Créé par',
    'LBL_DATE_SENT_RECEIVED' => 'Date envoi/réception :',
    'LBL_DATE' => 'Date Envoi:',
    'LBL_DELETE_FROM_SERVER' => 'Supprimer le message du serveur',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_EDIT_ALT_TEXT' => 'Modifier le texte brut',
    'LBL_SEND_IN_PLAIN_TEXT' => 'Envoyer en texte brut',
    'LBL_SEND_CONFIRM_OPT_IN' => 'Envoyer Email Inscription',
    'LBL_EMAIL_ATTACHMENT' => 'Pièce jointe',
    'LBL_EMAIL_SELECTOR_SELECT' => 'Sélectionner',
    'LBL_EMAIL_SELECTOR_CLEAR' => 'Effacer',
    'LBL_EMAIL' => 'Adresse Email:',
    'LBL_EMAILS_ACCOUNTS_REL' => 'Emails:Comptes',
    'LBL_EMAILS_BUGS_REL' => 'Emails: Bogues',
    'LBL_EMAILS_CASES_REL' => 'Emails:Tickets',
    'LBL_EMAILS_CONTACTS_REL' => 'Emails: Contacts',
    'LBL_EMAILS_LEADS_REL' => 'Emails:Prospects',
    'LBL_EMAILS_OPPORTUNITIES_REL' => 'Emails:Opportunités',
    'LBL_EMAILS_NOTES_REL' => 'Emails: Notes',
    'LBL_EMAILS_PROJECT_REL' => 'Emails:Projet',
    'LBL_EMAILS_PROJECT_TASK_REL' => 'Emails:Tâches Projet',
    'LBL_EMAILS_PROSPECT_REL' => 'Emails: Prospect',
    'LBL_EMAILS_CONTRACTS_REL' => 'Emails:Contrat',
    'LBL_EMAILS_TASKS_REL' => 'Emails:Tâches',
    'LBL_EMAILS_USERS_REL' => 'Emails:Utilisateurs',
    'LBL_EMPTY_FOLDER' => 'Aucun Email à afficher',
    'LBL_SELECT_FOLDER' => 'Sélectionner Dossier',
    'LBL_ERROR_SENDING_EMAIL' => 'Problème Envoi Email',
    'LBL_ERROR_SAVING_DRAFT' => 'Erreur Sauvegarde Brouillon',
    'LBL_FROM_NAME' => 'Nom Expéditeur',
    'LBL_FROM' => 'Expéditeur:',
    'LBL_REPLY_TO' => 'Répondre à:',
    'LBL_HTML_BODY' => 'Corps HTML',
    'LBL_INVITEE' => 'Destinataires',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Prospects',
    'LBL_MESSAGE_SENT' => 'Message Envoyé',
    'LBL_MODIFIED_BY' => 'Modifié par',
    'LBL_MODULE_NAME' => 'Tous les Emails',
    'LBL_MODULE_TITLE' => 'Emails:',
    'LBL_MY_EMAILS' => 'Emails',
    'LBL_NEW_FORM_TITLE' => 'Archiver Email',
    'LBL_NONE' => 'Aucun',
    'LBL_NOT_SENT' => 'Erreur Envoi',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Pièces jointes',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Opportunités',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projets',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Tâches Projet',
    'LBL_RAW' => 'Email Brut',
    'LBL_SAVE_AS_DRAFT_BUTTON_TITLE' => 'Sauvegarder Brouillon',
    'LBL_DISREGARD_DRAFT_BUTTON_TITLE' => 'Ignorer Brouillon',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher Email',
    'LBL_SEND_ANYWAYS' => 'Cet email n\'a pas de sujet. Envoyer / enregistrer quand même?',
    'LBL_SEND_BUTTON_LABEL' => 'Envoyer',
    'LBL_SEND_BUTTON_TITLE' => 'Envoyer',
    'LBL_SEND' => 'ENVOI',
    'LBL_SENT_MODULE_NAME' => 'Emails Envoyés',
    'LBL_SHOW_ALT_TEXT' => 'Afficher le texte brut',
    'LBL_SIGNATURE' => 'Signature',
    'LBL_SUBJECT' => 'Sujet:',
    'LBL_TEXT_BODY' => 'Corps Texte',
    'LBL_TIME' => 'Heure Envoi:',
    'LBL_TO_ADDRS' => 'À',
    'LBL_USERS_SUBPANEL_TITLE' => 'Utilisateurs',
    'LBL_USERS' => 'Utilisateurs',

    'LNK_CALL_LIST' => 'Appels',
    'LBL_EMAIL_RELATE' => 'Associé à',
    'LNK_EMAIL_TEMPLATE_LIST' => 'Voir Modèles Email',
    'LNK_MEETING_LIST' => 'Réunions',
    'LNK_NEW_CALL' => 'Planifier Appel',
    'LNK_NEW_EMAIL_TEMPLATE' => 'Créer Modèle Email',
    'LNK_NEW_EMAIL' => 'Envoyer Email',
    'LNK_NEW_MEETING' => 'Planifier Réunion',
    'LNK_NEW_NOTE' => 'Créer Note ou Pièce jointe',
    'LNK_NEW_SEND_EMAIL' => 'Rédiger',
    'LNK_NEW_TASK' => 'Créer Tâche',
    'LNK_NOTE_LIST' => 'Notes',
    'LNK_SENT_EMAIL_LIST' => 'Emails Envoyés',
    'LNK_TASK_LIST' => 'Tâches',
    'LNK_VIEW_CALENDAR' => 'Aujourd\'hui',

    'LBL_LIST_ASSIGNED' => 'Assigné',
    'LBL_LIST_CONTACT_NAME' => 'Nom Contact',
    'LBL_LIST_DATE' => 'Date Envoi',
    'LBL_LIST_DATE_SENT_RECEIVED' => 'Date envoi/réception',
    'LBL_LIST_FORM_DRAFTS_TITLE' => 'Brouillon',
    'LBL_LIST_FORM_SENT_TITLE' => 'Emails Envoyés',
    'LBL_LIST_FORM_TITLE' => 'Liste Email',
    'LBL_LIST_FROM_ADDR' => 'Expéditeur',
    'LBL_LIST_RELATED_TO' => 'Type Destinataire',
    'LBL_LIST_SUBJECT' => 'Sujet',
    'LBL_LIST_TO_ADDR' => 'À',
    'LBL_LIST_TYPE' => 'Type',

    'WARNING_SETTINGS_NOT_CONF' => 'Attention: Vos paramètres de messagerie ne sont pas configurés pour envoyer des emails.',

    // for All emails
    'LBL_BUTTON_RAW_LABEL' => 'Voir texte brut',
    'LBL_BUTTON_RAW_LABEL_HIDE' => 'Masquer texte brut',

    // for InboundEmail
    'LBL_BUTTON_CHECK' => 'Relever Emails',
    'LBL_BUTTON_CHECK_TITLE' => 'Relever Nouveaux Messages',
    'LBL_BUTTON_FORWARD' => 'Transférer',
    'LBL_BUTTON_REPLY_TITLE' => 'Répondre',
    'LBL_BUTTON_REPLY_ALL' => 'Répondre à tous',
    'LBL_BUTTON_DELETE_IMAP' => 'Supprimer de IMAP',
    'LBL_CASES_SUBPANEL_TITLE' => 'Tickets',
    'LBL_INBOUND_TITLE' => 'Email Entrant',
    'LBL_INTENT' => 'Intention',
    'LBL_MESSAGE_ID' => 'ID Message',
    'LBL_REPLY_HEADER_1' => 'De',
    'LBL_REPLY_HEADER_2' => 'A écrit:',
    'LBL_REPLY_TO_ADDRESS' => 'Adresse Réponse',
    'LBL_REPLY_TO_NAME' => 'Nom Réponse',

    'LBL_LIST_BUG' => 'Bogues',
    'LBL_LIST_CASE' => 'Tickets',
    'LBL_LIST_CONTACT' => 'Contacts',
    'LBL_LIST_LEAD' => 'Prospects',
    'LBL_LIST_TASK' => 'Tâches',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Utilisateur Assigné',

    // for Inbox
    'LBL_ALL' => 'Tous',
    'LBL_ASSIGN_WARN' => 'Assurez-vous que toutes les 2 options sont sélectionnées.',
    'LBL_BACK_TO_GROUP' => 'Retour vers Boîte Groupe',
    'LBL_BUTTON_DISTRIBUTE_TITLE' => 'Assigner',
    'LBL_BUTTON_DISTRIBUTE' => 'Assigner',
    'LBL_BUTTON_GRAB_TITLE' => 'Récupérer du Groupe',
    'LBL_BUTTON_GRAB' => 'Récupérer du Groupe',
    'LBL_CREATE_BUG' => 'Créer Bogue',
    'LBL_CREATE_CASE' => 'Créer Ticket',
    'LBL_CREATE_CONTACT' => 'Créer Contact',
    'LBL_CREATE_LEAD' => 'Créer Prospect',
    'LBL_CREATE_TASK' => 'Créer Tâche',
    'LBL_DIST_TITLE' => 'Affectation',
    'LBL_LOCK_FAIL_DESC' => 'L\'élément choisi n\'est pas disponible actuellement.',
    'LBL_LOCK_FAIL_USER' => ' a pris possession.',
    'LBL_MASS_DELETE_ERROR' => 'Aucun élément coché n\'a été transmis pour suppression.',
    'LBL_NEW' => 'Nouveau',
    'LBL_NEXT_EMAIL' => 'Élément libre suivant',
    'LBL_REPLIED' => 'Répondu',
    'LBL_TO' => 'À:',
    'LBL_TOGGLE_ALL' => 'Basculer Tous/Aucun',
    'LBL_UNKNOWN' => 'Inconnu',
    'LBL_USE' => 'Assigner:',
    'LBL_ASSIGN_SELECTED_RESULTS_TO' => 'Assigner les résultats sélectionnés à: ',
    'LBL_USER_SELECT' => 'Sélectionner Utilisateurs',
    'LBL_USING_RULES' => 'Utiliser Régles:',
    'LBL_WARN_NO_DIST' => 'Aucune méthode de distribution sélectionnée',
    'LBL_WARN_NO_USERS' => 'Aucun Utilisateur sélectionné',
    'LBL_IMPORT_STATUS_TITLE' => 'Statut',
    'LBL_INDICATOR' => 'Indicateur',
    'LBL_LIST_STATUS' => 'Statut',
    'LBL_LIST_TITLE_GROUP_INBOX' => 'Boîte Réception Groupe',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Brouillons',
    'LBL_LIST_TITLE_MY_INBOX' => 'Boîte Réception',
    'LBL_LIST_TITLE_MY_SENT' => 'Email Envoyé',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'Emails archivés',

    'LNK_MY_DRAFTS' => 'Brouillons',
    'LNK_MY_INBOX' => 'Email',
    'LNK_VIEW_MY_INBOX' => 'Voir Email',
    'LNK_QUICK_REPLY' => 'Répondre',
    'LBL_EMAILS_NO_PRIMARY_TEAM_SPECIFIED' => 'Aucune équipe principale spécifiée',
    'LBL_INSERT_CONTACT_EMAIL' => 'Insérer Adresse Email d’un Contact',
    'LBL_INSERT_ACCOUNT_EMAIL' => 'Insérer Adresse Email d’un Compte',
    'LBL_INSERT_TARGET_EMAIL' => 'Insérer Adresse Email d’une Cible',
    'LBL_INSERT_USER_EMAIL' => 'Insérer Adresse Email d\'un Utilisateur',
    'LBL_INSERT_LEAD_EMAIL' => 'Insérer Adresse Email d’un Prospect',
    'LBL_INSERT_ERROR_BLANK_EMAIL' => 'Adresse Email Invalide',

    // advanced search
    'LBL_ASSIGNED_TO' => 'Assigné à:',
    'LBL_MEMBER_OF' => 'Parent',
    'LBL_QUICK_CREATE' => 'Création Rapide',
    'LBL_CREATE' => 'Créer',
    'LBL_STATUS' => 'Statut E-mail :',
    'LBL_EMAIL_FLAGGED' => 'Drapeau:',
    'LBL_EMAIL_REPLY_TO_STATUS' => 'Répondre avec Statut:',
    'LBL_TYPE' => 'Type:',
    //#20680 EmialTemplate Ext.Message.show;
    'LBL_EMAILTEMPLATE_MESSAGE_SHOW_TITLE' => 'Vérifiez s\'il vous plaît!',
    'LBL_EMAILTEMPLATE_MESSAGE_SHOW_MSG' => 'En sélectionnant ce modèle vous allez écraser toutes les données existantes dans le corps du message. Voulez vous continuer?',
    'LBL_EMAILTEMPLATE_MESSAGE_CLEAR_MSG' => 'En sélectionnant "Aucun", vous allez écraser toutes les données existantes dans le corps du message. Voulez vous continuer?',
    'LBL_EMAILTEMPLATE_MESSAGE_WARNING_TITLE' => 'Attention',
    'LBL_EMAILTEMPLATE_MESSAGE_MULTIPLE_RECIPIENTS' => 'Utilisation d\'un modèle d\'email contenant des variables de contact, tels que le nom du contact. Envoyer des emails à plusieurs destinataires peut avoir des résultats inattendus. Il est recommandé d\'utiliser une campagne Email pour les envois de masse.',
    'LBL_CHECK_ATTACHMENTS' => 'Vérifiez les pièces jointes!',
    'LBL_HAS_ATTACHMENTS' => 'Cet Email contient déjà au moins une pièce jointe. Voulez-vous les conservez ?',
    'LBL_HAS_ATTACHMENT_INDICATOR' => 'Avec Pièces Jointes',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Champ obligatoire manquant',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Champ Obligatoire Invalide',
    'LBL_FILTER_BY_RELATED_BEAN' => 'Voir seulement destinataires associés à',
    'LBL_ADD_INBOUND_ACCOUNT' => 'Ajouter',
    'LBL_ADD_OUTBOUND_ACCOUNT' => 'Ajouter',
    'LBL_EMAIL_ACCOUNTS_INBOUND' => 'Paramètres Compte Messagerie',
    'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNT' => 'Serveur de messagerie SMTP sortant',
    'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNTS' => 'Serveurs de messagerie SMTP sortants',
    'LBL_EMAIL_SETTINGS_INBOUND_ACCOUNTS' => 'Comptes Messagerie',
    'LBL_EMAIL_SETTINGS_INBOUND' => 'Email Entrant',
    'LBL_EMAIL_SETTINGS_OUTBOUND' => 'Email Sortant',
    'LBL_ADD_CC' => 'Insérer Cc',
    'LBL_ADD_BCC' => 'Insérer Cci',
    'LBL_MOVE_TO_BCC' => 'Déplacer vers Bcc',
    'LBL_ADD_TO_ADDR' => 'Insérer À',
    'LBL_SELECTED_ADDR' => 'Sélectionné',
    'LBL_ADD_CC_BCC_SEP' => '|',
    'LBL_SEND_EMAIL_FAIL_TITLE' => 'Échec Envoi',
    'LBL_EMAIL_DETAIL_VIEW_SHOW' => 'Voir',
    'LBL_EMAIL_DETAIL_VIEW_MORE' => 'Plus',
    'LBL_MORE_OPTIONS' => 'Plus',
    'LBL_LESS_OPTIONS' => 'Moins',
    'LBL_MAILBOX_TYPE_PERSONAL' => 'Personnel',
    'LBL_MAILBOX_TYPE_GROUP' => 'Groupe',
    'LBL_MAILBOX_TYPE_GROUP_FOLDER' => 'Groupe - Import Automatique',
    'LBL_SEARCH_FOR' => 'Rechercher',
    'LBL_EMAIL_INBOUND_TYPE_HELP' => '<b>Personnel</b>: Compte Email personnel accessible et gérer par l\'utilisateur.<br><b>Groupe</b>: Compte Email accessible et gérer par les utilisateurs d\'une Équipe.<br><b>Groupe - Import Automatique</b>: Compte Email accessible par les utilisateurs d\'une Équipe. Les Emails sont enregistrés automatiquement dans le CRM.',
    'LBL_ADDRESS_BOOK_SEARCH_HELP' => 'Saisir une Adresse Email, un Nom, un Prénom ou un Compte pour trouver des Destinataires.',
    'LBL_TEST_SETTINGS' => 'Tester Paramètres',
    'LBL_EMPTY_EMAIL_BODY' => '<p><span style="color: #888888;"><em>Ce Message est Vide</em></span></p>',
    'LBL_HAS_EMPTY_EMAIL_SUBJECT' => 'Veuillez préciser le sujet',
    'LBL_HAS_EMPTY_EMAIL_BODY' => 'S\'il vous plaît spécifier votre message dans le corps',
    'LBL_HAS_INVALID_EMAIL_CC' => 'Les adresses dans le champ Cc ne sont pas valides',
    'LBL_HAS_INVALID_EMAIL_BCC' => 'Les adresses dans le champ Bcc ne sont pas valides',
    'LBL_HAS_INVALID_EMAIL_TO' => 'Les adresses dans le champ A ne sont pas valides',
    'LBL_TEST_EMAIL_SUBJECT' => 'Test Email à partir du CRM',
    'LBL_NO_SUBJECT' => '(Aucun object)',
    'LBL_CHECKING_ACCOUNT' => 'Vérification Compte',
    'LBL_OF' => 'de',
    'LBL_TEST_EMAIL_BODY' => 'Cet Email a été envoyé afin de tester le serveur SMTP configuré dans l\'application. Si vous lisez ceci c\'est que votre accès au serveur SMTP est correctement configuré.',

    // for outbound email dialog
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'L\'administrateur n\'a pas encore configuré de compte sortant par défaut. Impossible d\'envoyer le message de test.',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Utiliser Authentification SMTP?',
    'LBL_MAIL_SMTPPASS' => 'Mot de passe SMTP :',
    'LBL_MAIL_SMTPPORT' => 'Port SMTP:',
    'LBL_MAIL_SMTPSERVER' => 'Serveur SMTP:',
    'LBL_MAIL_SMTPUSER' => 'SMTP Nom Utilisateur:',
    'LBL_MAIL_SMTP_SETTINGS' => 'Spécification Serveur SMTP',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Choisissez votre fournisseur de messagerie:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail - Mot de passe:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail - Mot de passe:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail Adresse Email:',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange - Mot de passe:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange - Nom Utilisateur:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange - Port SMTP:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange - Serveur:',

    'LBL_EDIT_LAYOUT' => 'Modifier Mise en page' /*for 508 compliance fix*/,
    'LBL_ATTACHMENT' => 'Pièce jointe' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'Supprimer' /*for 508 compliance fix*/,
    'LBL_CREATE_CASES' => 'Créer Ticket' /*for 508 compliance fix*/,
    'LBL_CREATE_LEADS' => 'Créer Prospect' /*for 508 compliance fix*/,
    'LBL_CREATE_CONTACTS' => 'Créer Contact' /*for 508 compliance fix*/,
    'LBL_CREATE_BUGS' => 'Créer Bogue' /*for 508 compliance fix*/,
    'LBL_CREATE_TASKS' => 'Créer Tâche' /*for 508 compliance fix*/,
    'LBL_CHECK_INLINE' => 'Valide' /*for 508 compliance fix*/,
    'LBL_CLOSE' => 'Fermer' /*for 508 compliance fix*/,
    'LBL_HELP' => 'Aide' /*for 508 compliance fix*/,
    'LBL_WAIT' => 'Patienter' /*for 508 compliance fix*/,
    'LBL_CHECKEMAIL' => 'Vérification Email' /*for 508 compliance fix*/,
    'LBL_COMPOSEEMAIL' => 'Rédiger Email' /*for 508 compliance fix*/,
    'LBL_EMAILSETTINGS' => 'Paramètres Email' /*for 508 compliance fix*/,

    // SNIP
    'LBL_EMAILS_MEETINGS_REL' => 'Emails:Réunions',
    'LBL_DATE_MODIFIED' => 'Date de modification',

    'LBL_CATEGORY' => 'Catégorie',
    'LBL_LIST_CATEGORY' => 'Catégorie',
    'LBL_EMAIL_TEMPLATE' => 'Modèle Email',

    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => 'Brouillon Ignoré',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => 'Cette opération va supprimer cet email, voulez-vous continuer?',
    'LBL_EMAIL_DRAFT_DELETED' => 'Le brouillon a été supprimé',
    'LBL_EMAIL_DRAFT_ERROR_DELETING' => 'Une erreur est survenue lors de la tentative d\'enregistrement du brouillon.',

    'LBL_QUICK_CREATE_SUCCESS1' => 'Enregistrement créé avec succès.',
    'LBL_QUICK_CREATE_SUCCESS2' => 'Cliquez OK pour afficher le nouveau enregistrement.',
    'LBL_QUICK_CREATE_SUCCESS3' => 'Cliquez sur Annuler pour revenir au Courriel.',

    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => 'Appliquer Modèle Email',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => 'Cette opération remplacera le corps et le sujet du courriel , voulez-vous continuer ?',

    'LBL_MAILBOX_ID' => 'ID Boîte Réception',
    'LBL_PARENT_ID' => 'ID Parent',
    'LBL_LAST_SYNCED' => 'Dernière synchronisation',
    'LBL_ORPHANED' => 'Orphelines',
    'LBL_IMAP_KEYWORDS' => 'Mots-clés IMAP',
    'LBL_ERROR_NO_FOLDERS' => 'Erreur : Il n’existe aucun dossier. S’il vous plaît vérifiez vos paramètres de messagerie.',
    'LBL_ORIGINAL_MESSAGE_SEPARATOR' => '---',


    'LBL_MARK_UNREAD' => 'Marquer comme non lu',
    'LBL_MARK_READ' => 'Marquer comme lu',
    'LBL_MARK_FLAGGED' => 'Marquer avec Drapeau',
    'LBL_MARK_UNFLAGGED' => 'Retirer Drapeau',
    'LBL_CONFIRM_OPT_IN_SENT_DATE' => 'Email Inscription Envoyé',
    'LBL_CONFIRM_OPT_IN_FAIL_DATE' => 'Email Inscription Échoué',
    'LBL_CONFIRM_OPT_IN_TOKEN' => 'Jeton Confirmation Inscription',

    'ERR_NO_RETURN_ID' => 'Pièce jointe introuvable.',

    'LBL_LIST_DATE_MODIFIED' => 'Dernière Modification',
    'LNK_IMPORT_CAMPAIGNS' => 'Importer Campagne',
    
    // Email Validation Error messages. Typicaly for Email Validation:
    'ERR_FIELD_FROM_IS_NOT_SET' => 'Champ origine non défini.',
    'ERR_FIELD_FROM_IS_EMPTY' => 'Le champ origine est vide.',
    'ERR_FIELD_FROM_IS_INVALID' => 'Champ origine non valable.',
    'ERR_FIELD_FROM_ADDR_IS_NOT_SET' => 'Champ d\'adresse non défini.',
    'ERR_FIELD_FROM_ADDR_IS_EMPTY' => 'Le champ adresse est vite.',
    'ERR_FIELD_FROM_ADDR_IS_INVALID' => 'Champ adresse non valable.',
    'ERR_FIELD_FROMNAME_IS_NOT_SET' => 'Champ nom d\'expéditeur non défini.',
    'ERR_FIELD_FROMNAME_IS_EMPTY' => 'Champ d\'expéditeur vide.',
    'ERR_FIELD_FROMNAME_IS_INVALID' => 'Champ d\'expéditeur non valable.',
    'ERR_FIELD_FROM_NAME_IS_NOT_SET' => 'Champ nom d\'expéditeur non défini.',
    'ERR_FIELD_FROM_NAME_IS_EMPTY' => 'Champ d\'expéditeur vide.',
    'ERR_FIELD_FROM_NAME_IS_INVALID' => 'Champ d\'expéditeur non valable.',
    'ERR_FIELD_FROM_ADDR_NAME_IS_NOT_SET' => 'Le couple adresse et nom d\'expéditeur n\'est pas défini.',
    'ERR_FIELD_FROM_ADDR_NAME_IS_EMPTY' => 'Le couple adresse et nom d\'expéditeur est vide.',
    'ERR_FIELD_FROM_ADDR_NAME_IS_INVALID' => 'Le couple adresse et nom d\'expéditeur est incorrect.',
    'ERR_FIELD_FROM_ADDR_NAME_DOESNT_MATCH_REGEX' => 'Ensemble adresse et nom d\'expéditeur invalide. Ecrire sous la forme "de@adresse.org <Name of Person>".',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_NAME_PART' => 'Nom d\'expéditeur invalide dans l\'ensemble adresse et nom d\'expéditeur.',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_EMAIL_PART' => 'Adresse invalide dans l\'ensemble adresse et nom d\'expéditeur.',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_EMAIL_PART_TO_FIELD_FROM' => 'L\'adresse et le nom de l\'expéditeur ne correspondent pas au nom ou à l\'adresse d\'expéditeur.',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_EMAIL_PART_TO_FIELD_FROM_ADDR' => 'L\'adresse et le nom de l\'expéditeur ne correspondent pas à l\'adresse d\'expéditeur.',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_EMAIL_PART_TO_FIELD_FROMNAME' => 'L\'adresse et le nom de l\'expéditeur ne correspondent pas au champ d\'expéditeur.',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_EMAIL_PART_TO_FIELD_FROM_NAME' => 'L\'adresse et le nom de l\'expéditeur ne correspondent pas au champ d\'expéditeur.',
);
