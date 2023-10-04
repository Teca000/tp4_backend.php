<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    print "<p> EJERCICIO 1 </p>";
    $numerosPares = ["Primer numero par" => "2", "Segundo numero par" => "4", "Tercer numero par" => "6", "Cuarto numero par" => "8", "Quinto numero par" => "10"];
    foreach($numerosPares as $par => $numero) {
        echo "$numero <br>";
    }

    echo "<hr>";

    print "<p> EJERCICIO 2 </p>";
    $varios = ["Pedro", "Ana", 34, 1];
    echo "<ul>"; 

    foreach ($varios as $nose => $valor) {
    echo "<li><strong>$nose:</strong> $valor</li>";
    }

    echo "</ul>"; 

    echo "<hr>";

    print "<p> EJERCICIO 3 </p>";
    $datos = ["Nombre" => "Pedro", "Apellido" => "Torres", "Direccion" => "Av. Mayor 3703", "Telefono" => "1122334455"];
    echo "<ul>"; 
    foreach ($datos as $clave => $valor) {
    echo "<li><strong>$clave:</strong> $valor</li>";
    }
    echo "</ul>"; 

    echo "<hr>";

    print "<p> EJERCICIO 4 </p>";
    $ciudadesExtranjeras = ["0" => "Madrid", "1" => "Barcelona", "2" => "Londres", "3" => "New York", "4" => "Los Angeles", "5" => "Chicago"];
    foreach ($ciudadesExtranjeras as $lista => $ciudades) {
        echo "La ciudad con el indice $lista tiene el nombre $ciudades. <br>";
    }

    echo "<hr>";

    print "<p> EJERCICIO 5 </p>";
    $ciudadesIndice = ["Madrid" => "MD", "Barcelona" => "BCL", "Londres" => "LD", "New York" => "NY", "Los Angeles" => "LA", "Chicago" => "CCG"];
    foreach ($ciudadesIndice as $ciudad => $indice) {
        echo "El indice de $ciudad es $indice. <br>";
    }

    ?>
</body>
</html>