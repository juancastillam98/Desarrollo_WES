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
    

    <div class="container">
        <h1 class="my-2">Categorias</h1>
        <a href="{{ route('categorias.create')}}" class=" btn btn-primary my-3">Nueva Categoría</a>
        <div class="row justify-content-center">
            <div class="col-9">
                <table class="table">
                    <thead>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripción</th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody class="table-group-divider">

                        @php $indice =1; @endphp

                        @foreach($categorias as $categoria)
                        <tr>
                            <th> {{ $indice++ }}</th>
                            <td> {{ $categoria ->nombre }}</td>
                            <td> {{ $categoria ->descripcion }}</td>
                        </tr>
                    <ul>
                            @php
                                //en $videojuegos voy a almacenar todos los videojuegos de la funcion companias (lo que devuelve esa función)
                            $productos = $categoria -> productos
                            @endphp
                            @foreach ($productos as $p)
                                <tr class="table table-info align-self-center">
                                    <td>{{$p -> nombre}}</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            @endforeach
                       
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>