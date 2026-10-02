<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 19 - Convertir de decimal a Binario</title>
</head>

<body>
    <h2>Ejercicio 19 - Convertir de decimal a Binario</h2>
    <?php

    $num = 13;
    $numOriginal = $num;

    // Número natural y entero
    if ($num >= 0 && is_int($num)) {

        // Array para guardar los restos
        $binario = [];

        // Cadena para el resultado
        $resultado = "";

        // Caso especial para el 0
        if ($num == 0) {

            array_push($binario, 0);
        } else {

            // Divisiones entre 2 hasta que el número sea 0
            while ($num > 0) {

                $resto = $num % 2;

                // Guardo en el array el rewsto
                array_push($binario, $resto);

                // intdiv() devuelve el cociente de la división int
                $num = intdiv($num, 2);
            }
        }

        // Empezamos por el último elemento (normas binario)
        $i = count($binario) - 1;

        // Array al revés
        while ($i >= 0) {

            // Froamar la cadena resultado
            $resultado = $resultado . $binario[$i];

            $i--;
        }

        echo "El número $numOriginal en binario es: $resultado";
    } else {

        echo "El número debe ser natural.";
    }

    ?>
</body>

</html>