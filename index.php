<?php
include('cnx.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo"<h1>Listes de controleurs : </h1>";

$sql = $cnx->prepare(" SELECT nom,prenom FROM controleur");
$sql->execute();

$controleur = ($sql->fetch())[0];



echo" <table border=1; >";
// foreach ($sql->fetchAll(PDO::FETCH_NUM) as $uneEquipe)
foreach ($sql->fetchAll(PDO::FETCH_ASSOC) as $controleur)
{
echo"<tr>";
// echo"<td>" .$uneEquipe[1]."</tb>";
    echo"<td>" .$controleur['nom']."</tb>";
    echo"<td>" .$controleur['prenom']."</tb>";
    // echo"<td>" .$uneEquipe[1]."</tb>";
    echo"<td><a href='joueur.php?nom=".$controleur['nom']."&prenom=".$controleur['prenom']."'>Voir Tout les clients</a></tb>";

echo"</tr>";
}

echo" </table>";

echo"<a href='listClient.php'>Retour</a>";
?>

</body>
</html>
