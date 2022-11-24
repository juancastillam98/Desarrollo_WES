<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Listado de videojuegos</title>
</head>

<body>
    <h1>Listado de videojuegos</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["btnAnadir"])) {
        $nombre = $_GET["nombre"];
        $precio = $_GET["precio"];
        $pegi = $_GET["pegi"];
        $descripcion = $_GET["descripcion"];

        $videojuegoNuevo = [$nombre, $precio, $pegi, $descripcion];
        array_push($videojuegos, $videojuegoNuevo);
    }

    ?>
    <div class="container">

        <!--hacer un echo de una variable sin tener que poner las llaves de php-->
        <p>{{ $mensaje }}</p>

        <div class="row justify-content-center">
            <div class="col-9">
                <table class="table">
                    <thead>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Pegi</th>
                        <th scope="col">Descripcion</th>
                    </thead>
                    <tbody class="table-group-divider">
                        @php($indice =1)
                        @foreach($videojuegos as $videojuego)
                        <tr>
                            <th> {{ $indice++ }}</th>
                            <td> {{ $videojuego[0] }}</td>
                            <td> {{ $videojuego[1] }}</td>
                            <td> {{ $videojuego[2] }}</td>
                            <td> {{ $videojuego[3] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <a class="btn btn-primary my-5" href="./create">Añadir nuevo</a>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>