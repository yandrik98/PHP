<HTML>
<HEAD><TITLE> EJ3 Strings - Analizador de correo electrónico </TITLE></HEAD>
<BODY>
<?php
 $email = "alberto.garcia@educa.madrid.org";
 $arroba = strpos($email,"@"); 
 $usuario = substr($email,0,$arroba); //solo cogerá los caracteres desde el primero hasta el arroba sin incluirlo
 $dominio = substr($email,$arroba+1); //cógera los caracteres desde el arroba incluyendolo pero para no incluirlo hemos puesto un +1
 $division = explode(".", $email);//divido el email por puntos
 $organizacion = substr($division[1],strpos($division[1],"@")+1); //cogemos la primera posición del array y extraemos "educa" desde el arroba y le sumamos 1 para que no cuente el arroba
 $extension = substr($email,strpos($email,"org")); //extraemos desde la posicion en la que empieza org
 $numeroCaracteresUsuario = strlen(substr($email,0,$arroba));//extraemos desde el caracter 0 hasta el arroba y contamos los caracteres
 $numeroCaracteresDominio = strlen(substr($email,$arroba)); //lo mismo que el anterior pero empezando con el arroba en adelante

echo "Usuario: ".$usuario."</br>";
echo "Dominio: ".$dominio."</br>";
echo "Organización: ".$organizacion."</br>";
echo "Extensión: ".$extension."</br>"; 
echo "El usuario contiene ".$numeroCaracteresUsuario." caracteres"."</br>";
echo "El dominio contiene ".$numeroCaracteresDominio." caracteres"."</br>";
$usuario2 = substr($email,0,$arroba+1);  //dividmos el email para tener solo el usuario, desde el caracter 0 hasta el arroba y +1 para contarlo
echo "¿El email contiene '@'? </br>";
$tieneArroba = str_ends_with($usuario2,"@");
echo ($tieneArroba ? "true" : "false")."</br>";
$terminaOrg = str_ends_with($email,".org");
echo "¿El email termine en '.org'? </br>";
echo ($terminaOrg ? "true" : "false")."</br>";
?>
</BODY>
</HTML>