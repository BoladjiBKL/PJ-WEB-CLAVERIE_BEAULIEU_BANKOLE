<?php

$mailvend = isset($_POST["mailvend"])? $_POST["mailvend"] : "";
$pseudo= isset($_POST["pseudo"])? $_POST["pseudo"] : "";
$nom = isset($_POST["nom"])? $_POST["nom"] : "";


$bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');


$bdd->exec("DELETE FROM vendeur WHERE mailvend LIKE '%$mailvend%' AND pseudo LIKE '%$pseudo%' AND nom LIKE '%$nom%' ");

header('Location: formulaire_supprimer_vendeur.php');
?>
