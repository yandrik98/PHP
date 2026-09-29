<HTML>
<HEAD><TITLE> EJ6 Strings - Analizador de log de servidor </TITLE></HEAD>
<BODY>
<?php
 $log = "192.168.1.25 - GET /productos/listado.php - 200 - Mozilla/5.0";
 $division1 = explode("-",$log); //division por guiones
 $division2 = explode("/",$division1[1]); //subidivision de la primera division del segundo elemento y esta vez por barras
 $ip = trim($division1[0]); //quitamos espacios en blanco de ambos lados y extraemos la ip
 $metodo =trim($division2[0]); //cogemos GET y quitamos espacios en blanco de ambos lados
 $recurso = "/".$division2[1]."/".$division2[2]; //concatenamos elementos 2 y 3 de la subdivision
 $codigo = $division1[2];
 $navegador = $division1[3];
 $tipo = strtoupper(substr($division1[1],strpos($division1[1],".")+1)); //para extraer el PHP
 $correcta = ($codigo == 200) ? "SI" : "NO"; //para que nos inidique si la petición es correcta
 echo "IP: ".$ip."</br>";
 echo "Método: ".$metodo."</br>";
 echo "Recurso: ".$recurso."</br>";
 echo "Código HTTP: ".$codigo."</br>";
 echo "Navegador: ".$navegador."</br>";
 echo "Tipo de recurso: ".$tipo."</br>";
 echo "Petición correcta: $correcta<br>";
?>
</BODY>
</HTML>
