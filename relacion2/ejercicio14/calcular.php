<?php

$nota = (int) $_POST["nota"];

switch ($nota) {

    case 9:
    case 10:
        $calificacion = "Sobresaliente";
        break;

    case 7:
    case 8:
        $calificacion = "Notable";
        break;

    case 6:
        $calificacion = "Bien";
        break;

    case 5:
        $calificacion = "Suficiente";
        break;

    case 1:
    case 2:
    case 3:
    case 4:
        $calificacion = "Suspenso";
        break;
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Resultado</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">

        <h1>Resultado de la calificación</h1>

        <p>Nota numérica: <?php echo $nota; ?></p>

        <p>Calificación: <?php echo $calificacion; ?></p>

        <div class="progress" role="progressbar"
            aria-label="Nota obtenida"
            aria-valuenow="<?php echo $nota * 10; ?>"
            aria-valuemin="0"
            aria-valuemax="100">

            <div class="progress-bar"
                style="width: <?php echo $nota * 10; ?>%">

                <?php echo $nota * 10; ?>%

            </div>

        </div>

    </div>

</body>

</html>