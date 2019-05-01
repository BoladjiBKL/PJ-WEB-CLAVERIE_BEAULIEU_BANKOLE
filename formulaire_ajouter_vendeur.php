<!DOCTYPE html>
<html>
	<head>
			<title>The Seller add</title>
			<meta charset="utf-8">
	</head>
	<body>
			<h2>L'Ajout de vendeur</h2>
			<form action="ajouter_vendeur.php" method="post">
					<table>
							<tr>
								<td>Email:</td>
								<td><input type="text" name="mailvend"></td>
							</tr>
							<tr>
								<td>Pseudo:</td>
								<td><input type="number" name="pseudo"></td>
							</tr>
							<tr>
								<td>Nom:</td>
								<td><input type="text" name="nom"></td>
							</tr>
						
							<tr>
								<td>
 								<input type="submit" name="button2" value="Ajouter" style="width:100px;padding:7px;height:30px;background-color: AliceBlue;border-radius:20px"></td>

								<td>
									<input type="reset" name="button3" value="Vider le formulaire" style="width:130px;padding:7px;height:30px;background-color:AliceBlue;border-radius:20px"></td>
							</tr>
					</table>
				</form>
			</body>
</html>
