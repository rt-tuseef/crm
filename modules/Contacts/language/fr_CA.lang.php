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
    'ERR_DELETE_RECORD' => 'Indiquez le num??ro d\'enregistrement pour supprimer le contact.',
    'LBL_ACCOUNT_ID' => 'Compte ID:',
    'LBL_ACCOUNT_NAME' => 'Nom Compte:',
    'LBL_CAMPAIGN' => 'Campagne:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activit??s',
    'LBL_ADDRESS_INFORMATION' => 'Information Adresse',
    'LBL_ALT_ADDRESS_CITY' => 'Adresse secondaire - Ville:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Adresse secondaire - Pays:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Adresse Secondaire - Code Postal:',
    'LBL_ALT_ADDRESS_STATE' => 'Adresse secondaire - Province:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Adresse secondaire - Rue 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Adresse secondaire - Rue 3:',
    'LBL_ALT_ADDRESS_STREET' => 'Adresse secondaire - Rue:',
    'LBL_ALTERNATE_ADDRESS' => 'Autre Adresse:',
    'LBL_ALT_ADDRESS' => 'Autre Adresse:',
    'LBL_ANY_ADDRESS' => 'Toutes les Adresses:',
    'LBL_ANY_EMAIL' => 'Tous les Emails:',
    'LBL_ANY_PHONE' => 'Tous les T??l??phones:',
    'LBL_ASSIGNED_TO_NAME' => 'Assign?? ??:',
    'LBL_ASSIGNED_TO_ID' => 'Utilisateur Assign??',
    'LBL_ASSISTANT_PHONE' => 'T??l??phone Assistant:',
    'LBL_ASSISTANT' => 'Assistant:',
    'LBL_BIRTHDATE' => 'Date de Naissance :',
    'LBL_CITY' => 'Ville:',
    'LBL_CAMPAIGN_ID' => 'Campagne ID',
    'LBL_CONTACT_INFORMATION' => 'Vue Globale', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Nom Contact:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Contact-Opportunit??:',
    'LBL_CONTACT_ROLE' => 'R??le:',
    'LBL_CONTACT' => 'Contact:',
    'LBL_COUNTRY' => 'Pays:',
    'LBL_CREATED_ACCOUNT' => 'Nouveau Compte cr????',
    'LBL_CREATED_CALL' => 'Nouvel Appel cr????',
    'LBL_CREATED_CONTACT' => 'Nouveau Contact cr????',
    'LBL_CREATED_MEETING' => 'Nouvelle R??union cr????e',
    'LBL_CREATED_OPPORTUNITY' => 'Nouvelle Opportunit?? cr????e',
    'LBL_DATE_MODIFIED' => 'Date Modification:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Contacts',
    'LBL_DEPARTMENT' => 'Service:',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Sup??rieur Imm??diat',
    'LBL_DO_NOT_CALL' => 'Ne pas Appeler:',
    'LBL_DUPLICATE' => 'Doublon Contacts Possible',
    'LBL_EMAIL_ADDRESS' => 'Adresse Email:',
    'LBL_EMAIL_OPT_OUT' => 'Email D??sinscription:',
    'LBL_EXISTING_ACCOUNT' => 'Compte existant utilis??',
    'LBL_EXISTING_CONTACT' => 'Contact existant utilis??',
    'LBL_EXISTING_OPPORTUNITY' => 'Opportunit?? existante utilis??e',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Pr??nom:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historique',
    'LBL_HOME_PHONE' => 'Accueil:',
    'LBL_ID' => 'ID:',
    'LBL_IMPORT_VCARD' => 'Importer vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Cr??er automatiquement un nouveau contact en important une vCard de votre fichier syst??me.',
    'LBL_INVALID_EMAIL' => 'Email Invalide:',
    'LBL_INVITEE' => 'Sup??rieur Imm??diat',
    'LBL_LAST_NAME' => 'Nom de Famille:',
    'LBL_LEAD_SOURCE' => 'Source Prospect:',
    'LBL_LIST_ACCEPT_STATUS' => 'Statut Acceptation',
    'LBL_LIST_ACCOUNT_NAME' => 'Nom Compte',
    'LBL_LIST_CONTACT_NAME' => 'Nom Contact',
    'LBL_LIST_CONTACT_ROLE' => 'R??le',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_FIRST_NAME' => 'Pr??nom',
    'LBL_LIST_FORM_TITLE' => 'Liste Contact',
    'LBL_LIST_LAST_NAME' => 'Nom de Famille',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_LIST_PHONE' => 'T??l??phone',
    'LBL_LIST_TITLE' => 'Fonction',
    'LBL_MOBILE_PHONE' => 'T??l??phone Mobile:',
    'LBL_MODIFIED' => 'Modifi?? Par:',
    'LBL_MODULE_NAME' => 'Contacts',
    'LBL_MODULE_TITLE' => 'Contacts: Accueil',
    'LBL_NAME' => 'Nom:',
    'LBL_NEW_FORM_TITLE' => 'Nouveau Contact',
    'LBL_NOTE_SUBJECT' => 'Sujet de la Note',
    'LBL_OFFICE_PHONE' => 'T??l??phone:',
    'LBL_OPP_NAME' => 'Nom Opportunit??:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'R??le Opportunit?? ID:',
    'LBL_OPPORTUNITY_ROLE' => 'R??le Opportunit??',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Autre Email:',
    'LBL_OTHER_PHONE' => 'Autre T??l??phone:',
    'LBL_PHONE' => 'T??l??phone:',
    'LBL_PORTAL_APP' => 'Application Portail:',
    'LBL_PORTAL_INFORMATION' => 'Information Portail',
    'LBL_PORTAL_NAME' => 'Nom Portail:',
    'LBL_STREET' => 'Rue',
    'LBL_POSTAL_CODE' => 'Code Postal:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Adresse principale - Ville:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Adresse principale - Pays:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Adresse principale - Code Postal:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Adresse principale - Province:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Adresse principale - Rue 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Adresse principale - Rue 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Adresse principale - Rue:',
    'LBL_PRIMARY_ADDRESS' => 'Adresse Principale:',
    'LBL_PRODUCTS_TITLE' => 'Produits',
    'LBL_REPORTS_TO_ID' => 'ID Sup??rieur Imm??diat:',
    'LBL_REPORTS_TO' => 'Sup??rieur Imm??diat:',
    'LBL_RESOURCE_NAME' => 'Nom Resource',
    'LBL_SALUTATION' => 'Civilit??:',
    'LBL_SAVE_CONTACT' => 'Sauvegarder Contact',
    'LBL_SEARCH_FORM_TITLE' => 'Recherche Contact',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'S??lectionner Contacts Coch??s',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'S??lectionner Contacts Coch??s',
    'LBL_STATE' => 'Province ou R??gion:',
    'LBL_SYNC_CONTACT' => 'Synchroniser vers Outlook&reg;:',
    'LBL_PROSPECT_LIST' => 'Liste Prospect',
    'LBL_TITLE' => 'Intitul?? du poste :',
    'LNK_CONTACT_LIST' => 'Voir Contacts',
    'LNK_IMPORT_VCARD' => 'Cr??er Contact de vCard',
    'LNK_NEW_ACCOUNT' => 'Cr??er Compte',
    'LNK_NEW_APPOINTMENT' => 'Cr??er Rendez-vous',
    'LNK_NEW_CALL' => 'Planifier Appel',
    'LNK_NEW_CASE' => 'Cr??er Ticket',
    'LNK_NEW_CONTACT' => 'Cr??er Contact',
    'LNK_NEW_EMAIL' => 'Archiver Email',
    'LNK_NEW_MEETING' => 'Planifier R??union',
    'LNK_NEW_NOTE' => 'Cr??er Note',
    'LNK_NEW_OPPORTUNITY' => 'Cr??er Opportunit??',
    'LNK_NEW_TASK' => 'Cr??er T??che',
    'LNK_SELECT_ACCOUNT' => "Choisir Compte",
    'NTC_DELETE_CONFIRMATION' => 'Etes vous s??r de vouloir supprimer cet enregistrement ?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Cr??er une opportunit?? n??cessite un Compte associ??.\n Merci de le cr??er ou de le s??lectionner.',
    'NTC_REMOVE_CONFIRMATION' => 'Etes vous s??r de vouloir supprimer ce contact de ce ticket?',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Prospects',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Opportunit??s',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documents',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Copier vers Adresse Principale',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Copier vers Autre Adresse',

    'LBL_CASES_SUBPANEL_TITLE' => 'Tickets',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bogues',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projets',
    'LBL_PROJECTS_RESOURCES' => 'Ressources Projets',
    'LBL_CAMPAIGNS' => 'Campagnes',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Campagnes',
    'LBL_LIST_CITY' => 'Ville',
    'LBL_LIST_STATE' => 'Province',
    'LBL_HOMEPAGE_TITLE' => 'Mes Contacts',
    'LBL_OPPORTUNITIES' => 'Opportunit??s',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projets',
    'LNK_IMPORT_CONTACTS' => 'Importer Contacts',

    // SNIP
    'LBL_USER_SYNC' => 'Synchro Utilisateur',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => '??v??nements',

    'LBL_AOP_CASE_UPDATES' => 'Mises ?? jour Ticket',
    'LBL_CREATE_PORTAL_USER' => 'Cr??er Portail Utilisateur',
    'LBL_ENABLE_PORTAL_USER' => 'Activer Portail Utilisateur',
    'LBL_DISABLE_PORTAL_USER' => 'D??sactiver Portail Utilisateur',
    'LBL_CREATE_PORTAL_USER_FAILED' => '??chec de cr??ation du portail utilisateur',
    'LBL_ENABLE_PORTAL_USER_FAILED' => '??chec d\'activation du portail utilisateur',
    'LBL_DISABLE_PORTAL_USER_FAILED' => '??chec de d??sactivation du portail utilisateur',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Portail utilisateur cr????e',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Portail utilisateur activ??',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Portail utilisateur d??sactiv??',
    'LBL_NO_JOOMLA_URL' => 'Aucun URL sp??cifi??e pour le portail',
    'LBL_PORTAL_USER_TYPE' => 'Type Portail Utilisateur',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Compte D??sactiv??',
    'LBL_JOOMLA_ACCOUNT_ID' => 'ID Compte Joumla',

    'LBL_AOS_CONTRACTS' => 'Contrats',
    'LBL_AOS_INVOICES' => 'Factures',
    'LBL_AOS_QUOTES' => 'Devis',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Contacts Projet depuis le nom du Projet',
    'LBL_LAST_MEETING' => 'Votre derni??re interaction a ??t?? une r??union le :',
    'LBL_LAST_CALL' => 'Votre derni??re interaction a ??t?? un appel le :',
    'LBL_LAST_EMAIL' => 'Votre derni??re interaction a ??t?? un email sur :',
    'LBL_NO_INTERACTION' => 'Vous n\'avez pas encore interagi avec ce contact.',
);
