<html>
	<head>
		<title>
			Factura
		</title>
		<link rel="styleSheet" href="css/fondo.css"/>
	</head>
	<body>
		<?php 
			require_once('agregarfactura.php');
		?>
		<h1>
			Factura
		</h1>
		<form action="?" method="post" name="form" onsubmit="">
			Identificacion Factura:
			<input type="text" name="IdFactura" id="IdFactura" <?php echo "value='$IdFactura'" ?> required/>
			<br/>
			<br/>
			Fecha:
			<input type="date" name="fecha" id="fecha" step="1" min="1900-01-01" max="3000-12-31" <?php echo "value='$fecha'" ?> required/>
			<br/>
			<br/>
			Direccion
			<input type="text" name="direccion" id="direccion" <?php echo "value='$direccion'" ?> required/>
			<br/>
			<br/>
			Telefono
			<input type="text" name="telefono" id="telefono" <?php echo "value='$telefono'" ?> required/>
			<br/>
			<br/>
			Identificacion Cliente
			<input type="text" name="IdCliente" id="IdCliente" <?php echo "value='$IdCliente'" ?> required />
			<br/>
			<br/>
			Nombre
			<input type="text" name="nombre" id="nombre" <?php echo "value='$nombre'" ?> required/>
			<br/>
			<br/>
			<input type="submit" name="Ingresar" value="Ingresar" />
			<input type="button" name="Cancelar" value="Cancelar" onClick="window.location='registrarVenta.php'" />
		</form>
	</body>
</html>