<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <h1>Ver los clientes</h1>

    <?php
    require "../../util/database.php";
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $id = $_GET["id"];
        echo "<p>$id</p>";
    }
    ?>
    <div class="container my-5">
        <div class="d-inline">
            <a class="btn btn-primary my-5" href="insertar_cliente.php">Nueva Cliente</a>
        </div>

        <div class="row justify-content-center">
            <div class="col-9">
                <table class="table table-striped table-hover text-center">
                    <thead class="table table-dark">
                        <tr>
                            <th>Usuario</th>
                            <th>Nombre</th>
                            <th>Apellido1</th>
                            <th>Apellido2</th>
                            <th>Fecha Nacimiento</th>
                            <th>Imagen</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM clientes where id='$id'";
                        $resultado = $conexion->query($sql);

                        if ($resultado->num_rows > 0) {
                            while ($row = $resultado->fetch_assoc()) {
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
                                    <td>
                                        <img width="400" height="400" src="../..<?php echo $imagen ?>" alt="imagen producto">
                                    </td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div>
                <form action="editar_cliente.php" method="GET">
                    <div class="d-inline">
                        <button class="btn btn-secondary" type="Submit">Editar Cliente</button>
                    </div>
                    <input type="hidden" name="id" value="<?php echo  $id ?>">
                    <input type="hidden" name="usuario" value="<?php echo  $usuario ?>">
                    <input type="hidden" name="nombre" value="<?php echo  $nombre ?>">
                    <input type="hidden" name="apellido1" value="<?php echo  $apellido1 ?>">
                    <input type="hidden" name="apellido2" value="<?php echo  $apellido2 ?>">
                    <input type="hidden" name="fechaNacimiento" value="<?php echo  $fechaNacimiento ?>">
                    <input type="hidden" name="imagen" value="<?php echo  $imagen ?>">
                </form>
            </div>
        </div>
        <div class="d-inline">
            <a class="btn btn-primary" href="index.php" role="button">Volver</a>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>