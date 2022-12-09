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
    <h1>Listado de Compañías</h1>

    <div class="container">

        <!--hacer un echo de una variable sin tener que poner las llaves de php-->
        
        <ul>
            @foreach ($companias as $c)
                <li>
                    {{$c ->nombre}}
                </li>
                <ul>
                    @php
                    //en $videojuegos voy a almacenar todos los videojuegos de la funcion companias (lo que devuelve esa función)
                        $videojuegos=$c-> videojuegos
                    @endphp
                    @foreach ($videojuegos as $v)
                        <li>{{$v->titulo}}</li>
                    @endforeach
                </ul>
            @endforeach
        </ul>
    
        

        <div class="row justify-content-center">
            <div class="col-9">
                <table class="table">
                    <thead>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Sede</th>
                        <th scope="col">Fecha Fundacion</th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody class="table-group-divider">

                        @php $indice =1; @endphp

                        @foreach($companias as $compania)
                        <tr>
                            <th> {{ $indice++ }}</th>
                            <td> {{ $compania ->nombre }}</td>
                            <td> {{ $compania ->sede }}</td>
                            <td> {{ $compania ->fecha_fundacion}}</td>
                            <td>   
                                <form action="{{ route('companias.show', ['compania'=>$compania->id])}}" method="get">
                                    <button class="btn btn-primary" type="submit">Ver</button>
                                </form>
                            </td>
                             <td>   
                                <form action="{{ route('companias.destroy', ['compania'=>$compania->id])}}" method="POST">
                                    @csrf
                                    {{method_field("DELETE")}}
                                    <button class="btn btn-danger" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                            @php
                                //en $videojuegos voy a almacenar todos los videojuegos de la funcion companias (lo que devuelve esa función)
                                $videojuegos=$compania-> videojuegos;
                            @endphp
                            @foreach ($videojuegos as $v)
                                <tr class="table table-info align-self-center">
                                    <td>{{$v -> titulo}}</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            @endforeach
                       
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <a href="{{ route("companias.create") }}" class=" btn btn-primary">Añadir Nueva</a>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>