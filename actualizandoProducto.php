<?php
	$link=mysql_connect("localhost","root","")or die("error al conectar");
	mysql_select_db('proyecto',$link)or die("Error selecciona");
	$IdProducto=$_POST['IdProducto'];
	$NomProducto=$_POST['NomProducto'];
	$Exist=$_POST['Exist'];
	$Stock=$_POST['Stock'];
	$IdProveedor=$_POST['IdProveedor'];
	$resultado1=mysql_query("update producto set IdProduc='$IdProducto', NombreProduc='$NomProducto', Existencia='$Exist', StockMinimo='$Stock', IdProveedor='$IdProveedor' where IdProduc='$IdProducto'",$link);
	echo "<script type=''>
		alert('Datos modificados');
		window.location='indexLog.php';
	</script>";
?>