<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("http://localhost/DWES_06_Bases_De_Datos/public/clientes/inicio_sesion.php");
}
