<?php

$mailvend = isset($_POST["mailvend"])? $_POST["mailvend"] : "";
$pseudo= isset($_POST["pseudo"])? $_POST["pseudo"] : "";
$nom= isset($_POST["nom"])? $_POST["nom"] : "";

$error  ="";
$drapeau =0;



$bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');
// on vérifie que la personne possède bien un copte dans la bdd
$verf= $bdd->prepare('SELECT * FROM vendeur WHERE mailvend= :mailvend AND pseudo= :pseudo');
$verf->execute(array(
	'mailvend' => $mailvend,
	'pseudo' => $pseudo,
));


$donnees= $verf->fetch();

// on vérifie que la personne a bien rempli les champs du formulaire
if ($pseudo=="" && $mailvend=="")
{
		?>
<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">
			alert("Mail et pseudo vides");
			document.location.href="Co_vendeur.php";
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
<?php

}


if ($mailvend=="") {
	?>
<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">
			alert("Mail vide");
			document.location.href="Co_vendeur.php";
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
<?php

}

if ($pseudo =="") {

	?>
<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">
			alert("pseudo vide");
			document.location.href="Co_vendeur.php";
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
<?php

}


if($donnees)
{
	session_start();
	// on recupère le mail de la personne se connectant sur une variable globale
	$_SESSION["mailvendeur"]= $mailvend;
	// on redirige la personne vers sa page de profil
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
			alert("Votre compte n'existe pas");
			document.location.href="Co_vendeur.php";
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
<?php
}











?>
