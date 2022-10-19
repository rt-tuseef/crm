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
    'LBL_MODULE_NAME' => 'Employés',
    'LBL_MODULE_TITLE' => 'Employés: Accueil',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher Employé',
    'LBL_LIST_FORM_TITLE' => 'Employés',
    'LBL_NEW_FORM_TITLE' => 'Nouvel Employé',
    'LBL_LOGIN' => 'Identification',
    'LBL_RESET_PREFERENCES' => 'Réinitialiser Préférences par défaut',
    'LBL_TIME_FORMAT' => 'Format Heure:',
    'LBL_DATE_FORMAT' => 'Format Date:',
    'LBL_TIMEZONE' => 'Heure Actuelle:',
    'LBL_CURRENCY' => 'Devise:',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_LIST_LAST_NAME' => 'Nom de Famille',
    'LBL_LIST_EMPLOYEE_NAME' => 'Nom Employé',
    'LBL_LIST_DEPARTMENT' => 'Service',
    'LBL_LIST_REPORTS_TO_NAME' => 'Supérieur Immédiat',
    'LBL_LIST_EMAIL' => 'Email',
    'LBL_LIST_USER_NAME' => 'Nom Utilisateur',
    'LBL_ERROR' => 'Erreur:',
    'LBL_PASSWORD' => 'Mot de passe:',
    'LBL_USER_NAME' => 'Nom Utilisateur',
    'LBL_USER_TYPE' => 'Type Utilisateur',
    'LBL_FIRST_NAME' => 'Prénom:',
    'LBL_LAST_NAME' => 'Nom de Famille:',
    'LBL_THEME' => 'Thème:',
    'LBL_LANGUAGE' => 'Langue:',
    'LBL_ADMIN' => 'Administrateur:',
    'LBL_EMPLOYEE_INFORMATION' => 'Information Employé',
    'LBL_OFFICE_PHONE' => 'Téléphone:',
    'LBL_REPORTS_TO' => 'Id Supérieur Immédiat:',
    'LBL_REPORTS_TO_NAME' => 'Supérieur Immédiat',
    'LBL_OTHER_PHONE' => 'Autre Téléphone:',
    'LBL_NOTES' => 'Notes:',
    'LBL_DEPARTMENT' => 'Service:',
    'LBL_TITLE' => 'Intitulé du poste :',
    'LBL_ANY_ADDRESS' => 'Toutes les Adresses:',
    'LBL_ANY_PHONE' => 'Tous les Téléphones:',
    'LBL_ANY_EMAIL' => 'Tous les Emails:',
    'LBL_ADDRESS' => 'Adresse:',
    'LBL_CITY' => 'Ville:',
    'LBL_STATE' => 'Province ou Région:',
    'LBL_POSTAL_CODE' => 'Code Postal:',
    'LBL_COUNTRY' => 'Pays:',
    'LBL_NAME' => 'Nom:',
    'LBL_MOBILE_PHONE' => 'Téléphone Mobile:',
    'LBL_FAX' => 'Fax:',
    'LBL_EMAIL' => 'Adresse Email:',
    'LBL_EMAIL_LINK_TYPE' => 'Client email utilisé',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>Client Courriel SuiteCRM:</b> Envoie de courriels avec l\'application SuiteCRM.<br><b>Client Courriel Externe:</b> Envoie de courriel en utilisant un client externe, comme Microsoft Outlook.',
    'LBL_HOME_PHONE' => 'Ligne directe:',
    'LBL_WORK_PHONE' => 'Téléphone:',
    'LBL_EMPLOYEE_STATUS' => 'Statut Employé:',
    'LBL_PRIMARY_ADDRESS' => 'Adresse Principale:',
    'LBL_SAVED_SEARCH' => 'Options Mise en page',
    'LBL_MESSENGER_ID' => 'Nom IM:',
    'LBL_MESSENGER_TYPE' => 'Type IM:',
    'ERR_LAST_ADMIN_1' => 'Le nom de l\'employé "',
    'ERR_LAST_ADMIN_2' => '" est le dernier employé disposant de droits administrateur.  Au moins un employé doit être un administrateur.',
    'LNK_NEW_EMPLOYEE' => 'Créer Employé',
    'LNK_EMPLOYEE_LIST' => 'Voir Employés',
    'ERR_DELETE_RECORD' => 'Vous devez spécifier un numéro d\'enregistrement pour supprimer le compte.',
    'LBL_LIST_EMPLOYEE_STATUS' => 'Statut Employé',

    'LBL_SUITE_LOGIN' => 'Est Utilisateur',
    'LBL_RECEIVE_NOTIFICATIONS' => 'Notifier sur Assignation',
    'LBL_IS_ADMIN' => 'Est Administrateur',
    'LBL_GROUP' => 'Utilisateur Groupe',
    'LBL_PHOTO' => 'Photo',
    'LBL_DELETE_USER_CONFIRM' => 'Cet employé est aussi un utilisateur. Effacer cet employé effacera également l\'utilisateur, et l\'utilisateur ne pourra plus accéder à l\'application. Souhaitez-vous vraiment supprimer cet enregistrement ?',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Etes vous sûr de vouloir supprimer cet employé ?',
    'LBL_ONLY_ACTIVE' => 'Employés Actifs',
    'LBL_SELECT' => 'Sélectionner' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'ID Authentification',
    'LBL_EXT_AUTHENTICATE' => 'Authentification externe',
    'LBL_GROUP_USER' => 'Utilisateur Groupe',
    'LBL_LIST_ACCEPT_STATUS' => 'Statut Acceptation',
    'LBL_MODIFIED_BY' => 'Modifié Par',
    'LBL_MODIFIED_BY_ID' => 'Modifié Par Id',
    'LBL_CREATED_BY_NAME' => 'Créé Par', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'Utilisateur API Portail',
    'LBL_PSW_MODIFIED' => 'Dernier changement Mot de passe',
    'LBL_SHOW_ON_EMPLOYEES' => 'Afficher Dossier Employé',
    'LBL_USER_HASH' => 'Mot de passe',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'Mot de passe Généré par Système',
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
    'LBL_DATE_ENTERED' => 'Date Création',
    'LBL_DELETED' => 'Supprimé',

    'LBL_BUTTON_SELECT' => 'Sélectionner',
    'LBL_BUTTON_CLEAR' => 'Effacer',

    'LBL_CONTACTS_SYNC' => 'Synchronisation Contact',
    'LBL_OAUTH_TOKENS' => 'Jetons OAuth',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'Utilisateurs Projet depuis Nom Projet',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Contacts Projet depuis Nom Contacts',
    'LBL_ROLES' => 'Rôles',
    'LBL_SECURITYGROUPS' => 'Groupes de Sécurité',
    'LBL_PROSPECT_LIST' => 'Liste de suspects',
);
