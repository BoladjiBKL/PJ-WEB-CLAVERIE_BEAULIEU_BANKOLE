
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

$verf2= $bdd->prepare('SELECT * FROM acheteur WHERE mailacheteur= :mailacheteur');
$verf2->execute(array(
	'mailacheteur' => $mailacheteur,
));
$donnees= $verf->fetch();
$donnees2=$verf2->fetch();


if ($mailacheteur=="") {
	$error.="Mail vide";
	$drapeau+=1;

}

if ($nom=="") {
	$error.=" Nom vide";
	$drapeau+=1;
}
if ($prenom=="") {
	$error.=" Prénom vide";
	$drapeau+=1;
}
if ($mdp=="") {
	$error.=" Mot de passe vide";
	$drapeau+=1;
}
if ($adresse1=="") {
	$error.=" Première adresse vide";
	$drapeau+=1;
}
if ($adresse2=="") {
	$error.=" Deuxième adresse vide";
	$drapeau+=1;
}
if ($ville=="") {
	$error.=" Ville vide";
	$drapeau+=1;
}
if ($codepost=="") {
	$error.=" Code postal vide";
	$drapeau+=1;
}
if ($pays=="") {
	$error.=" Pays vide";
	$drapeau+=1;
}
if ($tel=="") {
	$error.=" tel vide";
	$drapeau+=1;
}
if ($typepaie=="") {
	$error.=" Type de paye vide";
	$drapeau+=1;
}
if ($numcarte=="") {
	$error.=" Numcarte vide";
	$drapeau+=1;
}
if ($nomcarte=="") {
	$error.=" Nomcarte vide";
	$drapeau+=1;
}
if ($datecarte=="") {
	$error.=" datecarte vide";
	$drapeau+=1;
}
if ($codecarte=="") {
	$error.=" Codecarte vide";
	$drapeau+=1;
}

if($donnees2)
{
	$error.="Ce mail est deja utilisé. Reprennez avec une autre adresse mail";
}

if($error=="" && $drapeau==0)
{
	 header('Location: Compte_client.php');
}

else
{
		?>
<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">
		    var msg='<?php echo $error; ?>';
			alert(msg); 
			document.location.href="Co_mon_compte.php";
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
<?php
}











?>