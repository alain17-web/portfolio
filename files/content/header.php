
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
                <a class="nav-link dropdown-toggle px-5 <?php if($page=='tuto1.php' || $page=='tuto2.php'){echo 'active';}?>" href="#" id="tutorielderoulant" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tutoriels</a>
                    <div class="dropdown-menu bg-warning" aria-labelledby="tutorielderoulant" id="deroulant">
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
    
    