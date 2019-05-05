<?php

$Type=isset($_POST["Type"])?$_POST["Type"]:"";
$Action=isset($_POST["Action"])?$_POST["Action"]:"";



// selon ce que l'utilisateur a choisi comme option sur la page préédente, il est dirigé vers  la page qui l'intéresse

   if ($Type=="Livres" && $Action=="Ajouter")
 	{
    header('Location: formulaire_ajout_livre.php');
    }


   if ($Type=="Livres" && $Action=="Supprimer")
    {
    header('Location: formulaire_supprimer_livre.php');
    }


    if ($Type=="Vetements" && $Action=="Ajouter")
    {
    header('Location: formulaire_ajouter_vetement.php');
    }

    if ($Type=="Vetements" && $Action=="Supprimer")
    {
    header('Location: formulaire_supprimer_vetement.php');
    }

    if ($Type=="Sport et Loisir" && $Action=="Ajouter")
    {
    header('Location: formulaire_ajouter_sportetloisir.php');
    }

    if ($Type=="Sport et Loisir" && $Action=="Supprimer")
    {
    header('Location: formulaire_supprimer_sportetloisir.php');
    }

    if ($Type=="Musique" && $Action=="Ajouter")
    {
    header('Location: formulaire_ajout_musique.php');
    }

    if ($Type=="Musique" && $Action=="Supprimer")
    {
    header('Location: formulaire_supprimer_musique.php');
    }

?>
