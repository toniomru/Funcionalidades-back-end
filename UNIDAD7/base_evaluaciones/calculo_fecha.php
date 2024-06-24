<?php 

if($_POST){ 


$dia=$_POST['dia'];
$mes=$_POST['mes'];
$anio=$_POST['anio'];

date_default_timezone_set('America/Argentina/Buenos_Aires');
$fecha_actual=date("Y/m/d");
$fecha_cargada=date("$anio/$mes/$dia");


echo'<p> La fecha de hoy es:'.$fecha_actual.'</p>';
echo'<p> La fecha cargada es:'.$fecha_cargada.'</p>';
if($fecha_cargada > $fecha_actual){

    $calcular= strtotime($fecha_cargada)-strtotime($fecha_actual)  ;

        $faltan=intval($calcular/86400);

        echo'<p> Faltan: '.$faltan.' dias para alcanzar la fecha ingresada</p>';
    
     }
    else{
        echo'<p>La fecha cargada es anterior a la actual!</p>';
    }
}
 
?>