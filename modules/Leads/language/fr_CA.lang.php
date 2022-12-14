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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
    //END DON'T CONVERT

    'ERR_DELETE_RECORD' => 'Un num??ro d\'enregistrement doit ??tre sp??cifi?? pour supprimer le prospect.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Description Compte',
    'LBL_ACCOUNT_ID' => 'ID Compte',
    'LBL_ACCOUNT_NAME' => 'Nom Compte:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activit??s',
    'LBL_ADDRESS_INFORMATION' => 'Information Adresse',
    'LBL_ALT_ADDRESS_CITY' => 'Adresse secondaire - Ville',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Adresse secondaire - Pays',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Adresse secondaire - Code Postal',
    'LBL_ALT_ADDRESS_STATE' => 'Adresse secondaire - Province',
    'LBL_ALT_ADDRESS_STREET_2' => 'Adresse secondaire - Rue 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'Adresse secondaire - Rue 3',
    'LBL_ALT_ADDRESS_STREET' => 'Adresse secondaire - Rue',
    'LBL_ALTERNATE_ADDRESS' => 'Autre Adresse:',
    'LBL_ALT_ADDRESS' => 'Autre Adresse:',
    'LBL_ANY_ADDRESS' => 'Toutes les Adresses:',
    'LBL_ANY_EMAIL' => 'Tous les Emails:',
    'LBL_ANY_PHONE' => 'Tous les T??l??phone:',
    'LBL_ASSIGNED_TO_NAME' => 'Assign?? ??',
    'LBL_ASSIGNED_TO_ID' => 'Utilisateur Assign??:',
    'LBL_CITY' => 'Ville:',
    'LBL_CONTACT_ID' => 'ID Contact',
    'LBL_CONTACT_INFORMATION' => 'Vue Globale', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Nom Prospect:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Prospect-Opportunit??:',
    'LBL_CONTACT_ROLE' => 'R??le:',
    'LBL_CONTACT' => 'Prospect:',
    'LBL_CONVERTED_ACCOUNT' => 'Compte Converti:',
    'LBL_CONVERTED_CONTACT' => 'Contact Converti:',
    'LBL_CONVERTED_OPP' => 'Opportunit?? Convertie:',
    'LBL_CONVERTED' => 'Converti',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Convertir Prospect',
    'LBL_CONVERTLEAD' => 'Convertir Prospect',
    'LBL_CONVERTLEAD_WARNING' => 'Attention : Le statut du Prospect que vous souhaitez convertir est "Converti". Un contact et/ou un compte ont sans doute d??ja ??t?? cr????s ?? partir des informations de ce Prospect. Si vous souhaitez tout de m??me convertir ce Prospect, cliquez sur "sauvegarder". Sinon cliquez sur "annuler" pour retourner sur la page pr??c??dente.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => ' Contact Possible: ',
    'LBL_COUNTRY' => 'Pays:',
    'LBL_CREATED_NEW' => 'Cr??ation',
    'LBL_CREATED_ACCOUNT' => 'Nouveau Compte Cr????',
    'LBL_CREATED_CALL' => 'Nouvel Appel Cr????',
    'LBL_CREATED_CONTACT' => 'Nouveau Contact Cr????',
    'LBL_CREATED_MEETING' => 'Nouvelle R??union Cr????e',
    'LBL_CREATED_OPPORTUNITY' => 'Nouvelle Opportunit?? Cr????e',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Prospects',
    'LBL_DEPARTMENT' => 'Service:',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_DO_NOT_CALL' => 'Ne pas appeler:',
    'LBL_DUPLICATE' => 'Prospects Similaires',
    'LBL_EMAIL_ADDRESS' => 'Adresse Email:',
    'LBL_EMAIL_OPT_OUT' => 'Email D??sinscription:',
    'LBL_EXISTING_ACCOUNT' => 'Compte existant utilis??',
    'LBL_EXISTING_CONTACT' => 'Contact existant utilis??',
    'LBL_EXISTING_OPPORTUNITY' => 'Opportunit?? existante utilis??e',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Pr??nom:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historique',
    'LBL_HOME_PHONE' => 'T??l??phone (domicile):',
    'LBL_IMPORT_VCARD' => 'Importer vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Cr??er automatiquement un nouveau Prospect par import de vCard depuis votre syst??me.',
    'LBL_INVALID_EMAIL' => 'Email Invalide:',
    'LBL_INVITEE' => 'Sup??rieur Imm??diat',
    'LBL_LAST_NAME' => 'Nom de Famille:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Description Source Prospect:',
    'LBL_LEAD_SOURCE' => 'Source Prospect:',
    'LBL_LIST_ACCEPT_STATUS' => 'Statut Acceptation',
    'LBL_LIST_ACCOUNT_NAME' => 'Nom Compte',
    'LBL_LIST_CONTACT_NAME' => 'Nom Prospect',
    'LBL_LIST_CONTACT_ROLE' => 'R??le',
    'LBL_LIST_DATE_ENTERED' => 'Date Cr??ation',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_FIRST_NAME' => 'Pr??nom',
    'LBL_LIST_FORM_TITLE' => 'Liste Prospects',
    'LBL_LIST_LAST_NAME' => 'Nom de Famille',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Description Source Prospect',
    'LBL_LIST_LEAD_SOURCE' => 'Source Prospect',
    'LBL_LIST_MY_LEADS' => 'Mes Prospects',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_LIST_PHONE' => 'Telephone Bureau',
    'LBL_LIST_REFERED_BY' => 'R??f??r?? Par',
    'LBL_LIST_STATUS' => 'Statut',
    'LBL_LIST_TITLE' => 'Fonction',
    'LBL_MOBILE_PHONE' => 'T??l??phone Cellulaire:',
    'LBL_MODULE_NAME' => 'Prospects',
    'LBL_MODULE_TITLE' => 'Prospect: Accueil',
    'LBL_NAME' => 'Nom:',
    'LBL_NEW_FORM_TITLE' => 'Nouveau Prospect',
    'LBL_OFFICE_PHONE' => 'T??l??phone:',
    'LBL_OPP_NAME' => 'Nom Opportunit??:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Montant Opportunit??:',
    'LBL_OPPORTUNITY_ID' => 'Opportunit?? ID',
    'LBL_OPPORTUNITY_NAME' => 'Nom Opportunit??:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Email Autre:',
    'LBL_OTHER_PHONE' => 'T??l??phone Autre:',
    'LBL_PHONE' => 'T??l??phone:',
    'LBL_PORTAL_APP' => 'Application Portail',
    'LBL_PORTAL_INFORMATION' => 'Information Portail',
    'LBL_PORTAL_NAME' => 'Nom Portail:',
    'LBL_POSTAL_CODE' => 'Code Postal:',
    'LBL_STREET' => 'Rue',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Adresse principale - Ville',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Adresse principale - Pays',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Adresse principale - Code Postal',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Adresse principale - Province',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Adresse principale - Rue 2',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Adresse principale - Rue 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Adresse principale - Rue',
    'LBL_PRIMARY_ADDRESS' => 'Adresse Principale:',
    'LBL_REFERED_BY' => 'R??f??r?? Par:',
    'LBL_REPORTS_TO_ID' => 'ID Sup??rieur Imm??diat',
    'LBL_REPORTS_TO' => 'Sup??rieur Imm??diat:',
    'LBL_SALUTATION' => 'Civilit??',
    'LBL_MODIFIED' => 'Modifi?? Par',
    'LBL_CREATED' => 'Cr???? Par',
    'LBL_SEARCH_FORM_TITLE' => 'Recherche Prospect',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'S??lectionner Prospects Coch??s',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'S??lectionner Prospects Coch??s',
    'LBL_STATE' => 'Province ou R??gion:',
    'LBL_STATUS_DESCRIPTION' => 'Description Statut:',
    'LBL_STATUS' => 'Statut:',
    'LBL_TITLE' => 'Intitul?? du poste :',
    'LNK_IMPORT_VCARD' => 'Importer vCard',
    'LNK_LEAD_LIST' => 'Voir Prospects',
    'LNK_NEW_ACCOUNT' => 'Cr??er Compte',
    'LNK_NEW_APPOINTMENT' => 'Planifier Rendez-vous',
    'LNK_NEW_CONTACT' => 'Cr??er Contact',
    'LNK_NEW_LEAD' => 'Cr??er Prospect',
    'LNK_NEW_NOTE' => 'Cr??er Note',
    'LNK_NEW_TASK' => 'Cr??er T??che',
    'LNK_NEW_CASE' => 'Cr??er Ticket',
    'LNK_NEW_CALL' => 'Planifier Appel',
    'LNK_NEW_MEETING' => 'Planifier R??union',
    'LNK_NEW_OPPORTUNITY' => 'Cr??er Opportunit??',
    'LNK_SELECT_ACCOUNTS' => ' <b>OU</b> S??lectionner Compte',
    'LNK_SELECT_CONTACTS' => ' <b>OU</b> S??lectionner Contact',
    'NTC_DELETE_CONFIRMATION' => 'Etes vous s??r de vouloir supprimer cet enregistrement ?',
    'NTC_REMOVE_CONFIRMATION' => 'Voulez-vous vraiment supprimer ce Prospect de ce Ticket?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Campagnes',
    'LBL_CAMPAIGN' => 'Campagne:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Utilisateur Assign??',
    'LBL_PROSPECT_LIST' => 'Liste Prospect',
    'LBL_CAMPAIGN_LEAD' => 'Campagnes',
    'LBL_BIRTHDATE' => 'Date de Naissance??:',
    'LBL_ASSISTANT_PHONE' => 'T??l??phone Assistant',
    'LBL_ASSISTANT' => 'Assistant',
    'LBL_CREATED_USER' => 'Cr???? par',
    'LBL_MODIFIED_USER' => 'Modifi?? par',
    'LBL_CAMPAIGNS' => 'Campagnes',
    'LBL_CONVERT_MODULE_NAME' => 'Module',
    'LBL_CONVERT_REQUIRED' => 'Requis',
    'LBL_CONVERT_SELECT' => 'Permettre S??lection',
    'LBL_CONVERT_COPY' => 'Copier Donn??es',
    'LBL_CONVERT_EDIT' => 'Modifier',
    'LBL_CONVERT_DELETE' => 'Supprimer',
    'LBL_CONVERT_ADD_MODULE' => 'Ajouter Module',
    'LBL_CREATE' => 'Cr??er',
    'LBL_SELECT' => '<b>OU</b> S??lectionner',
    'LBL_WEBSITE' => 'Site Web',
    'LNK_IMPORT_LEADS' => 'Import Prospects',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'Le module dans lequel vous souhaitez cr??er un nouvel enregistrement.',
    'LBL_REQUIRED_TIP' => 'Les modules requis doivent ??tre cr????s ou s??lectionn??s avant de convertir le Prospect.',
    'LBL_COPY_TIP' => 'Si la case est coch??e, les champs du Prospect seront copi??s dans les champs ayant le m??me nom dans les enregistrements des modules de destination.',
    'LBL_SELECTION_TIP' => 'Les modules li??s avec le module contacts pourront ??tre s??lectionn??s plut??t que cr????s durant le processus de conversion du Prospect.',
    'LBL_EDIT_TIP' => 'Modifier la mise en page de la conversion pour ce module.',
    'LBL_DELETE_TIP' => 'Retirer ce module de la mise en page de conversion.',

    'LBL_ACTIVITIES_MOVE' => 'D??placer Activit??s vers',
    'LBL_ACTIVITIES_COPY' => 'Copier Activit??s vers',
    'LBL_ACTIVITIES_MOVE_HELP' => "S??lectionner les enregistrements vers lesquels les activit??s du Prospect seront d??plac??es lors de la conversion. Les activit??s de type t??ches, appels, r??unions, notes et emails seront d??placer vers ces enregistrement s??lectionn??s.",
    'LBL_ACTIVITIES_COPY_HELP' => "S??lectionner les enregistrements vers lesquels les activit??s du Prospect seront copi??es lors de la conversion. Des activit??s de type t??ches, appels, r??unions et notes seront cr????s pour chacun des enregistrements s??lectionn??s. Les emails seront rattach??s aux enregistrements s??lectionn??s.",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'Campagne ID',
    'LBL_EDITLAYOUT' => 'Modifier Mise en page' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Pr??ciser Date' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Chargement' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Modifier' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => '??v??nements',
);
