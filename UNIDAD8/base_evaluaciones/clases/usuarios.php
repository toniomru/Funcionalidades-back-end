<?php 
class Usuarios{
    private $nombre;
    private $apellido;
    private $fecha;

    function __construct ($nombre,$apellido,$edad){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->fecha=$edad;

    }

   
    private function calcular_edad(){
        date_default_timezone_set('America/Argentina/Buenos_Aires');
        $actual=date('Y-m-d');
        $calculo=strtotime($actual)-strtotime($this->fecha);
        $edad=intval($calculo/31536000);
        return $edad;

    }
    public function imprimirc(){

        echo'<p>Nombre:'. $this->nombre.'</p>';
        echo'<p>Apellido:'.$this->apellido.'</p>';
        echo'<p>Edad:'.$this->calcular_edad().'</p>';
    }

}

?>