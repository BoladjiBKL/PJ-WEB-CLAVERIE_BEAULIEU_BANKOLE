<?php

session_start();

// on utilise la variable globale pour chager la photo de l'utilisateur actellemnt connecté
$mailvend = $_SESSION["mailvendeur"];
// on récupère l'url de la nouvelle image
$urlprofil= isset($_POST["urlprofil"])? $_POST["urlprofil"] : "";



$bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');



// on met a jour la bdd
$req = $bdd->exec("UPDATE vendeur SET urlprofil='$urlprofil' WHERE mailvend = '$mailvend' ");



header('Location: Compte_vendeur.php');
?>
