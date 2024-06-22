
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	

	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section>
		<h2>Registro</h2>
		<form action="codificar.php" method="POST">
		<h3>Correo Electronico:</h3>
		<input type="email" name="usuario" placeholder="Correo Electronico" requiered><br>
		<h3>Contraseña:</h3>
		<input type="password" name="password" placeholder="Contraseña" requiered><br><br>
		<input type="submit" name="confirmar" value="Registrar">
		</form>
		<?php
		if(isset($_GET['reg_ok'])){
			echo'Registro exitoso!';
		}
		?>



	</section>
	<aside>
	<h2>Accede a tu cuenta</h2>
		<form action="verificar.php" method="POST">
		<h3>Correo Electronico:</h3>
		<input type="email" name="usuario1" placeholder="Correo Electronico" requiered><br>
		<h3>Contraseña:</h3>
		<input type="password" name="password1" placeholder="Contraseña" requiered><br><br>
		<input type="submit" name="confirmar1" value="Ingresar">
		</form>
		<?php

if(isset($_GET['error'])){
	echo'Usuario inexistente';
}	
	if(isset($_GET['ing_ok'])){
		echo'Ingreso exitoso';
	}
	if(isset($_GET['ing_error'])){
		echo'Contraseña incorrecta';
	}
		
		
		?>
	
		
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>