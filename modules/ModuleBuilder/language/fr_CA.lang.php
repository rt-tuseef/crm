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
    'LBL_LOADING' => 'Chargement' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Masquer options' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Supprimer' /*for 508 compliance fix*/,
    'help' => array(
        'package' => array(
            'create' => 'Provide a <b>Name</b> for the package. The name you enter must be alphanumeric and contain no spaces. (Example: HR_Management)<br/><br/> You can provide <b>Author</b> and <b>Description</b> information for package. <br/><br/>Click <b>Save</b> to create the package.',
            'modify' => 'Les propri??t??s et les actions possibles pour le <b>Paquet</b> apparaissent ici. <br><br>Vous pouvez modifier le <b>nom</b>, <b>l???auteur</b> et la <b>Description</b> du paquet, ainsi que voir et personnaliser tous les modules contenus dans le paquet. <br> <br>Cliquez sur <b>Nouveau Module</b> pour cr??er un module pour le paquet. <br><br>Si le paquet contient au moins un module, vous pouvez <b>publier</b> et <b>d??ployer</b> le paquet, ainsi qu\' <b>Exporter</b> les personnalisations effectu??es dans le paquet.',
            'name' => 'Ceci est le <b>Nom</b> du module actuel. <br/><br/> Le nom doit ??tre un caract??re alpha-num??rique et doit commencer par une lettre et ne contenir aucun espace (Exemple : Gestion_RH)',
            'author' => 'Il s???agit de l\' <b>auteur</b> qui s???affiche lors de l???installation comme le nom de l???entit?? qui a cr???? le paquet. <br><br>L???auteur pourrait ??tre soit un individu ou une entreprise.',
            'description' => 'Ceci est la <b>Description</b> du package qui sera affich??e durant l\'installation.',
            'publishbtn' => 'Cliquez sur <b>Publier</b> pour enregistrer toutes les donn??es saisies et pour cr??er un fichier .zip, c???est une version installable du paquet. <br><br>Utiliser<b>Chargeur de Module</b>pour t??l??verser le fichier .zip et installer le paquet.',
            'deploybtn' => 'En cliquant sur ce bouton cela permet d\'enregistrer toutes les modifications puis d\'installer ce package sur l\'environnement actuel.',
            'duplicatebtn' => 'Cliquez sur <b>Dupliquer</b> pour copier les propri??t??s du module dans un nouveau module et afficher le nouveau module. <br /> <br />Pour le nouveau module, un nouveau nom sera g??n??r?? automatiquement en ajoutant un nombre ?? la fin du nom du module utilis?? pour cr??er le nouveau module.',
            'exportbtn' => 'Cliquez sur <b>Exporter</b> pour cr??er un fichier zip contenant toutes les modifications faites dans ce package.<br><br>Le fichier g??n??r?? n\'est pas une version installable du package.<br><br>Utiliser le <b>Chargeur de Module</b> pour importer le fichier zip sur un autre SuiteCRM, le package apparaitra avec toutes ces modifications dans le Module Builder.',
            'deletebtn' => 'Cliquez sur <b>Supprimer</b> supprimera ce module.',
            'savebtn' => 'Cliquez sur ce bouton sauvegarde les changements et les rend actifs',
            'existing_module' => 'Cliquez sur l\'ic??ne du <b>module</b> pour modifier les propri??t??s et personnaliser les champs, les relations et la mise en page associ??e ?? ce module.',
            'new_module' => 'Cliquez sur <b> nouveau module </b> pour cr??er un nouveau module pour ce package.',
            'key' => 'La <b>Cl??</b> cha??ne alphanum??rique  de 5 lettres max, sera utilis??e pour pr??fixer tous les r??pertoires, les noms de classe et les tables de base de donn??es de tous les modules du Package.<br /><br />Cette cl?? est utilis??e dans un effort d\'unicit?? des noms de table.',
            'readme' => 'Cliquer pour ajouter un texte <b>Lisez moi</b> pour ce package.<br /><br />Ce Lisez moi sera disponible durant l\'installation.',

        ),
        'main' => array(),
        'module' => array(
            'create' => 'Entrez un <b>Nom</b> pour le module. L\'<b>Etiquette</b> que vous saisissez apparaitra dans l\'onglet de navigation. <br/><br/>Choisissez d\'afficher un onglet de navigation pour le module en cochant la case ?? cochet l\'<b>Onglet de navigation</b> <br/><br/>Choisissez alors le type de module que vous souhaitez cr??er. <br/><br/>Sellectionnez un mod??le (template) type. Chaque mod??le (template) contient une collection de champs sp??cifique, De m??me qju\'une apparence pr??-d??finie, ?? utiliser comme base pour votre module. <br/><br/>Cliquez <b>Sauvegarder</b> pour cr??er le module.',
            'modify' => 'Vous pouvez personnaliser le module ou en modifier les propri??t??s <b>Champs</b>, <b>Relations</b> et <b>Apparence</b> ',
            'importable' => 'Cocher la case <b>Import</b> pour activer la fonctionnalit?? d\'import pour ce module.<br><br>Un lien vers l\'assistant d\'Import apparaitra dans le menu des raccourcis de ce module. L\'assistant d\'import facilite l\'import des donn??es depuis une source externe dans le module cr????.',
            'team_security' => 'Cochez cette case permet d\'activer la s??curit?? par ??quipe pour ce module.',
            'reportable' => 'Cochez cette case permet d\'avoir de pouvoir r??aliser des rapports sur ce module.',
            'assignable' => 'Cochez cette case permet d\'assign?? ?? un utilisateur les enregistrements de ce module.',
            'has_tab' => 'Cochez cette case permet d\'avoir un onglet de navigation pour ce module.',
            'acl' => 'Cochez cette case permet d\'activer les contr??les d\'acc??s ?? ce module y compris la s??curit?? par champ',
            'studio' => 'Cochez cette case permet d\'autoriser les admins ?? personnaliser ce module via le Studio',
            'audit' => 'Cochez cette case permet de supporter les audits de modification. Cela stockera les changements de certains champs, les admins pourront ainsi visualiser les changements.',
            'viewfieldsbtn' => 'Cliquez sur <b>Voir les champs</b> pour afficher les champs associ??s au module et pour cr??er/modifier des champs personnalis??s.',
            'viewrelsbtn' => 'Cliquez sur <b>Voir les Relations</b> pour afficher les liens associ??s ?? ce module et cr??er de nouvelles relations.',
            'viewlayoutsbtn' => 'Cliquez sur <b>Voir les mise en page</b> pour afficher la mise en page du module et personnaliser la mise en page des champs.',
            'duplicatebtn' => 'Cliquez sur <b>Dupliquer</b> pour copier les propri??t??s du module dans un nouveau module et afficher le nouveau module. <br /> <br />Pour le nouveau module, un nouveau nom sera g??n??r?? automatiquement en ajoutant un nombre ?? la fin du nom du module utilis?? pour cr??er le nouveau module.',
            'deletebtn' => 'Cliquez sur <b>Supprimer</b> pour supprimer ce module.',
            'name' => 'Ceci est le <b>Nom</b> du module.actuel. <br/><br/> Le nom doit ??tre un caract??re alpha-num??rique et doit commencer par une lettre et ne contenir aucun espace (Exemple: Gestion_RH)',
            'label' => 'Ceci est le <b>Libell??</b> qui apparaitra dans l\'onglet de navigation pour ce module.',
            'savebtn' => 'Cliquez sur <b>Sauvegarder</b> pour sauvegarder toutes les donn??es li??es ?? ce module.',
            'type_basic' => 'La mise en page <b>Basique</b> fournie les champs basiques, comme le nom, assign?? ??, l\'??quipe, la date de cr??ation et la description.',
            'type_company' => 'Le mod??le <b>Soci??t??</b> pr??voit la mise en page des champs sp??cifiques, tels que Nom de l\'entreprise, l\'activit?? et l\'adresse de facturation. <br /><br />Utiliser ce mod??le afin de cr??er des modules qui sont semblables au module Compte.',
            'type_issue' => 'Le mod??le <b>Probl??me</b> pr??voit la mise en page des champs sp??cifiques aux Bugs et Tickets, comme le Nombre, le Statut, la Priorit?? et la Description.<br /><br />Utilisez ce mod??le afin de cr??er des modules qui sont semblables aux modules Ticket et Suivi de Bugs.',
            'type_person' => 'Le mod??le <b>Personne</b> pr??voit la mise en page des champs sp??cifiques aux personnes, comme le Titre, le Nom, l\'Adresse et le Num??ro de T??l??phone.<br /><br />Utiliser ce mod??le afin de cr??er des modules qui sont semblables aux modules Contacts et Prospects.',
            'type_sale' => 'Le mod??le <b>Vente</b> pr??voit la mise en page des champs sp??cifiques aux Opportunit??s, comme la source du Prospect, les phases de l\'Opportunit??, le montant et la probabilit??. <br/><br/>Utiliser ce mod??le pour cr??er des modules qui sont semblables au module Opportunit??.',
            'type_file' => 'Le mod??le <b>Fichier</b> pr??voit la mise en page des champs sp??cifiques au Document, comme un Nom de fichier, un Type de document et une date de Publication.<br><br>Utiliser ce mod??le pour cr??er des modules qui sont semblables au module Document.',

        ),
        'dropdowns' => array(
            'default' => 'Tous les <b>Menus d??roulants</b> de l???application sont r??pertori??s ici. <br><br>Les Menus d??roulants peuvent ??tre utilis??s pour les champs type liste d??roulante dans n???importe quel module. <br> <br>Pour modifier une liste d??roulante existant, cliquez sur le nom de la liste d??roulante. <br><br>Cliquez sur <b>Liste d??roulante Ajouter</b> pour cr??er une nouvelle liste d??roulante.',
            'editdropdown' => 'Les listes d??roulantes peuvent ??tre utilis?? pour des champs de type custom ou standard dans tous les modules.<br><br>Fournir un <b>Nom</b> pour la liste d??roulante.<br><br>Si plusieurs packs de langue sont install??s, vous pouvez S??lectionnez la <b>Langue</b> ?? utiliser pour les ??l??ments de la liste.<br><br>Dans le champ <b>Nom de l\'??l??ment</b>, saisir un nom pour une option de la liste d??roulante. Ce n\'est pas le nom qui apparait dans les listes d??roulantes visibles par les utilisateurs.<br><br>Dans le champ <b>libell?? Affich??</b> saisir un libell?? qui sera visible par les utilisateurs.<br><br>Apr??s avoir fournit un nom et un libell??, cliquez sur <b>Ajouter<b> pour ajouter cet ??l??ment ?? la liste d??roulante.<br><br>Pour ordonner les enregistrements dans la liste, glisser/d??poser les enregistrements dans l\'ordre voulue.<br><br>Pour ??diter un libell?? d\'un ??l??ment, cliquez sur <b>l\'ic??ne Modifier</b>, et saisir un nouveau libell??. Pour supprimer un ??l??ment de la liste d??roulante, cliquez sur <b>l\'ic??ne Supprimer</b>.<br><br> Pour annuler un changement effectuer sur un lable, cliquez sur <b>Annuler</b>. Pour re-effectuer un changement annul??, cliquez sur <b>Re-Faire</b>.<br><br>Cliquez sur <b>Sauvegarder</b> pour sauvegarder la liste d??roulante.',

        ),
        'subPanelEditor' => array(
            'modify' => 'Tout les champs qui peuvent ??tre affich??s dans le <b>Sous-panneau</b> apparaissent ici..<br><br>La colonne <b>par D??faut</b> contient les champs qui sont affich??s dans le Sous-panneau.<br/><br/>La colonne <b>Cach??e</b> contient des champs qui peuvent ??tre ajout??s ?? la colonne par D??faut.'
        ,
            'savebtn' => 'Cliquez sur <b>Sauvegarder & D??ployer</b> pour sauvegarder tous les changements effectu??s et les rendre actifs dans le module.',
            'historyBtn' => 'Cliquez sur <b>voir l\'historique</b> pour voir et restaurer une version pr??c??dement sauvegard??e de la mise en page.',
            'historyDefault' => 'Cliquez sur <b>R??initialiser</b> pour restaurer l\'affichage par d??faut.',
            'Hidden' => 'Les champs cach??s sont des champs qui ne sont pas disponibles aux utilisateurs et qui ne peuvent donc pas les utiliser dans les vues listes.',
            'Default' => 'Les champs par d??faut sont propos??s aux utilisateurs qui n\'ont pas param??tr??s de liste personnalis??e.',

        ),
        'listViewEditor' => array(
            'modify' => 'Tout les champs qui peuvent ??tre affich?? dans la <b>Vue Liste</b> apparaissent ici.<br><br>La colonne <b>par D??faut</b> contient les champs qui sont affich??s dans la Vue Liste par D??faut.<br/><br/>La colonne <b>Disponible</b> contient des champs qu\'un utilisateur peut s??lectionner dans la Recherche pour cr??er une Vue Liste personnalis??e<br/><br/>La colonne <b>Cach??e</b> contient des champs qui peuvent ??tre ajout??s ?? la colonne Disponible ou par D??faut'
        ,
            'savebtn' => 'Cliquez sur <b>Sauvegarder & D??ployer</b> pour sauvegarder tous les changements effectu??s et les rendre actifs dans le module.',
            'historyBtn' => 'Cliquez <b>Voir Historique</b> pour voir et restaurer de l\'historique une mise en page sauvegard?? pr??c??demment <br><br><b>Restaurer</b> de <b>Voir Historique</b> restaure l\'emplacement du champ dans la mise en page pr??c??demment sauvegard??. Pour modifier le libell?? du champ, cliquez l\'icone Modifier ?? cot?? du champ concern??.',
            'historyDefault' => 'Cliquez <b>Restaurer D??faut</b> pour restaurer le visuel sur la mise en page originale.<br><br><b>Restaurer D??faut</b> ne restaure que l\'emplacement du champ dans la mise en page originale. Pour modifier les libell??s, cliquez l\'icone Modifier ?? cot?? du champ concern??.',
            'Hidden' => 'Les champs <b>Cach??s</b> ne sont pas accessibles aux usagers dans la liste des vues.',
            'Available' => 'Les champs <b>Disponible</b> ne sont pas affich??s par d??faut, mais ils peuvent ??tre ajout??s ?? la liste des vues par les utilisateurs..',
            'Default' => 'Les champs par <b>D??faut</b> sont propos??s dans les listes de vues qui n\'ont pas personnalis??es par les utilisateurs.'
        ),
        'popupListViewEditor' => array(
            'modify' => 'Tous les champs qui peuvent ??tre affich??s dans la <b>Vue Liste</b> apparaissent ici.<br><br>La colonne <b>par D??faut</b> contient les champs qui sont affich??s dans la Vue Liste par d??faut.<br/><br/>LA colonne <b>Cach??e</b> contient des champs qui peuvent ??tre ajout??s ?? la colonne Disponible ou par D??faut.'
        ,
            'savebtn' => 'Cliquez sur <b>Sauvegarder & D??ployer</b> pour sauvegarder tous les changements effectu??s et les rendre actifs dans le module.',
            'historyBtn' => 'Cliquez <b>Voir Historique</b> pour voir et restaurer de l\'historique un mod??le sauvegard?? pr??c??demment <br><br><b>Restaurer</b> de <b>Voir Historique</b> restaure l\'emplacement du champ dans le mod??le pr??c??demment sauvegard??. Pour modifier le libell?? du champ, cliquez l\'icone Modifier ?? cot?? du champ concern??.',
            'historyDefault' => 'Cliquez <b>Restaurer D??faut</b> pour restaurer le visuel sur le mod??le original.<br><br><b>Restaurer D??faut</b> ne restaure que l\'emplacement du champ dans le mod??le original. Pour modifier les libell??s, cliquez l\'icone Modifier ?? cot?? du champ concern??.',
            'Hidden' => 'Les champs <b>Cach??s</b> ne sont pas accessibles aux usagers dans la liste des vues.',
            'Default' => 'Les champs par <b>D??faut</b> sont propos??s dans les listes de vues qui n\'ont pas personnalis??es par les utilisateurs.'
        ),
        'searchViewEditor' => array(
            'modify' => 'Tous les champs qui peuvent ??tre affich??es sous la forme de <b>filtre</b> s???affichent ici. <br><br>La colonne <b>par d??faut</b> contient les champs qui seront afficher??s dans le formulaire de recherche. <br/> <br/> La colonne <b>masqu??e</b> contient les champs disponibles pour vous en tant qu??? administrateur pour ajout au formulaire de recherche.'
        ,
            'savebtn' => 'Cliquez sur <b>Sauvegarder & D??ployer</b> pour sauvegarder tous les changements effectu??s et les rendre actifs dans le module.',
            'Hidden' => 'Les champs <b>Cach??s</b> n\'apparaissent pas dans la recherche.',
            'historyBtn' => 'Cliquez <b>Voir Historique</b> pour voir et restaurer de l\'historique un mod??le sauvegard?? pr??c??demment <br><br><b>Restaurer</b> de <b>Voir Historique</b> restaure l\'emplacement du champ dans le mod??le pr??c??demment sauvegard??. Pour modifier le libell?? du champ, cliquez l\'icone Modifier ?? cot?? du champ concern??.',
            'historyDefault' => 'Cliquez <b>Restaurer D??faut</b> pour restaurer le visuel sur le mod??le original.<br><br><b>Restaurer D??faut</b> ne restaure que l\'emplacement du champ dans le mod??le original. Pour modifier les libell??s, cliquez l\'icone Modifier ?? cot?? du champ concern??.',
            'Default' => 'Les champs <b>par D??faut</b> apparaissent dans la Recherche.'
        ),
        'layoutEditor' => array(
            'defaultdetailview' => 'La zone de <b>Mise en page</b> contient tous les champs qui sont affich?? dans le <b>Vue D??tail</b>.<br><br>La <b>Bo??te ?? outils</b> contient la <b>Corbeille</b> ainsi que tous les ??l??ments qui peuvent ??tre ajout??s dans la mise en page.<br><br>Pour faire des changements, utiliser le Glisser/D??poser sur les ??l??ments d??sir??s entre la <b>Bo??te ?? outils</b> et la zone de <b>Mise en page</b> o?? vous souhaitez voir appara??tre le champ.<br><br>Pour supprimer un champ, utiliser le Glisser/D??poser sur les ??l??ments d??sir??s entre la zone de <b>Mise en page</b> et la <b>Corbeille</b>. Les champs ainsi supprim??s appara??tront alors dans la liste des champs diponible au sein de la bo??te ?? outils afin de pouvoir les remettre en page ult??rieurement si besoin.',
            'defaultquickcreate' => 'La zone <b>Mise en page</b> contient les champs actuellement visible dans le fomulaire de <b>Cr??ation Rapide</b>.<br><br>Le formulaire de cr??ation rapide apparait dans le sous-panel du module o?? l\'on a cliqu?? sur le bouton de Cr??ation.<br><br>La <b>Bo??te ?? outils</b> contient la <b>Corbeille</b> ainsi que tous les ??l??ments qui peuvent ??tre ajout??s dans la mise en page.<br><br>Pour faire des changements, utiliser le Glisser/D??poser sur les ??l??ments d??sir??s entre la <b>Bo??te ?? outils</b> et la zone de <b>Mise en page</b> o?? vous souhaitez voir appara??tre le champ.<br><br>Pour supprimer un champ, utiliser le Glisser/D??poser sur les ??l??ments d??sir??s entre la zone de <b>Mise en page</b> et la <b>Corbeille</b>. Les champs ainsi supprim??s appara??tront alors dans la liste des champs diponible au sein de la bo??te ?? outils afin de pouvoir les remettre en page ult??rieurement si besoin.',
            //this default will be used for edit view
            'default' => 'La zone de <b>Mise en page</b> contient tous les champs qui sont affich??s dans le menu d\'<b>??dition de Vue</b>.<br><br>La <b>Bo??te ?? outils</b> contient la <b>Corbeille</b> ainsi que tous les ??l??ments qui peuvent ??tre ajout??s dans la mise en page.<br><br>Pour faire des changements, utiliser le Glisser/D??poser sur les ??l??ments d??sir??s entre la <b>Bo??te ?? outils</b> et la zone de <b>Mise en page</b> o?? vous souhaitez voir appara??tre le champ.<br><br>Pour supprimer un champ, utiliser le Glisser/D??poser sur les ??l??ments d??sir??s entre la zone de <b>Mise en page</b> et la <b>Corbeille</b>. Les champs ainsi supprim??s appara??tront alors dans la liste des champs disponible au sein de la bo??te ?? outils afin de pouvoir les remettre en page ult??rieurement si besoin.',
            'saveBtn' => 'Cliquez sur ce bouton sauvegarde la mise en page et vous permet ainsi de conserver vos changements. Quand vous retournez sur ce module vous pourrez commencer ?? changer cette mise en page. Votre mise en page ne sera pas visible par les utilisateurs tant que vous n\'avez pas cliqu?? sur le bouton "Sauvegarder et Publier".',
            'historyBtn' => 'Cliquez <b>Voir Historique</b> pour voir et restaurer de l\'historique un mod??le sauvegard?? pr??c??demment <br><br><b>Restaurer</b> de <b>Voir Historique</b> restaure l\'emplacement du champ dans le mod??le pr??c??demment sauvegard??. Pour modifier le libell?? du champ, cliquez l\'icone Modifier ?? cot?? du champ concern??.',
            'historyDefault' => 'Cliquez <b>Restaurer D??faut</b> pour restaurer le visuel sur le mod??le original.<br><br><b>Restaurer D??faut</b> ne restaure que l\'emplacement du champ dans le mod??le original. Pour modifier les libell??s, cliquez l\'icone Modifier ?? cot?? du champ concern??.',
            'publishBtn' => 'Cliquez sur ce bouton pour publier la mise en page. Cela rendra cette mise en page imm??diatement visible par les utilisateurs de ce module.',
            'toolbox' => 'La bo??te ?? outils contient une vari??t?? de fonctions utiles pour ??diter la mise en page, y compris une zone poubelle, un ensemble d\'??l??ments suppl??mentaires et un ensemble de champ disponibles. Chacun de ces ??l??ments peut ??tre utilis?? dans la mise en place via un glisser/d??poser.',
            'panels' => 'Cette zone affiche ce que votre mise en page montrera aux utilisateurs de ce module quand il sera publi??.<br /><br /> Vous pouvez re-positionner les ??l??ments comme les champs, les lignes et les panels via un glisser/d??poser; supprimer des ??l??ments en les d??pla??ant dans la zone poubelle de la boite ?? outils, ou ajouter des nouveaux ??l??ments en les faisant glisser depuis la boite ?? outils vers l\'endroit souhait?? dans votre mise en page.',
            'delete' => 'Glisser / D??poser ici les ??l??ments de votre mise en page ?? supprimer',
            'property' => 'Modifier le libell?? affich?? pour le champ.<br><br>L\'ordre de tabulation</b> permet de controler l\'ordre dans lequel le basculement d\'un champ ?? l\'autre ce fait au moyen de la touche Shift.',
        ),
        'fieldsEditor' => array(
            'default' => 'Les <b>Champs</b> qui disponibles list??s ici pour ce module sont tri??s par Nom de Champs.<br><br>Les champs personnalis??s cr????s pour ce module apparaissent au dessus des champs qui sont disponibles par d??faut pour le module <br><br>Pour modifier un champ, cliquez sur le <b>Nom du Champ</b>.<br/><br/>Pour cr??er un nouveau champ cliquez sur <b>Ajouter Champ</b>.',
            'mbDefault' => 'Les <b>Champs</b> disponible pour le module sont list??s ici et tri??s par Nom.<br><br>Pour personnaliser un libell?? ou les propri??t??s d\'un champ, cliquez sur le nom du champ.<br><br>Pour cr??er un nouveau champ, cliquez sur <b>Ajouter un champ</b>. Le libell?? ainsi que certaines autres propri??t??s du champs peuvent ??tre ??dit??es apr??s la cr??ation du champ en cliquant sur son libell??.<br><br> Apr??s le d??ploiement du module, les champs cr????s dans le Module Builder apparaissent comme des champs standards pour ce module dans le Studio.',
            'addField' => 'Select a <b>Data Type</b> for the new field. The type you select determines what kind of characters can be entered for the field. For example, only numbers that are integers may be entered into fields that are of the Integer data type.<br><br> Provide a <b>Name</b> for the field. The name must be alphanumeric and must not contain any spaces. Underscores are valid.<br><br> The <b>Display Label</b> is the label that will appear for the fields in the module layouts. The <b>System Label</b> is used to refer to the field in the code.<br><br> Depending on the data type selected for the field, some or all of the following properties can be set for the field:<br><br> <b>Help Text</b> appears temporarily while a user hovers over the field and can be used to prompt the user for the type of input desired.<br><br> <b>Comment Text</b> is only seen within Studio &/or Module Builder, and can be used to describe the field for administrators.<br><br> <b>Default Value</b> will appear in the field. Users can enter a new value in the field or use the default value.<br><br> Select the <b>Mass Update</b> checkbox in order to be able to use the Mass Update feature for the field.<br><br>The <b>Max Size</b> value determines the maximum number of characters that can be entered in the field.<br><br> Select the <b>Required Field</b> checkbox in order to make the field required. A value must be provided for the field in order to be able to save a record containing the field.<br><br> Select the <b>Reportable</b> checkbox in order to allow the field to be used for filters and for displaying data in Reports.<br><br> Select the <b>Audit</b> checkbox in order to be able to track changes to the field in the Change Log.<br><br>Select an option in the <b>Importable</b> field to allow, disallow or require the field to be imported into in the Import Wizard.<br><br>Select an option in the <b>Duplicate Merge</b> field to enable or disable the Merge Duplicates and Find Duplicates features.<br><br>Additional properties can be set for certain data types.',
            'editField' => 'Le <b>libell??</b> d\'un champ SuiteCRM peut ??tre personnalis??. Les autres propri??t??s ne peuvent pas ??tre modifi??es.<br><br>Cliquez sur <b>Cloner</b> pour cr??er un nouveau champ avec les m??mes propri??t??s.',
            'mbeditField' => 'Le <b>libell?? affich??</b> pour un mod??le de champ peut ??tre personnalis??. Les autres propri??t??s du champs ne peuvent plus ??tre personnalis??es.<br><br>Cliquez sur <b>Cloner</b> pour cr??er un nouveau champ avec les m??mes propri??t??s.<br><br>Pour supprimer un mod??le de champ qui ne pas ??tre affich?? dans le module, il faut supprimer le champ des <b>mises en page</b> appropri??es.'

        ),
        'exportcustom' => array(
            'exportHelp' => 'Exportez les personnalisations effectu??es dans Studio en cr??ant des packages pouvant ??tre charg??s dans une autre instance de SuiteCRM via le<b>Module Loader</b>.<br><br> D\'abord, fournissez le<b> Nom du Package</b>. Vous pouvez fournir <b>Auteur</b> et<b>Description</b> du package aussi.<br><br>S??lectionnez le (s) module (s) contenant les personnalisations que vous souhaitez exporter. Seuls les modules contenant des personnalisations appara??tront.<br><br>Puis cliquez <b>Exporter</b> pour cr??er un fichier .zip du package containing les personalisations.',
            'exportCustomBtn' => 'Cliquez sur <b>Export</b> pour cr??er un fichier .zip du package qui contient les personnalisations que vous d??sirez exporter.',
            'name' => 'Ceci est le <b>Nom</b> du package qui sera affich??e durant l\'installation.',
            'author' => 'Ceci est le nom de l\'<b>auteur</b> qui est affich?? durant l\'installation comme le nom de l\'entit?? qui ?? cr???? ce package. L\'auteur peut ??tre une entit?? physique ou compagnie.',
            'description' => 'Ceci est la <b>Description</b> du package qui sera affich??e durant l\'installation.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Bienvenue dans <b>La boite ?? outils des d??veloppeurs</b>. <br /><br />Utiliser les outils qui sont ici pour cr??er, g??rer et personnaliser vos modules et vos champs.',
            'studioBtn' => 'Utiliser le <b>Studio</b> pour personnaliser les modules install??s en changeant le positionnement des champs, S??lectionnez les champs disponibles et cr??er des champs de donn??es personnalis??s.',
            'mbBtn' => 'Utiliser le <b>Module Builder</b> pour cr??er de nouveaux modules.',
            'sugarPortalBtn' => 'Utiliser<b>Le portail d\'??dition SuiteCRM</b> permet de g??rer et personnaliser le portail SuiteCRM.',
            'dropDownEditorBtn' => 'Utiliser l\'<b>Editeur de liste d??roulante</b> pour ajouter ou ??diter une des listes d??roulantes globales de l\'application.',
            'appBtn' => 'Utiliser le mode Application pour personnaliser les diff??rentes propri??t??s du programme, comme le nombre de rapports TPS affich??s sur la page d\'accueil',
            'backBtn' => 'Retourner ?? l\'??tape pr??c??dente.',
            'studioHelp' => 'Utiliser le <b>Studio</b> pour personnalis?? les modules install??s. S??lectionnez un module pour commencer.',
            'moduleBtn' => 'Cliquer pour ??diter le module.',
            'moduleHelp' => 'S??lectionnez le composant du module que vous voulez ??diter',
            'fieldsBtn' => 'Modifier les informations qui sont stock??es dans le module. Vous pouvez cr??er, ici, des champs personnalis??s.',
            'labelsBtn' => 'Modifier les libell??s ?? afficher pour les valeurs dans ce module.',
            'relationshipsBtn' => 'Personnalisation des relations entre le module courant et les autres modules de SuiteCRM.',
            'layoutsBtn' => 'Modifier la mise en page pour les vues Edition, D??tails, Liste, et Recherche.',
            'subpanelBtn' => 'Modifier quelles informations sont affich??es dans les sous-panels de ce module.',
            'portalBtn' => 'Personnaliser le module de <b>mises en page</b> qui apparait dans le <b>Portail SuiteCRM</b>.',
            'layoutsHelp' => 'S??lectionnez une mise en page ?? ??diter.<br/<br />Pour changer la mise en page qui contient des champs de donn??es qui peuvent ??tre saisis, cliquez sur <b>Modifier la vue</b>.<br /><br />Pour changer la mise en page qui affiche les donn??es saisies dans l\'??dition, cliquez sur <b>Vue D??tails</b>.<br /><br />Pour changer les colonnes qui apparaissent dans les listes par d??faut, cliquez sur <b>Vue Liste</b>.<br /><br />Pour changer la mise en page des recherches basiques et avanc??es, cliquez sur <b>Recherche</b>.',
            'subpanelHelp' => 'S??lectionnez le sous-panel que vous voulez modifier en cliquant sur l\'icone ad??quate.',
            'newPackage' => 'Cliquez sur <b>Nouveau Package</b> pour cr??er un nouveau package.',
            'exportBtn' => 'Cliquez sur "Exporter les personnalisations" pour cr??er un package contenant les modifications faites dans le Studio.',
            'mbHelp' => 'Utiliser le <b>G??n??rateur de Module</b> qui permet de cr??er des paquets contenant des modules personnalis??s bas??s sur des objets standards ou personnalis??s.',
            'viewBtnEditView' => 'Personnaliser la mise en page de l\'<b>Vue Edition</b> du module.<br><br> La Vue Edition est le formulaire contenant les champs permettant aux utilisateurs de saisir des donn??es.',
            'viewBtnDetailView' => 'Personnaliser la mise en page de la <b>Vue D??tail</b> du module.<br><br> La Vue Detail permet de visualiser les donn??es saisies par les utilistateurs.',
            'viewBtnDashlet' => 'Personnaliser le module <b>SuiteCRM Dashlet</b>, y compris SuiteCRM Dashlet ListView et l\'engin de recherche. <br><br>The SuiteCRM Dashlet sera disponible ?? ajouter aux pages dans le module d???accueil.',
            'viewBtnListView' => 'personnaliser la mise en page de la <b>Vue Liste</b> du module.<br><br> La Vue Liste affiche les r??sultats des forumlaires de recherche.',
            'searchBtn' => 'Personnaliser la mise en page de la <b>Recherche</b> du module.<br><br>Permet de d??terminer les champs qui seront utilis??s pour filter les enregistrements qui apparaitront dans la Vue Liste.',
            'viewBtnQuickCreate' => 'Personnaliser la mise en page de la <b>Cr??ation rapide</b> du module.<br><br>Le formulaire de Cr??ation rapide apparait dans les sous-panels ainsi que dans le module Email.',
            'addLayoutHelp' => "Pour cr??er une mise en page personnalis??e pour un groupe de s??curit??, s??lectionnez le groupe de s??curit?? puis la mise en page que vous souhaitez personnaliser.",
            'searchHelp' => 'Les formulaires de <b>recherche</b> qui peuvent ??tre personnalis??s apparaissent ici. <br><br>Les formulaires de recherche contiennent des champs pour filtrer les enregistrements. <br> <br>Cliquez sur une ic??ne pour s??lectionner la mise en page de recherche ?? modifier.',
            'dashletHelp' => 'Les mises en page <b>SuiteCRM Dashlet</b> qui peuvent ??tre personnalis??s apparaissent ici. <br><br>The SuiteCRM Dashlet seront disponible ?? ajouter aux pages dans le module d???accueil.',
            'DashletListViewBtn' => '<b>SuiteCRM Dashlet ListView</b> affiche les enregistrements bas??s sur les filtres de recherche SuiteCRM Dashlet.',
            'DashletSearchViewBtn' => 'La <b>SuiteCRM Dashlet recherche</b> filtre les enregistrements pour le listview SuiteCRM Dashlet.',
            'popupHelp' => 'Les <b> Popups </ b> qui peuvent ??tre personnalis??s apparaissent ici.<br>',
            'PopupListViewBtn' => 'La <b>vue liste de la popup</b> affiche les enregistrements bas??s sur la vue recherche de la popup.',
            'PopupSearchViewBtn' => 'La <b>vue recherche de la popup</b> permet de rechercher les enregistrements dans la vue liste de la popup.',
            'BasicSearchBtn' => 'Personnaliser le formulaire de <b>Filtre rapide</b> qui appara??t dans l???onglet filtre rapide dans la zone de recherche pour le module.',
            'AdvancedSearchBtn' => 'Personnaliser le formulaire de <b>Filtre avanc??</b> qui appara??t dans l???onglet Recherche avanc??e dans le domaine de la recherche pour le module.',
            'portalHelp' => 'G??rez et personnalisez le <b> portail CRM</ b>.',
            'SPUploadCSS' => 'T??l??chargez une <b> feuille de style </ b> pour le portail CRM.',
            'SPSync' => '<b>Sync</b> personnalisations de l\'instance du portail CRM.',
            'Layouts' => 'Personnalisez les <b> dispositions </ b> des modules du portail CRM.',
            'portalLayoutHelp' => 'Les modules au sein du portail SuiteCRM apparaissent dans cette zone. <br><br>S??lectionnez un module pour modifier les <b>mises en page</b>.',
            'relationshipsHelp' => 'other deployed modules appear here.<br><br>The relationship <b>Name</b> is the system-generated name for the relationship.<br><br>The <b>Primary Module</b> is the module that owns the relationships. For example, all of the properties of the relationships for which the Accounts module is the primary module are stored in the Accounts database tables.<br><br>The <b>Type</b> is the type of relationship exists between the Primary module and the <b>Related Module</b>.<br><br>Click a column title to sort by the column.<br><br>Click a row in the relationship table to view the properties associated with the relationship.<br><br>Click <b>Add Relationship</b> to create a new relationship.<br><br>Relationships can be created between any two deployed modules.',
            'relationshipHelp' => 'Des <b>relations</b> peuvent ??tre cr????es entre un module principal et un module d??ploy??.<br><br>Les relations sont visibles de mani??re explicite via des sous-panels et des champs li??s dans une vue d\'un enregistrement d\'un module.<br><br> Si une relation existe d??j?? entre deux modules, toutes nouvelles relations cr????s entre ces deux modules n\'apparaitra pas de mani??re explicite.<br><br>S??lection un des <b>Types</b> de relation possible pour le module:<br><br> <b>One-to-One</b> - Les deux enregistrements des modules contiennent des champs li??s.<br><br><b>One-to-Many</b> - L\'enregistrement du module principal contient un sous-panel et l\'enregistrement du module li?? contient un champ li??.<br><br> <b>Many-to-Many</b> - Les enregistrements des deux modules affichent un sous-panel.<br><br> S??lectionnez le <b>Module Li??</b> pour la relation. <br><br>Si le type de relation requiert un sous-panel, s??lectioner la vue du sous-panel pour le module appropri??.<br><br>Cliquez sur <b>D??ployer</b> pour cr??er la relation. Une fois une relation cr????, celle-ci ne peut ??tre ni modifi?? ni supprim??.',
            'convertLeadHelp' => 'Ici vous pouvez ajouter des modules ?? l&#39??cran de conversion de mise en page et modifier les mises en pages qui existantes.<br/> Vous pouvez re-trier les modules en glissant leurs lignes dans la table.<br/><br/>\n<b>Module:</b> Le nom du module.<br/><br/>\n<b>Requis:</b> Les modules requis doivent ??tre cr???? ou selectionn??s avant que le prospect puisse ??tre convertis.<br/><br/>\n<b>Copier Donn??s:</b> Si selectionn??; les champs du prospect seront copi??s vers les champs avec le m??me nom dans l\'enregistrement nouvellement cr????.<br/><br/>\n<b>Allow Selection:</b> Les Modules avec champs li?? des les Contacts peuvent ??tre selectioo??s plut??t que cr???? pendant le processus de conversion du prospect.<br/><br/>\n<b>Supprimer:</b> Supprimer ce module de la mise en page convertie',


            'editDropDownBtn' => 'Modifier une liste d??roulante globale',
            'addDropDownBtn' => 'Ajouter une nouvelle liste d??roulante globale',
        ),
        'fieldsHelp' => array(
            'default' => 'Les <b>Champs</b> disponibles list??s ici pour le module sont tri??s par Nom.de champs<br><br>Le mod??le de module inclus un ensemble de champs.<br><br>Pour cr??er un nouveau champ, cliquez sur <b>Ajouter un champ</b>. Le libell?? ainsi que certaines autres propri??t??s du champs peuvent ??tre ??dit??es apr??s la cr??ation du champ en cliquant sur son libell??.<br><br> Apr??s le d??ploiement du module, les champs cr????s dans le Module Builder apparaissent comme des champs standards pour ce module dans le Studio.',
        ),
        'relationshipsHelp' => array(
            'default' => 'Les <b>relations</b> cr????es entre le module courant et les autres modules apparaissent ici.<br><br>Le <b>Nom</b> de la relation est le nom syst??me (stock?? dans la base de donn??es) de la relation.<br><br>Le <b>Module principal</b> est le module "propri??taire" des relations. Les propri??t??s de la relation sont stock??es dans les tables rattach??s au module principal. Le <b>Type</b> est le type de relation existante entre le Module Primaire et le <b>Module Correspondant</b>.<br><br>Cliquez sur le titre de la colonne pour trier selon cette colonne<br><br>Cliquez sur <b>une ligne du tableau des relations pour voir et modifier les propri??t??s associ??es ?? cette relation.<br><br>Cliquez <b>Ajouter relation</b> pour cr??er une nouvelle relation.',
            'addrelbtn' => 'Une aide apparait pour cr??er une relation.',
            'addRelationship' => 'Des <b>relations</b> peuvent ??tre cr????es entre le module et un autre module personnalis?? ou un module d??ploy??.<br><br>Les relations sont visible au travers des sous-panels ou des champs li??s dans un enregistrement du module.<br><br>S??lection un des <b>Types</b> de relation possible pour le module:<br><br> <b>One-to-One</b> - Les deux enregistrements des modules contiennent des champs li??s.<br><br< <b>One-to-Many</b> - L\'enregistrement du module principal contient un sous-panel et l\'enregistrement du module li?? contient un champ li??.<br><br> <b>Many-to-Many</b> - Les enregistrements des deux modules affichent un sous-panel.<br><br> S??lectionnez le <b>Module Li??</b> pour la relation. <br><br>Si le type de relation requiert un sous-panel, s??lectioner la vue du sous-panel pour le module appropri??.<br><br>Cliquez sur <b>Sauvegarder</b> pour cr??er la relation.',
        ),
        'labelsHelp' => array(
            'default' => 'Les <b>Libell??s</b> des champs et autres titres des modules peuvent ??tre modifi??s.<br><br>Modifier le libell?? en cliquant ?? l\'int??rieur du champ, entrer le nouveau libell?? et cliquer <b>Enregistrer</b>.<br><br> Si un package de langue est install?? dans l\'application, vous pouvez s??lectionner la <b>Langue</b> ?? utiliser pour les libell??s.',
            'saveBtn' => 'Cliquer sur <b>Sauvegarder</b> pour enregistrer tous les changements.',
            'publishBtn' => 'Cliquez sur <b>Sauvegarder & D??ployer</b> pour sauvegarder tous les changements effectu??s et les rendre actifs dans le module.',
        ),
        'portalSync' => array(
            'default' => 'Entrez l\' <b>URL du portail CRM</b> de l???instance de portail pour mettre ?? jour, puis cliquez sur <b>Aller</b>. <br><br>Puis entrez un nom d???utilisateur valide et le mot de passe et puis cliquez sur <b>Commencer la synchronisation</b>. <br> <br>Les personnalisations apport??es au portail <b>mises en page</b>, ainsi que la <b>Feuille de Style</b> si l???un a ??t?? transf??r??, sera transf??r?? ?? l???instance de portail sp??cifi??e.',
        ),
        'portalStyle' => array(
            'default' => 'Vous pouvez personnaliser l???apparence du portail CRM en utilisant une feuille de style. <br><br>S??lectionnez une <b>Feuille de Style</b> ?? t??l??charger. <br> <br>La feuille de style sera ex??cut?? dans le portail SuiteCRM la prochaine fois qu???une synchronisation est effectu??e.',
        ),
    ),

    'assistantHelp' => array(
        'package' => array(
            //custom begin
            'nopackages' => 'Pour d??marrer un projet, cliquez sur <b>Nouveau Package</b> pour cr??er un nouveau package pour h??berger vos modules personnalis??s. <br /><br /> Chaque package peut contenir un ou plusieurs modules.<br /><br /> Par exemple, vous pouvez cr??er un package contenant un module personnalis?? qui est relatif au module Compte. Ou, vous pouvez cr??er un package contenant plusieurs nouveaux modules qui fonctionnent ensemble comme un projet et qui sont li??s les uns aux autres et aux modules existants.',
            'somepackages' => 'Un <b>package</b> agit comme un conteneur pour les modules personnalis??s, qui sont tous une partie d\'un projet. Le package peut contenir un ou plusieurs </b>modules</b> personnalis??s qui peuvent ??tre li??s les uns aux autres ou ?? des modules existants dans l\'application.<br /><br /> Apr??s la cr??ation d\'un package pour votre projet, vous pouvez cr??er des modules pour le package, ou vous pouvez revenir ?? la cr??ation du module ?? une date ult??rieure pour compl??ter le projet.',
            'afterSave' => 'Votre nouveau paquet doit contenir au moins un module. Vous pouvez cr??er un ou plusieurs modules personnalis??s pour le paquet. <br/> <br/> Cliquez sur <b>Nouveau Module</b> pour cr??er un module personnalis?? pour ce paquet. <br/> <br/> Apr??s avoir cr???? au moins un module, vous pouvez publier ou d??ployer le paquet pour le rendre disponible pour votre instance ou les instances d???autres utilisateurs. <br/> <br/> Pour d??ployer le paquet en une seule ??tape dans votre instance, cliquez sur <b>d??ployer</b>. <br><br>Cliquez sur <b>publier</b> pour enregistrer le package dans un fichier .zip. Apr??s que le fichier .zip est enregistr?? sur votre syst??me, utilisez le <b>Chargeur de Module</b> pour t??l??charger et installer le paquet dans votre instance CRM. <br/> <br/> Vous pouvez distribuer le fichier ?? d???autres utilisateurs de t??l??charger et d???installer au sein de leurs propres instances.',
            'create' => 'Un <b> package </ b> agit comme un conteneur pour les modules personnalis??s, qui font tous partie d\'un projet. Le package peut contenir un ou plusieurs  <b> Modules </ b> personnalis??s qui peuvent ??tre li??e ?? d\'autres modules de l\'application. <br/> Apr??s avoir cr???? un package pour votre projet, vous pouvez imm??diatement cr??er des modules pour le paquet, ou vous pouvez revenir ult??rieurement au Module Builder pour compl??ter le projet.',
        ),
        'main' => array(
            'welcome' => 'Bienvenue dans la zone des Outils pour d??vellopeur. Utiliser les outils de cette zone pour cr??er et g??rer vos champs standards ou personnalis??s.<br /><br /> Pour g??rer les modules existants, cliquez sur <b>Studio</b>. <br /><br /> Pour cr??er des modules personnalis??s, cliquez sur <b>Module Builder</b>.',
            'studioWelcome' => 'Bienvenu dans le studio.'
        ),
        'module' => array(
            'somemodules' => "??tant donn?? que le paquet actuel contient au moins un module, vous pouvez <b>d??ployer</b> les modules dans le paquet au sein de votre instance ou de <b>publier</b> le paquet doit ??tre install?? dans l???instance actuelle ou une autre instance en utilisant le <b>Chargeur de Module</b> . <br/> <br/> Pour installer le paquet directement au sein de votre instance, cliquez sur <b>d??ployer</b>. <br><br>Pour cr??er un fichier .zip pour le paquet qui peut ??tre charg?? et install?? au sein de l???instance actuelle et d???autres instances en utilisant le <b>Chargeur de Module</b>, cliquez sur <b>publier</b>. <br/> <br/> Vous pouvez construire les modules pour ce paquet par ??tapes et publier ou d??ployer lorsque vous ??tes pr??t ?? le faire. <br/> <br/> Apr??s la publication ou d??ploiment du paquet, vous pouvez modifier les propri??t??s du paquet et personnaliser les modules. Puis re-publier ou re-d??ployer le paquet pour appliquer les modifications.",
            'editView' => 'Ici, vous pouvez modifier les champs existants. Vous pouvez supprimer un champs existants ou ajouter des champs disponibles dans la fen??tre de gauche.',
            'create' => 'En choisissant le type de <b>Type</b> de module que vous souhaitez cr??er, gardez ?? l\'esprit les types de champs que vous voulez avoir dans le module. <br/><br/>Chaque mod??le de module contient un ensemble de champs appartenant au type de module d??crit par le titre. <br/><br/><b>Basique</b> - Fournit des champs de base qui apparaissent dans les modules standard, comme les champs : Nom, Assign?? ??, Equipe, Date de cr??ation et Description. <br/><br/> <b>Soci??t??</b> - Fournit des champs sp??cifiques aux organisation, comme Nom de soci??t??, Industrie et Adresse de facturation. Utilisez ces mod??les pour cr??er des modules similaires au module standard Comptes.<br/><br/> <b>Personne</b> - fournit des champs sp??cifiques aux personnes, comme Salutations, Titre, Nom, Adresse et Num??ro de t??l??phone. Utilisez ce mod??le pour cr??er des modules similaires aux modules Prospect et Contact.<br/><br/><b>Probl??me</b> - Fournit des champs sp??cifiques aux modules R??clamations et Bugs. <br/><br/> Note: Apr??s avoir cr???? le module, vous pouvez modifier les libell??s des champs fourni par le mod??le, ainsi que cr??er des champs personnalis??s ?? ajouter ?? la mise en page du module.',
            'afterSave' => 'Personnaliser le module en fonction de vos besoins en ??ditant ou en cr??ant des champs, en ??tablissant des relations avec d\'autres modules et en organisant les champs dans les mises en page. <br/> Pour afficher les champs du mod??le et g??rer les champs personnalis??s du module, cliquez sur <b > Voir champs </ b>. <br/> Pour cr??er et g??rer les relations entre le module et les autres modules, m??me s\'il existe d??j?? des modules dans l\'application ou d\'autres modules personnalis??s dans le m??me package, cliquez sur <b> Afficher les relations </ b>. <br/> Pour modifier les configurations de modules, cliquez sur <b> Voir mises en page </ b>. Vous pouvez changer la vue de d??tail,  la vue Edition et la vue Liste des mises en page pour le module comme vous le feriez pour les modules d??j?? dans l\'application au sein de Studio. <br/> Pour cr??er un module avec les m??mes propri??t??s que le module actuel, cliquez sur <b> Dupliquer </ b>. Vous pouvez personnaliser davantage le nouveau module.',
            'viewfields' => 'Les champs dans le module peuvent ??tre personnalis??s en fonction de vos besoins.<br /><br /> Pour cr??er des champs personnalis??s, cliquez sur <b>Ajouter un champs</b>. Saisissez les propri??t??s du champ dans le panneau de droite et cliquez sur <b>Sauvegarder</b>.<br /><br /> Pour changer les libell??s de vos champs, cliquez sur<b>Modifier les libell??s</b>.<br /><br /> Pour ??diter les champs, cliquez sur le nom du champs et les propri??t??s apparaitront dans le panneau de droite. Faite vos changements puis cliquez sur <b>Sauvegarder</b>.<br /><br /> Vous pouvez cr??er rapidement de nouveaux champs qui ont des propri??t??s similaires en cliquant sur <b>Cloner</b>. Entrez les nouvelles propri??t??s, puis cliquez sur <b>Sauvegarder</b>.<br /><br /> Pour supprimer un champ, vous pouvez le supprimer des mises en page appropri??es.<br /><br />Note: Une fois le module install??, toutes les propri??t??s des champs ne sont pas ??ditables. Positionnez toutes les propri??t??s pour la mise en page des champs et des champs personnalis??s avant de publier et d\'installer le package.',
            'viewrelationships' => 'Vous pouvez rapporter ce module avec les autres modules dans le m??me package ou ?? des modules d??j?? install??s dans l\'application.<br /><br /> Pour modifier une relation existante, cliquez sur le  nom, et modifiez les propri??t??s dans le volet de droite.<br /><br /> Pour cr??er de nouvelle relation, cliquez sur <b>Ajouter une relation</b>. Les propri??t??s de la relation s\'affichent dans le volet de droite. Utilisez la liste d??roulante <b>Relatif ??</b> pour S??lectionnez le module. Fournisez un <b>Libell??</b> qui sera utilis?? pour le sous-panel du module relatif. Vous pouvez ??tre en mesure de S??lectionnez diff??rents sous-panels d??pendants du module s??lectionn??s.<br /><br /> Cliquez sur <b>Sauvegarder</b> pour cr??er une relation. Cliquez sur <b> Supprimer</p> pour supprimer la relation s??lectionn??e.',
            'viewlayouts' => 'Vous pouvez contr??ler les champs qui sont disponibles pour la saisie des donn??es dans la Vue Edition. Vous pouvez aussi controler les donn??es qui seront affich??es dans la Vue D??tails. Les vues ne doivent pas forcement correspondres.<br /><br /> Vous pouvez d??terminer la s??curit?? du module en utilisant la mise en page personnalis??e et la gestion des r??les.',
            'existingModule' => 'Apr??s avoir cr???? et personnalis?? ce module, vous pouvez cr??er un module cr??er un module compl??mentaire ou retourner au package pour <b>Publier</b> ou <b>Deployer</b> le package.<br><br>Pour cr??er un module compl??mentaire, vous pouvez cliquez sur <b>Dupliquer</b> pour cr??er un module avec les m??mes propri??t??s que le module courant, ou retourner au package, et cliquez sur <b>Nouveau Module</b>.<br><br> Si vous ^tes pr??t ?? <b>Publier</b> ou <b>Deployer</b> le package contenant ce module, retourner au package pour r??aliser ces fonctions. Vous pouvez publier ou d??ployer des packages contenant au moins un module.',
            'labels' => 'Les libell??s des champs standards ainsi que des champs personnalis??s peuvent ??tre modifi??s. Changer les libell??s des champs n\'aura pas d\'incidence sur les donn??es stock??es dans ces champs.',
        ),
        'listViewEditor' => array(
            'modify' => 'Il existe trois colonnes affich??es ?? gauche. La colonne "Par d??faut" contient les champs qui sont affich??s dans une vue de liste par d??faut, la colonne "Disponible" contient les champs que l\'utilisateur peut choisir d\'utiliser pour cr??er une vue de liste personnalis??e, et la colonne "Cach??" contient des champs disponibles mais sont actuellement d??sactiv??.En tant qu\'administrateur vous pouvez les ajouter ?? la valeur par d??faut ou bien aux  colonnes disponibles pour les utilisateurs, 
',
            'savebtn' => 'Cliquez sur <b>Sauvegarder</b> pour enregistrer tous les changements et les rendre actifs',
            'Hidden' => 'Les champs <b>Cach??s</b> ne sont pas accessibles aux usagers dans la liste des vues.',
            'Available' => 'Les champs disponibles sont des champs qui ne sont pas affich??s par d??faut, mais qui peuvent ??tre activ??s par les utilisateurs.',
            'Default' => 'Les champs par d??faut sont affich??s aux utilisateurs qui n\'ont pas cr???? de liste personnalis??es d\'affichage ..'
        ),

        'searchViewEditor' => array(
            'modify' => 'Il existe deux colonnes affich??es ?? gauche. La colonne "Par d??faut" contient les champs qui seront affich??s dans la vue de la recherche, et la colonne "Cach??" contient des champs disponibles en tant qu\'administrateur que vous pouvez ajouter ?? la vue.',
            'savebtn' => 'Cliquez sur <b>Sauvegarder & D??ployer</b> pour sauvegarder tous les changements effectu??s et les rendre actifs dans le module.',
            'Hidden' => 'Les champs <b>Cach??s</b> n\'apparaissent pas dans la recherche.',
            'Default' => 'Les champs par d??faut qui seront affich??s dans la vue recherche.'
        ),
        'layoutEditor' => array(
            'default' => 'Il existe deux colonnes affich??es ?? gauche. La colonne de droite, intitul??e Mise en page actuelle ou Aper??u Mise en page, est celle o?? vous pouvez changer la configuration du module. La colonne de gauche, intitul?? Bo??te ?? outils, contient des ??l??ments utiles et des outils pour une utilisation lors de la modification de la mise en page. <br/> Si la zone de mise en page est intitul??e Mise en page actuelle alors vous travaillez sur une copie de la disposition actuellement utilis??e par le module pour l\'affichage. <br/> Si elle est intitul?? Mise en page Aper??u alors vous travaillez sur une copie cr???? plus t??t , celle ci a pu d??j?? ??tre modifi??e depuis la version vue par les utilisateurs de ce module.',
            'saveBtn' => 'Cliquer sur ce bouton permet d\'enregistrer la mise en page afin de conserver vos modifications. Lorsque vous revenez ?? ce module, vous allez commencer ?? partir de cette mise en page modifi??e. Votre mise en page ne sera pas visible par les utilisateurs du module jusqu\'?? ce que vous cliquez sur le bouton Enregistrer et publier.',
            'publishBtn' => 'Cliquez sur ce bouton pour d??ployer la mise en page. Cela signifie que cette disposition sera imm??diatement vue par les utilisateurs de ce module.',
            'toolbox' => 'La bo??te ?? outils contient une vari??t?? de fonctionnalit??s utiles pour l\'??dition des mises en page, y compris une poubelle, un ensemble d\'??l??ments suppl??mentaires et un ensemble de champs disponibles. Tout ces ??l??ments peuvent ??tre gliss??s et d??pos??s sur le mod??le.',
            'panels' => 'Cette zone montre comment votre mise en page se pr??sentera aux utilisateurs de ce module quand il est d??ploy?? <br/> Vous pouvez repositionner des ??l??ments tels que des champs, des lignes et des panneaux par glisser-d??poser. supprimer des ??l??ments par glisser-d??poser sur la zone poubelle de la bo??te ?? outils, ou ajouter de nouveaux ??l??ments en les faisant glisser ?? partir de la bo??te ?? outils et en les d??posant sur la mise en page dans la position souhait??e.'
        ),
        'dropdownEditor' => array(
            'default' => 'Il existe deux colonnes affich??es ?? gauche. La colonne de droite, intitul??e Mise en page actuelle ou Aper??u Mise en page, est celle o?? vous pouvez changer la configuration du module. La colonne de gauche, intitul?? Bo??te ?? outils, contient des ??l??ments utiles et des outils pour une utilisation lors de la modification de la mise en page. <br/> Si la zone de mise en page est intitul??e Mise en page actuelle alors vous travaillez sur une copie de la disposition actuellement utilis??e par le module pour l\'affichage. <br/> Si elle est intitul?? Mise en page Aper??u alors vous travaillez sur une copie cr???? plus t??t , celle ci a pu d??j?? ??tre modifi??e depuis la version vue par les utilisateurs de ce module.',
            'dropdownaddbtn' => 'Cliquez sur ce bouton pour ajouter un nouvel ??l??ment ?? la liste d??roulante.',

        ),
        'exportcustom' => array(
            'exportHelp' => 'Les personnalisations effectu??es dans Studio au sein de cette instance peuvent ??tre packag??es et d??ploy??es dans une autre instance. <br> Sp??cifiez un <b> Nom du package </ b>. Vous pouvez aussi renseigner un <b> Auteur </ b> et une <b> Description </ b> pour le paquet. <br> S??lectionnez le ou les modules qui contiennent les personnalisations ?? exporter. (Seuls les modules contenant des personnalisations appara??tront en s??lection.) <br> Cliquez sur <b> Exporter </ b> pour cr??er un fichier .zip du paquet contenant les personnalisations. Le fichier .zip peut ??tre t??l??charg?? dans une autre instance ?? travers le <b> Module Loader </ b>.',
            'exportCustomBtn' => 'Cliquez sur <b>Export</b> pour cr??er un fichier .zip du package qui contient les personnalisations que vous d??sirez exporter.',
            'name' => 'Le <b> Nom </ b> du paquet sera affich?? dans le module Loader apr??s que le paquet soit t??l??charg?? pour installation dans Studio.',
            'author' => 'L\' <b> Auteur </ b> est le nom de l\'entit?? qui a cr???? le package. L\'auteur peut ??tre un individu ou une entreprise. <br> L\'auteur sera affich?? dans le module Loader apr??s que le paquet soit t??l??charg?? pour installation dans Studio.',
            'description' => 'La <b> Description </ b> du paquet sera affich?? dans le module Loader apr??s que le paquet soit t??l??charg?? pour installation dans Studio.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Bienvenue sur la <b>Zone Outils de d??veloppement</b>. <br/><br/>Utiliser les outils dans cette zone pour cr??er, g??rer des modules et des champs standard ou personnalis??s.',
            'studioBtn' => 'Utilisez <b> Studio </ b> pour personnaliser les modules install??s en changeant la disposition des champs, s??lectionner les champs disponibles ou cr??er des champs personnalis??s.',
            'mbBtn' => 'Utiliser le <b>Module Builder</b> pour cr??er de nouveaux modules.',
            'appBtn' => 'Utilisez le mode d\'application pour personnaliser diverses propri??t??s du programme, tels que le nombre de rapports de TPS affich??s sur la page d\'accueil',
            'backBtn' => 'Retourner ?? l\'??tape pr??c??dente.',
            'studioHelp' => 'Utilisez <b>Studio</b> pour personnaliser les modules install??s.',
            'moduleBtn' => 'Cliquer pour ??diter le module.',
            'moduleHelp' => 'S??lectionnez le module que vous souhaitez modifier.',
            'fieldsBtn' => 'Modifier les informations stock??es dans le module en contr??lant  <b> Les champs </ b> du module. <br/> Vous pouvez modifier et cr??er des champs personnalis??s ici.',
            'labelsBtn' => 'Cliquer sur <b>Sauvegarder</b> pour enregistrer vos descriptions personnalis??es.',
            'layoutsBtn' => 'Personnaliser les <b> Styles </ b> des vues Modifier, D??tail, Liste et Recherche.',
            'subpanelBtn' => 'Modifier les informations pr??sentes dans les sous-panneaux du modules.',
            'layoutsHelp' => 'S??lectionnez <b> Mise en page ?? modifier </b>.<br/><br/>Pour changer la mise en page qui contient les champs pour la saisie des donn??es, cliquez sur <b> Modifier la vue </b>.<br/><br/> Pour modifier la mise en page qui affiche les donn??es saisies dans les champs de la vue Edition, cliquez sur <b> D??tail Voir </b>.<br/><br/>Pour modifier les colonnes qui apparaissent dans la liste par d??faut, cliquez sur <b> Vue Liste </b>.<br/><br/>Pour modifier les mises en pages des vue Recherche simple et recherche avan????e, cliquez sur <b> Recherche </b>.',
            'subpanelHelp' => 'Selectionnez le <b>sous-panneau</b> ?? editer',
            'searchHelp' => 'Selectionner une mise en page <b>Recherche</b> ?? editer.',
            'newPackage' => 'Cliquez sur <b>Nouveau Package</b> pour cr??er un nouveau package.',
            'mbHelp' => '<b> Bienvenue dans le Module Builder. </ b> <br/> Utilisez <b> Module Builder </ b> pour cr??er des packages contenant des modules personnalis??s bas??s sur des objets standard ou personnalis??s. <br/> Pour commencer, cliquez sur <b> Nouveau package </ b> pour cr??er un nouveau package, ou choisir un package ?? modifier. <br/> Un <b> package </ b > agit comme un conteneur pour les modules personnalis??s, qui font tous partie d\'un projet. Le package peut contenir un ou plusieurs modules personnalis??s qui peuvent ??tre li??s les uns aux autres ou ?? des modules de l\'application. <br/> Exemple : Vous voudrez peut-??tre cr??er un package contenant un module personnalis?? qui est li?? au module Comptes standard. Ou, vous pouvez cr??er un paquet contenant plusieurs nouveaux modules qui travaillent ensemble comme un projet et qui sont li??s les uns aux autres et ?? des modules de l\'application.',
            'exportBtn' => 'Cliquez sur <b> Exporter les personnalisations </ b> pour cr??er un package contenant les personnalisations effectu??es dans Studio pour des modules sp??cifiques.',
        ),


    ),
