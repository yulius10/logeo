<?php
	$link=mysql_connect("localhost","root","")or die("error al conectar");
	mysql_select_db('proyecto',$link)or die("Error selecciona");
	$document=$_POST['idProducto'];
	$resultado=mysql_query("select * from producto where IdProduc='$document'",$link);
	$num_rows = @mysql_num_rows($resultado);
	if($num_rows!=0){
		$resultado1=mysql_query("delete from producto where IdProduc='$document'",$link);
		echo "<script type=''>
			alert('Datos eliminados');
			window.location='producto.php'
		</script>";
	}
	else{
		echo "<script type=''>
			alert('Datos no se a podido eliminar');
			window.location='producto.php'
		</script>";
	}
?>