<?php
//recuperer les données venant de la page HTML
//le parametre de $_POST = "name" de <input> de votre page HTML
$titre = isset($_POST["titre"])? $_POST["titre"] : "";
$auteur = isset($_POST["auteur"])? $_POST["auteur"] : "";
$mail = isset($_POST["mail"])? $_POST["mail"] : "";

$bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');

$bdd->exec("DELETE FROM livre WHERE titre LIKE '%$titre%' AND auteur LIKE '%$auteur%' AND mail LIKE '%$mail%' ");

?>
