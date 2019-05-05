<?php

$mailvend = isset($_POST["mailvend"])? $_POST["mailvend"] : "";
$pseudo= isset($_POST["pseudo"])? $_POST["pseudo"] : "";
$nom = isset($_POST["nom"])? $_POST["nom"] : "";
$error  ="";
$drapeau =0;

$bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');


// vérifie que l'objet que l'on souhaite supprimer existe bien dans la bdd

$verf= $bdd->prepare('SELECT  * FROM vendeur WHERE mailvend= :mailvend AND pseudo= :pseudo AND nom= :nom');
$verf->execute(array(
	'mailvend' => $mailvend,
	'pseudo'=> $pseudo,
	'nom'=> $nom,
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



if(($donnees) && $error=="" && $drapeau==0 )
{
	//header('Location: formulaire_ajouter_vendeur.php');
			?>
<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">

			alert("Vendeur bien supprimé");
			document.location.href="formulaire_supprimer_vendeur.php";
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
<?php
// on supprime l'objet
$bdd->exec("DELETE FROM vendeur WHERE mailvend LIKE '%$mailvend%' AND pseudo LIKE '%$pseudo%' AND nom LIKE '%$nom%' ");
}

elseif( (!$donnees) && $error=="" && $drapeau==0)
{


		?>

<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">

            alert("Ce vendeur n'existe pas");
			document.location.href="formulaire_supprimer_vendeur.php";
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

			document.location.href="formulaire_supprimer_vendeur.php";
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>



<?php

}

?>
