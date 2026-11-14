<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Resultado de conversión</title>
</head>

<body>

    <h1>Resultado de conversión</h1>

    <?php

    $numero = (int) $_POST["numero"];
    $base = (int) $_POST["base"];

    if ($base == 0) {

        echo "Debes seleccionar una operación.";
    } else {

        $resultado = match ($base) {

            2 => "Binario",

            8 => "Octal",

            16 => "Hexadecimal"
        };

        $digitos = [];

        if ($numero == 0) {

            array_push($digitos, "0");
        } else {

            while ($numero > 0) {

                $resto = $numero % $base;

                array_push($digitos, $resto);

                $numero = intdiv($numero, $base);
            }
        }

        $digitos = array_reverse($digitos);

        echo "Conversión a " . $resultado . ": ";

        foreach ($digitos as $digito) {

            if ($base == 16 && $digito >= 10) {

                $digito = match ($digito) {
                    10 => "A",
                    11 => "B",
                    12 => "C",
                    13 => "D",
                    14 => "E",
                    15 => "F"
                };
            }

            echo $digito;
        }
    }

    ?>

</body>

</html>