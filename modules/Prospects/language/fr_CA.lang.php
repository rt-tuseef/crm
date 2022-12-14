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
    'LBL_LIST_PHONE' => 'T??l??phone',
    'LBL_LIST_FIRST_NAME' => 'Pr??nom',
    'LBL_ASSIGNED_TO_NAME' => 'Assign?? ??',
    'LBL_ASSIGNED_TO_ID' => 'Assign?? ??:',
    'LBL_CAMPAIGN_ID' => 'Campagne ID',
    'LBL_EXISTING_ACCOUNT' => 'Compte existant utilis??',
    'LBL_CREATED_ACCOUNT' => 'Nouveau Compte Cr????',
    'LBL_CREATED_CALL' => 'Nouvel Appel Cr????',
    'LBL_CREATED_MEETING' => 'Nouvelle R??union Cr????e',
    'LBL_NAME' => 'Nom:',
    'LBL_PROSPECT_INFORMATION' => 'Vue Globale', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'Autre Information',
    'LBL_FIRST_NAME' => 'Pr??nom:',
    'LBL_OFFICE_PHONE' => 'T??l??phone:',
    'LBL_ANY_PHONE' => 'Tous les T??l??phone:',
    'LBL_PHONE' => 'T??l??phone:',
    'LBL_LAST_NAME' => 'Nom de Famille:',
    'LBL_MOBILE_PHONE' => 'T??l??phone Mobile:',
    'LBL_HOME_PHONE' => 'Maison:',
    'LBL_OTHER_PHONE' => 'T??l??phone Autre:',
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
    'LBL_TITLE' => 'Intitul?? du poste :',
    'LBL_DEPARTMENT' => 'Service:',
    'LBL_BIRTHDATE' => 'Date de Naissance??:',
    'LBL_EMAIL_ADDRESS' => 'Adresse Email :',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Email Autre:',
    'LBL_ANY_EMAIL' => 'Tous les Emails:',
    'LBL_ASSISTANT' => 'Assistant:',
    'LBL_ASSISTANT_PHONE' => 'Assistant - T??l:',
    'LBL_DO_NOT_CALL' => 'Ne pas appeler:',
    'LBL_EMAIL_OPT_OUT' => 'Email D??sinscription:',
    'LBL_PRIMARY_ADDRESS' => 'Adresse Principale:',
    'LBL_ALTERNATE_ADDRESS' => 'Adresse Secondaire:',
    'LBL_ANY_ADDRESS' => 'Toutes les Adresses:',
    'LBL_CITY' => 'Ville:',
    'LBL_STATE' => 'Province ou R??gion:',
    'LBL_POSTAL_CODE' => 'Code Postal:',
    'LBL_COUNTRY' => 'Pays:',
    'LBL_ADDRESS_INFORMATION' => 'Information Adresse',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_OPP_NAME' => 'Nom Opportunit??:',
    'LBL_IMPORT_VCARD' => 'Importer vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Cr??er automatiquement un nouveau contact en important une vCard de votre fichier syst??me.',
    'LBL_DUPLICATE' => 'Possible Cibles Dupliqu??es',
    'MSG_SHOW_DUPLICATES' => 'L\'enregistrement cible que vous ??tes sur le point de cr??er peut ??tre un doublon d\'un enregistrement cible qui existe d??j??. Les enregistrements cibles contenant des noms et / ou des adresses email similaires sont r??pertori??s ci-dessous. <br> Cliquez sur Cr??er une cible pour continuer ?? cr??er cette nouvelle cible ou s??lectionnez une cible existante r??pertori??e ci-dessous.',
    'MSG_DUPLICATE' => 'L\'enregistrement cible que vous ??tes sur le point de cr??er peut ??tre un doublon d\'un enregistrement cible qui existe d??j??. Les enregistrements cibles contenant des noms et / ou des adresses email similaires sont r??pertori??s ci-dessous. <br> Cliquez sur Enregistrer pour continuer ?? cr??er cette nouvelle cible ou sur Annuler pour revenir au module sans cr??er la cible.',
    'LNK_IMPORT_VCARD' => 'Ins??rer vCard',
    'LNK_NEW_ACCOUNT' => 'Cr??er Compte',
    'LNK_NEW_OPPORTUNITY' => 'Cr??er Opportunit??',
    'LNK_NEW_CASE' => 'Cr??er Ticket',
    'LNK_NEW_NOTE' => 'Cr??er Note ou Pi??ce jointe',
    'LNK_NEW_CALL' => 'Planifier Appel',
    'LNK_NEW_EMAIL' => 'Archiver Email',
    'LNK_NEW_MEETING' => 'Planifier R??union',
    'LNK_NEW_TASK' => 'Cr??er T??che',
    'LNK_NEW_APPOINTMENT' => 'Planifier Rendez-vous',
    'LNK_IMPORT_PROSPECTS' => 'Importer Cibles',
    'NTC_DELETE_CONFIRMATION' => 'Etes vous s??r de vouloir supprimer cet enregistrement ?',
    'NTC_REMOVE_CONFIRMATION' => 'Etes vous s??r de vouloir supprimer ce contact pour ce ticket?',
    'ERR_DELETE_RECORD' => 'Un num??ro d\'enregistrement doit ??tre sp??cifi?? pour supprimer le contact.',
    'LBL_SALUTATION' => 'Civilit??',
    'LBL_CREATED_OPPORTUNITY' => 'Nouvelle Opportunit?? cr????e',
    'LNK_SELECT_ACCOUNT' => "Choisir Compte",
    'LNK_NEW_PROSPECT' => 'Cr??er Cible',
    'LNK_PROSPECT_LIST' => 'Voir Cibles',
    'LNK_NEW_CAMPAIGN' => 'Cr??er Campagne',
    'LNK_CAMPAIGN_LIST' => 'Campagnes',
    'LNK_NEW_PROSPECT_LIST' => 'Cr??er Liste Cible',
    'LNK_PROSPECT_LIST_LIST' => 'Listes Cible',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'S??lectionner Cibles Coch??s',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'S??lectionner Cibles Coch??s',
    'LBL_INVALID_EMAIL' => 'Email Invalide:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Cibles',
    'LBL_PROSPECT_LIST' => 'Liste Prospect',
    'LBL_CONVERT_BUTTON_TITLE' => 'Convertir Cible',
    'LBL_CONVERT_BUTTON_LABEL' => 'Convertir Cible',
    'LNK_NEW_CONTACT' => 'Nouveau Contact',
    'LBL_CREATED_CONTACT' => "Nouveau Contact Cr????",
    'LBL_CAMPAIGNS' => 'Campagnes',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Journal Campagne',
    'LBL_TRACKER_KEY' => 'Code Traqueur',
    'LBL_LEAD_ID' => 'Prospect Id',
    'LBL_CONVERTED_LEAD' => 'Propsect Convertie',
    'LBL_ACCOUNT_NAME' => 'Nom Compte',
    'LBL_EDIT_ACCOUNT_NAME' => 'Nom Compte:',
    'LBL_CREATED_USER' => 'Cr???? par',
    'LBL_MODIFIED_USER' => 'Modifi?? par',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historique',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => '??v??nements',
);
