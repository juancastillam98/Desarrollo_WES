<?php
$num=0;
if ($_SERVER["REQUEST_METHOD"] == "POST"  && isset($_POST["btnEnviar"])) {
    $num = (int)$_POST["numero"];
    echo "Numero: $num </br>";
    
}
//echo "$num1 ^ $num2 es ".pow($num1, $num2);
if($num >=1){  
    $resultado = 1;
    for ($i = 1; $i <=$num; $i++) {
      $resultado = $resultado * $i;
    }
    echo "El factorial de $num es " . $resultado;
}else{
    echo "El número introducido no es correcto";
}


echo " <br/><a href='../ejercicio6.php'>Volver al formulario</a>";