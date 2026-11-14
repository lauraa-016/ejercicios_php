<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Resultado de calificación</title>
</head>

<body>

    <h1>Resultado de la calificación</h1>

    <?php

    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];

    $rubrica = [
        "inicial" => 0.10,
        "primera" => 0.20,
        "segunda" => 0.30,
        "tercera" => 0.40
    ];

    $notas = [
        "inicial" => (float) $_POST["inicial"],
        "primera" => (float) $_POST["primera"],
        "segunda" => (float) $_POST["segunda"],
        "tercera" => (float) $_POST["tercera"]
    ];

    $notaFinal = 0;

    foreach ($rubrica as $clave => $peso) {

        $notaFinal += $notas[$clave] * $peso;
    }

    echo "Nombre: " . $nombre . "<br>";
    echo "Correo: " . $correo . "<br>";
    echo "Nota final: " . $notaFinal . "<br>";

    if ($notaFinal >= 5) {
        echo "La persona aprueba.";
    } else {
        echo "La persona suspende.";
    }

    ?>

</body>

</html>