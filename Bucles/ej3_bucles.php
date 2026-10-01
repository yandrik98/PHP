<HTML>
<HEAD><TITLE> EJ3 Bucles – Tablas multiplicar </TITLE></HEAD>
<BODY>
<?php
 $num1 = 3;
 $num2 = 7;
 echo "<table border='1'>";
 for ($i = $num1; $i <= $num2; $i++) {
    echo "<tr>";
    echo "<th colspan='2'> Tabla de multiplicar del " . $i . "</th>";
    echo "</tr>";
    for ($j = 1; $j <= 10; $j++) {
        $operacion = $i . "x" . $j;
        $resultado = $i * $j;
        echo "<tr>";
        echo "<td>" . $operacion . "</td>";
        echo "<td>" . $resultado . "</td>";
        echo "</tr>";
    }
 }
 echo "</table>";
?>
?>
</BODY>
</HTML>
