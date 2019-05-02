
<?php

$mailvend = isset($_POST["mailvend"])? $_POST["mailvend"] : "";
$pseudo= isset($_POST["pseudo"])? $_POST["pseudo"] : "";
$nom = isset($_POST["nom"])? $_POST["nom"] : "";
$error  ="";
$drapeau =0;


$bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');

$verf= $bdd->prepare('SELECT * FROM vendeur WHERE mailvend= :mailvend');
$verf->execute(array(
	'mailvend' => $mailvend,
));

$donnees=$verf->fetch();


if ($mailvend=="") {
	$error.="Mail vide";
	$drapeau+=1;

}


if ($pseudo=="") {
	$error.=" Pseudo vide";
	$drapeau+=1;
}

if ($nom=="") {
	$error.=" Nom vide";
	$drapeau+=1;

}
if($donnees)
{
	
$error.="Ce mail est deja utilisé. Reprennez avec une autre adresse mail";
}


if($error=="" && $drapeau==0)
{
	//header('Location: formulaire_ajouter_vendeur.php');
			?>
<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">
		    
			alert("Vendeur bien ajouté"); 
			document.location.href="formulaire_ajouter_vendeur.php";
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
		    var msg='<?php echo $error; ?>';
			alert(msg); 
			document.location.href="formulaire_ajouter_vendeur.php";
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
<?php
}
?>