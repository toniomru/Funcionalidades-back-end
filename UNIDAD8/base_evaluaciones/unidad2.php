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
		<h2>Eventos</h2>
		<?php
		include('calculo_fecha.php');
		?>
		

	</section>
	<aside>
    <form action="unidad2.php" method="POST">
			<input type="number"  name="dia" placeholder="Inserte el dia">
			<input type="number"  name="mes" placeholder="Inserte el mes">
			<input type="number" name="anio" placeholder="Inserte el anio">
			<input type="submit" name ="fecha_f" value="Cargar fecha">
		
		
		</form>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>