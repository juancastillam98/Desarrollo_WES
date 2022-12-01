<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Nueva Consola</title>
</head>

<body>
    <h1>Nueva consola</h1>
    <div class="container">
        <form action="{{ route('consolas.update', ['consola'=>$consola->id])}}" method="POST">
            {{method_field('PUT')}}
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="form-group my-2">
                            <label class="form-label" for="nombre">Nombre de la consola</label>
                            <input class="form-control" type="text" name="nombre" id="nombre" value="{{$consola->nombre}}">
                        </div>
                        <div class="form-group my-2">
                            <label class="form-label" for="anyoSalida">Anño de Lanzamiento </label>
                            <input class="form-control" type="text" name="anyoSalida" id="anyoSalida" value="{{$consola->anyoSalida}}">
                        </div>
                        <div class="form-group my-2">
                            <label class="form-label" for="generacion">Generacion</label>
                            <select class="form-select" name="generacion" id="generacion" value="{{$consola->generacion}}">
                                <option value="primera">primera</option>
                                <option value="segunda">segunda</option>
                                <option value="tercera">tercera</option>
                                <option value="cuarta">cuarta</option>
                                <option value="quinta">quinta</option>
                            </select>
                        </div>
                        <div class="form-group my-2">
                            <label class="form-label" for="descripcion">Descripción: </label>
                            <input class="form-control" type="text" name="descripcion" id="descripcion" value="{{$consola->descripcion}}">
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
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>