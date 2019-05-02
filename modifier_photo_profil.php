<?php

$mailvend = isset($_POST["mailvend"])? $_POST["mailvend"] : "";
$urlprofil= isset($_POST["urlprofil"])? $_POST["urlprofil"] : "";



$bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');




$req = $bdd->exec("UPDATE vendeur SET urlprofil='$urlprofil' WHERE mailvend = '$mailvend' ");



header('Location: Compte_vendeur.php');
?>
