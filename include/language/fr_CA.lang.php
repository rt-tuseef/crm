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

//the left value is the key stored in the db and the right value is ie display value
//to translate, only modify the right value in each key/value pair
$app_list_strings = array(
//e.g. auf Deutsch 'Contacts'=>'Contakten',
    'language_pack_name' => 'Français (Canada) - fr_CA',
    'moduleList' => array(
        'Home' => 'Accueil',
        'ResourceCalendar' => 'Calendrier Ressource',
        'Contacts' => 'Contacts',
        'Accounts' => 'Comptes',
        'Alerts' => 'Alertes',
        'Opportunities' => 'Opportunités',
        'Cases' => 'Tickets',
        'Notes' => 'Notes',
        'Calls' => 'Appels',
        'TemplateSectionLine' => 'Ligne de section de modèle',
        'Calls_Reschedule' => 'Replanifier Appels',
        'Emails' => 'Emails',
        'EAPM' => 'EAPM',
        'Meetings' => 'Réunions',
        'Tasks' => 'Tâches',
        'Calendar' => 'Calendrier',
        'Leads' => 'Prospects',
        'Currencies' => 'Devises',
        'Activities' => 'Activités',
        'Bugs' => 'Bogues',
        'Feeds' => 'RSS',
        'iFrames' => 'Mes sites',
        'TimePeriods' => 'Périodes',
        'ContractTypes' => 'Types Contrat',
        'Schedulers' => 'Planificateurs',
        'Project' => 'Projets',
        'ProjectTask' => 'Tâches Projet',
        'Campaigns' => 'Campagnes',
        'CampaignLog' => 'Journal de campagne',
        'Documents' => 'Documents',
        'DocumentRevisions' => 'Révisions du document',
        'Connectors' => 'Connecteurs',
        'Roles' => 'Rôles',
        'Notifications' => 'Notifications',
        'Sync' => 'Synchronisation',
        'Users' => 'Utilisateurs',
        'Employees' => 'Employés',
        'Administration' => 'Administration',
        'ACLRoles' => 'Rôles',
        'InboundEmail' => 'Emails Entrants',
        'Releases' => 'Versions',
        'Prospects' => 'Cibles',
        'Queues' => 'Files d\'attente',
        'EmailMarketing' => 'Email Marketing',
        'EmailTemplates' => 'Email - Modèles',
        'ProspectLists' => 'Listes Cible',
        'SavedSearch' => 'Recherches sauvegardées',
        'UpgradeWizard' => 'Assistant de mise à jour',
        'Trackers' => 'Traqueurs',
        'TrackerSessions' => 'Sessions de traqueur',
        'TrackerQueries' => 'Requêtes Traqueur',
        'FAQ' => 'FAQ',
        'Newsletters' => 'Bulletins',
        'SugarFeed' => 'Flux CRM',
        'SugarFavorites' => 'Favoris CRM',

        'OAuthKeys' => 'OAuth Clé Consommateur',
        'OAuthTokens' => 'Jetons OAuth',
        'OAuth2Clients' => 'Clients OAuth',
        'OAuth2Tokens' => 'Jetons OAuth',
    ),

    'moduleListSingular' => array(
        'Home' => 'Accueil',
        'Dashboard' => 'Tableau de bord',
        'Contacts' => 'Contact',
        'Accounts' => 'Compte',
        'Opportunities' => 'Opportunité',
        'Cases' => 'Ticket',
        'Notes' => 'Notes',
        'Calls' => 'Appels',
        'Emails' => 'Email',
        'EmailTemplates' => 'Modèle Email',
        'Meetings' => 'Réunions',
        'Tasks' => 'Tâche',
        'Calendar' => 'Calendrier',
        'Leads' => 'Prospects',
        'Activities' => 'Activités',
        'Bugs' => 'Bogue',
        'KBDocuments' => 'Document Base de Connaissance',
        'Feeds' => 'RSS',
        'iFrames' => 'Mes Sites',
        'TimePeriods' => 'Périodes',
        'Project' => 'Projet',
        'ProjectTask' => 'Tâche Projet',
        'Prospects' => 'Cible',
        'Campaigns' => 'Campagne',
        'Documents' => 'Document',
        'Sync' => 'Synchronisation',
        'Users' => 'Utilisateur',
        'SugarFavorites' => 'Favoris CRM',

    ),

    'checkbox_dom' => array(
        '' => '',
        '1' => 'Oui',
        '2' => 'Non',
    ),

    //e.g. en français 'Analyst'=>'Analyste',
    'account_type_dom' => array(
        '' => '',
        'Analyst' => 'Analyste',
        'Competitor' => 'Compétiteur',
        'Customer' => 'Client',
        'Integrator' => 'Intégrateur',
        'Investor' => 'Investisseur',
        'Partner' => 'Partenaire',
        'Press' => 'Presse',
        'Prospect' => 'Prospect',
        'Reseller' => 'Revendeur',
        'Other' => 'Autre',
    ),
    //e.g. en español 'Apparel'=>'Ropa',
    'industry_dom' => array(
        '' => '',
        'Apparel' => 'Textile',
        'Banking' => 'Services bancaire',
        'Biotechnology' => 'Biotechnologie',
        'Chemicals' => 'Industrie Chimique',
        'Communications' => 'Communications',
        'Construction' => 'Construction',
        'Consulting' => 'Conseil',
        'Education' => 'Éducation',
        'Electronics' => 'Electronique',
        'Energy' => 'Energie',
        'Engineering' => 'Ingénierie',
        'Entertainment' => 'Divertissement',
        'Environmental' => 'Environnement',
        'Finance' => 'Finance',
        'Government' => 'Gouvernement',
        'Healthcare' => 'Santé',
        'Hospitality' => 'Hospitalité',
        'Insurance' => 'Assurance',
        'Machinery' => 'Industrie lourde',
        'Manufacturing' => 'Fabrication',
        'Media' => 'Média',
        'Not For Profit' => 'Sans but lucratif',
        'Recreation' => 'Loisir',
        'Retail' => 'Vente au détail',
        'Shipping' => 'Expédition',
        'Technology' => 'Technologie',
        'Telecommunications' => 'Télécommunications',
        'Transportation' => 'Transport',
        'Utilities' => 'Services',
        'Other' => 'Autre',
    ),
    'lead_source_default_key' => 'Auto-généré',
    'lead_source_dom' => array(
        '' => '',
        'Cold Call' => 'Appel de prospection',
        'Existing Customer' => 'Client Existant',
        'Self Generated' => 'Auto-généré',
        'Employee' => 'Employé',
        'Partner' => 'Partenaire',
        'Public Relations' => 'Relations Publique',
        'Direct Mail' => 'Publipostage',
        'Conference' => 'Conférence',
        'Trade Show' => 'Foire Commerciale',
        'Web Site' => 'Site Web',
        'Word of mouth' => 'Bouche à oreille',
        'Email' => 'Email',
        'Campaign' => 'Campagne',
        'Other' => 'Autre',
    ),
    'opportunity_type_dom' => array(
        '' => '',
        'Existing Business' => 'Entreprise Existante',
        'New Business' => 'Nouvelle Entreprise',
    ),
    'roi_type_dom' => array(
        'Revenue' => 'Revenu',
        'Investment' => 'Investissement',
        'Expected_Revenue' => 'Revenu Prévu',
        'Budget' => 'Budget',

    ),
    //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
    'opportunity_relationship_type_default_key' => 'Décideur Principal',
    'opportunity_relationship_type_dom' => array(
        '' => '',
        'Primary Decision Maker' => 'Décideur Principal',
        'Business Decision Maker' => 'Décideur de l\'entreprise',
        'Business Evaluator' => 'Évaluateur de l\'entreprise',
        'Technical Decision Maker' => 'Décideur Technique',
        'Technical Evaluator' => 'Évaluateur Technique',
        'Executive Sponsor' => 'Sponsor Exécutif',
        'Influencer' => 'Influenceur',
        'Other' => 'Autre',
    ),
    //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
    'case_relationship_type_default_key' => 'Contact principal',
    'case_relationship_type_dom' => array(
        '' => '',
        'Primary Contact' => 'Contact Principal',
        'Alternate Contact' => 'Contact Alternatif',
    ),
    'payment_terms' => array(
        '' => '',
        'Net 15' => 'Net 15',
        'Net 30' => 'Net 30',
    ),
    'sales_stage_default_key' => 'Prospection',
    'sales_stage_dom' => array(
        'Prospecting' => 'Prospection',
        'Qualification' => 'Qualification',
        'Needs Analysis' => 'Analyse des besoins',
        'Value Proposition' => 'Proposition de valeur',
        'Id. Decision Makers' => 'Identifier les Décideurs',
        'Perception Analysis' => 'Analyse de perception',
        'Proposal/Price Quote' => 'Soumission/Devis',
        'Negotiation/Review' => 'Négociation/Revue',
        'Closed Won' => 'Fermé Gagné',
        'Closed Lost' => 'Fermé Perdu',
    ),
    'sales_probability_dom' => // keys must be the same as sales_stage_dom
        array(
            'Prospecting' => '10',
            'Qualification' => '20',
            'Needs Analysis' => '25',
            'Value Proposition' => '30',
            'Id. Decision Makers' => '40',
            'Perception Analysis' => '50',
            'Proposal/Price Quote' => '65',
            'Negotiation/Review' => '80',
            'Closed Won' => '100',
            'Closed Lost' => '0',
        ),
    'activity_dom' => array(
        'Call' => 'Appel',
        'Meeting' => 'Réunion',
        'Task' => 'Tâche',
        'Email' => 'Email',
        'Note' => 'Note',
    ),
    'salutation_dom' => array(
        '' => '',
        'Mr.' => 'M.',
        'Ms.' => 'Mme',
        'Mrs.' => 'Mme',
        'Miss' => 'Mlle',
        'Dr.' => 'Dr.',
        'Prof.' => 'Prof.',
    ),
    //time is in seconds; the greater the time the longer it takes;
    'reminder_max_time' => 90000,
    'reminder_time_options' => array(
        60 => '1 minute avant',
        300 => '5 minutes avant',
        600 => '10 minutes avant',
        900 => '15 minutes avant',
        1800 => '30 minutes avant',
        3600 => '1 heure avant',
        7200 => '2 heures avant',
        10800 => '3 heures avant',
        18000 => '5 heures avant',
        86400 => '1 jour avant',
    ),

    'task_priority_default' => 'Moyenne',
    'task_priority_dom' => array(
        'High' => 'Haute',
        'Medium' => 'Moyenne',
        'Low' => 'Basse',
    ),
    'task_status_default' => 'Non démarré',
    'task_status_dom' => array(
        'Not Started' => 'Non commencé',
        'In Progress' => 'En cours',
        'Completed' => 'Réalisée',
        'Pending Input' => 'En attente de données',
        'Deferred' => 'Reportée',
    ),
    'meeting_status_default' => 'Planifié',
    'meeting_status_dom' => array(
        'Planned' => 'Planifiée',
        'Held' => 'Tenue',
        'Not Held' => 'Annulée',
    ),
    'extapi_meeting_password' => array(
        'WebEx' => 'WebEx',
    ),
    'meeting_type_dom' => array(
        'Other' => 'Autre',
        'Sugar' => 'SuiteCRM',
    ),
    'call_status_default' => 'Planifié',
    'call_status_dom' => array(
        'Planned' => 'Planifiée',
        'Held' => 'Tenue',
        'Not Held' => 'Annulée',
    ),
    'call_direction_default' => 'Sortant',
    'call_direction_dom' => array(
        'Inbound' => 'Entrant',
        'Outbound' => 'Sortant',
    ),
    'lead_status_dom' => array(
        '' => '',
        'New' => 'Nouveau',
        'Assigned' => 'Assigné',
        'In Process' => 'En cours',
        'Converted' => 'Converti',
        'Recycled' => 'Recyclé',
        'Dead' => 'Mort',
    ),
    'case_priority_default_key' => 'P2',
    'case_priority_dom' => array(
        'P1' => 'Haute',
        'P2' => 'Moyenne',
        'P3' => 'Basse',
    ),
    'user_type_dom' => array(
        'RegularUser' => 'Utilisateur Normal',
        'Administrator' => 'Administrateur',
    ),
    'user_status_dom' => array(
        'Active' => 'Actif',
        'Inactive' => 'Inactif',
    ),
    'user_factor_auth_interface_dom' => array(
        'FactorAuthEmailCode' => 'Code Email',
    ),
    'employee_status_dom' => array(
        'Active' => 'Actif',
        'Terminated' => 'Terminé',
        'Leave of Absence' => 'Absence temporaire',
    ),
    'messenger_type_dom' => array(
        '' => '',
        'MSN' => 'MSN',
        'Yahoo!' => 'Yahoo!',
        'AOL' => 'AOL',
    ),
    'project_task_priority_options' => array(
        'High' => 'Haute',
        'Medium' => 'Moyenne',
        'Low' => 'Basse',
    ),
    'project_task_priority_default' => 'Moyenne',

    'project_task_status_options' => array(
        'Not Started' => 'Non commencé',
        'In Progress' => 'En cours',
        'Completed' => 'Réalisée',
        'Pending Input' => 'En attente de données',
        'Deferred' => 'Reportée',
    ),
    'project_task_utilization_options' => array(
        '0' => 'aucun',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array(
        'Draft' => 'Brouillon',
        'In Review' => 'En revue',
        'Underway' => 'En cours',
        'On_Hold' => 'En attente',
        'Completed' => 'Réalisée',
    ),
    'project_status_default' => 'Brouillon',

    'project_duration_units_dom' => array(
        'Days' => 'Jours',
        'Hours' => 'Heures',
    ),

    'activity_status_type_dom' => array(
        '' => '--Aucun--',
        'active' => 'Actif',
        'inactive' => 'Inactif',
    ),

    // Note:  do not translate record_type_default_key
    //        it is the key for the default record_type_module value
    'record_type_default_key' => 'Comptes',
    'record_type_display' => array(
        '' => '',
        'Accounts' => 'Compte',
        'Opportunities' => 'Opportunité',
        'Cases' => 'Ticket',
        'Leads' => 'Prospect',
        'Contacts' => 'Contact', // cn (11/22/2005) added to support Emails

        'Bugs' => 'Bogue',
        'Project' => 'Projet',

        'Prospects' => 'Cible',
        'ProjectTask' => 'Tâche Projet',

        'Tasks' => 'Tâche',

        'AOS_Contracts' => 'Contrat',
        'AOS_Invoices' => 'Facture',
        'AOS_Quotes' => 'Devis',
        'AOS_Products' => 'Produit',

    ),

    'record_type_display_notes' => array(
        'Accounts' => 'Compte',
        'Contacts' => 'Contact',
        'Opportunities' => 'Opportunité',
        'Campaigns' => 'Campagne',
        'Tasks' => 'Tâche',
        'Emails' => 'Email',

        'Bugs' => 'Bogue',
        'Project' => 'Projet',
        'ProjectTask' => 'Tâche Projet',
        'Prospects' => 'Cible',
        'Cases' => 'Ticket',
        'Leads' => 'Prospect',

        'Meetings' => 'Réunion',
        'Calls' => 'Appel',

        'AOS_Contracts' => 'Contrat',
        'AOS_Invoices' => 'Facture',
        'AOS_Quotes' => 'Devis',
        'AOS_Products' => 'Produit',
    ),

    'parent_type_display' => array(
        'Accounts' => 'Compte',
        'Contacts' => 'Contact',
        'Tasks' => 'Tâche',
        'Opportunities' => 'Opportunité',

        'Bugs' => 'Bogue',
        'Cases' => 'Ticket',
        'Leads' => 'Prospect',

        'Project' => 'Projet',
        'ProjectTask' => 'Tâche Projet',

        'Prospects' => 'Cible',

        'AOS_Contracts' => 'Contrat',
        'AOS_Invoices' => 'Facture',
        'AOS_Quotes' => 'Devis',
        'AOS_Products' => 'Produit',

    ),
    'parent_line_items' => array(
        'AOS_Quotes' => 'Devis',
        'AOS_Invoices' => 'Factures',
        'AOS_Contracts' => 'Contrats',
    ),
    'issue_priority_default_key' => 'Moyenne',
    'issue_priority_dom' => array(
        'Urgent' => 'Urgent',
        'High' => 'Haute',
        'Medium' => 'Moyenne',
        'Low' => 'Basse',
    ),
    'issue_resolution_default_key' => '',
    'issue_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Accepté',
        'Duplicate' => 'Dupliquer',
        'Closed' => 'Fermé',
        'Out of Date' => 'Expiré',
        'Invalid' => 'Invalide',
    ),

    'issue_status_default_key' => 'Nouveau',
    'issue_status_dom' => array(
        'New' => 'Nouveau',
        'Assigned' => 'Assigné',
        'Closed' => 'Fermé',
        'Pending' => 'En attente',
        'Rejected' => 'Rejeté',
    ),

    'bug_priority_default_key' => 'Moyenne',
    'bug_priority_dom' => array(
        'Urgent' => 'Urgent',
        'High' => 'Haute',
        'Medium' => 'Moyenne',
        'Low' => 'Basse',
    ),
    'bug_resolution_default_key' => '',
    'bug_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Accepté',
        'Duplicate' => 'Doublon',
        'Fixed' => 'Fixé',
        'Out of Date' => 'Expiré',
        'Invalid' => 'Invalide',
        'Later' => 'plus tard',
    ),
    'bug_status_default_key' => 'Nouveau',
    'bug_status_dom' => array(
        'New' => 'Nouveau',
        'Assigned' => 'Assigné',
        'Closed' => 'Fermé',
        'Pending' => 'En attente',
        'Rejected' => 'Rejeté',
    ),
    'bug_type_default_key' => 'Bogue',
    'bug_type_dom' => array(
        'Defect' => 'Vice',
        'Feature' => 'Fonctionnalité',
    ),
    'case_type_dom' => array(
        'Administration' => 'Administration',
        'Product' => 'Produit',
        'User' => 'Utilisateur',
    ),

    'source_default_key' => '',
    'source_dom' => array(
        '' => '',
        'Internal' => 'Interne',
        'Forum' => 'Forum',
        'Web' => 'Web',
        'InboundEmail' => 'Email',
    ),

    'product_category_default_key' => '',
    'product_category_dom' => array(
        '' => '',
        'Accounts' => 'Comptes',
        'Activities' => 'Activités',
        'Bugs' => 'Bogues',
        'Calendar' => 'Calendrier',
        'Calls' => 'Appels',
        'Campaigns' => 'Campagnes',
        'Cases' => 'Tickets',
        'Contacts' => 'Contacts',
        'Currencies' => 'Devises',
        'Dashboard' => 'Tableaux de bord',
        'Documents' => 'Documents',
        'Emails' => 'Emails',
        'Feeds' => 'Flux',
        'Forecasts' => 'Prévisions',
        'Help' => 'Aide',
        'Home' => 'Accueil',
        'Leads' => 'Prospects',
        'Meetings' => 'Réunions',
        'Notes' => 'Notes',
        'Opportunities' => 'Opportunités',
        'Outlook Plugin' => 'Plugin Outlook',
        'Projects' => 'Projets',
        'Quotes' => 'Devis',
        'Releases' => 'Versions',
        'RSS' => 'RSS',
        'Studio' => 'Studio',
        'Upgrade' => 'Mise à Jour',
        'Users' => 'Utilisateurs',
    ),
    /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
    'campaign_status_dom' => array(
        '' => '',
        'Planning' => 'Planification',
        'Active' => 'Actif',
        'Inactive' => 'Inactif',
        'Complete' => 'Terminé',
        //'In Queue' => 'In Queue',
        //'Sending' => 'Sending',
    ),
    'campaign_type_dom' => array(
        '' => '',
        'Telesales' => 'Télévente',
        'Mail' => 'Courrier',
        'Email' => 'Email',
        'Print' => 'Imprimer',
        'Web' => 'Web',
        'Radio' => 'Radio',
        'Television' => 'Télévision',
        'NewsLetter' => 'Bulletin',
        'Survey' => 'Sondage',
    ),

    'newsletter_frequency_dom' => array(
        '' => '',
        'Weekly' => 'Hebdomadaire',
        'Monthly' => 'Mensuelle',
        'Quarterly' => 'Trimestrielle',
        'Annually' => 'Annuelle',
    ),

    'notifymail_sendtype' => array(
        'SMTP' => 'SMTP',
    ),
    'dom_cal_month_long' => array(
        '0' => '',
        '1' => 'Janvier',
        '2' => 'Février',
        '3' => 'Mars',
        '4' => 'Avril',
        '5' => 'Mai',
        '6' => 'Juin',
        '7' => 'Juillet',
        '8' => 'Août',
        '9' => 'Septembre',
        '10' => 'Octobre',
        '11' => 'Novembre',
        '12' => 'Décembre',
    ),
    'dom_cal_month_short' => array(
        '0' => '',
        '1' => 'Janv',
        '2' => 'Fév',
        '3' => 'Mar',
        '4' => 'Avr',
        '5' => 'Mai',
        '6' => 'Juin',
        '7' => 'Juil',
        '8' => 'Août',
        '9' => 'Sept',
        '10' => 'Oct',
        '11' => 'Nov',
        '12' => 'Déc',
    ),
    'dom_cal_day_long' => array(
        '0' => '',
        '1' => 'Dimanche',
        '2' => 'Lundi',
        '3' => 'Mardi',
        '4' => 'Mercredi',
        '5' => 'Jeudi',
        '6' => 'Vendredi',
        '7' => 'Samedi',
    ),
    'dom_cal_day_short' => array(
        '0' => '',
        '1' => 'Dim',
        '2' => 'Lun',
        '3' => 'Mar',
        '4' => 'Mer',
        '5' => 'Jeu',
        '6' => 'Ven',
        '7' => 'Sam',
    ),
    'dom_meridiem_lowercase' => array(
        'am' => 'am',
        'pm' => 'pm',
    ),
    'dom_meridiem_uppercase' => array(
        'AM' => 'AM',
        'PM' => 'PM',
    ),

    'dom_email_types' => array(
        'out' => 'Envoyé',
        'archived' => 'Archivé',
        'draft' => 'Brouillon',
        'inbound' => 'Entrant',
        'campaign' => 'Campagne',
    ),
    'dom_email_status' => array(
        'archived' => 'Archivé',
        'closed' => 'Fermé',
        'draft' => 'Brouillon',
        'read' => 'Lu',
        'replied' => 'Répondu',
        'sent' => 'Envoyé',
        'send_error' => 'Erreur Envoi',
        'unread' => 'Non Lu',
    ),
    'dom_email_archived_status' => array(
        'archived' => 'Archivé',
    ),

    'dom_email_server_type' => array(
        '' => '--Aucun(e)--',
        'imap' => 'IMAP',
    ),
    'dom_mailbox_type' => array(/*''           => '--None Specified--',*/
        'pick' => '-- Aucun --',
        'createcase' => 'Créer un Ticket',
        'bounce' => 'Gestion Messages Rejetés',
    ),
    'dom_email_distribution' => array(
        '' => '--Aucun(e)--',
        'direct' => 'Assignation directe',
        'roundRobin' => 'Round-Robin',
        'leastBusy' => 'Moins chargé',
    ),
    'dom_email_errors' => array(
        1 => 'Ne sélectionnez qu\'un seul utilisateur lors de l\'affectation directe d\'éléments.',
        2 => 'Vous devez attribuer uniquement les éléments cochés lors de l\'attribution directe d\'éléments.',
    ),
    'dom_email_bool' => array(
        'bool_true' => 'Oui',
        'bool_false' => 'Non',
    ),
    'dom_int_bool' => array(
        1 => 'Oui',
        0 => 'Non',
    ),
    'dom_switch_bool' => array(
        'on' => 'Sur',
        'off' => 'Non',
        '' => '--Aucun(e)--',
    ),

    'dom_email_link_type' => array(
        'sugar' => 'CRM Client Email',
        'mailto' => 'Client Mail Externe',
    ),

    'dom_editor_type' => array(
        'none' => 'Direct HTML',
        'tinymce' => 'TinyMCE',
        'mozaik' => 'Mozaik',
    ),

    'dom_email_editor_option' => array(
        '' => 'Format Email par défaut',
        'html' => 'Email HTML',
        'plain' => 'Email Texte Brut',
    ),

    'schedulers_times_dom' => array(
        'not run' => 'Temps d\'execution dépassé, Non Executé',
        'ready' => 'Prêt',
        'in progress' => 'En cours',
        'failed' => 'Échec',
        'completed' => 'Terminé',
        'no curl' => 'Non exécuté: cURL non disponible',
    ),

    'scheduler_status_dom' => array(
        'Active' => 'Actif',
        'Inactive' => 'Inactif',
    ),

    'scheduler_period_dom' => array(
        'min' => 'Minutes',
        'hour' => 'Heures',
    ),
    'document_category_dom' => array(
        '' => '',
        'Marketing' => 'Marketing',
        'Knowledege Base' => 'Base de Connaissances',
        'Sales' => 'Ventes',
    ),

    'email_category_dom' => array(
        '' => '',
        'Archived' => 'Archivé',
        // TODO: add more categories here...
    ),

    'document_subcategory_dom' => array(
        '' => '',
        'Marketing Collateral' => 'Supports Marketing',
        'Product Brochures' => 'Brochures Produit',
        'FAQ' => 'FAQ',
    ),

    'document_status_dom' => array(
        'Active' => 'Actif',
        'Draft' => 'Brouillon',
        'FAQ' => 'FAQ',
        'Expired' => 'Expiré',
        'Under Review' => 'En cours de révision',
        'Pending' => 'En attente',
    ),
    'document_template_type_dom' => array(
        '' => '',
        'mailmerge' => 'Publipostage',
        'eula' => 'CLUF',
        'nda' => 'Accord de confidentialité',
        'license' => 'Termes de Licence',
    ),
    'dom_meeting_accept_options' => array(
        'accept' => 'Accepter',
        'decline' => 'Décliner',
        'tentative' => 'Incertain',
    ),
    'dom_meeting_accept_status' => array(
        'accept' => 'Accepté',
        'decline' => 'Refusé',
        'tentative' => 'Incertain',
        'none' => 'Aucun',
    ),
    'duration_intervals' => array(
        '0' => '00',
        '15' => '15',
        '30' => '30',
        '45' => '45',
    ),
    'repeat_type_dom' => array(
        '' => 'Aucun',
        'Daily' => 'Quotidien',
        'Weekly' => 'Hebdomadaire',
        'Monthly' => 'Mensuelle',
        'Yearly' => 'Annuel',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => 'jour(s)',
        'Weekly' => 'semaine(s)',
        'Monthly' => 'mois',
        'Yearly' => 'année(s)',
    ),

    'duration_dom' => array(
        '' => 'Aucun',
        '900' => '15 minutes',
        '1800' => '30 minutes',
        '2700' => '45 minutes',
        '3600' => '1 heure',
        '5400' => '1.5 heures',
        '7200' => '2 heures',
        '10800' => '3 heures',
        '21600' => '6 heures',
        '86400' => '1 jour',
        '172800' => '2 jours',
        '259200' => '3 jours',
        '604800' => '1 semaine',
    ),


