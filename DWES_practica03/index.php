<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

    <div class="container my-3">
        <h1 class="my-3">Ejercicios</h1>
        <div class="row justify-content-center">
            <div class="col-7">
                <div class="accordion" id="accordionExample">
                    <!--Ejercicio 1-->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="ejercicio1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                <b>Ejercicio 1</b>
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="ejercicio1" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Crea un array que almacene nombres de productos y sus respectivos precios. Muestra en una tabla los productos con sus precios, ordenados alfabéticamente por el nombre del producto. Muestra también el precio total de todos los productos y cuántos productos hay en el array.</p>
                                <a class="btn btn-outline-primary m-2" href="./ejercicio1.php" role="button">Acceder</a>
                            </div>
                        </div>
                    </div>
                    <!--Ejercicio 2-->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="ejercicio2">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                <b>Ejercicio 2</b>
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="ejercicio2" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Modifica el array anterior para que además de los productos y sus precios almacene la cantidad que se ha comprado de cada producto. Muestra en una columna adicional el precio total de cada producto (producto x cantidad) y al final de la tabla el precio total de todos los productos comprados y la cantidad de productos adquiridos.</p>
                                <a class="btn btn-outline-primary m-2" href="./ejercicio2.php" role="button">Acceder</a>
                            </div>
                        </div>
                    </div>
                    <!--Ejercicio 3-->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="ejercicio3">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                <b>Ejercicio 3</b>
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="ejercicio3" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Crea un array que contenga los números del 1 al 50. Elimina mediante un bucle y la función unset los números que sean divisibles entre 3.
                                </p>
                                <a class="btn btn-outline-primary m-2" href="./ejercicio3.php" role="button">Acceder</a>

                            </div>
                        </div>
                    </div>
                    <!--Ejercicio 4-->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="ejercicio4">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                <b>Ejercicio 4</b>
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="ejercicio4" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Crea un array de dos dimensiones que contenga el nombre de cada persona, su apellido y su edad, que será un número aleatorio entre 0 y 100. Muestra los datos en una tabla que además contenga una columna que indique si la persona es menor de edad, mayor de edad, o está jubilada (+65 años). Utiliza funciones y la estructura match.
                                </p>
                                <a class="btn btn-outline-primary m-2" href="./ejercicio4.php" role="button">Acceder</a>

                            </div>
                        </div>
                    </div>
                    <!--Ejercicio 5-->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="ejercicio5">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                <b>Ejercicio 5</b>
                            </button>
                        </h2>
                        <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="ejercicio5" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Crea un array que contenga el DNI y el nombre de cada persona. Muestra esa información en una tabla en la que además indiques si el DNI introducido es correcto. Comprueba si el DNI es correcto o no en una función.
                                </p>
                                <a class="btn btn-outline-primary m-2" href="./ejercicio5.php" role="button">Acceder</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>