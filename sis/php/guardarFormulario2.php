<?php 
	include("Consultas.php");
	function generaCodigo($apellido, $nombre, $CI){
		return strtoupper($apellido[0].$nombre[0].$CI);
	}
	$grado=$_POST["txtGrado"];
	$nombre=$_POST["txtNombre"];
	$apellido=$_POST["txtApellido"];
	$domicilio=$_POST["txtDomicilio"];
	$ciudad=$_POST["txtCiudad"];
	$telefono=$_POST["txtTelefono"];
	$ci=$_POST["txtCI"];
	$pasaporte=$_POST["txtPasaporte"];
	$RUN=$_POST["txtRun"];
	$NumDocLugarExp=$_POST["txtNumDocLugarE"];
	$fechaNac=$_POST["txtFechaNac"];
	$paisNac=$_POST["txtPais"];
	$DepartamentoNac=$_POST["txtDepartamento"];
	$ProvinciaNac=$_POST["txtProvincia"];
	$LocalidadNac=$_POST["txtLocalidad"];
	$UDiplomaAcademico=$_POST["txtUniversidadDipAcademico"];
	$anioExpedidoDipAcad=$_POST["txtAnioExpedido"];
	$UTituloPN=$_POST["txtUniversidadTitPN"];
	$anioExpedidoPN=$_POST["txtAnioExpedidoPN"];
	$denominacionDocPN=$_POST["txtDenominacionPN"];
	$unidadAcademicaPost=$_POST["txtUnidadAcademicaPG"];
	$fechaIngreso=$_POST["txtFechaIngreso"];
	$fechaEgreso=$_POST["txtFechaEgreso"];
	$NumeroRegistroUMFA=$_POST["txtNumRegistroUMFA"];
	$fechaTramiteDiploma=$_POST["txtFechaTramiteDip"];
	$NumFojas=$_POST["txtNumFojas"];
	$codigo=generaCodigo($apellido, $nombre, $ci);

	$consulta="INSERT INTO formulario_maestria_doctorado VALUES('$codigo', '$nombre', '$apellido', '$domicilio' ,'$ciudad', '$telefono', '$ci', '$pasaporte', '$RUN', '$NumDocLugarExp', '$fechaNac', '$paisNac', '$DepartamentoNac', '$ProvinciaNac', '$LocalidadNac', '$UDiplomaAcademico', '$anioExpedidoDipAcad', '$UTituloPN', '$anioExpedidoPN', '$denominacionDocPN', '$unidadAcademicaPost', '$fechaIngreso', '$fechaEgreso', '$NumeroRegistroUMFA', '$fechaTramiteDiploma', '$NumFojas', '$grado')";
	$consultasAB=new consultasAB();
	$consultasAB->setConsulta($consulta);
	if($consultasAB->ejecutarQuery()){
		header("Location: ../index.php");
	}
	else{
		echo "no se a podido guardar <a href='../adicionForm1.html'>Regresar al formulario</a>";
	}
?>