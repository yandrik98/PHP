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
$resultado="";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    //Recogemos valores del formulario:
        $num1 = limpiar($_POST["decimal"] ?? "");
        if (is_numeric($num1)===false){
            $resultado = "No has introducido un número";
        }else{
            $numBinario = binario($num1);
            $resultado = "Resultado de la conversión <br>";
            $resultado .= "Número Decimal: $num1 <br>";
            $resultado .= "Número Binario: $numBinario <br>";
        }
}
?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ejercicio 2</title>
  </head>
  <body>
    <h1>Conversor Binario</h1>
    <form name="Binario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      <label for="decimal">Número Decimal:</label>
      <input type="number" id="decimal" name="decimal" value="158" step="1" min="0" />
      <br /><br />
      <input type="submit" value="Enviar" />
      <input type="reset" value="Borrar" />
    </form>
    <p><?php echo $resultado; ?></p>
  </body>
</html>
