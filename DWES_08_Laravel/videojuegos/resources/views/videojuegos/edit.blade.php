<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar videojuego</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo asset('css/miCSS.css')?>" type="text/css"> 

</head>
  <body>

    <h1>Editar videojuego</h1>
    <div class="row">
        <div class="col-9">
             <form action=" {{ route('videojuegos.update', ['videojuego'=>$videojuego->id])}}" method="POST">
                {{method_field('PUT')}}
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="form-group my-2">
                        <label class="form-label" for="nombre">Nombre del videojuego</label>
                        <input class="form-control" type="text" name="titulo" id="titulo" value="{{$videojuego->titulo}}">
                    </div>
                    <div class="form-group my-2">
                        <label class="form-label" for="precio">Precio </label>
                        <input class="form-control" type="text" name="precio" id="precio" value="{{$videojuego->precio}}">
                    </div>
                    <div class="form-group my-2">
                        <label class="form-label" for="pegi">Pegi</label>
                        <select class="form-select" name="pegi" id="pegi" value="{{$videojuego->pegi}}">
                            <option value="3">3</option>
                            <option value="7">7</option>
                            <option value="12">12</option>
                            <option value="16">16</option>
                            <option value="18">18</option>
                        </select>
                    </div>
                    <div class="form-group my-2">
                        <label class="form-label" for="descripcion">Descripción: </label>
                        <input class="form-control" type="text" name="descripcion" id="descripcion" value="{{$videojuego->descripcion}}">
                    </div>
                    <div class="d-inline">
                        <button class="btn btn-primary" type="submit" name="btnAnadir">Editar</button>
                    </div>
                    <div class="d-inline">
                        <a class="btn btn-secondary my-5" href="./">Volver nuevo</a>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>