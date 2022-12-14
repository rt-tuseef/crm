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
    'LBL_MODULE_NAME' => 'Employ??s',
    'LBL_MODULE_TITLE' => 'Employ??s: Accueil',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher Employ??',
    'LBL_LIST_FORM_TITLE' => 'Employ??s',
    'LBL_NEW_FORM_TITLE' => 'Nouvel Employ??',
    'LBL_LOGIN' => 'Identification',
    'LBL_RESET_PREFERENCES' => 'R??initialiser Pr??f??rences par d??faut',
    'LBL_TIME_FORMAT' => 'Format Heure:',
    'LBL_DATE_FORMAT' => 'Format Date:',
    'LBL_TIMEZONE' => 'Heure Actuelle:',
    'LBL_CURRENCY' => 'Devise:',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_LIST_LAST_NAME' => 'Nom de Famille',
    'LBL_LIST_EMPLOYEE_NAME' => 'Nom Employ??',
    'LBL_LIST_DEPARTMENT' => 'Service',
    'LBL_LIST_REPORTS_TO_NAME' => 'Sup??rieur Imm??diat',
    'LBL_LIST_EMAIL' => 'Email',
    'LBL_LIST_USER_NAME' => 'Nom Utilisateur',
    'LBL_ERROR' => 'Erreur:',
    'LBL_PASSWORD' => 'Mot de passe:',
    'LBL_USER_NAME' => 'Nom Utilisateur',
    'LBL_USER_TYPE' => 'Type Utilisateur',
    'LBL_FIRST_NAME' => 'Pr??nom:',
    'LBL_LAST_NAME' => 'Nom de Famille:',
    'LBL_THEME' => 'Th??me:',
    'LBL_LANGUAGE' => 'Langue:',
    'LBL_ADMIN' => 'Administrateur:',
    'LBL_EMPLOYEE_INFORMATION' => 'Information Employ??',
    'LBL_OFFICE_PHONE' => 'T??l??phone:',
    'LBL_REPORTS_TO' => 'Id Sup??rieur Imm??diat:',
    'LBL_REPORTS_TO_NAME' => 'Sup??rieur Imm??diat',
    'LBL_OTHER_PHONE' => 'Autre T??l??phone:',
    'LBL_NOTES' => 'Notes:',
    'LBL_DEPARTMENT' => 'Service:',
    'LBL_TITLE' => 'Intitul?? du poste :',
    'LBL_ANY_ADDRESS' => 'Toutes les Adresses:',
    'LBL_ANY_PHONE' => 'Tous les T??l??phones:',
    'LBL_ANY_EMAIL' => 'Tous les Emails:',
    'LBL_ADDRESS' => 'Adresse:',
    'LBL_CITY' => 'Ville:',
    'LBL_STATE' => 'Province ou R??gion:',
    'LBL_POSTAL_CODE' => 'Code Postal:',
    'LBL_COUNTRY' => 'Pays:',
    'LBL_NAME' => 'Nom:',
    'LBL_MOBILE_PHONE' => 'T??l??phone Mobile:',
    'LBL_FAX' => 'Fax:',
    'LBL_EMAIL' => 'Adresse Email:',
    'LBL_EMAIL_LINK_TYPE' => 'Client email utilis??',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>Client Courriel SuiteCRM:</b> Envoie de courriels avec l\'application SuiteCRM.<br><b>Client Courriel Externe:</b> Envoie de courriel en utilisant un client externe, comme Microsoft Outlook.',
    'LBL_HOME_PHONE' => 'Ligne directe:',
    'LBL_WORK_PHONE' => 'T??l??phone:',
    'LBL_EMPLOYEE_STATUS' => 'Statut Employ??:',
    'LBL_PRIMARY_ADDRESS' => 'Adresse Principale:',
    'LBL_SAVED_SEARCH' => 'Options Mise en page',
    'LBL_MESSENGER_ID' => 'Nom IM:',
    'LBL_MESSENGER_TYPE' => 'Type IM:',
    'ERR_LAST_ADMIN_1' => 'Le nom de l\'employ?? "',
    'ERR_LAST_ADMIN_2' => '" est le dernier employ?? disposant de droits administrateur.  Au moins un employ?? doit ??tre un administrateur.',
    'LNK_NEW_EMPLOYEE' => 'Cr??er Employ??',
    'LNK_EMPLOYEE_LIST' => 'Voir Employ??s',
    'ERR_DELETE_RECORD' => 'Vous devez sp??cifier un num??ro d\'enregistrement pour supprimer le compte.',
    'LBL_LIST_EMPLOYEE_STATUS' => 'Statut Employ??',

    'LBL_SUITE_LOGIN' => 'Est Utilisateur',
    'LBL_RECEIVE_NOTIFICATIONS' => 'Notifier sur Assignation',
    'LBL_IS_ADMIN' => 'Est Administrateur',
    'LBL_GROUP' => 'Utilisateur Groupe',
    'LBL_PHOTO' => 'Photo',
    'LBL_DELETE_USER_CONFIRM' => 'Cet employ?? est aussi un utilisateur. Effacer cet employ?? effacera ??galement l\'utilisateur, et l\'utilisateur ne pourra plus acc??der ?? l\'application. Souhaitez-vous vraiment supprimer cet enregistrement ?',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Etes vous s??r de vouloir supprimer cet employ?? ?',
    'LBL_ONLY_ACTIVE' => 'Employ??s Actifs',
    'LBL_SELECT' => 'S??lectionner' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'ID Authentification',
    'LBL_EXT_AUTHENTICATE' => 'Authentification externe',
    'LBL_GROUP_USER' => 'Utilisateur Groupe',
    'LBL_LIST_ACCEPT_STATUS' => 'Statut Acceptation',
    'LBL_MODIFIED_BY' => 'Modifi?? Par',
    'LBL_MODIFIED_BY_ID' => 'Modifi?? Par Id',
    'LBL_CREATED_BY_NAME' => 'Cr???? Par', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'Utilisateur API Portail',
    'LBL_PSW_MODIFIED' => 'Dernier changement Mot de passe',
    'LBL_SHOW_ON_EMPLOYEES' => 'Afficher Dossier Employ??',
    'LBL_USER_HASH' => 'Mot de passe',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'Mot de passe G??n??r?? par Syst??me',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_FAX_PHONE' => 'Fax',
    'LBL_STATUS' => 'Statut',
    'LBL_ADDRESS_CITY' => 'Adresse Ville',
    'LBL_ADDRESS_COUNTRY' => 'Adresse Pays',
    'LBL_ADDRESS_INFORMATION' => 'Information Adresse',
    'LBL_ADDRESS_POSTALCODE' => 'Adresse Code Postal',
    'LBL_ADDRESS_STATE' => 'Adresse Province',
    'LBL_ADDRESS_STREET' => 'Adresse Rue',

    'LBL_DATE_MODIFIED' => 'Date de modification',
    'LBL_DATE_ENTERED' => 'Date Cr??ation',
    'LBL_DELETED' => 'Supprim??',

    'LBL_BUTTON_SELECT' => 'S??lectionner',
    'LBL_BUTTON_CLEAR' => 'Effacer',

    'LBL_CONTACTS_SYNC' => 'Synchronisation Contact',
    'LBL_OAUTH_TOKENS' => 'Jetons OAuth',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'Utilisateurs Projet depuis Nom Projet',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Contacts Projet depuis Nom Contacts',
    'LBL_ROLES' => 'R??les',
    'LBL_SECURITYGROUPS' => 'Groupes de S??curit??',
    'LBL_PROSPECT_LIST' => 'Liste de suspects',
);
