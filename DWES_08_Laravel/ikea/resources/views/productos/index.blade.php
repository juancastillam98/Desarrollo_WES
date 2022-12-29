<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <h1>Productos</h1>
    <ul>
        @foreach($productos as $p)
        <!--categoria a secas es la funcion del modelo-->
            <li>{{$p->nombre}} - {{$p->categoria->nombre}}</li>
        @endforeach
    </ul>
        <a href="{{ route('productos.create') }}" class=" btn btn-primary">Añadir Nuevo</a>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-9">
                <table class="table">
                    <thead>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Fecha de Lanzamiento</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Categoría</th>
                        <th></th>
                    </thead>
                    <tbody class="table-group-divider">

                        @php $indice =1; @endphp

                        @foreach($productos as $producto)
                            <tr>
                                <th> {{ $indice++ }}</th>
                                <td> {{ $producto ->nombre }}</td>
                                <td> {{ $producto ->precio }}</td>
                                <td> {{ $producto ->fecha_lanzamiento }}</td>
                                <td> {{ $producto ->descripcion }}</td>
                                <td> {{ $producto -> categoria ->nombre }}</td>
                                 <td> 
                                <!--Videojuegos.show dice que usa method get y que recibe un videojuego en concreto-->
                                <form action="{{ route('productos.show', ['producto'=>$producto->id])}}" method="get">
                                    <button class="btn btn-primary" type="submit">Ver</button>
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