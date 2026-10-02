<HTML>
<HEAD><TITLE> Ejercicio 1 Array Unidimensionales </TITLE></HEAD>
<BODY>
    <table border=1px solid black>
    <tr>
        <th>Día</th>
        <th>Temperatura</th>
        <th>Diferencia día anterior</th>
    </tr>
<?php
$temperaturas = array (18, 21, 19, 24, 25, 22, 20, 26, 23, 21);
$Dia = 0;
$campoDiferencia=array();
array_push($campoDiferencia,"-"); //Al primer valor del array de diferencias le ponemos un guión
$temperaturaMaxima = $temperaturas[0];
$temperaturaMinima = $temperaturas[0];
$sumaTemperaturas = 0;
$mediatemperaturas = 0; //Estas variable y la anterior para hacer el calculo de la media 
$diasMayoresMedia = 0; //Para hacer la comparación con  la media
foreach ($temperaturas as $i) {
    $Dia++; //un contador para contar las temperaturas que hay registradas en los dintintos dias
    echo "<tr>";
    echo "<td>" . $Dia . "</td>"; //Mostramos el día
    echo "<td>" . $i . "</td>"; //Mostramos su valor
    echo "<td>" . $campoDiferencia[$Dia-1]. "</td>"; //Le restamos uno para que nos muestre en primer lugar el primer guión
    echo "</tr>";
        $sumaTemperaturas = $sumaTemperaturas + $i;
    if($Dia === count($temperaturas)){
        $mediaTemperaturas = $sumaTemperaturas/$Dia;
    }
    if ($Dia<count($temperaturas)){
        $calculoDiferencia = -$temperaturas[$Dia-1]+($temperaturas[$Dia]); //Guardamos en una variable la diferencia de temperaturas entre un día y otro
        array_push($campoDiferencia,$calculoDiferencia); //El resultado del cálculo anterior lo metemos en el array
        if($temperaturaMaxima<$temperaturas[$Dia]){ //Comparamos temperaturas para sacar la máxima;
        $temperaturaMaxima = $temperaturas[$Dia];
        }
        if($temperaturaMinima>$temperaturas[$Dia]){ //Comparamos temperaturas para sacar la mínima;
        $temperaturaMinima = $temperaturas[$Dia];
        }
    }
    ;}
foreach ($temperaturas as $i){ //Comparamos la media con los valores del array de temperaturas y asi sacamos los valores mayores que la media
    if ($i > $mediaTemperaturas){
        $diasMayoresMedia++;
    }
}
echo "La media de las temperaturas es : $mediaTemperaturas </br>";
echo "La temperatura Máxima es: $temperaturaMaxima </br>";
echo "La temperatura Mínima es: $temperaturaMinima </br>";
echo "Hay $diasMayoresMedia dias por encima de la media";
?>
</table>
</BODY>
</HTML>