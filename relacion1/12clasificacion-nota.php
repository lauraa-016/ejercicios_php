<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12 - Clasificación de Nota</title>
</head>

<body>
    <h2>Ejercicio 12 - Clasificación de Nota</h2>
    <?php

    $nota = 8;

    // La nota tiene que ser un entero
    if (!is_int($nota)) {

        echo "La nota debe ser un número entero.";
        // Debe estar entre 1 y 10
    } elseif ($nota < 1 || $nota > 10) {

        echo "La nota debe estar entre 1 y 10.";
    } else {

        // Si cumple criterios, la clasifico
        switch ($nota) {

            case 10:
            case 9:
                echo "Sobresaliente";
                break;

            case 8:
            case 7:
                echo "Notable";
                break;

            case 6:
                echo "Bien";
                break;

            case 5:
                echo "Suficiente";
                break;

            case 4:
            case 3:
            case 2:
            case 1:
                echo "Suspenso";
                break;
        }
    }

    ?>
</body>

</html>