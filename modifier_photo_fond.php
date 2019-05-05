<?php

session_start();

// on utilise la variable globale pour chager la photo de l'utilisateur actellemnt connecté
// o récupère la nouvelle url de l'image
$mailvend = $_SESSION["mailvendeur"];
$urlfond= isset($_POST["urlfond"])? $_POST["urlfond"] : "";



$bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');



// on met a jour la photo
$req = $bdd->exec("UPDATE vendeur SET urlfond='$urlfond' WHERE mailvend = '$mailvend' ");


header('Location: Compte_vendeur.php');
?>
