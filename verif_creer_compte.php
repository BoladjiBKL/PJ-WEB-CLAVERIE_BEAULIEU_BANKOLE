
<?php

$mailacheteur = isset($_POST["mailacheteur"])? $_POST["mailacheteur"] : "";
$nom= isset($_POST["nom"])? $_POST["nom"] : "";
$prenom= isset($_POST["prenom"])? $_POST["prenom"] : "";
$mdp= isset($_POST["mdp"])? $_POST["mdp"] : "";
$adresse1= isset($_POST["adresse1"])? $_POST["adresse1"] : "";
$adresse2= isset($_POST["adresse2"])? $_POST["adresse2"] : "";
$ville= isset($_POST["ville"])? $_POST["ville"] : "";
$codepost= isset($_POST["codepost"])? $_POST["codepost"] : "";
$pays= isset($_POST["pays"])? $_POST["pays"] : "";
$tel= isset($_POST["tel"])? $_POST["tel"] : "";
$typepaie= isset($_POST["typepaie"])? $_POST["typepaie"] : "";
$numcarte= isset($_POST["numcarte"])? $_POST["numcarte"] : "";
$nomcarte= isset($_POST["nomcarte"])? $_POST["nomcarte"] : "";
$datecarte= isset($_POST["datecarte"])? $_POST["datecarte"] : "";
$codecarte= isset($_POST["codecarte"])? $_POST["codecarte"] : "";


$error  ="";
$drapeau =0;

$bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');

$verf= $bdd->prepare('SELECT * FROM acheteur WHERE mailacheteur= :mailacheteur AND nom= :nom');
$verf->execute(array(
	'mailacheteur' => $mailacheteur,
	'nom' => $nom,
));

$donnees= $verf->fetch();


if ($mailacheteur=="") {
	$error="Mail vide";
	$drapeau+=1;

}

if ($nom=="") {
	$error=" Nom vide";
	$drapeau+=1;
}



if($error=="" && $drapeau==0)
{
	 header('Location: Compte_vendeur.php');
}

else
{
		?>
<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">
			<?php echo $error ?>
			document.location.href="Creercompte.php";
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
<?php
}










?>