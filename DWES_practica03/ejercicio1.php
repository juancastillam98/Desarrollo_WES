<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <div class="container my-4">
        <h1>Ejercicio 1</h1>
    </div>
    <?php
    echo "<br/>";
    $productos = array(
        "manzana" => 0.5,
        "sandía" => 4,
        "melocotón" => 2.4,
        "piña" => 3.2,
        "kiwi" => 2.75,
        "plátano" => 1.25
    );
    ksort($productos);
    foreach ($productos as $nombre => $precio) {
        $total += $precio;
    }
    $totalProductos = count($productos);
    ?>

    <div class="container my-3">
        <table class="table table-primary table-hover">
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
            </tr>
            <?php
            foreach ($productos as $nombre => $precio) {
            ?>
                <tr>
                    <td><?php echo $nombre ?></td>
                    <td><?php echo $precio ?></td>
                </tr>
            <?php
            }
            ?>
            <tr>
                <th>Total Productos</th>
                <th><?php echo $totalProductos  ?></th>
            </tr>
            <tr>
                <th>Total</th>
                <th><?php echo $total . "€" ?></th>
            </tr>
        </table>
        <div class="d-flex flex-row align-items-center">
            <p class="my-auto">Volver al índice</p>
            <a class="btn btn-outline-secondary m-2" href="./index.php" role="button">Volver</a>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>