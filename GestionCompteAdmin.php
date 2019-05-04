<?php

$Type=isset($_POST["Type"])?$_POST["Type"]:"";
$Action=isset($_POST["Action"])?$_POST["Action"]:"";





   if ($Type=="Livres" && $Action=="Ajouter")
 	{
    header('Location: formulaire_ajout_livre_admin.php');
    }


   if ($Type=="Livres" && $Action=="Supprimer")
    {
    header('Location: formulaire_supprimer_livre.php');
    }


    if ($Type=="Vetements" && $Action=="Ajouter")
    {
    header('Location: formulaire_ajouter_vetement_admin.php');
    }

    if ($Type=="Vetements" && $Action=="Supprimer")
    {
    header('Location: formulaire_supprimer_vetement.php');
    }

    if ($Type=="Sport et Loisir" && $Action=="Ajouter")
    {
    header('Location: formulaire_ajouter_sportetloisir_admin.php');
    }

    if ($Type=="Sport et Loisir" && $Action=="Supprimer")
    {
    header('Location: formulaire_supprimer_sportetloisir.php');
    }

    if ($Type=="Musique" && $Action=="Ajouter")
    {
    header('Location: formulaire_ajout_musique_admin.php');
    }

    if ($Type=="Musique" && $Action=="Supprimer")
    {
    header('Location: formulaire_supprimer_musique.php');
    }

?>
