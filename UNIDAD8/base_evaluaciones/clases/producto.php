<?php
	class Producto 	{
		
		public $codigo;
		public $producto;
		public $descripcion;
		public $precio;

		
		function __construct($base){
		$this->basedatos = $base;
		}
		
		function insertarProducto($codigo,$producto, $descripcion, $precio) {
            $respuesta = $this->basedatos->ejecutarConsultas("INSERT INTO compras VALUES (DEFAULT,'$codigo', '$producto','$descripcion','$precio')");
            return $respuesta;
        }
		

		function seleccion_Productos () {
			$respuesta = $this->basedatos->ejecutarConsultas("SELECT * FROM productos ORDER BY codigo");
			return $respuesta;
		}

		function seleccion_UnProducto($id) {
		$respuesta = $this->basedatos->ejecutarConsultas("SELECT * FROM productos WHERE codigo=$id");
		return $respuesta;
	}

	}
?>