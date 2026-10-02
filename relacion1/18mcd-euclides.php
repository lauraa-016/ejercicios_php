<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18 - Mínimo común divisor usando Euclides</title>
</head>

<body>
    <h2>Ejercicio 18 - Mínimo común divisor usando Euclides</h2>
    <?php

    $num1 = 48;
    $num2 = 18;

    // Mayores que 0 y enteros
    if (
        $num1 > 0 && $num2 > 0 &&
        is_int($num1) && is_int($num2)
    ) {

        $a = $num1;
        $b = $num2;

        // Algoritmo de Euclides
        while ($a != $b) {

            if ($a > $b) {
                $a = $a - $b;
            } else {
                $b = $b - $a;
            }
        }

        echo "El máximo común divisor de $num1 y $num2 es: $a";
    } else {
        echo "Los números deben ser enteros y positivos.";
    }

    ?>
</body>

</html>