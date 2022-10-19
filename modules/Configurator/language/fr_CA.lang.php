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
    /*'ADMIN_EXPORT_ONLY'=>'Admin export only',*/
    'ADVANCED' => 'Avancé',
    'DEFAULT_CURRENCY_ISO4217' => 'Code devise ISO 4217',
    'DEFAULT_CURRENCY_NAME' => 'Nom Devise',
    'DEFAULT_CURRENCY_SYMBOL' => 'Symbole Devise',
    'DEFAULT_DATE_FORMAT' => 'Format de date par défaut',
    'DEFAULT_DECIMAL_SEP' => 'Symbole décimal',
    'DEFAULT_LANGUAGE' => 'Langage par défaut',
    'DEFAULT_SYSTEM_SETTINGS' => 'Interface Utilisateur',
    'DEFAULT_THEME' => 'Thème par défaut',
    'DEFAULT_TIME_FORMAT' => 'Format Heure par défaut',

    'DISPLAY_RESPONSE_TIME' => 'Afficher les temps de réponse serveur',

    'IMAGES' => 'Logos',
    'LBL_ALLOW_USER_TABS' => 'Autoriser les utilisateurs à masquer les onglets',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'Paramètres Système',
    'LBL_LOGVIEW' => 'Afficher Journal',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Utiliser Authentification SMTP?',
    'LBL_MAIL_SMTPPASS' => 'Mot de passe SMTP :',
    'LBL_MAIL_SMTPPORT' => 'Port SMTP:',
    'LBL_MAIL_SMTPSERVER' => 'Serveur SMTP:',
    'LBL_MAIL_SMTPUSER' => 'SMTP Nom Utilisateur:',
    'LBL_MAIL_SMTP_SETTINGS' => 'Spécification Serveur SMTP',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Choisissez votre fournisseur de messagerie:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail - Mot de passe:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail - Mot de passe:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail - Email:',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange - Mot de passe:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange - Nom Utilisateur:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange - Port SMTP:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange - Serveur SMTP:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Autoriser les utilisateurs à utiliser ces paramétres pour l\'envoi d\'emails:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Lorsque cette option est sélectionnée, tous les utilisateurs seront en mesure d\'envoyer des emails en utilisant le même serveur d\'envoi, ces paramétres sont aussi utilisé pour envoyer les notifications et les alertes du système. Si cette option n\'est pas sélectionnée, les utilisateurs pourront toujours utiliser le serveur d\'envoi de leurs choix après avoir fourni leurs informations dans leur compte utilisateur.',
    'LBL_MAILMERGE' => 'Publipostage',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Intervalle minimal de rafraîchissement des Dashlet',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Il s\'agit de la valeur minimale possible pour le rafraîchissement automatique des Dashlets. Configurer cette valeur à "Jamais" désactive entièrement le rafraîchissement automatique des Dashlets.',
    'LBL_MODULE_FAVICON' => 'Afficher l\'îcone du module comme favicon',
    'LBL_MODULE_FAVICON_HELP' => 'Si vous êtes dans un module ayant une îcone, cela affiche l\'îcone du module comme favicon, à la place du favicon du thème, dans la barre d\'adresse du navigateur.',
    'LBL_MODULE_NAME' => 'Paramètres Système',
    'LBL_MODULE_ID' => 'Configurateur',
    'LBL_MODULE_TITLE' => 'Interface Utilisateur',
    'LBL_NOTIFY_FROMADDRESS' => 'Email Expéditeur :',
    'LBL_NOTIFY_SUBJECT' => 'Sujet Email:',

    'LBL_PROXY_AUTH' => 'Le proxy nécessite-t-il une authentification ?',
    'LBL_PROXY_HOST' => 'Adresse du proxy',
    'LBL_PROXY_ON_DESC' => 'Définissez les paramètres du proxy.',
    'LBL_PROXY_ON' => 'Utiliser un serveur proxy ?',
    'LBL_PROXY_PASSWORD' => 'Mot de Passe',
    'LBL_PROXY_PORT' => 'Port',
    'LBL_PROXY_TITLE' => 'Réglages proxy',
    'LBL_PROXY_USERNAME' => 'Nom Utilisateur',
    'LBL_RESTORE_BUTTON_LABEL' => 'Réinitialiser',
    'LBL_SYSTEM_SETTINGS' => 'Paramètres Système',
    'LBL_USE_REAL_NAMES' => 'Afficher Noms Complets',
    'LBL_USE_REAL_NAMES_DESC' => 'Afficher les noms complets des utilisateurs au lieu de leur nom d\'utilisateur dans les champs d\'assignation.',
    'LBL_DISALBE_CONVERT_LEAD' => 'Désactiver l\'action de conversion de Prospect pour les Prospects convertis',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Si un Prospect a déjà été converti, activer cette option supprimera l\'action de conversion de Prospect',
    'LBL_ENABLE_ACTION_MENU' => 'Afficher les actions dans les menus',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Sélectionnez pour afficher les actions VueDétail et sous-panneau dans un menu déroulant. Si cette option n\'est pas sélectionnée, les actions s\'affichent sous la forme de boutons distincts.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'Activer l\'édition en ligne sur la vue de liste',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'Sélectionner pour permettre l\'édition en ligne pour les champs de la vue de liste. Si l\'édition en ligne n\'est pas sélectionnée elle sera désactivée sur liste.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'Activer l\'édition en ligne sur vue détail',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'Sélectionnez pour permettre l\'édition en ligne pour les champs dans la vue détail.',
    'LBL_HIDE_SUBPANELS' => 'Sous-panneaux regroupés',
    'LIST_ENTRIES_PER_LISTVIEW' => 'Éléments affichés par page dans les vues Liste',
    'LIST_ENTRIES_PER_SUBPANEL' => 'Eléments de sous-panneau par page',
    'LOG_MEMORY_USAGE' => 'Tracer l\'utilisation de la mémoire',
    'LOG_SLOW_QUERIES' => 'Tracer les requêtes lentes',
    'CURRENT_LOGO' => 'Logo Actuel:',
    'CURRENT_LOGO_HELP' => 'Ce logo est affiché dans le milieu de l\'écran de connexion de votre application SuiteCRM.',
    'NEW_LOGO' => 'Choisir Logo:',
    'NEW_LOGO_HELP' => 'L\'image doit être au format .png ou .jpg. La hauteur maximale est de 170px et la largeur maximale est de 450px. Toutes images aux dimensions supérieures à ces valeurs sera redimensionnée aux valeurs maximales indiquées.',
    'NEW_LOGO_HELP_NO_SPACE' => 'L\'image doit être au format .png ou .jpg. La hauteur maximale est de 170px et la largeur maximale est de 450px. Toutes images aux dimensions supérieures à ces valeurs sera redimensionnée aux valeurs maximales indiquées.',
    'SLOW_QUERY_TIME_MSEC' => 'Seuil des requêtes considérées comme lentes (en msec)',
    'STACK_TRACE_ERRORS' => 'Afficher les erreurs de trace de la pile',
    'UPLOAD_MAX_SIZE' => 'Taille de téléchargement maximale (vérifier aussi dans votre fichier php. ini)',
    'VERIFY_CLIENT_IP' => 'Valider Adresse IP utilisateur',
    'LOCK_HOMEPAGE' => 'Empêcher l\'utilisateur de personnaliser la mise en page de l\'acceuil',
    'LOCK_SUBPANELS' => 'Empêcher la mise en page de sous-panneau personnalisable par l\'utilisateur',
    'MAX_DASHLETS' => 'Nombre maximal de Dashlets sur la page d’accueil',
    'SYSTEM_NAME' => 'Nom Système:',
    'SYSTEM_NAME_WIZARD' => 'Nom:',
    'SYSTEM_NAME_HELP' => 'C\'est le nom qui s\'affiche dans la barre de titre de votre navigateur.',
    'LBL_LDAP_TITLE' => 'Authentification LDAP',
    'LBL_LDAP_ENABLE' => 'Activer le support LDAP',
    'LBL_LDAP_SERVER_HOSTNAME' => 'Serveur:',
    'LBL_LDAP_SERVER_PORT' => 'Numéro du port:',
    'LBL_LDAP_ADMIN_USER' => 'Nom Utilisateur:',
    'LBL_LDAP_ADMIN_USER_DESC' => 'Utilisé pour rechercher l\'utilisateur LDAP. Cela peut avoir besoin d\'être pleinement qualifié.',
    'LBL_LDAP_ADMIN_PASSWORD' => 'Mot de passe:',
    'LBL_LDAP_AUTHENTICATION' => 'Authentification:',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'Connecter au serveur LDAP avec les informations d\'identification d\'utilisateur spécifiques. Sinon l\'accès sera anonyme.',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'Création automatique des Utilisateurs:',
    'LBL_LDAP_USER_DN' => 'DN Utilisateur :',
    'LBL_LDAP_GROUP_DN' => 'Groupe DN:',
    'LBL_LDAP_GROUP_DN_DESC' => 'Exemple: <em>ou=groups,dc=example,dc=com</em>',
    'LBL_LDAP_USER_FILTER' => 'Filtre Utilisateur:',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'Membre du Groupe:',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Les utilisateurs doivent être membre d\'un groupe spécifique',
    'LBL_LDAP_GROUP_USER_ATTR' => 'Attribut Utilisateur:',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'L\'identifiant unique de personne qui sera utilisé pour vérifier si l\'utilisateur est membre du groupe. Exemple: <em>uid</em>',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'L\'attribut de Groupe qui sera utilisé pour filtrer en plus de l\'attribut Utilisateur. Exemple : <em>memberUid</em>',
    'LBL_LDAP_GROUP_ATTR' => 'Attribut de Groupe:',
    'LBL_LDAP_USER_FILTER_DESC' => 'Appliquer les options de filtrage supplémentaires lors de la connexion d\'un utilisateur ex.<em>is_suitecrm_user=1 or (is_suitecrm_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Attribut du Login:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Attribut de liaison:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'Pour lier les exemples d’utilisateur LDAP: :[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'Pour la recherche des exemples d’utilisateur LDAP: :[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Exemple : ldap.example.com ou ldaps://ldap.example.com pour une connexion SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Exemple: <em>389 ou 636 pour du SSL</em>',
    'LBL_LDAP_GROUP_NAME' => 'Nom Groupe:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Exemple <em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'Exemple: <em>ou=people,dc=example,dc=com</em>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Si un utilisateur authentifié n\'existe pas il sera créé.',
    'LBL_LDAP_ENC_KEY' => 'Clé de cryptage:',
    'DEVELOPER_MODE' => 'Mode Développeur',

    'SHOW_DOWNLOADS_TAB' => 'Afficher l\'onglet Téléchargements',
    'SHOW_DOWNLOADS_TAB_HELP' => 'Lorsque sélectionné, l’onglet de téléchargement apparaîtra dans les paramètres utilisateur et fournira aux utilisateurs un accès aux plug-ins CRM et autres fichiers disponibles',
    'LBL_LDAP_ENC_KEY_DESC' => 'Pour l\'authentification SOAP utilisant LDAP et les Plugins.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'L\'extension php_mcrypt doit être activée dans votre fichier php.ini.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'L\'extension openssl doit être activée dans votre fichier php.ini.',
    'LBL_ALL' => 'Tous',
    'LBL_MARK_POINT' => 'Marqueur',
    'LBL_NEXT_' => 'Suivant>>',
    'LBL_REFRESH_FROM_MARK' => 'Actualiser depuis le Marqueur',
    'LBL_SEARCH' => 'Rechercher:',
    'LBL_REG_EXP' => 'Reg Exp:',
    'LBL_IGNORE_SELF' => 'Ignorer Soi-même:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'Marquer par où commencer la journalisation',
    'LBL_DISPLAYING_LOG' => 'Affichage Journal',
    'LBL_YOUR_PROCESS_ID' => 'Votre Identifiant Processus',
    'LBL_YOUR_IP_ADDRESS' => 'Votre adresse IP est',
    'LBL_IT_WILL_BE_IGNORED' => ' Elle sera ignorée ',
    'LBL_LOG_NOT_CHANGED' => 'Le journal n\'a pas changé',
    'LBL_ALERT_JPG_IMAGE' => 'Le format de fichier image doit être JPEG. Uploader un nouveau fichier avec une extention .jpg.',
    'LBL_ALERT_TYPE_IMAGE' => 'Le format de fichier image doit être JPEG ou PNG. Uploader un nouveau fichier avec l\'extention .jpg ou .png.',
    'LBL_ALERT_SIZE_RATIO' => 'Le ratio d\'aspect de l\'image doit être compris entre 1:1 et 10:1. L\'image doit être redimensionnée.',
    'ERR_ALERT_FILE_UPLOAD' => 'Erreur lors du téléchargement de l\'image.',
    'LBL_LOGGER' => 'Paramètres Journal',
    'LBL_LOGGER_FILENAME' => 'Nom du fichier journal',
    'LBL_LOGGER_FILE_EXTENSION' => 'Extension',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'Taille maximale du journal',
    'LBL_STACK_TRACE' => 'Activer la trace de la pile',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Format de date par défaut',
    'LBL_LOGGER_LOG_LEVEL' => 'Niveau de journal',
    'LBL_LEAD_CONV_OPTION' => 'Options Conversion Prospect',
    'LEAD_CONV_OPT_HELP' => "<b>Copier</b> - Crée et lie les copies de toutes les activités du Prospect aux nouveaux enregistrements sélectionnés par l'utilisateur durant la conversion du Propect. Les copies sont créées pour chacun des enregistrement sélectionnés.<br><br><b>Déplacer</b> - Déplace toutes les activités du Propsect vers le nouvel enregistrement qui est sélectionné par l'utilisateur durant la conversion..<br><br><b>Ne rien faire</b> - Ne fais rien avec les activités du Propsect durant la conversion. Les activités restent attachées seulement au Prospect.",
    'LBL_CONFIG_AJAX' => 'Configurer interface Utilisateur AJAX',
    'LBL_CONFIG_AJAX_DESC' => 'Activez ou désactivez l\'utilisation de l\'interface utilisateur AJAX pour des modules spécifiques.',
    'LBL_LOGGER_MAX_LOGS' => 'Nombre maximum de journaux (avant le roulement)',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'Ajouter après le nom de fichier',
    'LBL_VCAL_PERIOD' => 'période Mises à jour vCal:',
    'LBL_IMPORT_MAX_RECORDS' => 'Import - Nombre maximum de lignes:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'Précise le nombre de lignes qui est autorisé pour les imports de fichiers.<br>Si le nombre de lignes dans un fichier à importer dépasse ce nombre, l\'utilisateur est alerté.<br>Si aucun nombre n\'est précisé il n\'y a pas de limite pour l\'import.',
    'vCAL_HELP' => 'Nombre de mois inclus dans la détermination de la disponiblité des utilisateurs<br />Pour ne pas utiliser cette fonctionnalité entrez 0. Le minimum étant 1 mois, le maximum 12 mois.',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'Vos Scénarios',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'Aucun scénario n\'a été configuré',
    'LBL_WIZARD_SCENARIOS_DESC' => 'Choisissez les scénarios appropriés pour votre installation. Ces options peuvent être modifiées après l\'installation.',

    'LBL_WIZARD_TITLE' => 'Assistant Administration',
    'LBL_WIZARD_WELCOME_TAB' => 'Bienvenue',
    'LBL_WIZARD_WELCOME_TITLE' => 'Bienvenue!',
    'LBL_WIZARD_WELCOME' => 'Cliquez sur <b>suivant</b> pour la marque, localisez et de configurez le CRM maintenant. Si vous désirez le configurer plus tard, cliquez sur <b>Ignorer</b>.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Suivant >',
    'LBL_WIZARD_BACK_BUTTON' => '< Précédent',
    'LBL_WIZARD_SKIP_BUTTON' => 'Ignorer',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Continuer',
    'LBL_WIZARD_FINISH_TITLE' => 'La configuration de base de votre application est terminée',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Identité visuelle',
    'LBL_WIZARD_SYSTEM_DESC' => 'Fournissez le nom et le logo de votre organisation afin de personnaliser votre CRM.',
    'LBL_WIZARD_LOCALE_DESC' => 'Précisez comment vous souhaitez afficher vos données, basé sur votre situation géographique. Les paramètres que vous fournissez ici seront les paramètres par défaut. Les utilisateurs pourront définir leurs propres préférences dans Mon compte.',
    'LBL_WIZARD_SMTP_DESC' => 'Fournissez le compte de messagerie qui sera utilisé pour envoyer des emails, tels que les notifications assignations et les mots de passe des nouveaux utilisateurs. Les utilisateurs recevront les emails envoyés à partir du compte email spécifié.',
    'LBL_LOADING' => 'Chargement...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Supprimer' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Bienvenue' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Logo' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Afficher les emails des contacts associés dans le sous-panneau Historique pour les modules',
    'LBL_HISTORY_SUBPANEL' => 'Sous panel historique',
);
