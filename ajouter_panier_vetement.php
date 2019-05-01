<?php
//recuperer les données venant de la page HTML
//le parametre de $_POST = "name" de <input> de votre page HTML
$nom= isset($_POST["nom"])? $_POST["nom"] : "";
$mail= isset($_POST["mail"])? $_POST["mail"] : "";
$taille= isset($_POST["taille"])? $_POST["taille"] : "";
$description = isset($_POST["description"])? $_POST["description"] : "";
$urlimg = isset($_POST["urlimg"])? $_POST["urlimg"] : "";
$prix = isset($_POST["prix"])? $_POST["prix"] : "";


$bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');

$req = $bdd->prepare('INSERT INTO panier(nom, taille, description, urlimg, prix, mail) VALUES(:nom, :taille, :description, :urlimg, :prix, :mail)');
$req->execute(array(
	'nom' => $nom,
  'taille' => $taille,
  'description' => $description,
  'urlimg' => $urlimg,
  'prix' => $prix,
  'mail' => $mail,

));

$bdd->exec("DELETE FROM vetement WHERE prix LIKE '%$prix%' AND mail LIKE '%$mail%' ");
header('Location: TEST_AFFICHAGE_ITEM.php');
?>
