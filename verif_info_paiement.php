<?php

$mailacheteur = isset($_POST["mailacheteur"])? $_POST["mailacheteur"] : "";
$typepaie= isset($_POST["typepaie"])? $_POST["typepaie"] : "";
$numcarte= isset($_POST["numcarte"])? $_POST["numcarte"] : "";
$nomcarte= isset($_POST["nomcarte"])? $_POST["nomcarte"] : "";
$datecarte= isset($_POST["datecarte"])? $_POST["datecarte"] : "";
$codecarte= isset($_POST["codecarte"])? $_POST["codecarte"] : "";
$error  ="";
$drapeau =0;

$bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');

$verf= $bdd->prepare('SELECT * FROM acheteur WHERE mailacheteur= :mailacheteur AND typepaie= :typepaie AND numcarte= :numcarte AND nomcarte= :nomcarte AND datecarte= :datecarte AND codecarte= :codecarte');
$verf->execute(array(
	'mailacheteur' => $mailacheteur,
	'typepaie' => $typepaie,
		'numcarte' => $numcarte,
			'nomcarte' => $nomcarte,
				'datecarte' => $datecarte,
					'codecarte' => $codecarte,
));

$donnees= $verf->fetch();




if ($typepaie=="") {
	$error.=" Type de paye vide";
	$error.='\n';
	$drapeau+=1;
}
if ($numcarte=="") {
	$error.=" Numcarte vide";
	$error.='\n';
	$drapeau+=1;
}
if(strlen($numcarte)!=16)
{
	$error.="Le numéro de carte doit contenir 16 chiffres";
	$error.='\n';
}
if ($nomcarte=="") {
	$error.=" Nomcarte vide";
	$error.='\n';
	$drapeau+=1;
}

if( !ctype_alpha($nomcarte) && $nomcarte!="")
{
	$error.="La nom de la carte doit avoir que des lettres";
	$error.='\n';
}
if ($datecarte=="") {
	$error.=" datecarte vide";
	$error.='\n';
	$drapeau+=1;
}


if ($codecarte=="") {
	$error.=" Codecarte vide";
	$error.='\n';
	$drapeau+=1;
}
if(strlen($codecarte)!=3)
{
	$error.="Le numéro de carte doit contenir 3 chiffres";
	$error.='\n';
}






if(($donnees) && $error=="" && $drapeau==0)
{
	$bdd->exec("INSERT INTO bestsellers SELECT * FROM panier");

$bdd->exec("DELETE FROM panier ");
	 header('Location: Confirmation_commande.php');
}
else if((!$donnees) && $error=="" && $drapeau==0)
{
		?>
<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">
		   alert("Les informations bancaires ne correspondent pas");
			document.location.href="Paiement_panier.php";
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
<?php
}
else
{
		?>
<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">
		    var msg='<?php echo nl2br($error); ?>';
			alert(msg); 
			document.location.href="Paiement_panier.php";
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
<?php
}
?>
