<?php
function binario($a){
    $binario = decbin($a);
    return $binario;
}
function limpiar($dato){
    $dato = trim($dato);
    $dato = stripslashes($dato);
    $dato = htmlspecialchars($dato);
    return $dato;
}
echo "<h1>CONVERSOR BINARIO </h1>";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    //Recogemos valores del formulario:
        $num1 = limpiar($_POST["decimal"] ?? "");
        if (is_numeric($num1)===false){
            echo "No has introducido un número";
        }else{
            $numBinario = binario($num1);
            echo "Resultado de la conversión <br>";
            echo "Número Decimal: $num1 <br>";
            echo "Número Binario: $numBinario <br>";
        }
}
?>