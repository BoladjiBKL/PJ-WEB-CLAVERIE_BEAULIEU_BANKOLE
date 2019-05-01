<?php

$mailvend = isset($_POST["mailvend"])? $_POST["mailvend"] : "";
$pseudo= isset($_POST["pseudo"])? $_POST["pseudo"] : "";
$nom= isset($_POST["nom"])? $_POST["nom"] : "";

$error  ="";
$drapeau =0;

$bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');
$verf= $bdd->prepare('SELECT * FROM vendeur WHERE mailvend= :mailvend AND pseudo= :pseudo');
$verf->execute(array(
	'mailvend' => $mailvend,
	'pseudo' => $pseudo,
));

$donnees= $verf->fetch();


if ($mailvend=="") {
	$error .= "Champ mail vide <br>";
	$drapeau+=1;
}

if ($pseudo =="") {
	$error .= "Champ pseudo vide <br>";
	$drapeau+=1;

}
echo($error);



if ( $donnees) 
{   
	 header('Location: Compte_vendeur.php');
	

}
 else
 {
  header('Location: Co_vendeur.php');
 }
 







?>
