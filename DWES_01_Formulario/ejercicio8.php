<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!--Crear un formulario que reciba el nombre de un videojuego, su consola, y si es edición especial.
    
    Se mostrará por pantalla el nombre del juego junto a su precio. El precio será:
    40€ si es de la consola Switch, 60€ si es de PS4, y 70€ si es de PS5. La consola se elegirámediante un campo select.
    Si el juego es edición especial, valdrá un 25% más. La edición especial se marcará con un checkbox. 
    -->

    <form action="" method="POST">
        <label for="nombreVideojuego">Introduce un videojuego:
            <input type="text" name="nombreVideojuego">
        </label>
        <br />
        <label for="cars">Elige una consola</label>

        <select name="consola" id="consola">
            <option value="Switch">Switch</option>
            <option value="PS4">PS4</option>
            <option value="PS5">PS5</option>
        </select>
        <br />
        <label for="especial"> Edición Especial
            <input type="checkbox" name="especial">
        </label>
        <br />
        <input type="submit" name="btnEnviar" value="Enviar"> <br />
    </form>

</body>

</html>
<?php
$consola = "";
$precio = 40;
$esEdicioónEspecial = false;
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btnEnviar"])) {
    $nombre = $_POST["nombreVideojuego"];
    $consola = $_POST["consola"];
    if (isset($_POST['especial'])) {
        $esEdicioónEspecial = true;
    }
}
switch ($consola) {
    case "Switch":
        $precio = 40;
        break;
    case "PS4":
        $precio = 60;
        break;
    case "PS5":
        $precio = 70;
        break;
}
if ($esEdicioónEspecial) {
    $precio *= 1.25;
}
echo "<br/>El $nombre vale $precio en $consola";
?>