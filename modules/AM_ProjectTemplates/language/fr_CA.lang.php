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
    'LBL_ASSIGNED_TO_ID' => 'Id Utilisateur Assigné',
    'LBL_ASSIGNED_TO_NAME' => 'Chef de projet',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Date Création',
    'LBL_DATE_MODIFIED' => 'Date Modification',
    'LBL_MODIFIED' => 'Modifié Par',
    'LBL_MODIFIED_NAME' => 'Modifié par Nom',
    'LBL_CREATED' => 'Créé Par',
    'LBL_DELETED' => 'Supprimé',
    'LBL_NAME' => 'Nom Modèle',
    'LBL_CREATED_USER' => 'Créé par Utilisateur',
    'LBL_MODIFIED_USER' => 'Modifié par Utilisateur',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_EDIT_BUTTON' => 'Modifier',
    'LBL_REMOVE' => 'Retirer',
    'LBL_LIST_FORM_TITLE' => 'Liste Modèles de projet',
    'LBL_MODULE_NAME' => 'Modèles de projet',
    'LBL_MODULE_TITLE' => 'Modèles de projet',
    'LBL_HOMEPAGE_TITLE' => 'Mes Modèles de projet',
    'LNK_NEW_RECORD' => 'Créer Modèles de projet',
    'LNK_LIST' => 'Voir Modèles de projet',
    'LNK_IMPORT_AM_PROJECTTEMPLATES' => 'Importer Modèles de projet',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher Modèles de projet',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Voir Historique',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activités',
    'LBL_NEW_FORM_TITLE' => 'Nouveau Modèle de projet',
    'LBL_STATUS' => 'Statut',
    'LBL_PRIORITY' => 'Priorité',
    'LBL_PROJECT_NAME' => 'Nom Projet',
    'LBL_START_DATE' => 'Date Début',
    'LBL_CREATE_PROJECT_TITLE' => 'Créer un nouveau projet à partir de ce modèle ?',
    'LBL_AM_TASKTEMPLATES_AM_PROJECTTEMPLATES_FROM_AM_TASKTEMPLATES_TITLE' => 'Modèles Tâche',
    'LBL_AM_PROJECTTEMPLATES_USERS_1_TITLE' => 'Utilisateurs',
    'LBL_AM_PROJECTTEMPLATES_CONTACTS_1_TITLE' => 'Contacts',
    'LBL_AM_PROJECTTEMPLATES_RESOURCES_TITLE' => 'Sélectionnez Ressources',
    'LBL_NEW_PROJECT_CREATED' => 'Nouveau Projet Créé',
    'LBL_NEW_PROJECT' => 'Créer Projet',
    'LBL_CANCEL_PROJECT' => 'Annuler',

    'LBL_SUBTASK' => 'Tâche',
    'LBL_MILESTONE_FLAG' => 'Jalon',
    'LBL_RELATIONSHIP_TYPE' => 'Type de relation',
    'LBL_LAG' => 'Retard',
    'LBL_DAYS' => 'Jours',
    'LBL_HOURS' => 'Heures',
    'LBL_MONTHS' => 'Mois',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Tâches Projet',
    'LBL_VIEW_GANTT_TITLE' => 'Voir Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Durée',
    'LBL_TASK_TITLE' => 'Modifier Tâche',
    'LBL_DURATION_TITLE' => 'Modifier Durée',
    'LBL_DESCRIPTION' => 'Notes',
    'LBL_ASSIGNED_USER_ID' => 'Assigné à:',

    'LBL_LIST_ASSIGNED_USER' => 'Chef de projet',
    'LBL_UNASSIGNED' => 'Non assigné',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Ressources',
    'LBL_DELETE_TASK' => 'Supprimer Tâche',
    'LBL_VIEW_DETAIL' => 'Voir Détails',
    'LBL_ADD_NEW_TASK' => 'Ajouter Nouvelle Tâche',
    'LBL_ASSIGNED_USER_NAME' => 'Chef de projet:',

    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Nom Tâche',
    'LBL_DURATION' => 'Durée',
    'LBL_ACTUAL_DURATION' => 'Durée Réelle',
    'LBL_START' => 'Début',
    'LBL_FINISH' => 'Fin',
    'LBL_PREDECESSORS' => 'Prédécesseurs',
    'LBL_PERCENT_COMPLETE' => '% Terminé',
    'LBL_EDIT_TASK_PROPERTIES' => 'Modifier les propriétés de la tâche',

    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Tenir compte des jours ouvrables',
    'LBL_COPY_ALL_TASKS' => 'Copiez toutes les tâches avec les ressources',
    'LBL_COPY_SEL_TASKS' => 'Copier les tâches sélectionnées avec les ressources',
    'LBL_TOOLTIP_TITLE' => 'Astuce',
    'LBL_TOOLTIP_TEXT' => 'Copie toutes les tâches avec les utilisateurs attribués',

    'LBL_EMAIL' => 'Email',
    'LBL_PHONE' => 'Telephone:',
    'LBL_ADD_BUTTON' => 'Ajouter',
    'LBL_ADD_INVITEE' => 'Ajouter Ressource',
    'LBL_FIRST_NAME' => 'Prénom',
    'LBL_LAST_NAME' => 'Nom de famille',
    'LBL_SEARCH_BUTTON' => 'Recherche',
    'LBL_EMPTY_SEARCH_RESULT' => 'Désolé, aucun résultat trouvé. Veuillez créer un invité ci-dessous.',
    'LBL_CREATE_INVITEE' => 'Créer Ressource',
    'LBL_CREATE_CONTACT' => 'Comme Contact',
    'LBL_CREATE_AND_ADD' => 'Créer et Ajouter',
    'LBL_CANCEL_CREATE_INVITEE' => 'Annuler',
    'LBL_NO_ACCESS' => 'Vous n\'avez aucun accès pour créer $module',
    'LBL_SCHEDULING_FORM_TITLE' => 'Liste Ressources',
    'LBL_NONE' => 'Aucun(e)',

    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Modèles Projet : Projet à partir du nom de projet',


);
