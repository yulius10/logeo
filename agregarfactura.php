<?php
	//print_r($_POST);
	$link=mysql_connect("localhost","root","")or die("error al conectar");
	mysql_select_db('proyecto',$link)or die("Error selecciona");
	if(!isset($_POST['Ingresar'])){
		$IdFactura="";
		$fecha="";
		$direccion="";
		$telefono="";
		$IdCliente="";
		$nombre="";
	}
	else{
		$resultado=mysql_query("select * from factura",$link);
		$num_rows = @mysql_num_rows($resultado);
		if(!$num_rows){
			$resultado1=mysql_query("insert into factura values('{$_POST['IdFactura']}','{$_POST['fecha']}','{$_POST['direccion']}','{$_POST['telefono']}','{$_POST['IdCliente']}','{$_POST['nombre']}')",$link);
			echo "<script type=''>
				alert('Datos registrados');
			</script>";
			$IdFactura="";
			$fecha="";
			$direccion="";
			$telefono="";
			$IdCliente="";
			$nombre="";
		}
		else{
			$dato=mysql_fetch_array($resultado);
			if($dato[0]!=$_POST['IdFactura']){
				echo "<script type=''>
					alert('Datos registrados');
				</script>";
				$resultado1=mysql_query("insert into factura values('{$_POST['IdFactura']}','{$_POST['fecha']}','{$_POST['direccion']}','{$_POST['telefono']}','{$_POST['IdCliente']}','{$_POST['nombre']}')",$link);
				$resultado2=mysql_query("select * from factura");
				$IdFactura="";
				$fecha="";
				$direccion="";
				$telefono="";
				$IdCliente="";
				$nombre="";
			}
			else{
				echo "<script type=''>
					alert('Datos repetidos');
				</script>";
				$IdFactura="";
				$fecha=$_POST['fecha'];
				$direccion=$_POST['direccion'];
				$telefono=$_POST['telefono'];
				$IdCliente=$_POST['IdCliente'];
				$nombre=$_POST['nombre'];
			}
		}
	}
?>