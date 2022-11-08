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
    <div class="container my-3">
        <h1>Ejercicio 4</h1>
    </div>

    <?php
    $personas = [
        ["Sansa", "Stark", rand(0, 100)],
        ["Frodo", "Bolson", rand(0, 100)],
        ["Gadalf", "Fenómeno", rand(0, 100)],
        ["Tyrion", "Lanister", rand(0, 100)]
    ];

    function rangoEdad($edad)
    {
        $calificacion = match (true) {
            $edad < 18 => "Menor de edad",
            $edad >= 18 and $edad < 65 => "Mayor de edad",
            default => "Jubilad@"
        };
        return $calificacion;
    }
    ?>
    <div class="container my-4">
        <h2 class="text-center my-4">Tabla Personas</h2>
        <table class=" table table-striped table-hover">
            <tr class="table table-dark">
                <th>Nombre</th>
                <th>Apellidos </th>
                <th>Calificación</th>
            </tr>
            <?php
            foreach ($personas as $persona) {
                list($nombre, $apellido, $edad) = $persona;
            ?>
                <tr>
                    <td><?php echo $nombre ?></td>
                    <td><?php echo $apellido ?></td>
                    <td><?php echo rangoEdad($edad) ?>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>

        <div class="d-flex flex-row align-items-center">
            <p class="my-auto">Volver al índice</p>
            <a class="btn btn-outline-secondary m-2" href="./index.php" role="button">Volver</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>