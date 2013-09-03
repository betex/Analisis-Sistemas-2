<?php

	class Configuracion
	{

		private $_host;
		private $_usuario;
		private $_pass;
		private $_dataBase;

		static $_instancia;

		private function __construct()
		{

			require_once "configuracion.php";

			$this->_host = $host;
			$this->_usuario = $usuario;
			$this->_pass = $password;
			$this->_dataBase = $dataBase;

		}

		private function __clone(){}

		public static function getInstancia()
		{

			if (!(self::$_instancia instanceof self)) 
			{
				
				self::$_instancia = new self();

			}

			return self::$_instancia;

		}

		public function getUsuario()
		{

			return $this->_usuario;

		}

		public function getHost()
		{

			return $this->_host;

		}

		public function getPass()
		{

			return $this->_pass;
		}

		public function getBase()
		{

			return $this->_dataBase;
		}

	}

?>