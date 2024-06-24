<?php

class Carrito {
	private $bd;

	function __construct($base){
		$this->basedatos = $base;
	}

	function ingresoProducto ($codigo,$producto, $descripcion, $precio) {
		$respuesta = $this->basedatos->ejecutarConsultas("INSERT  INTO compras VALUES (DEFAULT,'$codigo','$producto', '$descripcion', $precio)");
		return $respuesta;
	}

	function seleccionProductos () {
		$respuesta = $this->basedatos->ejecutarConsultas("SELECT * FROM compras ORDER BY producto");
		return $respuesta;
	}

	function seleccionUnProducto($id) {
		$respuesta = $this->basedatos->ejecutarConsultas("SELECT * FROM compras WHERE codigo=$id");
		return $respuesta;
	}

	function eliminarProducto($id){
		$respuesta = $this->basedatos->ejecutarConsultas("DELETE FROM  compras WHERE codigo=$id");
		return $respuesta;
	}

	function actualizarProducto($id, $prod, $descr, $prec){
		$respuesta = $this->basedatos->ejecutarConsultas("UPDATE compras SET producto ='$producto', descripcion = '$descripcion', precio = $precio  WHERE codigo=$id");
		return $respuesta;
	}

}

?>