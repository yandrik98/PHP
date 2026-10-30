<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Calculadora </title>
</head>

<body>
    <h1>CALCULADORA</h1>
    <form name='calculadora' action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method='post'>
        Operando1: <input type="number" step="any" name="operando1" value="" required/> <br />
        <br />
        Operando2: <input type="number" step="any" name="operando2" value="" required/><br /><br />
        Selecciona operación:
        <br />
        <input type="radio" name="operacion" value="suma" checked />Suma<br />
        <input type="radio" name="operacion" value="resta" />Resta<br />
        <input type="radio" name="operacion" value="producto" />Producto<br />
        <input type="radio" name="operacion" value="division" />División<br /><br />

        <input type="submit" value="Enviar" />
        <input type="reset" value="Borrar" />
        <br/>
        <br/>

    </form>
</body>

</html>


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

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $num1 = limpiar($_POST['operando1'] ?? "");
        $num2 = limpiar($_POST['operando2'] ?? "");
        $operacion = limpiar($_POST['operacion'] ?? "");

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