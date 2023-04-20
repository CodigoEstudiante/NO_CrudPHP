<?php
	include('funciones.php');
	
	$id = $_GET['id'];

	$clasefunciones = new ClassFunciones;

	$query = "DELETE FROM amigos WHERE id = '$id'";


	 $clasefunciones-> EliminarRegistro($query);

?>