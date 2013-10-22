<?php

	class Usuario
	{

		private $_carnet;
		private $_nombre;
		private $_paterno;
		private $_materno;
		private $_pass;


		public function __construct($nombre,$pass)
		{

			$this->_nombre = $nombre;
			$this->_pass = $pass;

		}

		public function setCarnet($carnet)
		{
			$this->_carnet = $carnet;
		}

		public function getCarnet()
		{
			return $this->_carnet;
		}

		public function setNombre($nombre)
		{
			$this->_nombre = $nombre;
		}

		public function getNombre()
		{
			return $this->_nombre;
		}

		public function setPass($pass)
		{
			$this->_pass = $pass;
		}

		public function getPass()
		{
			return $this->_pass;
		}

		public function selectUsuario()
		{
			$sql = sprintf("SELECT * FROM usuario WHERE nombres = '%s'",$this->_nombre);
			return $sql;
		}

		public function cambiarPass($carnet,$contra)
		{
			$sql = sprintf("UPDATE usuario SET password = '%s' WHERE carnet = '%s'",$contra,$carnet);
			return $sql;		
		}

	}	


?>