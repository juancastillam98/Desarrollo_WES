<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <?php
    require "../../util/control_de_acceso.php";
    require "../../util/database.php";
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $id = $_GET["id"];
        $nombre = $_GET["nombre"];
        $talla = $_GET["talla"];
        $categoria = $_GET["categoria"];
        $precio = $_GET["precio"];
        $imagen = $_GET["imagen"];
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btnEditar"])) {
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $talla = $_POST["talla"];
        $categoria = $_POST["categoria"];
        $precio = $_POST["precio"];
        $imagen = $_POST["imagen"];

        $sql = "UPDATE prendas SET nombre = '$nombre', talla='$talla', precio='$precio', categoria='$categoria' where id='id'";
        if ($conexion->query($sql) == "TRUE") {
    ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Éxito!</strong> Prenda actualizada correctamente.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        } else {
            echo "error";
        ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>¡Error!</strong> No se ha podido actualizar la prenda.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
    <?php
        }
    }
    ?>


    <div class="container">
        <?php require "../header.php" ?>

        <h1>Editar Prenda</h1>
        <div class="row">
            <div class="col-6">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group my-2">
                        <label class="form-label" for="nombre">Nombre</label>
                        <input class="form-control" type="text" name="nombre" id="nombre" value="<?php echo $nombre ?>">
                    </div>
                    <div class="form-group my-3">
                        <label class="form-label" for="talla">Talla</label>
                        <select class="form-select" name="talla" id="talla">
                            <option value="" selected hidden><?php echo $talla ?></option>
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
                        <input type="text" name="precio" id="precio" value="<?php echo $precio ?>">
                    </div>
                    <div class="form-group my-2">
                        <label class="form-label" for="categoria">Categoria</label>
                        <select name="categoria" id="categoria" class="form-select">
                            <option value="" selected hidden><?php echo ucfirst(strtolower($categoria)) ?></option>
                            <option value="CAMISETAS">CAMISETAS</option>
                            <option value="PANTALONES">PANTALONES</option>
                            <option value="ACCESORIOS">ACCESORIOS</option>
                        </select>
                    </div>
                    <!--id-->
                    <input type="hidden" name="id" value="<?php echo $id ?>">

                    <button class="btn btn-primary" type="submit" name="btnEditar">Editar</button>
                    <a class="btn btn-secondary my-5" href="index.php">Volver</a>

                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>