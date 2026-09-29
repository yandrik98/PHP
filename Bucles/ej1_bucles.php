<HTML>
<HEAD><TITLE> EJ1 Bucles – Estadística secuencia </TITLE></HEAD>
<BODY>
<?php
 $inicio = 1;
 $fin = 100;
$suma = 0;
$contador = 0;
$pares = 0;
$impares = 0;
$multiplos = 0;
 for ($i = $inicio; $i <= $fin; $i++) {
    $suma = $i+$suma;
    print $i."<br>";
    $contador++;
    if($i % 2==0){
        $pares++;
    }else{
        $impares++;
    }
    if($i % 3 ==0){
        $multiplos++;
    }
    }
    echo "Cantidad de número: ".$contador."</br>";
    echo "Números pares: ".$pares."</br>";
    echo "Números impares: ".$impares."</br>";
    echo "Múltiplos de 3: ".$multiplos."</br>";
    echo "Suma total: ".$suma."</br>";

?>
</BODY>
</HTML>