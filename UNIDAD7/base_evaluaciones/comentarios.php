<?php 
    if(isset($_POST['cargar'])){
        date_default_timezone_set("America/Argentina/Jujuy");
        $hora_local=date("Y-m-d",time());
        $text="<p>Fecha de Creacion:".$hora_local."</p><p>Nombre y Apellido:".$_POST['nya']."</p><p>Correo Electronico:".$_POST['correo']."</p><p> Comentario:".$_POST['comentario']."</p><hr/>";
        $file=fopen("comentarios.txt","a+");
        fwrite($file,$text);
        fpassthru($file);
        fclose($file);
       
    }



?>