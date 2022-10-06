<?php
//lo mejor es mirar la guía de php
echo date("l j Y");

//mostrar la fecha y hora en el mismo formato que el ordendaor
echo "Forma 1<br/>";
    echo date("g:i");
    echo "<br/>";
    echo date("d/m/Y");

    echo "<br/>Forma 2<br/>";
    echo date("g:h a");
    echo "<br/>";
    echo date("d/m/Y");

    echo "<br/>";

    $mes="";
    switch(date("F")){
        case "January":
            $mes="Enero";
            break;
        case "February":
            $mes="Febrero";
            break;
        case "March":
            $mes="Marzo";
            break;
        case "April":
            $mes="Abril";
            break;
        case "May":
            $mes="Mayo";
            break;
        case "June":
            $mes="Junio";
            break;
        case "July":
            $mes="Julio";
            break;
        case "August":
            $mes="Agosto";
            break;
        case "September":
            $mes="Septiembre";
            break;
        case "October":
            $mes="Octubre";
            break;
        case "November":
            $mes="Noviembre";
            break;
        case "December":
            $mes="Diciembre";
            break;
    }


    switch(date("D")){
        case 'Mon':
                echo "Hoy es Lunes ";
                echo date("j ");
                echo $mes;
            break;
        case 'Tu':
                echo "Hoy es Martes ";
                echo date("j ");
                echo $mes;
            break;
        case 'Wed':
                echo "Hoy es Miércoles ";
                echo date("j ");
                echo $mes;
            break;
        case 'Thu':
                echo "Hoy es Jueves ";
                echo date("j ");
                echo $mes;
            break;
        case 'Fri':
                echo "Hoy es Viernes ";
                echo date("j ");
                echo $mes;
            break;
        case 'Sat':
                echo "Hoy es Sábado ";
                echo date("j ");
                echo $mes;
            break;
        case 'Sun':
                echo "Hoy es Domingo ";
                echo date("j ");
                echo $mes;
            break;
    }
?>