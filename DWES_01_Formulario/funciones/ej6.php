<?php
function calculaFactorial($numero){
    //echo "$num1 ^ $num2 es ".pow($num1, $num2);
    if ($numero >= 1) {
        $resultado = 1;
        for ($i = 1; $i <= $numero; $i++) {
            $resultado = $resultado * $i;
        }
        echo "El factorial de $numero es " . $resultado;
    } else {
        echo "El número introducido no es correcto";
    }
}
?>