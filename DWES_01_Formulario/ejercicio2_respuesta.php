<?php
$num1 = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST"  && isset($_POST["btnEnviar"])) {
    $num1 = (int)$_POST["numero"];
}
echo "<ul>";
for ($i = 1; $i <= $num1; $i++) {
   echo " <li>$i</li>";
}
echo "</ul>";
echo " <br/><a href='ejercicio2.php'>Volver al formulario</a>";
?>