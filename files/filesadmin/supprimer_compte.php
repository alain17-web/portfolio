<?php 

$id = $item['id'];

$db = mysqli_connect("localhost","root","root","portfolio");
    mysqli_set_charset($db,"utf8");

$sql = "DELETE FROM TABLE inscription WHERE id = $id";
$suppression = mysqli_query($db,$sql) or die("Erreur: ".mysqli_errno($db));

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>suppression</title>
</head>
<body>
    <h1>Suppression</h1>
    <a href="?p=Comptes">Retour vers Comptes</a>
</body>
</html>