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
// OOTB Scheduler Job Names:
    'LBL_OOTB_WORKFLOW' => 'Traiter Tâches Workflow',
    'LBL_OOTB_REPORTS' => 'Lancer les actions planifiées de génération de rapports',
    'LBL_OOTB_IE' => 'Vérifier les boîtes emails entrants',
    'LBL_OOTB_BOUNCE' => 'Lancer le process nocturne de gestion des bounces des campagnes emails',
    'LBL_OOTB_CAMPAIGN' => 'Lancer le process nocture d\'envoi des Campagnes emails',
    'LBL_OOTB_PRUNE' => 'Purger la BDD le premier de chaque mois',
    'LBL_OOTB_TRACKER' => 'Purger les tables des Suivis',
    'LBL_OOTB_SUITEFEEDS' => 'Prune SuiteCRM Feed Tables ',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Exécuter les notifications par email',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Nettoyer la file des jobs',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Suppression des documents du système de fichier',
    'LBL_OOTB_GOOGLE_CAL_SYNC' => 'Synchronisation de Google Calendar',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => 'Fréquence',
    'LBL_LIST_LIST_ORDER' => 'Actions Planifiées:',
    'LBL_LIST_NAME' => 'Planificateur:',
    'LBL_LIST_RANGE' => 'Plage d\'activité',
    'LBL_LIST_STATUS' => 'Statut:',
    'LBL_LIST_TITLE' => 'Liste Planificateur:',
// human readable:
    'LBL_SUN' => 'Le dimanche',
    'LBL_MON' => 'Le lundi',
    'LBL_TUE' => 'Le mardi',
    'LBL_WED' => 'Le mercredi',
    'LBL_THU' => 'Le jeudi',
    'LBL_FRI' => 'Le vendredi',
    'LBL_SAT' => 'Le samedi',
    'LBL_ALL' => 'Tous les jours',
    'LBL_EVERY' => 'Tous',
    'LBL_FROM' => 'De',
    'LBL_ON_THE' => 'Toutes les',
    'LBL_RANGE' => 'à',
    'LBL_AND' => 'et',
    'LBL_MINUTES' => 'minutes',
    'LBL_HOUR' => 'heures',
    'LBL_HOUR_SING' => 'heures',
    'LBL_OFTEN' => 'Aussi souvent que possible.',
    'LBL_MIN_MARK' => ' minutes',


// crontabs
    'LBL_MINS' => 'min',
    'LBL_HOURS' => 'heures',
    'LBL_DAY_OF_MONTH' => 'date',
    'LBL_MONTHS' => 'mois',
    'LBL_DAY_OF_WEEK' => 'jour',
    'LBL_CRONTAB_EXAMPLES' => 'Les valeurs ci dessus utilisent les notations standard de la crontab.',
// Labels
    'LBL_ALWAYS' => '- toujours -',
    'LBL_CATCH_UP' => 'Relancer si manqué',
    'LBL_CATCH_UP_WARNING' => 'Décocher si cette action peut prendre du temps à s\'exectuer.',
    'LBL_DATE_TIME_END' => 'Date & heure de fin',
    'LBL_DATE_TIME_START' => 'Date & heure de démarrage',
    'LBL_INTERVAL' => 'Intervalle',
    'LBL_JOB' => 'Tâche',
    'LBL_JOB_URL' => 'URL du job',
    'LBL_LAST_RUN' => 'Dernière exécution',
    'LBL_MODULE_NAME' => 'Planificateur',
    'LBL_MODULE_TITLE' => 'Actions Planifiées',
    'LBL_NAME' => 'Nom du Job',
    'LBL_NEVER' => '- jamais -',
    'LBL_NEW_FORM_TITLE' => 'Nouvelle Action Planifiée',
    'LBL_PERENNIAL' => '- jamais -',
    'LBL_SEARCH_FORM_TITLE' => 'Recherche action planifiée',
    'LBL_SCHEDULER' => 'Planificateur:',
    'LBL_STATUS' => 'Statut',
    'LBL_TIME_FROM' => 'Actif de:',
    'LBL_TIME_TO' => 'Actif jusqu à',
    'LBL_WARN_CURL_TITLE' => 'cURL Avertissement:',
    'LBL_WARN_CURL' => 'Attention:',
    'LBL_WARN_NO_CURL' => 'Ce système ne dispose pas des librairies cURL (activées/compilées) dans le module PHP (--with-curl=/path/to/curl_library).  Veuillez contacter votre administrateur pour résoudre ce problème.  Sans la fonctionnalité cURL, le planificateur ne pourra traiter ses jobs.',
    'LBL_BASIC_OPTIONS' => 'Paramétrages Essentiels',
    'LBL_ADV_OPTIONS' => 'Options avancées',
    'LBL_TOGGLE_ADV' => 'Options avancées',
    'LBL_TOGGLE_BASIC' => 'Options de base',
