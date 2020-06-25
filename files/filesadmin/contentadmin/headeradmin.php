<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" href= "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity= "sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin= "anonymous" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>header admin</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-warning">
        <a class="navbar-brand text-info" href="">Portfolio - Gestion du site</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item
                    <?php if($page=='accueiladmin.php'){echo 'active';}?>"><a class=" h4 nav-link px-5 text-info" href="?p=Accueil admin">Accueil admin</a>
                </li>
                <li class="nav-item dropdown">
                <a class=" h4 nav-link dropdown-toggle px-5 text-info text-info<?php if($page=='crudgalerie.php'){echo 'active';}?>" href="#" id="menuderoulant" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Galerie</a>
                    <div class="dropdown-menu bg-warning" aria-labelledby="menuderoulant">
                        <a class="h4 dropdown-item text-info" href="#">Ajouter une image</a>
                        <a class="h4 dropdown-item text-info" href="#">Afficher une image</a>
                        <a class="h4 dropdown-item text-info" href="#">Modifier une image</a>
                        <a class="h4 dropdown-item text-info" href="#">Suprimer une image</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                <a class=" h4 nav-link dropdown-toggle px-5 text-info text-info<?php if($page=='crudliens.php'){echo 'active';}?>" href="#" id="menuderoulant" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Liens</a>
                    <div class="dropdown-menu bg-warning" aria-labelledby="menuderoulant">
                        <a class="h4 dropdown-item text-info" href="#">Ajouter un lien</a>
                        <a class="h4 dropdown-item text-info" href="#">Afficher un lien</a>
                        <a class="h4 dropdown-item text-info" href="#">Modifier un lien</a>
                        <a class="h4 dropdown-item text-info" href="#">Suprimer un lien</a>
                    </div>
                </li>
                <li class="nav-item
                <?php if($page=='contact.php'){echo 'active';}?>"><a class="h4 nav-link px-5 text-info" href="?p=Liste contacts">Liste Contacts</a>
                </li>
                <li class="nav-item
                <?php if($page=='crudcomptes.php'){echo 'active';}?>"><a class="h4 nav-link px-5 text-info" href="?p=Comptes">Comptes</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-info my-2 my-sm-0"><a class=" h4 text-info" href="?p=Admin">Se déconnecter</a></button>
            </form>
             
        </div>
     </nav>





    <script src= "https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity= "sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin= "anonymous" ></script> 
    <script src= "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity= "sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin= "anonymous" ></script>
    <script src= "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity= "sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin= "anonymous" ></script>
</body>
</html>