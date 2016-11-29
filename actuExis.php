<?php
	$link=mysql_connect("localhost","root","")or die("error al conectar");
	mysql_select_db('proyecto',$link)or die("Error selecciona");
	$id=$_POST['idProducto'];
	$can=$_POST['CanProducto'];
	$resultado=mysql_query("select * from producto where IdProduc='$id'",$link);
	$num_rows = @mysql_num_rows($resultado);
	if($num_rows>0){
		$resultado1=mysql_query("update producto set StockMinimo='$can' where IdProduc='$id'",$link);
		echo "<script type=''>
			alert('Datos cambiados');
			window.location='actualizaExistentes.php';
		</script>";
	}
	else{
		echo "<script type=''>
			alert('Datos no existen');
			window.location='actualizaExistentes.php';
		</script>";
	}
?>