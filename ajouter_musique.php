

<?php
//recuperer les données venant de la page HTML
$titre = isset($_POST["titre"])? $_POST["titre"] : "";
$artiste = isset($_POST["artiste"])? $_POST["artiste"] : "";
$annee = isset($_POST["annee"])? $_POST["annee"] : "";
$label = isset($_POST["label"])? $_POST["label"] : "";
$urlimg = isset($_POST["urlimg"])? $_POST["urlimg"] : "";
$prix = isset($_POST["prix"])? $_POST["prix"] : "";
$mail = isset($_POST["mail"])? $_POST["mail"] : "";
$description = isset($_POST["description"])? $_POST["description"] : "";
$error  ="";
$drapeau =0;
$good ="";

$bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');
// on vérifie que le mail existe bien dans la bdd
$verf= $bdd->prepare('SELECT * FROM vendeur WHERE mailvend= :mail');
$verf->execute(array(
	'mail' => $mail,
));

$donnees=$verf->fetch();


//on vérifie que la personne a bien rempli les champs du formulaire
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

if ($annee=="") {
	$error.=" année vide";
	$error.='\n';
	$drapeau+=1;

}
if ($label=="") {
	$error.=" label vide";
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
	//header('Location: formulaire_ajouter_musique.php');
			?>
<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">

			alert("Musique bien ajoutée");
			document.location.href="formulaire_ajout_musique.php";
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
<?php
// on ajoute l'objet à la bdd
$req = $bdd->prepare('INSERT INTO musique(titre, artiste, annee, label, description,urlimg, prix, mail) VALUES(:titre, :artiste, :annee, :label, :description,:urlimg, :prix, :mail)');
$req->execute(array(
	'titre' => $titre,
	'artiste' => $artiste,
	'annee' => $annee,
	'label' => $label,
	'description'=> $description,
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
			document.location.href="formulaire_ajout_musique.php";
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
<?php
}
else{


		?>
<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">
		    var msg='<?php echo nl2br($error); ?>';
			alert(msg);
			document.location.href="formulaire_ajout_musique.php";
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
<?php
}
?>