//prospect list type dom
    'prospect_list_type_dom' => array(
        'default' => 'Par défaut',
        'seed' => 'Semence',
        'exempt_domain' => 'Liste Suppression - Par Domaine',
        'exempt_address' => 'Liste Suppression - Par Adresse Email',
        'exempt' => 'Liste Suppression - Par id',
        'test' => 'Test',
    ),

    'email_settings_num_dom' => array(
        '10' => '10',
        '20' => '20',
        '50' => '50',
    ),
    'email_marketing_status_dom' => array(
        '' => '',
        'active' => 'Actif',
        'inactive' => 'Inactif',
    ),

    'campainglog_activity_type_dom' => array(
        '' => '',
        'targeted' => 'Message Envoyé/Tenté',
        'send error' => 'Message Rejeté, Autre',
        'invalid email' => 'Message Rejeté, Email Invalide',
        'link' => 'Lien cliqué',
        'viewed' => 'Message lu',
        'removed' => 'Destinataire Désinscrit',
        'lead' => 'Prospects Créés',
        'contact' => 'Contacts créés',
        'blocked' => 'Supprimé par adresse ou domaine',
    ),

    'campainglog_target_type_dom' => array(
        'Contacts' => 'Contacts',
        'Users' => 'Utilisateurs',
        'Prospects' => 'Cibles',
        'Leads' => 'Prospects',
        'Accounts' => 'Comptes',
    ),
    'merge_operators_dom' => array(
        'like' => 'contient',
        'exact' => 'Exactement',
        'start' => 'Commence par',
    ),

    'custom_fields_importable_dom' => array(
        'true' => 'Oui',
        'false' => 'Non',
        'required' => 'Requis',
    ),

    'custom_fields_merge_dup_dom' => array(
        0 => 'Désactivé',
        1 => 'Activé',
        2 => 'Filtre',
        3 => 'Filtre sélectionné par défaut',
        4 => 'Filtre uniquement',
    ),

    'projects_priority_options' => array(
        'high' => 'Haut',
        'medium' => 'Moyen',
        'low' => 'Bas',
    ),

    'projects_status_options' => array(
        'notstarted' => 'Pas commencé',
        'inprogress' => 'En cours',
        'completed' => 'Terminé',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array(
        'expandlegend' => 'Afficher Légende',
        'collapselegend' => 'Cacher Légende',
        'clickfordrilldown' => 'Cliquer pour Explorer',
        'detailview' => 'Plus de détails...',
        'piechart' => 'Graphique Pie',
        'groupchart' => 'Graphique Groupe',
        'stackedchart' => 'Graphique Empilé',
        'barchart' => 'Histogramme',
        'horizontalbarchart' => 'Diagramme Horizontal',
        'linechart' => 'Graphique Courbe',
        'noData' => 'Données non disponibles',
        'print' => 'Imprimer',
        'pieWedgeName' => 'sections',
    ),
    'release_status_dom' => array(
        'Active' => 'Actif',
        'Inactive' => 'Inactif',
    ),
    'email_settings_for_ssl' => array(
        '0' => '',
        '1' => 'SSL',
        '2' => 'TLS',
    ),
    'import_enclosure_options' => array(
        '\'' => 'Guillemet simple (&#39;)',
        '"' => 'Guillemets doubles (&#34;)',
        '' => 'Aucun',
        'other' => 'Autre:',
    ),
    'import_delimeter_options' => array(
        ',' => ',',
        ';' => ';',
        '\t' => '\t',
        '.' => '.',
        ':' => ':',
        '|' => '|',
        'other' => 'Autre:',
    ),
    'link_target_dom' => array(
        '_blank' => 'Nouvelle Fenêtre',
        '_self' => 'Même Fenêtre',
    ),
    'dashlet_auto_refresh_options' => array(
        '-1' => 'Ne pas actualiser automatiquement',
        '30' => 'Toutes les 30 secondes',
        '60' => 'Toutes les minutes',
        '180' => 'Toutes les 3 minutes',
        '300' => 'Toutes les 5 minutes',
        '600' => 'Toutes les 10 minutes',
    ),
    'dashlet_auto_refresh_options_admin' => array(
        '-1' => 'Jamais',
        '30' => 'Toutes les 30 secondes',
        '60' => 'Toutes les minutes',
        '180' => 'Toutes les 3 minutes',
        '300' => 'Toutes les 5 minutes',
        '600' => 'Toutes les 10 minutes',
    ),
    'date_range_search_dom' => array(
        '=' => 'Est égal à',
        'not_equal' => 'Pas sur',
        'greater_than' => 'Après',
        'less_than' => 'Avant',
        'last_7_days' => '7 derniers jours',
        'next_7_days' => '7 prochains jours',
        'last_30_days' => '30 derniers jours',
        'next_30_days' => '30 prochains jours',
        'last_month' => 'Mois dernier',
        'this_month' => 'Ce mois-ci',
        'next_month' => 'Mois prochain',
        'last_year' => 'Année dernière',
        'this_year' => 'Cette Année',
        'next_year' => 'Année prochaine',
        'between' => 'Se situe entre',
    ),
    'numeric_range_search_dom' => array(
        '=' => 'Est égal à',
        'not_equal' => 'N’est pas égal',
        'greater_than' => 'Supérieur à',
        'greater_than_equals' => 'Supérieur ou égal à',
        'less_than' => 'Inférieur à',
        'less_than_equals' => 'Inférieur ou égal à',
        'between' => 'Se situe entre',
    ),
    'lead_conv_activity_opt' => array(
        'copy' => 'Copier',
        'move' => 'Déplacer',
        'donothing' => 'Ne rien faire',
    ),
);

