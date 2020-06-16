<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" href= "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity= "sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin= "anonymous" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!--<link  href="http://fonts.googleapis.com/css?family=Reenie+Beanie:regular" rel="stylesheet" type="text/css">-->
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/portfolio.css">
    
    <title>Header</title>
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand text-info" href="./">Alain Roos - WEB DEV- CF2m</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuprincipal" aria-controls="menuprincipal" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="menuprincipal">
            <ul class="navbar-nav m-auto">
                <li class="nav-item
                    <?php if($page=='homepage.php'){echo 'active';}?>"><a class="nav-link px-5" href="./">Accueil</a>
                </li>
                <li class="nav-item
                <?php if($page=='gallery.php'){echo 'active';}?>"><a class="nav-link px-5" href="?p=Galerie">Galerie</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle px-5 <?php if($page=='tuto1.php' || $page=='tuto2.php'){echo 'active';}?>" href="#" id="menuderoulant" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tutoriels</a>
                    <div class="dropdown-menu bg-warning" aria-labelledby="menuderoulant" id="deroulant">
                        <a class="h4 dropdown-item text-white bg-success" href="?p=tuto1">-Envoi d'un mail par formulaire HTML5</a>
                        <a class="h4 dropdown-item text-white bg-success" href="?p=tuto2">-Gestion d'un espace membre</a>
                    </div>
                </li>
                <li class="nav-item
                <?php if($page=='links.php'){echo 'active';}?>"><a class="nav-link px-5" href="?p=Liens">Liens</a>
                </li>
                <li class="nav-item
                <?php if($page=='contact.php'){echo 'active';}?>"><a class="nav-link px-5" href="?p=Contact">Contact</a>
                </li>
                <li class="nav-item
                <?php if($page=='admin.php'){echo 'active';}?>"><a class="nav-link px-5" href="?p=Admin">Admin</a>
                </li>
             </ul>
        </div>
     </nav>
    

    <script src= "https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity= "sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin= "anonymous" ></script> 
    <script src= "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity= "sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin= "anonymous" ></script>
    <script src= "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity= "sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin= "anonymous" ></script>
</body>
</html>