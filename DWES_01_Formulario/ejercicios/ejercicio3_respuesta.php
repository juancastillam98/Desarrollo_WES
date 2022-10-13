<?php
$edad = 0;
$nombre = "";
if ($_SERVER["REQUEST_METHOD"] == "POST"  && isset($_POST["btnEnviar"])) {
    $edad = (int)$_POST["edad"];
    $nombre = ucwords(strtolower($_POST["nombre"]));
    $nombre = ucfirst($nombre);
}

echo "Te llamas " . $nombre . " y tienes " . $edad . " años";
if ($edad < 18 && $edad >= 0) {
    echo "<p> $nombre es menor  de edad";
} elseif ($edad >= 18 && $edad <= 65) {
    echo "<p> $nombre es adulto";
} elseif ($edad >= 65 && $edad <= 130) {
    echo "<p> $nombre está jubilado";
} else {
    echo "<p> Edad incorrecta </p>";
}

echo " <br/><a href='../ejercicio3.php'>Volver al formulario</a>";