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
    'LBL_BASIC' => 'Vue Globale',
    'LBL_BASIC_SEARCH' => 'Filtre Rapide',
    'LBL_ADVANCED_SEARCH' => 'Filtre avancé',
    'LBL_BASIC_TYPE' => 'Type de base',
    'LBL_ADVANCED_TYPE' => 'Type avancé',
    'LBL_SYSOPTS_2' => 'Quel type de base de donnée sera utilisée pour cette installation de SuiteCRM ?',
    'LBL_SYSOPTS_DB' => 'Préciser le type de base de donnée',
    'LBL_SYSOPTS_DB_TITLE' => 'Type de base de donnée',
    'LBL_SYSOPTS_ERRS_TITLE' => 'Veuillez réparer les erreurs suivantes avant de continuer :',
    'ERR_DB_VERSION_FAILURE' => 'Impossible de vérifier la version de la base de données.',
    'DEFAULT_CHARSET' => 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK' => 'Saisissez le nom d\'utilisateur de l\'administrateur de SuiteCRM.',
    'ERR_ADMIN_PASS_BLANK' => 'Saisissez le mode de passe de l\'administrateur de SuiteCRM.',

    'ERR_CHECKSYS' => 'Des erreurs ont été détectées pendant le test de compatibilité. Veuillez mettre en place les mesures correctives nécessaires au bon fonctionnement de SuiteCRM avant de relancer le test de compatibilité ou une nouvelle installation.',
    'ERR_CHECKSYS_CALL_TIME' => 'Allow Call Time Pass Reference est sur On (elle doit être passée à Off dans php.ini)',
    'ERR_CHECKSYS_CURL' => 'Non trouvé : le planificateur de SuiteCRM fonctionnera de manière limitée.',
    'ERR_CHECKSYS_IMAP' => 'Non trouvé : Les fonctions de campagnes mail et gestion des mails entrant nécessitent la présence des librairies IMAP. Ces fonctions ne sont donc pas activées.',
    'ERR_CHECKSYS_MEM_LIMIT_1' => '(Veuillez régler ceci sur',
    'ERR_CHECKSYS_MEM_LIMIT_2' => 'M ou plus dans votre fichier php.ini)',
    'ERR_CHECKSYS_NOT_WRITABLE' => 'Avertissement : écriture impossible',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Votre version de PHP n\'est pas supportée par SuiteCRM. Vous devez installer une version de PHP compatible avec SuiteCRM. Merci de consulter la matrice de compatibilité disponible dans le document "Release Notes" pour voir quelle versions de PHP sont supportées par SuiteCRM. Votre version actuelle est',
    'ERR_CHECKSYS_IIS_INVALID_VER' => 'Votre version d\'IIS est pas supportée par SuiteCRM. Vous devez installer une version de PHP compatible avec SuiteCRM. Merci de consulter la matrice de compatibilité disponible dans le document "Release Notes" pour voir quelle versions de PHP sont supportées par SuiteCRM. Votre version actuelle est',
    'ERR_CHECKSYS_FASTCGI' => 'Nous détectons que vous n\'utilisez pas FastCGI pour PHP. Vous devez installer une version de PHP compatible avec SuiteCRM. Merci de consulter la matrice de compatibilté disponible dans le document "Release Notes" pour voir quelle versions de PHP sont supportées par SuiteCRM. Retrouvez tous les détails sur<a href="http://www.iis.net/php/" target="_blank">http://www.iis.net/php/</a>',
    'ERR_CHECKSYS_FASTCGI_LOGGING' => 'Pour une utilisation optimale de IIS/FastCGI, positionnez le paramètre fastcgi.logging à 0 dans votre fichier php.ini.',
    'LBL_DB_UNAVAILABLE' => 'Base de donnée non disponible',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'Nous ne trouvons pas de support de base de données. Veuillez vérifier que vous disposez bien des pilotes nécessaires pour l\'un des types de bases de données suivant : MySQL ou MS SQL Server. Vous pouvez avoir besoin de dé-commenter l\'extension dans votre fichier php.ini ou de recompiler avec les bons binaires, selon votre version de PHP. Veuillez vous référer au manuel de PHP pour savoir comment activer le support pour bases de données.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE' => 'Nous ne trouvons pas de support pour les fonctions associées aux librairies XML Parser requises pour SuiteCRM. Vous pouvez avoir besoin de dé-commenter l\'extension dans votre fichier php.ini ou de recompiler avec les bons binaires, selon votre version de PHP. Veuillez vous référer au manuel de PHP pour savoir comment activer le support pour bases de données.',
    'ERR_CHECKSYS_MBSTRING' => 'Les fonctions associées à l\'extension PHP chaînes de caractère multi-octets (mbstring) qui sont nécessaires à l\'application SuiteCRM n\'ont pas été trouvées. <br/> <br/> Généralement, le module mbstring n\'est pas activé par défaut dans PHP et doit être activé avec l\'option--enable-mbstring lorsque le binaire PHP est généré. Veuillez vous référer au manuel PHP pour plus d\'informations sur la façon d\'activer le support de mbstring.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE' => 'The config file exists but is not writeable. Please take the necessary steps to make the file writeable. Depending on your Operating system, this might require you to change the permissions by running chmod 766, or to right click on the filename to access the properties and uncheck the read only option.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE' => 'Le fichier de substitution de configuration existe mais n\'est pas accessible en écriture.  Veuillez faire le nécessaire pour rendre le fichier accessible en écriture.  Selon votre système d\'exploitation, vous devez modifier les permissions en exécutant un chmod 766 sur le fichier, ou faire un clic droit sur le nom de fichier pour accéder aux propriétés et décochez l\'option lecture seule.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE' => 'Le répertoire personnalisé existe mais n\'est pas accessible en écriture.  Vous devrez peut-être modifier les autorisations sur (chmod 766) ou faites un clic droit dessus et décocher l\'option lecture seule, selon votre système d\'exploitation.  Veuillez prendre les mesures nécessaires pour rendre le fichier accessible en écriture.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE' => "Les fichiers ou les répertoires listés ci-dessous ne sont pas accessible en écriture, sont manquants ou ne peuvent pas être créés.  Selon votre système d'exploitation, corriger ceci peut vous obliger à modifier les autorisations sur les fichiers ou le répertoire parent (chmod 755), ou de faire un clic droit sur le répertoire parent et décochez l'option « lecture seule » et l'appliquer à tous les sous-dossiers.",
    'ERR_CHECKSYS_JSON_NOT_AVAILABLE' => "Les fonctions associées aux bibliothèques JSON Parser nécessaires à l'application SuiteCRM n'ont pas été trouvées. Vous devrez peut-être décommenter l'extension dans le php. , ou recompiler avec le bon fichier binaire, selon votre version de PHP.",
    'LBL_CHECKSYS_OVERRIDE_CONFIG' => 'Remplacer la configuration',
    'ERR_CHECKSYS_SAFE_MODE' => 'Le Safe Mode est activé (vous pouvez le désactiver dans le fichier php.ini)',
    'ERR_CHECKSYS_ZLIB' => 'Le support ZLib introuvable : SuiteCRM tire des avantages de performances énormes avec la compression ZLib.',
    'ERR_CHECKSYS_ZIP' => 'Le support ZIP n\'a pas été trouvé : SuiteCRM a besoin du support ZIP pour traiter les fichiers compressés.',
    'ERR_CHECKSYS_PCRE' => 'Version de la bibliothèque PCRE introuvable : SuiteCRM nécessite la bibliothèque PCRE pour gérer les expressions régulières de style Perl.',
    'ERR_CHECKSYS_PCRE_VER' => 'Version de la bibliothèque PCRE : SuiteCRM nécessite la bibliothèque PCRE 7.0 ou ultérieur pour gérer les expressions régulières de style Perl.',
    'ERR_DB_ADMIN' => 'Les informations de connexion a la base de données utilisateur et/ou mot de passe sont erronées, la connexion n\'a pas pu s\'effectuer. Merci de renseigner un utilisateur et un mot de passe valides.  (Error: ',
    'ERR_DB_ADMIN_MSSQL' => 'Les informations de connexion a la base de données utilisateur et/ou mot de passe sont erronées, la connexion n\'a pas pu s\'effectuer. Merci de renseigner un utilisateur et un mot de passe valides.',
    'ERR_DB_EXISTS_NOT' => 'La base de données spécifiée n\'existe pas.',
    'ERR_DB_EXISTS_WITH_CONFIG' => 'La base de données existe déjà avec ces données de configuration. Pour exécuter une installation avec la base de données choisie, ré-exécuter l\'installation et choisissez : "Supprimer les tables existantes et les recréer?" Pour mettre à jour, utiliser l\'Assistant de mise à niveau depuis la console d\'administration. Veuillez consulter la documentation de mise à niveau <a href="https://docs.suitecrm.com/admin/installation-guide/upgrading/" target="_new">ici</a>.',
    'ERR_DB_EXISTS' => 'Une base de donnée existe déjà sous le nom fourni. Nous ne pouvons créer une nouvelle base sous le même nom.',
    'ERR_DB_EXISTS_PROCEED' => 'Le Nom de base de données fourni existe déjà. Vous pouvez <br> 1. cliquez sur le bouton retour et choisir un nouveau nom de base de données <br> 2. Cliquez sur Suivant pour continuer, mais toutes les tables existantes sur cette base de données seront supprimées. <strong> Vos tables et les données seront detruites. </ strong>',
    'ERR_DB_HOSTNAME' => 'Le nom d\'hôte ne peut être vide.',
    'ERR_DB_INVALID' => 'Le type de base de données sélectionné est invalide.',
    'ERR_DB_LOGIN_FAILURE_SHORT' => 'Erreur de connexion à la base de données: Le nom d\'hôte, nom d\'utilisateur et/ou mot de passe fourni est invalide.',
    'ERR_DB_LOGIN_FAILURE' => 'Les informations de connexion a la base de données utilisateur et/ou mot de passe sont erronées, la connexion n\'a pas pu s\'effectuer. Merci de renseigner un utilisateur et un mot de passe valides.',
    'ERR_DB_LOGIN_FAILURE_MYSQL' => 'Les informations de connexion a la base de données utilisateur et/ou mot de passe sont erronées, la connexion n\'a pas pu s\'effectuer. Merci de renseigner un utilisateur et un mot de passe valides.',
    'ERR_DB_LOGIN_FAILURE_MSSQL' => 'Les informations de connexion a la base de données utilisateur et/ou mot de passe sont erronées, la connexion n\'a pas pu s\'effectuer. Merci de renseigner un utilisateur et un mot de passe valides.',
    'ERR_DB_MYSQL_VERSION' => 'Votre version de MySQL (%s) n\'est pas compatible avec SuiteCRM. Vous devez installer une version compatible.Veuillez consulter la grille de compatibilité dans les releases notes afin de déterminer les versions supportées.',
    'ERR_DB_NAME' => 'Le nom de la base de donnée ne peut être vide.',
    'ERR_DB_MYSQL_DB_NAME_INVALID' => "Le nom de la base de donnée ne peut contenir les caractères '\\', '/', ou '.'",
    'ERR_DB_MSSQL_DB_NAME_INVALID' => "Le nom de la base de donnée ne peut commencer par un nombre, un '#' ou un '@' et ne peut contenir, un espace, les caractères '\"', \"'\", '*', '/', '\\', '?', ':', '<', '>', '&', '!', ou '-'",
    'ERR_DB_OCI8_DB_NAME_INVALID' => "Le nom de la base de donnée ne peut être composé que de caractères alphanumériques et des symboles  '#', '_' ou '$'",
    'ERR_DB_PASSWORD' => 'Le mot de passe fourni pour l\'administrateur de la base de données SuiteCRM ne correspond pas. Veuillez re-saisir le mot de passe dans le formulaire.',
    'ERR_DB_PRIV_USER' => 'Merci de renseigner un utilisateur de base de données.Cet utilisateur est nécéssaire pour la connexion à la base de données.',
    'ERR_DB_USER_EXISTS' => 'Ce nom d\'utilisateur est déja présent dans la base SuiteCRM -- Impossible de créer deux utilisateur identiques-- Merci de saisir un nouveau nom d\'utilisateur',
    'ERR_DB_USER' => 'Entrez un nom pour l\'administrateur de la base de données SuiteCRM.',
    'ERR_DBCONF_VALIDATION' => 'Veuillez corriger les erreurs suivantes avant de continuer :',
    'ERR_DBCONF_PASSWORD_MISMATCH' => 'Les mots de passe fournis pour l\'utilisateur de base de données SuiteCRM ne correspondent pas. S\' il vous plaît,entrer de nouveau les mêmes mots de passe dans les champs de mot de passe .',
    'ERR_ERROR_GENERAL' => 'Les erreurs suivantes ont été rencontrées :',
    'ERR_LANG_CANNOT_DELETE_FILE' => 'Impossible de supprimer ce fichier :',
    'ERR_LANG_MISSING_FILE' => 'Fichier introuvable :',
    'ERR_LANG_NO_LANG_FILE' => 'Aucun fichier de langue trouvé dans "include/language" :',
    'ERR_LANG_UPLOAD_1' => 'Une erreur s\'est produite pendant le téléchargement. Veuillez ré-essayer.',
    'ERR_LANG_UPLOAD_2' => 'Les packs de langue doivent être des fichiers ZIP.',
    'ERR_LANG_UPLOAD_3' => 'PHP ne peut pas déplacer le répertoire temporaire vers le répertoire de mise à jour.',
    'ERR_LOG_DIRECTORY_NOT_EXISTS' => 'Le répertoire de log indiqué n\'est pas valide.',
    'ERR_LOG_DIRECTORY_NOT_WRITABLE' => 'Le répertoire de log indiqué n\'est pas accessible en écriture.',
    'ERR_NO_DIRECT_SCRIPT' => 'Le script n\'a pu être exécuté.',
    'ERR_NO_SINGLE_QUOTE' => 'Impossible d\'utiliser le simple guillemet pour ',
    'ERR_PASSWORD_MISMATCH' => 'Les mots de passe fournis pour l\'admin SuiteCRM ne correspondent pas. S\'il vous plaît entrer de nouveau les mêmes mots de passe dans les champs de mot de passe .',
    'ERR_PERFORM_CONFIG_PHP_1' => 'Impossible d\'écrire dans le fichier <span class=stop>config.php</span> ',
    'ERR_PERFORM_CONFIG_PHP_2' => 'Vous pouvez continuer cette installation en créant manuellement un fichier config.php et en y collant les informations ci-dessous. Cependant, vous <strong>devez</strong> créer le fichier config.php avant de continuer vers l\'étape suivante.',
    'ERR_PERFORM_CONFIG_PHP_3' => 'Avez vous bien créé le fichier config.php ?',
    'ERR_PERFORM_CONFIG_PHP_4' => 'Attention : Impossible d\'écrire dans le fichier config.php. Veuillez vérifier qu\'il existe.',
    'ERR_PERFORM_HTACCESS_1' => 'Impossible d\'écrire dans le',
    'ERR_PERFORM_HTACCESS_2' => 'fichier.',
    'ERR_PERFORM_HTACCESS_3' => 'Si vous voulez empêcher les fichiers de log d\'être accessibles par un navigateur, veuillez créer un fichier .htaccess dans le répertoire des logs avec la ligne suivante :',
    'ERR_PERFORM_NO_TCPIP' => '<b>Nous ne pouvions pas détecter une connexion Internet.</b> Lorsque vous avez une connexion , rendez-vous sur <a href="http://www.suitecrm.com/">http://www.suitecrm.com/</a> pour vous enregistrer auprès SuiteCRM . En nous faisant connaitre un peu plus sur la façon dont votre société prévoit d\'utiliser SuiteCRM , nous pourrons vous assurer que nous fournirons la bonne application pour vos besoins professionnels.',
    'ERR_SESSION_DIRECTORY_NOT_EXISTS' => 'Le répertoire de sessions n\'est pas un dossier valide.',
    'ERR_SESSION_DIRECTORY' => 'Le répertoire de sessions n\'est pas accessible en écriture.',
    'ERR_SESSION_PATH' => 'Le chemin de sessions est requis si vous souhaitez spécifier votre propre répértoire.',
    'ERR_SI_NO_CONFIG' => 'Vous n\'avez pas inclus config_si.php dans la racine du dossier, ou vous n\'avez pas défini $sugar_config dans le fichier config.php.',
    'ERR_SITE_GUID' => 'Un ID d\'application est requis si vous souhaitez spécifier votre propre application.',
    'ERROR_SPRITE_SUPPORT' => "Nous ne sommes pas en mesure de localiser la bibliothèque GD, par conséquent, vous ne serez pas en mesure d'utiliser la fonctionnalité CSS Sprite.",
    'ERR_UPLOAD_MAX_FILESIZE' => 'Avertissement: Votre configuration de PHP doit être modifié pour permettre l\'upload de fichiers d\'au moins 6 Mo.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE' => 'Taille max des fichiers autorisée en upload',
    'ERR_URL_BLANK' => 'Indiquer l\'adresse URL de base pour l\'installation SuiteCRM',
    'ERR_UW_NO_UPDATE_RECORD' => 'Impossible de localiser le fichier d\'installation de',
    'ERROR_MANIFEST_TYPE' => 'Le fichier Manifest doit spécifier le type du package.',
    'ERROR_PACKAGE_TYPE' => 'Le fichier Manifest spécifie un type de package inconnu',
    'ERROR_VERSION_INCOMPATIBLE' => 'Le fichier téléchargé n\'est pas compatible avec cette version du CRM:',

    'LBL_BACK' => 'Précédent',
    'LBL_CANCEL' => 'Annuler/Fermer',
    'LBL_ACCEPT' => 'J\'accepte',
    'LBL_CHECKSYS_CACHE' => 'Dossier Cache accessible en écriture',
    'LBL_DROP_DB_CONFIRM' => 'La base de données spécifiée existe déjà <br> Vous pouvez soit:. <br> 1. Cliquez sur le bouton Annuler et choisir une autre base de données, ou <br> 2. Cliquez sur le bouton Accepter et continuer. Toutes les tables existantes dans la base de données seront supprimées. <strong> Cela signifie que toutes les tables et les données préexistantes seront détruites. </ strong>
