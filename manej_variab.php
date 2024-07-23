<?php
$numero = 0;

//unset($numero); //eliminar $variable

/*

//isnull($variable) devuelve TRUE si es nula la variable
if (is_null($numero)) {
    echo "Es nula la variable";
}else {
    echo "No es nula la variable";
}


//empty($variable) //devuelve TRUE si esta vacia la variable
if (empty($numero)) {
    echo "Esta vacia la varieble";
}else {
    echo "No esta vacia la variable";
}

*/

//isset($variable); //comprueba si una variable esta definida y no es null
if (isset($numero)) {
    echo "Esta definida la variable y no es NULL";
}else {
    echo "No esta definida la variable";
}



?>