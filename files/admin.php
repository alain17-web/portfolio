<?php 

$page='admin.php';



if(isset($_POST['monpseudo'],$_POST['monmdp'])){

    $monpseudo = htmlspecialchars(strip_tags(trim($_POST['monpseudo'])),ENT_QUOTES);
    $monmdp = htmlspecialchars(strip_tags(trim($_POST['monmdp'])),ENT_QUOTES);
     

    if(!empty($monpseudo) && !empty($monmdp)){

        


        $req = "SELECT * FROM inscription WHERE pseudo = '$monpseudo' ";
        $result = mysqli_query($db,$req);

        
        if(mysqli_num_rows($result) === 1 ){

                $row = mysqli_fetch_assoc($result);
                
                $mdp_hash = $row['mdp'];
                $userpseudo = $row['pseudo'];
                $username = $row['nom'];

                if(password_verify($monmdp,$mdp_hash) && ($userpseudo == $monpseudo)){

                    $_SESSION['masession'] = session_id();
                    $_SESSION['nom'] = $username;
                    
                    header("Location:?p=Accueil admin");
                    exit();
                }
                else{
                    $alerte = "<h2 class='text-center text-danger'>Le pseudo ou le mot de passe est incorrect</h2>";
                }
        }
        else{
            $alerte = "<h2 class='text-center text-danger'>Le pseudo ou le mot de passe est incorrect</h2>";
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
    <title>accès admin</title>
</head>
<body style="background-color:#eedbb6; height:100vh;background-size:cover">
<?php require "content/header.php";?>
<div class="mt-5 pt-5">
<br><br>


</div>
<div class="container mt-5 pt-5">
    <h1 class="text-center text-info">Un pseudo et un mot de passe sont requis pour se connecter à l'ADMIN.</h1>  
        <form action="" method="POST">
            <div class="form-group">
                <label for="monpseudo"><strong>Votre pseudo :</strong></label>
                <input type="text" name="monpseudo" id="monpseudo" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="monmdp"><strong>Votre mot de passe :</strong></label>
                <input type="password" name="monmdp" id="monmdp" class="form-control"/>
            </div>
            <div class="text-center pt-3">
                <button type="submit" name="submit" class="btn btn-primary">Se connecter</button>
            </div>  
        </form>
    <div class="alert alert-warning text-center mt-5 pt-5">
        <h1 class="text-center">Pas de compte ? Inscrivez-vous</h1><br><br>
        <button class="btn btn-info"><a class="h3 text-white" href="?p=Inscription">Vers Inscription</a></button>
    </div>
<?php 
if(isset($alerte)) echo $alerte;
?>
</div>
<div id="footer" class="mt-5 pt-5"><?php require "content/footer.php"; ?></div>



    <script src= "https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity= "sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin= "anonymous" ></script> 
    <script src= "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity= "sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin= "anonymous" ></script>
    <script src= "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity= "sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin= "anonymous" ></script>
</body>
</html>