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
    'LBL_DATE_ENTERED' => 'Date Création:',
    'LBL_DATE_MODIFIED' => 'Date Modification:',
    'LBL_ASSIGNED_USER_ID' => 'Assigné à:',
    'LBL_ASSIGNED_USER_NAME' => 'Chef de Projet:',
    'LBL_MODIFIED_USER_ID' => 'Modifié par Id Utilisateur:',
    'LBL_CREATED_BY' => 'Créé Par:',
    'LBL_NAME' => 'Nom:',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_DELETED' => 'Supprimé:',
    'LBL_DATE' => 'Date:',
    'LBL_DATE_START' => 'Date Début:',
    'LBL_DATE_END' => 'Date Fin:',
    'LBL_PRIORITY' => 'Priorité:',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Effort Total Estimé (hrs)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Effort Total Réel (hrs)',
    'LBL_LIST_END_DATE' => 'Date Fin',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projets',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Tâches Projet',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Opportunités',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'Aucun',
    'LBL_ALL_PROJECTS' => 'Tous les Projets',
    'LBL_ALL_USERS' => 'Tous les Utilisateurs',
    'LBL_ALL_CONTACTS' => 'Tous les Contacts',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Nouveau Projet',
    'LNK_NEW_PROJECT' => 'Créer Projet',
    'LNK_PROJECT_LIST' => 'Liste Projets',
    'LNK_NEW_PROJECT_TASK' => 'Créer Tâche Projet',
    'LNK_PROJECT_TASK_LIST' => 'Tâches Projet',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projets',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activités',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historique',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Comptes',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Opportunités',
    'LBL_CASES_SUBPANEL_TITLE' => 'Tickets',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bogues',
    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Nom Tâche',
    'LBL_DURATION' => 'Durée',
    'LBL_ACTUAL_DURATION' => 'Durée Réelle',
    'LBL_START' => 'Début',
    'LBL_FINISH' => 'Fin',
    'LBL_PREDECESSORS' => 'Prédécesseurs',
    'LBL_PERCENT_COMPLETE' => '% Terminé',
    'LBL_MORE' => 'Plus...',
    'LBL_OPPORTUNITIES' => 'Opportunités',
    'LBL_NEXT_WEEK' => 'Suivant',
    'LBL_PROJECT_INFORMATION' => 'Vue Globale',
    'LBL_EDITLAYOUT' => 'Modifier Mise en page' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Tâches Projet',
    'LBL_VIEW_GANTT_TITLE' => 'Voir Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Durée',
    'LBL_TASK_TITLE' => 'Modifier Tâche',
    'LBL_DURATION_TITLE' => 'Modifier Durée',
    'LBL_LAG' => 'Retard',
    'LBL_DAYS' => 'Jours',
    'LBL_HOURS' => 'Heures',
    'LBL_MONTHS' => 'Mois',
    'LBL_SUBTASK' => 'Tâches',
    'LBL_MILESTONE_FLAG' => 'Jalon',
    'LBL_ADD_NEW_TASK' => 'Ajouter Nouvelle Tâche',
    'LBL_DELETE_TASK' => 'Supprimer Tâche',
    'LBL_EDIT_TASK_PROPERTIES' => 'Modifier Propriétés Tâche.',
    'LBL_PARENT_TASK_ID' => 'Id Tâche Parent',
    'LBL_RESOURCE_CHART' => 'Calendrier Ressource',
    'LBL_RELATIONSHIP_TYPE' => 'Type Relation',
    'LBL_ASSIGNED_TO' => 'Chef de Projet',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Modèle Pojet',
    'LBL_STATUS' => 'Statut:',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Chef de Projet',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Projet',
    'LBL_TOOLTIP_TASK_NAME' => 'Nom Tâche',
    'LBL_TOOLTIP_TITLE' => 'Tâches en ce jour',
    'LBL_TOOLTIP_TASK_DURATION' => 'Durée',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'La Ressource est un Utilisateur',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'La Ressource est un Contact',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Mois Précédent',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Mois Suivant',
    'LBL_RESOURCE_CHART_WEEK' => 'Semaine',
    'LBL_RESOURCE_CHART_DAY' => 'Jour',
    'LBL_RESOURCE_CHART_WARNING' => 'Aucune ressource n\'a été affectée à ce projet.',
    'LBL_PROJECT_DELETE_MSG' => 'Êtes-vous certain de vouloir effacer ce projet et toutes les tâches liées?',
    'LBL_LIST_MY_PROJECT' => 'Mes Projets',
    'LBL_LIST_ASSIGNED_USER' => 'Chef de Projet',
    'LBL_UNASSIGNED' => 'Non assigné',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Ressources',

    'LBL_EMAIL' => 'Email',
    'LBL_PHONE' => 'Téléphone:',
    'LBL_ADD_BUTTON' => 'Ajouter',
    'LBL_ADD_INVITEE' => 'Ajouter Ressource',
    'LBL_FIRST_NAME' => 'Prénom',
    'LBL_LAST_NAME' => 'Nom de Famille',
    'LBL_SEARCH_BUTTON' => 'Recherche',
    'LBL_EMPTY_SEARCH_RESULT' => 'Désolé, aucun résultat trouvé. Veuillez créer un invité ci-dessous.',
    'LBL_CREATE_INVITEE' => 'Créer Ressource',
    'LBL_CREATE_CONTACT' => 'Comme un Contact',
    'LBL_CREATE_AND_ADD' => 'Créer et Ajouter',
    'LBL_CANCEL_CREATE_INVITEE' => 'Annuler',
    'LBL_NO_ACCESS' => 'Vous n\'avez aucun accès pour créer $module',
    'LBL_SCHEDULING_FORM_TITLE' => 'Liste Ressources',
    'LBL_REMOVE' => 'Retirer',
    'LBL_VIEW_DETAIL' => 'Voir Détails',
    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Tenir compte des jours ouvrables',

    'LBL_IMPORT_PROJECTS' => 'Importer des projets',
    
    'LBL_PROJECTS_SEARCH' => 'Rechercher Projets',
    'LBL_USERS_SEARCH' => 'Rechercher Utilisateurs',
    'LBL_CONTACTS_SEARCH' => 'Sélectionner Contacts',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'Recherche',

    'LBL_CHART_TYPE' => 'Type',
    'LBL_CHART_WEEKLY' => 'Hebdomadaire',
    'LBL_CHART_MONTHLY' => 'Mensuel',
    'LBL_CHART_QUARTERLY' => 'Trimestrielle',

    'LBL_RESOURCE_CHART_MONTH' => 'Mois',
    'LBL_RESOURCE_CHART_QUARTER' => 'Trimestre',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Contacts Projet depuis le Nom Contacts',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Modèles Projet: Projet à partir du Nom Projet',
    'LBL_AOS_QUOTES_PROJECT' => 'Devis: Projet',

);
