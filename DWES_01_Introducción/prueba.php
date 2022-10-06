<?php
for($i=0; $i<10; $i++):
    $num=rand(1,10);
    if($num %2 ==0):
        echo "<ul>";
            echo "<li>".$num." es para</ul>";
        echo "</ul>";
    else:
        echo "<ul>";
            echo "<li>".$num." es impar</ul>";
        echo "</ul>";
    endif;
endfor;

/**
 * Imprimir los multiplos de 3 entre 0 y 30 en formato array
 * 
 * [3, 6, 9...]
 */
echo "</br> Forma 1";
echo "[ ";
for ($i=0; $i <= 30; $i++) { 
    
    if($i%3==0){
        if($i==30){
            echo $i." ";
        }else{
            echo $i.", ";
        }
    }
}
echo "]";

?>

