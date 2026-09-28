<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8 - Calificaciones</title>
</head>

<body>
    <h2>Ejercicio 8 - Calificaciones</h2>
    <?php
    // Array con la rúbrica
    $rubrica = [
        "inicial" => 0.10,
        "primera" => 0.20,
        "segunda" => 0.30,
        "tercera" => 0.40
    ];

    // Array con las notas de la persona
    $notas = [
        "inicial" => 6,
        "primera" => 7,
        "segunda" => 8,
        "tercera" => 9
    ];

    $notaFinal = 0;

    foreach ($rubrica as $clave => $peso) {

        // Obtenemos la nota usando la clave del array de notas y multiplicamos por el peso
        $notaFinal = $notaFinal + ($notas[$clave] * $peso);
    }

    // Nota final
    echo "La nota final es: " . $notaFinal . "<br>";

    if ($notaFinal >= 5) {
        echo "La persona aprueba.";
    } else {
        echo "La persona suspende.";
    }

    ?>
</body>

</html>