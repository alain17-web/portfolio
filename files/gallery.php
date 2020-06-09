<?php $page='gallery.php';?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" href= "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity= "sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin= "anonymous" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Antic+Didone&family=Major+Mono+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">
    <link  href="http://fonts.googleapis.com/css?family=Reenie+Beanie:regular" rel="stylesheet" type="text/css"> 
    
    <title>Gallery</title>
</head>
<body style="background-color:#eedbb6">
<?php require "content/header.php"; ?>
<div class="container-fluid mt-5">
    <h1 class="h1 text-info text-center pt-5 my-5" style="font-family: 'Major Mono Display', monospace;
    font-family: 'Antic Didone', serif;">Ma galerie</h1>

  <div class="row justify-content-around p-5">
    <div class="card col-sm-12 col-md-5 px-0 border-0" >
      <img class="card-img-top" src="img/prefo8.png" alt="screenshot site travail de fin de préformation">
    <div class="card-body text-center">
    <h3 class="card-title" style="font-family: 'Special Elite', cursive;">Travail de fin de pré-formation</h3>
    <p class="card-text" style="font-family: 'Special Elite', cursive;">Site de fin de préformation réalisé en HTML5 et CSS3</p>
    <p class="card-text" style="font-family: 'Special Elite', cursive;">Février 2020</p>
    <a href="http://alain.webdev-cf2m.be/travail_prefo/pageshtml%20&%20css/" target="_blank" class="btn btn-success ">VISITER LE SITE</a>
  </div>
  </div>
  <div class="card col-sm-12 col-md-5 px-0 border-0" >
      <img class="card-img-bottom" src="img/siteK9.png" alt="screenshot site drkatarinaroos.be">
  <div class="card-body text-center">
    <h3 class="card-title" style="font-family: 'Special Elite', cursive;">Projet personnel - Site web pour médecin</h3>
    <p class="card-text" style="font-family: 'Special Elite', cursive;">Premier site réalisé en PHP procédural, HTML5 et Bootstrap 4</p>
    <p class="card-text" style="font-family: 'Special Elite', cursive;">Mai 2020</p>
    <a href="http://drkatarinaroos.be" target="_blank" class="btn btn-success">VISITER LE SITE</a>
  </div>
</div>

<div class="row justify-content-around p-5">
  <div class="card col-sm-12 col-md-5 px-0 border-0" >
    <img class="card-img-top" src="img/chess1.jpeg" alt="photo d'échiquier">
  <div class="card-body text-center">
    <h3 class="card-title" style="font-family: 'Special Elite', cursive;">A venir - Jeu d'échec</h3>
    <p class="card-text" style="font-family: 'Special Elite', cursive;">Jeu d'échec à réaliser en Javascript</p>
    <p class="card-text" style="font-family: 'Special Elite', cursive;">??/????</p>
    <a href="" target="_blank" class="btn btn-warning ">EN PROJET</a>
  </div>
  </div>
  <div class="card col-sm-12 col-md-5 px-0 border-0" >
    <img class="card-img-bottom" src="img/petra1.jpeg" alt="photo de Petra">
  <div class="card-body text-center">
    <h3 class="card-title" style="font-family: 'Special Elite', cursive;">A venir - Projet personnel - Petra</h3>
    <p class="card-text" style="font-family: 'Special Elite', cursive;">A réaliser en HTML5 et CSS3</p>
    <p class="card-text" style="font-family: 'Special Elite', cursive;">??/????</p>
    <a href="" target="_blank" class="btn btn-warning">EN PROJET</a>
  </div>
  </div>
</div>
    
</div>
<div id="footer"><?php require "content/footer.php"; ?></div>

    <script src= "https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity= "sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin= "anonymous" ></script> 
    <script src= "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity= "sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin= "anonymous" ></script>
    <script src= "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity= "sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin= "anonymous" ></script>
</body>
</html>