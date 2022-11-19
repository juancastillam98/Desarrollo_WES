<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <?php require "../../util/control_de_acceso.php" ?>
    <?php require "../header.php" ?>

    <?php
    require "../../util/database.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btnComprar"])) {
        $prenda_id = $_POST["prenda"];
        $cantidad = $_POST["cantidad"];
        //$cliente_id = 10; //10 es el usuario weff
        $fecha = date('Y-m-d H:i:s'); //2022-11-15 09:25

        //sacar id del cliente que inicia sesion
        $usuario = $_SESSION["usuario"];
        $sql = "SELECT * FROM clientes WHERE usuario= '$usuario'";

        $resultado = $conexion->query($sql);
        if ($resultado->num_rows > 0) {
            while ($row = $resultado->fetch_assoc()) {
                $cliente_id = $row["id"];
            }
        }
        //inseertar un cliente.
        // $sql = "INSERT INTO clientes_prendas (cliente_id, prenda_id, cantidad, fecha) VALUES ('$cliente_id', '$prenda_id', '$cantidad', '$fecha')";
        $sql = "INSERT INTO clientes_prendas (cliente_id, prenda_id, cantidad, fecha) VALUES ('$cliente_id', '$prenda_id', '$cantidad', '$fecha')";

        if ($conexion->query($sql) == "TRUE") {
    ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Éxito!</strong> Prenda comprada correctamente.
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
    ?>


    <!--Listar las prendas-->

    <div class="container my-5">
        <h1>Hello, world!</h1>
        <div class="row justify-content-center">
            <div class="col-9">
                <?php
                $sql = "SELECT * FROM prendas";
                $resultado = $conexion->query($sql);

                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                        $prendaId = $row["id"];
                        $nombre = $row["nombre"];
                        $talla = $row["talla"];
                        $precio = $row["precio"];
                        $categoria = $row["categoria"];
                        $imagen = $row["imagen"];
                ?>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="card mb-3" style="max-width: 740px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img width="500" height="600" src="../../<?php echo $imagen ?>" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $nombre ?></h5>
                                            <div class="d-flex justify-content-around">
                                                <div>
                                                    <!--
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
                                                     -->
                                                    <div class="form-group my-3">
                                                        <label for="cantidad"> Cantidad</label>
                                                        <select class="form-select" name="cantidad" id="cantidad">
                                                            <option value="1" selected>1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>

                                                        </select>

                                                    </div>
                                                </div>
                                                <!--Enviamos los datos al formulario-->
                                                <input type="hidden" name="prenda" value="<?php echo  $prendaId ?>">
                                                <!--Este 2º input está mal, no puedo enviar la cantidad porque $cantidad está vacío.-->
                                                <!--                                                 <input type="hidden" name="cantidad" value="<?php // echo  $cantidad 
                                                                                                                                                    ?>">
 -->

                                                <div class="align-self-center d-flex flex-column-reverse mt-5">
                                                    <div>
                                                        <p class="fs-3"><?php echo $precio . "€" ?></p>
                                                    </div>
                                                    <div>
                                                        <button class=" d-inline btn btn-success" type="submit" name="btnComprar">Comprar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </form>
                <?php
                    }
                }
                ?>
            </div>
        </div>
        <div class="d-inline">
            <a class="btn btn-primary" href="index.php" role="button">Volver</a>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>