<?php
//recuperer les données venant de la page HTML
//le parametre de $_POST = "name" de <input> de votre page HTML
$nom = isset($_POST["nom"])? $_POST["nom"] : "";
$taille = isset($_POST["taille"])? $_POST["taille"] : "";
$description = isset($_POST["description"])? $_POST["description"] : "";
$urlimg = isset($_POST["urlimg"])? $_POST["urlimg"] : "";
$prix = isset($_POST["prix"])? $_POST["prix"] : "";
$mail = isset($_POST["mail"])? $_POST["mail"] : "";
$error  ="";
$drapeau =0;



$bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');

$verf= $bdd->prepare('SELECT * FROM vendeur WHERE mailvend= :mail');
$verf->execute(array(
	'mail' => $mail,
));

$donnees=$verf->fetch();



if ($nom=="") {
	$error.="nom vide";
	$drapeau+=1;

}


if ($taille=="") {
	$error.=" taille vide";
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
if($donnees &&$error=="" && $drapeau==0)
{
	//header('Location: formulaire_ajouter_sportetloisir.php');
			?>
<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">
		    
			alert("sportetloisir bien ajouté"); 
			document.location.href="formulaire_ajouter_sportetloisir.php";
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
<?php

$req = $bdd->prepare('INSERT INTO sportetloisir(nom, taille, description,urlimg, prix, mail) VALUES(:nom, :taille, :description,:urlimg, :prix, :mail)');
$req->execute(array(
	'nom' => $nom,
	'taille' => $taille,
	'description' => $description,
	'urlimg' => $urlimg,
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
			document.location.href="formulaire_ajouter_sportetloisir.php";
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
			document.location.href="formulaire_ajouter_sportetloisir.php";
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
<?php
}
?>
