<?php

$mailvend = isset($_POST["mailvend"])? $_POST["mailvend"] : "";
$pseudo= isset($_POST["pseudo"])? $_POST["pseudo"] : "";


$error  ="";
$drapeau =0;


if ($mailvend=="") {
	$error .= "Champ mail vide <br>";
	$drapeau+=1;
}

if ($pseudo =="") {
	$error .= "Champ pseudo vide <br>";
	$drapeau+=1;

}
echo($error);



if ($error!="") 
{   
	
	header('Location: Co_vendeur.php');

}
 else
 {
  header('Location: Compte_vendeur.php');
 }







?>
