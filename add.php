<?php
	//print_r($_POST);
	$link=mysql_connect("localhost","root","")or die("error al conectar");
	mysql_select_db('proyecto',$link)or die("Error selecciona");
	if(!isset($_POST['Enviar'])){
		$Id="";
		$Nom="";
		$Ape="";
		$Log="";
		$Pass="";
		$Pre="";
		$Res="";
		$Ni="";
	}
	else{
		$resultado=mysql_query("select * from usuario",$link);
		$num_rows = @mysql_num_rows($resultado);
		if(!$num_rows){
			$resultado1=mysql_query("insert into usuario values('{$_POST['Id']}','{$_POST['Nom']}','{$_POST['Ape']}','{$_POST['Log']}','{$_POST['Pass']}','{$_POST['Pre']}','{$_POST['Res']}','{$_POST['Ni']}')",$link);
			echo "<script type=''>
				alert('Datos registrados');
			</script>";
			$Id="";
			$Nom="";
			$Ape="";
			$Log="";
			$Pass="";
			$Pre="";
			$Res="";
			$Ni="";
		}
		else{
			$dato=mysql_fetch_array($resultado);
			if($dato[0]!=$_POST['Id']){
				echo "<script type=''>
					alert('Datos registrados');
				</script>";
				$resultado1=mysql_query("insert into usuario values('{$_POST['Id']}','{$_POST['Nom']}','{$_POST['Ape']}','{$_POST['Log']}','{$_POST['Pass']}','{$_POST['Pre']}','{$_POST['Res']}','{$_POST['Ni']}')",$link);
				$Id="";
				$Nom="";
				$Ape="";
				$Log="";
				$Pass="";
				$Pre="";
				$Res="";
				$Ni="";
			}
			else{
				echo "<script type=''>
					alert('Datos repetidos');
				</script>";
				$Id="";
				$Nom=$_POST['Nom'];
				$Ape=$_POST['Ape'];
				$Log=$_POST['Log'];
				$Pass=$_POST['Pass'];
				$Pre=$_POST['Pre'];
				$Res=$_POST['Res'];
				$Ni=$_POST['Ni'];
			}
		}
	}
?>