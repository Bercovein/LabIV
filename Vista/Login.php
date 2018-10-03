<html>
	<head>
		<title>Login</title>
	</head>
	<body>

		<label for="titleLogin"><h2>Login</h2></label>
		<form method="post" action="<?=BASE?>LoginControl/UserLogin">

			<label for="nameUser">Usuario:</label>
			<input type="text" name="nameUser" placeholder="admin" required>
			<br><br>
			<label for="passUser">Contraseña:</label>
			<input type="password" name="passUser" placeholder="admin" required>
			<br><br>
			<input type="submit" value="Iniciar Sesión">
			
		</form>

	</body>
</html>