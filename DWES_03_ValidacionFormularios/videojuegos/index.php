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
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btnEnviar"])) {
        $temp_titulo = depurar($_POST["titulo"]);
        $temp_precio = depurar($_POST["precio"]);
        if (empty($temp_titulo)) {
            $error_titulo = "El titulo es obligatorio";
        }

        if (empty($temp_precio)) {
            $error_precio = "El precio es obligatorio";
        }
    }
    function depurar($dato)
    {
        $dato = trim($dato);
        $dato = stripslashes($dato);
        $datp = htmlspecialchars($dato);
        return $dato;
    }
    ?>


    <form action="" method="POST">
        <p>Título: <input type="text" name="titulo"><br /></p>
        <span class="error">
            <?php if (isset($error_titulo)) echo $error_titulo ?>
        </span>
        <p>Precio: <input type="text" name="precio"> </p>
        <span class="error">
            <?php if (isset($error_precio)) echo $error_titulo?>
        </span>
        <p><input type="submit" name="btnEnviar" value="Crear"> </p>
    </form>

</body>

</html>