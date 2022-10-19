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

    'LBL_SHAREDWEEK' => 'Semaine Partagée',
    'LBL_SHAREDMONTH' => 'Mois Partagé',

    'LBL_MODULE_NAME' => 'Calendrier',
    'LBL_MODULE_TITLE' => 'Calendrier',
    'LNK_NEW_CALL' => 'Planifier Appel',
    'LNK_NEW_MEETING' => 'Planifier Réunion',
    'LNK_NEW_TASK' => 'Créer Tâche',
    'LNK_CALL_LIST' => 'Appels',
    'LNK_MEETING_LIST' => 'Réunions',
    'LNK_TASK_LIST' => 'Tâches',
    'LNK_TASK' => 'Tâche',
    'LNK_TASK_VIEW' => 'Voir Tâche',
    'LNK_EVENT' => 'Évènement',
    'LNK_EVENT_VIEW' => 'Voir Évènement',
    'LNK_VIEW_CALENDAR' => 'Aujourd\'hui',
    'LNK_IMPORT_CALLS' => 'Import Appels',
    'LNK_IMPORT_MEETINGS' => 'Import Réunions',
    'LNK_IMPORT_TASKS' => 'Import Tâches',
    'LBL_MONTH' => 'Mois',
    'LBL_AGENDADAY' => 'Jour',
    'LBL_YEAR' => 'Année',

    'LBL_AGENDAWEEK' => 'Semaine',
    'LBL_PREVIOUS_MONTH' => 'Mois Précédent',
    'LBL_PREVIOUS_DAY' => 'Jour Précédent',
    'LBL_PREVIOUS_YEAR' => 'Année Précédente',
    'LBL_PREVIOUS_WEEK' => 'Semaine Précédente',
    'LBL_NEXT_MONTH' => 'Mois Suivant',
    'LBL_NEXT_DAY' => 'Jour Suivant',
    'LBL_NEXT_YEAR' => 'Année Suivante',
    'LBL_NEXT_WEEK' => 'Semaine Suivante',
    'LBL_AM' => 'AM',
    'LBL_PM' => 'PM',
    'LBL_SCHEDULED' => 'Planifié',
    'LBL_BUSY' => 'Occupé',
    'LBL_CONFLICT' => 'Conflit',
    'LBL_USER_CALENDARS' => 'Calendriers Utilisateur',
    'LBL_SHARED' => 'Partagé',
    'LBL_PREVIOUS_SHARED' => 'Précédent',
    'LBL_NEXT_SHARED' => 'Suivant',
    'LBL_SHARED_CAL_TITLE' => 'Calendrier Partagé',
    'LBL_USERS' => 'Utilisateurs',
    'LBL_REFRESH' => 'Actualiser',
    'LBL_EDIT_USERLIST' => 'Liste Utilisateurs',
    'LBL_SELECT_USERS' => 'Sélectionnez les utilisateurs pour l’affichage du calendrier',
    'LBL_FILTER_BY_TEAM' => 'Filtrer la Liste des Utilisateurs par Équipe:',
    'LBL_ASSIGNED_TO_NAME' => 'Assigné à',
    'LBL_DATE' => 'Date et Heure de début',
    'LBL_CREATE_MEETING' => 'Planifier Réunion',
    'LBL_CREATE_CALL' => 'Planifier Appel',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINS_ABBREV' => 'm',


    'LBL_YES' => 'Oui',
    'LBL_NO' => 'Non',
    'LBL_SETTINGS' => 'Paramètres',
    'LBL_CREATE_NEW_RECORD' => 'Créer Activité',
    'LBL_LOADING' => 'Chargement...',
    'LBL_SAVING' => 'Enregistrement en cours...',
    'LBL_SENDING_INVITES' => 'Enregistrement et Envoi Invitations...',
    'LBL_CONFIRM_REMOVE' => 'Etes-vous sûr de vouloir supprimer cet enregistrement ?',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Etes-vous sûr de vouloir supprimer tous les enregistrements récurrents ?',
    'LBL_EDIT_RECORD' => 'Modifier Activité',
    'LBL_ERROR_SAVING' => 'Erreur lors de la sauvegarde',
    'LBL_ERROR_LOADING' => 'Erreur lors du chargement',
    'LBL_GOTO_DATE' => 'Aller à la Date',
    'NOTICE_DURATION_TIME' => 'Durée doit être supérieure à 0',
    'LBL_STYLE_BASIC' => 'Vue Globale', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_STYLE_ADVANCED' => 'Avancée', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    'LBL_NO_USER' => 'Aucune correspondance pour le champ : Assigné à',
    'LBL_SUBJECT' => 'Sujet',
    'LBL_DURATION' => 'Durée',
    'LBL_STATUS' => 'Statut',
    'LBL_PRIORITY' => 'Priorité',

    'LBL_SETTINGS_TITLE' => 'Paramètres',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Afficher les créneaux horaires dans les vues Jour et Semaine:',
    'LBL_SETTINGS_TIME_STARTS' => 'Heure Début:',
    'LBL_SETTINGS_TIME_ENDS' => 'Heure Fin:',
    'LBL_SETTINGS_CALLS_SHOW' => 'Voir Appels:',
    'LBL_SETTINGS_TASKS_SHOW' => 'Voir Tâches:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Afficher les Réunions, Appels et Tâches terminés:',
    'LBL_SETTINGS_DISPLAY_SHARED_CALENDAR_SEPARATE' => 'Calendrier Partagé Distinct:',

    'LBL_SAVE_BUTTON' => 'Sauvegarder',
    'LBL_DELETE_BUTTON' => 'Supprimer',
    'LBL_APPLY_BUTTON' => 'Appliquer',
    'LBL_SEND_INVITES' => 'Enregistrer & Envoyer Invitation',
    'LBL_CANCEL_BUTTON' => 'Annuler',
    'LBL_CLOSE_BUTTON' => 'Fermer',

    'LBL_GENERAL_TAB' => 'Détails',
    'LBL_PARTICIPANTS_TAB' => 'Invités',
    'LBL_REPEAT_TAB' => 'Récurrence',

    'LBL_REPEAT_TYPE' => 'Répéter',
    'LBL_REPEAT_INTERVAL' => 'Chaque',
    'LBL_REPEAT_END' => 'Fin',
    'LBL_REPEAT_END_AFTER' => 'Après',
    'LBL_REPEAT_OCCURRENCES' => 'récurrences',
    'LBL_REPEAT_END_BY' => 'En',
    'LBL_REPEAT_DOW' => 'Le',
    'LBL_REPEAT_UNTIL' => 'Répétition jusque',
    'LBL_REPEAT_COUNT' => 'Nombre Occurrences',
    'LBL_REPEAT_LIMIT_ERROR' => 'Votre demande allait créer plus de réunions $limit.',

    'LBL_EDIT_ALL_RECURRENCES' => 'Modifier toutes les Récurrences',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Supprimer toutes les Récurrences',

    'LBL_DATE_END_ERROR' => 'La Date de Fin est avant la Date de Début',
    'ERR_YEAR_BETWEEN' => 'Désolé, calendrier ne peut pas gérer l’année que vous avez demandé<br>L\'année doit être comprise entre 1970 et 2037',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: non définit pour cette vue',
    'LBL_NO_ITEMS_MOBILE' => 'Votre calendrier est libre pour la semaine.',
    'LBL_GENERAL_SETTINGS' => 'Paramètres Généraux',
    'LBL_COLOR_SETTINGS' => 'Paramètres Couleurs',
    'LBL_MODULE' => 'Module',
    'LBL_BODY' => 'Corps',
    'LBL_BORDER' => 'Bordure',
    'LBL_TEXT' => 'Texte',
);


