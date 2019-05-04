
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Paiement Panier</title>

	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="tous.css">
    <link rel="stylesheet" type="text/css" href="Creercompte.css">

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
<div id="global">



<?php
session_start();
/*session is started if you don't write this line can't use $_Session  global variable*/


$bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');
$reponse = $bdd->query('SELECT DISTINCT * FROM acheteur WHERE mailacheteur = "'.$_SESSION["newsession"].'"');
$donnees=$reponse->fetch();
?>


	<h3> <em>Vos informations de livraison :</em></h3>
	<br>
	<form action="verif_info_paiement.php" method="post">

		<table id="maTable">
			<tr>
				<td>E-mail :</td>
				<td><input type="text" name="mailacheteur" value="<?php echo $donnees['mailacheteur'];?>"></td>
			</tr>

			<tr>
				<td>Nom :</td>
				<td><input type="text" name="nom" value="<?php echo $donnees['nom'];?>"></td>
			</tr>

			<tr>
				<td>Prenom :</td>
				<td><input type="text" name="prenom" value="<?php echo $donnees['prenom'];?>"></td>
			</tr>

			<tr>
				<td>Adresse 1:</td>
				<td><input type="text" name="adresse1" value="<?php echo $donnees['adresse1'];?>"></td>
			</tr>

			<tr>
				<td>Adresse 2:</td>
				<td><input type="text" name="adresse2" value="<?php echo $donnees['adresse2'];?>"></td>
			</tr>

			<tr>
				<td>Code postal :</td>
				<td><input type="int" name="codepost" value="<?php echo $donnees['codepost'];?>"></td>
			</tr>

				<tr>
				<td>Telephone :</td>
				<td><input type="tel" name="tel" value="<?php echo $donnees['tel'];?>"></td>
			</tr>



			<tr>
				<td>Ville :</td>
				<td><input type="text" name="ville" value="<?php echo $donnees['ville'];?>"></td>
			</tr>

			<tr>
				<td>Pays :</td>
				<td><input type="text" name="pays" value="<?php echo $donnees['pays'];?>"></td>
			</tr>

			</table>
			<br><br>
            <h2> Vos informations de paiement :</h2>


            <table id="maTable2">
			<tr>
				<tr>
				<td>Type de carte :</td>
				<td><input type="radio" name="typepaie" value="Visa" checked="checked">Visa
				<input type="radio" name="typepaie" value="Mastercard">MasterCard
				<input type="radio" name="typepaie" value="American express">American Express
				<input type="radio" name="typepaie" value="Paypal">Paypal
			</td>
			</tr>
			</tr>

			<tr>
				<td>Numero de la carte :</td>
				<td><input type="number" name="numcarte"></td>
			</tr>

			<tr>
				<td>Titulaire de la carte :</td>
				<td><input type="text" name="nomcarte"></td>
			</tr>

			<tr>
				<td>Date d'expiration</td>
				<td><input type="text" name="datecarte"></td>

			</tr>

			<tr>
				<td>Code de securité :</td>
				<td><input type="number" name="codecarte"></td>
			</tr>

			<br>
            <tr colspan="2">
					<td><input type="submit" value="Payer !">
					</td>
		    </tr>
		</table>
	</form>

	<br> <br><br><br><<br>><br><br>


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
