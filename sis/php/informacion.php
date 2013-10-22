<!DOCTYPE html>
<html>
<head>
	<title>Informacion</title>
	<meta charset="utf-8" />
	<style>
		body{
			background: #003366;
		}
		section#datos, section#hojas{
			display: inline-block;
			vertical-align: top;
		}
		section#datos{
			position: fixed;
		}
		section#hojas{
			background: #FFF;
			padding-left: 40em;
		}
		section#hojas img{
			box-shadow: 10px 10px 10px rgba(0,0,0,0.5);
			width: 800px;
		}
		section#datos a{
			background: #CCC;
			color: #000;
			cursor: pointer;
			padding: 1em;
			text-decoration: none;
			transition: all 1s ease-out;
			-moz-transition: all 1s ease-out;
			-ms-transition: all 1s ease-out;
			-o-transition: all 1s ease-out;
			-webkit-transition: all 1s ease-out;
		}
		section#datos a:hover{
			background: #000;
			color: #FFF;
			text-decoration: none;
			transition: all 1s ease-out;
			-moz-transition: all 1s ease-out;
			-ms-transition: all 1s ease-out;
			-o-transition: all 1s ease-out;
			-webkit-transition: all 1s ease-out;
		}
		.centro{
			text-align: center;
		}
		.color{
			background: #0066FF;
			color: #FFF;
		}
		.grande{
			font-size: 1.5em;
		}
	</style>
</head>
<body>
	<section id="contenido">
		<section id="datos">
			<?php include("cargarDatos.php"); ?>
		</section>
		<section id="hojas">
			<?php include("cargarHojas.php"); ?>
		</section>
	</section>
</body>
</html>