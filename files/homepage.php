<?php $page='homepage.php';?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" href= "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity= "sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin= "anonymous" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Antic+Didone&family=Major+Mono+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/portfolio.css">
    <title>Homepage</title>
</head>
<body>

<?php require "content/header.php"; ?>
    <div class="container-fluid mx-0 px-0">
        <div class="row no-gutters mx-0">
            <div class="col-xl-6 lg-6 d-none d-lg-block px-0" id="oasis">
                <img src="img/desert12.jpg" alt="photo de désert" class="img-fluid" >
            </div>
            <div class="col-lg-6 md-12 sm-12 xs-12 px-0" id="oasis2">
                <img src="img/desert12.jpg" alt="photo de désert" class="img-fluid">
            </div>
        </div>
    </div>
    <div class="container-fluid px-0">
        <div class="row mt-4" id="bienvenue">
             <div class="col-6 offset-3 p-2 my-3 bg-light" >
                <h1 class="h1 text-warning text-center"  >PORTFOLIO</h1>
                <p class="h2 text-center"><strong>Bienvenue !</strong></p>
                <p class="text-center"><strong>J'ai débuté une formation de développeur web en Janvier 2020 au<a href="https://www.cf2m.be" target="_blank"> CF2m</a> à Bruxelles.</strong></p>
                <p class="text-center" ><strong>Cela ne fait que quelques mois que je découvre la programmation et c'est devenu une vraie passion !</strong></p>
                <p class="text-center" ><strong>J'espère que vous prendrez autant de plaisir à visiter mon site que j'en ai eu à le réaliser.</strong></p>
                <p class="text-center" ><strong>N'hésitez pas à me laisser un <a href="?p=Contact">message.</a></strong></p>
            </div>
        </div>
    </div>  
    <?php require "content/footer.php"; ?>
   


    <script src= "https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity= "sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin= "anonymous" ></script> 
    <script src= "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity= "sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin= "anonymous" ></script>
    <script src= "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity= "sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin= "anonymous" ></script>
</body>
</html>