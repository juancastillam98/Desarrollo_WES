<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $videojuegos = array(
        "juego1" => "Cyberpunk 2077",
        "juego2" => "Minecraft",
        "juego3" => "God of War"
    );
    echo "<br/>";
    print_r($videojuegos);
    $consolas = array(
        "consola1" => "PS4",
        "consola2" => "PS5",
        "consola3" => "Nintendo Switchr"
    );
    print_r($consolas);
    echo "<br/>";
    echo "<br/>";
    echo "Lista de DNIs     <br/>";
    $dnis = array(
        "12312312A" => "Jimmy",
        "32132132B" => "Pepe",
        "01201212C" => "Pupu"
    );
    echo "posicion 0 " . $dnis["12312312A"] . "<br/>";
    var_dump($dnis);
    echo "<br/>";

    $series = [
        1 => "Jimmy",
        "1" => "Pepe",
        true => "Pupu"
    ];
    var_dump($series);
    echo "<br/>";
    print_r($series);
    echo "<br/>";

    ////Clase 2

    $series = [ //Array series
        1 => 'El juego del calamar',
        '1' => 'La casa de papel',
        1.3 => 'Alice in borderland',
        true => 'The Witcher'
    ];
    print_r($series);

    echo $series[1];    //  Devuelve 'The Witcher'

    $series = [
        'El juego del calamar',
        'La casa de papel',
        'Alice in bonderland',
        'The witcher'


    ];

    //Inserta elementos al final del array
    array_push($series, "Cuéntame", "Dark");

    $series[] = "Big Bang Theory";

    //INsertar elemento en una clave predeterminada
    $series[10] = "La que se avecina";

    array_push($series, "Haikyuu");

    $series[10] = "Aqui no hay quien viva";

    //eliminar una posición
    unset($series[9]);

    print_r($series);

    $dnis = array(
        "12312312A" => "Jimmy",
        "32132132B" => "Pepe",
        "01201212C" => "Pupu"
    );
    // array_push($dnis)
    echo "<br>";
    $dnis["54599895G"] = "juan";
    unset($dnis["12312312A"]);
    var_dump(($dnis));
    //La función array_values resetea todas las claves y las pone todas del 0 al n elemeentos. (QUita las posiciones que no estén en orden)
    echo "<br>Dnis personas<br>";
    echo "<ul>";
    foreach ($series as $d) {
        echo "<li>" . $d . "</li>";
    }
    echo "</ul>";
    echo "<br>";
    ?>
    <ul>
        <?php
        foreach ($series as $d) {
        ?>
            <li><?php echo $d ?></li>
        <?php
        }
        ?>
    </ul>
    <?php
    foreach ($series as $key => $value) {
        echo $key . " - " . $value . "<br>";
    }
    echo "<br>";
    echo "<table border=1px>";
    foreach ($dnis as $key => $value) {
        echo "<tr>";
        echo "<td>" . $key . "</td>";
        echo "<td>" . $value . "</td>";
        echo "</tr>";
        echo "<br>";
    }
    echo "</table>";
    ?>

    <table border="1px">

        <tr>
            <th>DNI</th>
            <th>Nombre</th>
        </tr>
        <tr>
            <?php
            foreach ($dnis as $key => $value) {
            ?>
                <td><?php echo $key ?></td>
                <td><?php echo $value ?></td>
        </tr>
    <?php
            } ?>
    </table>
    <?php
    $frutas1 = ["Melocotón" => 0.5, "Sandía" => 1, "Kiwi" => 2];
    $frutas2 = ["Melocotón" => 0.5, "Kiwi" => 2, "Sandía" => 1];
    if ($frutas1 == $frutas2) {
        print(" Las listas tienen el mismo número de elementos ");
    } else {
        print(" Las listas no tienen el mismo número de elementos ");
    }
    if ($frutas1 === $frutas2) {
        print(" Las frutas son las mismas y están igual ordenadas");
    } else {
        print(" Las frutas no son las mismas y no están igual ordenadas");
    }

    if ($frutas1 == $frutas2) {
        if ($frutas1 === $frutas2) {
            echo (" Las listas tienen el mismo número de elementos, son iguales y están igual ordenadas <br>");
        } else {
            print(" Las listas tienen el mismo número de elementos pero no tienen el mismo número de elementos");
        }
    } else {
        print(" Las listas no tienen el mismo número de elementos ");
    }


    //Ordenar arrays

    echo "<br>";
    echo "<h3>Listas ordenadas </h3><br>";
    asort($series);
    foreach ($series as $s) {
        echo $s . "<br/>";
    }
    echo "<br>";
    echo "<h3>Listas ordenadas 2</h3><br>";
    for ($i=0; $i<count($series); $i++) {
        echo $series[$i]. "<br/>";
    }

    echo "<br>";
    echo "<h3>Listas ordenadas al revés</h3><br>";
    rsort($series);
    foreach ($series as $s) {
        echo $s . "<br/>";
    }

    ?>
</body>

</html>