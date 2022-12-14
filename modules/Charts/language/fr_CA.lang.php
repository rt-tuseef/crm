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
    'ERR_NO_OPPS' => 'Veuillez cr??er des Opportunit??s avant de visualiser le graphique des Opportunit??s.',
    'LBL_ALL_OPPORTUNITIES' => 'Montant total de toutes les Opportunit??s est ',
    'LBL_CHART_TYPE' => 'Type Graphique:',
    'LBL_CREATED_ON' => 'Derni??re Exc??cution ',
    'LBL_CLOSE_DATE_START' => 'Date Cl??ture Pr??vue - Du:',
    'LBL_CLOSE_DATE_END' => 'Date Cl??ture Pr??vue - Au:',
    'LBL_DATE_END' => 'Date Fin:',
    'LBL_DATE_RANGE_TO' => '??',
    'LBL_DATE_RANGE' => 'Plage Date est',
    'LBL_DATE_START' => 'Date D??but:',
    'LBL_EDIT' => 'Modifier',
    'LBL_LEAD_SOURCE_BY_OUTCOME_DESC' => 'Affiche les montants cumul??s des opportunit??s par source prospect s??lectionn??e par r??sultat pour les utilisateurs s??lectionn??s. Le r??sultat est bas?? sur le fait que l\'??tape de vente est Ferm??e gagn??e, Ferm??e perdue ou toute autre valeur.',
    'LBL_LEAD_SOURCE_BY_OUTCOME' => 'Toutes les Opportunit??s Par Source Prospect Par r??sultat',
    'LBL_LEAD_SOURCE_FORM_DESC' => 'Affiche montants cumulatifs d\'Opportunit?? par Source Prospect pour les utilisateurs s??lectionn??s.',
    'LBL_LEAD_SOURCE_FORM_TITLE' => 'Toutes les Opportunit??s par Source Prospect',
    'LBL_LEAD_SOURCE_OTHER' => 'Autre',
    'LBL_LEAD_SOURCES' => 'Sources Prospect:',
    'LBL_MODULE_NAME' => 'Tableau de bord',
    'LBL_MODULE_TITLE' => 'Tableau de bord: Accueil',
    'LBL_MONTH_BY_OUTCOME_DESC' => 'Affiche les montants cumul??s des opportunit??s par mois par r??sultat pour les utilisateurs s??lectionn??s pour lesquels la date de cl??ture attendue se situe dans la plage de dates sp??cifi??e. Le r??sultat est bas?? sur le fait que l\'??tape de vente est Ferm??e gagn??e, Ferm??e perdue ou toute autre valeur.',
    'LBL_OPP_SIZE' => 'Taille Opportunit?? en',
    'LBL_OPP_THOUSANDS' => 'k',
    'LBL_OPPS_IN_LEAD_SOURCE' => 'opportunit??s dont la Source Prospect est',
    'LBL_OPPS_IN_STAGE' => ' o?? ??tape de Vente est',
    'LBL_OPPS_OUTCOME' => ' o?? R??sultat est',
    'LBL_OPPS_WORTH' => 'valeur Opportunit??s',
    'LBL_PIPELINE_FORM_TITLE_DESC' => 'Affiche les montants cumul??s par ??tapes de vente s??lectionn??es pour vos opportunit??s o?? la date d\'??ch??ance pr??vue est comprise dans la plage de dates sp??cifi??e.',
    'LBL_REFRESH' => 'Actualiser',
    'LBL_ROLLOVER_DETAILS' => 'Survolez une barre pour plus de d??tails.',
    'LBL_ROLLOVER_WEDGE_DETAILS' => 'Survolez un coin pour plus de d??tails.',
    'LBL_SALES_STAGE_FORM_DESC' => 'Affiche les montants cumul??s des opportunit??s selon les ??tapes de vente s??lectionn??es pour les utilisateurs s??lectionn??s pour lesquels la date de cl??ture attendue se situe dans la plage de dates sp??cifi??e.',
    'LBL_SALES_STAGE_FORM_TITLE' => 'Pipeline par ??tape de Vente',
    'LBL_SALES_STAGES' => '??tapes de Vente:',
    'LBL_TOTAL_PIPELINE' => 'Total Pipeline est ',
    'LBL_USERS' => 'Utilisateurs:',
    'LBL_YEAR_BY_OUTCOME' => 'Pipeline par Mois par R??sultat',
    'LBL_YEAR' => 'Ann??e:',
    'LNK_NEW_ACCOUNT' => 'Cr??er Compte',
    'LNK_NEW_CALL' => 'Planifier Appel',
    'LNK_NEW_CASE' => 'Cr??er Ticket',
    'LNK_NEW_CONTACT' => 'Cr??er Contact',
    'LNK_NEW_LEAD' => 'Cr??er Prospect',
    'LNK_NEW_MEETING' => 'Planifier R??union',
    'LNK_NEW_NOTE' => 'Cr??er Note ou Pi??ce jointe',
    'LNK_NEW_OPPORTUNITY' => 'Cr??er Opportunit??',
    'LNK_NEW_TASK' => 'Cr??er T??che',
    'NTC_NO_LEGENDS' => 'Aucun',

    'LBL_TITLE' => 'Titre:',
    'LBL_MY_MODULES_USED_SIZE' => 'D??compte Acc??s',

    'LBL_CHART_PIPELINE_BY_SALES_STAGE' => 'Pipeline par ??tape de Vente',
    'LBL_CHART_LEAD_SOURCE_BY_OUTCOME' => 'Source Prospect par R??sultat',
    'LBL_CHART_OUTCOME_BY_MONTH' => 'R??sultat par Mois',
    'LBL_CHART_PIPELINE_BY_LEAD_SOURCE' => 'Pipeline par Source Prospect',
    'LBL_CHART_MY_PIPELINE_BY_SALES_STAGE' => 'Mon Pipeline par ??tape de Vente',
    'LBL_CHART_MY_MODULES_USED_30_DAYS' => 'Mes Modules Utilis??s (30 derniers jours)',
);