//HOME
    'LBL_HOME_EDIT_DROPDOWNS' => 'Editeur de liste d??roulante',

//STUDIO2
    'LBL_MODULEBUILDER' => 'G??n??rateur de Module',
    'LBL_STUDIO' => 'Studio',
    'LBL_DROPDOWNEDITOR' => 'Editeur de listes d??roulantes',
    'LBL_DEVELOPER_TOOLS' => 'Outils pour les d??veloppeurs',
    'LBL_SUITEPORTAL' => '??diteur Portail',
    'LBL_PACKAGE_LIST' => 'Liste des Packages',
    'LBL_HOME' => 'Accueil',
    'LBL_NONE' => '-Aucun-',
    'LBL_DEPLOYE_COMPLETE' => 'D??ploiement termin??',
    'LBL_DEPLOY_FAILED' => 'Une erreur s\'est produite pendant le processus de d??ploiement, votre paquet n\'est peut-??tre pas install?? correctement',
    'LBL_AVAILABLE_SUBPANELS' => 'Sous-panels disponibles',
    'LBL_ADVANCED' => 'Avanc??e',
    'LBL_ADVANCED_SEARCH' => 'Filtre avanc??',
    'LBL_BASIC' => 'Vue Globale',
    'LBL_BASIC_SEARCH' => 'Filtre rapide',
    'LBL_CURRENT_LAYOUT' => 'Mise en page courante',
    'LBL_CURRENCY' => 'Devise',
    'LBL_DASHLET' => 'Dashlet',
    'LBL_DASHLETLISTVIEW' => 'Dashlet vue en liste',
    'LBL_POPUP' => 'Vue Popup',
    'LBL_POPUPLISTVIEW' => 'Vue Liste de la Popup',
    'LBL_POPUPSEARCH' => 'Vue Recherche de la Popup',
    'LBL_DASHLETSEARCHVIEW' => 'Recherche Dashlet',
    'LBL_DETAILVIEW' => 'Vue D??tail',
    'LBL_DROP_HERE' => '[D??poser ici]',
    'LBL_EDIT' => 'Modifier',
    'LBL_EDIT_LAYOUT' => 'Modifier la mise en page',
    'LBL_EDIT_FIELDS' => 'Modifier Champs',
    'LBL_EDITVIEW' => 'Vue Edition',
    'LBL_FILLER' => '(remplissage)',
    'LBL_FIELDS' => 'Champs',
    'LBL_FAILED_TO_SAVE' => 'Echec de la sauvegarde',
    'LBL_FAILED_PUBLISHED' => 'Echec de la publication',
    'LBL_HOMEPAGE_PREFIX' => 'Mes',
    'LBL_LAYOUT_PREVIEW' => 'Pr??-visualisation de la Mise en page',
    'LBL_LAYOUTS' => 'Mise en page',
    'LBL_LISTVIEW' => 'Vue Liste',
    'LBL_MODULES' => 'Modules',
    'LBL_MODULE_TITLE' => 'Studio',
    'LBL_NEW_PACKAGE' => 'Nouveau Package',
    'LBL_NEW_PANEL' => 'Nouveau Panneau',
    'LBL_NEW_ROW' => 'Nouvelle ligne',
    'LBL_PACKAGE_DELETED' => 'Package supprim??',
    'LBL_PUBLISHING' => 'Publication ...',
    'LBL_PUBLISHED' => 'Publi??',
    'LBL_SELECT_FILE' => 'Selectionner un fichier',
    'LBL_SUBPANELS' => 'Sous-panels',
    'LBL_SUBPANEL' => 'Sous-panel',
    'LBL_SUBPANEL_TITLE' => 'Titre :',
    'LBL_SEARCH_FORMS' => 'Recherche',
    'LBL_SEARCH' => 'Recherche',
    'LBL_SEARCH_BUTTON' => 'Recherche',
    'LBL_FILTER' => 'Filtre',
    'LBL_TOOLBOX' => 'Boite ?? outils',
    'LBL_QUICKCREATE' => 'Creation Rapide',
    'LBL_EDIT_DROPDOWNS' => 'Modifier une liste d??roulante globale',
    'LBL_ADD_DROPDOWN' => 'Ajouter une nouvelle liste d??roulante globale',
    'LBL_BLANK' => '-vide-',
    'LBL_TAB_ORDER' => 'Ordre des onglets',
    'LBL_TABDEF_TYPE' => 'Type Affichage',
    'LBL_TABDEF_TYPE_HELP' => 'S??lectionnez l\'affichage de cette vue. Cette option n\'a d\'effet que si vous avez activ?? les onglets sur cette vue.',
    'LBL_TABDEF_TYPE_OPTION_TAB' => 'Onglet',
    'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Panneau',
    'LBL_TABDEF_TYPE_OPTION_HELP' => 'S??lectionnez "Panneau" pour avoir ce panneau affich?? directement dans la vue. S??lectionnez "Onglet" pour avoir ce panneau affich?? dans un onglet s??par?? de la vue. Lorsque "Onglet" est sp??cifi?? pour un panneau, les panneaux suivants d??finis en "Panneau" seront affich??s dans un m??me onglet. Un nouvel onglet sera affich?? pour le prochain panneau d??fini en tant que "Onglet". Si "Onglet" est s??lectionn?? pour au moins un panneau alors le premier panneau sera forc??ment affich?? dans un onglet.',
    'LBL_TABDEF_COLLAPSE' => 'R??tracter',
    'LBL_TABDEF_COLLAPSE_HELP' => 'S??lectionnez pour r??tracter par d??faut ce panel.',
    'LBL_DROPDOWN_TITLE_NAME' => 'Nom de la liste d??roulante',
    'LBL_DROPDOWN_LANGUAGE' => 'Langue de la liste d??roulante',
    'LBL_DROPDOWN_ITEMS' => '<u>El??ments de la liste d??roulante</u>',
    'LBL_DROPDOWN_ITEM_NAME' => 'Cl??',
    'LBL_DROPDOWN_ITEM_LABEL' => 'Libell??',
    'LBL_SYNC_TO_DETAILVIEW' => 'Synchro avec la vue D??tail',
    'LBL_SYNC_TO_DETAILVIEW_HELP' => 'S??lectionner cette option pour synchroniser cette mise en page de la vue Edition avec la mise en page de la vue D??tail correspondante. <br>Lors du clic sur le bouton Sauvegarde ou Sauvegarder et D??ployer dans la vue Edition, la disposition des champs de la vue D??tail sera automatiquement mise ?? jour avec celle-ci. <br>Il ne sera plus possible de modifier la mise en page des champs sur la vue Edition.',
    'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Cette vue D??tail est synchronis??e avec la vue Edition correspondante.<br>La disposition des champs dans cette vue D??tail refl??te la disposition des champs dans la vue Edition.<br>Les changements effectu??s sur la cette vue D??tail ne seront pas sauvegard??s. Effectuez le changement sur la vue Edition correspondante ou d??cocher la case "Syncrho avec la vue D??tail" pr??sente sur la vue Edition.',
    'LBL_COPY_FROM_EDITVIEW' => 'Copie depuis la vue Edition',
    'LBL_DROPDOWN_BLANK_WARNING' => 'Les valeurs sont obligatoires pour les deux parties : Cl?? et Libell??. Pour ajouter un ??l??ment vide, cliquez sur Ajouter sans entr??e de valeur ni dans la Cl??, ni dans le Libell??',
    'LBL_DROPDOWN_KEY_EXISTS' => 'La cl?? existe d??j?? dans la liste',
    'LBL_NO_SAVE_ACTION' => 'Impossible de trouver l\'action de sauvegarde pour cette vue.',
    'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation??: document mal form??',


