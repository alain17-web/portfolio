<?php



if(isset($_POST['id']) && !empty($_POST['id'])){

    $db = mysqli_connect("localhost","root","root","portfolio");
        mysqli_set_charset($db,"utf8");

        $sql = "DELETE FROM inscription WHERE id = ?";

        if($stmt = mysqli_prepare($db,$sql)){
            mysqli_stmt_bind_param($stmt,"i",$param_id);

            $param_id = trim($_POST['id']);

            if(mysqli_stmt_execute($stmt)){
                $alerte = "<div class='alert alert-success text-center mt-5'>
                                    <h2 class='text-center text-success'>Le compte a été supprimé.</h2>
                                <button class='btn btn-success'><a href='?p=Comptes' class='text-white'> Retour à la liste des comptes</a></button>
                                </div>";
            }
            else{
                $alerte = "<div class='container-fluid mt-5 pt-5'>
                <div class='row text-center mt-5'>
                    <div class='alert alert-danger text-center mx-auto'>
                        <h2 class='display-4'>Le compte n'a pas pu être supprimé.</h2>
                        <a href='?p='Comptes' class='text-white' >Retour à la liste des comptes</a>
                    </div>
                </div>
            </div>";
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($link);
}
else{
    if(empty(trim($_GET['id']))){
        header("location:./");
        exit();
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
    <title>supprimer un compte</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1>Supprimer le compte</h1>
                </div>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                    <div class="alert alert-danger fade in">
                        <input type="hidden" name="id" value="<?php echo trim($_GET['id']);?>"/>
                        <p>Etes-vous certain de vouloir supprimer ce compte ?</p><br>
                        <p>
                            <input type="submit" value="Oui" class="btn btn-danger">
                            <a href="?p=Comptes" class="btn btn-default">Non</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
        <?php
        if(isset($alerte)) echo $alerte;
        ?>
    </div>
    

    <script src= "https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity= "sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin= "anonymous" ></script>    
    <script src= "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity= "sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin= "anonymous" ></script>
    <script src= "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity= "sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin= "anonymous" ></script>
</body>
</html>