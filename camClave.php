<?php
	$link=mysql_connect("localhost","root","")or die("error al conectar");
	mysql_select_db('proyecto',$link)or die("Error selecciona");
	$u=$_POST['iden'];
	$Con=$_POST['contraseña'];
	$resultado=mysql_query("select * from usuario where Identificacion='$u'",$link);
	$num_rows = @mysql_num_rows($resultado);
	if($num_rows>0){
		$resultado1=mysql_query("update usuario set Contrasena='$Con' where Identificacion='$u'",$link);
		echo "<script type=''>
			alert('Datos modificados');
			window.location='indexLog.php';
		</script>";
	}
	else{
		echo "<script type=''>
			alert('Datos no encontrados');
			window.location='indexLog.php';
		</script>";
	}
?>