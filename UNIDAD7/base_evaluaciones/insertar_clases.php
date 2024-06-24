<?php
$unidad=$_POST['unidad'];
$fecha=$_POST['fecha'];

include("conexion.php");

mysqli_query($conexion_bdd,"INSERT INTO clases VALUES(DEFAULT,'$unidad','$fecha')");

header("Location:ver_clases.php?ok");

?>