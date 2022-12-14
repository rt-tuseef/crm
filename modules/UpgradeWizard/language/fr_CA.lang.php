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
    'ERR_UW_CANNOT_DETERMINE_GROUP' => 'Impossible de d??finir le Groupe',
    'ERR_UW_CANNOT_DETERMINE_USER' => 'Impossible de d??finir le Propri??taire',
    'ERR_UW_CONFIG_WRITE' => 'Erreur de mise ?? jour du fichier config.php avec les nouvelles informations de version.',
    'ERR_UW_CONFIG' => 'Merci de mettre des droits d\'??criture sur votre fichier config.php file writable et raffra??chir cette page.',
    'ERR_UW_DIR_NOT_WRITABLE' => 'R??pertoire ne disposant pas droits d\'??criture',
    'ERR_UW_FILE_NOT_COPIED' => 'Fichier non copi??',
    'ERR_UW_FILE_NOT_DELETED' => 'Probl??me lors de la suppression du package ',
    'ERR_UW_FILE_NOT_READABLE' => 'Le Fichier ne peut ??tre lu.',
    'ERR_UW_FILE_NOT_WRITABLE' => 'Le Fichier ne peut pas ??tre plac?? ou copi?? vers',
    'ERR_UW_FLAVOR_2' => 'Mise ?? jour de la version (CE/Pro/Ent) :',
    'ERR_UW_FLAVOR' => 'Edition (CE/Pro/Ent) de SuiteCRM :',
    'ERR_UW_LOG_FILE_UNWRITABLE' => './upgradeWizard.log ne peut ??tre cr???? ou ??criture impossible.  Merci de v??rifier les autorisations du r??pertoire SuiteCRM.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD' => 'La valeur de mbstring.func_overload est sup??rieure ?? 1. Merci de changer cette valeur dans votre fichier php.ini et de red??marrer le serveur web.',
    'ERR_UW_NO_FILE_UPLOADED' => 'Merci de choisir un fichier et essayez ?? nouveau !',
    'ERR_UW_NO_FILES' => 'Une erreur est survenue, aucuns fichiers ?? v??rifier n\'a ??t?? trouv??.',
    'ERR_UW_NO_MANIFEST' => 'Le fichier zip ne contient pas de fichier manifest.php. Impossible de poursuivre.',
    'ERR_UW_NO_VIEW' => 'Vue sp??cifi??e invalide.',
    'ERR_UW_NOT_VALID_UPLOAD' => 'Chargement invalide.',
    'ERR_UW_NO_CREATE_TMP_DIR' => 'Impossible de cr??er un r??pertoire temporaire. V??rifier les droits.',
    'ERR_UW_ONLY_PATCHES' => 'Seuls les Patchs peuvent ??tre charg??s sur cette page.',
    'ERR_UW_PREFLIGHT_ERRORS' => 'Erreurs trouv??es durant le pr??-contr??le',
    'ERR_UW_UPLOAD_ERR' => 'Une erreur s\'est produite lors du t??l??chargement du fichier. Veuillez r??essayer!<br>' . PHP_EOL,
    'ERR_UW_VERSION' => 'Version de SuiteCRM :',
    'ERR_UW_PHP_VERSION' => 'Version PHP: ',
    'ERR_UW_SUITECRM_VERSION' => 'Version de SuiteCRM :',
    'ERR_UW_WRONG_TYPE' => 'Cette page n\'est pas utilis??e pour l\'execution',
    'LBL_BUTTON_BACK' => 'Retour',
    'LBL_BUTTON_CANCEL' => 'Annuler',
    'LBL_BUTTON_DELETE' => 'Supprimer Package',
    'LBL_BUTTON_DONE' => 'Termin??',
    'LBL_BUTTON_EXIT' => 'Quitter',
    'LBL_BUTTON_NEXT' => 'Suivant',
    'LBL_BUTTON_RECHECK' => 'V??rifier ?? nouveau',
    'LBL_BUTTON_RESTART' => 'Red??marrer',

    'LBL_UPLOAD_UPGRADE' => 'Charger une mise ?? jour ',
    'LBL_UW_BACKUP_FILES_EXIST_TITLE' => 'Fichier Backup',
    'LBL_UW_BACKUP_FILES_EXIST' => 'Les fichiers sauvegard??s pour cette mise ?? jour peuvent ??tre trouv??s dans',
    'LBL_UW_BACKUP' => 'Fichier BACKUP',
    'LBL_UW_CANCEL_DESC' => 'L\'assistant de mise ?? jour a ??t?? annul??. Tous les fichiers temporaires et le fichier zip charg?? ont ??t?? supprim??s.<br><br>Cliquer sur "Effectuer" pour relancer l\'assistant de mise ?? jour.',
    'LBL_UW_CHECK_ALL' => 'Tout v??rifier',
    'LBL_UW_CHECKLIST' => 'Etapes de mise ?? jour',
    'LBL_UW_COMMIT_ADD_TASK_DESC_1' => 'Les sauvegardes de fichiers ??cras??s sont dans le r??pertoire suivant: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_DESC_2' => 'Fusionner manuellement les fichiers suivants: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_NAME' => 'Proc??dure de mise ?? jour: Fusion manuelle des fichiers',
    'LBL_UW_COMMIT_ADD_TASK_OVERVIEW' => 'Veuillez utiliser la m??thode de comparaison la plus connue pour fusionner ces fichiers. Jusqu\'?? ce que cela soit termin??, votre installation CRMsera dans un ??tat incertain, et la mise ?? niveau incompl??te.',
    'LBL_UW_COMPLETE' => 'Termin??r',
    'LBL_UW_COMPLIANCE_ALL_OK' => 'Tous les param??tres syst??me exig??s sont corrects',
    'LBL_UW_COMPLIANCE_CALLTIME' => 'Param??tre PHP: Call Time Pass By Reference',
    'LBL_UW_COMPLIANCE_CURL' => 'Module cURL',
    'LBL_UW_COMPLIANCE_IMAP' => 'Module IMAP',
    'LBL_UW_COMPLIANCE_MBSTRING' => 'Module MBStrings',
    'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD' => 'Param??tre MBStrings mbstring.func_overload',
    'LBL_UW_COMPLIANCE_MEMORY' => 'Param??tre PHP: Memory Limit',
    'LBL_UW_COMPLIANCE_STREAM' => 'Param??tre PHP : Stream',
    'LBL_UW_COMPLIANCE_DB' => 'Version minimum de la base de donn??es',
    'LBL_UW_COMPLIANCE_PHP_INI' => 'Chemin du fichier php.ini',
    'LBL_UW_COMPLIANCE_PHP_VERSION' => 'Version minimale de PHP',
    'LBL_UW_COMPLIANCE_SAFEMODE' => 'Param??tre PHP : Safe Mode',
    'LBL_UW_COMPLIANCE_TITLE2' => 'Param??tres d??tect??s',
    'LBL_UW_COMPLIANCE_XML' => 'Parseur XML',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE' => 'Support compression Zip',
    'LBL_UW_COMPLIANCE_PCRE_VERSION' => 'Version PCRE',
    'LBL_UW_COPIED_FILES_TITLE' => 'Fichiers copi??s avec succ??s',

    'LBL_UW_DB_CHOICE1' => 'Assistant d\'execution de mise ?? jour SQL',
    'LBL_UW_DB_CHOICE2' => 'Requ??tes SQL manuelles',
    'LBL_UW_DB_ISSUES_PERMS' => 'Privil??ges absents',
    'LBL_UW_DB_METHOD' => 'Methode de mise ?? jour de la base de donn??es',
    'LBL_UW_DB_NO_ADD_COLUMN' => 'ALTER TABLE [table] ADD COLUMN [column]',
    'LBL_UW_DB_NO_CHANGE_COLUMN' => 'ALTER TABLE [table] CHANGE COLUMN [column]',
    'LBL_UW_DB_NO_CREATE' => 'CREATE TABLE [table]',
    'LBL_UW_DB_NO_DELETE' => 'DELETE FROM [table]',
    'LBL_UW_DB_NO_DROP_COLUMN' => 'ALTER TABLE [table] DROP COLUMN [column]',
    'LBL_UW_DB_NO_DROP_TABLE' => 'DROP TABLE [table]',
    'LBL_UW_DB_NO_ERRORS' => 'Pas de Privil??ges absents',
    'LBL_UW_DB_NO_INSERT' => 'INSERT INTO [table]',
    'LBL_UW_DB_NO_SELECT' => 'SELECT [x] FROM [table]',
    'LBL_UW_DB_NO_UPDATE' => 'UPDATE [table]',
    'LBL_UW_DB_PERMS' => 'Privil??ge n??cessaire',

    'LBL_UW_DESC_MODULES_INSTALLED' => 'Les mises ?? jours suivantes ont ??t?? install??es:',
    'LBL_UW_END_LOGOUT_PRE' => 'La mise ?? jour est termin??e.',
    'LBL_UW_END_LOGOUT_PRE2' => 'Cliquez sur le bouton Terminer pour quitter l\'assistant de mise ?? jour.',
    'LBL_UW_END_LOGOUT' => 'Veuillez vous d??connecter de votre compte si vous planifiez de r??aliser d\'autres mises ?? jour apr??s celle-ci.',

    'LBL_UW_FILE_DELETED' => ' a ??t?? supprim??.<br>',
    'LBL_UW_FILE_GROUP' => 'Groupe',
    'LBL_UW_FILE_ISSUES_PERMS' => 'Permissions fichier',
    'LBL_UW_FILE_NO_ERRORS' => 'Tous les fichiers ont les droits d\'??criture',
    'LBL_UW_FILE_OWNER' => 'Propri??taire',
    'LBL_UW_FILE_PERMS' => 'Permissions',
    'LBL_UW_FILE_UPLOADED' => ' a ??t?? charg??',
    'LBL_UW_FILE' => 'Nom de fichier',
    'LBL_UW_FILES_QUEUED' => 'Les mises ?? jours suivantes sont pr??tes ?? ??tre install??es:',
    'LBL_UW_FILES_REMOVED' => 'Ces fichiers seront supprim??s du syst??me:<br>' . PHP_EOL,
    'LBL_UW_NEXT_TO_UPLOAD' => '<b>Cliquez sur Suivant pour transmettre le package de mise ?? jour.</b>',
    'LBL_UW_FROZEN' => 'Des ??tapes exig??es doivent ??tre accomplies avant de continuer.',
    'LBL_UW_HIDE_DETAILS' => 'Masquer les D??tails',
    'LBL_UW_IN_PROGRESS' => 'En traitement',
    'LBL_UW_INCLUDING' => 'Comprenant',
    'LBL_UW_INCOMPLETE' => 'Incomplet',
    'LBL_UW_MANUAL_MERGE' => 'Fichier de fusion',
    'LBL_UW_MODULE_READY' => 'Le module est pr??t ?? ??tre install??. Cliquez pour poursuive l\'installation.',
    'LBL_UW_NO_INSTALLED_UPGRADES' => 'Aucunes mises ?? jour enregistr??es d??tect??es.',
    'LBL_UW_NONE' => 'Aucun(e)',
    'LBL_UW_OVERWRITE_DESC' => 'Tous les fichiers modifi??s vont ??tre ??cras??s - comprenant les personnalisations de code et modifications de template. Etes-vous s??r(e) de vouloir continuer ?',

    'LBL_UW_PREFLIGHT_ADD_TASK' => 'Cr??er une t??che pour la fusion manuelle?',
    'LBL_UW_PREFLIGHT_EMAIL_REMINDER' => 'Vous envoyer un email pour vous rappeler la fusion manuelle?',
    'LBL_UW_PREFLIGHT_FILES_DESC' => 'Les fichiers list??s ci-dessous ont ??t?? modifi??s. D??cocher les ??l??ments qui exigent une fusion manuelle. <i>Tous les changements d??tect??s sur les mises en pages (fichiers html) sont automatiquement d??coch??s; Cocher les fichiers qui doivent ??tre ??cras??s.',
    'LBL_UW_PREFLIGHT_NO_DIFFS' => 'Pas de fusion manuelle de fichier exig??e.',
    'LBL_UW_PREFLIGHT_NOT_NEEDED' => 'Pas n??cessaire.',
    'LBL_UW_PREFLIGHT_PRESERVE_FILES' => 'Fichiers auto-pr??serv??s:',
    'LBL_UW_PREFLIGHT_TESTS_PASSED' => 'Tous les tests pr??-v??rifications sont pass??s. Cliquer sur "Suivant" pour appliquer ces changements.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED2' => 'Cliquez sur suivant pour copier les fichiers mis ?? jour sur le syst??me.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED3' => '</b>Veuillez noter</b> que le reste du processus de mise ?? jour est obligatoire et cliquer sur Suivant <b>n??cessitera</b> que vous finalisiez le processus. Si vous ne souhaitez pas continuer, cliquer sur le bouton annuler.',
    'LBL_UW_PREFLIGHT_TOGGLE_ALL' => 'Permutter tous les fichiers',

    'LBL_UW_REBUILD_TITLE' => 'R??sultat de la reconstruction',
    'LBL_UW_SCHEMA_CHANGE' => 'Modification de sch??ma',

    'LBL_UW_SHOW_COMPLIANCE' => 'Voir les param??tres d??tect??s',
    'LBL_UW_SHOW_DB_PERMS' => 'Voir les permissions absentes de la base de donn??es',
    'LBL_UW_SHOW_DETAILS' => 'Voir les d??tails',
    'LBL_UW_SHOW_DIFFS' => 'Voir les fichiers n??cessitant une fusion manuelle',
    'LBL_UW_SHOW_NW_FILES' => 'Voir les fichiers avec des permissions non valides',
    'LBL_UW_SHOW_SCHEMA' => 'Voir le sch??ma du script de modification',
    'LBL_UW_SHOW_SQL_ERRORS' => 'Voir les requ??tes incorrectes',
    'LBL_UW_SHOW' => 'Voir',

    'LBL_UW_SKIPPED_FILES_TITLE' => 'Fichiers ignor??s',
    'LBL_UW_SQL_RUN' => 'V??rifier quand SQL a ??t?? lanc?? manuellement',
    'LBL_UW_START_DESC' => 'Bienvenue ?? l\'assistant de mise ?? jour. Cette assistant est concu pour assister les administrateurs lors de la mise ?? jour de leurs instances SuiteCRM.  Merci de suivre prudemment les instructions qui vous sont donn??es.',
    'LBL_UW_START_DESC2' => 'Remarque??: Nous recommandons fortement que vous cr??ez une copie de l???instance que vous utilisez dans la production et tester le paquet de mise ?? niveau avant de d??ployer la nouvelle version. Si vous avez modifi?? le fichier "composer.json", s???il vous pla??t ex??cuter, une fois le processus de mise ?? niveau termin??e :<br/><br/><pre>composer install --no-dev</pre>', // Keep the <pre>composer install --no-dev</pre> words at the end of the sentence and do not translate it
    'LBL_UW_START_DESC3' => 'Cliquez sur Suivant pour v??rifier votre syst??me et s\'assurer qu\'il est pr??t pour la mise ?? jour. La v??rification inclus les permissions sur les fichiers, sur la base de donn??es et les param??tres syst??me.',
    'LBL_UW_START_UPGRADED_UW_DESC' => 'Le nouvel assistant de mise ?? jour indiquera d??sormais les ??tapes de traitement. Merci de poursuivre votre mise ?? jour.',
    'LBL_UW_START_UPGRADED_UW_TITLE' => 'Bienvenue au nouvel Assistant de mise ?? jour',

    'LBL_UW_TITLE_CANCEL' => 'Annuler',
    'LBL_UW_TITLE_COMMIT' => 'Valider mise ?? jour',
    'LBL_UW_TITLE_END' => 'Compte rendu',
    'LBL_UW_TITLE_PREFLIGHT' => 'Pr??-v??rification',
    'LBL_UW_TITLE_START' => 'D??marrer',
    'LBL_UW_TITLE_SYSTEM_CHECK' => 'V??rifications Syst??me',
    'LBL_UW_TITLE_UPLOAD' => 'Charger une mise ?? jour',
    'LBL_UW_TITLE' => 'Assistant de mise ?? jour',
    'LBL_UW_UNINSTALL' => 'D??sinstaller',
    //500 upgrade labels
    'LBL_UW_ACCEPT_THE_LICENSE' => 'Accepter la licence',
    'LBL_UW_CONVERT_THE_LICENSE' => 'Convertir la licence',

    'LBL_START_UPGRADE_IN_PROGRESS' => 'D??marrage en cours',
    'LBL_SYSTEM_CHECKS_IN_PROGRESS' => 'V??rification syst??me en cours',
    'LBL_LICENSE_CHECK_IN_PROGRESS' => 'V??rification de la licence en cours',
    'LBL_PREFLIGHT_CHECK_IN_PROGRESS' => 'Tests pr??liminaires en cours',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS' => 'Copie de fichier en cours.',
    'LBL_COMMIT_UPGRADE_IN_PROGRESS' => 'Envoi de la mise ?? jour en cours',
    'LBL_UW_COMMIT_DESC' => 'Cliquez sur Suivant pour lancer les scripts additionnels de mise ?? jour.',
    'LBL_UPGRADE_SCRIPTS_IN_PROGRESS' => 'Scripts de mise ?? jour en cours',
    'LBL_UPGRADE_SUMMARY_IN_PROGRESS' => 'R??sum?? de la mise ?? jour en cours',
    'LBL_UPGRADE_IN_PROGRESS' => 'en cours',
    'LBL_UPGRADE_TIME_ELAPSED' => 'Temps ??coul??',
    'LBL_UPGRADE_CANCEL_IN_PROGRESS' => 'Abandon de la mise ?? jour et nettoyage en cours',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE' => 'La mise ?? jour peut prendre un certain temps',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS' => 'V??rification des fichiers charg??s en cours',
    'LBL_UPLOADING_UPGRADE_PACKAGE' => 'Chargement du package de mise ?? jour...',
    'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD' => 'L\'assistant de mise ?? jour a supprim?? l\'ancien sch??ma 451',
    'LBL_UW_DROP_SCHEMA_MANUAL' => 'Suppression manuelle du sch??ma apr??s la mise ?? jour',
    'LBL_UW_DROP_SCHEMA_METHOD' => 'M??thode de suppression de l\'ancien sch??ma',
    'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP' => 'Voir l\'ancien sch??ma qui doit ??tre supprim??',
    'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST' => 'Requ??tes ignor??es',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Php version 5 ou sup??rieur est requis.',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Votre version de PHP n\'est pas support??e par SuiteCRM. Vous devez installer une version de PHP compatible avec SuiteCRM. Merci de consulter la matrice de compatibilt?? disponible dans le document "Release Notes" pour voir quelle versions de PHP sont support??es par SuiteCRM. Votre version actuelle est',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Php Backward Compatibility mode est positionn?? ?? on. Mettre zend.ze1_compatibility_mode ?? Off pour pouvoir continuer',
    //including some strings from moduleinstall that are used in Upgrade
    'LBL_ML_ACTION' => 'Action',
    'LBL_ML_CANCEL' => 'Annuler',
    'LBL_ML_COMMIT' => 'Soumettre',
    'LBL_ML_DESCRIPTION' => 'Description:',
    'LBL_ML_INSTALLED' => 'Date d\'installation',
    'LBL_ML_NAME' => 'Nom',
    'LBL_ML_PUBLISHED' => 'Date de publication',
    'LBL_ML_TYPE' => 'Type',
    'LBL_ML_UNINSTALLABLE' => 'D??sinstallable',
    'LBL_ML_VERSION' => 'Version',
    'LBL_ML_INSTALL' => 'Installation',
    //adding the string used in tracker. copying from homepage
    'LBL_CURRENT_PHP_VERSION' => 'Votre version courrante PHP est: ',
    'LBL_RECOMMENDED_PHP_VERSION_1' => 'La version PHP recommand??e est ',
    'LBL_RECOMMENDED_PHP_VERSION_2' => ' ou sup??rieure.',  // End of a sentence as in Recommended PHP version is version X.Y or above

    'LBL_MODULE_NAME' => 'Assistant de mise ?? jour',
    'LBL_UPLOAD_SUCCESS' => 'Package de mise ?? jour correctement transf??r??. Cliquez sur Suivant pour r??aliser une derni??re v??rification.',
    'LBL_UW_TITLE_LAYOUTS' => 'Confirmer les mises en page',
    'LBL_LAYOUT_MODULE_TITLE' => 'Mise en page',
    'LBL_LAYOUT_MERGE_DESC' => 'Il y a de nouveaux champs disponibles qui ont ??t?? ajout??s dans cette mise ?? jour et qui peuvent ??tre automatiquement ajout??s dans vos mises en page existantes. Pour en savoir plus sur les nouveaux champs, veuillez vous r??f??rez ?? la "release note" de la version vers laquelle vous allez.<br /><br />Si vous ne souhaitez pas ajouter ces nouveaux champs, veuillez d??s??lectionner le ou les modules et vos mises en page ne seront pas impact??es. Les champs seront tout de m??me disponibles dans le Studio apr??s la mise ?? jour.',
    'LBL_LAYOUT_MERGE_TITLE' => 'Cliquez sur Suivant pour confirmer les modifications et terminer la mise ?? jour.',
    'LBL_LAYOUT_MERGE_TITLE2' => 'Cliquez sur Suivant pour finaliser la mise ?? jour.',
    'LBL_UW_CONFIRM_LAYOUTS' => 'Confirmer les mises en page',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Confirmer les mises en page r??sultantes',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Les mises en pages suivantes ont ??t?? fusionn??es avec succ??s :',
    'LBL_SELECT_FILE' => 'S??lectionnez un fichier:',
    'ERROR_VERSION_INCOMPATIBLE' => 'Le fichier upload?? n\'est pas compatible avec cette version de SuiteCRM :',
    'ERROR_PHP_VERSION_INCOMPATIBLE' => 'Le fichier t??l??charg?? n???est pas compatible avec cette version PHP: ',
    'ERROR_SUITECRM_VERSION_INCOMPATIBLE' => 'Le fichier upload?? est incompatible avec cette version de SuiteCRM:',
    'LBL_LANGPACKS' => 'Packages de langue' /*for 508 compliance fix*/,
    'LBL_MODULELOADER' => 'Chargeur de modules' /*for 508 compliance fix*/,
    'LBL_PATCHUPGRADES' => 'Patch de mise ?? jour' /*for 508 compliance fix*/,
    'LBL_THEMES' => 'Th??me' /*for 508 compliance fix*/,
    'LBL_WORKFLOW' => 'WorkFlow' /*for 508 compliance fix*/,
    'LBL_UPGRADE' => 'Mise ?? jour:' /*for 508 compliance fix*/,
    'LBL_PROCESSING' => 'En cours...' /*for 508 compliance fix*/,
    'ERROR_NO_VERSION_SET' => 'Version compatible n???est pas d??finie dans le fichier manifeste',
    'LBL_UPGRD_CSTM_CHK' => 'Le processus de mise ?? niveau mettra ?? jour certains fichiers mais ces fichiers existent ??galement dans custom / folder. S\'il vous pla??t examiner les changements avant de continuer:',
    'ERR_UW_PHP_FILE_ERRORS' => array(
        1 => 'Le fichier charg?? d??passe la valeur upload_max_filesize dans php.ini.',
        2 => 'Le fichier charg?? d??passe la valeur MAX_FILE_SIZE sp??cifi??e dans le formulaire HTML.',
        3 => 'Le fichier a ??t?? charg?? partiellement.',
        4 => 'Aucun fichier charg??.',
        5 => 'Erreur inconnue.',
        6 => 'R??pertoire temporaire absent.',
        7 => 'Echec d\'??criture du fichier sur le disque.',
        8 => 'Chargement interrompu.',
    ),
    'LBL_PASSWORD_EXPIRATON_CHANGED' => 'Attention: l\'expiration du mot de passe n\'est pas d??finie!',
    'LBL_PASSWORD_EXPIRATON_REDIRECT' => 'Veuillez mettre ?? jour vos param??tres ici',
);
