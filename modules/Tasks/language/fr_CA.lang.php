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
    'LBL_MODULE_NAME' => 'T??ches',
    'LBL_MODULE_TITLE' => ' T??ches: Accueil',
    'LBL_SEARCH_FORM_TITLE' => ' Recherche T??ches',
    'LBL_LIST_FORM_TITLE' => ' Liste T??ches',
    'LBL_NEW_FORM_TITLE' => ' Cr??er T??ches',
    'LBL_LIST_CLOSE' => 'Fermer',
    'LBL_LIST_SUBJECT' => 'Sujet',
    'LBL_LIST_CONTACT' => 'Contact',
    'LBL_LIST_PRIORITY' => 'Priorit??',
    'LBL_LIST_RELATED_TO' => 'Relatif ??',
    'LBL_LIST_DUE_DATE' => 'Date ??ch??ance',
    'LBL_LIST_DUE_TIME' => 'Heure ??ch??ance',
    'LBL_SUBJECT' => 'Sujet:',
    'LBL_STATUS' => 'Statut:',
    'LBL_DUE_DATE' => 'Date ??ch??ance:',
    'LBL_DUE_TIME' => 'Heure ??ch??ance:',
    'LBL_PRIORITY' => 'Priorit??:',
    'LBL_DUE_DATE_AND_TIME' => 'Date & Heure ??ch??ance:',
    'LBL_START_DATE_AND_TIME' => 'Date et Heure d??but:',
    'LBL_START_DATE' => 'Date de d??but:',
    'LBL_LIST_START_DATE' => 'Date de d??but',
    'LBL_START_TIME' => 'Heure de d??but:',
    'DATE_FORMAT' => '(aaaa-mm-jj)',
    'LBL_DAYS_UNTIL_DUE_TASK' => 'Cette t??che doit ??tre cl??tur??e le',
    'LBL_DAYS_OVERDUE' => 'Cette t??che est en retard de',
    'LBL_TASK_COMPLETED' => 'Cette t??che est termin??e',
    'LBL_NONE' => 'Ind??fini',
    'LBL_CONTACT' => 'Contact:',
    'LBL_EMAIL_ADDRESS' => 'Adresse Email :',
    'LBL_PHONE' => 'T??l??phone:',
    'LBL_EMAIL' => 'Adresse Email:',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_NAME' => 'Nom:',
    'LBL_CONTACT_NAME' => 'Nom Contact ',
    'LBL_LIST_STATUS' => 'Statut',
    'LBL_DATE_DUE_FLAG' => 'Pas de date d\'??ch??ance',
    'LBL_DATE_START_FLAG' => 'Aucune date de d??but',
    'LBL_LIST_MY_TASKS' => 'Mes T??ches Ouvertes',
    'LNK_NEW_TASK' => 'Cr??er T??che',
    'LNK_TASK_LIST' => 'Voir T??ches',
    'LNK_IMPORT_TASKS' => 'Import T??che',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Utilisateur assign??',
    'LBL_ASSIGNED_TO_NAME' => 'Assign?? ?? :',
    'LBL_LIST_DATE_MODIFIED' => 'Date Modification',
    'LBL_CONTACT_ID' => 'ID Contact:',
    'LBL_PARENT_ID' => 'ID Parent:',
    'LBL_CONTACT_PHONE' => 'T??l??phone Contact:',
    'LBL_PARENT_TYPE' => 'Type Parent:',
    'LBL_TASK_INFORMATION' => 'Vue Globale', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EDITLAYOUT' => 'Modifier Mise en page' /*for 508 compliance fix*/,
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Notes',
    //For export labels
    'LBL_DATE_DUE' => 'Date ??ch??ance',
    'LBL_RELATED_TO' => 'Relatif ??:',
);
