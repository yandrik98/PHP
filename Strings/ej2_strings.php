<HTML>
<HEAD><TITLE> EJ2 Strings - Analizador de nombre de usuario </TITLE></HEAD>
<BODY>
<?php
 $nombre = " aLBeRTo gaRCia loPEz ";
 $nombreNormalizado = ucwords(strtolower($nombre)); //lo ponemos primero todo en minúscula para poder la primera letra de cada palabra en mayúscula
 $numeroCaracteres = (strlen(trim($nombre))-1); //uso el trim para quitar los espacios en blanco por detrás y delante y con strlen contamos los caracteres, le restamos 1 porque sale 20 en vez de 19
 $Nombre = ucfirst(strtolower(substr(trim($nombre),0,7))); //quitamos los espacio en blanco, extraemos del caracter 0 al 7 para coger el nombre, lo ponemos en minúscula y después la primera en mayúscula
 $primerApellido = ucfirst(strtolower(substr(trim($nombre),8,6))); //Lo mismo que el anterior pero con el apellido, podría haber reutilizado una de las variables anteriores para que sea más corto y reutilizar código
 $segundoApellido = ucfirst(strtolower(ltrim(substr(trim($nombre),14,6)))); //Es lo mismo que los dos anteriores pero con el segundo apellido
echo"Cadena original: \"$nombre\" </br>";
echo "Nombre normalizado: ".$nombreNormalizado."</br>";
echo "Número de caracteres: ".$numeroCaracteres."</br>";
echo "Nombre: ".$Nombre."</br>";
echo "Primer apellido: ".$primerApellido."</br>";
echo "Segundo apellido: ".$segundoApellido."</br>";
$division = explode(" ",trim($nombre));//separamos el nombre completo por espacios
$iniciales = strtoupper(substr($division[0],0,1)).".".strtoupper(substr($division[1],0,1)).".".strtoupper(substr($division[2],0,1)); //cogemos la primera letra de cada palabra del nombre y las ponemos en mayúsculas
$usuario = strtolower(substr($division[0],0,7)).".".strtolower(substr($division[1],0,6)); //cogemos el nombre y el apellido del anterior explode y lo concatenamos con un punto
echo "Iniciales: ".$iniciales."<br/>";
echo "Nombre de usuario: ".$usuario."</br>";
?>
</BODY>
</HTML>