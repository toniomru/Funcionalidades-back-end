<?php
include('conexion.php');
$usuario=$_POST['usuario'];

if(isset($_POST['usuario']) and $_POST['password'] and isset($_POST['confirmar'])){

    $password= password_hash($_POST['password'],PASSWORD_DEFAULT, array('cost '=>4));


    mysqli_query($conexion_bdd,"INSERT INTO registros VALUES('$usuario','$password')");
   

header('Location:unidad8.php?reg_ok');
  

}


?>