<?php 



?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" href= "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity= "sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin= "anonymous" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>CRUD galerie</title>
</head>
<body>
<?php require 'contentadmin/headeradmin.php';?>

<main class="container">

    <h1 class="font-weight-light text-center mt-5 pt-5 mb-0">Administration de la galerie</h1>

    <header class="row mt-5 text-center">
        <p class ="lead offset-3 col-6">Bonjour <strong><?=$_SESSION['nom']?></strong>. Cette page permet d'administrer les images de la galerie</p>
    </header>

  <hr class="mt-2 mb-5">

    <section id="tabgallery">

        <div class="row text-center text-lg-left">

            <div class="col-lg-3 col-md-4 col-6">
                <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="img/desert12.jpg" alt="desert"></a>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="img/montagne1.jpg" alt="montagne"></a>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="img/screen29.jpg" alt="screen"></a>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="img/petra1.jpg" alt="petra"></a>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="img/prefo8.jpg" alt="site prefo"></a>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="img/chess1.jpg" alt="chess"></a>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="img/siteK9.jpg" alt="site K"></a>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="img/cg1.jpeg" alt="arbres"></a>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="img/cg2.jpeg" alt="river"></a>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="img/cg3.jpeg" alt="waterfalls"></a>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="img/cg4.jpeg" alt="sunrise"></a>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="" alt=""></a>
            </div>
            </div>
    </section>

    <hr class="mt-2 mb-5">

    <section id="upload" class="mt-5">
        <h3>Uploader une nouvelle image</h3>
        <h1 class="d-3 text-warning">EN CONSTRUCTION !</h1>
        <form action="" method="post" class="text-center mt-5 pt-5" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" name="filename" placeholder="File name...">
            </div>
            <div class="form-group">
                <input type="text" name="filetitle" placeholder="Image title...">
            </div>
            <div class="form-group">
                <input type="text" name="filedesc" placeholder="Image description...">
            </div>
            <div class="form-group">
                <input type="file" name="file">
            </div>
                <button type="submit" class="btn btn-primary mt-3 mb-5" name="submit">UPLOAD</button> 
            </form>
        </section>
    
    
</main>

    <script src= "https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity= "sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin= "anonymous" ></script> 
    <script src= "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity= "sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin= "anonymous" ></script>
    <script src= "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity= "sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin= "anonymous" ></script>
    
</body>
</html>