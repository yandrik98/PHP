<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 de arrays</title>
</head>
<body>
    <?php
    
        $primero = array ( "Programación", "Bases de Datos", "Lenguajes de Marcas", "Sistemas Informáticos");
        $segundo = [ "DWES", "DWEC", "Despliegue", "Diseño de Interfaces Web"];
        $optativas = ["Inglés Profesional","Digitalización"];

        //a. Unir los tres arrays sin funciones específicas de arrays.

        $daw = array();
        //En los siguientes bucles metemos los valores de los arrays dentro del nuevo:
        foreach ($primero as $valor) {
            $daw[]=$valor; 
        }
        foreach ($segundo as $valor) {
            $daw[]=$valor; // no sustituye valores, ya que si lo dejamos vacío tomará el siguiente hueco libre
        }
        foreach ($optativas as $valor) {
            $daw[]=$valor;
        }

        //b. Realizar la misma operación mediante array_merge().
        $dawMerge= array_merge($primero,$segundo,$optativas);
        
        //c. Añadir "Proyecto Intermodular".
        array_push($daw,"Proyecto Intermodular");
        array_push($dawMerge,"Proyecto Intermodular");

        //d. Comprobar si "DWES" se encuentra en el array.
        if(in_array("DWES",$daw)){
            echo "DWES se encuentra en el array daw </br>";
        }
        if(in_array("DWES",$dawMerge)){
            echo "DWES se encuentra en el array dawMerge </br>";
        }

        //e. Obtener su posición.
        $posicion1 = array_search("DWES",$daw);
        $posicion2 = array_search("DWES",$dawMerge);
        echo "La posición de DWES en daw es ". $posicion1."</br>";
        echo "La posición de DWES en dawMerge es ". $posicion2."</br>";
        var_dump($daw);
        var_dump($dawMerge);

        //f. Eliminar un módulo indicado
        unset($daw[$posicion1]);
        unset($dawMerge[$posicion2]);
        var_dump($daw);
        var_dump($dawMerge);

        //g. Ordenar alfabéticamente los módulos
        sort($daw);

        //h. Mostrar el resultado mediante una lista HTML <ul>
        echo "<ul>";
        foreach($daw as $valor){
            echo "<li>".$valor."</li>";
        }
            
        echo "</ul>"
    ?> 
</body>
</html>