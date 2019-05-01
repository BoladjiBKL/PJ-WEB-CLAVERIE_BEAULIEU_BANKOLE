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
							<td>
									<input type="reset" name="button3" value="Vider le formulaire" style="width:130px;padding:7px;height:30px;background-color:AliceBlue;border-radius:20px">
							</td>
							</tr>
					</table>
				</form>
			</body>
</html>
