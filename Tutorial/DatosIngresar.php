<?php
	include('funciones.php');


	$nom = $_POST['nombre'];
	$ape = $_POST['apellido'];
	$tel = $_POST['telefono'];


	$clasefunciones = new ClassFunciones;

	$query = "INSERT INTO amigos(nombres,apellido,telefono) VALUES('$nom','$ape','$tel')";

	$clasefunciones->InsertarRegistro($query);


?>