




<!DOCTYPE html>
<html>
<head>
  <title>Vetements</title>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="tous.css">
    <link rel="stylesheet" type="text/css" href="Vetements.css">
</head>


<body>
    <!-- barre de navigation -->
    <nav class="navbar navbar navbar-expand-lg navbar-lightgreen bg-lightgreen">

  <a class="navbar-brand" href="Accueil.php"><img src="eceamazon.png" height="60px"></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

&nbsp;&nbsp;&nbsp;&nbsp;

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">


        <div class="dropdown">
          <a class="btn btn-secondary dropdown-toggle"  role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Catégories
          </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="Livres.php" >Livres</a>
                <a class="dropdown-item" href="Vetements.php">Vétements</a>
                <a class="dropdown-item" href="Sport&Loisir.php">Sports et Loisir</a>
                <a class="dropdown-item" href="Musique.php">Musique</a>
               </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="Ventes_Flash.php">Ventes Flash</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Co_vendeur.php">Vendre</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Co_mon_compte.php">Mon Compte</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Co_admin.php">Admin</a>
      </li>



    </ul>
  </div>

  <a class="nav-link" href="Panier.php"><img src="panier.png"></a>

</nav>

<br>

<br>

<div id="global">
  <p>Vetement a éditer</p>
</div>





  <?php

  $bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');

  $reponse = $bdd->query('SELECT DISTINCT * FROM vetement');

  ?>

  <?php
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

      <form action="ajouter_panier_vetement.php" method="post">
        <input type="hidden" name="nom" value="<?php echo $donnees['nom'];?>">
        <input type="hidden" name="taille" value="<?php echo $donnees['taille'];?>">
        <input type="hidden" name="description" value="<?php echo $donnees['description'];?>">
        <input type="hidden" name="prix" value="<?php echo $donnees['prix'];?>">
        <input type="hidden" name="mail" value="<?php echo $donnees['mail'];?>">
        <input type="hidden" name="urlimg" value="<?php echo $donnees['urlimg'];?>">
        <input type="hidden" name="id" value="<?php echo $donnees['id'];?>">
        <input type="submit" name="button2" value="Ajouter au panier">
    </form>


      </div>










 <footer class="footer">


    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="Accueil.php"> ECE-Amazon.com</a>
    </div>
    <!-- Copyright -->

  </footer>



  <!-- Footer -->
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>







<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>
