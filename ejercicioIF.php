<?php
//edad de usuario y si es mayor de edad, aparece mensaje indicandolo
$edad = 17;
if ($edad >= 18) {
    echo "Es mayor de edad ";
}else{
    echo "No es mayor de edad";
}



//en un almacen se hace 20% descuento a clientes cuya
//compra supero los $100, cuanto paga cada persona por su compra
$compra = 90;
if ($compra > 100) {
    $compra -= ($compra*20)/100;
    echo "pagara:$$compra";
}else{
    echo "la compra no supera los $100";
}


/*Calcular el total que una persona debe pagar en una gomeria
el precio de cada llanta es $800 si se compran menos de 5 llantas,
si se compran 5 o mas llantas cada una vale $700 */

$llantasCompro = 4;
$valorLlanta;
if($llantasCompro < 5){
    $valorLlanta = 800;
    $total = $llantasCompro*$valorLlanta;
}else {
    $valorLlanta = 700;
    $total = $llantasCompro*$valorLlanta;
}
echo " el total a pagar es $total, ya que se compraron $llantasCompro y cada una vale $valorLlanta";


//determinar si un alumno aprueba o reprueba un curso, sabiendo
//que aprobara si su promedio de tres notas es mayor o igual a 7,
//reprueba en caso contrario
$nota1 = 6;
$nota2 = 7;
$nota3 = 8;
$promedio = ($nota1+$nota2+$nota3)/3;
if($promedio >=7){
    echo "Alumno aprobado con promedio: $promedio";
}else {
    echo "alumno reprobado con promedio: $promedio";
}

//ejercicio con operador ternario
/* hacer un programa que calcule el total a pagar por la comopra
de camisas. si se compran 3 camisa o mas se aplica un 20% descuento
en el total de la compra, si son menos de 3 un 10% en el total. */

$camisasCompradas = 2;
$precioCamisa = 10;
$totalCompra = $camisasCompradas*$precioCamisa;
$totalConDescuento = ($camisasCompradas >= 3) ? $totalCompra-($totalCompra*0.20) : $totalCompra-($totalCompra*0.10);
echo "El precio con descuento es $totalConDescuento" ;


//ejercicio con condicionantes multiples

//escribir los nombres de los dias dependiendo de la variable DIA
$dia = "martes";
if ($dia == "lunes") {
    echo "Hoy es lunes";
}elseif ($dia == "martes") {
    echo "Hoy es martes";
}elseif ($dia == "miercoles") {
    echo "Hoy es miercoles";
}elseif ($dia == "jueves") {
    echo "Hoy es jueves";
}elseif ($dia == "viernes") {
    echo "Hoy es viernes";
}elseif ($dia == "sabado") {
    echo "Hoy es sabado";
}elseif ($dia == "domingo") {
    echo "Hoy es domingo";
}else {
    echo "Ese dia no existe";
}

/* en una fabrica de computadoras se ofrecen descuentos.
si una persona lleva menos de 5 computadoras tiene 10% de descuento en el
total de la compra, si lleva entre 5 y 10 tiene 20% de descuento,
si son mas de 10 tiene 40%. cada computadora vale $700 */

$precioComputadora = 700;
$computadorasCompradas = 1;
$totalCompraCompus = $precioComputadora*$computadorasCompradas;
if ($computadorasCompradas < 5) {
    $totalCompraCompus -= $totalCompraCompus*0.10;
}elseif ($computadorasCompradas >= 5 && $computadorasCompradas <= 10 ) {
    $totalCompraCompus -= $totalCompraCompus*0.20;
}else {
    $totalCompraCompus -= $totalCompraCompus*0.40;
    
}
echo "el total es $totalCompraCompus";

//ejercicio condicionales anidadas
/* pedir a usuario la edad y genero para indicar si puede jubilarse.
el hombre se puede jubilar cuando tenga 60 anos o mas,
la mujer si tiene 54 o mas. */

$anos = 52;
$genero = "mujer";

if ($genero == "hombre") {
    if ($anos>=60) {
        echo "Puede jubilarse siendo $genero a los $anos anos";
    }else {
        echo "no puede jubilarse siendo $genero a los $anos anos";
    }
}elseif ($genero == "mujer") {
    if($anos>=54){
        echo "puede jubilarse siendo $genero a los $anos anos";
    }else {
        echo "no puede jubilarse siendo $genero a los $anos anos";
    }
}else {
    echo "Datos incorrectos";
}

?>