<?php
//recuperer les données venant de la page HTML
//le parametre de $_POST = "name" de <input> de votre page HTML
$nom = isset($_POST["nom"])? $_POST["nom"] : "";
$taille = isset($_POST["taille"])? $_POST["taille"] : "";
$mail = isset($_POST["mail"])? $_POST["mail"] : "";
$error  ="";
$drapeau =0;
$bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');



$verf= $bdd->prepare('SELECT * FROM sportetloisir WHERE nom= :nom AND taille= :taille AND mail= :mail');
$verf->execute(array(
	'nom' => $nom,
	'taille'=> $taille,
	'mail'=> $mail,
));

$donnees=$verf->fetch();


if ($nom=="") {
	$error.="nom vide";
	$error.='\n';
	$drapeau+=1;

}


if ($taille=="") {
	$error.=" taille vide";
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
	//header('Location: formulaire_ajouter_sportetloisir.php');
			?>
<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">
		    
			alert("sportetloisir bien supprimé"); 
			document.location.href="formulaire_supprimer_sportetloisir.php";
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
<?php
$bdd->exec("DELETE FROM sportetloisir WHERE nom LIKE '%$nom%' AND taille LIKE '%$taille%' AND mail LIKE '%$mail%' ");
}

else if($error=="" && $drapeau==0 && (!$donnees))
{
	
	
		?>
	
<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">
		  
            alert("Ce sportetloisir n'existe pas"); 
			document.location.href="formulaire_supprimer_sportetloisir.php";
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

			document.location.href="formulaire_supprimer_sportetloisir.php";
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
	


<?php

}

?>
