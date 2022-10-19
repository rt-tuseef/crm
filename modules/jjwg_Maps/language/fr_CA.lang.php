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

$mod_strings['LBL_MAP'] = 'Carte';
$mod_strings['LBL_MODULE_NAME'] = 'Cartes';
$mod_strings['LBL_MODULE_TITLE'] = 'Cartes: Accueil';
$mod_strings['LBL_MODULE_ID'] = 'Cartes';
$mod_strings['LBL_LIST_FORM_TITLE'] = 'Liste Cartes';
$mod_strings['LBL_MAP_CUSTOM_MARKER'] = 'Marqueur Personnalisé';
$mod_strings['LBL_MAP_CUSTOM_AREA'] = 'Zone Personnalisée';
$mod_strings['LBL_HOMEPAGE_TITLE'] = 'Ma Liste de Cartes';

$mod_strings['LBL_FLEX_RELATE'] = 'Associé à (Centre):';
$mod_strings['LBL_MODULE_TYPE'] = 'Type de Module à Afficher :';
$mod_strings['LBL_DISTANCE'] = 'Distance (Rayon):';
$mod_strings['LBL_UNIT_TYPE'] = 'Type Unité:';

$mod_strings['LBL_MAP_DISPLAY'] = 'Affichage Carte';
$mod_strings['LBL_MAP_LEGEND'] = 'Légende:';
$mod_strings['LBL_MAP_USER_GROUPS'] = 'Groupes:';
$mod_strings['LBL_MAP_GROUP'] = 'Groupe';
$mod_strings['LBL_MAP_TYPE'] = 'Type';
$mod_strings['LBL_MAP_ASSIGNED_TO'] = 'Assigné à:';
$mod_strings['LBL_MAP_GET_DIRECTIONS'] = 'Obtenir Directions';
$mod_strings['LBL_MAP_GOOGLE_MAPS_VIEW'] = 'Vue de Google Maps';

$mod_strings['LNK_NEW_MAP'] = 'Ajouter Carte';
$mod_strings['LNK_NEW_RECORD'] = 'Ajouter Carte';
$mod_strings['LNK_MAP_LIST'] = 'Liste Cartes';

$mod_strings['LBL_MAP_ADDRESS_TEST'] = 'Teste Géocodage';
$mod_strings['LBL_MAP_QUICK_RADIUS'] = 'Carte Rayon Rapide';
$mod_strings['LBL_MAP_NULL_GROUP_NAME'] = 'Aucun';
$mod_strings['LBL_MAP_ADDRESS'] = 'Adresse';
$mod_strings['LBL_MAP_PROCESS'] = 'Traitez-la!';

$mod_strings['LBL_MAP_LAST_STATUS'] = 'Dernier Statut Géocodage';
$mod_strings['LBL_GEOCODED_COUNTS'] = 'Décompte Géocodage';
$mod_strings['LBL_CRON_URL'] = 'URL Cron:';
$mod_strings['LBL_MODULE_HEADING'] = 'Module';

$mod_strings['LBL_N/A'] = 's.o.';
$mod_strings['LBL_ZERO_RESULTS'] = 'Aucun résultat';
$mod_strings['LBL_OK'] = 'Ok';
$mod_strings['LBL_INVALID_REQUEST'] = 'Demande non valide';
$mod_strings['LBL_APPROXIMATE'] = 'Environ';
$mod_strings['LBL_EMPTY'] = 'Vide';

$mod_strings['LBL_MODULE_TOTAL_HEADING'] = 'Total';
$mod_strings['LBL_MODULE_RESET_HEADING'] = 'Réinitialiser';
$mod_strings['LBL_GEOCODED_COUNTS_DESCRIPTION'] = 'Le tableau plus bas indique le nombre d’objets module géocodés, regroupés par réponse de géocodage. N’oubliez pas que la limite d’utilisation de Google Maps standard est de 2500 visites par jour. Ce module met en cache les informations de géocodage des adresses au cours du traitement afin de réduire le nombre total de demandes nécessaires.';

