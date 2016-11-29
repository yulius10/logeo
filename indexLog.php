<?php
	require('validar.php');
	$iniciar = new validarSession();
	$iniciar->init();
	$user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;
	/*
	if($user == ''){
	header('Location: ./index.php?error=2');
	}*/
?>
<html>
	<?php
		echo "Bienvenido, ".$_SESSION['user']."<br/>";
	?>
	<head>
		<title>
			Inicio
		</title>
		<link rel="styleSheet" href="css/menu.css"/>
		<link rel="styleSheet" href="css/fondo.css"/>
	</head>
	<body>
		<form action="closeSession.php">
			<input type="submit" name="Cerrar sesion" value="Cerrar sesion">
		</form>
			<ul class="menu">
				<li>
					<a href="#">
						Ventas
					</a>
					<ul>
					<li>
						<a href="registrarVenta.php">
							Registro ventas
						</a>
					</li>
				</ul>
				</li>
				<?php
					$link=mysql_connect("localhost","root","")or die("error al conectar");
					mysql_select_db('proyecto',$link)or die("Error selecciona");
					$resultado=mysql_query("select * from usuario where Login='".$_SESSION['user']."'",$link);
					$dato=mysql_fetch_array($resultado);
					if($dato[7] == 'Vendedor' or $dato[7] == 'vendedor'){
				?>
				<li>
					<a href="#">
						Inventario
					</a>
					<ul>
					<li>
						<a href="#">
							Productos
						</a>
					</li>
					<li>
						<a href="#">
							Actualizar existentes
						</a>
					</li>
				</ul>
				</li>
				<li>
					<a href="#">
						Usuarios
					</a>
					<ul>
						<li>
							<a href="#">
								Cambiar clave
							</a>
						</li>
						<li>
							<a href="#">
								Nuevo usuario
							</a>
						</li>
					</ul>
				</li>
				<?php
					}
					else{
				?>
				<li>
					<a href="#">
						Inventario
					</a>
					<ul>
					<li>
						<a href="producto.php">
							Productos
						</a>
					</li>
					<li>
						<a href="actualizaExistentes.php">
							Actualizar existentes
						</a>
					</li>
				</ul>
				</li>
				
				<li>
					<a href="#">
						Usuarios
					</a>
					<ul>
						<li>
							<a href="cambiarclave.php">
								Cambiar clave
							</a>
						</li>
						<li>
							<a href="agregarusuario.php">
								Nuevo usuario
							</a>
						</li>
					</ul>
				</li>
				<?php
					}
				?>
			</ul>
	</body>
</html>