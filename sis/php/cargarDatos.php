<?php 
	$id=$_GET["id"];
	include("conexion.php");

	$conex=new conexion();
	$conexion=$conex->conectar();
	$consulta="SELECT * FROM formulario_maestria_doctorado WHERE codigo='$id'";
	$consulta2="SELECT * FROM archivos WHERE codigo_militar='$id'";
	$ejecutar=$conexion->query($consulta);
	$ejecutar2=$conexion->query($consulta2);
	$registro=$ejecutar->fetch_assoc();
	$registro2=$ejecutar2->fetch_assoc();

	$foto=utf8_decode($registro2["fotografia"]);
	$tesis=utf8_decode($registro2["tesis"]);

	$grado=utf8_decode($registro["grado"]);
	$nombre=utf8_decode($registro["nombre"]);
	$apellido=utf8_decode($registro["apellido"]);
	$domicilio=utf8_decode($registro["domicilio"]);
	$telefono=utf8_decode($registro["telefono"]);
	$ciudad=utf8_decode($registro["ciudad"]);
	$ci=utf8_decode($registro["ci"]);
	$pasaporte=utf8_decode($registro["pasaporte"]);
	$RUN=utf8_decode($registro["run"]);
	$NumDocLugarExp=utf8_decode($registro["numdoc_lugarexp"]);
	$fecha_nac=utf8_decode($registro["fecha_nac"]);
	$paisNac=utf8_decode($registro["pais_nac"]);
	$DepartamentoNac=utf8_decode($registro["departamento_nac"]);
	$ProvinciaNac=utf8_decode($registro["provincia_nac"]);
	$LocalidadNac=utf8_decode($registro["localidad_nac"]);
	$UDiplomaAcademico=utf8_decode($registro["U_diploma_academico"]);
	$anioExpedidoDipAcad=utf8_decode($registro["anio_expedido_dip_academico"]);
	$UTituloPN=utf8_decode($registro["U_titulo_provision_nacional"]);
	$anioExpedidoPN=utf8_decode($registro["anio_expedido_provnac"]);
	$denominacionDocPN=utf8_decode($registro["denomiacion_doc_provnac"]);
	$unidadAcademicaPost=utf8_decode($registro["unidad_academica_postg"]);
	$fechaIngreso=utf8_decode($registro["fecha_ingreso"]);
	$fechaEgreso=utf8_decode($registro["fecha_egreso"]);
	$NumeroRegistroUMFA=utf8_decode($registro["num_registro_umfa"]);
	$fechaTramiteDiploma=utf8_decode($registro["fecha_tramite_diploma"]);
	$NumFojas=utf8_decode($registro["num_fojas"]);

	echo "
		<table>
			<tr class='color'>
				<td class='centro grande' colspan='2'><img src='../img/Documentos/$foto' style='width: 100px;' />&nbsp;&nbsp;&nbsp;&nbsp;$nombre $apellido</td>
			</tr>
			<tr>
				<td><strong>Grado:</strong></td>
				<td>$grado</td>
			</tr>
			<!--<tr>
				<td><strong>Nombre:</strong></td>
				<td>$nombre $apellido</td>
			</tr>-->
			<tr>
				<td><strong>Domicilio:</strong></td>
				<td>$domicilio</td>
			</tr>
			<tr>
				<td><strong>Teléfono:</strong></td>
				<td>$telefono</td>
			</tr>
			<tr>
				<td><strong>Ciudad:</strong></td>
				<td>$ciudad</td>
			</tr>
			<tr>
				<td><strong>CI:</strong></td>
				<td>$ci</td>
			</tr>
			<tr>
				<td><strong>Pasaporte:</strong></td>
				<td>$pasaporte</td>
			</tr>
			<tr>
				<td><strong>RUN:</strong></td>
				<td>$RUN</td>
			</tr>
			<tr>
				<td><strong>Numero de documento y lugar de expedición:</strong></td>
				<td>$NumDocLugarExp</td>
			</tr>
			<tr>
				<td><strong>Fecha de nacimiento:</strong></td>
				<td>$fecha_nac</td>
			</tr>
			<tr>
				<td><strong>Pais:</strong></td>
				<td>$paisNac</td>
			</tr>
			<tr>
				<td><strong>Departamento:</strong></td>
				<td>$DepartamentoNac</td>
			</tr>
			<tr>
				<td><strong>Provincia:</strong></td>
				<td>$ProvinciaNac</td>
			</tr>
			<tr>
				<td><strong>Localidad:</strong></td>
				<td>$LocalidadNac</td>
			</tr>
			<tr>
				<td><strong>Universidad que otorgó diploma academico:</strong></td>
				<td>$UDiplomaAcademico</td>
			</tr>
			<tr>
				<td><strong>Año que fué expedido:</strong></td>
				<td>$anioExpedidoDipAcad</td>
			</tr>
			<tr>
				<td><strong>Universidad que otorgó titulo de provisión nacional:</strong></td>
				<td>$UTituloPN</td>
			</tr>
			<tr>
				<td><strong>Año que fué expedido:</strong></td>
				<td>$anioExpedidoPN</td>
			</tr>
			<tr>
				<td><strong>Denominación del documento en provisión nacional:</strong></td>
				<td>$denominacionDocPN</td>
			</tr>
			<tr>
				<td><strong>Unidad academica de Postgrado:</strong></td>
				<td>$unidadAcademicaPost</td>
			</tr>
			<tr>
				<td><strong>Fecha de ingreso:</strong></td>
				<td>$fechaIngreso</td>
			</tr>
			<tr>
				<td><strong>Fecha de egreso:</strong></td>
				<td>$fechaEgreso</td>
			</tr>
			<tr>
				<td><strong>Número de regitro de la UMFA:</strong></td>
				<td>$NumeroRegistroUMFA</td>
			</tr>
			<tr>
				<td><strong>Fecha de tramite del diploma:</strong></td>
				<td>$fechaTramiteDiploma</td>
			</tr>
			<tr>
				<td><strong>Numero de fojas:</strong></td>
				<td>$NumFojas</td>
			</tr>

		</table><br />
		<a href='../tesis/$tesis' target='_black'>Ver la tesis de $nombre $apellido</a>
		<a href='../index.php'>Regresar a la ventana principal</a>
	";
?>