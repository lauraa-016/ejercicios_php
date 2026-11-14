<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Resultado nota final</title>
</head>

<body>

    <h1>Resultado</h1>

    <?php

    $nota1 = (float) $_POST["nota1"];
    $nota2 = (float) $_POST["nota2"];
    $faltas = (int) $_POST["faltas"];

    $media = ($nota1 + $nota2) / 2;

    $notaFinal = $media - ($faltas * 0.25);

    echo "La media inicial es: " . $media . "<br>";

    echo "Las faltas sin justificar son: " . $faltas . "<br>";

    echo "La nota final es: " . $notaFinal . "<br>";

    if ($notaFinal >= 5) {
        echo "La persona aprueba.";
    } else {
        echo "La persona suspende.";
    }

    ?>

</body>

</html>