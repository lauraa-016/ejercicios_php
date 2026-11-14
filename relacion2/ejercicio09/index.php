<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">

        <h1 class="mb-4">Calculadora</h1>

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $numero1 = (int) $_POST["numero1"];
            $numero2 = (int) $_POST["numero2"];
            $operador = $_POST["operador"];

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

                echo "<div class='alert alert-danger'>";
                echo "No se puede dividir entre cero.";
                echo "</div>";
            } else {

                echo "<div class='alert alert-success'>";
                echo "Resultado: " . $resultado;
                echo "</div>";
            }
        } else {

        ?>

            <form action="" method="POST">

                <div class="mb-3">
                    <label for="numero1" class="form-label">Primer número</label>
                    <input type="number" class="form-control" id="numero1" name="numero1" required>
                </div>

                <div class="mb-3">
                    <label for="numero2" class="form-label">Segundo número</label>
                    <input type="number" class="form-control" id="numero2" name="numero2" required>
                </div>

                <div class="mb-3">
                    <label for="operador" class="form-label">Operador</label>

                    <select class="form-select" id="operador" name="operador">
                        <option value="+">Suma (+)</option>
                        <option value="-">Resta (-)</option>
                        <option value="*">Multiplicación (*)</option>
                        <option value="/">División (/)</option>
                        <option value="%">Módulo (%)</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Calcular</button>

            </form>

        <?php
        }
        ?>

    </div>

</body>

</html>