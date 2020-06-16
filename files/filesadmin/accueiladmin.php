<?php 

session_start();

echo "Bienvenue " . $_SESSION['$userpseudo'];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" href= "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity= "sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin= "anonymous" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>accueil admin</title>
</head>
<body>
    <?php require 'contentadmin/headeradmin.php';?>
    
        <div class="mt-5 pt-5">
        <h1 class="text-center">Accueil admin</h1>
        <div class="container mt-5 pt-5"> 
            <div class="row text-center">
                <div class="col h1 bg-success">
                    <p class="h3">Bonjour !</p>
                    <h1 class="h1">"Bienvenue sur l'admin de ce site."</h2>
                    <br/>
                </div>
            </div>
        <div class="row text-center pt-5">
            <div class="col">
    <button class="btn btn-primary"><a class="h3 text-white" href="?p=Admin">Retour au formulaire admin</a></button><br><br><br>
    <a class="h4" href="?p=retour">Retour au site</a><br>
    <a class="h4" href="?p=Ajouter une image">Vers CRUD Galerie</a><br>
    <a class="h4" href="?p=Ajouter un lien">Vers CRUD Liens</a><br>
    <a class="h4" href="?p=Ajouter un contact">Vers CRUD Contact</a><br>

            </div>
        </div>
    </div>
</div>
    <script src= "https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity= "sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin= "anonymous" ></script>    
    <script src= "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity= "sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin= "anonymous" ></script>
    <script src= "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity= "sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin= "anonymous" ></script>
</body>
</html>