<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array constante de días de la semana</title>
</head>

<body>

    <h2>Manejo de Array Constante de días de la semana</h2>

    <?php
    // también podría usar define ( , ).

    const DIAS_SEMANA = array(
        "Lunes",
        "Martes",
        "Miercoles",
        "Jueves",
        "Viernes",
        "Sabado",
        "Domingo"
    );

    // Solo un día
    echo "<p>Hoy es ", DIAS_SEMANA[4], "</p>";

    // Todos los días

    for ($i = 0; $i < 7; $i++) {
        echo ("<p>Día: " . ($i + 1) . " : " . DIAS_SEMANA[$i] . "</p>");
    }

    echo "<hr>";

    //Ahora en forma de lista numerada
    echo "<ol>";
    for ($i = 0; $i < 7; $i++) {
        echo "<li>" . DIAS_SEMANA[$i] . "</li>";
    }
    echo "</ol>";

    // La longitud del array constante se obtiene con count()
    echo "<p>Los días de la semana son: " . count(DIAS_SEMANA) . "</p>";
    ?>

</body>

</html>