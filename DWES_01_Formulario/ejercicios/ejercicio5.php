<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Ejercicio 5</h1>

    <p>
        Formulario que reciba dos números. Devolver el resultado de elevar el primero al segundo.
    </p>

    <div>
        <form action="ejercicios/ejercicio5_respuesta.php" method="POST">
            <label for="numero1">Base</label>
            <input type="text" name="numero1"><br>

            <label for="numero2">Exponente</label>
            <input type="text" name="numero2"><br><br>


            <input type="submit" value="Enviar" name="btnEnviar">
        </form>
    </div>
    <?php
    require "footer.php";
    ?>

</body>

</html>