$mod_strings['LBL_CRON_INSTRUCTIONS'] = 'Pour traiter les demandes de géocodage, il est recommandé de configurer une tâche Cron tous les soirs. Un point d’entrée personnalisé a été créé à cet effet et accessible sans authentification. L’URL ci-dessous est destinée à être utilisée avec une tâche administrative à la demande. Consultez la documentation pour plus d’informations.';
$mod_strings['LBL_EXPORT_ADDRESS_URL'] = 'Export URLs';
$mod_strings['LBL_EXPORT_INSTRUCTIONS'] = 'Utiliser les liens ci-dessous pour exporter les adresses complètes ayant besoin d’une information geocoding. Puis utilisez un outil de géocodage batch en ligne ou hors ligne pour géocoder les adresses. Lorsque vous avez fini le géocodage, importer les adresses dans le module de Cache d’adresses à utiliser avec vos cartes. Noter que le module du Cache de l’adresse est facultatif. Toutes les informations de géolocalisation sont stockées dans le module représentatif.';
$mod_strings['LBL_ADDRESS_CACHE'] = 'Cache Adresse';
$mod_strings['LBL_ADD_TO_TARGET_LIST'] = 'Ajouter à Liste Cible';
$mod_strings['LBL_ADD_TO_TARGET_LIST_PROCESSING'] = 'En cours de traitement ...';


$mod_strings['LBL_CONFIG_TITLE'] = 'Paramètres Configuration';
$mod_strings['LBL_CONFIG_SAVED'] = 'Paramètres enregistrés avec succès!';
$mod_strings['LBL_BILLING_ADDRESS'] = 'Adresse de Facturation';
$mod_strings['LBL_SHIPPING_ADDRESS'] = 'Adresse de livraison';
$mod_strings['LBL_PRIMARY_ADDRESS'] = 'Adresse Principale';
$mod_strings['LBL_ALTERNATIVE_ADDRESS'] = 'Autre adresse';
$mod_strings['LBL_ADDRESS_FLEX_RELATE'] = 'Rattachement d\'inflexion';
$mod_strings['LBL_ADDRESS_ADDRESS'] = 'Adresse (Simple, Utilisateurs)';
$mod_strings['LBL_ADDRESS_CUSTOM'] = 'Personnalisé (Custom Controller Logic)';
$mod_strings['LBL_ENABLED'] = 'Activé';
$mod_strings['LBL_DISABLED'] = 'Désactivé';
$mod_strings['LBL_DEFAULT'] = 'Défaut:';
$mod_strings['LBL_CONFIG_DEFAULT'] = 'Défaut:';

$mod_strings['LBL_CONFIG_VALID_GEOCODE_MODULES'] = 'Modules de Géocodage Valides:';
$mod_strings['LBL_CONFIG_VALID_GEOCODE_TABLES'] = 'Tables de Géocodage Valides:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_SETTINGS_TITLE'] = "Paramètres de Type d'adresse : Ceci définit les types d'adresse de modules utilisés lors du géocodage des adresses. Les valeurs autorisées: « facturation » ; « expédition » ; « primaire » ; « alt » ; « flex_relate »";
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR'] = 'Type Adresse pour ';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_ACCOUNTS'] = 'Type Adresse pour Comptes:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CONTACTS'] = 'Type Adresse pour Contacts:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_LEADS'] = 'Type Adresse pour Prospects:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_OPPORTUNITIES'] = 'Type Adresse pour Opportunités:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT'] = '(de Compte connexe)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CASES'] = 'Type Adresse pour Tickets:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROJECTS'] = 'Type Adresse pour Projects:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT_OPPORTUNITY'] = '(pour les Comptes/Opportunités liés)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_MEETINGS'] = 'Type Adresse pour Réunions:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROSPECTS'] = 'Type Adresse pour Prospects/Cibles:';
$mod_strings['LBL_CONFIG_RELATED_OBJECT_THRU_FLEX_RELATE'] = 'Objet liés a travers le champ Flex Relation';

$mod_strings['LBL_CONFIG_MARKER_GROUP_FIELD_SETTINGS_TITLE'] = "Paramètres de groupe de marqueur de champ : Ceci définit le « champ » pour être utilisé comme paramètre de groupe lors de l’affichage des marqueurs sur une carte. Exemples : assigned_user_name, industrie, statut, sales_stage, priorité";
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR'] = 'Champ Groupe pour ';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_ACCOUNTS'] = 'Champ Groupe pour Comptes:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CONTACTS'] = 'Champ Groupe pour Contacts:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_LEADS'] = 'Champ Groupe pour Prospects:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_OPPORTUNITIES'] = 'Champ Groupe pour Opportunités:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CASES'] = 'Champ Groupe pour Tickets:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROJECTS'] = 'Champ Groupe pour Projets:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_MEETINGS'] = 'Champ Groupe pour Réunions:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROSPECTS'] = 'Champ Groupe pour Prospects/Cibles:';

