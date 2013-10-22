<?php
	$id=$_GET["id"];

	include("conexion.php");

	$conex=new conexion();
	$conexion=$conex->conectar();

	$consulta="DELETE FROM formulario_maestria_doctorado WHERE codigo='$id'";
	$ejecutar=$conexion->query($consulta);
	if($ejecutar){
		$mensaje="El registro fue eliminado exitosamente";
	}
	else{
		$mensaje="Se encontro un error al eliminar el registro";
	}
	$conexion->close();
	header("Location: ../index.php");
?>