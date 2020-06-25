<?php
if(!isset($_GET["p"])){
    require "files/homepage.php";
}else{
    $p=$_GET["p"];

    switch($p){
        case "Galerie":
            require "files/gallery.php";
            break;
        case "tuto1":
            require "files/tuto1.php";
            break;
        case "tuto2":
            require "files/tuto2.php";
            break;
        case "Liens":
            require "files/links.php";
            break;
        case "Contact":
            require "files/contact.php";
            break;
        case "Admin":
            require "files/admin.php";
            break;
        case "Inscription":
            require "files/inscription.php";
            break;
        case "Accueil admin":
            require "files/filesadmin/accueiladmin.php";
            break;
        case "Ajouter une image":
            require "files/filesadmin/crudgalerie.php";
            break;
        case "Afficher une image":
            require "files/filesadmin/crudgalerie.php";
            break;
        case "Modifier une image":
            require "files/filesadmin/crudgalerie.php";
            break;
        case "Supprimer une image":
            require "files/filesadmin/crudgalerie.php";
            break;
        case "Ajouter un lien":
            require "files/filesadmin/crudliens.php";
            break; 
        case "Afficher un lien":
            require "files/filesadmin/crudliens.php";
            break;
        case "Modifier un lien":
            require "files/filesadmin/crudliens.php";
            break;
        case "Supprimer un lien":
            require "files/filesadmin/crudliens.php";
            break;
        case "Liste contacts":
            require "files/filesadmin/crudcontact.php";
            break;
        case "Comptes":
            require "files/filesadmin/crudcomptes.php";
            break;
       default:
            require "files/homepage.php";

    }
}