<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16 - Divisores</title>
</head>

<body>
    <h2>Ejercicio 16 - Divisores</h2>
    <?php

    $num = 10;

    // Entero y positivo
    if ($num > 0 && is_int($num)) {

        echo "Divisores de $num:<br><br>";

        $i = 1;

        // Probamos todos los números desde 1 hasta num
        while ($i <= $num) {

            // Vemos is es divisor
            if ($num % $i == 0) {
                // MLe pongo estilo al divisor
                echo "<span style='color: red; font-weight: bold;'>$i</span> ";
            } else {

                // Número que no es divisor sin estilo
                echo "$i ";
            }

            $i++;
        }
    } else {
        echo "El número debe ser entero y positivo.";
    }

    ?>
</body>

</html>