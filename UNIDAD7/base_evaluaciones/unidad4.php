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
		<h2>Imágenes con PHP</h2>
		<?php
		if(imagetypes() & IMG_GIF){
			echo '<p>El tipo GIF es soportado</p>';

		}
		else{
			echo'<p>El tipo GIF no es soportado</p>';
		}
	
			if(imagetypes() & IMG_PNG){
				echo '<p>El tipo PNG es soportado</p>';

			}else{
				echo'<p>El tipo PNG no es soportado</p>';
			}
		
			if(imagetypes() & IMG_JPEG){
				echo '<p>El tipo JPEG es soportado</p>';

			}else{
				echo'<p>El tipo JPEG no es soportado</p>';
			}
		
		?>
		<h3> Marca de Agua</h3>

		<img src="marca_de_agua.php">
		
		<h3> Thumbnail</h3>
		<?php
		include('thumbnail.php ');

		 ?>
		 <img src="imagenes/miniatura.jpg">
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>