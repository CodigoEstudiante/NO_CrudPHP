<?php

	include('conexion.php');

	
	class ClassFunciones extends conexion
	{


		public function MostrarRegistro($query){
			parent::conectar();

			$resultado = $this->mysqlcon->query($query);

			if(!empty($resultado)){
				return $resultado;
			} else
			{
				return null;
			}

			parent::desconectar();
		}

		public function InsertarRegistro($query){
			parent::conectar();

			$resultado = $this->mysqlcon->query($query);

			if($resultado){
				header("location: FormListado.php");
			} else
			{
				echo "Error, no se ingresó el registro";
			}

			parent::desconectar();
		}

		public function ModificarRegistro($query){
			parent::conectar();

			$resultado = $this->mysqlcon->query($query);

			if($resultado){
				header("location: FormListado.php");
			} else
			{
				echo "Error, no se Modificó el registro";
			}

			parent::desconectar();
		}
		
		public function EliminarRegistro($query){
			parent::conectar();

			$resultado = $this->mysqlcon->query($query);

			if($resultado){
				header("location: FormListado.php");
			} else
			{
				echo "Error, no se Eliminó el registro";
			}

			parent::desconectar();
		}


	


		
		

	}

	
?>