$app_strings = array(
    'LBL_SEARCH_REAULTS_TITLE' => 'Résultats',
    'ERR_SEARCH_INVALID_QUERY' => 'Erreur lors de la recherche. La syntaxe de votre requête peut être incorrecte.',
    'ERR_SEARCH_NO_RESULTS' => 'Aucun résultat correspondant à vos critères. Essayez d\'élargir votre recherche.',
    'LBL_SEARCH_PERFORMED_IN' => 'Recherche effectuée en',
    'LBL_EMAIL_CODE' => 'Code Email:',
    'LBL_SEND' => 'Envoyer',
    'LBL_LOGOUT' => 'Déconnexion',
    'LBL_LOGOUT_SUCCESS' => 'Déconnexion réussie',
    'LBL_TOUR_NEXT' => 'Suivant',
    'LBL_TOUR_SKIP' => 'Sauter',
    'LBL_TOUR_BACK' => 'Précédent',
    'LBL_TOUR_TAKE_TOUR' => 'Faire le tour',
    'LBL_MOREDETAIL' => 'Plus de Détails' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Modifier à la volée' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => 'Voir' /*for 508 compliance fix*/,
    'LBL_BASIC_SEARCH' => 'Filtre' /*for 508 compliance fix*/,
    'LBL_Blank' => ' ' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD' => 'Ajouter' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD_EMAIL' => 'Ajouter Adresse Email' /*for 508 compliance fix*/,
    'LBL_HIDE_SHOW' => 'Masquer/Afficher' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'Supprimer' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => 'Effacer' /*for 508 compliance fix*/,
    'LBL_ID_FF_VCARD' => 'vCard' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE' => 'Retirer' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE_EMAIL' => 'Supprimer Adresse Email' /*for 508 compliance fix*/,
    'LBL_ID_FF_OPT_OUT' => 'Désinscription',
    'LBL_ID_FF_INVALID' => 'Rendre Invalide',
    'LBL_ADD' => 'Ajouter' /*for 508 compliance fix*/,
    'LBL_COMPANY_LOGO' => 'Logo Compagnie' /*for 508 compliance fix*/,
    'LBL_CONNECTORS_POPUPS' => 'Popups des connecteurs',
    'LBL_CLOSEINLINE' => 'Fermer',
    'LBL_VIEWINLINE' => 'Afficher',
    'LBL_INFOINLINE' => 'Info',
    'LBL_PRINT' => 'Imprimer',
    'LBL_HELP' => 'Aide',
    'LBL_ID_FF_SELECT' => 'Sélectionner',
    'DEFAULT' => 'Vue Globale',
    'LBL_SORT' => 'Trier',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Activer SMTP au travers de SSL ou TLS?',
    'LBL_NO_ACTION' => 'Aucune action avec ce nom : %s',
    'LBL_NO_SHORTCUT_MENU' => 'Aucune action n’est disponible.',
    'LBL_NO_DATA' => 'Aucune donnée',

    'LBL_ROUTING_FLAGGED' => 'Ajouter un drapeau',
    'LBL_ROUTING_TO' => 'à',
    'LBL_ROUTING_TO_ADDRESS' => 'à l\'adresse',
    'LBL_ROUTING_WITH_TEMPLATE' => 'avec le modèle',

    'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'Vous avez des valeurs pour les champs numéro de téléphone et adresse. Pour remplacer ces valeurs avec celles du compte que vous avez sélectionné, cliquez sur OK. Pour garder les valeurs actuelles, cliquez sur Annuler.',
    'LBL_DROP_HERE' => '[Déposez ici]',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'Pré-remplir Gmail&#153; par défaut',
    'LBL_EMAIL_ACCOUNTS_NAME' => 'Nom',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'Serveur SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'Mot de passe SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'Port SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'Serveur SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'SMTP Nom Utilisateur',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'Par Default',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'Avertissement: Vous avez oublié de définir le nom utilisateur et le mot de passe du courriel sortant.',
    'LBL_EMAIL_ACCOUNTS_SUBTITLE' => 'Définissez les paramètres des comptes emails que vous souhaitez visualiser dans votre CRM.',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'Définissez les paramètres des serveurs SMTP disponibles pour les envois Email depuis votre CRM.',

    'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'Terminé',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'Effacer',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'À:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'Cc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'Cci:',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'À/Cc/Cci',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'Adresse Email',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'Filtre',
    'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'Nom',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'Aucune adresse trouvée',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'Sauvegarder et ajouter au carnet d\'adresse',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'Sélectionner les destinataires',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'Carnet d\'adresses',
    'LBL_EMAIL_REMOVE_SMTP_WARNING' => 'Attention, le SMTP que vous voulez supprimer est asssocié à un compte Mail. Voulez-vous continuer?',
    'LBL_EMAIL_ADDRESSES' => 'Email',
    'LBL_EMAIL_ADDRESS_PRIMARY' => 'Adresse Email',
    'LBL_EMAIL_ADDRESS_OPT_IN' => 'Vous avez confirmé que votre adresse email a été inscrite: ',
    'LBL_EMAIL_ADDRESS_OPT_IN_ERR' => 'Incapable de confirmer l\'adresse email',
    'LBL_EMAIL_ARCHIVE_TO_SUITE' => 'Importer dans CRM',
    'LBL_EMAIL_ASSIGNMENT' => 'Assignation',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'Pièce(s) jointe(s)',
    'LBL_EMAIL_ATTACHMENT' => 'Pièce(s) jointe(s)',
    'LBL_EMAIL_ATTACHMENTS' => 'Du Système Local',
    'LBL_EMAIL_ATTACHMENTS2' => 'À partir de Documents CRM',
    'LBL_EMAIL_ATTACHMENTS3' => 'Modèle Pièces jointes',
    'LBL_EMAIL_ATTACHMENTS_FILE' => 'Fichier',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'Document',
    'LBL_EMAIL_BCC' => 'CCI',
    'LBL_EMAIL_CANCEL' => 'Annuler',
    'LBL_EMAIL_CC' => 'CC',
    'LBL_EMAIL_CHARSET' => 'Encodage',
    'LBL_EMAIL_CHECK' => 'Relever Courrier',
    'LBL_EMAIL_CHECKING_NEW' => 'Relever Nouveau Email',
    'LBL_EMAIL_CHECKING_DESC' => 'Le premier contrôle des nouveaux comptes peut prendre un certain temps.<br><br>Veuillez patienter...',
    'LBL_EMAIL_CLOSE' => 'Fermer',
    'LBL_EMAIL_COFFEE_BREAK' => 'Le traitement des boites aux lettres volumineuses prend plus de temps..<br><br>Veuillez patienter...',

    'LBL_EMAIL_COMPOSE' => 'Email',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'Votre Email est sans Destinataire.',
    'LBL_EMAIL_COMPOSE_NO_BODY' => 'Le contenu du courriel est vide. Envoyer quand même ?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'Le sujet de votre courriel est vide. Envoyer quand même ?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(Aucun sujet)',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'Veuillez saisir une adresse Email valide pour les champs A, CC et CCI',

    'LBL_EMAIL_CONFIRM_CLOSE' => 'Supprimer cet Email?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'Voulez-vous vraiment supprimer cette signature?',

    'LBL_EMAIL_SENT_SUCCESS' => 'Email envoyé',

    'LBL_EMAIL_CREATE_NEW' => '-- Créer à la sauvgarde--',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'Plusieurs',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Vide',
    'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'Date Envoi',
    'LBL_EMAIL_DATE_TODAY' => 'Aujourd’hui',
    'LBL_EMAIL_DELETE' => 'Supprimer',
    'LBL_EMAIL_DELETE_CONFIRM' => 'Voulez-vous vraiment supprimer les messages sélectionnés ?',
    'LBL_EMAIL_DELETE_SUCCESS' => 'Email supprimé avec succès.',
    'LBL_EMAIL_DELETING_MESSAGE' => 'Suppression des messages',
    'LBL_EMAIL_DETAILS' => 'Détails',

    'LBL_EMAIL_EDIT_CONTACT_WARN' => 'Seule l\'adresse principale est utilisée quand vous travaillez avec les contacts.',

    'LBL_EMAIL_EMPTYING_TRASH' => 'Vider Poubelle',
    'LBL_EMAIL_DELETING_OUTBOUND' => 'Suppression du serveur sortant',
    'LBL_EMAIL_CLEARING_CACHE_FILES' => 'Effacer les fichiers de cache',
    'LBL_EMAIL_EMPTY_MSG' => 'Aucun Email à afficher.',
    'LBL_EMAIL_EMPTY_ADDR_MSG' => 'Aucune adresse Email à afficher.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'Le nom du dossier doit être unique et non vide. Veuillez réessayer.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'Impossible de supprimer le dossier. Soit ce dossier ou soit un dossier lié a des Emails ou une boite aux lettres qui lui est associée.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'Ne peut pas déterminer le dossier lié au contexte. Essayer de nouveau.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'Vérifiez vos paramètres.',
    'LBL_EMAIL_ERROR_DESC' => 'Erreurs détectées: ',
    'LBL_EMAIL_DELETE_ERROR_DESC' => 'Vous n\'avez pas accès à cette section. Veuillez contacter votre administrateur système pour obtenir un accès.',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'Noms de dossier doivent être uniques.',
    'LBL_EMAIL_ERROR_EMPTY' => 'Veuillez saisir des critères de recherche.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'Une erreur est survenue',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'Message supprimé du serveur',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'Chaque message est supprimé du serveur ou déplacé vers un dossier différent',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'Impossible d\'accéder au Serveur Mail. Veuillez contacter un administrateur du Serveur Mail',
    'LBL_EMAIL_ERROR_MOVE' => 'Le déplacement des Emails entre serveurs et / ou comptes n\'est pas encore supporté.',
    'LBL_EMAIL_ERROR_MOVE_TITLE' => 'Erreur lors du déplacement',
    'LBL_EMAIL_ERROR_NAME' => 'Nom requis',
    'LBL_EMAIL_ERROR_FROM_ADDRESS' => 'Adresse émetteur requise. Veuillez saisir une adresse valide.',
    'LBL_EMAIL_ERROR_NO_FILE' => 'Veuillez ajouter un fichier',
    'LBL_EMAIL_ERROR_SERVER' => 'Adresse de serveur email requise',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'Le compte Email n\'a pas pu être sauvegardé.',
    'LBL_EMAIL_ERROR_TIMEOUT' => 'Le serveur Email a mis trop de temps à répondre.',
    'LBL_EMAIL_ERROR_USER' => 'Identifiant Connexion requis.',
    'LBL_EMAIL_ERROR_PORT' => 'Port du serveur mail requis.',
    'LBL_EMAIL_ERROR_PROTOCOL' => 'Protocole du serveur mail requis.',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER' => 'Dossier monitoré requis.',
    'LBL_EMAIL_ERROR_TRASH_FOLDER' => 'Dossier Poubelle requis.',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'Cette information n\'est pas disponible',
    'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'Le SMTP n\'est pas configuré.',
    'LBL_EMAIL_ERROR_SENDING' => 'Erreur envoi Email. S’il vous plaît contactez votre administrateur pour assistance.',
    'LBL_EMAIL_FOLDERS' => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0', null, null, '.gif', '') . 'Dossiers',
    'LBL_EMAIL_FOLDERS_SHORT' => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0', null, null, '.gif', ''),
    'LBL_EMAIL_FOLDERS_ADD' => 'Ajouter',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => 'Ajouter Nouveau Dossier',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'Renommer Dossier',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => 'Sauvegarder',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'Ajoutez ce dossier à',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'Ce dossier ne peut être modifié',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => 'Voulez-vous vraiment supprimer ce dossier ?\nCeci est irréversible.\nLa suppression d\'un dossier entraîne la suppression de tous ses sous-dossiers.',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER' => 'Nom Nouveau Dossier',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'Veuillez sélectionner un dossier pour effectuer cette action.',
    'LBL_EMAIL_FOLDERS_TITLE' => 'Gestion des dossiers',

    'LBL_EMAIL_FORWARD' => 'Transférer',
    'LBL_EMAIL_DELIMITER' => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS' => 'Téléchargement [[count]] sur [[total]] courriels',
    'LBL_EMAIL_FROM' => 'De',
    'LBL_EMAIL_GROUP' => 'Groupe',
    'LBL_EMAIL_UPPER_CASE_GROUP' => 'Groupe',
    'LBL_EMAIL_HOME_FOLDER' => 'Accueil',
    'LBL_EMAIL_IE_DELETE' => 'Suppression du compte',
    'LBL_EMAIL_IE_DELETE_SIGNATURE' => 'Effacement de la signature',
    'LBL_EMAIL_IE_DELETE_CONFIRM' => 'Voulez-vous vraiment supprimer ce compte ?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => 'Suppression effectuée.',
    'LBL_EMAIL_IE_SAVE' => 'Sauvegarde des infos',
    'LBL_EMAIL_IMPORTING_EMAIL' => 'Importer Email',
    'LBL_EMAIL_IMPORT_EMAIL' => 'Importer dans CRM',
    'LBL_EMAIL_IMPORT_SETTINGS' => 'Import',
    'LBL_EMAIL_INVALID' => 'Invalide',
    'LBL_EMAIL_LOADING' => 'Chargement...',
    'LBL_EMAIL_MARK' => 'Marquer',
    'LBL_EMAIL_MARK_FLAGGED' => '"avec Drapeau"',
    'LBL_EMAIL_MARK_READ' => '"lu"',
    'LBL_EMAIL_MARK_UNFLAGGED' => '"sans Drapeau"',
    'LBL_EMAIL_MARK_UNREAD' => 'Comme non lu',
    'LBL_EMAIL_ASSIGN_TO' => 'Assigné à',

    'LBL_EMAIL_MENU_ADD_FOLDER' => 'Créer Dossier',
    'LBL_EMAIL_MENU_COMPOSE' => 'Envoyé à',
    'LBL_EMAIL_MENU_DELETE_FOLDER' => 'Supprimer Dossier',
    'LBL_EMAIL_MENU_EMPTY_TRASH' => 'Vider Corbeille',
    'LBL_EMAIL_MENU_SYNCHRONIZE' => 'Synchroniser',
    'LBL_EMAIL_MENU_CLEAR_CACHE' => 'Effacer les fichiers de cache',
    'LBL_EMAIL_MENU_REMOVE' => 'Retirer',
    'LBL_EMAIL_MENU_RENAME_FOLDER' => 'Renommer Dossier',
    'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'Renommer Dossier',
    'LBL_EMAIL_MENU_MAKE_SELECTION' => 'Veuillez effectuer une sélection pour réaliser cette action.',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'Créer Dossier (Distant ou dans CRM)',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'Supprimer Dossier (Distant ou dans CRM)',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'Vider toutes les corbeilles des comptes Email',
    'LBL_EMAIL_MENU_HELP_MARK_READ' => 'Marquer Emails comme lus',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'Enlever Drapeau de ces Emails',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'Renommer Dossier (Distant ou dans CRM)',

    'LBL_EMAIL_MESSAGES' => 'messages',

    'LBL_EMAIL_ML_NAME' => 'Nom Liste',
    'LBL_EMAIL_ML_ADDRESSES_1' => 'Adresses Liste Sélectionnées',
    'LBL_EMAIL_ML_ADDRESSES_2' => 'Adresses Liste Disponibles',

    'LBL_EMAIL_MULTISELECT' => '<b>Ctrl-Clic</b>pour une sélection multiple<br />(Pour Mac utiliser <b>CMD-Clic</b>)',

    'LBL_EMAIL_NO' => 'Non',
    'LBL_EMAIL_NOT_SENT' => 'Le système est ne peut pas traiter votre demande. Veuillez contacter votre administrateur du système.',

    'LBL_EMAIL_OK' => 'Ok',
    'LBL_EMAIL_ONE_MOMENT' => 'Veuillez patienter...',
    'LBL_EMAIL_OPEN_ALL' => 'Ouvrir plusieurs messages',
    'LBL_EMAIL_OPTIONS' => 'Options',
    'LBL_EMAIL_QUICK_COMPOSE' => 'Création rapide',
    'LBL_EMAIL_OPT_OUT' => 'Désinscrit',
    'LBL_EMAIL_OPT_OUT_AND_INVALID' => 'Désinscrit et Invalide',
    'LBL_EMAIL_PERFORMING_TASK' => 'Action en cours...',
    'LBL_EMAIL_PRIMARY' => 'Principal',
    'LBL_EMAIL_PRINT' => 'Imprimer',

    'LBL_EMAIL_QC_BUGS' => 'Bogue',
    'LBL_EMAIL_QC_CASES' => 'Ticket',
    'LBL_EMAIL_QC_LEADS' => 'Prospect',
    'LBL_EMAIL_QC_CONTACTS' => 'Contact',
    'LBL_EMAIL_QC_TASKS' => 'Tâche',
    'LBL_EMAIL_QC_OPPORTUNITIES' => 'Opportunité',
    'LBL_EMAIL_QUICK_CREATE' => 'Création Rapide',

    'LBL_EMAIL_REBUILDING_FOLDERS' => 'Reconstruction Dossiers',
    'LBL_EMAIL_RELATE_TO' => 'Se rapporte',
    'LBL_EMAIL_VIEW_RELATIONSHIPS' => 'Voir Relations',
    'LBL_EMAIL_RECORD' => 'Enregistrement Email',
    'LBL_EMAIL_REMOVE' => 'Retirer',
    'LBL_EMAIL_REPLY' => 'Répondre',
    'LBL_EMAIL_REPLY_ALL' => 'Répondre à tous',
    'LBL_EMAIL_REPLY_TO' => 'Répondre à',
    'LBL_EMAIL_RETRIEVING_MESSAGE' => 'Récupération Message',
    'LBL_EMAIL_RETRIEVING_RECORD' => 'Récupération Enregistrement Email',
    'LBL_EMAIL_SELECT_ONE_RECORD' => 'Merci de sélectionner un seul enregistrement !',
    'LBL_EMAIL_RETURN_TO_VIEW' => 'Retour au Module précédent ?',
    'LBL_EMAIL_REVERT' => 'Revenir',
    'LBL_EMAIL_RELATE_EMAIL' => 'Relier Email',

    'LBL_EMAIL_RULES_TITLE' => 'Gestion Règles',

    'LBL_EMAIL_SAVE' => 'Sauvegarder',
    'LBL_EMAIL_SAVE_AND_REPLY' => 'Sauvegarder et Répondre',
    'LBL_EMAIL_SAVE_DRAFT' => 'Sauvegarder Brouillon',
    'LBL_EMAIL_DRAFT_SAVED' => 'Brouillon sauvegardé',

    'LBL_EMAIL_SEARCH' => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null, null,    '.gif', ''),
    'LBL_EMAIL_SEARCH_SHORT' => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null,        null, '.gif', ''),
    'LBL_EMAIL_SEARCH_DATE_FROM' => 'Date Début',
    'LBL_EMAIL_SEARCH_DATE_UNTIL' => 'Date Jusqu\'à',
    'LBL_EMAIL_SEARCH_NO_RESULTS' => 'Aucun résultat ne correspond à vos critères de recherche.',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'Résultats Recherche',

    'LBL_EMAIL_SELECT' => 'Sélectionner',

    'LBL_EMAIL_SEND' => 'Envoyer',
    'LBL_EMAIL_SENDING_EMAIL' => 'Envoi en cours...',

    'LBL_EMAIL_SETTINGS' => 'Paramètres',
    'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'Comptes Messagerie',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'Effacer Formulaire',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'Relever Nouveaux Messages',
    'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'Email Expéditeur',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'Adresse Email pour la Notification Essai :',
    'LBL_EMAIL_SETTINGS_FROM_NAME' => 'Nom Expéditeur',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'Adresse Réponse',
    'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'Synchroniser tous les comptes de messagerie',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'Un Email a été envoyé. Vérifiez que vous l\'avez reçu.',
    'LBL_EMAIL_TEST_SEE_FULL_SMTP_LOG' => 'Voir le journal SMTP complet',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => 'Voulez-vous effectuer une synchronisation complète ?\nPour les comptes volumineux cela peut prendre plusieurs minutes.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'Maintenez enfoncée la touche Shift ou la touche Ctrl pour sélectionner plusieurs dossiers',
    'LBL_EMAIL_SETTINGS_GENERAL' => 'Général',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'Créer Dossiers de Groupe',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Modifier Dossiers de Groupe',

    'LBL_EMAIL_SETTINGS_NAME' => 'Nom Compte Mail',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'Sélectionnez le nombre d\'emails par page dans la boîte de réception. Ce paramètre peut nécessiter une actualisation de page pour prendre effet.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'Récupération Compte Messagerie',
    'LBL_EMAIL_SETTINGS_SAVED' => 'Les paramètres ont été enregistrés.',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'Envoyer Emails en texte brut uniquement',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'Emails par Page',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => 'Paramètres Affichage',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => 'Préférences',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS' => 'Dossiers Utilisateur Disponibles',
    'LBL_EMAIL_ERROR_PREPEND' => 'Une erreur email s\'est produite :',
    'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'Serveur SMTP sélectionné invalide. Configurer le serveur SMTP ou choisir un autre.',
    'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'Vous n\'avez pas configuré le serveur SMTP. Configurer ou choisir un serveur SMTP.',
    'LBL_DEFAULT_EMAIL_SIGNATURES' => 'Signature par Défaut',
    'LBL_EMAIL_SIGNATURES' => 'Signatures',
    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Autre',
    'LBL_EMAIL_SPACER_MAIL_SERVER' => '[ Dossiers Distants ]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[Dossiers CRM]',
    'LBL_EMAIL_SUBJECT' => 'Objet',
    'LBL_EMAIL_SUCCESS' => 'Succès',
    'LBL_EMAIL_SUITE_FOLDER' => 'Dossier CRM',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'Le Corps du Modèle Email est vide',
    'LBL_EMAIL_TEMPLATES' => 'Modèles',
    'LBL_EMAIL_TO' => 'À',
    'LBL_EMAIL_VIEW' => 'Vue',
    'LBL_EMAIL_VIEW_HEADERS' => 'Afficher En-têtes',
    'LBL_EMAIL_VIEW_RAW' => 'Afficher Email Brut',
    'LBL_EMAIL_VIEW_UNSUPPORTED' => 'Cette fonctionnalité n\'est pas supportée quand vous utilisez le protocole POP3.',
    'LBL_DEFAULT_LINK_TEXT' => 'Lien texte par défaut.',
    'LBL_EMAIL_YES' => 'Oui',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'Envoyer Email Test',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'Email Test Envoyé',
    'LBL_EMAIL_MESSAGE_NO' => 'Message no.',
    'LBL_EMAIL_IMPORT_SUCCESS' => 'Importation Réussie',
    'LBL_EMAIL_IMPORT_FAIL' => 'L\'importation a échoué car le message est déjà importé ou supprimé du serveur',

    'LBL_LINK_NONE' => 'Aucun',
    'LBL_LINK_ALL' => 'Tous',
    'LBL_LINK_RECORDS' => 'Enregistrements',
    'LBL_LINK_SELECT' => 'Sélectionner',
    'LBL_LINK_ACTIONS' => 'ACTIONS',
    'LBL_CLOSE_ACTIVITY_HEADER' => 'Confirmer',
    'LBL_CLOSE_ACTIVITY_CONFIRM' => 'Souhaitez-vous fermer ce #module#?',
    'LBL_INVALID_FILE_EXTENSION' => 'Extension Fichier Invalide',

    'ERR_AJAX_LOAD' => 'Une erreur est survenue:',
    'ERR_AJAX_LOAD_FAILURE' => 'Il y a eu une erreur lors du traitement de votre demande, veuillez réessayer ultérieurement.',
    'ERR_AJAX_LOAD_FOOTER' => 'Si cette erreur persiste, veuillez demander à votre administrateur de désactiver Ajax pour ce module',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'Le séparateur des décimales ne peut pas être le même que celui des milliers.\n\n  Merci de modifier ces valeurs.',
    'ERR_DELETE_RECORD' => 'Un numéro d\'enregistrement doit être spécifié pour toute suppression.',
    'ERR_EXPORT_DISABLED' => 'Exports Désactivés.',
    'ERR_EXPORT_TYPE' => 'Erreur Exportation',
    'ERR_INVALID_EMAIL_ADDRESS' => 'Merci de saisir une adresse Email valide.',
    'ERR_INVALID_FILE_REFERENCE' => 'Référence Fichier Invalide',
    'ERR_NO_HEADER_ID' => 'Cette fonctionnalité n\'est pas supportée dans ce thème.',
    'ERR_NOT_ADMIN' => 'Accès non autorisé à l\'administration.',
    'ERR_UNAUTHORIZED_PAGE_ACCESS' => 'Vous n\'êtes pas autorisé à voir cette page. Veuillez contacter votre administrateur système.',
    'ERR_UNAUTHORIZED_PAGE_ACCESS_TO_HOME_PAGE' => 'Vous n\'êtes pas autorisé à voir cette page. Redirection vers la Page d\'Accueil...',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Champ(s) obligatoire(s):',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Champ(s) obligatoire(s) invalide(s):',
    'ERR_INVALID_VALUE' => 'Valeur incorrecte:',
    'ERR_NO_SUCH_FILE' => 'Le fichier n\'existe pas sur le système',
    'ERR_NO_SINGLE_QUOTE' => 'Impossible d\'utiliser le simple guillemet pour',
    'ERR_NOTHING_SELECTED' => 'Merci de sélectionner un élément pour continuer.',
    'ERR_SELF_REPORTING' => 'Un utilisateur ne peut pas se reporter à lui-même.',
    'ERR_SQS_NO_MATCH_FIELD' => 'Pas de correspondance pour le champ:',
    'ERR_SQS_NO_MATCH' => 'Pas de correspondance',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Veuillez spécifier une clé index dans les paramètres d\'affichage pour les Meta-données',
    'ERR_EXISTING_PORTAL_USERNAME' => 'Erreur : Le nom du portail est déjà assigné à un autre contact..',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'La valeur du champ n\'est pas compatible avec le format défini',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'Une erreur est survenue lors de la tentative de sauvgarde au compte externe.',
    'ERR_NO_DB' => 'Impossible de se connecter à la base de données. S\'il vous plaît se référer au journal d\'erreurs pour plus de détails.',
    'ERR_DB_FAIL' => 'Échec de base de données. S\'il vous plaît se référer au journal d\'erreurs pour plus de détails.',
    'ERR_DB_VERSION' => 'Fichiers CRM {0} ne peuvent être utilisé qu\'avec une {1} base de données CRM.',

    'LBL_ACCOUNT' => 'Compte',
    'LBL_ACCOUNTS' => 'Comptes',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activités',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Voir Résumé',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Voir Résumé',
    'LBL_ADD_BUTTON' => 'Ajouter',
    'LBL_ADD_DOCUMENT' => 'Ajouter Document',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Ajouter à une Liste de Cible',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL_ACCOUNTS_CONTACTS' => 'Ajouter Contacts à la Liste de Cible',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Cliquer pour Fermer',
    'LBL_ADDITIONAL_DETAILS' => 'Détails Supplémentaires',
    'LBL_ADMIN' => 'Admin',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'Archiver',
    'LBL_ASSIGNED_TO_USER' => 'Assigné à Utilisateur',
    'LBL_ASSIGNED_TO' => 'Assigné à:',
    'LBL_BACK' => 'Retour',
    'LBL_BILLING_ADDRESS' => 'Adresse Facturation',
    'LBL_QUICK_CREATE' => 'Créer ',
    'LBL_BROWSER_TITLE' => 'SuiteCRM - CRM Ouvert',
    'LBL_BUGS' => 'Bogues',
    'LBL_BY' => 'par',
    'LBL_CALLS' => 'Appels',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'Envoyer les Courriels en attente',
    'LBL_SUBMIT_BUTTON_LABEL' => 'Soumettre',
    'LBL_CASE' => 'Ticket',
    'LBL_CASES' => 'Tickets',
    'LBL_CHANGE_PASSWORD' => 'Changer le mot de passe',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHARTS' => 'Graphiques',
    'LBL_QUICK_CHARTS' => 'Graphiques rapides',
    'LBL_QUICK_HISTORY' => 'Échéancier',
    'LBL_CHECKALL' => 'Cocher tout',
    'LBL_CITY' => 'Ville',
    'LBL_CLEAR_BUTTON_LABEL' => 'Vider',
    'LBL_CLEAR_BUTTON_TITLE' => 'Vider',
    'LBL_CLEARALL' => 'Tout décocher',
    'LBL_CLOSE_BUTTON_TITLE' => 'Fermer',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Terminer et créer une nouvelle',
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Terminer et créer une nouvelle',
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Ouvrir les articles',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Rédiger Email',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Rédiger Email',
    'LBL_SEARCH_DROPDOWN_YES' => 'Oui',
    'LBL_SEARCH_DROPDOWN_NO' => 'Non',
    'LBL_CONTACT_LIST' => 'Liste des Contacts',
    'LBL_CONTACT' => 'Contact',
    'LBL_CONTACTS' => 'Contacts',
    'LBL_CONTRACT' => 'Contrat',
    'LBL_CONTRACTS' => 'Contrats',
    'LBL_COUNTRY' => 'Pays:',
    'LBL_CREATE_BUTTON_LABEL' => 'Créer',
    'LBL_CREATED_BY_USER' => 'Créé Par Utilisateur',
    'LBL_CREATED_USER' => 'Créé Par Utilisateur',
    'LBL_CREATED' => 'Créé par',
    'LBL_CURRENT_USER_FILTER' => 'Mes Éléments',
    'LBL_CURRENCY' => 'Devise:',
    'LBL_DOCUMENTS' => 'Documents',
    'LBL_DATE_ENTERED' => 'Date Création:',
    'LBL_DATE_MODIFIED' => 'Date Modification:',
    'LBL_EDIT_BUTTON' => 'Modifier',
    'LBL_DUPLICATE_BUTTON' => 'Dupliquer',
    'LBL_DELETE_BUTTON' => 'Supprimer',
    'LBL_DELETE' => 'Supprimer',
    'LBL_DELETED' => 'Supprimé',
    'LBL_DIRECT_REPORTS' => 'Supérieur Immédiat',
    'LBL_DONE_BUTTON_LABEL' => 'Terminé',
    'LBL_DONE_BUTTON_TITLE' => 'Terminé',
    'LBL_FAVORITES' => 'Favoris',
    'LBL_VCARD' => 'vCard',
    'LBL_EMPTY_VCARD' => 'Veuillez sélectionner un fichier vCard',
    'LBL_EMPTY_REQUIRED_VCARD' => 'vCard ne dispose pas de tous les champs requis pour ce module. Veuillez vous référer au journal pour plus de détails.',
    'LBL_VCARD_ERROR_FILESIZE' => 'Le fichier envoyé dépasse la limite de 30000 bytes spécifiée dans le formulaire HTML.',
    'LBL_VCARD_ERROR_DEFAULT' => 'Une erreur s\'est produite lors de l\'envoi du fichier vCard. Veuillez-vous référer au journal pour plus de détails.',
    'LBL_IMPORT_VCARD' => 'Importer vCard:',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'Importer vCard',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'Importer vCard',
    'LBL_VIEW_BUTTON' => 'Afficher',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Email en PDF',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Email en PDF',
    'LBL_EMAILS' => 'Emails',
    'LBL_EMPLOYEES' => 'Employés',
    'LBL_ENTER_DATE' => 'Préciser Date',
    'LBL_EXPORT' => 'Exporter',
    'LBL_FAVORITES_FILTER' => 'Mes Favoris',
    'LBL_GO_BUTTON_LABEL' => 'Aller',
    'LBL_HIDE' => 'Masquer',
    'LBL_HISTORY' => 'Historique',
    'LBL_NEW' => 'Nouveau',
    'LBL_ID' => 'ID',
    'LBL_IMPORT' => 'Importer',
    'LBL_IMPORT_STARTED' => 'Import Démarré: ',
    'LBL_LAST_VIEWED' => 'Dernières Consultations',
    'LBL_LEADS' => 'Prospects',
    'LBL_LESS' => 'Moins',
    'LBL_CAMPAIGN' => 'Campagne:',
    'LBL_CAMPAIGNS' => 'Campagnes',
    'LBL_CAMPAIGNLOG' => 'Journal Campagne',
    'LBL_CAMPAIGN_CONTACT' => 'Campagnes',
    'LBL_CAMPAIGN_ID' => 'campaign_id',
    'LBL_CAMPAIGN_NONE' => 'Aucun',
    'LBL_THEME' => 'Thème:',
    'LBL_FOUND_IN_RELEASE' => 'Trouvé dans la Version',
    'LBL_FIXED_IN_RELEASE' => 'Corrigé dans la Version',
    'LBL_LIST_ACCOUNT_NAME' => 'Nom Compte',
    'LBL_LIST_ASSIGNED_USER' => 'Utilisateur',
    'LBL_LIST_CONTACT_NAME' => 'Nom Contact',
    'LBL_LIST_CONTACT_ROLE' => 'Rôle Contact',
    'LBL_LIST_DATE_ENTERED' => 'Date Création',
    'LBL_LIST_EMAIL' => 'Email',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_LIST_OF' => 'de',
    'LBL_LIST_PHONE' => 'Téléphone',
    'LBL_LIST_RELATED_TO' => 'Associés à',
    'LBL_LIST_USER_NAME' => 'Nom Utilisateur',
    'LBL_LISTVIEW_NO_SELECTED' => 'Vous devez sélectionner au moins 1 enregistrement.',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'Vous devez sélectionner au moins 2 enregistrements.',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'Enregistrements Sélectionnés',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Sélection: ',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'David',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Livingstone',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Dr.',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Code Monkey Extraordinaire',
    'LBL_CANCEL' => 'Annuler',
    'LBL_VERIFY' => 'Vérifier ',
    'LBL_RESEND' => 'Renvoyer',
    'LBL_RECORD_DOES_NOT_EXIST' => 'Erreur de récupération de l\'enregistrement. Cet enregistrement est peut être supprimé ou vous n\'avez pas le droit de le visualiser.',
    'LBL_PROFILE' => 'Profil',
    'LBL_MAILMERGE' => 'Publipostage',
    'LBL_MASS_UPDATE' => 'Mise à jour Massive',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'Il n\'y a pas de champs disponibles pour la mise à jour massive',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'Email Principal Désinscription',
    'LBL_OPT_IN_FLAG_PRIMARY' => 'Email Principal Inscirption',
    'LBL_MEETINGS' => 'Réunions',
    'LBL_MEETING_GO_BACK' => 'Retourner à la réunion',
    'LBL_MEMBERS' => 'Membres',
    'LBL_MEMBER_OF' => 'Membre de',
    'LBL_MODIFIED_BY_USER' => 'Modifié par Utilisateur',
    'LBL_MODIFIED_USER' => 'Modifié par Utilisateur',
    'LBL_MODIFIED' => 'Modifié par',
    'LBL_MODIFIED_NAME' => 'Modifié Par Nom',
    'LBL_MORE' => 'plus',
    'LBL_MY_ACCOUNT' => 'Mes Paramètres',
    'LBL_NAME' => 'Nom',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => 'Créer',
    'LBL_NEW_BUTTON_TITLE' => 'Créer',
    'LBL_EDIT' => 'Modifier',
    'LBL_NEXT_BUTTON_LABEL' => 'Suivant',
    'LBL_NONE' => '--Aucun--',
    'LBL_NOTES' => 'Notes',
    'LBL_OPPORTUNITIES' => 'Opportunités',
    'LBL_OPPORTUNITY_NAME' => 'Nom Opportunité',
    'LBL_OPPORTUNITY' => 'Opportunité',
    'LBL_OR' => 'OU',
    'LBL_PANEL_OVERVIEW' => 'Vue Globale',
    'LBL_PANEL_ASSIGNMENT' => 'AUTRE',
    'LBL_PANEL_ADVANCED' => 'PLUS D\'INFORMATIONS',
    'LBL_PARENT_TYPE' => 'Type Parent',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_POSTAL_CODE' => 'Code Postal:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Ville Adresse Principale:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Pays Adresse Principale:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Code Postal Adresse Principale:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Province Adresse Principale:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Rue 2 Adresse Principale:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Rue 3 Adresse Principale:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Rue Adresse Principale:',
    'LBL_PRIMARY_ADDRESS' => 'Adresse principale:',

    'LBL_PROSPECTS' => 'Prospects',
    'LBL_PRODUCTS' => 'Produits',
    'LBL_PROJECT_TASKS' => 'Tâches Projet',
    'LBL_PROJECTS' => 'Projets',
    'LBL_QUOTES' => 'Devis',

    'LBL_RELATED' => 'Associé',
    'LBL_RELATED_RECORDS' => 'Enregistrements Associés',
    'LBL_REMOVE' => 'Retirer',
    'LBL_REPORTS_TO' => 'Se rapportant À',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => 'Indique les champs obligatoires',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'Terminé',
    'LBL_FULL_FORM_BUTTON_KEY' => 'F',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'Formulaire Complet',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'Formulaire Complet',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'Enregistrer et Créer Nouveau',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'Enregistrer et Créer Nouveau',
    'LBL_SAVE_OBJECT' => 'Sauvegarder {0}',
    'LBL_SEARCH_BUTTON_KEY' => 'Q',
    'LBL_SEARCH_BUTTON_LABEL' => 'Recherche',
    'LBL_SEARCH_BUTTON_TITLE' => 'Recherche',
    'LBL_FILTER' => 'Filtre',
    'LBL_SEARCH' => 'Recherche',
    'LBL_SEARCH_ALT' => '',
    'LBL_SEARCH_MORE' => 'plus',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Format de fichier non valide, seulement un fichier image peut être téléchargé.',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'Sélectionner',
    'LBL_SELECT_BUTTON_TITLE' => 'Sélectionner',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Parcourir Documents',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Parcourir Documents',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Sélectionner Contact',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Sélectionner Contact',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Sélectionner depuis Rapports',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Sélectionner Rapports',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U - majuscule',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'Sélectionner Utilisateur',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'Sélectionner Utilisateur',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'Effacer la sélection',
    'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'Effacer la sélection',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'Effacer la sélection',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'Effacer la sélection',
    'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
    'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'Selectionner un fichier',
    'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'Selectionner un fichier',
    'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'Supprimer le fichier',
    'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'Supprimer le fichier',

    'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U - majuscule',
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'Sélectionner Utilisateur',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'Sélectionner Utilisateur',
    'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'Effacer Utilisateur',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'Effacer Utilisateur',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'Sélectionner Compte',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'Sélectionner Compte',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE' => 'Supprimer le compte',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL' => 'Supprimer le compte',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_KEY' => 'M',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE' => 'Sélectionner une campagne',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL' => 'Sélectionner une campagne',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_TITLE' => 'Supprimer la campagne',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL' => 'Supprimer la campagne',
    'LBL_ACCESSKEY_SELECT_CONTACTS_KEY' => 'C',
    'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'Sélectionner Contact',
    'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'Sélectionner Contact',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'Supprimer le contact',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'Supprimer le contact',
    'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
    'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'Sélectionner une équipe',
    'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'Sélectionner une équipe',
    'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'Supprimer l\'équipe',
    'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'Supprimer l\'équipe',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'Ressources utilisées pour construire cette page (requêtes, fichiers)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'secondes.',
    'LBL_SERVER_RESPONSE_TIME' => 'Temps de réponse serveur:',
    'LBL_SERVER_MEMORY_BYTES' => 'octets',
    'LBL_SERVER_MEMORY_USAGE' => 'Utilisation Mémoire Serveur: {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'Utilisation :-module : {0} - action : {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Utilisation Maximale Mémoire Serveur : {0} ({1})',
    'LBL_SHIPPING_ADDRESS' => 'Adresse Livraison',
    'LBL_SHOW' => 'Afficher',
    'LBL_STATE' => 'État:',
    'LBL_STATUS_UPDATED' => 'Votre statut pour cet évènement a été mis à jour !',
    'LBL_STATUS' => 'Statut:',
    'LBL_STREET' => 'Rue',
    'LBL_SUBJECT' => 'Objet',

    'LBL_INBOUNDEMAIL_ID' => 'ID Email Entrant',

    'LBL_SCENARIO_SALES' => 'Ventes',
    'LBL_SCENARIO_MARKETING' => 'Marketing',
    'LBL_SCENARIO_FINANCE' => 'Finance',
    'LBL_SCENARIO_SERVICE' => 'Service',
    'LBL_SCENARIO_PROJECT' => 'Gestion Projet',

    'LBL_SCENARIO_SALES_DESCRIPTION' => 'Ce scénario facilite la gestion des éléments en vente',
    'LBL_SCENARIO_MAKETING_DESCRIPTION' => 'Ce scénario facilite la gestion des éléments marketing',
    'LBL_SCENARIO_FINANCE_DESCRIPTION' => 'Ce scénario facilite la gestion des éléments financier',
    'LBL_SCENARIO_SERVICE_DESCRIPTION' => 'Ce scénario facilite la gestion des éléments liés aux services',
    'LBL_SCENARIO_PROJECT_DESCRIPTION' => 'Ce scénario facilite la gestion des éléments liés aux projets',

    'LBL_SYNC' => 'Synchronisation',
    'LBL_TABGROUP_ALL' => 'Tous',
    'LBL_TABGROUP_ACTIVITIES' => 'Activités',
    'LBL_TABGROUP_COLLABORATION' => 'Collaboration',
    'LBL_TABGROUP_MARKETING' => 'Marketing',
    'LBL_TABGROUP_OTHER' => 'Autre',
    'LBL_TABGROUP_SALES' => 'Ventes',
    'LBL_TABGROUP_SUPPORT' => 'Support',
    'LBL_TASKS' => 'Tâches',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Archiver Email',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Archiver Email',
    'LBL_UNDELETE_BUTTON_LABEL' => 'Restaurer',
    'LBL_UNDELETE_BUTTON_TITLE' => 'Restaurer',
    'LBL_UNDELETE_BUTTON' => 'Restaurer',
    'LBL_UNDELETE' => 'Restaurer',
    'LBL_UNSYNC' => 'Désynchroniser',
    'LBL_UPDATE' => 'Mise-à-jour',
    'LBL_USER_LIST' => 'Liste Utilisateurs',
    'LBL_USERS' => 'Utilisateurs',
    'LBL_VERIFY_EMAIL_ADDRESS' => 'Vérification des entrées de messagerie existants ...',
    'LBL_VERIFY_PORTAL_NAME' => 'Vérification de nom portail existant ...',
    'LBL_VIEW_IMAGE' => 'voir',

    'LNK_ABOUT' => 'À Propos',
    'LNK_ADVANCED_FILTER' => 'Filtre Avancé',
    'LNK_BASIC_FILTER' => 'Filtre Rapide',
    'LBL_ADVANCED_SEARCH' => 'Filtre Avancé',
    'LBL_QUICK_FILTER' => 'Filtre Rapide',
    'LBL_BASIC_FILTER' => 'Filtre basique',
    'LBL_QUICK' => 'Rapide',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => 'Afficher tout',
    'LNK_CLOSE' => 'Fermer',
    'LBL_MODIFY_CURRENT_FILTER' => 'Modifier le filtre en cours',
    'LNK_SAVED_VIEWS' => 'Options Mise en page',
    'LNK_DELETE' => 'Supprimer',
    'LNK_EDIT' => 'Modifier',
    'LNK_GET_LATEST' => 'Obtenir dernier',
    'LNK_GET_LATEST_TOOLTIP' => 'Remplacer par la dernière version',
    'LNK_HELP' => 'Aide',
    'LNK_CREATE' => 'Créer',
    'LNK_LIST_END' => 'Fin',
    'LNK_LIST_NEXT' => 'Suivant',
    'LNK_LIST_PREVIOUS' => 'Précédent',
    'LNK_LIST_RETURN' => 'Retour à la Liste',
    'LNK_LIST_START' => 'Début',
    'LNK_LOAD_SIGNED' => 'Signé',
    'LNK_LOAD_SIGNED_TOOLTIP' => 'Remplacer par le document signé',
    'LNK_PRINT' => 'Imprimer',
    'LNK_BACKTOTOP' => 'Haut de page',
    'LNK_REMOVE' => 'Retirer',
    'LNK_RESUME' => 'Reprise',
    'LNK_VIEW_CHANGE_LOG' => 'Voir Historique Modification',
    'LBL_CHANGE_LOG' => 'Historique',

    'NTC_CLICK_BACK' => 'Merci de cliquer sur le bouton "Précédent" de votre navigateur et corriger le problème.',
    'NTC_DATE_FORMAT' => '(aaaa-mm-jj)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Voulez-vous vraiment supprimer les enregistrements sélectionnés ?',
    'NTC_TEMPLATE_IS_USED' => 'Ce modèle est utilisé par au moins un Email lié aux Campagnes. Etes-vous sûr de vouloir le supprimer ?',
    'NTC_TEMPLATES_IS_USED' => 'Les modèles suivants sont utilisés par des Emails liés aux Campagnes. Êtes-vous sûr de vouloir les supprimer ?' . PHP_EOL,
    'NTC_DELETE_CONFIRMATION' => 'Voulez-vous vraiment supprimer cet enregistrement ?',
    'NTC_DELETE_CONFIRMATION_NUM' => 'Êtes-vous sûr de vouloir supprimer les ',
    'NTC_UPDATE_CONFIRMATION_NUM' => 'Voulez-vous vraiment mettre à jour les ',
    'NTC_DELETE_SELECTED_RECORDS' => ' enregistrements sélectionnés?',
    'NTC_LOGIN_MESSAGE' => 'Merci de vous authentifier.',
    'NTC_NO_ITEMS_DISPLAY' => 'aucun',
    'NTC_REMOVE_CONFIRMATION' => 'Voulez-vous vraiment supprimer cette relation?',
    'NTC_REQUIRED' => 'Indique les champs obligatoires',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'Bienvenue',
    'NTC_YEAR_FORMAT' => '(aaaa)',
    'WARN_UNSAVED_CHANGES' => 'Vous êtes sur le point de quitter cet enregistrement sans sauvegarder vos modifications. Êtes-vous sûr de vouloir quitter cet enregistrement ?',
    'ERROR_NO_RECORD' => 'Erreur de récupération de l\'enregistrement. Cet enregistrement est peut être supprimé ou vous n\'avez pas le droit de le visualiser.',
    'WARN_BROWSER_VERSION_WARNING' => '<p><b>Attention :</b>Le navigateur ou la version du navigateur que vous utilisez n\'est pas supporté.</p><p>Les navigateurs suivants sont recommandés :</p><ul><li>Internet Explorer 9 (ou dernière version)</li><li>Mozilla Firefox 14, 15 (ou dernière version)</li><li>Safari 6 (ou dernière version)</li><li>Google Chrome 22 (ou dernière version)</li></ul>',
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => '<b>Attention:</b> Votre navigateur est en mode de compatibilité ce qui n\'est pas supporté.',
    'ERROR_TYPE_NOT_VALID' => 'Erreur. Ce type n\'est pas valide.',
    'ERROR_NO_BEAN' => 'Impossible d\'obtenir le bean.',
    'LBL_DUP_MERGE' => 'Recherche Doublons',
    'LBL_MANAGE_SUBSCRIPTIONS' => 'Gestion Abonnements',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'Gestion Abonnements pour ',
    // Ajax status strings
    'LBL_LOADING' => 'Chargement...',
    'LBL_SEARCHING' => 'Recherche en cours...',
    'LBL_SAVING_LAYOUT' => 'Sauvegarde de la Mise en page...',
    'LBL_SAVED_LAYOUT' => 'Mise en page a été sauvegardée.',
    'LBL_SAVED' => 'Sauvegardé',
    'LBL_SAVING' => 'Sauvegarde en cours',
    'LBL_DISPLAY_COLUMNS' => 'Afficher Colonnes ',
    'LBL_HIDE_COLUMNS' => 'Masquer Colonnes',
    'LBL_COLUMNS' => 'Colonnes',
    'LBL_SEARCH_CRITERIA' => 'Critère Recherche',
    'LBL_SAVED_VIEWS' => 'Vues Sauvegardées',
    'LBL_PROCESSING_REQUEST' => 'Traitement...',
    'LBL_REQUEST_PROCESSED' => 'Terminé',
    'LBL_AJAX_FAILURE' => 'Erreur Ajax',
    'LBL_MERGE_DUPLICATES' => 'Fusionner',
    'LBL_SAVED_FILTER_SHORTCUT' => 'Mes Filtres',
    'LBL_SEARCH_POPULATE_ONLY' => 'Lancer une recherche en utilisant le formulaire de recherche ci-dessus',
    'LBL_DETAILVIEW' => 'Vue Détail',
    'LBL_LISTVIEW' => 'Vue Liste',
    'LBL_EDITVIEW' => 'Vue Edition',
    'LBL_BILLING_STREET' => 'Rue:',
    'LBL_SHIPPING_STREET' => 'Rue:',
    'LBL_SEARCHFORM' => 'Formulaire Recherche',
    'LBL_SAVED_SEARCH_ERROR' => 'Merci de fournir un nom pour cette vue.',
    'LBL_DISPLAY_LOG' => 'Afficher le Journal',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'Système',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'Session Expirée',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'Votre session expire dans 2 minutes. Veuillez sauvegarder votre travail.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' => 'Votre session a expiré.',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "\nAgenda: ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'Réunion',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'Appel',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'Heure:',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Emplacement:',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Description: ',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'Statut:',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => 'Associés à: ',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "\nCliquez sur OK pour afficher cet appel ou cliquez sur Annuler pour fermer ce message.",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "\nCliquez sur OK pour afficher cette réunion ou cliquez sur Annuler pour fermer ce message.",
    'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => 'Evènement',
    'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => 'Événement n’est pas définie.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => 'Emplacement n’est pas défini.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => 'Date de début n’est pas défini.',
    'MSG_LIST_VIEW_NO_RESULTS_BASIC' => 'Aucun résultat trouvé.',
    'MSG_LIST_VIEW_NO_RESULTS_CHANGE_CRITERIA' => 'Aucun résultat trouvé... Peut-être en changeant un critère de recherche et essayer à nouveau ?',
    'MSG_LIST_VIEW_NO_RESULTS' => 'Aucun résultat trouvé pour <item1>',
    'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => 'Créez <item1> comme un nouveau <item2>',
    'MSG_LIST_VIEW_CHANGE_SEARCH' => 'ou modifier vos critères de recherche',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => 'Vous n\'avez aucun enregistrement sauvgardé. <item2> ou <item3> maintenant.',

    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'Ajouter à Mes Favoris',
    'LBL_CREATE_CONTACT' => 'Créer Contact',
    'LBL_CREATE_CASE' => 'Créé Ticket',
    'LBL_CREATE_NOTE' => 'Créer Note',
    'LBL_CREATE_OPPORTUNITY' => 'Créer Opportunité',
    'LBL_SCHEDULE_CALL' => 'Planifier Appel',
    'LBL_SCHEDULE_MEETING' => 'Planifier Réunion',
    'LBL_CREATE_TASK' => 'Créer Tâche',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Générer Formulaire',
    'LBL_SAVE_WEB_TO_LEAD_FORM' => 'Enregistrer Formulaire Web',
    'LBL_AVAILABLE_FIELDS' => 'Champs Disponibles',
    'LBL_FIRST_FORM_COLUMN' => 'Première colonne du formulaire',
    'LBL_SECOND_FORM_COLUMN' => 'Deuxième colonne du formulaire',
    'LBL_ASSIGNED_TO_REQUIRED' => 'Champ obligatoire manquant : Assigné à',
    'LBL_RELATED_CAMPAIGN_REQUIRED' => 'Champ obligatoire manquant : Campagne associée',
    'LBL_TYPE_OF_PERSON_FOR_FORM' => 'Formulaire Web à créer ',
    'LBL_TYPE_OF_PERSON_FOR_FORM_DESC' => 'Envoyer ce formulaire créera ',

    'LBL_ADD_ALL_LEAD_FIELDS' => 'Ajouter tous les champs',
    'LBL_RESET_ALL_LEAD_FIELDS' => 'Réinitialiser tous les champs',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Supprimer tous les champs',
    'LBL_NEXT_BTN' => 'Suivant',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'Seuls les image de type JPG, PNG peuvent être intégrées.',
    'LBL_TRAINING' => 'Forum Aide',
    'ERR_MSSQL_DB_CONTEXT' => 'Contexte de base de données modifiées pour',
    'ERR_MSSQL_WARNING' => 'Avertissement:',

    //Meta-Data framework
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'Erreur : Fichier [[file]] manquant.  Impossible de le créer car il n\'y a pas de fichier HTML correspondant.',
    'ERR_CANNOT_FIND_MODULE' => 'Erreur : Ce Module [module] n\'existe pas.',
    'LBL_ALT_ADDRESS' => 'Autre adresse:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Erreur : Le nombre d\'arguments est différent entre les éléments \'clé\' et \'copie\' dans le tableau des paramètres d\'affichage.',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Général',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filtres',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Seulement Mes Éléments',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Titre',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Afficher Lignes',

    // MySugar status strings
    'LBL_MAX_DASHLETS_REACHED' => 'Vous avez atteint le nombre maximum de Dashlets que votre administrateur a défini. S\'il vous plaît supprimer un Dashlet pour ajouter un autre.',
    'LBL_ADDING_DASHLET' => 'Ajout Dashlet...',
    'LBL_ADDED_DASHLET' => 'Dashlet Ajouté',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Êtes-vous sûr de vouloir supprimer ce Dashlet?',
    'LBL_REMOVING_DASHLET' => 'Retrait Dashlet...',
    'LBL_REMOVED_DASHLET' => 'Dashlet Supprimé',

    // MySugar Menu Options

    'LBL_LOADING_PAGE' => 'Chargement en cours, veuillez patienter...',

    'LBL_RELOAD_PAGE' => 'S\'il vous plait <a href="javascript: window.location.reload()">recharger la fenêtre</a> pour utiliser ce Dashlet.',
    'LBL_ADD_DASHLETS' => 'Ajouter Dashlet',
    'LBL_CLOSE_DASHLETS' => 'Fermer',
    'LBL_OPTIONS' => 'Options',
    'LBL_1_COLUMN' => '1 colonne',
    'LBL_2_COLUMN' => '2 colonne',
    'LBL_3_COLUMN' => '3 colonne',
    'LBL_PAGE_NAME' => 'Nom de la page',

    'LBL_SEARCH_RESULTS' => 'Résultats Recherche',
    'LBL_SEARCH_MODULES' => 'Modules',
    'LBL_SEARCH_TOOLS' => 'Outils',
    'LBL_SEARCH_HELP_TITLE' => 'Astuces Recherche',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'Pas d\'image',

    'LBL_MODULE' => 'Module',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'Copier Adresse depuis la gauche:',
    'LBL_SAVE_AND_CONTINUE' => 'Sauvegarder et Continuer',

    'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>Gestion des Multi-sélections</strong></p><ul><li>Cliquer sur les valeurs pour sélectionner les attributs.</li><li>Ctrl-clic pour faire une sélection multiple. Pour les utilisateurs Mac utiliser CMD-clic.</li><li>Pour sélectionner toutes les valeurs entres deux attributs cliquer sur la première valeur et cliquer sur la dernière valeur en maintenant la touche shift enfoncée.</li></ul><p><strong>Recherche avancée &amp; options de mise en page</strong><br><br>Utiliser les <b>Options</b> afin de sauvegarder un jeu de paramètres de recherche et/ou une mise en page personnalisée en vue Liste pour obtenir rapidement la recherche désirée les prochaines fois. Vous pouvez sauvegarder un nombre illimité de recherches et mises en page personnalisées. Le nom de toutes les recherches sauvegardées apparaît dans la liste des recherches sauvegardées, avec la dernière recherche en haut de la liste.<br><br>Pour personnaliser la mise en page de la Vue Liste, utiliser les colonnes cachées &amp; colonnes visibles afin de sélectionner les champs à afficher dans les résultats de recherche. Par exemple, vous pouvez afficher ou cacher des détails comme le nom de l\'enregistrement, l\'utilisateur assigné et l\'équipe assignée dans les résultats de recherche. Pour ajouter une colonne à la vue Liste, sélectionner les champs dans la liste colonnes cachées et utiliser la flèche gauche pour le déplacer dans la liste colonnes visibles. Pour supprimer une colonne de la vue Liste, sélectionnez-la dans la liste des colonnes affichées et utiliser la flèche droite pour la déplacer dans la liste des colonnes cachées.<br><br>Si vous sauvegardez les paramètres de mise en page, vous pourrez les charger à tout moment pour voir les résultats de recherche dans la mise en page personnalisée.<br><br>Pour sauvegarder et mettre à jour une recherche et/ou une mise en page:<ol><li>Entrer un nom pour les résultats de recherche dans le champ <b>Sauvegarder cette recherche comme</b> et cliquer sur <b>Sauvegarder</b>. Le nom apparaît maintenant dans la liste des Recherches Sauvegardées adjacente au bouton <b>Vider</b>.</li><li>Pour voir une recherche sauvegardée, sélectionnez-en une dans le liste des Recherches Sauvegardées. Les résultats de recherche sont affichés dans la Vue Liste.</li><li>Pour mettre à jour les propriétés d\'une recherche sauvegardée, sélectionnez là dans la liste, entrer le nouveau critère de recherche et/ou les options de mise en page dans la zone de Recherche Avancée, et cliquer sur <b>Mettre à jour</b> puis sur <b>Modifier la Recherche Courante</b>.</li><li>Pour supprimer une recherche sauvegardée, sélectionner-la dans la liste des Recherches Sauvegardées, cliquer sur <b>Supprimer</b> puis sur <b>Modifier la Recherche Courante</b>, et ensuite cliquer sur <b>OK</b> pour confirmer la suppression.</li></ol><p><strong>Tips</strong><br><br>En utilisant % as wildcard vous pouvez faire une recherche plus large. Par exemple èa la place de chercher "Pomme" vous pouvez changer pour "Pomme%" qui retournera tous les résultats qui commence par le môt Pomme.</p>',

    //resource management
    'ERR_QUERY_LIMIT' => 'Erreur: Le nombre limite de requêtes ($limit) a été atteint pour le module $module .',
    'ERROR_NOTIFY_OVERRIDE' => 'Erreur: ResourceObserver->notify() doit être surchargé.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'Erreur: Impossible de faire un suivi car le fichier metadata est vide ou n\'existe pas.',
    'ERR_MONITOR_NOT_CONFIGURED' => 'Erreur: Aucun suivi n\'a été configuré pour le nom demandé',
    'ERR_UNDEFINED_METRIC' => 'Erreur: Impossible de définir une valeur pour une métrique indéfinie',
    'ERR_STORE_FILE_MISSING' => 'Erreur: Impossible de trouver le fichier de stockage de l\'implémentation',

    'LBL_MONITOR_ID' => 'Identifiant de Suivi',
    'LBL_USER_ID' => 'ID Utilisateur',
    'LBL_MODULE_NAME' => 'Nom Module',
    'LBL_ITEM_ID' => 'Identifiant Enregistrement',
    'LBL_ITEM_SUMMARY' => 'Description Enregistrement',
    'LBL_ACTION' => 'Action',
    'LBL_SESSION_ID' => 'Identifiant Session',
    'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack crée pour l\'utilisateur id {0}',
    'LBL_VISIBLE' => 'Enregistrement Visible',
    'LBL_DATE_LAST_ACTION' => 'Date de dernière action',

    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'n\'est pas avant',
    'MSG_IS_MORE_THAN' => 'est plus grand que',
    'MSG_SHOULD_BE' => 'devrait être',
    'MSG_OR_GREATER' => 'ou plus grand que',

    'LBL_LIST' => 'Liste',
    'LBL_CREATE_BUG' => 'Créer Bogue',

    'LBL_OBJECT_IMAGE' => 'Image',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'Sélectionner Date',

    'LBL_VALIDATE_RANGE' => 'n\'est pas dans la plage valide',
    'LBL_CHOOSE_START_AND_END_DATES' => 'Veuillez choisir à la fois une date de début et de fin',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => 'Veuillez choisir à la fois des valeurs de début et de fin',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'Tous',

    //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Erreur : Le nombre d\'entrées paramétrées dans l\'objet ne correspond pas avec le nombre d\'entrées présentes dans le résultat obtenu depuis le connecteur.',
    'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Erreur : Le mapping des champs pour ce module est manquant.',
    'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Erreur: Impossible de récupérer les données pour le connecteur {0}. Le Service tiers est peut être inaccessible ou la paramètre de configuration que vous avez spécifiés sont peut être invalide. Message d\'erreur du connecteur: ({1}).',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING' => 'Pour une utilisation optimale de IIS/FastCGI, positionnez le paramètre fastcgi.logging à 0 dans votre fichier php.ini.',

    //Collection Field
    'LBL_COLLECTION_NAME' => 'Nom',
    'LBL_COLLECTION_PRIMARY' => 'Principale',
    'ERROR_MISSING_COLLECTION_SELECTION' => 'Champ obligatoire vide',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'Assigné à',
    'LBL_DESCRIPTION' => 'Description',

    'LBL_YESTERDAY' => 'hier',
    'LBL_TODAY' => 'aujourd\'hui',
    'LBL_TOMORROW' => 'demain',
    'LBL_NEXT_WEEK' => 'semaine prochaine',
    'LBL_NEXT_MONDAY' => 'lundi prochain',
    'LBL_NEXT_FRIDAY' => 'vendredi prochain',
    'LBL_TWO_WEEKS' => 'deux semaines',
    'LBL_NEXT_MONTH' => 'mois prochain',
    'LBL_FIRST_DAY_OF_NEXT_MONTH' => 'premier jour du mois prochain',
    'LBL_THREE_MONTHS' => 'trois mois',
    'LBL_SIXMONTHS' => 'six mois',
    'LBL_NEXT_YEAR' => 'année prochaine',

    //Datetimecombo fields
    'LBL_HOURS' => 'Heures',
    'LBL_MINUTES' => 'Minutes',
    'LBL_MERIDIEM' => 'Méridien',
    'LBL_DATE' => 'Date',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'Rafraîchissement automatique',

    'LBL_DURATION_DAY' => 'jour',
    'LBL_DURATION_HOUR' => 'heure',
    'LBL_DURATION_MINUTE' => 'minute',
    'LBL_DURATION_DAYS' => 'jours',
    'LBL_DURATION_HOURS' => 'Durée (heures)',
    'LBL_DURATION_MINUTES' => 'Durée (minutes)',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => 'Choisir Mois',
    'LBL_ENTER_YEAR' => 'Entrer Année',
    'LBL_ENTER_VALID_YEAR' => 'Veuillez saisir une année valide',

    //File write error label
    'ERR_FILE_WRITE' => 'Erreur : impossible d\'écrire le fichier {0}. Veuillez vérifier les droits et permissions sur les fichiers.',
    'ERR_FILE_NOT_FOUND' => 'Erreur : impossible de charger le fichier {0}. Veuillez vérifier les droits et permissions sur les fichiers.',

    'LBL_AND' => 'Et',

    // File fields
    'LBL_SEARCH_EXTERNAL_API' => 'Fichier Source Externe',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'Sécurité',

    //IMPORT SAMPLE TEXT
    'LBL_IMPORT_SAMPLE_FILE_TEXT' => '
"Ceci est un fichier d\'import de base qui fournit un exemple du contenu attendu d\'un fichier prêt à être importé."<br />"Ce fichier est un fichier .csv délimité par un point-virgule utilisant des guillemets comme qualificateur de champ."<br /><br />"La ligne d\'entête est la toute première ligne du fichier et elle contient le nom des champs tels que vous les verriez dans l\'application."<br />"Ces libellés sont utilisés pour le mapping de données du fichier avec les données de votre SuiteCRM."<br /><br />"Remarques: Le noms des champs en base de données peuvent aussi être utilisés en ligne d\'entête. Ceci est pratique si vous utilisez phpMyAdmin ou un autre outil de gestion de base de données pour fournir des données à importer."<br />"L\'ordre des champs n\'est pas critique puisque le process d\'import fait correspondre les données à partir des champs définis dans la ligne d\'entête."<br /><br /><br />"Pour utiliser ce modèle de fichier, faites les choses suivantes:"<br />"1. Enlever les données d\'exemple"<br />"2. Enlever le texte d\'aide que vous êtes en train de lire"<br />"3. Insérer vos propres données dans les colonnes appropriées"<br />"4. Sauvegarder le fichier sur votre ordinateur local"<br />"5. Cliquez sur les options d\'import du menu d\'actions dans l\'application et choisissez le fichier à transmettre"',
    //define labels to be used for overriding local values during import/export

    'LBL_NOTIFICATIONS_NONE' => 'Aucune Notification',
    'LBL_ALT_SORT_DESC' => 'Trié Descendant',
    'LBL_ALT_SORT_ASC' => 'Trié Ascendant',
    'LBL_ALT_SORT' => 'Tri',
    'LBL_ALT_SHOW_OPTIONS' => 'Afficher Options',
    'LBL_ALT_HIDE_OPTIONS' => 'Masquer Options',
    'LBL_ALT_MOVE_COLUMN_LEFT' => 'Déplacer l\'entrée vers la liste de gauche',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => 'Déplacer l\'entrée vers la liste de droite',
    'LBL_ALT_MOVE_COLUMN_UP' => 'Déplacer l\'entrée vers le haut de la liste',
    'LBL_ALT_MOVE_COLUMN_DOWN' => 'Déplacer l\'entrée vers le bas de la liste',
    'LBL_ALT_INFO' => 'Information',
    'MSG_DUPLICATE' => 'L\'enregistrement {0} que vous allez créer est probablement un doublon d\'un enregistrement {0} existant. Les enregistrements {1} contenant le même nom sont listés ci-dessous.<br>Cliquez sur Créer {1} pour créer cet enregistrement {0}, ou sélectionnez un enregistrement {0} listé ci-dessous.',
    'MSG_SHOW_DUPLICATES' => 'L\'enregistrement {0} que vous allez créer est probablement un doublon d\'un enregistrement {0} existant. Les enregistrements {1} contenant le même nom sont listés ci-dessous.  Cliquez sur Sauvegarder pour créer cet enregistrement {0}, ou sur Annuler pour retourner au module sans créer  {0}.',
    'LBL_EMAIL_TITLE' => 'adresse email',
    'LBL_EMAIL_OPT_TITLE' => 'adresse email avec mention Opted out',
    'LBL_EMAIL_INV_TITLE' => 'adresse email invalide',
    'LBL_EMAIL_PRIM_TITLE' => 'Rendre l’adresse Email principale',
    'LBL_SELECT_ALL_TITLE' => 'Sélectionner tous',
    'LBL_SELECT_THIS_ROW_TITLE' => 'Sélectionner cette ligne',

    //for upload errors
    'UPLOAD_ERROR_TEXT' => 'ERREUR: Une erreur est survenue pendant le transfert. Code erreur : {0} - {1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => 'ERREUR: Une erreur est survenue pendant le transfert. Code erreur : {0} - {1}. La variable PHP upload_maxsize a pour valeur {2}',
    'UPLOAD_ERROR_HOME_TEXT' => 'ERREUR: Une erreur est survenue pendant votre transfert, veuillez contacter un administrateur pour obtenir de l\'aide.',
    'UPLOAD_MAXIMUM_EXCEEDED' => 'La taille de l\'upload ({0} octets) dépasse le maximum autorisé: {1} octets',
    'UPLOAD_REQUEST_ERROR' => 'Une erreur est survenue. Veuillez rafraîchir cette page et essayer de nouveau',

    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'E',
    'LBL_EDIT_BUTTON_LABEL' => 'Modifier',
    'LBL_EDIT_BUTTON_TITLE' => 'Modifier',
    'LBL_DUPLICATE_BUTTON_KEY' => 'U',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'Dupliquer',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'Dupliquer',
    'LBL_DELETE_BUTTON_KEY' => 'D',
    'LBL_DELETE_BUTTON_LABEL' => 'Supprimer',
    'LBL_DELETE_BUTTON_TITLE' => 'Supprimer',
    'LBL_BULK_ACTION_BUTTON_LABEL' => 'Action Lot',
    'LBL_BULK_ACTION_BUTTON_LABEL_MOBILE' => 'Action',
    'LBL_TOO_FEW_SELECTED' => 'Nombre d\'enregistrements sélectionnés invalide. Vous devez sélectionner au minimum {min} enregistrements.',
    'LBL_TOO_MANY_SELECTED' => 'Nombre d\'enregistrements sélectionnés invalide. Vous devez sélectionner au maximum {max} enregistrements.',
    'LBL_SELECT_ALL_NOT_ALLOWED' => 'La sélection de tous les enregistrements n\'est pas disponible pour cette action. Veuillez sélectionner des enregistrements individuels.',
    'LBL_MISSING_HANDLER_DATA' => 'Erreur inattendue. Il manque des données de gestion des actions de masse dans réponse',
    'LBL_MISSING_HANDLER' => 'Erreur inattendue. Aucun gestionnaire défini pour l\'action de sélection en masse',
    'LBL_MISSING_HANDLER_DATA_ROUTE' => 'Erreur inattendue. Route d\'action de masse manquante',
    'LBL_ACTION_ERROR' => 'Erreur inattendue lors de l\'appel de l\'action',
    'LBL_BULK_ACTION_ERROR' => 'Erreur inattendue lors de l\'appel de l\'action',
    'LBL_BULK_ACTION_DELETE_SUCCESS' => 'Enregistrement(s) supprimé(s) avec succès',
    'LBL_BULK_ACTION_MASS_UPDATE_CONFIRMATION' => 'Êtes-vous sûr de vouloir mettre à jour les enregistrements sélectionnés ?',
    'LBL_BULK_ACTION_MASS_UPDATE_SUCCESS' => 'Tous les enregistrements ont été mis à jour avec succès',
    'LBL_BULK_ACTION_MASS_UPDATE_PARTIAL_SUCCESS' => 'Succès partiel. Certains enregistrements n\'ont pas été mis à jour. Veuillez vérifier le journal',
    'LBL_BULK_ACTION_MASS_UPDATE_NO_FIELDS' => 'Aucun champ à mettre à jour',
    'LBL_BULK_ACTION_MASS_UPDATE_NO_RECORDS' => 'Aucun enregistrement à mettre à jour',
    'LBL_BULK_ACTION_MASS_UPDATE_NO_ACLS' => 'Privilège insuffisant, sauvegarde non autorisée',
    'LBL_UNEXPECTED_ERROR' => 'Erreur inattendue. Impossible d\'effectuer l\'action.',
    'LBL_RECORD_DELETE_SUCCESS' => 'Enregistrement supprimé avec succès',
    'LBL_ERROR_SAVING' => 'Une erreur s\'est produite lors de l\'enregistrement des données.',
    'LBL_SAVE_BUTTON_KEY' => 'a',
    'LBL_SAVE_BUTTON_LABEL' => 'Sauvegarder',
    'LBL_SAVE_BUTTON_TITLE' => 'Sauvegarder',
    'LBL_CANCEL_BUTTON_KEY' => 'X',
    'LBL_CANCEL_BUTTON_LABEL' => 'Annuler',
    'LBL_CANCEL_BUTTON_TITLE' => 'Annuler',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',

    'ANNUAL_REVENUE_BY_ACCOUNTS' => 'Revenu annuel par comptes',
    'PIPELINE_BY_SALES_STAGE' => 'Pipeline Par Étape de Vente',
    'LEADS_BY_SOURCE' => 'Prospects par origine',
    'LEADS_BY_STATUS' => 'Prospects par statut',
    'ACCOUNT_TYPES_PER_MONTH' => 'Nouveaux comptes par mois',

    'ERR_CONNECTOR_NOT_ARRAY' => 'tableau du connecteur dans {0} défini incorrectement ou vide et ne peut être utilisé.',
    'ERR_SUHOSIN' => 'Flux de téléchargement est bloqué par Suhosin, veuillez ajouter &quot;Télécharger&quot; à suhosin.executor.include.whitelist (voir suitecrm.log pour plus d’informations)',
    'ERR_BAD_RESPONSE_FROM_SERVER' => 'Réponse erronée du serveur',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => 'Devis',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => 'Prix Vente',
    'LBL_EMAIL_CHECK_INTERVAL_DOM' => array(
        '-1' => 'Manuellement',
        '5' => 'Toutes les 5 minutes',
        '15' => 'Toutes les 15 minutes',
        '30' => 'Toutes les 30 minutes',
        '60' => 'Toutes les heures',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'Un rappel est vide ou incorrect.',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'Rappel doit avoir un popup ou un courriel.',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'Aucun invité pour ce rappel.',
    'LBL_DELETE_REMINDER_CONFIRM' => 'Le rappel n’inclut pas les invités, vous souhaitez supprimer le rappel ?',
    'LBL_DELETE_REMINDER' => 'Supprimer le rappel',
    'LBL_OK' => 'Ok',
    'LBL_PROCEED' => 'Poursuivre',

    'LBL_COLUMNS_FILTER_HEADER_TITLE' => 'Choisissez les colonnes',
    'LBL_COLUMN_CHOOSER' => 'Sélecteur de colonne',
    'LBL_SAVE_CHANGES_BUTTON_TITLE' => 'Enregistrer les modifications',
    'LBL_DISPLAYED' => 'Affiché',
    'LBL_HIDDEN' => 'Caché',
    'ERR_EMPTY_COLUMNS_LIST' => 'Au moins un élément est requis',

    'LBL_FILTER_HEADER_TITLE' => 'Filtre',

    'LBL_CATEGORY' => 'Catégorie',
    'LBL_LIST_CATEGORY' => 'Catégorie',
    'ERR_FACTOR_TPL_INVALID' => 'Message de facteur d’authentification n’est pas valide, veuillez contacter votre administrateur.',
    'LBL_SUBTHEMES' => 'Style',
    'LBL_SUBTHEME_OPTIONS_DAWN' => 'Aurore',
    'LBL_SUBTHEME_OPTIONS_DAY' => 'Jour',
    'LBL_SUBTHEME_OPTIONS_DUSK' => 'Crépuscule',
    'LBL_SUBTHEME_OPTIONS_NIGHT' => 'Nuit',
    'LBL_SUBTHEME_OPTIONS_NOON' => 'Midi',

    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => 'Ignorer Brouillon',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => 'Cette opération supprimera cet Email, voulez-vous continuer ?',
    'LBL_CONFIRM_DISREGARD_EMAIL_TITLE' => 'Fermer la fenêtre de composition',
    'LBL_CONFIRM_DISREGARD_EMAIL_BODY' => 'En fermant cette fenêtre, toutes les informations saisies seront perdues. Êtes-vous de vouloir continuer ?',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => 'Appliquer un modèle Email',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => 'Cette opération remplacera le corps et le sujet du courriel , voulez-vous continuer ?',

    'LBL_CONFIRM_OPT_IN_TITLE' => 'Inscription Confirmée',
    'LBL_OPT_IN_TITLE' => 'Inscription',
    'LBL_CONFIRM_OPT_IN_DATE' => 'Date Confirmation Inscription',
    'LBL_CONFIRM_OPT_IN_SENT_DATE' => 'Date Envoi Confirmation Inscription',
    'LBL_CONFIRM_OPT_IN_FAIL_DATE' => 'Date Échec Confirmation Inscription',
    'LBL_CONFIRM_OPT_IN_TOKEN' => 'Jeton Confirmation Inscription',
    'ERR_OPT_IN_TPL_NOT_SET' => 'Le modèle Email pour La Confirmation Inscription n\'est pas défini. Veuillez le configurer dans les paramètres de messagerie.',
    'ERR_OPT_IN_RELATION_INCORRECT' => 'Confirmation Inscription nécessite que l\'Email soit lié au Compte / Contact / Prospect / Cible',

    'LBL_SECURITYGROUP_NONINHERITABLE' => 'Groupe non héritable',
    'LBL_PRIMARY_GROUP' => "Groupe primaire",

    // footer
    'LBL_SUITE_TOP' => 'Haut de page',
    'LBL_SUITE_SUPERCHARGED' => 'Amplifié par SuiteCRM',
    'LBL_SUITE_POWERED_BY' => 'Propulsé par SugarCRM',
    'LBL_SUITE_DESC1' => 'SuiteCRM a été écrit et monté par <a href="https://salesagility.com"> SalesAgility</a>. Le programme est fourni tel quel, sans garantie. Sous licence AGPLv3.',
    'LBL_SUITE_DESC2' => 'Ce programme est un logiciel libre ; vous pouvez le redistribuer et/ou le modifier sous les termes de la GNU Affero General Public License version 3 telle que publiée par la Free Software Foundation, y compris l’autorisation supplémentaire énoncée dans l’en-tête du code source.',
    'LBL_SUITE_DESC3' => 'SuiteCRM est une marque déposée de SalesAgility Ltd. Tous les autres noms de produits et de sociétés peuvent être des marques déposées des sociétés respectives auxquels ils sont associés.',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => 'Réinitialiser Mot de passe',
    'LBL_SEND_CONFIRM_OPT_IN_EMAIL' => 'Envoyer Email Confirmation Inscription',
    'LBL_CONFIRM_OPT_IN_ONLY_FOR_PERSON' => 'Email de Confirmation Inscription envoi uniquement pour les Comptes/Contacts/Prospects/Cibles',
    'LBL_CONFIRM_OPT_IN_IS_DISABLED' => 'Envoi Emails Confirmation Inscription est désactivé, activer l\'option Confirmation Inscription dans les paramètres de messagerie ou contactez votre administrateur.',
    'LBL_CONTACT_HAS_NO_PRIMARY_EMAIL' => 'Envoi Email Confirmation Inscription n’est pas possible parce que le Contact n’a pas d\'adresse Email principale',
    'LBL_CONFIRM_EMAIL_SENDING_FAILED' => 'Envoi Email Confirmation Inscription a échoué',
    'LBL_CONFIRM_EMAIL_SENT' => 'Email Confirmation Inscription envoyé avec succès',

    //List View Column Selector Modal
    'LBL_COLUMN_SELECTOR_DISPLAYED_COLS' => 'AFFICHÉS',
    'LBL_COLUMN_SELECTOR_HIDDEN_COLS' => 'MASQUER',
    'LBL_COLUMN_SELECTOR_CLOSE_BUTTON' => 'Fermé',
    'LBL_COLUMN_SELECTOR_SAVE_BUTTON' => 'Sauvegarder les modifications',
    'LBL_COLUMN_SELECTOR_MODAL_TITLE' => 'Choisir les colonnes'

);

$app_list_strings['moduleList']['Library'] = 'Librairie';
$app_list_strings['moduleList']['EmailAddresses'] = 'Adresse Email';
$app_list_strings['project_priority_default'] = 'Moyenne';
$app_list_strings['project_priority_options'] = array(
    'High' => 'Haute',
    'Medium' => 'Moyenne',
    'Low' => 'Basse',
);

//GDPR lawful basis options
$app_list_strings['lawful_basis_dom'] = array(
    '' => '',
    'consent' => 'Consentement',
    'contract' => 'Contrat',
    'legal_obligation' => 'Obligation Légale',
    'protection_of_interest' => 'Protection des intérêts',
    'public_interest' => 'Intérêt public',
    'legitimate_interest' => 'Intérêt légitime',
    'withdrawn' => 'Retiré',
);
//End GDPR lawful basis options

//GDPR lawful basis source options
$app_list_strings['lawful_basis_source_dom'] = array(
    '' => '',
    'website' => 'Site Web',
    'phone' => 'Téléphone',
    'given_to_user' => 'Donné à l’utilisateur',
    'email' => 'Email',
    'third_party' => 'Tierce partie',
);
//End GDPR lawful basis source options

$app_list_strings['moduleList']['KBDocuments'] = 'Base de Connaissances';

$app_list_strings['countries_dom'] = array(
    '' => '',
    'ABU DHABI' => 'ABU DHABI',
    'ADEN' => 'ADEN',
    'AFGHANISTAN' => 'AFGHANISTAN',
    'ALBANIA' => 'ALBANIE',
    'ALGERIA' => 'ALGÉRIE',
    'AMERICAN SAMOA' => 'SAMOA AMÉRICAINES',
    'ANDORRA' => 'ANDORRE',
    'ANGOLA' => 'ANGOLA',
    'ANTARCTICA' => 'ANTARCTIQUE',
    'ANTIGUA' => 'ANTIGUA-ET-BARBUDA',
    'ARGENTINA' => 'ARGENTINE',
    'ARMENIA' => 'ARMÉNIE',
    'ARUBA' => 'ARUBA',
    'AUSTRALIA' => 'AUSTRALIE',
    'AUSTRIA' => 'AUTRICHE',
    'AZERBAIJAN' => 'AZERBAÏDJAN',
    'BAHAMAS' => 'BAHAMAS',
    'BAHRAIN' => 'BAHREÏN',
    'BANGLADESH' => 'BANGLADESH',
    'BARBADOS' => 'BARBADE',
    'BELARUS' => 'BÉLARUS',
    'BELGIUM' => 'BELGIQUE',
    'BELIZE' => 'Belize',
    'BENIN' => 'BÉNIN',
    'BERMUDA' => 'BERMUDES',
    'BHUTAN' => 'BHOUTAN',
    'BOLIVIA' => 'BOLIVIE',
    'BOSNIA' => 'BOSNIE-HERZÉGOVINE',
    'BOTSWANA' => 'BOTSWANA',
    'BOUVET ISLAND' => 'BOUVET, ÎLE',
    'BRAZIL' => 'BRÉSIL',
    'BRITISH ANTARCTICA TERRITORY' => 'TERRITOIRE BRITANNIQUE DE L\'ANTARCTIQUE',
    'BRITISH INDIAN OCEAN TERRITORY' => 'OCÉAN INDIEN, TERRITOIRE BRITANNIQUE',
    'BRITISH VIRGIN ISLANDS' => 'ÎLES VIERGES BRITANNIQUES',
    'BRITISH WEST INDIES' => 'ANTILLES BRITANNIQUES',
    'BRUNEI' => 'BRUNÉI DARUSSALAM',
    'BULGARIA' => 'BULGARIE',
    'BURKINA FASO' => 'BURKINA FASO',
    'BURUNDI' => 'BURUNDI',
    'CAMBODIA' => 'CAMBODGE',
    'CAMEROON' => 'CAMEROUN',
    'CANADA' => 'CANADA',
    'CANAL ZONE' => 'ZONE DU CANAL',
    'CANARY ISLAND' => 'ÎLES CANARIES',
    'CAPE VERDI ISLANDS' => 'CAP-VERT',
    'CAYMAN ISLANDS' => 'CAÏMANES, ÎLES',
    'CHAD' => 'TCHAD',
    'CHANNEL ISLAND UK' => 'ÎLES ANGLO-NORMANDES GB',
    'CHILE' => 'CHILI',
    'CHINA' => 'CHINE',
    'CHRISTMAS ISLAND' => 'CHRISTMAS, ÎLE',
    'COCOS (KEELING) ISLAND' => 'COCOS (KEELING), ÎLES',
    'COLOMBIA' => 'COLOMBIE',
    'COMORO ISLANDS' => 'COMORES',
    'CONGO' => 'CONGO',
    'CONGO KINSHASA' => 'CONGO, RÉPUBLIQUE DÉMOCRATIQUE DU',
    'COOK ISLANDS' => 'COOK, ÎLES',
    'COSTA RICA' => 'COSTA RICA',
    'CROATIA' => 'CROATIE',
    'CUBA' => 'CUBA',
    'CURACAO' => 'CURACAO',
    'CYPRUS' => 'CHYPRE',
    'CZECH REPUBLIC' => 'TCHÈQUE, RÉPUBLIQUE',
    'DAHOMEY' => 'DAHOMEY',
    'DENMARK' => 'DANEMARK',
    'DJIBOUTI' => 'DJIBOUTI',
    'DOMINICA' => 'DOMINIQUE',
    'DOMINICAN REPUBLIC' => 'DOMINICAINE, RÉPUBLIQUE',
    'DUBAI' => 'DUBAI',
    'ECUADOR' => 'ÉQUATEUR',
    'EGYPT' => 'ÉGYPTE',
    'EL SALVADOR' => 'Salvador',
    'EQUATORIAL GUINEA' => 'GUINÉE ÉQUATORIALE',
    'ESTONIA' => 'ESTONIE',
    'ETHIOPIA' => 'ÉTHIOPIE',
    'FAEROE ISLANDS' => 'FÉROÉ, ÎLES',
    'FALKLAND ISLANDS' => 'FALKLAND, ÎLES (MALVINAS)',
    'FIJI' => 'FIDJI',
    'FINLAND' => 'FINLANDE',
    'FRANCE' => 'France',
    'FRENCH GUIANA' => 'GUYANE FRANÇAISE',
    'FRENCH POLYNESIA' => 'POLYNÉSIE FRANÇAISE',
    'GABON' => 'Gabon',
    'GAMBIA' => 'GAMBIE',
    'GEORGIA' => 'GÉORGIE',
    'GERMANY' => 'ALLEMAGNE',
    'GHANA' => 'GHANA',
    'GIBRALTAR' => 'GIBRALTAR',
    'GREECE' => 'GRÈCE',
    'GREENLAND' => 'GROENLAND',
    'GUADELOUPE' => 'GUADELOUPE',
    'GUAM' => 'GUAM',
    'GUATEMALA' => 'GUATEMALA',
    'GUINEA' => 'GUINÉE',
    'GUYANA' => 'GUYANE',
    'HAITI' => 'HAÏTI',
    'HONDURAS' => 'HONDURAS',
    'HONG KONG' => 'HONG-KONG',
    'HUNGARY' => 'HONGRIE',
    'ICELAND' => 'ISLANDE',
    'IFNI' => 'IFNI',
    'INDIA' => 'INDE',
    'INDONESIA' => 'INDONÉSIE',
    'IRAN' => 'IRAN, RÉPUBLIQUE ISLAMIQUE',
    'IRAQ' => 'IRAK',
    'IRELAND' => 'IRLANDE',
    'ISRAEL' => 'ISRAËL',
    'ITALY' => 'ITALIE',
    'IVORY COAST' => 'CÔTE D\'IVOIRE',
    'JAMAICA' => 'JAMAÏQUE',
    'JAPAN' => 'JAPON',
    'JORDAN' => 'JORDANIE',
    'KAZAKHSTAN' => 'KASAKHSTAN',
    'KENYA' => 'KENYA',
    'KOREA' => 'CORÉE, RÉPUBLIQUE POPULAIRE DÉMOCRATIQUE DE',
    'KOREA, SOUTH' => 'CORÉE, RÉPUBLIQUE DE',
    'KUWAIT' => 'KOWEÏT',
    'KYRGYZSTAN' => 'KIRGHIZISTAN',
    'LAOS' => 'LAOS',
    'LATVIA' => 'LETTONIE',
    'LEBANON' => 'LIBAN',
    'LEEWARD ISLANDS' => 'ÎLES SOUS-LE-VENT',
    'LESOTHO' => 'LESOTHO',
    'LIBYA' => 'LIBYENNE, JAMAHIRIYA ARABE',
    'LIECHTENSTEIN' => 'LIECHTENSTEIN',
    'LITHUANIA' => 'LITUANIE',
    'LUXEMBOURG' => 'LUXEMBOURG',
    'MACAO' => 'MACAO',
    'MACEDONIA' => 'MACÉDOINE, EX-RÉPUBLIQUE YOUGOSLAVE',
    'MADAGASCAR' => 'MADAGASCAR',
    'MALAWI' => 'MALAWI',
    'MALAYSIA' => 'MALAISIE',
    'MALDIVES' => 'MALDIVES',
    'MALI' => 'MALI',
    'MALTA' => 'MALTE',
    'MARTINIQUE' => 'MARTINIQUE',
    'MAURITANIA' => 'MAURITANIE',
    'MAURITIUS' => 'MAURICE',
    'MELANESIA' => 'MÉLANÉSIE',
    'MEXICO' => 'MEXIQUE',
    'MOLDOVIA' => 'MOLDOVA, RÉPUBLIQUE DE',
    'MONACO' => 'MONACO',
    'MONGOLIA' => 'MONGOLIE',
    'MOROCCO' => 'MAROC',
    'MOZAMBIQUE' => 'MOZAMBIQUE',
    'MYANAMAR' => 'MYANMAR',
    'NAMIBIA' => 'NAMIBIE',
    'NEPAL' => 'NÉPAL',
    'NETHERLANDS' => 'PAYS-BAS',
    'NETHERLANDS ANTILLES' => 'ANTILLES NÉERLANDAISES',
    'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'ZONE NEUTRE DES ANTILLES HOLLANDAISES',
    'NEW CALADONIA' => 'NOUVELLE-CALÉDONIE',
    'NEW HEBRIDES' => 'NOUVELLES-HÉBRIDES',
    'NEW ZEALAND' => 'NOUVELLE-ZÉLANDE',
    'NICARAGUA' => 'NICARAGUA',
    'NIGER' => 'NIGER',
    'NIGERIA' => 'NIGÉRIA',
    'NORFOLK ISLAND' => 'NORFOLK, ÎLE',
    'NORWAY' => 'NORVÈGE',
    'OMAN' => 'OMAN',
    'OTHER' => 'AUTRE',
    'PACIFIC ISLAND' => 'ILES DU PACIFIQUE',
    'PAKISTAN' => 'PAKISTAN',
    'PANAMA' => 'PANAMA',
    'PAPUA NEW GUINEA' => 'PAPOUASIE-NOUVELLE-GUINÉE',
    'PARAGUAY' => 'PARAGUAY',
    'PERU' => 'PÉROU',
    'PHILIPPINES' => 'PHILIPPINES',
    'POLAND' => 'POLOGNE',
    'PORTUGAL' => 'PORTUGAL',
    'PORTUGUESE TIMOR' => 'TIMOR ORIENTAL',
    'PUERTO RICO' => 'PORTO RICO',
    'QATAR' => 'QATAR',
    'REPUBLIC OF BELARUS' => 'BÉLARUS',
    'REPUBLIC OF SOUTH AFRICA' => 'AFRIQUE DU SUD',
    'REUNION' => 'RÉUNION',
    'ROMANIA' => 'ROUMANIE',
    'RUSSIA' => 'RUSSIE',
    'RWANDA' => 'RWANDA',
    'RYUKYU ISLANDS' => 'ÎLES RYŪKYŪ',
    'SABAH' => 'SABAH',
    'SAN MARINO' => 'SAINT-MARIN',
    'SAUDI ARABIA' => 'ARABIE SAOUDITE',
    'SENEGAL' => 'SÉNÉGAL',
    'SERBIA' => 'SERBIE',
    'SEYCHELLES' => 'SEYCHELLES',
    'SIERRA LEONE' => 'SIERRA LEONE',
    'SINGAPORE' => 'SINGAPOUR',
    'SLOVAKIA' => 'SLOVAQUIE',
    'SLOVENIA' => 'SLOVÉNIE',
    'SOMALILIAND' => 'SOMALIE',
    'SOUTH AFRICA' => 'AFRIQUE DU SUD',
    'SOUTH YEMEN' => 'YÉMEN DU SUD',
    'SPAIN' => 'ESPAGNE',
    'SPANISH SAHARA' => 'N\'Existe Pas',
    'SRI LANKA' => 'SRI LANKA',
    'ST. KITTS AND NEVIS' => 'SAINT-KITTS-ET-NEVIS',
    'ST. LUCIA' => 'SAINTE-LUCIE',
    'SUDAN' => 'SOUDAN',
    'SURINAM' => 'SURINAME',
    'SW AFRICA' => 'NAMIBIE',
    'SWAZILAND' => 'SWAZILAND',
    'SWEDEN' => 'SUÈDE',
    'SWITZERLAND' => 'SUISSE',
    'SYRIA' => 'SYRIENNE, RÉPUBLIQUE ARABE',
    'TAIWAN' => 'TAÏWAN, PROVINCE DE CHINE',
    'TAJIKISTAN' => 'TADJIKISTAN',
    'TANZANIA' => 'TANZANIE, RÉPUBLIQUE-UNIE DE',
    'THAILAND' => 'THAÏLANDE',
    'TONGA' => 'TONGA',
    'TRINIDAD' => 'TRINITÉ-ET-TOBAGO',
    'TUNISIA' => 'TUNISIE',
    'TURKEY' => 'TURQUIE',
    'UGANDA' => 'OUGANDA',
    'UKRAINE' => 'UKRAINE',
    'UNITED ARAB EMIRATES' => 'ÉMIRATS ARABES UNIS',
    'UNITED KINGDOM' => 'ROYAUME-UNI',
    'URUGUAY' => 'URUGUAY',
    'US PACIFIC ISLAND' => 'ILES DU PACIFIQUE (US)',
    'US VIRGIN ISLANDS' => 'ÎLES VIERGES DES ÉTATS-UNIS',
    'USA' => 'ÉTATS-UNIS',
    'UZBEKISTAN' => 'OUZBÉKISTAN',
    'VANUATU' => 'VANUATU',
    'VATICAN CITY' => 'SAINT-SIÈGE (ÉTAT DE LA CITÉ DU VATICAN)',
    'VENEZUELA' => 'VENEZUELA',
    'VIETNAM' => 'VIET NAM',
    'WAKE ISLAND' => 'ÎLE DE WAKE',
    'WEST INDIES' => 'INDEX OCCIDENTALES',
    'WESTERN SAHARA' => 'SAHARA OCCIDENTAL',
    'YEMEN' => 'YÉMEN',
    'ZAIRE' => 'REP. DEM. CONGO',
    'ZAMBIA' => 'ZAMBIE',
    'ZIMBABWE' => 'ZIMBABWE',
);

$app_list_strings['charset_dom'] = array(
    'BIG-5' => 'BIG-5 (Taïwan et Hong Kong)',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251' => 'Cp1251 (MS Cyrillique)',
    'CP1252' => 'CP1252 (MS Europe occidentale et États-Unis)',
    'EUC-CN' => 'EUC-CN (GB2312 Chinois simplifié)',
    'EUC-JP' => 'EUC-JP (Japonais Unix)',
    'EUC-KR' => 'EUC-KR (Corée)',
    'EUC-TW' => 'EUC-TW (Taiwanais)',
    'ISO-2022-JP' => 'ISO-2022-JP (japonais)',
    'ISO-2022-KR' => 'ISO-2022-KR (Coréen)',
    'ISO-8859-1' => 'ISO-8859-1 (Europe occidentale et États-Unis)',
    'ISO-8859-2' => 'ISO-8859-2 (Europe centrale et orientale)',
    'ISO-8859-3' => 'ISO-8859-3 (Latin 3)',
    'ISO-8859-4' => 'ISO-8859-4 (Latin 4)',
    'ISO-8859-5' => 'ISO-8859-5 (Cyrillique)',
    'ISO-8859-6' => 'ISO-8859-6 (Arabe)',
    'ISO-8859-7' => 'ISO-8859-7 (Grec)',
    'ISO-8859-8' => 'ISO-8859-8 (Hébreu)',
    'ISO-8859-9' => 'ISO-8859-9 (Latin 5)',
    'ISO-8859-10' => 'ISO-8859-10 (Latin 6)',
    'ISO-8859-13' => 'ISO-8859-13 (7 Latin)',
    'ISO-8859-14' => 'ISO-8859-14 (Latin 8)',
    'ISO-8859-15' => 'ISO-8859-15 (Latin 9)',
    'KOI8-R' => 'KOI8-R (Russe Cyrillique)',
    'KOI8-U' => 'KOI8-U (Cyrillique Ukrainien)',
    'SJIS' => 'SJIS (MS japonais)',
    'UTF-8' => 'UTF-8',
);

$app_list_strings['timezone_dom'] = array(

    'Africa/Algiers' => 'Afrique/Alger',
    'Africa/Luanda' => 'Afrique / Lusaka',
    'Africa/Porto-Novo' => 'Afrique / Porto-Novo',
    'Africa/Gaborone' => 'Afrique / Gaborone',
    'Africa/Ouagadougou' => 'Afrique / Ouagadougou',
    'Africa/Bujumbura' => 'Afrique / Bujumbura',
    'Africa/Douala' => 'Africa/Douala',
    'Atlantic/Cape_Verde' => 'Atlantique/Cap-Vert',
    'Africa/Bangui' => 'Afrique/Bangui',
    'Africa/Ndjamena' => 'Afrique/Ndjamena',
    'Indian/Comoro' => 'Océan Indien/Comorres',
    'Africa/Kinshasa' => 'Afrique/Kinshasa',
    'Africa/Lubumbashi' => 'Afrique / Lubumbashi',
    'Africa/Brazzaville' => 'Afrique/Brazzaville',
    'Africa/Abidjan' => 'Afrique/Abidjan',
    'Africa/Djibouti' => 'Afrique/Djibouti',
    'Africa/Cairo' => 'Afrique/Le Caire',
    'Africa/Malabo' => 'Afrique/Malabo',
    'Africa/Asmera' => 'Afrique/Asmera',
    'Africa/Addis_Ababa' => 'Afrique/Addis-Abeba',
    'Africa/Libreville' => 'Afrique/Libreville',
    'Africa/Banjul' => 'Afrique/Banjul',
    'Africa/Accra' => 'Afrique/Accra',
    'Africa/Conakry' => 'Afrique/Conakry',
    'Africa/Bissau' => 'Afrique/Bissau',
    'Africa/Nairobi' => 'Afrique/Nairobi',
    'Africa/Maseru' => 'Afrique / Maseru',
    'Africa/Monrovia' => 'Afrique / Monrovia',
    'Africa/Tripoli' => 'Afrique/Tripoli',
    'Indian/Antananarivo' => 'Océan Indien/Antananarivo',
    'Africa/Blantyre' => 'Afrique / Blantyre',
    'Africa/Bamako' => 'Afrique/Bamako',
    'Africa/Nouakchott' => 'Afrique / Nouakchott',
    'Indian/Mauritius' => 'Océan Indien/Maurice',
    'Indian/Mayotte' => 'Indian/Mayotte',
    'Africa/Casablanca' => 'Africa/Casablanca',
    'Africa/El_Aaiun' => 'Afrique / El Aaiun',
    'Africa/Maputo' => 'Afrique / Maputo',
    'Africa/Windhoek' => 'Afrique / Windhoek',
    'Africa/Niamey' => 'Afrique/Niamey',
    'Africa/Lagos' => 'Afrique/Lagos',
    'Indian/Reunion' => 'Océan Indien/La Réunion',
    'Africa/Kigali' => 'Afrique/Kigali',
    'Atlantic/St_Helena' => 'Atlantique/Sainte-Hélène',
    'Africa/Sao_Tome' => 'Afrique/Sao Tomé',
    'Africa/Dakar' => 'Afrique/Dakar',
    'Indian/Mahe' => 'Inde/Mahé',
    'Africa/Freetown' => 'Afrique/Libreville',
    'Africa/Mogadishu' => 'Afrique/Mogadicio',
    'Africa/Johannesburg' => 'Afrique/Johannesburg',
    'Africa/Khartoum' => 'Afrique / Khartoum',
    'Africa/Mbabane' => 'Afrique / Mbabane',
    'Africa/Dar_es_Salaam' => 'Afrique/Dar es Salaam',
    'Africa/Lome' => 'Afrique/Lomé',
    'Africa/Tunis' => 'Afrique/Tunis',
    'Africa/Kampala' => 'Afrique / Kampala',
    'Africa/Lusaka' => 'Afrique / Lusaka',
    'Africa/Harare' => 'Afrique/Hararé',
    'Antarctica/Casey' => 'Antartique / Casey',
    'Antarctica/Davis' => 'Antartique / Davis',
    'Antarctica/Mawson' => 'Antartique / Mawson',
    'Indian/Kerguelen' => 'Inde / Kerguelen',
    'Antarctica/DumontDUrville' => 'Antartique/DumontDUrville',
    'Antarctica/Syowa' => 'Antartique / Syowa',
    'Antarctica/Vostok' => 'Antartique / Vostok',
    'Antarctica/Rothera' => 'Antartique / Rothera',
    'Antarctica/Palmer' => 'Antartique / Palmer',
    'Antarctica/McMurdo' => 'Antartique / McMurdo',
    'Asia/Kabul' => 'Asie / Kabul',
    'Asia/Yerevan' => 'Asie /Yerevan',
    'Asia/Baku' => 'Asie/Baku',
    'Asia/Bahrain' => 'Asie/Bahrain',
    'Asia/Dhaka' => 'Asie /Dhaka',
    'Asia/Thimphu' => 'Asie /Thimphu',
    'Indian/Chagos' => 'Inde/Chagos',
    'Asia/Brunei' => 'Asie/Brunei',
    'Asia/Rangoon' => 'Asie /Rangoon',
    'Asia/Phnom_Penh' => 'Asie/Phnom Penh',
    'Asia/Beijing' => 'Asie/Pékin',
    'Asia/Harbin' => 'Asie /Harbin',
    'Asia/Shanghai' => 'Asie/Shanghai',
    'Asia/Chongqing' => 'Asie /Chongqing',
    'Asia/Urumqi' => 'Asie /Urumqi',
    'Asia/Kashgar' => 'Asie/Kashgar',
    'Asia/Hong_Kong' => 'Asie/Hong Kong',
    'Asia/Taipei' => 'Asie/Taipei',
    'Asia/Macau' => 'Asie/Macao',
    'Asia/Nicosia' => 'Asie/Nicosie',
    'Asia/Tbilisi' => 'Asie/Tbilisi',
    'Asia/Dili' => 'Asie/Dili',
    'Asia/Calcutta' => 'Asie/Calcutta',
    'Asia/Jakarta' => 'Asie/Jakarta',
    'Asia/Pontianak' => 'Asie/Pontianak',
    'Asia/Makassar' => 'Asie/Makassar',
    'Asia/Jayapura' => 'Asie/Jayapura',
    'Asia/Tehran' => 'Asie/Téhéran',
    'Asia/Baghdad' => 'Asie/Bagdad',
    'Asia/Jerusalem' => 'Asie/Jérusalem',
    'Asia/Tokyo' => 'Asie/Tokyo',
    'Asia/Amman' => 'Asie/Amman',
    'Asia/Almaty' => 'Asie/Almaty',
    'Asia/Qyzylorda' => 'Asie/Kyzylorda',
    'Asia/Aqtobe' => 'Asie/Aqtobe',
    'Asia/Aqtau' => 'Asie/Aqtaū',
    'Asia/Oral' => 'Asie/Oral',
    'Asia/Bishkek' => 'Asie/Bishkek',
    'Asia/Seoul' => 'Asie/Séoul',
    'Asia/Pyongyang' => 'Asie/Pyongyang',
    'Asia/Kuwait' => 'Asie/Kuwait',
    'Asia/Vientiane' => 'Asie/Vientiane',
    'Asia/Beirut' => 'Asie/Beyrouth',
    'Asia/Kuala_Lumpur' => 'Asie/Kuala Lumpur',
    'Asia/Kuching' => 'Asie/Kuching',
    'Indian/Maldives' => 'Océan Indien/Les Maldives',
    'Asia/Hovd' => 'Asie/Hovd',
    'Asia/Ulaanbaatar' => 'Asie/Ulaanbaatar',
    'Asia/Choibalsan' => 'Asie/Choybalsan',
    'Asia/Katmandu' => 'Asie/Katmandu',
    'Asia/Muscat' => 'Asie/Muscat',
    'Asia/Karachi' => 'Asie/Karachi',
    'Asia/Gaza' => 'Asie/Gaza',
    'Asia/Manila' => 'Asie/Manille',
    'Asia/Qatar' => 'Asie/Qatar',
    'Asia/Riyadh' => 'Asie/Riyadh',
    'Asia/Singapore' => 'Asie/Singapour',
    'Asia/Colombo' => 'Asie/Colombo',
    'Asia/Damascus' => 'Asie/Damas',
    'Asia/Dushanbe' => 'Asie/Dushanbe',
    'Asia/Bangkok' => 'Asie/Bangkok',
    'Asia/Ashgabat' => 'Asie/Ashgabat',
    'Asia/Dubai' => 'Asie/Dubaï',
    'Asia/Samarkand' => 'Asie/Samarkand',
    'Asia/Tashkent' => 'Asie/Tashkent',
    'Asia/Saigon' => 'Asie/Saigon',
    'Asia/Aden' => 'Asie/Aden',
    'Australia/Darwin' => 'Australie/Darwin',
    'Australia/Perth' => 'Australie / Perth',
    'Australia/Brisbane' => 'Australie / Brisbane',
    'Australia/Lindeman' => 'Australie / Lindeman',
    'Australia/Adelaide' => 'Australie / Adelaide',
    'Australia/Hobart' => 'Australie / Hobart',
    'Australia/Currie' => 'Australie / Currie',
    'Australia/Melbourne' => 'Australie / Melbourne',
    'Australia/Sydney' => 'Australie / Sydney',
    'Australia/Broken_Hill' => 'Australie / Broken Hill',
    'Indian/Christmas' => 'Inde/Christmas',
    'Pacific/Rarotonga' => 'Pacifique/Rarotonga',
    'Indian/Cocos' => 'Inde/Cocos',
    'Pacific/Fiji' => 'Pacifique/Fidji',
    'Pacific/Gambier' => 'Pacifique/Gambier',
    'Pacific/Marquesas' => 'Pacifique/Marquesas',
    'Pacific/Tahiti' => 'Pacifique/Tahiti',
    'Pacific/Guam' => 'Pacifique/Guam',
    'Pacific/Tarawa' => 'Pacifique/Tarawa',
    'Pacific/Enderbury' => 'Pacifique/Enderbury',
    'Pacific/Kiritimati' => 'Pacifique/Kiritimati',
    'Pacific/Saipan' => 'Pacifique/Saipan',
    'Pacific/Majuro' => 'Pacifique/Majuro',
    'Pacific/Kwajalein' => 'Pacifique/Kwajalein',
    'Pacific/Truk' => 'Pacifique/Truk',
    'Pacific/Pohnpei' => 'Pacifique/Ponape',
    'Pacific/Kosrae' => 'Pacifique/Kosrae',
    'Pacific/Nauru' => 'Pacifique/Nauru',
    'Pacific/Noumea' => 'Pacifique/Noumea',
    'Pacific/Auckland' => 'Pacifique/Auckland',
    'Pacific/Chatham' => 'Pacifique/Chatham',
    'Pacific/Niue' => 'Pacifique/Niue',
    'Pacific/Norfolk' => 'Pacifique/Norfolk',
    'Pacific/Palau' => 'Pacifique/Palau',
    'Pacific/Port_Moresby' => 'Pacifique/Port Moresby',
    'Pacific/Pitcairn' => 'Pacifique/Pitcairn',
    'Pacific/Pago_Pago' => 'Pacifique/Pago Pago',
    'Pacific/Apia' => 'Pacifique/Apia',
    'Pacific/Guadalcanal' => 'Pacifique/Guadalcanal',
    'Pacific/Fakaofo' => 'Pacifique/Fakaofo',
    'Pacific/Tongatapu' => 'Pacifique/Tongatapu',
    'Pacific/Funafuti' => 'Pacifique/Funafuti',
    'Pacific/Johnston' => 'Pacifique/Johnston',
    'Pacific/Midway' => 'Pacifique/Midway',
    'Pacific/Wake' => 'Pacifique/Wake',
    'Pacific/Efate' => 'Pacifique/Efate',
    'Pacific/Wallis' => 'Pacifique/Wallis',
    'Europe/London' => 'Europe/Londres',
    'Europe/Dublin' => 'Europe/Dublin',
    'WET' => 'WET',
    'CET' => 'CET',
    'MET' => 'MET',
    'EET' => 'EET',
    'Europe/Tirane' => 'Europe/Tirana',
    'Europe/Andorra' => 'Europe/Andorre',
    'Europe/Vienna' => 'Europe/Vienne',
    'Europe/Minsk' => 'Europe/Minsk',
    'Europe/Brussels' => 'Europe/Bruxelles',
    'Europe/Sofia' => 'Europe/Sofia',
    'Europe/Prague' => 'Europe/Prague',
    'Europe/Copenhagen' => 'Europe/Copenhague',
    'Atlantic/Faeroe' => 'Atlantique/Féroé',
    'America/Danmarkshavn' => 'Amérique/Danmarkshavn',
    'America/Scoresbysund' => 'Amérique/Scoresbysund',
    'America/Godthab' => 'Amérique/Godthab',
    'America/Thule' => 'Amérique/Thule',
    'Europe/Tallinn' => 'Europe/Tallinn',
    'Europe/Helsinki' => 'Europe/Helsinki',
    'Europe/Paris' => 'Europe/Paris',
    'Europe/Berlin' => 'Europe/Berlin',
    'Europe/Gibraltar' => 'Europe/Gibraltar',
    'Europe/Athens' => 'Europe/Athènes',
    'Europe/Budapest' => 'Europe/Budapest',
    'Atlantic/Reykjavik' => 'Atlantique/Reykjavik',
    'Europe/Rome' => 'Europe/Rome',
    'Europe/Riga' => 'Europe/Riga',
    'Europe/Vaduz' => 'Europe/Vaduz',
    'Europe/Vilnius' => 'Europe/Vilnius',
    'Europe/Luxembourg' => 'Europe/Luxembourg',
    'Europe/Malta' => 'Europe/Malte',
    'Europe/Chisinau' => 'Europe/Chișinău',
    'Europe/Monaco' => 'Europe/Monaco',
    'Europe/Amsterdam' => 'Europe/Amsterdam',
    'Europe/Oslo' => 'Europe/Oslo',
    'Europe/Warsaw' => 'Europe/Varsovie',
    'Europe/Lisbon' => 'Europe/Lisbone',
    'Atlantic/Azores' => 'Atlantique/Açores',
    'Atlantic/Madeira' => 'Atlantique/Madère',
    'Europe/Bucharest' => 'Europe/Bucarest',
    'Europe/Kaliningrad' => 'Europe/Kaliningrad',
    'Europe/Moscow' => 'Europe/Moscou',
    'Europe/Samara' => 'Europe/Samara',
    'Asia/Yekaterinburg' => 'Asie/Yekaterinburg',
    'Asia/Omsk' => 'Asie/Omsk',
    'Asia/Novosibirsk' => 'Asie/Novosibirsk',
    'Asia/Krasnoyarsk' => 'Asie/Krasnoyarsk',
    'Asia/Irkutsk' => 'Asie/Irkutsk',
    'Asia/Yakutsk' => 'Asie/Yakutsk',
    'Asia/Vladivostok' => 'Asie/Vladivostok',
    'Asia/Sakhalin' => 'Asie/Sakhalin',
    'Asia/Magadan' => 'Asie/Magadan',
    'Asia/Kamchatka' => 'Asie/Kamchatka',
    'Asia/Anadyr' => 'Asie/Anadyr',
    'Europe/Belgrade' => 'Europe/Belgrade',
    'Europe/Madrid' => 'Australie / Lindeman',
    'Africa/Ceuta' => 'Afrique / Ceuta',
    'Atlantic/Canary' => 'Europe/Vienne',
    'Europe/Stockholm' => 'Europe/Stockholm',
    'Europe/Zurich' => 'Europe/Zurich',
    'Europe/Istanbul' => 'Europe/Istanbul',
    'Europe/Kiev' => 'Europe/Kiev',
    'Europe/Uzhgorod' => 'Europe/Oujhorod',
    'Europe/Zaporozhye' => 'Europe/Zaporijia',
    'Europe/Simferopol' => 'Europe/Simferopol',
    'America/New_York' => 'Amérique / New York',
    'America/Chicago' => 'Amérique / Chicago',
    'America/North_Dakota/Center' => 'Amérique/Dakota du Nord/Centre',
    'America/Denver' => 'Amérique / Denver',
    'America/Los_Angeles' => 'Amérique / Los Angeles',
    'America/Juneau' => 'Amérique / Juneau',
    'America/Yakutat' => 'Amérique / Yakutat',
    'America/Anchorage' => 'Amérique / Anchorage',
    'America/Nome' => 'Amérique/Nome',
    'America/Adak' => 'Amérique/Adak',
    'Pacific/Honolulu' => 'Pacifique/Honolulu',
    'America/Phoenix' => 'Amérique / Phoenix',
    'America/Boise' => 'Amérique/Boise',
    'America/Indiana/Indianapolis' => 'Amérique/Indiana/Indianapolis',
    'America/Indiana/Marengo' => 'Amérique/Indiana/Marengo',
    'America/Indiana/Knox' => 'Amérique/Indiana/Knox',
    'America/Indiana/Vevay' => 'Amérique/Indiana/Vevay',
    'America/Kentucky/Louisville' => 'Amérique/Kentucky/Louisville',
    'America/Kentucky/Monticello' => 'Amérique/Kentucky/Monticello',
    'America/Detroit' => 'Amérique/Détroit',
    'America/Menominee' => 'Amérique/Menominee',
    'America/St_Johns' => 'Amérique/St. Johns',
    'America/Goose_Bay' => 'Amérique/Goose Bay',
    'America/Halifax' => 'Amérique/Halifax',
    'America/Glace_Bay' => 'Amérique/Glace Bay',
    'America/Montreal' => 'Amérique/Montréal',
    'America/Toronto' => 'Amérique/Toronto',
    'America/Thunder_Bay' => 'Amérique/Thunder Bay',
    'America/Nipigon' => 'Amérique/Nipigon',
    'America/Rainy_River' => 'Amérique/Rainy River',
    'America/Winnipeg' => 'America/Winnipeg',
    'America/Regina' => 'Amérique/Regina',
    'America/Swift_Current' => 'Amérique/Swift Current',
    'America/Edmonton' => 'Amérique/Edmonton',
    'America/Vancouver' => 'Amérique / Vancouver',
    'America/Dawson_Creek' => 'Amérique/Dawson Creek',
    'America/Pangnirtung' => 'Amérique/Pangnirtung',
    'America/Iqaluit' => 'Amérique/Iqaluit',
    'America/Coral_Harbour' => 'Amérique/Coral Harbour',
    'America/Rankin_Inlet' => 'Amérique/Rankin Inlet',
    'America/Cambridge_Bay' => 'Amérique/Cambridge Bay',
    'America/Yellowknife' => 'Amérique/Yellowknife',
    'America/Inuvik' => 'Amérique/Inuvik',
    'America/Whitehorse' => 'Amérique/Whitehorse',
    'America/Dawson' => 'Amérique/Dawson',
    'America/Cancun' => 'Amérique/Cancun',
    'America/Merida' => 'Amérique/Merida',
    'America/Monterrey' => 'Amérique/Monterrey',
    'America/Mexico_City' => 'Amérique/Mexico',
    'America/Chihuahua' => 'Amérique/Chihuahua',
    'America/Hermosillo' => 'Amérique/Hermosillo',
    'America/Mazatlan' => 'Amérique/Mazatlan',
    'America/Tijuana' => 'Amérique/Tijuana',
    'America/Anguilla' => 'Amérique/Anguilla',
    'America/Antigua' => 'Amérique/Antigua',
    'America/Nassau' => 'Amérique/Nassau',
    'America/Barbados' => 'Amérique/Barbados',
    'America/Belize' => 'Amérique/Bélize',
    'Atlantic/Bermuda' => 'Atlantique/Bermudes',
    'America/Cayman' => 'Amérique/Cayman',
    'America/Costa_Rica' => 'Amérique/Costa Rica',
    'America/Havana' => 'Amérique/La Havane',
    'America/Dominica' => 'Amérique/Dominica',
    'America/Santo_Domingo' => 'Amérique/Saint-Domingue',
    'America/El_Salvador' => 'Amérique/El Salvador',
    'America/Grenada' => 'Amérique/Grenada',
    'America/Guadeloupe' => 'Amérique/Guadeloupe',
    'America/Guatemala' => 'Amérique/Guatemala',
    'America/Port-au-Prince' => 'Amérique/Port-au-Prince',
    'America/Tegucigalpa' => 'Amérique/Tegucigalpa',
    'America/Jamaica' => 'Amérique / Jamaïque',
    'America/Martinique' => 'Amérique/Martinique',
    'America/Montserrat' => 'Amérique/Montserrat',
    'America/Managua' => 'Amérique/Managua',
    'America/Panama' => 'Amérique/Panama',
    'America/Puerto_Rico' => 'Amérique/Puerto Rico',
    'America/St_Kitts' => 'Amérique/St Kitts',
    'America/St_Lucia' => 'Amérique/Ste Lucia',
    'America/Miquelon' => 'Amérique/Miquelon',
    'America/St_Vincent' => 'Amérique/Saint-Vincent',
    'America/Grand_Turk' => 'Amérique/Grand Turk',
    'America/Tortola' => 'Amérique/Tortola',
    'America/St_Thomas' => 'Amérique/St. Thomas',
    'America/Argentina/Buenos_Aires' => 'Amérique/Argentine/Buenos Aires',
    'America/Argentina/Cordoba' => 'Amérique/Argentine/Cordoba',
    'America/Argentina/Tucuman' => 'Amérique/Argentine/Tucuman',
    'America/Argentina/La_Rioja' => 'Amérique/Argentine/La_Rioja',
    'America/Argentina/San_Juan' => 'Amérique/Argentine/San Juan',
    'America/Argentina/Jujuy' => 'Amérique/Argentine/Jujuy',
    'America/Argentina/Catamarca' => 'Amérique/Argentine/Catamarca',
    'America/Argentina/Mendoza' => 'Amérique/Argentine/Mendoza',
    'America/Argentina/Rio_Gallegos' => 'Amérique/Argentine/Rio Gallegos',
    'America/Argentina/Ushuaia' => 'Amérique/Argentine/Ushuaïa',
    'America/Aruba' => 'Amérique/Aruba',
    'America/La_Paz' => 'Amérique/La Paz',
    'America/Noronha' => 'Amérique/Noronha',
    'America/Belem' => 'Amérique/Belem',
    'America/Fortaleza' => 'Amérique/Fortaleza',
    'America/Recife' => 'Amérique/Recife',
    'America/Araguaina' => 'Amérique/Araguaina',
    'America/Maceio' => 'Amérique/Maceio',
    'America/Bahia' => 'Amérique/Bahia',
    'America/Sao_Paulo' => 'Amérique/São Paulo',
    'America/Campo_Grande' => 'Amérique/Campo Grande',
    'America/Cuiaba' => 'Amérique/Cuiaba',
    'America/Porto_Velho' => 'Amérique/Porto Velho',
    'America/Boa_Vista' => 'Amérique/Boa Vista',
    'America/Manaus' => 'Amérique/Manaus',
    'America/Eirunepe' => 'Amérique/Eirunepe',
    'America/Rio_Branco' => 'Amérique/Rio Branco',
    'America/Santiago' => 'Amérique/Santiago',
    'Pacific/Easter' => 'Pacifique/Easter',
    'America/Bogota' => 'Amérique/Bogota',
    'America/Curacao' => 'Amérique/Curacao',
    'America/Guayaquil' => 'Amérique/Guayaquil',
    'Pacific/Galapagos' => 'Pacifique/Galapagos',
    'Atlantic/Stanley' => 'Atlantique/Stanley',
    'America/Cayenne' => 'Amérique / Cayenne',
    'America/Guyana' => 'Amérique/Guyana',
    'America/Asuncion' => 'Amérique/Asuncion',
    'America/Lima' => 'Amérique / Lima',
    'Atlantic/South_Georgia' => 'Atlantique/Georgie du Sud',
    'America/Paramaribo' => 'Amérique/Paramaribo',
    'America/Port_of_Spain' => 'Amérique/Port d\'Espagne',
    'America/Montevideo' => 'Amérique/Montevideo',
    'America/Caracas' => 'Amérique/Caracas',
);

$app_list_strings['eapm_list'] = array(
    'Sugar' => 'SuiteCRM',
    'WebEx' => 'WebEx',
    'GoToMeeting' => 'GoToMeeting',
    'IBMSmartCloud' => 'IBM SmartCloud',
    'Google' => 'Google',
    'Box' => 'Box.net',
    'Facebook' => 'Facebook',
    'Twitter' => 'Twitter',
);
$app_list_strings['eapm_list_import'] = array(
    'Google' => 'Contacts Google',
);
$app_list_strings['eapm_list_documents'] = array(
    'Google' => 'Google Drive',
);
$app_list_strings['token_status'] = array(
    1 => 'Demande',
    2 => 'Accès',
    3 => 'Invalide',
);

$app_list_strings ['emailTemplates_type_list'] = array(
    '' => '',
    'campaign' => 'Campagne',
    'email' => 'Email',
    'event' => 'Évènement',
);

$app_list_strings ['emailTemplates_type_list_campaigns'] = array(
    '' => '',
    'campaign' => 'Campagne',
);

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array(
    '' => '',
    'campaign' => 'Campagne',
    'email' => 'Email',
    'event' => 'Evènement',
    'system' => 'Système',
);

// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'Base de Connaissances';
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'Catégories Base de Connaissances';
$app_list_strings['aok_status_list']['Draft'] = 'Brouillon';
$app_list_strings['aok_status_list']['Expired'] = 'Expiré';
$app_list_strings['aok_status_list']['In_Review'] = 'En Revue';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = 'Privée';
$app_list_strings['aok_status_list']['published_public'] = 'Public';

$app_list_strings['moduleList']['FP_events'] = 'Événements';
$app_list_strings['moduleList']['FP_Event_Locations'] = 'Emplacements';

//events
$app_list_strings['fp_event_invite_status_dom']['Invited'] = 'Invité';
$app_list_strings['fp_event_invite_status_dom']['Not Invited'] = 'Non Invité';
$app_list_strings['fp_event_invite_status_dom']['Attended'] = 'Présent';
$app_list_strings['fp_event_invite_status_dom']['Not Attended'] = 'Non Présent';
$app_list_strings['fp_event_status_dom']['Accepted'] = 'Accepté';
$app_list_strings['fp_event_status_dom']['Declined'] = 'Refusé';
$app_list_strings['fp_event_status_dom']['No Response'] = 'Pas de réponse';

$app_strings['LBL_STATUS_EVENT'] = 'Statut Invitation';
$app_strings['LBL_ACCEPT_STATUS'] = 'Statut Acceptation';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = 'Sélectionnez cette Page';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = 'Sélectionner tout';
$app_strings['LBL_LISTVIEW_NONE'] = 'Désélectionner tout';

$app_list_strings['moduleList']['AOP_Case_Events'] = 'Événements Ticket';
$app_list_strings['moduleList']['AOP_Case_Updates'] = 'Mises à jour Ticket';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '=== Veuillez répondre au-dessus de cette ligne ===';

//aop
$app_list_strings['case_state_default_key'] = 'Ouvrir';
$app_list_strings['case_state_dom'] =
    array(
        'Open' => 'Ouvrir',
        'Closed' => 'Fermé',
    );
$app_list_strings['case_status_default_key'] = 'Ouvrir_Nouveau';
$app_list_strings['case_status_dom'] =
    array(
        'Open_New' => 'Nouveau',
        'Open_Assigned' => 'Assigné',
        'Closed_Closed' => 'Fermé',
        'Open_Pending Input' => 'Entrée en attente',
        'Closed_Rejected' => 'Rejeté',
        'Closed_Duplicate' => 'Doublon',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array(
        'Single' => 'Utilisateur unique',
        'Account' => 'Compte utilisateur',
    );
$app_list_strings['dom_email_distribution_for_auto_create'] = array(
    'AOPDefault' => 'Utiliser AOP par défaut',
    'singleUser' => 'Utilisateur unique',
    'roundRobin' => 'Round-Robin',
    'leastBusy' => 'Moins-chargé',
    'random' => 'Aléatoire',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = 'Rapports';
$app_list_strings['moduleList']['AOR_Conditions'] = 'Conditions Rapport';
$app_list_strings['moduleList']['AOR_Charts'] = 'Graphiques Rapport';
$app_list_strings['moduleList']['AOR_Fields'] = 'Champs Rapport';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'Rapports Planifiés';
$app_list_strings['aor_operator_list']['Equal_To'] = 'Égal À';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'Différent De';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'Supérieur À';
$app_list_strings['aor_operator_list']['Less_Than'] = 'Inférieur À';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'Supérieur ou Égal À';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'Inférieur ou Égal À';
$app_list_strings['aor_operator_list']['Contains'] = 'Contient';
$app_list_strings['aor_operator_list']['Starts_With'] = 'Commence Par';
$app_list_strings['aor_operator_list']['Ends_With'] = 'Termine Avec';
$app_list_strings['aor_format_options'][''] = '';
$app_list_strings['aor_format_options']['Y-m-d'] = 'A-m-j';
$app_list_strings['aor_format_options']['m-d-Y'] = 'm-j-A';
$app_list_strings['aor_format_options']['d-m-Y'] = 'j-m-A';
$app_list_strings['aor_format_options']['Y/m/d'] = 'A/m/j';
$app_list_strings['aor_format_options']['m/d/Y'] = 'm/j/A';
$app_list_strings['aor_format_options']['d/m/Y'] = 'j/m/A';
$app_list_strings['aor_format_options']['Y.m.d'] = 'A.m.j';
$app_list_strings['aor_format_options']['m.d.Y'] = 'm.j.A';
$app_list_strings['aor_format_options']['d.m.Y'] = 'j.m.A';
$app_list_strings['aor_format_options']['Ymd'] = 'Amj';
$app_list_strings['aor_format_options']['Y-m'] = 'A-m';
$app_list_strings['aor_format_options']['Y'] = 'A';
$app_list_strings['aor_condition_operator_list']['And'] = 'Et';
$app_list_strings['aor_condition_operator_list']['OR'] = 'OU';
$app_list_strings['aor_condition_type_list']['Value'] = 'Valeur';
$app_list_strings['aor_condition_type_list']['Field'] = 'Champ';
$app_list_strings['aor_condition_type_list']['Date'] = 'Date';
$app_list_strings['aor_condition_type_list']['Multi'] = 'Un sur';
$app_list_strings['aor_condition_type_list']['Period'] = 'Période';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'Utilisateur Actuel';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'Minutes';
$app_list_strings['aor_date_type_list']['hour'] = 'Heure';
$app_list_strings['aor_date_type_list']['day'] = 'Jours';
$app_list_strings['aor_date_type_list']['week'] = 'Semaine(s)';
$app_list_strings['aor_date_type_list']['month'] = 'Mois';
$app_list_strings['aor_date_type_list']['business_hours'] = 'Heures de Travail';
$app_list_strings['aor_date_options']['now'] = 'Maintenant';
$app_list_strings['aor_date_options']['field'] = 'Ce champ';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = 'Croissant';
$app_list_strings['aor_sort_operator']['DESC'] = 'Décroissant';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = 'Décompte';
$app_list_strings['aor_function_list']['MIN'] = 'Minimum';
$app_list_strings['aor_function_list']['MAX'] = 'Maximum';
$app_list_strings['aor_function_list']['SUM'] = 'Total';
$app_list_strings['aor_function_list']['AVG'] = 'Moyenne';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = 'Décompte';
$app_list_strings['aor_total_options']['SUM'] = 'Somme';
$app_list_strings['aor_total_options']['AVG'] = 'Moyenne';
$app_list_strings['aor_chart_types']['bar'] = 'Histogramme';
$app_list_strings['aor_chart_types']['line'] = 'Graphique Courbe';
$app_list_strings['aor_chart_types']['pie'] = 'Graphique Camembert';
$app_list_strings['aor_chart_types']['radar'] = 'Graphique Radar';
$app_list_strings['aor_chart_types']['stacked_bar'] = 'Barres Empilées';
$app_list_strings['aor_chart_types']['grouped_bar'] = 'Barres Groupées';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'Mensuel';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'Hebdomadaire';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'Quotidien';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'Actif';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'Inactif';
$app_list_strings['aor_email_type_list']['Email Address'] = 'Email';
$app_list_strings['aor_email_type_list']['Specify User'] = 'Utilisateur';
$app_list_strings['aor_email_type_list']['Users'] = 'Utilisateurs';
$app_list_strings['aor_assign_options']['all'] = 'Tous les Utilisateurs';
$app_list_strings['aor_assign_options']['role'] = 'Tous les Utilisateurs dane le Rôle';
$app_list_strings['aor_assign_options']['security_group'] = 'Tous les Utilisateurs du Groupe de Sécurité';
$app_list_strings['date_time_period_list']['today'] = 'Aujourd’hui';
$app_list_strings['date_time_period_list']['yesterday'] = 'Hier';
$app_list_strings['date_time_period_list']['this_week'] = 'Cette Semaine';
$app_list_strings['date_time_period_list']['last_week'] = 'Dernière Semaine';
$app_list_strings['date_time_period_list']['last_month'] = 'Mois Dernier';
$app_list_strings['date_time_period_list']['this_month'] = 'Ce Mois-ci';
$app_list_strings['date_time_period_list']['this_quarter'] = 'Ce Trimestre';
$app_list_strings['date_time_period_list']['last_quarter'] = 'Trimestre Dernier';
$app_list_strings['date_time_period_list']['this_year'] = 'Cette Année';
$app_list_strings['date_time_period_list']['last_year'] = 'Année Dernière';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = 'le';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = 'le';
$app_strings['LBL_CRON_AT'] = 'à';
$app_strings['LBL_CRON_RAW'] = 'Avancé';
$app_strings['LBL_CRON_MIN'] = 'Min';
$app_strings['LBL_CRON_HOUR'] = 'Heure';
$app_strings['LBL_CRON_DAY'] = 'Jour';
$app_strings['LBL_CRON_MONTH'] = 'Mois';
$app_strings['LBL_CRON_DOW'] = 'Jour de la semaine';
$app_strings['LBL_CRON_DAILY'] = 'Quotidien';
$app_strings['LBL_CRON_WEEKLY'] = 'Hebdomadaire';
$app_strings['LBL_CRON_MONTHLY'] = 'Mensuel';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = 'Contrats';
$app_list_strings['moduleList']['AOS_Invoices'] = 'Factures';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'PDF - Modèles';
$app_list_strings['moduleList']['AOS_Product_Categories'] = 'Produits - Catégories';
$app_list_strings['moduleList']['AOS_Products'] = 'Produits';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'Ligne Produits';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'Groupes Ligne produit';
$app_list_strings['moduleList']['AOS_Quotes'] = 'Devis';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'Analyste';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'Compétiteur';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'Client';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'Intégrateur';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'Investisseur';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'Partenaire';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'Presse';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'Prospect';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'Revendeur';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'Autre';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'Brouillon';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'Négociation';
$app_list_strings['quote_stage_dom']['Delivered'] = 'Livré';
$app_list_strings['quote_stage_dom']['On Hold'] = 'En attente';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'Confirmé';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'Fermé Accepté';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'Fermé Perdu';
$app_list_strings['quote_stage_dom']['Closed Dead'] = 'Fermé Abandonné';
$app_list_strings['quote_term_dom']['Net 15'] = 'Net 15 jours';
$app_list_strings['quote_term_dom']['Net 30'] = 'Net 30 jours';
$app_list_strings['quote_term_dom'][''] = '';
$app_list_strings['approval_status_dom']['Approved'] = 'Approuvé';
$app_list_strings['approval_status_dom']['Not Approved'] = 'Non Approuvé';
$app_list_strings['approval_status_dom'][''] = '';
$app_list_strings['vat_list']['0.0'] = '0%';
$app_list_strings['vat_list']['5.0'] = '5%';
$app_list_strings['vat_list']['7.5'] = '7,5%';
$app_list_strings['vat_list']['17.5'] = '17,5%';
$app_list_strings['vat_list']['20.0'] = '20%';
$app_list_strings['discount_list']['Percentage'] = 'Pourcent';
$app_list_strings['discount_list']['Amount'] = 'Montant';
$app_list_strings['aos_invoices_type_dom'][''] = '';
$app_list_strings['aos_invoices_type_dom']['Analyst'] = 'Analyste';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = 'Compétiteur';
$app_list_strings['aos_invoices_type_dom']['Customer'] = 'Client';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'Intégrateur';
$app_list_strings['aos_invoices_type_dom']['Investor'] = 'Investisseur';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'Partenaire';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'Presse';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'Prospect';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'Revendeur';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'Autre';
$app_list_strings['invoice_status_dom']['Paid'] = 'Payé';
$app_list_strings['invoice_status_dom']['Unpaid'] = 'Non payé';
$app_list_strings['invoice_status_dom']['Cancelled'] = 'Annulé';
$app_list_strings['invoice_status_dom'][''] = '';
$app_list_strings['quote_invoice_status_dom']['Not Invoiced'] = 'Non Facturé';
$app_list_strings['quote_invoice_status_dom']['Invoiced'] = 'Facturé';
$app_list_strings['product_code_dom']['XXXX'] = 'XXXX';
$app_list_strings['product_code_dom']['YYYY'] = 'YYYY';
$app_list_strings['product_category_dom']['Laptops'] = 'Ordinateurs portables';
$app_list_strings['product_category_dom']['Desktops'] = 'Ordinateurs de bureau';
$app_list_strings['product_category_dom'][''] = '';
$app_list_strings['product_type_dom']['Good'] = 'Produit';
$app_list_strings['product_type_dom']['Service'] = 'Service';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'Devis';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'Factures';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'Contrats';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'Devis';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'Factures';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'Contrats';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'Comptes';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'Contacts';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'Prospects';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'Pas commencé';
$app_list_strings['contract_status_list']['In Progress'] = 'En cours';
$app_list_strings['contract_status_list']['Signed'] = 'Signé';
$app_list_strings['contract_type_list']['Type'] = 'Type';
$app_strings['LBL_PRINT_AS_PDF'] = 'Imprimer en PDF';
$app_strings['LBL_SELECT_TEMPLATE'] = 'Sélectionner Modèle';
$app_strings['LBL_NO_TEMPLATE'] = 'ERREUR\nAucun Modèle trouvé\nVeuillez aller à la section Modèles PDF et créez en un';

//aow
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'WorkFlow';
$app_list_strings['moduleList']['AOW_Conditions'] = 'Critères WorkFlow';
$app_list_strings['moduleList']['AOW_Processed'] = 'Analyse du processus';
$app_list_strings['moduleList']['AOW_Actions'] = 'Actions WorkFlow';
$app_list_strings['aow_status_list']['Active'] = 'Actif';
$app_list_strings['aow_status_list']['Inactive'] = 'Inactif';
$app_list_strings['aow_operator_list']['Equal_To'] = 'Égal À';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'Différent De';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'Supérieur À';
$app_list_strings['aow_operator_list']['Less_Than'] = 'Inférieur À';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'Supérieur ou Égal À';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'Inférieur ou Égal À';
$app_list_strings['aow_operator_list']['Contains'] = 'Contient';
$app_list_strings['aow_operator_list']['Starts_With'] = 'Commence Par';
$app_list_strings['aow_operator_list']['Ends_With'] = 'Termine Avec';
$app_list_strings['aow_operator_list']['is_null'] = 'Est Null';
$app_list_strings['aow_process_status_list']['Complete'] = 'Terminé';
$app_list_strings['aow_process_status_list']['Running'] = 'Exécution En cours';
$app_list_strings['aow_process_status_list']['Pending'] = 'En attente';
$app_list_strings['aow_process_status_list']['Failed'] = 'Échec';
$app_list_strings['aow_condition_operator_list']['And'] = 'Et';
$app_list_strings['aow_condition_operator_list']['OR'] = 'OU';
$app_list_strings['aow_condition_type_list']['Value'] = 'Valeur';
$app_list_strings['aow_condition_type_list']['Field'] = 'Champ';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'Tout Changement';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'Dans Groupe de Sécurité';
$app_list_strings['aow_condition_type_list']['Date'] = 'Date';
$app_list_strings['aow_condition_type_list']['Multi'] = 'Un sur';
$app_list_strings['aow_action_type_list']['Value'] = 'Valeur';
$app_list_strings['aow_action_type_list']['Field'] = 'Champ';
$app_list_strings['aow_action_type_list']['Date'] = 'Date';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'Round-Robin';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'Moins-Chargé';
$app_list_strings['aow_action_type_list']['Random'] = 'Aléatoire';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'Valeur';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'Champ';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'Minutes';
$app_list_strings['aow_date_type_list']['hour'] = 'Heure';
$app_list_strings['aow_date_type_list']['day'] = 'Jours';
$app_list_strings['aow_date_type_list']['week'] = 'Semaine(s)';
$app_list_strings['aow_date_type_list']['month'] = 'Mois';
$app_list_strings['aow_date_type_list']['business_hours'] = 'Heures de Travail';
$app_list_strings['aow_date_options']['now'] = 'Maintenant';
$app_list_strings['aow_date_options']['today'] = 'Aujourd’hui';
$app_list_strings['aow_date_options']['field'] = 'Ce champ';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'Tous les Utilisateurs';
$app_list_strings['aow_assign_options']['role'] = 'Tous les Utilisateurs dane le Rôle';
$app_list_strings['aow_assign_options']['security_group'] = 'Tous les Utilisateurs du Groupe de Sécurité';
$app_list_strings['aow_email_type_list']['Email Address'] = 'Email';
$app_list_strings['aow_email_type_list']['Record Email'] = 'Enregistrer l\'email';
$app_list_strings['aow_email_type_list']['Related Field'] = 'Champ lié';
$app_list_strings['aow_email_type_list']['Specify User'] = 'Utilisateur';
$app_list_strings['aow_email_type_list']['Users'] = 'Utilisateurs';
$app_list_strings['aow_email_to_list']['to'] = 'À';
$app_list_strings['aow_email_to_list']['cc'] = 'Cc';
$app_list_strings['aow_email_to_list']['bcc'] = 'Cci';
$app_list_strings['aow_run_on_list']['All_Records'] = 'Tous les Enregistrements';
$app_list_strings['aow_run_on_list']['New_Records'] = 'Nouveaux Enregistrements';
$app_list_strings['aow_run_on_list']['Modified_Records'] = 'Enregistrements Modifiés';
$app_list_strings['aow_run_when_list']['Always'] = 'Toujours';
$app_list_strings['aow_run_when_list']['On_Save'] = 'Seulement lors de l\'Enregistrement';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = 'Seulement dans le Planificateur';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = 'Projets - Modèles';
$app_list_strings['moduleList']['AM_TaskTemplates'] = 'Modèles Tâche Projet';
$app_list_strings['relationship_type_list']['FS'] = 'Fin à Début';
$app_list_strings['relationship_type_list']['SS'] = 'Début à Début';
$app_list_strings['duration_unit_dom']['Days'] = 'Jours';
$app_list_strings['duration_unit_dom']['Hours'] = 'Heure';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'Voir Gantt';
$app_strings['LBL_DETAIL_BUTTON_LABEL'] = 'Voir Détail';
$app_strings['LBL_CREATE_PROJECT'] = 'Créer Projet';

//gmaps
$app_strings['LBL_MAP'] = 'Carte';

$app_strings['LBL_JJWG_MAPS_LNG'] = 'Longitude';
$app_strings['LBL_JJWG_MAPS_LAT'] = 'Latitude';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'Status Géocode';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = 'Adresse';

$app_list_strings['moduleList']['jjwg_Maps'] = 'Cartes';
$app_list_strings['moduleList']['jjwg_Markers'] = 'Cartes - Marqueurs';
$app_list_strings['moduleList']['jjwg_Areas'] = 'Cartes - Zones';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = 'Cartes - Cache Adresses';

$app_list_strings['moduleList']['jjwp_Partners'] = 'Partenaires JJWP';

$app_list_strings['map_unit_type_list']['mi'] = 'Miles';
$app_list_strings['map_unit_type_list']['km'] = 'Kilomètres';

$app_list_strings['map_module_type_list']['Accounts'] = 'Comptes';
$app_list_strings['map_module_type_list']['Contacts'] = 'Contacts';
$app_list_strings['map_module_type_list']['Cases'] = 'Tickets';
$app_list_strings['map_module_type_list']['Leads'] = 'Prospects';
$app_list_strings['map_module_type_list']['Meetings'] = 'Réunions';
$app_list_strings['map_module_type_list']['Opportunities'] = 'Opportunités';
$app_list_strings['map_module_type_list']['Project'] = 'Projets';
$app_list_strings['map_module_type_list']['Prospects'] = 'Cibles';

$app_list_strings['map_relate_type_list']['Accounts'] = 'Compte';
$app_list_strings['map_relate_type_list']['Contacts'] = 'Contacts';
$app_list_strings['map_relate_type_list']['Cases'] = 'Ticket';
$app_list_strings['map_relate_type_list']['Leads'] = 'Prospect';
$app_list_strings['map_relate_type_list']['Meetings'] = 'Réunion';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'Opportunité';
$app_list_strings['map_relate_type_list']['Project'] = 'Projet';
$app_list_strings['map_relate_type_list']['Prospects'] = 'Cible';

$app_list_strings['marker_image_list']['accident'] = 'Accident';
$app_list_strings['marker_image_list']['administration'] = 'Administration';
$app_list_strings['marker_image_list']['agriculture'] = 'Agriculture';
$app_list_strings['marker_image_list']['aircraft_small'] = 'Petit Avion';
$app_list_strings['marker_image_list']['airplane_tourism'] = 'Avion Tourisme';
$app_list_strings['marker_image_list']['airport'] = 'Aéroport';
$app_list_strings['marker_image_list']['amphitheater'] = 'Amphithéâtre';
$app_list_strings['marker_image_list']['apartment'] = 'Appartement';
$app_list_strings['marker_image_list']['aquarium'] = 'Aquarium';
$app_list_strings['marker_image_list']['arch'] = 'Arche';
$app_list_strings['marker_image_list']['atm'] = 'DAB';
$app_list_strings['marker_image_list']['audio'] = 'Audio';
$app_list_strings['marker_image_list']['bank'] = 'Banque';
$app_list_strings['marker_image_list']['bank_euro'] = 'Banque Euro';
$app_list_strings['marker_image_list']['bank_pound'] = 'Banque Livre';
$app_list_strings['marker_image_list']['bar'] = 'Barre';
$app_list_strings['marker_image_list']['beach'] = 'Plage';
$app_list_strings['marker_image_list']['beautiful'] = 'Belle';
$app_list_strings['marker_image_list']['bicycle_parking'] = 'Stationnement Vélos';
$app_list_strings['marker_image_list']['big_city'] = 'Grande Ville';
$app_list_strings['marker_image_list']['bridge'] = 'Pont';
$app_list_strings['marker_image_list']['bridge_modern'] = 'Pont Moderne';
$app_list_strings['marker_image_list']['bus'] = 'Bus';
$app_list_strings['marker_image_list']['cable_car'] = 'Téléphérique';
$app_list_strings['marker_image_list']['car'] = 'Voiture';
$app_list_strings['marker_image_list']['car_rental'] = 'Location Voiture';
$app_list_strings['marker_image_list']['carrepair'] = 'Garage';
$app_list_strings['marker_image_list']['castle'] = 'Château';
$app_list_strings['marker_image_list']['cathedral'] = 'Cathédrale';
$app_list_strings['marker_image_list']['chapel'] = 'Chapelle';
$app_list_strings['marker_image_list']['church'] = 'Église';
$app_list_strings['marker_image_list']['city_square'] = 'Place Ville';
$app_list_strings['marker_image_list']['cluster'] = 'Grappe';
$app_list_strings['marker_image_list']['cluster_2'] = 'Grappe 2';
$app_list_strings['marker_image_list']['cluster_3'] = 'Grappe 3';
$app_list_strings['marker_image_list']['cluster_4'] = 'Grappe 4';
$app_list_strings['marker_image_list']['cluster_5'] = 'Grappe 5';
$app_list_strings['marker_image_list']['coffee'] = 'Café';
$app_list_strings['marker_image_list']['community_centre'] = 'Centre Communautaire';
$app_list_strings['marker_image_list']['company'] = 'Compagnie';
$app_list_strings['marker_image_list']['conference'] = 'Conférence';
$app_list_strings['marker_image_list']['construction'] = 'Construction';
$app_list_strings['marker_image_list']['convenience'] = 'Magasin';
$app_list_strings['marker_image_list']['court'] = 'Cour';
$app_list_strings['marker_image_list']['cruise'] = 'Croisière';
$app_list_strings['marker_image_list']['currency_exchange'] = 'Bureau de Change';
$app_list_strings['marker_image_list']['customs'] = 'Douanes';
$app_list_strings['marker_image_list']['cycling'] = 'Cyclisme';
$app_list_strings['marker_image_list']['dam'] = 'Barrage';
$app_list_strings['marker_image_list']['dentist'] = 'Dentiste';
$app_list_strings['marker_image_list']['deptartment_store'] = 'Grand Magasin';
$app_list_strings['marker_image_list']['disability'] = 'Handicap';
$app_list_strings['marker_image_list']['disabled_parking'] = 'Parking Handicapé';
$app_list_strings['marker_image_list']['doctor'] = 'Médecin';
$app_list_strings['marker_image_list']['dog_leash'] = 'Laisse Chien';
$app_list_strings['marker_image_list']['down'] = 'Vers le bas';
$app_list_strings['marker_image_list']['down_left'] = 'Bas gauche';
$app_list_strings['marker_image_list']['down_right'] = 'Bas droite';
$app_list_strings['marker_image_list']['down_then_left'] = 'Vers le bas puis gauche';
$app_list_strings['marker_image_list']['down_then_right'] = 'Vers le bas puis à droite';
$app_list_strings['marker_image_list']['drugs'] = 'Médicaments';
$app_list_strings['marker_image_list']['elevator'] = 'Ascenseur';
$app_list_strings['marker_image_list']['embassy'] = 'Ambassade';
$app_list_strings['marker_image_list']['expert'] = 'Expert';
$app_list_strings['marker_image_list']['factory'] = 'Usine';
$app_list_strings['marker_image_list']['falling_rocks'] = 'Chutes de pierres';
$app_list_strings['marker_image_list']['fast_food'] = 'Restauration rapide';
$app_list_strings['marker_image_list']['festival'] = 'Festival';
$app_list_strings['marker_image_list']['fjord'] = 'Fjord';
$app_list_strings['marker_image_list']['forest'] = 'Forêt';
$app_list_strings['marker_image_list']['fountain'] = 'Fontaine';
$app_list_strings['marker_image_list']['friday'] = 'Vendredi';
$app_list_strings['marker_image_list']['garden'] = 'Jardin';
$app_list_strings['marker_image_list']['gas_station'] = 'Pompe à essence';
$app_list_strings['marker_image_list']['geyser'] = 'Geyser';
$app_list_strings['marker_image_list']['gifts'] = 'Cadeaux';
$app_list_strings['marker_image_list']['gourmet'] = 'Gourmet';
$app_list_strings['marker_image_list']['grocery'] = 'Épicerie';
$app_list_strings['marker_image_list']['hairsalon'] = 'Salon de coiffure';
$app_list_strings['marker_image_list']['helicopter'] = 'Hélicoptère';
$app_list_strings['marker_image_list']['highway'] = 'Autoroute';
$app_list_strings['marker_image_list']['historical_quarter'] = 'Quartier Historique';
$app_list_strings['marker_image_list']['home'] = 'Accueil';
$app_list_strings['marker_image_list']['hospital'] = 'Hôpital';
$app_list_strings['marker_image_list']['hostel'] = 'Hôtel';
$app_list_strings['marker_image_list']['hotel'] = 'Hôtel';
$app_list_strings['marker_image_list']['hotel_1_star'] = 'Hôtel 1 étoile';
$app_list_strings['marker_image_list']['hotel_2_stars'] = 'Hôtel 2 étoiles';
$app_list_strings['marker_image_list']['hotel_3_stars'] = 'Hôtel 3 étoiles';
$app_list_strings['marker_image_list']['hotel_4_stars'] = 'Hôtel 4 étoiles';
$app_list_strings['marker_image_list']['hotel_5_stars'] = 'Hôtel 5 étoiles';
$app_list_strings['marker_image_list']['info'] = 'Info';
$app_list_strings['marker_image_list']['justice'] = 'Justice';
$app_list_strings['marker_image_list']['lake'] = 'Lac';
$app_list_strings['marker_image_list']['laundromat'] = 'Laverie automatique';
$app_list_strings['marker_image_list']['left'] = 'Gauche';
$app_list_strings['marker_image_list']['left_then_down'] = 'Gauche puis Bas';
$app_list_strings['marker_image_list']['left_then_up'] = 'Gauche puis Haut';
$app_list_strings['marker_image_list']['library'] = 'Librairie';
$app_list_strings['marker_image_list']['lighthouse'] = 'Phare';
$app_list_strings['marker_image_list']['liquor'] = 'Alcool';
$app_list_strings['marker_image_list']['lock'] = 'Serrure';
$app_list_strings['marker_image_list']['main_road'] = 'Route principale';
$app_list_strings['marker_image_list']['massage'] = 'Massage';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = 'Antenne Relais Mobile';
$app_list_strings['marker_image_list']['modern_tower'] = 'Tour moderne';
$app_list_strings['marker_image_list']['monastery'] = 'Monastère';
$app_list_strings['marker_image_list']['monday'] = 'Lundi';
$app_list_strings['marker_image_list']['monument'] = 'Monument';
$app_list_strings['marker_image_list']['mosque'] = 'Mosquée';
$app_list_strings['marker_image_list']['motorcycle'] = 'Moto';
$app_list_strings['marker_image_list']['museum'] = 'Musée';
$app_list_strings['marker_image_list']['music_live'] = 'Concert Live';
$app_list_strings['marker_image_list']['oil_pump_jack'] = 'Chevalet de pompage';
$app_list_strings['marker_image_list']['pagoda'] = 'Pagode';
$app_list_strings['marker_image_list']['palace'] = 'Palais';
$app_list_strings['marker_image_list']['panoramic'] = 'Panoramique';
$app_list_strings['marker_image_list']['park'] = 'Parc';
$app_list_strings['marker_image_list']['park_and_ride'] = 'Parc relais';
$app_list_strings['marker_image_list']['parking'] = 'Stationnement';
$app_list_strings['marker_image_list']['photo'] = 'Photo';
$app_list_strings['marker_image_list']['picnic'] = 'Pic-Nic';
$app_list_strings['marker_image_list']['places_unvisited'] = 'Endroits inconnus';
$app_list_strings['marker_image_list']['places_visited'] = 'Endroits visités';
$app_list_strings['marker_image_list']['playground'] = 'Terrain de jeux';
$app_list_strings['marker_image_list']['police'] = 'Police';
$app_list_strings['marker_image_list']['port'] = 'Port';
$app_list_strings['marker_image_list']['postal'] = 'Boîte aux lettres';
$app_list_strings['marker_image_list']['power_line_pole'] = 'Poteau électrique';
$app_list_strings['marker_image_list']['power_plant'] = 'Centrale électrique';
$app_list_strings['marker_image_list']['power_substation'] = 'Poste électrique';
$app_list_strings['marker_image_list']['public_art'] = 'Art public';
$app_list_strings['marker_image_list']['rain'] = 'Pluie';
$app_list_strings['marker_image_list']['real_estate'] = 'Immobilier';
$app_list_strings['marker_image_list']['regroup'] = 'Regroupement';
$app_list_strings['marker_image_list']['resort'] = 'Station';
$app_list_strings['marker_image_list']['restaurant'] = 'Restaurant';
$app_list_strings['marker_image_list']['restaurant_african'] = 'Restaurant Africain';
$app_list_strings['marker_image_list']['restaurant_barbecue'] = 'Restaurant grill';
$app_list_strings['marker_image_list']['restaurant_buffet'] = 'Restaurant buffet';
$app_list_strings['marker_image_list']['restaurant_chinese'] = 'Restaurant Chinois';
$app_list_strings['marker_image_list']['restaurant_fish'] = 'Restaurant de poisson';
$app_list_strings['marker_image_list']['restaurant_fish_chips'] = 'Restaurant Fish and Chips';
$app_list_strings['marker_image_list']['restaurant_gourmet'] = 'Restaurant gastronomique';
$app_list_strings['marker_image_list']['restaurant_greek'] = 'Restaurant grec';
$app_list_strings['marker_image_list']['restaurant_indian'] = 'Restaurant indien';
$app_list_strings['marker_image_list']['restaurant_italian'] = 'Restaurant italien';
$app_list_strings['marker_image_list']['restaurant_japanese'] = 'Restaurant japonais';
$app_list_strings['marker_image_list']['restaurant_kebab'] = 'Kebab';
$app_list_strings['marker_image_list']['restaurant_korean'] = 'Restaurant coréen';
$app_list_strings['marker_image_list']['restaurant_mediterranean'] = 'Restaurant méditerranéen';
$app_list_strings['marker_image_list']['restaurant_mexican'] = 'Restaurant mexicain';
$app_list_strings['marker_image_list']['restaurant_romantic'] = 'Restaurant romantique';
$app_list_strings['marker_image_list']['restaurant_thai'] = 'Restaurant thai';
$app_list_strings['marker_image_list']['restaurant_turkish'] = 'Restaurant turc';
$app_list_strings['marker_image_list']['right'] = 'Droite';
$app_list_strings['marker_image_list']['right_then_down'] = 'Droite puis vers le bas';
$app_list_strings['marker_image_list']['right_then_up'] = 'Droite puis vers le haut';
$app_list_strings['marker_image_list']['saturday'] = 'Samedi';
$app_list_strings['marker_image_list']['school'] = 'Ecole';
$app_list_strings['marker_image_list']['shopping_mall'] = 'Centre Commercial';
$app_list_strings['marker_image_list']['shore'] = 'Rivage';
$app_list_strings['marker_image_list']['sight'] = 'Vue';
$app_list_strings['marker_image_list']['small_city'] = 'Village';
$app_list_strings['marker_image_list']['snow'] = 'Neige';
$app_list_strings['marker_image_list']['spaceport'] = 'Base de lancement';
$app_list_strings['marker_image_list']['speed_100'] = 'Vitesse à 100';
$app_list_strings['marker_image_list']['speed_110'] = 'Vitesse à 110';
$app_list_strings['marker_image_list']['speed_120'] = 'Vitesse à 120';
$app_list_strings['marker_image_list']['speed_130'] = 'Vitesse à 130';
$app_list_strings['marker_image_list']['speed_20'] = 'Vitesse à 20';
$app_list_strings['marker_image_list']['speed_30'] = 'Vitesse à 30';
$app_list_strings['marker_image_list']['speed_40'] = 'Vitesse à 40';
$app_list_strings['marker_image_list']['speed_50'] = 'Vitesse à 50';
$app_list_strings['marker_image_list']['speed_60'] = 'Vitesse à 60';
$app_list_strings['marker_image_list']['speed_70'] = 'Vitesse à 70';
$app_list_strings['marker_image_list']['speed_80'] = 'Vitesse à 80';
$app_list_strings['marker_image_list']['speed_90'] = 'Vitesse à 90';
$app_list_strings['marker_image_list']['speed_hump'] = 'Ralentisseur';
$app_list_strings['marker_image_list']['stadium'] = 'Stade';
$app_list_strings['marker_image_list']['statue'] = 'Statue';
$app_list_strings['marker_image_list']['steam_train'] = 'Train à vapeur';
$app_list_strings['marker_image_list']['stop'] = 'Arrêt';
$app_list_strings['marker_image_list']['stoplight'] = 'Feu';
$app_list_strings['marker_image_list']['subway'] = 'Métro';
$app_list_strings['marker_image_list']['sun'] = 'Dim';
$app_list_strings['marker_image_list']['sunday'] = 'Dimanche';
$app_list_strings['marker_image_list']['supermarket'] = 'Supermarché';
$app_list_strings['marker_image_list']['synagogue'] = 'Synagogue';
$app_list_strings['marker_image_list']['tapas'] = 'Tapas';
$app_list_strings['marker_image_list']['taxi'] = 'Taxi';
$app_list_strings['marker_image_list']['taxiway'] = 'Voie réservée aux taxis';
$app_list_strings['marker_image_list']['teahouse'] = 'Salon de Thé';
$app_list_strings['marker_image_list']['telephone'] = 'Téléphone';
$app_list_strings['marker_image_list']['temple_hindu'] = 'Temple Hindou';
$app_list_strings['marker_image_list']['terrace'] = 'Terrasse';
$app_list_strings['marker_image_list']['text'] = 'Texte';
$app_list_strings['marker_image_list']['theater'] = 'Théâtre';
$app_list_strings['marker_image_list']['theme_park'] = 'Parc d\'Attractions';
$app_list_strings['marker_image_list']['thursday'] = 'Jeudi';
$app_list_strings['marker_image_list']['toilets'] = 'Toilettes';
$app_list_strings['marker_image_list']['toll_station'] = 'Péage';
$app_list_strings['marker_image_list']['tower'] = 'Tour';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'Caméra de surveillance routière';
$app_list_strings['marker_image_list']['train'] = 'Train';
$app_list_strings['marker_image_list']['tram'] = 'Tramway';
$app_list_strings['marker_image_list']['truck'] = 'Camion';
$app_list_strings['marker_image_list']['tuesday'] = 'Mardi';
$app_list_strings['marker_image_list']['tunnel'] = 'Tunnel';
$app_list_strings['marker_image_list']['turn_left'] = 'Tourner à Gauche';
$app_list_strings['marker_image_list']['turn_right'] = 'Tourner à Droite';
$app_list_strings['marker_image_list']['university'] = 'Université';
$app_list_strings['marker_image_list']['up'] = 'En haut';
$app_list_strings['marker_image_list']['up_left'] = 'Haut gauche';
$app_list_strings['marker_image_list']['up_right'] = 'Haut droit';
$app_list_strings['marker_image_list']['up_then_left'] = 'En haut et à gauche';
$app_list_strings['marker_image_list']['up_then_right'] = 'En haut et à droite';
$app_list_strings['marker_image_list']['vespa'] = 'Vespa';
$app_list_strings['marker_image_list']['video'] = 'Vidéo';
$app_list_strings['marker_image_list']['villa'] = 'Villa';
$app_list_strings['marker_image_list']['water'] = 'Eau';
$app_list_strings['marker_image_list']['waterfall'] = 'Chute d\'eau';
$app_list_strings['marker_image_list']['watermill'] = 'Moulin à Eau';
$app_list_strings['marker_image_list']['waterpark'] = 'Parc Aquatique';
$app_list_strings['marker_image_list']['watertower'] = 'Château d\'eau';
$app_list_strings['marker_image_list']['wednesday'] = 'Mercredi';
$app_list_strings['marker_image_list']['wifi'] = 'WiFi';
$app_list_strings['marker_image_list']['wind_turbine'] = 'Eolienne';
$app_list_strings['marker_image_list']['windmill'] = 'Moulin à vent';
$app_list_strings['marker_image_list']['winery'] = 'Chai';
$app_list_strings['marker_image_list']['work_office'] = 'Bureau';
$app_list_strings['marker_image_list']['world_heritage_site'] = 'Site du patrimoine mondial';
$app_list_strings['marker_image_list']['zoo'] = 'Zoo';

//Reschedule
$app_list_strings['call_reschedule_dom'][''] = '';
$app_list_strings['call_reschedule_dom']['Out of Office'] = 'Absent du bureau';
$app_list_strings['call_reschedule_dom']['In a Meeting'] = 'En Réunion';

$app_strings['LBL_RESCHEDULE_LABEL'] = 'Replanifier';
$app_strings['LBL_RESCHEDULE_TITLE'] = 'Merci de saisir les informations de la replanification';
$app_strings['LBL_RESCHEDULE_DATE'] = 'Date:';
$app_strings['LBL_RESCHEDULE_REASON'] = 'Motif:';
$app_strings['LBL_RESCHEDULE_ERROR1'] = 'Veuillez sélectionner une date valide';
$app_strings['LBL_RESCHEDULE_ERROR2'] = 'Merci de choisir la raison';

$app_strings['LBL_RESCHEDULE_PANEL'] = 'Replanifier';
$app_strings['LBL_RESCHEDULE_HISTORY'] = 'Historique des tentatives d\'appel';
$app_strings['LBL_RESCHEDULE_COUNT'] = 'Tentatives d\'appel';

//SecurityGroups
$app_list_strings['moduleList']['SecurityGroups'] = 'Gestion Suite de Sécurité';
$app_strings['LBL_SECURITYGROUP'] = 'Groupe de Sécurité';

$app_list_strings['moduleList']['OutboundEmailAccounts'] = 'Comptes Email Sortant';

//social
$app_strings['FACEBOOK_USER_C'] = 'Facebook';
$app_strings['TWITTER_USER_C'] = 'Twitter';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'Détails Flux Sociaux';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'Filtre';

$app_strings['LBL_COLLECTION_TYPE'] = 'Type';

$app_strings['LBL_ADD_TAB'] = 'Ajouter Onglet';
$app_strings['LBL_EDIT_TAB'] = 'Modifier Onglets';
$app_strings['LBL_SUITE_DASHBOARD'] = 'Tableau de bord SuiteCRM';
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = 'Nom Tableau de bord:';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = 'Nombre de Colonnes:';
$app_strings['LBL_DELETE_DASHBOARD1'] = 'Etes-vous sûr de vouloir effacer ce';
$app_strings['LBL_DELETE_DASHBOARD2'] = 'Tableau de bord ?';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = 'Ajouter une Page Tableau de bord';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = 'Supprimer la Page Tableau de bord en cours';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = 'Renommer la Page du Tableau de bord';
$app_strings['LBL_SUITE_DASHBOARD_ACTIONS'] = 'ACTIONS';

$app_list_strings['collection_temp_list'] = array(
    'Tasks' => 'Tâches',
    'Meetings' => 'Réunions',
    'Calls' => 'Appels',
    'Notes' => 'Notes',
    'Emails' => 'Emails'
);

$app_list_strings['moduleList']['TemplateEditor'] = 'Editeur de Modèles';
$app_strings['LBL_CONFIRM_CANCEL_INLINE_EDITING'] = "Vous avez cliqué en dehors du champ que vous modifier sans l’enregistrer. Cliquez sur ok si vous voulez perdre vos modifications, ou sur annuler si vous souhaitez continuer l’édition";
$app_strings['LBL_LOADING_ERROR_INLINE_EDITING'] = "Il y a eu une erreur lors du chargement du champ. Votre session a probablement expiré. Veuillez vous connecter à nouveau pour résoudre ce problème";

$app_list_strings['moduleList']['AOBH_BusinessHours'] = 'Heures de Travail';
$app_list_strings['business_hours_list']['0'] = '12:00';
$app_list_strings['business_hours_list']['1'] = '01:00';
$app_list_strings['business_hours_list']['2'] = '02:00';
$app_list_strings['business_hours_list']['3'] = '03:00';
$app_list_strings['business_hours_list']['4'] = '04:00';
$app_list_strings['business_hours_list']['5'] = '05:00';
$app_list_strings['business_hours_list']['6'] = '06:00';
$app_list_strings['business_hours_list']['7'] = '07:00';
$app_list_strings['business_hours_list']['8'] = '08:00';
$app_list_strings['business_hours_list']['9'] = '09:00';
$app_list_strings['business_hours_list']['10'] = '10:00';
$app_list_strings['business_hours_list']['11'] = '11:00';
$app_list_strings['business_hours_list']['12'] = '00:00';
$app_list_strings['business_hours_list']['13'] = '13:00';
$app_list_strings['business_hours_list']['14'] = '14:00';
$app_list_strings['business_hours_list']['15'] = '15:00';
$app_list_strings['business_hours_list']['16'] = '16:00';
$app_list_strings['business_hours_list']['17'] = '17:00';
$app_list_strings['business_hours_list']['18'] = '18:00';
$app_list_strings['business_hours_list']['19'] = '19:00';
$app_list_strings['business_hours_list']['20'] = '20:00';
$app_list_strings['business_hours_list']['21'] = '21:00';
$app_list_strings['business_hours_list']['22'] = '22:00';
$app_list_strings['business_hours_list']['23'] = '23:00';
$app_list_strings['day_list']['Monday'] = 'Lundi';
$app_list_strings['day_list']['Tuesday'] = 'Mardi';
$app_list_strings['day_list']['Wednesday'] = 'Mercredi';
$app_list_strings['day_list']['Thursday'] = 'Jeudi';
$app_list_strings['day_list']['Friday'] = 'Vendredi';
$app_list_strings['day_list']['Saturday'] = 'Samedi';
$app_list_strings['day_list']['Sunday'] = 'Dimanche';
$app_list_strings['pdf_page_size_dom']['A4'] = 'A4';
$app_list_strings['pdf_page_size_dom']['Letter'] = 'Lettre';
$app_list_strings['pdf_page_size_dom']['Legal'] = 'Légal';
$app_list_strings['pdf_orientation_dom']['Portrait'] = 'Portrait';
$app_list_strings['pdf_orientation_dom']['Landscape'] = 'Paysage';


$app_list_strings['moduleList']['SurveyResponses'] = 'Réponses Sondage';
$app_list_strings['moduleList']['Surveys'] = 'Sondages';
$app_list_strings['moduleList']['SurveyQuestionResponses'] = 'Réponses Question Sondage';
$app_list_strings['moduleList']['SurveyQuestions'] = 'Questions Sondage';
$app_list_strings['moduleList']['SurveyQuestionOptions'] = 'Options Question Sondage';
$app_list_strings['survey_status_list']['Draft'] = 'Brouillon';
$app_list_strings['survey_status_list']['Public'] = 'Public';
$app_list_strings['survey_status_list']['Closed'] = 'Fermé';
$app_list_strings['surveys_question_type']['Text'] = 'Texte';
$app_list_strings['surveys_question_type']['Textbox'] = 'TextBox';
$app_list_strings['surveys_question_type']['Checkbox'] = 'Case à Cocher';
$app_list_strings['surveys_question_type']['Radio'] = 'Radio';
$app_list_strings['surveys_question_type']['Dropdown'] = 'Liste Déroulante';
$app_list_strings['surveys_question_type']['Multiselect'] = 'Sélection Multiple';
$app_list_strings['surveys_question_type']['Matrix'] = 'Matrice';
$app_list_strings['surveys_question_type']['DateTime'] = 'Date Heure';
$app_list_strings['surveys_question_type']['Date'] = 'Date';
$app_list_strings['surveys_question_type']['Scale'] = 'Échelle';
$app_list_strings['surveys_question_type']['Rating'] = 'Évaluation';
$app_list_strings['surveys_matrix_options'][0] = 'Satisfait';
$app_list_strings['surveys_matrix_options'][1] = 'Neutre';
$app_list_strings['surveys_matrix_options'][2] = 'Insatisfait';

$app_strings['LBL_OPT_IN_PENDING_EMAIL_NOT_SENT'] = 'En attente de Confirmation Inscription, Confirmation Inscription n\'a pas été envoyée';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_FAILED'] = 'Envoi Email Confirmation Inscription a échoué';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_SENT'] = 'En attente de Confirmation Inscription, Confirmation Inscription envoyée';
$app_strings['LBL_OPT_IN'] = 'Inscrit';
$app_strings['LBL_OPT_IN_CONFIRMED'] = 'Inscription Confirmée';
$app_strings['LBL_OPT_IN_OPT_OUT'] = 'Désinscrit';
$app_strings['LBL_OPT_IN_INVALID'] = 'Invalide';

/** @see SugarEmailAddress */
$app_list_strings['email_settings_opt_in_dom'] = array(
    'not-opt-in' => 'Désactivé',
    'opt-in' => 'Inscription',
    'confirmed-opt-in' => 'Inscription Confirmée'
);

$app_list_strings['email_confirmed_opt_in_dom'] = array(
    'not-opt-in' => 'Pas Inscrit',
    'opt-in' => 'Inscription',
    'confirmed-opt-in' => 'Inscription Confirmée'
);

$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL'] = 'Email Confirmation Inscription a été ajouté à la file d’attente de messagerie pour %s adresses Email. ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_NOT_OPT_IN'] = 'Impossible d’envoyer des Emails à %s d\'adresse(s) Email, parce que l\'inscription n\'est pas confirmé. ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_MISSING_EMAIL_ADDRESS_ID'] = '%s d\'adresse Email sans id valide. ';

$app_strings['ERR_TWO_FACTOR_FAILED'] = 'Échec Authentification en deux étapes';
$app_strings['ERR_TWO_FACTOR_CODE_SENT'] = 'Code pour Authentification en deux étapes envoyé.';
$app_strings['ERR_TWO_FACTOR_CODE_FAILED'] = 'Code Authentification à deux facteurs n\'a pas pu être envoyé.';
$app_strings['LBL_THANKS_FOR_SUBMITTING'] = 'Merci pour votre intérêt.';

$app_strings['ERR_IP_CHANGE'] = 'Votre session a été interrompue en raison d\'un changement important de votre adresse IP';
$app_strings['ERR_RETURN'] = 'Retour Accueil';


$app_list_strings['oauth2_grant_type_dom'] = array(
    'password' => 'Attribution de Mot de passe',
    'client_credentials' => 'Identifiants Client',
    'implicit' => 'Implicite',
    'authorization_code' => 'Code Autorisation'
);

$app_list_strings['oauth2_duration_units'] = [
    'minute' => 'minutes',
    'hour' => 'heures',
    'day' => 'jours',
    'week' => 'semaines',
    'month' => 'mois',
];

$app_list_strings['search_controllers'] = [
    'Search' => 'Recherche (nouveau)',
    'UnifiedSearch' => 'Recherche unifiée globale (ancien)'
];


$app_strings['LBL_DEFAULT_API_ERROR_TITLE'] = 'Erreur API JSON';
$app_strings['LBL_DEFAULT_API_ERROR_DETAIL'] = 'Erreur API JSON.';
$app_strings['LBL_API_EXCEPTION_DETAIL'] = 'Version API: 8';
$app_strings['LBL_BAD_REQUEST_EXCEPTION_DETAIL'] = 'Veuillez vous assurer de remplir les champs requis';
$app_strings['LBL_EMPTY_BODY_EXCEPTION_DETAIL'] = 'API JSON s\'attend à ce que le corps de la requête soit JSON';
$app_strings['LBL_INVALID_JSON_API_REQUEST_EXCEPTION_DETAIL'] = 'Impossible de valider la demande de JSON API Payload';
$app_strings['LBL_INVALID_JSON_API_RESPONSE_EXCEPTION_DETAIL'] = 'Impossible de valider la réponse JSON API Payload';
$app_strings['LBL_MODULE_NOT_FOUND_EXCEPTION_DETAIL'] = 'API JSON ne peut pas trouver de ressource';
$app_strings['LBL_NOT_ACCEPTABLE_EXCEPTION_DETAIL'] = 'L\'API JSON s\'attend à ce que l\'en-tête "Accept" soit application/vnd.api+json';
$app_strings['LBL_UNSUPPORTED_MEDIA_TYPE_EXCEPTION_DETAIL'] = 'L\'API JSON s\'attend à ce que l\'en-tête "Content-Type" soit application/vnd.api+json';

$app_strings['MSG_BROWSER_NOTIFICATIONS_ENABLED'] = 'Notifications de bureau sont maintenant activées pour ce navigateur web.';
$app_strings['MSG_BROWSER_NOTIFICATIONS_DISABLED'] = 'Notifications de bureau sont désactivées pour ce navigateur web. Utilisez les préférences de votre navigateur afin de les réactiver.';
$app_strings['MSG_BROWSER_NOTIFICATIONS_UNSUPPORTED'] = 'Ce navigateur ne supporte pas les notifications de bureau.';

$app_strings['LBL_GOOGLE_SYNC_ERR'] = 'ERREUR - SuiteCRM / Google Sync';
$app_strings['LBL_THERE_WAS_AN_ERR'] = 'Une erreur s\'est produite : ';
$app_strings['LBL_CLICK_HERE'] = 'Cliquer ici';
$app_strings['LBL_TO_CONTINUE'] = ' pour continuer.';
$app_strings['LBL_OPT_OUT'] = 'Désinscription';
$app_strings['LBL_INVALID_EMAIL'] = 'Invalide';
$app_strings['LBL_PRIMARY'] = 'Principal';
$app_strings['LBL_EMAIL_ADDRESS'] = 'Adresse Email';

$app_strings['IMAP_HANDLER_ERROR'] = 'ERREUR : {error}; la clé était: "{key}".';
$app_strings['IMAP_HANDLER_SUCCESS'] = 'OK : réglages de test modifier en "{key}“';
$app_strings['IMAP_HANDLER_ERROR_INVALID_REQUEST'] = 'Requête non valide. Utilisez la valeur "{var}".';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN_BY_KEY'] = 'Une erreur inconnue s\'est produite, la clé "{key}" n\'a pas été enregistrée.';
$app_strings['IMAP_HANDLER_ERROR_NO_TEST_SET'] = 'Il n’existe pas de paramètres de test.';
$app_strings['IMAP_HANDLER_ERROR_NO_KEY'] = 'Clé introuvable.';
$app_strings['IMAP_HANDLER_ERROR_KEY_SAVE'] = 'Erreur d\'enregistrement de clé.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN'] = 'Erreur inconnue';
$app_strings['LBL_SEARCH_TITLE']                   = 'Recherche';
$app_strings['LBL_SEARCH_TEXT_FIELD_TITLE_ATTR']   = 'Critère de recherche';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_TITLE_ATTR'] = 'Recherche';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_VALUE']      = 'Recherche';
$app_strings['LBL_SEARCH_QUERY']                   = 'Requête de recherche : ';
$app_strings['LBL_SEARCH_RESULTS_PER_PAGE']        = 'Nombre de résultats par page : ';
$app_strings['LBL_SEARCH_ENGINE']                  = 'Moteur:';
$app_strings['LBL_SEARCH_TOTAL'] = 'Résultat(s) : ';
$app_strings['LBL_SEARCH_PREV'] = 'Précédent';
$app_strings['LBL_SEARCH_NEXT'] = 'Suivant';
$app_strings['LBL_SEARCH_PAGE'] = 'Page ';
$app_strings['LBL_SEARCH_OF'] = ' sur ';
$app_strings['LBL_INSIGHTS'] = 'Insights';
$app_strings['LBL_CHARTS'] = 'Graphiques';
$app_strings['LBL_CHART_NOT_FOUND'] = 'Graphique introuvable';
$app_strings['LBL_NO_DATA'] = 'Aucune donnée';
$app_strings['LBL_ERROR_FETCHING_METADATA'] = 'Une erreur s\'est produite lors de la récupération des métadonnées';
$app_strings['LBL_TOTAL'] = 'Total';
$app_strings['LBL_ACTIONS'] = 'Actions';
$app_strings['LBL_SELECT_SUBPANEL_BANNER'] = 'Sélectionnez les sous-panneaux à afficher';
$app_strings['LBL_SELECT_ITEM'] = 'Sélectionner un élément';
$app_strings['LBL_WIDGET_NOT_FOUND'] = 'Widget introuvable';
$app_strings['LBL_BAD_CONFIG'] = 'Configuration incorrecte';
$app_strings['LBL_CONFIG_BAD_CONTEXT'] = 'Configuration incorrecte : le contexte n\'est pas correctement configuré';
$app_strings['LBL_CONFIG_NO_CONFIG'] = 'Configuration incorrecte : configuration manquante';
$app_strings['LBL_CONFIG_NO_STATISTICS_KEY'] = 'Configuration incorrecte : clé de statistiques manquante';
$app_strings['LBL_STATISTIC_ERROR'] = 'Erreur lors du chargement des statistiques';
$app_strings['LBL_STATISTIC_ERROR_DESC'] = 'Erreur lors du chargement des statistiques';
$app_strings['LBL_STATISTIC_ERROR_DESC_TOOLTIP'] = 'Erreur lors du chargement des statistiques. Veuillez contacter votre administrateur';
$app_strings['LBL_AVERAGE_CLOSED_WON_PER_YEAR'] = 'Moyenne des affaires gagnées par an';
$app_strings['LBL_OPPORTUNITIES_TOTAL'] = 'Valeur totale de l\'affaire';
$app_strings['LBL_CASE_TOTAL_DAYS_OPEN'] = 'Nombre total de jours d\'ouverture';
$app_strings['LBL_DAYS_OPEN'] = 'Jours Ouverts';
$app_strings['LBL_DAYS_IN_SALE_STAGE'] = 'Cette affaire a été dans cette phase de vente pour';
$app_strings['LBL_STAT_DAYS'] = 'Jour(s)';
$app_strings['LBL_CLOSED_PER_YEAR'] = 'Fermé par an';
$app_strings['LBL_WAS_OPEN'] = 'Ce dossier était ouvert pour';
$app_strings['LBL_HAS_BEEN_OPEN'] = 'Ce dossier était ouvert pour';
$app_strings['LBL_NUMBER_OF_CASES_PER_ACCOUNT'] = 'Nombre de dossiers par compte';
$app_strings['LBL_TOTAL_CASES_FOR_THIS_ACCOUNT'] = 'Total des dossiers pour ce compte : ';
$app_strings['LBL_NONE_OUTSTANDING'] = 'Aucun';
$app_strings['LBL_VALIDATION_ERROR_REQUIRED'] = 'Champ obligatoire manquant : {{fields.field.label}}';
$app_strings['LBL_VALIDATION_ERROR_CURRENCY_FORMAT'] = "Format de devise invalide. Requis: '{{context.expected}}'";
$app_strings['LBL_VALIDATION_ERROR_INT_FORMAT'] = "Format d'entier non valide. Requis: '{{context.expected}}'";
$app_strings['LBL_VALIDATION_ERROR_FLOAT_FORMAT'] = "Format de float invalide. Requis : '{{context.expected}}'";
$app_strings['LBL_VALIDATION_ERROR_DATE_FORMAT'] = "Format de date invalide. Requis: '{{context.expected}}'";
$app_strings['LBL_VALIDATION_ERROR_DATETIME_FORMAT'] = "Format de date et heure invalide. Requis: '{{context.expected}}'";
$app_strings['LBL_VALIDATION_ERROR_EMAIL_FORMAT'] = "Format d'e-mail invalide. Requis: '{{context.expected}}'";
$app_strings['LBL_VALIDATION_ERROR_PHONE_FORMAT'] = "Format de téléphone invalide.";
$app_strings['LBL_VALIDATION_ERROR_MIN'] = "Valeur invalide. La valeur doit être supérieure ou égale à '{{context.min}}'";
$app_strings['LBL_VALIDATION_ERROR_MAX'] = "Valeur invalide. La valeur doit être inférieure ou égale à '{{context.max}}'";
$app_strings['LBL_MULTIPLE_PRIMARY_EMAIL_VALIDATION_ERROR'] = "Une seule adresse e-mail peut être marquée comme principale";
$app_strings['LBL_DUPLICATE_EMAIL_VALIDATION_ERROR'] = "Les doublons d'adresses électroniques ne sont pas autorisés";
$app_strings['LBL_NO_PRIMARY_EMAIL_VALIDATION_ERROR'] = "Une adresse e-mail doit être marquée comme principale";
$app_strings['LBL_VALIDATION_ERRORS'] = 'Il y a des erreurs de validation, impossible d\'effectuer l\'action.';
$app_strings['LBL_TYPE_TO_SEARCH'] = 'Tapez pour rechercher...';
$app_strings['LBL_SEARCHING'] = 'Recherche ...';
$app_strings['LBL_NOT_FOUND'] = 'Introuvable';
$app_strings['LBL_SEARCH_ERROR'] = 'Erreur de recherche.';
$app_strings['LBL_FOUND'] = 'Trouvé';
$app_strings['LBL_GET_RECORD_LIST_ERROR'] = 'Une erreur s\'est produite lors de la récupération des enregistrements';
$app_strings['LBL_NUMBER_OF_RECORDS'] = 'Le nombre d\'enregistrements';
$app_strings['LBL_FORWARD_SLASH'] = '/';
$app_strings['LBL_CASES_INSIGHT'] = ' {{fields.cases.value}} ( {{fields.default.value}} )';
$app_strings['LBL_INVOICES_INSIGHT'] = ' {{fields.invoices.value}} ( {{fields.default.value}} )';
$app_strings['LBL_CONTRACT_RENEWAL_TOOLTIP'] = 'Date du renouvellement du prochain contrat';
$app_strings['LBL_INVOICES_OVERDUE_TOOLTIP'] = 'Nombre total de factures en retard';
$app_strings['LBL_ACTIVITIES_NEXT_DATE_TOOLTIP'] = 'Date de la prochaine interaction';
$app_strings['LBL_CAMPAIGN_LAST_RECEIVED_TOOLTIP'] = 'Date de réception de la campagne la plus récente';
$app_strings['LBL_OPEN_CASES_COUNT_TOOLTIP'] = 'Nombre total de dossiers ouverts';
$app_strings['LBL_EVENTS_LAST_DATE_TOOLTIP'] = 'Date de l\'événement le plus récent';
$app_strings['LBL_HISTORY_LAST_DATE_TOOLTIP'] = 'Date de l\'interaction la plus récente';
$app_strings['LBL_OPPORTUNITIES_TOTAL_SUM_TOOLTIP'] = 'Somme totale des affaires';
$app_strings['LBL_QUOTES_EXPIRY_TOOLTIP'] = 'Date d\'expiration du devis suivant';
$app_strings['LBL_DEFAULT_TOTAL_TOOLTIP'] = 'Nombre total d\'enregistrements';
$app_strings['LBL_CONTRACT_RENEWAL'] = 'Date de renouvellement';
$app_strings['LBL_INVOICES_OVERDUE'] = 'Total d\'overdue';
$app_strings['LBL_ACTIVITIES_NEXT_DATE'] = 'Date de l\'activité suivante';
$app_strings['LBL_CAMPAIGN_LAST_RECEIVED'] = 'Dernière participation';
$app_strings['LBL_OPEN_CASES_COUNT'] = 'Dossiers ouverts';
$app_strings['LBL_EVENTS_LAST_DATE'] = 'Dernier événement auquel vous avez participé';
$app_strings['LBL_HISTORY_LAST_DATE'] = 'Dernier point de contact';
$app_strings['LBL_OPPORTUNITIES_TOTAL_SUM'] = 'Valeur Totale';
$app_strings['LBL_QUOTES_EXPIRY'] = 'Prochaine date d\'expiration';
$app_strings['LBL_DEFAULT_TOTAL'] = 'Total';
$app_strings['AOS_Contracts'] = 'Contrats';
$app_strings['AOS_Quotes'] = 'Devis';
$app_strings['AOS_Invoices'] = 'Factures';
$app_strings['LBL_PHOTO'] = 'Photo';
$app_strings['LBL_CASE_UPDATES'] = 'Mises à jour du Ticket';
$app_strings['LBL_CASE_UPDATE_SUBMITTED'] = 'Mise à jour de dossier envoyée';
$app_strings['LBL_SUMMARY_DEFAULT'] = "{{fields.name.value}}";
$app_strings['LBL_SUMMARY_PERSON'] = "{{fields.salutation.value}} {{fields.first_name.value}} {{fields.last_name.value}}";
$app_strings['LBL_CREATE'] = 'Créer';
$app_strings['LBL_SAVED_FILTER_SAVED'] = 'Filtre enregistré avec succès';
$app_strings['LBL_FILTER_ID_NOT_DEFINED'] = 'Identifiant de filtre non défini';
$app_strings['LBL_GENERIC_CONFIRMATION'] = 'Voulez-vous poursuivre l\'action?';
$app_strings['LBL_SHOW_MORE'] = 'Afficher plus';
$app_strings['LBL_SHOW_LESS'] = 'Afficher moins';
$app_strings['LBL_LOAD_MORE'] = 'Charger plus';
$app_strings['LBL_EMPTY'] = '-- Vide -- ';
$app_strings['LBL_OPERATOR'] = 'Opérateur';
$app_strings['LBL_START'] = 'Début';
$app_strings['LBL_END'] = 'Fin';
$app_strings['LBL_LINE_ITEMS_FIELD_CONFIG'] = 'Mauvaise configuration';


