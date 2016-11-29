<html>
	<head>
		<title>
			Factura detallada
		</title>
		<link rel="styleSheet" href="css/fondo.css"/>
	</head>
	<body>
		<?php 
			require_once('agregarfacturadetallada.php');
		?>
		<h1>
			Factura detallada
		</h1>
		<form action="?" method="post" name="form" onsubmit="">
			Identificacion de la factura:
			<input type="text" name="IdFactura" id="IdFactura" <?php echo "value='$IdFactura'" ?> required/>
			<br/>
			<br/>
			Consecutivo Item:
			<input type="text" name="Item" id="Item" <?php echo "value='$Item'" ?> required/>
			<br/>
			<br/>
			Identificacion del producto:
			<input type="text" name="IdProducto" id="IdProducto" <?php echo "value='$IdProducto'" ?> required/>
			<br/>
			<br/>
			Cantidad:
			<input type="text" name="Cantidad" id="Cantidad" <?php echo "value='$Cantidad'" ?> required/>
			<br/>
			<br/>
			Valor unitario:
			<input type="text" name="VlrUnitario" id="VlrUnitario" <?php echo "value='$VlrUnitario'" ?> required/>
			<br/>
			<br/>
			<input type="submit" name="Ingresar" value="Ingresar" />
			<input type="button" name="Cancelar" value="Cancelar" onClick="window.location='registrarVenta.php'" />
		</form>
	</body>
</html>