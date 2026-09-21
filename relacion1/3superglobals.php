<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
    <h1>Probando superglobals</h1>
    <?php
    echo "<li><b>Raiz:</b> " . $_SERVER['DOCUMENT_ROOT'] . "</li>";
    echo "<li><b>Nombre del servidor:</b> " . $_SERVER['PHP_SELF'] . "</li>";
    ?>
</body>

</html>