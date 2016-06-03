<?php
	$nombre = $_POST['nombre'];
	$apellidoP = $_POST['apellidoP'];
	$apellidoM = $_POST['apellidoM'];
	$edad = $_POST['edad'];
	$direccion = $_POST['direccion'];
	$perfil = $_POST['perfil'];
	$reqlen = strlen($nombre) * strlen($apellidoP) * strlen($apellidoM) * strlen($edad) * strlen($direccion) + strlen($perfil);
		if (isset($reqlen)) {
			printf("$nombre....,$apellidoP....,$apellidoM....,$edad....,$direccion....,$perfil");
		}
?>