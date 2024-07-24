<?php
session_name("login");
session_start();



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo "Hola ".$_SESSION["nombre"]." ". $_SESSION["apellido"] ?>
    <br><br>
    <a href="index.php">INICIO</a>
    <br><br>
    <a href="cerrar.php">CERRAR SESION</a>
</body>
</html>