// Links
    'LNK_LIST_SCHEDULER' => 'Actions Planifiées',
    'LNK_NEW_SCHEDULER' => 'Créer Action Planifiée',
// Messages
    'ERR_CRON_SYNTAX' => 'Syntaxe de l\'action planifiée invalide',
    'NTC_LIST_ORDER' => 'L\'ordre de cette planification va apparaitre dans les listes déroulantes du planificateur',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Pour configurer le planificateur Windows',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'Pour configurer la Crontab',
    'LBL_CRON_LINUX_DESC1' => 'Pour exécuter les planificateurs , modifiez le fichier crontab du serveur Web avec la commande suivante:',
    'LBL_CRON_LINUX_DESC2' => '... et ajoutez la ligne suivante au fichier crontab: ',
    'LBL_CRON_LINUX_DESC3' => 'Vous devriez le faire seulement après la fin de l\'installation.',
    'LBL_CRON_WINDOWS_DESC' => 'Pour exécuter les planificateurs, créez un fichier de commandes à exécuter à l\'aide des tâches planifiées de Windows. Le fichier de commandes doit inclure les commandes suivantes: ',
// Subpanels
    'LBL_JOBS_SUBPANEL_TITLE' => 'Executions',
    'LBL_EXECUTE_TIME' => 'Date d\'execution',

//jobstrings
    'LBL_REFRESHJOBS' => 'Actualiser Tâches',
    'LBL_POLLMONITOREDINBOXES' => 'Vérifier Emails Entrantes',
    'LBL_PERFORMFULLFTSINDEX' => 'Système d\'indexation de recherche en texte intégral',

    'LBL_RUNMASSEMAILCAMPAIGN' => 'Lancer Process Nocture Envoi de Masse des Campagnes Email',
    'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Lancer Process Nocturne de Gestion des Messages Rejetés des Campagnes Email',
    'LBL_PRUNEDATABASE' => 'Purger la BDD le premier de chaque mois',
    'LBL_TRIMTRACKER' => 'Purger les tables des Suivis',
    'LBL_TRIMSUGARFEEDS' => 'Prune SuiteCRM Feed Tables ',
    'LBL_SENDEMAILREMINDERS' => 'Exécuter Envoi Rappels par Email',
    'LBL_CLEANJOBQUEUE' => 'Nettoyer la liste des tâches en attente',
    'LBL_REMOVEDOCUMENTSFROMFS' => 'Suppression des documents du système de fichier',

    'LBL_POLLMONITOREDINBOXESAOP' => 'Boîtes de Réception Sondage AOP',
    'LBL_AORRUNSCHEDULEDREPORTS' => 'Exécuter les rapports planifiés',
    'LBL_PROCESSAOW_WORKFLOW' => 'Traiter Workflow AOW',

    'LBL_RUNELASTICSEARCHINDEXERSCHEDULER' => 'Planificateur d\'indexation d\'Elasticsearch',

    'LBL_SCHEDULER_TIMES' => 'Horaires Planificateur',
    'LBL_SYNCGOOGLECALENDAR' => 'Synchronise les calendriers Google',
);

global $sugar_config;
