<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <?php
    require "../../util/database.php";
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $id = $_GET["id"];
        $usuario = $_GET["usuario"];
        $nombre = $_GET["nombre"];
        $apellido1 = $_GET["apellido1"];
        $apellido2 = $_GET["apellido2"];
        $fechaNacimiento = $_GET["fechaNacimiento"];
        $imagen = $_GET["imagen"];
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btnEditar"])) {
        $id = $_POST["id"];
        $usuario = $_POST["usuario"];
        $nombre = $_POST["nombre"];
        $apellido1 = $_POST["apellido1"];
        $apellido2 = $_POST["apellido2"];
        $fechaNacimiento = $_POST["fechaNacimiento"];
        $imagen = $_POST["imagen"];

        $sql = "UPDATE clientes SET usuario = '$usuario', nombre='$nombre', apellido1='$apellido1', 
        apellido2='$apellido2', fechaNacimiento='$fechaNacimiento' where id='id'";
        if ($conexion->query($sql) == "TRUE") {
    ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Éxito!</strong> Cliente actualizado correctamente.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        } else {
            echo "error";
        ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>¡Error!</strong> No se ha podido actualizar el cliente.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
    <?php
        }
    }
    ?>


    <div class="container">
        <?php require "../header.php" ?>
        <h1 class="my-3">Base de datos</h1>
        <div class="row">
            <div class="col-6">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group my-2">
                        <label class="form-label" for="usuario">usuario</label>
                        <input class="form-control" type="text" name="usuario" id="usuario" value="<?php echo $usuario ?>">
                    </div>
                    <div class="form-group my-2">
                        <label class="form-label" for="nombre">Nombre</label>
                        <input class="form-control" type="text" name="nombre" id="nombre" value="<?= $usuario ?>">
                    </div>
                    <div class="form-group my-2">
                        <label class="form-label" for="apellido1">Apellido 1</label>
                        <input class="form-control" type="text" name="apellido1" id="apellido1" value="<?php echo $apellido1 ?>">
                    </div>
                    <!--Campo Opcional-->
                    <div class="form-group my-2">
                        <label class="form-label" for="apellido2">Apellido 2</label>
                        <input class="form-control" type="text" name="apellido2" id="apellido2" value="<?php echo $apellido2 ?>">
                    </div>
                    <div class="form-group my-2">
                        <label class="form-label" for="fechaNacimiento">Fecha Nacimiento</label>
                        <input class="form-control" type="date" name="fechaNacimiento" id="fechaNacimiento" value="<?php echo $fechaNacimiento ?>">
                    </div>

                    <button class="btn btn-primary" type="submit" name="btnEditar">Editar</button>
                    <a class="btn btn-secondary my-5" href="index.php">Volver</a>

                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>