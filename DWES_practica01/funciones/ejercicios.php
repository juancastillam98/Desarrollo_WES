<?php
function sacarPrimos($incio, $cantidad)
{
    $i = $incio;
    $totalPrimos = 0;
    $res = "";

    do {
        $primo = true;

        for ($j = 2; $j < $i; $j++) {
            if ($i % $j == 0) {
                $primo = false;
            }
        }

        if ($primo) {
            $res = $res . "$i <br/>";
            //echo "$i <br/>";
            $totalPrimos++;
        }
        $i++;
    } while ($totalPrimos != $cantidad);
    return $res;
}

function comprobarDni($dni)
{
    //5359989G
    $dniValido = true;
    $digitos = "0123456789";
    $letras = "abcdefghijklmnnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVW";
    $numeros = "";
    $hay9Caracteres = true;
    $hay8CaracteresIniciales = true;
    $primeros8Numeros = true;
    $hayUnaLetra = true;

    //1. Compruebo que hay 9 caracteres
    if (strlen($dni) != 9) {
        $hay9Caracteres = false;
    }
    //echo $hay9Caracteres ? "hay 9 caracteres"  : "no hay 9 caracteres";

    //2. Compruebo que haya 8 caracteres iniciales
    if (strlen($dni) - 1 != 8) {
        $hay8CaracteresIniciales = false;
    }
    //echo $hay8CaracteresIniciales ? "hay 8 caracteres"  : "hay letras";

    //3. Compruebo que los 8 caracteres iniciales son dígitos
    //3.2 Aprovecho este bucle para sacar los 8 dígitos.
    for ($i = 0; $i < strlen($dni) - 1; $i++) {
        if (!str_contains($digitos, $dni[$i])) {
            $primeros8Numeros = false;
        }
        $numeros .= $dni[$i];
    }
    //echo $primeros8Numeros ? "solo digitos"  : "hay letras";

    //4. Compruebo que el 9º caracter es una letra
    if (!str_contains($letras, $dni[8])) {
        $hayUnaLetra = false;
    }
    //echo $hayUnaLetra ? "hay una letra"  : "no es una letra";

    //5. Si se cumplen las 4 condiciones anteriores, paso ompruebo que la letra es válida.
    if ($hay9Caracteres && $hay8CaracteresIniciales && $primeros8Numeros && $hayUnaLetra) {
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
    } else {
        $dniValido = false;
    }
    return  $dniValido;
}
function colorAleatorio()
{
    $c = rand(1, 4);

    $color = match ($c) {
        1 => "blue",
        2 => "green",
        3 => "yellow",
        4 => "purple",
    };
    return $color;
}

function tablasMultiplicar1Al10()
{


    for ($i = 1; $i <= 10; $i++) {
        $color = colorAleatorio();
        echo "<br/>";
        echo "<table class='$color'>";
        echo "<thead>" .
            "<tr>" .
            "<th class='f-1r'>Tabla del $i</th>" .
            "</tr>" .
            "</thead>";
        for ($j = 1; $j <= 10; $j++) {
            echo "<tbody>" .
                "<tr>" .
                "<td>" .
                "<div>" .
                "$i x $j = " . ($i * $j) .
                "<div>" .
                "</td>" .
                "</tr>" .
                "</tbody>";
        }
        echo "</table>";
    }
}
