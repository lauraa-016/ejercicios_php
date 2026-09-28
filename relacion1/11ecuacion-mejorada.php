<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11 - Ecuación Mejorada</title>
</head>

<body>
    <h2>Ejercicio 11 - Ecuación Mejorada</h2>

    <?php

    $a = 1;
    $b = -5;
    $c = 6;

    //  Si a es 0, entonces la ecuación es de primer grado o no tiene solución
    if ($a == 0) {

        // Si a y b son 0, no se puede resolver la ecuación, ya que no hay variable x
        if ($b == 0) {

            if ($c == 0) {
                echo "La ecuación tiene infinitas soluciones.";
            } else {
                echo "La ecuación no tiene solución.";
            }
        } else {

            // Es una ecuación de primer grado
            $x = -$c / $b;

            echo "La ecuación es de primer grado.<br>";
            echo "x = " . $x;
        }
    } else {

        // Si a no es 0, miro si es b es 0.
        if ($b == 0) {

            $resultado = -$c / $a;

            if ($resultado < 0) {

                echo "No existen soluciones reales.";
            } elseif ($resultado == 0) {

                echo "x = 0";
            } else {

                $x1 = -sqrt($resultado);
                $x2 = sqrt($resultado);

                echo "x1 = " . $x1 . "<br>";
                echo "x2 = " . $x2;
            }

            // Si b no es 0, miro si c es 0, ya que en ese caso una de las soluciones es 0 y la otra es -b/a
        } elseif ($c == 0) {

            $x1 = 0;
            $x2 = -$b / $a;

            echo "x1 = " . $x1 . "<br>";
            echo "x2 = " . $x2;
        } else {

            // Caso normal: a, b y c son diferentes de 0
            $discriminante = pow($b, 2) - (4 * $a * $c);

            if ($discriminante < 0) {

                echo "No existen soluciones reales.";
            } elseif ($discriminante == 0) {

                $x = -$b / (2 * $a);

                echo "x = " . $x;
            } else {

                $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
                $x2 = (-$b - sqrt($discriminante)) / (2 * $a);

                echo "x1 = " . $x1 . "<br>";
                echo "x2 = " . $x2;
            }
        }
    }
    ?>
</body>

</html>