<?php

$c = 1;
while ($c <= 20) {
    echo "$c - ";
    //CON BREAK DETENER
    if ($c == 10) {
        break;
    }
    $c++;

}
echo "<br>";


$pc = ["SD", "SSD", "GPU", "RAM"];

foreach ($pc as $componente) {
    echo $componente. "<br>";
    if ($componente == "GPU") {
        break;//el ciclo se detendra despues de mostrar gpu y no recorrera mas
    }
}
echo "<br>";


//AHORA CON CONTINUE
foreach ($pc as $componente) {
    if ($componente == "GPU") {
        continue;// cuando llegue a gpu se lo salta 
    }
    //pero el echo debe ir despues de la sentencia con continue
    //sino si lo mostrara antes de verificarlo
    echo $componente. "<br>";
}
//con un for
for ($i=1; $i<=10 ; $i++) { 
    if ($i == 5) {
        continue;//cuando i == 5 se lo salta
    }
    echo $i;
}




?>