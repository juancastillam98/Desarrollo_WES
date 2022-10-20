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
    <!--Crear un formulario que reciba el nombre de un videojuego, su consola, y si es edición especial.
    
    Se mostrará por pantalla el nombre del juego junto a su precio. El precio será:
    40€ si es de la consola Switch, 60€ si es de PS4, y 70€ si es de PS5. La consola se elegirámediante un campo select.
    Si el juego es edición especial, valdrá un 25% más. La edición especial se marcará con un checkbox. 

-->

    <?php

    $consola = "";
    $precio = 40;
    $esEdicioónEspecial = false;
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btnEnviar"])) {
        $temp_nombre = depurar($_POST["nombreVideojuego"]);
        $temp_descripcion = depurar($_POST["descripcion"]);

        if(isset($_POST["consola"])){
            $temp_consola =depurar( $_POST["consola"]);
        }else{
            $temp_consola="";
        }
        if (isset($_POST['especial'])) {
            $esEdicioónEspecial = true;
        }

        //Comprobación del nombre
        if (empty($temp_nombre)) {
            $error_nombre = "El nombre no puede quedar vacío.";
        } else {
            if (strlen($temp_nombre) >= 40) {
                $error_nombre = "El nombre no puede superar los 40px";
            } else {
                $nombre = $temp_nombre;
            }
        }

        //Comprobación de la descripción
        if (empty($temp_descripcion)) {
            $error_descripcion = "La descripción no puede quedar vacía.";
        } else {
            if (strlen($temp_descripcion) > 250) {
                $error_descripcion = "La descripción no puede superar los 250 caracteres";
            } else {
                $descripcion = $temp_descripcion;
            }
        }

        echo "Nombre: $nombre <br/>";
        echo "Descripción: $descripcion <br/>";
        echo "Consola: $consola <br/>";
        echo "Edición especial: "; echo $esEdicioónEspecial ? "si" : "no"."<br/>";
        echo "Precio: $precio <br/>";
    }

    function depurar($dato)
    {
        $dato = trim($dato);
        $dato = stripslashes($dato);
        $dato = htmlspecialchars($dato);
        return $dato;
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
    
    ?>


    <form action="" method="POST">
        <label for="nombreVideojuego">Introduce un videojuego:
            <input type="text" name="nombreVideojuego">
        </label>
        <span class="error">
            <?php if (isset($error_nombre)) echo "* $error_nombre" ?>
        </span>
        <br />
        <br />
        <label for="cars">Elige una consola</label>

        <select name="consola" id="consola">
            <option value="" selected disabled hidden></option>
            <option value="Switch">Switch</option>
            <option value="PS4">PS4</option>
            <option value="PS5">PS5</option>
        </select>
        <br />
        <br />
        <label for="descripción"> Descripción
            <textarea type="textarea" name="descripcion" rows="5" cols="25"></textarea>
        </label>
        <span class="error">
            <?php if (isset($error_descripcion)) echo "* $error_descripcion" ?>
        </span>
        <br />
        <br />
        <label for="especial"> Edición Especial
            <input type="checkbox" name="especial">
        </label>
        <br />
        <br />
        <input type="submit" name="btnEnviar" value="Enviar"> <br />
    </form>

</body>

</html>