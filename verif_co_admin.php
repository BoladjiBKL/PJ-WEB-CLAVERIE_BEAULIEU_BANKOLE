<?php

$mailadmin = isset($_POST["mailadmin"])? $_POST["mailadmin"] : "";
$mdpadmin= isset($_POST["mdpadmin"])? $_POST["mdpadmin"] : "";


$error  ="";
$drapeau =0;

$bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');
$verf= $bdd->prepare('SELECT * FROM administrateur WHERE mailadmin= :mailadmin AND mdpadmin= :mdpadmin');
$verf->execute(array(
	'mailadmin' => $mailadmin,
	'mdpadmin' => $mdpadmin,
));

$donnees= $verf->fetch();


if ($mailadmin=="") {
	$error .= "Champ mail vide <br>";
	$drapeau+=1;
}

if ($mdpadmin =="") {
	$error .= "Champ password vide <br>";
	$drapeau+=1;

}
echo($error);



if ($donnees) 
{   
	 header('Location: Compte_admin.php');
	

}
 else
 {
  header('Location: Co_admin.php');
 }
 







?>
