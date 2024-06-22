<?php session_start();
?>
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
		
		<h2>Consultas</h2>
		<?php 
		function crear_captcha(){
			$pattern="1234567890abcdefghijklmnopqrstuvwxyz%$#";
			$clave='';
			for($i=0; $i<6; $i++){
				$clave .=$pattern[rand(0,36)];
			}
			return $clave;
		}
		$_SESSION['captcha']=crear_captcha();
		?>

		<form action ="cargar.php" method="POST">
		<input type="text" name="Nombre" placeholder="Ingrese su nombre.." requiered><br>
		<input type="text" name="Apellido" placeholder="Ingrese su apellido.." requiered><br>
		<input type="mail" name="Correo" placeholder="Ingrese su correo.." requiered><br>
		<textarea name="Consulta" rows="10" cols="50" requiered></textarea><br>
		<img src="archivo_captcha.php">
		<input type="text" name="codigo" placeholder="Ingrese el captcha de la imagen.." requiered>
		<input type="submit" name="cargar" value="Enviar datos">
		</form>
		<?php 
			if(isset($_GET['ok'])){
				echo "Datos cargados correctamente";
			}else{
				echo 'Datos no cargados, captcha incorrecto!';
			}
		?>
	</section>
	
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>