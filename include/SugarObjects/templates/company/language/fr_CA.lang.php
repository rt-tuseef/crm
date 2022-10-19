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
    'ERR_DELETE_RECORD' => 'Un identifiant d\'enregistrement doit être spécifié pour supprimer le compte.',
    'LBL_ACCOUNT_NAME' => 'Nom de la Compagnie:',
    'LBL_ACCOUNT' => 'Compagnie:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activités',
    'LBL_ADDRESS_INFORMATION' => 'Information Adresse',
    'LBL_ANNUAL_REVENUE' => 'Revenu annuel:',
    'LBL_ANY_ADDRESS' => 'Toutes les Adresse:',
    'LBL_ANY_EMAIL' => 'Tous les Emails:',
    'LBL_EMAIL_NON_PRIMARY' => 'Emails Secondaires',
    'LBL_ANY_PHONE' => 'Tous les Téléphone:',
    'LBL_ASSIGNED_TO_NAME' => 'Utilisateur :',
    'LBL_RATING' => 'Évaluation',
    'LBL_ASSIGNED_TO' => 'Assigné à:',
    'LBL_ASSIGNED_USER' => 'Assigné à:',
    'LBL_ASSIGNED_TO_ID' => 'Assigné à :',
    'LBL_BILLING_ADDRESS_CITY' => 'Ville de facturation :',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Pays de facturation :',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Code Postal de facturation :',
    'LBL_BILLING_ADDRESS_STATE' => 'Province de la facturation :',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Rue de facturation 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Rue de facturation 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Facturation, rue 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Rue de la facturation :',
    'LBL_BILLING_ADDRESS' => 'Adresse de facturation :',
    'LBL_ACCOUNT_INFORMATION' => 'Information de la Compagnie',
    'LBL_CITY' => 'Ville :',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_COUNTRY' => 'Pays :',
    'LBL_DATE_ENTERED' => 'Date Création:',
    'LBL_DATE_MODIFIED' => 'Date de modification :',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Comptes',
    'LBL_DESCRIPTION_INFORMATION' => 'Description Information',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_DUPLICATE' => 'Doublon possible avec le(s) Compte(s)',
    'LBL_EMAIL' => 'Adresse Email:',
    'LBL_EMPLOYEES' => 'Employés :',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Industrie :',
    'LBL_LIST_ACCOUNT_NAME' => 'Nom de compte',
    'LBL_LIST_CITY' => 'Ville',
    'LBL_LIST_EMAIL_ADDRESS' => 'Adresse Email',
    'LBL_LIST_PHONE' => 'Téléphone',
    'LBL_LIST_STATE' => 'Province',
    'LBL_MEMBER_OF' => 'Membre de :',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Organisations membres',
    'LBL_NAME' => 'Nom:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Autre Email:',
    'LBL_OTHER_PHONE' => 'Autre téléphone:',
    'LBL_OWNERSHIP' => 'Propriété:',
    'LBL_PARENT_ACCOUNT_ID' => 'Identifiant du Compte parent',
    'LBL_PHONE_ALT' => 'Numéro de téléphone alternatif:',
    'LBL_PHONE_FAX' => 'Fax:',
    'LBL_PHONE_OFFICE' => 'Téléphone Bureau:',
    'LBL_PHONE' => 'Téléphone:',
    'LBL_EMAIL_ADDRESS' => 'Adresse Email',
    'LBL_EMAIL_ADDRESSES' => 'Adresse(s) email',
    'LBL_POSTAL_CODE' => 'Code postal :',
    'LBL_SAVE_ACCOUNT' => 'Sauvegarder Compte',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Ville:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Pays:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Code Postal:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Province:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Adresse 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Adresse 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Adresse 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Adresse :',
    'LBL_SHIPPING_ADDRESS' => 'Adresse Expédition:',

    'LBL_STATE' => 'Province ou Région:',
    'LBL_TICKER_SYMBOL' => 'Symbole Boursier:',
    'LBL_TYPE' => 'Type :',
    'LBL_WEBSITE' => 'SiteWeb:',

    'LNK_ACCOUNT_LIST' => 'Comptes',
    'LNK_NEW_ACCOUNT' => 'Créer un Compte',

    'MSG_DUPLICATE' => 'Créer ce Compte peut potentiellement créer une Compte dupliqué. Vous pouvez choisir un Compte à partir de la liste ci-dessous ou vous pouvez cliquer sur Sauvegarder pour continuer de créer un nouveau Compte avec les données précédemment saisies.',
    'MSG_SHOW_DUPLICATES' => 'Créer ce Compte peut potentiellement créer un Compte dupliqué. Vous pouvez cliquer sur Sauvegarder pour continuer de créer ce nouveau Compte  avec les données précédement saisies ou cliquer sur Annuler.',

    'NTC_DELETE_CONFIRMATION' => 'Etes-vous sûr(e) sur de vouloir supprimer cet enregistrement ?',

    'LBL_EDIT_BUTTON' => 'Modifier',
    'LBL_REMOVE' => 'Retirer',

);
