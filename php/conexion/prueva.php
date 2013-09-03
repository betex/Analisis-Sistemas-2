<?php

	require "claseConfiguracion.php";
	require "modeloDB.php";

	$db = ModeloDB::getInstancia();
	$db->ejecutarConsultaBusqueda("select * from usuario");

	/*while($r =  $db->_resultadoMatriz->fetch_Object())
	{
		echo $r->nombres;
	}*/
	
	foreach ($db->_resultadoMatriz->fetch_Object() as $elemento => $valor) 
	{
		echo $elemento." : ".$valor;
	}
?>