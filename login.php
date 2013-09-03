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
			header("Location: index.php");
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
	<title>Login</title>
</head>
<body>

	<form method="POST">
		<input type="text" name="nombre" placeholder="Ingrese su Nombre" requierd />
		<input type="password" name="pass" placeholder="Ingerse su Contraseña" required />
		<input type="submit" name="enviar" value="Aceptar" />
	</form>

</body>
</html>