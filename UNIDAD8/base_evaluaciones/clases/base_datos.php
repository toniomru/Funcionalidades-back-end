<?php

class Basedatos {
	private $conexion;
	public $error;
    

	function __construct($servidor, $usuario, $password, $base) {
		if (!$this->__connect($servidor, $usuario, $password, $base)) {
			$this->error = $this->conexion->connect_error;
		}
	}

	private function __connect($servidor, $usuario, $password, $base) {
		$this->conexion = new mysqli ($servidor, $usuario, $password, $base);
	}

	public function ejecutarConsultas ($query) {
		$tipo = strtoupper(substr($query, 0,6));
		switch ($tipo) {
			case 'INSERT':
				$resultado = $this->conexion->query($query);
				if (!$resultado) {
					$this->error = $this->conexion->error;
					return false;
				} else {
					return $this->conexion->insert_id;
				}
				break;
			case 'SELECT':
				$resultado = $this->conexion->query($query);
				if (!$resultado) {
					$this->error = $this->conexion->error;
					return false;
				} else {
					while($fila = $resultado->fetch_assoc()){
						$array_resultado[]=$fila;
					}
					if(isset($array_resultado)){
						return $array_resultado;
					}
					
				}
				break;	
			case 'UPDATE':
			case 'DELETE':
				$resultado = $this->conexion->query($query);
				if (!$resultado) {
					$this->error = $this->conexion->error;
					return false;
				} else {
					return $this->conexion->affected_rows;
				}
				break;		
			default:
				$this->error = 'Consulta no válida';
				break;
		}
	}
}
?>