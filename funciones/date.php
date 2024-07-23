<?php
//establecer zona horaria
date_default_timezone_set("America/Argentina/Buenos_Aires");

$dia = date("H:ia");
echo "$dia";

echo "<br>";
echo "<br>";


//para fecha en espa;ol una funcion propia

function fechaEsp(){
    $dia = date("d");
    $mes = date("m");
    $ano = date("Y");

    $diaEsp = [
        "Monday"=>"Lunes",
        "Tuesday"=>"Martes",
        "Wednesday"=>"Miercoles",
        "Thursday"=>"Jueves",
        "Friday"=>"Viernes",
        "Saturday"=>"Sabado",
        "Sunday"=>"Domingo",
    ];

    $mesEsp = [
        "01"=>"Enero",
        "02"=>"Febrero",
        "03"=>"Marzo",
        "04"=>"Abril",
        "05"=>"Mayo",
        "06"=>"Junio",
        "07"=>"Julio",
        "08"=>"Agosto",
        "09"=>"Septiembre",
        "10"=>"Octubre",
        "11"=>"Noviembre",
        "12"=>"Diciembre",
    ];

    $fechaEsp = $diaEsp[date("l")]." ".$dia." ".$mesEsp[$mes]." ". $ano;
    return $fechaEsp;
}

echo fechaEsp();

echo "<br>";
echo "<br>";



?>