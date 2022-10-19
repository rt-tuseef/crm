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
    'LBL_ASSIGNED_TO_NAME' => 'Gestionnaire Contrat',
    'LBL_CONTRACT_ACCOUNT' => 'Compte',
    'LBL_OPPORTUNITY' => 'Opportunité',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Date Création',
    'LBL_DATE_MODIFIED' => 'Date de modification',
    'LBL_MODIFIED' => 'Modifié Par',
    'LBL_MODIFIED_NAME' => 'Modifié Par Nom',
    'LBL_CREATED' => 'Créé Par',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_DELETED' => 'Supprimé',
    'LBL_NAME' => 'Titre Contrat',
    'LBL_CREATED_USER' => 'Créé par Utilisateur',
    'LBL_MODIFIED_USER' => 'Modifié par Utilisateur',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_LIST_FORM_TITLE' => 'Liste Contrats',
    'LBL_MODULE_NAME' => 'Contrats',
    'LBL_MODULE_TITLE' => 'Contrats: Accueil',
    'LBL_HOMEPAGE_TITLE' => 'Mes Contrats',
    'LNK_NEW_RECORD' => 'Créer Contrat',
    'LNK_LIST' => 'Voir Contrats',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher Contrats',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Voir Historique',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activités',
    'LBL_NEW_FORM_TITLE' => 'Nouveau Contrat',
    'LBL_CONTRACT_NAME' => 'Nom Contrat',
    'LBL_REFERENCE_CODE ' => 'Code Référence ',
    'LBL_START_DATE' => 'Date Début',
    'LBL_END_DATE' => 'Date Fin',
    'LBL_TOTAL_CONTRACT_VALUE' => 'Valeur Contrat',
    'LBL_STATUS' => 'Statut',
    'LBL_CUSTOMER_SIGNED_DATE' => 'Date Signature Client',
    'LBL_COMPANY_SIGNED_DATE' => 'Date Signature Interne',
    'LBL_RENEWAL_REMINDER_DATE' => 'Date Rappel Renouvellement',
    'LBL_CONTRACT_TYPE' => 'Type Contrat',
    'LBL_CONTACT' => 'Contact',
    'LBL_ADD_GROUP' => 'Ajouter Groupe',
    'LBL_DELETE_GROUP' => 'Effacer Groupe',
    'LBL_GROUP_NAME' => 'Nom Groupe',
    'LBL_GROUP_TOTAL' => 'Total Groupe',
    'LBL_PRODUCT_QUANITY' => 'Quantité',
    'LBL_PRODUCT_NAME' => 'Produit',
    'LBL_PART_NUMBER' => 'Numéro de Pièce',
    'LBL_PRODUCT_NOTE' => 'Notes',
    'LBL_PRODUCT_DESCRIPTION' => 'Description ',
    'LBL_LIST_PRICE' => 'Liste',
    'LBL_DISCOUNT_AMT' => 'Remise',
    'LBL_UNIT_PRICE' => 'Prix de vente',
    'LBL_TOTAL_PRICE' => 'Total',
    'LBL_VAT' => 'Taxe',
    'LBL_VAT_AMT' => 'Montant Taxe',
    'LBL_SERVICE_NAME' => 'Service',
    'LBL_SERVICE_LIST_PRICE' => 'Liste',
    'LBL_SERVICE_PRICE' => 'Prix Vente',
    'LBL_SERVICE_DISCOUNT' => 'Remise',
    'LBL_LINE_ITEMS' => 'Ligne Produits',
    'LBL_SUBTOTAL_AMOUNT' => 'Sous-total',
    'LBL_DISCOUNT_AMOUNT' => 'Remise',
    'LBL_TAX_AMOUNT' => 'Taxe',
    'LBL_SHIPPING_AMOUNT' => 'Expédition',
    'LBL_TOTAL_AMT' => 'Total',
    'LBL_GRAND_TOTAL' => 'Grand Total',
    'LBL_SHIPPING_TAX' => 'Taxes Transport',
    'LBL_SHIPPING_TAX_AMT' => 'Taxes Transport',
    'LBL_ADD_PRODUCT_LINE' => 'Ajouter Ligne Produit',
    'LBL_ADD_SERVICE_LINE' => 'Ajouter Ligne Service ',
    'LBL_PRINT_AS_PDF' => 'Imprimer PDF',
    'LBL_EMAIL_PDF' => 'Email PDF',
    'LBL_PDF_NAME' => 'Contrat',
    'LBL_EMAIL_NAME' => 'Contrat pour',
    'LBL_NO_TEMPLATE' => 'ERREUR\nPas de modèle trouvé. Si vous n\'avez pas encore créé de modèle Contrat, allez dans le module "modèles PDF" et créez un.',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => 'Valeur Contrat (Devise par défaut)',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Sous-total (devise par défaut)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Remise (devise par défaut)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Taxes (devise par défaut)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Transport (devise par défaut)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Total (devise par défaut)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Taxes Transport (devise par défaut)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Grand Total (devise par défaut)',

    'LBL_CALL_ID' => 'ID Appel',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Groupes Ligne Produit',
    'LBL_AOS_PRODUCT_QUOTES' => 'Devis Produit',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Devis: Contrats',
);
