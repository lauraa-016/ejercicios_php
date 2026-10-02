<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17 - Algoritmo de Euclides</title>
</head>

<body>
    <h2>Ejercicio 17 - Algoritmo de Euclides</h2>
    <?php

    $dividendo = 17;
    $divisor = 5;

    // Tienen que ser mayores que 0
    if ($dividendo > 0 && $divisor > 0) {

        $resto = $dividendo;
        $cociente = 0;

        // Resto el divisor al dividendo hasta que el resto sea menor que el divisor
        while ($resto >= $divisor) {

            $resto = $resto - $divisor;
            $cociente++;
        }

        echo "División de $dividendo entre $divisor:<br>";
        echo "Cociente: $cociente<br>";
        echo "Resto: $resto";
    } else {

        echo "Los números deben ser naturales y positivos.";
    }

    ?>
</body>

</html>