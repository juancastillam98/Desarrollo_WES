<?php
$numero = 0;
$numero = "";
if ($_SERVER["REQUEST_METHOD"] == "POST"  && isset($_POST["btnEnviar"])) {
    $numero = (int)$_POST["numero"];
    $frase = $_POST["frase"];
}
if ($numero < 0 || $numero >= 7) {
    echo "<p>Numero incorrecto</p>";
} else {
    echo "<h$numero> $frase </h$numero>";
}
echo " <br/><a href='ejercicio4.php'>Volver al formulario</a>";

?>