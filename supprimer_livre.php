<?php
//recuperer les données venant de la page HTML
//le parametre de $_POST = "name" de <input> de votre page HTML
$titre = isset($_POST["titre"])? $_POST["titre"] : "";
$auteur = isset($_POST["auteur"])? $_POST["auteur"] : "";
$mail = isset($_POST["mail"])? $_POST["mail"] : "";
$error  ="";
$drapeau =0;

$bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');




$verf= $bdd->prepare('SELECT * FROM livre WHERE titre= :titre AND auteur= :auteur AND mail= :mail');
$verf->execute(array(
	'titre' => $titre,
	'auteur'=> $auteur,
	'mail'=> $mail,
));

$donnees=$verf->fetch();


if ($titre=="") {
	$error.=" titre vide";
	$error.='\n';
	$drapeau+=1;

}


if ($auteur=="") {
	$error.=" auteur vide";
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
$bdd->exec("DELETE FROM livre WHERE titre LIKE '%$titre%' AND auteur LIKE '%$auteur%' AND mail LIKE '%$mail%' ");
}

else if($error=="" && $drapeau==0 && (!$donnees))
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
		
			  var msg='<?php echo nl2br($error); ?>';
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
