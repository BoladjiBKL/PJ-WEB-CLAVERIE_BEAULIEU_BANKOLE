<?php
//recuperer les données venant de la page HTML
//le parametre de $_POST = "name" de <input> de votre page HTML
$nom = isset($_POST["nom"])? $_POST["nom"] : "";
$taille = isset($_POST["taille"])? $_POST["taille"] : "";
$mail = isset($_POST["mail"])? $_POST["mail"] : "";

$bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');

$bdd->exec("DELETE FROM vetement WHERE nom LIKE '%$nom%' AND taille LIKE '%$taille%' AND mail LIKE '%$mail%' ");

header('Location: formulaire_ajouter_vetement.php');

?>
