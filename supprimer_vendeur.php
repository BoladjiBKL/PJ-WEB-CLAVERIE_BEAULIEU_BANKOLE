<?php

$mailvend = isset($_POST["mailvend"])? $_POST["mailvend"] : "";
$pseudo= isset($_POST["pseudo"])? $_POST["pseudo"] : "";
$nom = isset($_POST["nom"])? $_POST["nom"] : "";
$error  ="";
$drapeau =0;

$bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');


$bdd->exec("DELETE FROM vendeur WHERE mailvend LIKE '%$mailvend%' AND pseudo LIKE '%$pseudo%' AND nom LIKE '%$nom%' ");

$verf= $bdd->prepare('SELECT count(*) FROM vendeur WHERE mailvend= :mailvend AND pseudo= :pseudo AND nom= :nom');
$verf->execute(array(
	'mailvend' => $mailvend,
	'pseudo'=> $pseudo,
	'nom'=> $nom,
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



if($error=="" && $drapeau==0 && $donnees==1)
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
}

else if($error=="" && $drapeau==0)
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
		
			  var msg='<?php echo $error; ?>';
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
