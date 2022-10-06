<?php
echo "</br> Forma 1";
echo "[ ";
$cadena="";
for ($i=0; $i <= 30; $i++) { 
    $cadena.=$i.", ";
}
$cadena=substr($cadena, 0, strlen($cadena)-2);
echo $cadena;
echo "]";
?>