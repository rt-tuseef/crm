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
    'ERR_NO_OPPS' => 'Veuillez créer des Opportunités avant de visualiser le graphique des Opportunités.',
    'LBL_ALL_OPPORTUNITIES' => 'Montant total de toutes les Opportunités est ',
    'LBL_CHART_TYPE' => 'Type Graphique:',
    'LBL_CREATED_ON' => 'Dernière Excécution ',
    'LBL_CLOSE_DATE_START' => 'Date Clôture Prévue - Du:',
    'LBL_CLOSE_DATE_END' => 'Date Clôture Prévue - Au:',
    'LBL_DATE_END' => 'Date Fin:',
    'LBL_DATE_RANGE_TO' => 'à',
    'LBL_DATE_RANGE' => 'Plage Date est',
    'LBL_DATE_START' => 'Date Début:',
    'LBL_EDIT' => 'Modifier',
    'LBL_LEAD_SOURCE_BY_OUTCOME_DESC' => 'Affiche les montants cumulés des opportunités par source prospect sélectionnée par résultat pour les utilisateurs sélectionnés. Le résultat est basé sur le fait que l\'étape de vente est Fermée gagnée, Fermée perdue ou toute autre valeur.',
    'LBL_LEAD_SOURCE_BY_OUTCOME' => 'Toutes les Opportunités Par Source Prospect Par résultat',
    'LBL_LEAD_SOURCE_FORM_DESC' => 'Affiche montants cumulatifs d\'Opportunité par Source Prospect pour les utilisateurs sélectionnés.',
    'LBL_LEAD_SOURCE_FORM_TITLE' => 'Toutes les Opportunités par Source Prospect',
    'LBL_LEAD_SOURCE_OTHER' => 'Autre',
    'LBL_LEAD_SOURCES' => 'Sources Prospect:',
    'LBL_MODULE_NAME' => 'Tableau de bord',
    'LBL_MODULE_TITLE' => 'Tableau de bord: Accueil',
    'LBL_MONTH_BY_OUTCOME_DESC' => 'Affiche les montants cumulés des opportunités par mois par résultat pour les utilisateurs sélectionnés pour lesquels la date de clôture attendue se situe dans la plage de dates spécifiée. Le résultat est basé sur le fait que l\'étape de vente est Fermée gagnée, Fermée perdue ou toute autre valeur.',
    'LBL_OPP_SIZE' => 'Taille Opportunité en',
    'LBL_OPP_THOUSANDS' => 'k',
    'LBL_OPPS_IN_LEAD_SOURCE' => 'opportunités dont la Source Prospect est',
    'LBL_OPPS_IN_STAGE' => ' où Étape de Vente est',
    'LBL_OPPS_OUTCOME' => ' où Résultat est',
    'LBL_OPPS_WORTH' => 'valeur Opportunités',
    'LBL_PIPELINE_FORM_TITLE_DESC' => 'Affiche les montants cumulés par étapes de vente sélectionnées pour vos opportunités où la date d\'échéance prévue est comprise dans la plage de dates spécifiée.',
    'LBL_REFRESH' => 'Actualiser',
    'LBL_ROLLOVER_DETAILS' => 'Survolez une barre pour plus de détails.',
    'LBL_ROLLOVER_WEDGE_DETAILS' => 'Survolez un coin pour plus de détails.',
    'LBL_SALES_STAGE_FORM_DESC' => 'Affiche les montants cumulés des opportunités selon les étapes de vente sélectionnées pour les utilisateurs sélectionnés pour lesquels la date de clôture attendue se situe dans la plage de dates spécifiée.',
    'LBL_SALES_STAGE_FORM_TITLE' => 'Pipeline par Étape de Vente',
    'LBL_SALES_STAGES' => 'Étapes de Vente:',
    'LBL_TOTAL_PIPELINE' => 'Total Pipeline est ',
    'LBL_USERS' => 'Utilisateurs:',
    'LBL_YEAR_BY_OUTCOME' => 'Pipeline par Mois par Résultat',
    'LBL_YEAR' => 'Année:',
    'LNK_NEW_ACCOUNT' => 'Créer Compte',
    'LNK_NEW_CALL' => 'Planifier Appel',
    'LNK_NEW_CASE' => 'Créer Ticket',
    'LNK_NEW_CONTACT' => 'Créer Contact',
    'LNK_NEW_LEAD' => 'Créer Prospect',
    'LNK_NEW_MEETING' => 'Planifier Réunion',
    'LNK_NEW_NOTE' => 'Créer Note ou Pièce jointe',
    'LNK_NEW_OPPORTUNITY' => 'Créer Opportunité',
    'LNK_NEW_TASK' => 'Créer Tâche',
    'NTC_NO_LEGENDS' => 'Aucun',

    'LBL_TITLE' => 'Titre:',
    'LBL_MY_MODULES_USED_SIZE' => 'Décompte Accès',

    'LBL_CHART_PIPELINE_BY_SALES_STAGE' => 'Pipeline par Étape de Vente',
    'LBL_CHART_LEAD_SOURCE_BY_OUTCOME' => 'Source Prospect par Résultat',
    'LBL_CHART_OUTCOME_BY_MONTH' => 'Résultat par Mois',
    'LBL_CHART_PIPELINE_BY_LEAD_SOURCE' => 'Pipeline par Source Prospect',
    'LBL_CHART_MY_PIPELINE_BY_SALES_STAGE' => 'Mon Pipeline par Étape de Vente',
    'LBL_CHART_MY_MODULES_USED_30_DAYS' => 'Mes Modules Utilisés (30 derniers jours)',
);
