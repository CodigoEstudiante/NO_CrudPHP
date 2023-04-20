<?php

	include('funciones.php');

	$clasefunciones = new ClassFunciones;

	$query = "SELECT * FROM amigos";

	$tabla = $clasefunciones->MostrarRegistro($query);



?>

<!DOCTYPE html>
<html>
<head>
	<title>Listado de Registros</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilos/estilo1.css">
	<script type="text/javascript" src = "js/jquery-3.1.1.min.js"></script>
</head>
<body>
	<div id = "contenedor">
		<div id= "contenido">
		
			<h1>Listado de Registro</h1>

			<button onclick="location = 'FormIngresar.php'">Ingresar Nuevo Registro</button>


			<table border="1">
				<th>Id</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Telefono</th>
				<th colspan="2">Opciones</th>

				<tbody style="text-align:center;">
					<?php
						while($row = mysqli_fetch_array($tabla)) {
							echo "<tr>";
							echo "<td>" .$row['id'] ."</td>";
							echo "<td>" .$row['nombres'] ."</td>";
							echo "<td>" .$row['apellido'] ."</td>";
							echo "<td>" .$row['telefono'] ."</td>";

							echo "<td>";
								echo "<a href ='FormModificar.php?id=" .$row['id'] ."'><img src='img/edit.png' width='20px' height ='20px'></a>";
							echo "</td>";

							echo "<td>";
								echo "<a href = 'DatosEliminar.php?id=" .$row['id'] ."'><img src=img/delet.png width='20px' height='20px'></a>";
							echo "</td>";
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
		</div>
	</div>



</body>
</html>