<html>
	<head>
		<title>
			Actualizar existentes
		</title>
		<link rel="styleSheet" href="css/fondo.css"/>
	</head>
	<body>
		<h1>
			Actualizar existentes
		</h1>
		<form method="post" action="actuExis.php">
			<input type="text" name="idProducto" id="idProducto" placeholder="Identificacion del producto">
			<br/>
			<br/>
			<input type="text" name="CanProducto" id="CanProducto" placeholder="Cantidad del Producto">
			<br/>
			<br/>
			<input type="submit" name="Modificar producto" value="Modificar producto" />
		</form>
		<input type="submit" name="Cancelar" value="Cancelar" onClick="window.location='indexLog.php'"/>
	</body>
</html>