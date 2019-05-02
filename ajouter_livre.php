
<?php
//recuperer les données venant de la page HTML
//le parametre de $_POST = "name" de <input> de votre page HTML
$titre = isset($_POST["titre"])? $_POST["titre"] : "";
$auteur = isset($_POST["auteur"])? $_POST["auteur"] : "";
$annee = isset($_POST["annee"])? $_POST["annee"] : "";
$edition = isset($_POST["edition"])? $_POST["edition"] : "";
$urlimg = isset($_POST["urlimg"])? $_POST["urlimg"] : "";
$prix = isset($_POST["prix"])? $_POST["prix"] : "";
$mail = isset($_POST["mail"])? $_POST["mail"] : "";
$description = isset($_POST["description"])? $_POST["description"] : "";

$bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');


$req = $bdd->prepare('INSERT INTO livre(titre, auteur, annee, edition, description,urlimg, prix, mail) VALUES(:titre, :auteur, :annee, :edition, :description, :urlimg, :prix, :mail)');
$req->execute(array(
	'titre' => $titre,
	'auteur' => $auteur,
	'annee' => $annee,
	'edition' => $edition,
	'description'=> $description,
	'urlimg'=> $urlimg,
	'prix' => $prix,
	'mail' => $mail,
	));
header('Location: formulaire_ajout_livre.php');
?>
