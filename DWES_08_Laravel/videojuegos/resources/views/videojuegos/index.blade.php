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

    <div class="container">

        <!--hacer un echo de una variable sin tener que poner las llaves de php-->
        <p>{{ $mensaje }}</p>
        <form method="GET" action="{{route('videojuegos.search')}}">
            <div class="row justify-content-center">
                <div class="col-3">
                        <label class="form-label" for="buscarTitulo">Buscar por titulo</label>
                </div>
                <div class="col-6">
                    <input class="form-control" type="text" name="titulo">
                </div>
                <div class="col-3">
                    <button class="btn btn-secondary" type="submit">Buscar</button>
                </div>
            </div>
        </form>

         <!--<a class="btn btn-primary my-5" href="./create">Añadir nuevo</a>-->
        <a href="{{ route("videojuegos.create") }}" class=" btn btn-primary">Añadir Nuevo</a>

        <div class="row justify-content-center">
            <div class="col-10">
                <table class="table">
                    <thead>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Pegi</th>
                        <th scope="col">Descripcion</th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody class="table-group-divider">
                        @php($indice =1)
                        @foreach($videojuegos as $videojuego)
                        <tr>
                            <th> {{ $indice++ }}</th>
                            <td> {{ $videojuego ->titulo }}</td>
                            <td> {{ $videojuego ->precio }}</td>
                            <td> {{ $videojuego ->pegi }}</td>
                            <td> {{ $videojuego ->descripcion }}</td>
                            <td> 
                                <!--Videojuegos.show dice que usa method get y que recibe un videojuego en concreto-->
                                <!--videojuegos.show-->
                                <form action="{{ route('videojuegos.show', ['videojuego'=>$videojuego->id])}}" method="get">
                                    <button class="btn btn-primary" type="submit">Ver</button>
                                </form>
                            </td>
                             <td> 
                                <!--Videojuegos.show dice que usa method delete, pero está mal y se usa post-->
                                <!--videojuegos.show-->
                                <form action="{{ route('videojuegos.destroy', ['videojuego'=>$videojuego->id])}}" method="post">
                                    @csrf
                                    {{method_field("DELETE")}}
                                    <button class="btn btn-danger" type="submit">Borrar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
       
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>