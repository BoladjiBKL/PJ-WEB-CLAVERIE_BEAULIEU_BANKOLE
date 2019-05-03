<?php
//recuperer les données venant de la page HTML
//le parametre de $_POST = "name" de <input> de votre page HTML
$titre = isset($_POST["titre"])? $_POST["titre"] : "";
$auteur = isset($_POST["auteur"])? $_POST["auteur"] : "";
$mail = isset($_POST["mail"])? $_POST["mail"] : "";
$error  ="";
$drapeau =0;

$bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');

$bdd->exec("DELETE FROM livre WHERE titre LIKE '%$titre%' AND auteur LIKE '%$auteur%' AND mail LIKE '%$mail%' ");


$verf= $bdd->prepare('SELECT count(*) FROM livre WHERE titre= :titre AND auteur= :auteur AND mail= :mail');
$verf->execute(array(
	'titre' => $titre,
	'auteur'=> $auteur,
	'mail'=> $mail,
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

if ($mail=="") {
	$error.=" mail vide";
	$drapeau+=1;

}



if($error=="" && $drapeau==0 && $donnees!=0)
{
	//header('Location: formulaire_ajouter_livre.php');
			?>
<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">
		    
			alert("livre bien supprimé"); 
			document.location.href="formulaire_supprimer_livre.php";
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
		  
            alert("Ce livre n'existe pas"); 
			document.location.href="formulaire_supprimer_livre.php";
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

			document.location.href="formulaire_supprimer_livre.php";
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
	


<?php

}

?>
