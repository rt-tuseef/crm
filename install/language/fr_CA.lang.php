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
    'LBL_ADVANCED_SEARCH' => 'Filtre avanc??',
    'LBL_BASIC_TYPE' => 'Type de base',
    'LBL_ADVANCED_TYPE' => 'Type avanc??',
    'LBL_SYSOPTS_2' => 'Quel type de base de donn??e sera utilis??e pour cette installation de SuiteCRM ?',
    'LBL_SYSOPTS_DB' => 'Pr??ciser le type de base de donn??e',
    'LBL_SYSOPTS_DB_TITLE' => 'Type de base de donn??e',
    'LBL_SYSOPTS_ERRS_TITLE' => 'Veuillez r??parer les erreurs suivantes avant de continuer :',
    'ERR_DB_VERSION_FAILURE' => 'Impossible de v??rifier la version de la base de donn??es.',
    'DEFAULT_CHARSET' => 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK' => 'Saisissez le nom d\'utilisateur de l\'administrateur de SuiteCRM.',
    'ERR_ADMIN_PASS_BLANK' => 'Saisissez le mode de passe de l\'administrateur de SuiteCRM.',

    'ERR_CHECKSYS' => 'Des erreurs ont ??t?? d??tect??es pendant le test de compatibilit??. Veuillez mettre en place les mesures correctives n??cessaires au bon fonctionnement de SuiteCRM avant de relancer le test de compatibilit?? ou une nouvelle installation.',
    'ERR_CHECKSYS_CALL_TIME' => 'Allow Call Time Pass Reference est sur On (elle doit ??tre pass??e ?? Off dans php.ini)',
    'ERR_CHECKSYS_CURL' => 'Non trouv?? : le planificateur de SuiteCRM fonctionnera de mani??re limit??e.',
    'ERR_CHECKSYS_IMAP' => 'Non trouv?? : Les fonctions de campagnes mail et gestion des mails entrant n??cessitent la pr??sence des librairies IMAP. Ces fonctions ne sont donc pas activ??es.',
    'ERR_CHECKSYS_MEM_LIMIT_1' => '(Veuillez r??gler ceci sur',
    'ERR_CHECKSYS_MEM_LIMIT_2' => 'M ou plus dans votre fichier php.ini)',
    'ERR_CHECKSYS_NOT_WRITABLE' => 'Avertissement : ??criture impossible',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Votre version de PHP n\'est pas support??e par SuiteCRM. Vous devez installer une version de PHP compatible avec SuiteCRM. Merci de consulter la matrice de compatibilit?? disponible dans le document "Release Notes" pour voir quelle versions de PHP sont support??es par SuiteCRM. Votre version actuelle est',
    'ERR_CHECKSYS_IIS_INVALID_VER' => 'Votre version d\'IIS est pas support??e par SuiteCRM. Vous devez installer une version de PHP compatible avec SuiteCRM. Merci de consulter la matrice de compatibilit?? disponible dans le document "Release Notes" pour voir quelle versions de PHP sont support??es par SuiteCRM. Votre version actuelle est',
    'ERR_CHECKSYS_FASTCGI' => 'Nous d??tectons que vous n\'utilisez pas FastCGI pour PHP. Vous devez installer une version de PHP compatible avec SuiteCRM. Merci de consulter la matrice de compatibilt?? disponible dans le document "Release Notes" pour voir quelle versions de PHP sont support??es par SuiteCRM. Retrouvez tous les d??tails sur<a href="http://www.iis.net/php/" target="_blank">http://www.iis.net/php/</a>',
    'ERR_CHECKSYS_FASTCGI_LOGGING' => 'Pour une utilisation optimale de IIS/FastCGI, positionnez le param??tre fastcgi.logging ?? 0 dans votre fichier php.ini.',
    'LBL_DB_UNAVAILABLE' => 'Base de donn??e non disponible',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'Nous ne trouvons pas de support de base de donn??es. Veuillez v??rifier que vous disposez bien des pilotes n??cessaires pour l\'un des types de bases de donn??es suivant : MySQL ou MS SQL Server. Vous pouvez avoir besoin de d??-commenter l\'extension dans votre fichier php.ini ou de recompiler avec les bons binaires, selon votre version de PHP. Veuillez vous r??f??rer au manuel de PHP pour savoir comment activer le support pour bases de donn??es.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE' => 'Nous ne trouvons pas de support pour les fonctions associ??es aux librairies XML Parser requises pour SuiteCRM. Vous pouvez avoir besoin de d??-commenter l\'extension dans votre fichier php.ini ou de recompiler avec les bons binaires, selon votre version de PHP. Veuillez vous r??f??rer au manuel de PHP pour savoir comment activer le support pour bases de donn??es.',
    'ERR_CHECKSYS_MBSTRING' => 'Les fonctions associ??es ?? l\'extension PHP cha??nes de caract??re multi-octets (mbstring) qui sont n??cessaires ?? l\'application SuiteCRM n\'ont pas ??t?? trouv??es. <br/> <br/> G??n??ralement, le module mbstring n\'est pas activ?? par d??faut dans PHP et doit ??tre activ?? avec l\'option--enable-mbstring lorsque le binaire PHP est g??n??r??. Veuillez vous r??f??rer au manuel PHP pour plus d\'informations sur la fa??on d\'activer le support de mbstring.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE' => 'The config file exists but is not writeable. Please take the necessary steps to make the file writeable. Depending on your Operating system, this might require you to change the permissions by running chmod 766, or to right click on the filename to access the properties and uncheck the read only option.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE' => 'Le fichier de substitution de configuration existe mais n\'est pas accessible en ??criture.  Veuillez faire le n??cessaire pour rendre le fichier accessible en ??criture.  Selon votre syst??me d\'exploitation, vous devez modifier les permissions en ex??cutant un chmod 766 sur le fichier, ou faire un clic droit sur le nom de fichier pour acc??der aux propri??t??s et d??cochez l\'option lecture seule.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE' => 'Le r??pertoire personnalis?? existe mais n\'est pas accessible en ??criture.  Vous devrez peut-??tre modifier les autorisations sur (chmod 766) ou faites un clic droit dessus et d??cocher l\'option lecture seule, selon votre syst??me d\'exploitation.  Veuillez prendre les mesures n??cessaires pour rendre le fichier accessible en ??criture.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE' => "Les fichiers ou les r??pertoires list??s ci-dessous ne sont pas accessible en ??criture, sont manquants ou ne peuvent pas ??tre cr????s.  Selon votre syst??me d'exploitation, corriger ceci peut vous obliger ?? modifier les autorisations sur les fichiers ou le r??pertoire parent (chmod 755), ou de faire un clic droit sur le r??pertoire parent et d??cochez l'option ?? lecture seule ?? et l'appliquer ?? tous les sous-dossiers.",
    'ERR_CHECKSYS_JSON_NOT_AVAILABLE' => "Les fonctions associ??es aux biblioth??ques JSON Parser n??cessaires ?? l'application SuiteCRM n'ont pas ??t?? trouv??es. Vous devrez peut-??tre d??commenter l'extension dans le php. , ou recompiler avec le bon fichier binaire, selon votre version de PHP.",
    'LBL_CHECKSYS_OVERRIDE_CONFIG' => 'Remplacer la configuration',
    'ERR_CHECKSYS_SAFE_MODE' => 'Le Safe Mode est activ?? (vous pouvez le d??sactiver dans le fichier php.ini)',
    'ERR_CHECKSYS_ZLIB' => 'Le support ZLib introuvable : SuiteCRM tire des avantages de performances ??normes avec la compression ZLib.',
    'ERR_CHECKSYS_ZIP' => 'Le support ZIP n\'a pas ??t?? trouv?? : SuiteCRM a besoin du support ZIP pour traiter les fichiers compress??s.',
    'ERR_CHECKSYS_PCRE' => 'Version de la biblioth??que PCRE introuvable : SuiteCRM n??cessite la biblioth??que PCRE pour g??rer les expressions r??guli??res de style Perl.',
    'ERR_CHECKSYS_PCRE_VER' => 'Version de la biblioth??que PCRE : SuiteCRM n??cessite la biblioth??que PCRE 7.0 ou ult??rieur pour g??rer les expressions r??guli??res de style Perl.',
    'ERR_DB_ADMIN' => 'Les informations de connexion a la base de donn??es utilisateur et/ou mot de passe sont erron??es, la connexion n\'a pas pu s\'effectuer. Merci de renseigner un utilisateur et un mot de passe valides.  (Error: ',
    'ERR_DB_ADMIN_MSSQL' => 'Les informations de connexion a la base de donn??es utilisateur et/ou mot de passe sont erron??es, la connexion n\'a pas pu s\'effectuer. Merci de renseigner un utilisateur et un mot de passe valides.',
    'ERR_DB_EXISTS_NOT' => 'La base de donn??es sp??cifi??e n\'existe pas.',
    'ERR_DB_EXISTS_WITH_CONFIG' => 'La base de donn??es existe d??j?? avec ces donn??es de configuration. Pour ex??cuter une installation avec la base de donn??es choisie, r??-ex??cuter l\'installation et choisissez : "Supprimer les tables existantes et les recr??er?" Pour mettre ?? jour, utiliser l\'Assistant de mise ?? niveau depuis la console d\'administration. Veuillez consulter la documentation de mise ?? niveau <a href="https://docs.suitecrm.com/admin/installation-guide/upgrading/" target="_new">ici</a>.',
    'ERR_DB_EXISTS' => 'Une base de donn??e existe d??j?? sous le nom fourni. Nous ne pouvons cr??er une nouvelle base sous le m??me nom.',
    'ERR_DB_EXISTS_PROCEED' => 'Le Nom de base de donn??es fourni existe d??j??. Vous pouvez <br> 1. cliquez sur le bouton retour et choisir un nouveau nom de base de donn??es <br> 2. Cliquez sur Suivant pour continuer, mais toutes les tables existantes sur cette base de donn??es seront supprim??es. <strong> Vos tables et les donn??es seront detruites. </ strong>',
    'ERR_DB_HOSTNAME' => 'Le nom d\'h??te ne peut ??tre vide.',
    'ERR_DB_INVALID' => 'Le type de base de donn??es s??lectionn?? est invalide.',
    'ERR_DB_LOGIN_FAILURE_SHORT' => 'Erreur de connexion ?? la base de donn??es: Le nom d\'h??te, nom d\'utilisateur et/ou mot de passe fourni est invalide.',
    'ERR_DB_LOGIN_FAILURE' => 'Les informations de connexion a la base de donn??es utilisateur et/ou mot de passe sont erron??es, la connexion n\'a pas pu s\'effectuer. Merci de renseigner un utilisateur et un mot de passe valides.',
    'ERR_DB_LOGIN_FAILURE_MYSQL' => 'Les informations de connexion a la base de donn??es utilisateur et/ou mot de passe sont erron??es, la connexion n\'a pas pu s\'effectuer. Merci de renseigner un utilisateur et un mot de passe valides.',
    'ERR_DB_LOGIN_FAILURE_MSSQL' => 'Les informations de connexion a la base de donn??es utilisateur et/ou mot de passe sont erron??es, la connexion n\'a pas pu s\'effectuer. Merci de renseigner un utilisateur et un mot de passe valides.',
    'ERR_DB_MYSQL_VERSION' => 'Votre version de MySQL (%s) n\'est pas compatible avec SuiteCRM. Vous devez installer une version compatible.Veuillez consulter la grille de compatibilit?? dans les releases notes afin de d??terminer les versions support??es.',
    'ERR_DB_NAME' => 'Le nom de la base de donn??e ne peut ??tre vide.',
    'ERR_DB_MYSQL_DB_NAME_INVALID' => "Le nom de la base de donn??e ne peut contenir les caract??res '\\', '/', ou '.'",
    'ERR_DB_MSSQL_DB_NAME_INVALID' => "Le nom de la base de donn??e ne peut commencer par un nombre, un '#' ou un '@' et ne peut contenir, un espace, les caract??res '\"', \"'\", '*', '/', '\\', '?', ':', '<', '>', '&', '!', ou '-'",
    'ERR_DB_OCI8_DB_NAME_INVALID' => "Le nom de la base de donn??e ne peut ??tre compos?? que de caract??res alphanum??riques et des symboles  '#', '_' ou '$'",
    'ERR_DB_PASSWORD' => 'Le mot de passe fourni pour l\'administrateur de la base de donn??es SuiteCRM ne correspond pas. Veuillez re-saisir le mot de passe dans le formulaire.',
    'ERR_DB_PRIV_USER' => 'Merci de renseigner un utilisateur de base de donn??es.Cet utilisateur est n??c??ssaire pour la connexion ?? la base de donn??es.',
    'ERR_DB_USER_EXISTS' => 'Ce nom d\'utilisateur est d??ja pr??sent dans la base SuiteCRM -- Impossible de cr??er deux utilisateur identiques-- Merci de saisir un nouveau nom d\'utilisateur',
    'ERR_DB_USER' => 'Entrez un nom pour l\'administrateur de la base de donn??es SuiteCRM.',
    'ERR_DBCONF_VALIDATION' => 'Veuillez corriger les erreurs suivantes avant de continuer :',
    'ERR_DBCONF_PASSWORD_MISMATCH' => 'Les mots de passe fournis pour l\'utilisateur de base de donn??es SuiteCRM ne correspondent pas. S\' il vous pla??t,entrer de nouveau les m??mes mots de passe dans les champs de mot de passe .',
    'ERR_ERROR_GENERAL' => 'Les erreurs suivantes ont ??t?? rencontr??es :',
    'ERR_LANG_CANNOT_DELETE_FILE' => 'Impossible de supprimer ce fichier :',
    'ERR_LANG_MISSING_FILE' => 'Fichier introuvable :',
    'ERR_LANG_NO_LANG_FILE' => 'Aucun fichier de langue trouv?? dans "include/language" :',
    'ERR_LANG_UPLOAD_1' => 'Une erreur s\'est produite pendant le t??l??chargement. Veuillez r??-essayer.',
    'ERR_LANG_UPLOAD_2' => 'Les packs de langue doivent ??tre des fichiers ZIP.',
    'ERR_LANG_UPLOAD_3' => 'PHP ne peut pas d??placer le r??pertoire temporaire vers le r??pertoire de mise ?? jour.',
    'ERR_LOG_DIRECTORY_NOT_EXISTS' => 'Le r??pertoire de log indiqu?? n\'est pas valide.',
    'ERR_LOG_DIRECTORY_NOT_WRITABLE' => 'Le r??pertoire de log indiqu?? n\'est pas accessible en ??criture.',
    'ERR_NO_DIRECT_SCRIPT' => 'Le script n\'a pu ??tre ex??cut??.',
    'ERR_NO_SINGLE_QUOTE' => 'Impossible d\'utiliser le simple guillemet pour ',
    'ERR_PASSWORD_MISMATCH' => 'Les mots de passe fournis pour l\'admin SuiteCRM ne correspondent pas. S\'il vous pla??t entrer de nouveau les m??mes mots de passe dans les champs de mot de passe .',
    'ERR_PERFORM_CONFIG_PHP_1' => 'Impossible d\'??crire dans le fichier <span class=stop>config.php</span> ',
    'ERR_PERFORM_CONFIG_PHP_2' => 'Vous pouvez continuer cette installation en cr??ant manuellement un fichier config.php et en y collant les informations ci-dessous. Cependant, vous <strong>devez</strong> cr??er le fichier config.php avant de continuer vers l\'??tape suivante.',
    'ERR_PERFORM_CONFIG_PHP_3' => 'Avez vous bien cr???? le fichier config.php ?',
    'ERR_PERFORM_CONFIG_PHP_4' => 'Attention : Impossible d\'??crire dans le fichier config.php. Veuillez v??rifier qu\'il existe.',
    'ERR_PERFORM_HTACCESS_1' => 'Impossible d\'??crire dans le',
    'ERR_PERFORM_HTACCESS_2' => 'fichier.',
    'ERR_PERFORM_HTACCESS_3' => 'Si vous voulez emp??cher les fichiers de log d\'??tre accessibles par un navigateur, veuillez cr??er un fichier .htaccess dans le r??pertoire des logs avec la ligne suivante :',
    'ERR_PERFORM_NO_TCPIP' => '<b>Nous ne pouvions pas d??tecter une connexion Internet.</b> Lorsque vous avez une connexion , rendez-vous sur <a href="http://www.suitecrm.com/">http://www.suitecrm.com/</a> pour vous enregistrer aupr??s SuiteCRM . En nous faisant connaitre un peu plus sur la fa??on dont votre soci??t?? pr??voit d\'utiliser SuiteCRM , nous pourrons vous assurer que nous fournirons la bonne application pour vos besoins professionnels.',
    'ERR_SESSION_DIRECTORY_NOT_EXISTS' => 'Le r??pertoire de sessions n\'est pas un dossier valide.',
    'ERR_SESSION_DIRECTORY' => 'Le r??pertoire de sessions n\'est pas accessible en ??criture.',
    'ERR_SESSION_PATH' => 'Le chemin de sessions est requis si vous souhaitez sp??cifier votre propre r??p??rtoire.',
    'ERR_SI_NO_CONFIG' => 'Vous n\'avez pas inclus config_si.php dans la racine du dossier, ou vous n\'avez pas d??fini $sugar_config dans le fichier config.php.',
    'ERR_SITE_GUID' => 'Un ID d\'application est requis si vous souhaitez sp??cifier votre propre application.',
    'ERROR_SPRITE_SUPPORT' => "Nous ne sommes pas en mesure de localiser la biblioth??que GD, par cons??quent, vous ne serez pas en mesure d'utiliser la fonctionnalit?? CSS Sprite.",
    'ERR_UPLOAD_MAX_FILESIZE' => 'Avertissement: Votre configuration de PHP doit ??tre modifi?? pour permettre l\'upload de fichiers d\'au moins 6 Mo.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE' => 'Taille max des fichiers autoris??e en upload',
    'ERR_URL_BLANK' => 'Indiquer l\'adresse URL de base pour l\'installation SuiteCRM',
    'ERR_UW_NO_UPDATE_RECORD' => 'Impossible de localiser le fichier d\'installation de',
    'ERROR_MANIFEST_TYPE' => 'Le fichier Manifest doit sp??cifier le type du package.',
    'ERROR_PACKAGE_TYPE' => 'Le fichier Manifest sp??cifie un type de package inconnu',
    'ERROR_VERSION_INCOMPATIBLE' => 'Le fichier t??l??charg?? n\'est pas compatible avec cette version du CRM:',

    'LBL_BACK' => 'Pr??c??dent',
    'LBL_CANCEL' => 'Annuler/Fermer',
    'LBL_ACCEPT' => 'J\'accepte',
    'LBL_CHECKSYS_CACHE' => 'Dossier Cache accessible en ??criture',
    'LBL_DROP_DB_CONFIRM' => 'La base de donn??es sp??cifi??e existe d??j?? <br> Vous pouvez soit:. <br> 1. Cliquez sur le bouton Annuler et choisir une autre base de donn??es, ou <br> 2. Cliquez sur le bouton Accepter et continuer. Toutes les tables existantes dans la base de donn??es seront supprim??es. <strong> Cela signifie que toutes les tables et les donn??es pr??existantes seront d??truites. </ strong>
