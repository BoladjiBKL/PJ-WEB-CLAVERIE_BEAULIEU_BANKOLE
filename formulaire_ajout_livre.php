<!DOCTYPE html>
<html>
	<head>
			<title>The Book Adder</title>
			<meta charset="utf-8">
	</head>
	<body>
			<h2>L'Additioneur de livres</h2>
			<form action="ajouter_livre.php" method="post">
					<table>
							<tr>
								<td>Titre:</td>
								<td><input type="text" name="titre"></td>
							</tr>
							<tr>
								<td>Auteur:</td>
								<td><input type="text" name="auteur"></td>
							</tr>
							<tr>
								<td>Année:</td>
								<td><input type="number" name="annee"></td>
							</tr>
							<tr>
								<td>Edition:</td>
								<td><input type="text" name="edition"></td>
							</tr>
							<tr>
								<td>Description:</td>
								<td><textarea name="description"></textarea> </td>
							</tr>
							<tr>
								<td>Prix:</td>
								<td><input type="number" step="any" name="prix"></td>
							</tr>
							<tr>
								<td>Mail:</td>
								<td><input type="text" name="mail"></td>
							</tr>
							<tr>
								<td colspan="2" align="center">
 								<input type="submit" name="button2" value="Ajouter"></td>
							</tr>
					</table>
				</form>
			</body>
</html>
