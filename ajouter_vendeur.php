
<?php

$mailvend = isset($_POST["mailvend"])? $_POST["mailvend"] : "";
$pseudo= isset($_POST["pseudo"])? $_POST["pseudo"] : "";
$nom = isset($_POST["nom"])? $_POST["nom"] : "";
$error  ="";
$drapeau =0;


$bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');
//on vérifie que le mail n'est pas déjà pris
$verf= $bdd->prepare('SELECT * FROM vendeur WHERE mailvend= :mailvend');
$verf->execute(array(
	'mailvend' => $mailvend,
));

$donnees=$verf->fetch();



if ($mailvend=="") {
	$error.=" Mail vide";
	$error.='\n';
	$drapeau+=1;

}


if ($pseudo=="") {
	$error.=" Pseudo vide";
	$error.='\n';
	$drapeau+=1;
}

if ($nom=="") {
	$error.=" Nom vide";
	$error.='\n';
	$drapeau+=1;

}
if($error=="" && $drapeau==0 && ($donnees))
{
	//header('Location: formulaire_ajouter_vendeur.php');
			?>
<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">

			alert("Ce vendeur existe deja");
			document.location.href="formulaire_ajouter_vendeur.php";
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
<?php
}

if($error=="" && $drapeau==0 && (!$donnees))
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
//on ajoute le vendeur à la bdd
$req = $bdd->prepare('INSERT INTO vendeur(mailvend, pseudo, nom) VALUES(:mailvend, :pseudo, :nom)');
$req->execute(array(
	'mailvend' => $mailvend,
	'pseudo' => $pseudo,
	'nom' => $nom,
));
}

else
{
		?>
<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">
		    var msg='<?php echo nl2br ($error); ?>';
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
