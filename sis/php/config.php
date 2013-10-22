<?php 
	if(!@mysql_connect("localhost", "root", "281022")){
		echo "Error en la coneccion";
	}
	else{
		if(!@mysql_select_db("Estado_mayor")){
			echo "no existe la base de datos";
		}
	}
	function extraer($q, $tipoBusqueda){
		if($tipoBusqueda=="apellido"){
			$query=mysql_query("SELECT * FROM formulario_maestria_doctorado WHERE apellido LIKE '$q%'");
			if(mysql_num_rows($query)==0){
				echo "<tr>
					<td colspan='15'>El registro que busca es inexistente</td>
				</tr>";
			}
			else{
				while($registro=mysql_fetch_assoc($query)){
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
					$n=1;
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
						<td><a class='button1' href='php/informacion.php?id=$id'>Ver</a></td>
						<td><a class='button1' href='php/AdicionarArchivos.php?id=$id'>Agregar</a></td>
						<td class='opciones'>
							<a class='button1' href='php/editar.php?id=$id''>Modificar</a>
						</td>
						<td class='opciones'>
							<a class='button1' href='php/eliminar.php?id=$id''>Eliminar</a>
						</td>
					</tr>";
					$n++;
				}
			}
		}
		else{
			$query=mysql_query("SELECT * FROM formulario_maestria_doctorado WHERE anio_expedido_dip_academico LIKE '$q%'");
			if(mysql_num_rows($query)==0){
				echo "<tr>
					<td colspan='15'>El registro busque es inexistente</td>
				</tr>";
			}
			else{
				while($registro=mysql_fetch_assoc($query)){
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
					$n=1;
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
						<td><a class='btn btn-inverse' href='php/informacion.php?id=$id'>Ver</a></td>
						<td><a class='btn btn-inverse' href='php/AdicionarArchivos.php?id=$id'>Agregar</a></td>
						<td class='opciones'>
							<a class='btn btn-inverse' href='php/editar.php?id=$id''>Modificar</a>
						</td>
						<td class='opciones'>
							<a class='btn btn-inverse' href='php/eliminar.php?id=$id''>Eliminar</a>
						</td>
					</tr>";
					$n++;
				}
			}
		}
	}
?>