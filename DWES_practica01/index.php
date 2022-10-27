<?php
//funciones 
require "funciones/ejercicios.php";

//Ejercicio 1;
/* $primos = sacarPrimos(3, 4);
        echo $primos; */
$num1 = 0;
$num2 = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btnEnviar"])) {
    if ($_POST["f"] == "ej1") {
        $inicio = $_POST["num1"];
        $cantidad = $_POST["num2"];
    }
    $primos = sacarPrimos($inicio, $cantidad);
}


//Ejercicio2
//echo comprobarDni("53599848G");
$dniIntroducido = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btnEnviar2"])) {
    if ($_POST["f"] == "ej2") {
        $dniIntroducido = $_POST["dni"];
    }
    if (comprobarDni($dniIntroducido)) {
        $valido = "El dni es válido <br/>";
    } else {

        //TODO: Cambiar el nombre del botón de submit
        $valido = "El dni no es válido <br/>";
    }
}
//ejercicio 3.
//función que genera 4 números aleatorios cada vez que se recarga la página.


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>

<body>
    <h2>Ejercicio 1</h2>

    <div id="ejercicio1" class="form">
        <form action="" method="POST">
            <label for="num1" class="campo">Introduce un número de inicio:
                <input type="text" name="num1"><br />
            </label>
            <label for="num2" class="campo">Introduce la cantidad de primos a devolver:
                <input type="text" name="num2"><br />
            </label>
            <input type="hidden" name="f" value="ej1"><br />
            <input type="submit" name="btnEnviar" value="Enviar">
        </form>
        <?php echo (isset($primos)) ? $primos : "No hay nº primos" ?>

    </div>

    <h2>Ejercicio 2</h2>
    <div id="ejercicio2" class="form">
        <form action="" method="POST">
            <label for="dni" class="campo">Introduce un DNI:
                <input type="text" name="dni"><br />
            </label>
            <input type="hidden" name="f" value="ej2"><br />
            <input type="submit" name="btnEnviar2" value="Enviar">
        </form>
        <?php if (isset($valido)) echo $valido ?>
    </div>


    <h2>Ejercicio 3</h2>
    <br />
    <h2 class='titulo-ej3'>Tablas de Multiplicar</h2>
    <br />
    <div id="ejercicio3" class="container">
        <?php
        //Ejercicio 3

        echo tablasMultiplicar1Al10();
        ?>
    </div>

</body>

</html>