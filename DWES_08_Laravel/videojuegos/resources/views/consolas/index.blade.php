<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Listado de Consolas</title>
</head>

<body>
    <h1>Index de Consolas</h1>

    <div class="row justify-content-center">
            <div class="col-9">
                <table class="table">
                    <thead>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Año Lanzamiento</th>
                        <th scope="col">Generacion</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Videojuegos</th>
                    </thead>
                    <tbody class="table-group-divider">
                        @php($indice =1)
                        @foreach($consolas as $consola)
                        <tr>
                            <th> {{ $indice++ }}</th>
                            <td> {{ $consola ->nombre }}</td>
                            <td> {{ $consola ->anyoSalida }}</td>
                            <td> {{ $consola ->generacion }}</td>
                            <td> {{ $consola ->descripcion }}</td>
                            <td> 
                                @foreach ($consola -> videojuegos as $videojuego)
                                    {{$videojuego -> nombre}}
                                @endforeach
                            </td>
                            <td>
                                <form action="{{ route('consolas.show', ['consola'=>$consola->id])}}" method="get">
                                    <button class="btn btn-primary" type="submit">Ver</button>
                                </form>
                            </td>
                            <td>
                                <!--Delete-->
                                <form action="{{ route('consolas.destroy', ['consola'=>$consola->id])}}" method="POST">
                                    @csrf
                                    {{method_field("DELETE")}}
                                    <button class="btn btn-danger" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!--<a class="btn btn-primary my-5" href="./create">Añadir nuevo</a>-->
        <a href="{{ route("consolas.create") }}" class=" btn btn-primary">Añadir Nueva</a>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>