<HTML>
<HEAD><TITLE> Ejercicio 3 Array Unidimensionales </TITLE></HEAD>
<BODY>
    <table border=1px solid black>
    <tr>
        <th>Suma Pares</th>
        <th>Suma Impares</th>
        <th>Media Pares</th>
        <th>Media Impares</th>
        <th>Máximo valor Pares</th>
        <th>Máximo valor Impares</th>
        <th>Número de Valores Pares</th>
        <th>Número de Valores Impares</th>
    </tr>
<?php
$arrayNumeros=array();
$pares=0;
$impares=0;
$contadorPosicionPares=0;
$contadorPosicionImpares=0;
$contadorPares=0;
$contadorImpares=0;
$mayorValorPar=0; //Le asignamos un 0 si o si para que haga la comparación después
$mayorValorImpar=0;
for ($i = 1; $i <=20; $i++) { //Bucle para generar los 
    $numeroAleatorio=rand(1,100);
    array_push($arrayNumeros,$numeroAleatorio);
}
foreach($arrayNumeros as $posicion => $valor){
    //Sumamos los valores que están en posicion par
     if($posicion%2===0){
        $contadorPosicionPares++;
        $pares=$pares+$valor;
        if($mayorValorPar<$valor){
            $mayorValorPar= $valor;
        }
    }else{ //Sumamos los valores que están en posición impar
        if($mayorValorImpar<$valor){
            $mayorValorImpar= $valor;
        }
        $impares=$impares+$valor;
        $contadorPosicionImpares++;
    }
    //Contamos los numeros que son pares
    if ($valor % 2 === 0) {
        $contadorPares++;
    } else { //Contamos los números que son impares
        $contadorImpares++;
    }
}
$mediaPares=$pares/$contadorPosicionPares;
$mediaImpares=$impares/$contadorPosicionImpares;
echo "<tr>";
    echo "<td>" . $pares . "</td>"; 
    echo "<td>" . $impares . "</td>"; 
    echo "<td>" . $mediaPares. "</td>";
    echo "<td>" . $mediaImpares. "</td>";
    echo "<td>" . $mayorValorPar. "</td>";
    echo "<td>" . $mayorValorImpar. "</td>";
    echo "<td>" . $contadorPares . "</td>";
    echo "<td>" . $contadorImpares. "</td>";

echo "</tr>";
var_dump($arrayNumeros);
?>
</table>
</BODY>
</HTML>
