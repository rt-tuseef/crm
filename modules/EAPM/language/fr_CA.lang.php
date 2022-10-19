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
    'LBL_ASSIGNED_TO_ID' => 'Id Utilisateur Assigné',
    'LBL_ASSIGNED_TO_NAME' => 'Utilisateur CRM',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Date Création',
    'LBL_DATE_MODIFIED' => 'Date de modification',
    'LBL_MODIFIED' => 'Modifié Par',
    'LBL_MODIFIED_NAME' => 'Modifié par Nom',
    'LBL_CREATED' => 'Créé Par',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_DELETED' => 'Supprimé',
    'LBL_NAME' => 'Nom Utilisateur App',
    'LBL_CREATED_USER' => 'Créé Par Utilisateur',
    'LBL_MODIFIED_USER' => 'Modifié par Utilisateur',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_LIST_FORM_TITLE' => 'Liste Compte Externe',
    'LBL_MODULE_NAME' => 'Compte Externe',
    'LBL_MODULE_TITLE' => 'Comptes Externes',
    'LBL_HOMEPAGE_TITLE' => 'Mes Comptes Externes',
    'LNK_NEW_RECORD' => 'Créer Compte Externe',
    'LNK_LIST' => 'Voir Comptes Externes',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher Compte Externe',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Voir Historique',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activités',
    'LBL_NEW_FORM_TITLE' => 'Nouveau Compte Externe',
    'LBL_PASSWORD' => 'Mot de passe App',
    'LBL_USER_NAME' => 'Nom Utilisateur App',
    'LBL_URL' => 'URL',
    'LBL_APPLICATION' => 'Application',
    'LBL_API_DATA' => 'Données API',
    'LBL_API_CONSKEY' => 'OAuth Consumer Key',
    'LBL_API_CONSSECRET' => 'OAuth Consumer Secret',
    'LBL_API_OAUTHTOKEN' => 'Jeton OAuth',
    'LBL_AUTH_UNSUPPORTED' => "Cette méthode d'autorisation n'est pas prise en charge par l'application",
    'LBL_AUTH_ERROR' => 'La tentative de connexion à ce compte a échoué.',
    'LBL_VALIDATED' => 'Connecté',
    'LBL_ACTIVE' => 'Actif',
    'LBL_OAUTH_NAME' => '%s',
    'LBL_CONNECT_BUTTON_TITLE' => 'Connexion',
    'LBL_NOTE' => 'Veuillez noter',
    'LBL_CONNECTED' => 'Connecté',

    'LBL_ERR_NO_AUTHINFO' => 'Il n\'y a pas d\'informations d\'authentification pour ce compte.',
    'LBL_ERR_NO_TOKEN' => 'Il n\'y a pas de jeton de connexion valide pour ce compte.',

    'LBL_ERR_FAILED_QUICKCHECK' => 'Vous n\'êtes actuellement pas connecté à votre compte {0}. Cliquez sur OK pour vous connecter à votre compte et réactiver la connexion.',

    'LBL_CLICK_TO_EDIT' => 'Cliquez pour modifier',

    // Various strings used throughout the external account modules
    'LBL_REAUTHENTICATE_LABEL' => 'Réauthentifaction',
    'LBL_APPLICATION_FOUND_NOTICE' => 'Un compte pour cette application existe déjà. Nous avons rétabli le compte existant.',
    'LBL_OMIT_URL' => '(Omettre http:// ou https://)',
    'LBL_OAUTH_SAVE_NOTICE' => 'Cliquez sur <b> Connexion </b> pour accéder à une page afin de fournir les informations de votre compte et autoriser l\'accès au compte par le CRM. Après la connexion, vous serez redirigé vers votre CRM.',
    'LBL_BASIC_SAVE_NOTICE' => 'Cliquer <b>Connection</b> pour connecter ce Compte à votre CRM.',
    'LBL_ERR_POPUPS_DISABLED' => 'Veuillez activer les fenêtres contextuelles du navigateur ou ajouter une exception pour le site Web "{0}" à la liste des exceptions afin de vous connecter.',

    'LBL_API_OAUTHSECRET' => 'API OAuth Secret',
);
