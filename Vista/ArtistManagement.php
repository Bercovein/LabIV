<?php namespace Vista;

?>

<!DOCTYPE html>
<html>
<head>
	<title>Gestion de Artista</title>
</head>
<body>
	<h1>Agregar Artista: </h1>
	<form method="POST" action="<?=BASE?>ArtistManagementControl/newArtist">

		<label for="artistName">Artista:</label> 
		<input required type="text" name="artistName" placeholder="Ej: Luis Miguel" required>

		<input type="submit" name="buttonSubmitArtist" value="Cargar Artista">

	</form>

</body>
</html>