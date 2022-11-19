<?php

session_start();
session_destroy();
header("location: http://localhost/DWES_06_Bases_De_Datos/public/clientes/inicio_sesion.php");
