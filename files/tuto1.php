<?php $page='tuto1.php';?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" href= "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity= "sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin= "anonymous" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alef&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/portfolio.css">
    <title>Envoi d'un mail par formulaire de contact HTML 5</title>
</head>
<body id="tuto1">
<?php require "content/header.php";?>
    
<div class="container-fluid mt-5 pt-5">
    <div class="row">
        <div class="col-6 offset-3 mt-5 mb-5">
        <h1>Un mail par formulaire de contact HTML5</h1>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-8 offset-2">
            <p class="h3">Dans ce petit tuto, je vais décomposer en 8 étapes l'envoi d'un mail en PHP via un formulaire basique grâce à la fonction de PHP <a href="https://www.php.net/manual/fr/function.mail.php" target="_blank">"mail()"</a>. Les tutoriels sur le sujet abondent sur internet et il existe beaucoup d'autres façons de procéder.</p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-8 offset-2">
            <h2 class="text-center">1ère étape : Réalisation d'un formulaire simple en HTML</h2>
            <img src="img/code1.png" alt="screenshot de code" class="img-fluid d-block w-100">
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-8 offset-2">
            <p class="h3">Pour ce formulaire, il est demandé à l'utilisateur de renseigner 3 champs: son nom, son adresse mail et un message. L'attribut "required" rend le remplissage de ces champs obligatoire. On opte pour la méthode d'envoi des données <a href="https://www.w3schools.com/php/php_superglobals_post.asp" target="_blank">"POST"</a> qui a entre autres avantages d'offrir un niveau de sécurité plus élevé que l'autre méthode possible qui est <a href="https://www.w3schools.com/php/php_superglobals_get.asp" target="_blank">"GET"</a>. L'attribut " action" indique le fichier de destination où seront traitées les données. Ici, il reste vide ce qui renvoie vers le fichier courant.</p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-8 offset-2">
            <h2 class="text-center">2ème étape : Vérification de l'envoi du formulaire</h2>
            <img src="img/code2.png" alt="screenshot de code" class="img-fluid d-block w-100">
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-8 offset-2">
            <p class="h3">Avant de s'occuper de l'envoi du mail, il vaut d'abord mieux vérifier que l'envoi du formulaire se déroule correctement. On va donc se placer tout en haut du document, au-dessus du "!DOCTYPE html" et taper la ligne de code PHP ci-dessus, qui va vérifier l'existence des champs "lenom","lemail" et "lemessage" grâce à la fonction <a href="https://www.php.net/manual/fr/function.isset.php" target="_blank">"isset"</a>. Attention, l'existence des champs ne signifie pas que ceux-ci soient remplis. Il faudra aussi vérifier cette condition. </p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-8 offset-2">
            <h2 class="text-center">3ème étape : Création des variables</h2>
            <img src="img/code3.png" alt="screenshot de code" class="img-fluid d-block w-100">
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-8 offset-2">
            <p class="h3">Pour une lecture plus aisée, on crée les 3 variables $lenom, $lemail et $lemessage qui remplaceront les $_POST['...'] dans le code. On en profite pour ajouter des couches de sécurité supplémentaires en placant devant la donnée $_POST['...'] transmise par l'utilisateur un <a href="https://www.php.net/manual/fr/function.trim.php" target="_blank">"trim"</a> (qui supprime les espaces ou autres caractères qui auraient pu être tapés par erreur ou par mauvaise intention en début et fin de chaîne), ainsi qu'une fonction <a href="https://www.php.net/manual/fr/function.strip-tags" target="_blank">"strip_tags"</a> ( qui supprime les balises HTML et PHP d'une chaîne).Pour l'adresse mail, l'ajout d'une fonction <a href="https://www.php.net/manual/fr/function.filter-var.php" target="_blank">"filter_var"</a> utilisée avec le filtre "FILTER_VALIDATE_EMAIL" permet de vérifier que le format de l'adresse mail renseignée est correct. Attention cela ne vérifie pas qu'elle existe réellement, seulement que sa syntaxe est valide.</p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-8 offset-2">
            <h2 class="text-center">4ème étape : Vérification des valeurs</h2>
            <img src="img/code4.png" alt="screenshot de code" class="img-fluid d-block w-100">
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-8 offset-2">
            <p class="h3">On peut ensuite vérifier que les valeurs rentrées par l'utilisateur sont bien différentes de "vides" ou "false", c'est-à-dire que tous les champs ont été remplis correctement, avec une fonction <a href="https://www.php.net/manual/fr/function.empty.php" target="_blank">"empty"</a> inversée par un "!" ( = not). Cette vérification se superpose à l'attribut "required" dans le formulaire qui empêche déjà l'oubli d'un champ mais qui est facilement contournable pour quelqu'un de mal intentionné.</p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-8 offset-2">
            <h2 class="text-center">5ème étape : Préparation du mail</h2>
            <img src="img/code5.png" alt="screenshot de code" class="img-fluid d-block w-100">
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-8 offset-2">
            <p class="h3">Ces vérifications effectuées, on peut préparer le mail et en définir le destinataire (ici $monmail) ainsi que l'apparence du message ($titre et $messageFinal) qui sera affiché à la réception d'un nouveau mail. Il n'est pas obligatoire mais préférable du point de vue de la sécurité de définir également une seule adresse mail ($mailserveur) d'où seront envoyées toutes les données rentrées via le formulaire plutôt que de les recevoir de plusieurs adresses différentes au risque qu'elles ne se logent dans les spams.</p>
            <p class="h3">Il faut enfin rajouter les entêtes obligatoires "From:" et "X-Mailer: PHP/' . phpversion()". Il est par ailleurs possible de rajouter des entêtes supplémentaires comme "Reply-To","Cc","Bcc",..</p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-8 offset-2">
            <h2 class="text-center">6ème étape : Envoi du mail</h2>
            <img src="img/code6.png" alt="screenshot de code" class="img-fluid d-block w-100"><br>
            <p class="h3">...ou encore mieux, en rajoutant un "@" devant "mail()" qui va empêcher l'affichage des messages d'erreurs en cas de bug.</p>
            <img src=img/code7.png alt="screenshot de code" class="img-fluid d-block w-100">
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-8 offset-2">
            <p class="h3">La fonction mail() actionne l'envoi du mail.</p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-8 offset-2">
            <h2 class="text-center">7ème étape : Préparation des messages de confrmation et d'erreurs</h2>
            <img src="img/code8.png" alt="screenshot de code" class="img-fluid d-block w-100">
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-8 offset-2">
            <p class="h3"> L'étape suivante est de créer une variable ($alert) qui stockera un message informant l'utilisateur du succès ("if($envoi)") ou de l'échec ("else") de l'envoi du mail. Ici, j'ai utilisé une classe alerte bootstrap avec un fond vert en cas de succès et rouge en cas d'échec.</p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-8 offset-2">
            <h2 class="text-center">8ème étape : Affichage des messages de confrmation et d'erreurs</h2>
            <img src="img/code9.png" alt="screenshot de code" class="img-fluid d-block w-100">
        </div>
    </div>
    <div class="row mt-5 pb-5">
        <div class="col-8 offset-2 pb-5">
            <p class="h3"> Pour cette dernière étape, il faut retourner dans la partie HTML du fichier, juste avant la balise "form" et y écrire une ligne de code PHP qui soit ("if(isset($erreur) affiche le message stocké dans la variable $erreur, soit ("else") renvoie vers le fomulaire. Et voilà, il n'y a plus qu'à tester...</p>
            <p class="text-center"><button class="btn btn-info rounded"><a class="h3 text-white" href="?p=Contact">Vers formulaire de Contact</a></button></p>
        </div>
    </div>
    
    <div id="footer" class="mt-5"><?php require "content/footer.php"; ?></div>

</div>

    
    <script src= "https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity= "sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin= "anonymous" ></script> 
    <script src= "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity= "sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin= "anonymous" ></script>
    <script src= "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity= "sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin= "anonymous" ></script>
</body>
</html>