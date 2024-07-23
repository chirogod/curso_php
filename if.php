<?php
$n1 = 5;
$n2 = 7;
if($n1 == $n2){
    echo "son iguales";
}else {
    echo "son diferentes";
}

//otra sintaxis
if($n1 == $n2):
    echo "tambien son iguales con otra sintaxis";
else:
    echo "tambien son diferentes con otra sintaxis";
endif;

//OPERADOR TERNARIO
// (condicion) ? codigo true : codigo false, no se puede poner echos
$resultado = (9>8) ? "mayor" : "menor";
echo $resultado;


//CONDICIONANTE MULTIOPLE CON ELSEIF
//escribir los nombres de los dias dependiendo de la variable DIA
$a = 2;
$b = 4;
if ($a > $b) {
    echo "$a es mayor a $b";
}elseif ($a<$b) {
    echo "$a es menor a $b";
}else {
    echo "son iguales";
}

//condicionales anidadas
if (condition) {
    if (condition) {
        # code...
    }
}elseif (condition) {
    # code...
}else {
    # code...
}


?>