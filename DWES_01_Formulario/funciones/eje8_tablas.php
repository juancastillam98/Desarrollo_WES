<?php
function calcularTablaNumero($numero)
{
    echo "<table>";

    for ($i = 1; $i <= $numero; $i++) {
        $res = $numero * $i;
        echo "<tr>";
        echo "<td> $numero * $i = $res</td>";
        echo "</tr>";
    }

    echo "</table>";
}