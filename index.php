<!DOCTYPE html>
<html>
	<head>
		<title>Formulario</title>
	</head>
	<body>
		<h1>Formulario</h1>
		<form method="POST" action=""/>
			<table BGCOLOR="#33DACE">
				<tr>
					<td>
						Nombre:
					</td>
					<td>
						<input type="name" name="nombre">
					</td>	
				</tr>
				<tr>
					<td>
						Apellido Paterno:
					</td>
					<td>
						<input type="name" name="apellidoP">
					</td>	
				</tr>
				<tr>
					<td>
						Apellido Materno:
					</td>
					<td>
						<input type="name" name="apellidoM">
					</td>	
				</tr>
				<tr>
					<td>
						Edad:
					</td>
					<td>
						<input type="name" name="edad">
					</td>	
				</tr>
				<tr>
					<td>
						Direccion:
					</td>
					<td>
						<input type="name" name="direccion">
					</td>	
				</tr>
				<tr>
					<td>
						Perfil:
					</td>
					<td>
						<select name="perfil">
				        <option>Seleccione un Perfil</option>
				        <option>Licenciado</option>
				        <option>Ingeniero</option>
				        </select>
					</td>	
				</tr>
			</table>
			<input type="submit" name="submit" value="Enviar"/> <input type="reset">
		</form>
		<?php
			if (isset($_POST['submit'])) {
				require("registro.php");
			}
		?>
	</body>
</html>