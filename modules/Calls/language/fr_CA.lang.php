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
    'LBL_LIST_RELATED_TO' => 'Associé à',
    'LBL_LIST_RELATED_TO_ID' => 'Associé à ID',
    'LBL_LIST_DATE' => 'Date Début',
    'LBL_LIST_DIRECTION' => 'Direction',
    'LBL_SUBJECT' => 'Sujet:',
    'LBL_REMINDER' => 'Notification:',
    'LBL_CONTACT_NAME' => 'Contact:',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_STATUS' => 'Statut:',
    'LBL_DIRECTION' => 'Direction:',
    'LBL_DATE' => 'Date Début:',
    'LBL_DURATION' => 'Durée:',
    'LBL_DURATION_HOURS' => 'Durée en Heures:',
    'LBL_DURATION_MINUTES' => 'Durée en Minutes:',
    'LBL_HOURS_MINUTES' => '(heures/minutes)',
    'LBL_DATE_TIME' => 'Date et Heure Début:',
    'LBL_TIME' => 'Heure Début:',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LNK_NEW_CALL' => 'Planifier Appel',
    'LNK_NEW_MEETING' => 'Planifier Réunion',
    'LNK_CALL_LIST' => 'Voir Appels',
    'LNK_IMPORT_CALLS' => 'Import Appels',
    'ERR_DELETE_RECORD' => 'Un numéro d\'enregistrement doit être spécifié pour supprimer le Compte.',
    'LBL_INVITEE' => 'Invités',
    'LBL_RELATED_TO' => 'Associé À:',
    'LNK_NEW_APPOINTMENT' => 'Planifier Rendez-vous',
    'LBL_SCHEDULING_FORM_TITLE' => 'Planification',
    'LBL_ADD_INVITEE' => 'Ajouter Invités',
    'LBL_NAME' => 'Nom',
    'LBL_FIRST_NAME' => 'Prénom',
    'LBL_LAST_NAME' => 'Nom',
    'LBL_EMAIL' => 'Email',
    'LBL_PHONE' => 'Téléphone',
    'LBL_REMINDER_POPUP' => 'Popup',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Envoyer Email à tous les Invités',
    'LBL_EMAIL_REMINDER' => 'Notification par email',
    'LBL_EMAIL_REMINDER_TIME' => 'Horaire notification par email',
    'LBL_SEND_BUTTON_TITLE' => 'Sauvegarder et Envoyer Invitations',
    'LBL_SEND_BUTTON_LABEL' => 'Envoyer Invitations',
    'LBL_DATE_END' => 'Date de fin',
    'LBL_REMINDER_TIME' => 'Heure de la notification',
    'LBL_EMAIL_REMINDER_SENT' => 'Notification par Email envoyée',
    'LBL_SEARCH_BUTTON' => 'Rechercher',
    'LBL_ADD_BUTTON' => 'Ajouter',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Appels',
    'LNK_SELECT_ACCOUNT' => 'Sélectionner Compte',
    'LNK_NEW_ACCOUNT' => 'Nouveau Compte',
    'LNK_NEW_OPPORTUNITY' => 'Nouvelle Opportunité',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Prospects',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_USERS_SUBPANEL_TITLE' => 'Utilisateurs',
    'LBL_OUTLOOK_ID' => 'ID Outlook',
    'LBL_MEMBER_OF' => 'Membre de',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Notes',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Assigné à',
    'LBL_LIST_MY_CALLS' => 'Mes Appels',
    'LBL_ASSIGNED_TO_NAME' => 'Assigné à',
    'LBL_ASSIGNED_TO_ID' => 'Utilisateur Assigné',
    'NOTICE_DURATION_TIME' => 'La durée doit être supérieure à 0',
    'LBL_CALL_INFORMATION' => 'Vue Globale', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => 'Retirer',
    'LBL_ACCEPT_STATUS' => 'Statut Acceptation',
    'LBL_ACCEPT_LINK' => 'Lien Acceptation',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'Créer Invité',
    'LBL_CREATE_CONTACT' => 'Comme Contact',
    'LBL_CREATE_LEAD' => 'Comme Prospect',
    'LBL_CREATE_AND_ADD' => 'Créer et Ajouter',
    'LBL_CANCEL_CREATE_INVITEE' => 'Annuler',
    'LBL_EMPTY_SEARCH_RESULT' => 'Désolé, aucun résultat trouvé. Veuillez créer un invité ci-dessous.',
    'LBL_NO_ACCESS' => 'Vous n\'avez aucun accès pour créer $module',

    'LBL_REPEAT_TYPE' => 'Répétition Type',
    'LBL_REPEAT_INTERVAL' => 'Répétition Intervalle',
    'LBL_REPEAT_DOW' => 'Répétition Depuis',
    'LBL_REPEAT_UNTIL' => 'Répétition Jusqu\'à',
    'LBL_REPEAT_COUNT' => 'Répétition Occurences',
    'LBL_REPEAT_PARENT_ID' => 'Répétition ID Parent',
    'LBL_RECURRING_SOURCE' => 'Source Récurrence',

    'LBL_SYNCED_RECURRING_MSG' => 'Cet appel est originaire d\'un autre système et a été synchronisé au CRM. Pour apporter des modifications, faites le à l’appel original dans l’autre système. Les modifications apportées dans l’autre système peuvent être synchroniser à cet enregistrement.',

    // for reminders
    'LBL_REMINDERS' => 'Rappels',
    'LBL_REMINDERS_ACTIONS' => 'Actions:',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => 'Envoyer Email aux Invités',
    'LBL_REMINDERS_WHEN' => 'Quand:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Supprimer Rappel',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Ajouter tous les Invités',
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
    'LBL_LIST_DUE_DATE'=>'Date prévue',
    'LBL_RESCHEDULED_BY'=>'par',
);
