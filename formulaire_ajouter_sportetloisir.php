<!DOCTYPE html>
<html>
	<head>
			<title>The Sports Adder</title>
			<meta charset="utf-8">
	</head>
	<body>
			<h2>L'Additioneur de sports et loisirs</h2>
			<form action="ajouter_sportetloisir.php" method="post">
					<table>
							<tr>
								<td>Nom:</td>
								<td><input type="text" name="nom"></td>
							</tr>
							<tr>
								<td>Taille:</td>
								<td><input type="number" name="taille"></td>
							</tr>
							<tr>
								<td>Description:</td>
								<td><textarea name="description"></textarea></td>
							</tr>
							<tr>
								<td>Prix:</td>
								<td><input type="number" step="any" name="prix"></td>
							</tr>
							<tr>
							<tr>
								<td>Mail:</td>
								<td><input type="text" name="mail"></td>
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
