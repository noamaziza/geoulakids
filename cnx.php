<?php
//connexion a la base de données
// dsn = Data Source Name = driver MYSQL
$dsn='mysql:dbname=edf;host=localhost';
//login
$login='root';
// Mot de passe
$motDePasse='';
// Connexion au serveur MySQL
//try catch permet de verifier sil y a une erreur ou pas dans la bdd                         
try{
    $cnx = new PDO($dsn, $login,$motDePasse,
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
}
catch (PDOException $e){
	die('Erreur : ' . $e->getMessage());
}


