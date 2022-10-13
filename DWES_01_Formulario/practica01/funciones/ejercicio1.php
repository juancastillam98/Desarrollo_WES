<?php
function sacarPrimos($cantidad,$incio){
    echo "hola";
    $i = $incio;
    $totalPrimos = 0;
    $res="";
    do {
        $primo = true;
        $i++;
        for ($j = 2; $j < $i; $j++) {
            if ($i % $j == 0) {
                $primo = false;
            }
        }

        if ($primo) {
            //echo "$i <br/>";
            $res+= "$i <br/>";
            $totalPrimos++;
        }
    } while ($totalPrimos != $cantidad);
    return $totalPrimos;
}
?>