//RELATIONSHIPS
    'LBL_MODULE' => 'Module',
    'LBL_LHS_MODULE' => 'Module principal',
    'LBL_CUSTOM_RELATIONSHIPS' => '* relation(s) cr????e(s) via le studio',
    'LBL_RELATIONSHIPS' => 'Relations',
    'LBL_RELATIONSHIP_EDIT' => 'Edition de la relation',
    'LBL_REL_NAME' => 'Nom',
    'LBL_REL_LABEL' => 'Libell??',
    'LBL_REL_TYPE' => 'Type',
    'LBL_RHS_MODULE' => 'Module li??',
    'LBL_NO_RELS' => 'Aucune relation',
    'LBL_RELATIONSHIP_ROLE_ENTRIES' => 'Condition Optionnelle',
    'LBL_RELATIONSHIP_ROLE_COLUMN' => 'Colonne',
    'LBL_RELATIONSHIP_ROLE_VALUE' => 'Valeur',
    'LBL_SUBPANEL_FROM' => 'Libell?? du Sous Panel listant les',
    'LBL_RELATIONSHIP_ONLY' => 'Aucun ??l??ment visible ne sera cr???? pour cette relation car il y a d??j?? une relation visible pr??-existante entre ces deux modules.',
    'LBL_ONETOONE' => 'Un ?? un',
    'LBL_ONETOMANY' => 'Un ?? plusieurs',
    'LBL_MANYTOONE' => 'Plusieurs-??-un',
    'LBL_MANYTOMANY' => 'Plusieurs ?? plusieurs',


