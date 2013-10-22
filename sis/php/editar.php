<?php 
	$id=$_GET["id"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Modificar</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
	<style>
		body{
			background: #003366;
		}
		section{
			background: #CCC;
			padding: 2em;
		}
	</style>
</head>
<body>
	<section style="max-width: 600px; margin: 0 auto;">
	<form action="<?php echo 'guardarEditado.php?id='.$id; ?>" method="POST">
	<?php 
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
					<td><input type='text' name='Grado' id='Grado' value='$grado' /></td>
				</tr>
				<tr>
					<td><strong>Nombre:</strong></td>
					<td><input type='text' name='Nombre' id='Nombre' value='$nombre' /></td>
				</tr>
				<tr>
					<td><strong>Apellido:</strong></td>
					<td><input type='text' name='Apellido' id='Apellido' value='$apellido' /></td>
				</tr>
				<tr>
					<td><strong>Domicilio:</strong></td>
					<td><input type='text' name='Domicilio' id='Domicilio' value='$domicilio' /></td>
				</tr>
				<tr>
					<td><strong>Teléfono:</strong></td>
					<td><input type='text' name='Telefono' id='Telefono' value='$telefono' /></td>
				</tr>
				<tr>
					<td><strong>Ciudad:</strong></td>
					<td><input type='text' name='ciudad' id='ciudad' value='$ciudad' /></td>
				</tr>
				<tr>
					<td><strong>CI:</strong></td>
					<td><input type='text' name='ci' id='ci' value='$ci' /></td>
				</tr>
				<tr>
					<td><strong>Pasaporte:</strong></td>
					<td><input type='text' name='pasaporte' id='pasaporte' value='$pasaporte' /></td>
				</tr>
				<tr>
					<td><strong>RUN:</strong></td>
					<td><input type='text' name='RUN' id='RUN' value='$RUN' /></td>
				</tr>
				<tr>
					<td><strong>Numero de documento y lugar de expedición:</strong></td>
					<td><input type='text' name='NumDocLugarExp' id='NumDocLugarExp' value='$NumDocLugarExp' /></td>
				</tr>
				<tr>
					<td><strong>Fecha de nacimiento:</strong></td>
					<td><input type='text' name='fechaNac' id='fechaNac' value='$fecha_nac' /></td>
				</tr>
				<tr>
					<td><strong>Pais:</strong></td>
					<td><input type='text' name='pais' id='pais' value='$paisNac' /></td>
				</tr>
				<tr>
					<td><strong>Departamento:</strong></td>
					<td><input type='text' name='departamento' id='departamento' value='$DepartamentoNac' /></td>
				</tr>
				<tr>
					<td><strong>Provincia:</strong></td>
					<td><input type='text' name='provincia' id='provincia' value='$ProvinciaNac' /></td>
				</tr>
				<tr>
					<td><strong>Localidad:</strong></td>
					<td><input type='text' name='localidad' id='localidad' value='$LocalidadNac' /></td>
				</tr>
				<tr>
					<td><strong>Universidad que otorgó diploma academico:</strong></td>
					<td><input type='text' name='UDiplomaAcademico' id='UDiplomaAcademico' value='$UDiplomaAcademico' /></td>
				</tr>
				<tr>
					<td><strong>Año que fué expedido:</strong></td>
					<td><input type='text' name='anioExpedidoDipAcad' id='anioExpedidoDipAcad' value='$anioExpedidoDipAcad' /></td>
				</tr>
				<tr>
					<td><strong>Universidad que otorgó titulo de provisión nacional:</strong></td>
					<td><input type='text' name='UTituloPN' id='UTituloPN' value='$UTituloPN' /></td>
				</tr>
				<tr>
					<td><strong>Año que fué expedido:</strong></td>
					<td><input type='text' name='anioExpedidoPN' id='anioExpedidoPN' value='$anioExpedidoPN' /></td>
				</tr>
				<tr>
					<td><strong>Denominación del documento en provisión nacional:</strong></td>
					<td><input type='text' name='denominacionDocPN' id='denominacionDocPN' value='$denominacionDocPN' /></td>
				</tr>
				<tr>
					<td><strong>Unidad academica de Postgrado:</strong></td>
					<td><input type='text' name='unidadAcademicaPost' id='unidadAcademicaPost' value='$unidadAcademicaPost' /></td>
				</tr>
				<tr>
					<td><strong>Fecha de ingreso:</strong></td>
					<td><input type='text' name='fechaIngreso' id='fechaIngreso' value='$fechaIngreso' /></td>
				</tr>
				<tr>
					<td><strong>Fecha de egreso:</strong></td>
					<td><input type='text' name='fechaEgreso' id='fechaEgreso' value='$fechaEgreso' /></td>
				</tr>
				<tr>
					<td><strong>Número de regitro de la UMFA:</strong></td>
					<td><input type='text' name='num_registro_umfa' id='num_registro_umfa' value='$NumeroRegistroUMFA' /></td>
				</tr>
				<tr>
					<td><strong>Fecha de tramite del diploma:</strong></td>
					<td><input type='text' name='fechaTramiteDiploma' id='fechaTramiteDiploma' value='$fechaTramiteDiploma' /></td>
				</tr>
				<tr>
					<td><strong>Numero de fojas:</strong></td>
					<td><input type='text' name='num_fojas' id='num_fojas' value='$NumFojas' /></td>
				</tr>

			</table><br />
		";
	?>
	<input type="submit" class="btn btn-inverse btn-big" value="Guardar" />
	</form>
	</section>
</body>
</html>