$mod_list_strings = array(
    'dom_cal_weekdays' =>
        array(
            '0' => "Dim",
            '1' => "Lun",
            '2' => "Mar",
            '3' => "Mer",
            '4' => "Jeu",
            '5' => "Ven",
            '6' => "Sam",
        ),
    'dom_cal_weekdays_long' =>
        array(
            '0' => "Dimanche",
            '1' => "Lundi",
            '2' => "Mardi",
            '3' => "Mercredi",
            '4' => "Jeudi",
            '5' => "Vendredi",
            '6' => "Samedi",
        ),
    'dom_cal_month' =>
        array(
            '0' => "",
            '1' => "Janv",
            '2' => "Fév",
            '3' => "Mars",
            '4' => "Avr",
            '5' => "Mai",
            '6' => "Juin",
            '7' => "Juil",
            '8' => "Août",
            '9' => "Sept",
            '10' => "Oct",
            '11' => "Nov",
            '12' => "Déc",
        ),
    'dom_cal_month_long' =>
        array(
            '0' => "",
            '1' => "Janvier",
            '2' => "Février",
            '3' => "Mars",
            '4' => "Avril",
            '5' => "Mai",
            '6' => "Juin",
            '7' => "Juillet",
            '8' => "Août",
            '9' => "Septembre",
            '10' => "Octobre",
            '11' => "Novembre",
            '12' => "Décembre",
        ),
);
