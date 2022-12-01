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
        <form action="{{ route('companias.update', ['compania'=>$compania->id])}}" method="POST">
            {{method_field('PUT')}}
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="form-group my-2">
                        <label class="form-label" for="nombre">Nombre de la compania</label>
                        <input class="form-control" type="text" name="nombre" id="nombre" value="{{$compania->nombre}}">
                    </div>
                    <div class="form-group my-2">
                        <label class="form-label" for="sede">Sede </label>
                        <input class="form-control" type="text" name="sede" id="sede" value="{{$compania->sede}}">
                    </div>
                    <div class="form-group my-2">
                        <label class="form-label" for="fechaFundacion">Fecha Fundación</label>
                        <input type="date" name="fechaFundacion" id="fechaFundacion" value="{{$compania->fecha_fundacion}}">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>