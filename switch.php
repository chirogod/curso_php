<?php
$fruta = "pera";
switch ($fruta) {
    case 'banana':
        echo "es banana";
    break;
    case 'fresa':
        echo "es fresa";
    break;
    default:
        echo "Nose que eres ";
    break;
}
//ejercicio con dias
$dia = 4;
//switch usa compracion == entonces no tiene en cuenta el tipo de dato
switch ($dia) {
    case 1:
        echo "Es lunes";
    break;
    case 2:
        echo "Es martes";
    break;
    case 3:
        echo "Es miercoles";
    break;
    case 4:
        echo "Es jueves";
    break;
    case 5:
        echo "Es viernes";
    break;
    case 6:
        echo "Es sabado";
    break;
    case 7:
        echo "Es domingo";
    break;
    
    default:
        echo "dia no existe, introduce un valor valido";
        break;
}
?>