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
    <h3>Ejercicio 2</h3>
    <p>Crear un formulario que reciba un número. Generar una lista dinámicamente con tantos elementos como se haya
        indicado</p>

    <div>
        <form action="ejercicios/ejercicio2_respuesta.php" method="POST">

            <label for="numero">Numero</label>
            <input type="text" name="numero"><br><br>


            <input type="submit" value="Enviar" name="btnEnviar">
        </form>
    </div>

    <?php
    require "footer.php";
    ?>


</body>

</html>