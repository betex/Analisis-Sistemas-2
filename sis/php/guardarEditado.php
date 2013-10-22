<?php 
	$id=$_GET["id"];

	$Grado=$_POST["Grado"];
	$Nombre=$_POST["Nombre"];
	$Apellido=$_POST["Apellido"];
	$Domicilio=$_POST["Domicilio"];
	$Telefono=$_POST["Telefono"];
	$ciudad=$_POST["ciudad"];
	$ci=$_POST["ci"];
	$pasaporte=$_POST["pasaporte"];
	$RUN=$_POST["RUN"];
	$NumDocLugarExp=$_POST["NumDocLugarExp"];
	$fechaNac=$_POST["fechaNac"];
	$pais=$_POST["pais"];
	$departamento=$_POST["departamento"];
	$provincia=$_POST["provincia"];
	$localidad=$_POST["localidad"];
	$UDiplomaAcademico=$_POST["UDiplomaAcademico"];
	$anioExpedidoDipAcad=$_POST["anioExpedidoDipAcad"];
	$UTituloPN=$_POST["UTituloPN"];
	$anioExpedidoPN=$_POST["anioExpedidoPN"];
	$denominacionDocPN=$_POST["denominacionDocPN"];
	$unidadAcademicaPost=$_POST["unidadAcademicaPost"];
	$fechaIngreso=$_POST["fechaIngreso"];
	$fechaEgreso=$_POST["fechaEgreso"];
	$num_registro_umfa=$_POST["num_registro_umfa"];
	$fechaTramiteDiploma=$_POST["fechaTramiteDiploma"];
	$num_fojas=$_POST["num_fojas"];

	include("conexion.php");
	$conex=new conexion();
	$conexion=$conex->conectar();

	$consulta="UPDATE formulario_maestria_doctorado SET nombre='$Nombre', apellido='$Apellido', domicilio='$Domicilio', ciudad='$ciudad', telefono='$Telefono', ci='$ci', pasaporte='$pasaporte', run='$RUN', numdoc_lugarexp='$NumDocLugarExp', fecha_nac='$fechaNac', pais_nac='$pais', departamento_nac='$departamento', provincia_nac='$provincia', localidad_nac='$localidad', U_diploma_academico='$UDiplomaAcademico', anio_expedido_dip_academico='$anioExpedidoDipAcad', U_titulo_provision_nacional='$UTituloPN', anio_expedido_provnac='$anioExpedidoPN', denomiacion_doc_provnac='$denominacionDocPN', unidad_academica_postg='$unidadAcademicaPost', fecha_ingreso='$fechaIngreso', fecha_egreso='$fechaEgreso', num_registro_umfa='$num_registro_umfa', fecha_tramite_diploma='$fechaTramiteDiploma', num_fojas='$num_fojas', grado='$Grado' WHERE codigo='$id'";
	$ejecutar=$conexion->query(utf8_encode($consulta));
	if($ejecutar){
		echo "se ejecuto";
	}
	else{
		echo "no se pudo ejecutar";
	}
	$conexion->close();
	header("Location: ../index.php");

?>