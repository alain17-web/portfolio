<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" href= "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity= "sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin= "anonymous" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Gérer comptes</title>
</head>
<body>
<?php //require 'contentadmin/headeradmin.php';?>
<nav class="navbar navbar-expand-lg navbar-dark bg-warning">
        <a class="navbar-brand text-info" href="">Portfolio - Gestion du site</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuderoulant" aria-controls="menuderoulant" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="menuderoulant">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class=" h4 nav-link px-5 text-info" href="?p=Accueil admin">Accueil admin</a>
                </li>
                <li class="nav-item dropdown">
                <a class=" h4 nav-link dropdown-toggle px-5 text-info" href="#" id="galeriederoulant" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Galerie</a>
                    <div class="dropdown-menu bg-warning" aria-labelledby="galeriederoulant">
                        <a class="h4 dropdown-item text-info" href="?p=Ajouter une image">Ajouter une image</a>
                        <a class="h4 dropdown-item text-info" href="?p=Afficher une image">Afficher une image</a>
                        <a class="h4 dropdown-item text-info" href="?p=Modifier une image">Modifier une image</a>
                        <a class="h4 dropdown-item text-info" href="?p=Supprimer une image">Supprimer une image</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                <a class=" h4 nav-link dropdown-toggle px-5 text-info" href="#" id="lienderoulant" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Liens</a>
                    <div class="dropdown-menu bg-warning" aria-labelledby="lienderoulant">
                        <a class="h4 dropdown-item text-info" href="?p=Ajouter un lien">Ajouter un lien</a>
                        <a class="h4 dropdown-item text-info" href="?p=Afficher un lien">Afficher un lien</a>
                        <a class="h4 dropdown-item text-info" href="?p=Modifier un lien">Modifier un lien</a>
                        <a class="h4 dropdown-item text-info" href="?=Supprimer un lien">Supprimer un lien</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="h4 nav-link px-5 text-info" href="?p=Liste contacts">Liste Contacts</a>
                </li>
                <li class="nav-item">
                    <a class="h4 nav-link px-5 text-success" href="?p=Comptes">Comptes</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-info my-2 my-sm-0"><a class=" h4 text-info" href="?p=Admin">Se déconnecter</a></button>
            </form>
             
        </div>
     </nav>
     <div class="container mt-5 pt-5">

    <h1 class="text-center">Gestion des inscriptions</h1>

    <header class="row mt-5">
        <p class="lead col-md-8 ">Cette page permet de gérer la liste des personnes autorisées à accéder à la partie admin du site</p>
        <p class="offset-1 col-md-3"><a href="ajouter_compte.php" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Ajouter un nouveau compte</a></p>
    </header>
    
   
        <div class="row mt-5">
            <div class="col">
                <table class="table table-striped bg-light">
                    <thead >
                    <tr>
                        <th scope="col">Pseudo</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mot de passe</th>
                        <th scope="col">Date</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                <?php

                $db = mysqli_connect("localhost","root","root","portfolio");
                mysqli_set_charset($db,"utf8");//connection à la bd portfolio

                $sql = "SELECT * FROM inscription";

                $reponse = mysqli_query($db,$sql) or die("Erreur: ".mysqli_errno($db));

                $nb = mysqli_num_rows($reponse);
                if(empty($nb)){
                    echo "<h4> Aucun réultat à afficher</h4>";
                }
                else{
                    while ($item = mysqli_fetch_assoc($reponse)){
                        
                ?>
                    <tbody>
                        <tr>
                            <td><?=$item['pseudo']?></td>
                            <td><?=$item['email']?></td>
                            <td><?=$item['mdp']?></td>
                            <td><?=$item['dateInscription']?></td>
                            <td><a href="supprimer_comptes.php" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#supprimerCompte"><i class="fa fa-trash" aria-hidden="true"></i>Supprimer</a></td>
                        </tr>
                    </tbody>
                <?php 
                    }
                ?>
                </table>
                <div class="modal fade" id="supprimerCompte" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="supprimer">Supprimer ?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Etes-vous certain de vouloir supprimer ce compte ?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger mr-auto" data-dismiss="modal">Annuler</button>
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Confirmer</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        
    }
    ?>







    <script src= "https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity= "sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin= "anonymous" ></script>    
    <script src= "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity= "sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin= "anonymous" ></script>
    <script src= "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity= "sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin= "anonymous" ></script>
</body>
</html>