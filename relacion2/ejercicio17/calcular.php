<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Resultado de la división</title>
</head>

<body>

    <h1>Resultado de la división entera</h1>

    <?php

    $dividendo = (int) $_POST["dividendo"];
    $divisor = (int) $_POST["divisor"];

    $operaciones = $_POST["operaciones"];

    $resto = $dividendo;
    $cociente = 0;

    while ($resto >= $divisor) {

        $resto = $resto - $divisor;

        $cociente++;
    }

    if (in_array("cociente", $operaciones)) {

        echo "Cociente: " . $cociente . "<br>";
    }

    if (in_array("resto", $operaciones)) {

        echo "Resto: " . $resto . "<br>";
    }

    ?>

</body>

</html>