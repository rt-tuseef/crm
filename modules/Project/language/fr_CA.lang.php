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
    'LBL_MODULE_NAME' => 'Projet',
    'LBL_MODULE_TITLE' => 'Projets: Accueil',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher Projet',
    'LBL_LIST_FORM_TITLE' => 'Liste Projets',
    'LBL_HISTORY_TITLE' => 'Historique',
    'LBL_ID' => 'ID:',
    'LBL_DATE_ENTERED' => 'Date Cr??ation:',
    'LBL_DATE_MODIFIED' => 'Date Modification:',
    'LBL_ASSIGNED_USER_ID' => 'Assign?? ??:',
    'LBL_ASSIGNED_USER_NAME' => 'Chef de Projet:',
    'LBL_MODIFIED_USER_ID' => 'Modifi?? par Id Utilisateur:',
    'LBL_CREATED_BY' => 'Cr???? Par:',
    'LBL_NAME' => 'Nom:',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_DELETED' => 'Supprim??:',
    'LBL_DATE' => 'Date:',
    'LBL_DATE_START' => 'Date D??but:',
    'LBL_DATE_END' => 'Date Fin:',
    'LBL_PRIORITY' => 'Priorit??:',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Effort Total Estim?? (hrs)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Effort Total R??el (hrs)',
    'LBL_LIST_END_DATE' => 'Date Fin',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projets',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'T??ches Projet',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Opportunit??s',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'Aucun',
    'LBL_ALL_PROJECTS' => 'Tous les Projets',
    'LBL_ALL_USERS' => 'Tous les Utilisateurs',
    'LBL_ALL_CONTACTS' => 'Tous les Contacts',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Nouveau Projet',
    'LNK_NEW_PROJECT' => 'Cr??er Projet',
    'LNK_PROJECT_LIST' => 'Liste Projets',
    'LNK_NEW_PROJECT_TASK' => 'Cr??er T??che Projet',
    'LNK_PROJECT_TASK_LIST' => 'T??ches Projet',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projets',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activit??s',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historique',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Comptes',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Opportunit??s',
    'LBL_CASES_SUBPANEL_TITLE' => 'Tickets',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bogues',
    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Nom T??che',
    'LBL_DURATION' => 'Dur??e',
    'LBL_ACTUAL_DURATION' => 'Dur??e R??elle',
    'LBL_START' => 'D??but',
    'LBL_FINISH' => 'Fin',
    'LBL_PREDECESSORS' => 'Pr??d??cesseurs',
    'LBL_PERCENT_COMPLETE' => '% Termin??',
    'LBL_MORE' => 'Plus...',
    'LBL_OPPORTUNITIES' => 'Opportunit??s',
    'LBL_NEXT_WEEK' => 'Suivant',
    'LBL_PROJECT_INFORMATION' => 'Vue Globale',
    'LBL_EDITLAYOUT' => 'Modifier Mise en page' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'T??ches Projet',
    'LBL_VIEW_GANTT_TITLE' => 'Voir Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Dur??e',
    'LBL_TASK_TITLE' => 'Modifier T??che',
    'LBL_DURATION_TITLE' => 'Modifier Dur??e',
    'LBL_LAG' => 'Retard',
    'LBL_DAYS' => 'Jours',
    'LBL_HOURS' => 'Heures',
    'LBL_MONTHS' => 'Mois',
    'LBL_SUBTASK' => 'T??ches',
    'LBL_MILESTONE_FLAG' => 'Jalon',
    'LBL_ADD_NEW_TASK' => 'Ajouter Nouvelle T??che',
    'LBL_DELETE_TASK' => 'Supprimer T??che',
    'LBL_EDIT_TASK_PROPERTIES' => 'Modifier Propri??t??s T??che.',
    'LBL_PARENT_TASK_ID' => 'Id T??che Parent',
    'LBL_RESOURCE_CHART' => 'Calendrier Ressource',
    'LBL_RELATIONSHIP_TYPE' => 'Type Relation',
    'LBL_ASSIGNED_TO' => 'Chef de Projet',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Mod??le Pojet',
    'LBL_STATUS' => 'Statut:',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Chef de Projet',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Projet',
    'LBL_TOOLTIP_TASK_NAME' => 'Nom T??che',
    'LBL_TOOLTIP_TITLE' => 'T??ches en ce jour',
    'LBL_TOOLTIP_TASK_DURATION' => 'Dur??e',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'La Ressource est un Utilisateur',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'La Ressource est un Contact',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Mois Pr??c??dent',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Mois Suivant',
    'LBL_RESOURCE_CHART_WEEK' => 'Semaine',
    'LBL_RESOURCE_CHART_DAY' => 'Jour',
    'LBL_RESOURCE_CHART_WARNING' => 'Aucune ressource n\'a ??t?? affect??e ?? ce projet.',
    'LBL_PROJECT_DELETE_MSG' => '??tes-vous certain de vouloir effacer ce projet et toutes les t??ches li??es?',
    'LBL_LIST_MY_PROJECT' => 'Mes Projets',
    'LBL_LIST_ASSIGNED_USER' => 'Chef de Projet',
    'LBL_UNASSIGNED' => 'Non assign??',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Ressources',

    'LBL_EMAIL' => 'Email',
    'LBL_PHONE' => 'T??l??phone:',
    'LBL_ADD_BUTTON' => 'Ajouter',
    'LBL_ADD_INVITEE' => 'Ajouter Ressource',
    'LBL_FIRST_NAME' => 'Pr??nom',
    'LBL_LAST_NAME' => 'Nom de Famille',
    'LBL_SEARCH_BUTTON' => 'Recherche',
    'LBL_EMPTY_SEARCH_RESULT' => 'D??sol??, aucun r??sultat trouv??. Veuillez cr??er un invit?? ci-dessous.',
    'LBL_CREATE_INVITEE' => 'Cr??er Ressource',
    'LBL_CREATE_CONTACT' => 'Comme un Contact',
    'LBL_CREATE_AND_ADD' => 'Cr??er et Ajouter',
    'LBL_CANCEL_CREATE_INVITEE' => 'Annuler',
    'LBL_NO_ACCESS' => 'Vous n\'avez aucun acc??s pour cr??er $module',
    'LBL_SCHEDULING_FORM_TITLE' => 'Liste Ressources',
    'LBL_REMOVE' => 'Retirer',
    'LBL_VIEW_DETAIL' => 'Voir D??tails',
    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Tenir compte des jours ouvrables',

    'LBL_IMPORT_PROJECTS' => 'Importer des projets',
    
    'LBL_PROJECTS_SEARCH' => 'Rechercher Projets',
    'LBL_USERS_SEARCH' => 'Rechercher Utilisateurs',
    'LBL_CONTACTS_SEARCH' => 'S??lectionner Contacts',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'Recherche',

    'LBL_CHART_TYPE' => 'Type',
    'LBL_CHART_WEEKLY' => 'Hebdomadaire',
    'LBL_CHART_MONTHLY' => 'Mensuel',
    'LBL_CHART_QUARTERLY' => 'Trimestrielle',

    'LBL_RESOURCE_CHART_MONTH' => 'Mois',
    'LBL_RESOURCE_CHART_QUARTER' => 'Trimestre',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Contacts Projet depuis le Nom Contacts',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Mod??les Projet: Projet ?? partir du Nom Projet',
    'LBL_AOS_QUOTES_PROJECT' => 'Devis: Projet',

);
