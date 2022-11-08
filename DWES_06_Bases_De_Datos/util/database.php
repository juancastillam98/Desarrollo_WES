<?php
$servidor="localhost";
$usuario="root";
$contraseña="";
$base_de_datatos="db_tienda_ropa";

//MYSQLi
//PDO
$conexion=new mysqli($servidor, $usuario, $contraseña, $base_de_datatos) or die("Error en la conexión");

?>