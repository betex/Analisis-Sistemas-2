<?php 
	$id=$_GET["id"];

	$conex=new conexion();
	$conexion=$conex->conectar();
	$consulta="SELECT * FROM archivos WHERE codigo_militar='$id'";
	$ejecutar=$conexion->query($consulta);
	$registro=$ejecutar->fetch_assoc();

	$nombreSolicitud=utf8_decode($registro["solicitud"]);
	$nombreFormulario=utf8_decode($registro["formulario"]);
	$nombreActaDef=utf8_decode($registro["acta_defensa"]);
	$nombreTesis=utf8_decode($registro["tesis"]);
	$nombreDiplomaAc=utf8_decode($registro["diploma_AC"]);
	$nombreCertificadoNAc=utf8_decode($registro["certificado_nac"]);
	$nombreCarnet=utf8_decode($registro["carnet"]);
	$nombreFotografia=utf8_decode($registro["fotografia"]);
	$nombreRecibo=utf8_decode($registro["recibo"]);

	echo "
		<strong>A.- Solicitud al Sr. Rector de la Universidad Militar.</strong><br />
		<img src='../img/Documentos/$nombreSolicitud' /><br />
		<strong>B.- Formulario 002 de datos personales.</strong><br />
		<img src='../img/Documentos/$nombreFormulario' /><br />
		<strong>C.- Original del Acta de Defensa de Tesis de Grado a nivel Maestría.</strong><br />
		<img src='../img/Documentos/$nombreActaDef' /><br />
		<strong>E.- Fotocopia del Diploma Academico de Licenciatura legalizada por la Universidad Militar.</strong><br />
		<img src='../img/Documentos/$nombreDiplomaAc' /><br />
		<strong>F.- Certificado de Nacimiento Original computarizado</strong><br />
		<img src='../img/Documentos/$nombreCertificadoNAc' /><br />
		<strong>G.- Fotocopia de Carnet Identidad y Militar firmado.</strong><br />
		<img src='../img/Documentos/$nombreCarnet' /><br />
		<strong>H.- fotografias 4x4 (formada de frente, fondo rojo, Uniforme N° 4 sin Cordones.(Armada Boliviana Unif. N° 3),</strong><br />
		<img src='../img/Documentos/$nombreFotografia' /><br />
		<strong>I.- Original y fotocopia del recibo de depósito a nombre del interesado, <u>BANCO UNION S.A. </u>el monto de <u>Bs. 300</u> a la cuenta bancaria fiscal <u>Nro. 10000004670704</strong><br />
		<img src='../img/Documentos/$nombreRecibo' />
	";
?>