
<?php

$mailacheteur = isset($_POST["mailacheteur"])? $_POST["mailacheteur"] : "";
$nom= isset($_POST["nom"])? $_POST["nom"] : "";
$prenom= isset($_POST["prenom"])? $_POST["prenom"] : "";
$mdp= isset($_POST["mdp"])? $_POST["mdp"] : "";
$adresse1= isset($_POST["adresse1"])? $_POST["adresse1"] : "";
$adresse2= isset($_POST["adresse2"])? $_POST["adresse2"] : "";
$ville= isset($_POST["ville"])? $_POST["ville"] : "";
$codepost= isset($_POST["codepost"])? $_POST["codepost"] : "";
$pays= isset($_POST["pays"])? $_POST["pays"] : "";
$tel= isset($_POST["tel"])? $_POST["tel"] : "";
$typepaie= isset($_POST["typepaie"])? $_POST["typepaie"] : "";
$numcarte= isset($_POST["numcarte"])? $_POST["numcarte"] : "";
$nomcarte= isset($_POST["nomcarte"])? $_POST["nomcarte"] : "";
$datecarte= isset($_POST["datecarte"])? $_POST["datecarte"] : "";
$codecarte= isset($_POST["codecarte"])? $_POST["codecarte"] : "";



$error  ="";
$drapeau =0;

$bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');


$verf2= $bdd->prepare('SELECT * FROM acheteur WHERE mailacheteur= :mailacheteur');
$verf2->execute(array(
	'mailacheteur' => $mailacheteur,
));

$donnees2=$verf2->fetch();





if ($mailacheteur=="") {
	$error.="Mail vide";
	$error.= '<br>';
	$drapeau+=1;

}

if ($nom=="") {
	$error.=" Nom vide";
	$error.= '<br>';
	$drapeau+=1;
}
if ($prenom=="") {
	$error.=" Prénom vide";
	$error.= '<br>';
	$drapeau+=1;
}
if ($mdp=="") {
	$error.=" Mot de passe vide";
	$error.= '<br>';
	$drapeau+=1;
}
if ($adresse1=="") {
	$error.=" Première adresse vide";
	$error.= '<br>';
	$drapeau+=1;
}


if ($ville=="") {
	$error.=" Ville vide";
	$error.= '<br>';
	$drapeau+=1;
}

if( !ctype_alpha($ville) && $ville!="")
{
	$error.="La ville doit avoir que des lettres";
	$error.= '<br>';
}




if ($codepost=="") {
	$error.=" Code postal vide";
	$error.= '<br>';
	$drapeau+=1;
}


if ($pays=="") {
	$error.=" Pays vide";
	$error.= '<br>';
	$drapeau+=1;
}
if( !ctype_alpha($pays) && $pays!="")
{
	$error.="Le pays doit avoir que des lettres";
	$error.= '<br>';
}

if ($tel=="") {
	$error.=" tel vide";
	$error.= '<br>';
	$drapeau+=1;
}
if ($typepaie=="") {
	$error.=" Type de paye vide";
	$error.= '<br>';
	$drapeau+=1;
}
if ($numcarte=="") {
	$error.=" Numcarte vide";
	$error.= '<br>';
	$drapeau+=1;
}
if(strlen($numcarte)!=16)
{
	$error.="Le numéro de carte doit contenir 16 chiffres";
	$error.= '<br>';
}
if ($nomcarte=="") {
	$error.=" Nomcarte vide";
	$error.= '<br>';
	$drapeau+=1;
}

if( !ctype_alpha($nomcarte) && $nomcarte!="")
{
	$error.="Le nom de la carte doit avoir que des lettres";
	$error.= '<br>';
}
if ($datecarte=="") {
	$error.=" datecarte vide";
	$error.= '<br>';
	$drapeau+=1;
}


if ($codecarte=="") {
	$error.=" Codecarte vide";
	$error.= '<br>';
	$drapeau+=1;
}
if(strlen($codecarte)!=3)
{
	$error.="Le numéro de carte doit contenir 3 chiffres";
	$error.= '<br>';
}

if($donnees2)
{
	$error.="Ce mail est deja utilisé. Reprennez avec une autre adresse mail";
	$error.= '<br>';
}

if($error=="" && $drapeau==0)
{
	$req = $bdd->prepare('INSERT INTO acheteur(mailacheteur, nom, prenom, mdp, adresse1,adresse2, ville, codepost, pays, tel, typepaie, numcarte, nomcarte, datecarte, codecarte) VALUES(:mailacheteur, :nom, :prenom, :mdp, :adresse1, :adresse2, :ville, :codepost,  :pays, :tel, :typepaie, :numcarte, :nomcarte, :datecarte, :codecarte)');
	$req->execute(array(
		'mailacheteur' => $mailacheteur,
		'nom' => $nom,
		'prenom' => $prenom,
		'mdp' => $mdp,
		'adresse1'=> $adresse1,
		'adresse2'=> $adresse2,
		'ville' => $ville,
		'codepost' => $codepost,
		'pays' => $pays,
		'tel' => $tel,
		'typepaie' => $typepaie,
		'numcarte' => $numcarte,
		'nomcarte' => $nomcarte,
		'datecarte' => $datecarte,
		'codecarte' => $codecarte,
		));
	 header('Location: Co_mon_compte.php');
}

else
{
		?>
<!DOCTYPE html>
		<html>

		<head>
        <link rel=”stylesheet” href=”Page_erreur.css” type=”text/css” />
	
		</head>
		<body style=" position: relative; background-color: white;  ">
        <div style="  position: relative; background-color: #007179; font-size: 100%; 
 color: navy; 
 text-align: center;
 ">
				<?php
		echo '<p style="color : #f89c33;">'.$error. '</p>';
		echo '<br>';
         ?>
		 <td colspan="1">
                <a href="Creercompte.php"> <input type="button" value="Retour" class="btn btn-secondary"></a>
                &nbsp;
         </td>
         
		</div> <br> <br> <br>

		<h2 style="  position: relative; font-style: oblique; text-align: center;text-decoration: underline black; color: red; "> <em > OOPS </em></h2>
		</body>
		
		</html>
<?php
}









?>