//STUDIO QUESTIONS
    'LBL_QUESTION_EDIT' => 'S??lectionnez le module que vous voulez modifier.',
    'LBL_QUESTION_LAYOUT' => 'S??lectionnez la vue que vous voulez modifier.',
    'LBL_QUESTION_SUBPANEL' => 'S??lectionnez le sous-panel que vous voulez modifier.',
    'LBL_QUESTION_SEARCH' => 'S??lectionner une disposition de filtre ?? modifier.',
    'LBL_QUESTION_MODULE' => 'S??lectionnez le composant que vous voulez modifier.',
    'LBL_QUESTION_PACKAGE' => 'S??lectionnez le package ?? modifier ou cliquez sur "Nouveau Package" pour en cr??er un nouveau.',
    'LBL_QUESTION_EDITOR' => 'S??lectionnez un outil.',
    'LBL_QUESTION_DASHLET' => 'S??lectionnez une mise en page de dashlet ?? ??diter.',
    'LBL_QUESTION_POPUP' => 'S??lectionnez une mise en page de popup ?? ??diter.',
//CUSTOM FIELDS
    'LBL_NAME' => 'Nom',
    'LBL_LABELS' => 'Libell??s',
    'LBL_MASS_UPDATE' => 'Mise ?? jour globale',
    'LBL_DEFAULT_VALUE' => 'valeur par defaut',
    'LBL_REQUIRED' => 'Requis',
    'LBL_DATA_TYPE' => 'Type',
    'LBL_HCUSTOM' => 'PERSONNALISE',
    'LBL_HDEFAULT' => 'DEFAUT',
    'LBL_LANGUAGE' => 'Langue:',
    'LBL_CUSTOM_FIELDS' => '* champ cr???? via le Studio',

