<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
  <link rel="stylesheet" href="estilos1.css">

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
		<h2>Comentarios</h2>
		<div class="formulario">
		<form method="POST" action="unidad3.php" >
			<input type="text" name="nya" placeholder="Ingrese su nombre y apellido" requiered><br>
			<input type="email" name="correo" placeholder="Ingrese su email" requiered><br>
			<textarea name="comentario" rows="10" cols="50" required></textarea><br>
			<input type="submit" value="Enviar" name="cargar">

		</form>
		
		<?php 
		include("comentarios.php");
		?>
		<?php  

$archivo_abrir_lectura = fopen ('comentarios.txt', 'r');

fpassthru($archivo_abrir_lectura);

fclose($archivo_abrir_lectura);

?>
		</div>
	</section>
	<aside>
		
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>