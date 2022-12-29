<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ver Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
<div class="container my-5">
    <h1>Información producto</h1>
    <p>Nombre: {{ $producto ->nombre}}</p>
    <p>Precio: {{ $producto ->precio}}</p>
    <p>Descripción: {{ $producto ->descripcion}}</p>
    <p>Fecha Lanzamiento: {{ $producto ->fecha_lanzamiento}}</p>

<form action="{{ route('productos.edit', ['producto'=>$producto->id])}}" method="GET">
    <button class="btn btn-primary" type="submit">Editar</button>
 </form>  
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>