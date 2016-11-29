<?php
	$link=mysql_connect("localhost","root","")or die("error al conectar");
	mysql_select_db('proyecto',$link)or die("Error selecciona");
	$login=$_POST['login'];
	$resultado=mysql_query("select * from usuario where Login='$login'",$link);
	$row=mysql_num_rows($resultado);
	if($row>=1){
		while($dato=mysql_fetch_array($resultado)){
			if($dato[3]==$login && $dato[4]==$_POST['contraseña']){
				require('validar.php');
				$vali=new validarSession();
				$vali->init();
				$vali->nombreSession("user",$dato[3]);
				$login="";
				$password="";
				header("location: indexLog.php");
			}
			else{
				echo "<script type=''>
					alert('Datos incorrectos');
					window.location='index.php';
				</script>";
			}
		}
	}
	else{
		echo "<script type=''>
			alert('registro no existente');
			window.location='index.php';
		</script>";
	}
?>