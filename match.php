<?php
//match tiene en cuenta el tipo de dato
$a = 6;
$b = 2;
$c = 6;
$resultado = match ($a) {
    $b => "el valor de la variable 'a: $a' es igual al de b",
    $c => "el valor de la variable 'a: $a' es igual al de c",
    default => "el valor de la variable 'a: $a' no coincide con ninguna variable"
};
echo $resultado;



$edad = 39;
$res = match (TRUE) {
    $edad >= 60 => "Eres mayor a 60 anos",
    $edad >= 30 => "Eres menor a 30 anos y menor a 60 anos",
    default => "Eres menor a 30 anos"
};
echo $res;








?>