<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>

<body>
    <?php
    $juegos = [
        ["Pacman", "Atari", 60],
        ["Fortnite", "PS4", 0],
        ["Mario Kart", "Super Nintendo", 70],
        ["Street Fighter", "PS4", 50],
        ["Legend of Zelda", "Nintendo 64", 40],
        ["Castelvania", "Nintendo 64", 55],
    ];
    foreach ($juegos as $juego) {
        list($nombre, $consola, $precio) = $juego;
        echo "Nombre: $nombre" . "<br>";
        echo "Consola: $consola" . "<br>";
        echo "Precio: $precio" . "<br><br>";
    }
    ?>
    <table>
        <tr>
            <th>Título</th>
            <th>Plataforma</th>
            <th>Precio</th>
        </tr>
        <tr>
            <?php
            foreach ($juegos as $juego) {
                list($nombre, $consola, $precio) = $juego;
            ?>
                <td><?php echo $nombre ?></td>
                <td><?php echo $consola ?></td>
                <td><?php echo $precio ?></td>
        </tr>
    <?php
            }
    ?>
    </table>
</body>

</html>