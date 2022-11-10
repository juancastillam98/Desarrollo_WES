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
        $nombre = $_POST["nombre"];
        $talla = $_POST["talla"];
        $precio = $_POST["precio"];
        $categoria = $_POST["categoria"];
        //mover imagen
        $file_name = $_FILES["imagen"]["name"];
        $file_temp_name = $_FILES["imagen"]["tmp_name"];
        $path = "../../resources/images/prendas/" . $file_name;

        //INSERTAR prenda en la bd
        if (!empty($nombre) && !empty($talla) && !empty($precio)) { //si la categoría fuera NOT NULL, habría que meterla aquí en el if

            if (move_uploaded_file($file_temp_name, $path)) {
                echo "<p>fichero movido con éxito</p>";
            } else {
                echo "<p> No se ha podido mover el fichero</p>";
            }
            $imagen = "/resources/images/prendas/" . $file_name;

            $categoria = !empty($categoria) ? "'$categoria'" : "NULL";
            $sql = "INSERT INTO prendas (nombre, talla, precio, categoria, imagen) values ('$nombre', '$talla', '$precio' , $categoria, '$imagen')";

            if ($conexion->query($sql) == "TRUE") {
    ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Éxito!</strong> Prenda insertada correctamente.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            } else {
                echo "error";
            ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>¡Error!</strong> No se ha podido insertar la prenda.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
        <?php
            }
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
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group my-2">
                        <label class="form-label" for="nombre">Nombre</label>
                        <input class="form-control" type="text" name="nombre" id="nombre">
                    </div>
                    <div class="form-group my-3">
                        <label class="form-label" for="talla">Talla</label>
                        <select class="form-select" name="talla" id="talla">
                            <option value="" selected disabled hidden>--Selecciona la tabla--</option>
                            <option value="XS">XS</option>
                            <option value="XS">S</option>
                            <option value="XS">M</option>
                            <option value="XS">L</option>
                            <option value="XS">XL</option>
                            <option value="XS">XXL</option>
                        </select>
                    </div>
                    <div class="form-group my-2">
                        <label class="form-label" for="precio">Precio</label>
                        <input type="text" name="precio" id="precio">
                    </div>
                    <div class="form-group my-2">
                        <label class="form-label" for="categoria">Categoria</label>
                        <select name="categoria" id="categoria" class="form-select">
                            <option value="" selected disabled hidden>--Selecciona la Categoria</option>
                            <option value="CAMISETAS">CAMISETAS</option>
                            <option value="PANTALONES">PANTALONES</option>
                            <option value="ACCESORIOS">ACCESORIOS</option>
                        </select>
                    </div>
                    <!--imagen-->
                    <p>Imagen: <input type="file" name="imagen"></p>
                    <span class="error">
                        <?php if (isset($err_img)) echo $err_img ?>
                    </span>
                    <button class="btn btn-primary" type="submit" name="btnCrear">Crear</button>
                    <a class="btn btn-secondary my-5" href="index.php">Volver</a>

                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>