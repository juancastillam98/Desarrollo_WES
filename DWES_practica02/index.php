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
        $temp_email = depurar($_POST["email"]);
        $tem_edad = depurar($_POST["edad"]);

        $patternNombre = "/^[a-zA-Z áéíóúÑñ]+$/";
        $patternDni = "/^[0-9]{8}[a-zA-Z ]{1}+$/";

        //Validación del DNI
        require "./funciones/ejercicios.php";
        if (empty($temp_dni)) {
            $error_dni = "* El dni es obligatorio";
        } else {
            if (!preg_match($patternDni, $temp_dni)) {
                $error_dni = "* El formato DNI no es válido";
            } else {
                //si el dni tiene el formato adecuado.
                if (!comprobarDni($temp_dni)) {
                    $error_dni = "* El DNI introducido no es válido";
                } else {
                    $dni = $temp_dni;
                }
            }
        }

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


        //Comprobación del email
        //Validación de Email
        $emailCorrecto = filter_var($temp_email, FILTER_VALIDATE_EMAIL);
        if (!$emailCorrecto) {
            $error_email = "* El email introducido es incorrecto";
        } else {
            if (
                str_contains($temp_email, "tonto")
                || str_contains($temp_email, "caca")
                || str_contains($temp_email, "mierda")
            ) {
                $error_email = "* El email introducido contiene palabras malsonantes";
            }
            $email = $temp_email;
        }

        //Validación edad
        $tem_edad = (int)$tem_edad;
        if ($tem_edad <= 0 || $tem_edad > 120) {
            $error_edad = "* La edad introducida no tiene el rango correcto";
        }

        echo "Has introducido <br/>";
        echo "Nombre: " . ucwords(strtolower($nombre)) . "<br/>";
        echo "Apellidos: " . ucwords(strtolower($apellidos)) . "<br/>";
        echo "DNI: " . $dni . "<br/>";
        echo "Nombre: " . ucwords(strtolower($nombre)) . "<br/>";
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
        <!--Dni-->
        <p>Dni: <input type="text" name="dni" /></p>
        <span class="error">
            <?php if (isset($error_dni)) echo $error_dni ?>
        </span>
        <!--nombre-->
        <p>Nombre: <input type="text" name="nombre" /></p>
        <span class="error">
            <?php if (isset($error_nombre)) echo $error_nombre ?>
        </span>
        <!--Apellido-->
        <p>Apellido: <input type="text" name="apellidos" /></p>
        <span class="error">
            <?php if (isset($error_apellidos)) echo $error_apellidos ?>
        </span>

        <!--Edad-->
        <p>Edad: <input type="text" name="edad" /></p>
        <span class="error">
            <?php if (isset($error_edad)) echo $error_edad ?>
        </span>

        <!--Email-->
        <p>Email: <input type="text" name="email" size="50" /></p>
        <span class="error">
            <?php if (isset($error_email)) echo $error_email ?>
        </span>

        <input type="submit" name="btnEnviar" value="Enviaar" /></p>
    </form>

</body>

</html>