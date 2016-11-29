<?php
	//print_r($_POST);
	$link=mysql_connect("localhost","root","")or die("error al conectar");
	mysql_select_db('proyecto',$link)or die("Error selecciona");
	if(!isset($_POST['Ingresar'])){
		$IdFactura="";
		$Item="";
		$IdProducto="";
		$Cantidad="";
		$VlrUnitario="";
	}
	else{
		$resultado=mysql_query("select * from detallefac",$link);
		$num_rows = @mysql_num_rows($resultado);
		if(!$num_rows){
			$resultado1=mysql_query("insert into detallefac values('{$_POST['IdFactura']}','{$_POST['Item']}','{$_POST['IdProducto']}','{$_POST['Cantidad']}','{$_POST['VlrUnitario']}')",$link);
			echo "<script type=''>
				alert('Datos registrados');
			</script>";
			$IdFactura="";
			$Item="";
			$IdProducto="";
			$Cantidad="";
			$VlrUnitario="";
		}
		else{
			$dato=mysql_fetch_array($resultado);
			if($dato[0]!=$_POST['IdFactura']){
				echo "<script type=''>
					alert('Datos registrados');
				</script>";
				$resultado1=mysql_query("insert into detallefac values('{$_POST['IdFactura']}','{$_POST['Item']}','{$_POST['IdProducto']}','{$_POST['Cantidad']}','{$_POST['VlrUnitario']}')",$link);
				$resultado2=mysql_query("select * from detallefac");
				$IdFactura="";
				$Item="";
				$IdProducto="";
				$Cantidad="";
				$VlrUnitario="";
			}
			else{
				echo "<script type=''>
					alert('Datos repetidos');
				</script>";
				$IdFactura="";
				$Item=$_POST['Item'];
				$IdProducto=$_POST['IdProducto'];
				$Cantidad=$_POST['Cantidad'];
				$VlrUnitario=$_POST['VlrUnitario'];
			}
		}
	}
?>