<HTML>
<HEAD><TITLE> Ejercicio 1 Array Unidimensionales </TITLE></HEAD>
<BODY>
    <table border=1px solid black>
    <tr>
        <th>Índice</th>
        <th>Valor</th>
        <th>Suma</th>
    </tr>
<?php
$array = array();
$contador = 0;
$suma = 0;
//Valor
for ($i = 0; $i <=20; $i++) {
    if($i%2!=0){
        array_push($array,$i); //Si resto da distinto de 0 metemos el valor al final del array
        $suma = $suma + $array[$contador];
        echo "<tr>";
        echo "<td>" . $contador . "</td>";
        echo "<td>" . $array[$contador] . "</td>";
        echo "<td>" .$suma  . "</td>";
        echo "</tr>";
        $contador++;
    }
} 


?>
</table>
</BODY>
</HTML>
