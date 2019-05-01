<!DOCTYPE html>
<html>
	<head>
			<title>The Clothes Deleter</title>
			<meta charset="utf-8">
	</head>
	<body>
			<h2>Le supprimeur de vêtements</h2>
			<form action="supprimer_vetement.php" method="post">
					<table>
							<tr>
								<td>Nom:</td>
								<td><input type="text" name="Nom"></td>
							</tr>
							<tr>
								<td>Taille:</td>
								<td><input type="number" name="taille"></td>
							</tr>
							<tr>
								<td>Mail:</td>
								<td><input type="text" name="mail"></td>
							</tr>
							<tr>
								<td colspan="2" align="center">
 								<input type="submit" name="button2" value="Supprimer"></td>

								<td>
									<input type="reset" name="button3" value="Vider le formulaire" style="width:130px;padding:7px;height:30px;background-color:AliceBlue;border-radius:20px">
								</td>
							</tr>
					</table>
				</form>
			</body>
</html>
