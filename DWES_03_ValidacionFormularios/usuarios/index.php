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
        $temp_fecha = depurar($_POST["fecha"]);

        $patternNombre = "/^[a-zA-Z áéíóúÑñ]+$/";
        $patternDni = "/^[0-9]{8}[a-zA-Z ]{1}+$/";
        //Fecha:
        /**EL día solo puede empezar por 0,1,2 o 3.
         * El mes por 0 o 1
         * Y el año por 20 o 19
         */
        $patternFecha = "/^[0-3][0-9][\/][0-1][0-2][\/](19|20)[0-9]{2}+$/";

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
        //Validación del DNI
        if (empty($temp_dni)) {
            $error_dni = "* El dni es obligatorio";
        } else {
            if (!preg_match($patternDni, $temp_dni)) {
                $error_dni = "* El formato DNI no es válido";
            } else {
                $dni = $temp_dni;
            }
        }

        //Comprobación del email
        //Validación de Email
        $emailCorrecto = filter_var($temp_email, FILTER_VALIDATE_EMAIL);
        if (!$emailCorrecto) {
            $error_email = "* El email introducido es incorrecto";
        } else {
            $email = $temp_email;
        }

        //Validación fecha
        if (!preg_match($patternFecha, $temp_fecha)) {
            $error_fecha = "* La fecha introducida no tiene el formato adecuado (dd/MM/YYYY)";
        } else {
            $fecha = $temp_fecha;
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
        <!--Email-->
        <p>Email: <input type="text" name="email" /></p>
        <span class="error">
            <?php if (isset($error_email)) echo $error_email ?>
        </span>

        <!--Fecha-->
        <p>Fecha: <input type="text" name="fecha" /></p>
        <span class="error">
            <?php if (isset($error_fecha)) echo $error_fecha ?>
        </span>


        <input type="submit" name="btnEnviar" value="Enviaar" /></p>
    </form>
</body>

</html>