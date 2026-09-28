<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6 - Fruta</title>
</head>

<body>
    <h2>Ejercicio 6 - Fruta</h2>
    <?php

    class Fruta
    {
        private $nombre;
        private $color;
        private $peso;

        public function set_name($nombre)
        {
            $this->nombre = $nombre;
        }

        public function get_name()
        {
            return $this->nombre;
        }
    }

    $apple = new Fruta();
    $apple->set_name("Manzana");

    $banana = new Fruta();
    $banana->set_name("Plátano");

    echo $apple->get_name() . "<br>";
    echo $banana->get_name() . "<br>";
    ?>
</body>

</html>