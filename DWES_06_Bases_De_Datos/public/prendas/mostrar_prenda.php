<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <h1>Hello, world!</h1>

    <?php
    require "../../util/control_de_acceso.php";
    require "../../util/database.php";
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $id = $_GET["id"];
        echo "<p>$id</p>";
    }
    ?>
    <div class="container my-5">
        <div class="d-inline">
            <a class="btn btn-primary my-5" href="insertar_prenda.php">Nueva Prenda</a>
        </div>

        <div class="row justify-content-center">
            <div class="col-9">
                <table class="table table-striped table-hover text-center">
                    <thead class="table table-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Talla</th>
                            <th>Precio</th>
                            <th>Categoria</th>
                            <th>Imagen</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM prendas where id='$id'";
                        $resultado = $conexion->query($sql);

                        if ($resultado->num_rows > 0) {
                            while ($row = $resultado->fetch_assoc()) {
                                $nombre = $row["nombre"];
                                $talla = $row["talla"];
                                $precio = $row["precio"];
                                $categoria = $row["categoria"];
                                $imagen = $row["imagen"];
                        ?>
                                <tr>
                                    <td><?php echo $nombre ?></td>
                                    <td><?php echo $fila ?></td>
                                    <td><?php echo $precio ?></td>
                                    <td><?php echo $categoria ?></td>
                                    <td>
                                        <img width="400" height="400" src="../..<?php echo $imagen ?>" alt="imagen hombre con sombrero">
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
                <form action="editar_prenda.php" method="GET">
                    <div class="d-inline">
                        <button class="btn btn-secondary" type="Submit">Editar Prenda</button>
                    </div>
                    <input type="hidden" name="id" value="<?php echo  $id ?>">
                    <input type="hidden" name="nombre" value="<?php echo  $nombre ?>">
                    <input type="hidden" name="talla" value="<?php echo  $talla ?>">
                    <input type="hidden" name="precio" value="<?php echo  $precio ?>">
                    <input type="hidden" name="categoria" value="<?php echo  $categoria ?>">
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