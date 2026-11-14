<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Resultado calculadora</title>
</head>

<body>

    <h1>Resultado de la calculadora</h1>

    <?php

    $numero1 = (int) $_POST["numero1"];
    $numero2 = (int) $_POST["numero2"];
    $operador = $_POST["operador"];

    if ($operador == "0") {

        echo "Debes seleccionar una operación.";
    } else {

        switch ($operador) {

            case "+":
                $resultado = $numero1 + $numero2;
                break;

            case "-":
                $resultado = $numero1 - $numero2;
                break;

            case "*":
                $resultado = $numero1 * $numero2;
                break;

            case "/":
                if ($numero2 != 0) {
                    $resultado = $numero1 / $numero2;
                }
                break;

            case "%":
                if ($numero2 != 0) {
                    $resultado = $numero1 % $numero2;
                }
                break;
        }

        if (($operador == "/" || $operador == "%") && $numero2 == 0) {

            echo "No se puede dividir entre cero.";
        } else {

            echo "Resultado: " . $resultado;
        }
    }

    ?>

</body>

</html>