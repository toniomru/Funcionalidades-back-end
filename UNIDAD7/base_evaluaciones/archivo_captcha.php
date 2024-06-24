<?php

session_start();


$img= imagecreate(120, 50);
$background=imagecolorallocate($img,117,230,156);
$color_texto=imagecolorallocate($img,0,0,0);
imagestring($img,5,20,10,$_SESSION['captcha'],$color_texto);
header("Content-type: image/jpeg");
imagejpeg($img);








?>