<?php

$fecha1 = '2021/11/29';
$fecha2 = '2021-11-30';
$numeros = "uno dos tres cuatro cinco seis siete";

$array_fecha1 = explode("/",$fecha1);
echo $array_fecha1[2];

echo "<br>";

$array_fecha2 = explode("-",$fecha2);
echo $array_fecha2[1];

echo "<br>";

$array_numeros = explode(" ",$numeros,3);
echo $array_numeros[2];


?>