<?php
//recuperer les données venant de la page HTML
//le parametre de $_POST = "name" de <input> de votre page HTML
$titre = isset($_POST["titre"])? $_POST["titre"] : "";
$artiste = isset($_POST["artiste"])? $_POST["artiste"] : "";
$mail = isset($_POST["mail"])? $_POST["mail"] : "";

$bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');

$bdd->exec("DELETE FROM musique WHERE titre LIKE '%$titre%' AND artiste LIKE '%$artiste%' AND mail LIKE '%$mail%' ");

header('Location: formulaire_supprimer_musique.php');


?>
