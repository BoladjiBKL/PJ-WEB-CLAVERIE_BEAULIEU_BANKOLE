<?php

$bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');

$reponse = $bdd->query('SELECT * FROM vetement');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <p>
    <strong>Nom</strong> : <?php echo $donnees['nom']; ?><br />
    Taille : <?php echo $donnees['taille']; ?><br />
    Description : <em><?php echo $donnees['description']; ?></em> <br />
    <img src="<?php echo $donnees['urlimg'];?>" /><br />
    Prix : <?php echo $donnees['prix']; ?><br />
    Mail du vendeur : <?php echo $donnees['mail']; ?><br />

   </p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>
