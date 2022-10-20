<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .error {
        color: red;
    }
</style>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temp_nombre = depurar($_POST["nombre"]);
        $temp_apellidos = depurar($_POST["apellidos"]);
        $temp_dni = depurar($_POST["dni"]);

        $patternNombre = "/^[a-zA-Z áéíóúÑñ]+$/";
        $patternDni = "/^[0-9]{8}[a-zA-Z ]{1}+$/";

        //Comprobación del nombre
        if (strlen($temp_nombre) < 2 || strlen($temp_nombre) > 40) {
            $error_nombre = "* El nombre ha de tener entre 2 y 40 caracteres";
        } else {
            if (!preg_match($patternNombre, $temp_nombre)) {
                $error_nombre = "Nombre no válido";
            } else {
                $nombre = $temp_nombre;
            }
        }

        //Comprobación del apellido
        if (strlen($temp_apellidos) < 2 || strlen($temp_nombre) > 40) {
            $error_apellidos = "* Los apellidos han de tener aentre 2 y 40 caracteres";
        } else {
            if (!preg_match($patternNombre, $temp_apellidos)) {
                $error_apellidos = "* Apellido no válido";
            } else {
                $apellidos = $temp_apellidos;
            }
        }

        if (empty($temp_dni)) {
            $error_dni = "* El dni es obligatorio";
        } else {
            if (!preg_match($patternDni, $temp_dni)) {
                $error_dni = "* El formato DNI no es válido";
            } else {
                $dni = $temp_dni;
            }
        }
    }

    function depurar($dato)
    {
        $dato = trim($dato);
        $dato = stripslashes($dato);
        $dato = htmlspecialchars($dato);
        return $dato;
    }
    ?>
    <form action="" method="post">
        <p>Nombre: <input type="text" name="nombre" /></p>
        <span class="error">
            <?php if (isset($error_nombre)) echo $error_nombre ?>
        </span>

        <p>Apellido: <input type="text" name="apellidos" /></p>
        <span class="error">
            <?php if (isset($error_apellidos)) echo $error_apellidos ?>
        </span>
        <p>Dni: <input type="text" name="dni" /></p>
        <span class="error">
            <?php if (isset($error_dni)) echo $error_dni ?>
        </span>


        <input type="submit" name="btnEnviar" value="Enviaar" /></p>
    </form>
</body>

</html>