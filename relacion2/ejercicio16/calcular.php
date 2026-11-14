<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>

<body>

    <h1>Resultado</h1>

    <?php

    $numero = (int) $_POST["numero"];
    $operacion = $_POST["operacion"];

    if ($operacion == "primo") {

        $esPrimo = true;

        for ($i = 2; $i < $numero; $i++) {

            if ($numero % $i == 0) {

                $esPrimo = false;
                break;
            }
        }

        if ($numero == 1) {
            $esPrimo = false;
        }

        if ($esPrimo) {
            echo $numero . " es un número primo.";
        } else {
            echo $numero . " no es un número primo.";
        }
    } else {

        echo "Divisores de " . $numero . ":<br>";

        for ($i = 1; $i <= $numero; $i++) {

            if ($numero % $i == 0) {

                echo "<span style='color: red;'>" . $i . "</span> ";
            } else {

                echo $i . " ";
            }
        }
    }

    ?>

</body>

</html>