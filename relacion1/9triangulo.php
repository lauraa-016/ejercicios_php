<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9 - Triángulo</title>
</head>

<body>
    <h2>Ejercicio 9 - Triángulo</h2>
    <?php
    $lado1 = 5;
    $lado2 = 5;
    $lado3 = 5;

    if ($lado1 == $lado2 && $lado2 == $lado3) {
        echo "El triángulo es equilátero.";
    } elseif ($lado1 == $lado2 || $lado2 == $lado3 || $lado1 == $lado3) {
        echo "El triángulo es isósceles.";
    } else {
        echo "El triángulo es escaleno.";
    }
    ?>
</body>

</html>