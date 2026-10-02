<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15 - Números Primos</title>
</head>

<body>
    <h2>Ejercicio 15 - Números Primos</h2>
    <?php

    $num = 17;

    // Entero y positivo
    if ($num > 0 && is_int($num)) {

        /* Los menores de 2 no son primos, 
        el 2 es primo y 
        los mayores de 2 se comprueba si tienen divisores*/
        if ($num < 2) {

            echo "$num no es primo.";
        } else {

            $esPrimo = true;

            // Vemos los divisonres
            for ($i = 2; $i < $num; $i++) {

                // Si es divisible, no es primo
                if ($num % $i == 0) {

                    $esPrimo = false;

                    // Para salir de bucle porque ya sabemos que no es primo
                    break;
                }
            }

            if ($esPrimo) {
                echo "$num es primo.";
            } else {
                echo "$num no es primo.";
            }
        }
    } else {
        echo "El número debe ser entero y positivo.";
    }

    ?>
</body>

</html>