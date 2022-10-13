<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <h2>Ejercicio 1</h2>
    <div id="ejercicio1">
        <form action="" method="POST">
            <label for="num1">Introduce un número de inicio:
                <input type="text" name="num1"><br />
            </label>
            <label for="num2">Introduce la cantidad de primos a devolver:
                <input type="text" name="num2"><br />
            </label>
            <input type="hidden" name="f" value="ej1"><br />
            <input type="submit" name="btnEnviar" value="Enviar">
        </form>

        <?php
        //funciones 
        require "funciones/ejercicio1.php";

        //Ejercicio 1;
        /* $primos = sacarPrimos(3, 4);
        echo $primos; */
        $num1 = 0;
        $num2 = 0;
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btnEnviar"])) {
            if ($_POST["f"] == "ej1") {
                $num1 = $_POST["num1"];
                $num1 = $_POST["num2"];
            }
        }
        $primos = sacarPrimos($num1, $num2);
        echo $primos;

        ?>
    </div>


    <h2>Ejercicio 2</h2>
    <div id="ejercicio2">
        <form action="" method="POST">
            <label for="dni">Introduce un DNI:
                <input type="text" name="dni"><br />
            </label>
            <input type="hidden" name="f" value="ej2"><br />
            <input type="submit" name="btnEnviar" value="Enviar">
        </form>

        <?php
        //Ejercicio2
        //echo comprobarDni("53599848G");
        $dniIntroducido = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btnEnviar"])) {
            if ($_POST["f"] == "ej2") {
                $dniIntroducido = $_POST["dni"];
            }
        }

        if (comprobarDni($dniIntroducido)) {
            echo "El dni es válido <br/>";
        } else {
            echo "El dni introducido no es correcto <br/>";
        }
        ?>
    </div>
    <h2>Ejercicio 3</h2>
    <?php

    ?>
</body>

</html>