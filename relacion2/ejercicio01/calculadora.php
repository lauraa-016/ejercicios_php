<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>

<body>

    <h1>Calculadora PHP</h1>

    <h2>Formulario GET</h2>

    <form action="" method="GET">
        <label for="numero1Get">Primer número:</label>
        <input type="number" id="numero1Get" name="numero1" required>

        <br><br>

        <label for="numero2Get">Segundo número:</label>
        <input type="number" id="numero2Get" name="numero2" required>

        <br><br>

        <label for="operadorGet">Operador:</label>
        <select id="operadorGet" name="operador" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">%</option>
        </select>

        <br><br>

        <input type="submit" value="Calcular con GET">
    </form>

    <hr>

    <h2>Formulario POST</h2>

    <form action="" method="POST">
        <label for="numero1Post">Primer número:</label>
        <input type="number" id="numero1Post" name="numero1" required>

        <br><br>

        <label for="numero2Post">Segundo número:</label>
        <input type="number" id="numero2Post" name="numero2" required>

        <br><br>

        <label for="operadorPost">Operador:</label>
        <select id="operadorPost" name="operador" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">%</option>
        </select>

        <br><br>

        <input type="submit" value="Calcular con POST">
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["numero1"])) {

        $numero1 = (int) $_GET["numero1"];
        $numero2 = (int) $_GET["numero2"];
        $operador = $_GET["operador"];

        echo "<h2>Resultado GET</h2>";

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
                } else {
                    echo "No se puede dividir entre cero.";
                    break;
                }
                break;

            case "%":
                if ($numero2 != 0) {
                    $resultado = $numero1 % $numero2;
                } else {
                    echo "No se puede calcular el resto con divisor cero.";
                    break;
                }
                break;
        }

        if ($numero2 != 0 || ($operador != "/" && $operador != "%")) {
            echo "Resultado: " . $resultado;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $numero1 = (int) $_POST["numero1"];
        $numero2 = (int) $_POST["numero2"];
        $operador = $_POST["operador"];

        echo "<h2>Resultado POST</h2>";

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
                } else {
                    echo "No se puede dividir entre cero.";
                    break;
                }
                break;

            case "%":
                if ($numero2 != 0) {
                    $resultado = $numero1 % $numero2;
                } else {
                    echo "No se puede calcular el resto con divisor cero.";
                    break;
                }
                break;
        }

        if ($numero2 != 0 || ($operador != "/" && $operador != "%")) {
            echo "Resultado: " . $resultado;
        }
    }

    ?>

</body>

</html> 