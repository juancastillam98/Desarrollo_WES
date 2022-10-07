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
    <h1>Ejercicio 2</h1>

    <p>
        Crear un formulario que reciba una frase y un número del 1 al 6. Habrá que mostrar la frase
        en un encabezado de dicho número.Si introducimos "5" y "Hola mundo" se mostrará un encabezado
    <h5>Hola mundo</h5>
    </p>

    <div>
        <form action="ejercicio4_respuesta.php" method="POST">
            <label for="frase">Frase</label>
            <input type="text" name="frase"><br><br>

            <label for="numero">Numero</label>
            <input type="number" name="numero"><br><br>


            <input type="submit" value="Enviar" name="btnEnviar">
        </form>
    </div>

</body>

</html>