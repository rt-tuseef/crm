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
    'LBL_FROM_ADDR' => 'Email Expéditeur :',
    'LBL_REPLY_ADDR' => 'Adresse de réponse',
    'LBL_REPLY_NAME' => 'Label de "Réponse à" :',

    'LBL_MODULE_NAME' => 'Campagnes',
    'LBL_MODULE_TITLE' => 'Campagnes: Accueil',
    'LBL_SEARCH_FORM_TITLE' => 'Recherche Campagnes',
    'LBL_LIST_FORM_TITLE' => 'Liste Campagnes',
    'LBL_NEWSLETTER_LIST_FORM_TITLE' => 'Liste Bulletins',
    'LBL_CAMPAIGN_NAME' => 'Nom:',
    'LBL_CAMPAIGN' => 'Campagne:',
    'LBL_NAME' => 'Nom:',
    'LBL_INVITEE' => 'Contacts',
    'LBL_LIST_CAMPAIGN_NAME' => 'Campagne',
    'LBL_LIST_STATUS' => 'Statut',
    'LBL_LIST_TYPE' => 'Type',
    'LBL_LIST_START_DATE' => 'Date de début',
    'LBL_LIST_END_DATE' => 'Date de fin',
    'LBL_DATE_ENTERED' => 'Date de création',
    'LBL_DATE_MODIFIED' => 'Date de modification',
    'LBL_MODIFIED' => 'Modifié par :',
    'LBL_CREATED' => 'Créé par :',
    'LBL_TEAM' => 'Équipe:',
    'LBL_ASSIGNED_TO' => 'Assigné à:',
    'LBL_ASSIGNED_TO_ID' => 'Assigné à :',
    'LBL_ASSIGNED_TO_NAME' => 'Assignée à:',
    'LBL_CAMPAIGN_START_DATE' => 'Date Début:',
    'LBL_CAMPAIGN_END_DATE' => 'Date Fin:',
    'LBL_CAMPAIGN_STATUS' => 'Statut :',
    'LBL_CAMPAIGN_BUDGET' => 'Budget :',
    'LBL_CAMPAIGN_EXPECTED_COST' => 'Coût estimé :',
    'LBL_CAMPAIGN_ACTUAL_COST' => 'Coût Actuel :',
    'LBL_CAMPAIGN_EXPECTED_REVENUE' => 'Revenu attendu :',
    'LBL_CAMPAIGN_IMPRESSIONS' => 'Affichages :',
    'LBL_CAMPAIGN_COST_PER_IMPRESSION' => 'Coût par affichage :',
    'LBL_CAMPAIGN_COST_PER_CLICK_THROUGH' => 'Coût par clic :',
    'LBL_CAMPAIGN_OPPORTUNITIES_WON' => 'Nombre d\'opportunités gagnées liées à la Campagne:',
    'LBL_CAMPAIGN_TYPE' => 'Type :',
    'LBL_CAMPAIGN_OBJECTIVE' => 'Objectif :',
    'LBL_CAMPAIGN_CONTENT' => 'Description:',
    'LBL_CAMPAIGN_INACTIVE_SCHEDULE' => "La campagne '{0}' est en statut 'Inactive';. Vous devez modifier le statut en 'En cours'",
    'LNK_NEW_CAMPAIGN' => 'Créer une campagne (Classique)',
    'LNL_NEW_CAMPAIGN_WIZARD' => 'Créer Campagne',
    'LNK_CAMPAIGN_LIST' => 'Campagnes',
    'LNK_IMPORT_CAMPAIGNS' => 'Importer Campagnes',
    'LNK_NEW_PROSPECT' => 'Nouvelle Cible',
    'LNK_PROSPECT_LIST' => 'Voir Cibles',
    'LNK_NEW_PROSPECT_LIST' => 'Nouvelle Liste de cibles',
    'LNK_PROSPECT_LIST_LIST' => 'Listes de cibles',
    'LBL_MODIFIED_BY' => 'Modifié par :',
    'LBL_CREATED_BY' => 'Créé par :',
    'LBL_TRACKER_TITLE' => 'Détails Traqueur ',
    'LBL_TRACKER_KEY' => 'Tracker :',
    'LBL_TRACKER_URL' => 'URL Traqueur:',
    'LBL_TRACKER_TEXT' => 'Texte du lien Tracker :',
    'LBL_TRACKER_COUNT' => 'Nombre de clics :',
    'LBL_REFER_URL' => 'URL de redirection Tracker :',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Campagnes',
    'LBL_NEW_FORM_TITLE' => 'Nouvelle Campagne',
    'LBL_TRACKED_URLS' => 'URLs Traqueur',
    'LBL_TRACKED_URLS_SUBPANEL_TITLE' => 'URLs Traqueur',
    'LBL_CAMPAIGN_ACCOUNTS_SUBPANEL_TITLE' => 'Comptes',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Liste Cible',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historique',
    'LBL_EMAIL_MARKETING_SUBPANEL_TITLE' => 'Email Marketing',
    'LNK_NEW_EMAIL_TEMPLATE' => 'Créer Modèle Email',
    'LNK_EMAIL_TEMPLATE_LIST' => 'Voir Modèles Email',
    'LBL_TRACK_BUTTON_TITLE' => 'Voir Statut',
    'LBL_TRACK_BUTTON_LABEL' => 'Voir Statut',
    'LBL_QUEUE_BUTTON_TITLE' => 'Envoyer Emails',
    'LBL_QUEUE_BUTTON_LABEL' => 'Envoyer Emails',
    'LBL_TEST_BUTTON_TITLE' => 'Envoyer Test',
    'LBL_TEST_BUTTON_LABEL' => 'Envoyer Test',
    'LBL_COPY_AND_PASTE_CODE' => 'Ou copiez et collez le code html ci-dessous dans une page existante',
    'LBL_CHARSET_NOTICE' => 'NOTICE : Veuillez vous assurer que la page contenant le formulaire Web-à-Prospect contient les lignes suivantes dans la section &lt;head&gt; :',

    'LBL_TODETAIL_BUTTON_TITLE' => 'Voir Détails',
    'LBL_TODETAIL_BUTTON_LABEL' => 'Voir Détails',

    'LBL_DEFAULT' => 'Toutes les Listes Cible',
    'LBL_MESSAGE_QUEUE_TITLE' => 'File d\'attente Message',

    'LBL_LOG_ENTRIES_TARGETED_TITLE' => 'Message envoyé/Tenté',
    'LBL_LOG_ENTRIES_SEND_ERROR_TITLE' => 'Messages Rejetés, Autre',
    'LBL_LOG_ENTRIES_INVALID_EMAIL_TITLE' => 'Messages Rejetés, Email Invalide',
    'LBL_LOG_ENTRIES_LINK_TITLE' => 'Liens Cliqués',
    'LBL_LOG_ENTRIES_VIEWED_TITLE' => 'Messages Lus',
    'LBL_LOG_ENTRIES_REMOVED_TITLE' => 'Désinscription',
    'LBL_LOG_ENTRIES_LEAD_TITLE' => 'Prospects Créés',
    'LBL_CAMPAIGN_LEAD_SUBPANEL_TITLE' => 'Prospects',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Opportunités',
    'LBL_LOG_ENTRIES_CONTACT_TITLE' => 'Contacts Créés',

    //error messages.
    'ERR_SENDING_NOW' => 'Les messages sont en cours d\'envoi, essayez plus tard.',

    'LBL_TRACK_ROI_BUTTON_LABEL' => 'Voir ROI',
    'LBL_TRACK_DELETE_BUTTON_TITLE' => 'Supprimer Enregistrements Test',
    'LBL_TRACK_DELETE_BUTTON_LABEL' => 'Supprimer Enregistrements Test',
    'LBL_TRACK_DELETE_CONFIRM' => 'Cette option supprime les entrées de journal créées par le test. Continuer?',
    'ERR_NO_MAILBOX' => "Les messages marketing suivants ne sont pas associés à un compte de messagerie. <BR> Veuillez corriger cela avant de continuer.",
    'LBL_LIST_TO_ACTIVITY' => 'Voir Statut',
    'LBL_CURRENCY' => 'Devise:',
    'LBL_TARGETED' => 'Ciblé',
    'LBL_TOTAL_TARGETED' => 'Total Ciblé',
    'LBL_CAMPAIGN_FREQUENCY' => 'Fréquence:',
    'LBL_NEWSLETTERS' => 'Voir Bulletins',
    'LBL_NEWSLETTER' => 'Bulletin',
    'LBL_SURVEY' => 'Sondage',
    'LBL_NEWSLETTER_FORENTRY' => 'Bulletin',
    'LBL_CREATE_NEWSLETTER' => 'Nouveau Bulletin',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_INBOUND_EMAIL_SETTINGS' => 'Paramètres Email Entrant',
    'LBL_INBOUND_EMAIL_SETTINGS_TITLE' => 'Paramètres Email Entrant (info)',
    'LBL_INBOUND_EMAIL_CREATE' => 'Créer Email Entrant',
    'LBL_INBOUND_EMAIL_CREATE_TITLE' => 'Créer Email Entrant (info)',
    'LBL_STATUS_TEXT' => 'Statut:',
    'LBL_FROM_MAILBOX_NAME' => 'Compte Traitement Messages Rejetés:',
    'LBL_FROM_MAILBOX_TITLE' => 'Compte de Traitement des Messages Rejetés:',
    'LBL_OUTBOUND_MAILBOX_NAME' => 'Compte Email Sortant:',
    'LBL_FROM_NAME' => 'Nom Expéditeur:',
    'LBL_START_DATE_TIME' => 'Horaire Date et heure :',
    'LBL_DATE_START' => 'Date Début ',
    'LBL_TIME_START' => 'Heure Début ',
    'LBL_TEMPLATE' => 'Modèle d\'E-mail :',
    'LBL_TEMPLATE_FIELD' => 'Modèle d\'E-mail :',
    'LBL_SUBJECT' => 'Sujet:',
    'LBL_WIDTH' => 'Largeur par Défaut:',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'Créer',
    'LBL_MESSAGE_FOR' => 'Destinataires:',
    'LBL_FINISH' => 'Terminer',
    'LBL_ALL_PROSPECT_LISTS' => 'Toutes les Listes Cible dans la Campagne.',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'Modifier',
    'LBL_EMAIL_SETUP_WIZARD' => 'Paramètrages Email',
    'LBL_DIAGNOSTIC_WIZARD' => 'Diagnostics',
    'LBL_ALREADY_SUBSCRIBED_HEADER' => 'Abonnés Bulletins',
    'LBL_UNSUBSCRIBED_HEADER' => 'Non Abonnés Bulletins',
    'LBL_UNSUBSCRIBED_HEADER_EXPL' => 'Déplacer le Bulletin dans la liste des Bulletins disponibles pour la désinscription, désinscrira le contact pour ce Bulletin. Cela ne supprimera pas le contact de la liste originale des destinataires ou de la liste originale des cibles.',
    'LBL_FILTER_CHART_BY' => 'Filtrer Graphique Par:',
    'LBL_MANAGE_SUBSCRIPTIONS_TITLE' => 'Gérer Abonnements',
    'LBL_MARK_AS_SENT' => 'Marquer comme Envoyé',
    'LBL_DEFAULT_LIST_ENTRIES_WERE_PROCESSED' => 'Les entrées ont été traitées',
    //newsletter wizard
    'LBL_EDIT_TRACKER_NAME' => 'Nom Traqueur',
    'LBL_EDIT_TRACKER_URL' => 'URL Traqueur',
    'LBL_EDIT_OPT_OUT_' => 'Lien Désinscription?',
    'LBL_EDIT_OPT_OUT' => 'Lien Désinscription:',
    'LBL_UNSUBSCRIPTION_LIST_NAME' => 'Liste Désabonnement:',
    'LBL_SUBSCRIPTION_LIST_NAME' => 'Liste Abonnement:',
    'LBL_TEST_LIST_NAME' => 'Liste Test:',
    'LBL_UNSUBSCRIPTION_TYPE_NAME' => 'Désabonnement',
    'LBL_SUBSCRIPTION_TYPE_NAME' => 'Abonnement',
    'LBL_TEST_TYPE_NAME' => 'Test',
    'LBL_UNSUBSCRIPTION_LIST' => 'Liste Désabonnement',
    'LBL_SUBSCRIPTION_LIST' => 'Liste Abonnement',
    'LBL_MRKT_NAME' => 'Nom Email Marketing',
    'LBL_MRKT_NAME_FIELD' => 'Nom Email Marketing:',
    'LBL_TEST_LIST' => 'Liste Test',
    'LBL_WIZARD_HEADER_MESSAGE' => 'Remplissez les champs obligatoires pour aider à identifier la campagne.',
    'LBL_WIZARD_BUDGET_MESSAGE' => 'Entrez le budget pour calculer le retour sur investissement (ROI)',
    'LBL_WIZARD_TARGET_MESSAGE1' => 'Sélectionner ou créer une liste cible à utiliser dans votre campagne. Cette liste sera utilisé lors de l\'envoi de mails avec vos messages de campagnes.',
    'LBL_WIZARD_TARGET_MESSAGE2' => 'Créer Nouvelle Liste Cible:',
    'LBL_WIZARD_TRACKER_MESSAGE' => 'Définissez ici les URLs et Noms des Traqueurs de votre Campagne. L\'application conservera l\'historique des clics sur ces URLs.',
    'LBL_HOME_START_MESSAGE' => 'Quelle campagne souhaitez-vous créer?',
    'LBL_WIZARD_LAST_STEP_MESSAGE' => '             Vous êtes déjà à la dernière étape.',
    'LBL_WIZARD_FIRST_STEP_MESSAGE' => '             Vous êtes déjà à la première étape.',
    'LBL_WIZ_NEWSLETTER_TITLE_STEP1' => 'Campagne Entête',
    'LBL_WIZ_NEWSLETTER_TITLE_STEP2' => 'Campagne Budget',
    'LBL_WIZ_NEWSLETTER_TITLE_STEP3' => 'Campagne URL Traqueurs ',
    'LBL_WIZ_NEWSLETTER_TITLE_STEP4' => 'Information Abonnement',
    'LBL_WIZ_MARKETING_TITLE' => 'Email Marketing',
    'LBL_WIZ_SENDMAIL_TITLE' => 'Sélectionnez Enregistrement Email Marketing',
    'LBL_WIZ_EMAILTPL_TITLE' => 'Sélectionnez Modèle Email',
    'LBL_WIZ_NEWSLETTER_TITLE_SUMMARY' => 'Sommaire',
    'LBL_NAVIGATION_MENU_GEN1' => 'Campagne Entête',
    'LBL_NAVIGATION_MENU_GEN2' => 'Budget',
    'LBL_NAVIGATION_MENU_TRACKERS' => 'Traqueurs',
    'LBL_NAVIGATION_MENU_MARKETING' => 'Marketing',
    'LBL_NAVIGATION_MENU_SEND_EMAIL' => 'Envoyer Message',
    'LBL_NAVIGATION_MENU_SUBSCRIPTIONS' => 'Abonnements',
    'LBL_NAVIGATION_MENU_SUMMARY' => 'Sommaire',
    'LBL_NAVIGATION_MENU_SEND_EMAIL_AND_SUMMARY' => 'Envoyer Email et Sommaire',
    'LBL_SUBSCRIPTION_TARGET_WIZARD_DESC' => 'Les cibles de cette liste recevront les emails du Bulletin.<br>Si vous ne spécifiez aucune liste, une liste vide sera créée automatiquement.',
    'LBL_UNSUBSCRIPTION_TARGET_WIZARD_DESC' => 'Les cibles de cette liste recevront PAS/PLUS de Bulletin.<br>Si vous ne spécifiez aucune liste, une liste vide sera créée automatiquement.',
    'LBL_TEST_TARGET_WIZARD_DESC' => 'Les cibles de cette liste recevront les emails de test du Bulletin.<br>Si vous ne spécifiez aucune liste, une liste vide sera créée automatiquement.',
    'LBL_ADD_TRACKER' => 'Créer Traqueur',
    'LBL_CREATE_TARGET' => 'Créer',
    'LBL_SELECT_TARGET' => 'Utiliser une Liste Cible Existante',
    'LBL_REMOVE' => 'Retirer',
    'LBL_START' => 'Démarrer',
    'LBL_TOTAL_ENTRIES' => 'Entrées',
    'LBL_CONFIRM_SEND_SAVE' => 'Vous êtes sur le point de quitter et de poursuivre sur la page d\'envoi de la Campagne Email. Souhaitez-vous sauvegarder et poursuivre ?',
    'LBL_NEWSLETTER WIZARD_TITLE' => 'Lettre d\'information :',
    'LBL_NEWSLETTER_WIZARD_START_TITLE' => 'Editer la lettre d\'information :',
    'LBL_CAMPAIGN_WIZARD_START_TITLE' => 'Editer la Campagne :',
    'LBL_SEND_AS_TEST' => 'Envoyer Email comme Test',
    'LBL_SAVE_EXIT_BUTTON_LABEL' => 'Sauvegarder',
    'LBL_SAVE_CONTINUE_BUTTON_LABEL' => 'Suivant',
    'LBL_TARGET_LISTS' => 'Listes Cible',
    'LBL_NO_SUBS_ENTRIES_WARNING' => 'Vous ne pouvez pas envoyer d\'email marketing tant que votre liste d\'abonnement ne comporte pas au moins une seule entrée. Vous pouvez remplir votre liste après avoir terminé.',
    'LBL_NO_TARGET_ENTRIES_WARNING' => 'Vous ne pouvez pas envoyer d\'email marketing tant que votre liste cible ne comporte pas au moins une seule entrée.  Vous pouvez remplir votre liste après avoir terminé.',
    'LBL_NO_TARGETS_WARNING' => 'Vous ne pouvez pas envoyer d\'email marketing tant que votre campagne ne comporte pas au moins une seule liste cible.',
    'LBL_NO_TARGET_ENTRIES_WARNING_NON_EMAIL' => 'Vous n’avez aucune Cible dans vos Listes de Cibles choisies pour cette Campagne. Vous pouvez remplir votre Liste après avoir terminer.',
    'LBL_NO_TARGETS_WARNING_NON_EMAIL' => 'Vous n’avez pas sélectionné votre Liste de Cibles pour cette Campagne.',
    'LBL_NONE' => 'aucune créé',
    'LBL_CAMPAIGN_WIZARD' => 'Assistant Campagne',
    'LBL_EMAIL' => 'Email',
    'LBL_OTHER_TYPE_CAMPAIGN' => 'Campagne non basée sur le courrier électronique',
    'LBL_TARGET_LIST' => 'Liste Cible',
    'LBL_TARGET_TYPE' => 'Type Liste Cible:',
    'LBL_TARGET_NAME' => 'Nom Liste Cible',
    'LBL_NUMBER_OF_TARGET' => 'Nombre de Cible',
    'LBL_EMAILS_SCHEDULED' => 'Emails Plannifiés',
    'LBL_TEST_EMAILS_SENT' => 'Emails Test Envoyés',
    'LBL_USERS_CANNOT_OPTOUT' => 'Les utilisateurs systèmes ne peuvent pas se désinscrie à partir des emails qu\'ils recevront.',
    'LBL_ELECTED_TO_OPTOUT' => 'Vous avez choisi de vous désinscrire et de ne plus recevoir de courriels.',
    'LBL_COPY_OF' => 'Copie de ',
    'LBL_SAVED_SEARCH' => 'Recherche Sauvegardée & Mise en page',
    //email setup wizard
    'LBL_WIZ_FROM_NAME' => 'Nom Expéditeur:',
    'LBL_WIZ_FROM_ADDRESS' => 'Email Expéditeur:',
    'LBL_EMAILS_PER_RUN' => 'Nombre Emails envoyés par batch:',
    'LBL_CUSTOM_LOCATION' => 'Défini par Utilisateur',
    'LBL_DEFAULT_LOCATION' => 'Par Défaut ',
    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Seules les valeurs entières sont permises pour le Nombre Emails envoyés par batch',
    'LBL_LOCATION_TRACK' => 'Emplacement des fichiers traqueur de la compagne (comme campaign_tracker.php):',
    'LBL_MAIL_SENDTYPE' => 'Agent Transfert Mail:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Utiliser Authentification SMTP?',
    'LBL_MAIL_SMTPPASS' => 'Mot de passe SMTP:',
    'LBL_MAIL_SMTPPORT' => 'Port SMTP',
    'LBL_MAIL_SMTPSERVER' => 'Serveur SMTP',
    'LBL_MAIL_SMTPUSER' => 'SMTP Nom Utilisateur',
    'LBL_EMAIL_SETUP_WIZARD_TITLE' => 'Configuration Messagerie pour les Campagnes',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Valeur du paramètre site_url dans le fichier config.php',
    'LBL_NOTIFY_TITLE' => 'Options Notification Email',
    'LBL_MASS_MAILING_TITLE' => 'Options Envoi de masse',
    'LBL_SERVER_TYPE' => 'Protocole Serveur Mail',
    'LBL_SERVER_URL' => 'Serveur Mail',
    'LBL_LOGIN' => 'Nom Utilisateur',
    'LBL_PORT' => 'Port Serveur Mail',
    'LBL_MAILBOX_NAME' => 'Nom Compte Mail:',
    'LBL_PASSWORD' => 'Mot de Passe',
    'LBL_MAILBOX_DEFAULT' => 'BOÎTE DE RÉCEPTION',
    'LBL_MAILBOX' => 'Dossier Surveillé',
    'LBL_NAVIGATION_MENU_SETUP' => 'Configuration Email',
    'LBL_NAVIGATION_MENU_NEW_MAILBOX' => 'Nouveau Compte de Messagerie',
    'LBL_MAILBOX_CHECK_WIZ_GOOD' => 'Des comptes de messagerie avec traitement des messages rejetés ont été détectés. Vous n\'avez pas besoin de créer un nouveau, mais vous pouvez toujours le faire ci-dessous.',
    'LBL_MAILBOX_CHECK_WIZ_BAD' => 'Aucun compte de messagerie avec traitement des messages rejetés n\'a été détecté. Veuillez en créer un nouveau ci-dessous.',
    'LBL_CAMP_MESSAGE_COPY' => 'Conserver des copies des messages de la campagne:',
    'LBL_CAMP_MESSAGE_COPY_DESC' => 'Voulez-vous stocker une copie complère de <bold>CHAQUE</bold> email envoyé durant toutes les campagnes ?  <bold>Par défaut cette valeur est positionné à Non, c\'est aussi ce que nous recommandons</bold>. En choisissant Non, uniquement le modèle du mail sera stocké et les variables seront nécessaires pour re-créer les messages individuels.',
    'LBL_YES' => 'Oui',
    'LBL_NO' => 'Non',
    'LBL_EMAIL_SETUP_DESC' => 'Remplissez le formulaire ci-dessous pour modifier les paramètres de votre système afin que les courriels de la campagne puissent être envoyés.',
    'LBL_CREATE_MAILBOX' => 'Créer Nouveau Compte de Messagerie',
    'LBL_SSL_DESC' => 'Si votre serveur de messagerie prend en charge les connexions de socket sécurisées, activer cette option forcera les connexions SSL lors de l\'importation de courrier électronique.',
    'LBL_SSL' => 'Utiliser SSL',
    //campaign diagnostics
    'LNK_CAMPAIGN_DIGNOSTIC_LINK' => 'La campagne peut ne pas fonctionner comme vous le souhaitez et vos emails ne peuvent pas être envoyés pour les raisons suivantes:',
    'LBL_CAMPAIGN_DIAGNOSTICS' => 'Diagnostique Compagne',
    'LBL_MAILBOX_CHECK1_GOOD' => ' Compte messagerie avec traitement de rebond détecté:',
    'LBL_MAILBOX_CHECK1_BAD' => 'Aucun compte de messagerie avec traitement messages rejetés.',
    'LBL_MAILBOX_CHECK2_GOOD' => ' Paramètres Email sont configurés:',
    'LBL_MAILBOX_CHECK2_BAD' => 'Merci de configurer les paramètres Emails.',
    'LBL_SCHEDULER_CHECK_GOOD' => 'Planificateurs détectés',
    'LBL_SCHEDULER_CHECK_BAD' => 'Aucun planificateur détecté',
    'LBL_SCHEDULER_CHECK1_BAD' => 'Le planificateur n\'a pas été configuré pour traiter les messages de campagne rejetés.',
    'LBL_SCHEDULER_CHECK2_BAD' => 'Le planificateur n\'a pas été configuré pour traiter les messages des campagnes.',
    'LBL_SCHEDULER_NAME' => 'Planificateur',
    'LBL_SCHEDULER_STATUS' => 'Statut',
    'LBL_EMAIL_SETUP_WIZ' => 'Lancer Configuration Email',
    'LBL_SCHEDULER_LINK' => 'aller à l\'écran d\'administration du planificateur.',
    'LBL_TO_WIZARD_TITLE' => 'Lancer Assistant',
    'LBL_EDIT_EXISTING' => 'Modifier Campagne',
    'LBL_SEND_EMAIL' => 'Envoyer Messagerie à l\'heure programmée',
    'LBL_CREATE_NEW_MARKETING_EMAIL' => 'Créer Nouveau Email Marketing',
    'LBL_NON_ADMIN_ERROR_MSG' => 'Notifiez votre administrateur système pour qu\'il puisse corriger ce problème',
    'LBL_EMAIL_COMPONENTS' => 'Composantes Email',
    'LBL_SCHEDULER_COMPONENTS' => 'Composantes Planificateur',
    'LBL_RECHECK_BTN' => 'Re-Vérifier',
    //web to lead wizard titles
    'LBL_DEFINE_LEAD_HEADER' => 'Entête Formulaire:',
    'LBL_LEAD_DEFAULT_HEADER' => 'Formulaire Web à Prospect pour Campagne',
    'LBL_DEFINE_LEAD_SUBMIT' => 'Libellé Bouton Envoi:',
    'LBL_DEFINE_LEAD_POST_URL' => 'URL Publication:',
    'LBL_EDIT_LEAD_POST_URL' => 'Modifier URL Publication?',
    'LBL_DEFINE_LEAD_REDIRECT_URL' => 'URL Redirection:',
    'LBL_LEAD_NOTIFY_CAMPAIGN' => 'Campagne Liée:',
    'LBL_DEFAULT_LEAD_SUBMIT' => 'Soumettre',
    'LBL_WEB_TO_LEAD' => 'Créer Formulaire de Personne',
    'LBL_LEAD_FOOTER' => 'Pied Formulaire:',
    'NTC_NO_LEGENDS' => 'Aucun',
    'NTC_DELETE_CONFIRMATION' => 'Etes vous sûr de vouloir supprimer cet enregistrement ?',
    'LBL_DESCRIPTION_LEAD_FORM' => 'Description Formulaire:',
    'LBL_DESCRIPTION_TEXT_LEAD_FORM' => 'La soumission de ce formulaire créera un Prospect et un lien avec la campagne',
    'LBL_DOWNLOAD_TEXT_WEB_TO_LEAD_FORM' => 'S\'il vous plaît télécharger le formulaire Web à Propect',
    'LBL_DOWNLOAD_WEB_TO_LEAD_FORM' => 'Formulaire Web à Personne',
    'LBL_PROVIDE_WEB_TO_LEAD_FORM_FIELDS' => 'Merci de renseigner tous les champs requis',
    'LBL_NOT_VALID_EMAIL_ADDRESS' => 'Adresse Email invalide',
    'LBL_SELECT_REQUIRED_LEAD_FIELDS' => 'Merci de sélectionner les champs requis:',
    //Campaign charts
    'LBL_CAMPAIGN_RETURN_ON_INVESTMENT' => 'Retour sur Investissement de la Campagne',
    'LBL_CAMPAIGN_RESPONSE_BY_RECIPIENT_ACTIVITY' => 'Réponse Campagne par Activité de Destinataire',
    'LBL_LOG_ENTRIES_BLOCKEDD_TITLE' => 'Supprimée par Adresse Email ou domaine',

    'LBL_AMOUNT_IN' => 'Montant en ',

    // Labels for ROI Chart
    'LBL_ROI_CHART_REVENUE' => 'Revenu',
    'LBL_ROI_CHART_INVESTMENT' => 'Investissement',
    'LBL_ROI_CHART_BUDGET' => 'Budget',
    'LBL_ROI_CHART_EXPECTED_REVENUE' => 'Revenu Prévu',

    // Top Campaigns Dashlet
    'LBL_TOP_CAMPAIGNS' => 'Meilleures Campagnes',
    'LBL_TOP_CAMPAIGNS_NAME' => 'Nom Campagne',
    'LBL_TOP_CAMPAIGNS_REVENUE' => 'Revenu',
    'LBL_TOP_CAMPAIGNS_DESCRIPTION' => 'Campagnes les plus performantes par Revenu',
    'LBL_LEADS' => 'Prospects',
    'LBL_CONTACTS' => 'Contacts',
    'LBL_ACCOUNTS' => 'Comptes',
    'LBL_OPPORTUNITIES' => 'Opportunités',
    'LBL_CREATED_USER' => 'Créé par Utilisateur',
    'LBL_MODIFIED_USER' => 'Modifié par Utilisateur',
    'LBL_LOG_ENTRIES' => 'Entrées Journal',
    'LBL_INVALID EMAIL_SUBPANEL_TITLE' => 'Email Invalide',
    'LBL_SEND ERROR_SUBPANEL_TITLE' => 'Erreurs Envoi',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Comptes',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Prospects',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Opportunités',

    'LBL_LEAD_FORM_WIZARD' => 'Assistant Formulaire Prospect',
    'LBL_CAMPAIGN_INFORMATION' => 'Vue Globale', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EDIT_BUTTON' => 'Lancer Assistant',
    'LBL_YEAR' => "Année",
    'LBL_DAY' => "Jour",
    'LBL_EDIT_LAYOUT' => 'Modifier Mise en page' /*for 508 compliance fix*/,
    'LBL_INVALID' => 'Invalide' /*for 508 compliance fix*/,
    'LBL_VALID' => 'Valide' /*for 508 compliance fix*/,
    'LBL_ALERT' => 'Alerte' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Lancer Assistant' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'Supprimer' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Retirer' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => 'Vue',
    'ERR_NO_OPTS_SAVED' => 'Pas de paramètres optimaux sauvegardés avec votre boîte email entrante.',
    'ERR_REVIEW_EMAIL_SETTINGS' => 'Veuillez revoir vos paramètre emails entrants.',
    'LBL_LEADS_DELETED_SINCE_CREATED' => '{0} Prospects créées à l\'aide de cette campagne ont été supprimées depuis la création.',
    'LBL_FROM_NAME_HELP' => 'Ceci sera le nom que votre destinataire verra affiché',
    'LBL_FROM_ADDR_HELP' => 'Ceci sera l\'adresse que votre destinataire verra affichée',
    'LBL_REPLY_TO_NAME_HELP' => 'Ceci sera le nom à qui votre destinataire répondra',
    'LBL_REPLY_TO_ADDR_HELP' => 'Ceci sera l\'adresse à laquelle votre destinataire répondra',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => 'Voir Comptes Messagerie Sortants',
    'LBL_CREATE_EMAIL_TEMPLATE_BTN' => 'Sauvegarder',
    'LBL_SAVE_EMAIL_TEMPLATE_BTN' => 'Sauvegarder',
    'LBL_SEARCH_TARGET_LIST' => 'Filtre Liste Cible',
    'LBL_INSERT_URL_REF' => 'Insérer URL référence',
    'LBL_INSERT_TRACKER_URL' => 'Insérer URL Traqueur:',
    'LBL_CREATE_TRACKER_BTN' => 'Créer Traqueur',
    'LBL_INSERT_TRACKER_BTN' => 'Insérer Traqueur',
    'LBL_EDIT_TRACKER_BTN' => 'Modifier Traqueur',
    'LBL_CREATE_TRACKER_URL' => '-- Créer --',
    'LBL_INSERT' => 'Insérer',
    'LBL_INSERT_VARIABLE' => 'Insérer:',
    'LBL_INSERT_VARIABLE_BTN' => 'Insérer Variable',
    'LBL_INSERT_VARIABLE_SUBJECT_BTN' => 'Insérer Variable',
    'LBL_EMAIL_VARIABLES' => 'Variables Email',
    'LBL_SAVE' => 'Sauvegarder',
    'ERR_REQUIRED_TRACKER_NAME' => 'Nom Traqueur requis',
    'ERR_REQUIRED_TRACKER_URL' => 'URL Traqueur requis',
    'LBL_UPDATE_TEMPLATE' => 'Mettre à jour Modèle',
    'LBL_ATTACHMENTS' => 'Fichiers joints',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Champ obligatoire manquant',
    'LBL_SUITE_DOCUMENT' => 'Document',
    'LBL_UPLOAD_FILE' => 'Déposer fichier',
    'LBL_EMAIL_ATTACHMENT' => 'Pièce jointe',
    'LBL_PROCESS_BOUNCED_EMAILS' => 'Traiter Messages Rejetés',
    'LBL_PROCESS_CAMPAIGN_EMAILS' => 'Traiter Emails de la Compagne',
    'LBL_SENDER_DETAILS' => 'Détails Expéditeur',
    'LBL_CHOOSE_TEMPLATES' => 'Choisir Modèles',
    'LBL_CHOOSE_TARGETS' => 'Choisir Cibles',
    'LBL_CAMPAIGN_DETAILS_AND_CONDITIONS' => 'Détails et Conditions de la Compagne',
    'LBL_OPEN_IN_NEW_WINDOW' => 'Ouvrir dans une nouvelle fenêtre...',
    'LBL_CREATE_MARKETING_RECORD' => 'Suivant',
    'LBL_NO_TEMPLATE_SELECTED' => 'Modèle Email non sélectionné',
    'LBL_SELECT_TEMPLATE' => 'Modèles',
    'LBL_WIZARD_ADD_TARGET' => 'Ajouter Liste Cible Existante:',
    'LBL_CLICK_TO_ADD' => 'Cliquez sur les éléments de modèle à ajouter.',
    'LBL_CANCEL' => 'Annuler',
    'LBL_EMPTY_SUBJECT' => 'Sujet Email est vide. Êtes-vous sûr de vouloir continuer?',
    'LBL_OVERWRITE_QUESTION' => 'Êtes-vous sûr de vouloir remplacer le modèle Email?',
    'LBL_SELECT_EMAIL_TRACKER' => 'Veuillez sélectionner un Traqueur.',
    'LBL_STEP_UNAVAILABLE' => 'Pour avancer SVP cliquez sur le bouton Suivant.',
    'LBL_STEP_INFO_CAMPAIGN_HEADER' => 'SVP entrer le nom de la compagne et définir le statut',
    'LBL_STEP_INFO_TARGET_LIST_NEWSLETTER' => 'Toute compagne requiert des Listes Cible pour inscription, désinscription et test. Quand une liste n’est pas spécifiée, une liste vide sera créée à la sauvegarde.',
    'LBL_STEP_INFO_TARGET_LIST_NON_NEWSLETTER' => 'Sélectionnez vos Listes Cible pour cette campagne.',
    'LBL_STEP_INFO_EMAIL_TEMPLATE' => 'Sélectionner un modèle Email ou créer un nouveau.',
    'LBL_STEP_INFO_MARKETING' => 'S’il vous plaît choisir les comptes de messagerie.',
    'LBL_NO_SUBJECT' => 'Le modèle Email sélectionné n\'a pas de sujet',
    'LBL_NO_HTML_BODY_CONTENTS' => 'Le modèle Email sélectionné n’a pas de corps html',
    'LBL_NO_SELECTED_TEMPLATE' => 'Aucun modèle Email sélectionné!',
    'LBL_NO_BODY_CONTENTS' => 'Le modèle Email sélectionné n’a pas un corps html',
    'LBL_ERROR_ON_MARKETING' => 'Champs obligatoires manquants',

    'LBL_NO_MARKETING_NAME' => 'Nom Enregistrement Marketing est vide',
    'LBL_NO_INBOUND_EMAIL_SELECTED' => 'Compte Messagerie Marketing Entrant non sélectionné',
    'LBL_NO_DATE_START' => 'Enregistrement Marketing n’a pas de date de début',
    'LBL_NO_FROM_NAME' => 'Nom Expéditeur est vide',
    'LBL_NO_FROM_ADDR_OR_INVALID' => 'Adresse Expéditeur est vide ou invalide',
    'LBL_NEWSLETTER_TITLE' => ' Une Campagne Bulletin est un type de campagne Email qui vous permet d’envoyer un Email à une liste cible unique.',
    'LBL_EMAIL_TITLE' => 'Une Campagne Email est un type de campagne Email, qui vous permet d’envoyer un Email à plusieurs listes cible.',
    'LBL_NON_EMAIL_TITLE' => 'Une Campagne non Email est une campagne qui n’envoie pas de courriel.',
    'LBL_TEMPLATE_SAVING' => 'Veuillez patienter, le modèle est sauvegardé...',
    'LBL_TEMPLATE_SAVED' => 'Modèle enregistré.',
    'LBL_PLEASE_SELECT_OPTION' => 'Veuillez sélectionner l\'option que vous préférez',
    'LBL_OPTION_SELECT_TEMPLATE' => 'Sélectionnez un modèle existant',
    'LBL_OPTION_CREATE_TEMPLATE' => 'Créer un tout nouveau modèle',
    'LBL_OPTION_COPY_TEMPLATE' => 'Copier un modèle existant',
    'LBL_SUMMARY' => 'Sommaire',
    'LBL_CAMPAIGN_CHECKLIST' => 'Liste Vérification Campagne',

    'LBL_EMAIL_MARKETING' => 'Email Marketing',
    'LBL_QUEUE_ITEMS' => 'Éléments File d’attente',
    'LBL_PROSPECT_LISTS' => 'Listes Prospect',
    'LBL_SURVEYRESPONSES_CAMPAIGNS_FROM_SURVEYRESPONSES_TITLE' => 'Réponses Sondage',
    'LBL_CAMPAIGN_SURVEY' => "Sondage",
);
