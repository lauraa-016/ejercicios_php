<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 20 - Convertir de natural a binario, octal y hexadecimal</title>
</head>

<body>
    <h2>Ejercicio 20 - Convertir de natural a binario, octal y hexadecimal</h2>
    <?php

    $num = 25;
    $opcion = 2;

    // El número debe ser natural y entero
    if ($num >= 0 && is_int($num)) {

        // Elegimos la base según la opción
        switch ($opcion) {

            case 1:
                $base = 2;
                $nombre = "binario";
                break;

            case 2:
                $base = 8;
                $nombre = "octal";
                break;

            case 3:
                $base = 16;
                $nombre = "hexadecimal";
                break;

            default:
                echo "La opción debe ser 1, 2 o 3.";
                exit;
        }

        //Array para los resros
        $resultadoArray = [];

        $numeroOriginal = $num;

        // Caso especial para 0
        if ($num == 0) {
            array_push($resultadoArray, "0");
        } else {

            // Divisiones entre la base hasta que el número sea 0
            do {

                $resto = $num % $base;

                // Letras hexadecimales para los restos mayores que 9
                switch ($resto) {

                    case 10:
                        $digito = "A";
                        break;

                    case 11:
                        $digito = "B";
                        break;

                    case 12:
                        $digito = "C";
                        break;

                    case 13:
                        $digito = "D";
                        break;

                    case 14:
                        $digito = "E";
                        break;

                    case 15:
                        $digito = "F";
                        break;

                    default:
                        $digito = $resto;
                }

                // Guardo el resto en el array
                array_push($resultadoArray, $digito);

                // Dividir entre la base para la siguiente iteración
                $num = intdiv($num, $base);
            } while ($num > 0);
        }

        // Los restos están en orden inverso
        $resultado = "";

        $i = count($resultadoArray) - 1;

        while ($i >= 0) {

            $resultado = $resultado . $resultadoArray[$i];

            $i--;
        }

        echo "El número $numeroOriginal en $nombre es: $resultado";
    } else {

        echo "El número debe ser entero y positivo.";
    }

    ?>
</body>

</html>