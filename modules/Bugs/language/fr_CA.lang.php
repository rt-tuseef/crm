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
    'LBL_MODULE_NAME' => 'Bogues',
    'LBL_MODULE_TITLE' => 'Suivi Bogues: Accueil',
    'LBL_MODULE_ID' => 'Bogues',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher Bogues',
    'LBL_LIST_FORM_TITLE' => 'Liste Bogues',
    'LBL_NEW_FORM_TITLE' => 'Nouveau Bogue',
    'LBL_SUBJECT' => 'Sujet:',
    'LBL_NUMBER' => 'Numéro:',
    'LBL_STATUS' => 'Statut:',
    'LBL_PRIORITY' => 'Priorité:',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_CONTACT_NAME' => 'Nom Contact:',
    'LBL_CONTACT_ROLE' => 'Rôle:',
    'LBL_LIST_NUMBER' => 'Num.',
    'LBL_LIST_SUBJECT' => 'Sujet',
    'LBL_LIST_STATUS' => 'Statut',
    'LBL_LIST_PRIORITY' => 'Priorité',
    'LBL_LIST_RESOLUTION' => 'Solution',
    'LBL_LIST_LAST_MODIFIED' => 'Dernière Modification',
    'LBL_INVITEE' => 'Contacts',
    'LBL_TYPE' => 'Type:',
    'LBL_LIST_TYPE' => 'Type',
    'LBL_RESOLUTION' => 'Solution:',
    'LBL_RELEASE' => 'Version:',
    'LNK_NEW_BUG' => 'Reporter Bogue',
    'LNK_BUG_LIST' => 'Voir Bogues',
    'ERR_DELETE_RECORD' => 'Vous devez préciser un numéro d\'enregistrement pour supprimer le Bogue.',
    'LBL_LIST_MY_BUGS' => 'Mes Bogues Assignés',
    'LNK_IMPORT_BUGS' => 'Importer Bogues',
    'LBL_FOUND_IN_RELEASE' => 'Trouvé dans la Version:',
    'LBL_FIXED_IN_RELEASE' => 'Corrigé dans la Version:',
    'LBL_LIST_FIXED_IN_RELEASE' => 'Corrigé dans la Version',
    'LBL_WORK_LOG' => 'Journal de Travail:',
    'LBL_SOURCE' => 'Source:',
    'LBL_PRODUCT_CATEGORY' => 'Catégorie:',

    'LBL_CREATED_BY' => 'Créé par:',
    'LBL_MODIFIED_BY' => 'Modifié par:',

    'LBL_LIST_EMAIL_ADDRESS' => 'Adresse Email',
    'LBL_LIST_CONTACT_NAME' => 'Nom Contact',
    'LBL_LIST_ACCOUNT_NAME' => 'Nom Compte',
    'LBL_LIST_PHONE' => 'Téléphone',
    'NTC_DELETE_CONFIRMATION' => 'Voulez-vous vraiment supprimer ce Contact de ce Bogue?',

    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Suivi Bogues',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activités',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historique',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Comptes',
    'LBL_CASES_SUBPANEL_TITLE' => 'Tickets',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projets',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documents',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Utilisateur Assigné',
    'LBL_ASSIGNED_TO_NAME' => 'Assigné à',

    'LBL_BUG_INFORMATION' => 'Vue Globale', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

);
