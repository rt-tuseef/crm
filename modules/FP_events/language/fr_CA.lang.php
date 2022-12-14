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
    'LBL_ASSIGNED_TO_ID' => 'Id Utilisateur assign??',
    'LBL_ASSIGNED_TO_NAME' => 'Assign?? ??',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Date Cr??ation',
    'LBL_DATE_MODIFIED' => 'Date de modification',
    'LBL_MODIFIED' => 'Modifi?? Par',
    'LBL_MODIFIED_NAME' => 'Modifi?? Par Nom',
    'LBL_CREATED' => 'Cr???? Par',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_DELETED' => 'Supprim??',
    'LBL_NAME' => 'Nom',
    'LBL_CREATED_USER' => 'Cr???? par Utilisateur',
    'LBL_MODIFIED_USER' => 'Modifi?? par Utilisateur',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_EDIT_BUTTON' => 'Modifier',
    'LBL_REMOVE' => 'Retirer',
    'LBL_LIST_FORM_TITLE' => 'Liste ??v??nements',
    'LBL_MODULE_NAME' => '??v??nement',
    'LBL_MODULE_TITLE' => '??v??nement',
    'LBL_HOMEPAGE_TITLE' => 'Mes ??v??nements',
    'LNK_NEW_RECORD' => 'Cr??er ??v??nement',
    'LNK_LIST' => 'Voir ??v??nements',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher ??v??nement',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Voir Historique',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activit??s',
    'LBL_NEW_FORM_TITLE' => 'Nouvel ??v??nement',
    'LBL_LOCATION' => 'Emplacement',
    'LBL_START_DATE' => 'date d??but',
    'LBL_END_DATE' => 'Date/Heure Fin',
    'LBL_BUDGET' => 'Budget',
    'LBL_DATE' => 'Date D??but',
    'LBL_DATE_END' => 'Date Fin',
    'LBL_DURATION' => 'Dur??e',
    'LBL_INVITE_TEMPLATES' => 'Mod??le Email Invitation',
    'LBL_INVITE_PDF' => 'Envoyer Invitations',
    'LBL_EDITVIEW_PANEL1' => 'D??tails ??v??nement',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Participants',
    'LBL_ACCEPT_REDIRECT' => 'URL Redirection Acceptation',
    'LBL_DECLINE_REDIRECT' => 'URL Redirection Refus',
    'LBL_SELECT_DELEGATES' => 'S??lectionner Participants',
    'LBL_SELECT_DELEGATES_TITLE' => 'S??lectionner Participants:-',
    'LBL_SELECT_DELEGATES_TARGET_LIST' => 'Liste Cible',
    'LBL_SELECT_DELEGATES_TARGETS' => 'Cibles',
    'LBL_SELECT_DELEGATES_CONTACTS' => 'Contacts',
    'LBL_SELECT_DELEGATES_LEADS' => 'Prospects',
    'LBL_MANAGE_DELEGATES' => 'Gestion Participants',
    'LBL_MANAGE_DELEGATES_TITLE' => 'Gestion Participants:-',
    'LBL_MANAGE_ACCEPTANCES' => 'Gestion des acceptations',
    'LBL_MANAGE_ACCEPTANCES_TITLE' => 'Gestion des acceptations:-',
    'LBL_MANAGE_ACCEPTANCES_ACCEPTED' => 'Accept??',
    'LBL_MANAGE_ACCEPTANCES_DECLINED' => 'Refus??',
    'LBL_MANAGE_POPUP_ERROR' => 'Aucun d??l??gu?? n\'a ??t?? s??lectionn??.',
    'LBL_MANAGE_DELEGATES_INVITED' => 'Invit??',
    'LBL_MANAGE_DELEGATES_NOT_INVITED' => 'Pas invit??',
    'LBL_MANAGE_DELEGATES_ATTENDED' => 'Pr??sent',
    'LBL_MANAGE_DELEGATES_NOT_ATTENDED' => 'Non Pr??sent',
    'LBL_SUCCESS_MSG' => 'Toutes les invitations ont ??t?? envoy??es avec succ??s.',
    'LBL_ERROR_MSG_1' => 'Tous les contacts li??s ont d??j?? ??t?? invit??s.',
    'LBL_ERROR_MSG_2' => 'L\'envoi des emails d\'invitation ?? ??chou?? ! Veuillez v??rifier vos Param??tres Email.',
    'LBL_ERROR_MSG_3' => 'Plus de 10 emails n\'ont pas pu ??tre envoy??s. Veuillez v??rifier que tous les contacts que vous invitez ont une adresse email valide. (Voir suitecrm.log)',
    'LBL_ERROR_MSG_4' => ' Emails n\'ont pas pu ??tre envoy??s. Veuillez v??rifier que tous les contacts que vous invitez ont une adresse email valide. (Voir suitecrm.log)', // LBL_ERROR_MSG_4 Begins with a number (controller.php line 581) for example 10 emails have failed to send.
    'LBL_ERROR_MSG_5' => 'Mod??le Email Invalide',
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
    'LBL_LIST_INVITE_STATUS_EVENT' => 'Invit??',
    'LBL_LIST_ACCEPT_STATUS_EVENT' => 'Statut',

    'LBL_ACTIVITY_STATUS' => 'Statut Activit??',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE' => '??v??nements',
    // Email links
    'LBL_ACCEPT_LINK' => 'Accepter',
    'LBL_DECLINE_LINK' => 'D??cliner',
    
);
