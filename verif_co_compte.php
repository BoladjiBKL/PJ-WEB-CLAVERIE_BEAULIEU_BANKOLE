<?php

$mailacheteur = isset($_POST["mailacheteur"])? $_POST["mailacheteur"] : "";
$mdp= isset($_POST["mdp"])? $_POST["mdp"] : "";


$error  ="";
$drapeau =0;

$bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');
$verf= $bdd->prepare('SELECT * FROM acheteur WHERE mailacheteur= :mailacheteur AND mdp= :mdp');
$verf->execute(array(
	'mailacheteur' => $mailacheteur,
	'mdp' => $mdp,
));

$donnees= $verf->fetch();


if ($mailacheteur=="") {
	$error .= "Champ login vide <br>";
	$drapeau+=1;
}

if ($mdp=="") {
	$error .= "Champ password vide <br>";
	$drapeau+=1;

}
echo($error);



if ($error="" && $donnees) 
{   
	 header('Location: Compte_client.php');
	

}
 else
 {
  header('Location: Co_mon_compte.php');
 }
 







?>
