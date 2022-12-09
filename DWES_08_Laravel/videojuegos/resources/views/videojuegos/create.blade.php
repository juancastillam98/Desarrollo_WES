<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Nuevo videojuego</title>
</head>

<body>
    <h1>Nuevo videojuego</h1>
    <div class="container">
        <!--El token @csrf es para proteger la información-->
        <form action="{{ route('videojuegos.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="form-group my-2">
                        <label class="form-label" for="nombre">Nombre del videojuego</label>
                        <input class="form-control" type="text" name="titulo" id="titulo">
                    </div>
                    <div class="form-group my-2">
                        <label class="form-label" for="precio">Precio </label>
                        <input class="form-control" type="text" name="precio" id="precio">
                    </div>
                    <div class="form-group my-2">
                        <label class="form-label" for="pegi">Pegi</label>
                        <select name="pegi" id="pegi">
                            <option value="" selected disabled hidden> - Selecciona una edad -</option>
                            <option value="3">3</option>
                            <option value="7">7</option>
                            <option value="12">12</option>
                            <option value="16">16</option>
                            <option value="18">18</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label" for="compania_id">Compañia</label>
                        <select class="form-select" name="compania_id" id="compania_id">
                            @foreach ($companias as $c)
                                <option value="{{$c ->id}}">{{$c->nombre}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group my-2">
                        <label class="form-label" for="descripcion">Descripción: </label>
                        <input class="form-control" type="text" name="descripcion" id="descripcion">
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