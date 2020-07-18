<?php 

$page='crudgalerie.php';

if(!isset($_SESSION['masession'])||$_SESSION['masession']!==session_id()){
header("Location:?p=Déconnexion");
exit();
}

if(isset($_POST['submit'])){

    $newFileName = $_POST['filename'];
    if(empty($newFileName)){
        $newFileName = "gallery";
    }
    else{
       $newFileName = strtolower(str_replace(" ", "-", $newFileName)); 
    }
    $imageTitle = $_POST['filetitle'];
    $imageDesc = $_POST['filedesc'];

    $file = $_FILES['file'];

    $fileName = $file['name'];
    $fileType = $file['type'];
    $fileTempName = $file['tmp_name'];
    $fileError = $file['error'];
    $fileSize = $file['size'];

    $fileExt = explode(".", $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array("jpg", "jpeg", "png");

    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 2000000){

                $imageFullName = $newFileName . "." . uniqid("", true) . "." . $fileActualExt;
                $fileDestination = "img/" . $imageFullName;

                if(empty($imageTitle) || empty($imageDesc)){

                    echo "Le titre et la description sont obligatoires.";
                    exit();
                }
                else{
                    $sql = "SELECT * FROM galerie_tuto";
                    $stmt = mysqli_stmt_init($db);
                    if(!mysqli_stmt_prepare($stmt, $sql)){

                            echo "Erreur dans la requête SQL";
                    }
                    else{
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        $rowCount = mysqli_num_rows($result);
                        $setImageOrder = $rowCount + 1;

                        $sql = "INSERT INTO galerie_tuto (titleGallery, descGallery, imageFullNameGallery, orderGallery) VALUES (?,?,?,?)";
                        if(!mysqli_stmt_prepare($stmt, $sql)){

                            echo "Erreur dans la requête SQL";
                        }
                        else{

                            mysqli_stmt_bind_param($stmt,"ssss",$imageTitle,$imageDesc,$imageFullName,$setImageOrder);
                            mysqli_stmt_execute($stmt);

                            move_uploaded_file($fileTempName,$fileDestination);

                            echo "Le fichier a bien été uploadé";

                        }
                    }

                }

            }
            else{
                echo "Le fichier est trop lourd";
                exit();
            }

        }
        else{
            echo "Il y a une erreur";
            exit();
        }

    }
    else{
        echo "Type de fichier incorrect";
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
                <!--<h4>Désert</h4>
                <p>Photo de Homepage</p>-->
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="img/montagne1.jpg" alt="montagne"></a>
                <!--<h4>Montagnes</h4>
                <p>Photo de page Contact</p>-->
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="img/screen29.jpg" alt="screen"></a>
                <!--<h4>2cran</h4>
                <p>Photo de pages Liens</p>-->
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="img/petra1.jpg" alt="petra"></a>
                <!--<h4>Petra</h4>
                <p>Photo de projet</p>-->
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="img/prefo8.jpg" alt="site prefo"></a>
                <!--<h4>Préfo</h4>
                <p>Photo de site préfo</p>-->
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="img/chess1.jpg" alt="chess"></a>
                <!--<h4>Chess game</h4>
                <p>Photo de projet</p>-->
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="img/siteK9.jpg" alt="site K"></a>
                <!--<h4>Site Katarina</h4>
                <p>Photo de Homepage site K</p>-->
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="img/cg1.jpeg" alt="arbres"></a>
                <!--<h4>Arbres</h4>
                <p>photo d'arbres</p>-->
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="img/cg2.jpeg" alt="river"></a>
                <!--<h4>Rivière</h4>
                <p>Photo de rivière</p>-->
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="img/cg3.jpeg" alt="waterfalls"></a>
                <!--<h4>Cascades</h4>
                <p>Photo de cascades</p>-->
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="img/cg4.jpeg" alt="sunrise"></a>
                <!--<h4>Coucher de soleil</h4>
                <p>Photo de coucher de soleil</p>-->
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="" alt=""></a>
                <!--<h4></h4>
                <p></p>-->
            </div>
            </div>
    </section> 

    <?php 

    $sql = "SELECT * FROM galerie_tuto ORDER BY orderGallery DESC";
    $stmt = mysqli_stmt_init($db);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        
        echo "Erreur dans la requête SQL";
    }
    else{
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        while ($row = mysqli_fetch_assoc($result)){

            echo '<a href="#">
        <div></div>
        <h3>'.$row['titleGallery'].'</h3>
        <p>'.$row['descGallery'].'</p>
        </a>';

        }
    }


    
    ?>

</main>

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
    
    


    <script src= "https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity= "sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin= "anonymous" ></script> 
    <script src= "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity= "sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin= "anonymous" ></script>
    <script src= "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity= "sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin= "anonymous" ></script>
    
</body>
</html>