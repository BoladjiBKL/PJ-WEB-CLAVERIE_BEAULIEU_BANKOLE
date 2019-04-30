
<?php
//recuperer les données venant de la page HTML
//le parametre de $_POST = "name" de <input> de votre page HTML
$titre = isset($_POST["titre"])? $_POST["titre"] : "";
$auteur = isset($_POST["auteur"])? $_POST["auteur"] : "";
$annee = isset($_POST["annee"])? $_POST["annee"] : "";
$edition = isset($_POST["edition"])? $_POST["edition"] : "";
$prix = isset($_POST["prix"])? $_POST["prix"] : "";
$mail = isset($_POST["mail"])? $_POST["mail"] : "";
$description = isset($_POST["description"])? $_POST["description"] : "";

$bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');


$req = $bdd->prepare('INSERT INTO livre(titre, auteur, annee, edition, description, prix, mail) VALUES(:titre, :auteur, :annee, :edition, :description, :prix, :mail)');
$req->execute(array(
	'titre' => $titre,
	'auteur' => $auteur,
	'annee' => $annee,
	'edition' => $edition,
	'description'=> $description,
	'prix' => $prix,
	'mail' => $mail,
	));
?>
