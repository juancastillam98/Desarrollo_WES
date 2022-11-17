<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagina de compras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <?php
    require "../header.php";
    require "../../util/database.php";

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $usuario = $_GET["usuario"];
    }
    $precioTotal = 0;
    ?>

    <div class="container my-5">
        <h2> Compras de <?= $usuario ?></h2>

        <div class="row justify-content-center">
            <div class="col-9">
                <table class="table table-striped table-hover text-cente table-bordered border-primaryr">
                    <thead class="table table-dark">
                        <tr>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Precio Unitario</th>
                            <th>Fecha</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM vw_clientes_prendas WHERE usuario='$usuario'";
                        $resultado = $conexion->query($sql);

                        if ($resultado->num_rows > 0) {
                            while ($row = $resultado->fetch_assoc()) {
                                //$usuario = $row["usuario"];
                                $producto = $row["producto"];
                                $cantidad = $row["cantidad"];
                                $precioUnitario = $row["precioUnitario"];
                                $fecha = $row["fecha"];
                        ?>
                                <tr>
                                    <td><?php echo $producto ?></td>
                                    <td><?php echo $cantidad ?></td>
                                    <td><?php echo $precioUnitario . "€" ?></td>
                                    <td><?php echo $fecha ?></td>
                                    <td>
                                        <?php
                                        $precioUnitarioTotal = $precioUnitario * $cantidad;
                                        $precioTotal += $precioUnitarioTotal;
                                        echo $precioUnitarioTotal . "€"
                                        ?>
                                    </td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>Total</th>
                            <th><?php echo $precioTotal . "€" ?></th>

                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="d-inline">
            <a class="btn btn-primary" href="../../public/compras/compras.php" role="button">Volver</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>