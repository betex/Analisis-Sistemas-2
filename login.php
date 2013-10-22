<?php

	require "php/conexion/claseConfiguracion.php";
	require "php/conexion/modeloDB.php";
	require "php/clases/usuario.php";
	require "php/clases/login.php";

	$db = ModeloDB::getInstancia();

	if(isset($_POST["enviar"]))
	{
		$nombre = mysql_real_escape_string($_POST["nombre"]);
		$pass = mysql_real_escape_string($_POST["pass"]);

		$usuario = new Usuario($nombre,$pass);
		$login = new Login($nombre,$pass);

		$sql = $usuario->selectUsuario();
		$db->ejecutarConsultaBusqueda($sql);
		$inicio = $login->verificarUsuario($db->_resultadoMatriz->fetch_Object());
		if ($inicio) {
			header("Location: sis/index.php");
		}
		else
		{
			echo "no entro";
		}
		
	}	


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Login</title>
	<style>
		body{
			background: url('img/fondo.jpg');
		}
		#contenido{
			background: #003366;
			border-radius: 0.5em;
			box-shadow: 10px 10px 10px rgba(0,0,0,0.5);
			max-width: 500px;
			margin: 0 auto;
			margin-top: 10em;
			padding: 3em;
			text-align: center;
		}
		input[type="text"], input[type="password"]{
			border-radius: 0.2em;
			font-size: 1.5em;
			padding: 0.2em;
		}
		input[type="submit"]{
			background: #006699;
			font-size: 1.5em;
			background: #CCC;
			border-radius: 0.2em;
		}
		input[type="submit"]:hover{
			background: #0099CC;
			cursor: pointer;
		}
		h1{
			color: #FFF;
		}
		.transicion{
			transition: all 1s ease;
			-moz-transition: all 1s ease;
			-o-transition: all 1s ease;
			-webkit-transition: all 1s ease;
			-ms-transition: all 1s ease;
		}
		
	</style>
</head>
<body>
	<section id="contenido">
		<hgroup><h1>Ingreso de usuarios</h1></hgroup>
		<form method="POST">
			<input type="text" name="nombre" placeholder="Ingrese su Nombre" requierd /><br /><br />
			<input type="password" name="pass" placeholder="Ingerse su Contraseña" required /><br />
			<input type="submit" class="transicion" name="enviar" value="Aceptar" />
		</form>
	</section>

</body>
</html>