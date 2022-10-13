<h1>Ejercicios clases formularios</h1>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de ejercicios</title>
</head>

<body>
    <div id="eje1">
        <h3>Ejercicio 1</h3>
        <p>Formulario que reciba un nombre y una edad y lo muestra por pantalla</p>

        <form action="index2.php/#eje1" method="post">
            <label>Nombre</label><br>
            <input type="text" name="nombre"><br>
            <label>Edad</label><br>
            <input type="text" name="edad"><br>
            <input type="hidden" name="f" value="ej1">
            <input type="submit" value="Enviar">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($_POST["f"] == "ej1") {
                $edad = (int)$_POST["edad"];
                $nombre = ucwords(strtolower($_POST["nombre"]));
                $nombre = ucwords($nombre);
            }
            echo "Te llamas $nombre y tienes $edad";
        }
        ?>

    </div>

    <div id="eje2">
        <h3>Ejercicio 2</h3>
        <p>Crear un formulario que reciba un número. Generar una lista dinámicamente con tantos elementos como se haya
            indicado</p>

        <form action="index2.php/#eje2" method="POST">

            <label for="numero">Numero</label>
            <input type="text" name="numero"><br><br>

            <input type="hidden" name="f" value="ej2">
            <input type="submit" value="Enviar" name="btnEnviar">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($_POST["f"] == "ej2") {
                $num1 = (int)$_POST["numero"];
            }
            echo "<ul>";
            for ($i = 1; $i <= $num1; $i++) {
                echo " <li>$i</li>";
            }
            echo "</ul>";
        }
        ?>

    </div>

    <div id="eje3">
        <h3>Ejercicio 3</h3>
        <p>Crear un formulario que reciba el nombre y la edad de una persona y
            muestre por pantalla si es menor de edad, es adulta, o está jubilada en función
            a su edad. Además:</p>
        <p>- Convertir la edad a un número entero </p>
        <p>- Convertir el nombre introducido a minúsculas salvo la primera letra, que será mayúscula</p>

        <form action="index2.php/#eje3" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre"><br><br>

            <label for="edad">Edad</label>
            <input type="number" name="edad"><br><br>

            <input type="hidden" name="f" value="ej3">

            <input type="submit" value="Enviar" name="btnEnviar">
        </form>

        <?php
        $edad = 0;
        $nombre = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($_POST["f"] == "ej3") {
                $num1 = (int)$_POST["numero"];
                $edad = (int)$_POST["edad"];
                $nombre = ucwords(strtolower($_POST["nombre"]));
                $nombre = ucfirst($nombre);
            }
        }

        echo "Te llamas " . $nombre . " y tienes " . $edad . " años";
        if ($edad < 18 && $edad >= 0) {
            echo "<p> $nombre es menor  de edad";
        } elseif ($edad >= 18 && $edad <= 65) {
            echo "<p> $nombre es adulto";
        } elseif ($edad >= 65 && $edad <= 130) {
            echo "<p> $nombre está jubilado";
        } else {
            echo "<p> Edad incorrecta </p>";
        }

        echo " <br/><a href='ejercicio3.php'>Volver al formulario</a>";
        ?>

    </div>

    <div id="eje4">
        <h3>Ejercicio 4</h3>
        <p>Crear un formulario que reciba una frase y un número del 1 al 6. Habrá que mostrar la frase
            en un encabezado de dicho número.</p>
        <form action="index2.php/#eje4" method="POST">
            <label for="frase">Frase</label>
            <input type="text" name="frase"><br><br>

            <label for="numero">Numero</label>
            <input type="number" name="numero"><br><br>

            <input type="hidden" name="f" value="ej4">
            <input type="submit" value="Enviar" name="btnEnviar">
        </form>

        <?php
        $numero = 0;
        $numero = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if ($_POST["f"] == "ej4") {
                $numero = (int)$_POST["numero"];
                $frase = $_POST["frase"];
            }
        }
        if ($numero < 0 || $numero >= 7) {
            echo "<p>Numero incorrecto</p>";
        } else {
            echo "<h$numero> $frase </h$numero>";
        }
        echo " <br/><a href='ejercicio4.php'>Volver al formulario</a>";

        ?>
    </div>

    <div id="eje5">
        <h3>Ejercicio 5</h3>
        <p>Formulario que reciba dos números. Devolver el resultado de elevar el primero al segundo</p>

        <form action="index2.php/#eje5" method="POST">
            <label for="numero1">Base</label>
            <input type="text" name="numero1"><br>

            <label for="numero2">Exponente</label>
            <input type="text" name="numero2"><br><br>

            <input type="hidden" name="f" value="ej5">

            <input type="submit" value="Enviar" name="btnEnviar">
        </form>

        <?php
        $num1 = 0;
        $num2 = 0;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "click en enviar";

            if ($_POST["f"] == "ej5") {
                $num1 = (int)$_POST["numero1"];
                $num2 = (int)$_POST["numero2"];
            }
        }
        //echo "$num1 ^ $num2 es ".pow($num1, $num2);
        if ($num1 < 0) {
            echo "No se admiten exponentes negativos </br>";
        } elseif ($num2 == 0) {
            echo "$num1 ^ $num2 es " . 1;
        } else {
            $resultado = $num1;
            for ($i = 1; $i < $num2; $i++) {
                $resultado = $resultado * $resultado;
            }
            echo "$num1 ^ $num2 es " . $resultado;
        }

        ?>

    </div>

    <div id="eje6">
        <h3>Ejercicio 6</h3>
        <p>Formulario que reciba pida un número y devuelva el factorial de ese mismo</p>

        <form action="index2.php/#eje6" method="POST">
            <label for="numero">Numero 1</label>
            <input type="text" name="numero"><br>
            <input type="hidden" name="f" value="ej6">

            <input type="submit" value="Enviar" name="btnEnviar">
        </form>
        <?php
        $numero = 0;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($_POST["f"] == "ej6") {
                $numero = (int)$_POST["numero"];
            }
        }
        require "funciones/ej6.php";
        echo calculaFactorial($numero);
        ?>

    </div>

    <div id="eje8">
        <h3>Ejercicio 8</h3>
        <p>Crear un formulario que reciba un número. Mostrar la tabla de multiplicar de ese número.
            Hacerlo mediante una tabla HTML.
        </p>
        <form action="index2.php/#eje8" method="POST">
            <label for="numero">Introduce un número</label>
            <input type="text" name="numero"><br>
            <input type="hidden" name="f" value="ej8_tablas">
            <input type="submit" value="Enviar" name="btnEnviar">
        </form>

        <?php
        $numero = 0;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if ($_POST["f"] == "ej8_tablas") {
                $numero = (int)$_POST["numero"];
            }
        }
        require "funciones/eje8_tablas.php";
        echo calcularTablaNumero($numero);
        ?>

    </div>

