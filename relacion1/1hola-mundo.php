<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola mundo en php</title>
</head>

<body>
    <h2>Hola mundo en PHP</h2>
    <?php
    //como texto plano html
    echo "<p>Hola mundo</p>";

    //como un encabezado de nivel 2 html
    echo "<h2>Hola mundo</h2>";

    //como un párrafo con estilo: color, tipografía, alineación, etc.
    echo "<p style='color:blue'>Hola mundo</p>";

    //con un salto de línea entre hello y world
    echo "Hello<br>World";

    //añádele la información sobre la instalación php (phpversion() y phpinfo()
    echo "<p>Versión de PHP: " . phpversion() . "</p>";
    echo "<p>Información de PHP:</p>";
    phpinfo();

    // Fecha y hora del sistema en momento de la ejecución
    echo "<p>Fecha y hora del sistema: " . date("H:i:s d M y") . "</p>";
    ?>
</body>

</html>