',
    'LBL_CHECKSYS_COMPONENT' => 'Composant',
    'LBL_CHECKSYS_CONFIG' => 'Fichier de configuration SuiteCrm (config.php) accessible en ??criture ',
    'LBL_CHECKSYS_CURL' => 'Module cURL',
    'LBL_CHECKSYS_CUSTOM' => 'Dossier Custom accessible en ??criture',
    'LBL_CHECKSYS_DATA' => 'Dossier Data accessible en ??criture',
    'LBL_CHECKSYS_IMAP' => 'Module IMAP',
    'LBL_CHECKSYS_FASTCGI' => 'FastCGI',
    'LBL_CHECKSYS_MBSTRING' => 'Module MB Strings',
    'LBL_CHECKSYS_MEM_OK' => 'OK (pas de limites)',
    'LBL_CHECKSYS_MEM_UNLIMITED' => 'OK (illimit??)',
    'LBL_CHECKSYS_MEM' => 'Limite de la m??moire PHP',
    'LBL_CHECKSYS_MODULE' => 'Dossier Modules et Files accessible en ??criture',
    'LBL_CHECKSYS_NOT_AVAILABLE' => 'Non Disponible',
    'LBL_CHECKSYS_OK' => 'Ok',
    'LBL_CHECKSYS_PHP_INI' => 'Emplacement de votre fichier de configuration PHP (php.ini).',
    'LBL_CHECKSYS_PHP_OK' => 'Ok (ver',
    'LBL_CHECKSYS_PHPVER' => 'Version de PHP',
    'LBL_CHECKSYS_IISVER' => 'Version d\'IIS',
    'LBL_CHECKSYS_JSON' => 'JSON Parsing',
    'LBL_CHECKSYS_RECHECK' => 'Re-v??rifier',
    'LBL_CHECKSYS_STATUS' => 'Statut',
    'LBL_CHECKSYS_TITLE' => 'V??rification syst??me acceptation',
    'LBL_CHECKSYS_XML' => 'Parseur XML',
    'LBL_CHECKSYS_ZLIB' => 'Module de compression ZLib',
    'LBL_CHECKSYS_ZIP' => 'Module de manipulation ZIP',
    'LBL_CHECKSYS_PCRE' => 'Librairie PCRE',
    'LBL_CHECKSYS_FIX_FILES' => 'Veuillez r??parer les r??pertoires ou fichiers suivants avant de continuer :',
    'LBL_CHECKSYS_FIX_MODULE_FILES' => 'Veuillez r??parer les r??pertoires de modules ou les fichiers suivants avant de continuer :',
    'LBL_CHECKSYS_UPLOAD' => 'Dossier Upload accessible en ??criture',
    'LBL_CLOSE' => 'Fermer',
    'LBL_THREE' => '3',
    'LBL_CONFIRM_BE_CREATED' => 'est cr????',
    'LBL_CONFIRM_DB_TYPE' => 'Type de base de donn??es',
    'LBL_CONFIRM_NOT' => 'pas',
    'LBL_CONFIRM_TITLE' => 'V??rifier',
    'LBL_CONFIRM_WILL' => 'veut',
    'LBL_DBCONF_DB_DROP' => 'Effacer les tables',
    'LBL_DBCONF_DB_NAME' => 'Nom de la base de donn??es',
    'LBL_DBCONF_DB_PORT' => 'Port de la base de donn??es',
    'LBL_DBCONF_DB_PASSWORD' => 'Mot de passe utilisateur de la base de donn??es SuiteCRM',
    'LBL_DBCONF_DB_PASSWORD2' => 'Re-saisir le mot de passe de l\'utilisateur de la base de donn??es SuiteCRM',
    'LBL_DBCONF_DB_USER' => 'Utilisateur de la base de donn??es SuiteCRM',
    'LBL_DBCONF_SUITE_DB_USER' => 'Utilisateur de la base de donn??es SuiteCRM',
    'LBL_DBCONF_DB_ADMIN_USER' => 'Nom de l\'administrateur de la base de donn??es SuiteCRM',
    'LBL_DBCONF_DB_ADMIN_PASSWORD' => 'Mot de passe de l\'administrateur de la base de donn??es SuiteCRM',
    'LBL_DBCONF_COLLATION' => 'Interclassement',
    'LBL_DBCONF_CHARSET' => 'Encodage',
    'LBL_DBCONF_ADV_DB_CFG_TITLE' => 'Configuration avanc??e de la base de donn??es',
    'LBL_DBCONF_DEMO_DATA' => 'Int??grer des donn??es de d??monstration dans la base de donn??es ?',
    'LBL_DBCONF_DEMO_DATA_TITLE' => 'Choisir les donn??es de d??monstration',
    'LBL_DBCONF_HOST_NAME' => 'Nom d\'h??te',
    'LBL_DBCONF_HOST_INSTANCE' => 'H??te Instance',
    'LBL_DBCONFIG_SECURITY' => 'Pour des raisons de s??curit??, vous pouvez sp??cifier un utilisateur de base de donn??es exclusif  ?? la base de donn??es SuiteCRM. Cet utilisateur doit ??tre capable d\'??crire, mettre ?? jour et extraire des donn??es sur la base de donn??es SuiteCRM qui sera cr???? pour cette instance. Cet utilisateur peut ??tre l\'administrateur de base de donn??es sp??cifi?? ci-dessus, ou vous pouvez fournir des informations de l\'utilisateur de la base de donn??es nouvelle ou existante.',
    'LBL_DBCONFIG_PROVIDE_DD' => 'Ins??rer un utilisateur existant',
    'LBL_DBCONFIG_CREATE_DD' => 'D??finir les utilisateurs ?? cr??er',
    'LBL_DBCONFIG_SAME_DD' => 'Similaire ?? l\'administrateur',
    'LBL_DBCONF_TITLE' => 'Configuration de la base de donn??es',
    'LBL_DBCONF_TITLE_NAME' => 'Entrez un nom pour la base de donn??es',
    'LBL_DBCONF_TITLE_USER_INFO' => 'Entrez les informations utilisateur pour la base de donn??es',
    'LBL_DBCONF_TITLE_PSWD_INFO_LABEL' => 'Mot de passe',
    'LBL_DISABLED_DESCRIPTION_2' => 'Apr??s que cette modification ai ??t?? appliqu??e, vous pouvez cliquer sur le bouton "D??marrer" ci-dessous pour commencer votre installation. <i> Une fois l\'installation termin??e, vous devrez changer la valeur pour \'installer_locked\' ?? \'true\'. </ i>',
    'LBL_DISABLED_DESCRIPTION' => 'Le programme d\'installation a d??j?? ??t?? ex??cut?? une fois. Par mesure de s??curit??, il a ??t?? d??sactiv??e pour une nouvelle execution. Si vous ??tes absolument s??r que vous voulez l\'ex??cuter ?? nouveau, veuillez modifier votre fichier config.php et localiser (ou ajouter) une variable appel??e ??installer_locked?? avec la valeur ??false??. La ligne devrait ressembler ?? ceci:',
    'LBL_DISABLED_HELP_1' => 'Pour de l\'assistance ?? l\'installation, veuillez visiter le site SuiteCRM',
    'LBL_DISABLED_HELP_LNK' => 'https://community.suitecrm.com',
    'LBL_DISABLED_HELP_2' => 'Forums d\'assistance',
    'LBL_APP_NOT_INSTALLED' => 'SuiteCRM n\'est pas install??. Le point d\'entr??e n??cessite une installation de SuiteCRM, veuillez d\'abord l\'installer.',
    'LBL_DISABLED_TITLE_2' => 'L\'installation de SuiteCRM a ??t?? d??sactiv??e',
    'LBL_HELP' => 'Aide',
    'LBL_INSTALL' => 'Installation',
    'LBL_INSTALL_TYPE_TITLE' => 'Options d\'installation',
    'LBL_INSTALL_TYPE_SUBTITLE' => 'Choisir un type d\'installation',
    'LBL_INSTALL_TYPE_TYPICAL' => '<b>Installation standard</b>',
    'LBL_INSTALL_TYPE_CUSTOM' => '<b>Installation personnalis??e</b>',
    'LBL_INSTALL_TYPE_MSG2' => 'N??cessite un minimum d\'informations pour l\'installation. Recommand?? pour les nouveaux utilisateurs.',
    'LBL_INSTALL_TYPE_MSG3' => 'Fournit des options suppl??mentaires lors de l\'installation. La plupart de ces options sont ??galement disponibles apr??s l\'installation dans les ??crans d\'administration. Recommand?? pour les utilisateurs avanc??s.',
    'LBL_LANG_1' => 'Pour utiliser une langue dans SuiteCRM autre que la langue par d??faut (anglais am??ricain), vous pouvez t??l??charger et installer le pack de langue maintenant. Vous serez aussi en mesure de t??l??charger et installer des modules linguistiques dans SuiteCRM ult??rieurement. Si vous souhaitez sauter cette ??tape, cliquez sur Suivant.',
    'LBL_LANG_BUTTON_COMMIT' => 'Installation',
    'LBL_LANG_BUTTON_REMOVE' => 'Retirer',
    'LBL_LANG_BUTTON_UNINSTALL' => 'D??sinstaller',
    'LBL_LANG_BUTTON_UPLOAD' => 'Uploader',
    'LBL_LANG_NO_PACKS' => 'aucun',
    'LBL_LANG_PACK_INSTALLED' => 'Les packs de langue suivants ont ??t?? install??s :',
    'LBL_LANG_PACK_READY' => 'Les packs de langues suivants sont pr??ts ?? ??tre install??s :',
    'LBL_LANG_SUCCESS' => 'Le pack de langue a ??t?? t??l??charg?? avec succ??s.',
    'LBL_LANG_TITLE' => 'Pack de langue',
    'LBL_LAUNCHING_SILENT_INSTALL' => 'Installer SuiteCRM maintenant. L\'installation peut prendre quelques minutes.',
    'LBL_SILENT_INSTALL_SUCCESS' => 'SuiteCRM est install?? avec succ??s.',
    'LBL_SILENT_INSTALL_FAILED' => 'L\'installation de SuiteCRM a ??chou??.',
    'LBL_LANG_UPLOAD' => 'Charger un pack de langue',
    'LBL_LICENSE_ACCEPTANCE' => 'Acceptation de licence',
    'LBL_LICENSE_CHECKING' => 'V??rification de compatibilit?? du syst??me.',
    'LBL_LICENSE_CHKENV_HEADER' => 'V??rification de l\'environnement.',
    'LBL_LICENSE_CHKDB_HEADER' => 'V??rification des autorisations de la base de donn??es.',
    'LBL_LICENSE_CHECK_PASSED' => 'Tests de compatibilit?? du systeme',
    'LBL_CREATE_CACHE' => 'Pr??paration de l\'installation...',
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
    'LBL_ML_UNINSTALLABLE' => 'D??sinstallable',
    'LBL_ML_VERSION' => 'Version',
    'LBL_MSSQL' => 'Serveur SQL',
    'LBL_MSSQL2' => 'SQL Server (FreeTDS)',
    'LBL_MSSQL_SQLSRV' => 'SQL Server (Microsoft SQL Server Driver pour PHP)',
    'LBL_MYSQL' => 'MySQL',
    'LBL_MYSQLI' => 'MySQL (extension mysqli)',
    'LBL_NEXT' => 'Suivant',
    'LBL_NO' => 'Non',
    'LBL_PERFORM_ADMIN_PASSWORD' => 'Mot de passe admin site',
    'LBL_PERFORM_CONFIG_PHP' => 'Cr??ation du fichier de configuration SuiteCRM',
    'LBL_PERFORM_CREATE_DB_1' => '<b>Cr??ation de la base de donn??es</b>',
    'LBL_PERFORM_CREATE_DB_2' => ' <b>sur</b> ',
    'LBL_PERFORM_CREATE_DB_USER' => 'Cr??ation de l\'utilisateur et du mot de passe de la base de donn??es',
    'LBL_PERFORM_CREATE_DEFAULT' => 'Cr??ation des donn??es par d??faut de SuiteCRM',
    'LBL_PERFORM_DEFAULT_SCHEDULER' => 'Cr??ation des t??ches planifi??es par d??faut',
    'LBL_PERFORM_DEFAULT_USERS' => 'Cr??ation des utilisateurs par standard',
    'LBL_PERFORM_DEMO_DATA' => 'Peupler la base de donn??es avec des donn??es de d??monstration (cela peut prendre quelques instants)',
    'LBL_PERFORM_DONE' => 'fait<br>',
    'LBL_PERFORM_FINISH' => 'Terminer',
    'LBL_PERFORM_OUTRO_1' => 'L\'installation de SuiteCRM',
    'LBL_PERFORM_OUTRO_2' => 'est maintenant termin??e !',
    'LBL_PERFORM_OUTRO_3' => 'Temps total :',
    'LBL_PERFORM_OUTRO_4' => 'secondes.',
    'LBL_PERFORM_OUTRO_5' => 'M??moire utilis??e :',
    'LBL_PERFORM_OUTRO_6' => 'bits.',
    'LBL_PERFORM_SUCCESS' => 'Succ??s !',
    'LBL_PERFORM_TABLES' => 'Cr??ation des tables application, audit et leurs m??tadonn??es de relations',
    'LBL_PERFORM_TITLE' => 'Ex??cuter le programme d\'installation',
    'LBL_PRINT' => 'Imprimer',
    'LBL_REG_CONF_1' => 'Veuillez remplir le formulaire ci-dessous pour recevoir les annonces de produits, de nouvelles formation, offres sp??ciales et invitations ?? des ??v??nements sp??ciaux de SuiteCRM. Nous ne vendons pas, ni louons, ou partageons  les informations recueillies ici ?? des tiers.',
    'LBL_REG_CONF_3' => 'Merci de votre inscription. Cliquez sur le bouton Terminer pour se connecter ?? SuiteCRM. Vous devez ouvrir une session pour la premi??re fois en utilisant le nom d\'utilisateur ?? admin ?? et le mot de passe saisi ?? l\'??tape 2.',
    'LBL_REG_TITLE' => 'Enregistrement',

    'LBL_REQUIRED' => '* champs requis',

    'LBL_SITECFG_ADMIN_Name' => 'SuiteCRM  Admin',
    'LBL_SITECFG_ADMIN_PASS_2' => 'R??-entrer le mot de passe Admin SuiteCRM',
    'LBL_SITECFG_ADMIN_PASS' => 'Mot de passe administrateur SuiteCRM',
    'LBL_SITECFG_APP_ID' => 'Application',
    'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => 'Si s??lectionn??, vous devez fournir un ID d\'application pour substituer le code g??n??r?? automatiquement. L\'ID veille ?? ce que les s??ances d\'une instance de SuiteCRM ne sont pas utilis??s par d\'autres instances.  Si vous disposez d\'un cluster d\'installations SuiteCRM, elles doivent partager le m??me ID de demande.',
    'LBL_SITECFG_CUSTOM_ID' => 'Fournir votre propre ID de l\'Application',
    'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => 'Si s??lectionn??, vous devez sp??cifier un r??pertoire de journaux pour remplacer le r??pertoire par d??faut de SuiteCRM. Peu importe o?? se trouve le fichier journal, l\'acc??s via un navigateur web sera limit??e par un .htaccess redirect.',
    'LBL_SITECFG_CUSTOM_LOG' => 'Utilisez un r??pertoire personnalis?? de Log',
    'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => 'Si s??lectionn??, vous devez fournir un dossier s??curis?? pour le stockage des informations de session SuiteCRM. Cela peut ??tre fait pour emp??cher les donn??es de session d\'??tre vuln??rables sur des serveurs mutualis??s.',
    'LBL_SITECFG_CUSTOM_SESSION' => 'Utiliser un r??pertoire de Session personnalis?? pour SuiteCRM',
    'LBL_SITECFG_FIX_ERRORS' => '<b>Veuillez r??parer les erreurs suivantes avant de continuer :</b>',
    'LBL_SITECFG_LOG_DIR' => 'R??pertoire des fichiers de log',
    'LBL_SITECFG_SESSION_PATH' => 'Chemin d\'acc??s au dossier de Session <br>(doit ??tre accessible en ??criture)',
    'LBL_SITECFG_SITE_SECURITY' => 'Choisir les options de s??curit??',
    'LBL_SITECFG_SUITE_UP_DIRECTIONS' => 'Si s??lectionn??, le syst??me v??rifiera p??riodiquement les mises ?? jour de l\'application.',
    'LBL_SITECFG_SUITE_UP' => 'V??rifier automatiquement les mises ?? jour ?',
    'LBL_SITECFG_TITLE' => 'Configuration du site',
    'LBL_SITECFG_TITLE2' => 'Identifier l\'utilisateur Admin',
    'LBL_SITECFG_SECURITY_TITLE' => 'S??curit?? du site',
    'LBL_SITECFG_URL' => 'URL de SuiteCRM',
    'LBL_SITECFG_ANONSTATS' => 'Envoyer des statistiques d\'usage anonymes ?',
    'LBL_SITECFG_ANONSTATS_DIRECTIONS' => 'Si s??lectionn??, SuiteCRM enverra des statistiques <b>anonymes</b> sur l\'installation ?? SuiteCRM Inc. Chaque fois que votre syst??me v??rifie les nouvelles versions. Cette information nous aidera ?? mieux comprendre comment l\'application est utilis??e et nous guide pour les am??liorations au produit.',
    'LBL_SITECFG_URL_MSG' => 'Entrez l\'URL qui sera utilis?? pour acc??der ?? SuiteCRM apr??s l\'installation. L\'URL servira ??galement comme base pour les URL dans les pages d\'application SuiteCRM. L\'URL doit inclure le serveur web ou la nom de l\'ordinateur ou l\'adresse IP.',
    'LBL_SITECFG_SYS_NAME_MSG' => 'Entrez un nom pour votre syst??me.  Ce nom appara??t dans la barre de titre du navigateur lorsque les utilisateurs visitent l\'application SuiteCRM.',
    'LBL_SITECFG_PASSWORD_MSG' => 'Apr??s l\'installation, vous devrez utiliser l\'utilisateur admin de SuiteCRM (par d??faut le nom d\'utilisateur = admin) pour vous connecter ?? SuiteCRM.  Entrez un mot de passe pour cet administrateur. Ce mot de passe peut ??tre chang?? apr??s la connexion initiale.  Vous pouvez ??galement entrer un autre nom que admin.',
    'LBL_SITECFG_COLLATION_MSG' => 'S??lectionnez les param??tres de classement (tri) pour votre syst??me. Ces r??glages permettent d\'obtenir les tableaux avec le langage sp??cifique que vous utilisez. Dans le cas o?? votre langue ne n??cessite pas de param??tres sp??ciaux, veuillez utiliser la valeur par d??faut.',
    'LBL_SPRITE_SUPPORT' => 'Support de sprite',
    'LBL_SYSTEM_CREDS' => 'Informations d\'identification syst??me',
    'LBL_SYSTEM_ENV' => 'Environnement du syst??me',
    'LBL_SHOW_PASS' => 'Montrer les mots de passe',
    'LBL_HIDE_PASS' => 'Cacher les mots de passe',
    'LBL_HIDDEN' => '<i>(cach??)</i>',
    'LBL_STEP1' => 'Etape 1 sur 2 - Pr??requis d\'installation',
    'LBL_STEP2' => 'Etape 2 sur 2 - Configuration',
    'LBL_STEP' => 'Etape',
    'LBL_TITLE_WELCOME' => 'Bienvenue dans SuiteCRM',
    'LBL_WELCOME' => 'Bienvenue!',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY' => '??tes-vous pr??t ?? installer ?',
    'REQUIRED_SYS_COMP' => 'Composants syst??me requis',
    'REQUIRED_SYS_COMP_MSG' =>
        'Avant de commencer, s???il vous pla??t assurez-vous que vous avez les versions support??es de composants syst??me suivants??: <br><ul><li>syst??me de gestion de base de donn??es/base de donn??es (exemples??: MariaDB, MySQL ou SQL Server)</li> <li>Serveur Web (Apache, IIS)</li></ul> Consultez la matrice de compatibilit?? dans les notes de version des composants de syst??me compatible pour la version SuiteCRM que vous installez. <br>',
    'REQUIRED_SYS_CHK' => 'V??rification syst??me initiale',
    'REQUIRED_SYS_CHK_MSG' =>
        'Lorsque vous commencez le processus d???installation, une v??rification du syst??me se fera sur le serveur web sur lequel se trouvent les fichiers SuiteCRM afin de s???assurer que le syst??me est correctement configur?? et poss??de tous les composants n??cessaires pour terminer l???installation. <br><br>Le syst??me v??rifie toutes les caract??ristiques suivantes??: <br><ul><li><b>version PHP</b> &#8211; doit ??tre compatible avec l???application</li> <li><b>Variables de Session</b> &#8211; doit fonctionner correctement</li> <li><b>MB Strings</b> &#8211; doit ??tre install?? et activ?? dans le fichier php.ini</li> <li><b>/ / Database Support</b> &#8211; doit exister pour MariaDB, MySQL ou SQL Server</li> <li><b>Config.php</b> &#8211; doit exister et doit disposer des autorisations appropri??es pour le rendre inscriptible</li> <li>les fichiers suivants de SuiteCRM doivent ??tre accessible en ??criture : <ul><li><b>/ custom</li> <li>cache /</li> <li>/ modules</li> <li>/ upload</b></li></ul></li></ul> si la v??rification ??choue, vous ne serez pas en mesure de proc??der ?? l???installation. Un message d???erreur s???affichera, en expliquant pourquoi votre syst??me ne passe pas le contr??le. Apr??s avoir apport?? les modifications n??cessaires, vous pouvez subir la v??rification du syst??me ?? nouveau pour continuer l???installation. <br>',


    'REQUIRED_INSTALLTYPE' => 'Installation standard ou personnalis??e',
    'REQUIRED_INSTALLTYPE_MSG' =>
        'Apr??s que les v??rifications syst??me aient ??t?? effectu??es, vous pouvez choisir
                      une installation <b>Standard</b> ou <b>Personnalis??e</b>.<br><br>
                      Que vous ayez choisi une installation Standard ou Personnalis??e, vous allez avoir besoin des ??l??ments suivants :<br>
                      <ul>
                      <li> <b>Le type de base de donn??es</b> utilis??e pour les donn??es de SuiteCRM <ul><li>Les bases de donn??es suivantes sont compatibles : MariaDB, MySQL or SQL Server.<br><br></li></ul></li>
                      <li> <b>Le nom de votre serveur web</b> ou la machine (host) sur laquelle la base de donn??es est install??e
                      <ul><li>Ce peut-??tre <i>localhost</i> si la base de donn??es est h??berg??e en local sur votre ordinateur ou s\'il s\'agit du m??me serveur que celui qui h??berger vos fichiers SuiteCRM.<br><br></li></ul></li>
                      <li><b>Le nom de la base de donn??es</b> que vous voulez utiliser pour vos donn??es SuiteCRM</li>
                        <ul>
                          <li> Dans le cas ou vous souhaiteriez utiliser une base de donn??es existante, l\'utilisation d\'un nom de base identique ?? celui d\'une base existante provoquera un ??crasement des donn??es lors de la cr??ation du sch??ma de base.</li>
                          <li> Si vous ne disposez pas d??j?? d\'une base de donn??es existante, le nom fourni sera appliqu?? ?? la base de donn??es cr??e pendant l\'installation.<br><br></li>
                        </ul>
                      <li><b>Le nom et le mot de passe du compte "administrateur" de la base de donn??es</b> <ul><li>L\'administrateur de la base de donn??es doit ??tre en mesure de cr??er des tables, des utilisateurs et d\'??crire dans la base de donn??es.</li><li>Vous pouvez ??tre amen?? ?? contacteur l\'administrateur de votre syst??me informatique pour cette information si la base de donn??e ne se trouve pas en local sur votre ordinateur ou si vous n\'??tes pas vous m??me l\'administrateur de la base de donn??es.<br><br></ul></li></li>
                      <li> <b>Le nom et le mot de passe du compte utilisateur de la base de donn??es SuiteCRM</b>
                      </li>
                        <ul>
                          <li> L\'utilisateur peut ??tre l\'administrateur de la base de donn??es o?? vous pouvez indiquer le nom d\'un autre "utilisateur" de la base de donn??es. </li>
                          <li> Si vous souhaitez cr??er un nouvel utilisateur pour cette base de donn??es, vous serez en mesure de le cr??er (nom et mot de passe) pendant le processus d\'installation de SuiteCRM</li>
                        </ul></ul><p>

                      Pour une installation <b>Personnalis??e</b>, Vous pouvez ??galement avoir besoin des ??l??ments suivants :<br>
                      <ul>
                      <li> <b>L\'URL utilis??e pour acc??der ?? votre installation SuiteCRM</b>.
                      Cette URL peut ??tre le nom de la machine ou du serveur, comme une adresse IP.<br><br></li>
                                  <li> [Optionnel] <b>Le chemin du r??pertoire de la session SuiteCRM</b> si vous souhaitez utiliser un r??pertoire personnalis?? pour prot??ger les informations de toute vuln??rabilit?? en cas d\'utilisation sur un serveur partag?? (mutualis??).<br><br></li>
                                  <li> [Optionnel] <b>Le chemin du r??pertoire personnalis?? pour les Logs</b> si vous ne souhaitez pas utiliser l\'emplacement par d??faut de SuiteCRM.<br><br></li>
                                  <li> [Optionnel] <b>L\'ID d\'application</b> si vous ne souhaitez pas utiliser l\'ID d\'application auto-g??n??r??. Cet ID contr??le que des sessions d\'une instance SuiteCRM ne puissent pas ??tre utilis??es sur une autre instance.<br><br></li>
                                  <li><b>Le type de caract??res</b> le plus commun??ment utilis?? selon vos param??tres r??gionaux.<br><br></li></ul>
                                  Veuillez consulter le guide d\'installation pour des informations plus d??taill??es.
                                ',
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Veuillez lire les informations suivantes avant de proc??der ?? l\'installation.  Ces informations vous aideront ?? d??terminer si oui ou non vous ??tes pr??t ?? installer l\'application.',

    'LBL_WELCOME_CHOOSE_LANGUAGE' => '<b>Choisissez votre langue</b>',
    'LBL_WELCOME_SETUP_WIZARD' => 'Assistant d\'installation',
    'LBL_WIZARD_TITLE' => 'Assistant d\'installation SuiteCRM :',
    'LBL_YES' => 'Oui',

    'LBL_PATCHES_TITLE' => 'Installer les derniers correctifs',
    'LBL_MODULE_TITLE' => 'installer les packs de langues',
    'LBL_PATCH_1' => 'Si vous souhaitez passer cette ??tape, clickez sur "suivant"',
    'LBL_PATCH_TITLE' => 'Correctif syst??me',
    'LBL_PATCH_READY' => 'Les correctifs suivants sont pr??ts ?? ??tre install??s :',
    'LBL_SESSION_ERR_DESCRIPTION' => "SuiteCRM s'appuie sur les sessions PHP pour stocker des informations importantes tout en ??tant connect?? ?? ce serveur web.  Votre installation de PHP n'a pas les informations de Session configur??es correctement.
											<br><br>Une mauvaise configuration commune est que la directive de <b>'session.save_path'</b> ne pointe pas vers un r??pertoire valide.  <br><br>S'il vous pla??t corriger votre <a target=_new href='http://us2.php.net/manual/en/ref.session.php'> configuration de PHP</a> dans le fichier php.ini situ?? ici dessous.",
    'LBL_SESSION_ERR_TITLE' => 'Erreur de Configuration des Sessions PHP',
    'LBL_SYSTEM_NAME' => 'Nom du Syst??me',
    'LBL_COLLATION' => 'Param??tres de classement',
    'LBL_REQUIRED_SYSTEM_NAME' => 'Fournissez un nom de syst??me pour l\'instance de SuiteCRM.',
    'LBL_PATCH_UPLOAD' => 'Choisir un fichier de correctif ?? partir de l\'ordinateur local',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'PHP version 5 ou sup??rieure est requis.',
    'LBL_MINIMUM_PHP_VERSION' => 'Version minimale de PHP requise : 5.1.0 - SuiteCRM recommande PHP version 5.2.x',
    'LBL_YOUR_PHP_VERSION' => '(Votre version courante de PHP est la',
    'LBL_RECOMMENDED_PHP_VERSION' => 'La version recommand??e est la 5.2.x)',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Php Backward Compatibility mode est positionn?? ?? on. Mettre zend.ze1_compatibility_mode ?? Off pour pouvoir continuer',
    'LBL_STREAM' => 'PHP permet d\'utiliser les flux',

    'advanced_password_new_account_email' => array(
        'subject' => 'Coordonn??es du nouveau compte',
        'type' => 'syst??me',
        'description' => 'Ce mod??le est utilis?? lorsque l\'administrateur syst??me envoie un nouveau mot de passe ?? un utilisateur.',
        'body' => '<div><table border=\\"0\\" cellspacing=\\"0\\" cellpadding=\\"0\\" width="550" align=\\"\\&quot;\\&quot;center\\&quot;\\&quot;\\"><tbody><tr><td colspan=\\"2\\"><p>Voici votre nom d\'utilisateur et votre mot de passe temporaire :</p><p>Nom d\'utilisateur : $contact_user_user_name </p><p>Mot de passe : $contact_user_user_hash </p><br><p>$config_site_url</p><br><p>Apr??s vous ??tre logu?? en utilisant le mot de passe ci-dessus, vous pourrez le r??initialiser avec un mot de passe de votre choix.</p>   </td>         </tr><tr><td colspan=\\"2\\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
Vous trouverez ci-apr??s votre nom d\'utilisateur et votre mot de passe provisoire :
Nom d\'utilisateur : $contact_user_user_name
Mot de passe : $contact_user_user_hash

$config_site_url

Apr??s votre connexion avec le mot de passe provisoire ci-dessus, il peut vous ??tre demand?? de le r??initialiser avec un nouveau mot de passe de votre choix.',
        'name' => 'Email Mot de Passe G??n??r?? par Syst??me',
    ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'R??initialisez le mot de passe de votre compte',
        'type' => 'syst??me',
        'description' => "Ce mod??le est utilis?? pour envoyer ?? l'utilisateur un lien ?? cliquer pour r??initialiser son mot de passe.",
        'body' => '<div><table border=\\"0\\" cellspacing=\\"0\\" cellpadding=\\"0\\" width="550" align=\\"\\&quot;\\&quot;center\\&quot;\\&quot;\\"><tbody><tr><td colspan=\\"2\\"><p>Vous avez r??cemment demand?? ?? modifier le mot de passe du compte $contact_user_pwd_last_changed. </p><p>Cliquez sur le lien ci-dessous pour r??initialiser le mot de passe : </p><p> $contact_user_link_guid </p>  </td>         </tr><tr><td colspan=\\"2\\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
Vous avez r??cemment demand?? sur $contact_user_pwd_last_changed ?? pouvoir r??initialiser votre mot de passe.

Suivez le lien ci-dessous celui-ci :

$contact_user_link_guid',
        'name' => 'Mot de passe Email oubli??',
    ),


    'two_factor_auth_email' => array(
        'subject' => 'Code d\'authentification en deux ??tapes',
        'type' => 'syst??me',
        'description' => "Ce mod??le est utilis?? pour envoyer ?? un utilisateur un Code d'authentification en deux ??tapes.",
        'body' => '<div><table border=\\"0\\" cellspacing=\\"0\\" cellpadding=\\"0\\" width="550" align=\\"\\&quot;\\&quot;center\\&quot;\\&quot;\\"><tbody><tr><td colspan=\\"2\\"><p>Code d\'authentification en deux ??tapes est <b>$code</b>.</p>  </td>         </tr><tr><td colspan=\\"2\\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            'Code d\'authentification en deux ??tapes est $code.',
        'name' => 'Email d\'authentification en deux ??tapes',
    ),

    // SMTP settings

    'LBL_FROM_NAME' => 'Nom Exp??diteur :',
    'LBL_FROM_ADDR' => 'Email Exp??diteur :',

    'LBL_WIZARD_SMTP_DESC' => 'Fournissez le compte de messagerie qui sera utilis?? pour envoyer des emails, tels que les notifications d\'assignations et les mots de passe des nouveaux utilisateurs. Les utilisateurs recevront les emails du CRM envoy??s ?? partir du compte email sp??cifi??.',
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
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Autoriser les utilisateurs ?? utiliser ces param??tres pour l\'envoi d\'emails:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Lorsque cette option est s??lectionn??e, tous les utilisateurs seront en mesure d\'envoyer des emails en utilisant le m??me serveur d\'envoi d\'emails, ces param??tres sont aussi utilis?? pour envoyer les notifications et les alertes du syst??me. Si cette option n\'est pas s??lectionn??e, les utilisateurs pourront toujours utiliser le serveur d\'envoi d\'emails de leurs choix apr??s avoir fourni leurs informations dans leur compte utilisateur.',

    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail - Mot de passe:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID:',

    'LBL_EXCHANGE_SMTPPASS' => 'Exchange - Mot de passe:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange - Nom Utilisateur:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange - Port SMTP:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange - Serveur SMTP:',


    'LBL_MAIL_SMTPUSER' => 'Nom Utilisateur SMTP:',
    'LBL_MAIL_SMTPPASS' => 'Mot de passe SMTP :',

    // Branding

    'LBL_WIZARD_SYSTEM_TITLE' => 'Identit?? visuelle',
    'LBL_WIZARD_SYSTEM_DESC' => 'Fournissez le nom et le logo de votre organisation afin de personnaliser votre SuiteCRM.',
    'SYSTEM_NAME_WIZARD' => 'Nom:',
    'SYSTEM_NAME_HELP' => 'C\'est le nom qui s\'affiche dans la barre de titre de votre navigateur.',
    'NEW_LOGO' => 'Choisissez logo (450x17)',
    'NEW_LOGO_HELP' => 'L\'image doit ??tre au format .png ou .jpg. La hauteur maximale est de 170px et la largeur maximale est de 450px. Toutes images aux dimensions sup??rieures ?? ces valeurs sera redimensionn??e aux valeurs maximales indiqu??es.',
    'COMPANY_LOGO_UPLOAD_BTN' => 'Uploader',
    'CURRENT_LOGO' => 'Logo actuel',
    'CURRENT_LOGO_HELP' => 'Ce logo est affich?? dans le milieu de l\'??cran de connexion de votre application SuiteCRM.',


    //Scenario selection of modules
    'LBL_WIZARD_SCENARIO_TITLE' => 'S??lection de sc??nario',
    'LBL_WIZARD_SCENARIO_DESC' => 'Il s???agit de permettre de pr??senter les modules selon vos besoins.  Chaque module peut ??tre activ?? apr??s l???installation ?? l???aide de la page d???administration.',
    'LBL_WIZARD_SCENARIO_EMPTY' => 'Il n???y a aucun sc??nario actuellement d??finis dans le fichier de configuration (config.php)',


    // System Local Settings


    'LBL_LOCALE_TITLE' => 'Param??tres r??gionaux du syst??me',
    'LBL_WIZARD_LOCALE_DESC' => 'Pr??cisez comment vous souhaitez afficher vos donn??es dans SuiteCRM, bas?? sur votre situation g??ographique. Les param??tres que vous fournissez ici seront les param??tres par d??faut. Les utilisateurs pourront d??finir leurs propres pr??f??rences dans Mon compte.',
    'LBL_DATE_FORMAT' => 'Format de date :',
    'LBL_TIME_FORMAT' => 'Format de temps:',
    'LBL_TIMEZONE' => 'Fuseau horaire :',
    'LBL_LANGUAGE' => 'Langue:',
    'LBL_CURRENCY' => 'Devise :',
    'LBL_CURRENCY_SYMBOL' => 'Symbole de la devise :',
    'LBL_CURRENCY_ISO4217' => 'Codification de la devise ISO 4217 :',
    'LBL_NUMBER_GROUPING_SEP' => 'S??parateur des milliers',
    'LBL_DECIMAL_SEP' => 'S??parateur pour les nombres d??cimaux',
    'LBL_NAME_FORMAT' => 'Format du nom :',
    'UPLOAD_LOGO' => 'Veuillez patienter, chargement du logo...',
    'ERR_UPLOAD_FILETYPE' => 'Format de fichier non autoris??, veuillez t??l??charger un fichier jpeg ou png.',
    'ERR_LANG_UPLOAD_UNKNOWN' => 'Une erreur inconnue s\'est produite lors du chargement du fichier.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_INI_SIZE' => 'Le fichier charg?? d??passe la valeur upload_max_filesize dans php.ini.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_FORM_SIZE' => 'Le fichier charg?? d??passe la valeur MAX_FILE_SIZE sp??cifi??e dans le formulaire HTML.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_PARTIAL' => 'Le fichier a ??t?? charg?? partiellement.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_FILE' => 'Aucun fichier charg??.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_TMP_DIR' => 'R??pertoire temporaire absent.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_CANT_WRITE' => 'Impossible d\'??crire le fichier sur le disque.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_EXTENSION' => 'Une extension PHP a stopp?? le t??l??chargement du fichier. PHP ne fournit pas le moyen de conna??tre l\'extension qui a stopp?? le t??l??chargement du fichier.',

    'LBL_INSTALL_PROCESS' => 'Installation...',

    'LBL_EMAIL_ADDRESS' => 'Adresse Email :',
    'ERR_ADMIN_EMAIL' => 'L\'adresse de courriel de l\'administrateur est incorrecte.',
    'ERR_SITE_URL' => 'L\'URL du site est n??cessaire.',

    'STAT_CONFIGURATION' => 'Relations de configuration...',
    'STAT_CREATE_DB' => 'Cr??er une base de donn??es...',

    'STAT_CREATE_DEFAULT_SETTINGS' => 'Cr??ation des param??tres par d??faut...',
    'STAT_INSTALL_FINISH' => 'Installation termin??e...',
    'STAT_INSTALL_FINISH_LOGIN' => 'Le processus d\'installation est termin??, <a href="%s"> veuillez ouvrir une session...</a>',
    'LBL_LICENCE_TOOLTIP' => 'Veuillez accepter la licence en premier',

    'LBL_MORE_OPTIONS_TITLE' => 'Plus d\'options',
    'LBL_START' => '',
    'LBL_DB_CONN_ERR' => 'Erreur de base de donn??es',
    'LBL_OLD_PHP' => 'Ancienne Version PHP d??tect??e??!',
    'LBL_OLD_PHP_MSG' => 'La version PHP recommand??e pour installer SuiteCRM est %s < br /> bien que la version PHP minimale requise est %s, n???est pas recommand?? en raison du grand nombre de bugs corrig??s, y compris les corrections de s??curit??, dans les versions plus modernes. < br /> vous utilisez PHP, version %s, qui est EOL??: <a href="http://php.net/eol.php"> http://php.net/eol.php</a>. < br />s???il vous pla??t envisager de mettre ?? jour votre version PHP. Instructions sur <a href="http://php.net/migration70"> http://php.net/migration70</a>. ',
    'LBL_OLD_PHP_OK' => 'Je suis conscient des risques et souhaite continuer.',

    'LBL_DBCONF_TITLE_USER_INFO_LABEL' => 'Utilisateur',
    'LBL_DBCONFIG_MSG3_LABEL' => 'Nom de la base de donn??es',
    'LBL_DBCONFIG_MSG3' => 'Nom de la base de donn??es qui contiendra les donn??es de l\'instance SuiteCRM que vous vous appr??tez ?? installer:',
    'LBL_DBCONFIG_MSG2_LABEL' => 'Nom d\'h??te',
    'LBL_DBCONFIG_MSG2' => 'Serveur web ou machine (h??te) sur lequel la base de donn??es se trouve (par exemple, www.mydomain.com). Si vous installez localement, il est pr??f??rable d???utiliser ????localhost???? que \'127.0.0.1????, pour des raisons de performances.',
    'LBL_DBCONFIG_B_MSG1_LABEL' => '', // this label dynamically needed in install/installConfig.php:293
    'LBL_DBCONFIG_B_MSG1' => 'Le nom d\'utilisateur et mot de passe d\'un administrateur de base de donn??es qui peut cr??er des tables , des bases de donn??es et des utilisateurs et qui ??crire dans la base de donn??es est n??cessaire pour mettre en place SuiteCRM.',
    'LBL_SYS_CHECK_WARNING' => 'Ignorer les Avertissements Syst??me',
    'LBL_PROCEED' => 'POURSUIVRE',
    'LBL_CONFIG' => 'CONFIGURATION',
    'LBL_VALIDATION_ERRORS' => 'Il y a des erreurs de validation, impossible d\'effectuer l\'action.'
);
