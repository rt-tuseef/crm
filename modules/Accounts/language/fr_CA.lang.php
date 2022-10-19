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
    // DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_website' => 'LBL_LIST_WEBSITE',
    'db_billing_address_city' => 'LBL_LIST_CITY',
    // END DON'T CONVERT
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documents',
    // Dashlet Categories
    'LBL_CHARTS' => 'Graphiques',
    'LBL_DEFAULT' => 'Vues',
    // END Dashlet Categories

    'ERR_DELETE_RECORD' => 'Un numéro d\'enregistrement doit être spécifié afin de supprimer le compte.',
    'LBL_ACCOUNT_INFORMATION' => 'Vue Globale', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_ACCOUNT_NAME' => 'Nom Compte:',
    'LBL_ACCOUNT' => 'Compte:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activités',
    'LBL_ADDRESS_INFORMATION' => 'Information Adresse',
    'LBL_ANNUAL_REVENUE' => 'CA:',
    'LBL_ANY_ADDRESS' => 'Toutes les Adresses:',
    'LBL_ANY_EMAIL' => 'Tous les Emails:',
    'LBL_ANY_PHONE' => 'Tous les Téléphone:',
    'LBL_ASSIGNED_TO_NAME' => 'Assigné à :',
    'LBL_ASSIGNED_TO_ID' => 'Utilisateur Assigné:',
    'LBL_BILLING_ADDRESS_CITY' => 'Ville Facturation:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Pays Facturation:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Code Postal Facturation:',
    'LBL_BILLING_ADDRESS_STATE' => 'Province Facturation:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Rue 2 Facturation',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Rue 3 Facturation',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Rue 4 Facturation',
    'LBL_BILLING_ADDRESS_STREET' => 'Rue Facturation:',
    'LBL_BILLING_ADDRESS' => 'Adresse Facturation:',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bogues',
    'LBL_CAMPAIGN_ID' => 'ID Campagne',
    'LBL_CASES_SUBPANEL_TITLE' => 'Tickets',
    'LBL_CITY' => 'Ville:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_COUNTRY' => 'Pays:',
    'LBL_DATE_ENTERED' => 'Date Création:',
    'LBL_DATE_MODIFIED' => 'Date Modification:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Comptes',
    'LBL_DESCRIPTION_INFORMATION' => 'Description Information',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_DUPLICATE' => 'Compte Doublon Possible',
    'LBL_EMAIL' => 'Adresse Email:',
    'LBL_EMAIL_OPT_OUT' => 'Email Désinscription:',
    'LBL_EMAIL_ADDRESSES' => 'Adresses Email',
    'LBL_EMPLOYEES' => 'Employés:',
    'LBL_FAX' => 'Fax:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historique',
    'LBL_HOMEPAGE_TITLE' => 'Mes Comptes',
    'LBL_INDUSTRY' => 'Industrie:',
    'LBL_INVALID_EMAIL' => 'Email Invalide:',
    'LBL_INVITEE' => 'Contacts',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Prospects',
    'LBL_LIST_ACCOUNT_NAME' => 'Nom',
    'LBL_LIST_CITY' => 'Ville',
    'LBL_LIST_CONTACT_NAME' => 'Nom Contact',
    'LBL_LIST_EMAIL_ADDRESS' => 'Adresse Email',
    'LBL_LIST_FORM_TITLE' => 'Liste Comptes',
    'LBL_LIST_PHONE' => 'Téléphone',
    'LBL_LIST_STATE' => 'Province',
    'LBL_MEMBER_OF' => 'Membre de:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Organisations Membre',
    'LBL_MODULE_NAME' => 'Comptes',
    'LBL_MODULE_TITLE' => 'Comptes: Accueil',
    'LBL_MODULE_ID' => 'Comptes',
    'LBL_NAME' => 'Nom:',
    'LBL_NEW_FORM_TITLE' => 'Nouveau Compte',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Opportunités',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Email Autre:',
    'LBL_OTHER_PHONE' => 'Téléphone Autre:',
    'LBL_OWNERSHIP' => 'Propriété:',
    'LBL_PARENT_ACCOUNT_ID' => 'ID Compte Parent',
    'LBL_PHONE_ALT' => 'Téléphone Alternatif:',
    'LBL_PHONE_FAX' => 'Fax:',
    'LBL_PHONE_OFFICE' => 'Téléphone:',
    'LBL_PHONE' => 'Téléphone:',
    'LBL_POSTAL_CODE' => 'Code Postal:',
    'LBL_PRODUCTS_TITLE' => 'Produits',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projets',
    'LBL_PUSH_CONTACTS_BUTTON_LABEL' => 'Copier vers Contacts',
    'LBL_PUSH_CONTACTS_BUTTON_TITLE' => 'Copier...',
    'LBL_RATING' => 'Évaluation:',
    'LBL_SAVE_ACCOUNT' => 'Sauvegarder Compte',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher Compte',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Ville Livraison:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Pays Livraison:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Code Postal Livraison:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Province Livraison:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Rue 2 Livraison',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Rue 3 Livraison',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Rue 4 Livraison',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Rue Livraison:',
    'LBL_SHIPPING_ADDRESS' => 'Adresse Livraison:',
    'LBL_SIC_CODE' => 'Code APE:',
    'LBL_STATE' => 'Province ou Région:',
    'LBL_TICKER_SYMBOL' => 'Symbole Boursier:',
    'LBL_TYPE' => 'Type:',
    'LBL_WEBSITE' => 'Site Web:',
    'LBL_CAMPAIGNS' => 'Campagnes',
    'LNK_ACCOUNT_LIST' => 'Voir Comptes',
    'LNK_NEW_ACCOUNT' => 'Créer Compte',
    'LNK_IMPORT_ACCOUNTS' => 'Importer Comptes',
    'MSG_DUPLICATE' => 'Le Compte que vous êtes sur le point de créer peut être un doublon d\'un Compte déjà existant. Les Comptes contenant des noms similaires sont répertoriés ci-dessous.<br>Cliquez sur Créer Compte pour continuer la création de ce nouveau Compte ou sélectionnez un compte existant répertorié ci-dessous.',
    'MSG_SHOW_DUPLICATES' => 'Attention: créer ce Compte est une source potentielle de doublon.<br>Cliquez sur "Sauvegarder" pour poursuivre la création de ce nouveau compte (un doublon sera créé) ou sur "Annuler" pour annuler la création.',
    'LBL_ASSIGNED_USER_NAME' => 'Assigné à:',
    'LBL_PROSPECT_LIST' => 'Liste Prospect',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Comptes',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projets',
    //For export labels
    'LBL_PARENT_ID' => 'ID Parent',
    // SNIP
    'LBL_PRODUCTS_SERVICES_PURCHASED_SUBPANEL_TITLE' => 'Produits et Services Achetés',

    'LBL_AOS_CONTRACTS' => 'Contrats',
    'LBL_AOS_INVOICES' => 'Factures',
    'LBL_AOS_QUOTES' => 'Devis',
    'LBL_LIST_WEBSITE' => 'Site internet',
);
