<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Resultado binario</title>
</head>

<body>

    <h1>Conversión a binario</h1>

    <?php

    $numero = (int) $_POST["numero"];

    $binario = [];

    if ($numero == 0) {

        array_push($binario, 0);
    } else {

        while ($numero > 0) {

            $resto = $numero % 2;

            array_push($binario, $resto);

            $numero = intdiv($numero, 2);
        }
    }

    $binario = array_reverse($binario);

    echo "Número binario: ";

    foreach ($binario as $digito) {

        echo $digito;
    }

    ?>

</body>

</html>