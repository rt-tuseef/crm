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
    'ERR_DELETE_RECORD' => 'Vous devez sp??cifier un num??ro d\'enregistrement pour supprimer le compte.',
    'LBL_ACCOUNT_ID' => 'Compte ID:',
    'LBL_CASE_ID' => 'Ticket ID:',
    'LBL_CLOSE' => 'Fermer:',
    'LBL_CONTACT_ID' => 'Contact ID:',
    'LBL_CONTACT_NAME' => 'Contact:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Notes',
    'LBL_DESCRIPTION' => 'Note',
    'LBL_EMAIL_ADDRESS' => 'Adresse Email:',
    'LBL_EMAIL_ATTACHMENT' => 'Pi??ce jointe',
    'LBL_FILE_MIME_TYPE' => 'Type Mime',
    'LBL_FILE_URL' => 'URL Fichier',
    'LBL_FILENAME' => 'Pi??ce jointe:',
    'LBL_LEAD_ID' => 'Prospect ID:',
    'LBL_LIST_CONTACT_NAME' => 'Contact',
    'LBL_LIST_DATE_MODIFIED' => 'Derni??re Modification',
    'LBL_LIST_FILENAME' => 'Pi??ce jointe',
    'LBL_LIST_FORM_TITLE' => 'Liste Note',
    'LBL_LIST_RELATED_TO' => 'Associ?? ??',
    'LBL_LIST_SUBJECT' => 'Sujet',
    'LBL_LIST_STATUS' => 'Statut',
    'LBL_LIST_CONTACT' => 'Contact',
    'LBL_MODULE_NAME' => 'Notes',
    'LBL_MODULE_TITLE' => 'Notes: Acceuil',
    'LBL_NEW_FORM_TITLE' => 'Cr??er Note ou Ajouter Pi??ces jointes',
    'LBL_NOTE_STATUS' => 'Note',
    'LBL_NOTE_SUBJECT' => 'Sujet:',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Pi??ces jointe',
    'LBL_NOTE' => 'Note:',
    'LBL_OPPORTUNITY_ID' => 'Opportunit?? ID:',
    'LBL_PARENT_ID' => 'Parent ID:',
    'LBL_PARENT_TYPE' => 'Type Parent',
    'LBL_PHONE' => 'T??l??phone:',
    'LBL_PORTAL_FLAG' => 'Afficher dans Portail?',
    'LBL_EMBED_FLAG' => 'Int??grer dans Email?',
    'LBL_PRODUCT_ID' => 'Produit ID:',
    'LBL_QUOTE_ID' => 'Devis ID:',
    'LBL_RELATED_TO' => 'Associ??s ??:',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher Note',
    'LBL_STATUS' => 'Statut',
    'LBL_SUBJECT' => 'Sujet:',
    'LNK_IMPORT_NOTES' => 'Importer Notes',
    'LNK_NEW_NOTE' => 'Cr??er Note ou Pi??ce jointe',
    'LNK_NOTE_LIST' => 'Voir Notes',
    'LBL_MEMBER_OF' => 'Membre de:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Utilisateur Assign??',
    'LBL_REMOVING_ATTACHMENT' => 'Suppression pi??ce jointe...',
    'ERR_REMOVING_ATTACHMENT' => 'Impossible de supprimer la pi??ce jointe...',
    'LBL_CREATED_BY' => 'Cr???? Par',
    'LBL_MODIFIED_BY' => 'Modifi?? Par',
    'LBL_SEND_ANYWAYS' => 'Cet email n\'a pas de sujet. Envoyer / enregistrer quand m??me?',
    'LBL_NOTE_INFORMATION' => 'Vue Globale', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MY_NOTES_DASHLETNAME' => 'Mes Notes',
    'LBL_EDITLAYOUT' => 'Modifier Mise en page' /*for 508 compliance fix*/,
    //For export labels
    'LBL_FIRST_NAME' => 'Pr??nom',
    'LBL_LAST_NAME' => 'Nom de Famille',
    'LBL_DATE_ENTERED' => 'Date Cr??ation',
    'LBL_DATE_MODIFIED' => 'Date de modification',
    'LBL_DELETED' => 'Supprim??',
    'LBL_FILE_CONTENTS' => 'Contenu du fichier',
);
