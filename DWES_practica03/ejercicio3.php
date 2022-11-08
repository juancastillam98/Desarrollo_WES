<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <div class="container my-3">
        <h1>Ejercicio 3</h1>
    </div>

    <?php


    $numeros = [];
    for ($i = 0; $i < 50; $i++) {
        array_push($numeros, $i);
    }
    for ($i = 0; $i < count($numeros); $i++) {
        if ($numeros[$i] % 3 == 0) {
            unset($numeros[$i]);
        }
    }
    ?>
    <div class="container">
        <div class="d-flex flex-row align-items-center">
            <p class="my-auto">Volver al índice</p>
            <a class="btn btn-outline-secondary m-2" href="./index.php" role="button">Volver</a>
        </div>
        <ol class="list-group list-group-numbered">
            <?php foreach ($numeros as $n) { ?>
                <li class="list-group-item">
                    <?php echo $n . "<br/>";   ?>
                </li>
            <?php
            }
            ?>
        </ol>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>