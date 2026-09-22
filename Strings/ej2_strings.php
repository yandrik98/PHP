<HTML>
<HEAD><TITLE> EJ2 Strings - Analizador de nombre de usuario </TITLE></HEAD>
<BODY>
<?php
 $nombre = " aLBeRTo gaRCia loPEz ";
echo"Cadena original: \"$nombre\" </br>";
echo "Nombre normalizado: ".ucwords(strtolower($nombre))."</br>";
echo "Número de caracteres: ".strlen(trim($nombre))."</br>";
echo "Nombre: ".ucfirst(strtolower(substr(trim($nombre),0,7)))."</br>";
echo "Primer apellido: ".ucfirst(strtolower(substr(trim($nombre),8,6)))."</br>";
echo "Segundo apellido: ".ucfirst(strtolower(ltrim(substr(trim($nombre),14,6))))."</br>";
$Iniciales=explode(" ",trim($nombre));
echo "Iniciales: ".strtoupper(substr($Iniciales[0],0,1)).".".strtoupper(substr($Iniciales[1],0,1)).".".strtoupper(substr($Iniciales[2],0,1))."<br/>";
echo "Nombre de usuario: ".strtolower(substr($Iniciales[0],0,7)).".".strtolower(substr($Iniciales[1],0,6))."</br>";


?>
</BODY>
</HTML>
