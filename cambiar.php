<?php
	
	require "php/conexion/claseConfiguracion.php";
	require "php/conexion/modeloDB.php";
	require "php/clases/usuario.php";
	require "php/clases/login.php";

	$login = new Login();

	if ($login->getEstatus() == true) 
	{

		 $_SESSION["carnet"];
		 $_SESSION["nom"];
		 $_SESSION["pass"];	 
	}
	else
	{
		header("Location: login.php");
	}

	if (isset($_POST["cancelar"])) 
	{
		header("Location: sis/index.php");
	}

	if (isset($_POST["aceptar"])) 
	{
		if ($_POST["passA"] == $_SESSION["pass"]) 
		{
			if ($_POST["pass1"] == $_POST["pass2"]) 
			{
				$db = ModeloDB::getInstancia();
				$usuario = new Usuario($_SESSION["nom"],$_SESSION["pass"]);
				$db->ejecutarConsulta($usuario->cambiarPass($_SESSION["carnet"],$_POST["pass1"]));
				if ($db->_resultadoConsulta) 
				{
					$_SESSION["pass"] = $_POST["pass1"];
					echo "se actualizo";
				}
				else
				{
					echo "error";
				}
			}
			else
			{
				echo "Las contraselas con coincide vuelva a introducir";

			}
		}
		else
		{
			echo "Su Contraseña No coincide ";
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Cambiar</title>
	<link rel="stylesheet" href="sis/php/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="sis/php/bootstrap/css/bootstrap.min.css" />
<style>
		body{
			background: #999;
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
		/*input[type="submit"]{
			background: #006699;
			font-size: 1.5em;
			background: #CCC;
			border-radius: 0.2em;
		}
		input[type="submit"]:hover{
			background: #0099CC;
			cursor: pointer;
		}*/
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
	<section id="contenido" >
	<form method="POST">
	<section id="usu"><p> <label class="btn btn-primary" href="#"><i class="icon-user icon-white"></i> <?php echo $_SESSION["nom"]; ?></label> <br><br>
		<input type="password" required name="passA" placeholder="Ingrese su Contraseña" /><br>
		<input type="password" required name="pass1" placeholder="Ingrese su Nueva Contraseña" /><br>
		<input type="password" required name="pass2" placeholder="Repita su Contraseña" /><br>
		<input type="submit"  class="btn btn-inverse" value="Aceptar" name="aceptar" />
		<a href="sis/index.php" class="btn btn-warning">Cancelar</a>		
	</form>
</section>
</body>
</html>