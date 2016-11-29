<html>
	<head>
		<title>
			Agregar producto
		</title>
		<link rel="styleSheet" href="css/fondo.css"/>
	</head>
	<body>
		<?php 
			require_once('addProducto.php');
		?>
		<h1>
			Agregar producto
		</h1>
		<form action="?" method="post" name="form" onsubmit="">
			Identificacion producto:
			<input type="text" name="IdProducto" id="IdProducto" <?php echo "value='$IdProducto'" ?> required/>
			<br/>
			<br/>
			Nombre producto:
			<input type="text" name="NomProducto" id="NomProducto" <?php echo "value='$NomProducto'" ?> required/>
			<br/>
			<br/>
			Existencia:
			<input type="text" name="Exist" id="Exist" <?php echo "value='$Exist'" ?> required/>
			<br/>
			<br/>
			Stock Minimo:
			<input type="text" name="Stock" id="Stock" <?php echo "value='$Stock'" ?> required/>
			<br/>
			<br/>
			Identificacion proveedor:
			<input type="text" name="IdProveedor" id="IdProveedor" <?php echo "value='$IdProveedor'" ?> required/>
			<br/>
			<br/>
			<input type="submit" name="Enviar" value="Enviar"/>
			<input type="submit" name="Cancelar" value="Cancelar" onClick="window.location='producto.php'"/>
		</form>
		
	</body>
</html>