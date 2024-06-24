<?php 
$src_img=imagecreatefromjpeg('imagenes/unidad4.jpg');
/*$alto=imagesy($src_img)/3;*/
/*$ancho=imagesx($src_img)/3;*/
$dst_img=imagecreatetruecolor(150,150);
$imagen_creada=imagecreate(150,150);
imagecopyresized($dst_img,$src_img,0,0,0,0,150,150,imagesx($src_img),imagesy($src_img));
imagejpeg($dst_img,"imagenes/miniatura.jpg");
imagedestroy($dst_img);

?>