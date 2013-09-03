<?php

	require "php/clases/login.php";

	$login = new Login();
	$login->cerrarSession();
	header("Location: login.php");

?>