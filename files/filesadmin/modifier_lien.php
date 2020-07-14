<?php 

if(isset($_POST['idLiens'],$_POST['nomSite'],$_POST['theurl'],$_POST['thedescription'],$_POST['categorie'])){

    $idLiens = (int) $_POST['idLiens'];
    $nomSite = htmlspecialchars(strip_tags(trim($_POST['nomSite'])),ENT_QUOTES);
    $theurl = filter_var($_POST['theurl'],FILTER_VALIDATE_URL);
    $thedescription = htmlspecialchars(strip_tags(trim($_POST['thedescription']),'<p><a><img><br><strong><b><i><em>'),ENT_QUOTES);
    $categorie = htmlspecialchars(strip_tags(trim($_POST['categorie'])),ENT_QUOTES);

    if(empty($nomSite)||empty($categorie)||$theurl === false || empty($idLiens)){
        
        $alerte = "<h2 class='text-center text-danger'>Les champs ne sont pas correctement remplis</h2>";
    }

    else{

        

        $sql = "UPDATE Links SET nomSite='$nomSite',theurl='$theurl',thedescription='$thedescription',categorie='$categorie' WHERE idLiens = $idLiens";
        
        $update = mysqli_query($db,$sql) or die(mysqli_error($db));
        
        if ($update){
                $confirm = "<div class='alert alert-success text-center mt-5'>
                <h2 class='text-center text-success'>Le lien a bien été modifié.</h2>
                <button class='btn btn-success'><a href='?p=Liste liens' class='text-white'> Retour à la liste des liens</a></button>
                </div>";
        
            }
            else{
                
                $alerte ="<h2 class='text-center text-danger'>Ce lien n'existe pas</h2>";
            }
        }

}  

    if(isset($_GET['id'])&&ctype_digit($_GET['id'])){

        $id = (int) $_GET['id'];

        $sql = "SELECT * FROM Links WHERE idLiens = $id";
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
    <title>modifier lien</title>
</head>
<body>
<?php require 'contentadmin/headeradmin.php';?>
<main class="container mt-5 pt-5">
    <header>
        <h1 class="h1 text-center mt-5">Modification du lien</h1>
        <p class="h3 mt-5">Bonjour <?=$_SESSION['nom']?>.<p>
        <p class="lead"> Remplissez les champs pour modifier le lien <strong><?php echo (isset($alerte))? $alerte: $liens['nomSite'] ?></strong></p>
        <p class="h4 "><?=$liens['theurl']?></p>
    </header>
    <?php 
        if(!isset($alerte)){
        ?>
    <form action="" method="post" class="mt-5 pt-5">
        <div class="form-group form-row">
            <label for="nomSite" class="col-3"><strong>Modifier le nom du site:</strong></label>
            <input type="text" name="nomSite"  class="form-control col-9" placeholder="Modifier le nom du site" required value="<?=$liens['nomSite']?>"/>
        </div>
        <div class="form-group form-row">
            <label for="theurl" class="col-3"><strong>Modifier l'URL  :</strong></label>
            <input type="text" name="theurl" id="theurl" class="form-control col-9" placeholder="Modifier l'URL" required value="<?=$liens['theurl']?>"/>
        </div>
        <div class="form-group form-row">
            <label for="categorie" class="col-3"><strong>Modifier la catégorie :</strong></label>
            <input type="text" name="categorie"  class="form-control col-9" placeholder="Modifier la catégorie" required value="<?=$liens['categorie']?>"/>
        </div>
        <div class="form-group form-row">
            <label for="thedescription" class="col-3"><strong>Modifier la description :</strong></label>
            <textarea  name="thedescription"  class="form-control col-9" placeholder="Modifier la description"><?=$liens['thedescription']?></textarea>
        </div>
        <div class="pt-3">
            <input type="hidden" name="idliens" value="<?=$liens['idLiens']?>"/>
            <button type="button" class="btn btn-danger mr-auto "><a href="?p=Liste liens" class="text-white">Annuler</a></button>
            <button type="submit" name="submit" class="btn btn-primary inline pull-right">Modifier</button>
        </div>  
    </form>
</main>
    <?php
    }
    if(isset($confirm)) echo $confirm;
    ?>
 
    <script src= "https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity= "sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin= "anonymous" ></script>    
    <script src= "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity= "sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin= "anonymous" ></script>
    <script src= "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity= "sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin= "anonymous" ></script>
</body>
</html>