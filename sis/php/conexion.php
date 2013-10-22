<?php
	class conexion{
		public function conectar(){
			$servidor="localhost";
			$usuario="root";
			$password="281022";
			$bd="Estado_mayor";

			$conectarse=new mysqli($servidor, $usuario, $password, $bd) or die("No se pudo conectar a la base de datos");
			return $conectarse;
		}
	}
?>