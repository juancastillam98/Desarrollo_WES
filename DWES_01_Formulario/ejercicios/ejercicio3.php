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
    <h3>Ejercicio 3</h3>
    <p>Crear un formulario que reciba el nombre y la edad de una persona y
        muestre por pantalla si es menor de edad, es adulta, o está jubilada en función
        a su edad. Además:</p>
    <p>- Convertir la edad a un número entero </p>
    <p>- Convertir el nombre introducido a minúsculas salvo la primera letra, que será mayúscula</p>

    <div>
        <form action="ejercicios/ejercicio3_respuesta.php" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre"><br><br>

            <label for="edad">Edad</label>
            <input type="number" name="edad"><br><br>


            <input type="submit" value="Enviar" name="btnEnviar">
        </form>
    </div>

    <?php
    require "footer.php";
    ?>


</body>

</html>