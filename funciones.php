<?php

function saludo(){
    echo "Hola como estas?";
}

saludo();
saludo();
echo "<br>";
echo "<br>";
function chau($nombre){
    echo "chau $nombre";
}
chau("martita");
echo "<br>";
$name = "Augusto";
chau($name);

echo "<br>";echo "<br>";

$saludo = saludo();
//echo $saludo; no funciona porque saludo no tiene nada dentro, solo llama a la funcion
//por eso se usa return en las funciones

function comoEstas(){
    return "Hola, como te va?";
}
$comoteva = comoEstas();
echo "$comoteva";
//o
echo comoEstas();

echo "<br>";echo "<br>";

//FUNCION PARA CALCULAR PROMEDIO DE 3 NOTAS
function promedio($nota1, $nota2, $nota3){
    $promedio = ($nota1+$nota2+$nota3)/3;
    return $promedio;
}
$prom = promedio(6,7,8);
echo "el promeido es: $prom <br>";
//o directamente
echo "el promedio es: ". promedio(6,7,8) . "<br>";
echo "el promedio es: ". promedio(4,7,7) . "<br>";
echo "el promedio es: ". promedio(2,2,2) . "<br>";

?>