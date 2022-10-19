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
    'LBL_ASSIGNED_TO_ID' => 'Id Utilisateur assigné',
    'LBL_ASSIGNED_TO_NAME' => 'Assigné à',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Date Création',
    'LBL_DATE_MODIFIED' => 'Date de modification',
    'LBL_MODIFIED' => 'Modifié Par',
    'LBL_MODIFIED_NAME' => 'Modifié Par Nom',
    'LBL_CREATED' => 'Créé Par',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_DELETED' => 'Supprimé',
    'LBL_NAME' => 'Nom',
    'LBL_CREATED_USER' => 'Créé par Utilisateur',
    'LBL_MODIFIED_USER' => 'Modifié par Utilisateur',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_EDIT_BUTTON' => 'Modifier',
    'LBL_REMOVE' => 'Retirer',
    'LBL_LIST_FORM_TITLE' => 'Liste Événements',
    'LBL_MODULE_NAME' => 'Événement',
    'LBL_MODULE_TITLE' => 'Événement',
    'LBL_HOMEPAGE_TITLE' => 'Mes Événements',
    'LNK_NEW_RECORD' => 'Créer Événement',
    'LNK_LIST' => 'Voir Événements',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher Événement',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Voir Historique',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activités',
    'LBL_NEW_FORM_TITLE' => 'Nouvel Événement',
    'LBL_LOCATION' => 'Emplacement',
    'LBL_START_DATE' => 'date début',
    'LBL_END_DATE' => 'Date/Heure Fin',
    'LBL_BUDGET' => 'Budget',
    'LBL_DATE' => 'Date Début',
    'LBL_DATE_END' => 'Date Fin',
    'LBL_DURATION' => 'Durée',
    'LBL_INVITE_TEMPLATES' => 'Modèle Email Invitation',
    'LBL_INVITE_PDF' => 'Envoyer Invitations',
    'LBL_EDITVIEW_PANEL1' => 'Détails Événement',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Participants',
    'LBL_ACCEPT_REDIRECT' => 'URL Redirection Acceptation',
    'LBL_DECLINE_REDIRECT' => 'URL Redirection Refus',
    'LBL_SELECT_DELEGATES' => 'Sélectionner Participants',
    'LBL_SELECT_DELEGATES_TITLE' => 'Sélectionner Participants:-',
    'LBL_SELECT_DELEGATES_TARGET_LIST' => 'Liste Cible',
    'LBL_SELECT_DELEGATES_TARGETS' => 'Cibles',
    'LBL_SELECT_DELEGATES_CONTACTS' => 'Contacts',
    'LBL_SELECT_DELEGATES_LEADS' => 'Prospects',
    'LBL_MANAGE_DELEGATES' => 'Gestion Participants',
    'LBL_MANAGE_DELEGATES_TITLE' => 'Gestion Participants:-',
    'LBL_MANAGE_ACCEPTANCES' => 'Gestion des acceptations',
    'LBL_MANAGE_ACCEPTANCES_TITLE' => 'Gestion des acceptations:-',
    'LBL_MANAGE_ACCEPTANCES_ACCEPTED' => 'Accepté',
    'LBL_MANAGE_ACCEPTANCES_DECLINED' => 'Refusé',
    'LBL_MANAGE_POPUP_ERROR' => 'Aucun délégué n\'a été sélectionné.',
    'LBL_MANAGE_DELEGATES_INVITED' => 'Invité',
    'LBL_MANAGE_DELEGATES_NOT_INVITED' => 'Pas invité',
    'LBL_MANAGE_DELEGATES_ATTENDED' => 'Présent',
    'LBL_MANAGE_DELEGATES_NOT_ATTENDED' => 'Non Présent',
    'LBL_SUCCESS_MSG' => 'Toutes les invitations ont été envoyées avec succès.',
    'LBL_ERROR_MSG_1' => 'Tous les contacts liés ont déjà été invités.',
    'LBL_ERROR_MSG_2' => 'L\'envoi des emails d\'invitation à échoué ! Veuillez vérifier vos Paramètres Email.',
    'LBL_ERROR_MSG_3' => 'Plus de 10 emails n\'ont pas pu être envoyés. Veuillez vérifier que tous les contacts que vous invitez ont une adresse email valide. (Voir suitecrm.log)',
    'LBL_ERROR_MSG_4' => ' Emails n\'ont pas pu être envoyés. Veuillez vérifier que tous les contacts que vous invitez ont une adresse email valide. (Voir suitecrm.log)', // LBL_ERROR_MSG_4 Begins with a number (controller.php line 581) for example 10 emails have failed to send.
    'LBL_ERROR_MSG_5' => 'Modèle Email Invalide',
    'LBL_EMAIL_INVITE' => 'Email Invitation',

    'LBL_FP_EVENTS_CONTACTS_FROM_CONTACTS_TITLE' => 'Contacts',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENT_LOCATIONS_TITLE' => 'Emplacements',
    'LBL_FP_EVENTS_LEADS_1_FROM_LEADS_TITLE' => 'Prospects',
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_PROSPECTS_TITLE' => 'Cibles',

    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_FP_EVENTS_FP_EVENT_DELEGATES_1_FROM_FP_EVENT_DELEGATES_TITLE' => 'Participants',

    // Attendance report
    'LBL_CONTACT_NAME' => 'Nom',
    'LBL_ACCOUNT_NAME' => 'Compagnie',
    'LBL_SIGNATURE' => 'Signature',
    // contacts/leads/targets subpanels
    'LBL_LIST_INVITE_STATUS_EVENT' => 'Invité',
    'LBL_LIST_ACCEPT_STATUS_EVENT' => 'Statut',

    'LBL_ACTIVITY_STATUS' => 'Statut Activité',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE' => 'Événements',
    // Email links
    'LBL_ACCEPT_LINK' => 'Accepter',
    'LBL_DECLINE_LINK' => 'Décliner',
    
);
