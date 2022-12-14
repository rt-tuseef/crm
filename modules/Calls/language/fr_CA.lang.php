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
    'LBL_BLANK' => ' ',
    'LBL_MODULE_NAME' => 'Appels',
    'LBL_MODULE_TITLE' => 'Appels: Accueil',
    'LBL_SEARCH_FORM_TITLE' => 'Recherche Appels',
    'LBL_LIST_FORM_TITLE' => 'Liste Appels',
    'LBL_NEW_FORM_TITLE' => 'Planifier Appel',
    'LBL_LIST_CLOSE' => 'Fermer',
    'LBL_LIST_SUBJECT' => 'Sujet',
    'LBL_LIST_CONTACT' => 'Contact',
    'LBL_LIST_RELATED_TO' => 'Associ?? ??',
    'LBL_LIST_RELATED_TO_ID' => 'Associ?? ?? ID',
    'LBL_LIST_DATE' => 'Date D??but',
    'LBL_LIST_DIRECTION' => 'Direction',
    'LBL_SUBJECT' => 'Sujet:',
    'LBL_REMINDER' => 'Notification:',
    'LBL_CONTACT_NAME' => 'Contact:',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_STATUS' => 'Statut:',
    'LBL_DIRECTION' => 'Direction:',
    'LBL_DATE' => 'Date D??but:',
    'LBL_DURATION' => 'Dur??e:',
    'LBL_DURATION_HOURS' => 'Dur??e en Heures:',
    'LBL_DURATION_MINUTES' => 'Dur??e en Minutes:',
    'LBL_HOURS_MINUTES' => '(heures/minutes)',
    'LBL_DATE_TIME' => 'Date et Heure D??but:',
    'LBL_TIME' => 'Heure D??but:',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LNK_NEW_CALL' => 'Planifier Appel',
    'LNK_NEW_MEETING' => 'Planifier R??union',
    'LNK_CALL_LIST' => 'Voir Appels',
    'LNK_IMPORT_CALLS' => 'Import Appels',
    'ERR_DELETE_RECORD' => 'Un num??ro d\'enregistrement doit ??tre sp??cifi?? pour supprimer le Compte.',
    'LBL_INVITEE' => 'Invit??s',
    'LBL_RELATED_TO' => 'Associ?? ??:',
    'LNK_NEW_APPOINTMENT' => 'Planifier Rendez-vous',
    'LBL_SCHEDULING_FORM_TITLE' => 'Planification',
    'LBL_ADD_INVITEE' => 'Ajouter Invit??s',
    'LBL_NAME' => 'Nom',
    'LBL_FIRST_NAME' => 'Pr??nom',
    'LBL_LAST_NAME' => 'Nom',
    'LBL_EMAIL' => 'Email',
    'LBL_PHONE' => 'T??l??phone',
    'LBL_REMINDER_POPUP' => 'Popup',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Envoyer Email ?? tous les Invit??s',
    'LBL_EMAIL_REMINDER' => 'Notification par email',
    'LBL_EMAIL_REMINDER_TIME' => 'Horaire notification par email',
    'LBL_SEND_BUTTON_TITLE' => 'Sauvegarder et Envoyer Invitations',
    'LBL_SEND_BUTTON_LABEL' => 'Envoyer Invitations',
    'LBL_DATE_END' => 'Date de fin',
    'LBL_REMINDER_TIME' => 'Heure de la notification',
    'LBL_EMAIL_REMINDER_SENT' => 'Notification par Email envoy??e',
    'LBL_SEARCH_BUTTON' => 'Rechercher',
    'LBL_ADD_BUTTON' => 'Ajouter',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Appels',
    'LNK_SELECT_ACCOUNT' => 'S??lectionner Compte',
    'LNK_NEW_ACCOUNT' => 'Nouveau Compte',
    'LNK_NEW_OPPORTUNITY' => 'Nouvelle Opportunit??',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Prospects',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_USERS_SUBPANEL_TITLE' => 'Utilisateurs',
    'LBL_OUTLOOK_ID' => 'ID Outlook',
    'LBL_MEMBER_OF' => 'Membre de',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Notes',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Assign?? ??',
    'LBL_LIST_MY_CALLS' => 'Mes Appels',
    'LBL_ASSIGNED_TO_NAME' => 'Assign?? ??',
    'LBL_ASSIGNED_TO_ID' => 'Utilisateur Assign??',
    'NOTICE_DURATION_TIME' => 'La dur??e doit ??tre sup??rieure ?? 0',
    'LBL_CALL_INFORMATION' => 'Vue Globale', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => 'Retirer',
    'LBL_ACCEPT_STATUS' => 'Statut Acceptation',
    'LBL_ACCEPT_LINK' => 'Lien Acceptation',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'Cr??er Invit??',
    'LBL_CREATE_CONTACT' => 'Comme Contact',
    'LBL_CREATE_LEAD' => 'Comme Prospect',
    'LBL_CREATE_AND_ADD' => 'Cr??er et Ajouter',
    'LBL_CANCEL_CREATE_INVITEE' => 'Annuler',
    'LBL_EMPTY_SEARCH_RESULT' => 'D??sol??, aucun r??sultat trouv??. Veuillez cr??er un invit?? ci-dessous.',
    'LBL_NO_ACCESS' => 'Vous n\'avez aucun acc??s pour cr??er $module',

    'LBL_REPEAT_TYPE' => 'R??p??tition Type',
    'LBL_REPEAT_INTERVAL' => 'R??p??tition Intervalle',
    'LBL_REPEAT_DOW' => 'R??p??tition Depuis',
    'LBL_REPEAT_UNTIL' => 'R??p??tition Jusqu\'??',
    'LBL_REPEAT_COUNT' => 'R??p??tition Occurences',
    'LBL_REPEAT_PARENT_ID' => 'R??p??tition ID Parent',
    'LBL_RECURRING_SOURCE' => 'Source R??currence',

    'LBL_SYNCED_RECURRING_MSG' => 'Cet appel est originaire d\'un autre syst??me et a ??t?? synchronis?? au CRM. Pour apporter des modifications, faites le ?? l???appel original dans l???autre syst??me. Les modifications apport??es dans l???autre syst??me peuvent ??tre synchroniser ?? cet enregistrement.',

    // for reminders
    'LBL_REMINDERS' => 'Rappels',
    'LBL_REMINDERS_ACTIONS' => 'Actions:',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => 'Envoyer Email aux Invit??s',
    'LBL_REMINDERS_WHEN' => 'Quand:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Supprimer Rappel',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Ajouter tous les Invit??s',
    'LBL_REMINDERS_ADD_REMINDER' => 'Ajouter Rappel',

    'LBL_RESCHEDULE' => 'Replanifier',
    'LBL_RESCHEDULE_COUNT' => 'Tentatives Appel',
    'LBL_RESCHEDULE_DATE' => 'Date',
    'LBL_RESCHEDULE_REASON' => 'Raison',
    'LBL_RESCHEDULE_ERROR1' => 'Veuillez choisir une date valide',
    'LBL_RESCHEDULE_ERROR2' => 'Veuillez choisir une raison',
    'LBL_RESCHEDULE_PANEL' => 'Replanifier',
    'LBL_RESCHEDULE_HISTORY' => 'Historique Tentatives Appel',
    'LBL_CANCEL' => 'Annuler',
    'LBL_SAVE' => 'Sauvegarder',

    'LBL_CALLS_RESCHEDULE' => 'Replanifier Appels',
    'LBL_LIST_STATUS'=>'Statut',
    'LBL_LIST_DATE_MODIFIED'=>'Date Modification',
    'LBL_LIST_DUE_DATE'=>'Date pr??vue',
    'LBL_RESCHEDULED_BY'=>'par',
);
