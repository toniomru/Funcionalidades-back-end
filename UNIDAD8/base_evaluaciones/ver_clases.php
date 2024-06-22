<h3>Datos Cargados</h3>
<?php 
include("conexion.php");
$consulta=mysqli_query($conexion_bdd,"SELECT * FROM clases");


while($listar_datos= mysqli_fetch_assoc($consulta)){


?>

		<div class="datos">
			<p>ID:<?php echo $listar_datos['id_clase']?></p>
			<p>Unidad: <?php echo $listar_datos['unidad']?></p>
			<p>Fecha: <?php echo $listar_datos['fecha']?></p>
		</div>
<?php  } ?>       
<a class="btn btn-default" href="unidad1.php">Regresar</a>