</body>

</html>
<div id="eje8">
    <h3>Ejercicio 8</h3>
    <p>Se mostrará por pantalla el nombre del juego junto a su precio. El precio será:
        40€ si es de la consola Switch, 60€ si es de PS4, y 70€ si es de PS5. La consola se elegirámediante un campo
        select.
        Si el juego es edición especial, valdrá un 25% más. La edición especial se marcará con un checkbox.
    </p>
    <form action="" method="POST">
        <label for="nombreVideojuego">Introduce un videojuego:
            <input type="text" name="nombreVideojuego">
        </label>
        <br />
        <label for="cars">Elige una consola</label>

        <select name="consola" id="consola">
            <option value="Switch">Switch</option>
            <option value="PS4">PS4</option>
            <option value="PS5">PS5</option>
        </select>
        <br />
        <label for="especial"> Edición Especial
            <input type="checkbox" name="especial">
        </label>
        <br />
        <input type="submit" name="btnEnviar" value="Enviar"> <br />
    </form>

    <?php
    $consola = "";
    $precio = 40;
    $esEdicioónEspecial = false;
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btnEnviar"])) {
        $nombre = $_POST["nombreVideojuego"];
        $consola = $_POST["consola"];
        if (isset($_POST['especial'])) {
            $esEdicioónEspecial = true;
        }
    }
    switch ($consola) {
        case "Switch":
            $precio = 40;
            break;
        case "PS4":
            $precio = 60;
            break;
        case "PS5":
            $precio = 70;
            break;
    }
    if ($esEdicioónEspecial) {
        $precio *= 1.25;
    }
    echo "<br/>El $nombre vale $precio en $consola";
    ?>


</div>
</body>

</html>