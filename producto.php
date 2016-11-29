<html>
	<head>
		<title>
			Productos
		</title>
		<link rel="styleSheet" href="css/fondo.css"/>
	</head>
	<body>
		<h1>
			Productos
		</h1>
		<input type="submit" name="Nuevo producto" value="Nuevo producto" onClick="window.location='agregarProducto.php'"/>
		<br/>
		<br/>
		<input type="button" name="Adicionar producto" value="Adicionar producto" onClick="window.location='adicionarProducto.php'"/> <!-- hacer una consulta y seleccionar -->
		<br/>
		<br/>
		<form method="post" action="actualizarproducto.php">
			<input type="text" name="idProducto" id="idProducto" placeholder="Identificacion del producto">
			<input type="submit" name="Modificar producto" value="Modificar producto" />
		</form>
		<form method="post" action="eliminarProducto.php">
			<input type="text" name="idProducto" id="idProducto" placeholder="Identificacion del producto">
			<input type="submit" name="Eliminar producto" value="Eliminar producto" />
		</form>
		<input type="submit" name="Cancelar" value="Cancelar" onClick="window.location='indexLog.php'"/>
	</body>
</html>