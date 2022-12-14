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

    <?php
    require "../../util/control_de_acceso.php";
    require "../../util/database.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btnCrear"])) {
        $usuario = $_POST["usuario"];
        $contrasena = $_POST["contrasena"];
        $hash_contrasena = password_hash($contrasena, PASSWORD_DEFAULT);

        $nombre = $_POST["nombre"];
        $apellido1 = $_POST["apellido1"];
        $apellido2 = $_POST["apellido2"];
        $fechaNacimiento = $_POST["fechaNacimiento"];
        //mover la imagen
        $file_name = $_FILES["imagenUser"]["name"];
        $file_temp_name = $_FILES["imagenUser"]["tmp_name"];
        //echo "file_temp_name -->" . $file_temp_name . "<br/>";
        $path = "../../resources/images/clientes/" . $file_name;
        $rol = $_POST["rol"];


        if (!empty($usuario) && !empty($nombre) && !empty($apellido1) && !empty($fechaNacimiento) && !empty($contrasena)) {

            $imagen = "/resources/images/clientes/" . $file_name;
            $imagenDefault = "/resources/images/clientes/fotoUserDefault.png";

            //1Er paramm = from, 2º param to
            move_uploaded_file($file_temp_name, $path);


            $imagenUsr = !empty($file_name) ? "'$imagen'" : "'$imagenDefault'"; //em la bd, se inserta con las comillas∫
            //forma 2, correcta
            $apellido2 = !empty($apellido2) ? "'$apellido2'" : "NULL";
            $sql = "INSERT INTO clientes (usuario, contrasena, nombre, apellido1, apellido2, fechaNacimiento, imagen, rol) 
            values ('$usuario', '$hash_contrasena', '$nombre', '$apellido1', $apellido2, '$fechaNacimiento' , $imagenUsr, '$rol')";


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
    <?php
            }
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
                        <input class="form-control" type="text" name="usuario" id="usuario">
                    </div>
                    <!--CONTRASEna-->
                    <div class="form-group my-2">
                        <label class="form-label" for="contrasena">Contrasena</label>
                        <input class="form-control" type="text" name="contrasena" id="contrasena">
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
                    <!--Imagen opcional-->
                    <div class="form-group my-2">
                        <label class="form-label" for="imagenUser">Imagen</label>
                        <input class="form-control" type="file" name="imagenUser" id="imagenUser">
                    </div>

                    <div class="form-group mb-3">
                        <label for="rol" class="form-label">Selecciona un rol</label>
                        <select class="form-select" name="rol" id="rol">
                            <option value="" selected disabled hidden>--rol--</option>
                            <option value="administrador">Administrador</option>
                            <option value="usuario">Usuario</option>
                        </select>
                    </div>

                    <button class="btn btn-primary" type="submit" name="btnCrear">Anadir</button>
                    <a class="btn btn-secondary my-5" href="index.php">Volver</a>

                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>