<?php
	
	require "php/conexion/claseConfiguracion.php";
	require "php/conexion/modeloDB.php";
	require "php/clases/usuario.php";
	require "php/clases/login.php";

	$login = new Login();

	if ($login->getEstatus() == true) 
	{
		echo $_SESSION["carnet"];
		echo $_SESSION["nombre"];
		echo $_SESSION["pass"];	 
	}
	else
	{
		header("Location: login.php");
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Principal</title>
</head>
<body>

	<a href="salir.php">Salir</a>

</body>
</html>