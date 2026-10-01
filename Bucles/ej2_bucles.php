<HTML>
<HEAD><TITLE> EJ2 Bucles – Tabla multiplicar </TITLE>
</HEAD>
<BODY>
<table border=1px solid black>
    <tr>
        <th>Operacion</th>
        <th>Resultado</th>
    </tr>
    
<?php
 $num = 8;
 for ($i = 1; $i <= 10; $i++) {
        $operacion = $num."x".$i;
        $resultado = $num * $i;
        echo "<tr>";
        echo "<td>" . $operacion . "</td>";
        echo "<td>" . $resultado . "</td>";
        echo "</tr>";
    }
?>
</table>

</BODY>
</HTML>