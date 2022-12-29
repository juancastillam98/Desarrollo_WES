<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=de vice-width, initial-scale=1">
    <title>Editar Producto</title>  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h1>Editar Producto {{ $producto ->nombre}}</h1>
    <div class="container">
        <form action="{{ route('productos.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="form-group my-2">
                        <label class="form-label" for="nombre">Nombre del producto</label>
                        <input class="form-control" type="text" name="nombre" id="nombre" value="{{$producto->nombre}}">
                    </div>
                    <div class="form-group my-2">
                        <label class="form-label" for="precio">Precio </label>
                        <input class="form-control" type="text" name="precio" id="precio" value="{{$producto->precio}}">
                    </div>
                    <div class="form-group my-2">
                        <label class="form-label" for="fecha_lanzamiento">Fecha Lanzamiento</label>
                        <input class="form-control" type="date" name="fecha_lanzamiento" id="fecha_lanzamiento" value="{{$producto->fecha_lanzamiento}}">
                    </div>

                    <div class="form-group my-2">
                        <label class="form-label" for="descripcion">Descripción: </label>
                        <input class="form-control" type="text" name="descripcion" id="descripcion" value="{{$producto->descripcion}}">
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label" for="categoria_id">Categoria</label>
                        <select class="form-select" name="categoria_id" id="categoria_id" value="{{$producto->categoria}}">
                            @foreach ($categorias as $c)
                                <option value="{{$c ->id}}">{{$c->nombre}}</option>
                            @endforeach
                        </select>
                    </div>

                    
                    <div class="d-inline">
                        <button class="btn btn-primary" type="submit" name="btnAnadir">Añadir</button>
                    </div>
                    <div class="d-inline">
                        <a class="btn btn-secondary my-5" href="./">Volver nuevo</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>    
</body>
</html>