//SECTION
    'LBL_SECTION_EDLABELS' => 'Modifier les libell??s',
    'LBL_SECTION_PACKAGES' => 'Paquets',
    'LBL_SECTION_PACKAGE' => 'Paquet',
    'LBL_SECTION_MODULES' => 'Modules',
    'LBL_SECTION_DROPDOWNS' => 'Listes d??roulantes',
    'LBL_SECTION_PROPERTIES' => 'Propri??t??s',
    'LBL_SECTION_DROPDOWNED' => 'Editeur de liste d??roulante',
    'LBL_SECTION_HELP' => 'Aide',
    'LBL_SECTION_MAIN' => 'Principal',
    'LBL_SECTION_FIELDEDITOR' => 'Editeur de champ',
    'LBL_SECTION_DEPLOY' => 'D??ployer',
    'LBL_SECTION_MODULE' => 'Module',
//WIZARDS

//LIST VIEW EDITOR
    'LBL_DEFAULT' => 'D??faut',
    'LBL_HIDDEN' => 'Cach??',
    'LBL_AVAILABLE' => 'Disponible',
    'LBL_LISTVIEW_DESCRIPTION' => 'Il y a trois colonnes affich??es ci-dessous. La colonne <b>Par d??faut</b> contient des champs qui sont affich??s dans une liste par d??faut. La colonne <b>Additionnel</b> contient des champs que l\'utilisateur peut choisir d\'utiliser pour cr??er un affichage personnalis??. La colonne <b>Disponible</b> affiche les champs disponibles pour vous comme admin ?? ajouter ?? la valeur par d??faut ou des colonnes suppl??mentaires pour l\'utilisation par les utilisateurs.',
    'LBL_LISTVIEW_EDIT' => 'Editeur de liste',

