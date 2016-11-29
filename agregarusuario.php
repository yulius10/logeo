<html>
	<head>
		<title>
			Agregar usuario
		</title>
		<link rel="styleSheet" href="css/fondo.css"/>
	</head>
	<body>
		<?php 
			require_once('add.php');
		?>
		<h1>
			Agregar usuario
		</h1>
		<form action="?" method="post" name="form" onsubmit="">
			Identificacion:
			<input type="text" name="Id" id="Id" <?php echo "value='$Id'" ?> required/>
			<br/>
			<br/>
			Nombre:
			<input type="text" name="Nom" id="Nom" <?php echo "value='$Nom'" ?> required/>
			<br/>
			<br/>
			Apellidos:
			<input type="text" name="Ape" id="Ape" <?php echo "value='$Ape'" ?> required/>
			<br/>
			<br/>
			Login:
			<input type="text" name="Log" id="Log" <?php echo "value='$Log'" ?> required/>
			<br/>
			<br/>
			Password:
			<input type="password" name="Pass" id="Pass" <?php echo "value='$Pass'" ?> required/>
			<br/>
			<br/>
			Pregunta clave:
			<input type="text" name="Pre" id="Pre" <?php echo "value='$Pre'" ?> required/>
			<br/>
			<br/>
			Respuesta:
			<input type="tex" name="Res" id="Res" <?php echo "value='$Res'" ?> required/>
			<br/>
			<br/>
			Nivel de acceso:
			<input type="text" name="Ni" id="Ni" <?php echo "value='$Ni'" ?> placeholder="vendedor o administrador" required/>
			<br/>
			<br/>
			<input type="submit" name="Enviar" value="Enviar" />
			<input type="submit" name="Cancelar" value="Cancelar" onClick="window.location='indexLog.php'"/>
		</form>
		
	</body>
</html>