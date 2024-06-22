<?php
session_start();
include('conexion.php');
$nombre=$_POST['Nombre'];
$apellido=$_POST['Apellido'];
$mail=$_POST['Correo'];
$consulta=$_POST['Consulta'];
$codigo=$_POST['codigo'];

if($codigo==$_SESSION['captcha']){
  
    mysqli_query($conexion_bdd,"INSERT INTO consultas VALUES(DEFAULT,'$nombre','$apellido','$mail','$consulta')");
    header("Location:unidad5.php?ok");
}else{
   
    header("Location:unidad5.php?okno");

}















?>