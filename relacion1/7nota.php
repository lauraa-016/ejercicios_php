<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7 - Nota</title>
</head>

<body>
    <h2>Ejercicio 7 - Nota</h2>
    <?php
    $nota1 = 7;
    $nota2 = 8;
    $faltas = 3;

    // Media de las dos notas
    $media = ($nota1 + $nota2) / 2;

    // Descuento
    $descuento = $faltas * 0.25;

    // Calculo la nota final
    $notaFinal = $media - $descuento;

    // Resultados
    echo "Nota media: " . $media . "<br>";
    echo "Faltas sin justificar: " . $faltas . "<br>";
    echo "Descuento: " . $descuento . "<br>";
    echo "Nota final: " . $notaFinal . "<br>";

    // Aprueba o suspende
    if ($notaFinal >= 5) {
        echo "La persona aprueba.";
    } else {
        echo "La persona suspende.";
    }

    ?>
</body>

</html>