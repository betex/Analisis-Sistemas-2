<?php 
	include("conexion.php");

	$conex=new conexion();
	$conexion=$conex->conectar();
	$consulta="SELECT * FROM formulario_maestria_doctorado ORDER BY apellido";
	$ejecutar=$conexion->query($consulta);
	$n=1;
	while($registro=$ejecutar->fetch_assoc()){
		$id=utf8_decode($registro["codigo"]);
		$grado=utf8_decode($registro["grado"]);
		$nombre=utf8_decode($registro["nombre"]);
		$apellido=utf8_decode($registro["apellido"]);
		$domicilio=utf8_decode($registro["domicilio"]);
		$telefono=utf8_decode($registro["telefono"]);
		$ciudad=utf8_decode($registro["ciudad"]);
		$ci=utf8_decode($registro["ci"]);
		$fecha_nac=utf8_decode($registro["fecha_nac"]);
		$pais=utf8_decode($registro["pais_nac"]);
		$departamento=utf8_decode($registro["departamento_nac"]);
		$diplomaAcad=utf8_decode($registro["anio_expedido_dip_academico"]);
		$fechaIng=utf8_decode($registro["fecha_ingreso"]);
		$fechaEg=utf8_decode($registro["fecha_egreso"]);

		echo "<tr>
			<td>$n</td>
			<td>$grado</td>
			<td>$nombre</td>
			<td>$apellido</td>
			<td>$domicilio</td>
			<td>$ciudad</td>
			<td>$telefono</td>
			<td>$ci</td>
			<td>$fecha_nac</td>
			<td>$pais</td>
			<td>$departamento</td>
			<td>$diplomaAcad</td>
			<td>$fechaIng</td>
			<td>$fechaEg</td>
			<td><a class='btn btn-inverse btn-small' href='php/informacion.php?id=$id'>Ver</a></td>
			<td><a class='btn btn-inverse btn-small' href='php/AdicionarArchivos.php?id=$id'>Agregar</a></td>
			<td class='opciones'>
				<a class='btn btn-inverse btn-small' href='php/editar.php?id=$id''>Modificar</a>
			</td>
			<td class='opciones'>
				<a class='btn btn-inverse btn-small' href='php/eliminar.php?id=$id''>Eliminar</a>
			</td>
		</tr>";
		$n++;
	}
?>