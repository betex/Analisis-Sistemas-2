<?php 
	$id=$_GET["id"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Archivos</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
	<meta charset="utf-8" />
	<style>
		body{
			background: #CCC;
			font-size: 1.2em;
		}
		section{
			max-width: 900px;
			margin: 0 auto;
		}
		section#contenido{
			padding-left: 5em;
		}
		section#piePagina{
			text-align: center;
		}
		.centro{
			text-align: center;
		}
	</style>
</head>
<body>
	<section id="encabezado">
		<table>
			<tr class="centro">
				<td><strong>COMANDO EN JEFE DE LAS FF. AA. DEL ESTADO<br />UNIVERSIDAD MILITAR "MCAL. BERNARDINO BILBAO RIOJA" <br /><u>BOLIVIA</u></strong></td>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			</tr>
		</table>
		<h3><strong><u>ANEXO "A" REQUISITOS PARA EL TRÁMITE DEL DIPLOMA DE MAESTRÍA</u></strong></h3>
		<h3><strong><u>I.- PERSONA MILITAR.</u></strong></h3>
	</section>
	<section id="contenido">
		<form action="<?php echo "GuardarArchivos.php?id=$id"; ?>" method="POST" enctype="multipart/form-data">
			<strong>A.- Solicitud al Sr. Rector de la Universidad Militar.</strong><br />
			<input type="file" class="btn btn-inverse" name="flSolicitud" id="flSolicitud" placeholder="" /><br /><br />
			<strong>B.- Formulario 002 de datos personales.</strong><br />
			<input type="file" class="btn btn-inverse" name="flFormulario" id="flFormulario" placeholder="" /><br /><br />
			<strong>C.- Original del Acta de Defensa de Tesis de Grado a nivel Maestría.</strong><br />
			<input type="file" class="btn btn-inverse" name="flActaDef" id="flActaDef" placeholder="" /><br /><br />
			<strong>D.- Presentar un ejemplar de la tesis.</strong><br />
			<input type="file" class="btn btn-inverse" name="flTesis" id="flTesis" placeholder="" /><br /><br />
			<strong>E.- Fotocopia del Diploma Academico de Licenciatura legalizada por la Universidad Militar.</strong><br />
			<input type="file" class="btn btn-inverse" name="flDiplomaAc" id="flDiplomaAc" placeholder="" /><br /><br />
			<strong>F.- Certificado de Nacimiento Original computarizado.</strong><br />
			<input type="file" class="btn btn-inverse" name="flCertificadoNac" id="flCertificadoNac" placeholder="" /><br /><br />
			<strong>G.- Fotocopia de Carnet Identidad y Militar firmado.</strong><br />
			<input type="file" class="btn btn-inverse" name="flCarnet" id="flCarnet" placeholder="" /><br /><br />
			<strong>H.- Tres fotografias 4x4 (formada de frente, fondo rojo, Uniforme N° 4 sin Cordones.(Armada Boliviana Unif. N° 3), en sobre con nombres y apellidos.</strong><br />
			<input type="file" class="btn btn-inverse" name="flFotografias" id="flFotografias" placeholder="" /><br /><br />
			<strong>I.- Original y fotocopia del recibo de depósito a nombre del interesado, <u>BANCO UNION S.A. </u>el monto de <u>Bs. 300</u> a la cuenta bancaria fiscal <u>Nro. 10000004670704</u>.</strong><br />
			<input type="file" class="btn btn-inverse" name="flRecibo" id="flRecibo" placeholder="" /><br /><br />
			<input type="submit" class="btn btn-inverse" value="Guardar" />
			<br /><br /><br /><br />
			<section id="piePagina">
				Gral. Div. Ramiro Siles Azeñas<br />RECTOR DE LA UNIVERSIDAD MILITAR<br /><strong>"MCAL. BERNARDINO BILBAO RIOJA"</strong>
			</section>
		</form>
	</section>
</body>
</html>