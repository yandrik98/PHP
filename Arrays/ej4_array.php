<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 de arrays</title>
</head>
<body>
    <table border=1px solid black>
    <tr>
        <th>Decimal</th>
        <th>Binario</th>
        <th>Octal</th>
        <th>Hexadecimal</th>
    </tr>
<?php 
/*generar un array con los números decimales del 0 al 20. A partir de él crear
otros tres arrays que almacenen su representación:
- binaria;
- octal;
- hexadecimal
*/
$decimales = array();
$binario = array();
$octal = array();
$hexadecimal = array();
//Creamos un array con los números
for($i=0;$i<=20;$i++){
    array_push($decimales,$i);
}
//recorremos el array de números, los convertimos, agregamos a su respectivo array y generamos la tabla.
foreach ($decimales as  $indice => $valor) {
    array_push($binario,decbin($valor));
    array_push($octal,decoct($valor));
    array_push($hexadecimal,dechex($valor));
    echo "<tr>";
        echo "<td>".$valor."</td>";
        echo "<td>".$binario[$indice]."</td>";
        echo "<td>".$octal[$indice]."</td>";
        echo "<td>".$hexadecimal[$indice]."</td>";
    echo "</tr>";
}

var_dump($decimales);
var_dump($binario);
var_dump($octal);
var_dump($hexadecimal);
?>
</table>
</body>
</html>
