<?php

 include("config.php");

 class conexion{

 	protected $mysqlcon;

 	public function conectar(){

 		$this->mysqlcon= new mysqli(Host,User,Pass,DataBase);

 		if($this->mysqlcon-> connect_errno){

 			echo "ERROR EN LA CONEXIÓN";
 		}
 	}

 	public function desconectar(){

 		$this->mysqlcon->close();
 		
 	}
 }

?>