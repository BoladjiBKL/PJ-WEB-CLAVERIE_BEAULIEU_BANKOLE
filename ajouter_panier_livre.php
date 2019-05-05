<?php
//recuperer les données venant de la page HTML


$titre= isset($_POST["titre"])? $_POST["titre"] : "";
$mail= isset($_POST["mail"])? $_POST["mail"] : "";
$annee= isset($_POST["annee"])? $_POST["annee"] : "";
$auteur= isset($_POST["auteur"])? $_POST["auteur"] : "";
$edition= isset($_POST["edition"])? $_POST["edition"] : "";
$description = isset($_POST["description"])? $_POST["description"] : "";
$urlimg = isset($_POST["urlimg"])? $_POST["urlimg"] : "";
$prix = isset($_POST["prix"])? $_POST["prix"] : "";
$id = isset($_POST["id"])? $_POST["id"] : "";

$bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');
// on ajoute le produit au panier
$req = $bdd->prepare('INSERT INTO panier(titre, auteur, annee, edition, description, urlimg, prix, mail) VALUES(:titre, :auteur, :annee, :edition, :description, :urlimg, :prix, :mail)');
$req->execute(array(
	'titre' => $titre,
  'auteur' => $auteur,
	'annee' => $annee,
	'edition' => $edition,
  'description' => $description,
  'urlimg' => $urlimg,
  'prix' => $prix,
  'mail' => $mail,

));

// on supprime l'objet de sa table pour qu'il ne soit plus disponible a la vente
$bdd->exec("DELETE FROM livre WHERE id LIKE '%$id%'");

header('Location: Livres.php');
?>
