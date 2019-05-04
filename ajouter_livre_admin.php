
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

$verf= $bdd->prepare('SELECT * FROM administrateur WHERE mailadmin= :mail');
$verf->execute(array(
	'mail' => $mail,
));


$donnees=$verf->fetch();





if ($titre=="") {
	$error.=" titre vide";
	$drapeau+=1;

}


if ($auteur=="") {
	$error.=" auteur vide";
		$error.='\n';
	$drapeau+=1;
}

if ($annee=="") {
	$error.=" année vide";
		$error.='\n';
	$drapeau+=1;

}
if ($edition=="") {
	$error.=" edition vide";
		$error.='\n';
	$drapeau+=1;

}
if ($description=="") {
	$error.=" description vide";
		$error.='\n';
	$drapeau+=1;

}
if ($urlimg=="") {
	$error.=" urlimg vide";
		$error.='\n';
	$drapeau+=1;

}
if ($prix=="") {
	$error.=" prix vide";
		$error.='\n';
	$drapeau+=1;

}
if ($mail=="") {
	$error.=" mail vide";
		$error.='\n';
	$drapeau+=1;

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
			document.location.href="formulaire_ajout_livre_admin.php";
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
		   alert("Adresse mail non valide");
			document.location.href="formulaire_ajout_livre_admin.php";
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
			document.location.href="formulaire_ajout_livre_admin.php";
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
			document.location.href="formulaire_ajout_livre_admin.php";
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
<?php
}
?>
