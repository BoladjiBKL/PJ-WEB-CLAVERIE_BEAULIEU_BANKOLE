<!DOCTYPE html>
<html>
	<head>
			<title>The Music Adder</title>
			<meta charset="utf-8">
	</head>
	<body>
			<h2>L'Additioneur de musiques</h2>
			<form action="ajouter_musique.php" method="post">
					<table>
							<tr>
								<td>Titre:</td>
								<td><input type="text" name="titre"></td>
							</tr>
							<tr>
								<td>Artiste:</td>
								<td><input type="text" name="artiste"></td>
							</tr>
							<tr>
								<td>Année:</td>
								<td><input type="number" name="annee"></td>
							</tr>
							<tr>
								<td>Label:</td>
								<td><input type="text" name="label"></td>
							</tr>
							<tr>
								<td>URL image:</td>
								<td><input type="text" name="urlimg"></td>
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
								<td><input type="email" name="mail"></td>
							</tr>
							<tr>
								<td colspan="2" align="center">
 								<input type="submit" name="button2" value="Ajouter"></td>
							</tr>
					</table>
				</form>
			</body>
</html>
