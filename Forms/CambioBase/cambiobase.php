<?php
function binario($a){
    $binario = decbin($a);
    return $binario;
}
function octal($a){
    $octal = decoct($a);
    return $octal;
}
function hexadecimal($a){
    $hexadecimal = dechex($a);
    return strtoupper($hexadecimal);
}
function limpiar($dato){
    $dato = trim($dato);
    $dato = stripslashes($dato);
    $dato = htmlspecialchars($dato);
    return $dato;
}
echo "<h1>CONVERSOR NUMERICO</h1>";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Recogemos los valores del array $_POST en variables
    $decimal = limpiar($_POST["decimal"] ?? "");
    $operacion = limpiar($_POST["operacion"] ?? "");
    if (is_numeric($decimal) === false){
        echo "Datos no válidos";
    } else{
        echo "Resultado de la conversión: <br/>";
        echo "Número Decimal: $decimal <br/>";
        switch ($operacion){
            case "binario":
                $resultado = binario($decimal);
                echo "Número Binario: $resultado <br/>";
                break;
            case "octal":
                $resultado = octal($decimal);
                echo "Número Octal: $resultado <br/>";
                break;
            case "hexadecimal":
                $resultado = hexadecimal($decimal);
                echo "Número Hexadecimal: $resultado <br/>";
                break;
            case "todos":
                $resultado = binario($decimal);
                echo "Número Binario: $resultado <br/>";
                $resultado = octal($decimal);
                echo "Número Octal: $resultado <br/>";
                $resultado = hexadecimal($decimal);
                echo "Número Hexadecimal: $resultado <br/>";
                break;
            default:
                echo "Operación no válida";
        }
    }
}
?>
 