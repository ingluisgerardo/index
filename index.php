<html>
<head>
	<body>
		<?php
		if (isset($proc)){
			printf("El valor egresado es: $texto");

		}
		
			else{
				echo "rellene los campos adqueridos";
		}
	?>
	<form action="form1.php" method="POST">
	<p><b>Nombre:</b> <input type="text" name="Nombre"></p>
	<p><b>Apellido Paterno:</b> <input type="text" name="Apellido Paterno"></p>
	<p><b>Apellido Materno:</b> <input type="text" name="Apellido Materno"></p>
	<p><b>Edad:</b> <input type="text" name="Edad"></p>
	<p><b>Direccion:</b> <input type="text" name="Direccion"></p>

	 	<p>
	   	<b>Profesion:</b>
	   		<select> 
	   		<option> Selecciona una Profecion </option>
	   	 	<option> ING.SC</option>
	   		<option> ING.I</option>
	   		<option> ING.E</option>
	   		<option> ING.L</option>
	   		<option> ING.F</option>
	   	</select>
	   </p>

		<p><input type="text" name="texto">
		<input type="submit" name="proc"></p>

	</form>
	<?
{
}
	?>


	</body>
	</head>
</html>