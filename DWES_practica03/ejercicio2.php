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
    <div class="container my-3">
        <h1>Ejercicio 2</h1>
    </div>

    <?php
    echo "<br/>";

    $productos = [
        [" manzana", 0.5, 7],
        [" sandía ", 4, 1],
        [" melocotón ", 2.4, 2],
        [" piña", 3.2, 1],
        [" kiwi", 2.75, 3],
        [" plátano", 1.22, 4],
    ];
    $nombre = array_column($productos, 0);
    array_multisort($nombre, SORT_ASC, $productos);
    $cantidadTotal = 0;
    $totalAPagar = 1;
    foreach ($productos as $producto) {
        list($nombre, $precioUd, $cantidad) = $producto;
        $cantidadTotal += $cantidad;
        $totalAPagar = $totalAPagar + ($cantidad * $precioUd);
    }
    ?>
    <div class="container my-3">
        <table class="table table-primary table-hover">
            <tr>
                <th>Nombre</th>
                <th>Precio Ud</th>
                <th>Cantidad</th>
                <th>Precio</th>
            </tr>
            <?php
            foreach ($productos as $producto) {
                list($nombre, $precioUd, $cantidad) = $producto;
            ?>
                <tr>
                    <td><?php echo $nombre ?></td>
                    <td><?php echo $precioUd ?></td>
                    <td><?php echo $cantidad ?></td>
                    <td><?php echo $cantidad * $precioUd ?></td>
                </tr>
            <?php
            }
            ?>
            <tr>
                <th>Total Productos</th>
                <th></th>
                <th></th>
                <th><?php echo $cantidadTotal  ?></th>
            </tr>
            <tr>
                <th>Total a Pagar</th>
                <th></th>
                <th></th>
                <th><?php echo $totalAPagar . "€" ?></th>
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