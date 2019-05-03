<?php

$mailacheteur = isset($_POST["mailacheteur"])? $_POST["mailacheteur"] : "";
$mdp= isset($_POST["mdp"])? $_POST["mdp"] : "";


$error  ="";
$drapeau =0;

$bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');
$verf= $bdd->prepare('SELECT * FROM acheteur WHERE mailacheteur= :mailacheteur AND mdp= :mdp');
$verf->execute(array(
	'mailacheteur' => $mailacheteur,
	'mdp' => $mdp,
));

$donnees= $verf->fetch();

if ($mailacheteur=="" && $mdp=="")
{
		?>
<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">
			alert("Mail et mot de passe vides");

			document.location.href="Co_acheteur_panier.php";


		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
<?php

}


if ($mailacheteur=="") {
	?>
<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">
			alert("Mail vide");

			document.location.href="Co_acheteur_panier.php";

		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
<?php

}

if ($mdp =="") {

	?>
<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">
			alert("Mot de passe vide");

			document.location.href="Co_acheteur_panier.php";

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
	$_SESSION["newsession"]=$mailacheteur;
	header('Location: Paiement_panier.php');


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

			document.location.href="Co_acheteur_panier.php";

		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
<?php
}


?>
