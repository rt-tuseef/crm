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
    'LBL_MODULE_NAME' => 'Opportunit??s',
    'LBL_MODULE_TITLE' => 'Opportunit??s: Accueil',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher Opportunit??',
    'LBL_LIST_FORM_TITLE' => 'Liste Opportunit??s',
    'LBL_OPPORTUNITY_NAME' => 'Nom Opportunit??:',
    'LBL_OPPORTUNITY' => 'Opportunit??:',
    'LBL_NAME' => 'Nom Opportunit??',
    'LBL_INVITEE' => 'Contacts',
    'LBL_CURRENCIES' => 'Devises',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Nom',
    'LBL_LIST_ACCOUNT_NAME' => 'Nom Compte',
    'LBL_LIST_AMOUNT' => 'Montant Opportunit??',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Montant',
    'LBL_LIST_DATE_CLOSED' => 'Fermer',
    'LBL_LIST_SALES_STAGE' => '??tapes de Vente',
    'LBL_ACCOUNT_ID' => 'Compte ID',
    'LBL_CURRENCY_NAME' => 'Nom Devise',
    'LBL_CURRENCY_SYMBOL' => 'Symbole Devise',
    'LBL_DAYS_OPEN_FOR' => 'Cette affaire a ??t?? ouverte pour',

    'UPDATE' => 'Opportunit?? - Mise ?? jour Devise',
    'LBL_ACCOUNT_NAME' => 'Nom Compte:',
    'LBL_AMOUNT' => 'Montant Opportunit??:',
    'LBL_AMOUNT_USDOLLAR' => 'Montant:',
    'LBL_CURRENCY' => 'Devise:',
    'LBL_DATE_CLOSED' => 'Date Cloture Pr??vue:',
    'LBL_TYPE' => 'Type:',
    'LBL_CAMPAIGN' => 'Campagne:',
    'LBL_NEXT_STEP' => 'Prochaine ??tape:',
    'LBL_LEAD_SOURCE' => 'Source Prospect:',
    'LBL_SALES_STAGE' => '??tape de Vente:',
    'LBL_PROBABILITY' => 'Probabilit?? (%):',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_DUPLICATE' => 'Doublon Opportunit?? Possible',
    'MSG_DUPLICATE' => 'L\'enregistrement d\'opportunit?? que vous ??tes sur le point de cr??er peut ??tre un doublon d\'un enregistrement d\'opportunit?? existant d??j??. Les enregistrements d\'opportunit??s contenant des noms similaires sont r??pertori??s ci-dessous. <br> Cliquez sur Enregistrer pour continuer ?? cr??er cette nouvelle opportunit?? ou sur Annuler pour revenir au module sans cr??er d\'opportunit??.',
    'LBL_NEW_FORM_TITLE' => 'Cr??er Opportunit??',
    'LNK_NEW_OPPORTUNITY' => 'Cr??er Opportunit??',
    'LNK_OPPORTUNITY_LIST' => 'Voir Opportunit??s',
    'ERR_DELETE_RECORD' => 'Un num??ro d\'enregistrement doit ??tre sp??cifi?? pour supprimer l\'opportunit??.',
    'LBL_TOP_OPPORTUNITIES' => 'Mes Meilleures Opportunit??s Ouvertes',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Etes-vous s??r de vouloir supprimer cette Opportunit?? de ce Projet ?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Opportunit??s',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activit??s',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historique',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Prospects',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documents',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projets',
    'LBL_ASSIGNED_TO_NAME' => 'Assign?? ?? :',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Utilisateur Assign??',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Mes Opportunit??s Ferm??es',
    'LBL_TOTAL_OPPORTUNITIES' => 'Total des Opportunit??s',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Opportunit??s Ferm??es et Gagn??es',
    'LBL_ASSIGNED_TO_ID' => 'Utilisateur Assign??:',
    'LBL_MODIFIED_NAME' => 'Modifi?? par Utilisateur',
    'LBL_CREATED_USER' => 'Cr???? par',
    'LBL_MODIFIED_USER' => 'Modifi?? par',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Campagnes',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projets',
    'LNK_IMPORT_OPPORTUNITIES' => 'Importer Opportunit??s',
    'LBL_EDITLAYOUT' => 'Modifier Mise en page'
    /*for 508 compliance fix*/,

    // SNIP

    'LBL_AOS_CONTRACTS' => 'Contrats',
    'LBL_AOS_QUOTES' => 'Devis',

    'LBL_SIZE_ANALYSIS' => 'Analyse de la taille',
    'LBL_POSITION' => 'Rang',
    'LBL_OUT_OF' => 'Hors',
);
