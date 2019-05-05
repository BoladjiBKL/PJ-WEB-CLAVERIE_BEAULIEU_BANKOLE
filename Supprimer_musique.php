<?php
//recuperer les données venant de la page HTML
//le parametre de $_POST = "name" de <input> de votre page HTML
$titre = isset($_POST["titre"])? $_POST["titre"] : "";
$artiste = isset($_POST["artiste"])? $_POST["artiste"] : "";
$mail = isset($_POST["mail"])? $_POST["mail"] : "";
$error  ="";
$drapeau =0;

$bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');

// vérifie que l'objet que l'on souhaite supprimer existe bien dans la bdd

$verf= $bdd->prepare('SELECT * FROM musique WHERE titre= :titre AND artiste= :artiste AND mail= :mail');
$verf->execute(array(
	'titre' => $titre,
	'artiste'=> $artiste,
	'mail'=> $mail,
));

$donnees=$verf->fetch();


if ($titre=="") {
	$error.=" titre vide";
	$error.='\n';
	$drapeau+=1;

}


if ($artiste=="") {
	$error.=" artiste vide";
	$error.='\n';
	$drapeau+=1;
}

if ($mail=="") {
	$error.=" mail vide";
	$error.='\n';
	$drapeau+=1;

}



if($error=="" && $drapeau==0 && ($donnees))
{
	//header('Location: formulaire_ajouter_musique.php');
			?>
<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">

			alert("musique bien supprimé");
			document.location.href="formulaire_supprimer_musique.php";
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
<?php
$bdd->exec("DELETE FROM musique WHERE titre LIKE '%$titre%' AND artiste LIKE '%$artiste%' AND mail LIKE '%$mail%' ");
}

else if($error=="" && $drapeau==0 && (!$donnees))
{


		?>

<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">

            alert("Ce musique n'existe pas");
			document.location.href="formulaire_supprimer_musique.php";
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>



<?php
}
else {
			?>

<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">

			  var msg='<?php echo nl2br($error); ?>';
			alert(msg);

			document.location.href="formulaire_supprimer_musique.php";
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>



<?php

}

?>
