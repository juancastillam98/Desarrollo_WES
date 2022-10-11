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
    <h3>Ejercicio 1</h3>
    <p>Formulario que reciba un nombre y una edad y lo muestra por pantalla</p>

    <div>
        <form action="ejercicio1_respuesta.php" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre"><br><br>

            <label for="edad">Edad</label>
            <input type="number" name="edad"><br><br>


            <input type="submit" value="Enviar" name="btnEnviar">
        </form>
    </div>

    <a href=" index.php">Volver al índice</a>


</body>

</html>