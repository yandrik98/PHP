<HTML>
<HEAD><TITLE> EJ5 Strings - Procesamiento de una URL </TITLE></HEAD>
<BODY>
<?php
 $url = "https://www.tienda.es/productos/portatil.php?id=34&marca=lenovo";
 
 $Protocolo = substr($url,0,strpos($url,":")); //extraemos los caracteres desde el 0 hasta la posición de los dos puntos
 $division1 = explode("?",$url); //hacemos un division de la url con "?"
 $enlace = substr($division1[0],strpos($url,":")+3); //cogemos el enlace con la posicion 0 de la division anterior y que vaya desde www hasta el final de division[0]
 $division2 = explode("/",$enlace); //hacemos una subdivision del enlace separandolo por las barras
 $Dominio = $division2[0]; 
 $Ruta =  "/".$division2[1]."/".$division2[2]; //una concatenación del segundo y tercer elemento
 $Fichero = $division2[2];
 $Parámetros = $division1[1];
 $division3 = explode("&",$division1[1]); //cogemos el segundo elemento de la primera division y lo subdividimos con el caracter &
 $Id = substr($division3[0],strpos($division3[0],"=")); //extraemos el id de la subdivision
 $Marca = substr($division3[1],strpos($division3[1],"=")); //hacemos lo mismo que en el anterior pero con marca
 echo "Protocolo: ".$Protocolo."</br>";
 echo "Dominio: ".$Dominio."</br>";
 echo "Ruta: ".$Ruta."</br>";
 echo "Fichero: ".$Fichero."</br>";
 echo "Parámetros: ".$Parámetros."</br>";
 echo "Id producto".$Id."</br>";
 echo "Marca".$Marca."</br>";
?>
</BODY>
</HTML>