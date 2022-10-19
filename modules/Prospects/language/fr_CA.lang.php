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
    'LBL_MODULE_NAME' => 'Cibles',
    'LBL_MODULE_ID' => 'Cibles',
    'LBL_INVITEE' => 'Rapports directs',
    'LBL_MODULE_TITLE' => 'Cibles: Accueil',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher Cible',
    'LBL_LIST_FORM_TITLE' => 'Liste Cibles',
    'LBL_NEW_FORM_TITLE' => 'Nouvelle Cible',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_LIST_LAST_NAME' => 'Nom de Famille',
    'LBL_LIST_TITLE' => 'Fonction',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_PHONE' => 'Téléphone',
    'LBL_LIST_FIRST_NAME' => 'Prénom',
    'LBL_ASSIGNED_TO_NAME' => 'Assigné à',
    'LBL_ASSIGNED_TO_ID' => 'Assigné à:',
    'LBL_CAMPAIGN_ID' => 'Campagne ID',
    'LBL_EXISTING_ACCOUNT' => 'Compte existant utilisé',
    'LBL_CREATED_ACCOUNT' => 'Nouveau Compte Créé',
    'LBL_CREATED_CALL' => 'Nouvel Appel Créé',
    'LBL_CREATED_MEETING' => 'Nouvelle Réunion Créée',
    'LBL_NAME' => 'Nom:',
    'LBL_PROSPECT_INFORMATION' => 'Vue Globale', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'Autre Information',
    'LBL_FIRST_NAME' => 'Prénom:',
    'LBL_OFFICE_PHONE' => 'Téléphone:',
    'LBL_ANY_PHONE' => 'Tous les Téléphone:',
    'LBL_PHONE' => 'Téléphone:',
    'LBL_LAST_NAME' => 'Nom de Famille:',
    'LBL_MOBILE_PHONE' => 'Téléphone Mobile:',
    'LBL_HOME_PHONE' => 'Maison:',
    'LBL_OTHER_PHONE' => 'Téléphone Autre:',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Adresse Principale - Rue:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Adresse Principale - Ville:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Adresse Principale - Pays:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Adresse Principale - Province:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Adresse Principale - Code Postal:',
    'LBL_ALT_ADDRESS_STREET' => 'Adresse Secondaire - Rue:',
    'LBL_ALT_ADDRESS_CITY' => 'Adresse Secondaire - Ville:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Adresse Secondaire - Pays:',
    'LBL_ALT_ADDRESS_STATE' => 'Adresse Secondaire - Province:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Adresse Secondaire - Code Postal:',
    'LBL_TITLE' => 'Intitulé du poste :',
    'LBL_DEPARTMENT' => 'Service:',
    'LBL_BIRTHDATE' => 'Date de Naissance :',
    'LBL_EMAIL_ADDRESS' => 'Adresse Email :',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Email Autre:',
    'LBL_ANY_EMAIL' => 'Tous les Emails:',
    'LBL_ASSISTANT' => 'Assistant:',
    'LBL_ASSISTANT_PHONE' => 'Assistant - Tél:',
    'LBL_DO_NOT_CALL' => 'Ne pas appeler:',
    'LBL_EMAIL_OPT_OUT' => 'Email Désinscription:',
    'LBL_PRIMARY_ADDRESS' => 'Adresse Principale:',
    'LBL_ALTERNATE_ADDRESS' => 'Adresse Secondaire:',
    'LBL_ANY_ADDRESS' => 'Toutes les Adresses:',
    'LBL_CITY' => 'Ville:',
    'LBL_STATE' => 'Province ou Région:',
    'LBL_POSTAL_CODE' => 'Code Postal:',
    'LBL_COUNTRY' => 'Pays:',
    'LBL_ADDRESS_INFORMATION' => 'Information Adresse',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_OPP_NAME' => 'Nom Opportunité:',
    'LBL_IMPORT_VCARD' => 'Importer vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Créer automatiquement un nouveau contact en important une vCard de votre fichier système.',
    'LBL_DUPLICATE' => 'Possible Cibles Dupliquées',
    'MSG_SHOW_DUPLICATES' => 'L\'enregistrement cible que vous êtes sur le point de créer peut être un doublon d\'un enregistrement cible qui existe déjà. Les enregistrements cibles contenant des noms et / ou des adresses email similaires sont répertoriés ci-dessous. <br> Cliquez sur Créer une cible pour continuer à créer cette nouvelle cible ou sélectionnez une cible existante répertoriée ci-dessous.',
    'MSG_DUPLICATE' => 'L\'enregistrement cible que vous êtes sur le point de créer peut être un doublon d\'un enregistrement cible qui existe déjà. Les enregistrements cibles contenant des noms et / ou des adresses email similaires sont répertoriés ci-dessous. <br> Cliquez sur Enregistrer pour continuer à créer cette nouvelle cible ou sur Annuler pour revenir au module sans créer la cible.',
    'LNK_IMPORT_VCARD' => 'Insérer vCard',
    'LNK_NEW_ACCOUNT' => 'Créer Compte',
    'LNK_NEW_OPPORTUNITY' => 'Créer Opportunité',
    'LNK_NEW_CASE' => 'Créer Ticket',
    'LNK_NEW_NOTE' => 'Créer Note ou Pièce jointe',
    'LNK_NEW_CALL' => 'Planifier Appel',
    'LNK_NEW_EMAIL' => 'Archiver Email',
    'LNK_NEW_MEETING' => 'Planifier Réunion',
    'LNK_NEW_TASK' => 'Créer Tâche',
    'LNK_NEW_APPOINTMENT' => 'Planifier Rendez-vous',
    'LNK_IMPORT_PROSPECTS' => 'Importer Cibles',
    'NTC_DELETE_CONFIRMATION' => 'Etes vous sûr de vouloir supprimer cet enregistrement ?',
    'NTC_REMOVE_CONFIRMATION' => 'Etes vous sûr de vouloir supprimer ce contact pour ce ticket?',
    'ERR_DELETE_RECORD' => 'Un numéro d\'enregistrement doit être spécifié pour supprimer le contact.',
    'LBL_SALUTATION' => 'Civilité',
    'LBL_CREATED_OPPORTUNITY' => 'Nouvelle Opportunité créée',
    'LNK_SELECT_ACCOUNT' => "Choisir Compte",
    'LNK_NEW_PROSPECT' => 'Créer Cible',
    'LNK_PROSPECT_LIST' => 'Voir Cibles',
    'LNK_NEW_CAMPAIGN' => 'Créer Campagne',
    'LNK_CAMPAIGN_LIST' => 'Campagnes',
    'LNK_NEW_PROSPECT_LIST' => 'Créer Liste Cible',
    'LNK_PROSPECT_LIST_LIST' => 'Listes Cible',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Sélectionner Cibles Cochés',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Sélectionner Cibles Cochés',
    'LBL_INVALID_EMAIL' => 'Email Invalide:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Cibles',
    'LBL_PROSPECT_LIST' => 'Liste Prospect',
    'LBL_CONVERT_BUTTON_TITLE' => 'Convertir Cible',
    'LBL_CONVERT_BUTTON_LABEL' => 'Convertir Cible',
    'LNK_NEW_CONTACT' => 'Nouveau Contact',
    'LBL_CREATED_CONTACT' => "Nouveau Contact Créé",
    'LBL_CAMPAIGNS' => 'Campagnes',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Journal Campagne',
    'LBL_TRACKER_KEY' => 'Code Traqueur',
    'LBL_LEAD_ID' => 'Prospect Id',
    'LBL_CONVERTED_LEAD' => 'Propsect Convertie',
    'LBL_ACCOUNT_NAME' => 'Nom Compte',
    'LBL_EDIT_ACCOUNT_NAME' => 'Nom Compte:',
    'LBL_CREATED_USER' => 'Créé par',
    'LBL_MODIFIED_USER' => 'Modifié par',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historique',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Événements',
);
