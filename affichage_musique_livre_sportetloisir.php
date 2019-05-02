


<?php

//Musique

$bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');

$reponse = $bdd->query('SELECT DISTINCT * FROM sportetloisir');


   // On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
  ?>

   <div class="objet">

    <strong>Titre de l'album</strong> : <?php echo $donnees['titre']; ?><br /><br />


    <img class='image' src="<?php echo $donnees['urlimg'];?>" /> <br><br>

    Artiste : <?php echo $donnees['artiste']; ?><br />

    Année : <?php echo $donnees['annee']; ?><br />

    Label : <?php echo $donnees['label']; ?><br />

    Description : <em><?php echo $donnees['description']; ?></em> <br />

    Prix : <?php echo $donnees['prix']; ?> &euro;<br />

    Mail du vendeur : <?php echo $donnees['mail']; ?><br /><br /><br />

    <form action="ajouter_panier_musique.php" method="post">
      <input type="hidden" name="titre" value="<?php echo $donnees['titre];?>">
      <input type="hidden" name="artiste" value="<?php echo $donnees['artiste'];?>">
      <input type="hidden" name="description" value="<?php echo $donnees['description'];?>">
      <input type="hidden" name="prix" value="<?php echo $donnees['prix'];?>">
      <input type="hidden" name="mail" value="<?php echo $donnees['mail'];?>">
      <input type="hidden" name="annee" value="<?php echo $donnees['annee'];?>">
      <input type="hidden" name="label" value="<?php echo $donnees['label'];?>">
      <input type="hidden" name="urlimg" value="<?php echo $donnees['urlimg'];?>">
      <input type="hidden" name="id" value="<?php echo $donnees['id'];?>">
      <input type="submit" name="button2" value="Ajouter au panier">
      </form>

// sport et Loisir

<?php

$bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');

$reponse = $bdd->query('SELECT DISTINCT * FROM sportetloisir');


   // On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
  ?>

   <div class="objet">

    <strong>Nom</strong> : <?php echo $donnees['nom']; ?><br /><br />


    <img class='image' src="<?php echo $donnees['urlimg'];?>" /> <br><br>

    Taille : <?php echo $donnees['taille']; ?><br />

    Description : <em><?php echo $donnees['description']; ?></em> <br />

    Prix : <?php echo $donnees['prix']; ?> &euro;<br />

    Mail du vendeur : <?php echo $donnees['mail']; ?><br /><br /><br />

    <form action="ajouter_panier_musique.php" method="post">
      <input type="hidden" name="nom" value="<?php echo $donnees['nom'];?>">
      <input type="hidden" name="taille" value="<?php echo $donnees['taille'];?>">
      <input type="hidden" name="description" value="<?php echo $donnees['description'];?>">
      <input type="hidden" name="prix" value="<?php echo $donnees['prix'];?>">
      <input type="hidden" name="mail" value="<?php echo $donnees['mail'];?>">
      <input type="hidden" name="urlimg" value="<?php echo $donnees['urlimg'];?>">
      <input type="hidden" name="id" value="<?php echo $donnees['id'];?>">
      <input type="submit" name="button2" value="Ajouter au panier">
  </form>


  //LIVRE

  <?php



  $bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');

  $reponse = $bdd->query('SELECT DISTINCT * FROM livre');


     // On affiche chaque entrée une à une
  while ($donnees = $reponse->fetch())
  {
    ?>

     <div class="objet">

      <strong>Titre</strong> : <?php echo $donnees['titre']; ?><br /><br />


      <img class='image' src="<?php echo $donnees['urlimg'];?>" /> <br><br>

      Auteur : <?php echo $donnees['auteur']; ?><br />

      Année : <?php echo $donnees['annee']; ?><br />

      Edition: <?php echo $donnees['edition']; ?><br />

      Description : <em><?php echo $donnees['description']; ?></em> <br />

      Prix : <?php echo $donnees['prix']; ?> &euro;<br />

      Mail du vendeur : <?php echo $donnees['mail']; ?><br /><br /><br />

      <form action="ajouter_panier_livre.php" method="post">
        <input type="hidden" name="titre" value="<?php echo $donnees['titre];?>">
        <input type="hidden" name="auteur" value="<?php echo $donnees['auteur'];?>">
        <input type="hidden" name="description" value="<?php echo $donnees['description'];?>">
        <input type="hidden" name="prix" value="<?php echo $donnees['prix'];?>">
        <input type="hidden" name="mail" value="<?php echo $donnees['mail'];?>">
        <input type="hidden" name="annee" value="<?php echo $donnees['annee'];?>">
        <input type="hidden" name="edition" value="<?php echo $donnees['edition'];?>">
        <input type="hidden" name="urlimg" value="<?php echo $donnees['urlimg'];?>">
        <input type="hidden" name="id" value="<?php echo $donnees['id'];?>">
        <input type="submit" name="button2" value="Ajouter au panier">
        </form>
