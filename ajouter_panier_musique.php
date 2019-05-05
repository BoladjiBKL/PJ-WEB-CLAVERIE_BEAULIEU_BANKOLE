<?php
//recuperer les données venant de la page HTML
//le parametre de $_POST = "name" de <input> de votre page HTML

$titre= isset($_POST["titre"])? $_POST["titre"] : "";
$mail= isset($_POST["mail"])? $_POST["mail"] : "";
$annee= isset($_POST["annee"])? $_POST["annee"] : "";
$artiste= isset($_POST["artiste"])? $_POST["artiste"] : "";
$label= isset($_POST["label"])? $_POST["label"] : "";
$description = isset($_POST["description"])? $_POST["description"] : "";
$urlimg = isset($_POST["urlimg"])? $_POST["urlimg"] : "";
$prix = isset($_POST["prix"])? $_POST["prix"] : "";
$id = isset($_POST["id"])? $_POST["id"] : "";

$bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');
//on ajoute l'objet au panier
$req = $bdd->prepare('INSERT INTO panier(titre, artiste, annee, label, description, urlimg, prix, mail) VALUES(:titre, :artiste, :annee, :label, :description, :urlimg, :prix, :mail)');
$req->execute(array(
	'titre' => $titre,
  'artiste' => $artiste,
	'annee' => $annee,
	'label' => $label,
  'description' => $description,
  'urlimg' => $urlimg,
  'prix' => $prix,
  'mail' => $mail,

));

// on supprime l'objet de sa table pour qu'il ne soit plus disponible a la vente
$bdd->exec("DELETE FROM musique WHERE id LIKE '%$id%'");

header('Location: Musique.php');
?>
