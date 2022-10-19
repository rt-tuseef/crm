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
    'LBL_MODULE_NAME' => 'Activités',
    'LBL_MODULE_TITLE' => 'Activités: Accueil',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher Activités',
    'LBL_LIST_FORM_TITLE' => 'Liste Activités',
    'LBL_LIST_SUBJECT' => 'Objet',
    'LBL_OVERVIEW' => 'Vue Globale', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_TASKS' => 'Tâches', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETINGS' => 'Réunions', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CALLS' => 'Appels', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EMAILS' => 'Emails', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_NOTES' => 'Notes', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_PRINT' => 'IMPRIMER', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETING_TYPE' => 'Réunion',
    'LBL_CALL_TYPE' => 'Appel',
    'LBL_EMAIL_TYPE' => 'Email',
    'LBL_NOTE_TYPE' => 'Note',
    'LBL_DATA_TYPE_START' => 'Début:',
    'LBL_DATA_TYPE_SENT' => 'Envoyé:',
    'LBL_DATA_TYPE_MODIFIED' => 'Modifié:',
    'LBL_LIST_CONTACT' => 'Contact',
    'LBL_LIST_RELATED_TO' => 'Associés à',
    'LBL_LIST_DATE' => 'Date',
    'LBL_LIST_CLOSE' => 'Fermé',
    'LBL_SUBJECT' => 'Objet:',
    'LBL_STATUS' => 'Statut :',
    'LBL_LOCATION' => 'Emplacement:',
    'LBL_DATE_TIME' => 'Date et Heure Début:',
    'LBL_DATE' => 'Date Début:',
    'LBL_TIME' => 'Heure Début:',
    'LBL_DURATION' => 'Durée:',
    'LBL_HOURS_MINS' => '(heures/minutes)',
    'LBL_CONTACT_NAME' => 'Nom Contact: ',
    'LBL_DESCRIPTION' => 'Description:',
    'LNK_NEW_CALL' => 'Planifier Appel',
    'LNK_NEW_MEETING' => 'Planifier Réunion',
    'LNK_NEW_TASK' => 'Créer Tâche',
    'LNK_NEW_NOTE' => 'Créer Note ou Ajouter Pièces jointes',
    'LNK_NEW_EMAIL' => 'Créer Email Archivé',
    'LNK_CALL_LIST' => 'Voir Appels',
    'LNK_MEETING_LIST' => 'Voir Réunions',
    'LNK_TASK_LIST' => 'Voir Tâches',
    'LNK_NOTE_LIST' => 'Voir Notes',
    'LBL_DELETE_ACTIVITY' => 'Etes-vous sûr de vouloir supprimer cette activité?',
    'ERR_DELETE_RECORD' => 'Un numéro d\'enregistrement doit être spécifié pour supprimer le Compte.',
    'LBL_INVITEE' => 'Invités',
    'LBL_LIST_DIRECTION' => 'Direction',
    'LBL_DIRECTION' => 'Direction',
    'LNK_NEW_APPOINTMENT' => 'Nouveau Rendez-vous',
    'LNK_VIEW_CALENDAR' => 'Voir Calendrier',
    'LBL_OPEN_ACTIVITIES' => 'Activités en cours :',
    'LBL_HISTORY' => 'Historique',
    'LBL_NEW_TASK_BUTTON_TITLE' => 'Créer Tâche',
    'LBL_NEW_TASK_BUTTON_LABEL' => 'Créer Tâche',
    'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Planifier Réunion',
    'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Planifier Réunion',
    'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Planifier Appel',
    'LBL_NEW_NOTE_BUTTON_TITLE' => 'Créer Note ou Pièce jointe',
    'LBL_NEW_NOTE_BUTTON_LABEL' => 'Créer Note ou Pièce jointe',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Archiver Email',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Archiver Email',
    'LBL_LIST_STATUS' => 'Statut',
    'LBL_LIST_DUE_DATE' => 'Date Échéance',
    'LBL_LIST_LAST_MODIFIED' => 'Dernière Modification',
    'LNK_IMPORT_CALLS' => 'Import Appels',
    'LNK_IMPORT_MEETINGS' => 'Import Réunions',
    'LNK_IMPORT_TASKS' => 'Import Tâches',
    'LNK_IMPORT_NOTES' => 'Import Notes',
    'LBL_ACCEPT_THIS' => 'Accepter?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Activités En cours',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Utilisateur Assigné',

    'LBL_ACCEPT' => 'Accepter' /*for 508 compliance fix*/,
);
