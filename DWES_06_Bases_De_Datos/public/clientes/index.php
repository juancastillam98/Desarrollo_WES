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

        <h1 class="my-3">Listado de Clientes</h1>
        <div class="row">
            <div class="col-9">
                <a class="btn btn-primary my-5" href="insertar_cliente.php">Añadir Cliente</a>
                <table class="table table-striped table-hover text-center">
                    <thead class="table table-dark">
                        <tr>
                            <th>Usuario</th>
                            <th>Nombre</th>
                            <th>Apellido 1</th>
                            <th>Apellido 2</th>
                            <th>Fecha Nacimiento</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        <!--Opción de borrar clientes-->
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $id = $_POST["id"];
                            $imagen = $_POST["imagen"];
                            //echo "contenido imagen -" . $imagen["imagen"];

                            //borramos la imagen de la carpeta.
                            if ($imagen !== "/resources/images/clientes/fotoUserDefault.png") {
                                unlink("../../" . $imagen);
                            }

                            $sql = "DELETE FROM clientes WHERE id='$id'";

                            if ($conexion->query($sql) == "TRUE") {
                        ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Éxito!</strong> Prenda eliminada correctamente.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php
                            } else {
                            ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>¡Error!</strong> No se ha podido eliminar la prenda.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                        <?php
                            }
                        }
                        ?>
                        <!--Lista los clientes de la bd-->
                        <?php
                        $sql = "SELECT * FROM clientes";
                        $resultado = $conexion->query($sql);

                        if ($resultado->num_rows > 0) {
                            while ($row = $resultado->fetch_assoc()) {
                                $id = $row["id"];
                                $usuario = $row["usuario"];
                                $nombre = $row["nombre"];
                                $apellido1 = $row["apellido1"];
                                $apellido2 = $row["apellido2"];
                                $fechaNacimiento = $row["fechaNacimiento"];
                                $imagen = $row["imagen"];
                        ?>
                                <tr>
                                    <td><?php echo $usuario ?></td>
                                    <td><?php echo $nombre ?></td>
                                    <td><?php echo $apellido1 ?></td>
                                    <td><?php echo $apellido2 ?></td>
                                    <td><?php echo $fechaNacimiento ?></td>
                                    <td>
                                        <form action="mostrar_clientes.php" method="get">
                                            <button class="btn btn-outline-primary" type="Submit">Ver</button>
                                            <input type="hidden" name="id" value="<?php echo  $id ?>">
                                        </form>
                                    </td>
                                    <td>
                                        <form action="" method="POST">
                                            <button class="btn btn-danger" type="Submit">Borrar</button>
                                            <input type="hidden" name="id" value="<?php echo  $id ?>">
                                            <input type="hidden" name="imagen" value="<?php echo  $imagen ?>">
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
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>