$mod_strings['LBL_CONFIG_GEOCODING_SETTINGS_TITLE'] = 'Géocodage/Paramètres Google:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_TITLE'] = 'Géocodage API URL:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_DESC'] = 'URL Proxy ou Google Maps API';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_TITLE'] = 'Phrase secrète pour le Proxy:';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_DESC'] = 'La Phrase secrète  utilisée avec la comparaison Proxy MD5.';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_TITLE'] = 'Limite Géocodage:';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_DESC'] = "« geocoding_limit » définit la limite de requête lors de la sélection des enregistrements à géocoder.";
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_TITLE'] = 'Limite Géocodage Google:';
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_DESC'] = "« google_geocoding_limit » définit la imite de géocodage à l'aide de l'API Google Maps.";
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_TITLE'] = 'Limite Export Adresse:';
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_DESC'] = "« export_addresses_limit » définit la limite de requête lors de la sélection des enregistrements à exporter.";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_TITLE'] = "Autoriser Types Emplacement « Approximatif »:";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_DESC'] = "« allow_approximate_location_type » - permet aux types d'emplacement « Approximatif» d'etre pris en compte dans les résultats de géo-codage";

$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SETTINGS_TITLE'] = 'Paramètres Cache Adresse:';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_TITLE'] = 'Activer Cache Adresse (Get):';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_DESC'] = "« address_cache_get_enabled » permet au module de cache d'adresse récupérer les données de la table cache.";
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_TITLE'] = 'Activez Enregistrement Cache Adresse:';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_DESC'] = "« address_cache_save_enabled » permet au module de cache d'adresse à enregistrer des données dans la table cache.";

$mod_strings['LBL_CONFIG_LOGIC_HOOKS_SETTINGS_TITLE'] = 'Propriété Logic Hooks:';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_TITLE'] = 'Activer tous les Logic Hooks: ';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_DESC'] = "« logic_hooks_enabled » permet d'utiliser les 'logic hooks' pour la mise à jour automatique basé sur les objets connexes. Il est recommandé de désactiver cette option lors de la mise à niveau de votre CRM.";

$mod_strings['LBL_CONFIG_MARKER_MAPPING_SETTINGS_TITLE'] = 'Paramètres Marqueur/Mappage :';
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_TITLE'] = "Limite Marqueurs de Carte :";
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_DESC'] = "« map_markers_limit » définit la limite de requête lors de la sélection d'enregistrements à afficher sur une carte.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_TITLE'] = "Latitude Centre par Défault de la Carte:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_DESC'] = "« map_default_center_latitude » définit la position de latitude par défaut pour les cartes.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_TITLE'] = "Longitude Centre par Défault de la Carte:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_DESC'] = "« map_default_center_longitude » définit la position de longitude par défaut pour les cartes.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_TITLE'] = "Type Unité par Défault de la Carte:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_DESC'] = "« map_default_unit_type » définit l'unité de mesure par défaut type pour calculs de distance. Valeurs: \"mi\" (miles) ou 'km' (kilomètres).";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_TITLE'] = "Distance par Défault de la Carte:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_DESC'] = "« map_default_distance » définit la distance par défaut utilisée pour les cartes.";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_TITLE'] = "Ajustement Doublon Marqueur de la Carte:";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_DESC'] = "« map_duplicate_marker_adjustment » définit un réglage de l'offset à ajouter à la longitude et la latitude en cas de position du repère en double.";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_TITLE'] = "Grappe Marqueurs Taille de grille :";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_DESC'] = "« map_clusterer_grid_size » est utilisée pour définir la taille de la grille de calcul de carte avec marqueurs en clusterers.";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_TITLE'] = "Marqueurs Clusterer Max Zoom:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_DESC'] = "« map_clusterer_max_zoom » est utilisée pour définir le niveau de zoom maximum  auquel le regroupement ne sera pas appliquée.";
$mod_strings['LBL_CONFIG_CUSTOM_CONTROLLER_DESC'] = "Remarque importante: Tous les paramètres enregistrés peuvent être trouvés dans le tableau 'config' sous la catégorie 'jjwg'. Notez qu'un fichier controller.php personnalisé ne doit plus être utilisé pour remplacer les paramètres.";
$mod_strings['LBL_JJWG_MAPS_JJWG_AREAS_FROM_JJWG_AREAS_TITLE'] = 'Zones';
$mod_strings['LBL_JJWG_MAPS_JJWG_MARKERS_FROM_JJWG_MARKERS_TITLE'] = 'Marqueurs';
$mod_strings['LBL_PARENT_ID'] = 'ID Parent';
$mod_strings['LBL_JJWP_PARTNERS'] = 'Partenaires JJWP';
$mod_strings['LBL_GET_GOOGLE_API_KEY'] = 'Demander une Clé';
$mod_strings['LBL_GOOGLE_API_KEY'] = 'Clé Google Api';
$mod_strings['LBL_ERROR_NO_GOOGLE_API_KEY'] = 'Veuillez définir la Clé Google Api dans le panneau d\'administration Google Maps.';
