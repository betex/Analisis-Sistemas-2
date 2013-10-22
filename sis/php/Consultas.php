<?php 
	include("conexion.php");
	class consultasAB{
		var $consulta;
		var $conex;
		
		function setConsulta($consulta){
			$this->consulta=$consulta;
		}
		function ejecutarQuery(){
			$conex=new conexion();
			$conexion=$conex->conectar();
			$ejecutar=$conexion->query(utf8_encode($this->consulta));
			if($ejecutar){
				return true;
			}
			else{
				return false;
			}
			$conexion->close();
		}
	}
?>