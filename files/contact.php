<?php
     $page='contact.php'; //variable $page pour activer "active" dans header

     

    if(isset($_POST['lenom'],$_POST['lemail'],$_POST['lemessage'])){//vérification de l'existence des champs du formulaire

        
        //transformation des $_POST en variables locales 
        $lenom = htmlspecialchars(strip_tags(trim($_POST['lenom'])),ENT_QUOTES);
        $lemail= filter_var(trim($_POST['lemail']), FILTER_VALIDATE_EMAIL);
        $lemessage = htmlspecialchars(strip_tags(trim($_POST['lemessage'])),ENT_QUOTES);

        if (!empty($lenom) && !empty($lemail) && !empty($lemessage)){

            $monmail = "roosalain17@yahoo.fr";
            $mailserveur = "web2020.alain@gmail.com";
            $titre = "Message du Portfolio";
            $messageFinal = "Message envoyé par : \r\n\r\n";
            $messageFinal .= $lemail . "\r\n\r\n";
            $messageFinal .= "Titre: \r\n\r\n";
            $messageFinal .= $lemessage;

            $entetes = 'From: ' . $mailserveur . "\r\n" . 
                        'Reply-to: ' . $lemail . "\r\n" . 
                        'X-Mailer: PHP/' . phpversion();
                           
            $envoi = @mail($monmail, $titre, $messageFinal, $entetes);
           
                
            
            if($envoi){
                $alert = "<div class='container-fluid mt-5 pt-5>
                                <div class='row text-center mt-5'>
                                    <div class='alert alert-success text-center mx-auto'>
                                        <h2 class='display-4'>Votre mail a bien été envoyé</h2>
                                        <a class='h3' href='?p=Accueil'>Retour à l'accueil</a>
                                    </div>
                                </div>
                            </div>";
                
                
                

                
            }else{
                $alert = "problème serveur. Veuillez recommencer plus tard";
            }

        } else {
                $alert = "<div class='container-fluid mt-5 pt-5'>
                                <div class='row text-center mt-5'>
                                    <div class='alert alert-danger text-center mx-auto'>
                                        <h2 class='display-4'>Veuillez remplir tous les champs correctement</h2>
                                        <a href='' onclick='window.history.go(-1); return false'>Retour au formulaire</a>
                                    </div>
                                </div>
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
     <link href="https://fonts.googleapis.com/css2?family=Teko:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/portfolio.css">
    
    <title>Contact</title>
</head>
<body id="contact">
<?php require "content/header.php"; ?>
    <div class="container-fluid my-auto pt-5" id="form" > 
        <div class="row mt-5 pt-5 pb-5 mb-5">
            <div class="col-md-4 offset-5">
                <h1 class></h1>
            </div>
            </div>
            <?php 
            if(isset($alert)) echo $alert; 
            else{
            ?>
             <form action="" method="POST" name="contact">
                    <div class="row">
                        <div class="col-md-6 offset-3">
                            <div class="form-group text-center">
                                <label for="lenom"><strong>Votre nom*</strong></label>
                                <input name="lenom" id="lenom" required>
                            </div><!--form group-->
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-6 offset-3">
                            <div class="form-group text-center">
                                <label for="lemail"><strong>Votre mail*</strong></label>
                                <input name="lemail" id="lemail" required >
                            </div><!--form-group-->
                        </div>
                    </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-6 offset-3">
                            <div class="form-group text-center" id="lemessage">
                                <label for="lemessage" class="h1"><strong>LAISSEZ-MOI UN MESSAGE</strong></label>
                                <textarea id="lemessage" required name="lemessage" rows="5" class="form-control"></textarea>
                                <p class="small">* Champs obligatoire</p>
                            </div><!--form group-->
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Envoyer</button>
                                </div>
                        </div>
                    </div>
                    <?php 
                    }
                ?>
                </form>

<?php 
    $db = mysqli_connect("localhost","root","root","portfolio");
    mysqli_set_charset($db,"utf8");//connection à la bd portfolio

    $sql = "INSERT INTO contact (nom,email,message)VALUES('$lenom','$lemail','$lemessage')";
    $insertion = mysqli_query($db,$sql);


  ?>  
    </div><!--container-->
    <div id="footer"><?php require "content/footer.php"; ?></div>

    <script src= "https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity= "sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin= "anonymous" ></script> 
    <script src= "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity= "sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin= "anonymous" ></script>
    <script src= "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity= "sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin= "anonymous" ></script>
</body>
</html>

