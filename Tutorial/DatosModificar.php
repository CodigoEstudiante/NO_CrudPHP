<?php


	include('funciones.php');

	$id = $_POST['id'];
	$nom = $_POST['nombre'];
	$ape = $_POST['apellido'];
	$tel = $_POST['telefono'];


	$clasefunciones = new ClassFunciones;

	$query = "UPDATE amigos SET nombres = '$nom', apellido = '$ape', telefono = '$tel' WHERE id = '$id'";

	$clasefunciones->ModificarRegistro($query);


?>