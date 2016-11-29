<html>
	<head>
		<title>
			Cambiar clave
		</title>
		<link rel="styleSheet" href="css/fondo.css"/>
	</head>
	<body>
		<h1>
			Cambiar contraseña
		</h1>
		<form action="camClave.php" method="post">
			Identificacion del usuario:
			<input type="text" name="iden" id="iden" placeholder="iden">
			<br>
			<br>
			Nueva contraseña:
			<input type="text" name="contraseña" id="contraseña" placeholder="Nueva contraseña">
			<br>
			<br>
			<input type="submit" name="enviar" value="enviar" />
		</form>
		<input type="submit" name="Cancelar" value="Cancelar" onClick="window.location='indexLog.php'"/>
	</body>
</html>