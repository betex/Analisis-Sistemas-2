<?php 
	include("config.php");

	$q=$_GET["q"];
	$tipo=$_GET["tipo"];
	extraer($q, $tipo);
?>