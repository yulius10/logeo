<?php
	$link=mysql_connect("localhost","root","")or die("error al conectar");
	mysql_select_db('proyecto',$link)or die("Error selecciona");
	$document=$_POST['idProducto'];
	$resultado=mysql_query("select * from producto where IdProduc='$document'",$link);
	$num_rows = @mysql_num_rows($resultado);
	if($num_rows!=0){
?>
<html>
	<head>
		<title>
			Actualizar producto
		</title>
		<link rel="styleSheet" href="css/fondo.css"/>
	</head>
	<?php
		while($dato=mysql_fetch_array($resultado)){
	?>
	<h1>
		Actualizar producto
	</h1>
	<form action="actualizandoProducto.php" method="post">
		<label>
			Identificacion producto:
		</label>
		<input type="text" name="IdProducto" id="IdProducto" <?php echo "value='".$dato['0']."'"?>/>
		<br>
		<label>
			Nombre del producto:
		</label>
		<input type="text" name="NomProducto" id="NomProducto" <?php echo "value='".$dato['1']."'"?>/>
		<br>
		<label>
			Existencia:
		</label>
		<input type="text" name="Exist" id="Exist" <?php echo "value='".$dato['2']."'"?>/>
		<br>
		<label>
			Stock minimo:
		</label>
		<input type="text" name="Stock" id="Stock" <?php echo "value='".$dato['3']."'"?>/>
		<br>
		<label>
			Identificacion del proveedor:
		</label>
		<input type="text" name="IdProveedor" id="IdProveedor" <?php echo "value='".$dato['4']."'"?>/>
		<br>
		<br>
		<input type="submit" value="Actualizar"/>
	</form>
	<input type="submit" value="Cancelar" onClick="window.location='indexLog.php'" />
<?php	
		}
	}
	else{
		echo "<script type=''>
			alert('Datos no existen');
			window.location='actualizandoProducto.php';
		</script>";
	}
?>
</html>