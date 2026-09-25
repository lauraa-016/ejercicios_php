<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos escalares</title>
</head>

<body>
    <h2>Ejercicio 2: Datos escalares</h2>
    <?php
    $booleano = true;
    $inte = 15;
    $flotante = 3.14;
    $cadena = "Stephen King";

    echo "<br>";
    var_dump($booleano);
    echo "<br>";
    var_dump($inte);
    echo "<br>";
    var_dump($flotante);
    echo "<br>";
    var_dump($cadena);

    echo "<br>";
    printf("La variable booleana contiene %b, la entera contiene %d, la flotante contiene %f, y la string contiene %s", $booleano, $inte, $flotante, $cadena)
    ?>
</body>

</html>