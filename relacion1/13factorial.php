<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13 - Factorial</title>
</head>

<body>
    <h2>Ejercicio 13 - Factorial</h2>
    <?php

    $num = 5;

    // Tiene que ser entero y positivo
    if ($num > 0 && is_int($num)) {

        $factorial = 1;

        echo "Cálculo del factorial de $num:<br>";

        // Uso decremento para calcular el factorial
        for ($i = $num; $i >= 1; $i--) {

            $factorial = $factorial * $i;

            echo "$i";

            if ($i > 1) {
                echo " x ";
            }
        }

        echo " = $factorial";
    } else {
        echo "El número debe ser entero y positivo.";
    }

    ?>
</body>

</html>