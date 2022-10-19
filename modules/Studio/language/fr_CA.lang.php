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
    'LBL_EDIT_LAYOUT' => 'Modifier Mise en page',
    'LBL_EDIT_FIELDS' => 'Modifier Champs Personnalisés',
    'LBL_SELECT_FILE' => 'Selectionner Fichier',
    'LBL_MODULE_TITLE' => 'Studio',
    'LBL_TOOLBOX' => 'Boîte à Outils',
    'LBL_SUITE_FIELDS_STAGE' => 'Champs CRM (cliquez sur les éléments à ajouter à la zone)',
    'LBL_VIEW_SUITE_FIELDS' => 'Afficher Champs CRM',
    'LBL_FAILED_TO_SAVE' => 'Échec Sauvegarde',
    'LBL_CONFIRM_UNSAVE' => 'Toutes les modifications seront perdues. Êtes-vous sûr de vouloir continuer ?',
    'LBL_PUBLISHING' => 'Publication ...',
    'LBL_PUBLISHED' => 'Publié',
    'LBL_FAILED_PUBLISHED' => 'Échec Publication',
    'LBL_DROP_HERE' => '[Glisser ici]',

//CUSTOM FIELDS
    'LBL_NAME' => 'Nom',
    'LBL_LABEL' => 'Étiquette',
    'LBL_MASS_UPDATE' => 'Mise à jour de Masse',
    'LBL_DEFAULT_VALUE' => 'Valeur par défaut',
    'LBL_REQUIRED' => 'Requis',
    'LBL_DATA_TYPE' => 'Type',


    'LBL_HISTORY' => 'Historique',

//WIZARDS

//STUDIO WIZARD
    'LBL_SW_WELCOME' => '<h2>Bienvenue à Studio!</h2><br> Que souhaitez-vous faire ?<br><b> Merci de choisir une option ci-dessous.</b>',
    'LBL_SW_EDIT_MODULE' => 'Modifier Module',
    'LBL_SW_EDIT_DROPDOWNS' => 'Modifier Liste Déroulante',
    'LBL_SW_EDIT_TABS' => 'Configurer Onglets',
    'LBL_SW_RENAME_TABS' => 'Renommer Onglets',
    'LBL_SW_EDIT_GROUPTABS' => 'Configurer Groupes Onglets',
    'LBL_SW_EDIT_PORTAL' => 'Modifier Portail',
    'LBL_SW_REPAIR_CUSTOMFIELDS' => 'Réparer Champs Personnalisés',
    'LBL_SW_MIGRATE_CUSTOMFIELDS' => 'Migrer Champs Personnalisés',

//Manager Backups History
    'LBL_MB_DELETE' => 'Supprimer',

//EDIT DROP DOWNS
    'LBL_ED_CREATE_DROPDOWN' => 'Créer Liste Déroulante',
    'LBL_DROPDOWN_NAME' => 'Nom Liste Déroulante:',
    'LBL_DROPDOWN_LANGUAGE' => 'Langue Liste Déroulante:',
    'LBL_TABGROUP_LANGUAGE' => 'Langue:',

//END WIZARDS

//DROP DOWN EDITOR
    'LBL_DD_DISPALYVALUE' => 'Afficher Valeur',
    'LBL_DD_DATABASEVALUE' => 'Valeur Base de Données',
    'LBL_DD_ALL' => 'Tout',

//BUTTONS
    'LBL_BTN_SAVE' => 'Sauvegarder',
    'LBL_BTN_CANCEL' => 'Annuler',
    'LBL_BTN_SAVEPUBLISH' => 'Sauvegarder & Publier',
    'LBL_BTN_HISTORY' => 'Historique',
    'LBL_BTN_ADDROWS' => 'Ajouter des Lignes',
    'LBL_BTN_UNDO' => 'Annuler',
    'LBL_BTN_REDO' => 'Réappliquer',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Ajouter Champ Personnalisé',
    'LBL_BTN_TABINDEX' => 'Modifier Ordre Onglets',

//TABS
    'LBL_MODULES' => 'Modules',
    'LBL_MODULE_NAME' => 'Administration',
    'LBL_CONFIGURE_GROUP_TABS' => 'Configurer les filtres du menu du module',
    'LBL_GROUP_TAB_WELCOME' => 'Les filtres ci-dessous seront affichés dans la liste Plus dans le menu du module pour les utilisateurs à utiliser pour afficher des groupes de modules dans le menu. Faites glisser et déposez les modules vers et depuis les filtres. Remarque: Les filtres vides ne seront pas affichés dans le menu.',
    'LBL_RENAME_TAB_WELCOME' => 'Cliquez sur la valeur d\'affichage de n\'importe quel onglet dans le tableau ci-dessous pour renommer l\'onglet.',
    'LBL_DELETE_MODULE' => 'Supprimer&nbsp;Module<br/>du&nbsp;filtre',
    'LBL_TAB_GROUP_LANGUAGE_HELP' => 'Sélectionnez une langue disponible, modifiez les étiquettes de groupe et cliquez sur Enregistrer et déployer pour appliquer les étiquettes dans la langue sélectionnée.',
    'LBL_ADD_GROUP' => 'Ajouter Filtre',
    'LBL_NEW_GROUP' => 'Nouveau Groupe',
    'LBL_RENAME_TABS' => 'Renommer Modules',

//ERRORS
    'ERROR_INVALID_KEY_VALUE' => "Erreur: Valeur de clé invalide: [']",

//SUGAR PORTAL
    'LBL_SAVE' => 'Sauvegarder' /*for 508 compliance fix*/,
    'LBL_UNDO' => 'Annuler' /*for 508 compliance fix*/,
    'LBL_REDO' => 'Réappliquer' /*for 508 compliance fix*/,
    'LBL_INLINE' => 'Édition En ligne' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Supprimer' /*for 508 compliance fix*/,
    'LBL_ADD_FIELD' => 'Ajouter Champ' /*for 508 compliance fix*/,
    'LBL_MAXIMIZE' => 'Maximiser' /*for 508 compliance fix*/,
    'LBL_MINIMIZE' => 'Minimiser' /*for 508 compliance fix*/,
    'LBL_PUBLISH' => 'Publier' /*for 508 compliance fix*/,
    'LBL_ADDROWS' => 'Ajouter Lignes' /*for 508 compliance fix*/,
    'LBL_ADDFIELD' => 'Ajouter Champ' /*for 508 compliance fix*/,
    'LBL_EDIT' => 'Modifier' /*for 508 compliance fix*/,

    'LBL_LANGUAGE_TOOLTIP' => 'Sélectionner la langue à modifier.',
    'LBL_SINGULAR' => 'Étiquette au Singulier',
    'LBL_PLURAL' => 'Étiquette au Pluriel',
    'LBL_RENAME_MOD_SAVE_HELP' => 'Cliquer sur <b>Sauvegarder</b> pour appliquer les changements.'

);
