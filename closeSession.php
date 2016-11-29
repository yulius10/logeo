<?php
	require('validar.php');
	$cerrar = new validarSession();
	$cerrar->init();
	$cerrar->cerrarSession();
	header('Location: ./index.php');
?>