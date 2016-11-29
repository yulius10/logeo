<?php
	//print_r($_POST);
	$link=mysql_connect("localhost","root","")or die("error al conectar");
	mysql_select_db('proyecto',$link)or die("Error selecciona");
	if(!isset($_POST['Enviar'])){
		$IdProducto="";
		$NomProducto="";
		$Exist="";
		$Stock="";
		$IdProveedor="";
	}
	else{
		$resultado=mysql_query("select * from producto",$link);
		$num_rows = @mysql_num_rows($resultado);
		if(!$num_rows){
			$resultado1=mysql_query("insert into producto values('{$_POST['IdProducto']}','{$_POST['NomProducto']}','{$_POST['Exist']}','{$_POST['Stock']}','{$_POST['IdProveedor']}')",$link);
			echo "<script type=''>
				alert('Datos registrados');
			</script>";
			$IdProducto="";
			$NomProducto="";
			$Exist="";
			$Stock="";
			$IdProveedor="";
		}
		else{
			$dato=mysql_fetch_array($resultado);
			if($dato[0]!=$_POST['IdProducto']){
				echo "<script type=''>
					alert('Datos registrados');
				</script>";
				$resultado1=mysql_query("insert into producto values('{$_POST['IdProducto']}','{$_POST['NomProducto']}','{$_POST['Exist']}','{$_POST['Stock']}','{$_POST['IdProveedor']}')",$link);
				$resultado2=mysql_query("select * from factura");
				$IdProducto="";
				$NomProducto="";
				$Exist="";
				$Stock="";
				$IdProveedor="";
			}
			else{
				echo "<script type=''>
					alert('Datos repetidos');
				</script>";
				$IdProducto="";
				$NomProducto=$_POST['NomProducto'];
				$Exist=$_POST['Exist'];
				$Stock=$_POST['Stock'];
				$IdProveedor=$_POST['IdProveedor'];
			}
		}
	}
?>