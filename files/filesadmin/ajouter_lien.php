<?php 

//session_start();

if(isset($_POST['nomSite'],$_POST['theurl'],$_POST['description'],$_POST['categorie'])){

    $nomSite = htmlspecialchars(strip_tags(trim($_POST['nomSite'])),ENT_QUOTES);
    $theurl = filter_var($_POST['theurl'],FILTER_VALIDATE_URL);
    $description = htmlspecialchars(strip_tags(trim($_POST['description']),'<p><a><img><br><strong><b><i><em>'),ENT_QUOTES);
    $categorie = htmlspecialchars(strip_tags(trim($_POST['categorie'])),ENT_QUOTES);

    if(empty($nomSite)||empty($categorie)||$theurl === false){
        $alerte = "<h2 class='text-center text-danger'>Les champs ne sont pas correctement remplis</h2>";
    }
    else{

        $db = mysqli_connect("localhost","root","root","portfolio");
            mysqli_set_charset($db,"utf8");

        $sql = "INSERT INTO Links(nomSite,theurl,description,categorie) VALUES ('$nomSite','$theurl','$description','$categorie')";
        $insert = mysqli_query($db,$sql) or die(mysqli_error($db));

        $alerte = "<div class='alert alert-success text-center mt-5'>
                <h2 class='text-center text-success'>Le lien a bien été ajouté.</h2>
                <button class='btn btn-success'><a href='?p=Liste liens' class='text-white'> Retour à la liste des liens</a></button>
                </div>";
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
    <title>Ajout lien</title>
</head>
<body>
<?php require 'contentadmin/headeradmin.php';?>
<main class="container">
     <h1 class="text-center mt-5">Admin - Ajouter un lien</h1>
     
     <p class="lead text-center">Remplissez ce formulaire pour ajouter un nouveau lien à la base de données</p>

     <form action="" method="POST">
        <div class="form-group">
            <label for="nomSite"><strong>Nom du site :</strong></label>
            <input type="text" name="nomSite" id="nomSite" class="form-control" required/>
        </div>
        <div class="form-group">
            <label for="theurl"><strong>URL :</strong></label>
            <input type="text" name="theurl" id="theurl" class="form-control" required/>
        </div>
        <div class="form-group">
            <label for="description"><strong>Description :</strong></label>
            <input type="text" name="description" id="description" class="form-control" placeholder="facultatif"/>
        </div>
        <div class="form-group">
            <label for="categorie"><strong>Catégorie :</strong></label>
            <input type="text" name="categorie" id="categorie" class="form-control" required/>
        </div>
        <div class="pt-3">
                <button type="button" class="btn btn-danger mr-auto "><a href="?p=Liste liens" class="text-white">Annuler</a></button>
                <button type="submit" name="submit" class="btn btn-lg btn-primary inline pull-right">Ajouter ce lien</button>
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