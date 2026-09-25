<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Asociativo</title>
</head>

<body>
    <h2>Manejo de Array Asociativo constante de días de la semana</h2>


    <?php
    // No tiene posiciones 0,1,2, etc tiene etiquetas que son las claves del array asociativo. Ej: "Lunes" => 31, "Martes" => 32, etc
    const DIAS_SEMANA = array(
        "Lunes" => 31,
        "Martes" => 32,
        "Miercoles" => 30,
        "Jueves" => 31,
        "Viernes" => 29,
        "Sabado" => 30,
        "Domingo" => 31
    );

    echo "<p>La temperatura máxima del viernes es : " . DIAS_SEMANA["Viernes"] . "ºC</p><br>";

    // No funciona utilizar DIAS_SEMANA[0] porque no tiene posiciones, tiene claves. Para recorrerlo se puede usar foreach.
    foreach (DIAS_SEMANA as $dia => $temp) {
        echo "<p>La temperatura máxima del " . $dia . " es : " . $temp . "ºC</p>";
    }

    // Lo mismo en forma de lista numerada
    echo "<ol>";
    foreach (DIAS_SEMANA as $dia => $temp) {
        echo "<li>La temperatura máxima del " . $dia . " es : " . $temp . "ºC</li>";
    }
    echo "</ol>";

    // Lo mismo en forma de tabla
    echo "<table border='1'>";
    echo "<tr><th>Día</th><th>Temperatura máxima</th></tr>";
    foreach (DIAS_SEMANA as $dia => $temp) {
        echo "<tr><td>" . $dia . "</td><td>" . $temp . "ºC</td></tr>";
    }
    echo "</table>";

    ?>
</body>

</html>