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
        $mensaje = "Datos no válidos";
    } else{
        switch ($operacion){
            case "binario":
                $resultado = binario($decimal);
                $mensaje = "Número Binario: $resultado <br/>";
                break;
            case "octal":
                $resultado = octal($decimal);
                $mensaje = "Número Octal: $resultado <br/>";
                break;
            case "hexadecimal":
                $resultado = hexadecimal($decimal);
                $mensaje = "Número Hexadecimal: $resultado <br/>";
                break;
            case "todos":
                $resultado = binario($decimal);
                $mensaje = "Número Binario: $resultado <br/>";
                $resultado = octal($decimal);
                $mensaje .= "Número Octal: $resultado <br/>";
                $resultado = hexadecimal($decimal);
                $mensaje .= "Número Hexadecimal: $resultado <br/>";
                break;
            default:
                $mensaje .= "Operación no válida";
        }
    }
}
?>
 <!doctype html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ejercicio 3</title>
  </head>
  <body>
    <h1>Conversor Numerico</h1>
    <form name="conversor" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      <label for="decimal">Número Decimal:</label><br />
      <input type="number" id="decimal" name="decimal" value="158" step="1" min="0" />
      <br /><br />

      <label>Convertir a:</label><br />
      <input type="radio" id="binario" name="operacion" value="binario" />
      <label for="binario">Binario</label><br />

      <input type="radio" id="octal" name="operacion" value="octal" />
      <label for="octal">Octal</label><br />

      <input type="radio" id="hexadecimal" name="operacion" value="hexadecimal" />
      <label for="hexadecimal">Hexadecimal</label><br />

      <input type="radio" id="todos" name="operacion" value="todos" checked />
      <label for="todos">Todos sistemas</label>
      <br /><br />

      <input type="submit" value="Envisar" />
      <input type="reset" value="Borrar" />
    </form>
    <div>

        <p> Resultado de la conversión <p>
        <p><?php echo "Número decimal: $decimal <br/>" ; 
            echo $mensaje; ?>
        </p>

    </div>

  </body>
</html>