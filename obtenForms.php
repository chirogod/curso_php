<?php
/* para forms_get_post.php
$nombre = $_POST["nombre"];
$asignatura = $_POST["asignatura"];
$frutas = $_POST["frutas"];
echo "$nombre - $asignatura";
*/

//para select_checkb.php y obtener todos los select multiples que se seleccionaron
foreach ($_POST['asignatura'] as $asig ) {
    echo $asig . " - ";
}
echo "<br>";echo "<br>";echo "<br>";
//para select_checkb.php y obtener todos los checkbox multiples que se seleccionaron
foreach ($_POST['frutas'] as $frut) {
    echo "$frut -";
}



?>