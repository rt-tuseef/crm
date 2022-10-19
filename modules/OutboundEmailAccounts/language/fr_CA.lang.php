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
    'LBL_ASSIGNED_TO_ID' => 'Id Utilisateur assigné',
    'LBL_ASSIGNED_TO_NAME' => 'Assigné à',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Date de création',
    'LBL_DATE_MODIFIED' => 'Date de modification',
    'LBL_MODIFIED' => 'Modifié Par',
    'LBL_MODIFIED_NAME' => 'Modifié Par Nom',
    'LBL_CREATED' => 'Créé Par',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_DELETED' => 'Supprimer',
    'LBL_NAME' => 'Nom',
    'LBL_CREATED_USER' => 'Créé par Utilisateur',
    'LBL_MODIFIED_USER' => 'Modifié par Utilisateur',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_EDIT_BUTTON' => 'Modification',
    'LBL_REMOVE' => 'Retirer',
    'LBL_LIST_FORM_TITLE' => 'Liste Comptes Email Sortants',
    'LBL_MODULE_NAME' => 'Comptes Email Sortants',
    'LBL_MODULE_TITLE' => 'Comptes Email Sortants',
    'LBL_HOMEPAGE_TITLE' => 'Mes Comptes Email Sortants',
    'LNK_NEW_RECORD' => 'Créer Comptes Email Sortants',
    'LNK_LIST' => 'Voir Comptes Email Sortants',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher Comptes Email Sortants',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Voir Historique',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activités',
    'LBL_NEW_FORM_TITLE' => 'Nouveau Compte Email Sortant',
    'LBL_USERNAME' => 'Nom Utilisateur',
    'LBL_PASSWORD' => 'Mot de passe',
    'LBL_SMTP_SERVERNAME' => 'Nom Serveur SMTP',
    'LBL_SMTP_AUTH' => 'SMTP Auth',
    'LBL_SMTP_PORT' => 'Port SMTP',
    'LBL_SMTP_PROTOCOL' => 'Protocole SMTP',
    'LBL_EDITVIEW_PANEL1' => 'Paramètres Compte',
    'LBL_CHANGE_PASSWORD' => 'Changer Mot de passe',
    'LBL_SEND_TEST_EMAIL' => 'Envoyer Email Test',

    // for outbound email dialog
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'L\'administrateur n\'a pas encore configuré le compte sortant par défaut. Impossible d\'envoyer un email de test.',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Utiliser Authentification SMTP?',
    'LBL_MAIL_SMTPPASS' => 'Mot de passe SMTP:',
    'LBL_MAIL_SMTPPORT' => 'Port SMTP:',
    'LBL_MAIL_SMTPSERVER' => 'Serveur SMTP:',
    'LBL_MAIL_SMTPUSER' => 'Nom Utilisateur SMTP:',
    'LBL_MAIL_SMTP_SETTINGS' => 'Spécification Serveur SMTP',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Choisissez Fournisseur Messagerie:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail - Mot de passe:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail - Mot de passe:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail - Email:',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange - Mot de passe:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange - Nom Utilisateur:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange - Port Serveur:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange - Serveur:',

    'LBL_TYPE' => 'Type',
    'LBL_MAIL_SENDTYPE' => 'Type Envoi Email',
    'LBL_MAIL_SMTPSSL' => 'Messagerie SMTP/SSL',
    'LBL_SMTP_FROM_NAME' => 'Nom Expéditeur',
    'LBL_SMTP_FROM_ADDR' => 'Email Expéditeur',
);
