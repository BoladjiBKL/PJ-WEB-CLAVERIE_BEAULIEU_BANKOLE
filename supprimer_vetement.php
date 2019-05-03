<?php
//recuperer les données venant de la page HTML
//le parametre de $_POST = "name" de <input> de votre page HTML
$nom = isset($_POST["nom"])? $_POST["nom"] : "";
$taille = isset($_POST["taille"])? $_POST["taille"] : "";
$mail = isset($_POST["mail"])? $_POST["mail"] : "";

$bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');

$bdd->exec("DELETE FROM vetement WHERE nom LIKE '%$nom%' AND taille LIKE '%$taille%' AND mail LIKE '%$mail%' ");

$verf= $bdd->prepare('SELECT count(*) FROM vetement WHERE nom= :nom AND taille= :taille AND mail= :mail');
$verf->execute(array(
	'nom' => $nom,
	'taille'=> $taille,
	'mail'=> $mail,
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

if ($mail=="") {
	$error.=" mail vide";
	$drapeau+=1;

}



if($error=="" && $drapeau==0 && $donnees!=0)
{
	//header('Location: formulaire_ajouter_vetement.php');
			?>
<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">
		    
			alert("vetement bien supprimé"); 
			document.location.href="formulaire_supprimer_vetement.php";
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
		  
            alert("Ce vetement n'existe pas"); 
			document.location.href="formulaire_supprimer_vetement.php";
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

			document.location.href="formulaire_supprimer_vetement.php";
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
	


<?php

}

?>
