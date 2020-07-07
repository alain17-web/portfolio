<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" href= "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity= "sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin= "anonymous" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>CRUD liens</title>
</head>
<body>
    <?php require 'contentadmin/headeradmin.php';?>
    
    <div class="container mt-5 pt-5">
    <h1 class="text-center">Administration des liens</h1>

        <header class="row mt-5">
            <p class="lead col-md-8">Cette page sert à gérer les liens utiles que j'ai répertorié dans l'apprentissage du code.</p>
            <p class="offset-1 col-md-3"><a href="?p=Ajouter un lien" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Ajouter un nouveau lien</a></p>
        </header>
        <div class="row mt-5">
            <div class="col">
                <table class="table table-striped bg-light">
                    <thead >
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">URL</th>
                        <th scope="col">Description</th>
                        <th scope="col">Catégorie</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                <?php

                $db = mysqli_connect("localhost","root","root","portfolio");
                mysqli_set_charset($db,"utf8");
                $sql = "SELECT * FROM Links";

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
                            <td><?=$item['nomSite']?></td>
                            <td><a href="<?=$item['theurl']?>" name="<?=$item['theurl']?>" target="_blank"><?=$item['theurl']?></td>
                            <td><?=$item['description']?></td>
                            <td><?=$item['categorie']?></td>
                            <td><a href="?p=Modifer un lien" class="btn btn-sm btn-warning"><i class="fa fa-edit" aria-hidden="true"></i>Modifier</a></td>
                            <td><a href="?p=Supprimer un lien" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#supprimerCompte"><i class="fa fa-trash" aria-hidden="true"></i>Supprimer</a></td> 
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
    
    