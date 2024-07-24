<?php
session_name("login");
session_start();
// session_unset(); eliminar las variables de la sesion
// unset(variable de sesion); elimina esa variable de sesion
session_destroy();//elimina todo de la sesion
header("Location: index.php"); //redireccionar al index

?>
