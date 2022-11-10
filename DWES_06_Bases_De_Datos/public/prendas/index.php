<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <?php require "../../util/database.php" ?>
    <div class="container">
        <?php require "../header.php" ?>

        <h1 class="my-3">Listado de prendas</h1>
        <div class="row">
            <div class="col-9">
                <a class="btn btn-primary my-5" href="insertar_prenda.php">Nueva Prenda</a>
                <table class="table table-striped table-hover text-center">
                    <thead class="table table-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Talla</th>
                            <th>Precio</th>
                            <th>Categoria</th>
                            <th></th>
                            <th></th>

                        </tr>
                    </thead>
                    <tbody>
                        <!--borrar prendas-->
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $id = $_POST["id"];
                            $sql = "DELETE FROM prendas WHERE id='$id'";

                            if ($conexion->query($sql) == "TRUE") {
                        ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Éxito!</strong> Prenda insertada correctamente.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php
                            } else {
                            ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>¡Error!</strong> No se ha podido insertar la prenda.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                        <?php
                            }
                        }
                        ?>
                        <!--Seleccionar todas las prendas-->
                        <?php
                        $sql = "SELECT * FROM prendas";
                        $resultado = $conexion->query($sql);

                        if ($resultado->num_rows > 0) {
                            while ($row = $resultado->fetch_assoc()) {
                                $id = $row["id"];
                                $nombre = $row["nombre"];
                                $fila = $row["talla"];
                                $precio = $row["precio"];
                                $categoria = $row["categoria"];
                        ?>
                                <tr>
                                    <td><?php echo $nombre ?></td>
                                    <td><?php echo $fila ?></td>
                                    <td><?php echo $precio ?></td>
                                    <td><?php echo $categoria ?></td>
                                    <td>
                                        <form action="mostrar_prenda.php" method="get">
                                            <button class="btn btn-outline-primary" type="Submit">Ver</button>
                                            <!--El formulario tendrá un id-->
                                            <input type="hidden" name="id" value="<?php echo  $id ?>">
                                        </form>
                                    </td>
                                    <td>
                                        <form action="" method="POST">
                                            <button class="btn btn-danger" type="Submit">Borrar</button>
                                            <input type="hidden" name="id" value="<?php echo  $id ?>">
                                        </form>
                                    </td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-3">
                <img src="../../resources/foto1.jpg" alt="" height="200" width="200">
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>