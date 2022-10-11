<?php
echo "<a href='index.php'>Volver al índice</a>";

/*
echo "50 primeros números primos</br>";
$primo=true;
for($i=0; $i<50; $i++){
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            $primo=false;
        }
    }
    if(!$primo){
        echo "$i<br/>";
    }
}
*/
echo "<br/>50 primeros números while</br>";
$i=0;
$totalPrimos=0;
do{
    $primo = true;
    $i++;
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            $primo=false;
        }
    }

    if($primo){
        echo "$i <br/>";
        $totalPrimos++;
    }
    
    
    
}while($totalPrimos!=50);