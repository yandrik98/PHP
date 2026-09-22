<HTML>
<HEAD><TITLE> EJ3 Strings - Analizador de correo electrónico </TITLE></HEAD>
<BODY>
<?php
 $email = "alberto.garcia@educa.madrid.org";
echo "Usuario: ". substr($email,0,14)."</br>";
echo "Dominio: ". substr($email,15)."</br>";
echo "Organización: ".substr($email,15,5)."</br>";
echo "Extensión: ".substr($email,28)."</br>"; 
echo "El usuario contiene ".strlen(substr($email,0,14))."caracteres"."</br>";
echo "El dominio contiene ".strlen(substr($email,15))+1;

?>
</BODY>
</HTML>
