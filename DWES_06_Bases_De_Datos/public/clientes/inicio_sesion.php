<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio de Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <?php require "../header.php" ?>

        <?php
        require "../../util/database.php";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $usuario = $_POST["usuario"];
            $contrasena = $_POST["contrasena"];

            $sql = "SELECT * FROM clientes WHERE usuario = '$usuario'";

            $resultado = $conexion->query($sql);


            if ($resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) {
                    $hash_contrasena = $row["contrasena"];
                }
                $acceso_valido = password_verify($contrasena, $hash_contrasena);

                echo "usuario " . $usuario . "<br/>";
                echo "hash contraseña " . $hash_contrasena . "<br>";
                echo "contraseña " . $contrasena . "<br/>";
                echo "acceso valido" . var_dump($acceso_valido) . "<br/>";

                if ($acceso_valido == TRUE) {
        ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Éxito!</strong> Usuario logueado correctamente
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php
                } else {
                ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>¡Error!</strong> usuario o contraseña incorrectos
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
        <?php
                }
            }
        }
        ?>


        <h1 class="my-5">Inicio De Sesión</h1>
        <div class="row">
            <div class="col-6">
                <form action="" method="POST">
                    <div class="form-group mb-3">
                        <label for="usuario" class="form-label">Usuario</label>
                        <input class="form-control" name="usuario" type="text">
                    </div>
                    <div class="form-group mb-3">
                        <label for="contrasena" class="form-label">Contraseña</label>
                        <input class="form-control" name="contrasena" type="password">
                    </div>

                    <div class="form-group mb-3">
                        <button class="btn btn-primary" type="submit" name="btnInciarSesion">Iniciar Sesion</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>