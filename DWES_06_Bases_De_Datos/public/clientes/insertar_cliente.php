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
    <!--
        - Elegir la talla con un select (XS, S, M, L, XL) (añadir check en la BD)
        - Categoría con select (Camisetas, Pantalones, Accesorios) (añadir check en la BD)
    -->
    <?php
    require "../../util/database.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btnCrear"])) {
        $usuario = $_POST["usuario"];
        $nombre = $_POST["nombre"];
        $apellido1 = $_POST["apellido1"];
        if (isset($_POST["apellido2"])) {
            $apellido2 = $_POST["apellido2"];
        } else {
            $apellido2 = "";
        }
        $fechaNacimiento = $_POST["fechaNacimiento"];

        if (!empty($usuario) && !empty($nombre) && !empty($apellido1) && !empty($fechaNacimiento)) {
            if (!empty($apellido2)) {
                $sql = "INSERT INTO clientes (usuario, nombre, apellido1, apellido2, fechaNacimiento) values ('$usuario', '$nombre', '$apellido1', '$apellido2', '$fechaNacimiento' )";
            } else {
                $sql = "INSERT INTO clientes (usuario, nombre, apellido1, fechaNacimiento) values ('$usuario', '$nombre', '$apellido1', '$fechaNacimiento' )";
            }


            if ($conexion->query($sql) == "TRUE") {
    ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Éxito!</strong> Cliente insertado correctamente.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            } else {
            ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>¡Error!</strong> No se ha podido insertar la prenda.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
        <?php            }
        }
        ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>¡Error!</strong> No se ha podido insertar la prenda.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
    }
    ?>


    <div class="container">
        <?php require "../header.php" ?>

        <h1>Base de datos</h1>
        <div class="row">
            <div class="col-6">
                <form action="" method="post">
                    <div class="form-group my-2">
                        <label class="form-label" for="usuario">usuario</label>
                        <input class="form-control" type="text" name="usuario" id="usuario">
                    </div>
                    <div class="form-group my-2">
                        <label class="form-label" for="nombre">Nombre</label>
                        <input class="form-control" type="text" name="nombre" id="nombre">
                    </div>
                    <div class="form-group my-2">
                        <label class="form-label" for="apellido1">Apellido 1</label>
                        <input class="form-control" type="text" name="apellido1" id="apellido1">
                    </div>
                    <!--Campo Opcional-->

                    <div class="form-group my-2">
                        <label class="form-label" for="apellido2">Apellido 2</label>
                        <input class="form-control" type="text" name="apellido2" id="apellido2">
                    </div>
                    <div class="form-group my-2">
                        <label class="form-label" for="fechaNacimiento">Fecha Nacimiento</label>
                        <input class="form-control" type="date" name="fechaNacimiento" id="fechaNacimiento">
                    </div>


                    <button type="btn btn-primary" name="btnCrear">Añadir</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>