//Manager Backups History
    'LBL_MB_PREVIEW' => 'Pr??visualiser',
    'LBL_MB_RESTORE' => 'Restaurer',
    'LBL_MB_DELETE' => 'Supprimer',
    'LBL_MB_DEFAULT_LAYOUT' => 'Mise en page par d??faut',

//END WIZARDS

//BUTTONS
    'LBL_BTN_ADD' => 'Ajouter',
    'LBL_BTN_SAVE' => 'Sauvegarder',
    'LBL_BTN_SAVE_CHANGES' => 'Sauvegarder les modifications',
    'LBL_BTN_DONT_SAVE' => 'Annuler les modifications',
    'LBL_BTN_CANCEL' => 'Annuler/Fermer',
    'LBL_BTN_CLOSE' => 'Fermer',
    'LBL_BTN_SAVEPUBLISH' => 'Sauvegarder & D??ployer',
    'LBL_BTN_CLONE' => 'Cloner',
    'LBL_BTN_ADDROWS' => 'Ajouter des Lignes',
    'LBL_BTN_ADDFIELD' => 'Ajouter un champ',
    'LBL_BTN_ADDDROPDOWN' => 'Ajouter une liste d??roulante',
    'LBL_BTN_SORT_ASCENDING' => 'Tri Ascendant',
    'LBL_BTN_SORT_DESCENDING' => 'Tri Descendant',
    'LBL_BTN_EDLABELS' => 'Modifier les libell??s',
    'LBL_BTN_UNDO' => 'Annuler',
    'LBL_BTN_REDO' => 'R??appliquer',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Ajouter des champs personnalis??s',
    'LBL_BTN_EXPORT' => 'Exporter les personnalisations',
    'LBL_BTN_DUPLICATE' => 'Dupliquer',
    'LBL_BTN_PUBLISH' => 'Publier',
    'LBL_BTN_DEPLOY' => 'D??ployer',
    'LBL_BTN_EXP' => 'Exporter',
    'LBL_BTN_DELETE' => 'Supprimer',
    'LBL_BTN_VIEW_LAYOUTS' => 'Voir les mises en page',
    'LBL_BTN_VIEW_FIELDS' => 'Voir les champs',
    'LBL_BTN_VIEW_RELATIONSHIPS' => 'Voir les relations',
    'LBL_BTN_ADD_RELATIONSHIP' => 'Ajouter une relation',
    'LBL_BTN_RENAME_MODULE' => 'Changer le nom du module',
