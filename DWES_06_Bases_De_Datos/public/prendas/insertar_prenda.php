<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Document</title>
</head>

<style>
    .error {
        color: red;
    }
</style>

<body>

    <?php
    require "../../util/control_de_acceso.php";
    require "../../util/database.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btnCrear"])) {
        //$nombre = $_POST["nombre"];
        $temp_nombre = depurar($_POST["nombre"]);
        $temp_talla = $_POST["talla"];
        $temp_precio = $_POST["precio"];
        $categoria = $_POST["categoria"];
        // imagen
        $file_name = $_FILES["imagen"]["name"];
        $file_temp_name = $_FILES["imagen"]["tmp_name"];
        $path = "../../resources/images/prendas/" . $file_name;
        $file_size = $_FILES["imagen"]["size"];
        $file_type = $_FILES["imagen"]["type"];
        $file_size_MB = ($file_size / 1024) / 1024;
        $extension = pathinfo($file_name, PATHINFO_EXTENSION);


        //validación nombre
        $patternNombre = "/^[a-zA-Z áéíóúÑñ]+$/";
        if (!empty($temp_nombre)) {
            if (strlen($temp_nombre) < 2 || strlen($temp_nombre) > 40) {
                $error_nombre = "* El nombre ha de tener entre 2 y 40 caracteres";
            } else {
                if (!preg_match($patternNombre, $temp_nombre)) {
                    $error_nombre = "Nombre no válido";
                } else {
                    $nombre = $temp_nombre;
                }
            }
        } else {
            $error_nombre = "* La prenda debe tener un nombre";
        }
        //Validación de talla
        if (empty($temp_talla)) {
            $error_talla = "* Debes escoger una talla";
        } else {
            $talla = $temp_talla;
        }


        //validación de precio
        if (!empty($temp_precio)) {
            if (!is_numeric($temp_precio)) {
                $error_precio = "El precio debe ser un numero";
            } else {
                if ($temp_precio <= 0) {
                    $error_precio = "El precio no puede ser inferior a 0";
                } else {
                    $precio = $temp_precio;
                }
            }
        } else {
            $error_precio = "* La prenda debe tener un precio";
        }
        //Comprobación de la foto
        if ($file_size_MB >= 2.5) {
            $error_img = "La imagen seleccionada no supera el tamño máximo preestablecido (2.5MB)";
        } else {
            //NOTA: extensión ="" --> hace referencia a extensión vaciá, que es cuando no se selecciona ninguna foto,
            //en el caso de que no se seleccione ninguna, se inserta una por defecto.
            if (($extension == "jpg") || ($extension == "jpeg") || ($extension ==  "png") || ($extension == "")) {
            } else {
                $error_img = "El formato de imagen es inadecuado";
            }
        }

        //INSERTAR prenda en la bd
        if (!isset($error_nombre) && !isset($error_talla) && !isset($error_precio) && !isset($error_img)) { //si la categoría fuera NOT NULL, habría que meterla aquí en el if
            $imagenSeleccionada = "/resources/images/prendas/" . $file_name;
            $imagenDefault = "/resources/images/img/imgDefault.jpg";

            move_uploaded_file($file_temp_name, $path);

            //si no existe la imagen, se inserta una por default
            $imagen = !empty($file_name) ? "'$imagenSeleccionada'" : "'$imagenDefault'";

            $categoria = !empty($categoria) ? "'$categoria'" : "NULL";

            $sql = "INSERT INTO prendas (nombre, talla, precio, categoria, imagen) values ('$nombre', '$talla', '$precio' , $categoria, $imagen)";

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
    <?php
    }
    ?>
    <?php
    function depurar($dato)
    {
        $dato = trim($dato);
        $dato = stripslashes($dato);
        $dato = htmlspecialchars($dato);
        return $dato;
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
                        <span class="error">
                            <?php if (isset($error_nombre)) {
                            ?>
                                <div class="alert alert-danger errores" id="errorNombre" role="alert">
                                    <strong>¡Error!</strong> <?php echo $error_nombre ?>
                                </div>
                            <?php
                            }

                            ?>

                        </span>
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

                        <span class="error">
                            <?php if (isset($error_talla)) {
                            ?>
                                <div class="alert alert-danger alert-dismissible fade show errores" role="alert">
                                    <strong>¡Error!</strong> <?php echo $error_talla ?>
                                </div>
                            <?php
                            }
                            ?>
                        </span>
                    </div>
                    <div class="form-group my-2">
                        <label class="form-label" for="precio">Precio</label>
                        <input type="text" name="precio" id="precio">
                        <span class="error">
                            <?php if (isset($error_precio)) {
                            ?>
                                <div class="alert alert-danger" role="alert">
                                    <strong>¡Error!</strong> <?php echo $error_precio ?>
                                </div>
                            <?php
                            }
                            ?>
                        </span>
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
                        <?php if (isset($error_img)) {
                        ?>
                            <div class="alert alert-danger" role="alert">
                                <strong>¡Error!</strong> <?php echo $error_img ?>
                            </div>
                        <?php
                        }
                        ?>
                    </span>
                    <button class="btn btn-primary" type="submit" name="btnCrear">Crear</button>
                    <a class="btn btn-secondary my-5" href="index.php">Volver</a>

                    <?php
                    echo "<script language='javascript'> ";
                    echo "setTimeout(()=>{";
                    echo "document.querySelectorAll('.alert-danger').forEach(el => el.remove())";
                    echo "},4500)";
                    echo "</script>";
                    ?>

                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>