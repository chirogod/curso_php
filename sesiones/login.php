<?php
if ($_POST["usuario"] == "Augusto" && $_POST["clave"] == "1234") {
    session_name("login");
    session_start();
    $_SESSION["nombre"] = "Augusto";
    $_SESSION["apellido"] = "Rolandelli";
    $_SESSION["pais"] = "Argentina";

    //echo "sesion iniciada";
    //para redireccionar al usuario a otra pagina
    header("Location: contador.php");

} else {
    echo "datos incorrectos";
}




?>