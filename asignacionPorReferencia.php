<?php

$texto = "hola";
$variable1 = $texto;
$variable2 = &$texto; // va a tener el valor que tenga la
                     // variable que se le asigno asi cambie 
                    //en la ejecucion del programa esta cambia tambien/
$texto = "chau";

//echo $variable1; //imprimira "hola" porque no cambia
echo $variable2; // chau






?>