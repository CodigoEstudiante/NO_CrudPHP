<?php
	include('funciones.php');
	
	$id = $_GET['id'];

	$clasefunciones = new ClassFunciones;

	$query = "SELECT * FROM amigos WHERE id = '$id'";



	$tabla = $clasefunciones->MostrarRegistro($query);

	$dato = mysqli_fetch_array($tabla);

	$nombre = $dato['nombres'];
	$apellido = $dato['apellido'];
	$telefono = $dato['telefono'];


	
?>


<!DOCTYPE html>
<html>
<head>
	<title>Modificar Registro</title>
	<meta charset="utf-8">
	<script type="text/javascript" src = "js/jquery-3.1.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="estilos/estilo2.css">
</head>
<body>
	<div id = "contenedor">
		<div id = "cabezera">
			<h1>Modificar Registro</h1>
		</div>

		<form action="DatosModificar.php" method="POST">

			<input type="hidden" name="id" value = "<?php echo $id ?> ">
			<input type="text" name="nombre" value = "<?php echo $nombre ?> " required>
			<input type="text" name="apellido" value = "<?php echo $apellido ?> " required>
			<input type="text" name="telefono" value = "<?php echo $telefono ?> " required>	

			<button type="submit">Aceptar</button>
		
		</form>
		<button onclick="location = 'FormListado.php'">Volver</button>



	</div>

</body>
</html>