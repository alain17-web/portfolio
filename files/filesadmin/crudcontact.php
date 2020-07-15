<?php 
if(!isset($_SESSION['masession'])||$_SESSION['masession']!==session_id()){
header("Location:?p=Déconnexion");
exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" href= "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity= "sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin= "anonymous" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Liste contacts</title>
</head>
<body>
<?php require 'contentadmin/headeradmin.php';?>

    <div class="mt-5 pt-5 text-center">
    <h1>Liste des contacts</h1>
    
    </div>
    
    <div class="container mt-5 pt-5 text-center">
        <div class="row">
            <div class="col">
                <table class="table table-bordered table-striped">
                    <thead >
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Email</th>
                        <th scope="col">Message</th>
                        <th scope="col">Date</th>
                    </tr>
                    </thead>
                <?php

                

                $sql = "SELECT * FROM contact";

                $reponse = mysqli_query($db,$sql) or die("Erreur: ".mysqli_errno($db));

                $nb = mysqli_num_rows($reponse);
                if(empty($nb)){
                    echo "<h4> Aucun réultat à afficher</h4>";
                }
                else{
                    while ($item = mysqli_fetch_assoc($reponse)){

                ?>
                    <tbody>
                        <tr class="text-center">
                            <td><?=$item['nom']?></td>
                            <td><?=$item['email']?></td>
                            <td><?=$item['note']?></td>
                            <td><?=$item['dateMessage']?></td>
                        </tr>
                    </tbody>
                <?php 
                    }
                ?>
                </table>
            </div>
        </div>
    </div>
    <?php
        
    }
    ?>



    <script src= "https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity= "sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin= "anonymous" ></script> 
    <script src= "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity= "sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin= "anonymous" ></script>
    <script src= "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity= "sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin= "anonymous" ></script>
</body>
</html>