$app_strings['LBL_ACTION_SUCCESS'] = 'Action réussie';

$app_strings['LBL_YES'] = 'Oui';
$app_strings['LBL_NO'] = 'Non';

$app_list_strings['sort_order'] = [];
$app_list_strings['sort_order']['asc'] = 'Croissant';
$app_list_strings['sort_order']['desc'] = 'Décroissant';

// Labels used by subpanel unlink relationship process
$app_strings['LBL_LINK'] = 'Lien';
$app_strings['LBL_UNLINK_RECORD'] = 'Délier l\'enregistrement';
$app_strings['LBL_EDIT_RECORD'] = 'Modifier l\'enregistrement';
$app_strings['LBL_UNLINK_RELATIONSHIP_CONFIRM'] = 'Êtes-vous sûr de vouloir dissocier cet enregistrement ? Seule la relation sera dissociée. L\'enregistrement ne sera pas supprimé.';
$app_strings['LBL_UNLINK_RELATIONSHIP_SUCCESS'] = 'L\'enregistrement a été dissocié avec succès.';
$app_strings['LBL_UNLINK_RELATIONSHIP_FAILED'] = 'Une erreur s\'est produite lors de la dissociation de cet enregistrement.';
$app_strings['LBL_LINK_RELATIONSHIP_SUCCESS'] = 'Relation liée avec succès.';
$app_strings['LBL_LINK_RELATIONSHIP_FAILED'] = 'Une erreur s\'est produite lors de la liaison de cette relation.';
$app_strings['LBL_MODULE_NOT_FOUND'] = 'Module introuvable.';
$app_strings['LBL_RECORD_NOT_FOUND'] = 'Impossible de charger l\'enregistrement';
$app_strings['LBL_RELATIONSHIP_LOAD_ERROR'] = 'Impossible de charger la relation';
$app_strings['LBL_NOT_LINKED'] = 'Impossible de délier le lien. Les enregistrements ne sont pas liés';
$app_strings['LBL_ACCESS_DENIED'] = 'Accès refusé';
$app_strings['LBL_ADD_RECORDS_TO_TARGET_LIST_SUCCESS'] = 'Enregistrements ajoutés à la liste de cibles avec succès.';
$app_strings['LBL_ADD_RECORDS_TO_TARGET_LIST_FAILED'] = 'Une erreur s\'est produite lors de l\'ajout d\'enregistrements sur la liste de cibles.';
$app_strings['LBL_ADD_CONTACTS_TO_TARGET_LIST_SUCCESS'] = 'Les contacts ont été ajoutés à la liste de cibles avec succès.';
$app_strings['LBL_ADD_CONTACTS_TO_TARGET_LIST_FAILED'] = 'Une erreur s\'est produite lors de l\'ajout de contacts sur la liste de cibles.';
$app_strings['LBL_CHANGED_TO_TEXT'] = 'changé en';
$app_strings['LBL_RECORD_CHANGED'] = 'Enregistrement mis à jour';
$app_strings['LBL_CREATE'] = "Créer";
$app_strings['LBL_USE_ADVANCED_SEARCH'] = 'Utiliser la recherche avancée';
$app_strings['LBL_USE_BASIC_SEARCH'] = 'Utiliser la recherche simple';
$app_strings['LBL_NO_MODULE_SELECTED'] = 'Aucun module sélectionné';
$app_strings['LBL_CLOSE_MENU'] = 'Fermer le menu';
$app_strings['LOGIN_INCORRECT'] = 'Identifiants incorrects, veuillez réessayer.';
$app_strings['LOGIN_TOO_MANY_FAILED'] = 'Trop de tentatives de connexion infructueuses. Veuillez réessayer plus tard.';

// PDF Engines
$app_strings['LBL_LEGACY_MPDF_ENGINE'] = 'Moteur MPDF hérité';
$app_strings['LBL_TCPDF_ENGINE'] = 'Moteur TCPDF';


$app_strings['ERR_INVALID_FILE_NAME'] = 'Nom de fichier invalide :';
$app_strings['LBL_LOGGER_VALID_FILENAME_CHARACTERS'] = 'Ne peuvent être que des caractères alphanumériques, \'.\', \'-\' et \'_\'';
$app_strings['LBL_LOGGER_INVALID_FILENAME'] = 'Nom de fichier d\'importation invalide';
