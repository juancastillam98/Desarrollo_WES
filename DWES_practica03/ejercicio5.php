<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Ejercicio 5</title>
</head>
<style>
    .error {
        color: red;
    }
</style>

<body>
    <div class="container my-5">
        <h1 class="text-center">Comprobar DNI</h1>
    </div>
    <?php
    $DNIs = array();
    $DNIs = array(
        "53599894G" => "Juan Castilla",
        "2345A" => "Pepito",
        "22345A" => "Armando",
        "9283475B" => "Casas",
        "872558K" => "Isidora"
    );


    //Validación del DNI
    require "./funciones/ejercicios.php";
    function validarDni($dni)
    {
        $dniValido = true;

        $patternDni = "/^[0-9]{8}[a-zA-Z ]{1}+$/";

        if (empty($dni)) {
            $dniValido = false;
        } else {
            if (!preg_match($patternDni, $dni)) {
                $dniValido = false;
            } else {
                //si el dni tiene el formato adecuado.
                if (!comprobarDni($dni)) {
                    $dniValido = false;
                }
            }
        }
        return $dniValido;
    }


    ?>
    <div class="container my-5 col-md-6">

        <h2 class="text-center my-4">Tabla Personas</h2>
        <div class="row justify-content-center">
            <div class="col-6">
                <table class=" table table-striped table-hover">
                    <tr class="table table-dark">
                        <th>DNI</th>
                        <th>Nombre </th>
                    </tr>
                    <?php
                    foreach ($DNIs as $dni => $nombre) {
                    ?>
                        <?php
                        if (validarDni($dni)) {
                        ?>
                            <tr class="table table-success">
                            <?php
                        } else {
                            ?>
                            <tr class="table table-danger">
                            <?php
                        }
                            ?>
                            <td><?php echo $dni ?></td>
                            <td><?php echo $nombre ?></td>
                            </tr>
                        <?php
                    }
                        ?>
                </table>
            </div>
        </div>
        <div class="d-flex flex-row align-items-center justify-content-center">
            <p class="my-auto">Volver al índice</p>
            <a class="btn btn-outline-secondary m-2" href="./index.php" role="button">Volver</a>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>