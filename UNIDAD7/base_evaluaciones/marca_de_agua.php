<?php
    $image="imagenes/asd.jpg";
    $marca_de_agua="imagenes/marca.png";

    $img=imagecreatefrompng($marca_de_agua);
    $ext=substr($image,-3);
    $ext=strtolower($ext);

    switch($ext){
        case 'gif':
            $img2= imagecreatefromgif($image);
            break;

        case 'jpg':
            $img2=imagecreatefromjpeg($image);
            break;

        case 'png':
            $img2=imagecreatefrompng($image);
            break;
    }
imagecopy($img2,$img,(imagesx($img2)/2),(imagesy($img2)/2),(imagesx($img)/2),(imagesy($img)/2),imagesx($img) ,imagesy($img));
header("Content-type:image/jpeg");
imagejpeg($img2);
imagedestroy($img);
imagedestroy($img2);

?>