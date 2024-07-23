<?php

$clave = "Agucapo123!";

echo password_hash($clave, PASSWORD_DEFAULT);
echo "<br>";
echo password_hash($clave, PASSWORD_BCRYPT);


?>