<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Categorias</h1>
    <!--Sacar todos los productos de todas las categorias-->
    <ul>
        @foreach ($categorias as $c)
            <li>{{$c->nombre}}</li>
            <ul>
                @php
                //productos a secas es la función del modelo
                    $productos = $c -> productos
                @endphp
                @foreach ($productos as $p)
                    <li>{{$p ->nombre}}</li>
                @endforeach
            </ul>
        @endforeach
    </ul>
</body>
</html>