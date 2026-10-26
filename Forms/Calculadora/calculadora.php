<?php
function suma ($a, $b){
    return $a + $b;
}
function resta ($a, $b){
    return $a-$b;
}
function producto ($a, $b){
    return $a * $b;
}
function division ($a, $b){
    return $a / $b;
}
function limpiar($dato){
    $dato = trim($dato);
    $dato = stripslashes($dato);
    $dato = htmlspecialchars($dato);
    return $dato;
}
echo "<h1>CALCULADORA</h1>";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Recogemos los valores del array $_POST en variables
    $num1 = limpiar($_POST["operando1"] ?? "");
    $num2 = limpiar($_POST["operando2"] ?? "");
    $operacion = limpiar($_POST["operacion"] ?? "");
    if (is_numeric($num1) === false || is_numeric($num2) === false ){
        echo "Datos no válidos";
    } else{
        switch ($operacion){
            case "suma":
                $simbolo = "+";
                $resultado = suma($num1, $num2);
                break;
            case "resta":
                $simbolo = "-";
                $resultado = resta ($num1, $num2);
                break;
            case "producto":
                $simbolo = "*";
                $resultado = producto ($num1, $num2);
                break;
            case "division":
                $simbolo = "/";
                if ($num2 == 0){
                    echo "Número no válido, no se puede dividir entre 0";
                    exit;
                }
                $resultado = division ($num1, $num2);
                break;
            default:
                echo "Operación no válida";
                exit;
        }
        echo "Resultado operación: $num1 $simbolo $num2 = $resultado";
    }
}


?>
 