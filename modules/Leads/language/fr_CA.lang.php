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

    'ERR_DELETE_RECORD' => 'Un numéro d\'enregistrement doit être spécifié pour supprimer le prospect.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Description Compte',
    'LBL_ACCOUNT_ID' => 'ID Compte',
    'LBL_ACCOUNT_NAME' => 'Nom Compte:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activités',
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
    'LBL_ANY_PHONE' => 'Tous les Téléphone:',
    'LBL_ASSIGNED_TO_NAME' => 'Assigné à',
    'LBL_ASSIGNED_TO_ID' => 'Utilisateur Assigné:',
    'LBL_CITY' => 'Ville:',
    'LBL_CONTACT_ID' => 'ID Contact',
    'LBL_CONTACT_INFORMATION' => 'Vue Globale', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Nom Prospect:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Prospect-Opportunité:',
    'LBL_CONTACT_ROLE' => 'Rôle:',
    'LBL_CONTACT' => 'Prospect:',
    'LBL_CONVERTED_ACCOUNT' => 'Compte Converti:',
    'LBL_CONVERTED_CONTACT' => 'Contact Converti:',
    'LBL_CONVERTED_OPP' => 'Opportunité Convertie:',
    'LBL_CONVERTED' => 'Converti',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Convertir Prospect',
    'LBL_CONVERTLEAD' => 'Convertir Prospect',
    'LBL_CONVERTLEAD_WARNING' => 'Attention : Le statut du Prospect que vous souhaitez convertir est "Converti". Un contact et/ou un compte ont sans doute déja été créés à partir des informations de ce Prospect. Si vous souhaitez tout de même convertir ce Prospect, cliquez sur "sauvegarder". Sinon cliquez sur "annuler" pour retourner sur la page précédente.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => ' Contact Possible: ',
    'LBL_COUNTRY' => 'Pays:',
    'LBL_CREATED_NEW' => 'Création',
    'LBL_CREATED_ACCOUNT' => 'Nouveau Compte Créé',
    'LBL_CREATED_CALL' => 'Nouvel Appel Créé',
    'LBL_CREATED_CONTACT' => 'Nouveau Contact Créé',
    'LBL_CREATED_MEETING' => 'Nouvelle Réunion Créée',
    'LBL_CREATED_OPPORTUNITY' => 'Nouvelle Opportunité Créée',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Prospects',
    'LBL_DEPARTMENT' => 'Service:',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_DO_NOT_CALL' => 'Ne pas appeler:',
    'LBL_DUPLICATE' => 'Prospects Similaires',
    'LBL_EMAIL_ADDRESS' => 'Adresse Email:',
    'LBL_EMAIL_OPT_OUT' => 'Email Désinscription:',
    'LBL_EXISTING_ACCOUNT' => 'Compte existant utilisé',
    'LBL_EXISTING_CONTACT' => 'Contact existant utilisé',
    'LBL_EXISTING_OPPORTUNITY' => 'Opportunité existante utilisée',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Prénom:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historique',
    'LBL_HOME_PHONE' => 'Téléphone (domicile):',
    'LBL_IMPORT_VCARD' => 'Importer vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Créer automatiquement un nouveau Prospect par import de vCard depuis votre système.',
    'LBL_INVALID_EMAIL' => 'Email Invalide:',
    'LBL_INVITEE' => 'Supérieur Immédiat',
    'LBL_LAST_NAME' => 'Nom de Famille:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Description Source Prospect:',
    'LBL_LEAD_SOURCE' => 'Source Prospect:',
    'LBL_LIST_ACCEPT_STATUS' => 'Statut Acceptation',
    'LBL_LIST_ACCOUNT_NAME' => 'Nom Compte',
    'LBL_LIST_CONTACT_NAME' => 'Nom Prospect',
    'LBL_LIST_CONTACT_ROLE' => 'Rôle',
    'LBL_LIST_DATE_ENTERED' => 'Date Création',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_FIRST_NAME' => 'Prénom',
    'LBL_LIST_FORM_TITLE' => 'Liste Prospects',
    'LBL_LIST_LAST_NAME' => 'Nom de Famille',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Description Source Prospect',
    'LBL_LIST_LEAD_SOURCE' => 'Source Prospect',
    'LBL_LIST_MY_LEADS' => 'Mes Prospects',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_LIST_PHONE' => 'Telephone Bureau',
    'LBL_LIST_REFERED_BY' => 'Référé Par',
    'LBL_LIST_STATUS' => 'Statut',
    'LBL_LIST_TITLE' => 'Fonction',
    'LBL_MOBILE_PHONE' => 'Téléphone Cellulaire:',
    'LBL_MODULE_NAME' => 'Prospects',
    'LBL_MODULE_TITLE' => 'Prospect: Accueil',
    'LBL_NAME' => 'Nom:',
    'LBL_NEW_FORM_TITLE' => 'Nouveau Prospect',
    'LBL_OFFICE_PHONE' => 'Téléphone:',
    'LBL_OPP_NAME' => 'Nom Opportunité:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Montant Opportunité:',
    'LBL_OPPORTUNITY_ID' => 'Opportunité ID',
    'LBL_OPPORTUNITY_NAME' => 'Nom Opportunité:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Email Autre:',
    'LBL_OTHER_PHONE' => 'Téléphone Autre:',
    'LBL_PHONE' => 'Téléphone:',
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
    'LBL_REFERED_BY' => 'Référé Par:',
    'LBL_REPORTS_TO_ID' => 'ID Supérieur Immédiat',
    'LBL_REPORTS_TO' => 'Supérieur Immédiat:',
    'LBL_SALUTATION' => 'Civilité',
    'LBL_MODIFIED' => 'Modifié Par',
    'LBL_CREATED' => 'Créé Par',
    'LBL_SEARCH_FORM_TITLE' => 'Recherche Prospect',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Sélectionner Prospects Cochés',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Sélectionner Prospects Cochés',
    'LBL_STATE' => 'Province ou Région:',
    'LBL_STATUS_DESCRIPTION' => 'Description Statut:',
    'LBL_STATUS' => 'Statut:',
    'LBL_TITLE' => 'Intitulé du poste :',
    'LNK_IMPORT_VCARD' => 'Importer vCard',
    'LNK_LEAD_LIST' => 'Voir Prospects',
    'LNK_NEW_ACCOUNT' => 'Créer Compte',
    'LNK_NEW_APPOINTMENT' => 'Planifier Rendez-vous',
    'LNK_NEW_CONTACT' => 'Créer Contact',
    'LNK_NEW_LEAD' => 'Créer Prospect',
    'LNK_NEW_NOTE' => 'Créer Note',
    'LNK_NEW_TASK' => 'Créer Tâche',
    'LNK_NEW_CASE' => 'Créer Ticket',
    'LNK_NEW_CALL' => 'Planifier Appel',
    'LNK_NEW_MEETING' => 'Planifier Réunion',
    'LNK_NEW_OPPORTUNITY' => 'Créer Opportunité',
    'LNK_SELECT_ACCOUNTS' => ' <b>OU</b> Sélectionner Compte',
    'LNK_SELECT_CONTACTS' => ' <b>OU</b> Sélectionner Contact',
    'NTC_DELETE_CONFIRMATION' => 'Etes vous sûr de vouloir supprimer cet enregistrement ?',
    'NTC_REMOVE_CONFIRMATION' => 'Voulez-vous vraiment supprimer ce Prospect de ce Ticket?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Campagnes',
    'LBL_CAMPAIGN' => 'Campagne:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Utilisateur Assigné',
    'LBL_PROSPECT_LIST' => 'Liste Prospect',
    'LBL_CAMPAIGN_LEAD' => 'Campagnes',
    'LBL_BIRTHDATE' => 'Date de Naissance :',
    'LBL_ASSISTANT_PHONE' => 'Téléphone Assistant',
    'LBL_ASSISTANT' => 'Assistant',
    'LBL_CREATED_USER' => 'Créé par',
    'LBL_MODIFIED_USER' => 'Modifié par',
    'LBL_CAMPAIGNS' => 'Campagnes',
    'LBL_CONVERT_MODULE_NAME' => 'Module',
    'LBL_CONVERT_REQUIRED' => 'Requis',
    'LBL_CONVERT_SELECT' => 'Permettre Sélection',
    'LBL_CONVERT_COPY' => 'Copier Données',
    'LBL_CONVERT_EDIT' => 'Modifier',
    'LBL_CONVERT_DELETE' => 'Supprimer',
    'LBL_CONVERT_ADD_MODULE' => 'Ajouter Module',
    'LBL_CREATE' => 'Créer',
    'LBL_SELECT' => '<b>OU</b> Sélectionner',
    'LBL_WEBSITE' => 'Site Web',
    'LNK_IMPORT_LEADS' => 'Import Prospects',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'Le module dans lequel vous souhaitez créer un nouvel enregistrement.',
    'LBL_REQUIRED_TIP' => 'Les modules requis doivent être créés ou sélectionnés avant de convertir le Prospect.',
    'LBL_COPY_TIP' => 'Si la case est cochée, les champs du Prospect seront copiés dans les champs ayant le même nom dans les enregistrements des modules de destination.',
    'LBL_SELECTION_TIP' => 'Les modules liés avec le module contacts pourront être sélectionnés plutôt que créés durant le processus de conversion du Prospect.',
    'LBL_EDIT_TIP' => 'Modifier la mise en page de la conversion pour ce module.',
    'LBL_DELETE_TIP' => 'Retirer ce module de la mise en page de conversion.',

    'LBL_ACTIVITIES_MOVE' => 'Déplacer Activités vers',
    'LBL_ACTIVITIES_COPY' => 'Copier Activités vers',
    'LBL_ACTIVITIES_MOVE_HELP' => "Sélectionner les enregistrements vers lesquels les activités du Prospect seront déplacées lors de la conversion. Les activités de type tâches, appels, réunions, notes et emails seront déplacer vers ces enregistrement sélectionnés.",
    'LBL_ACTIVITIES_COPY_HELP' => "Sélectionner les enregistrements vers lesquels les activités du Prospect seront copiées lors de la conversion. Des activités de type tâches, appels, réunions et notes seront créés pour chacun des enregistrements sélectionnés. Les emails seront rattachés aux enregistrements sélectionnés.",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'Campagne ID',
    'LBL_EDITLAYOUT' => 'Modifier Mise en page' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Préciser Date' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Chargement' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Modifier' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Événements',
);
