

<?php
//recuperer les données venant de la page HTML
//le parametre de $_POST = "name" de <input> de votre page HTML
$titre = isset($_POST["titre"])? $_POST["titre"] : "";
$artiste = isset($_POST["artiste"])? $_POST["artiste"] : "";
$annee = isset($_POST["annee"])? $_POST["annee"] : "";
$label = isset($_POST["label"])? $_POST["label"] : "";
$prix = isset($_POST["prix"])? $_POST["prix"] : "";
$mail = isset($_POST["mail"])? $_POST["mail"] : "";

$bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');




$req = $bdd->prepare('INSERT INTO musique(titre, artiste, annee, label, prix, mail) VALUES(:titre, :artiste, :annee, :label, :prix, :mail)');
$req->execute(array(
	'titre' => $titre,
	'artiste' => $artiste,
	'annee' => $annee,
	'label' => $label,
	'prix' => $prix,
	'mail' => $mail,
	));
?>