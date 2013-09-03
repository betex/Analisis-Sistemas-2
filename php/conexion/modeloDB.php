<?php

	class ModeloDB
	{

		private $_servidor;
		private $_usuario;
		private $_password;
		private $_dataBase;
		private $_conexion;
		public $_resultadoConsulta;
		public $_resultadoMatriz;

		static $_instancia;

		private function __construct()
		{

			$this->setConexion();
			$this->conectar();

		}

		private function setConexion()
		{
			
			$conf = Configuracion::getInstancia();
			$this->_servidor = $conf->getHost();
			$this->_usuario = $conf->getUsuario();
			$this->_password = $conf->getPass();
			$this->_dataBase = $conf->getBase();

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

		private function conectar()
		{
			$this->_conexion = new MySQLi($this->_servidor,$this->_usuario,$this->_password,$this->_dataBase);
		}

		public  function desconectar()
		{
			$this->_conexion->close();
		}

		public function ejecutarConsulta($sql)
		{

			$this->conectar();
			$this->_resultadoConsulta = $this->_conexion->Query($sql);
			$this->desconectar();

		}

		public function ejecutarConsultaBusqueda($sql)
		{
			$this->conectar();
			$this->_resultadoMatriz = $this->_conexion->Query($sql);
			$this->desconectar();
			
		}	

	}

?>