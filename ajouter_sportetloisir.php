<?php
//recuperer les données venant de la page HTML
//le parametre de $_POST = "name" de <input> de votre page HTML
$nom = isset($_POST["nom"])? $_POST["nom"] : "";
$taille = isset($_POST["taille"])? $_POST["taille"] : "";
$description = isset($_POST["description"])? $_POST["description"] : "";
$urlimg = isset($_POST["urlimg"])? $_POST["urlimg"] : "";
$prix = isset($_POST["prix"])? $_POST["prix"] : "";
$mail = isset($_POST["mail"])? $_POST["mail"] : "";


$bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');


$req = $bdd->prepare('INSERT INTO sportetloisir(nom, taille, description,urlimg, prix, mail) VALUES(:nom, :taille, :description,:urlimg, :prix, :mail)');
$req->execute(array(
	'nom' => $nom,
	'taille' => $taille,
	'description' => $description,
	'urlimg' => $urlimg,
	'prix' => $prix,
	'mail' => $mail,
	));
header('Location: formulaire_ajouter_sportetloisir.php');
?>