//TABS


//ERRORS
    'ERROR_ALREADY_EXISTS' => 'Ce champ existe d??j??',
    'ERROR_INVALID_KEY_VALUE' => "Erreur: Valeur de cl?? invalide: [&#39;]",
    'ERROR_NO_HISTORY' => 'Aucun fichier contenant un historique a ??t?? trouv??',
    'ERROR_MINIMUM_FIELDS' => 'Cette mise en page doit contenir au moins un champ',
    'ERROR_GENERIC_TITLE' => 'Une erreur s\'est produite',
    'ERROR_REQUIRED_FIELDS' => 'Etes-vous s??r de vouloir continuer? Les champs obligatoires suivants sont absents de la mise en page:',


//PACKAGE AND MODULE BUILDER
    'LBL_PACKAGE_NAME' => 'Nom du Package :',
    'LBL_MODULE_NAME' => 'Nom du module :',
    'LBL_AUTHOR' => 'Auteur :',
    'LBL_DESCRIPTION' => 'Description :',
    'LBL_KEY' => 'Cl?? :',
    'LBL_ADD_README' => 'Lisez-moi',
    'LBL_LAST_MODIFIED' => 'Derni??re Modification:',
    'LBL_NEW_MODULE' => 'Nouveau Module',
    'LBL_LABEL' => 'Libell??',
    'LBL_LABEL_TITLE' => 'Libell??',
    'LBL_WIDTH' => 'Largeur',
    'LBL_PACKAGE' => 'Package :',
    'LBL_TYPE' => 'Type :',
    'LBL_NAV_TAB' => 'Onglet de Navigation',
    'LBL_CREATE' => 'Cr??er',
    'LBL_LIST' => 'Liste',
    'LBL_VIEW' => 'Vue',
    'LBL_HISTORY' => 'Voir Historique',
    'LBL_RESTORE_DEFAULT' => 'R??initialiser',
    'LBL_ACTIVITIES' => 'Activit??s',
    'LBL_NEW' => 'Nouveau',
    'LBL_TYPE_BASIC' => 'de base',
    'LBL_TYPE_COMPANY' => 'compagnie',
    'LBL_TYPE_PERSON' => 'Personne',
    'LBL_TYPE_ISSUE' => 'probl??me',
    'LBL_TYPE_SALE' => 'vente',
    'LBL_TYPE_FILE' => 'fichier',
    'LBL_RSUB' => 'Ceci est le sous-panel qui apparaitra dans votre module',
    'LBL_MSUB' => 'Ceci est le sous-panel que votre module founis pour ??tre affich?? dans les modules qui lui sont li??s',
    'LBL_MB_IMPORTABLE' => 'Import',

