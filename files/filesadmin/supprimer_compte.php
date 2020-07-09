<?php 

if(isset($_GET['id'])&&ctype_digit($_GET['id'])){

    $id = (int) $_GET['id'];
    
    if(isset($_GET['ok'])){

    $db = mysqli_connect("localhost","root","root","portfolio");
    mysqli_set_charset($db,"utf8");
        
    $sql = "DELETE FROM  inscription WHERE id = $id";
    mysqli_query($db,$sql) or die("Erreur: ".mysqli_errno($db));
    
    $alerte = "<h2 class='text-center text-success'>Le compte a bien été supprimé.</h2>";

    }

    /*$db = mysqli_connect("localhost","root","root","portfolio");
    mysqli_set_charset($db,"utf8");

    $sql = "SELECT pseudo FROM inscription WHERE id = $id";
    $result = mysqli_query($db,$sql) or die("Erreur: ".mysqli_errno($db));

    if(mysqli_num_rows($result)){
        $comptes = mysqli_fetch_assoc($result);
    }
    else{
        $alerte = "<h2 class='text-center text-info'>Ce compte n'existe pas</h2>";
    }*/
    
}
else{
    
    $alerte = "<h2 class='text-center text-info'>Y a un bug !</h2>";
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" href= "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity= "sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin= "anonymous" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>suppression d'un compte</title>
</head>
<body>
<?php require 'contentadmin/headeradmin.php';?>
<main class="container mt-5 pt-5">
    <header>
        <h1 class="h1 text-center mt-5 pt-5">Suppression du compte</h1>
    </header>
    <section class="alert alert-danger mt-5 text-center">

        <?php 
        if(!isset($alerte)){
        ?>
        <p class="h3">Bonjour <?=$_SESSION['nom']?>.<p>
        <p class="h3"> Etes-vous vraiment certain de vouloir supprimer ce compte ?</p>
        <hr class="mt-3">
        <a class="btn btn-danger inline pull-left mt-5" href="?p=Supprimer un compte&id=<?=$id?>&ok" role="button">Supprimer définitivement !</a>
        <a class="btn btn-primary inline pull-right mt-5" href="?p=Comptes" role="button">Ne pas supprimer</a>
        <?php
        }
        else{
        ?>
            <h3>Retour à la liste des <a href="?p=Comptes">Comptes</a></h3>;
        <?php
        } 
        if(isset($alerte)) echo $alerte;
    
        ?>
    </section>
    
</main>

    <script src= "https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity= "sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin= "anonymous" ></script>    
    <script src= "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity= "sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin= "anonymous" ></script>
    <script src= "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity= "sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin= "anonymous" ></script>
</body>
</html>