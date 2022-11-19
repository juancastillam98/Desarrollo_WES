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
    require "../../util/control_de_acceso.php";
    require "../../util/database.php";
    require "../header.php";

    ?>

    <div class="container my-5">
        <div class="d-inline">

        </div>

        <div class="row justify-content-center">
            <div class="col-9">
                <table class="table table-striped table-hover text-center">
                    <thead class="table table-dark">
                        <tr>
                            <th>Usuario</th>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Precio Unitario</th>
                            <th>Fecha</th>
                            <th>Precio Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM vw_clientes_prendas";
                        $resultado = $conexion->query($sql);

                        if ($resultado->num_rows > 0) {
                            while ($row = $resultado->fetch_assoc()) {
                                $usuario = $row["usuario"];
                                $producto = $row["producto"];
                                $cantidad = $row["cantidad"];
                                $precioUnitario = $row["precioUnitario"];
                                $fecha = $row["fecha"];
                        ?>
                                <tr>
                                    <td>
                                        <!--le paso el usuario por parámetro en la url-->
                                        <a class="btn btn-primary" href="./compras_cliente.php?usuario=<?php echo $usuario ?>" role="button"><?php echo $usuario ?></a>
                                    </td>
                                    <td><?php echo $producto ?></td>
                                    <td><?php echo $cantidad ?></td>
                                    <td><?php echo $precioUnitario ?></td>
                                    <td><?php echo $fecha ?></td>
                                    <td>
                                        <?php
                                        $precioTotal = $precioUnitario * $cantidad;
                                        echo $precioTotal."€";
                                        ?>
                                    </td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="d-inline">
            <a class="btn btn-primary" href="../../public/clientes/index.php" role="button">Volver</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>