',
    'LBL_CHECKSYS_COMPONENT' => 'Composant',
    'LBL_CHECKSYS_CONFIG' => 'Fichier de configuration SuiteCrm (config.php) accessible en écriture ',
    'LBL_CHECKSYS_CURL' => 'Module cURL',
    'LBL_CHECKSYS_CUSTOM' => 'Dossier Custom accessible en écriture',
    'LBL_CHECKSYS_DATA' => 'Dossier Data accessible en écriture',
    'LBL_CHECKSYS_IMAP' => 'Module IMAP',
    'LBL_CHECKSYS_FASTCGI' => 'FastCGI',
    'LBL_CHECKSYS_MBSTRING' => 'Module MB Strings',
    'LBL_CHECKSYS_MEM_OK' => 'OK (pas de limites)',
    'LBL_CHECKSYS_MEM_UNLIMITED' => 'OK (illimité)',
    'LBL_CHECKSYS_MEM' => 'Limite de la mémoire PHP',
    'LBL_CHECKSYS_MODULE' => 'Dossier Modules et Files accessible en écriture',
    'LBL_CHECKSYS_NOT_AVAILABLE' => 'Non Disponible',
    'LBL_CHECKSYS_OK' => 'Ok',
    'LBL_CHECKSYS_PHP_INI' => 'Emplacement de votre fichier de configuration PHP (php.ini).',
    'LBL_CHECKSYS_PHP_OK' => 'Ok (ver',
    'LBL_CHECKSYS_PHPVER' => 'Version de PHP',
    'LBL_CHECKSYS_IISVER' => 'Version d\'IIS',
    'LBL_CHECKSYS_JSON' => 'JSON Parsing',
    'LBL_CHECKSYS_RECHECK' => 'Re-vérifier',
    'LBL_CHECKSYS_STATUS' => 'Statut',
    'LBL_CHECKSYS_TITLE' => 'Vérification système acceptation',
    'LBL_CHECKSYS_XML' => 'Parseur XML',
    'LBL_CHECKSYS_ZLIB' => 'Module de compression ZLib',
    'LBL_CHECKSYS_ZIP' => 'Module de manipulation ZIP',
    'LBL_CHECKSYS_PCRE' => 'Librairie PCRE',
    'LBL_CHECKSYS_FIX_FILES' => 'Veuillez réparer les répertoires ou fichiers suivants avant de continuer :',
    'LBL_CHECKSYS_FIX_MODULE_FILES' => 'Veuillez réparer les répertoires de modules ou les fichiers suivants avant de continuer :',
    'LBL_CHECKSYS_UPLOAD' => 'Dossier Upload accessible en écriture',
    'LBL_CLOSE' => 'Fermer',
    'LBL_THREE' => '3',
    'LBL_CONFIRM_BE_CREATED' => 'est créé',
    'LBL_CONFIRM_DB_TYPE' => 'Type de base de données',
    'LBL_CONFIRM_NOT' => 'pas',
    'LBL_CONFIRM_TITLE' => 'Vérifier',
    'LBL_CONFIRM_WILL' => 'veut',
    'LBL_DBCONF_DB_DROP' => 'Effacer les tables',
    'LBL_DBCONF_DB_NAME' => 'Nom de la base de données',
    'LBL_DBCONF_DB_PORT' => 'Port de la base de données',
    'LBL_DBCONF_DB_PASSWORD' => 'Mot de passe utilisateur de la base de données SuiteCRM',
    'LBL_DBCONF_DB_PASSWORD2' => 'Re-saisir le mot de passe de l\'utilisateur de la base de données SuiteCRM',
    'LBL_DBCONF_DB_USER' => 'Utilisateur de la base de données SuiteCRM',
    'LBL_DBCONF_SUITE_DB_USER' => 'Utilisateur de la base de données SuiteCRM',
    'LBL_DBCONF_DB_ADMIN_USER' => 'Nom de l\'administrateur de la base de données SuiteCRM',
    'LBL_DBCONF_DB_ADMIN_PASSWORD' => 'Mot de passe de l\'administrateur de la base de données SuiteCRM',
    'LBL_DBCONF_COLLATION' => 'Interclassement',
    'LBL_DBCONF_CHARSET' => 'Encodage',
    'LBL_DBCONF_ADV_DB_CFG_TITLE' => 'Configuration avancée de la base de données',
    'LBL_DBCONF_DEMO_DATA' => 'Intégrer des données de démonstration dans la base de données ?',
    'LBL_DBCONF_DEMO_DATA_TITLE' => 'Choisir les données de démonstration',
    'LBL_DBCONF_HOST_NAME' => 'Nom d\'hôte',
    'LBL_DBCONF_HOST_INSTANCE' => 'Hôte Instance',
    'LBL_DBCONFIG_SECURITY' => 'Pour des raisons de sécurité, vous pouvez spécifier un utilisateur de base de données exclusif  à la base de données SuiteCRM. Cet utilisateur doit être capable d\'écrire, mettre à jour et extraire des données sur la base de données SuiteCRM qui sera créé pour cette instance. Cet utilisateur peut être l\'administrateur de base de données spécifié ci-dessus, ou vous pouvez fournir des informations de l\'utilisateur de la base de données nouvelle ou existante.',
    'LBL_DBCONFIG_PROVIDE_DD' => 'Insérer un utilisateur existant',
    'LBL_DBCONFIG_CREATE_DD' => 'Définir les utilisateurs à créer',
    'LBL_DBCONFIG_SAME_DD' => 'Similaire à l\'administrateur',
    'LBL_DBCONF_TITLE' => 'Configuration de la base de données',
    'LBL_DBCONF_TITLE_NAME' => 'Entrez un nom pour la base de données',
    'LBL_DBCONF_TITLE_USER_INFO' => 'Entrez les informations utilisateur pour la base de données',
    'LBL_DBCONF_TITLE_PSWD_INFO_LABEL' => 'Mot de passe',
    'LBL_DISABLED_DESCRIPTION_2' => 'Après que cette modification ai été appliquée, vous pouvez cliquer sur le bouton "Démarrer" ci-dessous pour commencer votre installation. <i> Une fois l\'installation terminée, vous devrez changer la valeur pour \'installer_locked\' à \'true\'. </ i>',
    'LBL_DISABLED_DESCRIPTION' => 'Le programme d\'installation a déjà été exécuté une fois. Par mesure de sécurité, il a été désactivée pour une nouvelle execution. Si vous êtes absolument sûr que vous voulez l\'exécuter à nouveau, veuillez modifier votre fichier config.php et localiser (ou ajouter) une variable appelée «installer_locked» avec la valeur «false». La ligne devrait ressembler à ceci:',
    'LBL_DISABLED_HELP_1' => 'Pour de l\'assistance à l\'installation, veuillez visiter le site SuiteCRM',
    'LBL_DISABLED_HELP_LNK' => 'https://community.suitecrm.com',
    'LBL_DISABLED_HELP_2' => 'Forums d\'assistance',
    'LBL_APP_NOT_INSTALLED' => 'SuiteCRM n\'est pas installé. Le point d\'entrée nécessite une installation de SuiteCRM, veuillez d\'abord l\'installer.',
    'LBL_DISABLED_TITLE_2' => 'L\'installation de SuiteCRM a été désactivée',
    'LBL_HELP' => 'Aide',
    'LBL_INSTALL' => 'Installation',
    'LBL_INSTALL_TYPE_TITLE' => 'Options d\'installation',
    'LBL_INSTALL_TYPE_SUBTITLE' => 'Choisir un type d\'installation',
    'LBL_INSTALL_TYPE_TYPICAL' => '<b>Installation standard</b>',
    'LBL_INSTALL_TYPE_CUSTOM' => '<b>Installation personnalisée</b>',
    'LBL_INSTALL_TYPE_MSG2' => 'Nécessite un minimum d\'informations pour l\'installation. Recommandé pour les nouveaux utilisateurs.',
    'LBL_INSTALL_TYPE_MSG3' => 'Fournit des options supplémentaires lors de l\'installation. La plupart de ces options sont également disponibles après l\'installation dans les écrans d\'administration. Recommandé pour les utilisateurs avancés.',
    'LBL_LANG_1' => 'Pour utiliser une langue dans SuiteCRM autre que la langue par défaut (anglais américain), vous pouvez télécharger et installer le pack de langue maintenant. Vous serez aussi en mesure de télécharger et installer des modules linguistiques dans SuiteCRM ultérieurement. Si vous souhaitez sauter cette étape, cliquez sur Suivant.',
    'LBL_LANG_BUTTON_COMMIT' => 'Installation',
    'LBL_LANG_BUTTON_REMOVE' => 'Retirer',
    'LBL_LANG_BUTTON_UNINSTALL' => 'Désinstaller',
    'LBL_LANG_BUTTON_UPLOAD' => 'Uploader',
    'LBL_LANG_NO_PACKS' => 'aucun',
    'LBL_LANG_PACK_INSTALLED' => 'Les packs de langue suivants ont été installés :',
    'LBL_LANG_PACK_READY' => 'Les packs de langues suivants sont prêts à être installés :',
    'LBL_LANG_SUCCESS' => 'Le pack de langue a été téléchargé avec succès.',
    'LBL_LANG_TITLE' => 'Pack de langue',
    'LBL_LAUNCHING_SILENT_INSTALL' => 'Installer SuiteCRM maintenant. L\'installation peut prendre quelques minutes.',
    'LBL_SILENT_INSTALL_SUCCESS' => 'SuiteCRM est installé avec succès.',
    'LBL_SILENT_INSTALL_FAILED' => 'L\'installation de SuiteCRM a échoué.',
    'LBL_LANG_UPLOAD' => 'Charger un pack de langue',
    'LBL_LICENSE_ACCEPTANCE' => 'Acceptation de licence',
    'LBL_LICENSE_CHECKING' => 'Vérification de compatibilité du système.',
    'LBL_LICENSE_CHKENV_HEADER' => 'Vérification de l\'environnement.',
    'LBL_LICENSE_CHKDB_HEADER' => 'Vérification des autorisations de la base de données.',
    'LBL_LICENSE_CHECK_PASSED' => 'Tests de compatibilité du systeme',
    'LBL_CREATE_CACHE' => 'Préparation de l\'installation...',
    'LBL_LICENSE_REDIRECT' => 'Redirection vers',
    'LBL_LICENSE_I_ACCEPT' => 'J\'accepte',
    'LBL_LICENSE_PRINTABLE' => 'Version imprimable',
    'LBL_PRINT_SUMM' => 'Sommaire de l\'impression',
    'LBL_LICENSE_TITLE_2' => 'Licence SuiteCRM',
    'LBL_LICENSE' => 'LICENCE',

    'LBL_LOCALE_NAME_FIRST' => 'Antoine',
    'LBL_LOCALE_NAME_LAST' => 'Dupont',
    'LBL_LOCALE_NAME_SALUTATION' => 'Dr.',

    'LBL_ML_ACTION' => 'Action',
    'LBL_ML_DESCRIPTION' => 'Description:',
    'LBL_ML_INSTALLED' => 'Date Installation',
    'LBL_ML_NAME' => 'Nom',
    'LBL_ML_PUBLISHED' => 'Date de publication',
    'LBL_ML_TYPE' => 'Type',
    'LBL_ML_UNINSTALLABLE' => 'Désinstallable',
    'LBL_ML_VERSION' => 'Version',
    'LBL_MSSQL' => 'Serveur SQL',
    'LBL_MSSQL2' => 'SQL Server (FreeTDS)',
    'LBL_MSSQL_SQLSRV' => 'SQL Server (Microsoft SQL Server Driver pour PHP)',
    'LBL_MYSQL' => 'MySQL',
    'LBL_MYSQLI' => 'MySQL (extension mysqli)',
    'LBL_NEXT' => 'Suivant',
    'LBL_NO' => 'Non',
    'LBL_PERFORM_ADMIN_PASSWORD' => 'Mot de passe admin site',
    'LBL_PERFORM_CONFIG_PHP' => 'Création du fichier de configuration SuiteCRM',
    'LBL_PERFORM_CREATE_DB_1' => '<b>Création de la base de données</b>',
    'LBL_PERFORM_CREATE_DB_2' => ' <b>sur</b> ',
    'LBL_PERFORM_CREATE_DB_USER' => 'Création de l\'utilisateur et du mot de passe de la base de données',
    'LBL_PERFORM_CREATE_DEFAULT' => 'Création des données par défaut de SuiteCRM',
    'LBL_PERFORM_DEFAULT_SCHEDULER' => 'Création des tâches planifiées par défaut',
    'LBL_PERFORM_DEFAULT_USERS' => 'Création des utilisateurs par standard',
    'LBL_PERFORM_DEMO_DATA' => 'Peupler la base de données avec des données de démonstration (cela peut prendre quelques instants)',
    'LBL_PERFORM_DONE' => 'fait<br>',
    'LBL_PERFORM_FINISH' => 'Terminer',
    'LBL_PERFORM_OUTRO_1' => 'L\'installation de SuiteCRM',
    'LBL_PERFORM_OUTRO_2' => 'est maintenant terminée !',
    'LBL_PERFORM_OUTRO_3' => 'Temps total :',
    'LBL_PERFORM_OUTRO_4' => 'secondes.',
    'LBL_PERFORM_OUTRO_5' => 'Mémoire utilisée :',
    'LBL_PERFORM_OUTRO_6' => 'bits.',
    'LBL_PERFORM_SUCCESS' => 'Succès !',
    'LBL_PERFORM_TABLES' => 'Création des tables application, audit et leurs métadonnées de relations',
    'LBL_PERFORM_TITLE' => 'Exécuter le programme d\'installation',
    'LBL_PRINT' => 'Imprimer',
    'LBL_REG_CONF_1' => 'Veuillez remplir le formulaire ci-dessous pour recevoir les annonces de produits, de nouvelles formation, offres spéciales et invitations à des événements spéciaux de SuiteCRM. Nous ne vendons pas, ni louons, ou partageons  les informations recueillies ici à des tiers.',
    'LBL_REG_CONF_3' => 'Merci de votre inscription. Cliquez sur le bouton Terminer pour se connecter à SuiteCRM. Vous devez ouvrir une session pour la première fois en utilisant le nom d\'utilisateur « admin » et le mot de passe saisi à l\'étape 2.',
    'LBL_REG_TITLE' => 'Enregistrement',

    'LBL_REQUIRED' => '* champs requis',

    'LBL_SITECFG_ADMIN_Name' => 'SuiteCRM  Admin',
    'LBL_SITECFG_ADMIN_PASS_2' => 'Ré-entrer le mot de passe Admin SuiteCRM',
    'LBL_SITECFG_ADMIN_PASS' => 'Mot de passe administrateur SuiteCRM',
    'LBL_SITECFG_APP_ID' => 'Application',
    'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => 'Si sélectionné, vous devez fournir un ID d\'application pour substituer le code généré automatiquement. L\'ID veille à ce que les séances d\'une instance de SuiteCRM ne sont pas utilisés par d\'autres instances.  Si vous disposez d\'un cluster d\'installations SuiteCRM, elles doivent partager le même ID de demande.',
    'LBL_SITECFG_CUSTOM_ID' => 'Fournir votre propre ID de l\'Application',
    'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => 'Si sélectionné, vous devez spécifier un répertoire de journaux pour remplacer le répertoire par défaut de SuiteCRM. Peu importe où se trouve le fichier journal, l\'accès via un navigateur web sera limitée par un .htaccess redirect.',
    'LBL_SITECFG_CUSTOM_LOG' => 'Utilisez un répertoire personnalisé de Log',
    'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => 'Si sélectionné, vous devez fournir un dossier sécurisé pour le stockage des informations de session SuiteCRM. Cela peut être fait pour empêcher les données de session d\'être vulnérables sur des serveurs mutualisés.',
    'LBL_SITECFG_CUSTOM_SESSION' => 'Utiliser un répertoire de Session personnalisé pour SuiteCRM',
    'LBL_SITECFG_FIX_ERRORS' => '<b>Veuillez réparer les erreurs suivantes avant de continuer :</b>',
    'LBL_SITECFG_LOG_DIR' => 'Répertoire des fichiers de log',
    'LBL_SITECFG_SESSION_PATH' => 'Chemin d\'accès au dossier de Session <br>(doit être accessible en écriture)',
    'LBL_SITECFG_SITE_SECURITY' => 'Choisir les options de sécurité',
    'LBL_SITECFG_SUITE_UP_DIRECTIONS' => 'Si sélectionné, le système vérifiera périodiquement les mises à jour de l\'application.',
    'LBL_SITECFG_SUITE_UP' => 'Vérifier automatiquement les mises à jour ?',
    'LBL_SITECFG_TITLE' => 'Configuration du site',
    'LBL_SITECFG_TITLE2' => 'Identifier l\'utilisateur Admin',
    'LBL_SITECFG_SECURITY_TITLE' => 'Sécurité du site',
    'LBL_SITECFG_URL' => 'URL de SuiteCRM',
    'LBL_SITECFG_ANONSTATS' => 'Envoyer des statistiques d\'usage anonymes ?',
    'LBL_SITECFG_ANONSTATS_DIRECTIONS' => 'Si sélectionné, SuiteCRM enverra des statistiques <b>anonymes</b> sur l\'installation à SuiteCRM Inc. Chaque fois que votre système vérifie les nouvelles versions. Cette information nous aidera à mieux comprendre comment l\'application est utilisée et nous guide pour les améliorations au produit.',
    'LBL_SITECFG_URL_MSG' => 'Entrez l\'URL qui sera utilisé pour accéder à SuiteCRM après l\'installation. L\'URL servira également comme base pour les URL dans les pages d\'application SuiteCRM. L\'URL doit inclure le serveur web ou la nom de l\'ordinateur ou l\'adresse IP.',
    'LBL_SITECFG_SYS_NAME_MSG' => 'Entrez un nom pour votre système.  Ce nom apparaît dans la barre de titre du navigateur lorsque les utilisateurs visitent l\'application SuiteCRM.',
    'LBL_SITECFG_PASSWORD_MSG' => 'Après l\'installation, vous devrez utiliser l\'utilisateur admin de SuiteCRM (par défaut le nom d\'utilisateur = admin) pour vous connecter à SuiteCRM.  Entrez un mot de passe pour cet administrateur. Ce mot de passe peut être changé après la connexion initiale.  Vous pouvez également entrer un autre nom que admin.',
    'LBL_SITECFG_COLLATION_MSG' => 'Sélectionnez les paramètres de classement (tri) pour votre système. Ces réglages permettent d\'obtenir les tableaux avec le langage spécifique que vous utilisez. Dans le cas où votre langue ne nécessite pas de paramètres spéciaux, veuillez utiliser la valeur par défaut.',
    'LBL_SPRITE_SUPPORT' => 'Support de sprite',
    'LBL_SYSTEM_CREDS' => 'Informations d\'identification système',
    'LBL_SYSTEM_ENV' => 'Environnement du système',
    'LBL_SHOW_PASS' => 'Montrer les mots de passe',
    'LBL_HIDE_PASS' => 'Cacher les mots de passe',
    'LBL_HIDDEN' => '<i>(caché)</i>',
    'LBL_STEP1' => 'Etape 1 sur 2 - Prérequis d\'installation',
    'LBL_STEP2' => 'Etape 2 sur 2 - Configuration',
    'LBL_STEP' => 'Etape',
    'LBL_TITLE_WELCOME' => 'Bienvenue dans SuiteCRM',
    'LBL_WELCOME' => 'Bienvenue!',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY' => 'Êtes-vous prêt à installer ?',
    'REQUIRED_SYS_COMP' => 'Composants système requis',
    'REQUIRED_SYS_COMP_MSG' =>
        'Avant de commencer, s’il vous plaît assurez-vous que vous avez les versions supportées de composants système suivants : <br><ul><li>système de gestion de base de données/base de données (exemples : MariaDB, MySQL ou SQL Server)</li> <li>Serveur Web (Apache, IIS)</li></ul> Consultez la matrice de compatibilité dans les notes de version des composants de système compatible pour la version SuiteCRM que vous installez. <br>',
    'REQUIRED_SYS_CHK' => 'Vérification système initiale',
    'REQUIRED_SYS_CHK_MSG' =>
        'Lorsque vous commencez le processus d’installation, une vérification du système se fera sur le serveur web sur lequel se trouvent les fichiers SuiteCRM afin de s’assurer que le système est correctement configuré et possède tous les composants nécessaires pour terminer l’installation. <br><br>Le système vérifie toutes les caractéristiques suivantes : <br><ul><li><b>version PHP</b> &#8211; doit être compatible avec l’application</li> <li><b>Variables de Session</b> &#8211; doit fonctionner correctement</li> <li><b>MB Strings</b> &#8211; doit être installé et activé dans le fichier php.ini</li> <li><b>/ / Database Support</b> &#8211; doit exister pour MariaDB, MySQL ou SQL Server</li> <li><b>Config.php</b> &#8211; doit exister et doit disposer des autorisations appropriées pour le rendre inscriptible</li> <li>les fichiers suivants de SuiteCRM doivent être accessible en écriture : <ul><li><b>/ custom</li> <li>cache /</li> <li>/ modules</li> <li>/ upload</b></li></ul></li></ul> si la vérification échoue, vous ne serez pas en mesure de procéder à l’installation. Un message d’erreur s’affichera, en expliquant pourquoi votre système ne passe pas le contrôle. Après avoir apporté les modifications nécessaires, vous pouvez subir la vérification du système à nouveau pour continuer l’installation. <br>',


    'REQUIRED_INSTALLTYPE' => 'Installation standard ou personnalisée',
    'REQUIRED_INSTALLTYPE_MSG' =>
        'Après que les vérifications système aient été effectuées, vous pouvez choisir
                      une installation <b>Standard</b> ou <b>Personnalisée</b>.<br><br>
                      Que vous ayez choisi une installation Standard ou Personnalisée, vous allez avoir besoin des éléments suivants :<br>
                      <ul>
                      <li> <b>Le type de base de données</b> utilisée pour les données de SuiteCRM <ul><li>Les bases de données suivantes sont compatibles : MariaDB, MySQL or SQL Server.<br><br></li></ul></li>
                      <li> <b>Le nom de votre serveur web</b> ou la machine (host) sur laquelle la base de données est installée
                      <ul><li>Ce peut-être <i>localhost</i> si la base de données est hébergée en local sur votre ordinateur ou s\'il s\'agit du même serveur que celui qui héberger vos fichiers SuiteCRM.<br><br></li></ul></li>
                      <li><b>Le nom de la base de données</b> que vous voulez utiliser pour vos données SuiteCRM</li>
                        <ul>
                          <li> Dans le cas ou vous souhaiteriez utiliser une base de données existante, l\'utilisation d\'un nom de base identique à celui d\'une base existante provoquera un écrasement des données lors de la création du schéma de base.</li>
                          <li> Si vous ne disposez pas déjà d\'une base de données existante, le nom fourni sera appliqué à la base de données crée pendant l\'installation.<br><br></li>
                        </ul>
                      <li><b>Le nom et le mot de passe du compte "administrateur" de la base de données</b> <ul><li>L\'administrateur de la base de données doit être en mesure de créer des tables, des utilisateurs et d\'écrire dans la base de données.</li><li>Vous pouvez être amené à contacteur l\'administrateur de votre système informatique pour cette information si la base de donnée ne se trouve pas en local sur votre ordinateur ou si vous n\'êtes pas vous même l\'administrateur de la base de données.<br><br></ul></li></li>
                      <li> <b>Le nom et le mot de passe du compte utilisateur de la base de données SuiteCRM</b>
                      </li>
                        <ul>
                          <li> L\'utilisateur peut être l\'administrateur de la base de données où vous pouvez indiquer le nom d\'un autre "utilisateur" de la base de données. </li>
                          <li> Si vous souhaitez créer un nouvel utilisateur pour cette base de données, vous serez en mesure de le créer (nom et mot de passe) pendant le processus d\'installation de SuiteCRM</li>
                        </ul></ul><p>

                      Pour une installation <b>Personnalisée</b>, Vous pouvez également avoir besoin des éléments suivants :<br>
                      <ul>
                      <li> <b>L\'URL utilisée pour accéder à votre installation SuiteCRM</b>.
                      Cette URL peut être le nom de la machine ou du serveur, comme une adresse IP.<br><br></li>
                                  <li> [Optionnel] <b>Le chemin du répertoire de la session SuiteCRM</b> si vous souhaitez utiliser un répertoire personnalisé pour protéger les informations de toute vulnérabilité en cas d\'utilisation sur un serveur partagé (mutualisé).<br><br></li>
                                  <li> [Optionnel] <b>Le chemin du répertoire personnalisé pour les Logs</b> si vous ne souhaitez pas utiliser l\'emplacement par défaut de SuiteCRM.<br><br></li>
                                  <li> [Optionnel] <b>L\'ID d\'application</b> si vous ne souhaitez pas utiliser l\'ID d\'application auto-généré. Cet ID contrôle que des sessions d\'une instance SuiteCRM ne puissent pas être utilisées sur une autre instance.<br><br></li>
                                  <li><b>Le type de caractères</b> le plus communément utilisé selon vos paramètres régionaux.<br><br></li></ul>
                                  Veuillez consulter le guide d\'installation pour des informations plus détaillées.
                                ',
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Veuillez lire les informations suivantes avant de procéder à l\'installation.  Ces informations vous aideront à déterminer si oui ou non vous êtes prêt à installer l\'application.',

    'LBL_WELCOME_CHOOSE_LANGUAGE' => '<b>Choisissez votre langue</b>',
    'LBL_WELCOME_SETUP_WIZARD' => 'Assistant d\'installation',
    'LBL_WIZARD_TITLE' => 'Assistant d\'installation SuiteCRM :',
    'LBL_YES' => 'Oui',

    'LBL_PATCHES_TITLE' => 'Installer les derniers correctifs',
    'LBL_MODULE_TITLE' => 'installer les packs de langues',
    'LBL_PATCH_1' => 'Si vous souhaitez passer cette étape, clickez sur "suivant"',
    'LBL_PATCH_TITLE' => 'Correctif système',
    'LBL_PATCH_READY' => 'Les correctifs suivants sont prêts à être installés :',
    'LBL_SESSION_ERR_DESCRIPTION' => "SuiteCRM s'appuie sur les sessions PHP pour stocker des informations importantes tout en étant connecté à ce serveur web.  Votre installation de PHP n'a pas les informations de Session configurées correctement.
											<br><br>Une mauvaise configuration commune est que la directive de <b>'session.save_path'</b> ne pointe pas vers un répertoire valide.  <br><br>S'il vous plaît corriger votre <a target=_new href='http://us2.php.net/manual/en/ref.session.php'> configuration de PHP</a> dans le fichier php.ini situé ici dessous.",
    'LBL_SESSION_ERR_TITLE' => 'Erreur de Configuration des Sessions PHP',
    'LBL_SYSTEM_NAME' => 'Nom du Système',
    'LBL_COLLATION' => 'Paramètres de classement',
    'LBL_REQUIRED_SYSTEM_NAME' => 'Fournissez un nom de système pour l\'instance de SuiteCRM.',
    'LBL_PATCH_UPLOAD' => 'Choisir un fichier de correctif à partir de l\'ordinateur local',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'PHP version 5 ou supérieure est requis.',
    'LBL_MINIMUM_PHP_VERSION' => 'Version minimale de PHP requise : 5.1.0 - SuiteCRM recommande PHP version 5.2.x',
    'LBL_YOUR_PHP_VERSION' => '(Votre version courante de PHP est la',
    'LBL_RECOMMENDED_PHP_VERSION' => 'La version recommandée est la 5.2.x)',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Php Backward Compatibility mode est positionné à on. Mettre zend.ze1_compatibility_mode à Off pour pouvoir continuer',
    'LBL_STREAM' => 'PHP permet d\'utiliser les flux',

    'advanced_password_new_account_email' => array(
        'subject' => 'Coordonnées du nouveau compte',
        'type' => 'système',
        'description' => 'Ce modèle est utilisé lorsque l\'administrateur système envoie un nouveau mot de passe à un utilisateur.',
        'body' => '<div><table border=\\"0\\" cellspacing=\\"0\\" cellpadding=\\"0\\" width="550" align=\\"\\&quot;\\&quot;center\\&quot;\\&quot;\\"><tbody><tr><td colspan=\\"2\\"><p>Voici votre nom d\'utilisateur et votre mot de passe temporaire :</p><p>Nom d\'utilisateur : $contact_user_user_name </p><p>Mot de passe : $contact_user_user_hash </p><br><p>$config_site_url</p><br><p>Après vous être logué en utilisant le mot de passe ci-dessus, vous pourrez le réinitialiser avec un mot de passe de votre choix.</p>   </td>         </tr><tr><td colspan=\\"2\\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
Vous trouverez ci-après votre nom d\'utilisateur et votre mot de passe provisoire :
Nom d\'utilisateur : $contact_user_user_name
Mot de passe : $contact_user_user_hash

$config_site_url

Après votre connexion avec le mot de passe provisoire ci-dessus, il peut vous être demandé de le réinitialiser avec un nouveau mot de passe de votre choix.',
        'name' => 'Email Mot de Passe Généré par Système',
    ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'Réinitialisez le mot de passe de votre compte',
        'type' => 'système',
        'description' => "Ce modèle est utilisé pour envoyer à l'utilisateur un lien à cliquer pour réinitialiser son mot de passe.",
        'body' => '<div><table border=\\"0\\" cellspacing=\\"0\\" cellpadding=\\"0\\" width="550" align=\\"\\&quot;\\&quot;center\\&quot;\\&quot;\\"><tbody><tr><td colspan=\\"2\\"><p>Vous avez récemment demandé à modifier le mot de passe du compte $contact_user_pwd_last_changed. </p><p>Cliquez sur le lien ci-dessous pour réinitialiser le mot de passe : </p><p> $contact_user_link_guid </p>  </td>         </tr><tr><td colspan=\\"2\\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
Vous avez récemment demandé sur $contact_user_pwd_last_changed à pouvoir réinitialiser votre mot de passe.

Suivez le lien ci-dessous celui-ci :

$contact_user_link_guid',
        'name' => 'Mot de passe Email oublié',
    ),


    'two_factor_auth_email' => array(
        'subject' => 'Code d\'authentification en deux étapes',
        'type' => 'système',
        'description' => "Ce modèle est utilisé pour envoyer à un utilisateur un Code d'authentification en deux étapes.",
        'body' => '<div><table border=\\"0\\" cellspacing=\\"0\\" cellpadding=\\"0\\" width="550" align=\\"\\&quot;\\&quot;center\\&quot;\\&quot;\\"><tbody><tr><td colspan=\\"2\\"><p>Code d\'authentification en deux étapes est <b>$code</b>.</p>  </td>         </tr><tr><td colspan=\\"2\\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            'Code d\'authentification en deux étapes est $code.',
        'name' => 'Email d\'authentification en deux étapes',
    ),

    // SMTP settings

    'LBL_FROM_NAME' => 'Nom Expéditeur :',
    'LBL_FROM_ADDR' => 'Email Expéditeur :',

    'LBL_WIZARD_SMTP_DESC' => 'Fournissez le compte de messagerie qui sera utilisé pour envoyer des emails, tels que les notifications d\'assignations et les mots de passe des nouveaux utilisateurs. Les utilisateurs recevront les emails du CRM envoyés à partir du compte email spécifié.',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Choisissez votre fournisseur de messagerie email fzmploykjchkj:',

    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Autre',
    'LBL_MAIL_SMTP_SETTINGS' => 'Configuration SMTP',
    'LBL_MAIL_SMTPSERVER' => 'Serveur SMTP:',
    'LBL_MAIL_SMTPPORT' => 'Port SMTP :',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Utiliser l\'authentification SMTP?',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Activer SMTP au travers de SSL ou TLS?',
    'LBL_GMAIL_SMTPUSER' => 'Gmail - Email:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail - Mot de passe:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Autoriser les utilisateurs à utiliser ces paramétres pour l\'envoi d\'emails:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Lorsque cette option est sélectionnée, tous les utilisateurs seront en mesure d\'envoyer des emails en utilisant le même serveur d\'envoi d\'emails, ces paramétres sont aussi utilisé pour envoyer les notifications et les alertes du système. Si cette option n\'est pas sélectionnée, les utilisateurs pourront toujours utiliser le serveur d\'envoi d\'emails de leurs choix après avoir fourni leurs informations dans leur compte utilisateur.',

    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail - Mot de passe:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID:',

    'LBL_EXCHANGE_SMTPPASS' => 'Exchange - Mot de passe:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange - Nom Utilisateur:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange - Port SMTP:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange - Serveur SMTP:',


    'LBL_MAIL_SMTPUSER' => 'Nom Utilisateur SMTP:',
    'LBL_MAIL_SMTPPASS' => 'Mot de passe SMTP :',

    // Branding

    'LBL_WIZARD_SYSTEM_TITLE' => 'Identité visuelle',
    'LBL_WIZARD_SYSTEM_DESC' => 'Fournissez le nom et le logo de votre organisation afin de personnaliser votre SuiteCRM.',
    'SYSTEM_NAME_WIZARD' => 'Nom:',
    'SYSTEM_NAME_HELP' => 'C\'est le nom qui s\'affiche dans la barre de titre de votre navigateur.',
    'NEW_LOGO' => 'Choisissez logo (450x17)',
    'NEW_LOGO_HELP' => 'L\'image doit être au format .png ou .jpg. La hauteur maximale est de 170px et la largeur maximale est de 450px. Toutes images aux dimensions supérieures à ces valeurs sera redimensionnée aux valeurs maximales indiquées.',
    'COMPANY_LOGO_UPLOAD_BTN' => 'Uploader',
    'CURRENT_LOGO' => 'Logo actuel',
    'CURRENT_LOGO_HELP' => 'Ce logo est affiché dans le milieu de l\'écran de connexion de votre application SuiteCRM.',


    //Scenario selection of modules
    'LBL_WIZARD_SCENARIO_TITLE' => 'Sélection de scénario',
    'LBL_WIZARD_SCENARIO_DESC' => 'Il s’agit de permettre de présenter les modules selon vos besoins.  Chaque module peut être activé après l’installation à l’aide de la page d’administration.',
    'LBL_WIZARD_SCENARIO_EMPTY' => 'Il n’y a aucun scénario actuellement définis dans le fichier de configuration (config.php)',


    // System Local Settings


    'LBL_LOCALE_TITLE' => 'Paramètres régionaux du système',
    'LBL_WIZARD_LOCALE_DESC' => 'Précisez comment vous souhaitez afficher vos données dans SuiteCRM, basé sur votre situation géographique. Les paramètres que vous fournissez ici seront les paramètres par défaut. Les utilisateurs pourront définir leurs propres préférences dans Mon compte.',
    'LBL_DATE_FORMAT' => 'Format de date :',
    'LBL_TIME_FORMAT' => 'Format de temps:',
    'LBL_TIMEZONE' => 'Fuseau horaire :',
    'LBL_LANGUAGE' => 'Langue:',
    'LBL_CURRENCY' => 'Devise :',
    'LBL_CURRENCY_SYMBOL' => 'Symbole de la devise :',
    'LBL_CURRENCY_ISO4217' => 'Codification de la devise ISO 4217 :',
    'LBL_NUMBER_GROUPING_SEP' => 'Séparateur des milliers',
    'LBL_DECIMAL_SEP' => 'Séparateur pour les nombres décimaux',
    'LBL_NAME_FORMAT' => 'Format du nom :',
    'UPLOAD_LOGO' => 'Veuillez patienter, chargement du logo...',
    'ERR_UPLOAD_FILETYPE' => 'Format de fichier non autorisé, veuillez télécharger un fichier jpeg ou png.',
    'ERR_LANG_UPLOAD_UNKNOWN' => 'Une erreur inconnue s\'est produite lors du chargement du fichier.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_INI_SIZE' => 'Le fichier chargé dépasse la valeur upload_max_filesize dans php.ini.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_FORM_SIZE' => 'Le fichier chargé dépasse la valeur MAX_FILE_SIZE spécifiée dans le formulaire HTML.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_PARTIAL' => 'Le fichier a été chargé partiellement.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_FILE' => 'Aucun fichier chargé.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_TMP_DIR' => 'Répertoire temporaire absent.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_CANT_WRITE' => 'Impossible d\'écrire le fichier sur le disque.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_EXTENSION' => 'Une extension PHP a stoppé le téléchargement du fichier. PHP ne fournit pas le moyen de connaître l\'extension qui a stoppé le téléchargement du fichier.',

    'LBL_INSTALL_PROCESS' => 'Installation...',

    'LBL_EMAIL_ADDRESS' => 'Adresse Email :',
    'ERR_ADMIN_EMAIL' => 'L\'adresse de courriel de l\'administrateur est incorrecte.',
    'ERR_SITE_URL' => 'L\'URL du site est nécessaire.',

    'STAT_CONFIGURATION' => 'Relations de configuration...',
    'STAT_CREATE_DB' => 'Créer une base de données...',

    'STAT_CREATE_DEFAULT_SETTINGS' => 'Création des paramètres par défaut...',
    'STAT_INSTALL_FINISH' => 'Installation terminée...',
    'STAT_INSTALL_FINISH_LOGIN' => 'Le processus d\'installation est terminé, <a href="%s"> veuillez ouvrir une session...</a>',
    'LBL_LICENCE_TOOLTIP' => 'Veuillez accepter la licence en premier',

    'LBL_MORE_OPTIONS_TITLE' => 'Plus d\'options',
    'LBL_START' => '',
    'LBL_DB_CONN_ERR' => 'Erreur de base de données',
    'LBL_OLD_PHP' => 'Ancienne Version PHP détectée !',
    'LBL_OLD_PHP_MSG' => 'La version PHP recommandée pour installer SuiteCRM est %s < br /> bien que la version PHP minimale requise est %s, n’est pas recommandé en raison du grand nombre de bugs corrigés, y compris les corrections de sécurité, dans les versions plus modernes. < br /> vous utilisez PHP, version %s, qui est EOL : <a href="http://php.net/eol.php"> http://php.net/eol.php</a>. < br />s’il vous plaît envisager de mettre à jour votre version PHP. Instructions sur <a href="http://php.net/migration70"> http://php.net/migration70</a>. ',
    'LBL_OLD_PHP_OK' => 'Je suis conscient des risques et souhaite continuer.',

    'LBL_DBCONF_TITLE_USER_INFO_LABEL' => 'Utilisateur',
    'LBL_DBCONFIG_MSG3_LABEL' => 'Nom de la base de données',
    'LBL_DBCONFIG_MSG3' => 'Nom de la base de données qui contiendra les données de l\'instance SuiteCRM que vous vous apprêtez à installer:',
    'LBL_DBCONFIG_MSG2_LABEL' => 'Nom d\'hôte',
    'LBL_DBCONFIG_MSG2' => 'Serveur web ou machine (hôte) sur lequel la base de données se trouve (par exemple, www.mydomain.com). Si vous installez localement, il est préférable d’utiliser « localhost » que \'127.0.0.1 », pour des raisons de performances.',
    'LBL_DBCONFIG_B_MSG1_LABEL' => '', // this label dynamically needed in install/installConfig.php:293
    'LBL_DBCONFIG_B_MSG1' => 'Le nom d\'utilisateur et mot de passe d\'un administrateur de base de données qui peut créer des tables , des bases de données et des utilisateurs et qui écrire dans la base de données est nécessaire pour mettre en place SuiteCRM.',
    'LBL_SYS_CHECK_WARNING' => 'Ignorer les Avertissements Système',
    'LBL_PROCEED' => 'POURSUIVRE',
    'LBL_CONFIG' => 'CONFIGURATION',
    'LBL_VALIDATION_ERRORS' => 'Il y a des erreurs de validation, impossible d\'effectuer l\'action.'
);
