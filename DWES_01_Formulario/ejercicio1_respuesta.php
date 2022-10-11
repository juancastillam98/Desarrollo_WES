<?php
$edad = 0;
$nombre = "";
if ($_SERVER["REQUEST_METHOD"] == "POST"  && isset($_POST["btnEnviar"])) {
    $edad = (int)$_POST["edad"];
    $nombre = ucwords(strtolower($_POST["nombre"]));
    $nombre = ucwords($nombre);
}
echo "Te llamas $nombre y tienes $edad";
echo " <br/><a href='ejercicio1.php'>Volver al formulario</a>";
?>