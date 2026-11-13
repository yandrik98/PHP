<?php
require_once './funciones_bolsa.php';
$datos = leerDatos("./ibex35.txt");

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bolsa1</title>
</head>
<body>
    <h1>bolsa1.php</h1>
    <h2>Mostrar todos los valores del IBEX35 </h2>
    <div>
        <p> 
            Este programa lee el fichero ibex35 y muestra<br>
            todos los valores del IBEX35 en una tabla.<br>
            (No es necesario mostrar el campo Hora)
        </p>
    </div>
    <div>
        <p>Mostrar valores del IBEX35</p>
    </div>
    <table border="1">
        <tr>
            <th>Valor</th>
            <th>Ultimo</th>
            <th>Var. %</th>
            <th>Var.</th>
            <th>Ac.% año</th>
            <th>MAx.</th>
            <th>MIn.</th>
            <th>Vol.</th>
            <th>Capit.</th>
        </tr>
         <?php foreach ($datos as $fila) { ?>
            <tr>
                <?php for ($i = 0; $i < 9; $i++) { ?>
                    <td><?= $fila[$i] ?></td>
                <?php } ?>
            </tr>
        <?php } ?>

        
    </table>
    <p>Total de valores mostrados: <?= count($datos) ?></p>
</body>
</html>