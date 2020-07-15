<?php 
if(!isset($_SESSION['masession'])||$_SESSION['masession']!==session_id()){
header("Location:?p=Déconnexion");
exit();
}


if(isset($_POST['id'],$_POST['nom'],$_POST['pseudo'],$_POST['email'])){

    $id =(int) $_POST['id'];
    $nom = htmlspecialchars(strip_tags(trim($_POST['nom'])),ENT_QUOTES);
    $pseudo = htmlspecialchars(strip_tags(trim($_POST['pseudo'])),ENT_QUOTES);
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    
    
    if(empty($id) || empty($nom)|| empty($pseudo) || empty($email)){

        $alerte = "<h2 class='text-center text-danger'>Veuillez saisir tous les champs</h2>";
        var_dump($email);

    }
    else{

        

            
            $reg = "SELECT * FROM inscription WHERE pseudo  = '$pseudo'";
            $checkPseudo = mysqli_query($db,$reg) or die(mysqli_error($db));
            
            if(empty(mysqli_num_rows($checkPseudo))){

            $sql = "UPDATE inscription SET nom='$nom', pseudo='$pseudo' WHERE id=$id";
            $update = mysqli_query($db,$sql) or die(mysqli_error($db));

                if($update){

                    $confirm = "<div class='alert alert-success text-center mt-5'>
                            <h2 class='text-center text-success'>Le compte a bien été modifié.</h2>
                            <button class='btn btn-success'><a href='?p=Comptes' class='text-white'> Retour à la liste des comptes</a></button>
                            </div>";
                }
        
            }
            else{

                $alerte = "<h2 class='text-center text-danger'>Ce pseudo existe déjà</h2>";
            }

        
    }
}
if(isset($_GET['id'])&&ctype_digit($_GET['id'])){

    $id = (int) $_GET['id'];

    $sql = "SELECT id,nom,pseudo,email FROM inscription WHERE id = $id";
    $result = mysqli_query($db,$sql) or die(mysqli_error($db));

    if(mysqli_num_rows($result)){
        $comptes = mysqli_fetch_assoc($result);
    }
    else{

        $erreur = "<h2 class='text-center text-danger'>Ce compte ne peut pas être modifié</h2>";
    }


}else{

    $erreur = "<h2 class='text-center text-danger'>No way Jose !</h2>";
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" href= "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity= "sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin= "anonymous" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>modifer un compte</title>
</head>
<body>
<?php require 'contentadmin/headeradmin.php';?>
<main class="container mt-5 pt-5">
    
    <?php 
    if(isset($alerte)) echo $alerte;

    ?>

    <header>
        <h1 class="h1 text-center mt-5">Modification du compte</h1>
        <p class="h3 text-center mt-5">Bonjour <?=$_SESSION['nom']?></p>
        <p class="lead text-center">Remplissez ce formulaire pour modifier le compte d' une personne autorisée à accéder à la partie admin du site.</p>
    </header>

    <?php 

    if(!isset($erreur)){

    ?>

    <form action="" method="post" class="mt-5 pt-5">
            <div class="form-group">
                <label for="nom"><strong>Modifier le nom :</strong></label>
                <input type="text" name="nom" class="form-control" placeholder="Modifier le nom" required value="<?=$comptes['nom']?>"/>
            </div>
            <div class="form-group">
                <label for="pseudo"><strong>Modifier le pseudo :</strong></label>
                <input type="text" name="pseudo" class="form-control" placeholder="Modifier le pseudo" required value="<?=$comptes['pseudo']?>"/>
            </div>
            <div class="form-group">
                <label for="email"><strong>Modifier l'email :</strong></label>
                <input type="email" name="email"  class="form-control" placeholder="Modifier l'email" required value="<?=$comptes['email']?>"/>
            </div>
            
            <input type="hidden" name="id" value="<?=$comptes['id']?>"/>
            <div class="pt-3">
                <button type="button" class="btn btn-danger mr-auto "><a href="?p=Comptes" class="text-white">Annuler</a></button>
                <button type="submit" name="submit" class="btn  btn-primary inline pull-right">Modifier</button>
            </div>  
    
    </form>
</main>
    <?php
    }
    if(isset($confirm)) echo $confirm;
    ?>
<?php 
?>
    <script src= "https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity= "sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin= "anonymous" ></script>    
    <script src= "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity= "sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin= "anonymous" ></script>
    <script src= "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity= "sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin= "anonymous" ></script>
</body>
</html>