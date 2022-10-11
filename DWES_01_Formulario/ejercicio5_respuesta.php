<?php
$num1 = 0;
$num2 = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST"  && isset($_POST["btnEnviar"])) {
    $num1 = (int)$_POST["numero1"];
    $num2 = (int)$_POST["numero2"];
}
//echo "$num1 ^ $num2 es ".pow($num1, $num2);
if ($num1 < 0) {
    echo "No se admiten exponentes negativos </br>";
} elseif ($num2 == 0) {
    echo "$num1 ^ $num2 es " . $num1;
} else {
    $resultado = $num1;
    for ($i = 1; $i < $num2; $i++) {
        $resultado = $resultado * $resultado;
    }
    echo "$num1 ^ $num2 es " . $resultado;
}

echo " <br/><a href='ejercicio5.php'>Volver al formulario</a>";