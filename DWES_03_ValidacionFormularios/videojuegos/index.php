<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btnEnviar"])) {
    $temp_titulo = depurar($_POST["titulo"]);
    $temp_precio = depurar($_POST["precio"]);
    if (empty($temp_titulo)) {
        $error_titulo = "El titulo es obligatorio";
    } else {
        //Validar que como mucho tenga 40 caracteres.
        if (strlen($temp_titulo) >= 40) {
            $error_titulo = "El titulo no puede superar los 40 caracteres";
        } else {
            //si supera la validación, creo la variable.
            $titulo = $temp_titulo;
        }
    }

    if (empty($temp_precio)) {
        $error_precio = "El precio es obligatorio";
    } else {
        $temp_precio = filter_var($temp_precio, FILTER_VALIDATE_FLOAT);
        if (!$temp_precio) {
            $error_precio = "El precio ha de ser un número";
        } else {
            $temp_precio = round($temp_precio, 2);
            if ($temp_precio < 0) {
                $error_precio = "EL precio no puede ser negativo";
            } else if ($temp_precio >= 10000) {
                $error_precio = "EL precio no puede ser igual o superior a 10000";
            } else {
                $precio = $temp_precio;
            }
        }
    }
    if (isset($titulo) && isset($precio)) {
        echo "<p> $titulo</p>";
        echo "<p> $precio</p>";
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



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Videojuegos</title>
</head>

<body>



    <form action="" method="POST">
        <p>Título: <input type="text" name="titulo"><br /></p>
        <span class="error">
            <?php if (isset($error_titulo)) echo $error_titulo ?>
        </span>
        <p>Precio: <input type="text" name="precio"> </p>
        <span class="error">
            <?php if (isset($error_precio)) echo $error_precio ?>
        </span>
        <p><input type="submit" name="btnEnviar" value="Crear"> </p>
    </form>

</body>

</html>