<!DOCTYPE html>
<html>
<head>
  <title>Compte_client</title>
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

  <a class="navbar-brand" href="Accueil.php"><img src="eceamazon1.png" height="60px"></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

&nbsp;&nbsp;&nbsp;&nbsp;

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">


        <div class="dropdown">
          <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Catégories
          </a>


            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="Livres.php" >Livres</a>
                <a class="dropdown-item" href="Vetements.php">Vêtements</a>
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


  <h2> Compte client :</h2>
  <br><br><br><br>





<?php
//lancement de la variable globale qui contient l'adresse du mail de la personne actuellement connectéé
  session_start();
  $_SESSION["newsession"];




  $bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');
// on affiche les informations de la personne connectée
  $reponse = $bdd->query('SELECT * FROM acheteur WHERE mailacheteur ="'.$_SESSION["newsession"].'" ');

   $donnees = $reponse->fetch();

?>



     <div class="info_client rounded border border-dark ">

      <h3> Informations de livraison :</h3>
      <br /><br />

      <strong>Nom</strong> : <?php echo $donnees['nom']; ?> &nbsp;&nbsp; <strong>Prénom</strong> : <?php echo $donnees['prenom']; ?> <br /><br />

      Email : <?php echo $donnees['mailacheteur']; ?> <br /><br />

      Telephone : +(33) <?php echo $donnees['tel']; ?> <br /><br />

      Adresse 1 : <?php echo $donnees['adresse1']; ?> <br /><br />

      Adresse 2 : <?php echo $donnees['adresse2']; ?> <br /><br />

      Code postal : <?php echo $donnees['codepost']; ?> <br /><br />

      Ville : <?php echo $donnees['ville']; ?> <br /><br />

      Pays : <?php echo $donnees['pays']; ?> <br /><br />

    </div>



    <div class="info_paiement rounded border border-dark">

      <h3> Informations de paiement :</h3>
      <br /><br />


      Type de paiment : <?php echo $donnees['typepaie']; ?> <br /><br />
        <!-- on affiche partiellement les infos bancaires sensibles -->
      Numero de la carte :  ************** <?php echo substr($donnees['numcarte'],-4); ?> <br /><br />

      Titulaire de la carte : <?php echo $donnees['nomcarte']; ?> <br /><br />

      Date d'expiration : <?php echo $donnees['datecarte']; ?> <br /><br />




      </div>







      <?php


  $reponse->closeCursor(); // Termine le traitement de la requête

  ?>
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    <br /><br /><br /><br /><br /><br /><br /><br /><br />














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
