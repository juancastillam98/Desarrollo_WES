<?php

function comprobarDni($dni)
{
    //5359989G
    $dniValido = true;
    $numeros = "";

    //2. Saco de este bucle para sacar los 8 dígitos.
    for ($i = 0; $i < strlen($dni) - 1; $i++) {
        $numeros .= $dni[$i];
    }
    //echo $primeros8Numeros ? "solo digitos"  : "hay letras";

    $numeros = (int)$numeros;
    $resto = $numeros % 23;
    $letra = match ($resto) {
        0 => "T",
        1 => "R",
        2 => "w",
        3 => "A",
        4 => "G",
        5 => "N",
        6 => "Y",
        7 => "F",
        8 => "P",
        9 => "D",
        10 => "X",
        11 => "B",
        12 => "N",
        13 => "J",
        14 => "Z",
        15 => "S",
        16 => "Q",
        17 => "V",
        18 => "H",
        19 => "L",
        20 => "C",
        21 => "K",
        22 => "E",
    };
    //echo "<br/> Tu letra es $letra <br/>";
    if (strtoupper($dni[8]) !== $letra) {
        $dniValido = false;
    }
    return  $dniValido;
}
