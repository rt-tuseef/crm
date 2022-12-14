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
    //module
    'LBL_MODULE_NAME' => 'Documents',
    'LBL_MODULE_TITLE' => 'Documents: Accueil',
    'LNK_NEW_DOCUMENT' => 'Cr??er Document',
    'LNK_DOCUMENT_LIST' => 'Liste Documents',
    'LBL_DOC_REV_HEADER' => 'Versions Document',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher Document',
    //vardef labels
    'LBL_NAME' => 'Nom Document',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_CATEGORY' => 'Cat??gorie',
    'LBL_SUBCATEGORY' => 'Sous Cat??gorie',
    'LBL_STATUS' => 'Statut',
    'LBL_CREATED_BY' => 'Cr???? par',
    'LBL_DATE_ENTERED' => 'Date Cr??ation',
    'LBL_DATE_MODIFIED' => 'Date de modification',
    'LBL_DELETED' => 'Supprim??',
    'LBL_MODIFIED' => 'Modifi?? Par ID',
    'LBL_MODIFIED_USER' => 'Modifi?? par',
    'LBL_CREATED' => 'Cr???? par',
    'LBL_REVISIONS' => 'Versions',
    'LBL_RELATED_DOCUMENT_ID' => 'ID Document Connexe',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => 'ID Version Document Connexe',
    'LBL_IS_TEMPLATE' => 'Est un Mod??le',
    'LBL_TEMPLATE_TYPE' => 'Type Document',
    'LBL_ASSIGNED_TO_NAME' => 'Assign?? ??:',
    'LBL_REVISION_NAME' => 'Num??ro Version',
    'LBL_MIME' => 'Type Mime',
    'LBL_REVISION' => 'Version',
    'LBL_DOCUMENT' => 'Document Connexe',
    'LBL_LATEST_REVISION' => 'Derni??re Version',
    'LBL_CHANGE_LOG' => 'Journal Modifications',
    'LBL_ACTIVE_DATE' => 'Date Publication',
    'LBL_EXPIRATION_DATE' => 'Date Expiration',
    'LBL_FILE_EXTENSION' => 'Extension Fichier',
    'LBL_LAST_REV_MIME_TYPE' => 'Derni??re version Type Mime',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Non sp??cifi??',
    'LBL_HOMEPAGE_TITLE' => 'Mes Documents',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'Nouveau Document',
    //document edit and detail view
    'LBL_DOC_NAME' => 'Nom Document:',
    'LBL_FILENAME' => 'Nom Fichier:',
    'LBL_LIST_FILENAME' => 'Fichier',
    'LBL_DOC_VERSION' => 'Version:',
    'LBL_FILE_UPLOAD' => 'Fichier:',

    'LBL_CATEGORY_VALUE' => 'Cat??gorie:',
    'LBL_LIST_CATEGORY' => 'Cat??gorie',
    'LBL_SUBCATEGORY_VALUE' => 'Sous Cat??gorie:',
    'LBL_DOC_STATUS' => 'Statut:',
    'LBL_LAST_REV_CREATOR' => 'Version Cr????e Par:',
    'LBL_LASTEST_REVISION_NAME' => 'Nom Derni??re Version:',
    'LBL_SELECTED_REVISION_NAME' => 'Nom version s??lectionn??e:',
    'LBL_CONTRACT_STATUS' => 'Statut Contrat:',
    'LBL_CONTRACT_NAME' => 'Nom Contrat:',
    'LBL_DET_RELATED_DOCUMENT' => 'Document Connexe:',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "Version Document Connexe:",
    'LBL_DET_IS_TEMPLATE' => 'Mod??le? :',
    'LBL_DET_TEMPLATE_TYPE' => 'Type Document:',
    'LBL_DOC_DESCRIPTION' => 'Description:',
    'LBL_DOC_ACTIVE_DATE' => 'Date Publication:',
    'LBL_DOC_EXP_DATE' => 'Date Expiration:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'Liste Document',
    'LBL_LIST_DOCUMENT' => 'Document',
    'LBL_LIST_SUBCATEGORY' => 'Sous Cat??gorie',
    'LBL_LIST_REVISION' => 'Version',
    'LBL_LIST_LAST_REV_CREATOR' => 'Publi?? par',
    'LBL_LIST_LAST_REV_DATE' => 'Date Version',
    'LBL_LIST_VIEW_DOCUMENT' => 'Afficher',
    'LBL_LIST_ACTIVE_DATE' => 'Date Publication',
    'LBL_LIST_EXP_DATE' => 'Date Expiration',
    'LBL_LIST_STATUS' => 'Statut',
    'LBL_LINKED_ID' => 'Id li??',
    'LBL_SELECTED_REVISION_ID' => 'Id Version s??lectionn??e',
    'LBL_LATEST_REVISION_ID' => 'Id Derni??re Version',
    'LBL_SELECTED_REVISION_FILENAME' => 'Version nom de fichier s??lectionn??',
    'LBL_FILE_URL' => 'URL Fichier',

    //document search form.
    'LBL_SF_CATEGORY' => 'Cat??gorie:',
    'LBL_SF_SUBCATEGORY' => 'Sous Cat??gorie:',

    'DEF_CREATE_LOG' => 'Document cr????',

    //error messages
    'ERR_DOC_NAME' => 'Nom Document',
    'ERR_DOC_ACTIVE_DATE' => 'Date Publication',
    'ERR_FILENAME' => 'Nom Fichier',
    'ERR_DOC_VERSION' => 'Version Document',
    'ERR_DELETE_CONFIRM' => 'Voulez vous supprimer cette version du document?',
    'ERR_DELETE_LATEST_VERSION' => 'Vous n\'??tes pas autoris?? ?? supprimer la derni??re version d\'un document.',
    'LNK_NEW_MAIL_MERGE' => 'Publipostage',
    'ERR_MISSING_FILE' => 'Ce document ne contient pas de fichier, probablement ?? cause d\'une erreur lors du transfert. Veuillez essayer de nouveau ou contacter votre administrateur.',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'Nom',
    'LBL_LIST_IS_TEMPLATE' => 'Mod??le?',
    'LBL_LIST_TEMPLATE_TYPE' => 'Type Document',
    'LBL_LAST_REV_CREATE_DATE' => 'Date Derni??re Version Cr????e',
    'LBL_CONTRACTS' => 'Contrats',
    'LBL_CREATED_USER' => 'Cr???? par',
    'LBL_DOCUMENT_INFORMATION' => 'Vue Globale', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_DOC_ID' => 'ID Document Source',
    'LBL_DOC_TYPE' => 'Source',
    'LBL_DOC_TYPE_POPUP' => 'S??lectionner une source ?? laquelle ce document sera t??l??charg??<br> et d\'o?? il sera disponible.',
    'LBL_DOC_URL' => 'URL Document Source',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Nom Fichier',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'Les 20 premiers fichiers les plus r??cemment modifi??s sont affich??s dans l\'ordre d??croissant ci-dessous. Utilisez la recherche pour trouver d\'autres fichiers.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Nom Fichier',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'L\'utilisateur tente d\'acc??der ?? une API externe invalide ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'La v??rification du login a ??chou?? pour l\'API externe ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Comptes',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Opportunit??s',
    'LBL_CASES_SUBPANEL_TITLE' => 'Tickets',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bogues',

    'LBL_AOS_CONTRACTS' => 'Contrats',
);
