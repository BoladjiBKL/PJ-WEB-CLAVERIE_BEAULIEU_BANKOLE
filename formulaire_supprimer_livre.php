<!DOCTYPE html>
<html>
	<head>
			<title>The Book Deleter</title>
			<meta charset="utf-8">
	</head>
	<body>
			<h2>Le supprimeur de livres</h2>
			<form action="supprimer_livre.php" method="post">
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
								<td>Mail:</td>
								<td><input type="text" name="mail"></td>
							</tr>
							<tr>
								<td colspan="2" align="center">
 								<input type="submit" name="button2" value="Supprimer"></td>
							</tr>
					</table>
				</form>
			</body>
</html>
