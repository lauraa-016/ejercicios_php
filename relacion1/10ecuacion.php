<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10 - Ecuación</title>
</head>

<body>
    <h2>Ejercicio 10 - Ecuación</h2>
    <?php
    $a = 1;
    $b = -5;
    $c = 6;

    // discriminante es b^2 - 4ac lo que nos dice si hay soluciones reales o no (concepto matemático)
    $discriminante = $b * $b - 4 * $a * $c;

    if ($discriminante > 0) { // Si el discriminante es positivo, hay dos soluciones reales
        $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
        $x2 = (-$b - sqrt($discriminante)) / (2 * $a);
        echo "Las soluciones son: x1 = $x1, x2 = $x2";
    } elseif ($discriminante == 0) { // Si el discriminante es cero, hay una única solución
        $x = -$b / (2 * $a);
        echo "La solución es: x = $x";
    } else { // Si el discriminante es negativo, no hay soluciones reales
        echo "No hay soluciones reales.";
    }
    ?>
</body>

</html>