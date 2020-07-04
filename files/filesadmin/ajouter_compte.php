<?php


if(isset($_POST['submit'])){

    $pseudo = htmlspecialchars(strip_tags(trim($_POST['pseudo'])),ENT_QUOTES);
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    $mdp = htmlspecialchars(strip_tags(trim($_POST['mdp'])),ENT_QUOTES);
    $mdp2 = htmlspecialchars(strip_tags(trim($_POST['mdp2'])),ENT_QUOTES);
    
    if($pseudo && $email && $mdp && $mdp2){

        if($mdp == $mdp2){

            $mdp_hash = password_hash($mdp,PASSWORD_BCRYPT);

            $db = mysqli_connect("localhost","root","root","portfolio");
                mysqli_set_charset($db,"utf8");

            $reg = "SELECT * FROM inscription WHERE pseudo = '$pseudo'";
            $checkPseudo = mysqli_query($db,$reg);
             

            if(empty(mysqli_num_rows($checkPseudo))){

            $sql = "INSERT INTO inscription (pseudo,email,mdp)VALUES('$pseudo','$email','$mdp_hash')";
            $inscription = mysqli_query($db,$sql);

                if($inscription){

                        
                        $alerte = "<div class='alert alert-success text-center mt-5'>
                                    <h2 class='text-center text-success'>Le compte a bien été créé.</h2>
                                <button class='btn btn-success'><a href='?p=Comptes' class='text-white'> Retour à la liste des comptes</a></button>
                                </div>";
                        
                        
                    }
            }else{
                $alerte = "<h2 class='text-center text-danger'>Ce pseudo existe déjà</h2>";
            }
        }
        else{
            $alerte = "<h2 class='text-center text-danger'>Les deux mots de passe doivent être identiques</h2>";
        } 
    }
    else{
        $alerte = "<h2 class='text-center text-danger'>Veuillez saisir tous les champs</h2>";
    } 

    
}


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" href= "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity= "sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin= "anonymous" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>ajouter un compte</title>
</head>
<body>
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
     <main class="container">
     <h1 class="text-center mt-5">Admin - Ajouter un compte</h1>
     
     <p class="lead text-center">Remplissez ce formulaire pour ajouter une personne autorisée à accéder à la partie admin du site.</p>

     <form action="" method="POST">
            <div class="form-group">
                <label for="pseudo"><strong>Ajouter un pseudo :</strong></label>
                <input type="text" name="pseudo" id="pseudo" class="form-control" required/>
            </div>
            <div class="form-group">
                <label for="email"><strong>Ajouter un email :</strong></label>
                <input type="email" name="email" id="email" class="form-control" required/>
            </div>
            <div class="form-group">
                <label for="mdp"><strong>Ajouter un mot de passe :</strong></label>
                <input type="password" name="mdp" id="mdp" class="form-control" required/>
            </div>
            <div class="form-group">
                <label for="mdp2"><strong>Confirmer le mot de passe :</strong></label>
                <input type="password" name="mdp2" id="mdp2" class="form-control" required/>
            </div>
            <div class="pt-3">
                <button type="button" class="btn btn-danger mr-auto "><a href="?p=Comptes" class="text-white">Annuler</a></button>
                <button type="submit" name="submit" class="btn btn-lg btn-primary inline pull-right">Ajouter un compte</button>
            </div>  
        </form>
<?php 
if(isset($alerte)) echo $alerte;
?>
     
     
     </main>



    <script src= "https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity= "sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin= "anonymous" ></script>    
    <script src= "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity= "sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin= "anonymous" ></script>
    <script src= "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity= "sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin= "anonymous" ></script>
</body>
</html>