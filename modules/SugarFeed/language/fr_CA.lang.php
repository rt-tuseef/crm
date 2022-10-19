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
    'LBL_ASSIGNED_TO_ID' => 'Id Utilisateur Assigné',
    'LBL_ASSIGNED_TO_NAME' => 'Assigné à',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Date Création',
    'LBL_DATE_MODIFIED' => 'Date Modification',
    'LBL_MODIFIED' => 'Modifié Par',
    'LBL_MODIFIED_NAME' => 'Modifié Par Nom',
    'LBL_CREATED' => 'Créé Par',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_DELETED' => 'Supprimé',
    'LBL_NAME' => 'Nom',
    'LBL_SAVING' => 'Sauvegarde...',
    'LBL_SAVED' => 'Sauvegardé',
    'LBL_CREATED_USER' => 'Créé par Utilisateur',
    'LBL_MODIFIED_USER' => 'Modifié par Utilisateur',
    'LBL_LIST_FORM_TITLE' => 'Liste Flux',
    'LBL_MODULE_NAME' => 'Flux Activités',
    'LBL_MODULE_TITLE' => 'Flux Activités',
    'LBL_DASHLET_DISABLED' => 'Attention : Le Flux interne est désactivé, aucun nouveau flux ne peut être ajouté tant que celui-ci n\'a pas été réactivé',
    'LBL_RECORDS_DELETED' => 'Toutes les entrées Flux ont été supprimées, si le Flux est activé, de nouvelles entrées seront ajoutées automatiquement.',
    'LBL_CONFIRM_DELETE_RECORDS' => 'Êtes-vous sûr de que vouloir supprimer toutes les entrées du Flux?',
    'LBL_FLUSH_RECORDS' => 'Supprimer les entrées du Flux',
    'LBL_ENABLE_FEED' => 'Activer Dashlet Flux Activités',
    'LBL_ENABLE_MODULE_LIST' => 'Activer le Flux pour',
    'LBL_HOMEPAGE_TITLE' => 'Mon Flux Activités',
    'LNK_NEW_RECORD' => 'Créer Flux',
    'LNK_LIST' => 'Flux',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher Flux',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Voir l\'Historique',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activités',
    'LBL_NEW_FORM_TITLE' => 'Nouveau Flux',
    'LBL_ALL' => 'Tous',
    'LBL_USER_FEED' => 'Flux Utilisateur',
    'LBL_ENABLE_USER_FEED' => 'Activer le Flux Utilisateur',
    'LBL_TO' => 'Visible à l\'équipe',
    'LBL_IS' => 'est',
    'LBL_DONE' => 'Terminé',
    'LBL_TITLE' => 'Titre',
    'LBL_ROWS' => 'Lignes',
    'LBL_CATEGORIES' => 'Modules',
    'LBL_TIME_LAST_WEEK' => 'Dernière Semaine',
    'LBL_TIME_WEEKS' => 'semaines',
    'LBL_TIME_DAYS' => 'jours',
    'LBL_TIME_YESTERDAY' => 'Hier',
    'LBL_TIME_HOURS' => 'Heures',
    'LBL_TIME_HOUR' => 'Heure',
    'LBL_TIME_MINUTES' => 'minutes',
    'LBL_TIME_MINUTE' => 'Minute',
    'LBL_TIME_SECONDS' => 'Secondes',
    'LBL_TIME_SECOND' => 'Seconde',
    'LBL_TIME_AND' => 'et',
    'LBL_TIME_AGO' => 'plus tôt',
// Activity stream
    'CREATED_CONTACT' => 'a créé un <b>NOUVEAU</b> {0}',
    'CREATED_OPPORTUNITY' => 'a créé une <b>NOUVELLE</b> {0}',
    'CREATED_CASE' => 'a créé un <b>NOUVEAU</b> {0}',
    'CREATED_LEAD' => 'a créé un <b>NOUVEAU</b> {0}',
    'FOR' => 'pour', // Activity stream for cases
    'FOR_AMOUNT' => 'pour le montant de', // Activity stream for cases
    'CLOSED_CASE' => 'a <b>FERMÉ</b> un {0} ',
    'CONVERTED_LEAD' => 'a <b>CONVERTI</b> un {0}',
    'WON_OPPORTUNITY' => 'a <b>GAGNÉ</b> un {0}',
    'WITH' => 'avec',

    'LBL_LINK_TYPE_Link' => 'Lien',
    'LBL_LINK_TYPE_Image' => 'Image',
    'LBL_LINK_TYPE_YouTube' => 'YouTube&#153;',

    'LBL_SELECT' => 'Sélectionner',
    'LBL_POST' => 'Publier',
    'LBL_AUTHENTICATE' => 'Authentifier',
    'LBL_AUTHENTICATION_PENDING' => 'Certains des liens externes que vous avez sélectionné n\'ont pas été authentifiés. Cliquez sur \'Annuler\' pour revenir à la fenêtre Options afin d\'authentifier ces liens externes, ou cliquez sur \'OK\' pour continuer sans authentification.',
    'LBL_ADVANCED_SEARCH' => 'Filtre Avancé' /*for 508 compliance fix*/,
    'LBL_SHOW_MORE_OPTIONS' => 'Voir plus d\'options',
    'LBL_HIDE_OPTIONS' => 'Masquer Options',
    'LBL_VIEW' => 'Affficher',
    'LBL_POST_TITLE' => 'Publier les mises à jour de statut pour ',
    'LBL_URL_LINK_TITLE' => 'Lien URL à utiliser',
);
