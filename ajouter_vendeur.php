<?php

$mailvend = isset($_POST["mailvend"])? $_POST["mailvend"] : "";
$pseudo= isset($_POST["pseudo"])? $_POST["pseudo"] : "";
$nom = isset($_POST["nom"])? $_POST["nom"] : "";


$bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');


$req = $bdd->prepare('INSERT INTO vendeur(mailvend, pseudo, nom) VALUES(:mailvend, :pseudo, :nom)');
$req->execute(array(
	'mailvend' => $mailvend,
	'pseudo' => $pseudo,
	'nom' => $nom,
	
	));
header('Location: formulaire_ajouter_vendeur.php');
?>
