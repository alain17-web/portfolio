<?php 
if(!isset($_SESSION['masession'])||$_SESSION['masession']!==session_id()){
header("Location:?p=Déconnexion");
exit();
}


if(isset($_GET['id'])&&ctype_digit($_GET['id'])){

    $id = (int) $_GET['id'];
    
    if(isset($_GET['ok'])){

    
        
    $sql = "DELETE FROM Links WHERE idLiens = $id";
    mysqli_query($db,$sql) or die("Erreur: ".mysqli_errno($db));
    
    $confirm = "<div class='alert alert-success text-center mt-5'>
            <h2 class='text-center text-success'>Le lien a bien été supprimé.</h2>
            <button class='btn btn-success'><a href='?p=Liste liens' class='text-white'> Retour à la liste des liens</a></button>
            </div>";

    }

    

    $sql = "SELECT nomSite,theurl FROM Links WHERE idLiens = $id";
    $result = mysqli_query($db,$sql) or die("Erreur: ".mysqli_errno($db));

    if(mysqli_num_rows($result)){
        $liens = mysqli_fetch_assoc($result);
    }
    else{
        $alerte = "<h2 class='text-center text-danger'>Ce lien n'existe pas</h2>";
    }
    
}
else{
    
    $alerte = "<h2 class='text-center text-danger'>Même pas en rêve !</h2>";
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
        <h1 class="h1 text-center mt-5 pt-5">Suppression du lien</h1>
    </header>
    <section class="alert alert-secondary mt-5 text-center">

        <?php 
        if(!isset($alerte)){
        ?>
        <p class="h3">Bonjour <?=$_SESSION['nom']?>.<p>
        <p class="h3 text-danger"> Etes-vous vraiment certain de vouloir supprimer le lien <?php echo (isset($alerte))? $alerte: $liens['nomSite'] ?> ?</p>
        <p class="h4 text-danger"><?=$liens['theurl']?></p>
        <hr class="mt-3">
        <a class="btn btn-danger inline pull-left mt-5" href="?p=Supprimer un lien&id=<?=$id?>&ok" role="button">Supprimer définitivement !</a>
        <a class="btn btn-primary inline pull-right mt-5" href="?p=Liste liens" role="button">Ne pas supprimer</a>
        <?php
        }
        else{
        ?>
            <h3>Retour à l'<a href="?p=Accueil admin">accueil de l'admin du site</a></h3>;
            <?php 
        } 
        if(isset($confirm)) echo $confirm;
    
        ?>
    </section>
    
</main>

    <script src= "https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity= "sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin= "anonymous" ></script>    
    <script src= "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity= "sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin= "anonymous" ></script>
    <script src= "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity= "sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin= "anonymous" ></script>
</body>
</html>