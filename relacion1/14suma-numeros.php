<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14 - Suma de Números</title>
</head>

<body>
    <h2>Ejercicio 14 - Suma de Números</h2>
    <?php

    // Número hasta el que se suma
    $n = 10;

    // Debe ser entero y positivo
    if ($n > 0 && is_int($n)) {

        $suma = 0;

        for ($i = 1; $i <= $n; $i++) {
            $suma = $suma + $i;
        }

        echo "La suma de los $n primeros números naturales es: $suma";
    } else {
        echo "El número debe ser entero y positivo.";
    }

    ?>
</body>

</html>