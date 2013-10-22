<?php

	class Login
	{

		private $_carnet;
		private $_nombre;
		private $_pass;
		private $_estatus = false;

		public function __construct($nombre='',$pass='')
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

		private function activarSession()
		{

			session_name("prueva");
			session_start();

		}

		private function crearSession($carnet)
		{
			$this->activarSession();
			$_SESSION["autentificado"] = true;
		    $_SESSION["carnet"] = $carnet;
			$this->_estatus = true;
		}

		public function verificarUsuario($valor)
		{
			//$this->_pass = $this->cifrarPass($this->_pass);
			if ($valor->password == $this->_pass) {
				$this->crearSession($valor->carnet);
				$_SESSION["nom"] = $valor->nombres;
				$_SESSION["pass"] = $valor->password;
				return true;
			}
			return false;
		}

		public function getEstatus()
		{
			$this->activarSession();
			$this->_estatus = $_SESSION["autentificado"];
			return $this->_estatus;
		}

		public function cerrarSession()
		{
			$this->activarSession();
			session_destroy();
			unset($_SESSION);
			$this->_estatus = false;
		}

		public function cifrarPass($pass)
		{
			$this->_pass = hash("sha256",$pass);
			return $this->_pass;
		}
	}

?>