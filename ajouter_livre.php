
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
$error  ="";
$drapeau =0;


$bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');

$verf= $bdd->prepare('SELECT * FROM vendeur WHERE mailvend= :mail');
$verf->execute(array(
	'mail' => $mail,
));


$donnees=$verf->fetch();





if ($titre=="") {
	$error.="titre vide";
	$drapeau+=1;

}


if ($auteur=="") {
	$error.=" auteur vide";
	$drapeau+=1;
}

if ($annee=="") {
	$error.=" année vide";
	$drapeau+=1;

}
if ($edition=="") {
	$error.=" edition vide";
	$drapeau+=1;

}
if ($description=="") {
	$error.=" description vide";
	$drapeau+=1;

}
if ($urlimg=="") {
	$error.=" urlimg vide";
	$drapeau+=1;

}
if ($prix=="") {
	$error.=" prix vide";
	$drapeau+=1;

}
if ($mail=="") {
	$error.=" mail vide";
	$drapeau+=1;

}
if($donnees)
{
	$good.="Livre bien ajouté";

}


if(($donnees) && $error=="" && $drapeau==0)
{
	//header('Location: formulaire_ajouter_livre.php');
			?>
<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">
		    
			alert("Livre bien ajouté"); 
			document.location.href="formulaire_ajout_livre.php";
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
<?php

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
}
else if(!($donnees) && $error=="" && $drapeau==0)
{
		?>
<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">
		   alert("Adresse mail non valide")
			document.location.href="formulaire_ajout_livre.php";
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
<?php
}
else if(!($donnees) && $error=="" && $drapeau==0)
{
		?>
<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">
		   alert("Adresse mail non valide")
			document.location.href="formulaire_ajout_livre.php";
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
			document.location.href="formulaire_ajout_livre.php";
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
<?php
}
?>
