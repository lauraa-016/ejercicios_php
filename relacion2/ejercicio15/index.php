<?php

$enviado = $_SERVER["REQUEST_METHOD"] == "POST";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">

        <h1 class="mb-4">Cálculo del factorial</h1>

        <?php if (!$enviado) { ?>

            <form id="formulario" action="" method="POST">

                <div class="mb-3">

                    <label for="numero" class="form-label">Número natural</label>

                    <input type="number" class="form-control"
                        id="numero" name="numero">

                </div>

                <p id="mensaje" class="text-danger"></p>

                <button type="submit" class="btn btn-primary">
                    Calcular factorial
                </button>

            </form>

        <?php } else {

            $numero = (int) $_POST["numero"];

            $factorial = 1;
            $operacion = "";

            for ($i = $numero; $i >= 1; $i--) {

                $factorial = $factorial * $i;

                $operacion .= $i;

                if ($i > 1) {
                    $operacion .= " x ";
                }
            }

        ?>

            <div class="alert alert-success">

                <h2>Resultado</h2>

                <p>Factorial de <?php echo $numero; ?></p>

                <p><?php echo $operacion; ?></p>

                <p><?php echo $numero; ?>! = <?php echo $factorial; ?></p>

            </div>

        <?php } ?>

    </div>

    <script>
        const formulario = document.getElementById("formulario");

        if (formulario != null) {

            formulario.addEventListener("submit", function(event) {

                const numero = document.getElementById("numero").value.trim();

                if (numero == "" || isNaN(numero) || !Number.isInteger(Number(numero)) || numero < 1) {

                    event.preventDefault();

                    document.getElementById("mensaje").textContent =
                        "Introduce un número entero positivo.";

                }

            });

        }
    </script>

</body>

</html>