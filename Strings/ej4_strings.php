<HTML>
<HEAD><TITLE> EJ4 Strings - Generador de URL amigable (slug) </TITLE></HEAD>
<BODY>
<?php
    $titulo = "Introducción a la Programación Web con PHP";
    $letraPequeña = trim(strtolower($titulo)); //cambiamos a minúsculas todas las palabras, quitamos los espacios en blanco de delante y detras
    $conGuiones = str_replace(" ","-",$letraPequeña);  //reemplazamos el espacio por guiones
    $url = "http://".$conGuiones; //agregamos el http que va a ser comun en todos
    echo $url;
?>
</BODY>
</HTML