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
    'LBL_MODULE_NAME' => 'Devises',
    'LBL_LIST_FORM_TITLE' => 'Devises',
    'LBL_CURRENCY' => 'Devise',
    'LBL_ADD' => 'Ajouter',
    'LBL_MERGE' => 'Fusionner',
    'LBL_MERGE_TXT' => 'Veuillez sélectionner les devises que vous souhaitez associer à la devise sélectionnée. Cela supprimera toutes les devises avec une coche et réaffectera toute valeur associée à la devise sélectionnée.',
    'LBL_US_DOLLAR' => 'Dollar US',
    'LBL_DELETE' => 'Supprimer',
    'LBL_LIST_SYMBOL' => 'Devise Symbole',
    'LBL_LIST_NAME' => 'Nom Devise',
    'LBL_LIST_ISO4217' => 'Code ISO 4217',
    'LBL_LIST_ISO4217_HELP' => 'Saisir un code ISO 4217 à trois lettres qui définit la devise et son symbole.',
    'LBL_UPDATE' => 'Mettre à jour',
    'LBL_LIST_RATE' => 'Taux Conversion',
    'LBL_LIST_RATE_HELP' => 'Un taux de conversion de 0.5 USD par CAD signifie que 10 USD = 5 CAD.',
    'LBL_LIST_STATUS' => 'Statut',
    'LNK_NEW_CONTACT' => 'Nouveau Contact',
    'LNK_NEW_ACCOUNT' => 'Nouveau Compte',
    'LNK_NEW_OPPORTUNITY' => 'Nouvelle Opportunité',
    'LNK_NEW_CASE' => 'Nouveau Ticket',
    'LNK_NEW_NOTE' => 'Créer Note ou Pièce jointe',
    'LNK_NEW_CALL' => 'Nouvel Appel',
    'LNK_NEW_EMAIL' => 'Nouveau Email',
    'LNK_NEW_MEETING' => 'Nouvelle Réunion',
    'LNK_NEW_TASK' => 'Créer Tâche',
    'NTC_DELETE_CONFIRMATION' => 'Êtes-vous sûr de vouloir supprimer cet enregistrement? Tout enregistrement utilisant cette devise sera converti dans la devise par défaut du système lors de son accès. Il peut être préférable de définir le statut comme inactif.',
    'LBL_BELOW_MIN' => 'Le taux de conversion doit être supérieur à 0',
    'currency_status_dom' =>
        array(
            'Active' => 'Actif',
            'Inactive' => 'Inactif',
        ),
    'LBL_CREATED_BY' => 'Créé Par',
    'LBL_EDIT_LAYOUT' => 'Modifier Mise en page' /*for 508 compliance fix*/,
);