// VISIBILITY EDITOR
    'LBL_PACKAGE_WAS_DELETED' => '[[package]] a ??t?? supprim??',

//EXPORT CUSTOMS
    'LBL_EC_TITLE' => 'Export des personnalisations',
    'LBL_EC_NAME' => 'Nom du package :',
    'LBL_EC_AUTHOR' => 'Auteur :',
    'LBL_EC_DESCRIPTION' => 'D??scription :',
    'LBL_EC_CHECKERROR' => 'Vous devez s??lectionnez au moins un module',
    'LBL_EC_CUSTOMFIELD' => 'Champ(s) personnalis??(s)',
    'LBL_EC_CUSTOMLAYOUT' => 'Mise(s) en page personnalis??e(s)',
    'LBL_EC_NOCUSTOM' => 'Aucun module personnalis??',
    'LBL_EC_EMPTYCUSTOM' => 'n\'est pas personnalis??.',
    'LBL_EC_EXPORTBTN' => 'Exporter',
    'LBL_MODULE_DEPLOYED' => 'Le module a ??t?? d??ploy??.',
    'LBL_UNDEFINED' => 'non d??fini',
    'LBL_EC_VIEWS' => 'vues personnalis??es',
    'LBL_EC_SUITEFEEDS' => 'flux personnalis??s',
    'LBL_EC_DASHLETS' => 'Dashlets personnalis??s',
    'LBL_EC_CSS' => 'css personnalis??',
    'LBL_EC_TPLS' => 'tpls personnalis??s',
    'LBL_EC_IMAGES' => 'images personnalis??es',
    'LBL_EC_JS' => 'jss personnalis??s',
    'LBL_EC_QTIP' => 'qtips personnalis??s',

//AJAX STATUS
    'LBL_AJAX_FAILED_DATA' => '??chec lors de la r??cup??ration de donn??es',
    'LBL_AJAX_LOADING' => 'Chargement...',
    'LBL_AJAX_DELETING' => 'Suppression...',
    'LBL_AJAX_BUILDPROGRESS' => 'Construction en cours...',
    'LBL_AJAX_DEPLOYPROGRESS' => 'D??ploiement en cours...',

    'LBL_AJAX_RESPONSE_TITLE' => 'R??sultat',
    'LBL_AJAX_RESPONSE_MESSAGE' => 'Cette op??ration c\'est termin??e avec succ??s',
    'LBL_AJAX_LOADING_TITLE' => 'En cours...',
    'LBL_AJAX_LOADING_MESSAGE' => 'Veuillez patienter, chargement...',

//JS
    'LBL_JS_REMOVE_PACKAGE' => 'Etes-vous s??r(e) de vouloir supprimer ce Package ? Cela supprimera d??finitivement tous les fichiers associ??s ?? celui-ci.',
    'LBL_JS_REMOVE_MODULE' => 'Etes-vous s??r(e) de vouloir supprimer ce Module? Cela supprimera d??finitivement tous les fichiers associ??s ?? celui-ci.',
    'LBL_JS_DEPLOY_PACKAGE' => 'Toutes les personnalisations que vous avez fait dans le Studio seront ??cras??es lorsque ce module sera de nouveau d??ploy??e. Etes-vous s??r de vouloir continuer?',

    'LBL_DEPLOY_IN_PROGRESS' => 'D??ploiement du package',
    'LBL_JS_VALIDATE_NAME' => 'Nom - Doit ??tre alphanum??rique sans espace et commencer par une lettre',
    'LBL_JS_VALIDATE_PACKAGE_NAME' => 'Ce nom de package existe d??j??',
    'LBL_JS_VALIDATE_KEY' => 'Cl?? - Doit ??tre alphanum??rique sans espace et commencer par une lettre',
    'LBL_JS_VALIDATE_LABEL' => 'Veuillez saisir un libell?? qui sera utilis?? comme nom public pour ce module',
    'LBL_JS_VALIDATE_TYPE' => 'Veuillez s??lectionnez le type de module que vous voulez construire dans la liste ci-dessus',
    'LBL_JS_VALIDATE_REL_LABEL' => 'Libell?? - veuillez ajouter un libell?? qui sera affich?? au dessus du sous-panel',

//CONFIRM
    'LBL_CONFIRM_FIELD_DELETE' => 'La suppression de ce champ personnalis?? va supprimer ?? la fois le champ personnalis?? et toutes les donn??es relatives au champ personnalis?? dans la base de donn??es. Le champ n\'appara??tra plus  dans aucune mise en page de module de configurations. \n\nVoulez-vous continuer?',

    'LBL_CONFIRM_RELATIONSHIP_DELETE' => 'Etes-vous s??r(e) de vouloir supprimer cette relation ?',
    'LBL_CONFIRM_DONT_SAVE' => 'Attention vous avez fait des modifications depuis votre derni??re sauvegarde, voulez-vous sauvegarder ces modifications ?',
    'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Sauvegarder les changements ?',
    'LBL_CONFIRM_LOWER_LENGTH' => 'Les donn??es peuvent ??tre tronqu??s et cela ne peut pas ??tre annul??e, ??tes-vous s??r de vouloir continuer ?',

//POPUP HELP
    'LBL_POPHELP_FIELD_DATA_TYPE' => 'S??lectionnez le type de donn??e du champ que vous voulez ajouter',
    'LBL_POPHELP_IMPORTABLE' => '<b>Oui</b>: Le champ sera inclus dans une op??ration d\'importation.<br><b>Non</b>: Le champ ne sera pas inclus dans une importation.<br><b>Requis</b>: Une valeur pour le champ doit ??tre fournie dans toute importation.',
    'LBL_POPHELP_IMAGE_WIDTH' => 'Entrez un nombre pour la largeur, mesur??e en pixels.<br>L\'image t??l??charg??e sera mise ?? l\'??chelle de cette largeur.',
    'LBL_POPHELP_IMAGE_HEIGHT' => 'Entrez un nombre pour la hauteur, mesur??e en pixels.<br>L\'image t??l??charg??e sera mise ?? l\'??chelle de cette hauteur.',
    'LBL_POPHELP_DUPLICATE_MERGE' => '<b>Activ??</b>: Le champ appara??tra dans la fonctionnalit?? Fusionner les doublons, mais ne sera pas disponible pour les conditions de filtrage dans la fonction Trouver les doublons.<br><b>D??sactiv??</b>: Le champ n\'appara??tra pas dans la fonctionnalit?? Fusionner les doublons, et ne sera pas disponible pour les conditions de filtrage dans la fonction Trouver les doublons.<br><b>Filtre</b>: Le champ appara??tra dans la fonctionnalit?? Fusionner les doublons, et sera disponible pour les conditions de filtrage dans la fonction Trouver les doublons.<br><b>Filtre s??lectionn?? par d??faut</b>: Le champ appara??tra dans la fonctionnalit?? Fusionner les doublons, et sera utilis?? par d??faut pour les conditions de filtrage dans la fonction Trouver les doublons.<br><b>Seulement filtre</b>: Le champ n\'appara??tra pas dans la fonctionnalit?? Dupliquer de Fusion, mais sera disponible pour les conditions de filtrage dans la fonction Trouver les doublons.',

//Revert Module labels
    'LBL_RESET' => 'R??initialiser',
    'LBL_RESET_MODULE' => 'R??initialiser Module',
    'LBL_REMOVE_CUSTOM' => 'Supprimer Personnalisations',
    'LBL_CLEAR_RELATIONSHIPS' => 'Nettoyer Relations',
    'LBL_RESET_LABELS' => 'R??initialiser Libell??s',
    'LBL_RESET_LAYOUTS' => 'Initialliser les mises en pages',
    'LBL_REMOVE_FIELDS' => 'Supprimer Champs personnalis??s',
    'LBL_CLEAR_EXTENSIONS' => 'Nettoyer Extensions',
    'LBL_HISTORY_TIMESTAMP' => 'Horodatage',
    'LBL_HISTORY_TITLE' => 'historique',

    'fieldTypes' => array(
        'varchar' => 'Saisie libre',
        'int' => 'Entier',
        'float' => 'Float',
        'bool' => 'Case ?? cocher',
        'enum' => 'Liste ?? choix simple',
        'dynamicenum' => 'Menu d??roulant dynamique',
        'multienum' => 'Liste ?? choix multiple',
        'date' => 'Date',
        'phone' => 'T??l??phone',
        'currency' => 'Devise',
        'html' => 'ReadOnly HTML (deprecated, use TextBlock)',
        'radioenum' => 'Bouton Radio',
        'relate' => 'Champ relatif',
        'address' => 'Adresse',
        'text' => 'M??mo',
        'textblock' => 'TextBlock',
        'url' => 'URL Plugins',
        'iframe' => 'I-Frame',
        'datetimecombo' => 'Date et Heure',
        'decimal' => 'D??cimal',
        'image' => 'Image',
        'wysiwyg' => 'WYSIWYG',
    ),
    'labelTypes' => array(
        "frequently_used" => "Libell??s fr??quemment utilis??s",
        "all" => "Tous les libell??s",
    ),

    'parent' => 'Rattachement d\'inflexion',

    'LBL_CONFIRM_SAVE_DROPDOWN' => "Vous avez s??lectionn?? un ??l??ment de la liste d??roulante ?? supprimer. Tous les champs de type liste d??roulante utilisant cette liste ne vont plus afficher cette valeur, et elle ne pourra plus ??tre s??lectionn??e dans la liste d??roulante de ces champs. Etes-vous s??r de vouloir continuer ?",

    'LBL_ALL_MODULES' => 'tous les modules',
    'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (ID li?? {1})',
);
