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
    'LBL_ASSIGNED_TO_NAME' => 'Assign?? ??',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Date Cr??ation',
    'LBL_DATE_MODIFIED' => 'Date de modification',
    'LBL_MODIFIED' => 'Modifi?? Par',
    'LBL_MODIFIED_NAME' => 'Modifi?? Par Nom',
    'LBL_CREATED' => 'Cr???? Par',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_DELETED' => 'Supprim??',
    'LBL_NAME' => 'Titre',
    'LBL_CREATED_USER' => 'Cr???? par Utilisateur',
    'LBL_MODIFIED_USER' => 'Modifi?? par Utilisateur',
    'ERR_DELETE_RECORD' => 'Un num??ro d\'enregistrement doit ??tre sp??cifi?? pour toute suppression.',
    'LBL_ACCOUNT_NAME' => 'Titre',
    'LBL_ACCOUNT' => 'Compagnie:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activit??s',
    'LBL_ADDRESS_INFORMATION' => 'Information Adresse',
    'LBL_ANNUAL_REVENUE' => 'Revenu Annuel:',
    'LBL_ANY_ADDRESS' => 'Toutes les Adresses:',
    'LBL_ANY_EMAIL' => 'Tous les Emails:',
    'LBL_ANY_PHONE' => 'Tous les T??l??phones :',
    'LBL_RATING' => '??valuation',
    'LBL_ASSIGNED_USER' => 'Utilisateur',
    'LBL_BILLING_ADDRESS_CITY' => 'Ville Facturation:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Pays Facturation:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Code Postal Facturation:',
    'LBL_BILLING_ADDRESS_STATE' => 'Province Facturation:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Rue 2 Facturation',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Rue 3 Facturation',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Rue 4 Facturation',
    'LBL_BILLING_ADDRESS_STREET' => 'Rue Facturation:',
    'LBL_BILLING_ADDRESS' => 'Adresse Facturation:',
    'LBL_ACCOUNT_INFORMATION' => 'Vue Globale',
    'LBL_CITY' => 'Ville:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_COUNTRY' => 'Pays:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Comptes',
    'LBL_DUPLICATE' => 'Compte Doublon Possible',
    'LBL_EMAIL' => 'Email:',
    'LBL_EMPLOYEES' => 'Employ??s:',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Activit??:',
    'LBL_LIST_ACCOUNT_NAME' => 'Nom Compte',
    'LBL_LIST_CITY' => 'Ville',
    'LBL_LIST_EMAIL_ADDRESS' => 'Adresse Email',
    'LBL_LIST_PHONE' => 'T??l??phone',
    'LBL_LIST_STATE' => 'Province ou R??gion',
    'LBL_MEMBER_OF' => 'Membre de:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Organisations Membre',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Email Autre:',
    'LBL_OTHER_PHONE' => 'T??l??phone Autre:',
    'LBL_OWNERSHIP' => 'Propri??taire:',
    'LBL_PARENT_ACCOUNT_ID' => 'ID Compte Parent',
    'LBL_PHONE_ALT' => 'T??l??phone Alternatif:',
    'LBL_PHONE_FAX' => 'Fax:',
    'LBL_PHONE_OFFICE' => 'T??l??phone:',
    'LBL_PHONE' => 'T??l??phone:',
    'LBL_POSTAL_CODE' => 'Code Postal:',
    'LBL_SAVE_ACCOUNT' => 'Sauvegarder Compte',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Ville Livraison:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Pays Livraison:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Code Postal Livraison:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Province Livraison:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Rue 2 Livraison',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Rue 3 Livraison',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Rue 4 Livraison',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Rue Livraison:',
    'LBL_SHIPPING_ADDRESS' => 'Adresse Livraison:',
    'LBL_STATE' => 'Province ou R??gion:',
    'LBL_TICKER_SYMBOL' => 'Symbole Boursier:',
    'LBL_TYPE' => 'Type:',
    'LBL_WEBSITE' => 'Site Web:',
    'LNK_ACCOUNT_LIST' => 'Comptes',
    'LNK_NEW_ACCOUNT' => 'Cr??er Compte',
    'MSG_DUPLICATE' => 'Ce compte peut potentiellement cr??er un compte dupliqu??. Vous pouvez s??lectionner un compte dans la liste ci-dessous ou vous pouvez cliquer sur Enregistrer pour continuer ?? cr??er un nouveau compte avec les donn??es pr??c??demment saisies.',
    'MSG_SHOW_DUPLICATES' => 'Ce compte peut potentiellement cr??er un compte dupliqu??. Vous pouvez soit cliquer sur Enregistrer pour continuer la cr??ation de ce nouveau compte avec les donn??es pr??c??demment saisies ou vous pouvez cliquer sur Annuler.',
    'NTC_DELETE_CONFIRMATION' => 'Voulez-vous vraiment supprimer cet enregistrement ?',
    'LBL_LIST_FORM_TITLE' => 'Liste Factures',
    'LBL_MODULE_NAME' => 'Factures',
    'LBL_MODULE_TITLE' => 'Factures: Accueil',
    'LBL_HOMEPAGE_TITLE' => 'Mes Factures',
    'LNK_NEW_RECORD' => 'Cr??er Facture',
    'LNK_LIST' => 'Voir Factures',
    'LBL_SEARCH_FORM_TITLE' => 'Recherche Factures',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Voir Historique',
    'LBL_NEW_FORM_TITLE' => 'Nouvelle Facture',
    'LBL_TERMS_C' => 'Conditions',
    'LBL_APPROVAL_ISSUE' => 'Probl??mes Validation',
    'LBL_APPROVAL_STATUS' => 'Statut Validation',
    'LBL_BILLING_ACCOUNT' => 'Comptes',
    'LBL_BILLING_CONTACT' => 'Contacts',
    'LBL_EXPIRATION' => 'Valable Jusqu???au',
    'LBL_INVOICE_NUMBER' => 'Num??ro Facture',
    'LBL_OPPORTUNITY' => 'Nom Opportunit??',
    'LBL_TEMPLATE_DDOWN_C' => 'Mod??les Factures',
    'LBL_STAGE' => '??tape Devis',
    'LBL_TERM' => 'Conditions de paiement',
    'LBL_SUBTOTAL_AMOUNT' => 'Sous-total',
    'LBL_DISCOUNT_AMOUNT' => 'Remise',
    'LBL_TAX_AMOUNT' => 'Taxe',
    'LBL_SHIPPING_AMOUNT' => 'Exp??dition',
    'LBL_TOTAL_AMT' => 'Total',
    'VALUE' => 'Titre',
    'LBL_EMAIL_ADDRESSES' => 'Adresses Email',
    'LBL_LINE_ITEMS' => 'Ligne Produits',
    'LBL_GRAND_TOTAL' => 'Total Global',
    'LBL_QUOTE_NUMBER' => 'Num??ro Devis',
    'LBL_QUOTE_DATE' => 'Date Devis',
    'LBL_INVOICE_DATE' => 'Date Facture',
    'LBL_DUE_DATE' => 'Date ??ch??ance',
    'LBL_STATUS' => 'Statut',
    'LBL_INVOICE_STATUS' => 'Statut Facture',
    'LBL_PRODUCT_QUANITY' => 'Quantit??',
    'LBL_PRODUCT_NAME' => 'Produit',
    'LBL_PART_NUMBER' => 'Num??ro de Pi??ce',
    'LBL_PRODUCT_NOTE' => 'Notes',
    'LBL_PRODUCT_DESCRIPTION' => 'Description',
    'LBL_LIST_PRICE' => 'Liste',
    'LBL_DISCOUNT_AMT' => 'Remise',
    'LBL_UNIT_PRICE' => 'Prix de Vente',
    'LBL_TOTAL_PRICE' => 'Total',
    'LBL_VAT' => 'Taxe', //VAT
    'LBL_VAT_AMT' => 'Montant Taxes', //VAT
    'LBL_ADD_PRODUCT_LINE' => 'Ajouter Ligne Produit',
    'LBL_SERVICE_NAME' => 'Service',
    'LBL_SERVICE_LIST_PRICE' => 'Liste',
    'LBL_SERVICE_PRICE' => 'Prix de Vente',
    'LBL_SERVICE_DISCOUNT' => 'Remise',
    'LBL_ADD_SERVICE_LINE' => 'Ajouter Ligne Service',
    'LBL_REMOVE_PRODUCT_LINE' => 'Retirer',
    'LBL_PRINT_AS_PDF' => 'Imprimer PDF',
    'LBL_EMAIL_INVOICE' => 'Email Facture',
    'LBL_LIST_NUM' => 'Num',
    'LBL_PDF_NAME' => 'Facture',
    'LBL_EMAIL_NAME' => 'Facture pour',
    'LBL_NO_TEMPLATE' => 'ERREUR\nAucun Mod??le Facture trouv??. Si vous n\'avez pas encore cr???? de Mod??le, cr??ez un dans le Module "Mod??les PDF".',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Sous-total + Taxes',//pre shipping
    'LBL_EMAIL_PDF' => 'Email PDF',
    'LBL_ADD_GROUP' => 'Ajouter Groupe',
    'LBL_DELETE_GROUP' => 'Supprimer Groupe',
    'LBL_GROUP_NAME' => 'Nom Groupe',
    'LBL_GROUP_TOTAL' => 'Total Groupe',
    'LBL_SHIPPING_TAX' => 'Taxe Exp??dition',
    'LBL_SHIPPING_TAX_AMT' => 'Taxe Exp??dition',
    'LBL_IMPORT_LINE_ITEMS' => 'Importer Ligne Produits',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Sous-total (devise par d??faut)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Remise (devise par d??faut)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Taxes (devise par d??faut)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Exp??dition (devise par d??faut)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Total (devise par d??faut)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Taxes Exp??dition (devise par d??faut)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Grand Total (devise par d??faut)',
    'LBL_INVOICE_TO' => 'Facturer ??',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Groupes Ligne Produit',
    'LBL_AOS_PRODUCT_QUOTES' => 'Devis Produit',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Devis: Factures',
);
