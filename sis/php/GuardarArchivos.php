<?php 
	$id=$_GET["id"];
	$archivo=$_FILES["flSolicitud"]["tmp_name"];
	if($_FILES["flSolicitud"]["type"]=="image/jpeg")
		$tipo=".jpg";
	if($_FILES["flSolicitud"]["type"]=="image/jpg")
		$tipo=".jpg";
	if($_FILES["flSolicitud"]["type"]=="image/gif")
		$tipo=".gif";
	if($_FILES["flSolicitud"]["type"]=="image/png")
		$tipo=".png";
	$nombreSolicitud=$id."solicitud".$tipo;
	$destino="../img/Documentos/".$nombreSolicitud;
	move_uploaded_file($archivo, $destino);
	/**************************************/
	$archivo=$_FILES["flFormulario"]["tmp_name"];
	if($_FILES["flFormulario"]["type"]=="image/jpeg")
		$tipo=".jpg";
	if($_FILES["flFormulario"]["type"]=="image/jpg")
		$tipo=".jpg";
	if($_FILES["flFormulario"]["type"]=="image/gif")
		$tipo=".gif";
	if($_FILES["flFormulario"]["type"]=="image/png")
		$tipo=".png";
	$nombreFormulario=$id."formulario".$tipo;
	$destino="../img/Documentos/".$nombreFormulario;
	move_uploaded_file($archivo, $destino);
	/**************************************/
	$archivo=$_FILES["flActaDef"]["tmp_name"];
	if($_FILES["flActaDef"]["type"]=="image/jpeg")
		$tipo=".jpg";
	if($_FILES["flActaDef"]["type"]=="image/jpg")
		$tipo=".jpg";
	if($_FILES["flActaDef"]["type"]=="image/gif")
		$tipo=".gif";
	if($_FILES["flActaDef"]["type"]=="image/png")
		$tipo=".png";
	$nombreActaDef=$id."actadefensa".$tipo;
	$destino="../img/Documentos/".$nombreActaDef;
	move_uploaded_file($archivo, $destino);
	/**************************************/
	$archivo=$_FILES["flTesis"]["tmp_name"];
	$nombreTesis=$id."tesis.pdf";
	$destino="../tesis/".$nombreTesis;
	move_uploaded_file($archivo, $destino);
	/**************************************/
	$archivo=$_FILES["flDiplomaAc"]["tmp_name"];
	if($_FILES["flDiplomaAc"]["type"]=="image/jpeg")
		$tipo=".jpg";
	if($_FILES["flDiplomaAc"]["type"]=="image/jpg")
		$tipo=".jpg";
	if($_FILES["flDiplomaAc"]["type"]=="image/gif")
		$tipo=".gif";
	if($_FILES["flDiplomaAc"]["type"]=="image/png")
		$tipo=".png";
	$nombreDiplomaAc=$id."diplomaAC".$tipo;
	$destino="../img/Documentos/".$nombreDiplomaAc;
	move_uploaded_file($archivo, $destino);
	/**************************************/
	$archivo=$_FILES["flCertificadoNac"]["tmp_name"];
	if($_FILES["flCertificadoNac"]["type"]=="image/jpeg")
		$tipo=".jpg";
	if($_FILES["flCertificadoNac"]["type"]=="image/jpg")
		$tipo=".jpg";
	if($_FILES["flCertificadoNac"]["type"]=="image/gif")
		$tipo=".gif";
	if($_FILES["flCertificadoNac"]["type"]=="image/png")
		$tipo=".png";
	$nombreCertificadoNAc=$id."certificadoNac".$tipo;
	$destino="../img/Documentos/".$nombreCertificadoNAc;
	move_uploaded_file($archivo, $destino);
	/**************************************/
	$archivo=$_FILES["flCarnet"]["tmp_name"];
	if($_FILES["flCarnet"]["type"]=="image/jpeg")
		$tipo=".jpg";
	if($_FILES["flCarnet"]["type"]=="image/jpg")
		$tipo=".jpg";
	if($_FILES["flCarnet"]["type"]=="image/gif")
		$tipo=".gif";
	if($_FILES["flCarnet"]["type"]=="image/png")
		$tipo=".png";
	$nombreCarnet=$id."carnet".$tipo;
	$destino="../img/Documentos/".$nombreCarnet;
	move_uploaded_file($archivo, $destino);
	/**************************************/
	$archivo=$_FILES["flFotografias"]["tmp_name"];
	if($_FILES["flFotografias"]["type"]=="image/jpeg")
		$tipo=".jpg";
	if($_FILES["flFotografias"]["type"]=="image/jpg")
		$tipo=".jpg";
	if($_FILES["flFotografias"]["type"]=="image/gif")
		$tipo=".gif";
	if($_FILES["flFotografias"]["type"]=="image/png")
		$tipo=".png";
	$nombreFotografia=$id."fotografia".$tipo;
	$destino="../img/Documentos/".$nombreFotografia;
	move_uploaded_file($archivo, $destino);
	/**************************************/
	$archivo=$_FILES["flRecibo"]["tmp_name"];
	if($_FILES["flRecibo"]["type"]=="image/jpeg")
		$tipo=".jpg";
	if($_FILES["flRecibo"]["type"]=="image/jpg")
		$tipo=".jpg";
	if($_FILES["flRecibo"]["type"]=="image/gif")
		$tipo=".gif";
	if($_FILES["flRecibo"]["type"]=="image/png")
		$tipo=".png";
	$nombreRecibo=$id."recibo".$tipo;
	$destino="../img/Documentos/".$nombreRecibo;
	move_uploaded_file($archivo, $destino);
	/**************************************/

	include("Consultas.php");

	$consulta="INSERT INTO archivos VALUES('$nombreSolicitud', '$nombreFormulario', '$nombreActaDef', '$nombreTesis', '$nombreDiplomaAc', '$nombreCertificadoNAc', '$nombreCarnet', '$nombreFotografia', '$nombreRecibo', '$id')";
	$consultasAB=new consultasAB();
	$consultasAB->setConsulta($consulta);
	if($consultasAB->ejecutarQuery()){
		header("Location: ../index.php");
	}
	else{
		echo "no se a podido guardar <a href='GuardarArchivos.php'>Regresar al formulario</a>";
	}
?>