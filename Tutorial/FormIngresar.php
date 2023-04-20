<!DOCTYPE html>
<html>
<head>
	<title>Ingresar Registro</title>
	<meta charset="utf-8">
	<script type="text/javascript" src = "js/jquery-3.1.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="estilos/estilo2.css">
</head>
<body>
	<div id = "contenedor">
		<div id = "cabezera">
			<h1>Nuevo Registro</h1>
		</div>

		<form action="DatosIngresar.php" method="POST">

			<input type="text" name="nombre" placeholder="Nombre..." required>
			<input type="text" name="apellido" placeholder="Apellido..." required>
			<input type="text" name="telefono" placeholder="Telefono..." required>	

			<button type="submit">Registrar</button>
		
		</form>
		<button onclick="location = 'FormListado.php'">Volver</button>



	</div>

</body>
</html>