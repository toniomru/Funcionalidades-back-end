<?php



$usuario1=$_POST['usuario1'];
$password1=$_POST['password1'];



	
if(isset($_POST['confirmar1'])){
		
			
	include('conexion.php');		

	$resultado=mysqli_query($conexion_bdd,"SELECT * FROM registros WHERE usuario='$usuario1'");

if(mysqli_num_rows($resultado)==0){

    header('Location:unidad8.php?error');

}   else{




    $a=mysqli_fetch_assoc($resultado);
    $verificar=password_verify($password1,$a['password']);
if($verificar){
    header('Location:unidad8.php?ing_ok');	
}else{
    
    header('Location:unidad8.php?ing_error');	
}

}
 
}
	

		
			








?>
