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
    'LBL_ASSIGNED_TO_ID' => 'Id Utilisateur Assign??',
    'LBL_ASSIGNED_TO_NAME' => 'Utilisateur CRM',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Date Cr??ation',
    'LBL_DATE_MODIFIED' => 'Date de modification',
    'LBL_MODIFIED' => 'Modifi?? Par',
    'LBL_MODIFIED_NAME' => 'Modifi?? par Nom',
    'LBL_CREATED' => 'Cr???? Par',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_DELETED' => 'Supprim??',
    'LBL_NAME' => 'Nom Utilisateur App',
    'LBL_CREATED_USER' => 'Cr???? Par Utilisateur',
    'LBL_MODIFIED_USER' => 'Modifi?? par Utilisateur',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_LIST_FORM_TITLE' => 'Liste Compte Externe',
    'LBL_MODULE_NAME' => 'Compte Externe',
    'LBL_MODULE_TITLE' => 'Comptes Externes',
    'LBL_HOMEPAGE_TITLE' => 'Mes Comptes Externes',
    'LNK_NEW_RECORD' => 'Cr??er Compte Externe',
    'LNK_LIST' => 'Voir Comptes Externes',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher Compte Externe',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Voir Historique',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activit??s',
    'LBL_NEW_FORM_TITLE' => 'Nouveau Compte Externe',
    'LBL_PASSWORD' => 'Mot de passe App',
    'LBL_USER_NAME' => 'Nom Utilisateur App',
    'LBL_URL' => 'URL',
    'LBL_APPLICATION' => 'Application',
    'LBL_API_DATA' => 'Donn??es API',
    'LBL_API_CONSKEY' => 'OAuth Consumer Key',
    'LBL_API_CONSSECRET' => 'OAuth Consumer Secret',
    'LBL_API_OAUTHTOKEN' => 'Jeton OAuth',
    'LBL_AUTH_UNSUPPORTED' => "Cette m??thode d'autorisation n'est pas prise en charge par l'application",
    'LBL_AUTH_ERROR' => 'La tentative de connexion ?? ce compte a ??chou??.',
    'LBL_VALIDATED' => 'Connect??',
    'LBL_ACTIVE' => 'Actif',
    'LBL_OAUTH_NAME' => '%s',
    'LBL_CONNECT_BUTTON_TITLE' => 'Connexion',
    'LBL_NOTE' => 'Veuillez noter',
    'LBL_CONNECTED' => 'Connect??',

    'LBL_ERR_NO_AUTHINFO' => 'Il n\'y a pas d\'informations d\'authentification pour ce compte.',
    'LBL_ERR_NO_TOKEN' => 'Il n\'y a pas de jeton de connexion valide pour ce compte.',

    'LBL_ERR_FAILED_QUICKCHECK' => 'Vous n\'??tes actuellement pas connect?? ?? votre compte {0}. Cliquez sur OK pour vous connecter ?? votre compte et r??activer la connexion.',

    'LBL_CLICK_TO_EDIT' => 'Cliquez pour modifier',

    // Various strings used throughout the external account modules
    'LBL_REAUTHENTICATE_LABEL' => 'R??authentifaction',
    'LBL_APPLICATION_FOUND_NOTICE' => 'Un compte pour cette application existe d??j??. Nous avons r??tabli le compte existant.',
    'LBL_OMIT_URL' => '(Omettre http:// ou https://)',
    'LBL_OAUTH_SAVE_NOTICE' => 'Cliquez sur <b> Connexion </b> pour acc??der ?? une page afin de fournir les informations de votre compte et autoriser l\'acc??s au compte par le CRM. Apr??s la connexion, vous serez redirig?? vers votre CRM.',
    'LBL_BASIC_SAVE_NOTICE' => 'Cliquer <b>Connection</b> pour connecter ce Compte ?? votre CRM.',
    'LBL_ERR_POPUPS_DISABLED' => 'Veuillez activer les fen??tres contextuelles du navigateur ou ajouter une exception pour le site Web "{0}" ?? la liste des exceptions afin de vous connecter.',

    'LBL_API_OAUTHSECRET' => 'API OAuth Secret',
);
