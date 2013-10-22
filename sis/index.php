<?php
	
	require "../php/conexion/claseConfiguracion.php";
	require "../php/conexion/modeloDB.php";
	require "../php/clases/usuario.php";
	require "../php/clases/login.php";

	$login = new Login();

	if ($login->getEstatus() == true) 
	{
		$_SESSION["carnet"];
		$_SESSION["nom"];
		$_SESSION["pass"];	 
	}
	else
	{
		header("Location: ../login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulario maestria</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="php/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="php/bootstrap/css/bootstrap.min.css" />
	<script src="../script/jquery.min.js"></script>
	<style>
		body{
			background: url('img/fondo.png');
			/*margin-top: -20px;*/
		}
		#busquedas{
			background: #003366;
			color: #FFF;
			margin: 0 auto;
			max-width: 100%;
			padding: 0.5em;
			text-align: center;
		}
		#busquedas a{
			color: #FFF;
			transition: all 1s ease-out;
			-moz-transition: all 1s ease-out;
			-ms-transition: all 1s ease-out;
			-o-transition: all 1s ease-out;
			-webkit-transition: all 1s ease-out;
		}
		#busquedas a:hover{
			background: #0066FF;
			color: #FFF;
			padding: 1em;
			text-decoration: none;
			transition: all 1s ease-out;
			-moz-transition: all 1s ease-out;
			-ms-transition: all 1s ease-out;
			-o-transition: all 1s ease-out;
			-webkit-transition: all 1s ease-out;
		}
		section#Listado{
			margin: 0 auto;
			/*max-width: 1500px;*/
			max-width: 100%;
		}
		#lista{
			background: #FFF;
		}
		td{
			cursor: pointer;
		}
		.texto-centro{
			text-align: center;
		}
		.bold{
			font-weight: bolder;
		}
		.button1{
			background: #FFF;
			border-radius: 0.5em;
			color: #000;
			padding: 0.2em;
			text-decoration: none;
			box-shadow: 5px 5px 5px rgba(0,0,0,0.5);
			transition: all 1s ease-out;
			-moz-transition: all 1s ease-out;
			-ms-transition: all 1s ease-out;
			-o-transition: all 1s ease-out;
			-webkit-transition: all 1s ease-out;
		}
		.button1:hover{
			background: #000;
			color: #FFF;
			text-decoration: none;
			transition: all 1s ease-out;
			-moz-transition: all 1s ease-out;
			-ms-transition: all 1s ease-out;
			-o-transition: all 1s ease-out;
			-webkit-transition: all 1s ease-out;
		}
		.titulos{
			background: #003366;
			color: #CCC;
		}
		#logout{

			background: #212121;
			display: none;
			font-size: 2em;
			padding: 1em;
			position: absolute;
			width: 100%;
			z-index: 9999;
			
		}
		#logout a
		{
			margin-right: 1.5em;
		}
		#aparecer{
			background: #003366;
			min-height: 20px;
		}

		#usu
		{
			padding-top: 2em;
			padding-left: 1em;
			color: #fff;
			float: left;
			font-weight: bold;
			font-size: 20px;
			font-style: italic;

		}

		.efec:hover
		{
			background: #0066FF;
			color: #FFF;
			padding: 0.7em;
			text-decoration: none;
			transition: all 1s ease-out;
			-moz-transition: all 1s ease-out;
			-ms-transition: all 1s ease-out;
			-o-transition: all 1s ease-out;
			-webkit-transition: all 1s ease-out;
		}
	</style>
	<script>
		$(document).on('ready', function(){
			$('#usu').mouseover(function(){
				$('#logout').slideDown('slow');
			});
			$('#aparecer').mouseover(function(){
				$('#logout').slideDown('slow');
			});
			$('#Contenido').mouseout(function(){
				$('#logout').slideUp('slow');
			});
		});
	</script>
</head>
<body>
	<section id="logout">
		<a class="efec" href="../cambiar.php">Editar Datos</a>
		<a class="efec" href="../salir.php">Salir</a>
	</section>
	<section id="usu"><p> <a class="btn btn-primary" href="#"><i class="icon-user icon-white"></i> <?php echo $_SESSION["nom"]; ?></a>
  </p></section>
	<section id="aparecer"></section>
	<section id="Contenido"> 
		<section id="busquedas">
			<section id="aparecer"></section>
			<strong>Buscar: </strong><input type="text" name="txtBuscar" id="txtBuscar" onkeypress="Buscar();" placeholder="Buscar..." />
			<select name="cbTipoBusqueda" id="cbTipoBusqueda">
				<option value="apellido">Apellido</option>
				<option value="egreso">Fecha de egreso</option>
			</select>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="adicionForm1.html">Agregar presonal militar</a>
		</section>
		<br />
		<script src="js/buscador.js"></script>
		<section id="Listado">
			<table width="1500" class="texto-centro table table-hover table-condensed transicionCorta" cellpadding="5">
				<thead>
					<tr class="titulos">
						<td class="bold">N°</td>
						<td class="bold">Grado</td>
						<td class="bold">Nombre</td>
						<td class="bold">Apellido</td>
						<td class="bold">Domimcilio</td>
						<td class="bold">Ciudad</td>
						<td class="bold">Telefono</td>
						<td class="bold">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td class="bold">Fecha Nacimiento</td>
						<td class="bold">Pais</td>
						<td class="bold">Departamento</td>
						<td class="bold">Diploma academico</td>
						<td class="bold">Fecha de ingreso</td>
						<td class="bold">Fecha de egreso</td>
						<td class="bold" colspan="4">Opciones</td>
					</tr>
				<thead>
				<tbody id="lista">
					<?php include("php/listar.php"); ?>
				</tbody>

			</table>
		</section>
	</section>
</body>
</html>